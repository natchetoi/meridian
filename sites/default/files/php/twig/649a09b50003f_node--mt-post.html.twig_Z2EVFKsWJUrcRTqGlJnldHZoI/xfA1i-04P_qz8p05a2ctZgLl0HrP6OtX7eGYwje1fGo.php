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

/* themes/custom/baseplus/templates/node--mt-post.html.twig */
class __TwigTemplate_ab43ffc7f2bf5383dfa90c7d2de704a4 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("node.html.twig", "themes/custom/baseplus/templates/node--mt-post.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_node_side($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "  ";
        if (($context["page"] ?? null)) {
            // line 11
            echo "    ";
            if ((((((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "reading_time", [], "any", false, false, true, 11) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 11)) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "font_resize", [], "any", false, false, true, 11)) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 11)) || ($context["display_submitted"] ?? null)) || ($context["author_picture"] ?? null))) {
                // line 12
                echo "      <div class=\"node__side\">
        ";
                // line 13
                if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "sticky_side", [], "any", false, false, true, 13)) {
                    // line 14
                    echo "          ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/mt-sticky-element"), "html", null, true);
                    echo "
          <div class=\"mt-sticky-element\">
        ";
                }
                // line 17
                echo "        ";
                if (($context["author_picture"] ?? null)) {
                    // line 18
                    echo "          <div class=\"user-picture\">
            <div";
                    // line 19
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "removeClass", [0 => "node__meta-user node__meta-item"], "method", false, false, true, 19), 19, $this->source), "html", null, true);
                    echo ">
              ";
                    // line 20
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 20, $this->source), "html", null, true);
                    echo "
            </div>
          </div>
        ";
                }
                // line 24
                echo "        ";
                if (($context["display_submitted"] ?? null)) {
                    // line 25
                    echo "          <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [0 => "node-author mb-3"], "method", false, false, true, 25), 25, $this->source), "html", null, true);
                    echo ">
            ";
                    // line 26
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 26, $this->source), "html", null, true);
                    echo "
          </div>
          ";
                    // line 28
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 28, $this->source), "html", null, true);
                    echo "
        ";
                }
                // line 30
                echo "        ";
                if (($context["total_views_count"] ?? null)) {
                    // line 31
                    echo "          <div class=\"node-views mb-3\" title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Total views"));
                    echo "\">
            <i class=\"far fa-eye\"></i> ";
                    // line 32
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["total_views_count"] ?? null), 32, $this->source), "html", null, true);
                    echo "
          </div>
        ";
                }
                // line 35
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "reading_time", [], "any", false, false, true, 35)) {
                    // line 36
                    echo "          ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/reading-time"), "html", null, true);
                    echo "
          <div class=\"reading-time\">
            ";
                    // line 38
                    if ((($context["minutes"] ?? null) < 1)) {
                        // line 39
                        echo "              ";
                        echo t("1<div class=\"reading-time__text\">min read</div>", array());
                        // line 42
                        echo "            ";
                    } else {
                        // line 43
                        echo "              ";
                        echo t("@minutes<div class=\"reading-time__text\">min read</div>", array("@minutes" =>                         // line 44
($context["minutes"] ?? null), ));
                        // line 46
                        echo "            ";
                    }
                    // line 47
                    echo "          </div>
        ";
                }
                // line 49
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "font_resize", [], "any", false, false, true, 49)) {
                    // line 50
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
                // line 58
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 58) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 58))) {
                    // line 59
                    echo "          ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/share-links"), "html", null, true);
                    echo "
          <div class=\"share-links\">
            <ul>
              ";
                    // line 62
                    if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 62)) {
                        // line 63
                        echo "                <li class=\"facebook";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 63)) ? (" print-button-enabled") : ("")));
                        echo "\">
                  <a class=\"mt-style-custom-all\" href=\"https://www.facebook.com/sharer/sharer.php?u=";
                        // line 64
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 64)]), "html", null, true);
                        echo "&t=";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 64), 64, $this->source), true), "html", null, true);
                        echo "\" onclick=\"window.open(this.href, 'facebook-share','width=580,height=296');return false;\">
                      <i class=\"fab fa-facebook-f\"><span class=\"sr-only\">facebook-f</span></i>
                  </a>
                </li>
                <li class=\"twitter";
                        // line 68
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 68)) ? (" print-button-enabled") : ("")));
                        echo "\">
                  <a class=\"mt-style-custom-all\" href=\"http://twitter.com/share?text=";
                        // line 69
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 69), 69, $this->source), true), "html", null, true);
                        echo "&url=";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 69)]), "html", null, true);
                        echo "\" onclick=\"window.open(this.href, 'twitter-share', 'width=550,height=235');return false;\">
                      <i class=\"fab fa-twitter\"><span class=\"sr-only\">twitter</span></i>
                  </a>
                </li>
                <li class=\"email";
                        // line 73
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 73)) ? (" print-button-enabled") : ("")));
                        echo "\">
                  <a class=\"mt-style-custom-all\" href=\"mailto:?Subject=";
                        // line 74
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 74), 74, $this->source), true), "html", null, true);
                        echo "&amp;Body=";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 74)]), "html", null, true);
                        echo "\">
                      <i class=\"far fa-envelope\"><span class=\"sr-only\">envelope</span></i>
                  </a>
                </li>
              ";
                    }
                    // line 79
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 79)) {
                        // line 80
                        echo "                <li class=\"print";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 80)) ? (" share-links-enabled") : ("")));
                        echo "\">
                  <div class=\"print\">
                    <a class=\"mt-style-custom-all\" href=\"javascript:window.print()\" class=\"print-button\">
                      <i class=\"fas fa-print\"><span class=\"sr-only\">print</span></i>
                    </a>
                  </div>
                </li>
              ";
                    }
                    // line 88
                    echo "            </ul>
          </div>
        ";
                }
                // line 91
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "sticky_side", [], "any", false, false, true, 91)) {
                    // line 92
                    echo "          </div>
        ";
                }
                // line 94
                echo "      </div>
    ";
            }
            // line 96
            echo "  ";
        }
    }

    // line 98
    public function block_meta_area($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 99, $this->source), "html", null, true);
        echo "
  ";
        // line 100
        if ( !($context["page"] ?? null)) {
            // line 101
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 101), 101, $this->source), "html", null, true);
            echo ">
      <a href=\"";
            // line 102
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 102, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 102, $this->source), "html", null, true);
            echo "</a>
    </h2>
  ";
        }
        // line 105
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 105, $this->source), "html", null, true);
        echo "
  ";
        // line 106
        if (($context["display_submitted"] ?? null)) {
            // line 107
            echo "    <div class=\"node__meta d-md-none mb-3\">
      ";
            // line 108
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 108, $this->source), "html", null, true);
            echo "
      <span";
            // line 109
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [0 => "node__submitted-info"], "method", false, false, true, 109), 109, $this->source), "html", null, true);
            echo ">
        ";
            // line 110
            echo t("<span class=\"node__submitted-info-text\">by</span> @author_name", array("@author_name" =>             // line 111
($context["author_name"] ?? null), ));
            // line 113
            echo "      </span>
      ";
            // line 114
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 114, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 117
        echo "  ";
        if (((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 117) || ($context["total_views_count"] ?? null)) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 117))) {
            // line 118
            echo "    <div class=\"row justify-content-between d-md-none node__meta\">
    ";
            // line 119
            if ((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 119) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 119))) {
                // line 120
                echo "      <div class=\"col-auto\">
        <ul class=\"list-inline\">
          ";
                // line 122
                if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 122)) {
                    // line 123
                    echo "            <li class=\"list-inline-item\">
              <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
                    // line 124
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 124)]), "html", null, true);
                    echo "&t=";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 124), 124, $this->source), true), "html", null, true);
                    echo "\" onclick=\"window.open(this.href, 'facebook-share','width=580,height=296');return false;\">
                  <i class=\"fab fa-facebook-f\"><span class=\"sr-only\">facebook-f</span></i>
              </a>
            </li>
            <li class=\"list-inline-item\">
              <a href=\"http://twitter.com/share?text=";
                    // line 129
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 129), 129, $this->source), true), "html", null, true);
                    echo "&url=";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 129)]), "html", null, true);
                    echo "\" onclick=\"window.open(this.href, 'twitter-share', 'width=550,height=235');return false;\">
                  <i class=\"fab fa-twitter\"><span class=\"sr-only\">twitter</span></i>
              </a>
            </li>
            <li class=\"list-inline-item\">
              <a href=\"mailto:?Subject=";
                    // line 134
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 134), 134, $this->source), true), "html", null, true);
                    echo "&amp;Body=";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 134)]), "html", null, true);
                    echo "\">
                  <i class=\"far fa-envelope\"><span class=\"sr-only\">envelope</span></i>
              </a>
            </li>
          ";
                }
                // line 139
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 139)) {
                    // line 140
                    echo "            <li class=\"list-inline-item\">
              <div class=\"print\">
                <a href=\"javascript:window.print()\" class=\"print-button\">
                  <i class=\"fas fa-print\"><span class=\"sr-only\">print</span></i>
                </a>
              </div>
            </li>
          ";
                }
                // line 148
                echo "        </ul>
      </div>
    ";
            }
            // line 151
            echo "    ";
            if (($context["total_views_count"] ?? null)) {
                // line 152
                echo "      <div class=\"col-auto\">
        <div class=\"node-views\" title=\"";
                // line 153
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Total views"));
                echo "\">
          <i class=\"far fa-eye\"></i> ";
                // line 154
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["total_views_count"] ?? null), 154, $this->source), "html", null, true);
                echo "
        </div>
      </div>
    ";
            }
            // line 158
            echo "    </div>
  ";
        }
    }

    // line 161
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 162
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/node-post"), "html", null, true);
        echo "
  ";
        // line 163
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_mt_pst_comment", "links", "field_mt_pst_banner_image", "field_mt_pst_category"))) {
            // line 164
            echo "    <div class=\"node__main-content-section\">
      ";
            // line 165
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 165, $this->source), "field_mt_pst_comment", "links", "field_mt_pst_banner_image", "field_mt_pst_category"), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 168
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
        echo "
  ";
        // line 169
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_pst_comment", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/node--mt-post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 169,  415 => 168,  409 => 165,  406 => 164,  404 => 163,  399 => 162,  395 => 161,  389 => 158,  382 => 154,  378 => 153,  375 => 152,  372 => 151,  367 => 148,  357 => 140,  354 => 139,  344 => 134,  334 => 129,  324 => 124,  321 => 123,  319 => 122,  315 => 120,  313 => 119,  310 => 118,  307 => 117,  301 => 114,  298 => 113,  296 => 111,  295 => 110,  291 => 109,  287 => 108,  284 => 107,  282 => 106,  277 => 105,  269 => 102,  264 => 101,  262 => 100,  257 => 99,  253 => 98,  248 => 96,  244 => 94,  240 => 92,  237 => 91,  232 => 88,  220 => 80,  217 => 79,  207 => 74,  203 => 73,  194 => 69,  190 => 68,  181 => 64,  176 => 63,  174 => 62,  167 => 59,  164 => 58,  152 => 50,  149 => 49,  145 => 47,  142 => 46,  140 => 44,  138 => 43,  135 => 42,  132 => 39,  130 => 38,  124 => 36,  121 => 35,  115 => 32,  110 => 31,  107 => 30,  102 => 28,  97 => 26,  92 => 25,  89 => 24,  82 => 20,  78 => 19,  75 => 18,  72 => 17,  65 => 14,  63 => 13,  60 => 12,  57 => 11,  54 => 10,  50 => 9,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/node--mt-post.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/node--mt-post.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10, "trans" => 39);
        static $filters = array("escape" => 14, "t" => 31, "url_encode" => 64, "render" => 163, "without" => 163);
        static $functions = array("attach_library" => 14, "url" => 64);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 't', 'url_encode', 'render', 'without'],
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
