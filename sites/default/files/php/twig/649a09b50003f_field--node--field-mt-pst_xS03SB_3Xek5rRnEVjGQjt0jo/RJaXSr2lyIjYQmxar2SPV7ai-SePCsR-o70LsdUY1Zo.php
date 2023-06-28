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

/* themes/custom/baseplus/templates/field--node--field-mt-pst-category.html.twig */
class __TwigTemplate_cb81f46f9c179d80960859a726afcb87 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 51
        return "field--entity-reference.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        $context["styled_items"] = [];
        // line 41
        if ((($context["view_mode"] ?? null) == "teaser")) {
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 43
                $context["styled_item_content"] = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 43);
                // line 44
                $context["styled_item"] = $context["item"];
                // line 45
                $context["styled_item_content"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["styled_item_content"] ?? null), 45, $this->source), ["#options" => ["attributes" => ["class" => [0 => "mt-style-custom-all"]]]]);
                // line 46
                $context["styled_item"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["styled_item"] ?? null), 46, $this->source), ["content" => ($context["styled_item_content"] ?? null)]);
                // line 47
                $context["styled_items"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["styled_items"] ?? null), 47, $this->source), [0 => ($context["styled_item"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            $context["items"] = ($context["styled_items"] ?? null);
        }
        // line 51
        $this->parent = $this->loadTemplate("field--entity-reference.html.twig", "themes/custom/baseplus/templates/field--node--field-mt-pst-category.html.twig", 51);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/field--node--field-mt-pst-category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 51,  65 => 49,  59 => 47,  57 => 46,  55 => 45,  53 => 44,  51 => 43,  47 => 42,  45 => 41,  43 => 40,  36 => 51,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/field--node--field-mt-pst-category.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/field--node--field-mt-pst-category.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 40, "if" => 41, "for" => 42);
        static $filters = array("merge" => 45);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['merge'],
                []
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
