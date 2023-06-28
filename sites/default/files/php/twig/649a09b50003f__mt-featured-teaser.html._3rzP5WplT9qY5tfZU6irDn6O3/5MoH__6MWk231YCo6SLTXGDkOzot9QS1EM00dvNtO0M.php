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

/* @baseplus/partials/_mt-featured-teaser.html.twig */
class __TwigTemplate_106d1959e761e08780ef130ef71a878b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
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

  <div class=\"row\">
    <div class=\"col-lg-8\">
      ";
        // line 13
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["image"] ?? null)) || (($context["display_submitted"] ?? null) && ($context["date_overlay"] ?? null)))) {
            // line 14
            echo "        <div class=\"featured-teaser-image\">
          ";
            // line 15
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["image"] ?? null))) {
                // line 16
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 16, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 18
            echo "          ";
            if ((($context["display_submitted"] ?? null) && ($context["date_overlay"] ?? null))) {
                // line 19
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 19, $this->source), "html", null, true);
                echo "
            <div class=\"node__submitted-date mt-style-custom-tl region--default-background\">
              <div class=\"day\">";
                // line 21
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted_day"] ?? null), 21, $this->source), "html", null, true);
                echo "</div>
              <div class=\"month-year\">
                ";
                // line 23
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted_month"] ?? null), 23, $this->source), "html", null, true);
                echo "
                ";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted_year"] ?? null), 24, $this->source), "html", null, true);
                echo "
              </div>
            </div>
          ";
            }
            // line 28
            echo "        </div>
      ";
        }
        // line 30
        echo "    </div>
    ";
        // line 31
        $this->displayBlock('header', $context, $blocks);
        // line 87
        echo "  </div>
</article>
";
    }

    // line 31
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "      <div class=\"col-lg-4\">
        ";
        // line 33
        if ((($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["pre_content_first"] ?? null)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["pre_content_second"] ?? null))) || ($context["featured_label"] ?? null))) {
            // line 34
            echo "          <div class=\"featured-teaser-header__top d-flex justify-content-start\">
            ";
            // line 35
            if (($context["featured_label"] ?? null)) {
                // line 36
                echo "              ";
                echo t("<div class=\"promoted-label mt-style-custom-all\">Promoted</div>", array());
                // line 39
                echo "            ";
            }
            // line 40
            echo "
            ";
            // line 41
            if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["pre_content_first"] ?? null)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["pre_content_second"] ?? null)))) {
                // line 42
                echo "              <div class=\"node__meta d-flex align-items-center\">
                ";
                // line 43
                if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["pre_content_first"] ?? null))) {
                    // line 44
                    echo "                  <div class=\"node__meta-item\">
                    ";
                    // line 45
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_content_first"] ?? null), 45, $this->source), "html", null, true);
                    echo "
                  </div>
                ";
                }
                // line 48
                echo "                ";
                if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["pre_content_second"] ?? null))) {
                    // line 49
                    echo "                  <div class=\"node__meta-item\">
                    ";
                    // line 50
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_content_second"] ?? null), 50, $this->source), "html", null, true);
                    echo "
                  </div>
                ";
                }
                // line 53
                echo "              </div>
            ";
            }
            // line 55
            echo "          </div>
        ";
        }
        // line 57
        echo "
        ";
        // line 58
        if ( !($context["page"] ?? null)) {
            // line 59
            echo "          <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "mt-0 node__title"], "method", false, false, true, 59), 59, $this->source), "html", null, true);
            echo ">
            <a href=\"";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 60, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 60, $this->source), "html", null, true);
            echo "</a>
          </h2>
        ";
        }
        // line 63
        echo "
        <div";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content"], "method", false, false, true, 64), 64, $this->source), "html", null, true);
        echo ">
          ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rendered_content"] ?? null), 65, $this->source), "html", null, true);
        echo "
        </div>

        ";
        // line 68
        if ((($context["display_submitted"] ?? null) && ($context["author_info"] ?? null))) {
            // line 69
            echo "          <div class=\"node__meta\">
            ";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 70, $this->source), "html", null, true);
            echo "
            <span";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [0 => "node__submitted"], "method", false, false, true, 71), 71, $this->source), "html", null, true);
            echo ">
              ";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 72, $this->source), "html", null, true);
            echo "
              ";
            // line 73
            if ((($context["display_submitted"] ?? null) &&  !($context["date_overlay"] ?? null))) {
                // line 74
                echo "                ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 74, $this->source), "html", null, true);
                echo "
              ";
            }
            // line 76
            echo "            </span>
          </div>
        ";
        }
        // line 79
        echo "
        ";
        // line 80
        if (($context["read_more"] ?? null)) {
            // line 81
            echo "          ";
            echo t("<a class=\"mt-link-stylable\" href=\"@url\">Read more</a>", array("@url" =>             // line 82
($context["url"] ?? null), ));
            // line 84
            echo "        ";
        }
        // line 85
        echo "      </div>
    ";
    }

    public function getTemplateName()
    {
        return "@baseplus/partials/_mt-featured-teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 85,  238 => 84,  236 => 82,  234 => 81,  232 => 80,  229 => 79,  224 => 76,  218 => 74,  216 => 73,  212 => 72,  208 => 71,  204 => 70,  201 => 69,  199 => 68,  193 => 65,  189 => 64,  186 => 63,  178 => 60,  173 => 59,  171 => 58,  168 => 57,  164 => 55,  160 => 53,  154 => 50,  151 => 49,  148 => 48,  142 => 45,  139 => 44,  137 => 43,  134 => 42,  132 => 41,  129 => 40,  126 => 39,  123 => 36,  121 => 35,  118 => 34,  116 => 33,  113 => 32,  109 => 31,  103 => 87,  101 => 31,  98 => 30,  94 => 28,  87 => 24,  83 => 23,  78 => 21,  72 => 19,  69 => 18,  63 => 16,  61 => 15,  58 => 14,  56 => 13,  49 => 9,  45 => 8,  40 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@baseplus/partials/_mt-featured-teaser.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/partials/_mt-featured-teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13, "block" => 31, "trans" => 36);
        static $filters = array("escape" => 7, "render" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'trans'],
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
