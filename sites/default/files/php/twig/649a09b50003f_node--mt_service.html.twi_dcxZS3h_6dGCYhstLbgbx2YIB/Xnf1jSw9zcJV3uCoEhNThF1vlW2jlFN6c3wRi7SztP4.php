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

/* themes/custom/baseplus/templates/node--mt_service.html.twig */
class __TwigTemplate_d709bc77ce122410e2dffb05bc8144d8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'libraries' => [$this, 'block_libraries'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node.html.twig", "themes/custom/baseplus/templates/node--mt_service.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_libraries($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/node-service"), "html", null, true);
        echo "
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "  ";
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_srv_image", [], "any", false, false, true, 13))) {
            // line 14
            echo "    ";
            $context["service_content_second_class"] = "col-lg-6";
            // line 15
            echo "  ";
        } else {
            // line 16
            echo "    ";
            $context["service_content_second_class"] = "col-12";
            // line 17
            echo "  ";
        }
        // line 18
        echo "  ";
        if ((($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_srv_image", [], "any", false, false, true, 18)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_srv_subheader_body", [], "any", false, false, true, 18))) ||  !$this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_srv_highlight", [], "any", false, false, true, 18)))) {
            // line 19
            echo "    <div class=\"service-content ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_srv_image", [], "any", false, false, true, 19), 19, $this->source))) ? (" service-content--image-enabled") : ("")));
            echo "\">
      <div class=\"row\">
        ";
            // line 21
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_srv_image", [], "any", false, false, true, 21))) {
                // line 22
                echo "          <div class=\"ms-lg-auto col-lg-6 order-lg-2 ps-lg-5\">
            <div class=\"service-content-first d-flex flex-column\">
              ";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_srv_image", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "
            </div>
          </div>
        ";
            }
            // line 28
            echo "        ";
            if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_srv_subheader_body", [], "any", false, false, true, 28)) ||  !$this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_srv_highlight", [], "any", false, false, true, 28)))) {
                // line 29
                echo "          <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["service_content_second_class"] ?? null), 29, $this->source), "html", null, true);
                echo "\">
            <div class=\"service-content-second\">
              ";
                // line 31
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_srv_subheader_body", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo "
              ";
                // line 32
                if ( !$this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_srv_highlight", [], "any", false, false, true, 32))) {
                    // line 33
                    echo "                ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 33, $this->source), "field_mt_srv_banner_image", "field_mt_srv_image", "field_mt_srv_subheader_body", "field_mt_srv_link", "field_mt_srv_highlight"), "html", null, true);
                    echo "
              ";
                }
                // line 35
                echo "            </div>
          </div>
        ";
            }
            // line 38
            echo "      </div>
    </div>
  ";
        }
        // line 41
        echo "  ";
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_srv_highlight", [], "any", false, false, true, 41))) {
            // line 42
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_srv_highlight", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "
    <div class=\"row\">
      <div class=\"";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["service_content_second_class"] ?? null), 44, $this->source), "html", null, true);
            echo "\">
        <div class=\"service-content-second\">
          ";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 46, $this->source), "field_mt_srv_banner_image", "field_mt_srv_image", "field_mt_srv_subheader_body", "field_mt_srv_link", "field_mt_srv_highlight"), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/node--mt_service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 46,  140 => 44,  134 => 42,  131 => 41,  126 => 38,  121 => 35,  115 => 33,  113 => 32,  109 => 31,  103 => 29,  100 => 28,  93 => 24,  89 => 22,  87 => 21,  81 => 19,  78 => 18,  75 => 17,  72 => 16,  69 => 15,  66 => 14,  63 => 13,  59 => 12,  53 => 10,  49 => 9,  38 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/node--mt_service.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/node--mt_service.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13, "set" => 14);
        static $filters = array("escape" => 10, "render" => 13, "without" => 33);
        static $functions = array("attach_library" => 10);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'render', 'without'],
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
