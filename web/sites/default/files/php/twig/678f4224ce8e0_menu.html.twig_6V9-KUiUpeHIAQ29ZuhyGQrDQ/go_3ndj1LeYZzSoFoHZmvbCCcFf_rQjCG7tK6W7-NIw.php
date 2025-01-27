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

/* themes/contrib/adaptivetheme/at_core/templates/navigation/menu.html.twig */
class __TwigTemplate_2da4c47ef586be4178925728f052bca6 extends Template
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
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 26, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null)]));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_name", "menu_level"]);        yield from [];
    }

    // line 28
    public function macro_menu_links($items = null, $attributes = null, $menu_level = null, $menu_name = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "attributes" => $attributes,
            "menu_level" => $menu_level,
            "menu_name" => $menu_name,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 29
            $macros["menus"] = $this;
            // line 31
            if (($context["items"] ?? null)) {
                // line 32
                yield "
    <ul";
                // line 34
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 35
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [["menu", "odd", "menu-level-1", ((($context["menu_name"] ?? null)) ? (("menu-name--" . \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null)))) : (""))]], "method", false, false, true, 35), "html", null, true);
                } else {
                    // line 37
                    yield "      class=\"menu is-child ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::cycle(["odd", "even"], ($context["menu_level"] ?? null)), "html", null, true);
                    yield " ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ("menu-level-" . (($context["menu_level"] ?? null) + 1)), "html", null, true);
                    yield "\"";
                }
                // line 39
                yield ">";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 43
                    $context["is_parent"] = false;
                    // line 44
                    yield "      ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 44) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 44))) {
                        // line 45
                        yield "        ";
                        $context["is_parent"] = true;
                        // line 46
                        yield "      ";
                    }
                    // line 47
                    yield "
      ";
                    // line 49
                    yield "      ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 49), "isExternal", [], "method", false, false, true, 49) == false) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 49), "isRouted", [], "method", false, false, true, 49) == true))) {
                        // line 50
                        yield "        ";
                        $context["nolink"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 50), "getRouteName", [], "method", false, false, true, 50) == "<nolink>")) ? (true) : (false));
                        // line 51
                        yield "      ";
                    }
                    // line 52
                    yield "
      ";
                    // line 53
                    $context["item_classes"] = ["menu__item", ((                    // line 55
($context["is_parent"] ?? null)) ? ("is-parent") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 56
$context["item"], "is_expanded", [], "any", false, false, true, 56)) ? ("menu__item--expanded") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 57
$context["item"], "is_collapsed", [], "any", false, false, true, 57)) ? ("menu__item--collapsed") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 58
$context["item"], "in_active_trail", [], "any", false, false, true, 58)) ? ("menu__item--active-trail") : ("")), ((                    // line 59
($context["nolink"] ?? null)) ? ("menu__item--no-link") : ("")), ("menu__item-title--" . \Drupal\Component\Utility\Html::getClass($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source,                     // line 60
$context["item"], "title", [], "any", false, false, true, 60))))];
                    // line 63
                    yield "
      ";
                    // line 65
                    yield "      <li";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 65), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 65), "role"), "html", null, true);
                    yield " id=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((("menu-name--" . ($context["menu_name"] ?? null)) . "__") . \Drupal\Component\Utility\Html::getId($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 65)))), "html", null, true);
                    yield "\">

        <span class=\"menu__link--wrapper";
                    // line 67
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["is_parent"] ?? null)) ? (" is-parent__wrapper") : ("")));
                    yield "\">
          ";
                    // line 68
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source,                     // line 70
$context["item"], "title", [], "any", false, false, true, 70), CoreExtension::getAttribute($this->env, $this->source,                     // line 71
$context["item"], "url", [], "any", false, false, true, 71), $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 72
$context["item"], "attributes", [], "any", false, false, true, 72), "removeClass", [($context["item_classes"] ?? null)], "method", false, false, true, 72), "addClass", ["menu__link"], "method", false, false, true, 72), "id", "role")), "html", null, true);
                    // line 74
                    yield "
        </span>

        ";
                    // line 77
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 77)) {
                        // line 78
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 78, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 78), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["menu_name"] ?? null)]));
                        yield "
        ";
                    }
                    // line 80
                    yield "
      </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                yield "</ul>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/adaptivetheme/at_core/templates/navigation/menu.html.twig";
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
        return array (  169 => 85,  162 => 80,  156 => 78,  154 => 77,  149 => 74,  147 => 72,  146 => 71,  145 => 70,  144 => 68,  140 => 67,  132 => 65,  129 => 63,  127 => 60,  126 => 59,  125 => 58,  124 => 57,  123 => 56,  122 => 55,  121 => 53,  118 => 52,  115 => 51,  112 => 50,  109 => 49,  106 => 47,  103 => 46,  100 => 45,  97 => 44,  95 => 43,  91 => 41,  89 => 39,  82 => 37,  79 => 35,  77 => 34,  74 => 32,  72 => 31,  70 => 29,  55 => 28,  46 => 26,  44 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/adaptivetheme/at_core/templates/navigation/menu.html.twig", "C:\\xampp\\htdocs\\mmpl\\web\\themes\\contrib\\adaptivetheme\\at_core\\templates\\navigation\\menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "macro" => 28, "if" => 31, "for" => 41, "set" => 43);
        static $filters = array("escape" => 35, "clean_class" => 35, "render" => 60, "without" => 65, "clean_id" => 65);
        static $functions = array("cycle" => 37, "link" => 69);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 'clean_class', 'render', 'without', 'clean_id'],
                ['cycle', 'link'],
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
