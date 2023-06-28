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

/* themes/custom/baseplus/templates/node--mt_product.html.twig */
class __TwigTemplate_d8af95a1d39229a01ed7dea227b77562 extends \Twig\Template
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
        // line 8
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node.html.twig", "themes/custom/baseplus/templates/node--mt_product.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/node-product"), "html", null, true);
        echo "
  <div class=\"product-content two-columns\">
    <div class=\"row\">
      <div class=\"col-lg-4 order-lg-2 mb-3 mb-lg-0\">
        <h2 class=\"page-title\">";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "</h2>
        ";
        // line 15
        if (((((($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_subtitle", [], "any", false, false, true, 15)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_subheader_body", [], "any", false, false, true, 15))) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_buy_link", [], "any", false, false, true, 15))) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_price", [], "any", false, false, true, 15))) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_product_code", [], "any", false, false, true, 15))) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_availability", [], "any", false, false, true, 15)))) {
            // line 16
            echo "          <div class=\"product-content-second region--bright-background\">
            ";
            // line 17
            if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_image", [], "any", false, false, true, 17)) && (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_subheader_body", [], "any", false, false, true, 17)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_subtitle", [], "any", false, false, true, 17))) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_price", [], "any", false, false, true, 17))))) {
                // line 18
                echo "              ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_subtitle", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "
              ";
                // line 19
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_price", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "
              ";
                // line 20
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_subheader_body", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 22
            echo "            ";
            if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_product_code", [], "any", false, false, true, 22)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_availability", [], "any", false, false, true, 22)))) {
                // line 23
                echo "              <div class=\"row justify-content-start align-items-center mb-3\">
                ";
                // line 24
                if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_product_code", [], "any", false, false, true, 24))) {
                    // line 25
                    echo "                  <div class=\"col-auto text-muted\">
                    ";
                    // line 26
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_product_code", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                    echo "
                  </div>
                ";
                }
                // line 29
                echo "                ";
                if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_availability", [], "any", false, false, true, 29))) {
                    // line 30
                    echo "                  <div class=\"col-auto ms-auto ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_mt_prd_availability", [], "any", false, false, true, 30), "value", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 31
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_availability", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                    echo "
                  </div>
                ";
                }
                // line 34
                echo "              </div>
            ";
            }
            // line 36
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_buy_link", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 39
        echo "        ";
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_specifications", [], "any", false, false, true, 39))) {
            // line 40
            echo "          <button class=\"mt-collapse-button mt-collapse-button-red mt-4\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#field-mt-prd-specifications\" aria-expanded=\"false\" aria-controls=\"field-mt-prd-specifications\">
            <span><i class=\"far fa-file-alt\"></i></span> ";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_mt_prd_specifications", [], "any", false, false, true, 41), "fieldDefinition", [], "any", false, false, true, 41), "label", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "
          </button>

          <div class=\"mt-collapse collapse show\" id=\"field-mt-prd-specifications\">
            <div class=\"card card-body p-4\">
              ";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_specifications", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 50
        echo "        ";
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_delivery_options", [], "any", false, false, true, 50))) {
            // line 51
            echo "          <button class=\"mt-collapse-button mt-collapse-button-gold mt-4\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#field-mt-prd-delivery_options\" aria-expanded=\"false\" aria-controls=\"field-mt-prd-delivery_options\">
            <span><i class=\"fas fa-shipping-fast\"></i></span> ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_mt_prd_delivery_options", [], "any", false, false, true, 52), "fieldDefinition", [], "any", false, false, true, 52), "label", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "
          </button>

          <div class=\"mt-collapse collapse\" id=\"field-mt-prd-delivery_options\">
            <div class=\"card card-body p-4\">
              ";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_delivery_options", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 61
        echo "        <div class=\"row grid-gutter-10 align-items-center product-meta-info\">
          ";
        // line 62
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_categories", [], "any", false, false, true, 62))) {
            // line 63
            echo "            <div class=\"col-12 col-sm-auto mb-3 mb-sm-0\">
              ";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_categories", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 67
        echo "          <div class=\"col-12 mt-3 mb-0\">
            <ul class=\"list-inline mb-0\">
              <li class=\"facebook list-inline-item\">
                <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 70)]), "html", null, true);
        echo "&t=";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 70), 70, $this->source), true), "html", null, true);
        echo "\" onclick=\"window.open(this.href, 'facebook-share','width=580,height=296');return false;\">
                  <i class=\"fab fa-facebook\"><span class=\"sr-only\">facebook</span></i>
                </a>
              </li>
              <li class=\"twitter list-inline-item\">
                <a href=\"https://twitter.com/share?text=";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 75), 75, $this->source), true), "html", null, true);
        echo "&url=";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 75)]), "html", null, true);
        echo "\" onclick=\"window.open(this.href, 'twitter-share', 'width=550,height=235');return false;\">
                  <i class=\"fab fa-twitter\"><span class=\"sr-only\">twitter</span></i>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <a href=\"mailto:?Subject=";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 80), 80, $this->source), true), "html", null, true);
        echo "&amp;Body=";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 80)]), "html", null, true);
        echo "\">
                  <i class=\"far fa-envelope\"><span class=\"sr-only\">envelope</span></i>
                </a>
              </li>
              <li class=\"print list-inline-item\">
                <div class=\"print\">
                  <a href=\"javascript:window.print()\" class=\"print-button\">
                    <i class=\"fas fa-print\"><span class=\"sr-only\">print</span></i>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class=\"col-lg-8  order-lg-1\">
        <div class=\"product-content-first\">
          ";
        // line 97
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_image", [], "any", false, false, true, 97))) {
            // line 98
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_image", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            echo "
          ";
        } elseif (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source,         // line 99
($context["content"] ?? null), "field_mt_prd_subheader_body", [], "any", false, false, true, 99)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_subtitle", [], "any", false, false, true, 99)))) {
            // line 100
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_subtitle", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            echo "
            ";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_subheader_body", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 103
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 103, $this->source), "field_mt_prd_categories", "field_mt_prd_delivery_options", "field_mt_prd_specifications", "field_mt_prd_banner_carousel", "field_mt_prd_image", "field_mt_prd_buy_link", "field_mt_prd_price", "field_mt_prd_product_code", "field_mt_prd_availability", "field_mt_prd_categories", "field_mt_prd_subheader_body", "field_mt_prd_subtitle", "field_mt_prd_highlight", "field_mt_prd_additional_features", "field_mt_prd_comments", "field_mt_prd_tags"), "html", null, true);
        echo "
            ";
        // line 104
        if (( !$this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_highlight", [], "any", false, false, true, 104)) &&  !$this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_additional_features", [], "any", false, false, true, 104)))) {
            // line 105
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_tags", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "
              ";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_comments", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 108
        echo "        </div>
      </div>
    </div>
  </div>
  ";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_highlight", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
        echo "
  ";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_additional_features", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
        echo "
  ";
        // line 114
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_highlight", [], "any", false, false, true, 114)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_additional_features", [], "any", false, false, true, 114)))) {
            // line 115
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_tags", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
            echo "
    ";
            // line 116
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_prd_comments", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 118
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/node--mt_product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 118,  287 => 116,  282 => 115,  280 => 114,  276 => 113,  272 => 112,  266 => 108,  261 => 106,  256 => 105,  254 => 104,  249 => 103,  244 => 101,  239 => 100,  237 => 99,  232 => 98,  230 => 97,  208 => 80,  198 => 75,  188 => 70,  183 => 67,  177 => 64,  174 => 63,  172 => 62,  169 => 61,  162 => 57,  154 => 52,  151 => 51,  148 => 50,  141 => 46,  133 => 41,  130 => 40,  127 => 39,  120 => 36,  116 => 34,  110 => 31,  105 => 30,  102 => 29,  96 => 26,  93 => 25,  91 => 24,  88 => 23,  85 => 22,  80 => 20,  76 => 19,  71 => 18,  69 => 17,  66 => 16,  64 => 15,  60 => 14,  52 => 10,  48 => 9,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/node--mt_product.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/node--mt_product.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15);
        static $filters = array("escape" => 10, "render" => 15, "url_encode" => 70, "without" => 103);
        static $functions = array("attach_library" => 10, "url" => 70);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'render', 'url_encode', 'without'],
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
