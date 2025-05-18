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

/* themes/custom/desktech/templates/node/node--1.html.twig */
class __TwigTemplate_db7cb0aeb1c159a33d9aeee29a928c29 extends Template
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
        // line 2
        echo "  <!-- Slider Section -->
";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "desktech_bannerquisommesnous"), "html", null, true);
        echo "

";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "desktech_sectionleadersensolutionsricohaumaroc"), "html", null, true);
        echo "
";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "desktech_incrementnumber"), "html", null, true);
        echo "
";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "desktech_pourquoichoisirdesktech"), "html", null, true);
        echo "
";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "desktech_sectionilsnousfontconfiance"), "html", null, true);
        echo "
  ";
        // line 236
        echo "  <section class=\"section-propose-five-desktech\" id=\"contact--nous\">
    <div class=\"two--column-contact\">
      <div class=\"left--contact\">
        ";
        // line 317
        echo "
";
        // line 318
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "desktech_contactleft"), "html", null, true);
        echo "
      </div>
      <div class=\"right--contact\">
        <div class=\"contact-webform\">
        ";
        // line 322
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "desktech_webform"), "html", null, true);
        echo "
          ";
        // line 348
        echo "        </div>

      </div>
    </div>
  </section>
  <section class=\"maps-img\">
      <img src=\"/themes/custom/desktech/Desktech/assets/images/maps_img.png\" >
  </section>
  <!-- Section Footer-->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/desktech/templates/node/node--1.html.twig";
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
        return array (  82 => 348,  78 => 322,  71 => 318,  68 => 317,  63 => 236,  59 => 8,  55 => 7,  51 => 6,  47 => 5,  42 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# {{ drupal_entity('block','desktech_bannerquisommesnous') }} #}
  <!-- Slider Section -->
{{ drupal_entity('block','desktech_bannerquisommesnous') }}

{{ drupal_entity('block','desktech_sectionleadersensolutionsricohaumaroc') }}
{{ drupal_entity('block','desktech_incrementnumber') }}
{{ drupal_entity('block','desktech_pourquoichoisirdesktech') }}
{{ drupal_entity('block','desktech_sectionilsnousfontconfiance') }}
  {# <section class=\"banner_tp\" id=\"banner_tp\">
    <div class=\"banner\">
      <img src=\"/themes/custom/desktech/Desktech/assets/images/banner-sc.png\">
      <div class=\"container\">
        <div class=\"breadcrumb-sx\">
          <span>Qui Sommes-Nous ?</span>
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"834\" height=\"106\" viewBox=\"0 0 834 106\" fill=\"none\">
            <path d=\"M834 106H-40V0H687L834 106Z\" fill=\"white\" />
            <path d=\"M834 106H-40V0H687L834 106Z\" stroke=\"#000849\" />
          </svg>
          <!-- <div class=\"overly--br\">

          </div> -->
        </div>
      </div>
    </div>
  </section>

  <section class=\"section-propose-one-desktech\">
    <div class=\"container\">
      <div class=\"row g-5\">

        <div class=\"col-md-6\">
          <div class=\"left--section-two-desktech\">
            <div class=\"one--img-sc-four\">
              <img src=\"/themes/custom/desktech/Desktech/assets/images/aprps.png\">
              <div class=\"para--text\">
                <p>🏆 Élu Meilleur Partenaire RICOH en Afrique 2023 </p>
              </div>
            </div>
          </div>
        </div>

        <div class=\"col-md-6\">
          <div class=\"right--section-two-desktech\">
            <div class=\"title--primary\">
              <h2>Leaders en solutions <br><span>RICOH</span> au Maroc</span></h2>
            </div>
            <p>
              Desktech est le leader au Maroc de la vente, la location et le service après-vente des solutions
              d'impression et de gestion documentaire de la marque Ricoh. En plus de l’impression, Desktech propose
              également des solutions pour moderniser vos espaces de travail : tableaux interactifs, solutions digitales
              et environnements collaboratifs.
            </p>
            <p>
              Certifié Ricoh Strategic Business Partner, Desktech met à votre service :
            </p>
            <p>
              ✔️ Une expertise inégalée sur la gamme de produits et de solutions Ricoh.<br>
              ✔️ Un engagement total pour assurer votre satisfaction.<br>
              ✔️ Des solutions sur mesure pour répondre aux besoins spécifiques de votre entreprise.
            </p>
            <a href=\"#\">Vous Souhaitez Collaborer ? </a>
            <!-- <div class=\"btn--link-dr link--dr\">
              <a href=\"#\">En Savoir Plus </a>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class=\"section-propose-twoo-desktech\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"stats-container\">
          <div class=\"stat-box\">
            <span class=\"label\">Créée en</span>
            <span class=\"value\" data-target=\"2022\">0</span>
          </div>
          <div class=\"stat-box\">
            <span class=\"label\">Parc total de machines</span>
            <span class=\"value\" data-target=\"4000\">0</span>
          </div>
          <div class=\"stat-box\">
            <span class=\"label\">Nombre de clients</span>
            <span class=\"value\" data-target=\"300\">0</span>
          </div>
          <div class=\"stat-box\">
            <span class=\"label\">Techniciens déployés</span>
            <span class=\"value\" data-target=\"300\">0</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class=\"section-propose-four-desktech\">
    <div class=\"container\">
      <div class=\"row g-5\">



        <div class=\"col-md-4\">
          <div class=\"right--section-two-desktech\">
            <div class=\"title--primary\">
              <h2 class=\"text-white\">Pourquoi Choisir <span>DESKTECH</span> ?</h2>
            </div>
            <p class=\"text-white\">
              Desktech vous aide à optimiser votre parc d’impression, votre gestion documentaire, et votre environnement
              de travail, à travers des solutions fiables et minutieusement adaptées aux besoins précis de votre
              entreprise.
            </p>

          </div>
        </div>
        <div class=\"col-md-8\">
          <div class=\"row g-4\">
            <div class=\"col-md-6\">
              <div class=\"service-box\">
                <div class=\"service-title text-red\">
                  <span class=\"icon\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"34\" height=\"34\" viewBox=\"0 0 34 34\"
                      fill=\"none\">
                      <path d=\"M10.5996 16.9999L15.3996 21.7999L23.3996 13.7999\" stroke=\"#CE112D\" stroke-width=\"2\"
                        stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                      <path
                        d=\"M17 33C25.8365 33 33 25.8365 33 17C33 8.16344 25.8365 1 17 1C8.16344 1 1 8.16344 1 17C1 19.9142 1.77915 22.6466 3.14051 25L1.8 32.2L9 30.8595C11.3534 32.2208 14.0858 33 17 33Z\"
                        stroke=\"#CE112D\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                    </svg></span> Expertise solide
                </div>
                <p class=\"mt-2\">Desktech possède une solide expertise dans le domaine de l'impression et de la gestion
                  documentaire. Notre équipe qualifiée offre des solutions adaptées aux besoins de chaque entreprise.
                </p>
              </div>
            </div>
            <div class=\"col-md-6\">
              <div class=\"service-box\">
                <div class=\"service-title text-blue\">
                  <span class=\"icon\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"31\" height=\"32\" viewBox=\"0 0 31 32\"
                      fill=\"none\">
                      <path
                        d=\"M23.2833 30.6833H2.03065C1.46144 30.6833 1 30.2219 1 29.6526V12.8187C1 12.2495 1.46144 11.7881 2.03065 11.7881H6.78471C7.99148 11.7881 9.10974 11.1549 9.7306 10.1201L14.3864 2.36044C15.3911 0.686107 17.7573 0.526941 18.977 2.05168C19.552 2.77037 19.7373 3.7256 19.4728 4.60717L17.7166 10.4613C17.5182 11.1226 18.0134 11.7881 18.7038 11.7881H26.5626C28.8278 11.7881 30.4731 13.9421 29.877 16.1275L26.5976 28.1517C26.19 29.6464 24.8325 30.6833 23.2833 30.6833Z\"
                        stroke=\"#000849\" stroke-width=\"2\" stroke-linecap=\"round\" />
                      <path d=\"M7.01172 30.683V11.7878\" stroke=\"#000849\" stroke-width=\"2\" stroke-linecap=\"round\"
                        stroke-linejoin=\"round\" />
                    </svg></span> Qualité et fiabilité
                </div>
                <p class=\"mt-2\">Nous nous engageons à offrir des produits et services de qualité, avec une fiabilité
                  remarquable. Notre priorité est de garantir des solutions durables et performantes.</p>
              </div>
            </div>
            <div class=\"col-md-6\">
              <div class=\"service-box\">
                <div class=\"service-title text-blue\">
                  <span class=\"icon\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"34\" viewBox=\"0 0 32 34\"
                      fill=\"none\">
                      <path d=\"M30.9997 1L29.333 2.66667\" stroke=\"#000849\" stroke-width=\"2\" stroke-linecap=\"round\"
                        stroke-linejoin=\"round\" />
                      <path d=\"M1 1L2.66667 2.66667\" stroke=\"#000849\" stroke-width=\"2\" stroke-linecap=\"round\"
                        stroke-linejoin=\"round\" />
                      <path d=\"M30.9997 24.3333L29.333 22.6666\" stroke=\"#000849\" stroke-width=\"2\" stroke-linecap=\"round\"
                        stroke-linejoin=\"round\" />
                      <path d=\"M1 24.3333L2.66667 22.6666\" stroke=\"#000849\" stroke-width=\"2\" stroke-linecap=\"round\"
                        stroke-linejoin=\"round\" />
                      <path d=\"M11 27.6667H21\" stroke=\"#000849\" stroke-width=\"2\" stroke-linecap=\"round\"
                        stroke-linejoin=\"round\" />
                      <path d=\"M12.667 32.6667H19.3337\" stroke=\"#000849\" stroke-width=\"2\" stroke-linecap=\"round\"
                        stroke-linejoin=\"round\" />
                      <path
                        d=\"M15.9994 2.66675C9.33251 2.66675 5.91944 5.91724 5.99942 11.0001C6.0384 13.4782 6.83251 15.1668 8.49942 16.8334C10.1663 18.5001 10.9997 19.3334 10.9994 22.6668H20.9994C20.9997 19.3336 21.833 18.5001 23.4992 16.8336C25.1657 15.1669 25.9605 13.4782 25.9994 11.0001C26.0794 5.91724 22.6664 2.66675 15.9994 2.66675Z\"
                        stroke=\"#000849\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                    </svg></span> Innovation permanente
                </div>
                <p class=\"mt-2\">Chez Desktech, nous restons constamment à l'affût des dernières avancées technologiques
                  pour vous proposer des solutions innovantes en matière d'impression et de gestion documentaire.</p>
              </div>
            </div>
            <div class=\"col-md-6\">
              <div class=\"service-box\">
                <div class=\"service-title text-red\">
                  <span class=\"icon\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"34\" height=\"28\" viewBox=\"0 0 34 28\"
                      fill=\"none\">
                      <path
                        d=\"M4.2002 16.2V15.4C4.2002 7.44712 9.93096 1 17.0002 1C24.0695 1 29.8003 7.44712 29.8003 15.4V16.2\"
                        stroke=\"#CE112D\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                      <path
                        d=\"M1 22.5017V19.4986C1 18.0303 1.99935 16.7503 3.4239 16.3941L4.20001 16.2L6.20718 15.6983C6.81309 15.5469 7.40002 16.0052 7.40002 16.6296V25.3706C7.40002 25.9951 6.81309 26.4533 6.20718 26.302L3.4239 25.6061C1.99935 25.25 1 23.97 1 22.5017Z\"
                        stroke=\"#CE112D\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                      <path
                        d=\"M33.0006 22.5017V19.4986C33.0006 18.0303 32.0012 16.7503 30.5768 16.3941L29.8006 16.2L27.7934 15.6983C27.1875 15.5469 26.6006 16.0052 26.6006 16.6296V25.3706C26.6006 25.9951 27.1875 26.4533 27.7934 26.302L30.5768 25.6061C32.0012 25.25 33.0006 23.97 33.0006 22.5017Z\"
                        stroke=\"#CE112D\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                    </svg></span> Service client dévoué
                </div>
                <p class=\"mt-2\">Notre équipe dévouée met un point d'honneur à offrir un service client de qualité. Nous
                  sommes là pour répondre à vos besoins, résoudre vos problèmes et vous garantir une satisfaction
                  totale.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class=\"section-five-desktech section-propose-five-desktech\">
    <div class=\"img---five-desktech-bg\">
      <img src=\"/themes/custom/desktech/Desktech/assets/images/confaince.png\">
    </div>
    <div class=\"container-sc\">

      <div class=\"row\" id=\"ab--sc\">

        <div class=\"col-md-12\">
          <div class=\"right--section-two-desktech\">
            <div class=\"title--primary text-center\">
              <h2>Ils nous font <span>confiance</span></h2>
            </div>
            <p class=\"mb-3 mt-3 text-center\">Nous sommes fiers de la confiance que nos clients nous accordent chaque
              jour. Nous
              nous engageons à dépasser vos<br> attentes à chaque étape de notre collaboration.</p>


            <!-- <div class=\"btn--link-dr link--dr\">
              <a href=\"#\">En Savoir Plus </a>
            </div> -->
          </div>
        </div>
      </div>
      <div class=\"container mt-3 owl-carousel five-desktech-owl\">
        <div class=\"item\"><img src=\"/themes/custom/desktech/Desktech/assets/images/wl1.png\"></div>
        <div class=\"item\"><img src=\"/themes/custom/desktech/Desktech/assets/images/wl2.png\"></div>
        <div class=\"item\"><img src=\"/themes/custom/desktech/Desktech/assets/images/wl3.png\"></div>
        <div class=\"item\"><img src=\"/themes/custom/desktech/Desktech/assets/images/wl4.png\"></div>
        <div class=\"item\"><img src=\"/themes/custom/desktech/Desktech/assets/images/wl5.png\"></div>
        <div class=\"item\"><img src=\"/themes/custom/desktech/Desktech/assets/images/wl3.png\"></div>

      </div>
    </div>

  </section> #}
  <section class=\"section-propose-five-desktech\" id=\"contact--nous\">
    <div class=\"two--column-contact\">
      <div class=\"left--contact\">
        {# <div class=\"prtps\">
          <div class=\"title--primary\">
            <h2>Contactez-Nous</h2>
          </div>
          <p>
            N'hésitez pas à nous contacter pour toutes vos questions, besoins ou demandes. Notre équipe dévouée est
            prête
            à vous fournir les réponses et l'assistance dont vous avez besoin pour tirer le meilleur parti de nos
            services
            et solutions.
          </p>
          <div class=\"social--icon-contact\">
            <!--  -->
            <div class=\"item-icon-contact\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"51\" height=\"52\" viewBox=\"0 0 51 52\" fill=\"none\">
                <rect y=\"0.65332\" width=\"50.9125\" height=\"50.9125\" rx=\"25.4562\" fill=\"#CE112D\"/>
                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M35.4561 26.1094C35.4561 31.6322 30.9789 36.1094 25.4561 36.1094C19.9332 36.1094 15.4561 31.6322 15.4561 26.1094C15.4561 20.5865 19.9332 16.1094 25.4561 16.1094C30.9789 16.1094 35.4561 20.5865 35.4561 26.1094ZM25.4561 20.4844C25.4561 20.1392 25.1762 19.8594 24.8311 19.8594C24.4859 19.8594 24.2061 20.1392 24.2061 20.4844V27.3594C24.2061 27.5837 24.3262 27.7907 24.521 27.902L28.896 30.402C29.1957 30.5733 29.5775 30.4692 29.7487 30.1695C29.92 29.8698 29.8158 29.488 29.5161 29.3167L25.4561 26.9967V20.4844Z\" fill=\"white\"/>
              </svg>
              <div class=\"wrapper-text\">
                Horaires<br>Lun-Ven: 9H - 18H
              </div>
            </div>
            <!--  -->
            <div class=\"item-icon-contact\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"51\" height=\"51\" viewBox=\"0 0 51 51\" fill=\"none\">
                <rect y=\"0.065918\" width=\"50.9125\" height=\"50.9125\" rx=\"25.4562\" fill=\"#CE112D\" />
                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                  d=\"M17.812 16.1611C18.7397 15.2334 20.2704 15.3287 21.0758 16.3643L23.318 19.247C23.7294 19.776 23.8748 20.4648 23.7123 21.115L23.0282 23.8513C22.956 24.1402 23.0406 24.4458 23.2512 24.6564L26.3219 27.7271C26.5325 27.9377 26.8381 28.0223 27.1269 27.9501L29.8633 27.266C30.5134 27.1034 31.2023 27.2488 31.7313 27.6603L34.614 29.9024C35.6495 30.7078 35.7449 32.2386 34.8172 33.1663L33.5248 34.4587C32.6002 35.3833 31.2171 35.7893 29.9282 35.3362C26.728 34.211 23.724 32.369 21.1667 29.8116C18.6093 27.2542 16.7672 24.2503 15.6421 21.05C15.189 19.7611 15.595 18.3781 16.5196 17.4535L17.812 16.1611Z\"
                  fill=\"white\" />
              </svg>
              <div class=\"wrapper-text\">
                Horaires<br>Lun-Ven: 9H - 18H
              </div>
            </div>
            <!--  -->
            <div class=\"item-icon-contact\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"51\" height=\"51\" viewBox=\"0 0 51 51\" fill=\"none\">
                <rect y=\"0.065918\" width=\"50.9125\" height=\"50.9125\" rx=\"25.4562\" fill=\"#CE112D\" />
                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                  d=\"M17.812 16.1611C18.7397 15.2334 20.2704 15.3287 21.0758 16.3643L23.318 19.247C23.7294 19.776 23.8748 20.4648 23.7123 21.115L23.0282 23.8513C22.956 24.1402 23.0406 24.4458 23.2512 24.6564L26.3219 27.7271C26.5325 27.9377 26.8381 28.0223 27.1269 27.9501L29.8633 27.266C30.5134 27.1034 31.2023 27.2488 31.7313 27.6603L34.614 29.9024C35.6495 30.7078 35.7449 32.2386 34.8172 33.1663L33.5248 34.4587C32.6002 35.3833 31.2171 35.7893 29.9282 35.3362C26.728 34.211 23.724 32.369 21.1667 29.8116C18.6093 27.2542 16.7672 24.2503 15.6421 21.05C15.189 19.7611 15.595 18.3781 16.5196 17.4535L17.812 16.1611Z\"
                  fill=\"white\" />
              </svg>
              <div class=\"wrapper-text\">
                E-Mail<br>info@desktech.ma
              </div>
            </div>
            <!--  -->
            <div class=\"item-icon-contact\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"51\" height=\"51\" viewBox=\"0 0 51 51\" fill=\"none\">
                <rect y=\"0.065918\" width=\"50.9125\" height=\"50.9125\" rx=\"25.4562\" fill=\"#CE112D\" />
                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                  d=\"M17.812 16.1611C18.7397 15.2334 20.2704 15.3287 21.0758 16.3643L23.318 19.247C23.7294 19.776 23.8748 20.4648 23.7123 21.115L23.0282 23.8513C22.956 24.1402 23.0406 24.4458 23.2512 24.6564L26.3219 27.7271C26.5325 27.9377 26.8381 28.0223 27.1269 27.9501L29.8633 27.266C30.5134 27.1034 31.2023 27.2488 31.7313 27.6603L34.614 29.9024C35.6495 30.7078 35.7449 32.2386 34.8172 33.1663L33.5248 34.4587C32.6002 35.3833 31.2171 35.7893 29.9282 35.3362C26.728 34.211 23.724 32.369 21.1667 29.8116C18.6093 27.2542 16.7672 24.2503 15.6421 21.05C15.189 19.7611 15.595 18.3781 16.5196 17.4535L17.812 16.1611Z\"
                  fill=\"white\" />
              </svg>
              <div class=\"wrapper-text\">
                Addresse<br>Chemin Tertiaire Z.I Sidi Maarouf, 20520 Casablanca, Maroc
              </div>
            </div>
          </div>
        </div>
        <div class=\"svg__vertical_sc\">
          <div class=\"svg__vertical\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"69\" height=\"790\" viewBox=\"0 0 69 790\" fill=\"none\">
              <g clip-path=\"url(#clip0_4054_5)\">
              <path d=\"M1020 0H69.5959V160.926L0 211.085V578.915L69.5959 629.074V790H1020V0Z\" fill=\"#F8F8F8\"/>
              </g>
              <defs>
              <clipPath id=\"clip0_4054_5\">
              <rect width=\"69\" height=\"790\" fill=\"white\"/>
              </clipPath>
              </defs>
              </svg>
              <div class=\"frm__vertical\">

                Formulaire de Contact
            </div>
          </div>
        </div> #}

{{ drupal_entity('block','desktech_contactleft') }}
      </div>
      <div class=\"right--contact\">
        <div class=\"contact-webform\">
        {{ drupal_entity('block','desktech_webform') }}
          {# <form action=\"#\" method=\"post\">
            <div class=\"champs\">
              <input type=\"text\" id=\"nom\" name=\"nom\" placeholder=\"Votre Nom*\" required>
            </div>

            <div class=\"champs\">
              <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Votre E-Mail*\" required>
            </div>

            <div class=\"champs\">
              <input type=\"text\" id=\"societe\" name=\"societe\" placeholder=\"Votre Société\">
            </div>

            <div class=\"champs\">
              <input type=\"tel\" id=\"telephone\" name=\"telephone\" placeholder=\"Votre Tel.\">
            </div>

            <div class=\"champs\">
              <textarea id=\"message\" name=\"message\" placeholder=\"En quoi pouvons-nous vous aider?\"></textarea>
            </div>

            <div>
              <input type=\"submit\" value=\"Envoyer\">
            </div>
          </form> #}
        </div>

      </div>
    </div>
  </section>
  <section class=\"maps-img\">
      <img src=\"/themes/custom/desktech/Desktech/assets/images/maps_img.png\" >
  </section>
  <!-- Section Footer-->
", "themes/custom/desktech/templates/node/node--1.html.twig", "C:\\laragon\\www\\desktech_dr\\themes\\custom\\desktech\\templates\\node\\node--1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 3);
        static $functions = array("drupal_entity" => 3);

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
