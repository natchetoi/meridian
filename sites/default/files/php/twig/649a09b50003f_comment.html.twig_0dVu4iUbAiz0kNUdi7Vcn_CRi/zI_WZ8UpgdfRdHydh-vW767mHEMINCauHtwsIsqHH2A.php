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

/* themes/custom/baseplus/templates/comment.html.twig */
class __TwigTemplate_23bc730809d46f2c83e848b06766e82f extends \Twig\Template
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
        // line 67
        $this->displayBlock('libraries', $context, $blocks);
        // line 70
        if (($context["threaded"] ?? null)) {
            // line 71
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("classy/drupal.comment.threaded"), "html", null, true);
            echo "
";
        }
        // line 74
        $context["classes"] = [0 => "comment", 1 => "js-comment", 2 => (((        // line 77
($context["status"] ?? null) != "published")) ? (("comment--" . $this->sandbox->ensureToStringAllowed(($context["status"] ?? null), 77, $this->source))) : ("")), 3 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 78
($context["comment"] ?? null), "owner", [], "any", false, false, true, 78), "anonymous", [], "any", false, false, true, 78)) ? ("by-anonymous") : ("")), 4 => (((        // line 79
($context["author_id"] ?? null) && (($context["author_id"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["commented_entity"] ?? null), "getOwnerId", [], "method", false, false, true, 79)))) ? ((("by-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["commented_entity"] ?? null), "getEntityTypeId", [], "method", false, false, true, 79), 79, $this->source)) . "-author")) : ("")), 5 => "clearfix", 6 => "mt-style-custom-all"];
        // line 84
        echo "<article role=\"article\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 84), 84, $this->source), "role"), "html", null, true);
        echo ">
  ";
        // line 90
        echo "  <span class=\"hidden new-indicator\" data-comment-timestamp=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["new_indicator_timestamp"] ?? null), 90, $this->source), "html", null, true);
        echo "\"></span>

  <div class=\"comment__content-container\">
    ";
        // line 93
        if (($context["title"] ?? null)) {
            // line 94
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 94, $this->source), "html", null, true);
            echo "
      <h3";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "title"], "method", false, false, true, 95), 95, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 95, $this->source), "html", null, true);
            echo "</h3>
      ";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 96, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 98
        echo "    <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "comment__content"], "method", false, false, true, 98), 98, $this->source), "html", null, true);
        echo ">
      ";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 99, $this->source), "links"), "html", null, true);
        echo "
    </div>
    <div class=\"row\">
      <div class=\"col-auto\">
        ";
        // line 103
        if (($context["user_picture"] ?? null)) {
            // line 104
            echo "          <header>
            ";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 105, $this->source), "html", null, true);
            echo "
          </header>
        ";
        }
        // line 108
        echo "      </div>
      <div class=\"col-sm col-xs-12\">
        <div class=\"comment__meta\">
          <div>";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null), 111, $this->source), "html", null, true);
        echo "</div>
          <div>";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author"] ?? null), 112, $this->source), "html", null, true);
        echo "</div>
          ";
        // line 113
        if (($context["parent"] ?? null)) {
            // line 114
            echo "            <p class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["parent"] ?? null), 114, $this->source), "html", null, true);
            echo "</p>
          ";
        }
        // line 116
        echo "        </div>
      </div>
      <div class=\"col-12\">
        ";
        // line 119
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 119)) {
            // line 120
            echo "          <nav class=\"comment__links\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
            echo "</nav>
        ";
        }
        // line 122
        echo "      </div>
    </div>
  </div>
</article>
";
    }

    // line 67
    public function block_libraries($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/comment"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 68,  150 => 67,  142 => 122,  136 => 120,  134 => 119,  129 => 116,  123 => 114,  121 => 113,  117 => 112,  113 => 111,  108 => 108,  102 => 105,  99 => 104,  97 => 103,  90 => 99,  85 => 98,  80 => 96,  74 => 95,  69 => 94,  67 => 93,  60 => 90,  55 => 84,  53 => 79,  52 => 78,  51 => 77,  50 => 74,  44 => 71,  42 => 70,  40 => 67,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/comment.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 67, "if" => 70, "set" => 74);
        static $filters = array("escape" => 71, "without" => 84);
        static $functions = array("attach_library" => 71);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'set'],
                ['escape', 'without'],
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
