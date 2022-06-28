<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/w3css_paragraphs/modules/w3css_paragraphs_accordion/templates/paragraph--w3css-accordion.html.twig */
class __TwigTemplate_2ed3eec6b9617339f9fbcb26cd3a74b1b5354da6a29303be2a4cb88a02368e55 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "
";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("w3css_paragraphs/w3css-paragraphs"), "html", null, true);
        echo "
";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("w3css_paragraphs_accordion/w3css-paragraphs-accordion"), "html", null, true);
        echo "

";
        // line 44
        $context["classes"] = [0 => "w3-row", 1 => "p-container", 2 => "paragraph", 3 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 48
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 48), 48, $this->source))), 4 => ((        // line 49
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 49, $this->source)))) : ("")), 5 => (( !twig_get_attribute($this->env, $this->source,         // line 50
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 50)) ? ("paragraph--unpublished") : ("")), 6 => ("paragraph--id--" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 51
($context["paragraph"] ?? null), "id", [], "any", false, false, true, 51), "value", [], "any", false, false, true, 51), 51, $this->source))];
        // line 53
        echo "
";
        // line 55
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_width", [], "any", false, false, true, 55))) {
            // line 56
            echo "  ";
            $context["container_w_input"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_width", [], "any", false, false, true, 56), 56, $this->source))));
            // line 57
            echo "  ";
            $context["container_width"] = ("p-container-width-" . $this->sandbox->ensureToStringAllowed(($context["container_w_input"] ?? null), 57, $this->source));
            // line 58
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 58, $this->source), [0 => ($context["container_width"] ?? null)]);
        }
        // line 60
        echo "
";
        // line 61
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_bg_color", [], "any", false, false, true, 61))) {
            // line 62
            echo "  ";
            $context["w3css_bg_color"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_bg_color", [], "any", false, false, true, 62), 62, $this->source))));
            // line 63
            echo "  ";
            $context["w3css_bg_color"] = twig_slice($this->env, $this->sandbox->ensureToStringAllowed(($context["w3css_bg_color"] ?? null), 63, $this->source), 3);
            // line 64
            echo "  ";
            $context["w3css_bg_color"] = twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["w3css_bg_color"] ?? null), 64, $this->source), ["-" => ","]);
            // line 65
            echo "  ";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_opacity", [], "any", false, false, true, 65))) {
                // line 66
                echo "    ";
                $context["w3css_bg_opacity"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_opacity", [], "any", false, false, true, 66), 66, $this->source))));
                // line 67
                echo "    ";
                $context["w3css_bg_opacity"] = ("0." . $this->sandbox->ensureToStringAllowed(($context["w3css_bg_opacity"] ?? null), 67, $this->source));
                // line 68
                echo "  ";
            } else {
                // line 69
                echo "    ";
                $context["w3css_bg_opacity"] = "100";
                // line 70
                echo "  ";
            }
            // line 71
            echo "  ";
            $context["w3css_bg_color"] = (($this->sandbox->ensureToStringAllowed(($context["w3css_bg_color"] ?? null), 71, $this->source) . ",") . $this->sandbox->ensureToStringAllowed(($context["w3css_bg_opacity"] ?? null), 71, $this->source));
        }
        // line 73
        echo "
";
        // line 74
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_hover_bg", [], "any", false, false, true, 74))) {
            // line 75
            echo "  ";
            $context["w3css_hover_bg"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_hover_bg", [], "any", false, false, true, 75), 75, $this->source))));
            // line 76
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 76, $this->source), [0 => ($context["w3css_hover_bg"] ?? null)]);
        }
        // line 78
        echo "
";
        // line 79
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_text_color", [], "any", false, false, true, 79))) {
            // line 80
            echo "  ";
            $context["w3css_txt_color"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_text_color", [], "any", false, false, true, 80), 80, $this->source))));
            // line 81
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 81, $this->source), [0 => ($context["w3css_txt_color"] ?? null)]);
        }
        // line 83
        echo "
";
        // line 84
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_hover_text", [], "any", false, false, true, 84))) {
            // line 85
            echo "  ";
            $context["w3css_hover_txt"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_hover_text", [], "any", false, false, true, 85), 85, $this->source))));
            // line 86
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 86, $this->source), [0 => ($context["w3css_hover_txt"] ?? null)]);
        }
        // line 88
        echo "
";
        // line 89
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_border", [], "any", false, false, true, 89))) {
            // line 90
            echo "  ";
            $context["w3css_border"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_border", [], "any", false, false, true, 90), 90, $this->source))));
            // line 91
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 91, $this->source), [0 => ($context["w3css_border"] ?? null)]);
        }
        // line 93
        echo "
";
        // line 94
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_round", [], "any", false, false, true, 94))) {
            // line 95
            echo "  ";
            $context["w3css_round"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_round", [], "any", false, false, true, 95), 95, $this->source))));
            // line 96
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 96, $this->source), [0 => ($context["w3css_round"] ?? null)]);
        }
        // line 98
        echo "
";
        // line 99
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_border_color", [], "any", false, false, true, 99))) {
            // line 100
            echo "  ";
            $context["w3css_border_color"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_border_color", [], "any", false, false, true, 100), 100, $this->source))));
            // line 101
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 101, $this->source), [0 => ($context["w3css_border_color"] ?? null)]);
        }
        // line 103
        echo "
";
        // line 104
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_card", [], "any", false, false, true, 104))) {
            // line 105
            echo "  ";
            $context["w3css_card"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_card", [], "any", false, false, true, 105), 105, $this->source))));
            // line 106
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 106, $this->source), [0 => ($context["w3css_card"] ?? null)]);
        }
        // line 108
        echo "
";
        // line 109
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_hover_border", [], "any", false, false, true, 109))) {
            // line 110
            echo "  ";
            $context["w3css_hover_border"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_hover_border", [], "any", false, false, true, 110), 110, $this->source))));
            // line 111
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 111, $this->source), [0 => ($context["w3css_hover_border"] ?? null)]);
        }
        // line 113
        echo "
";
        // line 114
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_classes", [], "any", false, false, true, 114))) {
            // line 115
            echo "  ";
            $context["w3css_classes"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_classes", [], "any", false, false, true, 115), 115, $this->source))));
            // line 116
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 116, $this->source), [0 => ($context["w3css_classes"] ?? null)]);
        }
        // line 118
        echo "
";
        // line 120
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_margin", [], "any", false, false, true, 120))) {
            // line 121
            echo "  ";
            $context["w3css_margin"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_margin", [], "any", false, false, true, 121), 121, $this->source))));
            // line 122
            echo "  ";
            $context["w3css_margin_padding"] = ($context["w3css_margin"] ?? null);
        }
        // line 124
        echo "
";
        // line 125
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_padding", [], "any", false, false, true, 125))) {
            // line 126
            echo "  ";
            $context["w3css_padding"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_padding", [], "any", false, false, true, 126), 126, $this->source))));
            // line 127
            echo "  ";
            $context["w3css_margin_padding"] = (($this->sandbox->ensureToStringAllowed(($context["w3css_margin_padding"] ?? null), 127, $this->source) . " ") . $this->sandbox->ensureToStringAllowed(($context["w3css_padding"] ?? null), 127, $this->source));
        }
        // line 129
        echo "
";
        // line 131
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_show_expand", [], "any", false, false, true, 131))) {
            // line 132
            echo "  ";
            $context["w3css_expand_all"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_show_expand", [], "any", false, false, true, 132), 132, $this->source))));
        }
        // line 134
        echo "
";
        // line 135
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_indicator", [], "any", false, false, true, 135))) {
            // line 136
            echo "  ";
            $context["w3css_show_indicator"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_indicator", [], "any", false, false, true, 136), 136, $this->source))));
        }
        // line 138
        echo "
";
        // line 139
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_open_first", [], "any", false, false, true, 139))) {
            // line 140
            echo "  ";
            $context["w3css_open_first"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_open_first", [], "any", false, false, true, 140), 140, $this->source))));
        }
        // line 142
        echo "
";
        // line 143
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_animated_tab", [], "any", false, false, true, 143))) {
            // line 144
            echo "  ";
            $context["w3css_animated_tab"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_animated_tab", [], "any", false, false, true, 144), 144, $this->source))));
        }
        // line 146
        echo "
";
        // line 147
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_active_item", [], "any", false, false, true, 147))) {
            // line 148
            echo "  ";
            $context["w3css_display_active"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_active_item", [], "any", false, false, true, 148), 148, $this->source))));
            // line 149
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 149, $this->source), [0 => ($context["w3css_display_active"] ?? null)]);
        }
        // line 151
        echo "
";
        // line 153
        $context["paragraph_id"] = ("w3-acc-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "id", [], "any", false, false, true, 153), "value", [], "any", false, false, true, 153), 153, $this->source));
        // line 154
        echo "<div
  ";
        // line 155
        if (($context["w3css_bg_color"] ?? null)) {
            echo "style=\"background-color: rgba( ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["w3css_bg_color"] ?? null), 155, $this->source), "html", null, true);
            echo " )\" ";
        }
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 155), 155, $this->source), "html", null, true);
        echo "
  role=\"tablist\" aria-multiselectable=\"true\">
  <div class=\"w3-row p-container-inner\">

    ";
        // line 159
        if (($context["w3css_margin_padding"] ?? null)) {
            // line 160
            echo "    <div class=\"w3-row ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["w3css_margin_padding"] ?? null), 160, $this->source), "html", null, true);
            echo "\">
      ";
        }
        // line 162
        echo "
      <div id=\"";
        // line 163
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["paragraph_id"] ?? null), 163, $this->source), "html", null, true);
        echo "\" class=\"w3-row\">

        ";
        // line 165
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_content_title", [], "any", false, false, true, 165))) {
            // line 166
            echo "          <h3 class=\"content-title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_content_title", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
            echo "</h3>
        ";
        }
        // line 168
        echo "
        ";
        // line 169
        if ((($context["w3css_expand_all"] ?? null) == "On")) {
            // line 170
            echo "          <div class=\"w3-row ex-button\">
            <button class=\"w3-button w3-right plus\">&#x0229E</button>
            <button class=\"w3-button w3-right minus\">&#x0229F</button>
          </div>
        ";
        }
        // line 175
        echo "
        ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_content_accordion_section", [], "any", false, false, true, 176));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            if ((twig_first($this->env, $context["key"]) != "#")) {
                // line 177
                echo "        <div id=\"wrapper-accs-btn-pane-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "id", [], "any", false, false, true, 177), "value", [], "any", false, false, true, 177), 177, $this->source), "html", null, true);
                echo "-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\"
             class=\"w3-row wrapper-accs-btn-pane ";
                // line 178
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 178)) {
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["w3css_open_first"] ?? null) == "On")) ? ("w3-is-active") : ("w3-not-active")));
                    echo " ";
                } else {
                    echo " w3-not-active";
                }
                echo "\">
          <div class=\"w3-row w3-accs-button\" role=\"tablist\">
            ";
                // line 181
                echo "            <button id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["paragraph_id"] ?? null), 181, $this->source), "html", null, true);
                echo "-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\"
                    class=\"w3-button w3-bar w3-acc-button\"
                    aria-controls=\"";
                // line 183
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = $context["item"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#paragraph"] ?? null) : null), "w3css_content_accordion_title", [], "any", false, false, true, 183), "value", [], "any", false, false, true, 183), 183, $this->source), "html", null, true);
                echo "\"
                    role=\"tab\" data-toggle=\"tab\">
              ";
                // line 185
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = $context["item"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#paragraph"] ?? null) : null), "w3css_content_accordion_title", [], "any", false, false, true, 185), "value", [], "any", false, false, true, 185), 185, $this->source), "html", null, true);
                echo "
              ";
                // line 186
                if ((($context["w3css_show_indicator"] ?? null) == "On")) {
                    // line 187
                    echo "                <div class=\"plus-minus w3-right\">
                  <span class=\"minus\">&#x02212</span>
                  <span class=\"plus\">&#x0002B</span>
                </div>
              ";
                }
                // line 192
                echo "            </button>
          </div>

          <div class=\"w3-row w3-accs-pane\">
            ";
                // line 197
                echo "            <div role=\"tabpanel\"
                 class=\"w3-acc-pane ";
                // line 198
                (((($context["w3css_animated_tab"] ?? null) == "")) ? (print ("")) : (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["w3css_animated_tab"] ?? null)), "html", null, true))));
                echo "\"
                 id=\"";
                // line 199
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["paragraph_id"] ?? null), 199, $this->source), "html", null, true);
                echo "-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                echo "-pane\">
              ";
                // line 200
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = $context["item"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#paragraph"] ?? null) : null), "w3css_content_accordion_body", [], "any", false, false, true, 200));
                foreach ($context['_seq'] as $context["body_key"] => $context["body_item"]) {
                    // line 201
                    echo "                ";
                    // line 202
                    echo "                ";
                    $context["section_body"] = $context["item"];
                    // line 203
                    echo "                ";
                    $context["lang"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["section_body"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#paragraph"] ?? null) : null), "langcode", [], "any", false, false, true, 203)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), "value", [], "any", false, false, true, 203);
                    // line 204
                    echo "                ";
                    // line 205
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = ($context["section_body"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#paragraph"] ?? null) : null), "w3css_content_accordion_body", [], "any", false, false, true, 205)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["body_key"]] ?? null) : null), "entity", [], "any", false, false, true, 205), "hasTranslation", [0 => ($context["lang"] ?? null)], "method", false, false, true, 205)) {
                        // line 206
                        echo "                  ";
                        // line 207
                        echo "                  ";
                        $context["section_translation"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = ($context["section_body"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#paragraph"] ?? null) : null), "w3css_content_accordion_body", [], "any", false, false, true, 207)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["body_key"]] ?? null) : null), "entity", [], "any", false, false, true, 207), "getTranslation", [0 => ($context["lang"] ?? null)], "method", false, false, true, 207);
                        // line 208
                        echo "                ";
                    } else {
                        // line 209
                        echo "                  ";
                        // line 210
                        echo "                  ";
                        $context["section_translation"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = ($context["section_body"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["#paragraph"] ?? null) : null), "w3css_content_accordion_body", [], "any", false, false, true, 210)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[$context["body_key"]] ?? null) : null), "entity", [], "any", false, false, true, 210);
                        // line 211
                        echo "                ";
                    }
                    // line 212
                    echo "                ";
                    $context["section_body"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["section_body"] ?? null), 212, $this->source), ["#paragraph" => ($context["section_translation"] ?? null)]);
                    // line 213
                    echo "                ";
                    // line 214
                    echo "                ";
                    $context["section_body"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["section_body"] ?? null), 214, $this->source), ["#cache" => []]);
                    // line 215
                    echo "                ";
                    // line 216
                    echo "                ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["section_body"] ?? null), 216, $this->source), "html", null, true);
                    echo "
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['body_key'], $context['body_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 218
                echo "            </div>
          </div>

          </div>";
                // line 222
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "
      </div>

      ";
        // line 226
        if (($context["w3css_margin_padding"] ?? null)) {
            // line 227
            echo "    </div>
    ";
        }
        // line 229
        echo "
  </div>

</div> ";
    }

    public function getTemplateName()
    {
        return "modules/w3css_paragraphs/modules/w3css_paragraphs_accordion/templates/paragraph--w3css-accordion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  500 => 229,  496 => 227,  494 => 226,  489 => 223,  479 => 222,  474 => 218,  465 => 216,  463 => 215,  460 => 214,  458 => 213,  455 => 212,  452 => 211,  449 => 210,  447 => 209,  444 => 208,  441 => 207,  439 => 206,  436 => 205,  434 => 204,  431 => 203,  428 => 202,  426 => 201,  422 => 200,  416 => 199,  412 => 198,  409 => 197,  403 => 192,  396 => 187,  394 => 186,  390 => 185,  385 => 183,  377 => 181,  366 => 178,  359 => 177,  348 => 176,  345 => 175,  338 => 170,  336 => 169,  333 => 168,  327 => 166,  325 => 165,  320 => 163,  317 => 162,  311 => 160,  309 => 159,  296 => 155,  293 => 154,  291 => 153,  288 => 151,  284 => 149,  281 => 148,  279 => 147,  276 => 146,  272 => 144,  270 => 143,  267 => 142,  263 => 140,  261 => 139,  258 => 138,  254 => 136,  252 => 135,  249 => 134,  245 => 132,  243 => 131,  240 => 129,  236 => 127,  233 => 126,  231 => 125,  228 => 124,  224 => 122,  221 => 121,  219 => 120,  216 => 118,  212 => 116,  209 => 115,  207 => 114,  204 => 113,  200 => 111,  197 => 110,  195 => 109,  192 => 108,  188 => 106,  185 => 105,  183 => 104,  180 => 103,  176 => 101,  173 => 100,  171 => 99,  168 => 98,  164 => 96,  161 => 95,  159 => 94,  156 => 93,  152 => 91,  149 => 90,  147 => 89,  144 => 88,  140 => 86,  137 => 85,  135 => 84,  132 => 83,  128 => 81,  125 => 80,  123 => 79,  120 => 78,  116 => 76,  113 => 75,  111 => 74,  108 => 73,  104 => 71,  101 => 70,  98 => 69,  95 => 68,  92 => 67,  89 => 66,  86 => 65,  83 => 64,  80 => 63,  77 => 62,  75 => 61,  72 => 60,  68 => 58,  65 => 57,  62 => 56,  60 => 55,  57 => 53,  55 => 51,  54 => 50,  53 => 49,  52 => 48,  51 => 44,  46 => 42,  42 => 41,  39 => 40,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/w3css_paragraphs/modules/w3css_paragraphs_accordion/templates/paragraph--w3css-accordion.html.twig", "/Applications/MAMP/htdocs/ahuy/modules/w3css_paragraphs/modules/w3css_paragraphs_accordion/templates/paragraph--w3css-accordion.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 44, "if" => 55, "for" => 176);
        static $filters = array("escape" => 41, "clean_class" => 48, "render" => 55, "trim" => 56, "striptags" => 56, "merge" => 58, "slice" => 63, "replace" => 64, "first" => 176);
        static $functions = array("attach_library" => 41);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'clean_class', 'render', 'trim', 'striptags', 'merge', 'slice', 'replace', 'first'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
