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

/* themes/custom/baseplus/templates/field--comment.html.twig */
class __TwigTemplate_2f2618f9e2e4f620cee96065c27c9f5e extends \Twig\Template
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
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        $this->displayBlock('libraries', $context, $blocks);
        // line 32
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 34
($context["field_name"] ?? null), 34, $this->source))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 35
($context["field_type"] ?? null), 35, $this->source))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 36
($context["label_display"] ?? null), 36, $this->source)), 4 => "comment-wrapper"];
        // line 41
        $context["title_classes"] = [0 => "title", 1 => (((        // line 43
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 46
        if ((($context["comments"] ?? null) || ($context["comment_form"] ?? null))) {
            // line 47
            echo "<section";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 47), 47, $this->source), "html", null, true);
            echo ">
  ";
            // line 48
            if ((($context["comments"] ?? null) &&  !($context["label_hidden"] ?? null))) {
                // line 49
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 49, $this->source), "html", null, true);
                echo "
    <h2";
                // line 50
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "setAttribute", [0 => "id", 1 => "comments"], "method", false, false, true, 50), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 50), 50, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 50, $this->source), "html", null, true);
                echo "</h2>
    ";
                // line 51
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 51, $this->source), "html", null, true);
                echo "
  ";
            }
            // line 53
            echo "
  ";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comments"] ?? null), 54, $this->source), "html", null, true);
            echo "

  ";
            // line 56
            if (($context["comment_form"] ?? null)) {
                // line 57
                echo "    <h2 class=\"title comment-form__title\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add new comment"));
                echo "</h2>
    ";
                // line 58
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_form"] ?? null), 58, $this->source), "html", null, true);
                echo "
  ";
            }
            // line 60
            echo "
</section>
";
        }
    }

    // line 28
    public function block_libraries($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/comments"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/field--comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  102 => 28,  95 => 60,  90 => 58,  85 => 57,  83 => 56,  78 => 54,  75 => 53,  70 => 51,  64 => 50,  59 => 49,  57 => 48,  52 => 47,  50 => 46,  48 => 43,  47 => 41,  45 => 36,  44 => 35,  43 => 34,  42 => 32,  40 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/field--comment.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/field--comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 28, "set" => 32, "if" => 46);
        static $filters = array("clean_class" => 34, "escape" => 47, "t" => 57);
        static $functions = array("attach_library" => 29);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'if'],
                ['clean_class', 'escape', 't'],
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
