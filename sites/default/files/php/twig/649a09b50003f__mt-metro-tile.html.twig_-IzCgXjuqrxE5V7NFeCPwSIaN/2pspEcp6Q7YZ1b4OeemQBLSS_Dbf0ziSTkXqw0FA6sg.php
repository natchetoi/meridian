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

/* @baseplus/partials/_mt-metro-tile.html.twig */
class __TwigTemplate_880646e5435b76ff8cd300aeb9fc89c6 extends \Twig\Template
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
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 7), 7, $this->source), "html", null, true);
        echo ">
  <div class=\"metro-tile-container\">
    ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 9, $this->source), "html", null, true);
        echo "
    ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 10, $this->source), "html", null, true);
        echo "

    ";
        // line 12
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["styled_image"] ?? null))) {
            // line 13
            echo "      <div class=\"image-wrapper\">
        ";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["styled_image"] ?? null), 14, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 17
        echo "
    <div class=\"metro-tile__caption ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption_items"] ?? null), 18, $this->source), "html", null, true);
        echo "\">
      ";
        // line 19
        if ( !($context["page"] ?? null)) {
            // line 20
            echo "        <h4";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "mt-0 mb-2 node__title"], "method", false, false, true, 20), 20, $this->source), "html", null, true);
            echo ">
          <a href=\"";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 21, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 21, $this->source), "html", null, true);
            echo "</a>
        </h4>
      ";
        }
        // line 24
        echo "
      ";
        // line 25
        if (($context["display_submitted"] ?? null)) {
            // line 26
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 26, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 28
        echo "
      ";
        // line 29
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["caption_text_first"] ?? null))) {
            // line 30
            echo "        <div class=\"caption-text-first\">
          ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption_text_first"] ?? null), 31, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 34
        echo "
      ";
        // line 35
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["caption_text_second"] ?? null))) {
            // line 36
            echo "        <div class=\"caption-text-second\">
          ";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption_text_second"] ?? null), 37, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 40
        echo "    </div>
  </div>
  <div";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content"], "method", false, false, true, 42), 42, $this->source), "html", null, true);
        echo ">
    ";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rendered_content"] ?? null), 43, $this->source), "html", null, true);
        echo "
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "@baseplus/partials/_mt-metro-tile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 43,  130 => 42,  126 => 40,  120 => 37,  117 => 36,  115 => 35,  112 => 34,  106 => 31,  103 => 30,  101 => 29,  98 => 28,  92 => 26,  90 => 25,  87 => 24,  79 => 21,  74 => 20,  72 => 19,  68 => 18,  65 => 17,  59 => 14,  56 => 13,  54 => 12,  49 => 10,  45 => 9,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@baseplus/partials/_mt-metro-tile.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/partials/_mt-metro-tile.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12);
        static $filters = array("escape" => 7, "render" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'render'],
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
