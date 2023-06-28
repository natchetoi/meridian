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

/* themes/custom/baseplus/templates/block--system-branding-block.html.twig */
class __TwigTemplate_4f6659fac37c5ebc8744e63736974e77 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "site-branding"], "method", false, false, true, 16);
        // line 17
        if (($context["site_logo"] ?? null)) {
            // line 18
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "logo-enabled"], "method", false, false, true, 18);
        }
        // line 20
        if (($context["site_name"] ?? null)) {
            // line 21
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "site-name-enabled"], "method", false, false, true, 21);
        }
        // line 23
        if (($context["site_slogan"] ?? null)) {
            // line 24
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "site-slogan-enabled"], "method", false, false, true, 24);
        }
        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/custom/baseplus/templates/block--system-branding-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "  <div class=\"logo-and-site-name-wrapper clearfix\">
    ";
        // line 28
        if (($context["site_logo"] ?? null)) {
            // line 29
            echo "      <div class=\"logo\">
        <a href=\"";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" rel=\"home\" class=\"site-branding__logo\">
          <img src=\"";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 31, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" />
        </a>
      </div>
    ";
        }
        // line 35
        echo "    ";
        if (($context["site_name"] ?? null)) {
            // line 36
            echo "      <div class=\"site-name site-branding__name\">
        <a href=\"";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" rel=\"home\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 37, $this->source), "html", null, true);
            echo "</a>
      </div>
    ";
        }
        // line 40
        echo "    ";
        if (($context["site_slogan"] ?? null)) {
            // line 41
            echo "      <div class=\"site-slogan site-branding__slogan\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 41, $this->source), "html", null, true);
            echo "</div>
    ";
        }
        // line 43
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 43,  112 => 41,  109 => 40,  99 => 37,  96 => 36,  93 => 35,  84 => 31,  78 => 30,  75 => 29,  73 => 28,  70 => 27,  66 => 26,  61 => 1,  58 => 24,  56 => 23,  53 => 21,  51 => 20,  48 => 18,  46 => 17,  44 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/block--system-branding-block.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 17);
        static $filters = array("t" => 30, "escape" => 31);
        static $functions = array("path" => 30);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['t', 'escape'],
                ['path']
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
