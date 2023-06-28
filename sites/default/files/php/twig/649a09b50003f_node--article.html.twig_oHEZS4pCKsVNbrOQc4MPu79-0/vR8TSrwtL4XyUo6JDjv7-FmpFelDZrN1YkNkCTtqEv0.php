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

/* themes/custom/baseplus/templates/node--article.html.twig */
class __TwigTemplate_8e04197062d7214a7cd1f4777fec9bfd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'node_side' => [$this, 'block_node_side'],
            'meta_area' => [$this, 'block_meta_area'],
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
        $this->parent = $this->loadTemplate("node.html.twig", "themes/custom/baseplus/templates/node--article.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_node_side($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "  ";
        if ((((((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "reading_time", [], "any", false, false, true, 10) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "font_resize", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 10)) || ($context["display_submitted"] ?? null)) || ($context["author_picture"] ?? null))) {
            // line 11
            echo "    <div class=\"node__side\">
        ";
            // line 12
            if (($context["author_picture"] ?? null)) {
                // line 13
                echo "          <div class=\"user-picture\">
            <div";
                // line 14
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "removeClass", [0 => "node__meta-user node__meta-item"], "method", false, false, true, 14), 14, $this->source), "html", null, true);
                echo ">
              ";
                // line 15
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 15, $this->source), "html", null, true);
                echo "
            </div>
          </div>
        ";
            }
            // line 19
            echo "        ";
            if (($context["display_submitted"] ?? null)) {
                // line 20
                echo "          <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [0 => "node-author"], "method", false, false, true, 20), 20, $this->source), "html", null, true);
                echo ">
            ";
                // line 21
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 21, $this->source), "html", null, true);
                echo "
          </div>
          <div class=\"node-date\">
            ";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->env->getFilter('format_date')->getCallable()($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 24), 24, $this->source), "custom", "M d, Y"), "html", null, true);
                echo "
          </div>
          ";
                // line 26
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 26, $this->source), "html", null, true);
                echo "
        ";
            }
            // line 28
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "reading_time", [], "any", false, false, true, 28)) {
                // line 29
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/reading-time"), "html", null, true);
                echo "
          <div class=\"reading-time\">
            ";
                // line 31
                if ((($context["minutes"] ?? null) < 1)) {
                    // line 32
                    echo "              ";
                    echo t("1<div class=\"reading-time__text\">min read</div>", array());
                    // line 35
                    echo "            ";
                } else {
                    // line 36
                    echo "              ";
                    echo t("@minutes<div class=\"reading-time__text\">min read</div>", array("@minutes" =>                     // line 37
($context["minutes"] ?? null), ));
                    // line 39
                    echo "            ";
                }
                // line 40
                echo "          </div>
        ";
            }
            // line 42
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "sticky_side", [], "any", false, false, true, 42)) {
                // line 43
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/mt-sticky-element"), "html", null, true);
                echo "
          <div class=\"mt-sticky-element\">
        ";
            }
            // line 46
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "font_resize", [], "any", false, false, true, 46)) {
                // line 47
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/font-resize"), "html", null, true);
                echo "
          <div class=\"content-font-settings\">
              <div class=\"font-resize\">
                <a href=\"#\" id=\"decfont\">A-</a>
                <a href=\"#\" id=\"incfont\">A+</a>
              </div>
          </div>
        ";
            }
            // line 55
            echo "        ";
            if (((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links_print_position", [], "any", false, false, true, 55) == "node-side") && (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 55) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 55)))) {
                // line 56
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/share-links"), "html", null, true);
                echo "
          <div class=\"share-links\">
            <ul>
              ";
                // line 59
                if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 59)) {
                    // line 60
                    echo "                <li class=\"facebook";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 60)) ? (" print-button-enabled") : ("")));
                    echo "\">
                  <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
                    // line 61
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 61)]), "html", null, true);
                    echo "&t=";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 61), 61, $this->source), true), "html", null, true);
                    echo "\" onclick=\"window.open(this.href, 'facebook-share','width=580,height=296');return false;\">
                      <i class=\"fab fa-facebook\"><span class=\"sr-only\">facebook</span></i>
                  </a>
                </li>
                <li class=\"twitter";
                    // line 65
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 65)) ? (" print-button-enabled") : ("")));
                    echo "\">
                  <a href=\"http://twitter.com/share?text=";
                    // line 66
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 66), 66, $this->source), true), "html", null, true);
                    echo "&url=";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 66)]), "html", null, true);
                    echo "\" onclick=\"window.open(this.href, 'twitter-share', 'width=550,height=235');return false;\">
                      <i class=\"fab fa-twitter\"><span class=\"sr-only\">twitter</span></i>
                  </a>
                </li>
                <li class=\"email";
                    // line 70
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 70)) ? (" print-button-enabled") : ("")));
                    echo "\">
                  <a href=\"mailto:?Subject=";
                    // line 71
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 71), 71, $this->source), true), "html", null, true);
                    echo "&amp;Body=";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 71)]), "html", null, true);
                    echo "\">
                      <i class=\"far fa-envelope\"><span class=\"sr-only\">envelope</span></i>
                  </a>
                </li>
              ";
                }
                // line 76
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 76)) {
                    // line 77
                    echo "                <li class=\"print";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 77)) ? (" share-links-enabled") : ("")));
                    echo "\">
                  <div class=\"print\">
                    <a href=\"javascript:window.print()\" class=\"print-button\">
                      <i class=\"fas fa-print\"><span class=\"sr-only\">print</span></i>
                    </a>
                  </div>
                </li>
              ";
                }
                // line 85
                echo "            </ul>
          </div>
        ";
            }
            // line 88
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "sticky_side", [], "any", false, false, true, 88)) {
                // line 89
                echo "          </div>
        ";
            }
            // line 91
            echo "        ";
            if (((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links_print_position", [], "any", false, false, true, 91) == "bottom") && (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 91) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 91)))) {
                // line 92
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/share-links"), "html", null, true);
                echo "
          ";
                // line 93
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/fixed-share-links"), "html", null, true);
                echo "
          <div class=\"share-links\">
            <ul>
              ";
                // line 96
                if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 96)) {
                    // line 97
                    echo "                <li class=\"facebook";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 97)) ? (" print-button-enabled") : ("")));
                    echo "\">
                  <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
                    // line 98
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 98)]), "html", null, true);
                    echo "&t=";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 98), 98, $this->source), true), "html", null, true);
                    echo "\" onclick=\"window.open(this.href, 'facebook-share','width=580,height=296');return false;\">
                      <i class=\"fab fa-facebook\"><span class=\"sr-only\">facebook</span></i>
                  </a>
                </li>
                <li class=\"twitter";
                    // line 102
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 102)) ? (" print-button-enabled") : ("")));
                    echo "\">
                  <a href=\"http://twitter.com/share?text=";
                    // line 103
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 103), 103, $this->source), true), "html", null, true);
                    echo "&url=";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 103)]), "html", null, true);
                    echo "\" onclick=\"window.open(this.href, 'twitter-share', 'width=550,height=235');return false;\">
                      <i class=\"fab fa-twitter\"><span class=\"sr-only\">twitter</span></i>
                  </a>
                </li>
                <li class=\"email";
                    // line 107
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 107)) ? (" print-button-enabled") : ("")));
                    echo "\">
                  <a href=\"mailto:?Subject=";
                    // line 108
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 108), 108, $this->source), true), "html", null, true);
                    echo "&amp;Body=";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 108)]), "html", null, true);
                    echo "\">
                      <i class=\"far fa-envelope\"><span class=\"sr-only\">envelope</span></i>
                  </a>
                </li>
              ";
                }
                // line 113
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 113)) {
                    // line 114
                    echo "                <li class=\"print";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 114)) ? (" share-links-enabled") : ("")));
                    echo "\">
                  <div class=\"print\">
                    <a href=\"javascript:window.print()\" class=\"print-button\">
                      <i class=\"fas fa-print\"><span class=\"sr-only\">print</span></i>
                    </a>
                  </div>
                </li>
              ";
                }
                // line 122
                echo "            </ul>
          </div>
        ";
            }
            // line 125
            echo "    </div>
  ";
        }
    }

    // line 128
    public function block_meta_area($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 129
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 129, $this->source), "html", null, true);
        echo "
  ";
        // line 130
        if ( !($context["page"] ?? null)) {
            // line 131
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 131), 131, $this->source), "html", null, true);
            echo ">
      <a href=\"";
            // line 132
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 132, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 132, $this->source), "html", null, true);
            echo "</a>
    </h2>
  ";
        }
        // line 135
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 135, $this->source), "html", null, true);
        echo "
";
    }

    // line 137
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/node-article"), "html", null, true);
        echo "
  <div class=\"node__main-content-section\">
    ";
        // line 140
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 140, $this->source), "comment", "links", "field_mt_banner_image"), "html", null, true);
        echo "
  </div>
  ";
        // line 142
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
        echo "
  ";
        // line 143
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/node--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 143,  362 => 142,  357 => 140,  351 => 138,  347 => 137,  340 => 135,  332 => 132,  327 => 131,  325 => 130,  320 => 129,  316 => 128,  310 => 125,  305 => 122,  293 => 114,  290 => 113,  280 => 108,  276 => 107,  267 => 103,  263 => 102,  254 => 98,  249 => 97,  247 => 96,  241 => 93,  236 => 92,  233 => 91,  229 => 89,  226 => 88,  221 => 85,  209 => 77,  206 => 76,  196 => 71,  192 => 70,  183 => 66,  179 => 65,  170 => 61,  165 => 60,  163 => 59,  156 => 56,  153 => 55,  141 => 47,  138 => 46,  131 => 43,  128 => 42,  124 => 40,  121 => 39,  119 => 37,  117 => 36,  114 => 35,  111 => 32,  109 => 31,  103 => 29,  100 => 28,  95 => 26,  90 => 24,  84 => 21,  79 => 20,  76 => 19,  69 => 15,  65 => 14,  62 => 13,  60 => 12,  57 => 11,  54 => 10,  50 => 9,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/node--article.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/node--article.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10, "trans" => 32);
        static $filters = array("escape" => 14, "format_date" => 24, "url_encode" => 61, "without" => 140);
        static $functions = array("attach_library" => 29, "url" => 61);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'format_date', 'url_encode', 'without'],
                ['attach_library', 'url']
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
