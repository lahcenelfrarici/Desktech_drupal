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

/* themes/custom/desktech/templates/navigation/menu--main.html.twig */
class __TwigTemplate_1efb0df01fd05479cae26b7084ccf7be extends Template
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
        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        echo "
";
        // line 26
        echo "<ul class=\"navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll\" style=\"--bs-scroll-height: 100px;\">
  ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 27, $context, $this->getSourceContext()));
        echo "
</ul>

";
        // line 61
        echo "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "loop", "menu_level"]);    }

    // line 30
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 31
            echo "  ";
            $macros["menus"] = $this;
            // line 32
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 33
                echo "    ";
                $context["has_children"] =  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 33));
                // line 34
                echo "    <li class=\"nav-item";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["has_children"] ?? null)) ? (" dropdown") : ("")));
                echo "\">
      <a
        href=\"";
                // line 36
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "\"
        class=\"nav-link";
                // line 37
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["has_children"] ?? null)) ? (" dropdown-toggle") : ("")));
                echo "\"
        ";
                // line 38
                if (($context["has_children"] ?? null)) {
                    // line 39
                    echo "          id=\"navbarScrollingDropdown-";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo "\"
          role=\"button\"
          data-bs-toggle=\"dropdown\"
          aria-expanded=\"false\"
        ";
                }
                // line 44
                echo "      >
        ";
                // line 45
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                echo "
        ";
                // line 46
                if (($context["has_children"] ?? null)) {
                    // line 47
                    echo "          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"11\" height=\"8\" viewBox=\"0 0 11 8\" fill=\"none\">
            <path d=\"M1.2832 2L5.4082 6L9.5332 2\" stroke=\"#000849\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
          </svg>
        ";
                }
                // line 51
                echo "      </a>

      ";
                // line 53
                if (($context["has_children"] ?? null)) {
                    // line 54
                    echo "        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarScrollingDropdown-";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                    echo "\">
          ";
                    // line 55
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 55), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 55, $context, $this->getSourceContext()));
                    echo "
        </ul>
      ";
                }
                // line 58
                echo "    </li>
  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/desktech/templates/navigation/menu--main.html.twig";
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
        return array (  155 => 58,  149 => 55,  144 => 54,  142 => 53,  138 => 51,  132 => 47,  130 => 46,  126 => 45,  123 => 44,  114 => 39,  112 => 38,  108 => 37,  104 => 36,  98 => 34,  95 => 33,  77 => 32,  74 => 31,  59 => 30,  53 => 61,  47 => 27,  44 => 26,  41 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link URL, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 *
 * @ingroup themeable
 */
#}
{% import _self as menus %}

{# Render the menu with Bootstrap wrapper and custom classes #}
<ul class=\"navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll\" style=\"--bs-scroll-height: 100px;\">
  {{ menus.menu_links(items, attributes, 0) }}
</ul>

{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
  {% for item in items %}
    {% set has_children = item.below is not empty %}
    <li class=\"nav-item{{ has_children ? ' dropdown' : '' }}\">
      <a
        href=\"{{ item.url }}\"
        class=\"nav-link{{ has_children ? ' dropdown-toggle' : '' }}\"
        {% if has_children %}
          id=\"navbarScrollingDropdown-{{ loop.index }}\"
          role=\"button\"
          data-bs-toggle=\"dropdown\"
          aria-expanded=\"false\"
        {% endif %}
      >
        {{ item.title }}
        {% if has_children %}
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"11\" height=\"8\" viewBox=\"0 0 11 8\" fill=\"none\">
            <path d=\"M1.2832 2L5.4082 6L9.5332 2\" stroke=\"#000849\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
          </svg>
        {% endif %}
      </a>

      {% if has_children %}
        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarScrollingDropdown-{{ loop.index }}\">
          {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
        </ul>
      {% endif %}
    </li>
  {% endfor %}
{% endmacro %}

", "themes/custom/desktech/templates/navigation/menu--main.html.twig", "C:\\laragon\\www\\desktech_dr\\themes\\custom\\desktech\\templates\\navigation\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "macro" => 30, "for" => 32, "set" => 33, "if" => 38);
        static $filters = array("escape" => 36);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'for', 'set', 'if'],
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
