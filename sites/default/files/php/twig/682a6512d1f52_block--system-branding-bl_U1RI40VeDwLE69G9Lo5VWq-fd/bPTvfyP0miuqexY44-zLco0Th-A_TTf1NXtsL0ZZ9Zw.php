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

/* themes/custom/desktech/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_a66046f188c9e2995678a2ab23d9018b extends Template
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
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("block.html.twig", "themes/custom/desktech/templates/block/block--system-branding-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "\t";
        // line 41
        echo "
\t\t\t";
        // line 43
        echo "        <a class=\"navbar-brand\" href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "\">
        <img src=\"/themes/custom/desktech/Desktech/assets/images/logo1.png\">
        </a>
   ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/desktech/templates/block/block--system-branding-block.html.twig";
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
        return array (  57 => 43,  54 => 41,  52 => 19,  48 => 18,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"block.html.twig\" %}
{#
/**
 * @file
 * Default theme implementation for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 *
 * @ingroup themeable
 */
#}
{% block content %}
\t{# <div class=\"navbar-brand\">
\t\t<div class=\"list-footer-img-1\">
\t\t\t{% if site_logo %}

\t\t\t\t<div class=\"dir--img\">
\t\t\t\t\t<a href=\"https://www.albaridbank.ma/fr\" rel=\"home\" target=\"_blanck\">
\t\t\t\t\t\t<img src=\"\\themes\\custom\\cfc\\assets\\images\\1.png\" alt=\"{{ 'Home'|t }}\" fetchpriority=\"high\"/>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t{% endif %}
\t\t\t<div class=\"dir--img\">
\t\t\t\t\t<a href=\"{{ path('<front>') }}\" rel=\"home\">
\t\t\t\t\t<img src=\"\\themes\\custom\\cfc\\assets\\images\\2.png\">
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t{% if site_name %}
\t\t\t<a href=\"{{ path('<front>') }}\" rel=\"home\">{{ site_name }}</a>
\t\t{% endif %}
\t\t{{ site_slogan }}
\t</div> #}

\t\t\t{# <a href=\"{{ path('<front>') }}\"><img src=\"/themes/custom/cfc/CFC/assets/images/Logo.png\" alt=\"CFC Logo\"></a> #}
        <a class=\"navbar-brand\" href=\"{{ path('<front>') }}\">
        <img src=\"/themes/custom/desktech/Desktech/assets/images/logo1.png\">
        </a>
   {# <a href=\"{{ path('<front>') }}\"><img src=\"\\themes\\custom\\ux4mation\\public\\images\\logo.png\" alt=\"Logo\" id=\"brand-logo\" class=\"img-fluid\"></a> #}
{% endblock %}
", "themes/custom/desktech/templates/block/block--system-branding-block.html.twig", "C:\\laragon\\www\\desktech_dr\\themes\\custom\\desktech\\templates\\block\\block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("path" => 43);

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['path']
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
