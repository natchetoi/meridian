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

/* themes/custom/baseplus/templates/block--block-type--mt-hero-promo.html.twig */
class __TwigTemplate_fcbd7a0f0a507babcc9f3346ef8ad355 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/hero-promo-block"), "html", null, true);
        echo "
";
        // line 30
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 32
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 32), 32, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 33
($context["plugin_id"] ?? null), 33, $this->source))), 3 => "block-mt-hero-promo"];
        // line 37
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 37), 37, $this->source), "html", null, true);
        echo ">
  ";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 38, $this->source), "html", null, true);
        echo "
  ";
        // line 39
        if (($context["label"] ?? null)) {
            // line 40
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 40, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 40, $this->source), "html", null, true);
            echo "</h2>
  ";
        }
        // line 42
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 42, $this->source), "html", null, true);
        echo "
  ";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 75
        echo "</div>
";
    }

    // line 43
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "    <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slider_enabled"] ?? null)) ? ("row mt-hero-promo-slider-enabled") : ("mt-hero-promo-slider-disabled")));
        echo "\">
      ";
        // line 45
        if (($context["slider_enabled"] ?? null)) {
            // line 46
            echo "        <div class=\"col-lg-8 promoted-items-container\">
          <div class=\"flexslider-main\">
            <ul class=\"list-unstyled mb-0 slides clearfix\">
            ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 50
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "banner_item_promo_value", [], "any", false, false, true, 50)) {
                    // line 51
                    echo "                <li>
                  ";
                    // line 52
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "banner_item", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                    echo "
                </li>
              ";
                }
                // line 55
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "            </ul>
          </div>
        </div>
      ";
        }
        // line 60
        echo "      <div class=\"not-promoted-items-container ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slider_enabled"] ?? null)) ? ("col-lg-4") : ("row")));
        echo "\">
        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 62
            echo "          ";
            if ( !twig_get_attribute($this->env, $this->source, $context["item"], "banner_item_promo_value", [], "any", false, false, true, 62)) {
                // line 63
                echo "            ";
                if ( !($context["slider_enabled"] ?? null)) {
                    // line 64
                    echo "              <div class=\"col-lg-6\">
                ";
                    // line 65
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "banner_item", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                    echo "
              </div>
            ";
                } else {
                    // line 68
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "banner_item", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                    echo "
            ";
                }
                // line 70
                echo "          ";
            }
            // line 71
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "      </div>
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/block--block-type--mt-hero-promo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 72,  156 => 71,  153 => 70,  147 => 68,  141 => 65,  138 => 64,  135 => 63,  132 => 62,  128 => 61,  123 => 60,  117 => 56,  111 => 55,  105 => 52,  102 => 51,  99 => 50,  95 => 49,  90 => 46,  88 => 45,  83 => 44,  79 => 43,  74 => 75,  72 => 43,  67 => 42,  59 => 40,  57 => 39,  53 => 38,  48 => 37,  46 => 33,  45 => 32,  44 => 30,  40 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/block--block-type--mt-hero-promo.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/block--block-type--mt-hero-promo.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 30, "if" => 39, "block" => 43, "for" => 49);
        static $filters = array("escape" => 28, "clean_class" => 32);
        static $functions = array("attach_library" => 28);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'for'],
                ['escape', 'clean_class'],
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
