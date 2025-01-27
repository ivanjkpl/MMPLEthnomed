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

/* themes/contrib/adaptivetheme/at_core/templates/field/field--entity-reference.html.twig */
class __TwigTemplate_3beed4bc9fed429480dc6189a675ba42 extends Template
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
        // line 40
        $context["field_name_class"] = \Drupal\Component\Utility\Html::getClass(($context["field_name"] ?? null));
        // line 42
        $context["classes"] = ["field", ((("field-" . \Drupal\Component\Utility\Html::getClass(        // line 44
($context["entity_type"] ?? null))) . "-") . ($context["field_name_class"] ?? null)), ((        // line 45
($context["field_entity_type"] ?? null)) ? (("field-entity-reference-type-" . \Drupal\Component\Utility\Html::getClass(($context["field_entity_type"] ?? null)))) : ("")), ((        // line 46
($context["field_formatter"] ?? null)) ? (("field-formatter-" . \Drupal\Component\Utility\Html::getClass(($context["field_formatter"] ?? null)))) : ("")), ("field-name-" .         // line 47
($context["field_name_class"] ?? null)), ("field-type-" . \Drupal\Component\Utility\Html::getClass(        // line 48
($context["field_type"] ?? null))), ("field-label-" .         // line 49
($context["label_display"] ?? null)), (((        // line 50
($context["label_display"] ?? null) == "inline")) ? ("clearfix") : (""))];
        // line 54
        $context["title_classes"] = ["field__label", (((        // line 56
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 59
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 59), "html", null, true);
        yield ">";
        // line 60
        if ( !($context["label_hidden"] ?? null)) {
            // line 61
            yield "<div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [($context["title_classes"] ?? null)], "method", false, false, true, 61), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "</div>";
        }
        // line 63
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["field__items"], "method", false, false, true, 63), "html", null, true);
        yield ">";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 66
            $context["item_classes"] = ["field__item", (((($_v0 = CoreExtension::getAttribute($this->env, $this->source,             // line 68
$context["item"], "content", [], "any", false, false, true, 68)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 68), "#title", [], "array", false, false, true, 68))) ? (("field__item--" . \Drupal\Component\Utility\Html::getClass((($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 68)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 68), "#title", [], "array", false, false, true, 68))))) : (""))];
            // line 71
            yield "<div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 71), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 71), "html", null, true);
            yield ">
        <span class=\"field__item-wrapper\">";
            // line 72
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 72), "html", null, true);
            yield "</span>
      </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "</div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["field_name", "entity_type", "field_entity_type", "field_formatter", "field_type", "label_display", "attributes", "label_hidden", "title_attributes", "label", "content_attributes", "items"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/adaptivetheme/at_core/templates/field/field--entity-reference.html.twig";
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
        return array (  95 => 75,  87 => 72,  82 => 71,  80 => 68,  79 => 66,  75 => 64,  71 => 63,  64 => 61,  62 => 60,  58 => 59,  56 => 56,  55 => 54,  53 => 50,  52 => 49,  51 => 48,  50 => 47,  49 => 46,  48 => 45,  47 => 44,  46 => 42,  44 => 40,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/adaptivetheme/at_core/templates/field/field--entity-reference.html.twig", "C:\\xampp\\htdocs\\mmpl\\web\\themes\\contrib\\adaptivetheme\\at_core\\templates\\field\\field--entity-reference.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 40, "if" => 60, "for" => 64);
        static $filters = array("clean_class" => 40, "escape" => 59);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape'],
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
