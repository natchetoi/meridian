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

/* modules/contrib/calendar_view/templates/views-view-calendar.html.twig */
class __TwigTemplate_0e5e14a68f801588fca05f73e0a77cf8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'libraries' => [$this, 'block_libraries'],
            'calendars' => [$this, 'block_calendars'],
            'rows' => [$this, 'block_rows'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $this->displayBlock('libraries', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('calendars', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('rows', $context, $blocks);
    }

    // line 24
    public function block_libraries($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("calendar_view/calendar"), "html", null, true);
        echo "
  ";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("calendar_view/multiday"), "html", null, true);
        echo "
";
    }

    // line 29
    public function block_calendars($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  <div class=\"view-calendar\">
    ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["calendars"] ?? null), 31, $this->source), "html", null, true);
        echo "
  </div>
";
    }

    // line 35
    public function block_rows($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "display_rows", [], "any", false, false, true, 36)) {
            // line 37
            echo "    <div class=\"view-results\">
      ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 39
                echo "        ";
                $context["row_classes"] = [0 => ((($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
                // line 40
                echo "        <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 40), "addClass", [0 => ($context["row_classes"] ?? null)], "method", false, false, true, 40), 40, $this->source), "html", null, true);
                echo ">";
                // line 41
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                // line 42
                echo "</div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/calendar_view/templates/views-view-calendar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  115 => 44,  108 => 42,  106 => 41,  102 => 40,  99 => 39,  95 => 38,  92 => 37,  89 => 36,  85 => 35,  78 => 31,  75 => 30,  71 => 29,  65 => 26,  60 => 25,  56 => 24,  52 => 35,  49 => 34,  47 => 29,  44 => 28,  42 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/calendar_view/templates/views-view-calendar.html.twig", "/var/www/meridianpress.ca/web/modules/contrib/calendar_view/templates/views-view-calendar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 24, "if" => 36, "for" => 38, "set" => 39);
        static $filters = array("escape" => 25);
        static $functions = array("attach_library" => 25);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'for', 'set'],
                ['escape'],
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
