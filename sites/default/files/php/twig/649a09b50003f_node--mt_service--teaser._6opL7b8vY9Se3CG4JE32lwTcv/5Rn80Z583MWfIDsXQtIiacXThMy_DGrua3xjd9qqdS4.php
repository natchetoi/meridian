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

/* themes/custom/baseplus/templates/node--mt_service--teaser.html.twig */
class __TwigTemplate_3f7eaef337c52db6fb65102e2418619d extends \Twig\Template
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
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 14, $this->source)))) : ("")), 6 => ((        // line 15
($context["display_submitted"] ?? null)) ? ("node--display-submitted") : ("")), 7 => "clearfix"];
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/node-view-mode-teaser"), "html", null, true);
        echo "
";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/node-field"), "html", null, true);
        echo "
";
        // line 21
        $context["image"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_srv_teaser_image", [], "any", false, false, true, 21);
        // line 22
        $context["teaser_pre_content_first"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_srv_tags", [], "any", false, false, true, 22);
        // line 23
        $context["teaser_pre_content_second"] = null;
        // line 24
        $context["rendered_content"] = $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 24, $this->source), "field_mt_srv_teaser_image", "field_mt_srv_tags");
        // line 25
        $context["submitted_day"] = null;
        // line 26
        $context["submitted_month"] = null;
        // line 27
        $context["submitted_year"] = null;
        // line 28
        $this->loadTemplate("@baseplus/partials/_mt-teaser.html.twig", "themes/custom/baseplus/templates/node--mt_service--teaser.html.twig", 28)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/node--mt_service--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 28,  67 => 27,  65 => 26,  63 => 25,  61 => 24,  59 => 23,  57 => 22,  55 => 21,  51 => 20,  47 => 19,  45 => 15,  44 => 14,  43 => 13,  42 => 12,  41 => 11,  40 => 10,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/node--mt_service--teaser.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/node--mt_service--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "include" => 28);
        static $filters = array("clean_class" => 10, "escape" => 19, "without" => 24);
        static $functions = array("attach_library" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['clean_class', 'escape', 'without'],
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
