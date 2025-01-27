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

/* themes/contrib/adaptivetheme/at_core/templates/views/views-view-table.html.twig */
class __TwigTemplate_57d09b8a655d8e81dce41efce1eeb6c3 extends Template
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
        // line 34
        $context["classes"] = ["table", "views-table", "views-view-table", ("cols-" . Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 38
($context["header"] ?? null))), ((        // line 39
($context["responsive"] ?? null)) ? ("responsive-enabled") : ("")), ((        // line 40
($context["sticky"] ?? null)) ? ("sticky-enabled") : (""))];
        // line 43
        yield "<table";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 43), "html", null, true);
        yield ">
  ";
        // line 44
        if (($context["caption_needed"] ?? null)) {
            // line 45
            yield "    ";
            if (($context["caption"] ?? null)) {
                // line 46
                yield "\t  <caption class=\"table__caption caption\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["caption"] ?? null), "html", null, true);
                yield "</caption>
    ";
            } else {
                // line 48
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
                yield "
    ";
            }
            // line 50
            yield "    ";
            if (((!Twig\Extension\CoreExtension::testEmpty(($context["summary"] ?? null))) || (!Twig\Extension\CoreExtension::testEmpty(($context["description"] ?? null))))) {
                // line 51
                yield "      <details class=\"table__details\">
        ";
                // line 52
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["summary"] ?? null))) {
                    // line 53
                    yield "          <summary class=\"table__summary\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["summary"] ?? null), "html", null, true);
                    yield "</summary>
        ";
                }
                // line 55
                yield "        ";
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["description"] ?? null))) {
                    // line 56
                    yield "          ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true);
                    yield "
        ";
                }
                // line 58
                yield "      </details>
    ";
            }
            // line 60
            yield "    </caption>
  ";
        }
        // line 62
        yield "  ";
        if (($context["header"] ?? null)) {
            // line 63
            yield "    <thead class=\"table__header\">
      <tr class=\"table__row\">
        ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 66
                yield "          ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 66)) {
                    // line 67
                    yield "            ";
                    // line 68
                    $context["column_classes"] = ["table__cell", "views-field", ("views-field-" . (($_v0 =                     // line 71
($context["fields"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[$context["key"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), $context["key"], [], "array", false, false, true, 71)))];
                    // line 74
                    yield "          ";
                }
                // line 75
                yield "          <th";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 75), "addClass", [($context["column_classes"] ?? null)], "method", false, false, true, 75), "setAttribute", ["scope", "col"], "method", false, false, true, 75), "html", null, true);
                yield ">";
                // line 76
                if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 76)) {
                    // line 77
                    yield "<";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 77), "html", null, true);
                    yield ">";
                    // line 78
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 78)) {
                        // line 79
                        yield "<a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 79), "html", null, true);
                        yield "\" title=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 79), "html", null, true);
                        yield "\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 79), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 79), "html", null, true);
                        yield "</a>";
                    } else {
                        // line 81
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 81), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 81), "html", null, true);
                    }
                    // line 83
                    yield "</";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 83), "html", null, true);
                    yield ">";
                } else {
                    // line 85
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 85)) {
                        // line 86
                        yield "<a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 86), "html", null, true);
                        yield "\" title=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 86), "html", null, true);
                        yield "\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 86), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 86), "html", null, true);
                        yield "</a>";
                    } else {
                        // line 88
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 88), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 88), "html", null, true);
                    }
                }
                // line 91
                yield "</th>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['column'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "      </tr>
    </thead>
  ";
        }
        // line 96
        yield "  <tbody class=\"table__body\">
    ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 98
            yield "      ";
            // line 99
            $context["row_classes"] = ["table__row", (( !            // line 101
($context["no_striping"] ?? null)) ? (Twig\Extension\CoreExtension::cycle(["odd", "even"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 101))) : (""))];
            // line 104
            yield "      <tr";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 104), "addClass", [($context["row_classes"] ?? null)], "method", false, false, true, 104), "html", null, true);
            yield ">
        ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 105));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 106
                yield "          ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 106)) {
                    // line 107
                    yield "            ";
                    // line 108
                    $context["column_classes"] = ["views-field"];
                    // line 112
                    yield "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "fields", [], "any", false, false, true, 112));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 113
                        yield "              ";
                        $context["column_classes"] = Twig\Extension\CoreExtension::merge(($context["column_classes"] ?? null), [("views-field-" . $context["field"])]);
                        // line 114
                        yield "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 115
                    yield "          ";
                }
                // line 116
                yield "          <td";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 116), "addClass", [($context["column_classes"] ?? null), "table__cell"], "method", false, false, true, 116), "html", null, true);
                yield ">";
                // line 117
                if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 117)) {
                    // line 118
                    yield "<";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 118), "html", null, true);
                    yield ">
              ";
                    // line 119
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 119));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 120
                        yield "                ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 120), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 120), "html", null, true);
                        yield "
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['content'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 122
                    yield "              </";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 122), "html", null, true);
                    yield ">";
                } else {
                    // line 124
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 124));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 125
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 125), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 125), "html", null, true);
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['content'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 128
                yield "          </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['column'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            yield "      </tr>
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
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        yield "  </tbody>
</table>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["header", "responsive", "sticky", "attributes", "caption_needed", "caption", "title", "summary", "description", "fields", "rows", "no_striping", "loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/adaptivetheme/at_core/templates/views/views-view-table.html.twig";
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
        return array (  306 => 132,  291 => 130,  284 => 128,  276 => 125,  272 => 124,  267 => 122,  257 => 120,  253 => 119,  248 => 118,  246 => 117,  242 => 116,  239 => 115,  233 => 114,  230 => 113,  225 => 112,  223 => 108,  221 => 107,  218 => 106,  214 => 105,  209 => 104,  207 => 101,  206 => 99,  204 => 98,  187 => 97,  184 => 96,  179 => 93,  172 => 91,  167 => 88,  157 => 86,  155 => 85,  150 => 83,  146 => 81,  136 => 79,  134 => 78,  130 => 77,  128 => 76,  124 => 75,  121 => 74,  119 => 71,  118 => 68,  116 => 67,  113 => 66,  109 => 65,  105 => 63,  102 => 62,  98 => 60,  94 => 58,  88 => 56,  85 => 55,  79 => 53,  77 => 52,  74 => 51,  71 => 50,  65 => 48,  59 => 46,  56 => 45,  54 => 44,  49 => 43,  47 => 40,  46 => 39,  45 => 38,  44 => 34,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/adaptivetheme/at_core/templates/views/views-view-table.html.twig", "C:\\xampp\\htdocs\\mmpl\\web\\themes\\contrib\\adaptivetheme\\at_core\\templates\\views\\views-view-table.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 34, "if" => 44, "for" => 65);
        static $filters = array("length" => 38, "escape" => 43, "merge" => 113);
        static $functions = array("cycle" => 101);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['length', 'escape', 'merge'],
                ['cycle'],
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
