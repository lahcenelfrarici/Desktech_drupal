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

/* themes/custom/desktech/templates/system/page.html.twig */
class __TwigTemplate_b807f84780e12e416c4b4247f1f2b369 extends Template
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
        // line 48
        echo "

";
        // line 50
        $this->loadTemplate("@desktech/partials/header.html.twig", "themes/custom/desktech/templates/system/page.html.twig", 50)->display($context);
        // line 51
        echo "

<!-- Your main content goes here -->
";
        // line 72
        echo "
";
        // line 74
        echo "<!-- Slider Section -->

\t";
        // line 76
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 76)) {
            // line 77
            echo "\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "
\t";
        }
        // line 79
        echo "\t<!--  -->

\t";
        // line 81
        $this->loadTemplate("@desktech/partials/footer.html.twig", "themes/custom/desktech/templates/system/page.html.twig", 81)->display($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/desktech/templates/system/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  69 => 81,  65 => 79,  59 => 77,  57 => 76,  53 => 74,  50 => 72,  45 => 51,  43 => 50,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Olivero's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.content: The main content of the current page.
 * - page.sidebar: Items for the first sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 * - page.social: Items for the social region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}


{% include \"@desktech/partials/header.html.twig\" %}


<!-- Your main content goes here -->
{# <section class=\"section--slider banner--wrapper\">
\t\t<div class=\"slider-main\">
\t\t\t<div class=\"wrapper-slider\">
\t\t\t\t{{ page.banner }}
\t\t\t</div>
\t\t</div>
\t\t<div class=\"paragraph-wrapper\">
\t\t\t<div class=\"container\">
\t\t\t\t{% if page.page_title %}
\t\t\t\t\t{{page.page_title}}
\t\t\t\t{% endif %}

\t\t\t\t{% if page.breadcrumb %}
\t\t\t\t\t{{ page.breadcrumb }}
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</section> #}

{#  **#}
<!-- Slider Section -->

\t{% if page.content %}
\t\t{{ page.content }}
\t{% endif %}
\t<!--  -->

\t{% include \"@desktech/partials/footer.html.twig\" %}
", "themes/custom/desktech/templates/system/page.html.twig", "C:\\laragon\\www\\desktech_dr\\themes\\custom\\desktech\\templates\\system\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 50, "if" => 76);
        static $filters = array("escape" => 77);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
