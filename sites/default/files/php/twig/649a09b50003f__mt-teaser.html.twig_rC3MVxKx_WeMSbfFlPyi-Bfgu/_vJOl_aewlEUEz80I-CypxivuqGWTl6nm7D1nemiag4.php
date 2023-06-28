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

/* @baseplus/partials/_mt-teaser.html.twig */
class __TwigTemplate_98cc610de853d0516719086ab87febe8 extends \Twig\Template
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
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["image"] ?? null)) || ($context["display_submitted"] ?? null))) {
            // line 12
            echo "    <div class=\"teaser-image\">
      ";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 13, $this->source), "html", null, true);
            echo "
      ";
            // line 14
            if (($context["display_submitted"] ?? null)) {
                // line 15
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 15, $this->source), "html", null, true);
                echo "
        <div class=\"node__submitted-date mt-style-custom-tl region--default-background\">
          <div class=\"day\">";
                // line 17
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted_day"] ?? null), 17, $this->source), "html", null, true);
                echo "</div>
          <div class=\"month-year\">
            ";
                // line 19
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted_month"] ?? null), 19, $this->source), "html", null, true);
                echo "
            ";
                // line 20
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted_year"] ?? null), 20, $this->source), "html", null, true);
                echo "
          </div>
        </div>
      ";
            }
            // line 24
            echo "    </div>
  ";
        }
        // line 26
        echo "
  ";
        // line 27
        if (((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "isSticky", [], "method", false, false, true, 27) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_pre_content_first"] ?? null))) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_pre_content_second"] ?? null)))) {
            // line 28
            echo "    <div class=\"teaser-pre-content row align-items-center\">
      ";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "isSticky", [], "method", false, false, true, 29) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_pre_content_first"] ?? null)))) {
                // line 30
                echo "        <div class=\"col-auto d-flex align-items-center mb-3\">
          ";
                // line 31
                if (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "isSticky", [], "method", false, false, true, 31)) {
                    // line 32
                    echo "            ";
                    echo t("<div class=\"promoted-label mt-style-custom-all\">Promoted</div>", array());
                    // line 35
                    echo "          ";
                }
                // line 36
                echo "
          ";
                // line 37
                if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_pre_content_first"] ?? null))) {
                    // line 38
                    echo "            ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["teaser_pre_content_first"] ?? null), 38, $this->source), "html", null, true);
                    echo "
          ";
                }
                // line 40
                echo "        </div>
      ";
            }
            // line 42
            echo "      ";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_pre_content_second"] ?? null))) {
                // line 43
                echo "        <div class=\"col-auto ms-auto teaser-pre-content-second\">
          ";
                // line 44
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["teaser_pre_content_second"] ?? null), 44, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 47
            echo "    </div>
  ";
        }
        // line 49
        echo "
  ";
        // line 50
        if ( !($context["page"] ?? null)) {
            // line 51
            echo "    <h4";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "mt-0 node__title"], "method", false, false, true, 51), 51, $this->source), "html", null, true);
            echo ">
      <a href=\"";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 52, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 52, $this->source), "html", null, true);
            echo "</a>
    </h4>
  ";
        }
        // line 55
        echo "
  <div";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content"], "method", false, false, true, 56), 56, $this->source), "html", null, true);
        echo ">
    ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rendered_content"] ?? null), 57, $this->source), "html", null, true);
        echo "
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "@baseplus/partials/_mt-teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 57,  163 => 56,  160 => 55,  152 => 52,  147 => 51,  145 => 50,  142 => 49,  138 => 47,  132 => 44,  129 => 43,  126 => 42,  122 => 40,  116 => 38,  114 => 37,  111 => 36,  108 => 35,  105 => 32,  103 => 31,  100 => 30,  98 => 29,  95 => 28,  93 => 27,  90 => 26,  86 => 24,  79 => 20,  75 => 19,  70 => 17,  64 => 15,  62 => 14,  58 => 13,  55 => 12,  53 => 11,  48 => 9,  44 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@baseplus/partials/_mt-teaser.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/partials/_mt-teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11, "trans" => 32);
        static $filters = array("escape" => 7, "render" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
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
