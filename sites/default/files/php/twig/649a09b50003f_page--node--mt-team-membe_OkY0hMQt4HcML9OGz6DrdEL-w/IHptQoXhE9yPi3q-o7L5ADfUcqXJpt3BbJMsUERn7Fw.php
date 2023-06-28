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

/* themes/custom/baseplus/templates/page--node--mt-team-member.html.twig */
class __TwigTemplate_fdcb5b74a0e51d61721a4b66feed1796 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("page.html.twig", "themes/custom/baseplus/templates/page--node--mt-team-member.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_internal_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 10)) {
            // line 11
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/banner-area"), "html", null, true);
            echo "
    <div class=\"internal-banner-container ";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_background_color"] ?? null), 12, $this->source), "html", null, true);
            echo "\">
      <div ";
            // line 13
            if (($context["hero_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_id"] ?? null), 13, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix hero-top d-flex align-items-end ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
        <div class=\"internal-banner d-flex align-items-end internal-banner--plain\">
        ";
            // line 16
            echo "          <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_layout_container"] ?? null), 16, $this->source), "html", null, true);
            echo "\">
            ";
            // line 18
            echo "            <div class=\"clearfix hero-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["hero_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
              ";
            // line 19
            if ((($context["hero_top_animations"] ?? null) == "enabled")) {
                // line 20
                echo "                data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_animation_effect"] ?? null), 20, $this->source), "html", null, true);
                echo "\"
              ";
            }
            // line 21
            echo ">
              <div class=\"row\">
                <div class=\"col-12\">
                  <div class=\"hero-top__section\">
                    ";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "
                    ";
            // line 26
            if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["mt_tmm_subtitle"] ?? null)) &&  !(null === ($context["node"] ?? null)))) {
                // line 27
                echo "                      <div class=\"row align-items-center internal-banner__meta\">
                        <div class=\"col mb-0\">
                          ";
                // line 29
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mt_tmm_subtitle"] ?? null), 29, $this->source), "html", null, true);
                echo "
                        </div>
                      </div>
                    ";
            }
            // line 33
            echo "                  </div>
                </div>
              </div>
            </div>
            ";
            // line 38
            echo "          </div>
        </div>
        ";
            // line 41
            echo "      </div>
    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/page--node--mt-team-member.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 41,  123 => 38,  117 => 33,  110 => 29,  106 => 27,  104 => 26,  100 => 25,  94 => 21,  88 => 20,  86 => 19,  81 => 18,  76 => 16,  64 => 13,  60 => 12,  55 => 11,  52 => 10,  48 => 9,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/page--node--mt-team-member.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/page--node--mt-team-member.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10);
        static $filters = array("escape" => 11, "render" => 26);
        static $functions = array("attach_library" => 11);

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
