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

/* themes/custom/desktech/templates/system/pager.html.twig */
class __TwigTemplate_7999f0d68673c1fa5096b6c1a55b9def extends Template
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
        // line 34
        echo "

";
        // line 36
        if (($context["items"] ?? null)) {
            // line 37
            echo "  <nav class=\"mt-4 paginations-list text-center\">
    <div class=\"paginations-wp\">
      <div class=\"pagination-wp-lists\">
        <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 40, $this->source), "html", null, true);
            echo "\">
          <ul class=\"pagination-success\">
            ";
            // line 43
            echo "            ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 43))) {
                // line 44
                echo "              ";
                $context["pageNumber"] = (twig_last($this->env, twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 44), "href", [], "any", false, false, true, 44), 44, $this->source), "=")) + 1);
                // line 45
                echo "              ";
                if (!twig_in_filter(($context["pageNumber"] ?? null), twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 45)))) {
                    // line 46
                    echo "                ";
                    if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 46), "is_active", [], "any", false, false, true, 46)) {
                        // line 47
                        echo "                  <li class=\"page-item\">
                    <a href=\"";
                        // line 48
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 48), "href", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                        echo "\" title=\"Go to page ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pageNumber"] ?? null), 48, $this->source), "html", null, true);
                        echo "\">
                      <span class=\"visually-hidden\">Page</span>";
                        // line 49
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pageNumber"] ?? null), 49, $this->source), "html", null, true);
                        echo "
                    </a>
                  </li>
                ";
                    }
                    // line 53
                    echo "              ";
                }
                // line 54
                echo "            ";
            }
            // line 55
            echo "
            ";
            // line 57
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 57)) {
                // line 58
                echo "              <li class=\"page-item\">
                <span class=\"page-link dots\">...</span>
              </li>
            ";
            }
            // line 62
            echo "
            ";
            // line 64
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 64));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 65
                echo "              <li class=\"page-item";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" active") : ("")));
                echo "\">
                <a href=\"";
                // line 66
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                echo "\" title=\"";
                (((($context["current"] ?? null) == $context["key"])) ? (print ("Page courante")) : (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ("Go to page " . $context["key"]), "html", null, true))));
                echo "\">
                  ";
                // line 67
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 68
                    echo "                    <span class=\"visually-hidden\">Page courante</span>
                  ";
                } else {
                    // line 70
                    echo "                    <span class=\"visually-hidden\">Page</span>
                  ";
                }
                // line 72
                echo "                  ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 72, $this->source), "html", null, true);
                echo "
                </a>
              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "
            ";
            // line 78
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 78)) {
                // line 79
                echo "              <li class=\"page-item\">
                <span class=\"page-link dots\">...</span>
              </li>
            ";
            }
            // line 83
            echo "
            ";
            // line 85
            echo "            ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 85))) {
                // line 86
                echo "              ";
                $context["pageNumber"] = (twig_last($this->env, twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 86), "href", [], "any", false, false, true, 86), 86, $this->source), "=")) + 1);
                // line 87
                echo "              ";
                if (!twig_in_filter(($context["pageNumber"] ?? null), twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 87)))) {
                    // line 88
                    echo "                ";
                    if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 88), "is_active", [], "any", false, false, true, 88)) {
                        // line 89
                        echo "                  <li class=\"page-item\">
                    <a href=\"";
                        // line 90
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 90), "href", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                        echo "\" title=\"Go to page ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pageNumber"] ?? null), 90, $this->source), "html", null, true);
                        echo "\">
                      <span class=\"visually-hidden\">Page</span>";
                        // line 91
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pageNumber"] ?? null), 91, $this->source), "html", null, true);
                        echo "
                    </a>
                  </li>
                ";
                    }
                    // line 95
                    echo "              ";
                }
                // line 96
                echo "            ";
            }
            // line 97
            echo "          </ul>
        </nav>
      </div>
    </div>
  </nav>
";
        }
        // line 103
        echo "
";
        // line 121
        echo "


";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["items", "heading_id", "ellipses", "current"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/desktech/templates/system/pager.html.twig";
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
        return array (  201 => 121,  198 => 103,  190 => 97,  187 => 96,  184 => 95,  177 => 91,  171 => 90,  168 => 89,  165 => 88,  162 => 87,  159 => 86,  156 => 85,  153 => 83,  147 => 79,  144 => 78,  141 => 76,  130 => 72,  126 => 70,  122 => 68,  120 => 67,  114 => 66,  109 => 65,  104 => 64,  101 => 62,  95 => 58,  92 => 57,  89 => 55,  86 => 54,  83 => 53,  76 => 49,  70 => 48,  67 => 47,  64 => 46,  61 => 45,  58 => 44,  55 => 43,  50 => 40,  45 => 37,  43 => 36,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a pager.
 *
 * Available variables:
 * - heading_id: Pagination heading ID.
 * - items: List of pager items.
 *   The list is keyed by the following elements:
 *   - first: Item for the first page; not present on the first page of results.
 *   - previous: Item for the previous page; not present on the first page
 *     of results.
 *   - next: Item for the next page; not present on the last page of results.
 *   - last: Item for the last page; not present on the last page of results.
 *   - pages: List of pages, keyed by page number.
 *   Sub-sub elements:
 *   items.first, items.previous, items.next, items.last, and each item inside
 *   items.pages contain the following elements:
 *   - href: URL with appropriate query parameters for the item.
 *   - attributes: A keyed list of HTML attributes for the item.
 *   - text: The visible text used for the item link, such as \"‹ Previous\"
 *     or \"Next ›\".
 * - current: The page number of the current page.
 * - ellipses: If there are more pages than the quantity allows, then an
 *   ellipsis before or after the listed pages may be present.
 *   - previous: Present if the currently visible list of pages does not start
 *     at the first page.
 *   - next: Present if the visible list of pages ends before the last page.
 *
 * @see template_preprocess_pager()
 *
 */
#}


{% if items %}
  <nav class=\"mt-4 paginations-list text-center\">
    <div class=\"paginations-wp\">
      <div class=\"pagination-wp-lists\">
        <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"{{ heading_id }}\">
          <ul class=\"pagination-success\">
            {# Print first item if we are not on the first page and it's not already included in the pages list. #}
            {% if items.first is not empty %}
              {% set pageNumber = items.first.href|split('=')|last + 1 %}
              {% if pageNumber not in items.pages|keys %}
                {% if not items.first.is_active %}
                  <li class=\"page-item\">
                    <a href=\"{{ items.first.href }}\" title=\"Go to page {{ pageNumber }}\">
                      <span class=\"visually-hidden\">Page</span>{{ pageNumber }}
                    </a>
                  </li>
                {% endif %}
              {% endif %}
            {% endif %}

            {# Add an ellipsis if there are further previous pages. #}
            {% if ellipses.previous %}
              <li class=\"page-item\">
                <span class=\"page-link dots\">...</span>
              </li>
            {% endif %}

            {# Generate the actual pager items. #}
            {% for key, item in items.pages %}
              <li class=\"page-item{{ current == key ? ' active' : '' }}\">
                <a href=\"{{ item.href }}\" title=\"{{ current == key ? 'Page courante' : 'Go to page ' ~ key }}\">
                  {% if current == key %}
                    <span class=\"visually-hidden\">Page courante</span>
                  {% else %}
                    <span class=\"visually-hidden\">Page</span>
                  {% endif %}
                  {{ key }}
                </a>
              </li>
            {% endfor %}

            {# Add an ellipsis if there are further next pages. #}
            {% if ellipses.next %}
              <li class=\"page-item\">
                <span class=\"page-link dots\">...</span>
              </li>
            {% endif %}

            {# Print last item if we are not on the last page and it's not already included in the pages list. #}
            {% if items.last is not empty %}
              {% set pageNumber = items.last.href|split('=')|last + 1 %}
              {% if pageNumber not in items.pages|keys %}
                {% if not items.last.is_active %}
                  <li class=\"page-item\">
                    <a href=\"{{ items.last.href }}\" title=\"Go to page {{ pageNumber }}\">
                      <span class=\"visually-hidden\">Page</span>{{ pageNumber }}
                    </a>
                  </li>
                {% endif %}
              {% endif %}
            {% endif %}
          </ul>
        </nav>
      </div>
    </div>
  </nav>
{% endif %}

{# {% if items %}
  <!-- P A G I N A T I O N -->
  <nav aria-label=\"navigation\" aria-labelledby=\"{{ heading_id }}\">
    <ul class=\"pagination mb-0\" data-aos=\"fade-up\">
      {% for key, item in items.pages %}
        {% if key <= 5 %}
          <li class=\"page-item {{ current == key ? ' active' : '' }}\"><a class=\"page-link\" href=\"{{ item.href }}\">{{ key }}</a></li>
        {% elseif key == 6 %}
          <li class=\"page-item\"><span class=\"page-link dots\">...</span></li>
        {% elseif key == loop.last %}
          <li class=\"page-item {{ current == key ? ' active' : '' }}\"><a class=\"page-link\" href=\"{{ item.href }}\">{{ key }}</a></li>
        {% endif %}
      {% endfor %}
    </ul>
  </nav>
  <!-- END.P A G I N A T I O N -->
{% endif %} #}



", "themes/custom/desktech/templates/system/pager.html.twig", "C:\\laragon\\www\\desktech_dr\\themes\\custom\\desktech\\templates\\system\\pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 36, "set" => 44, "for" => 64);
        static $filters = array("escape" => 40, "last" => 44, "split" => 44, "keys" => 45);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'last', 'split', 'keys'],
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
