(function ($, Drupal) {

  'use strict';

  Drupal.FieldGroup = Drupal.FieldGroup || {};
  Drupal.FieldGroup.Effects = Drupal.FieldGroup.Effects || {};

  /**
   * This script transforms a set of fieldsets into a stack of horizontal
   * tabs. Another tab pane can be selected by clicking on the respective
   * tab.
   *
   * Each tab may have a summary which can be updated by another
   * script. For that to work, each fieldset has an associated
   * 'horizontalTabCallback' (with jQuery.data() attached to the fieldset),
   * which is called every time the user performs an update to a form
   * element inside the tab pane.
   */
  Drupal.behaviors.horizontalTabs = {
    attach: function (context) {

      var width = drupalSettings.widthBreakpoint || 640;
      var mq = '(max-width: ' + width + 'px)';

      if (window.matchMedia(mq).matches) {
        return;
      }

      $(context).find('[data-horizontal-tabs]').once('horizontal-tabs').each(function() {
        var horizontal_tabs_clearfix = this;
        $(this).find('> [data-horizontal-tabs-panes]').each(function () {
          var $this = $(this).addClass('horizontal-tabs-panes');
          var focusID = $(':hidden.horizontal-tabs-active-tab', this).val();
          var tab_focus;

          // Check if there are some details that can be converted to horizontal-tabs
          var $details = $this.find('> details');
          if ($details.length === 0) {
            return;
          }

          // If collapse.js did not do his work yet, call it directly.
          if (!$($details[0]).hasClass('.collapse-processed')) {
            Drupal.behaviors.collapse.attach(context);
          }
          // Find the tab column.
          var tab_list = $(horizontal_tabs_clearfix).find('> [data-horizontal-tabs-list]');
          tab_list.removeClass('visually-hidden')

          // Transform each details into a tab.
          $details.each(function (i) {
            var $this = $(this);
            var summaryElement = $this.find('> summary');
            var detailsTitle = summaryElement.first().find('.details-title')
            if (detailsTitle.length) {
              var summaryText = detailsTitle.find('> span:last-child').text().trim();
            }
            else {
              var summaryText = summaryElement.clone().children().remove().end().text().trim() || summaryElement.find('> span:first-child').text().trim();
            }

            var horizontal_tab = new Drupal.horizontalTab({
              title: summaryText,
              details: $this
            });
            horizontal_tab.item.addClass('horizontal-tab-button-' + i);
            horizontal_tab.item.attr('data-horizontalTabButton', i);
            tab_list.append(horizontal_tab.item);
            $this
              .removeClass('collapsed')
              // prop() can't be used on browsers not supporting details element,
              // the style won't apply to them if prop() is used.
              .attr('open', true)
              .addClass('horizontal-tabs-pane')
              .data('horizontalTab', horizontal_tab);
            if (this.id === focusID) {
              tab_focus = $this;
            }
          });

          $(tab_list).find('> li:first').addClass('first');
          $(tab_list).find('> li:last').addClass('last');

          if (!tab_focus) {
            // If the current URL has a fragment and one of the tabs contains an
            // element that matches the URL fragment, activate that tab.
            var hash = window.location.hash.replace(/[=%;,\/]/g, '');
            if (hash !== '#' && $(hash, this).length) {
              tab_focus = $(hash, this).closest('.horizontal-tabs-pane');
            }
            else {
              tab_focus = $this.find('> .horizontal-tabs-pane:first');
            }
          }
          if (tab_focus.length) {
            tab_focus.data('horizontalTab').focus();
          }
        });
      });
    }
  };

  /**
   * The horizontal tab object represents a single tab within a tab group.
   *
   * @param {object} settings
   *   An object with the following keys:
   *   - title: The name of the tab.
   *   - details: The jQuery object of the details element that is the tab pane.
   */
  Drupal.horizontalTab = function (settings) {
    var self = this;
    $.extend(this, settings, Drupal.theme('horizontalTab', settings));

    this.link.attr('href', '#' + settings.details.attr('id'));

    this.link.on('click', function (e) {
      e.preventDefault();
      self.focus();
    });

    // Keyboard events added:
    // Pressing the Enter key will open the tab pane.
    this.link.on('keydown', function (event) {
      if (event.keyCode === 13) {
        event.preventDefault();
        self.focus();
        // Set focus on the first input field of the visible details/tab pane.
        $('.horizontal-tabs-pane :input:visible:enabled:first').trigger('focus');
      }
    });

    // Only bind update summary on forms.
    if (this.details.drupalGetSummary) {
      this.details
        .on('summaryUpdated', function () {
          self.updateSummary();
        })
        .trigger('summaryUpdated');
    }

  };

  Drupal.horizontalTab.prototype = {

    /**
     * Displays the tab's content pane.
     */
    focus: function () {
      this.details
        .removeClass('horizontal-tab-hidden')
        .siblings('.horizontal-tabs-pane')
        .each(function () {
          var tab = $(this).data('horizontalTab');
          tab.details.addClass('horizontal-tab-hidden');
          tab.details.hide();
          tab.item.removeClass('selected');
        })
        .end()
        .show()
        .siblings(':hidden.horizontal-tabs-active-tab')
        .val(this.details.attr('id'));
      this.item.addClass('selected');
      // Mark the active tab for screen readers.
      $('#active-horizontal-tab').remove();
      this.link.append('<span id="active-horizontal-tab" class="visually-hidden">' + Drupal.t('(active tab)') + '</span>');
    },

    /**
     * Updates the tab's summary.
     */
    updateSummary: function () {
      this.summary.html(this.details.drupalGetSummary());
    },

    /**
     * Shows a horizontal tab pane.
     *
     * @return {Drupal.horizontalTab} The current horizontal tab.
     */
    tabShow: function () {
      // Display the tab.
      this.item.removeClass('horizontal-tab-hidden');
      this.item.show();

      // Update .first marker for items. We need recurse from parent to retain the
      // actual DOM element order as jQuery implements sortOrder, but not as public
      // method.
      this.item.parent().children('.horizontal-tab-button').removeClass('first')
        .filter(':visible:first').addClass('first');
      // Display the details element.
      this.details.removeClass('horizontal-tab-hidden');
      // Focus this tab.
      this.focus();
      return this;
    },

    /**
     * Hides a horizontal tab pane.
     *
     * @return {Drupal.horizontalTab} The current horizontal tab.
     */
    tabHide: function () {
      // Hide this tab.
      this.item.addClass('horizontal-tab-hidden');
      this.item.hide();

      // Update .first marker for items. We need recurse from parent to retain the
      // actual DOM element order as jQuery implements sortOrder, but not as public
      // method.
      this.item.parent().children('.horizontal-tab-button').removeClass('first')
        .filter(':visible:first').addClass('first');
      // Hide the details element.
      this.details.addClass('horizontal-tab-hidden');
      // Focus the first visible tab (if there is one).
      var $firstTab = this.details.siblings('.horizontal-tabs-pane:not(.horizontal-tab-hidden):first');
      if ($firstTab.length) {
        $firstTab.data('horizontalTab').focus();
      }
      else {
        // Hide the vertical tabs (if no tabs remain).
        this.item.closest('.form-type-horizontal-tabs').hide();
      }
      return this;
    }
  };

  /**
   * Theme function for a horizontal tab.
   *
   * @param {object} settings
   *   An object with the following keys:
   *   - title: The name of the tab.
   * @return {object}
   *   This function has to return an object with at least these keys:
   *   - item: The root tab jQuery element
   *   - link: The anchor tag that acts as the clickable area of the tab
   *       (jQuery version)
   *   - summary: The jQuery element that contains the tab summary
   */
  Drupal.theme.horizontalTab = function (settings) {
    var tab = {};
    var idAttr = settings.details.attr('id');

    tab.item = $('<li class="horizontal-tab-button" tabindex="-1"></li>')
      .append(tab.link = $('<a href="#' + idAttr + '"></a>')
        .append(tab.title = $('<strong></strong>').text(settings.title))
      );

    // No need to add summary on frontend.
    if (settings.details.drupalGetSummary) {
      tab.link.append(tab.summary = $('<span class="summary"></span>'));
    }

    return tab;
  };

})(jQuery, Drupal);
;
(function ($) {

  'use strict';

  Drupal.FieldGroup = Drupal.FieldGroup || {};
  Drupal.FieldGroup.Effects = Drupal.FieldGroup.Effects || {};

  /**
   * Implements Drupal.FieldGroup.processHook().
   */
  Drupal.FieldGroup.Effects.processTabs = {
    execute: function (context, settings, group_info) {

      if (group_info.context === 'form') {

        // Add required fields mark to any element containing required fields
        var direction = group_info.settings.direction;
        $(context).find('[data-' + direction + '-tabs-panes]').each(function () {
          var errorFocussed = false;
          $(this).find('> details').once('fieldgroup-effects').each(function () {
            var $this = $(this);
            if (typeof $this.data(direction + 'Tab') !== 'undefined') {

              if ($this.is('.required-fields') && ($this.find('[required]').length > 0 || $this.find('.form-required').length > 0)) {
                $this.data(direction + 'Tab').link.find('strong:first').addClass('form-required');
              }

              if ($('.error', $this).length) {
                $this.data(direction + 'Tab').link.parent().addClass('error');

                // Focus the first tab with error.
                if (!errorFocussed) {
                  Drupal.FieldGroup.setGroupWithfocus($this);
                  $this.data(direction + 'Tab').focus();
                  errorFocussed = true;
                }
              }
            }
          });
        });

      }
    }
  };

})(jQuery, Modernizr);
;
(function ($) {

  'use strict';

  /**
   * Drupal FieldGroup object.
   */
  Drupal.FieldGroup = Drupal.FieldGroup || {};
  Drupal.FieldGroup.Effects = Drupal.FieldGroup.Effects || {};
  Drupal.FieldGroup.groupWithfocus = null;

  Drupal.FieldGroup.setGroupWithfocus = function (element) {
    element.css({display: 'block'});
    Drupal.FieldGroup.groupWithfocus = element;
  };

  /**
   * Behaviors.
   */
  Drupal.behaviors.fieldGroup = {
    attach: function (context, settings) {

      settings.field_group = settings.field_group || drupalSettings.field_group;
      if (typeof settings.field_group === 'undefined') {
        return;
      }

      // Execute all of them.
      $.each(Drupal.FieldGroup.Effects, function (func) {
        // We check for a wrapper function in Drupal.field_group as
        // alternative for dynamic string function calls.
        var type = func.toLowerCase().replace('process', '');
        if (typeof settings.field_group[type] !== 'undefined' && $.isFunction(this.execute)) {
          this.execute(context, settings, settings.field_group[type]);
        }
      });

      // Add a new ID to each fieldset.
      $('.group-wrapper fieldset').each(function () {
        // Tats bad, but we have to keep the actual id to prevent layouts to break.
        var fieldgroupID = 'field_group-' + $(this).attr('id') + ' ' + $(this).attr('id');
        $(this).attr('id', fieldgroupID);
      });

      // Set the hash in url to remember last userselection.
      $('.group-wrapper ul li').each(function () {
        var fieldGroupNavigationListIndex = $(this).index();
        $(this).children('a').click(function () {
          var fieldset = $('.group-wrapper fieldset').get(fieldGroupNavigationListIndex);
          // Grab the first id, holding the wanted hashurl.
          var hashUrl = $(fieldset).attr('id').replace(/^field_group-/, '').split(' ')[0];
          window.location.hash = hashUrl;
        });
      });
    }
  };

})(jQuery);
;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal) {
  Drupal.behaviors.filterGuidelines = {
    attach: function attach(context) {
      function updateFilterGuidelines(event) {
        var $this = $(event.target);
        var value = $this.val();
        $this.closest('.js-filter-wrapper').find('[data-drupal-format-id]').hide().filter("[data-drupal-format-id=\"".concat(value, "\"]")).show();
      }

      $(once('filter-guidelines', '.js-filter-guidelines', context)).find(':header').hide().closest('.js-filter-wrapper').find('select.js-filter-list').on('change.filterGuidelines', updateFilterGuidelines).trigger('change.filterGuidelines');
    }
  };
})(jQuery, Drupal);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal, drupalSettings) {
  function findFieldForFormatSelector($formatSelector) {
    var fieldId = $formatSelector.attr('data-editor-for');
    return $("#".concat(fieldId)).get(0);
  }

  function filterXssWhenSwitching(field, format, originalFormatID, callback) {
    if (format.editor.isXssSafe) {
      callback(field, format);
    } else {
      $.ajax({
        url: Drupal.url("editor/filter_xss/".concat(format.format)),
        type: 'POST',
        data: {
          value: field.value,
          original_format_id: originalFormatID
        },
        dataType: 'json',
        success: function success(xssFilteredValue) {
          if (xssFilteredValue !== false) {
            field.value = xssFilteredValue;
          }

          callback(field, format);
        }
      });
    }
  }

  function changeTextEditor(field, newFormatID) {
    var previousFormatID = field.getAttribute('data-editor-active-text-format');

    if (drupalSettings.editor.formats[previousFormatID]) {
      Drupal.editorDetach(field, drupalSettings.editor.formats[previousFormatID]);
    } else {
      $(field).off('.editor');
    }

    if (drupalSettings.editor.formats[newFormatID]) {
      var format = drupalSettings.editor.formats[newFormatID];
      filterXssWhenSwitching(field, format, previousFormatID, Drupal.editorAttach);
    }

    field.setAttribute('data-editor-active-text-format', newFormatID);
  }

  function onTextFormatChange(event) {
    var $select = $(event.target);
    var field = event.data.field;
    var activeFormatID = field.getAttribute('data-editor-active-text-format');
    var newFormatID = $select.val();

    if (newFormatID === activeFormatID) {
      return;
    }

    var supportContentFiltering = drupalSettings.editor.formats[newFormatID] && drupalSettings.editor.formats[newFormatID].editorSupportsContentFiltering;
    var hasContent = field.value !== '';

    if (hasContent && supportContentFiltering) {
      var message = Drupal.t('Changing the text format to %text_format will permanently remove content that is not allowed in that text format.<br><br>Save your changes before switching the text format to avoid losing data.', {
        '%text_format': $select.find('option:selected').text()
      });
      var confirmationDialog = Drupal.dialog("<div>".concat(message, "</div>"), {
        title: Drupal.t('Change text format?'),
        dialogClass: 'editor-change-text-format-modal',
        resizable: false,
        buttons: [{
          text: Drupal.t('Continue'),
          class: 'button button--primary',
          click: function click() {
            changeTextEditor(field, newFormatID);
            confirmationDialog.close();
          }
        }, {
          text: Drupal.t('Cancel'),
          class: 'button',
          click: function click() {
            $select.val(activeFormatID);
            confirmationDialog.close();
          }
        }],
        closeOnEscape: false,
        create: function create() {
          $(this).parent().find('.ui-dialog-titlebar-close').remove();
        },
        beforeClose: false,
        close: function close(event) {
          $(event.target).remove();
        }
      });
      confirmationDialog.showModal();
    } else {
      changeTextEditor(field, newFormatID);
    }
  }

  Drupal.editors = {};
  Drupal.behaviors.editor = {
    attach: function attach(context, settings) {
      if (!settings.editor) {
        return;
      }

      once('editor', '[data-editor-for]', context).forEach(function (editor) {
        var $this = $(editor);
        var field = findFieldForFormatSelector($this);

        if (!field) {
          return;
        }

        var activeFormatID = $this.val();
        field.setAttribute('data-editor-active-text-format', activeFormatID);

        if (settings.editor.formats[activeFormatID]) {
          Drupal.editorAttach(field, settings.editor.formats[activeFormatID]);
        }

        $(field).on('change.editor keypress.editor', function () {
          field.setAttribute('data-editor-value-is-changed', 'true');
          $(field).off('.editor');
        });

        if ($this.is('select')) {
          $this.on('change.editorAttach', {
            field: field
          }, onTextFormatChange);
        }

        $this.parents('form').on('submit', function (event) {
          if (event.isDefaultPrevented()) {
            return;
          }

          if (settings.editor.formats[activeFormatID]) {
            Drupal.editorDetach(field, settings.editor.formats[activeFormatID], 'serialize');
          }
        });
      });
    },
    detach: function detach(context, settings, trigger) {
      var editors;

      if (trigger === 'serialize') {
        editors = once.filter('editor', '[data-editor-for]', context);
      } else {
        editors = once.remove('editor', '[data-editor-for]', context);
      }

      editors.forEach(function (editor) {
        var $this = $(editor);
        var activeFormatID = $this.val();
        var field = findFieldForFormatSelector($this);

        if (field && activeFormatID in settings.editor.formats) {
          Drupal.editorDetach(field, settings.editor.formats[activeFormatID], trigger);
        }
      });
    }
  };

  Drupal.editorAttach = function (field, format) {
    if (format.editor) {
      Drupal.editors[format.editor].attach(field, format);
      Drupal.editors[format.editor].onChange(field, function () {
        $(field).trigger('formUpdated');
        field.setAttribute('data-editor-value-is-changed', 'true');
      });
    }
  };

  Drupal.editorDetach = function (field, format, trigger) {
    if (format.editor) {
      Drupal.editors[format.editor].detach(field, format, trigger);

      if (field.getAttribute('data-editor-value-is-changed') === 'false') {
        field.value = field.getAttribute('data-editor-value-original');
      }
    }
  };
})(jQuery, Drupal, drupalSettings);;
