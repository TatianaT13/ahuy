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

/* modules/w3css_paragraphs/modules/w3css_paragraphs_3d_flip_box/templates/paragraph--w3css-3d-flip-box.html.twig */
class __TwigTemplate_cd667dd775f7dba61fbfe32e534c6d7b15f9d15e8ce374e626732e3b43e21032 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("w3css_paragraphs_3d_flip_box/w3css-paragraphs-3d-flip-box"), "html", null, true);
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
            echo "    ";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_opacity", [], "any", false, false, true, 65))) {
                // line 66
                echo "      ";
                $context["w3css_bg_opacity"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_opacity", [], "any", false, false, true, 66), 66, $this->source))));
                // line 67
                echo "      ";
                $context["w3css_bg_opacity"] = ("0." . $this->sandbox->ensureToStringAllowed(($context["w3css_bg_opacity"] ?? null), 67, $this->source));
                // line 68
                echo "    ";
            } else {
                // line 69
                echo "      ";
                $context["w3css_bg_opacity"] = "100";
                // line 70
                echo "    ";
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
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_flip_xy", [], "any", false, false, true, 131)))) {
            // line 132
            echo "  ";
            $context["w3css_flip_xy"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_flip_xy", [], "any", false, false, true, 132), 132, $this->source))));
        }
        // line 134
        echo "
";
        // line 135
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_3d_height", [], "any", false, false, true, 135)))) {
            // line 136
            echo "  ";
            $context["w3css_box_height"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_3d_height", [], "any", false, false, true, 136), 136, $this->source))));
        }
        // line 138
        echo "
";
        // line 139
        $context["paragraph_id"] = ("w3-3d-flip-box-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "id", [], "any", false, false, true, 139), "value", [], "any", false, false, true, 139), 139, $this->source));
        // line 140
        echo "
<div ";
        // line 141
        if (($context["w3css_bg_color"] ?? null)) {
            echo "style=\"background-color: rgba( ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["w3css_bg_color"] ?? null), 141, $this->source), "html", null, true);
            echo " )\" ";
        }
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 141), 141, $this->source), "html", null, true);
        echo ">
  <div id=\"";
        // line 142
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["paragraph_id"] ?? null), 142, $this->source), "html", null, true);
        echo "\" class=\"w3-row p-container-inner\">

    ";
        // line 144
        if (($context["w3css_margin_padding"] ?? null)) {
            // line 145
            echo "    <div class=\"w3-row ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["w3css_margin_padding"] ?? null), 145, $this->source), "html", null, true);
            echo "\">
      ";
        }
        // line 147
        echo "      ";
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_content_title", [], "any", false, false, true, 147))) {
            // line 148
            echo "        <h3 class=\"content-title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_content_title", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
            echo "</h3>
      ";
        }
        // line 150
        echo "
          <div style=\"height: ";
        // line 151
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["w3css_box_height"] ?? null), 151, $this->source), "html", null, true);
        echo "px;\" class=\"w3-flip-box ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["w3css_flip_xy"] ?? null), 151, $this->source), "html", null, true);
        echo "\">
            <div class=\"w3-flip-box-inner\">
              <div class=\"w3-3d-front\">";
        // line 153
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_content_3d_box_front", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
        echo "</div>
              <div class=\"w3-3d-back ";
        // line 154
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["w3css_flip_xy"] ?? null), 154, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_content_3d_box_back", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
        echo "</div>
            </div>
          </div>

      ";
        // line 158
        if (($context["w3css_margin_padding"] ?? null)) {
            // line 159
            echo "    </div>
    ";
        }
        // line 161
        echo "
  </div>
</div> ";
    }

    public function getTemplateName()
    {
        return "modules/w3css_paragraphs/modules/w3css_paragraphs_3d_flip_box/templates/paragraph--w3css-3d-flip-box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 161,  323 => 159,  321 => 158,  312 => 154,  308 => 153,  301 => 151,  298 => 150,  292 => 148,  289 => 147,  283 => 145,  281 => 144,  276 => 142,  266 => 141,  263 => 140,  261 => 139,  258 => 138,  254 => 136,  252 => 135,  249 => 134,  245 => 132,  243 => 131,  240 => 129,  236 => 127,  233 => 126,  231 => 125,  228 => 124,  224 => 122,  221 => 121,  219 => 120,  216 => 118,  212 => 116,  209 => 115,  207 => 114,  204 => 113,  200 => 111,  197 => 110,  195 => 109,  192 => 108,  188 => 106,  185 => 105,  183 => 104,  180 => 103,  176 => 101,  173 => 100,  171 => 99,  168 => 98,  164 => 96,  161 => 95,  159 => 94,  156 => 93,  152 => 91,  149 => 90,  147 => 89,  144 => 88,  140 => 86,  137 => 85,  135 => 84,  132 => 83,  128 => 81,  125 => 80,  123 => 79,  120 => 78,  116 => 76,  113 => 75,  111 => 74,  108 => 73,  104 => 71,  101 => 70,  98 => 69,  95 => 68,  92 => 67,  89 => 66,  86 => 65,  83 => 64,  80 => 63,  77 => 62,  75 => 61,  72 => 60,  68 => 58,  65 => 57,  62 => 56,  60 => 55,  57 => 53,  55 => 51,  54 => 50,  53 => 49,  52 => 48,  51 => 44,  46 => 42,  42 => 41,  39 => 40,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/w3css_paragraphs/modules/w3css_paragraphs_3d_flip_box/templates/paragraph--w3css-3d-flip-box.html.twig", "/Applications/MAMP/htdocs/ahuy/modules/w3css_paragraphs/modules/w3css_paragraphs_3d_flip_box/templates/paragraph--w3css-3d-flip-box.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 44, "if" => 55);
        static $filters = array("escape" => 41, "clean_class" => 48, "render" => 55, "trim" => 56, "striptags" => 56, "merge" => 58, "slice" => 63, "replace" => 64);
        static $functions = array("attach_library" => 41);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'clean_class', 'render', 'trim', 'striptags', 'merge', 'slice', 'replace'],
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
