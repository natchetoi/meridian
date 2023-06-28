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

/* themes/custom/baseplus/templates/node--mt_showcase--mt_teaser_tile.html.twig */
class __TwigTemplate_917cad83d91ba9ec942464c1c55de988 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/node-view-mode-teaser-tile"), "html", null, true);
        echo "
";
        // line 18
        $context["image"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_shw_image", [], "any", false, false, true, 18);
        // line 19
        $context["teaser_tile_pre_content_first"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_shw_tags", [], "any", false, false, true, 19);
        // line 20
        $context["teaser_tile_pre_content_second"] = null;
        // line 21
        $context["teaser_tile_subtitle"] = null;
        // line 22
        $context["rendered_content"] = $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 22, $this->source), "field_mt_shw_image", "field_mt_shw_body", "field_mt_shw_tags");
        // line 23
        $context["teaser_tile_content"] = null;
        // line 24
        $context["image_caption"] = null;
        // line 25
        $context["date_overlay"] = true;
        // line 26
        $context["submitted_day"] = $this->env->getFilter('format_date')->getCallable()($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 26), 26, $this->source), "custom", "d");
        // line 27
        $context["submitted_month"] = $this->env->getFilter('format_date')->getCallable()($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 27), 27, $this->source), "custom", "M, ");
        // line 28
        $context["submitted_year"] = $this->env->getFilter('format_date')->getCallable()($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 28), 28, $this->source), "custom", "Y");
        // line 29
        $context["read_more"] = null;
        // line 30
        $this->loadTemplate("@baseplus/partials/_mt-teaser-tile-card.html.twig", "themes/custom/baseplus/templates/node--mt_showcase--mt_teaser_tile.html.twig", 30)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/node--mt_showcase--mt_teaser_tile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 30,  72 => 29,  70 => 28,  68 => 27,  66 => 26,  64 => 25,  62 => 24,  60 => 23,  58 => 22,  56 => 21,  54 => 20,  52 => 19,  50 => 18,  46 => 17,  44 => 14,  43 => 13,  42 => 12,  41 => 11,  40 => 10,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/node--mt_showcase--mt_teaser_tile.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/node--mt_showcase--mt_teaser_tile.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "include" => 30);
        static $filters = array("clean_class" => 10, "escape" => 17, "without" => 22, "format_date" => 26);
        static $functions = array("attach_library" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['clean_class', 'escape', 'without', 'format_date'],
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
