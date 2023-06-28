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

/* themes/custom/baseplus/templates/flippy--mt_post.html.twig */
class __TwigTemplate_5212ed052f6ad0a6eb28f5b171d88df3 extends \Twig\Template
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
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/flippy"), "html", null, true);
        echo "
<div class=\"flippy\">
  <h3 class=\"flippy__title\">";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Read more articles"));
        echo "</h3>
  <div class=\"row\">
    ";
        // line 5
        if (($context["first"] ?? null)) {
            // line 6
            echo "      <div class=\"col\">
        <div class=\"flippy-first text-center position-relative\">
          <div class=\"flippy-label\"><small>";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Newest"));
            echo "</small></div>
          <div class=\"flippy-link\">";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["first"] ?? null), 9, $this->source), "html", null, true);
            echo "</div>
        </div>
      </div>
    ";
        }
        // line 13
        echo "    ";
        if (($context["prev"] ?? null)) {
            // line 14
            echo "      <div class=\"col d-flex justify-content-start\">
        <div class=\"flippy-previous text-center position-relative ps-4 ps-sm-5\">
          <div class=\"flippy-icon-wrapper\">
            <i class=\"fas fa-chevron-left fa-3x\"></i>
            <div class=\"flippy-icon-target\">";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prev"] ?? null), 18, $this->source), "html", null, true);
            echo "</div>
          </div>
          <div class=\"flippy-label\"><small>";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Newer"));
            echo "</small></div>
          <div class=\"flippy-link\">";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prev"] ?? null), 21, $this->source), "html", null, true);
            echo "</div>
        </div>
      </div>
    ";
        }
        // line 25
        echo "    ";
        if (($context["random"] ?? null)) {
            // line 26
            echo "      <div class=\"col\">
        <div class=\"flippy-random text-center position-relative\">
          <div class=\"flippy-label\"><small>";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Random"));
            echo "</small></div>
          <div class=\"flippy-link\">";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["random"] ?? null), 29, $this->source), "html", null, true);
            echo "</div>
        </div>
      </div>
    ";
        }
        // line 33
        echo "    ";
        if (($context["next"] ?? null)) {
            // line 34
            echo "      <div class=\"col d-flex justify-content-end\">
        <div class=\"flippy-next text-center position-relative pe-4 pe-sm-5\">
          <div class=\"flippy-icon-wrapper\">
            <i class=\"fas fa-chevron-right fa-3x\"></i>
            <div class=\"flippy-icon-target\">";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["next"] ?? null), 38, $this->source), "html", null, true);
            echo "</div>
          </div>
          <div class=\"flippy-label\"><small>";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Older"));
            echo "</small></div>
          <div class=\"flippy-link\">";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["next"] ?? null), 41, $this->source), "html", null, true);
            echo "</div>
        </div>
      </div>
    ";
        }
        // line 45
        echo "    ";
        if (($context["last"] ?? null)) {
            // line 46
            echo "      <div class=\"col\">
        <div class=\"flippy-last text-center position-relative\">
          <div class=\"flippy-label\"><small>";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Oldest"));
            echo "</small></div>
          <div class=\"flippy-link\">";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["last"] ?? null), 49, $this->source), "html", null, true);
            echo "</div>
        </div>
      </div>
    ";
        }
        // line 53
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/flippy--mt_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 53,  145 => 49,  141 => 48,  137 => 46,  134 => 45,  127 => 41,  123 => 40,  118 => 38,  112 => 34,  109 => 33,  102 => 29,  98 => 28,  94 => 26,  91 => 25,  84 => 21,  80 => 20,  75 => 18,  69 => 14,  66 => 13,  59 => 9,  55 => 8,  51 => 6,  49 => 5,  44 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/flippy--mt_post.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/flippy--mt_post.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5);
        static $filters = array("escape" => 1, "t" => 3);
        static $functions = array("attach_library" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
