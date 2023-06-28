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

/* @baseplus/partials/_mt-teaser-tile-image.html.twig */
class __TwigTemplate_5891a7cf18de949ef85ec894b1d01c70 extends \Twig\Template
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
  <div class=\"teaser-tile-image-container\">
    ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 9, $this->source), "html", null, true);
        echo "
    ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 10, $this->source), "html", null, true);
        echo "
    ";
        // line 11
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["image"] ?? null))) {
            // line 12
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 12, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 14
        echo "    <div class=\"caption-wrapper\">
      <div class=\"teaser-tile-image-caption-top\">
        ";
        // line 16
        if ( !($context["page"] ?? null)) {
            // line 17
            echo "          <h4";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "mt-0 mb-0"], "method", false, false, true, 17), 17, $this->source), "html", null, true);
            echo ">
            <a href=\"";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 18, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 18, $this->source), "html", null, true);
            echo "</a>
          </h4>
        ";
        }
        // line 21
        echo "
        ";
        // line 22
        if (($context["display_submitted"] ?? null)) {
            // line 23
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 23, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 25
        echo "
        ";
        // line 26
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_meta_first"] ?? null)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_meta_second"] ?? null)))) {
            // line 27
            echo "          <div class=\"node__meta\">
            ";
            // line 28
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_meta_first"] ?? null))) {
                // line 29
                echo "              <span class=\"node__meta-item\">
                ";
                // line 30
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["teaser_tile_meta_first"] ?? null), 30, $this->source), "html", null, true);
                echo "
              </span>
            ";
            }
            // line 33
            echo "            ";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_meta_second"] ?? null))) {
                // line 34
                echo "              <span class=\"node__meta-item\">
                ";
                // line 35
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["teaser_tile_meta_second"] ?? null), 35, $this->source), "html", null, true);
                echo "
              </span>
            ";
            }
            // line 38
            echo "          </div>
        ";
        }
        // line 40
        echo "      </div>

      <div class=\"teaser-tile-image-caption-bottom\">
        ";
        // line 43
        if (($context["teaser_tile_caption_bottom"] ?? null)) {
            // line 44
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["teaser_tile_caption_bottom"] ?? null), 44, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 46
        echo "      </div>
      <a class=\"overlay-target-link\" href=\"";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 47, $this->source), "html", null, true);
        echo "\"></a>
    </div>
  </div>
  <div";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content"], "method", false, false, true, 50), 50, $this->source), "html", null, true);
        echo ">
    ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rendered_content"] ?? null), 51, $this->source), "html", null, true);
        echo "
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "@baseplus/partials/_mt-teaser-tile-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 51,  148 => 50,  142 => 47,  139 => 46,  133 => 44,  131 => 43,  126 => 40,  122 => 38,  116 => 35,  113 => 34,  110 => 33,  104 => 30,  101 => 29,  99 => 28,  96 => 27,  94 => 26,  91 => 25,  85 => 23,  83 => 22,  80 => 21,  72 => 18,  67 => 17,  65 => 16,  61 => 14,  55 => 12,  53 => 11,  49 => 10,  45 => 9,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@baseplus/partials/_mt-teaser-tile-image.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/partials/_mt-teaser-tile-image.html.twig");
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
