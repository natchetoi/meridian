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

/* themes/custom/baseplus/templates/node--mt-showcase--mt-teaser-tile-image.html.twig */
class __TwigTemplate_b151b78d382315ca96e75ecb9298f26b extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/node-view-mode-teaser-tile-image"), "html", null, true);
        echo "
";
        // line 18
        $context["image"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_shw_image", [], "any", false, false, true, 18);
        // line 19
        $context["teaser_tile_meta_first"] = null;
        // line 20
        $context["teaser_tile_meta_second"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_shw_tags", [], "any", false, false, true, 20);
        // line 21
        if (($context["display_submitted"] ?? null)) {
            // line 22
            echo "  ";
            $context["teaser_tile_caption_bottom"] = $this->env->getFilter('format_date')->getCallable()($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 22), 22, $this->source), "custom", "M d, Y");
        } else {
            // line 24
            echo "  ";
            $context["teaser_tile_caption_bottom"] = null;
        }
        // line 26
        $context["rendered_content"] = $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 26, $this->source), "field_mt_shw_image", "field_mt_shw_tags");
        // line 27
        $this->loadTemplate("@baseplus/partials/_mt-teaser-tile-image.html.twig", "themes/custom/baseplus/templates/node--mt-showcase--mt-teaser-tile-image.html.twig", 27)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/node--mt-showcase--mt-teaser-tile-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 27,  66 => 26,  62 => 24,  58 => 22,  56 => 21,  54 => 20,  52 => 19,  50 => 18,  46 => 17,  44 => 14,  43 => 13,  42 => 12,  41 => 11,  40 => 10,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/node--mt-showcase--mt-teaser-tile-image.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/node--mt-showcase--mt-teaser-tile-image.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "if" => 21, "include" => 27);
        static $filters = array("clean_class" => 10, "escape" => 17, "format_date" => 22, "without" => 26);
        static $functions = array("attach_library" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['clean_class', 'escape', 'format_date', 'without'],
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
