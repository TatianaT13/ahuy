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

/* modules/w3css_paragraphs/templates/paragraph--default.html.twig */
class __TwigTemplate_ac0b9f845e0e7ae931c8691ebdcaaa1c614b5f4a8ef52ace4fb67086af98ab5a extends \Twig\Template
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
        // line 43
        $context["classes"] = [0 => "w3-row", 1 => "p-container", 2 => "paragraph", 3 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 47
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 47), 47, $this->source))), 4 => ((        // line 48
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 48, $this->source)))) : ("")), 5 => (( !twig_get_attribute($this->env, $this->source,         // line 49
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 49)) ? ("paragraph--unpublished") : ("")), 6 => ("paragraph--id--" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 50
($context["paragraph"] ?? null), "id", [], "any", false, false, true, 50), "value", [], "any", false, false, true, 50), 50, $this->source))];
        // line 52
        echo "
";
        // line 54
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_width", [], "any", false, false, true, 54))) {
            // line 55
            echo "  ";
            $context["container_w_input"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_width", [], "any", false, false, true, 55), 55, $this->source))));
            // line 56
            echo "  ";
            $context["container_width"] = ("p-container-width-" . $this->sandbox->ensureToStringAllowed(($context["container_w_input"] ?? null), 56, $this->source));
            // line 57
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 57, $this->source), [0 => ($context["container_width"] ?? null)]);
        }
        // line 59
        echo "
";
        // line 60
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_bg_color", [], "any", false, false, true, 60))) {
            // line 61
            echo "  ";
            $context["w3css_bg_color"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_bg_color", [], "any", false, false, true, 61), 61, $this->source))));
            // line 62
            echo "  ";
            $context["w3css_bg_color"] = twig_slice($this->env, $this->sandbox->ensureToStringAllowed(($context["w3css_bg_color"] ?? null), 62, $this->source), 3);
            // line 63
            echo "  ";
            $context["w3css_bg_color"] = twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["w3css_bg_color"] ?? null), 63, $this->source), ["-" => ","]);
            // line 64
            echo "    ";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_opacity", [], "any", false, false, true, 64))) {
                // line 65
                echo "      ";
                $context["w3css_bg_opacity"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_opacity", [], "any", false, false, true, 65), 65, $this->source))));
                // line 66
                echo "      ";
                $context["w3css_bg_opacity"] = ("0." . $this->sandbox->ensureToStringAllowed(($context["w3css_bg_opacity"] ?? null), 66, $this->source));
                // line 67
                echo "    ";
            } else {
                // line 68
                echo "      ";
                $context["w3css_bg_opacity"] = "100";
                // line 69
                echo "    ";
            }
            // line 70
            echo "  ";
            $context["w3css_bg_color"] = (($this->sandbox->ensureToStringAllowed(($context["w3css_bg_color"] ?? null), 70, $this->source) . ",") . $this->sandbox->ensureToStringAllowed(($context["w3css_bg_opacity"] ?? null), 70, $this->source));
        }
        // line 72
        echo "
";
        // line 73
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_hover_bg", [], "any", false, false, true, 73))) {
            // line 74
            echo "  ";
            $context["w3css_hover_bg"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_hover_bg", [], "any", false, false, true, 74), 74, $this->source))));
            // line 75
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 75, $this->source), [0 => ($context["w3css_hover_bg"] ?? null)]);
        }
        // line 77
        echo "
";
        // line 78
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_text_color", [], "any", false, false, true, 78))) {
            // line 79
            echo "  ";
            $context["w3css_txt_color"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_text_color", [], "any", false, false, true, 79), 79, $this->source))));
            // line 80
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 80, $this->source), [0 => ($context["w3css_txt_color"] ?? null)]);
        }
        // line 82
        echo "
";
        // line 83
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_hover_text", [], "any", false, false, true, 83))) {
            // line 84
            echo "  ";
            $context["w3css_hover_txt"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_hover_text", [], "any", false, false, true, 84), 84, $this->source))));
            // line 85
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 85, $this->source), [0 => ($context["w3css_hover_txt"] ?? null)]);
        }
        // line 87
        echo "
";
        // line 88
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_border", [], "any", false, false, true, 88))) {
            // line 89
            echo "  ";
            $context["w3css_border"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_border", [], "any", false, false, true, 89), 89, $this->source))));
            // line 90
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 90, $this->source), [0 => ($context["w3css_border"] ?? null)]);
        }
        // line 92
        echo "
";
        // line 93
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_round", [], "any", false, false, true, 93))) {
            // line 94
            echo "  ";
            $context["w3css_round"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_round", [], "any", false, false, true, 94), 94, $this->source))));
            // line 95
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 95, $this->source), [0 => ($context["w3css_round"] ?? null)]);
        }
        // line 97
        echo "
";
        // line 98
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_border_color", [], "any", false, false, true, 98))) {
            // line 99
            echo "  ";
            $context["w3css_border_color"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_border_color", [], "any", false, false, true, 99), 99, $this->source))));
            // line 100
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 100, $this->source), [0 => ($context["w3css_border_color"] ?? null)]);
        }
        // line 102
        echo "
";
        // line 103
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_card", [], "any", false, false, true, 103))) {
            // line 104
            echo "  ";
            $context["w3css_card"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_card", [], "any", false, false, true, 104), 104, $this->source))));
            // line 105
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 105, $this->source), [0 => ($context["w3css_card"] ?? null)]);
        }
        // line 107
        echo "
";
        // line 108
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_hover_border", [], "any", false, false, true, 108))) {
            // line 109
            echo "  ";
            $context["w3css_hover_border"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_hover_border", [], "any", false, false, true, 109), 109, $this->source))));
            // line 110
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 110, $this->source), [0 => ($context["w3css_hover_border"] ?? null)]);
        }
        // line 112
        echo "
";
        // line 113
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_classes", [], "any", false, false, true, 113))) {
            // line 114
            echo "  ";
            $context["w3css_classes"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_classes", [], "any", false, false, true, 114), 114, $this->source))));
            // line 115
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 115, $this->source), [0 => ($context["w3css_classes"] ?? null)]);
        }
        // line 117
        echo "
";
        // line 119
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_margin", [], "any", false, false, true, 119))) {
            // line 120
            echo "  ";
            $context["w3css_margin"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_margin", [], "any", false, false, true, 120), 120, $this->source))));
            // line 121
            echo "  ";
            $context["w3css_margin_padding"] = ($context["w3css_margin"] ?? null);
        }
        // line 123
        echo "
";
        // line 124
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_padding", [], "any", false, false, true, 124))) {
            // line 125
            echo "  ";
            $context["w3css_padding"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_padding", [], "any", false, false, true, 125), 125, $this->source))));
            // line 126
            echo "  ";
            $context["w3css_margin_padding"] = (($this->sandbox->ensureToStringAllowed(($context["w3css_margin_padding"] ?? null), 126, $this->source) . " ") . $this->sandbox->ensureToStringAllowed(($context["w3css_padding"] ?? null), 126, $this->source));
        }
        // line 128
        echo "
";
        // line 129
        $context["paragraph_id"] = ("w3-default-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "id", [], "any", false, false, true, 129), "value", [], "any", false, false, true, 129), 129, $this->source));
        // line 130
        echo "
<div ";
        // line 131
        if (($context["w3css_bg_color"] ?? null)) {
            echo "style=\"background-color: rgba( ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["w3css_bg_color"] ?? null), 131, $this->source), "html", null, true);
            echo " )\" ";
        }
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 131), 131, $this->source), "html", null, true);
        echo ">
  <div id=\"";
        // line 132
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["paragraph_id"] ?? null), 132, $this->source), "html", null, true);
        echo "\" class=\"w3-row p-container-inner\">

    ";
        // line 134
        if (($context["w3css_margin_padding"] ?? null)) {
            // line 135
            echo "    <div class=\"w3-row ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["w3css_margin_padding"] ?? null), 135, $this->source), "html", null, true);
            echo "\">
      ";
        }
        // line 137
        echo "      ";
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_content_title", [], "any", false, false, true, 137))) {
            // line 138
            echo "        <h3 class=\"content-title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_content_title", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
            echo "</h3>
      ";
        }
        // line 140
        echo "      ";
        // line 141
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 141, $this->source), "w3css_display_border", "w3css_display_bg_color", "w3css_display_opacity", "w3css_display_border_color", "w3css_display_card", "w3css_display_hover_bg", "w3css_display_hover_border", "w3css_display_hover_text", "w3css_display_margin", "w3css_display_padding", "w3css_display_round", "w3css_display_text_color", "w3css_display_width", "w3css_display_classes", "w3css_content_title"), "html", null, true);
        echo "

      ";
        // line 143
        if (($context["w3css_margin_padding"] ?? null)) {
            // line 144
            echo "    </div>
    ";
        }
        // line 146
        echo "
  </div>
</div> ";
    }

    public function getTemplateName()
    {
        return "modules/w3css_paragraphs/templates/paragraph--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 146,  286 => 144,  284 => 143,  278 => 141,  276 => 140,  270 => 138,  267 => 137,  261 => 135,  259 => 134,  254 => 132,  244 => 131,  241 => 130,  239 => 129,  236 => 128,  232 => 126,  229 => 125,  227 => 124,  224 => 123,  220 => 121,  217 => 120,  215 => 119,  212 => 117,  208 => 115,  205 => 114,  203 => 113,  200 => 112,  196 => 110,  193 => 109,  191 => 108,  188 => 107,  184 => 105,  181 => 104,  179 => 103,  176 => 102,  172 => 100,  169 => 99,  167 => 98,  164 => 97,  160 => 95,  157 => 94,  155 => 93,  152 => 92,  148 => 90,  145 => 89,  143 => 88,  140 => 87,  136 => 85,  133 => 84,  131 => 83,  128 => 82,  124 => 80,  121 => 79,  119 => 78,  116 => 77,  112 => 75,  109 => 74,  107 => 73,  104 => 72,  100 => 70,  97 => 69,  94 => 68,  91 => 67,  88 => 66,  85 => 65,  82 => 64,  79 => 63,  76 => 62,  73 => 61,  71 => 60,  68 => 59,  64 => 57,  61 => 56,  58 => 55,  56 => 54,  53 => 52,  51 => 50,  50 => 49,  49 => 48,  48 => 47,  47 => 43,  42 => 41,  39 => 40,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/w3css_paragraphs/templates/paragraph--default.html.twig", "/Applications/MAMP/htdocs/ahuy/modules/w3css_paragraphs/templates/paragraph--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 43, "if" => 54);
        static $filters = array("escape" => 41, "clean_class" => 47, "render" => 54, "trim" => 55, "striptags" => 55, "merge" => 57, "slice" => 62, "replace" => 63, "without" => 141);
        static $functions = array("attach_library" => 41);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'clean_class', 'render', 'trim', 'striptags', 'merge', 'slice', 'replace', 'without'],
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
