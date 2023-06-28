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

/* modules/contrib/calendar_view/templates/calendar-view-pager.html.twig */
class __TwigTemplate_12c8fb2a26fedab87bcdc443db66dc42 extends \Twig\Template
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
        // line 11
        $context["classes"] = [0 => "pager__items", 1 => "js-pager__items", 2 => "calendar-view-pager"];
        // line 17
        echo "
";
        // line 18
        if (twig_length_filter($this->env, ($context["items"] ?? null))) {
            // line 19
            echo "  <ul ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 19), 19, $this->source), "html", null, true);
            echo ">
    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["items"] ?? null), "reset"));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 21
                echo "      <li class=\"pager__item ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ("pager__" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($context["key"], 21, $this->source))), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"], 21, $this->source), "html", null, true);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "  </ul>

  ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "reset", [], "any", false, false, true, 25)) {
                // line 26
                echo "    <div class=\"calendar-view-pager__reset\">";
                // line 27
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "reset", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                // line 28
                echo "</div>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/calendar_view/templates/calendar-view-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 28,  74 => 27,  72 => 26,  70 => 25,  66 => 23,  55 => 21,  51 => 20,  46 => 19,  44 => 18,  41 => 17,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/calendar_view/templates/calendar-view-pager.html.twig", "/var/www/meridianpress.ca/web/modules/contrib/calendar_view/templates/calendar-view-pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "if" => 18, "for" => 20);
        static $filters = array("length" => 18, "escape" => 19, "without" => 20, "clean_class" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['length', 'escape', 'without', 'clean_class'],
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
