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

/* themes/d8w3css/templates/navigation/links.html.twig */
class __TwigTemplate_cc6a43e4a30c7bcf049448b9fde112864e9c293db4319a221ee35a1c87faae37 extends \Twig\Template
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
        // line 34
        if (($context["links"] ?? null)) {
            // line 35
            if (($context["heading"] ?? null)) {
                // line 36
                if (twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 36)) {
                    // line 37
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "attributes", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "text", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                    echo "</";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                    echo ">";
                } else {
                    // line 39
                    echo "<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "attributes", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "text", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo "</h2>";
                }
            }
            // line 42
            echo "<ul";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "w3-ul"], "method", false, false, true, 42), 42, $this->source), "html", null, true);
            echo ">";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 44
                echo "<li";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 44), "addClass", [0 => "w3-left w3-small"], "method", false, false, true, 44), 44, $this->source), "html", null, true);
                echo ">";
                // line 45
                if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 45)) {
                    // line 46
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 47
$context["item"], "text_attributes", [], "any", false, false, true, 47)) {
                    // line 48
                    echo "<span";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text_attributes", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                    echo "</span>";
                } else {
                    // line 50
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                }
                // line 52
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "</ul>";
        }
    }

    public function getTemplateName()
    {
        return "themes/d8w3css/templates/navigation/links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 54,  91 => 52,  88 => 50,  81 => 48,  79 => 47,  77 => 46,  75 => 45,  71 => 44,  67 => 43,  63 => 42,  55 => 39,  45 => 37,  43 => 36,  41 => 35,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/d8w3css/templates/navigation/links.html.twig", "/Applications/MAMP/htdocs/ahuy/themes/d8w3css/templates/navigation/links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 34, "for" => 43);
        static $filters = array("escape" => 37);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
                []
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
