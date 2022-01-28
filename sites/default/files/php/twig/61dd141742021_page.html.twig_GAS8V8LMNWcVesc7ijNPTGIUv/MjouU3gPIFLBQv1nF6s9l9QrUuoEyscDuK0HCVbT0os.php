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

/* core/themes/firma-1.1.12/firma/templates/page.html.twig */
class __TwigTemplate_49356a52382906f471eee2b4ac2a5ccfe7a8e331cbbf33b0c1a037fdb993af3c extends \Twig\Template
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
        // line 1
        echo "\t<div class=\"site-header\">
\t\t<div id=\"top-header\" class=\"uk-background-primary uk-padding-small uk-light\">
\t\t\t<div class=\"uk-container\">
\t\t\t\t<div class=\"uk-flex uk-flex-middle\">
\t\t\t\t\t<div class=\"uk-margin-auto-right uk-visible@m\">
\t\t\t\t\t\t<div uk-grid>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"uk-margin-small-right\" uk-icon=\"receiver\"></span>";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 8, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"uk-margin-small-right\" uk-icon=\"mail\"></span>";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 11, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"uk-width-auto\">
\t\t\t\t\t\t<div class=\"right-header uk-text-right\">
\t\t\t\t\t\t\t<ul class=\"uk-flex-inline uk-flex-middle uk-flex-nowrap uk-grid-medium\" uk-grid>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 18, $this->source), "html", null, true);
        echo "\" class=\"uk-icon-button\" uk-icon=\"facebook\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram"] ?? null), 19, $this->source), "html", null, true);
        echo "\" class=\"uk-icon-button\" uk-icon=\"instagram\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 20, $this->source), "html", null, true);
        echo "\" class=\"uk-icon-button\" uk-icon=\"twitter\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube"] ?? null), 21, $this->source), "html", null, true);
        echo "\" class=\"uk-icon-button\" uk-icon=\"youtube\"></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"main-header\" class=\"uk-card uk-card-default uk-section uk-section-default uk-section-xsmall\" uk-header uk-sticky=\"show-on-up: true; animation: uk-animation-slide-top\">
\t\t\t<div class=\"uk-container\">
\t\t\t\t<nav class=\"uk-navbar-container uk-navbar-transparent\" uk-navbar>
\t\t\t\t\t";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_left", [], "any", false, false, true, 31)) {
            // line 32
            echo "\t\t\t\t\t<div class=\"uk-navbar-left\">
\t\t\t\t\t\t";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_left", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 36)) {
            // line 37
            echo "\t\t\t\t\t<div class=\"uk-navbar-right\">
\t\t\t\t\t\t<div class=\"menu uk-text-right uk-visible@m\">
\t\t\t\t\t\t\t";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"uk-navbar-toggle uk-hidden@m\" uk-toggle href=\"#mobile-menu\">
\t\t\t\t\t\t\t<div uk-navbar-toggle-icon></div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 45
        echo " 
\t\t\t\t</nav>
\t\t\t\t<div class=\"responsive-menu text-right uk-hidden@m\">
\t\t\t\t\t<div id=\"mobile-menu\" class=\"menu\" uk-offcanvas>
\t\t\t\t\t\t<div class=\"uk-offcanvas-bar\">
\t\t\t\t\t\t\t";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t";
        // line 59
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 60
            echo "\t<div id=\"slideshow\" class=\"uk-position-relative uk-visible-toggle\" tabindex=\"-1\" uk-slideshow=\"animation: push; ratio: 5:2\">
\t\t<ul class=\"uk-slideshow-items\">
\t\t\t";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 63
                echo "\t\t\t";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 63, $this->source));
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "\t\t</ul>
\t\t<a class=\"uk-position-center-left uk-position-small uk-hidden-hover uk-label uk-light\" href=\"#\" uk-slidenav-previous uk-slideshow-item=\"previous\"></a>
\t\t<a class=\"uk-position-center-right uk-position-small uk-hidden-hover uk-label uk-light\" href=\"#\" uk-slidenav-next uk-slideshow-item=\"next\"></a>
\t</div>
\t";
        }
        // line 70
        echo "


\t";
        // line 73
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_up", [], "any", false, false, true, 73)) {
            // line 74
            echo "\t<div class=\"uk-section uk-section-default\">
\t\t<div class=\"uk-container\">
\t\t\t";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_up", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "
\t\t</div>
\t</div>
\t";
        }
        // line 80
        echo "

\t";
        // line 82
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_down", [], "any", false, false, true, 82)) {
            // line 83
            echo "\t<div class=\"uk-section uk-section-secondary\">
\t\t<div class=\"uk-container\">
\t\t\t";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_down", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
            echo "
\t\t</div>
\t</div>
\t";
        }
        // line 89
        echo "

\t<!--- Start Content -->
\t";
        // line 92
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 92)) {
            // line 93
            echo "\t<div class=\"main-content\">
\t\t<div class=\"uk-section uk-section-default\">
\t\t\t<div class=\"uk-container\">
\t\t\t\t<div uk-grid>
\t\t\t\t\t";
            // line 97
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 97)) {
                // line 98
                echo "\t\t\t\t\t<div class=\"uk-width-1-4 uk-visible@m\">
\t\t\t\t\t\t";
                // line 99
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 102
            echo "\t\t\t\t\t<div class=\"uk-width-expand\">
\t\t\t\t\t\t";
            // line 103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 105
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 105)) {
                // line 106
                echo "\t\t\t\t\t<div class=\"uk-width-1-4 uk-visible@m\">
\t\t\t\t\t\t";
                // line 107
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 110
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        // line 115
        echo "\t<!-- End: Content -->


\t";
        // line 118
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 118)) {
            // line 119
            echo "\t<div class=\"uk-section uk-section-muted\">
\t\t<div class=\"uk-container\">
\t\t\t";
            // line 121
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
            echo "
\t\t</div>
\t</div>
\t";
        }
        // line 125
        echo "

\t";
        // line 127
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 127)) {
            // line 128
            echo "\t<div class=\"uk-section uk-section-primary uk-section-xsmall\">
\t\t<div class=\"uk-container\">
\t\t\t<div class=\"uk-flex uk-flex-middle\">
\t\t\t\t<div class=\"uk-width-auto\">
\t\t\t\t\t";
            // line 132
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"uk-margin-auto-left uk-text-center\">
\t\t\t\t\t<a class=\"uk-icon-button\" href=\"\" uk-totop uk-scroll></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/firma-1.1.12/firma/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 132,  271 => 128,  269 => 127,  265 => 125,  258 => 121,  254 => 119,  252 => 118,  247 => 115,  240 => 110,  234 => 107,  231 => 106,  229 => 105,  224 => 103,  221 => 102,  215 => 99,  212 => 98,  210 => 97,  204 => 93,  202 => 92,  197 => 89,  190 => 85,  186 => 83,  184 => 82,  180 => 80,  173 => 76,  169 => 74,  167 => 73,  162 => 70,  155 => 65,  146 => 63,  142 => 62,  138 => 60,  136 => 59,  124 => 50,  117 => 45,  107 => 39,  103 => 37,  100 => 36,  94 => 33,  91 => 32,  89 => 31,  76 => 21,  72 => 20,  68 => 19,  64 => 18,  54 => 11,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/firma-1.1.12/firma/templates/page.html.twig", "/opt/lampp/htdocs/drupal/core/themes/firma-1.1.12/firma/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 31, "for" => 62);
        static $filters = array("escape" => 8, "raw" => 63);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw'],
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
