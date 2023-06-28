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

/* themes/custom/baseplus/templates/page--node--mt-canvas-page.html.twig */
class __TwigTemplate_3094a77d2baa6477a2f9f73f29932ba4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_top' => [$this, 'block_page_top'],
            'reading_progress_indicator' => [$this, 'block_reading_progress_indicator'],
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
        $this->parent = $this->loadTemplate("page.html.twig", "themes/custom/baseplus/templates/page--node--mt-canvas-page.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_page_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "  ";
        if (((((((((((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 10) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 10)) || ($context["post_progress"] ?? null)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_first", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_second", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_third", [], "any", false, false, true, 10))) {
            // line 11
            echo "    <div class=\"page-top-container\">

      ";
            // line 13
            if ((((((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 13) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 13)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 13)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 13)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 13)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 13)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 13)) || ($context["post_progress"] ?? null))) {
                // line 14
                echo "        ";
                // line 15
                echo "        <div class=\"header-container\">

          ";
                // line 17
                if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 17) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 17))) {
                    // line 18
                    echo "            ";
                    // line 19
                    echo "            <div class=\"clearfix header-top-highlighted ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_background_color"] ?? null), 19, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                    echo "\">
              <div class=\"";
                    // line 20
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_layout_container"] ?? null), 20, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_horizontal_paddings"] ?? null), 20, $this->source), "html", null, true);
                    echo "\">
                ";
                    // line 22
                    echo "                <div class=\"clearfix header-top-highlighted__container";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    echo "\"
                  ";
                    // line 23
                    if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                        // line 24
                        echo "                    data-animate-effect=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_animation_effect"] ?? null), 24, $this->source), "html", null, true);
                        echo "\"
                  ";
                    }
                    // line 25
                    echo ">
                  <div class=\"row d-flex align-items-center\">
                    ";
                    // line 27
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 27)) {
                        // line 28
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_first_grid_class"] ?? null), 28, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 30
                        echo "                        <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                          ";
                        // line 31
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 34
                        echo "                      </div>
                    ";
                    }
                    // line 36
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 36)) {
                        // line 37
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_second_grid_class"] ?? null), 37, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 39
                        echo "                        <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                          ";
                        // line 40
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 43
                        echo "                      </div>
                    ";
                    }
                    // line 45
                    echo "                  </div>
                </div>
                ";
                    // line 48
                    echo "              </div>
            </div>
            ";
                    // line 51
                    echo "          ";
                }
                // line 52
                echo "
          ";
                // line 53
                if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 53) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 53))) {
                    // line 54
                    echo "            ";
                    // line 55
                    echo "            <div class=\"clearfix header-top ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_background_color"] ?? null), 55, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                    echo "\">
              <div class=\"";
                    // line 56
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_layout_container"] ?? null), 56, $this->source), "html", null, true);
                    echo "\">
                ";
                    // line 58
                    echo "                <div class=\"clearfix header-top__container";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    echo "\"
                  ";
                    // line 59
                    if ((($context["header_top_animations"] ?? null) == "enabled")) {
                        // line 60
                        echo "                    data-animate-effect=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_animation_effect"] ?? null), 60, $this->source), "html", null, true);
                        echo "\"
                  ";
                    }
                    // line 61
                    echo ">
                  <div class=\"row\">
                    ";
                    // line 63
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 63)) {
                        // line 64
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_first_grid_class"] ?? null), 64, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 66
                        echo "                        <div class=\"clearfix header-top__section header-top-first\">
                          ";
                        // line 67
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 70
                        echo "                      </div>
                    ";
                    }
                    // line 72
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 72)) {
                        // line 73
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_second_grid_class"] ?? null), 73, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 75
                        echo "                        <div class=\"clearfix header-top__section header-top-second\">
                          ";
                        // line 76
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 79
                        echo "                      </div>
                    ";
                    }
                    // line 81
                    echo "                  </div>
                </div>
                ";
                    // line 84
                    echo "              </div>
            </div>
            ";
                    // line 87
                    echo "          ";
                }
                // line 88
                echo "
          ";
                // line 89
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 89) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 89)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 89))) {
                    // line 90
                    echo "            ";
                    // line 91
                    echo "            ";
                    $this->displayBlock('reading_progress_indicator', $context, $blocks);
                    // line 93
                    echo "            <header role=\"banner\" class=\"clearfix header ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_background_color"] ?? null), 93, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container_class"] ?? null), 93, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_columns_class"] ?? null), 93, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                    echo "\">
              <div class=\"";
                    // line 94
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container"] ?? null), 94, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_horizontal_paddings"] ?? null), 94, $this->source), "html", null, true);
                    echo "\">
                ";
                    // line 96
                    echo "                <div class=\"clearfix header__container\">
                  <div class=\"row align-items-center\">
                    ";
                    // line 98
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 98)) {
                        // line 99
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_first_grid_class"] ?? null), 99, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 101
                        echo "                        <div class=\"clearfix header__section header-first\">
                          ";
                        // line 102
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 105
                        echo "                      </div>
                    ";
                    }
                    // line 107
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 107)) {
                        // line 108
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_second_grid_class"] ?? null), 108, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 110
                        echo "                        <div class=\"clearfix header__section header-second";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_mobile_menu_display"] ?? null)) ? (" d-none d-md-block") : ("")));
                        echo "\">
                          ";
                        // line 111
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 114
                        echo "                      </div>
                    ";
                    }
                    // line 116
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 116)) {
                        // line 117
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_third_grid_class"] ?? null), 117, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 119
                        echo "                        <div class=\"clearfix header__section header-third\">
                          ";
                        // line 120
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 123
                        echo "                      </div>
                    ";
                    }
                    // line 125
                    echo "                  </div>
                </div>
                ";
                    // line 128
                    echo "              </div>
            </header>
            ";
                    // line 131
                    echo "          ";
                }
                // line 132
                echo "
        </div>
        ";
                // line 135
                echo "      ";
            }
            // line 136
            echo "
      ";
            // line 137
            $this->displayBlock('internal_sticky_header', $context, $blocks);
            // line 139
            echo "
      ";
            // line 140
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 140)) {
                // line 141
                echo "        ";
                // line 142
                echo "        <div ";
                if (($context["banner_id"] ?? null)) {
                    echo "id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_id"] ?? null), 142, $this->source), "html", null, true);
                    echo "\"";
                }
                echo " class=\"clearfix banner ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_background_color"] ?? null), 142, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 143
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_layout_container"] ?? null), 143, $this->source), "html", null, true);
                echo "\">
            ";
                // line 145
                echo "            <div class=\"clearfix banner__container\">
              <div class=\"row\">
                <div class=\"col-12\">
                  <div class=\"banner__section\">
                    ";
                // line 149
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
                echo "
                  </div>
                </div>
              </div>
            </div>
            ";
                // line 155
                echo "          </div>
        </div>
        ";
                // line 158
                echo "      ";
            }
            // line 159
            echo "
      ";
            // line 160
            $this->displayBlock('internal_banner', $context, $blocks);
            // line 187
            echo "
      ";
            // line 188
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_first", [], "any", false, false, true, 188) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_second", [], "any", false, false, true, 188)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_third", [], "any", false, false, true, 188))) {
                // line 189
                echo "        ";
                // line 190
                echo "        <div ";
                if (($context["hero_id"] ?? null)) {
                    echo "id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_id"] ?? null), 190, $this->source), "html", null, true);
                    echo "\"";
                }
                echo " class=\"clearfix hero ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_background_color"] ?? null), 190, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 191
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_layout_container"] ?? null), 191, $this->source), "html", null, true);
                echo "\">
            ";
                // line 193
                echo "            <div class=\"clearfix hero__container";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["hero_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
              ";
                // line 194
                if ((($context["hero_animations"] ?? null) == "enabled")) {
                    // line 195
                    echo "                data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_animation_effect"] ?? null), 195, $this->source), "html", null, true);
                    echo "\"
              ";
                }
                // line 196
                echo ">
              <div class=\"row\">
                ";
                // line 198
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_first", [], "any", false, false, true, 198)) {
                    // line 199
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_first_grid_class"] ?? null), 199, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 201
                    echo "                    <div class=\"clearfix hero__section hero-first\">
                      ";
                    // line 202
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_first", [], "any", false, false, true, 202), 202, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 205
                    echo "                  </div>
                ";
                }
                // line 207
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_second", [], "any", false, false, true, 207)) {
                    // line 208
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_second_grid_class"] ?? null), 208, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 210
                    echo "                    <div class=\"clearfix hero__section hero-second\">
                      ";
                    // line 211
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_second", [], "any", false, false, true, 211), 211, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 214
                    echo "                  </div>
                ";
                }
                // line 216
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_third", [], "any", false, false, true, 216)) {
                    // line 217
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_third_grid_class"] ?? null), 217, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 219
                    echo "                    <div class=\"clearfix hero__section hero-third\">
                      ";
                    // line 220
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_third", [], "any", false, false, true, 220), 220, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 223
                    echo "                  </div>
                ";
                }
                // line 225
                echo "              </div>
            </div>
            ";
                // line 228
                echo "          </div>
        </div>
        ";
                // line 231
                echo "      ";
            }
            // line 232
            echo "
    </div>
  ";
        }
    }

    // line 91
    public function block_reading_progress_indicator($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "            ";
    }

    // line 137
    public function block_internal_sticky_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "      ";
    }

    // line 160
    public function block_internal_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 161
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 161)) {
            // line 162
            echo "          <div class=\"internal-banner-container\">
            ";
            // line 163
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/banner-area"), "html", null, true);
            echo "
            ";
            // line 165
            echo "            <div ";
            if (($context["hero_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_id"] ?? null), 165, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix hero-top d-flex align-items-center ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_background_color"] ?? null), 165, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
              <div class=\"";
            // line 166
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_layout_container"] ?? null), 166, $this->source), "html", null, true);
            echo "\">
                ";
            // line 168
            echo "                <div class=\"clearfix hero-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["hero_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
                  ";
            // line 169
            if ((($context["hero_top_animations"] ?? null) == "enabled")) {
                // line 170
                echo "                    data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_animation_effect"] ?? null), 170, $this->source), "html", null, true);
                echo "\"
                  ";
            }
            // line 171
            echo ">
                  <div class=\"row\">
                    <div class=\"col-12\">
                      <div class=\"hero-top__section\">
                        ";
            // line 175
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
            echo "
                      </div>
                    </div>
                  </div>
                </div>
                ";
            // line 181
            echo "              </div>
            </div>
            ";
            // line 184
            echo "          </div>
        ";
        }
        // line 186
        echo "      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/page--node--mt-canvas-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  606 => 186,  602 => 184,  598 => 181,  590 => 175,  584 => 171,  578 => 170,  576 => 169,  571 => 168,  567 => 166,  553 => 165,  549 => 163,  546 => 162,  543 => 161,  539 => 160,  535 => 138,  531 => 137,  527 => 92,  523 => 91,  516 => 232,  513 => 231,  509 => 228,  505 => 225,  501 => 223,  496 => 220,  493 => 219,  488 => 217,  485 => 216,  481 => 214,  476 => 211,  473 => 210,  468 => 208,  465 => 207,  461 => 205,  456 => 202,  453 => 201,  448 => 199,  446 => 198,  442 => 196,  436 => 195,  434 => 194,  429 => 193,  425 => 191,  411 => 190,  409 => 189,  407 => 188,  404 => 187,  402 => 160,  399 => 159,  396 => 158,  392 => 155,  384 => 149,  378 => 145,  374 => 143,  361 => 142,  359 => 141,  357 => 140,  354 => 139,  352 => 137,  349 => 136,  346 => 135,  342 => 132,  339 => 131,  335 => 128,  331 => 125,  327 => 123,  322 => 120,  319 => 119,  314 => 117,  311 => 116,  307 => 114,  302 => 111,  297 => 110,  292 => 108,  289 => 107,  285 => 105,  280 => 102,  277 => 101,  272 => 99,  270 => 98,  266 => 96,  260 => 94,  249 => 93,  246 => 91,  244 => 90,  242 => 89,  239 => 88,  236 => 87,  232 => 84,  228 => 81,  224 => 79,  219 => 76,  216 => 75,  211 => 73,  208 => 72,  204 => 70,  199 => 67,  196 => 66,  191 => 64,  189 => 63,  185 => 61,  179 => 60,  177 => 59,  172 => 58,  168 => 56,  161 => 55,  159 => 54,  157 => 53,  154 => 52,  151 => 51,  147 => 48,  143 => 45,  139 => 43,  134 => 40,  131 => 39,  126 => 37,  123 => 36,  119 => 34,  114 => 31,  111 => 30,  106 => 28,  104 => 27,  100 => 25,  94 => 24,  92 => 23,  87 => 22,  81 => 20,  74 => 19,  72 => 18,  70 => 17,  66 => 15,  64 => 14,  62 => 13,  58 => 11,  55 => 10,  51 => 9,  40 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/page--node--mt-canvas-page.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/page--node--mt-canvas-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10, "block" => 91);
        static $filters = array("escape" => 19);
        static $functions = array("attach_library" => 163);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
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
