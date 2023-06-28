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

/* @baseplus/partials/_mt-hero.html.twig */
class __TwigTemplate_30f162d67fab8c4db880638f3fee88d5 extends \Twig\Template
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
        // line 1
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 1), 1, $this->source), "html", null, true);
        echo ">

";
        // line 3
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["slideshow_image"] ?? null)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["slideshow_caption"] ?? null)))) {
            // line 4
            echo "  <div class=\"overlay-container\">
    <span class=\"overlay overlay--colored\">
      <a class=\"overlay-target-link\" href=\"";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 6, $this->source), "html", null, true);
            echo "\"></a>
    </span>
    ";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slideshow_image"] ?? null), 8, $this->source), "html", null, true);
            echo "
    ";
            // line 9
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["slideshow_caption"] ?? null))) {
                // line 10
                echo "      <div class=\"slideshow-image__caption mt-style-custom-tl region--default-background\">
        ";
                // line 11
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slideshow_caption"] ?? null), 11, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 14
            echo "  </div>
";
        }
        // line 16
        echo "
  ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 17, $this->source), "html", null, true);
        echo "
  ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 18, $this->source), "html", null, true);
        echo "
  ";
        // line 19
        if ( !($context["page"] ?? null)) {
            // line 20
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 20), 20, $this->source), "html", null, true);
            echo ">
      <a href=\"";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 21, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 21, $this->source), "html", null, true);
            echo "</a>
    </h2>
  ";
        }
        // line 24
        echo "
  <div";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content"], "method", false, false, true, 25), 25, $this->source), "html", null, true);
        echo ">
    ";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rendered_content"] ?? null), 26, $this->source), "html", null, true);
        echo "
  </div>
  ";
        // line 28
        if ((($context["display_submitted"] ?? null) || (($context["node_comments"] ?? null) && (($context["comment_count"] ?? null) > 0)))) {
            // line 29
            echo "    <footer class=\"d-block node__meta\">
      <div class=\"d-flex\">
        ";
            // line 31
            if (($context["display_submitted"] ?? null)) {
                // line 32
                echo "          <div>
            ";
                // line 33
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 33, $this->source), "html", null, true);
                echo "
            <span";
                // line 34
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [0 => "node__submitted"], "method", false, false, true, 34), 34, $this->source), "html", null, true);
                echo ">
              ";
                // line 35
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 35, $this->source), "html", null, true);
                echo "
              ";
                // line 36
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 36, $this->source), "html", null, true);
                echo "
            </span>
          </div>
        ";
            }
            // line 40
            echo "        ";
            if ((($context["node_comments"] ?? null) && (($context["comment_count"] ?? null) > 0))) {
                // line 41
                echo "          <div class=\"ms-auto align-self-center pb-2 node__comments-count\">
            ";
                // line 42
                echo \Drupal::translation()->formatPlural(abs(                // line 44
($context["comment_count"] ?? null)), "1 comment", "@comment_count comments", array("@comment_count" =>                 // line 45
($context["comment_count"] ?? null), ));
                // line 47
                echo "          </div>
        ";
            }
            // line 49
            echo "      </div>
    </footer>
  ";
        }
        // line 52
        echo "
</article>
";
    }

    public function getTemplateName()
    {
        return "@baseplus/partials/_mt-hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 52,  157 => 49,  153 => 47,  151 => 45,  150 => 44,  149 => 42,  146 => 41,  143 => 40,  136 => 36,  132 => 35,  128 => 34,  124 => 33,  121 => 32,  119 => 31,  115 => 29,  113 => 28,  108 => 26,  104 => 25,  101 => 24,  93 => 21,  88 => 20,  86 => 19,  82 => 18,  78 => 17,  75 => 16,  71 => 14,  65 => 11,  62 => 10,  60 => 9,  56 => 8,  51 => 6,  47 => 4,  45 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@baseplus/partials/_mt-hero.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/partials/_mt-hero.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "trans" => 42);
        static $filters = array("escape" => 1, "render" => 3);
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
