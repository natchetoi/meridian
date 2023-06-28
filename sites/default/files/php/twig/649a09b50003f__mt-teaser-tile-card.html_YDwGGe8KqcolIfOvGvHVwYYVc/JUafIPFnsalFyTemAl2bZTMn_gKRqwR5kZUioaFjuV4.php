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

/* @baseplus/partials/_mt-teaser-tile-card.html.twig */
class __TwigTemplate_ab9b2f40a666c113017664fb7f763f6d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'image_container' => [$this, 'block_image_container'],
            'image' => [$this, 'block_image'],
            'teaser_tile_card' => [$this, 'block_teaser_tile_card'],
            'tile_title' => [$this, 'block_tile_title'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        if ((($context["teaser_mobile_layout"] ?? null) == "2-col")) {
            // line 8
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 8, $this->source), [0 => "mt-mobile-layout-2-col"]);
        } else {
            // line 10
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 10, $this->source), [0 => "mt-mobile-layout-1-col"]);
        }
        // line 12
        echo "
<article";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 13), "addClass", [0 => "region--default-background mt-style-custom-all"], "method", false, false, true, 13), 13, $this->source), "html", null, true);
        echo ">
  ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 14, $this->source), "html", null, true);
        echo "
  ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 15, $this->source), "html", null, true);
        echo "

  ";
        // line 17
        $this->displayBlock('image_container', $context, $blocks);
        // line 45
        echo "
  ";
        // line 46
        $this->displayBlock('teaser_tile_card', $context, $blocks);
        // line 116
        echo "</article>
";
    }

    // line 17
    public function block_image_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    ";
        if ((($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["image"] ?? null)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["image_caption"] ?? null))) || (($context["display_submitted"] ?? null) && ($context["date_overlay"] ?? null)))) {
            // line 19
            echo "      <div class=\"teaser-tile-image-container\">
        ";
            // line 20
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["image"] ?? null))) {
                // line 21
                echo "          ";
                $this->displayBlock('image', $context, $blocks);
                // line 26
                echo "        ";
            }
            // line 27
            echo "        ";
            if ((($context["display_submitted"] ?? null) && ($context["date_overlay"] ?? null))) {
                // line 28
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 28, $this->source), "html", null, true);
                echo "
          <div class=\"node__submitted-date mt-style-custom-tl region--default-background\">
            <div class=\"day\">";
                // line 30
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted_day"] ?? null), 30, $this->source), "html", null, true);
                echo "</div>
            <div class=\"month-year\">
              ";
                // line 32
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted_month"] ?? null), 32, $this->source), "html", null, true);
                echo "
              ";
                // line 33
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted_year"] ?? null), 33, $this->source), "html", null, true);
                echo "
            </div>
          </div>
        ";
            }
            // line 37
            echo "        ";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["image_caption"] ?? null))) {
                // line 38
                echo "          <div class=\"image-caption\">
            ";
                // line 39
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image_caption"] ?? null), 39, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 42
            echo "      </div>
    ";
        }
        // line 44
        echo "  ";
    }

    // line 21
    public function block_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "            <div class=\"teaser-tile-image teaser-tile-image--card\">
              ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 23, $this->source), "html", null, true);
        echo "
            </div>
          ";
    }

    // line 46
    public function block_teaser_tile_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "    ";
        if ((($context["teaser_tile_style"] ?? null) == "card-news")) {
            // line 48
            echo "      <div class=\"mt-tile-padding mt-teaser-tile-card\">
        <div class=\"align-items-center mt-tile-margin\">
    ";
        } else {
            // line 51
            echo "      <div class=\"p-4 mt-teaser-tile-card\">
        <div class=\"row align-items-center mb-2\">
    ";
        }
        // line 54
        echo "        ";
        if ( !($context["page"] ?? null)) {
            // line 55
            echo "          ";
            $this->displayBlock('tile_title', $context, $blocks);
            // line 66
            echo "        ";
        }
        // line 67
        echo "        ";
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_subtitle"] ?? null))) {
            // line 68
            echo "          <div class=\"teaser-tile-subtitle col-auto\">
            ";
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["teaser_tile_subtitle"] ?? null), 69, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 72
        echo "      </div>
     
      ";
        // line 74
        if ((($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_pre_content_first"] ?? null)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_pre_content_second"] ?? null))) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_content"] ?? null)))) {
            // line 75
            echo "        <div class=\"row teaser-tile-content-wrapper align-items-center\">
          ";
            // line 76
            if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_pre_content_first"] ?? null)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_pre_content_second"] ?? null)))) {
                // line 77
                echo "            <div class=\"teaser-tile-pre-content col-auto\">
              ";
                // line 78
                if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_pre_content_first"] ?? null))) {
                    // line 79
                    echo "                <div class=\"teaser-tile-pre-content-item\">
                  ";
                    // line 80
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["teaser_tile_pre_content_first"] ?? null), 80, $this->source), "html", null, true);
                    echo "
                </div>
              ";
                }
                // line 83
                echo "              ";
                if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_pre_content_second"] ?? null))) {
                    // line 84
                    echo "                <div class=\"teaser-tile-pre-content-item\">
                  ";
                    // line 85
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["teaser_tile_pre_content_second"] ?? null), 85, $this->source), "html", null, true);
                    echo "
                </div>
              ";
                }
                // line 88
                echo "            </div>
          ";
            }
            // line 90
            echo "
          ";
            // line 91
            if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_content"] ?? null)) && ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_pre_content_first"] ?? null)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_pre_content_second"] ?? null))))) {
                // line 92
                echo "            <div class=\"teaser-tile-content-separator col-auto px-0\"><i class=\"fas fa-square\"></i></div>
          ";
            }
            // line 94
            echo "
          ";
            // line 95
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["teaser_tile_content"] ?? null))) {
                // line 96
                echo "            <div class=\"teaser-tile-content  col-auto\">
              ";
                // line 97
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["teaser_tile_content"] ?? null), 97, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 100
            echo "        </div>
      ";
        }
        // line 102
        echo "
      ";
        // line 103
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["rendered_content"] ?? null))) {
            // line 104
            echo "        <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content"], "method", false, false, true, 104), 104, $this->source), "html", null, true);
            echo ">
          ";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rendered_content"] ?? null), 105, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 108
        echo "
      ";
        // line 109
        if (($context["read_more"] ?? null)) {
            // line 110
            echo "        ";
            echo t("<a class=\"mt-link-stylable mb-0\" href=\"@url\">Read more</a>", array("@url" =>             // line 111
($context["url"] ?? null), ));
            // line 113
            echo "      ";
        }
        // line 114
        echo "    </div>
  ";
    }

    // line 55
    public function block_tile_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "            ";
        if ((($context["teaser_tile_style"] ?? null) == "card-news")) {
            // line 57
            echo "              <h4";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "mt-0 mb-0 node__title"], "method", false, false, true, 57), 57, $this->source), "html", null, true);
            echo ">
                <a href=\"";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 58, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 58, $this->source), "html", null, true);
            echo "</a>
              </h4>
            ";
        } else {
            // line 61
            echo "              <h4";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "mt-0 mb-0 node__title col"], "method", false, false, true, 61), 61, $this->source), "html", null, true);
            echo ">
                <a href=\"";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 62, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 62, $this->source), "html", null, true);
            echo "</a>
              </h4>
            ";
        }
        // line 65
        echo "          ";
    }

    public function getTemplateName()
    {
        return "@baseplus/partials/_mt-teaser-tile-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 65,  320 => 62,  315 => 61,  307 => 58,  302 => 57,  299 => 56,  295 => 55,  290 => 114,  287 => 113,  285 => 111,  283 => 110,  281 => 109,  278 => 108,  272 => 105,  267 => 104,  265 => 103,  262 => 102,  258 => 100,  252 => 97,  249 => 96,  247 => 95,  244 => 94,  240 => 92,  238 => 91,  235 => 90,  231 => 88,  225 => 85,  222 => 84,  219 => 83,  213 => 80,  210 => 79,  208 => 78,  205 => 77,  203 => 76,  200 => 75,  198 => 74,  194 => 72,  188 => 69,  185 => 68,  182 => 67,  179 => 66,  176 => 55,  173 => 54,  168 => 51,  163 => 48,  160 => 47,  156 => 46,  149 => 23,  146 => 22,  142 => 21,  138 => 44,  134 => 42,  128 => 39,  125 => 38,  122 => 37,  115 => 33,  111 => 32,  106 => 30,  100 => 28,  97 => 27,  94 => 26,  91 => 21,  89 => 20,  86 => 19,  83 => 18,  79 => 17,  74 => 116,  72 => 46,  69 => 45,  67 => 17,  62 => 15,  58 => 14,  54 => 13,  51 => 12,  48 => 10,  45 => 8,  43 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@baseplus/partials/_mt-teaser-tile-card.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/partials/_mt-teaser-tile-card.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7, "set" => 8, "block" => 17, "trans" => 110);
        static $filters = array("merge" => 8, "escape" => 13, "render" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block', 'trans'],
                ['merge', 'escape', 'render'],
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
