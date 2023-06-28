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

/* themes/custom/baseplus/templates/field--node--field-mt-shw-banner-image.html.twig */
class __TwigTemplate_86e22f46ddfec06e74dc9658e0ab1600 extends \Twig\Template
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
        // line 41
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 43
($context["field_name"] ?? null), 43, $this->source))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 44
($context["field_type"] ?? null), 44, $this->source))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 45
($context["label_display"] ?? null), 45, $this->source))];
        // line 49
        $context["title_classes"] = [0 => "field__label", 1 => (((        // line 51
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/slider-revolution-internal-banner-init"), "html", null, true);
        echo "
";
        // line 55
        if (($context["label_hidden"] ?? null)) {
            // line 56
            echo "  <div class=\"slidehow-internal-container\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12\">
          <div id=\"slideshow-internal\" class=\"slideshow-internal rev_slider_wrapper ";
            // line 60
            if ((twig_length_filter($this->env, ($context["items"] ?? null)) <= 1)) {
                echo "one-slide";
            }
            echo "\">
            <div class=\"rev_slider\" data-version=\"5.4.5\">
              <ul>
                ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 64
                echo "                  <li data-transition=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "rs_slideshow_internal_effect", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                echo "\" data-slotamount=\"default\" data-masterspeed=\"default\" data-title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 64)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#item"] ?? null) : null), "title", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                echo "\">

                    ";
                // line 66
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                echo "

                    ";
                // line 69
                echo "                    <div class=\"tp-caption transparent-background\"
                      data-x=\"left\"
                      data-y=\"top\"
                      data-start=\"0\"
                      data-basealign=\"slide\"
                      data-width=\"full\"
                      data-height=\"full\">
                    </div>

                  </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "              </ul>
              <div class=\"tp-bannertimer tp-bottom\"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
";
        } else {
            // line 89
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 89), 89, $this->source), "html", null, true);
            echo ">
    <div";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 90), 90, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 90, $this->source), "html", null, true);
            echo "</div>
    <div class=\"slidehow-internal-container\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            <div id=\"slideshow-internal\" class=\"slideshow-internal rev_slider_wrapper ";
            // line 95
            if ((twig_length_filter($this->env, ($context["items"] ?? null)) <= 1)) {
                echo "one-slide";
            }
            echo "\">
              <div class=\"rev_slider\" data-version=\"5.4.5\">
                <ul>
                  ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 99
                echo "                    <li data-transition=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "rs_slideshow_internal_effect", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
                echo "\" data-slotamount=\"default\" data-masterspeed=\"default\" data-title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 99)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#item"] ?? null) : null), "title", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
                echo "\">

                      ";
                // line 101
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
                echo "

                      ";
                // line 104
                echo "                      <div class=\"tp-caption transparent-background\"
                        data-x=\"left\"
                        data-y=\"top\"
                        data-start=\"0\"
                        data-basealign=\"slide\"
                        data-width=\"full\"
                        data-height=\"full\">
                      </div>

                    </li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "                </ul>
                <div class=\"tp-bannertimer tp-bottom\"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/field--node--field-mt-shw-banner-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 115,  151 => 104,  146 => 101,  138 => 99,  134 => 98,  126 => 95,  116 => 90,  111 => 89,  100 => 80,  84 => 69,  79 => 66,  71 => 64,  67 => 63,  59 => 60,  53 => 56,  51 => 55,  47 => 54,  45 => 51,  44 => 49,  42 => 45,  41 => 44,  40 => 43,  39 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/field--node--field-mt-shw-banner-image.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/field--node--field-mt-shw-banner-image.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 41, "if" => 55, "for" => 63);
        static $filters = array("clean_class" => 43, "escape" => 54, "length" => 60);
        static $functions = array("attach_library" => 54);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape', 'length'],
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
