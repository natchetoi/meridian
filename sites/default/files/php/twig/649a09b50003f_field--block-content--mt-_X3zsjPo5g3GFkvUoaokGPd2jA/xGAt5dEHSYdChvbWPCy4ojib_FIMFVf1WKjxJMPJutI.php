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

/* themes/custom/baseplus/templates/field--block-content--mt-main-slideshow.html.twig */
class __TwigTemplate_cb0fa11204e88da284e24ec0db693691 extends \Twig\Template
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
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/main-slideshow-block-init"), "html", null, true);
        echo "
";
        // line 11
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 13
($context["field_name"] ?? null), 13, $this->source))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 14
($context["field_type"] ?? null), 14, $this->source))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 15
($context["label_display"] ?? null), 15, $this->source)), 4 => "field--mt-main-slideshow", 5 => "clearfix"];
        // line 21
        $context["title_classes"] = [0 => "field__label", 1 => (((        // line 23
($context["label_display"] ?? null) == "inline")) ? ("inline") : (""))];
        // line 26
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 26), 26, $this->source), "html", null, true);
        echo ">
  ";
        // line 27
        if ( !($context["label_hidden"] ?? null)) {
            // line 28
            echo "    <h3";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 28), 28, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 28, $this->source), "html", null, true);
            echo "</h3>
  ";
        }
        // line 30
        echo "  <div class=\"main-slideshow-block rev_slider_wrapper\"
    data-attribute-mt-layout=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_mt_main_slideshow_layout_value"] ?? null), 31, $this->source), "html", null, true);
        echo "\"
    data-attribute-mt-autoheight=\"";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_mt_main_slideshow_autoheight"] ?? null), 32, $this->source), "html", null, true);
        echo "\"
    data-attribute-mt-initial-height=\"";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_mt_ms_initial_height_value"] ?? null), 33, $this->source), "html", null, true);
        echo "\"
    data-attribute-mt-effect-duration=\"";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_mt_ms_effect_duration_value"] ?? null), 34, $this->source), "html", null, true);
        echo "\"
    data-attribute-mt-bullets-enable=\"";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_mt_ms_bullets_enable"] ?? null), 35, $this->source), "html", null, true);
        echo "\"
    data-attribute-mt-tabs-enable=\"";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_mt_ms_tabs_enable"] ?? null), 36, $this->source), "html", null, true);
        echo "\"
    data-attribute-mt-touch-swipe-nav=\"";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_mt_ms_touch_swipe_nav_value"] ?? null), 37, $this->source), "html", null, true);
        echo "\"
    data-attribute-mt-bullets-position=\"";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_mt_ms_bullets_position_value"] ?? null), 38, $this->source), "html", null, true);
        echo "\"
    data-attribute-mt-background-opacity=\"";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_mt_ms_background_opacity_value"] ?? null), 39, $this->source), "html", null, true);
        echo "\"
    data-attribute-mt-ignore-header=\"";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_mt_ms_ignore_header_height_value"] ?? null), 40, $this->source), "html", null, true);
        echo "\">
    <div class=\"rev_slider\" data-version=\"5.4.5\">
      <ul>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "          <li data-transition=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_mt_ms_effect_value"] ?? null), 44, $this->source), "html", null, true);
            echo "\" data-slotamount=\"default\"
            ";
            // line 45
            if (twig_get_attribute($this->env, $this->source, $context["item"], "slide_title", [], "any", false, false, true, 45)) {
                // line 46
                echo "                data-title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slide_title", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                echo "\"
            ";
            }
            // line 48
            echo "          data-masterspeed=\"default\">
            <img src=\"";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slide_image_url", [], "any", false, false, true, 49), 49, $this->source)), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slide_image_alt", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" class=\"rev-slidebg\" data-no-retina>

            ";
            // line 52
            echo "            <div class=\"tp-caption transparent-background\"
              data-x=\"left\"
              data-y=\"top\"
              data-start=\"0\"
              data-basealign=\"slide\"
              data-transform_idle=\"o:1\"
              data-transform_in=\"o:0;s:300;\"
              data-transform_out=\"o:0;s:300;\"
              data-width=\"full\"
              data-height=\"full\">
            </div>

            ";
            // line 65
            echo "            <div class=\"tp-caption ms-transparent-background\"
              data-x=\"[center,center,center,center]\"
              data-y=\"[center,center,bottom,bottom]\"
              data-hoffset=\"[0,0,0,0]\"
              data-voffset=\"[0,0,20,20]\"
              data-fontweight=\"500\"
              data-whitespace=\"normal\"
              data-basealign=\"grid\"
              data-start=\"1200\"
              data-width=\"[650,650,650,350]\"
              data-transform_idle=\"o:1\"
              data-transform_in=\"y:[-100%];sX:1;sY:1;o:0;s:1000;e:Power4.easeInOut;\"
              data-transform_out=\"y:[100%];o:0;s:1000;e:Power2.easeInOut;\"
              data-attribute-mt-caption-opacity=\"";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slide_caption_opacity", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "\">
              ";
            // line 79
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "slide_title", [], "any", false, false, true, 79) && twig_get_attribute($this->env, $this->source, $context["item"], "slide_first_link_url", [], "any", false, false, true, 79))) {
                // line 80
                echo "                <div class=\"tp-caption__title mt-style-custom-all ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slide_caption_color", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                echo "\"><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slide_first_link_url", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slide_title", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                echo "</a></div>
              ";
            } else {
                // line 82
                echo "                <div class=\"tp-caption__title mt-style-custom-all ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slide_caption_color", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slide_title", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                echo "</div>
              ";
            }
            // line 84
            echo "              ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "slide_caption", [], "any", false, false, true, 84)) {
                // line 85
                echo "                <div class=\"tp-caption__text mt-style-custom-all ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slide_caption_color", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slide_caption", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                echo "</div>
              ";
            }
            // line 87
            echo "              ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "slide_first_link_url", [], "any", false, false, true, 87)) {
                // line 88
                echo "                <div class=\"tp-caption__buttons-container\">
                  ";
                // line 89
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "slide_links", [], "any", false, false, true, 89));
                foreach ($context['_seq'] as $context["_key"] => $context["slide_link"]) {
                    // line 90
                    echo "                    <a class=\"mt-button\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide_link"], "slide_link_url", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide_link"], "slide_link_title", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                    echo "</a>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide_link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "                </div>
              ";
            }
            // line 94
            echo "            </div>

            ";
            // line 97
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "slide_youtube_id", [], "any", false, false, true, 97)) {
                // line 98
                echo "              <div class=\"rs-background-video-layer\"
                data-ytid=\"";
                // line 99
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slide_youtube_id", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
                echo "\"
                data-videoattributes=\"version=3&amp;enablejsapi=1&amp;html5=1&amp;hd=1&amp;wmode=opaque&amp;showinfo=0&amp;rel=0;\"
                data-videorate=\"1\"
                data-videoloop=\"loop\"
                data-videowidth=\"100%\"
                data-videoheight=\"100%\"
                data-videocontrols=\"none\"
                data-aspectratio=\"16:9\"
                data-autoplay=\"true\"
                data-autoplayonlyfirsttime=\"false\"
                data-nextslideatend=\"true\"
                data-forcerewind=\"on\"
                data-volume=\"";
                // line 111
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slide_video_volume", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                echo "\">
                </div>
            ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 113
$context["item"], "slide_vimeo_id", [], "any", false, false, true, 113)) {
                // line 114
                echo "              <div class=\"rs-background-video-layer\"
                data-vimeoid=\"";
                // line 115
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slide_vimeo_id", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
                echo "\"
                data-videoattributes=\"title=0&amp;byline=0&amp;portrait=0&amp;api=1\"
                data-videoloop=\"loop\"
                data-videowidth=\"100%\"
                data-videoheight=\"100%\"
                data-videocontrols=\"none\"
                data-aspectratio=\"16:9\"
                data-autoplay=\"true\"
                data-autoplayonlyfirsttime=\"false\"
                data-nextslideatend=\"true\"
                data-forcerewind=\"on\"
                data-volume=\"";
                // line 126
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slide_video_volume", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
                echo "\">
                </div>
            ";
            }
            // line 129
            echo "
            <div class=\"tp-caption scroll-button\"
              data-actions='[{
                \"event\": \"click\",
                \"action\": \"scrollbelow\",
                \"offset\": \"50px\",
                \"delay\": \"0\"
              }]'
              data-x=\"center\"
              data-y=\"bottom\"
              data-voffset=\"0\"
              data-start=\"0\"
              data-basealign=\"slide\"
              data-transform_idle=\"o:1\"
              data-transform_in=\"o:0;s:300;\"
              data-transform_out=\"o:0;s:300;\">
              <span></span>
            </div>

          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "      </ul>
      <div class=\"tp-bannertimer tp-bottom\"></div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/field--block-content--mt-main-slideshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 150,  282 => 129,  276 => 126,  262 => 115,  259 => 114,  257 => 113,  252 => 111,  237 => 99,  234 => 98,  231 => 97,  227 => 94,  223 => 92,  212 => 90,  208 => 89,  205 => 88,  202 => 87,  194 => 85,  191 => 84,  183 => 82,  173 => 80,  171 => 79,  167 => 78,  152 => 65,  138 => 52,  131 => 49,  128 => 48,  122 => 46,  120 => 45,  115 => 44,  111 => 43,  105 => 40,  101 => 39,  97 => 38,  93 => 37,  89 => 36,  85 => 35,  81 => 34,  77 => 33,  73 => 32,  69 => 31,  66 => 30,  58 => 28,  56 => 27,  51 => 26,  49 => 23,  48 => 21,  46 => 15,  45 => 14,  44 => 13,  43 => 11,  39 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/field--block-content--mt-main-slideshow.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/field--block-content--mt-main-slideshow.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "if" => 27, "for" => 43);
        static $filters = array("escape" => 9, "clean_class" => 13);
        static $functions = array("attach_library" => 9, "file_url" => 49);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'clean_class'],
                ['attach_library', 'file_url']
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
