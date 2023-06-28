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

/* themes/custom/baseplus/templates/node--mt-layout-page.html.twig */
class __TwigTemplate_7bc08f5ed4b9c92f070439a42da1f997 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta_area' => [$this, 'block_meta_area'],
            'content' => [$this, 'block_content'],
            'node_side' => [$this, 'block_node_side'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 72
($context["node"] ?? null), "bundle", [], "any", false, false, true, 72), 72, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 73
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 73)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 74
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 74)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 75)) ? ("node--unpublished") : ("")), 5 => ((        // line 76
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 76, $this->source)))) : ("")), 6 => ((        // line 77
($context["display_submitted"] ?? null)) ? ("node--display-submitted") : ("")), 7 => "clearfix"];
        // line 81
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 81), 81, $this->source), "html", null, true);
        echo ">
  <div class=\"node__container\">
    <div";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__main-content", 1 => "clearfix"], "method", false, false, true, 83), 83, $this->source), "html", null, true);
        echo ">
      <header class=\"node__header\">
        ";
        // line 85
        $this->displayBlock('meta_area', $context, $blocks);
        // line 108
        echo "      </header>
      ";
        // line 109
        $this->displayBlock('content', $context, $blocks);
        // line 112
        echo "    </div>
    ";
        // line 113
        $this->displayBlock('node_side', $context, $blocks);
        // line 115
        echo "  </div>
</article>
";
    }

    // line 85
    public function block_meta_area($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 86, $this->source), "html", null, true);
        echo "
          ";
        // line 87
        if ( !($context["page"] ?? null)) {
            // line 88
            echo "            <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 88), 88, $this->source), "html", null, true);
            echo ">
              <a href=\"";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 89, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 89, $this->source), "html", null, true);
            echo "</a>
            </h2>
          ";
        }
        // line 92
        echo "          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 92, $this->source), "html", null, true);
        echo "
          ";
        // line 93
        if (($context["display_submitted"] ?? null)) {
            // line 94
            echo "            <div class=\"node__meta\">
              ";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 95, $this->source), "html", null, true);
            echo "
              <span";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [0 => "node__submitted-info"], "method", false, false, true, 96), 96, $this->source), "html", null, true);
            echo ">
                ";
            // line 97
            echo t("<span class=\"node__submitted-info-text\">By</span> @author_name on
                  <span class=\"node__submitted-date\">
                    @date
                  </span>", array("@author_name" =>             // line 98
($context["author_name"] ?? null), "@date" =>             // line 100
($context["date"] ?? null), ));
            // line 103
            echo "              </span>
              ";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 104, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 107
        echo "        ";
    }

    // line 109
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 110
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 110, $this->source), "html", null, true);
        echo "
      ";
    }

    // line 113
    public function block_node_side($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/node--mt-layout-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 114,  152 => 113,  145 => 110,  141 => 109,  137 => 107,  131 => 104,  128 => 103,  126 => 100,  125 => 98,  121 => 97,  117 => 96,  113 => 95,  110 => 94,  108 => 93,  103 => 92,  95 => 89,  90 => 88,  88 => 87,  83 => 86,  79 => 85,  73 => 115,  71 => 113,  68 => 112,  66 => 109,  63 => 108,  61 => 85,  56 => 83,  50 => 81,  48 => 77,  47 => 76,  46 => 75,  45 => 74,  44 => 73,  43 => 72,  42 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/node--mt-layout-page.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/node--mt-layout-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 70, "block" => 85, "if" => 87, "trans" => 97);
        static $filters = array("clean_class" => 72, "escape" => 81);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'trans'],
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
