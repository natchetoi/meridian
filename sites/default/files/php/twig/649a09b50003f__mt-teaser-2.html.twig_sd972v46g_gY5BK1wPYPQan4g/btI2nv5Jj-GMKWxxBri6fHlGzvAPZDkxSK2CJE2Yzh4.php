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

/* @baseplus/partials/_mt-teaser-2.html.twig */
class __TwigTemplate_a1ea9597ca2144ec02c1aa2d633b3a5e extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 7), "addClass", [0 => "node--view-mode-teaser-2"], "method", false, false, true, 7), 7, $this->source), "html", null, true);
        echo ">
  ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 8, $this->source), "html", null, true);
        echo "
  ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 9, $this->source), "html", null, true);
        echo "

  ";
        // line 11
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["image"] ?? null)) || ($context["display_submitted"] ?? null))) {
            // line 12
            echo "    <div class=\"teaser-image\">
      ";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 13, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 16
        echo "
  ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "isSticky", [], "method", false, false, true, 17) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_pre_content"] ?? null)))) {
            // line 18
            echo "    <div class=\"mb-3 teaser-pre-content d-flex align-items-center\">
      ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "isSticky", [], "method", false, false, true, 19)) {
                // line 20
                echo "        ";
                echo t("<div class=\"promoted-label mt-style-custom-all\">Promoted</div>", array());
                // line 23
                echo "      ";
            }
            // line 24
            echo "
      ";
            // line 25
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_pre_content"] ?? null))) {
                // line 26
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["teaser_pre_content"] ?? null), 26, $this->source), "html", null, true);
                echo "
      ";
            }
            // line 28
            echo "    </div>
  ";
        }
        // line 30
        echo "
  ";
        // line 31
        if ( !($context["page"] ?? null)) {
            // line 32
            echo "    <h4";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "mt-0 node__title"], "method", false, false, true, 32), 32, $this->source), "html", null, true);
            echo ">
      <a href=\"";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 33, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 33, $this->source), "html", null, true);
            echo "</a>
    </h4>
  ";
        }
        // line 36
        echo "
  ";
        // line 37
        if ((($context["display_submitted"] ?? null) || (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "comment", [], "any", false, false, true, 37) && (($context["comment_count"] ?? null) > 0)))) {
            // line 38
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 38, $this->source), "html", null, true);
            echo "
    <div class=\"node__meta\">
      ";
            // line 40
            if (($context["display_submitted"] ?? null)) {
                // line 41
                echo "        <span class=\"node__meta-item\">
          ";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 42, $this->source), "html", null, true);
                echo "
        </span>
        <span";
                // line 44
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [0 => "node__meta-user node__meta-item"], "method", false, false, true, 44), 44, $this->source), "html", null, true);
                echo ">
          ";
                // line 45
                echo t("By @author_name", array("@author_name" => ($context["author_name"] ?? null), ));
                // line 46
                echo "        </span>
      ";
            }
            // line 48
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "comment", [], "any", false, false, true, 48) && (($context["comment_count"] ?? null) > 0))) {
                // line 49
                echo "        <div class=\"node__meta-item node__meta-comments\">
          ";
                // line 50
                echo \Drupal::translation()->formatPlural(abs(                // line 52
($context["comment_count"] ?? null)), "1 comment", "@comment_count comments", array("@comment_count" =>                 // line 53
($context["comment_count"] ?? null), ));
                // line 55
                echo "        </div>
      ";
            }
            // line 57
            echo "    </div>
  ";
        }
        // line 59
        echo "
  <div";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content"], "method", false, false, true, 60), 60, $this->source), "html", null, true);
        echo ">
    ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rendered_content"] ?? null), 61, $this->source), "html", null, true);
        echo "
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "@baseplus/partials/_mt-teaser-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 61,  165 => 60,  162 => 59,  158 => 57,  154 => 55,  152 => 53,  151 => 52,  150 => 50,  147 => 49,  144 => 48,  140 => 46,  138 => 45,  134 => 44,  129 => 42,  126 => 41,  124 => 40,  118 => 38,  116 => 37,  113 => 36,  105 => 33,  100 => 32,  98 => 31,  95 => 30,  91 => 28,  85 => 26,  83 => 25,  80 => 24,  77 => 23,  74 => 20,  72 => 19,  69 => 18,  67 => 17,  64 => 16,  58 => 13,  55 => 12,  53 => 11,  48 => 9,  44 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@baseplus/partials/_mt-teaser-2.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/partials/_mt-teaser-2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11, "trans" => 20);
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
