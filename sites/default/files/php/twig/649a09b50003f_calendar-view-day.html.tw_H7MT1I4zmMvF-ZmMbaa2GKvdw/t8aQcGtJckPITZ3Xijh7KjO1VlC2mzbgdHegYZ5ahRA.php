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

/* modules/contrib/calendar_view/templates/calendar-view-day.html.twig */
class __TwigTemplate_5f9df429266cf5f132f9c856c23e5126 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'day_number' => [$this, 'block_day_number'],
            'day_content' => [$this, 'block_day_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        $context["classes"] = [0 => "calendar-view-day", 1 => ((        // line 24
($context["empty"] ?? null)) ? ("empty") : (""))];
        // line 27
        echo "
<div";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 28), 28, $this->source), "html", null, true);
        echo ">
  ";
        // line 29
        $context["html_date"] = $this->env->getFilter('format_date')->getCallable()($this->sandbox->ensureToStringAllowed(($context["timestamp"] ?? null), 29, $this->source), "html_date");
        // line 30
        echo "  ";
        $context["count"] = (( !($context["rows"] ?? null)) ? (0) : (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 30, $this->source))));
        // line 31
        echo "  ";
        ob_start(function () { return ''; });
        // line 32
        echo "    ";
        echo \Drupal::translation()->formatPlural(abs(        // line 34
($context["count"] ?? null)), "@count result for @html_date", "@count results for @html_date", array("@count" =>         // line 33
($context["count"] ?? null), "@html_date" => ($context["html_date"] ?? null), "@count" =>         // line 35
($context["count"] ?? null), "@html_date" => ($context["html_date"] ?? null), ));
        // line 37
        echo "  ";
        $context["day_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 38
        echo "
\t";
        // line 40
        echo "\t";
        $this->displayBlock('day_number', $context, $blocks);
        // line 45
        echo "
  ";
        // line 46
        $this->displayBlock('day_content', $context, $blocks);
        // line 62
        echo "</div>
";
    }

    // line 40
    public function block_day_number($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "    <time class=\"calendar-view-day__number\" datetime=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["timestamp"] ?? null), 41, $this->source), "Y-m-dTH:i:s"), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter($this->sandbox->ensureToStringAllowed(($context["day_title"] ?? null), 41, $this->source)), "html", null, true);
        echo "\">
      ";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["timestamp"] ?? null), 42, $this->source), "j"), "html", null, true);
        echo "
    </time>
\t";
    }

    // line 46
    public function block_day_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "    ";
        if (($context["empty"] ?? null)) {
            // line 48
            echo "      ";
            // line 49
            echo "      <div class=\"calendar-view-day__rows empty\"></div>
    ";
        } else {
            // line 51
            echo "      ";
            // line 52
            echo "      <ul class=\"calendar-view-day__rows\">
        ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 54
                echo "          ";
                $context["row_classes"] = [0 => ((($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
                // line 55
                echo "          <li";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 55), "addClass", [0 => ($context["row_classes"] ?? null), 1 => "calendar-view-day__row"], "method", false, false, true, 55), 55, $this->source), "html", null, true);
                echo ">";
                // line 56
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                // line 57
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "      </ul>
    ";
        }
        // line 61
        echo "  ";
    }

    public function getTemplateName()
    {
        return "modules/contrib/calendar_view/templates/calendar-view-day.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 61,  140 => 59,  133 => 57,  131 => 56,  127 => 55,  124 => 54,  120 => 53,  117 => 52,  115 => 51,  111 => 49,  109 => 48,  106 => 47,  102 => 46,  95 => 42,  88 => 41,  84 => 40,  79 => 62,  77 => 46,  74 => 45,  71 => 40,  68 => 38,  65 => 37,  63 => 35,  62 => 33,  61 => 34,  59 => 32,  56 => 31,  53 => 30,  51 => 29,  47 => 28,  44 => 27,  42 => 24,  41 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/calendar_view/templates/calendar-view-day.html.twig", "/var/www/meridianpress.ca/web/modules/contrib/calendar_view/templates/calendar-view-day.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 22, "trans" => 32, "block" => 40, "if" => 47, "for" => 53);
        static $filters = array("escape" => 28, "format_date" => 29, "length" => 30, "date" => 41, "trim" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans', 'block', 'if', 'for'],
                ['escape', 'format_date', 'length', 'date', 'trim'],
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
