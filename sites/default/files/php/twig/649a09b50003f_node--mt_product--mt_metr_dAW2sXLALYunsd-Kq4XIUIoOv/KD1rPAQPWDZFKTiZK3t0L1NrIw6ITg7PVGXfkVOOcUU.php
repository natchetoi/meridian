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

/* themes/custom/baseplus/templates/node--mt_product--mt_metro_tile.html.twig */
class __TwigTemplate_fdb099b49d87d278ab862759b8102057 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 10
($context["node"] ?? null), "bundle", [], "any", false, false, true, 10), 10, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 11
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 11)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 12
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 12)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 13
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 13)) ? ("node--unpublished") : ("")), 5 => ((        // line 14
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 14, $this->source)))) : (""))];
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/node-view-mode-metro-tile"), "html", null, true);
        echo "

";
        // line 19
        $context["caption_text_first"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_price", [], "any", false, false, true, 19);
        // line 20
        $context["caption_text_second"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_categories", [], "any", false, false, true, 20);
        // line 21
        $context["image"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_teaser_image", [], "any", false, false, true, 21);
        // line 22
        $context["rendered_content"] = $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 22, $this->source), "field_mt_prd_teaser_image", "field_mt_prd_categories", "field_mt_prd_price");
        // line 23
        echo "
";
        // line 24
        $context["caption_items"] = "one-item";
        // line 25
        if ((($context["caption_text_first"] ?? null) && ($context["caption_text_second"] ?? null))) {
            // line 26
            echo "  ";
            $context["caption_items"] = "three-items";
        } elseif (((        // line 27
($context["caption_text_first"] ?? null) &&  !($context["caption_text_second"] ?? null)) || ( !($context["caption_text_first"] ?? null) && ($context["caption_text_second"] ?? null)))) {
            // line 28
            echo "  ";
            $context["caption_items"] = "two-items";
        }
        // line 30
        echo "
";
        // line 31
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["image"] ?? null))) {
            // line 32
            echo "  ";
            $context["view_row_index"] = (($__internal_compile_0 = ($context["elements"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#mt_view_index"] ?? null) : null);
            // line 33
            echo "  ";
            $context["view_page_index"] = (($__internal_compile_1 = ($context["elements"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#mt_view_page_index"] ?? null) : null);
            // line 34
            echo "  ";
            if (((($context["view_page_index"] ?? null) == 0) && ((($context["view_row_index"] ?? null) == 2) || (($context["view_row_index"] ?? null) == 3)))) {
                // line 35
                echo "
    ";
                // line 36
                $context["styled_image"] = twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), 0, [], "any", false, false, true, 36);
                // line 37
                echo "    ";
                $context["styled_image"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["styled_image"] ?? null), 37, $this->source), ["#image_style" => "mt_metro_tile_wide"]);
                // line 38
                echo "  ";
            } else {
                // line 39
                echo "    ";
                $context["styled_image"] = ($context["image"] ?? null);
                // line 40
                echo "  ";
            }
        }
        // line 42
        $this->loadTemplate("@baseplus/partials/_mt-metro-tile.html.twig", "themes/custom/baseplus/templates/node--mt_product--mt_metro_tile.html.twig", 42)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/node--mt_product--mt_metro_tile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 42,  103 => 40,  100 => 39,  97 => 38,  94 => 37,  92 => 36,  89 => 35,  86 => 34,  83 => 33,  80 => 32,  78 => 31,  75 => 30,  71 => 28,  69 => 27,  66 => 26,  64 => 25,  62 => 24,  59 => 23,  57 => 22,  55 => 21,  53 => 20,  51 => 19,  46 => 17,  44 => 14,  43 => 13,  42 => 12,  41 => 11,  40 => 10,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/node--mt_product--mt_metro_tile.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/node--mt_product--mt_metro_tile.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "if" => 25, "include" => 42);
        static $filters = array("clean_class" => 10, "escape" => 17, "without" => 22, "render" => 31, "merge" => 37);
        static $functions = array("attach_library" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['clean_class', 'escape', 'without', 'render', 'merge'],
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
