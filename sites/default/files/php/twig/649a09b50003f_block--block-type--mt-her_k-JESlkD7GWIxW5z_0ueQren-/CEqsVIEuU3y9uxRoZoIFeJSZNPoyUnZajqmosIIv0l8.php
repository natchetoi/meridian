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

/* themes/custom/baseplus/templates/block--block-type--mt-hero-v2.html.twig */
class __TwigTemplate_7481f3ebe061d38d19597073d59668bb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'libraries' => [$this, 'block_libraries'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        $this->displayBlock('libraries', $context, $blocks);
        // line 37
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 39
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 39), 39, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 40
($context["plugin_id"] ?? null), 40, $this->source))), 3 => "block-mt-hero-v2"];
        // line 45
        $context["title_classes"] = [0 => "title"];
        // line 49
        $context["column_first_order"] = null;
        // line 50
        $context["column_second_order"] = null;
        // line 51
        $context["column_first_grid_classes"] = null;
        // line 52
        $context["column_second_grid_classes"] = null;
        // line 53
        $context["mt_vertical_aligment"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["content"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#block_content"] ?? null) : null), "field_mt_hero_v2_ver_alignment", [], "any", false, false, true, 53), "value", [], "any", false, false, true, 53);
        // line 54
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["content"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#block_content"] ?? null) : null), "field_mt_hero_v2_hor_alignment", [], "any", false, false, true, 54), "value", [], "any", false, false, true, 54) == "image-right")) {
            // line 55
            echo "  ";
            $context["column_first_order"] = "order-lg-1 order-2";
            // line 56
            echo "  ";
            $context["column_second_order"] = "order-lg-2 text-end";
        } else {
            // line 58
            echo "  ";
            $context["column_first_order"] = "order-lg-2 order-2";
            // line 59
            echo "  ";
            $context["column_second_order"] = "order-lg-1";
        }
        // line 61
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["content"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#block_content"] ?? null) : null), "field_mt_hero_v2_layout", [], "any", false, false, true, 61), "value", [], "any", false, false, true, 61) == "two-col-33-67")) {
            // line 62
            echo "  ";
            $context["column_first_grid_classes"] = "col-lg-4 pt-xl-4 pt-0 hero-column-first";
            // line 63
            echo "  ";
            $context["column_second_grid_classes"] = "col-lg-8 hero-column-second";
            // line 64
            echo "  ";
            $context["columns"] = "two-columns";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 =         // line 65
($context["content"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#block_content"] ?? null) : null), "field_mt_hero_v2_layout", [], "any", false, false, true, 65), "value", [], "any", false, false, true, 65) == "two-col-42-58")) {
            // line 66
            echo "  ";
            $context["column_first_grid_classes"] = "col-lg-5 pt-xl-4 pt-0 hero-column-first";
            // line 67
            echo "  ";
            $context["column_second_grid_classes"] = "col-lg-7 hero-column-second";
            // line 68
            echo "  ";
            $context["columns"] = "two-columns";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 =         // line 69
($context["content"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#block_content"] ?? null) : null), "field_mt_hero_v2_layout", [], "any", false, false, true, 69), "value", [], "any", false, false, true, 69) == "two-col-50-50")) {
            // line 70
            echo "  ";
            $context["column_first_grid_classes"] = "col-lg-6 pt-xl-4 pt-0 hero-column-first";
            // line 71
            echo "  ";
            $context["column_second_grid_classes"] = "col-lg-6 hero-column-second";
            // line 72
            echo "  ";
            $context["columns"] = "two-columns";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 =         // line 73
($context["content"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#block_content"] ?? null) : null), "field_mt_hero_v2_layout", [], "any", false, false, true, 73), "value", [], "any", false, false, true, 73) == "two-col-58-42")) {
            // line 74
            echo "  ";
            $context["column_first_grid_classes"] = "col-lg-7 pt-xl-4 pt-0 hero-column-first";
            // line 75
            echo "  ";
            $context["column_second_grid_classes"] = "col-lg-5 hero-column-second";
            // line 76
            echo "  ";
            $context["columns"] = "two-columns";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 =         // line 77
($context["content"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#block_content"] ?? null) : null), "field_mt_hero_v2_layout", [], "any", false, false, true, 77), "value", [], "any", false, false, true, 77) == "two-col-67-33")) {
            // line 78
            echo "  ";
            $context["column_first_grid_classes"] = "col-lg-8 pt-xl-4 pt-0 hero-column-first";
            // line 79
            echo "  ";
            $context["column_second_grid_classes"] = "col-lg-4 hero-column-second";
            // line 80
            echo "  ";
            $context["columns"] = "two-columns";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 =         // line 81
($context["content"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#block_content"] ?? null) : null), "field_mt_hero_v2_layout", [], "any", false, false, true, 81), "value", [], "any", false, false, true, 81) == "one-col-60 mt-image-first")) {
            // line 82
            echo "  ";
            $context["column_first_grid_classes"] = "col-lg-6 pt-lg-4 pt-0 me-auto ms-auto text-center";
            // line 83
            echo "  ";
            $context["column_second_grid_classes"] = "col-lg-6 pt-lg-4 pt-0 me-auto ms-auto text-center";
            // line 84
            echo "  ";
            $context["columns"] = "one-column image-first";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 =         // line 85
($context["content"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#block_content"] ?? null) : null), "field_mt_hero_v2_layout", [], "any", false, false, true, 85), "value", [], "any", false, false, true, 85) == "one-col-80 mt-image-first")) {
            // line 86
            echo "  ";
            $context["column_first_grid_classes"] = "col-lg-8 pt-lg-4 pt-0 me-auto ms-auto text-center";
            // line 87
            echo "  ";
            $context["column_second_grid_classes"] = "col-lg-8 pt-lg-4 pt-0 me-auto ms-auto text-center";
            // line 88
            echo "  ";
            $context["columns"] = "one-column image-first";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_9 =         // line 89
($context["content"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["#block_content"] ?? null) : null), "field_mt_hero_v2_layout", [], "any", false, false, true, 89), "value", [], "any", false, false, true, 89) == "one-col-100 mt-image-first")) {
            // line 90
            echo "  ";
            $context["column_first_grid_classes"] = "col-lg-12 pt-lg-4 pt-0 me-auto ms-auto text-center";
            // line 91
            echo "  ";
            $context["column_second_grid_classes"] = "col-lg-12 pt-lg-4 pt-0 me-auto ms-auto text-center";
            // line 92
            echo "  ";
            $context["columns"] = "one-column image-first";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_10 =         // line 93
($context["content"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["#block_content"] ?? null) : null), "field_mt_hero_v2_layout", [], "any", false, false, true, 93), "value", [], "any", false, false, true, 93) == "one-col-60 mt-text-first")) {
            // line 94
            echo "  ";
            $context["column_first_grid_classes"] = "col-lg-6 pt-lg-4 pt-0 me-auto ms-auto text-center";
            // line 95
            echo "  ";
            $context["column_second_grid_classes"] = "col-lg-6 pt-lg-4 pt-0 me-auto ms-auto text-center";
            // line 96
            echo "  ";
            $context["columns"] = "one-column text-first";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_11 =         // line 97
($context["content"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#block_content"] ?? null) : null), "field_mt_hero_v2_layout", [], "any", false, false, true, 97), "value", [], "any", false, false, true, 97) == "one-col-80 mt-text-first")) {
            // line 98
            echo "  ";
            $context["column_first_grid_classes"] = "col-lg-8 pt-lg-4 pt-0 me-auto ms-auto text-center";
            // line 99
            echo "  ";
            $context["column_second_grid_classes"] = "col-lg-8 pt-lg-4 pt-0 me-auto ms-auto text-center";
            // line 100
            echo "  ";
            $context["columns"] = "one-column text-first";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_12 =         // line 101
($context["content"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["#block_content"] ?? null) : null), "field_mt_hero_v2_layout", [], "any", false, false, true, 101), "value", [], "any", false, false, true, 101) == "one-col-100 mt-text-first")) {
            // line 102
            echo "  ";
            $context["column_first_grid_classes"] = "col-lg-12 pt-lg-4 pt-0 me-auto ms-auto text-center";
            // line 103
            echo "  ";
            $context["column_second_grid_classes"] = "col-lg-12 pt-lg-4 pt-0 me-auto ms-auto text-center";
            // line 104
            echo "  ";
            $context["columns"] = "one-column text-first";
        }
        // line 106
        echo "
<div";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 107), 107, $this->source), "html", null, true);
        echo ">
  ";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 108, $this->source), "html", null, true);
        echo "
  ";
        // line 109
        if (($context["label"] ?? null)) {
            // line 110
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 110), 110, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 110, $this->source), "html", null, true);
            echo "</h2>
  ";
        }
        // line 112
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 112, $this->source), "html", null, true);
        echo "
  ";
        // line 113
        $this->displayBlock('content', $context, $blocks);
        // line 179
        echo "</div>
";
    }

    // line 33
    public function block_libraries($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/hero-v2-block"), "html", null, true);
        echo "
";
    }

    // line 113
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "    <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "content"], "method", false, false, true, 114), "addClass", [0 => ($context["columns"] ?? null)], "method", false, false, true, 114), "addClass", [0 => ($context["mt_vertical_aligment"] ?? null)], "method", false, false, true, 114), 114, $this->source), "html", null, true);
        echo ">
      <div class=\"container\">
        <div class=\"row ";
        // line 116
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mt_vertical_aligment"] ?? null), 116, $this->source), "html", null, true);
        echo "\">
          <div class=\"";
        // line 117
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["column_first_grid_classes"] ?? null), 117, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["column_first_order"] ?? null), 117, $this->source), "html", null, true);
        echo "\">
            ";
        // line 118
        if (((($context["columns"] ?? null) == "one-column image-first") && $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_image", [], "any", false, false, true, 118)))) {
            // line 119
            echo "              <div class=\"mb-4 pb-5\">
                ";
            // line 120
            if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_action", [], "any", false, false, true, 120)) && twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = ($context["content"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#block_content"] ?? null) : null), "field_mt_hero_v2_action", [], "any", false, false, true, 120)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["0"] ?? null) : null), "uri", [], "any", false, false, true, 120))) {
                // line 121
                echo "                  <div class=\"overlay-container\">
                    <span class=\"overlay\">
                      ";
                // line 123
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_action", [], "any", false, false, true, 123)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["0"] ?? null) : null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["#url"] ?? null) : null), "isExternal", [], "method", false, false, true, 123)) {
                    // line 124
                    echo "                        <a target=\"_blank\" class=\"overlay-target-link\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, (($__internal_compile_18 = ($context["content"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["#block_content"] ?? null) : null), "field_mt_hero_v2_action", [], "any", false, false, true, 124)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["0"] ?? null) : null), "uri", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
                    echo "\"></a>
                      ";
                } else {
                    // line 126
                    echo "                        <a class=\"overlay-target-link\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_action", [], "any", false, false, true, 126)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["0"] ?? null) : null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["#url"] ?? null) : null), "getRouteName", [], "method", false, false, true, 126), 126, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_21 = (($__internal_compile_22 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_action", [], "any", false, false, true, 126)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["0"] ?? null) : null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["#url"] ?? null) : null), "getRouteParameters", [], "method", false, false, true, 126), 126, $this->source)), "html", null, true);
                    echo "\"></a>
                      ";
                }
                // line 128
                echo "                    </span>
                    ";
                // line 129
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_image", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
                echo "
                  </div>
                ";
            } else {
                // line 132
                echo "                  ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_image", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
                echo "
                ";
            }
            // line 134
            echo "              </div>
            ";
        }
        // line 136
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 136, $this->source), "field_mt_hero_v2_image", "field_mt_hero_v2_layout"), "html", null, true);
        echo "
            ";
        // line 137
        if (((($context["columns"] ?? null) == "one-column text-first") && $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_image", [], "any", false, false, true, 137)))) {
            // line 138
            echo "              <div class=\"mt-4 pt-5\">
                ";
            // line 139
            if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_action", [], "any", false, false, true, 139)) && twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = twig_get_attribute($this->env, $this->source, (($__internal_compile_24 = ($context["content"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["#block_content"] ?? null) : null), "field_mt_hero_v2_action", [], "any", false, false, true, 139)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["0"] ?? null) : null), "uri", [], "any", false, false, true, 139))) {
                // line 140
                echo "                  <div class=\"overlay-container\">
                    <span class=\"overlay\">
                      ";
                // line 142
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_25 = (($__internal_compile_26 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_action", [], "any", false, false, true, 142)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["0"] ?? null) : null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["#url"] ?? null) : null), "isExternal", [], "method", false, false, true, 142)) {
                    // line 143
                    echo "                        <a target=\"_blank\" class=\"overlay-target-link\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_27 = twig_get_attribute($this->env, $this->source, (($__internal_compile_28 = ($context["content"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["#block_content"] ?? null) : null), "field_mt_hero_v2_action", [], "any", false, false, true, 143)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["0"] ?? null) : null), "uri", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
                    echo "\"></a>
                      ";
                } else {
                    // line 145
                    echo "                        <a class=\"overlay-target-link\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_29 = (($__internal_compile_30 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_action", [], "any", false, false, true, 145)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["0"] ?? null) : null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["#url"] ?? null) : null), "getRouteName", [], "method", false, false, true, 145), 145, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_31 = (($__internal_compile_32 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_action", [], "any", false, false, true, 145)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["0"] ?? null) : null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["#url"] ?? null) : null), "getRouteParameters", [], "method", false, false, true, 145), 145, $this->source)), "html", null, true);
                    echo "\"></a>
                      ";
                }
                // line 147
                echo "                    </span>
                    ";
                // line 148
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_image", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
                echo "
                  </div>
                ";
            } else {
                // line 151
                echo "                  ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_image", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
                echo "
                ";
            }
            // line 153
            echo "              </div>
            ";
        }
        // line 155
        echo "          </div>
          ";
        // line 156
        if (((($context["columns"] ?? null) == "two-columns") && $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_image", [], "any", false, false, true, 156)))) {
            // line 157
            echo "            <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["column_second_grid_classes"] ?? null), 157, $this->source), "html", null, true);
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["column_second_order"] ?? null), 157, $this->source), "html", null, true);
            echo "\">
                ";
            // line 158
            if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_action", [], "any", false, false, true, 158)) && twig_get_attribute($this->env, $this->source, (($__internal_compile_33 = twig_get_attribute($this->env, $this->source, (($__internal_compile_34 = ($context["content"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["#block_content"] ?? null) : null), "field_mt_hero_v2_action", [], "any", false, false, true, 158)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["0"] ?? null) : null), "uri", [], "any", false, false, true, 158))) {
                // line 159
                echo "                  <div class=\"overlay-container\">
                    <span class=\"overlay\">
                      ";
                // line 161
                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_35 = (($__internal_compile_36 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_action", [], "any", false, false, true, 161)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["0"] ?? null) : null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["#url"] ?? null) : null), "isExternal", [], "method", false, false, true, 161)) {
                    // line 162
                    echo "                        <a target=\"_blank\" class=\"overlay-target-link\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_37 = twig_get_attribute($this->env, $this->source, (($__internal_compile_38 = ($context["content"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["#block_content"] ?? null) : null), "field_mt_hero_v2_action", [], "any", false, false, true, 162)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["0"] ?? null) : null), "uri", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
                    echo "\"></a>
                      ";
                } else {
                    // line 164
                    echo "                        <a class=\"overlay-target-link\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_39 = (($__internal_compile_40 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_action", [], "any", false, false, true, 164)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["0"] ?? null) : null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["#url"] ?? null) : null), "getRouteName", [], "method", false, false, true, 164), 164, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_41 = (($__internal_compile_42 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_action", [], "any", false, false, true, 164)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["0"] ?? null) : null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["#url"] ?? null) : null), "getRouteParameters", [], "method", false, false, true, 164), 164, $this->source)), "html", null, true);
                    echo "\"></a>
                      ";
                }
                // line 166
                echo "                    </span>
                    ";
                // line 167
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_image", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
                echo "
                  </div>
                ";
            } else {
                // line 170
                echo "                  ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_v2_image", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
                echo "
                ";
            }
            // line 172
            echo "            </div>
          ";
        }
        // line 174
        echo "        </div>
      </div>

    </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/block--block-type--mt-hero-v2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 174,  401 => 172,  395 => 170,  389 => 167,  386 => 166,  380 => 164,  374 => 162,  372 => 161,  368 => 159,  366 => 158,  359 => 157,  357 => 156,  354 => 155,  350 => 153,  344 => 151,  338 => 148,  335 => 147,  329 => 145,  323 => 143,  321 => 142,  317 => 140,  315 => 139,  312 => 138,  310 => 137,  305 => 136,  301 => 134,  295 => 132,  289 => 129,  286 => 128,  280 => 126,  274 => 124,  272 => 123,  268 => 121,  266 => 120,  263 => 119,  261 => 118,  255 => 117,  251 => 116,  245 => 114,  241 => 113,  234 => 34,  230 => 33,  225 => 179,  223 => 113,  218 => 112,  210 => 110,  208 => 109,  204 => 108,  200 => 107,  197 => 106,  193 => 104,  190 => 103,  187 => 102,  185 => 101,  182 => 100,  179 => 99,  176 => 98,  174 => 97,  171 => 96,  168 => 95,  165 => 94,  163 => 93,  160 => 92,  157 => 91,  154 => 90,  152 => 89,  149 => 88,  146 => 87,  143 => 86,  141 => 85,  138 => 84,  135 => 83,  132 => 82,  130 => 81,  127 => 80,  124 => 79,  121 => 78,  119 => 77,  116 => 76,  113 => 75,  110 => 74,  108 => 73,  105 => 72,  102 => 71,  99 => 70,  97 => 69,  94 => 68,  91 => 67,  88 => 66,  86 => 65,  83 => 64,  80 => 63,  77 => 62,  75 => 61,  71 => 59,  68 => 58,  64 => 56,  61 => 55,  59 => 54,  57 => 53,  55 => 52,  53 => 51,  51 => 50,  49 => 49,  47 => 45,  45 => 40,  44 => 39,  43 => 37,  41 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/block--block-type--mt-hero-v2.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/block--block-type--mt-hero-v2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 33, "set" => 37, "if" => 54);
        static $filters = array("clean_class" => 39, "escape" => 107, "render" => 118, "without" => 136);
        static $functions = array("attach_library" => 34, "path" => 126);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'if'],
                ['clean_class', 'escape', 'render', 'without'],
                ['attach_library', 'path']
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
