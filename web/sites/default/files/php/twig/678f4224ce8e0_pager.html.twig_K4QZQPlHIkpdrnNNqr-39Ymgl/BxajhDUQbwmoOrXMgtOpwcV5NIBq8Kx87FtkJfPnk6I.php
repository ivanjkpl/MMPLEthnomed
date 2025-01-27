<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/contrib/adaptivetheme/at_core/templates/navigation/pager.html.twig */
class __TwigTemplate_d691dfafc823caaf8af546680207c301 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        if (($context["items"] ?? null)) {
            // line 33
            yield "<nav class=\"pager pager--full\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h3 id=\"pagination-heading\" class=\"visually-hidden\">";
            // line 34
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            yield "</h3>
    <div class=\"pager__items\">
      ";
            // line 37
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 37) || CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 37))) {
                // line 38
                yield "<ul class=\"pager__items__first-previous js-pager__items\">";
            }
            // line 41
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 41)) {
                // line 42
                yield "<li class=\"pager__item pager__item--first pager__item--text\">
            <a href=\"";
                // line 43
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 43), "href", [], "any", false, false, true, 43), "html", null, true);
                yield "\" class=\"pager__link\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                yield "\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 43), "attributes", [], "any", false, false, true, 43), "html", null, true);
                yield ">
              <span class=\"visually-hidden\">";
                // line 44
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                yield "</span>
              <span class=\"pager__first\" aria-hidden=\"true\">";
                // line 45
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 45), "text", [], "any", true, true, true, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 45), "text", [], "any", false, false, true, 45), t("« first"))) : (t("« first"))), "html", null, true);
                yield "</span>
            </a>
          </li>";
            }
            // line 50
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 50)) {
                // line 51
                yield "<li class=\"pager__item pager__item--previous pager__item--text\">
            <a href=\"";
                // line 52
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 52), "href", [], "any", false, false, true, 52), "html", null, true);
                yield "\" class=\"pager__link\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                yield "\" rel=\"prev\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 52), "attributes", [], "any", false, false, true, 52), "html", null, true);
                yield ">
              <span class=\"visually-hidden\">";
                // line 53
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                yield "</span>
              <span class=\"pager__previous\" aria-hidden=\"true\">";
                // line 54
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 54), "text", [], "any", true, true, true, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 54), "text", [], "any", false, false, true, 54), t("‹ previous"))) : (t("‹ previous"))), "html", null, true);
                yield "</span>
            </a>
          </li>";
            }
            // line 58
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 58) || CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 58))) {
                // line 59
                yield "</ul>";
            }
            // line 62
            yield "      <ul class=\"pager__items__num-pages js-pager__items\">";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 63));
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
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 65
                $context["classes"] = ["pager__item", "pager__item--num", ((CoreExtension::getAttribute($this->env, $this->source,                 // line 68
$context["loop"], "first", [], "any", false, false, true, 68)) ? ("pager__item--num-first") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                 // line 69
$context["loop"], "last", [], "any", false, false, true, 69)) ? ("pager__item--num-last") : ("")), (((                // line 70
($context["current"] ?? null) == $context["key"])) ? ("is-active") : (""))];
                // line 73
                yield "<li class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::join(($context["classes"] ?? null), " ")), "html", null, true);
                yield "\">";
                // line 74
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 75
                    $context["title"] = t("Current page");
                } else {
                    // line 77
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                }
                // line 79
                yield "<a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 79), "html", null, true);
                yield "\" class=\"pager__link";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" pager__link--is-active") : ("")));
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
                yield "\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 79), "html", null, true);
                yield ">
              <span class=\"visually-hidden\">";
                // line 80
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                yield "</span>
              ";
                // line 82
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 82) && CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 82))) {
                    // line 83
                    yield "<span class=\"pager__ellipsis pager__ellipsis--before\" role=\"presentation\">&hellip;</span>";
                }
                // line 85
                yield "<span class=\"pager__key\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
                yield "</span>
              ";
                // line 87
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 87) && CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 87))) {
                    // line 88
                    yield "<span class=\"pager__ellipsis pager__ellipsis--after\" role=\"presentation\">&hellip;</span>";
                }
                // line 90
                yield "</a>
          </li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "      </ul>
      ";
            // line 95
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 95) || CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 95))) {
                // line 96
                yield "<ul class=\"pager__items__next-last js-pager__items\">";
            }
            // line 99
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 99)) {
                // line 100
                yield "<li class=\"pager__item pager__item--next pager__item--text\">
            <a href=\"";
                // line 101
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 101), "href", [], "any", false, false, true, 101), "html", null, true);
                yield "\" class=\"pager__link\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                yield "\" rel=\"next\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 101), "attributes", [], "any", false, false, true, 101), "html", null, true);
                yield ">
              <span class=\"visually-hidden\">";
                // line 102
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                yield "</span>
              <span class=\"pager__next\" aria-hidden=\"true\">";
                // line 103
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 103), "text", [], "any", true, true, true, 103)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 103), "text", [], "any", false, false, true, 103), t("next ›"))) : (t("next ›"))), "html", null, true);
                yield "</span>
            </a>
          </li>";
            }
            // line 108
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 108)) {
                // line 109
                yield "<li class=\"pager__item pager__item--last pager__item--text\">
            <a href=\"";
                // line 110
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 110), "href", [], "any", false, false, true, 110), "html", null, true);
                yield "\" class=\"pager__link\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                yield "\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 110), "attributes", [], "any", false, false, true, 110), "html", null, true);
                yield ">
              <span class=\"visually-hidden\">";
                // line 111
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                yield "</span>
              <span class=\"pager__last\" aria-hidden=\"true\">";
                // line 112
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 112), "text", [], "any", true, true, true, 112)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 112), "text", [], "any", false, false, true, 112), t("last »"))) : (t("last »"))), "html", null, true);
                yield "</span>
            </a>
          </li>";
            }
            // line 116
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 116) || CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 116))) {
                // line 117
                yield "</ul>";
            }
            // line 119
            yield "</div>
  </nav>";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["items", "loop", "current", "ellipses"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/adaptivetheme/at_core/templates/navigation/pager.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  251 => 119,  248 => 117,  246 => 116,  240 => 112,  236 => 111,  228 => 110,  225 => 109,  223 => 108,  217 => 103,  213 => 102,  205 => 101,  202 => 100,  200 => 99,  197 => 96,  195 => 95,  192 => 93,  176 => 90,  173 => 88,  171 => 87,  166 => 85,  163 => 83,  161 => 82,  157 => 80,  146 => 79,  143 => 77,  140 => 75,  138 => 74,  134 => 73,  132 => 70,  131 => 69,  130 => 68,  129 => 65,  112 => 63,  110 => 62,  107 => 59,  105 => 58,  99 => 54,  95 => 53,  87 => 52,  84 => 51,  82 => 50,  76 => 45,  72 => 44,  64 => 43,  61 => 42,  59 => 41,  56 => 38,  54 => 37,  49 => 34,  46 => 33,  44 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/adaptivetheme/at_core/templates/navigation/pager.html.twig", "C:\\xampp\\htdocs\\mmpl\\web\\themes\\contrib\\adaptivetheme\\at_core\\templates\\navigation\\pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 32, "for" => 63, "set" => 65);
        static $filters = array("t" => 34, "escape" => 43, "default" => 45, "trim" => 73, "join" => 73);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['t', 'escape', 'default', 'trim', 'join'],
                [],
                $this->source
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
