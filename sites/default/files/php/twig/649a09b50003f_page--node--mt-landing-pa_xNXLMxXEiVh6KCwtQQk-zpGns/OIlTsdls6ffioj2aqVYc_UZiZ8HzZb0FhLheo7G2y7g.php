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

/* themes/custom/baseplus/templates/page--node--mt-landing-page.html.twig */
class __TwigTemplate_c21d99541fe4631986d0b5e6f5709cbb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_container' => [$this, 'block_page_container'],
            'page_top' => [$this, 'block_page_top'],
            'reading_progress_indicator' => [$this, 'block_reading_progress_indicator'],
            'main_content' => [$this, 'block_main_content'],
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
        $this->parent = $this->loadTemplate("page.html.twig", "themes/custom/baseplus/templates/page--node--mt-landing-page.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_page_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
  ";
        // line 12
        $this->displayBlock('page_top', $context, $blocks);
        // line 139
        echo "
  ";
        // line 140
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 140)) {
            // line 141
            echo "    <div class=\"system-messages clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            ";
            // line 145
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 151
        echo "
  ";
        // line 152
        $this->displayBlock('main_content', $context, $blocks);
        // line 199
        echo "  ";
        // line 200
        echo "
";
    }

    // line 12
    public function block_page_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        if ((((((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 13) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 13)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 13)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 13)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 13)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 13)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 13)) || ($context["post_progress"] ?? null))) {
            // line 14
            echo "    <div class=\"page-top-container\">
      ";
            // line 16
            echo "      <div class=\"header-container\">

        ";
            // line 18
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 18) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 18))) {
                // line 19
                echo "          ";
                // line 20
                echo "          <div class=\"clearfix header-top-highlighted ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_background_color"] ?? null), 20, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
            <div class=\"";
                // line 21
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_layout_container"] ?? null), 21, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_horizontal_paddings"] ?? null), 21, $this->source), "html", null, true);
                echo "\">
              ";
                // line 23
                echo "              <div class=\"clearfix header-top-highlighted__container";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                ";
                // line 24
                if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                    // line 25
                    echo "                  data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_animation_effect"] ?? null), 25, $this->source), "html", null, true);
                    echo "\"
                ";
                }
                // line 26
                echo ">
                <div class=\"row d-flex align-items-center\">
                  ";
                // line 28
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 28)) {
                    // line 29
                    echo "                    <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_first_grid_class"] ?? null), 29, $this->source), "html", null, true);
                    echo "\">
                      ";
                    // line 31
                    echo "                      <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                        ";
                    // line 32
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                    echo "
                      </div>
                      ";
                    // line 35
                    echo "                    </div>
                  ";
                }
                // line 37
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 37)) {
                    // line 38
                    echo "                    <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_second_grid_class"] ?? null), 38, $this->source), "html", null, true);
                    echo "\">
                      ";
                    // line 40
                    echo "                      <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                        ";
                    // line 41
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                    echo "
                      </div>
                      ";
                    // line 44
                    echo "                    </div>
                  ";
                }
                // line 46
                echo "                </div>
              </div>
              ";
                // line 49
                echo "            </div>
          </div>
          ";
                // line 52
                echo "        ";
            }
            // line 53
            echo "
        ";
            // line 54
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 54) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 54))) {
                // line 55
                echo "          ";
                // line 56
                echo "          <div class=\"clearfix header-top ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_background_color"] ?? null), 56, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
            <div class=\"";
                // line 57
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_layout_container"] ?? null), 57, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_horizontal_paddings"] ?? null), 57, $this->source), "html", null, true);
                echo "\">
              ";
                // line 59
                echo "              <div class=\"clearfix header-top__container";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                ";
                // line 60
                if ((($context["header_top_animations"] ?? null) == "enabled")) {
                    // line 61
                    echo "                  data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_animation_effect"] ?? null), 61, $this->source), "html", null, true);
                    echo "\"
                ";
                }
                // line 62
                echo ">
                <div class=\"row\">
                  ";
                // line 64
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 64)) {
                    // line 65
                    echo "                    <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_first_grid_class"] ?? null), 65, $this->source), "html", null, true);
                    echo "\">
                      ";
                    // line 67
                    echo "                      <div class=\"clearfix header-top__section header-top-first\">
                        ";
                    // line 68
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                    echo "
                      </div>
                      ";
                    // line 71
                    echo "                    </div>
                  ";
                }
                // line 73
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 73)) {
                    // line 74
                    echo "                    <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_second_grid_class"] ?? null), 74, $this->source), "html", null, true);
                    echo "\">
                      ";
                    // line 76
                    echo "                      <div class=\"clearfix header-top__section header-top-second\">
                        ";
                    // line 77
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                    echo "
                      </div>
                      ";
                    // line 80
                    echo "                    </div>
                  ";
                }
                // line 82
                echo "                </div>
              </div>
              ";
                // line 85
                echo "            </div>
          </div>
          ";
                // line 88
                echo "        ";
            }
            // line 89
            echo "
        ";
            // line 90
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 90) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 90)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 90))) {
                // line 91
                echo "          ";
                // line 92
                echo "          ";
                $this->displayBlock('reading_progress_indicator', $context, $blocks);
                // line 94
                echo "          <header role=\"banner\" class=\"clearfix header ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_background_color"] ?? null), 94, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container_class"] ?? null), 94, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_columns_class"] ?? null), 94, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
            <div class=\"";
                // line 95
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container"] ?? null), 95, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_horizontal_paddings"] ?? null), 95, $this->source), "html", null, true);
                echo "\">
              ";
                // line 97
                echo "              <div class=\"clearfix header__container\">
                <div class=\"row align-items-center\">
                  ";
                // line 99
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 99)) {
                    // line 100
                    echo "                    <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_first_grid_class"] ?? null), 100, $this->source), "html", null, true);
                    echo "\">
                      ";
                    // line 102
                    echo "                      <div class=\"clearfix header__section header-first\">
                        ";
                    // line 103
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
                    echo "
                      </div>
                      ";
                    // line 106
                    echo "                    </div>
                  ";
                }
                // line 108
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 108)) {
                    // line 109
                    echo "                    <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_second_grid_class"] ?? null), 109, $this->source), "html", null, true);
                    echo "\">
                      ";
                    // line 111
                    echo "                      <div class=\"clearfix header__section header-second";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_mobile_menu_display"] ?? null)) ? (" d-none d-md-block") : ("")));
                    echo "\">
                        ";
                    // line 112
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                    echo "
                      </div>
                      ";
                    // line 115
                    echo "                    </div>
                  ";
                }
                // line 117
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 117)) {
                    // line 118
                    echo "                    <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_third_grid_class"] ?? null), 118, $this->source), "html", null, true);
                    echo "\">
                      ";
                    // line 120
                    echo "                      <div class=\"clearfix header__section header-third\">
                        ";
                    // line 121
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
                    echo "
                      </div>
                      ";
                    // line 124
                    echo "                    </div>
                  ";
                }
                // line 126
                echo "                </div>
              </div>
              ";
                // line 129
                echo "            </div>
          </header>
          ";
                // line 132
                echo "        ";
            }
            // line 133
            echo "
      </div>
      ";
            // line 136
            echo "    </div>
    ";
        }
        // line 138
        echo "  ";
    }

    // line 92
    public function block_reading_progress_indicator($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "          ";
    }

    // line 152
    public function block_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/node-landing-page"), "html", null, true);
        echo "
  <div ";
        // line 154
        if (($context["main_content_id"] ?? null)) {
            echo "id=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_id"] ?? null), 154, $this->source), "html", null, true);
            echo "\"";
        }
        echo " class=\"clearfix main-content\">
    <div>
      <div class=\"clearfix main-content__container\">
        <div>
          <section>
            ";
        // line 160
        echo "            <div class=\"clearfix main-content__section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
        echo "\"
            ";
        // line 161
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 162
            echo "              data-animate-effect=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_animation_effect"] ?? null), 162, $this->source), "html", null, true);
            echo "\"
            ";
        }
        // line 163
        echo ">
            ";
        // line 164
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 164)) {
            // line 165
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 167
        echo "            </div>
            ";
        // line 169
        echo "          </section>
          ";
        // line 170
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 170)) {
            // line 171
            echo "            <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid_class"] ?? null), 171, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_paddings"] ?? null), 171, $this->source), "html", null, true);
            echo "\">
            ";
            // line 173
            echo "            <section class=\"sidebar__section sidebar-first clearfix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
              ";
            // line 174
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 175
                echo "              data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_animation_effect"] ?? null), 175, $this->source), "html", null, true);
                echo "\"
              ";
            }
            // line 176
            echo ">
              ";
            // line 177
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 177), 177, $this->source), "html", null, true);
            echo "
            </section>
            ";
            // line 180
            echo "            </aside>
          ";
        }
        // line 182
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 182)) {
            // line 183
            echo "            <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_grid_class"] ?? null), 183, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_paddings"] ?? null), 183, $this->source), "html", null, true);
            echo "\">
            ";
            // line 185
            echo "            <section class=\"sidebar__section sidebar-second clearfix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
              ";
            // line 186
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 187
                echo "              data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_animation_effect"] ?? null), 187, $this->source), "html", null, true);
                echo "\"
              ";
            }
            // line 188
            echo ">
              ";
            // line 189
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 189), 189, $this->source), "html", null, true);
            echo "
            </section>
            ";
            // line 192
            echo "            </aside>
          ";
        }
        // line 194
        echo "        </div>
      </div>
    </div>
  </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/page--node--mt-landing-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  526 => 194,  522 => 192,  517 => 189,  514 => 188,  508 => 187,  506 => 186,  499 => 185,  492 => 183,  489 => 182,  485 => 180,  480 => 177,  477 => 176,  471 => 175,  469 => 174,  462 => 173,  455 => 171,  453 => 170,  450 => 169,  447 => 167,  441 => 165,  439 => 164,  436 => 163,  430 => 162,  428 => 161,  421 => 160,  409 => 154,  404 => 153,  400 => 152,  396 => 93,  392 => 92,  388 => 138,  384 => 136,  380 => 133,  377 => 132,  373 => 129,  369 => 126,  365 => 124,  360 => 121,  357 => 120,  352 => 118,  349 => 117,  345 => 115,  340 => 112,  335 => 111,  330 => 109,  327 => 108,  323 => 106,  318 => 103,  315 => 102,  310 => 100,  308 => 99,  304 => 97,  298 => 95,  287 => 94,  284 => 92,  282 => 91,  280 => 90,  277 => 89,  274 => 88,  270 => 85,  266 => 82,  262 => 80,  257 => 77,  254 => 76,  249 => 74,  246 => 73,  242 => 71,  237 => 68,  234 => 67,  229 => 65,  227 => 64,  223 => 62,  217 => 61,  215 => 60,  210 => 59,  204 => 57,  197 => 56,  195 => 55,  193 => 54,  190 => 53,  187 => 52,  183 => 49,  179 => 46,  175 => 44,  170 => 41,  167 => 40,  162 => 38,  159 => 37,  155 => 35,  150 => 32,  147 => 31,  142 => 29,  140 => 28,  136 => 26,  130 => 25,  128 => 24,  123 => 23,  117 => 21,  110 => 20,  108 => 19,  106 => 18,  102 => 16,  99 => 14,  96 => 13,  92 => 12,  87 => 200,  85 => 199,  83 => 152,  80 => 151,  71 => 145,  65 => 141,  63 => 140,  60 => 139,  58 => 12,  55 => 11,  51 => 10,  40 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/page--node--mt-landing-page.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/page--node--mt-landing-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 12, "if" => 140);
        static $filters = array("escape" => 145);
        static $functions = array("attach_library" => 153);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['escape'],
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
