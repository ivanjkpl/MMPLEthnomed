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

/* themes/contrib/adaptivetheme/at_core/layout_plugin/templates/twocol/at-layout--twocol.html.twig */
class __TwigTemplate_87553b10555a7327cdd44e22771338dc extends Template
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
        // line 10
        $context["int"] = [];
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["col_1", "col_2"]);
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 12
            if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((($_v0 = ($context["content"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[$context["region"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), $context["region"], [], "array", false, false, true, 12)))))) {
                // line 13
                $context["int"] = Twig\Extension\CoreExtension::merge(($context["int"] ?? null), [Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["region"], 4, 1)]);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['region'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        $context["layout_classes"] = [("l-arc--" . Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["int"] ?? null))), ("l-ac--" . Twig\Extension\CoreExtension::join(($context["int"] ?? null), "-"))];
        // line 17
        $context["element"] = ((array_key_exists("html_element", $context)) ? (Twig\Extension\CoreExtension::default(($context["html_element"] ?? null), "div")) : ("div"));
        // line 18
        yield "<";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["element"] ?? null), "html", null, true);
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["layout_classes"] ?? null)], "method", false, false, true, 18), "html", null, true);
        yield ">
  ";
        // line 19
        if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "top", [], "any", false, false, true, 19))))) {
            // line 20
            yield "    <div class=\"atl__lr\">
      <div class=\"atl__lc atl__top\">
        ";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "top", [], "any", false, false, true, 22), "html", null, true);
            yield "
      </div>
    </div>
  ";
        }
        // line 26
        yield "
  ";
        // line 27
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "col_1", [], "any", false, false, true, 27) || CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "col_2", [], "any", false, false, true, 27))) {
            // line 28
            yield "    <div class=\"atl__lr atl__cw\">
      ";
            // line 29
            if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "col_1", [], "any", false, false, true, 29))))) {
                // line 30
                yield "        <div class=\"atl__lc lc-1\">
          ";
                // line 31
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "col_1", [], "any", false, false, true, 31), "html", null, true);
                yield "
        </div>
      ";
            }
            // line 34
            yield "
      ";
            // line 35
            if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "col_2", [], "any", false, false, true, 35))))) {
                // line 36
                yield "        <div class=\"atl__lc lc-2\">
          ";
                // line 37
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "col_2", [], "any", false, false, true, 37), "html", null, true);
                yield "
        </div>
      ";
            }
            // line 40
            yield "    </div>
  ";
        }
        // line 42
        yield "
  ";
        // line 43
        if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "bottom", [], "any", false, false, true, 43))))) {
            // line 44
            yield "    <div class=\"atl__lr\">
      <div class=\"atl__lc atl__bottom\">
        ";
            // line 46
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "bottom", [], "any", false, false, true, 46), "html", null, true);
            yield "
      </div>
    </div>
  ";
        }
        // line 50
        yield "</";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["element"] ?? null), "html", null, true);
        yield ">
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "html_element", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/adaptivetheme/at_core/layout_plugin/templates/twocol/at-layout--twocol.html.twig";
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
        return array (  135 => 50,  128 => 46,  124 => 44,  122 => 43,  119 => 42,  115 => 40,  109 => 37,  106 => 36,  104 => 35,  101 => 34,  95 => 31,  92 => 30,  90 => 29,  87 => 28,  85 => 27,  82 => 26,  75 => 22,  71 => 20,  69 => 19,  63 => 18,  61 => 17,  59 => 16,  52 => 13,  50 => 12,  46 => 11,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/adaptivetheme/at_core/layout_plugin/templates/twocol/at-layout--twocol.html.twig", "C:\\xampp\\htdocs\\mmpl\\web\\themes\\contrib\\adaptivetheme\\at_core\\layout_plugin\\templates\\twocol\\at-layout--twocol.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 10, "for" => 11, "if" => 12);
        static $filters = array("trim" => 12, "render" => 12, "merge" => 13, "slice" => 13, "length" => 16, "join" => 16, "default" => 17, "escape" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['trim', 'render', 'merge', 'slice', 'length', 'join', 'default', 'escape'],
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
