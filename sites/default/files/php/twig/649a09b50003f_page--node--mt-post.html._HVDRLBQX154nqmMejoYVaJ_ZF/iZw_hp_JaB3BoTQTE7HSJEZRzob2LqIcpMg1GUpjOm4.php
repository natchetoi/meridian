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

/* themes/custom/baseplus/templates/page--node--mt-post.html.twig */
class __TwigTemplate_6f12c4fae1b6b25d9c4607fef95ff90a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'reading_progress_indicator' => [$this, 'block_reading_progress_indicator'],
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
        $this->parent = $this->loadTemplate("page.html.twig", "themes/custom/baseplus/templates/page--node--mt-post.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_reading_progress_indicator($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "  ";
        if (($context["post_progress"] ?? null)) {
            // line 11
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/post-progress"), "html", null, true);
            echo "
    <div class=\"post-progress\">
      <div class=\"post-progress__bar\"></div>
    </div>
  ";
        }
    }

    // line 17
    public function block_internal_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "  ";
        if (((($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["mt_pst_internal_banner"] ?? null)) || ($context["mt_display_submitted"] ?? null)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["mt_pst_category"] ?? null))) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 18))) {
            // line 19
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/banner-area"), "html", null, true);
            echo "
    <div class=\"internal-banner-container ";
            // line 20
            ((($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["mt_pst_internal_banner"] ?? null)) &&  !(null === ($context["node"] ?? null)))) ? (print ("internal-banner-container--fullscreen region--shade-background")) : (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["hero_top_background_color"] ?? null), "html", null, true))));
            echo "\">
      ";
            // line 21
            if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["mt_pst_internal_banner"] ?? null)) &&  !(null === ($context["node"] ?? null)))) {
                // line 22
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mt_pst_internal_banner"] ?? null), 22, $this->source), "html", null, true);
                echo "
      ";
            }
            // line 24
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 24)) {
                // line 25
                echo "        <div ";
                if (($context["hero_top_id"] ?? null)) {
                    echo "id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_id"] ?? null), 25, $this->source), "html", null, true);
                    echo "\"";
                }
                echo " class=\"clearfix hero-top d-flex align-items-end ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"internal-banner d-flex align-items-end ";
                // line 26
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["mt_pst_internal_banner"] ?? null), 26, $this->source))) ? ("") : ("internal-banner--plain")));
                echo "\">
          ";
                // line 28
                echo "            <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_layout_container"] ?? null), 28, $this->source), "html", null, true);
                echo "\">
              ";
                // line 30
                echo "              <div class=\"clearfix hero-top__container";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["hero_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                ";
                // line 31
                if ((($context["hero_top_animations"] ?? null) == "enabled")) {
                    // line 32
                    echo "                  data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_animation_effect"] ?? null), 32, $this->source), "html", null, true);
                    echo "\"
                ";
                }
                // line 33
                echo ">
                <div class=\"row\">
                  <div class=\"col-12\">
                    <div class=\"hero-top__section\">
                      ";
                // line 37
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "
                      ";
                // line 38
                if ((($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["mt_pst_category"] ?? null)) || ($context["mt_display_submitted"] ?? null)) &&  !(null === ($context["node"] ?? null)))) {
                    // line 39
                    echo "                        <div class=\"row grid-gutter-10 align-items-center internal-banner__meta\">
                          ";
                    // line 40
                    if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["mt_pst_category"] ?? null))) {
                        // line 41
                        echo "                            <div class=\"col-auto mb-1 mt-1 mb-sm-0 mt-sm-0\">
                              ";
                        // line 42
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mt_pst_category"] ?? null), 42, $this->source), "html", null, true);
                        echo "
                            </div>
                          ";
                    }
                    // line 45
                    echo "                          ";
                    if (($context["mt_display_submitted"] ?? null)) {
                        // line 46
                        echo "                            ";
                        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["mt_pst_category"] ?? null))) {
                            // line 47
                            echo "                              <span class=\"internal-banner__meta-separator\"><i class=\"fas fa-square\"></i></span>
                            ";
                        }
                        // line 49
                        echo "                            <div class=\"col-auto mb-0\">
                              <div class=\"node__submitted-date\">
                                ";
                        // line 51
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->env->getFilter('format_date')->getCallable()($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 51), 51, $this->source), "custom", "F d, Y"), "html", null, true);
                        echo "
                              </div>
                            </div>
                          ";
                    }
                    // line 55
                    echo "                        </div>
                      ";
                }
                // line 57
                echo "                    </div>
                  </div>
                </div>
              </div>
              ";
                // line 62
                echo "            </div>
          </div>
          ";
                // line 65
                echo "        </div>
      ";
            }
            // line 67
            echo "    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/page--node--mt-post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 67,  189 => 65,  185 => 62,  179 => 57,  175 => 55,  168 => 51,  164 => 49,  160 => 47,  157 => 46,  154 => 45,  148 => 42,  145 => 41,  143 => 40,  140 => 39,  138 => 38,  134 => 37,  128 => 33,  122 => 32,  120 => 31,  115 => 30,  110 => 28,  106 => 26,  94 => 25,  91 => 24,  85 => 22,  83 => 21,  79 => 20,  74 => 19,  71 => 18,  67 => 17,  56 => 11,  53 => 10,  49 => 9,  38 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/page--node--mt-post.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/page--node--mt-post.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10);
        static $filters = array("escape" => 11, "render" => 18, "format_date" => 51);
        static $functions = array("attach_library" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'render', 'format_date'],
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
