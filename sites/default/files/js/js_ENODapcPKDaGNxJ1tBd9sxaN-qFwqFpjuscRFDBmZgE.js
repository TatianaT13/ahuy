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
