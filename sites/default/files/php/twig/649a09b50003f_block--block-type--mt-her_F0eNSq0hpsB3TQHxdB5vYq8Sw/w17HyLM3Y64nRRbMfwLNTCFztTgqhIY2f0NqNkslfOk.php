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

/* themes/custom/baseplus/templates/block--block-type--mt-hero-form.html.twig */
class __TwigTemplate_3f695f18204ef3e3972e257006feff71 extends \Twig\Template
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
($context["plugin_id"] ?? null), 40, $this->source))), 3 => "block-mt-hero-form"];
        // line 45
        $context["title_classes"] = [0 => "title"];
        // line 49
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["content"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#block_content"] ?? null) : null), "field_mt_hero_form_layout", [], "any", false, false, true, 49), "value", [], "any", false, false, true, 49) == "two-col-form-right")) {
            // line 50
            echo "  ";
            $context["column_first_grid_classes"] = "col-lg-6 mb-5 mb-lg-0 pe-xl-5";
            // line 51
            echo "  ";
            $context["column_second_grid_classes"] = "col-lg-6 ps-xl-5";
            // line 52
            echo "  ";
            $context["columns"] = "two-columns";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 =         // line 53
($context["content"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#block_content"] ?? null) : null), "field_mt_hero_form_layout", [], "any", false, false, true, 53), "value", [], "any", false, false, true, 53) == "two-col-form-left")) {
            // line 54
            echo "  ";
            $context["column_first_grid_classes"] = "col-lg-6 order-lg-2 mb-5 mb-lg-0 ps-xl-5";
            // line 55
            echo "  ";
            $context["column_second_grid_classes"] = "col-lg-6 order-lg-1 pe-xl-5";
            // line 56
            echo "  ";
            $context["columns"] = "two-columns";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 =         // line 57
($context["content"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#block_content"] ?? null) : null), "field_mt_hero_form_layout", [], "any", false, false, true, 57), "value", [], "any", false, false, true, 57) == "one-col-center")) {
            // line 58
            echo "  ";
            $context["column_first_grid_classes"] = "col-lg-6 pt-lg-4 pt-0 me-auto ms-auto text-center";
            // line 59
            echo "  ";
            $context["column_second_grid_classes"] = "col-lg-6 pt-lg-4 pt-0 me-auto ms-auto text-center";
            // line 60
            echo "  ";
            $context["columns"] = "one-column";
        }
        // line 62
        echo "
<div";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 63), 63, $this->source), "html", null, true);
        echo ">
  ";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 64, $this->source), "html", null, true);
        echo "
  ";
        // line 65
        if (($context["label"] ?? null)) {
            // line 66
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 66), 66, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 66, $this->source), "html", null, true);
            echo "</h2>
  ";
        }
        // line 68
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 68, $this->source), "html", null, true);
        echo "
  ";
        // line 69
        $this->displayBlock('content', $context, $blocks);
        // line 91
        echo "</div>
";
    }

    // line 33
    public function block_libraries($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/hero-form-block"), "html", null, true);
        echo "
";
    }

    // line 69
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "    <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "content"], "method", false, false, true, 70), "addClass", [0 => ($context["columns"] ?? null)], "method", false, false, true, 70), 70, $this->source), "html", null, true);
        echo ">
      <div class=\"container\">
        <div class=\"row align-items-start\">
          <div class=\"";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["column_first_grid_classes"] ?? null), 73, $this->source), "html", null, true);
        echo " align-self-center\">
            ";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 74, $this->source), "field_mt_hero_form_form", "field_mt_hero_form_layout"), "html", null, true);
        echo "
            ";
        // line 75
        if (((($context["columns"] ?? null) == "one-column") && $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_form_form", [], "any", false, false, true, 75)))) {
            // line 76
            echo "              <div class=\"mt-4 pt-5\">
                ";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_form_form", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "
              </div>
            ";
        }
        // line 80
        echo "          </div>
          ";
        // line 81
        if (((($context["columns"] ?? null) == "two-columns") && $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_form_form", [], "any", false, false, true, 81)))) {
            // line 82
            echo "            <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["column_second_grid_classes"] ?? null), 82, $this->source), "html", null, true);
            echo "\">
              ";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_hero_form_form", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 86
        echo "        </div>
      </div>

    </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/block--block-type--mt-hero-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 86,  167 => 83,  162 => 82,  160 => 81,  157 => 80,  151 => 77,  148 => 76,  146 => 75,  142 => 74,  138 => 73,  131 => 70,  127 => 69,  120 => 34,  116 => 33,  111 => 91,  109 => 69,  104 => 68,  96 => 66,  94 => 65,  90 => 64,  86 => 63,  83 => 62,  79 => 60,  76 => 59,  73 => 58,  71 => 57,  68 => 56,  65 => 55,  62 => 54,  60 => 53,  57 => 52,  54 => 51,  51 => 50,  49 => 49,  47 => 45,  45 => 40,  44 => 39,  43 => 37,  41 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/block--block-type--mt-hero-form.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/block--block-type--mt-hero-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 33, "set" => 37, "if" => 49);
        static $filters = array("clean_class" => 39, "escape" => 63, "without" => 74, "render" => 75);
        static $functions = array("attach_library" => 34);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'if'],
                ['clean_class', 'escape', 'without', 'render'],
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
