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

/* @baseplus/partials/_mt-teaser-compact.html.twig */
class __TwigTemplate_bb73514171ca311b7a6f136b67b43c0e extends \Twig\Template
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
  ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 8, $this->source), "html", null, true);
        echo "
  ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 9, $this->source), "html", null, true);
        echo "
  <div class=\"d-flex\">
    ";
        // line 11
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["image"] ?? null)) || ($context["highlight_image_styled_url"] ?? null))) {
            // line 12
            echo "      <div class=\"teaser-compact-image\">
        ";
            // line 13
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["image"] ?? null))) {
                // line 14
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 14, $this->source), "html", null, true);
                echo "
        ";
            } elseif (            // line 15
($context["highlight_image_styled_url"] ?? null)) {
                // line 16
                echo "          <div class=\"field field--name-field-mt-prd-image field--type-image\">
            <div class=\"images-container clearfix\">
              <div class=\"image-preview clearfix\">
                <div class=\"field__item\">
                  <div class=\"overlay-container\">
                    <div class=\"overlay overlay--colored\">
                      <a class=\"overlay-target-link image-popup\" href=\"";
                // line 22
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 22, $this->source), "html", null, true);
                echo "\"></a>
                    </div>
                    <img src=\"";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlight_image_styled_url"] ?? null), 24, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlight_image_alt"] ?? null), 24, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlight_image_title"] ?? null), 24, $this->source), "html", null, true);
                echo "\">
                  </div>
                </div>
              </div>
            </div>
          </div>
        ";
            }
            // line 31
            echo "      </div>
    ";
        }
        // line 33
        echo "    <div class=\"media-body\">
      ";
        // line 34
        if ( !($context["page"] ?? null)) {
            // line 35
            echo "        <h5";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "mt-0 node__title"], "method", false, false, true, 35), 35, $this->source), "html", null, true);
            echo ">
          <a href=\"";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 36, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 36, $this->source), "html", null, true);
            echo "</a>
        </h5>
      ";
        }
        // line 39
        echo "
      ";
        // line 40
        if (($context["created_date"] ?? null)) {
            // line 41
            echo "        <div class=\"created-date\">
          ";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created_date"] ?? null), 42, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 45
        echo "      
      ";
        // line 46
        if (($context["rendered_content"] ?? null)) {
            // line 47
            echo "        <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content"], "method", false, false, true, 47), 47, $this->source), "html", null, true);
            echo ">
          ";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rendered_content"] ?? null), 48, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 50
        echo "      

      ";
        // line 52
        if (($context["read_more"] ?? null)) {
            // line 53
            echo "        ";
            echo t("<a class=\"mt-link-stylable d-none d-lg-inline-block mb-0\" href=\"@url\">Read more</a>", array("@url" =>             // line 54
($context["url"] ?? null), ));
            // line 56
            echo "      ";
        }
        // line 57
        echo "
    </div>
  </div>

</article>
";
    }

    public function getTemplateName()
    {
        return "@baseplus/partials/_mt-teaser-compact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 57,  156 => 56,  154 => 54,  152 => 53,  150 => 52,  146 => 50,  140 => 48,  135 => 47,  133 => 46,  130 => 45,  124 => 42,  121 => 41,  119 => 40,  116 => 39,  108 => 36,  103 => 35,  101 => 34,  98 => 33,  94 => 31,  80 => 24,  75 => 22,  67 => 16,  65 => 15,  60 => 14,  58 => 13,  55 => 12,  53 => 11,  48 => 9,  44 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@baseplus/partials/_mt-teaser-compact.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/partials/_mt-teaser-compact.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11, "trans" => 53);
        static $filters = array("escape" => 7, "render" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
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
