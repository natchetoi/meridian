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

/* themes/custom/baseplus/templates/page--node--mt-showcase.html.twig */
class __TwigTemplate_39f073b260591b7b8db658b722f7b40d extends \Twig\Template
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
        $this->parent = $this->loadTemplate("page.html.twig", "themes/custom/baseplus/templates/page--node--mt-showcase.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_internal_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "  ";
        if ((($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["mt_shw_internal_banner"] ?? null)) || ($context["mt_display_submitted"] ?? null)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 10))) {
            // line 11
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/banner-area"), "html", null, true);
            echo "
    <div class=\"internal-banner-container ";
            // line 12
            ((($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["mt_shw_internal_banner"] ?? null)) &&  !(null === ($context["node"] ?? null)))) ? (print ("internal-banner-container--fullscreen region--shade-background")) : (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["hero_top_background_color"] ?? null), "html", null, true))));
            echo "\">
      ";
            // line 13
            if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["mt_shw_internal_banner"] ?? null)) &&  !(null === ($context["node"] ?? null)))) {
                // line 14
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mt_shw_internal_banner"] ?? null), 14, $this->source), "html", null, true);
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
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["mt_shw_internal_banner"] ?? null), 18, $this->source))) ? ("") : ("internal-banner--plain")));
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
                <div class=\"row\">
                  <div class=\"col-12\">
                    <div class=\"hero-top__section\">
                      ";
                // line 29
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "
                    </div>
                  </div>
                </div>
              </div>
              ";
                // line 35
                echo "            </div>
          </div>
          ";
                // line 38
                echo "        </div>
      ";
            }
            // line 40
            echo "      ";
            if ((($context["mt_display_submitted"] ?? null) &&  !(null === ($context["node"] ?? null)))) {
                // line 41
                echo "        <div class=\"container mt-submitted-info\">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"node__meta\">
                <div class=\"profile\">
                  <div class=\"field--name-user-picture\">
                    ";
                // line 47
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mt_node_user"] ?? null), 47, $this->source), "html", null, true);
                echo "
                  </div>
                </div>
                <span class=\"node__submitted-info\">
                  ";
                // line 51
                echo t("by", array());
                // line 52
                echo "                  <span>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "getOwner", [], "method", false, false, true, 52), "name", [], "any", false, false, true, 52), "value", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                echo "</span>
                  ";
                // line 53
                echo t("on", array());
                // line 54
                echo "                  <span class=\"node__date\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->env->getFilter('format_date')->getCallable()($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 54), 54, $this->source), "custom", "F d, Y"), "html", null, true);
                echo "</span>
                </span>
              </div>
            </div>
          </div>
        </div>
      ";
            }
            // line 61
            echo "
    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/page--node--mt-showcase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 61,  158 => 54,  156 => 53,  151 => 52,  149 => 51,  142 => 47,  134 => 41,  131 => 40,  127 => 38,  123 => 35,  115 => 29,  109 => 25,  103 => 24,  101 => 23,  96 => 22,  91 => 20,  87 => 18,  75 => 17,  72 => 16,  66 => 14,  64 => 13,  60 => 12,  55 => 11,  52 => 10,  48 => 9,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/page--node--mt-showcase.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/page--node--mt-showcase.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10, "trans" => 51);
        static $filters = array("render" => 10, "escape" => 11, "format_date" => 54);
        static $functions = array("attach_library" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['render', 'escape', 'format_date'],
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
