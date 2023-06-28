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

/* themes/custom/baseplus/templates/page--node--layout.html.twig */
class __TwigTemplate_92bd30de8df8c3f0a4dbae64096bce7b extends \Twig\Template
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
            'internal_sticky_header' => [$this, 'block_internal_sticky_header'],
            'internal_banner' => [$this, 'block_internal_banner'],
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
        $this->parent = $this->loadTemplate("page.html.twig", "themes/custom/baseplus/templates/page--node--layout.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_page_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/node-layout"), "html", null, true);
        echo "
  ";
        // line 12
        $this->displayBlock('page_top', $context, $blocks);
        // line 238
        echo "
  ";
        // line 239
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 239)) {
            // line 240
            echo "    <div class=\"system-messages clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            ";
            // line 244
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 244), 244, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 250
        echo "
  ";
        // line 251
        $this->displayBlock('main_content', $context, $blocks);
        // line 299
        echo "  ";
        // line 300
        echo "
";
    }

    // line 12
    public function block_page_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        if (((((((((((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 13) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 13)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 13)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 13)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 13)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 13)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 13)) || ($context["post_progress"] ?? null)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 13)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 13)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_first", [], "any", false, false, true, 13)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_second", [], "any", false, false, true, 13)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_third", [], "any", false, false, true, 13))) {
            // line 14
            echo "    <div class=\"page-top-container\">
      ";
            // line 15
            if ((((((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 15) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 15)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 15)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 15)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 15)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 15)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 15)) || ($context["post_progress"] ?? null))) {
                // line 16
                echo "        ";
                // line 17
                echo "        <div class=\"header-container\">

          ";
                // line 19
                if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 19) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 19))) {
                    // line 20
                    echo "            ";
                    // line 21
                    echo "            <div class=\"clearfix header-top-highlighted ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_background_color"] ?? null), 21, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                    echo "\">
              <div class=\"";
                    // line 22
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_layout_container"] ?? null), 22, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_horizontal_paddings"] ?? null), 22, $this->source), "html", null, true);
                    echo "\">
                ";
                    // line 24
                    echo "                <div class=\"clearfix header-top-highlighted__container";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    echo "\"
                  ";
                    // line 25
                    if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                        // line 26
                        echo "                    data-animate-effect=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_animation_effect"] ?? null), 26, $this->source), "html", null, true);
                        echo "\"
                  ";
                    }
                    // line 27
                    echo ">
                  <div class=\"row\">
                    ";
                    // line 29
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 29)) {
                        // line 30
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_first_grid_class"] ?? null), 30, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 32
                        echo "                        <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                          ";
                        // line 33
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 36
                        echo "                      </div>
                    ";
                    }
                    // line 38
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 38)) {
                        // line 39
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_second_grid_class"] ?? null), 39, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 41
                        echo "                        <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                          ";
                        // line 42
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 45
                        echo "                      </div>
                    ";
                    }
                    // line 47
                    echo "                  </div>
                </div>
                ";
                    // line 50
                    echo "              </div>
            </div>
            ";
                    // line 53
                    echo "          ";
                }
                // line 54
                echo "
          ";
                // line 55
                if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 55) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 55))) {
                    // line 56
                    echo "            ";
                    // line 57
                    echo "            <div class=\"clearfix header-top ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_background_color"] ?? null), 57, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                    echo "\">
              <div class=\"";
                    // line 58
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_layout_container"] ?? null), 58, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_horizontal_paddings"] ?? null), 58, $this->source), "html", null, true);
                    echo "\">
                ";
                    // line 60
                    echo "                <div class=\"clearfix header-top__container";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    echo "\"
                  ";
                    // line 61
                    if ((($context["header_top_animations"] ?? null) == "enabled")) {
                        // line 62
                        echo "                    data-animate-effect=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_animation_effect"] ?? null), 62, $this->source), "html", null, true);
                        echo "\"
                  ";
                    }
                    // line 63
                    echo ">
                  <div class=\"row\">
                    ";
                    // line 65
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 65)) {
                        // line 66
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_first_grid_class"] ?? null), 66, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 68
                        echo "                        <div class=\"clearfix header-top__section header-top-first\">
                          ";
                        // line 69
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 72
                        echo "                      </div>
                    ";
                    }
                    // line 74
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 74)) {
                        // line 75
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_second_grid_class"] ?? null), 75, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 77
                        echo "                        <div class=\"clearfix header-top__section header-top-second\">
                          ";
                        // line 78
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 81
                        echo "                      </div>
                    ";
                    }
                    // line 83
                    echo "                  </div>
                </div>
                ";
                    // line 86
                    echo "              </div>
            </div>
            ";
                    // line 89
                    echo "          ";
                }
                // line 90
                echo "
          ";
                // line 91
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 91) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 91)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 91))) {
                    // line 92
                    echo "            ";
                    // line 93
                    echo "            ";
                    $this->displayBlock('reading_progress_indicator', $context, $blocks);
                    // line 95
                    echo "            <header role=\"banner\" class=\"clearfix header ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_background_color"] ?? null), 95, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container_class"] ?? null), 95, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_columns_class"] ?? null), 95, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                    echo "\">
              <div class=\"";
                    // line 96
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container"] ?? null), 96, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_horizontal_paddings"] ?? null), 96, $this->source), "html", null, true);
                    echo "\">
                ";
                    // line 98
                    echo "                <div class=\"clearfix header__container\">
                  <div class=\"row align-items-center\">
                    ";
                    // line 100
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 100)) {
                        // line 101
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_first_grid_class"] ?? null), 101, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 103
                        echo "                        <div class=\"clearfix header__section header-first\">
                          ";
                        // line 104
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 107
                        echo "                      </div>
                    ";
                    }
                    // line 109
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 109)) {
                        // line 110
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_second_grid_class"] ?? null), 110, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 112
                        echo "                        <div class=\"clearfix header__section header-second";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_mobile_menu_display"] ?? null)) ? (" d-none d-md-block") : ("")));
                        echo "\">
                          ";
                        // line 113
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 116
                        echo "                      </div>
                    ";
                    }
                    // line 118
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 118)) {
                        // line 119
                        echo "                      <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_third_grid_class"] ?? null), 119, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 121
                        echo "                        <div class=\"clearfix header__section header-third\">
                          ";
                        // line 122
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
                        echo "
                        </div>
                        ";
                        // line 125
                        echo "                      </div>
                    ";
                    }
                    // line 127
                    echo "                  </div>
                </div>
                ";
                    // line 130
                    echo "              </div>
            </header>
            ";
                    // line 133
                    echo "          ";
                }
                // line 134
                echo "
        </div>
        ";
                // line 137
                echo "      ";
            }
            // line 138
            echo "
      ";
            // line 139
            $this->displayBlock('internal_sticky_header', $context, $blocks);
            // line 141
            echo "
      ";
            // line 142
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 142)) {
                // line 143
                echo "        ";
                // line 144
                echo "        <div ";
                if (($context["banner_id"] ?? null)) {
                    echo "id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_id"] ?? null), 144, $this->source), "html", null, true);
                    echo "\"";
                }
                echo " class=\"clearfix banner ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_background_color"] ?? null), 144, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 145
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_layout_container"] ?? null), 145, $this->source), "html", null, true);
                echo "\">
            ";
                // line 147
                echo "            <div class=\"clearfix banner__container\">
              <div class=\"row\">
                <div class=\"col-12\">
                  <div class=\"banner__section\">
                    ";
                // line 151
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
                echo "
                  </div>
                </div>
              </div>
            </div>
            ";
                // line 157
                echo "          </div>
        </div>
        ";
                // line 160
                echo "      ";
            }
            // line 161
            echo "
      ";
            // line 162
            $this->displayBlock('internal_banner', $context, $blocks);
            // line 189
            echo "
      ";
            // line 190
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_first", [], "any", false, false, true, 190) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_second", [], "any", false, false, true, 190)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_third", [], "any", false, false, true, 190))) {
                // line 191
                echo "        ";
                // line 192
                echo "        <div ";
                if (($context["hero_id"] ?? null)) {
                    echo "id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_id"] ?? null), 192, $this->source), "html", null, true);
                    echo "\"";
                }
                echo " class=\"clearfix hero ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_background_color"] ?? null), 192, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 193
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_layout_container"] ?? null), 193, $this->source), "html", null, true);
                echo "\">
            ";
                // line 195
                echo "            <div class=\"clearfix hero__container";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["hero_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
              ";
                // line 196
                if ((($context["hero_animations"] ?? null) == "enabled")) {
                    // line 197
                    echo "                data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_animation_effect"] ?? null), 197, $this->source), "html", null, true);
                    echo "\"
              ";
                }
                // line 198
                echo ">
              <div class=\"row\">
                ";
                // line 200
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_first", [], "any", false, false, true, 200)) {
                    // line 201
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_first_grid_class"] ?? null), 201, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 203
                    echo "                    <div class=\"clearfix hero__section hero-first\">
                      ";
                    // line 204
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_first", [], "any", false, false, true, 204), 204, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 207
                    echo "                  </div>
                ";
                }
                // line 209
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_second", [], "any", false, false, true, 209)) {
                    // line 210
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_second_grid_class"] ?? null), 210, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 212
                    echo "                    <div class=\"clearfix hero__section hero-second\">
                      ";
                    // line 213
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_second", [], "any", false, false, true, 213), 213, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 216
                    echo "                  </div>
                ";
                }
                // line 218
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_third", [], "any", false, false, true, 218)) {
                    // line 219
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_third_grid_class"] ?? null), 219, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 221
                    echo "                    <div class=\"clearfix hero__section hero-third\">
                      ";
                    // line 222
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_third", [], "any", false, false, true, 222), 222, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 225
                    echo "                  </div>
                ";
                }
                // line 227
                echo "              </div>
            </div>
            ";
                // line 230
                echo "          </div>
        </div>
        ";
                // line 233
                echo "      ";
            }
            // line 234
            echo "
    </div>
    ";
        }
        // line 237
        echo "  ";
    }

    // line 93
    public function block_reading_progress_indicator($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        echo "            ";
    }

    // line 139
    public function block_internal_sticky_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 140
        echo "      ";
    }

    // line 162
    public function block_internal_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 163
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 163)) {
            // line 164
            echo "          <div class=\"internal-banner-container\">
            ";
            // line 165
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/banner-area"), "html", null, true);
            echo "
            ";
            // line 167
            echo "            <div ";
            if (($context["hero_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_id"] ?? null), 167, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix hero-top d-flex align-items-center ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_background_color"] ?? null), 167, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
              <div class=\"";
            // line 168
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_layout_container"] ?? null), 168, $this->source), "html", null, true);
            echo "\">
                ";
            // line 170
            echo "                <div class=\"clearfix hero-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["hero_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
                  ";
            // line 171
            if ((($context["hero_top_animations"] ?? null) == "enabled")) {
                // line 172
                echo "                    data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_animation_effect"] ?? null), 172, $this->source), "html", null, true);
                echo "\"
                  ";
            }
            // line 173
            echo ">
                  <div class=\"row\">
                    <div class=\"col-12\">
                      <div class=\"hero-top__section\">
                        ";
            // line 177
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 177), 177, $this->source), "html", null, true);
            echo "
                      </div>
                    </div>
                  </div>
                </div>
                ";
            // line 183
            echo "              </div>
            </div>
            ";
            // line 186
            echo "          </div>
        ";
        }
        // line 188
        echo "      ";
    }

    // line 251
    public function block_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 252
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/node-landing-page"), "html", null, true);
        echo "
  ";
        // line 253
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/node-layout-page"), "html", null, true);
        echo "
  <div ";
        // line 254
        if (($context["main_content_id"] ?? null)) {
            echo "id=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_id"] ?? null), 254, $this->source), "html", null, true);
            echo "\"";
        }
        echo " class=\"clearfix main-content pt-4\">
    <div>
      <div class=\"clearfix main-content__container\">
        <div>
          <section>
            ";
        // line 260
        echo "            <div class=\"clearfix main-content__section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
        echo "\"
            ";
        // line 261
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 262
            echo "              data-animate-effect=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_animation_effect"] ?? null), 262, $this->source), "html", null, true);
            echo "\"
            ";
        }
        // line 263
        echo ">
            ";
        // line 264
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 264)) {
            // line 265
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 265), 265, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 267
        echo "            </div>
            ";
        // line 269
        echo "          </section>
          ";
        // line 270
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 270)) {
            // line 271
            echo "            <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid_class"] ?? null), 271, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_paddings"] ?? null), 271, $this->source), "html", null, true);
            echo "\">
            ";
            // line 273
            echo "            <section class=\"sidebar__section sidebar-first clearfix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
              ";
            // line 274
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 275
                echo "              data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_animation_effect"] ?? null), 275, $this->source), "html", null, true);
                echo "\"
              ";
            }
            // line 276
            echo ">
              ";
            // line 277
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 277), 277, $this->source), "html", null, true);
            echo "
            </section>
            ";
            // line 280
            echo "            </aside>
          ";
        }
        // line 282
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 282)) {
            // line 283
            echo "            <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_grid_class"] ?? null), 283, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_paddings"] ?? null), 283, $this->source), "html", null, true);
            echo "\">
            ";
            // line 285
            echo "            <section class=\"sidebar__section sidebar-second clearfix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
              ";
            // line 286
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 287
                echo "              data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_animation_effect"] ?? null), 287, $this->source), "html", null, true);
                echo "\"
              ";
            }
            // line 288
            echo ">
              ";
            // line 289
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 289), 289, $this->source), "html", null, true);
            echo "
            </section>
            ";
            // line 292
            echo "            </aside>
          ";
        }
        // line 294
        echo "        </div>
      </div>
    </div>
  </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/page--node--layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  788 => 294,  784 => 292,  779 => 289,  776 => 288,  770 => 287,  768 => 286,  761 => 285,  754 => 283,  751 => 282,  747 => 280,  742 => 277,  739 => 276,  733 => 275,  731 => 274,  724 => 273,  717 => 271,  715 => 270,  712 => 269,  709 => 267,  703 => 265,  701 => 264,  698 => 263,  692 => 262,  690 => 261,  683 => 260,  671 => 254,  667 => 253,  662 => 252,  658 => 251,  654 => 188,  650 => 186,  646 => 183,  638 => 177,  632 => 173,  626 => 172,  624 => 171,  619 => 170,  615 => 168,  601 => 167,  597 => 165,  594 => 164,  591 => 163,  587 => 162,  583 => 140,  579 => 139,  575 => 94,  571 => 93,  567 => 237,  562 => 234,  559 => 233,  555 => 230,  551 => 227,  547 => 225,  542 => 222,  539 => 221,  534 => 219,  531 => 218,  527 => 216,  522 => 213,  519 => 212,  514 => 210,  511 => 209,  507 => 207,  502 => 204,  499 => 203,  494 => 201,  492 => 200,  488 => 198,  482 => 197,  480 => 196,  475 => 195,  471 => 193,  457 => 192,  455 => 191,  453 => 190,  450 => 189,  448 => 162,  445 => 161,  442 => 160,  438 => 157,  430 => 151,  424 => 147,  420 => 145,  407 => 144,  405 => 143,  403 => 142,  400 => 141,  398 => 139,  395 => 138,  392 => 137,  388 => 134,  385 => 133,  381 => 130,  377 => 127,  373 => 125,  368 => 122,  365 => 121,  360 => 119,  357 => 118,  353 => 116,  348 => 113,  343 => 112,  338 => 110,  335 => 109,  331 => 107,  326 => 104,  323 => 103,  318 => 101,  316 => 100,  312 => 98,  306 => 96,  295 => 95,  292 => 93,  290 => 92,  288 => 91,  285 => 90,  282 => 89,  278 => 86,  274 => 83,  270 => 81,  265 => 78,  262 => 77,  257 => 75,  254 => 74,  250 => 72,  245 => 69,  242 => 68,  237 => 66,  235 => 65,  231 => 63,  225 => 62,  223 => 61,  218 => 60,  212 => 58,  205 => 57,  203 => 56,  201 => 55,  198 => 54,  195 => 53,  191 => 50,  187 => 47,  183 => 45,  178 => 42,  175 => 41,  170 => 39,  167 => 38,  163 => 36,  158 => 33,  155 => 32,  150 => 30,  148 => 29,  144 => 27,  138 => 26,  136 => 25,  131 => 24,  125 => 22,  118 => 21,  116 => 20,  114 => 19,  110 => 17,  108 => 16,  106 => 15,  103 => 14,  100 => 13,  96 => 12,  91 => 300,  89 => 299,  87 => 251,  84 => 250,  75 => 244,  69 => 240,  67 => 239,  64 => 238,  62 => 12,  57 => 11,  53 => 10,  42 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/page--node--layout.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/page--node--layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 12, "if" => 239);
        static $filters = array("escape" => 11);
        static $functions = array("attach_library" => 11);

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
