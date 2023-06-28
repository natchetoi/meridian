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

/* page.html.twig */
class __TwigTemplate_9e7b8b11c532caf4e5cdf8113012e7b5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_container' => [$this, 'block_page_container'],
            'page_top' => [$this, 'block_page_top'],
            'reading_progress_indicator' => [$this, 'block_reading_progress_indicator'],
            'internal_sticky_header' => [$this, 'block_internal_sticky_header'],
            'internal_banner' => [$this, 'block_internal_banner'],
            'main_content' => [$this, 'block_main_content'],
            'to_top' => [$this, 'block_to_top'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideout", [], "any", false, false, true, 83)) {
            // line 84
            echo "  ";
            // line 85
            echo "  <div class=\"clearfix slideout ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slideout_background_color"] ?? null), 85, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
    ";
            // line 87
            echo "    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideout", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            echo "
      </div>
    </div>
    ";
            // line 93
            echo "  </div>
  ";
            // line 95
            echo "
  ";
            // line 97
            echo "  <button class=\"slideout-toggle slideout-toggle--fixed\"></button>
  ";
        }
        // line 100
        echo "
";
        // line 102
        echo "<div class=\"page-container\">

  ";
        // line 105
        echo "  ";
        $this->displayBlock('page_container', $context, $blocks);
        // line 639
        echo "  ";
        // line 640
        echo "
  ";
        // line 641
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sticky_footer", [], "any", false, false, true, 641)) {
            // line 642
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/sticky-footer-init"), "html", null, true);
            echo "
    ";
            // line 644
            echo "    <div class=\"sticky-footer-container\">
      <div class=\"";
            // line 645
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky_footer_layout_container"] ?? null), 645, $this->source), "html", null, true);
            echo "\">
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"collapsible-sticky-footer-trigger text-end\">
              <a class=\"";
            // line 649
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky_footer_background_color"] ?? null), 649, $this->source), "html", null, true);
            echo " mt-button m-0\" data-toggle=\"collapse\" href=\"#collapsible-sticky-footer\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapsible-sticky-footer\">
                ";
            // line 650
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky_footer_trigger_text"] ?? null), 650, $this->source), "html", null, true);
            echo "
                <span class=\"ms-2 text-center collapsible-sticky-footer-icon collapsible-sticky-footer__expand-icon\"><i class=\"fas fa-angle-down m-0\"></i></span>
                <span class=\"ms-2 text-center collapsible-sticky-footer-icon collapsible-sticky-footer__collapse-icon\"><i class=\"fas fa-angle-up m-0\"></i></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class=\"clearfix sticky-footer ";
            // line 658
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky_footer_background_color"] ?? null), 658, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sticky_footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sticky_footer_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
        <div class=\"";
            // line 659
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky_footer_layout_container"] ?? null), 659, $this->source), "html", null, true);
            echo "\">
          ";
            // line 661
            echo "          <div class=\"clearfix sticky-footer__container\">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"collapse show\" id=\"collapsible-sticky-footer\">
                  ";
            // line 666
            echo "                  <div class=\"clearfix sticky-footer__section\">
                    ";
            // line 667
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sticky_footer", [], "any", false, false, true, 667), 667, $this->source), "html", null, true);
            echo "
                  </div>
                  ";
            // line 670
            echo "                </div>
              </div>
            </div>
          </div>
          ";
            // line 675
            echo "        </div>
      </div>
    </div>
    ";
            // line 679
            echo "    <div class=\"sticky-footer-placeholder\"></div>
  ";
        }
        // line 681
        echo "
  ";
        // line 682
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 682) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 682))) {
            // line 683
            echo "    ";
            // line 684
            echo "    <div ";
            if (($context["footer_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_id"] ?? null), 684, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix footer-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_regions"] ?? null), 684, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_background_color"] ?? null), 684, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_separator"] ?? null), 684, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 685
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_layout_container"] ?? null), 685, $this->source), "html", null, true);
            echo "\">
        ";
            // line 687
            echo "        <div class=\"clearfix footer-top__container mt-style-custom-all";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 688
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                // line 689
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_animation_effect"] ?? null), 689, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 690
            echo ">
          <div class=\"row d-flex align-items-center\">
            ";
            // line 692
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 692)) {
                // line 693
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_first_grid_class"] ?? null), 693, $this->source), "html", null, true);
                echo "\">
                ";
                // line 695
                echo "                <div class=\"clearfix footer-top__section footer-top-first\">
                  ";
                // line 696
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 696), 696, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 699
                echo "              </div>
            ";
            }
            // line 701
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 701)) {
                // line 702
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_second_grid_class"] ?? null), 702, $this->source), "html", null, true);
                echo "\">
                ";
                // line 704
                echo "                <div class=\"clearfix footer-top__section footer-top-second\">
                  ";
                // line 705
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 705), 705, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 708
                echo "              </div>
            ";
            }
            // line 710
            echo "          </div>
        </div>
        ";
            // line 713
            echo "      </div>
    </div>
    ";
            // line 716
            echo "  ";
        }
        // line 717
        echo "
  ";
        // line 718
        $this->displayBlock('to_top', $context, $blocks);
        // line 725
        echo "
  ";
        // line 726
        if ((((((((((((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 726) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 726)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 726)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 726)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 726)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_first", [], "any", false, false, true, 726)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_second", [], "any", false, false, true, 726)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_third", [], "any", false, false, true, 726)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_fourth", [], "any", false, false, true, 726)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_first", [], "any", false, false, true, 726)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_second", [], "any", false, false, true, 726)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_third", [], "any", false, false, true, 726)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 726)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 726))) {
            // line 727
            echo "    <div class=\"footers-container\">

      ";
            // line 729
            if (((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 729) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 729)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 729)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 729)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 729))) {
                // line 730
                echo "        ";
                // line 731
                echo "        <footer ";
                if (($context["footer_id"] ?? null)) {
                    echo "id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_id"] ?? null), 731, $this->source), "html", null, true);
                    echo "\"";
                }
                echo " class=\"clearfix footer ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_background_color"] ?? null), 731, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_separator"] ?? null), 731, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 732
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_layout_container"] ?? null), 732, $this->source), "html", null, true);
                echo "\">
            <div class=\"clearfix footer__container\">
              <div class=\"row\">
                ";
                // line 735
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 735)) {
                    // line 736
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_grid_class"] ?? null), 736, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 738
                    echo "                    <div class=\"clearfix footer__section footer-first";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    echo "\"
                      ";
                    // line 739
                    if ((($context["footer_animations"] ?? null) == "enabled")) {
                        // line 740
                        echo "                        data-animate-effect=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 740, $this->source), "html", null, true);
                        echo "\"
                      ";
                    }
                    // line 741
                    echo ">
                      ";
                    // line 742
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 742), 742, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 745
                    echo "                  </div>
                ";
                }
                // line 747
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 747)) {
                    // line 748
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_grid_class"] ?? null), 748, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 750
                    echo "                    <div class=\"clearfix footer__section footer-second";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    echo "\"
                      ";
                    // line 751
                    if ((($context["footer_animations"] ?? null) == "enabled")) {
                        // line 752
                        echo "                        data-animate-effect=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 752, $this->source), "html", null, true);
                        echo "\"
                      ";
                    }
                    // line 753
                    echo ">
                      ";
                    // line 754
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 754), 754, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 757
                    echo "                  </div>
                ";
                }
                // line 759
                echo "                <div class=\"clearfix ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_first"] ?? null), 759, $this->source), "html", null, true);
                echo "\"></div>
                ";
                // line 760
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 760)) {
                    // line 761
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_grid_class"] ?? null), 761, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 763
                    echo "                    <div class=\"clearfix footer__section footer-third";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    echo "\"
                      ";
                    // line 764
                    if ((($context["footer_animations"] ?? null) == "enabled")) {
                        // line 765
                        echo "                        data-animate-effect=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 765, $this->source), "html", null, true);
                        echo "\"
                      ";
                    }
                    // line 766
                    echo ">
                      ";
                    // line 767
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 767), 767, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 770
                    echo "                  </div>
                ";
                }
                // line 772
                echo "                <div class=\"clearfix ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_second"] ?? null), 772, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_5_columns_clearfix"] ?? null), 772, $this->source), "html", null, true);
                echo "\"></div>
                ";
                // line 773
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 773)) {
                    // line 774
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fourth_grid_class"] ?? null), 774, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 776
                    echo "                    <div class=\"clearfix footer__section footer-fourth";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    echo "\"
                      ";
                    // line 777
                    if ((($context["footer_animations"] ?? null) == "enabled")) {
                        // line 778
                        echo "                        data-animate-effect=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 778, $this->source), "html", null, true);
                        echo "\"
                      ";
                    }
                    // line 779
                    echo ">
                      ";
                    // line 780
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 780), 780, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 783
                    echo "                  </div>
                ";
                }
                // line 785
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 785)) {
                    // line 786
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fifth_grid_class"] ?? null), 786, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 788
                    echo "                    <div class=\"clearfix footer__section footer-fifth";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    echo "\"
                      ";
                    // line 789
                    if ((($context["footer_animations"] ?? null) == "enabled")) {
                        // line 790
                        echo "                        data-animate-effect=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 790, $this->source), "html", null, true);
                        echo "\"
                      ";
                    }
                    // line 791
                    echo ">
                      ";
                    // line 792
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 792), 792, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 795
                    echo "                  </div>
                ";
                }
                // line 797
                echo "              </div>
            </div>
          </div>
        </footer>
        ";
                // line 802
                echo "      ";
            }
            // line 803
            echo "
      ";
            // line 804
            if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_first", [], "any", false, false, true, 804) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_second", [], "any", false, false, true, 804)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_third", [], "any", false, false, true, 804)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_fourth", [], "any", false, false, true, 804))) {
                // line 805
                echo "        ";
                // line 806
                echo "        <div ";
                if (($context["footer_bottom_id"] ?? null)) {
                    echo "id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_id"] ?? null), 806, $this->source), "html", null, true);
                    echo "\"";
                }
                echo " class=\"clearfix footer-bottom ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_background_color"] ?? null), 806, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_separator"] ?? null), 806, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 807
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_layout_container"] ?? null), 807, $this->source), "html", null, true);
                echo "\">
            ";
                // line 809
                echo "            <div class=\"clearfix footer-bottom__container\">
              <div class=\"row\">
                ";
                // line 811
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_first", [], "any", false, false, true, 811)) {
                    // line 812
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_first_grid_class"] ?? null), 812, $this->source), "html", null, true);
                    echo "\">
                    <div class=\"clearfix footer-bottom__section\">
                      ";
                    // line 814
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_first", [], "any", false, false, true, 814), 814, $this->source), "html", null, true);
                    echo "
                    </div>
                  </div>
                ";
                }
                // line 818
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_second", [], "any", false, false, true, 818)) {
                    // line 819
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_second_grid_class"] ?? null), 819, $this->source), "html", null, true);
                    echo "\">
                    <div class=\"clearfix footer-bottom__section\">
                      ";
                    // line 821
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_second", [], "any", false, false, true, 821), 821, $this->source), "html", null, true);
                    echo "
                    </div>
                  </div>
                ";
                }
                // line 825
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_third", [], "any", false, false, true, 825)) {
                    // line 826
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_third_grid_class"] ?? null), 826, $this->source), "html", null, true);
                    echo "\">
                    <div class=\"clearfix footer-bottom__section\">
                      ";
                    // line 828
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_third", [], "any", false, false, true, 828), 828, $this->source), "html", null, true);
                    echo "
                    </div>
                  </div>
                ";
                }
                // line 832
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_fourth", [], "any", false, false, true, 832)) {
                    // line 833
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_fourth_grid_class"] ?? null), 833, $this->source), "html", null, true);
                    echo "\">
                    <div class=\"clearfix footer-bottom__section\">
                      ";
                    // line 835
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_fourth", [], "any", false, false, true, 835), 835, $this->source), "html", null, true);
                    echo "
                    </div>
                  </div>
                ";
                }
                // line 839
                echo "              </div>
            </div>
            ";
                // line 842
                echo "          </div>
        </div>
        ";
                // line 845
                echo "      ";
            }
            // line 846
            echo "
      ";
            // line 847
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_first", [], "any", false, false, true, 847) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_second", [], "any", false, false, true, 847)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_third", [], "any", false, false, true, 847))) {
                // line 848
                echo "        ";
                // line 849
                echo "        <div ";
                if (($context["subfooter_top_id"] ?? null)) {
                    echo "id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_id"] ?? null), 849, $this->source), "html", null, true);
                    echo "\"";
                }
                echo " class=\"clearfix subfooter-top ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_background_color"] ?? null), 849, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_separator"] ?? null), 849, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 850
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_layout_container"] ?? null), 850, $this->source), "html", null, true);
                echo "\">
            ";
                // line 852
                echo "            <div class=\"clearfix subfooter-top__container\">
              <div class=\"row align-items-center\">
                ";
                // line 854
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_first", [], "any", false, false, true, 854)) {
                    // line 855
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_first_grid_class"] ?? null), 855, $this->source), "html", null, true);
                    echo "\">
                    <div class=\"clearfix subfooter-top__section\">
                      ";
                    // line 857
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_first", [], "any", false, false, true, 857), 857, $this->source), "html", null, true);
                    echo "
                    </div>
                  </div>
                ";
                }
                // line 861
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_second", [], "any", false, false, true, 861)) {
                    // line 862
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_second_grid_class"] ?? null), 862, $this->source), "html", null, true);
                    echo "\">
                    <div class=\"clearfix subfooter-top__section\">
                      ";
                    // line 864
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_second", [], "any", false, false, true, 864), 864, $this->source), "html", null, true);
                    echo "
                    </div>
                  </div>
                ";
                }
                // line 868
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_third", [], "any", false, false, true, 868)) {
                    // line 869
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_third_grid_class"] ?? null), 869, $this->source), "html", null, true);
                    echo "\">
                    <div class=\"clearfix subfooter-top__section\">
                      ";
                    // line 871
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_third", [], "any", false, false, true, 871), 871, $this->source), "html", null, true);
                    echo "
                    </div>
                  </div>
                ";
                }
                // line 875
                echo "              </div>
            </div>
            ";
                // line 878
                echo "          </div>
        </div>
        ";
                // line 881
                echo "      ";
            }
            // line 882
            echo "
      ";
            // line 883
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 883) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 883))) {
                // line 884
                echo "        ";
                // line 885
                echo "        <div ";
                if (($context["subfooter_id"] ?? null)) {
                    echo "id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_id"] ?? null), 885, $this->source), "html", null, true);
                    echo "\"";
                }
                echo " class=\"clearfix subfooter ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_background_color"] ?? null), 885, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_separator"] ?? null), 885, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 886
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_layout_container"] ?? null), 886, $this->source), "html", null, true);
                echo "\">
            ";
                // line 888
                echo "            <div class=\"clearfix subfooter__container\">
              <div class=\"row align-items-center\">
                ";
                // line 890
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 890)) {
                    // line 891
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_first_grid_class"] ?? null), 891, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 893
                    echo "                    <div class=\"clearfix subfooter__section subfooter-first\">
                      ";
                    // line 894
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 894), 894, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 897
                    echo "                  </div>
                ";
                }
                // line 899
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 899)) {
                    // line 900
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_second_grid_class"] ?? null), 900, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 902
                    echo "                    <div class=\"clearfix subfooter__section subfooter-second\">
                      ";
                    // line 903
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 903), 903, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 906
                    echo "                  </div>
                ";
                }
                // line 908
                echo "              </div>
            </div>
            ";
                // line 911
                echo "          </div>
        </div>
        ";
                // line 914
                echo "      ";
            }
            // line 915
            echo "
    </div>
  ";
        }
        // line 918
        echo "
  ";
        // line 919
        if ((($context["mobile_menu_widget_display"] ?? null) && ($context["mobile_search_enabled"] ?? null))) {
            // line 920
            echo "    ";
            // line 921
            echo "    <div class=\"clearfix mt-mobile-menu-widget-wrapper\">
      <div class=\"mt-mobile-menu-overlay\" style=\"display:none\">
        ";
            // line 923
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu_widget", [], "any", false, false, true, 923)) {
                // line 924
                echo "          <div class=\"mt-mobile-menu-overlay-content region--shade-background container-fluid pt-4\">
            <div class=\"row\">
              <div class=\"col-12\">
                ";
                // line 927
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu_widget", [], "any", false, false, true, 927), 927, $this->source), "html", null, true);
                echo "
              </div>
            </div>
          </div>
        ";
            }
            // line 932
            echo "        <button type=\"button\" class=\"mt-dismiss-button mt-button region--shade-background ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["mobile_menu_widget_sticky"] ?? null)) ? ("mt-dismiss-button--sticky") : ("")));
            echo "\">
          <span class=\"sr-only\">";
            // line 933
            echo t("Dismiss mobile overlay area", array());
            echo "</span><i class=\"fas fa-times\"></i>
        </button>
      </div>

      ";
            // line 938
            echo "      <form method=\"get\" action=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl($this->sandbox->ensureToStringAllowed(($context["default_search_route"] ?? null), 938, $this->source)));
            echo "\">
        <div class=\"clearfix mt-mobile-menu-widget mt-container ";
            // line 939
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["mobile_menu_widget_sticky"] ?? null)) ? ("mt-sticky") : ("")));
            echo "\">
          <div class=\"mt-search-icon\">
            <i class=\"fas fa-search\"></i>
          </div>
          <input type=\"text\" name=\"keys\" class=\"mt-input\" placeholder=\"Search...\">
          <div class=\"mt-clear-icon\">
            <span class=\"sr-only\">";
            // line 945
            echo t("Clear keys input element", array());
            echo "</span><i class=\"fas fa-times-circle\"></i>
          </div>
          <button type=\"submit\" class=\"mt-submit-button mt-button\">
            <span class=\"sr-only\">";
            // line 948
            echo t("Submit search", array());
            echo "</span><i class=\"fas fa-arrow-right\"></i>
          </button>
          <button type=\"button\" class=\"mt-menu-button mt-button\">
            <span class=\"sr-only\">";
            // line 951
            echo t("Open mobile overlay area", array());
            echo "</span><i class=\"fas fa-bars\"></i>
          </button>
        </div>
      </form>
    </div>
  ";
        }
        // line 957
        echo "  ";
        // line 958
        echo "
</div>
";
    }

    // line 105
    public function block_page_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "
    ";
        // line 107
        $this->displayBlock('page_top', $context, $blocks);
        // line 333
        echo "
    ";
        // line 334
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 334)) {
            // line 335
            echo "      <div class=\"system-messages clearfix\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-12\">
              ";
            // line 339
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 339), 339, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 345
        echo "
    ";
        // line 346
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 346)) {
            // line 347
            echo "      ";
            // line 348
            echo "      <div ";
            if (($context["content_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_id"] ?? null), 348, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix content-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_background_color"] ?? null), 348, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
        <div class=\"";
            // line 349
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_layout_container"] ?? null), 349, $this->source), "html", null, true);
            echo "\">
          ";
            // line 351
            echo "          <div class=\"clearfix content-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
            ";
            // line 352
            if ((($context["content_top_animations"] ?? null) == "enabled")) {
                // line 353
                echo "              data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_animation_effect"] ?? null), 353, $this->source), "html", null, true);
                echo "\"
            ";
            }
            // line 354
            echo ">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"content-top__section\">
                  ";
            // line 358
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 358), 358, $this->source), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 364
            echo "        </div>
      </div>
      ";
            // line 367
            echo "    ";
        }
        // line 368
        echo "
    ";
        // line 369
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_highlighted", [], "any", false, false, true, 369)) {
            // line 370
            echo "      ";
            // line 371
            echo "      <div ";
            if (($context["content_top_highlighted_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_id"] ?? null), 371, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix content-top-highlighted ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_background_color"] ?? null), 371, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_separator"] ?? null), 371, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
        <div class=\"";
            // line 372
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_layout_container"] ?? null), 372, $this->source), "html", null, true);
            echo "\">
          ";
            // line 374
            echo "          <div class=\"clearfix content-top-highlighted__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
            ";
            // line 375
            if ((($context["content_top_highlighted_animations"] ?? null) == "enabled")) {
                // line 376
                echo "              data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_animation_effect"] ?? null), 376, $this->source), "html", null, true);
                echo "\"
            ";
            }
            // line 377
            echo ">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"content-top-highlighted__section\">
                  ";
            // line 381
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_highlighted", [], "any", false, false, true, 381), 381, $this->source), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 387
            echo "        </div>
      </div>
      ";
            // line 390
            echo "    ";
        }
        // line 391
        echo "
    ";
        // line 393
        echo "    ";
        $this->displayBlock('main_content', $context, $blocks);
        // line 439
        echo "    ";
        // line 440
        echo "
    ";
        // line 441
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 441) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 441))) {
            // line 442
            echo "      ";
            // line 443
            echo "      <div ";
            if (($context["content_bottom_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_id"] ?? null), 443, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix content-bottom ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_background_color"] ?? null), 443, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_separator"] ?? null), 443, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
        <div class=\"";
            // line 444
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_layout_container"] ?? null), 444, $this->source), "html", null, true);
            echo "\">
          ";
            // line 446
            echo "          <div class=\"clearfix content-bottom__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
            ";
            // line 447
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                // line 448
                echo "              data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_animation_effect"] ?? null), 448, $this->source), "html", null, true);
                echo "\"
            ";
            }
            // line 449
            echo ">
            <div class=\"row\">
              ";
            // line 451
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 451)) {
                // line 452
                echo "                <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_first_grid_class"] ?? null), 452, $this->source), "html", null, true);
                echo "\">
                  ";
                // line 454
                echo "                  <div class=\"clearfix content-bottom__section content-bottom-first\">
                    ";
                // line 455
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 455), 455, $this->source), "html", null, true);
                echo "
                  </div>
                  ";
                // line 458
                echo "                </div>
              ";
            }
            // line 460
            echo "              ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 460)) {
                // line 461
                echo "                <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_second_grid_class"] ?? null), 461, $this->source), "html", null, true);
                echo "\">
                  ";
                // line 463
                echo "                  <div class=\"clearfix content-bottom__section content-bottom-second\">
                    ";
                // line 464
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 464), 464, $this->source), "html", null, true);
                echo "
                  </div>
                  ";
                // line 467
                echo "                </div>
              ";
            }
            // line 469
            echo "            </div>
          </div>
          ";
            // line 472
            echo "        </div>
      </div>
      ";
            // line 475
            echo "    ";
        }
        // line 476
        echo "
    ";
        // line 477
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_highlighted", [], "any", false, false, true, 477)) {
            // line 478
            echo "      ";
            // line 479
            echo "      <div ";
            if (($context["content_bottom_highlighted_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_highlighted_id"] ?? null), 479, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix content-bottom-highlighted ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_highlighted_background_color"] ?? null), 479, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_highlighted_separator"] ?? null), 479, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
        <div class=\"";
            // line 480
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_highlighted_layout_container"] ?? null), 480, $this->source), "html", null, true);
            echo "\">
          ";
            // line 482
            echo "          <div class=\"clearfix content-bottom-highlighted__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_bottom_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
            ";
            // line 483
            if ((($context["content_bottom_highlighted_animations"] ?? null) == "enabled")) {
                // line 484
                echo "              data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_highlighted_animation_effect"] ?? null), 484, $this->source), "html", null, true);
                echo "\"
            ";
            }
            // line 485
            echo ">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"content-bottom-highlighted__section\">
                  ";
            // line 489
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_highlighted", [], "any", false, false, true, 489), 489, $this->source), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 495
            echo "        </div>
      </div>
      ";
            // line 498
            echo "    ";
        }
        // line 499
        echo "
    ";
        // line 500
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 500)) {
            // line 501
            echo "      ";
            // line 502
            echo "      <div ";
            if (($context["featured_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_id"] ?? null), 502, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix featured-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_background_color"] ?? null), 502, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_separator"] ?? null), 502, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
        <div class=\"";
            // line 503
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_layout_container"] ?? null), 503, $this->source), "html", null, true);
            echo "\">
          ";
            // line 505
            echo "          <div class=\"clearfix featured-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
            ";
            // line 506
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                // line 507
                echo "              data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_animation_effect"] ?? null), 507, $this->source), "html", null, true);
                echo "\"
            ";
            }
            // line 508
            echo ">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"clearfix featured-top__section\">
                  ";
            // line 512
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 512), 512, $this->source), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 518
            echo "        </div>
      </div>
      ";
            // line 521
            echo "    ";
        }
        // line 522
        echo "
    ";
        // line 523
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 523)) {
            // line 524
            echo "      ";
            // line 525
            echo "      <div ";
            if (($context["featured_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_id"] ?? null), 525, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix featured ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_background_color"] ?? null), 525, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_separator"] ?? null), 525, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
        <div class=\"";
            // line 526
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_layout_container"] ?? null), 526, $this->source), "html", null, true);
            echo "\">
          ";
            // line 528
            echo "          <div class=\"clearfix featured__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
            ";
            // line 529
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 530
                echo "              data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_animation_effect"] ?? null), 530, $this->source), "html", null, true);
                echo "\"
            ";
            }
            // line 531
            echo ">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"clearfix featured__section\">
                  ";
            // line 535
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 535), 535, $this->source), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 541
            echo "        </div>
      </div>
      ";
            // line 544
            echo "    ";
        }
        // line 545
        echo "
    ";
        // line 546
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 546)) {
            // line 547
            echo "      ";
            // line 548
            echo "      <div ";
            if (($context["featured_bottom_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_id"] ?? null), 548, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix featured-bottom ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_background_color"] ?? null), 548, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_separator"] ?? null), 548, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
        <div class=\"";
            // line 549
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_layout_container"] ?? null), 549, $this->source), "html", null, true);
            echo "\">
          ";
            // line 551
            echo "          <div class=\"clearfix featured-bottom__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
            ";
            // line 552
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 553
                echo "              data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_animation_effect"] ?? null), 553, $this->source), "html", null, true);
                echo "\"
            ";
            }
            // line 554
            echo ">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"clearfix featured-bottom__section\">
                  ";
            // line 558
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 558), 558, $this->source), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 564
            echo "        </div>
      </div>
      ";
            // line 567
            echo "    ";
        }
        // line 568
        echo "
    ";
        // line 569
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_featured", [], "any", false, false, true, 569)) {
            // line 570
            echo "      ";
            // line 571
            echo "      <div ";
            if (($context["sub_featured_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_id"] ?? null), 571, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix sub-featured ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_background_color"] ?? null), 571, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_separator"] ?? null), 571, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
        <div class=\"";
            // line 572
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_layout_container"] ?? null), 572, $this->source), "html", null, true);
            echo "\">
          ";
            // line 574
            echo "          <div class=\"clearfix sub-featured__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sub_featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
            ";
            // line 575
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                // line 576
                echo "              data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_animation_effect"] ?? null), 576, $this->source), "html", null, true);
                echo "\"
            ";
            }
            // line 577
            echo ">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"clearfix sub-featured__section\">
                  ";
            // line 581
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_featured", [], "any", false, false, true, 581), 581, $this->source), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 587
            echo "        </div>
      </div>
      ";
            // line 590
            echo "    ";
        }
        // line 591
        echo "
    ";
        // line 592
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_top", [], "any", false, false, true, 592)) {
            // line 593
            echo "      ";
            // line 594
            echo "      <div ";
            if (($context["highlighted_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_id"] ?? null), 594, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix highlighted-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_background_color"] ?? null), 594, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_separator"] ?? null), 594, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
        <div class=\"";
            // line 595
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_layout_container"] ?? null), 595, $this->source), "html", null, true);
            echo "\">
          ";
            // line 597
            echo "          <div class=\"clearfix highlighted-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["highlighted_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
            ";
            // line 598
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                // line 599
                echo "              data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_animation_effect"] ?? null), 599, $this->source), "html", null, true);
                echo "\"
            ";
            }
            // line 600
            echo ">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"clearfix highlighted-top__section\">
                  ";
            // line 604
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_top", [], "any", false, false, true, 604), 604, $this->source), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 610
            echo "        </div>
      </div>
      ";
            // line 613
            echo "    ";
        }
        // line 614
        echo "
    ";
        // line 615
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 615)) {
            // line 616
            echo "      ";
            // line 617
            echo "      <div ";
            if (($context["highlighted_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_id"] ?? null), 617, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix highlighted ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_background_color"] ?? null), 617, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_separator"] ?? null), 617, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
        <div class=\"";
            // line 618
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_layout_container"] ?? null), 618, $this->source), "html", null, true);
            echo "\">
          ";
            // line 620
            echo "          <div class=\"clearfix highlighted__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
            ";
            // line 621
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 622
                echo "              data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_animation_effect"] ?? null), 622, $this->source), "html", null, true);
                echo "\"
            ";
            }
            // line 623
            echo ">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"clearfix highlighted__section\">
                  ";
            // line 627
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 627), 627, $this->source), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 633
            echo "        </div>
      </div>
      ";
            // line 636
            echo "    ";
        }
        // line 637
        echo "
  ";
    }

    // line 107
    public function block_page_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 108
        echo "      ";
        if (((((((((((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 108) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 108)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 108)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 108)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 108)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 108)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 108)) || ($context["post_progress"] ?? null)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 108)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 108)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_first", [], "any", false, false, true, 108)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_second", [], "any", false, false, true, 108)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_third", [], "any", false, false, true, 108))) {
            // line 109
            echo "      <div class=\"page-top-container\">
        ";
            // line 110
            if ((((((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 110) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 110)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 110)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 110)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 110)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 110)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 110)) || ($context["post_progress"] ?? null))) {
                // line 111
                echo "          ";
                // line 112
                echo "          <div class=\"header-container\">

            ";
                // line 114
                if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 114) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 114))) {
                    // line 115
                    echo "              ";
                    // line 116
                    echo "              <div class=\"clearfix header-top-highlighted ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_background_color"] ?? null), 116, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                    echo "\">
                <div class=\"";
                    // line 117
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_layout_container"] ?? null), 117, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_horizontal_paddings"] ?? null), 117, $this->source), "html", null, true);
                    echo "\">
                  ";
                    // line 119
                    echo "                  <div class=\"clearfix header-top-highlighted__container";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    echo "\"
                    ";
                    // line 120
                    if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                        // line 121
                        echo "                      data-animate-effect=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_animation_effect"] ?? null), 121, $this->source), "html", null, true);
                        echo "\"
                    ";
                    }
                    // line 122
                    echo ">
                    <div class=\"row d-flex align-items-center\">
                      ";
                    // line 124
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 124)) {
                        // line 125
                        echo "                        <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_first_grid_class"] ?? null), 125, $this->source), "html", null, true);
                        echo "\">
                          ";
                        // line 127
                        echo "                          <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                            ";
                        // line 128
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
                        echo "
                          </div>
                          ";
                        // line 131
                        echo "                        </div>
                      ";
                    }
                    // line 133
                    echo "                      ";
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 133)) {
                        // line 134
                        echo "                        <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_second_grid_class"] ?? null), 134, $this->source), "html", null, true);
                        echo "\">
                          ";
                        // line 136
                        echo "                          <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                            ";
                        // line 137
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
                        echo "
                          </div>
                          ";
                        // line 140
                        echo "                        </div>
                      ";
                    }
                    // line 142
                    echo "                    </div>
                  </div>
                  ";
                    // line 145
                    echo "                </div>
              </div>
              ";
                    // line 148
                    echo "            ";
                }
                // line 149
                echo "
            ";
                // line 150
                if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 150) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 150))) {
                    // line 151
                    echo "              ";
                    // line 152
                    echo "              <div class=\"clearfix header-top ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_background_color"] ?? null), 152, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                    echo "\">
                <div class=\"";
                    // line 153
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_layout_container"] ?? null), 153, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_horizontal_paddings"] ?? null), 153, $this->source), "html", null, true);
                    echo "\">
                  ";
                    // line 155
                    echo "                  <div class=\"clearfix header-top__container";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    echo "\"
                    ";
                    // line 156
                    if ((($context["header_top_animations"] ?? null) == "enabled")) {
                        // line 157
                        echo "                      data-animate-effect=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_animation_effect"] ?? null), 157, $this->source), "html", null, true);
                        echo "\"
                    ";
                    }
                    // line 158
                    echo ">
                    <div class=\"row\">
                      ";
                    // line 160
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 160)) {
                        // line 161
                        echo "                        <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_first_grid_class"] ?? null), 161, $this->source), "html", null, true);
                        echo "\">
                          ";
                        // line 163
                        echo "                          <div class=\"clearfix header-top__section header-top-first\">
                            ";
                        // line 164
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
                        echo "
                          </div>
                          ";
                        // line 167
                        echo "                        </div>
                      ";
                    }
                    // line 169
                    echo "                      ";
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 169)) {
                        // line 170
                        echo "                        <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_second_grid_class"] ?? null), 170, $this->source), "html", null, true);
                        echo "\">
                          ";
                        // line 172
                        echo "                          <div class=\"clearfix header-top__section header-top-second\">
                            ";
                        // line 173
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 173), 173, $this->source), "html", null, true);
                        echo "
                          </div>
                          ";
                        // line 176
                        echo "                        </div>
                      ";
                    }
                    // line 178
                    echo "                    </div>
                  </div>
                  ";
                    // line 181
                    echo "                </div>
              </div>
              ";
                    // line 184
                    echo "            ";
                }
                // line 185
                echo "
            ";
                // line 186
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 186) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 186)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 186))) {
                    // line 187
                    echo "              ";
                    // line 188
                    echo "              ";
                    $this->displayBlock('reading_progress_indicator', $context, $blocks);
                    // line 190
                    echo "              <header role=\"banner\" class=\"clearfix header ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_background_color"] ?? null), 190, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container_class"] ?? null), 190, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_columns_class"] ?? null), 190, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                    echo "\">
                <div class=\"";
                    // line 191
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container"] ?? null), 191, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_horizontal_paddings"] ?? null), 191, $this->source), "html", null, true);
                    echo "\">
                  ";
                    // line 193
                    echo "                  <div class=\"clearfix header__container\">
                    <div class=\"row align-items-center\">
                      ";
                    // line 195
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 195)) {
                        // line 196
                        echo "                        <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_first_grid_class"] ?? null), 196, $this->source), "html", null, true);
                        echo "\">
                          ";
                        // line 198
                        echo "                          <div class=\"clearfix header__section header-first\">
                            ";
                        // line 199
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 199), 199, $this->source), "html", null, true);
                        echo "
                          </div>
                          ";
                        // line 202
                        echo "                        </div>
                      ";
                    }
                    // line 204
                    echo "                      ";
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 204)) {
                        // line 205
                        echo "                        <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_second_grid_class"] ?? null), 205, $this->source), "html", null, true);
                        echo "\">
                          ";
                        // line 207
                        echo "                          <div class=\"clearfix header__section header-second";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_mobile_menu_display"] ?? null)) ? (" d-none d-md-block") : ("")));
                        echo "\">
                            ";
                        // line 208
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 208), 208, $this->source), "html", null, true);
                        echo "
                          </div>
                          ";
                        // line 211
                        echo "                        </div>
                      ";
                    }
                    // line 213
                    echo "                      ";
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 213)) {
                        // line 214
                        echo "                        <div class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_third_grid_class"] ?? null), 214, $this->source), "html", null, true);
                        echo "\">
                          ";
                        // line 216
                        echo "                          <div class=\"clearfix header__section header-third\">
                            ";
                        // line 217
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 217), 217, $this->source), "html", null, true);
                        echo "
                          </div>
                          ";
                        // line 220
                        echo "                        </div>
                      ";
                    }
                    // line 222
                    echo "                    </div>
                  </div>
                  ";
                    // line 225
                    echo "                </div>
              </header>
              ";
                    // line 228
                    echo "            ";
                }
                // line 229
                echo "
          </div>
          ";
                // line 232
                echo "        ";
            }
            // line 233
            echo "
        ";
            // line 234
            $this->displayBlock('internal_sticky_header', $context, $blocks);
            // line 236
            echo "
        ";
            // line 237
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 237)) {
                // line 238
                echo "          ";
                // line 239
                echo "          <div ";
                if (($context["banner_id"] ?? null)) {
                    echo "id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_id"] ?? null), 239, $this->source), "html", null, true);
                    echo "\"";
                }
                echo " class=\"clearfix banner ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_background_color"] ?? null), 239, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
            <div class=\"";
                // line 240
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_layout_container"] ?? null), 240, $this->source), "html", null, true);
                echo "\">
              ";
                // line 242
                echo "              <div class=\"clearfix banner__container\">
                <div class=\"row\">
                  <div class=\"col-12\">
                    <div class=\"banner__section\">
                      ";
                // line 246
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 246), 246, $this->source), "html", null, true);
                echo "
                    </div>
                  </div>
                </div>
              </div>
              ";
                // line 252
                echo "            </div>
          </div>
          ";
                // line 255
                echo "        ";
            }
            // line 256
            echo "
        ";
            // line 257
            $this->displayBlock('internal_banner', $context, $blocks);
            // line 284
            echo "
        ";
            // line 285
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_first", [], "any", false, false, true, 285) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_second", [], "any", false, false, true, 285)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_third", [], "any", false, false, true, 285))) {
                // line 286
                echo "          ";
                // line 287
                echo "          <div ";
                if (($context["hero_id"] ?? null)) {
                    echo "id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_id"] ?? null), 287, $this->source), "html", null, true);
                    echo "\"";
                }
                echo " class=\"clearfix hero ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_background_color"] ?? null), 287, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
            <div class=\"";
                // line 288
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_layout_container"] ?? null), 288, $this->source), "html", null, true);
                echo "\">
              ";
                // line 290
                echo "              <div class=\"clearfix hero__container";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["hero_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                ";
                // line 291
                if ((($context["hero_animations"] ?? null) == "enabled")) {
                    // line 292
                    echo "                  data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_animation_effect"] ?? null), 292, $this->source), "html", null, true);
                    echo "\"
                ";
                }
                // line 293
                echo ">
                <div class=\"row\">
                  ";
                // line 295
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_first", [], "any", false, false, true, 295)) {
                    // line 296
                    echo "                    <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_first_grid_class"] ?? null), 296, $this->source), "html", null, true);
                    echo "\">
                      ";
                    // line 298
                    echo "                      <div class=\"clearfix hero__section hero-first\">
                        ";
                    // line 299
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_first", [], "any", false, false, true, 299), 299, $this->source), "html", null, true);
                    echo "
                      </div>
                      ";
                    // line 302
                    echo "                    </div>
                  ";
                }
                // line 304
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_second", [], "any", false, false, true, 304)) {
                    // line 305
                    echo "                    <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_second_grid_class"] ?? null), 305, $this->source), "html", null, true);
                    echo "\">
                      ";
                    // line 307
                    echo "                      <div class=\"clearfix hero__section hero-second\">
                        ";
                    // line 308
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_second", [], "any", false, false, true, 308), 308, $this->source), "html", null, true);
                    echo "
                      </div>
                      ";
                    // line 311
                    echo "                    </div>
                  ";
                }
                // line 313
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_third", [], "any", false, false, true, 313)) {
                    // line 314
                    echo "                    <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_third_grid_class"] ?? null), 314, $this->source), "html", null, true);
                    echo "\">
                      ";
                    // line 316
                    echo "                      <div class=\"clearfix hero__section hero-third\">
                        ";
                    // line 317
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_third", [], "any", false, false, true, 317), 317, $this->source), "html", null, true);
                    echo "
                      </div>
                      ";
                    // line 320
                    echo "                    </div>
                  ";
                }
                // line 322
                echo "                </div>
              </div>
              ";
                // line 325
                echo "            </div>
          </div>
          ";
                // line 328
                echo "        ";
            }
            // line 329
            echo "
      </div>
      ";
        }
        // line 332
        echo "    ";
    }

    // line 188
    public function block_reading_progress_indicator($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 189
        echo "              ";
    }

    // line 234
    public function block_internal_sticky_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 235
        echo "        ";
    }

    // line 257
    public function block_internal_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 258
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 258)) {
            // line 259
            echo "            <div class=\"internal-banner-container\">
              ";
            // line 260
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/banner-area"), "html", null, true);
            echo "
              ";
            // line 262
            echo "              <div ";
            if (($context["hero_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_id"] ?? null), 262, $this->source), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix hero-top d-flex align-items-center ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_background_color"] ?? null), 262, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
                <div class=\"";
            // line 263
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_layout_container"] ?? null), 263, $this->source), "html", null, true);
            echo "\">
                  ";
            // line 265
            echo "                  <div class=\"clearfix hero-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["hero_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
                    ";
            // line 266
            if ((($context["hero_top_animations"] ?? null) == "enabled")) {
                // line 267
                echo "                      data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_top_animation_effect"] ?? null), 267, $this->source), "html", null, true);
                echo "\"
                    ";
            }
            // line 268
            echo ">
                    <div class=\"row\">
                      <div class=\"col-12\">
                        <div class=\"hero-top__section\">
                          ";
            // line 272
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 272), 272, $this->source), "html", null, true);
            echo "
                        </div>
                      </div>
                    </div>
                  </div>
                  ";
            // line 278
            echo "                </div>
              </div>
              ";
            // line 281
            echo "            </div>
          ";
        }
        // line 283
        echo "        ";
    }

    // line 393
    public function block_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 394
        echo "      <div ";
        if (($context["main_content_id"] ?? null)) {
            echo "id=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_id"] ?? null), 394, $this->source), "html", null, true);
            echo "\"";
        }
        echo " class=\"clearfix main-content ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_background_color"] ?? null), 394, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_separator"] ?? null), 394, $this->source), "html", null, true);
        echo "\">
        <div class=\"";
        // line 395
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_layout_container"] ?? null), 395, $this->source), "html", null, true);
        echo "\">
          <div class=\"clearfix main-content__container\">
            <div class=\"row\">
              <section class=\"";
        // line 398
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid_class"] ?? null), 398, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_paddings"] ?? null), 398, $this->source), "html", null, true);
        echo "\">
                ";
        // line 400
        echo "                <div class=\"clearfix main-content__section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
        echo "\"
                  ";
        // line 401
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 402
            echo "                    data-animate-effect=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_animation_effect"] ?? null), 402, $this->source), "html", null, true);
            echo "\"
                  ";
        }
        // line 403
        echo ">
                  ";
        // line 404
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 404)) {
            // line 405
            echo "                    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 405), 405, $this->source), "html", null, true);
            echo "
                  ";
        }
        // line 407
        echo "                </div>
                ";
        // line 409
        echo "              </section>
              ";
        // line 410
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 410)) {
            // line 411
            echo "                <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid_class"] ?? null), 411, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_paddings"] ?? null), 411, $this->source), "html", null, true);
            echo "\">
                  ";
            // line 413
            echo "                  <section class=\"sidebar__section sidebar-first clearfix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                    ";
            // line 414
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 415
                echo "                      data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_animation_effect"] ?? null), 415, $this->source), "html", null, true);
                echo "\"
                    ";
            }
            // line 416
            echo ">
                    ";
            // line 417
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 417), 417, $this->source), "html", null, true);
            echo "
                  </section>
                  ";
            // line 420
            echo "                </aside>
              ";
        }
        // line 422
        echo "              ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 422)) {
            // line 423
            echo "                <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_grid_class"] ?? null), 423, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_paddings"] ?? null), 423, $this->source), "html", null, true);
            echo "\">
                  ";
            // line 425
            echo "                  <section class=\"sidebar__section sidebar-second clearfix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                    ";
            // line 426
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 427
                echo "                      data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_animation_effect"] ?? null), 427, $this->source), "html", null, true);
                echo "\"
                    ";
            }
            // line 428
            echo ">
                    ";
            // line 429
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 429), 429, $this->source), "html", null, true);
            echo "
                  </section>
                  ";
            // line 432
            echo "                </aside>
              ";
        }
        // line 434
        echo "            </div>
          </div>
        </div>
      </div>
    ";
    }

    // line 718
    public function block_to_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 719
        echo "    ";
        if (($context["scroll_to_top_display"] ?? null)) {
            // line 720
            echo "    ";
            // line 721
            echo "      <div class=\"to-top\"><i class=\"fas ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_icon"] ?? null), 721, $this->source), "html", null, true);
            echo "\"></i></div>
    ";
            // line 723
            echo "    ";
        }
        // line 724
        echo "  ";
    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2237 => 724,  2234 => 723,  2229 => 721,  2227 => 720,  2224 => 719,  2220 => 718,  2212 => 434,  2208 => 432,  2203 => 429,  2200 => 428,  2194 => 427,  2192 => 426,  2185 => 425,  2178 => 423,  2175 => 422,  2171 => 420,  2166 => 417,  2163 => 416,  2157 => 415,  2155 => 414,  2148 => 413,  2141 => 411,  2139 => 410,  2136 => 409,  2133 => 407,  2127 => 405,  2125 => 404,  2122 => 403,  2116 => 402,  2114 => 401,  2107 => 400,  2101 => 398,  2095 => 395,  2082 => 394,  2078 => 393,  2074 => 283,  2070 => 281,  2066 => 278,  2058 => 272,  2052 => 268,  2046 => 267,  2044 => 266,  2039 => 265,  2035 => 263,  2021 => 262,  2017 => 260,  2014 => 259,  2011 => 258,  2007 => 257,  2003 => 235,  1999 => 234,  1995 => 189,  1991 => 188,  1987 => 332,  1982 => 329,  1979 => 328,  1975 => 325,  1971 => 322,  1967 => 320,  1962 => 317,  1959 => 316,  1954 => 314,  1951 => 313,  1947 => 311,  1942 => 308,  1939 => 307,  1934 => 305,  1931 => 304,  1927 => 302,  1922 => 299,  1919 => 298,  1914 => 296,  1912 => 295,  1908 => 293,  1902 => 292,  1900 => 291,  1895 => 290,  1891 => 288,  1877 => 287,  1875 => 286,  1873 => 285,  1870 => 284,  1868 => 257,  1865 => 256,  1862 => 255,  1858 => 252,  1850 => 246,  1844 => 242,  1840 => 240,  1827 => 239,  1825 => 238,  1823 => 237,  1820 => 236,  1818 => 234,  1815 => 233,  1812 => 232,  1808 => 229,  1805 => 228,  1801 => 225,  1797 => 222,  1793 => 220,  1788 => 217,  1785 => 216,  1780 => 214,  1777 => 213,  1773 => 211,  1768 => 208,  1763 => 207,  1758 => 205,  1755 => 204,  1751 => 202,  1746 => 199,  1743 => 198,  1738 => 196,  1736 => 195,  1732 => 193,  1726 => 191,  1715 => 190,  1712 => 188,  1710 => 187,  1708 => 186,  1705 => 185,  1702 => 184,  1698 => 181,  1694 => 178,  1690 => 176,  1685 => 173,  1682 => 172,  1677 => 170,  1674 => 169,  1670 => 167,  1665 => 164,  1662 => 163,  1657 => 161,  1655 => 160,  1651 => 158,  1645 => 157,  1643 => 156,  1638 => 155,  1632 => 153,  1625 => 152,  1623 => 151,  1621 => 150,  1618 => 149,  1615 => 148,  1611 => 145,  1607 => 142,  1603 => 140,  1598 => 137,  1595 => 136,  1590 => 134,  1587 => 133,  1583 => 131,  1578 => 128,  1575 => 127,  1570 => 125,  1568 => 124,  1564 => 122,  1558 => 121,  1556 => 120,  1551 => 119,  1545 => 117,  1538 => 116,  1536 => 115,  1534 => 114,  1530 => 112,  1528 => 111,  1526 => 110,  1523 => 109,  1520 => 108,  1516 => 107,  1511 => 637,  1508 => 636,  1504 => 633,  1496 => 627,  1490 => 623,  1484 => 622,  1482 => 621,  1477 => 620,  1473 => 618,  1458 => 617,  1456 => 616,  1454 => 615,  1451 => 614,  1448 => 613,  1444 => 610,  1436 => 604,  1430 => 600,  1424 => 599,  1422 => 598,  1417 => 597,  1413 => 595,  1398 => 594,  1396 => 593,  1394 => 592,  1391 => 591,  1388 => 590,  1384 => 587,  1376 => 581,  1370 => 577,  1364 => 576,  1362 => 575,  1357 => 574,  1353 => 572,  1338 => 571,  1336 => 570,  1334 => 569,  1331 => 568,  1328 => 567,  1324 => 564,  1316 => 558,  1310 => 554,  1304 => 553,  1302 => 552,  1297 => 551,  1293 => 549,  1278 => 548,  1276 => 547,  1274 => 546,  1271 => 545,  1268 => 544,  1264 => 541,  1256 => 535,  1250 => 531,  1244 => 530,  1242 => 529,  1237 => 528,  1233 => 526,  1218 => 525,  1216 => 524,  1214 => 523,  1211 => 522,  1208 => 521,  1204 => 518,  1196 => 512,  1190 => 508,  1184 => 507,  1182 => 506,  1177 => 505,  1173 => 503,  1158 => 502,  1156 => 501,  1154 => 500,  1151 => 499,  1148 => 498,  1144 => 495,  1136 => 489,  1130 => 485,  1124 => 484,  1122 => 483,  1117 => 482,  1113 => 480,  1098 => 479,  1096 => 478,  1094 => 477,  1091 => 476,  1088 => 475,  1084 => 472,  1080 => 469,  1076 => 467,  1071 => 464,  1068 => 463,  1063 => 461,  1060 => 460,  1056 => 458,  1051 => 455,  1048 => 454,  1043 => 452,  1041 => 451,  1037 => 449,  1031 => 448,  1029 => 447,  1024 => 446,  1020 => 444,  1005 => 443,  1003 => 442,  1001 => 441,  998 => 440,  996 => 439,  993 => 393,  990 => 391,  987 => 390,  983 => 387,  975 => 381,  969 => 377,  963 => 376,  961 => 375,  956 => 374,  952 => 372,  937 => 371,  935 => 370,  933 => 369,  930 => 368,  927 => 367,  923 => 364,  915 => 358,  909 => 354,  903 => 353,  901 => 352,  896 => 351,  892 => 349,  879 => 348,  877 => 347,  875 => 346,  872 => 345,  863 => 339,  857 => 335,  855 => 334,  852 => 333,  850 => 107,  847 => 106,  843 => 105,  837 => 958,  835 => 957,  826 => 951,  820 => 948,  814 => 945,  805 => 939,  800 => 938,  793 => 933,  788 => 932,  780 => 927,  775 => 924,  773 => 923,  769 => 921,  767 => 920,  765 => 919,  762 => 918,  757 => 915,  754 => 914,  750 => 911,  746 => 908,  742 => 906,  737 => 903,  734 => 902,  729 => 900,  726 => 899,  722 => 897,  717 => 894,  714 => 893,  709 => 891,  707 => 890,  703 => 888,  699 => 886,  683 => 885,  681 => 884,  679 => 883,  676 => 882,  673 => 881,  669 => 878,  665 => 875,  658 => 871,  652 => 869,  649 => 868,  642 => 864,  636 => 862,  633 => 861,  626 => 857,  620 => 855,  618 => 854,  614 => 852,  610 => 850,  594 => 849,  592 => 848,  590 => 847,  587 => 846,  584 => 845,  580 => 842,  576 => 839,  569 => 835,  563 => 833,  560 => 832,  553 => 828,  547 => 826,  544 => 825,  537 => 821,  531 => 819,  528 => 818,  521 => 814,  515 => 812,  513 => 811,  509 => 809,  505 => 807,  489 => 806,  487 => 805,  485 => 804,  482 => 803,  479 => 802,  473 => 797,  469 => 795,  464 => 792,  461 => 791,  455 => 790,  453 => 789,  448 => 788,  443 => 786,  440 => 785,  436 => 783,  431 => 780,  428 => 779,  422 => 778,  420 => 777,  415 => 776,  410 => 774,  408 => 773,  401 => 772,  397 => 770,  392 => 767,  389 => 766,  383 => 765,  381 => 764,  376 => 763,  371 => 761,  369 => 760,  364 => 759,  360 => 757,  355 => 754,  352 => 753,  346 => 752,  344 => 751,  339 => 750,  334 => 748,  331 => 747,  327 => 745,  322 => 742,  319 => 741,  313 => 740,  311 => 739,  306 => 738,  301 => 736,  299 => 735,  293 => 732,  277 => 731,  275 => 730,  273 => 729,  269 => 727,  267 => 726,  264 => 725,  262 => 718,  259 => 717,  256 => 716,  252 => 713,  248 => 710,  244 => 708,  239 => 705,  236 => 704,  231 => 702,  228 => 701,  224 => 699,  219 => 696,  216 => 695,  211 => 693,  209 => 692,  205 => 690,  199 => 689,  197 => 688,  192 => 687,  188 => 685,  171 => 684,  169 => 683,  167 => 682,  164 => 681,  160 => 679,  155 => 675,  149 => 670,  144 => 667,  141 => 666,  135 => 661,  131 => 659,  124 => 658,  113 => 650,  109 => 649,  102 => 645,  99 => 644,  94 => 642,  92 => 641,  89 => 640,  87 => 639,  84 => 105,  80 => 102,  77 => 100,  73 => 97,  70 => 95,  67 => 93,  61 => 89,  57 => 87,  50 => 85,  48 => 84,  46 => 83,);
    }

    public function getSourceContext()
    {
        return new Source("", "page.html.twig", "themes/custom/baseplus/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 83, "block" => 105, "trans" => 933);
        static $filters = array("escape" => 85);
        static $functions = array("attach_library" => 642, "url" => 938);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'trans'],
                ['escape'],
                ['attach_library', 'url']
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
