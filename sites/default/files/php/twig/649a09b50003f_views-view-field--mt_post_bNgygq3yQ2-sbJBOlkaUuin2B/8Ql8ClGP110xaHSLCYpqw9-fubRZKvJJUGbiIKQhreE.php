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

/* themes/custom/baseplus/templates/views-view-field--mt_posts_slideshow_boxed_width--nothing.html.twig */
class __TwigTemplate_2578a5d186df9159d99595acbf533829 extends \Twig\Template
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
        // line 22
        echo "<div class=\"tp-caption transparent-background\"
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
        // line 35
        echo "<div class=\"tp-caption tp-caption--transparent-background\"
  data-x=\"[center,center,center,center]\"
  data-y=\"[center,center,center,center]\"
  data-hoffset=\"[0,0,0,0]\"
  data-voffset=\"[0,0,0,0]\"
  data-fontweight=\"500\"
  data-whitespace=\"normal\"
  data-basealign=\"slide\"
  data-start=\"1200\"
  data-width=\"[850,850,650,430]\"
  data-transform_idle=\"o:1\"
  data-transform_in=\"y:[-100%];sX:1;sY:1;o:0;s:1000;e:Power4.easeInOut;\"
  data-transform_out=\"y:[100%];o:0;s:1000;e:Power2.easeInOut;\">
    ";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["output"] ?? null), 48, $this->source), "html", null, true);
        // line 49
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/views-view-field--mt_posts_slideshow_boxed_width--nothing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 49,  68 => 48,  53 => 35,  39 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/views-view-field--mt_posts_slideshow_boxed_width--nothing.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/views-view-field--mt_posts_slideshow_boxed_width--nothing.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 48);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
