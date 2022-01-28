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

/* core/themes/firma-1.1.12/firma/templates/node.html.twig */
class __TwigTemplate_9c9488419370c8be54cb876199b0b54adcaf324c5efb0ebd1eccf4deec8b7cfc extends \Twig\Template
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
        // line 66
        echo "
 ";
        // line 67
        if ((($context["view_mode"] ?? null) == "teaser")) {
            // line 68
            echo "
  ";
            // line 70
            $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 72
($context["node"] ?? null), "bundle", [], "any", false, false, true, 72), 72, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,             // line 73
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 73)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,             // line 74
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 74)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,             // line 75
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 75)) ? ("node--unpublished") : ("")), 5 => ((            // line 76
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 76, $this->source)))) : ("")), 6 => "uk-article"];
            // line 80
            echo "
  <article";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 81), 81, $this->source), "html", null, true);
            echo ">
  ";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 82, $this->source), "html", null, true);
            echo "
  ";
            // line 83
            if ( !($context["page"] ?? null)) {
                // line 84
                echo "    <div class=\"title\">
    <h2";
                // line 85
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 85, $this->source), "html", null, true);
                echo ">
      ";
                // line 86
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 86, $this->source), "html", null, true);
                echo "
    </h2>
    </div>
  ";
            }
            // line 90
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 90, $this->source), "html", null, true);
            echo "
  <div";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content"], "method", false, false, true, 91), 91, $this->source), "html", null, true);
            echo ">
  ";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 92, $this->source), "html", null, true);
            echo "
  </div>
  </article>

  ";
        } else {
            // line 97
            echo "
    ";
            // line 99
            $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 101
($context["node"] ?? null), "bundle", [], "any", false, false, true, 101), 101, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,             // line 102
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 102)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,             // line 103
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 103)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,             // line 104
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 104)) ? ("node--unpublished") : ("")), 5 => ((            // line 105
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 105, $this->source)))) : ("")), 6 => "uk-article"];
            // line 109
            echo "
    <article";
            // line 110
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 110), 110, $this->source), "html", null, true);
            echo ">

    ";
            // line 112
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 112, $this->source), "html", null, true);
            echo "
    ";
            // line 113
            if ( !($context["page"] ?? null)) {
                // line 114
                echo "      <h2";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "uk-article-title"], "method", false, false, true, 114), 114, $this->source), "html", null, true);
                echo ">
      <a class=\"uk-link-reset\" href=\"";
                // line 115
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 115, $this->source), "html", null, true);
                echo "\" rel=\"bookmark\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 115, $this->source), "html", null, true);
                echo "</a>
      </h2>
    ";
            }
            // line 118
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 118, $this->source), "html", null, true);
            echo "


    ";
            // line 121
            if (($context["display_submitted"] ?? null)) {
                // line 122
                echo "      <footer class=\"comment-submitted\">
      <div";
                // line 123
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [0 => "node__submitted"], "method", false, false, true, 123), 123, $this->source), "html", null, true);
                echo ">
      ";
                // line 124
                echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
                // line 125
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 125, $this->source), "html", null, true);
                echo "
      </div>
      </footer>
    ";
            }
            // line 129
            echo "
    <div";
            // line 130
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content"], "method", false, false, true, 130), 130, $this->source), "html", null, true);
            echo ">
    ";
            // line 131
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 131, $this->source), "html", null, true);
            echo "
    </div>

    </article>
  ";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/firma-1.1.12/firma/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 131,  164 => 130,  161 => 129,  153 => 125,  151 => 124,  147 => 123,  144 => 122,  142 => 121,  135 => 118,  127 => 115,  122 => 114,  120 => 113,  116 => 112,  111 => 110,  108 => 109,  106 => 105,  105 => 104,  104 => 103,  103 => 102,  102 => 101,  101 => 99,  98 => 97,  90 => 92,  86 => 91,  81 => 90,  74 => 86,  70 => 85,  67 => 84,  65 => 83,  61 => 82,  57 => 81,  54 => 80,  52 => 76,  51 => 75,  50 => 74,  49 => 73,  48 => 72,  47 => 70,  44 => 68,  42 => 67,  39 => 66,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/firma-1.1.12/firma/templates/node.html.twig", "/opt/lampp/htdocs/drupal/core/themes/firma-1.1.12/firma/templates/node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 67, "set" => 70, "trans" => 124);
        static $filters = array("clean_class" => 72, "escape" => 81);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'trans'],
                ['clean_class', 'escape'],
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
