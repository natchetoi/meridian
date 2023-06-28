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

/* themes/custom/baseplus/templates/node--mt-testimonial--mt-teaser-tile-text.html.twig */
class __TwigTemplate_9807d163a0214f5ae50de89f323a1311 extends \Twig\Template
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
        // line 7
        $context["teaser_tile_text_precontent"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_tst_testimonial_image", [], "any", false, false, true, 7);
        // line 9
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 11
($context["node"] ?? null), "bundle", [], "any", false, false, true, 11), 11, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 12
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 12)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 13
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 13)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 14
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 14)) ? ("node--unpublished") : ("")), 5 => ((        // line 15
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 15, $this->source)))) : ("")), 6 => ((        // line 16
($context["display_submitted"] ?? null)) ? ("node--display-submitted") : ("")), 7 => ((        // line 17
($context["teaser_tile_text_precontent"] ?? null)) ? ("precontent-enabled") : ("")), 8 => "clearfix"];
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/node-view-mode-teaser-tile-text"), "html", null, true);
        echo "
";
        // line 22
        $context["teaser_tile_text_content"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_tst_body", [], "any", false, false, true, 22);
        // line 23
        $context["teaser_tile_text_footer"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_tst_subtitle", [], "any", false, false, true, 23);
        // line 24
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_tst_testimonial_link", [], "any", false, false, true, 24))) {
            // line 25
            echo "  ";
            $context["url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_mt_tst_testimonial_link", [], "any", false, false, true, 25), 0, [], "any", false, false, true, 25), "url", [], "any", false, false, true, 25);
        }
        // line 27
        $context["rendered_content"] = $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 27, $this->source), "field_mt_tst_testimonial_image", "field_mt_tst_body", "field_mt_tst_subtitle", "field_mt_tst_testimonial_link");
        // line 28
        $this->loadTemplate("@baseplus/partials/_mt-teaser-tile-text-2.html.twig", "themes/custom/baseplus/templates/node--mt-testimonial--mt-teaser-tile-text.html.twig", 28)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/node--mt-testimonial--mt-teaser-tile-text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 28,  64 => 27,  60 => 25,  58 => 24,  56 => 23,  54 => 22,  50 => 21,  48 => 17,  47 => 16,  46 => 15,  45 => 14,  44 => 13,  43 => 12,  42 => 11,  41 => 9,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/node--mt-testimonial--mt-teaser-tile-text.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/node--mt-testimonial--mt-teaser-tile-text.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "if" => 24, "include" => 28);
        static $filters = array("clean_class" => 11, "escape" => 21, "render" => 24, "without" => 27);
        static $functions = array("attach_library" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['clean_class', 'escape', 'render', 'without'],
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
