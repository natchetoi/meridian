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

/* @baseplus/partials/_mt-featured-teaser-2.html.twig */
class __TwigTemplate_e5748baaeb71f88d2cc76ff52e18aa1c extends \Twig\Template
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
        // line 7
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 7), "addClass", [0 => ($context["width_class"] ?? null)], "method", false, false, true, 7), "addClass", [0 => "mb-5 pb-4 node--view-mode-mt-featured-teaser-2"], "method", false, false, true, 7), 7, $this->source), "html", null, true);
        echo ">
  <div class=\"mt-style-custom-all mt-featured-teaser-wrapper\">
    <div class=\"row align-items-center\">
      ";
        // line 10
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["image"] ?? null))) {
            // line 11
            echo "        <div class=\"col-md-3 col-sm-4 col-8 ms-auto me-auto mb-3 mb-md-0\">
          ";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 12, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 15
        echo "      <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 15, $this->source))) ? ("ps-md-5 col-md-9 col-sm-8 col-12") : ("col-12")));
        echo "\">

        ";
        // line 17
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["featured_teaser_content"] ?? null))) {
            // line 18
            echo "          <div class=\"featured-teaser-content\">
            ";
            // line 19
            if (($context["quote_icon"] ?? null)) {
                echo "<div class=\"quote-icon\">\"</div>";
            }
            // line 20
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_teaser_content"] ?? null), 20, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 23
        echo "
        ";
        // line 24
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["rendered_content"] ?? null))) {
            // line 25
            echo "          <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content"], "method", false, false, true, 25), 25, $this->source), "html", null, true);
            echo ">
            ";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rendered_content"] ?? null), 26, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 29
        echo "
        <div class=\"featured-teaser-footer\">
          ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 31, $this->source), "html", null, true);
        echo "
          ";
        // line 32
        if ( !($context["page"] ?? null)) {
            // line 33
            echo "            <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "mt-0 node__title"], "method", false, false, true, 33), 33, $this->source), "html", null, true);
            echo ">
              <a href=\"";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 34, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 34, $this->source), "html", null, true);
            echo "</a>
            </h2>
          ";
        }
        // line 37
        echo "          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 37, $this->source), "html", null, true);
        echo "
          ";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_teaser_footer"] ?? null), 38, $this->source), "html", null, true);
        echo "
        </div>

        ";
        // line 41
        if (($context["display_submitted"] ?? null)) {
            // line 42
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 42, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 44
        echo "      </div>

    </div>
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "@baseplus/partials/_mt-featured-teaser-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 44,  131 => 42,  129 => 41,  123 => 38,  118 => 37,  110 => 34,  105 => 33,  103 => 32,  99 => 31,  95 => 29,  89 => 26,  84 => 25,  82 => 24,  79 => 23,  72 => 20,  68 => 19,  65 => 18,  63 => 17,  57 => 15,  51 => 12,  48 => 11,  46 => 10,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@baseplus/partials/_mt-featured-teaser-2.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/partials/_mt-featured-teaser-2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10);
        static $filters = array("escape" => 7, "render" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'render'],
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
