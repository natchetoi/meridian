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

/* themes/custom/baseplus/templates/node--mt_team_member.html.twig */
class __TwigTemplate_a3ca111c5bec875cfd1d0c6e6bd1bd84 extends \Twig\Template
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
        // line 1
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node.html.twig", "themes/custom/baseplus/templates/node--mt_team_member.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/node-team-member"), "html", null, true);
        echo "
  <div class=\"row content\">
    ";
        // line 12
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_tmm_member_photo", [], "any", false, false, true, 12)) && ($context["page"] ?? null))) {
            // line 13
            echo "      <div class=\"col-lg-6\">
    ";
        } elseif (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source,         // line 14
($context["content"] ?? null), "field_mt_tmm_member_photo", [], "any", false, false, true, 14)) &&  !($context["page"] ?? null))) {
            // line 15
            echo "      <div class=\"col-lg-8\">
    ";
        } else {
            // line 17
            echo "      <div class=\"col-sm-12\">
    ";
        }
        // line 19
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_tmm_subheader_body", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "
      ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_tmm_body", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
      ";
        // line 21
        if (((($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_tmm_facebook_account", [], "any", false, false, true, 21)) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_tmm_twitter_account", [], "any", false, false, true, 21))) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_tmm_linkedin_account", [], "any", false, false, true, 21))) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_tmm_youtube_account", [], "any", false, false, true, 21)))) {
            // line 22
            echo "        <ul class=\"icons-list icons-list--large\">
          ";
            // line 23
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_tmm_facebook_account", [], "any", false, false, true, 23))) {
                // line 24
                echo "            <li>
              <a target=\"_blank\" href=\"";
                // line 25
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_mt_tmm_facebook_account", [], "any", false, false, true, 25), "value", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "\">
                <i class=\"fab fa-facebook\"></i><span class=\"sr-only\">facebook</span>
              </a>
            </li>
          ";
            }
            // line 30
            echo "          ";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_tmm_twitter_account", [], "any", false, false, true, 30))) {
                // line 31
                echo "            <li>
              <a target=\"_blank\" href=\"";
                // line 32
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_mt_tmm_twitter_account", [], "any", false, false, true, 32), "value", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "\">
                <i class=\"fab fa-twitter\"></i><span class=\"sr-only\">twitter</span>
              </a>
            </li>
          ";
            }
            // line 37
            echo "          ";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_tmm_linkedin_account", [], "any", false, false, true, 37))) {
                // line 38
                echo "            <li>
              <a target=\"_blank\" href=\"";
                // line 39
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_mt_tmm_linkedin_account", [], "any", false, false, true, 39), "value", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "\">
                <i class=\"fab fa-linkedin\"></i><span class=\"sr-only\">linkedin</span>
              </a>
            </li>
          ";
            }
            // line 44
            echo "          ";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_tmm_youtube_account", [], "any", false, false, true, 44))) {
                // line 45
                echo "            <li>
              <a target=\"_blank\" href=\"";
                // line 46
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_mt_tmm_youtube_account", [], "any", false, false, true, 46), "value", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                echo "\">
                <i class=\"fab fa-youtube\"></i><span class=\"sr-only\">youtube</span>
              </a>
            </li>
          ";
            }
            // line 51
            echo "        </ul>
      ";
        }
        // line 53
        echo "    </div>
    ";
        // line 54
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_tmm_member_photo", [], "any", false, false, true, 54))) {
            // line 55
            echo "      ";
            if (($context["page"] ?? null)) {
                // line 56
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("baseplus/magnific-popup-field-mt-tmm-member-photo-init"), "html", null, true);
                echo "
      ";
            }
            // line 58
            echo "      <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["page"] ?? null)) ? ("col-lg-6") : ("col-lg-4")));
            echo "\">
        <div class=\"photo-container\">
          ";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mt_tmm_member_photo", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 64
        echo "  </div>
  ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 65, $this->source), "field_mt_tmm_member_photo", "field_mt_tmm_subtitle", "field_mt_tmm_facebook_account", "field_mt_tmm_twitter_account", "field_mt_tmm_linkedin_account", "field_mt_tmm_youtube_account", "field_mt_tmm_body", "field_mt_tmm_subheader_body"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/baseplus/templates/node--mt_team_member.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 65,  173 => 64,  166 => 60,  160 => 58,  154 => 56,  151 => 55,  149 => 54,  146 => 53,  142 => 51,  134 => 46,  131 => 45,  128 => 44,  120 => 39,  117 => 38,  114 => 37,  106 => 32,  103 => 31,  100 => 30,  92 => 25,  89 => 24,  87 => 23,  84 => 22,  82 => 21,  78 => 20,  73 => 19,  69 => 17,  65 => 15,  63 => 14,  60 => 13,  58 => 12,  52 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/baseplus/templates/node--mt_team_member.html.twig", "/var/www/meridianpress.ca/web/themes/custom/baseplus/templates/node--mt_team_member.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12);
        static $filters = array("escape" => 10, "render" => 12, "without" => 65);
        static $functions = array("attach_library" => 10);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'render', 'without'],
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
