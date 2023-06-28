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

/* themes/custom/baseplus/templates/node--mt-post--mt-teaser-compact.html.twig */
class __TwigTemplate_be365edfa7526d7bdccec57493e06bf3 extends \Twig\Template
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
        $context["classes"] = [0 => "node", 1 => "mb-4", 2 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 11
($context["node"] ?? null), "bundle", [], "any", false, false, true, 11), 11, $this->source))), 3 => ((twig_get_attribute($this->env, $this->source,         // line 12
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 12)) ? ("node--promoted") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 13
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 13)) ? ("node--sticky") : ("")), 5 => (( !twig_get_attribute($this->env, $this->source,         // line 14
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 14)) ? ("node--unpublished") : ("")), 6 => ((        // line 15
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 15, $this->source)))) : ("")), 7 => "mt-style-custom-tl region--default-background  p-4"];
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/node-view-mode-teaser-compact"), "html", null, true);
        echo "
";
        // line 20
        $context["image"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_pst_image", [], "any", false, false, true, 20);
        // line 21
        $context["rendered_content"] = null;
        // line 22
        $context["read_more"] = false;
        // line 23
        if (($context["display_submitted"] ?? null)) {
            // line 24
            echo "  ";
            $context["created_date"] = $this->env->getFilter('format_date')->getCallable()($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 24), 24, $this->source), "custom", "d M, Y");
        } else {
            // line 26
            echo "  ";
            $context["created_date"] = null;
        }
        // line 29
        $context["highlight_image_styled_url"] = null;
        // line 30
        $this->loadTemplate("@baseplus/partials/_mt-teaser-compact.html.twig", "themes/custom/baseplus/templates/node--mt-post--mt-teaser-compact.html.twig", 30)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/node--mt-post--mt-teaser-compact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 30,  66 => 29,  62 => 26,  58 => 24,  56 => 23,  54 => 22,  52 => 21,  50 => 20,  46 => 19,  44 => 15,  43 => 14,  42 => 13,  41 => 12,  40 => 11,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/node--mt-post--mt-teaser-compact.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/node--mt-post--mt-teaser-compact.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "if" => 23, "include" => 30);
        static $filters = array("clean_class" => 11, "escape" => 19, "format_date" => 24);
        static $functions = array("attach_library" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['clean_class', 'escape', 'format_date'],
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
