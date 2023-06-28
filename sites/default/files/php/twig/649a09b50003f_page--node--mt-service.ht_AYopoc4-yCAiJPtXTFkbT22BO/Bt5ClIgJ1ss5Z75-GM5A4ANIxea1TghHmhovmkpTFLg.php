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

/* themes/custom/baseplus/templates/page--node--mt-service.html.twig */
class __TwigTemplate_841310b0d4ccc4ab09c1fa31dc411d9c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "themes/custom/baseplus/templates/page--node--mt-service.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_internal_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "  ";
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["mt_srv_internal_banner"] ?? null)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 10))) {
            // line 11
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/banner-area"), "html", null, true);
            echo "
    <div class=\"internal-banner-container ";
            // line 12
            ((($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["mt_srv_internal_banner"] ?? null)) &&  !(null === ($context["node"] ?? null)))) ? (print ("internal-banner-container--fullscreen region--colored-background")) : (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["hero_top_background_color"] ?? null), "html", null, true))));
            echo "\">
      ";
            // line 13
            if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["mt_srv_internal_banner"] ?? null)) &&  !(null === ($context["node"] ?? null)))) {
                // line 14
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mt_srv_internal_banner"] ?? null), 14, $this->source), "html", null, true);
                echo "
      ";
            }
            // line 16
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 16)) {
                // line 17
                echo "        <div ";
                if (($context["hero_top_id"] ?? null)) {
                    echo "id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_id"] ?? null), 17, $this->source), "html", null, true);
                    echo "\"";
                }
                echo " class=\"clearfix hero-top d-flex align-items-end ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"internal-banner d-flex align-items-end ";
                // line 18
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["mt_srv_internal_banner"] ?? null), 18, $this->source))) ? ("") : ("internal-banner--plain")));
                echo "\">
          ";
                // line 20
                echo "            <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_layout_container"] ?? null), 20, $this->source), "html", null, true);
                echo "\">
              ";
                // line 22
                echo "              <div class=\"clearfix hero-top__container";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["hero_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                ";
                // line 23
                if ((($context["hero_top_animations"] ?? null) == "enabled")) {
                    // line 24
                    echo "                  data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_animation_effect"] ?? null), 24, $this->source), "html", null, true);
                    echo "\"
                ";
                }
                // line 25
                echo ">
                <div class=\"row align-items-end\">
                  <div class=\"";
                // line 27
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["mt_srv_link"] ?? null), 27, $this->source)) &&  !(null === ($context["node"] ?? null)))) ? ("col-lg-8 col-12 mb-lg-0 mb-4") : ("col-12")));
                echo "\">
                    <div class=\"hero-top__section\">
                      ";
                // line 29
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "
                    </div>
                  </div>
                  ";
                // line 32
                if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["mt_srv_link"] ?? null)) &&  !(null === ($context["node"] ?? null)))) {
                    // line 33
                    echo "                    <div class=\"col-lg-4\">
                      ";
                    // line 34
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mt_srv_link"] ?? null), 34, $this->source), "html", null, true);
                    echo "
                    </div>
                  ";
                }
                // line 37
                echo "                </div>
              </div>
              ";
                // line 40
                echo "            </div>
          </div>
          ";
                // line 43
                echo "        </div>
      ";
            }
            // line 45
            echo "    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/page--node--mt-service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 45,  143 => 43,  139 => 40,  135 => 37,  129 => 34,  126 => 33,  124 => 32,  118 => 29,  113 => 27,  109 => 25,  103 => 24,  101 => 23,  96 => 22,  91 => 20,  87 => 18,  75 => 17,  72 => 16,  66 => 14,  64 => 13,  60 => 12,  55 => 11,  52 => 10,  48 => 9,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/page--node--mt-service.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/page--node--mt-service.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10);
        static $filters = array("render" => 10, "escape" => 11);
        static $functions = array("attach_library" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['render', 'escape'],
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
