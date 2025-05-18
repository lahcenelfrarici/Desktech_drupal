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

/* @desktech/partials/footer.html.twig */
class __TwigTemplate_c68d48557ee9da159b4639172a596779 extends Template
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
        // line 76
        echo "<footer class=\"text-light py-5\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 mb-4\">
\t\t\t\t";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "desktech_site_branding"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<!-- Logo and Social Links -->
\t\t\t<div class=\"col-md-4\">
      ";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "desktech_footerleft"), "html", null, true);
        echo "
\t\t\t\t";
        // line 107
        echo "

\t\t\t</div>
\t\t\t<!-- Quick Links -->
\t\t\t<div class=\"col-md-4\">
      ";
        // line 113
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "desktech_liensutiles"), "html", null, true);
        echo "

\t\t\t\t";
        // line 130
        echo "\t\t\t</div>
\t\t\t<!-- Stay Updated -->
\t\t\t<div class=\"col-md-4 last--list-foooter\">
\t\t\t\t<h3>Newsletter</h3>
\t\t\t\t<p>
\t\t\t\t\tAbonnez-vous pour recevoir les dernières nouveautés et offres exclusives Ricoh au Maroc.
\t\t\t\t</p>
\t\t\t\t<form class=\"d-flex mt-3\">
\t\t\t\t\t<input type=\"email\" class=\"form-control rounded-pill\" placeholder=\"Votre E-mail\" required=\"\">
\t\t\t\t\t<button type=\"submit\" class=\"form--news\">Envoyer
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t</div>

\t\t\t<div class=\"text-center mb-4 copyright--foooter mt-3\">
\t\t\t\t<hr class=\"line__footer\">
        ";
        // line 146
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "desktech_copyright"), "html", null, true);
        echo "
\t\t\t</div>

\t\t</div>


\t</div>
</footer>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@desktech/partials/footer.html.twig";
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
        return array (  87 => 146,  69 => 130,  63 => 113,  56 => 107,  52 => 84,  45 => 80,  39 => 76,);
    }

    public function getSourceContext()
    {
        return new Source("{#
<section class=\"contact---us\" id=\"contact---us\">
\t<div
\t\tclass=\"contact-container\">
\t\t<!-- Left Form Section -->
\t\t<div class=\"contact-form\">
\t\t\t<h3>{{'I am interested in getting in touch with Casablanca Finance City'|t}}</h3>

\t\t\t<div class=\"web__form_dr\">
\t\t\t\t{{ drupal_entity('block','cfc_webform') }}
\t\t\t</div>
\t\t</div>

\t\t<!-- Right Image Section -->
\t\t<div class=\"contact-image\">
\t\t\t<img src=\"/themes/custom/cfc/CFC/assets/images/contatc-img.png\" alt=\"Office\"/>
\t\t</div>
\t</div>
</section>
<section class=\"section---filter-block\">
\t{{ drupal_view('news','block_1') }}
</section>


<footer class=\"bg-dark text-light py-5\">
\t<div class=\"container\">
\t\t<div
\t\t\tclass=\"row\">
\t\t\t<!-- Copyright -->
\t\t\t<div class=\"text-center mb-4\">
\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t{{ drupal_entity('block','cfc_copyright') }}</p>
\t\t\t</div>
\t\t\t<!-- Logo and Social Links -->
\t\t\t<div class=\"col-md-4 \">
\t\t\t\t{{ drupal_entity('block','cfc_logofooter') }}

\t\t\t\t{{ drupal_entity('block','cfc_socialmedia') }}


\t\t\t</div>

\t\t\t<!-- Stay Updated -->
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<h5>{{ 'Stay Updated'|t }}</h5>
\t\t\t\t{{ drupal_entity('block','cfc_stayupdated') }}
\t\t\t\t<form class=\"d-flex mt-3\">
\t\t\t\t\t<input type=\"email\" class=\"form-control rounded-pill\" placeholder=\"Email...\" required=\"\">
\t\t\t\t\t<button type=\"submit\" class=\"form--news\">{{'Subscribe'|t}}
\t\t\t\t\t\t<i class=\"fas fa-arrow-right ms-2\"></i>
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t</div>

\t\t\t<!-- Quick Links -->
\t\t\t<div class=\"col-md-4\">

\t\t\t\t{{ drupal_entity('block','cfc_quicklinks') }}
\t\t\t</div>
\t\t</div>


\t</div>
\t<!-- Google tag (gtag.js) -->
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-9WWD1TRBQN\"></script>
\t<script>
\t\twindow.dataLayer = window.dataLayer || [];
function gtag() {
dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'G-9WWD1TRBQN');
\t</script>
</footer> #}
<footer class=\"text-light py-5\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 mb-4\">
\t\t\t\t{{ drupal_entity('block','desktech_site_branding') }}
\t\t\t</div>
\t\t\t<!-- Logo and Social Links -->
\t\t\t<div class=\"col-md-4\">
      {{ drupal_entity('block','desktech_footerleft') }}
\t\t\t\t{# <img src=\"/themes/custom/desktech/Desktech/assets/images/logo1.png\" alt=\"Casablanca Finance City\" class=\"mb-3 d-none\" width=\"200\">
\t\t\t\t<h3>Qui Sommes Nous ?</h3>
\t\t\t\t<p class=\"mt-3 mb-3\">
\t\t\t\t\tDesktech est le leader au Maroc de la vente, la location et le service après-vente des solutions
\t\t\t\t\t\t\t\t\t\t            d'impression et de gestion documentaire de la marque Ricoh. En plus de l’impression, Nous proposons
\t\t\t\t\t\t\t\t\t\t            également des solutions pour moderniser vos espaces de travail : tableaux interactifs, solutions digitales
\t\t\t\t\t\t\t\t\t\t            et environnements collaboratifs.
\t\t\t\t</p>
\t\t\t\t<div class=\"social-icons\">
\t\t\t\t\t<a href=\"https://instagram.com\" target=\"_blank\">
\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"https://twitter.com\" target=\"_blank\">
\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"https://youtube.com\" target=\"_blank\">
\t\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"https://linkedin.com\" target=\"_blank\">
\t\t\t\t\t\t<i class=\"fab fa-linkedin\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div> #}


\t\t\t</div>
\t\t\t<!-- Quick Links -->
\t\t\t<div class=\"col-md-4\">
      {# <h3>Liens Utiles</h3> #}
 {{ drupal_entity('block','desktech_liensutiles') }}

\t\t\t\t{# <h3>Liens Utiles</h3>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"/index.html#contact---us\" class=\"text-decoration-none\">A propos</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\" class=\"text-decoration-none\">Notre Blog</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\" class=\"text-decoration-none\">Contactez-nous</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\" class=\"text-decoration-none\">Conditions générales</a>
\t\t\t\t\t</li>
\t\t\t\t</ul> #}
\t\t\t</div>
\t\t\t<!-- Stay Updated -->
\t\t\t<div class=\"col-md-4 last--list-foooter\">
\t\t\t\t<h3>Newsletter</h3>
\t\t\t\t<p>
\t\t\t\t\tAbonnez-vous pour recevoir les dernières nouveautés et offres exclusives Ricoh au Maroc.
\t\t\t\t</p>
\t\t\t\t<form class=\"d-flex mt-3\">
\t\t\t\t\t<input type=\"email\" class=\"form-control rounded-pill\" placeholder=\"Votre E-mail\" required=\"\">
\t\t\t\t\t<button type=\"submit\" class=\"form--news\">Envoyer
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t</div>

\t\t\t<div class=\"text-center mb-4 copyright--foooter mt-3\">
\t\t\t\t<hr class=\"line__footer\">
        {{ drupal_entity('block','desktech_copyright') }}
\t\t\t</div>

\t\t</div>


\t</div>
</footer>
", "@desktech/partials/footer.html.twig", "C:\\laragon\\www\\desktech_dr\\themes\\custom\\desktech\\templates\\partials\\footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 80);
        static $functions = array("drupal_entity" => 80);

        try {
            $this->sandbox->checkSecurity(
                [],
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
