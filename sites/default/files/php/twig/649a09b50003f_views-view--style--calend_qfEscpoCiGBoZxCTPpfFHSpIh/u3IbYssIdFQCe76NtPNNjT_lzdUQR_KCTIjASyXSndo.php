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

/* modules/contrib/calendar_view/templates/views-view--style--calendar.html.twig */
class __TwigTemplate_403869cbcf9a76a4141b714b12c62a86 extends \Twig\Template
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
        // line 10
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 12
($context["id"] ?? null), 12, $this->source))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 13
($context["id"] ?? null), 13, $this->source)), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 14
($context["display_id"] ?? null), 14, $this->source)), 4 => ((        // line 15
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 15, $this->source))) : (""))];
        // line 18
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 18), 18, $this->source), "html", null, true);
        echo ">
  ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 19, $this->source), "html", null, true);
        echo "
  ";
        // line 20
        if (($context["title"] ?? null)) {
            // line 21
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 21, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 23
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 23, $this->source), "html", null, true);
        echo "
  ";
        // line 24
        if (($context["header"] ?? null)) {
            // line 25
            echo "    <div class=\"view-header\">
      ";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 26, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 29
        echo "  ";
        if (($context["exposed"] ?? null)) {
            // line 30
            echo "    <div class=\"view-filters\">
      ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 31, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 34
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 35
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 36, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 39
        echo "
  ";
        // line 41
        echo "  ";
        if (($context["pager"] ?? null)) {
            // line 42
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 42, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 44
        echo "
  ";
        // line 45
        if (($context["rows"] ?? null)) {
            // line 46
            echo "    <div class=\"view-content\">
      ";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 47, $this->source), "html", null, true);
            echo "
    </div>
  ";
        } elseif (        // line 49
($context["empty"] ?? null)) {
            // line 50
            echo "    <div class=\"view-empty\">
      ";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 51, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 54
        echo "
  ";
        // line 55
        if (($context["attachment_after"] ?? null)) {
            // line 56
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 57, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 60
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 61
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 61, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 63
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 64
            echo "    <div class=\"view-footer\">
      ";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 65, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 68
        echo "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 69
            echo "    <div class=\"feed-icons\">
      ";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 70, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 73
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/calendar_view/templates/views-view--style--calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 73,  179 => 70,  176 => 69,  173 => 68,  167 => 65,  164 => 64,  161 => 63,  155 => 61,  152 => 60,  146 => 57,  143 => 56,  141 => 55,  138 => 54,  132 => 51,  129 => 50,  127 => 49,  122 => 47,  119 => 46,  117 => 45,  114 => 44,  108 => 42,  105 => 41,  102 => 39,  96 => 36,  93 => 35,  90 => 34,  84 => 31,  81 => 30,  78 => 29,  72 => 26,  69 => 25,  67 => 24,  62 => 23,  56 => 21,  54 => 20,  50 => 19,  45 => 18,  43 => 15,  42 => 14,  41 => 13,  40 => 12,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/calendar_view/templates/views-view--style--calendar.html.twig", "/var/www/meridianpress.ca/web/modules/contrib/calendar_view/templates/views-view--style--calendar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 10, "if" => 20);
        static $filters = array("clean_class" => 12, "escape" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
