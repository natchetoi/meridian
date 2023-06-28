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

/* themes/custom/baseplus/templates/page--node--mt-product.html.twig */
class __TwigTemplate_3864caeb64d48c5145ad50d20b947352 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'internal_sticky_header' => [$this, 'block_internal_sticky_header'],
            'internal_banner' => [$this, 'block_internal_banner'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("page.html.twig", "themes/custom/baseplus/templates/page--node--mt-product.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_internal_sticky_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/mt-sticky-element-header"), "html", null, true);
        echo "
<div class=\"internal-sticky-header mt-sticky-element-header region--colored-background\">
  <div class=\"container\">
    <div class=\"row d-flex align-items-center\">
      <div class=\"col\">
        <h2 class=\"page-title\">
          ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "
        </h2>
      </div>
      ";
        // line 19
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["mt_prd_buy_link"] ?? null)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["mt_prd_price"] ?? null)))) {
            // line 20
            echo "        <div class=\"col-6 col-xl-4\">
          <div class=\"row d-flex align-items-center\">
            <div class=\"col-6 text-end\">
              ";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mt_prd_price"] ?? null), 23, $this->source), "html", null, true);
            echo "
            </div>
            <div class=\"col-6\">
              ";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mt_prd_buy_link"] ?? null), 26, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      ";
        }
        // line 31
        echo "    </div>
  </div>
</div>
";
    }

    // line 35
    public function block_internal_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 36)) {
            // line 37
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/banner-area"), "html", null, true);
            echo "
    <div class=\"internal-banner-container ";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_background_color"] ?? null), 38, $this->source), "html", null, true);
            echo "\">
      <div ";
            // line 39
            if (($context["hero_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_id"] ?? null), 39, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix hero-top d-flex align-items-end ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
        <div class=\"internal-banner d-flex align-items-end\">
        ";
            // line 42
            echo "          <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_layout_container"] ?? null), 42, $this->source), "html", null, true);
            echo "\">
            ";
            // line 44
            echo "            <div class=\"clearfix hero-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["hero_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
              ";
            // line 45
            if ((($context["hero_top_animations"] ?? null) == "enabled")) {
                // line 46
                echo "                data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_animation_effect"] ?? null), 46, $this->source), "html", null, true);
                echo "\"
              ";
            }
            // line 47
            echo ">
              <div class=\"row\">
                <div class=\"col-12\">
                  <div class=\"hero-top__section\">
                    ";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "
                  </div>
                </div>
              </div>
            </div>
            ";
            // line 57
            echo "          </div>
        </div>
        ";
            // line 60
            echo "      </div>
    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/page--node--mt-product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 60,  156 => 57,  148 => 51,  142 => 47,  136 => 46,  134 => 45,  129 => 44,  124 => 42,  112 => 39,  108 => 38,  103 => 37,  100 => 36,  96 => 35,  89 => 31,  81 => 26,  75 => 23,  70 => 20,  68 => 19,  62 => 16,  53 => 10,  49 => 9,  38 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/page--node--mt-product.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/page--node--mt-product.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19);
        static $filters = array("escape" => 10, "render" => 19);
        static $functions = array("attach_library" => 10);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'render'],
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
