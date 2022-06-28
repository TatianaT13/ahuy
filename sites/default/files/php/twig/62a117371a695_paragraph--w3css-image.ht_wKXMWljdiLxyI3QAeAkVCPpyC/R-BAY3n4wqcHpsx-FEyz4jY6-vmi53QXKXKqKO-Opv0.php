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

/* modules/w3css_paragraphs/templates/paragraph--w3css-image.html.twig */
class __TwigTemplate_42cdeebc50df295274ccc51123c5a6e8b2beef28d65b940e97f6c57d9ee1728c extends \Twig\Template
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
            $context["w3css_image_classes"] = ($context["w3css_hover_bg"] ?? null);
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
            $context["w3css_image_classes"] = (($this->sandbox->ensureToStringAllowed(($context["w3css_image_classes"] ?? null), 80, $this->source) . " ") . $this->sandbox->ensureToStringAllowed(($context["w3css_txt_color"] ?? null), 80, $this->source));
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
            $context["w3css_image_classes"] = (($this->sandbox->ensureToStringAllowed(($context["w3css_image_classes"] ?? null), 85, $this->source) . " ") . $this->sandbox->ensureToStringAllowed(($context["w3css_hover_txt"] ?? null), 85, $this->source));
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
            $context["w3css_image_classes"] = (($this->sandbox->ensureToStringAllowed(($context["w3css_image_classes"] ?? null), 90, $this->source) . " ") . $this->sandbox->ensureToStringAllowed(($context["w3css_border"] ?? null), 90, $this->source));
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
            $context["w3css_image_classes"] = (($this->sandbox->ensureToStringAllowed(($context["w3css_image_classes"] ?? null), 95, $this->source) . " ") . $this->sandbox->ensureToStringAllowed(($context["w3css_round"] ?? null), 95, $this->source));
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
            $context["w3css_image_classes"] = (($this->sandbox->ensureToStringAllowed(($context["w3css_image_classes"] ?? null), 100, $this->source) . " ") . $this->sandbox->ensureToStringAllowed(($context["w3css_border_color"] ?? null), 100, $this->source));
        }
        // line 102
        echo "
";
        // line 103
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_hover_border", [], "any", false, false, true, 103))) {
            // line 104
            echo "  ";
            $context["w3css_hover_border"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_hover_border", [], "any", false, false, true, 104), 104, $this->source))));
            // line 105
            echo "  ";
            $context["w3css_image_classes"] = (($this->sandbox->ensureToStringAllowed(($context["w3css_image_classes"] ?? null), 105, $this->source) . " ") . $this->sandbox->ensureToStringAllowed(($context["w3css_hover_border"] ?? null), 105, $this->source));
        }
        // line 107
        echo "
";
        // line 108
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_card", [], "any", false, false, true, 108))) {
            // line 109
            echo "  ";
            $context["w3css_card"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_card", [], "any", false, false, true, 109), 109, $this->source))));
            // line 110
            echo "  ";
            $context["w3css_image_classes"] = (($this->sandbox->ensureToStringAllowed(($context["w3css_image_classes"] ?? null), 110, $this->source) . " ") . $this->sandbox->ensureToStringAllowed(($context["w3css_card"] ?? null), 110, $this->source));
        }
        // line 112
        echo "
";
        // line 114
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_margin", [], "any", false, false, true, 114))) {
            // line 115
            echo "  ";
            $context["w3css_margin"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_margin", [], "any", false, false, true, 115), 115, $this->source))));
            // line 116
            echo "  ";
            $context["w3css_margin_padding"] = ($context["w3css_margin"] ?? null);
        }
        // line 118
        echo "
";
        // line 119
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_padding", [], "any", false, false, true, 119))) {
            // line 120
            echo "  ";
            $context["w3css_padding"] = twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_display_padding", [], "any", false, false, true, 120), 120, $this->source))));
            // line 121
            echo "  ";
            $context["w3css_margin_padding"] = (($this->sandbox->ensureToStringAllowed(($context["w3css_margin_padding"] ?? null), 121, $this->source) . " ") . $this->sandbox->ensureToStringAllowed(($context["w3css_padding"] ?? null), 121, $this->source));
        }
        // line 123
        echo "
";
        // line 125
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_content_link", [], "any", false, false, true, 125)))) {
            // line 126
            echo "  ";
            $context["w3css_link"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_content_link", [], "any", false, false, true, 126), 0, [], "any", false, false, true, 126)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url"] ?? null) : null);
        }
        // line 128
        echo "
";
        // line 129
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_content_image", [], "any", false, false, true, 129)))) {
            // line 130
            echo "  ";
            $context["w3css_image"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_content_image", [], "any", false, false, true, 130);
        }
        // line 132
        echo "
";
        // line 133
        $context["paragraph_id"] = ("w3-image-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "id", [], "any", false, false, true, 133), "value", [], "any", false, false, true, 133), 133, $this->source));
        // line 134
        echo "
<div id=\"";
        // line 135
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["paragraph_id"] ?? null), 135, $this->source), "html", null, true);
        echo "\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 135), 135, $this->source), "html", null, true);
        echo ">
  <div
    ";
        // line 137
        if (($context["w3css_bg_color"] ?? null)) {
            echo "style=\"background-color: rgba( ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["w3css_bg_color"] ?? null), 137, $this->source), "html", null, true);
            echo " )\" ";
        }
        // line 138
        echo "    class=\"w3-row p-container-inner";
        (((($context["w3css_image_classes"] ?? null) == "")) ? (print ("")) : (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["w3css_image_classes"] ?? null)), "html", null, true))));
        echo "\">

    ";
        // line 140
        if (($context["w3css_margin_padding"] ?? null)) {
            // line 141
            echo "    <div class=\"w3-row ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["w3css_margin_padding"] ?? null), 141, $this->source), "html", null, true);
            echo "\">
      ";
        }
        // line 143
        echo "
      ";
        // line 144
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_content_title", [], "any", false, false, true, 144))) {
            // line 145
            echo "        <h3 class=\"content-title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_content_title", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
            echo "</h3>
      ";
        }
        // line 147
        echo "
      ";
        // line 148
        if (($context["w3css_link"] ?? null)) {
            // line 149
            echo "      <a class=\"w3-row w3css-link\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["w3css_link"] ?? null), 149, $this->source), "html", null, true);
            echo "\">
        ";
        }
        // line 151
        echo "
        <div
          class=\"w3-row w3-img-wrapper";
        // line 153
        (((($context["w3css_round"] ?? null) == "")) ? (print ("")) : (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["w3css_round"] ?? null)), "html", null, true))));
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "w3css_content_title", [], "any", false, false, true, 153))) {
            echo " w3-dis-top-left-right ";
        }
        if (($context["w3css_padding"] ?? null)) {
            echo " w3-dis-radius ";
        }
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["w3css_image"] ?? null), 153, $this->source), "html", null, true);
        echo "</div>

        ";
        // line 155
        if (($context["w3css_link"] ?? null)) {
            // line 156
            echo "      </a>
      ";
        }
        // line 158
        echo "
      ";
        // line 159
        if (($context["w3css_margin_padding"] ?? null)) {
            // line 160
            echo "    </div>
    ";
        }
        // line 162
        echo "
  </div>
</div> ";
    }

    public function getTemplateName()
    {
        return "modules/w3css_paragraphs/templates/paragraph--w3css-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 162,  327 => 160,  325 => 159,  322 => 158,  318 => 156,  316 => 155,  303 => 153,  299 => 151,  293 => 149,  291 => 148,  288 => 147,  282 => 145,  280 => 144,  277 => 143,  271 => 141,  269 => 140,  263 => 138,  257 => 137,  250 => 135,  247 => 134,  245 => 133,  242 => 132,  238 => 130,  236 => 129,  233 => 128,  229 => 126,  227 => 125,  224 => 123,  220 => 121,  217 => 120,  215 => 119,  212 => 118,  208 => 116,  205 => 115,  203 => 114,  200 => 112,  196 => 110,  193 => 109,  191 => 108,  188 => 107,  184 => 105,  181 => 104,  179 => 103,  176 => 102,  172 => 100,  169 => 99,  167 => 98,  164 => 97,  160 => 95,  157 => 94,  155 => 93,  152 => 92,  148 => 90,  145 => 89,  143 => 88,  140 => 87,  136 => 85,  133 => 84,  131 => 83,  128 => 82,  124 => 80,  121 => 79,  119 => 78,  116 => 77,  112 => 75,  109 => 74,  107 => 73,  104 => 72,  100 => 70,  97 => 69,  94 => 68,  91 => 67,  88 => 66,  85 => 65,  82 => 64,  79 => 63,  76 => 62,  73 => 61,  71 => 60,  68 => 59,  64 => 57,  61 => 56,  58 => 55,  56 => 54,  53 => 52,  51 => 50,  50 => 49,  49 => 48,  48 => 47,  47 => 43,  42 => 41,  39 => 40,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/w3css_paragraphs/templates/paragraph--w3css-image.html.twig", "/Applications/MAMP/htdocs/ahuy/modules/w3css_paragraphs/templates/paragraph--w3css-image.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 43, "if" => 54);
        static $filters = array("escape" => 41, "clean_class" => 47, "render" => 54, "trim" => 55, "striptags" => 55, "merge" => 57, "slice" => 62, "replace" => 63);
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
