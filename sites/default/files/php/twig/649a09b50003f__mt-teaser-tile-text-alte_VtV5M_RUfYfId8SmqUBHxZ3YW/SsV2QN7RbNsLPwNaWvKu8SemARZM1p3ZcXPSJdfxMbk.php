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

/* @baseplus/partials/_mt-teaser-tile-text-alternative.html.twig */
class __TwigTemplate_ae0e7232f5fb98897ffe12e8cbec6fb8 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 7), 7, $this->source), "html", null, true);
        echo ">
  ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 8, $this->source), "html", null, true);
        echo "
  ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 9, $this->source), "html", null, true);
        echo "

  ";
        // line 11
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["pre_content_first"] ?? null)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["pre_content_second"] ?? null)))) {
            // line 12
            echo "    <div class=\"node__meta\">
      ";
            // line 13
            if ((($context["display_submitted"] ?? null) &&  !($context["author_info"] ?? null))) {
                // line 14
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 14, $this->source), "html", null, true);
                echo "
      ";
            }
            // line 16
            echo "      ";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["pre_content_first"] ?? null))) {
                // line 17
                echo "        <div class=\"node__meta-item\">
          ";
                // line 18
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_content_first"] ?? null), 18, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 21
            echo "      ";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["pre_content_second"] ?? null))) {
                // line 22
                echo "        <div class=\"node__meta-item\">
          ";
                // line 23
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_content_second"] ?? null), 23, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 26
            echo "    </div>
  ";
        }
        // line 28
        echo "
  ";
        // line 29
        if ( !($context["page"] ?? null)) {
            // line 30
            echo "    <h4";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title mt-0 mb-2"], "method", false, false, true, 30), 30, $this->source), "html", null, true);
            echo ">
      <a href=\"";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 31, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 31, $this->source), "html", null, true);
            echo "</a>
    </h4>
  ";
        }
        // line 34
        echo "
  <div";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content"], "method", false, false, true, 35), 35, $this->source), "html", null, true);
        echo ">
    ";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rendered_content"] ?? null), 36, $this->source), "html", null, true);
        echo "
  </div>

  ";
        // line 39
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["post_content_first"] ?? null))) {
            // line 40
            echo "    <div class=\"node__meta-item\">
      ";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["post_content_first"] ?? null), 41, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 44
        echo "
  ";
        // line 45
        if ((($context["display_submitted"] ?? null) && ($context["author_info"] ?? null))) {
            // line 46
            echo "    <div class=\"node__meta mb-0\">
      ";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 47, $this->source), "html", null, true);
            echo "
      <span";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [0 => "node__submitted"], "method", false, false, true, 48), 48, $this->source), "html", null, true);
            echo ">
        ";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 49, $this->source), "html", null, true);
            echo "
        ";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 50, $this->source), "html", null, true);
            echo "
      </span>
    </div>
  ";
        }
        // line 54
        echo "
</article>
";
    }

    public function getTemplateName()
    {
        return "@baseplus/partials/_mt-teaser-tile-text-alternative.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 54,  156 => 50,  152 => 49,  148 => 48,  144 => 47,  141 => 46,  139 => 45,  136 => 44,  130 => 41,  127 => 40,  125 => 39,  119 => 36,  115 => 35,  112 => 34,  104 => 31,  99 => 30,  97 => 29,  94 => 28,  90 => 26,  84 => 23,  81 => 22,  78 => 21,  72 => 18,  69 => 17,  66 => 16,  60 => 14,  58 => 13,  55 => 12,  53 => 11,  48 => 9,  44 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@baseplus/partials/_mt-teaser-tile-text-alternative.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/partials/_mt-teaser-tile-text-alternative.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11);
        static $filters = array("escape" => 7, "render" => 11);
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
