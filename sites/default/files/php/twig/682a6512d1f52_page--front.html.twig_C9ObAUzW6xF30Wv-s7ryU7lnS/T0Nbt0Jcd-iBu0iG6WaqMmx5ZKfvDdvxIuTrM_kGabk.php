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

/* themes/custom/desktech/templates/system/page--front.html.twig */
class __TwigTemplate_c076d8bd9810d43413e9ef072e6d1dad extends Template
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
        // line 49
        $this->loadTemplate("@desktech/partials/header.html.twig", "themes/custom/desktech/templates/system/page--front.html.twig", 49)->display($context);
        // line 50
        echo "
\t";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "desktech_sectiononeslider"), "html", null, true);
        echo "
  \t";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "desktech_sectiontwohp"), "html", null, true);
        echo "

\t";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "desktech_sectionthreehp"), "html", null, true);
        echo "

\t";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "desktech_sectionfourhp"), "html", null, true);
        echo "

\t";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "desktech_sectionfivehp"), "html", null, true);
        echo "



";
        // line 62
        $this->loadTemplate("@desktech/partials/footer.html.twig", "themes/custom/desktech/templates/system/page--front.html.twig", 62)->display($context);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/desktech/templates/system/page--front.html.twig";
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
        return array (  73 => 62,  66 => 58,  61 => 56,  56 => 54,  51 => 52,  47 => 51,  44 => 50,  42 => 49,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
* @file
* Default theme implementation to display a single page.
*
* The doctype, html, head and body tags are not in this template. Instead they
* can be found in the html.html.twig template in this directory.
*
* Available variables:
*
* General utility variables:
* - base_path: The base URL path of the Drupal installation. Will usually be
* \"/\" unless you have installed Drupal in a sub-directory.
* - is_front: A flag indicating if the current page is the front page.
* - logged_in: A flag indicating if the user is registered and signed in.
* - is_admin: A flag indicating if the user has permission to access
* administration pages.
*
* Site identity:
* - front_page: The URL of the front page. Use this instead of base_path when
* linking to the front page. This includes the language domain or prefix.
*
* Page content (in order of occurrence in the default page.html.twig):
* - messages: Status and error messages. Should be displayed prominently.
* - node: Fully loaded node, if there is an automatically-loaded node
* associated with the page and the node ID is the second argument in the
* page's path (e.g. node/12345 and node/12345/revisions, but not
* comment/reply/12345).
*
* Regions:
* - page.header: Items for the header region.
* - page.primary_menu: Items for the primary menu region.
* - page.secondary_menu: Items for the secondary menu region.
* - page.highlighted: Items for the highlighted content region.
* - page.help: Dynamic help text, mostly for admin pages.
* - page.content: The main content of the current page.
* - page.sidebar_first: Items for the first sidebar.
* - page.sidebar_second: Items for the second sidebar.
* - page.footer: Items for the footer region.
* - page.breadcrumb: Items for the breadcrumb region.
*
* @see template_preprocess_page()
* @see html.html.twig
*
* @ingroup themeable
*/
#}

{% include \"@desktech/partials/header.html.twig\" %}

\t{{ drupal_entity('block','desktech_sectiononeslider') }}
  \t{{ drupal_entity('block','desktech_sectiontwohp') }}

\t{{ drupal_entity('block','desktech_sectionthreehp') }}

\t{{ drupal_entity('block','desktech_sectionfourhp') }}

\t{{ drupal_entity('block','desktech_sectionfivehp') }}



{% include \"@desktech/partials/footer.html.twig\" %}
", "themes/custom/desktech/templates/system/page--front.html.twig", "C:\\laragon\\www\\desktech_dr\\themes\\custom\\desktech\\templates\\system\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 49);
        static $filters = array("escape" => 51);
        static $functions = array("drupal_entity" => 51);

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape'],
                ['drupal_entity']
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
