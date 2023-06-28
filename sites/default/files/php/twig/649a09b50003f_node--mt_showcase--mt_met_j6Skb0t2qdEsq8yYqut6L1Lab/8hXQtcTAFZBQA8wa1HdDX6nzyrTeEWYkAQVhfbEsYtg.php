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

/* themes/custom/baseplus/templates/node--mt_showcase--mt_metro_tile.html.twig */
class __TwigTemplate_3430bfdb632dd4cb96218e7d1448748d extends \Twig\Template
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
        $context["caption_text_first"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_shw_tags", [], "any", false, false, true, 19);
        // line 20
        if (($context["display_submitted"] ?? null)) {
            // line 21
            echo "  ";
            $context["caption_text_second"] = $this->env->getFilter('format_date')->getCallable()($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 21), 21, $this->source), "custom", "d M, Y");
        } else {
            // line 23
            echo "  ";
            $context["caption_text_second"] = null;
        }
        // line 25
        $context["image"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_shw_image", [], "any", false, false, true, 25);
        // line 26
        $context["rendered_content"] = $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 26, $this->source), "field_mt_shw_image", "field_mt_shw_tags");
        // line 27
        echo "
";
        // line 28
        $context["caption_items"] = "one-item";
        // line 29
        if ((($context["caption_text_first"] ?? null) && ($context["caption_text_second"] ?? null))) {
            // line 30
            echo "  ";
            $context["caption_items"] = "three-items";
        } elseif (((        // line 31
($context["caption_text_first"] ?? null) &&  !($context["caption_text_second"] ?? null)) || ( !($context["caption_text_first"] ?? null) && ($context["caption_text_second"] ?? null)))) {
            // line 32
            echo "  ";
            $context["caption_items"] = "two-items";
        }
        // line 34
        echo "
";
        // line 35
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["image"] ?? null))) {
            // line 36
            echo "  ";
            $context["view_row_index"] = (($__internal_compile_0 = ($context["elements"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#mt_view_index"] ?? null) : null);
            // line 37
            echo "  ";
            $context["view_page_index"] = (($__internal_compile_1 = ($context["elements"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#mt_view_page_index"] ?? null) : null);
            // line 38
            echo "  ";
            if (((($context["view_page_index"] ?? null) == 0) && ((($context["view_row_index"] ?? null) == 2) || (($context["view_row_index"] ?? null) == 3)))) {
                // line 39
                echo "
    ";
                // line 40
                $context["styled_image"] = twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), 0, [], "any", false, false, true, 40);
                // line 41
                echo "    ";
                $context["styled_image"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["styled_image"] ?? null), 41, $this->source), ["#image_style" => "mt_metro_tile_wide"]);
                // line 42
                echo "  ";
            } else {
                // line 43
                echo "    ";
                $context["styled_image"] = ($context["image"] ?? null);
                // line 44
                echo "  ";
            }
        }
        // line 46
        $this->loadTemplate("@baseplus/partials/_mt-metro-tile.html.twig", "themes/custom/baseplus/templates/node--mt_showcase--mt_metro_tile.html.twig", 46)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/node--mt_showcase--mt_metro_tile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 46,  111 => 44,  108 => 43,  105 => 42,  102 => 41,  100 => 40,  97 => 39,  94 => 38,  91 => 37,  88 => 36,  86 => 35,  83 => 34,  79 => 32,  77 => 31,  74 => 30,  72 => 29,  70 => 28,  67 => 27,  65 => 26,  63 => 25,  59 => 23,  55 => 21,  53 => 20,  51 => 19,  46 => 17,  44 => 14,  43 => 13,  42 => 12,  41 => 11,  40 => 10,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/node--mt_showcase--mt_metro_tile.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/node--mt_showcase--mt_metro_tile.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "if" => 20, "include" => 46);
        static $filters = array("clean_class" => 10, "escape" => 17, "format_date" => 21, "without" => 26, "render" => 35, "merge" => 41);
        static $functions = array("attach_library" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['clean_class', 'escape', 'format_date', 'without', 'render', 'merge'],
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
