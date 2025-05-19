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

/* themes/custom/desktech/templates/view/imprimantes_multifonctions/views-view--imprimantes-multifonctions--page-1.html.twig */
class __TwigTemplate_9811ca0d22db2454b7f02bf48f817f69 extends Template
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
        echo "  <!-- Slider Section -->
  <section class=\"banner_tp\">
    <div class=\"banner\">
      <img src=\"/themes/custom/desktech/Desktech/assets/images/serv-pr.png\">
      <!-- <div class=\"container\">
        <div class=\"breadcrumb-sx\">
          <span>Qui Sommes-Nous ?</span>
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"834\" height=\"106\" viewBox=\"0 0 834 106\" fill=\"none\">
            <path d=\"M834 106H-40V0H687L834 106Z\" fill=\"white\" />
            <path d=\"M834 106H-40V0H687L834 106Z\" stroke=\"#000849\" />
          </svg>
        </div>
      </div> -->
    </div>
  </section>



  <section class=\"section-one-desktech-imprimantes-multifonctions\">
    <div class=\"container\">
      <div class=\"row\">

        <div class=\"col-md-12\">
          <div class=\"right--section-two-desktech\">
            <div class=\"title--primary\">
              <h2>";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Imprimantes"));
        echo " & <br><span>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Multifonctions"));
        echo "</span></h2>
              <p>";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("La gamme d'imprimantes multifonctions de Ricoh propose une solution complète aux entreprises de toutes
                tailles, avec des fonctionnalités de sécurité avancées pour protéger les données sensibles et des
                solutions écoénergétiques. Grâce à une interface conviviale et des technologies intelligentes, ces
                imprimantes facilitent la transition vers un environnement de travail numérique, améliorant la
                productivité et les flux de travail. Explorez notre gamme d'imprimantes tout-en-un pour un environnement
                de travail plus sûr, durable et efficace."));
        // line 32
        echo "</p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!--  -->
  <section class=\"filter-imprimantes-multifonctions\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"card-filter-all\">
          <div class=\"title--filter\">
            <span>Format Papier</span>
          </div>
          <div class=\"searhing-checkbox\">
            <div class=\"item--checkbox\">
              <h6>Type</h6>
              <div class=\"checkbox-container\">
                <label class=\"checkbox-wrapper\">
                  <input type=\"checkbox\" name=\"category\" value=\"mfp\">
                  MFP
                </label>
                <label class=\"checkbox-wrapper\">
                  <input type=\"checkbox\" name=\"category\" value=\"copieurs\">
                  Copieurs
                </label>
                <label class=\"checkbox-wrapper\">
                  <input type=\"checkbox\" name=\"category\" value=\"scanners\" checked>
                  Scanners
                </label>
              </div>
            </div>
            <!--  -->
            <div class=\"item--checkbox\">
              <h6>Format Papier</h6>
              <div class=\"checkbox-container\">
                <label class=\"checkbox-wrapper\">
                  <input type=\"checkbox\" name=\"category\" value=\"mfp\">
                  MFP
                </label>
                <label class=\"checkbox-wrapper\">
                  <input type=\"checkbox\" name=\"category\" value=\"copieurs\">
                  Copieurs
                </label>
                <label class=\"checkbox-wrapper\">
                  <input type=\"checkbox\" name=\"category\" value=\"scanners\" checked>
                  Scanners
                </label>
              </div>
            </div>
             <!--  -->
             <div class=\"item--checkbox\">
              <h6>Impression</h6>
              <div class=\"checkbox-container\">
                <label class=\"checkbox-wrapper\">
                  <input type=\"checkbox\" name=\"category\" value=\"mfp\">
                  MFP
                </label>
                <label class=\"checkbox-wrapper\">
                  <input type=\"checkbox\" name=\"category\" value=\"copieurs\">
                  Copieurs
                </label>
                <label class=\"checkbox-wrapper\">
                  <input type=\"checkbox\" name=\"category\" value=\"scanners\" checked>
                  Scanners
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--List -->
  <section class=\"lists--all-imprimantes-multifonctions\">
    <div class=\"container\">
      <div class=\"row\">
          ";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 112, $this->source), "html", null, true);
        echo "
      </div>
    </div>
  </section>
  <section class=\"section-five-produits-et-services-desktech\">
    <div class=\"container\">
      <div class=\"row\">

        <div class=\"col-md-6\">
          <div class=\"right--section-two-desktech\">
            <div class=\"title--primary\">
              <h5 class=\"mb-3 text-white\">Vous savez ce que vous voulez ?</h5>
              <h2 class=\"text-white\">Demandez un devis personnalisé <span>DESKTECH</span></h2>
            </div>
            <div class=\"contact-produits-et-services-desktech\">
              <form action=\"#\" method=\"post\">
                <div class=\"champs\">
                  <input type=\"text\" id=\"nom\" name=\"nom\" placeholder=\"Votre nom*\" required=\"\">
                </div>

                <div class=\"champs\">
                  <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Votre e-mail\" required=\"\">
                </div>

                <div class=\"champs\">
                  <input type=\"text\" id=\"societe\" name=\"societe\" placeholder=\"Votre Société\">
                </div>


                <div class=\"champs\">
                  <textarea id=\"message\" name=\"message\" placeholder=\"Décrivez-nous votre besoin...\"></textarea>
                </div>

                <div>
                  <input type=\"submit\" value=\"Envoyer\">
                </div>
              </form>
            </div>
            <!-- <div class=\"btn--link-dr link--dr\">
              <a href=\"#\">En Savoir Plus </a>
            </div> -->
          </div>
        </div>
        <div class=\"col-md-6\">
          <div class=\"left--section-two-desktech\">
            <div class=\"one--img-sc-four\">
              <img src=\"/themes/custom/desktech/Desktech/assets/images/n-cnt.png\">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section Footer-->
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["rows"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/desktech/templates/view/imprimantes_multifonctions/views-view--imprimantes-multifonctions--page-1.html.twig";
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
        return array (  161 => 112,  79 => 32,  72 => 27,  66 => 26,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  <!-- Slider Section -->
  <section class=\"banner_tp\">
    <div class=\"banner\">
      <img src=\"/themes/custom/desktech/Desktech/assets/images/serv-pr.png\">
      <!-- <div class=\"container\">
        <div class=\"breadcrumb-sx\">
          <span>Qui Sommes-Nous ?</span>
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"834\" height=\"106\" viewBox=\"0 0 834 106\" fill=\"none\">
            <path d=\"M834 106H-40V0H687L834 106Z\" fill=\"white\" />
            <path d=\"M834 106H-40V0H687L834 106Z\" stroke=\"#000849\" />
          </svg>
        </div>
      </div> -->
    </div>
  </section>



  <section class=\"section-one-desktech-imprimantes-multifonctions\">
    <div class=\"container\">
      <div class=\"row\">

        <div class=\"col-md-12\">
          <div class=\"right--section-two-desktech\">
            <div class=\"title--primary\">
              <h2>{{'Imprimantes'|t}} & <br><span>{{'Multifonctions'|t}}</span></h2>
              <p>{{\"La gamme d'imprimantes multifonctions de Ricoh propose une solution complète aux entreprises de toutes
                tailles, avec des fonctionnalités de sécurité avancées pour protéger les données sensibles et des
                solutions écoénergétiques. Grâce à une interface conviviale et des technologies intelligentes, ces
                imprimantes facilitent la transition vers un environnement de travail numérique, améliorant la
                productivité et les flux de travail. Explorez notre gamme d'imprimantes tout-en-un pour un environnement
                de travail plus sûr, durable et efficace.\" |t}}</p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!--  -->
  <section class=\"filter-imprimantes-multifonctions\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"card-filter-all\">
          <div class=\"title--filter\">
            <span>Format Papier</span>
          </div>
          <div class=\"searhing-checkbox\">
            <div class=\"item--checkbox\">
              <h6>Type</h6>
              <div class=\"checkbox-container\">
                <label class=\"checkbox-wrapper\">
                  <input type=\"checkbox\" name=\"category\" value=\"mfp\">
                  MFP
                </label>
                <label class=\"checkbox-wrapper\">
                  <input type=\"checkbox\" name=\"category\" value=\"copieurs\">
                  Copieurs
                </label>
                <label class=\"checkbox-wrapper\">
                  <input type=\"checkbox\" name=\"category\" value=\"scanners\" checked>
                  Scanners
                </label>
              </div>
            </div>
            <!--  -->
            <div class=\"item--checkbox\">
              <h6>Format Papier</h6>
              <div class=\"checkbox-container\">
                <label class=\"checkbox-wrapper\">
                  <input type=\"checkbox\" name=\"category\" value=\"mfp\">
                  MFP
                </label>
                <label class=\"checkbox-wrapper\">
                  <input type=\"checkbox\" name=\"category\" value=\"copieurs\">
                  Copieurs
                </label>
                <label class=\"checkbox-wrapper\">
                  <input type=\"checkbox\" name=\"category\" value=\"scanners\" checked>
                  Scanners
                </label>
              </div>
            </div>
             <!--  -->
             <div class=\"item--checkbox\">
              <h6>Impression</h6>
              <div class=\"checkbox-container\">
                <label class=\"checkbox-wrapper\">
                  <input type=\"checkbox\" name=\"category\" value=\"mfp\">
                  MFP
                </label>
                <label class=\"checkbox-wrapper\">
                  <input type=\"checkbox\" name=\"category\" value=\"copieurs\">
                  Copieurs
                </label>
                <label class=\"checkbox-wrapper\">
                  <input type=\"checkbox\" name=\"category\" value=\"scanners\" checked>
                  Scanners
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--List -->
  <section class=\"lists--all-imprimantes-multifonctions\">
    <div class=\"container\">
      <div class=\"row\">
          {{rows}}
      </div>
    </div>
  </section>
  <section class=\"section-five-produits-et-services-desktech\">
    <div class=\"container\">
      <div class=\"row\">

        <div class=\"col-md-6\">
          <div class=\"right--section-two-desktech\">
            <div class=\"title--primary\">
              <h5 class=\"mb-3 text-white\">Vous savez ce que vous voulez ?</h5>
              <h2 class=\"text-white\">Demandez un devis personnalisé <span>DESKTECH</span></h2>
            </div>
            <div class=\"contact-produits-et-services-desktech\">
              <form action=\"#\" method=\"post\">
                <div class=\"champs\">
                  <input type=\"text\" id=\"nom\" name=\"nom\" placeholder=\"Votre nom*\" required=\"\">
                </div>

                <div class=\"champs\">
                  <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Votre e-mail\" required=\"\">
                </div>

                <div class=\"champs\">
                  <input type=\"text\" id=\"societe\" name=\"societe\" placeholder=\"Votre Société\">
                </div>


                <div class=\"champs\">
                  <textarea id=\"message\" name=\"message\" placeholder=\"Décrivez-nous votre besoin...\"></textarea>
                </div>

                <div>
                  <input type=\"submit\" value=\"Envoyer\">
                </div>
              </form>
            </div>
            <!-- <div class=\"btn--link-dr link--dr\">
              <a href=\"#\">En Savoir Plus </a>
            </div> -->
          </div>
        </div>
        <div class=\"col-md-6\">
          <div class=\"left--section-two-desktech\">
            <div class=\"one--img-sc-four\">
              <img src=\"/themes/custom/desktech/Desktech/assets/images/n-cnt.png\">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section Footer-->
", "themes/custom/desktech/templates/view/imprimantes_multifonctions/views-view--imprimantes-multifonctions--page-1.html.twig", "C:\\laragon\\www\\desktech_dr\\themes\\custom\\desktech\\templates\\view\\imprimantes_multifonctions\\views-view--imprimantes-multifonctions--page-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("t" => 26, "escape" => 112);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['t', 'escape'],
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
