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

/* themes/contrib/adaptivetheme/at_core/templates/field/field.html.twig */
class __TwigTemplate_537c987f7a698fce70def20ade355f6d extends Template
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
        // line 39
        $context["field_name_class"] = \Drupal\Component\Utility\Html::getClass(($context["field_name"] ?? null));
        // line 41
        $context["classes"] = ["field", ((("field-" . \Drupal\Component\Utility\Html::getClass(        // line 43
($context["entity_type"] ?? null))) . "--") . ($context["field_name_class"] ?? null)), ((        // line 44
($context["field_formatter"] ?? null)) ? (("field-formatter-" . \Drupal\Component\Utility\Html::getClass(($context["field_formatter"] ?? null)))) : ("")), ("field-name-" .         // line 45
($context["field_name_class"] ?? null)), ("field-type-" . \Drupal\Component\Utility\Html::getClass(        // line 46
($context["field_type"] ?? null))), ("field-label-" .         // line 47
($context["label_display"] ?? null)), (((        // line 48
($context["label_display"] ?? null) == "inline")) ? ("clearfix") : (""))];
        // line 52
        $context["title_classes"] = ["field__label", (((        // line 54
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 57
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["items"] ?? null)) > 1)) {
            // line 58
            $context["count_class"] = "has-multiple";
        } else {
            // line 60
            $context["count_class"] = "has-single";
        }
        // line 62
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null), ($context["count_class"] ?? null)], "method", false, false, true, 62), "html", null, true);
        yield ">";
        // line 63
        if ( !($context["label_hidden"] ?? null)) {
            // line 64
            yield "<h3";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [($context["title_classes"] ?? null)], "method", false, false, true, 64), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "</h3>";
        }
        // line 66
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["field__items"], "method", false, false, true, 66), "html", null, true);
        yield ">";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 68
            yield "<div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 68), "addClass", ["field__item"], "method", false, false, true, 68), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 68), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "</div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["field_name", "entity_type", "field_formatter", "field_type", "label_display", "items", "attributes", "label_hidden", "title_attributes", "label", "content_attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/adaptivetheme/at_core/templates/field/field.html.twig";
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
        return array (  96 => 70,  86 => 68,  82 => 67,  78 => 66,  71 => 64,  69 => 63,  65 => 62,  62 => 60,  59 => 58,  57 => 57,  55 => 54,  54 => 52,  52 => 48,  51 => 47,  50 => 46,  49 => 45,  48 => 44,  47 => 43,  46 => 41,  44 => 39,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/adaptivetheme/at_core/templates/field/field.html.twig", "C:\\xampp\\htdocs\\mmpl\\web\\themes\\contrib\\adaptivetheme\\at_core\\templates\\field\\field.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 39, "if" => 57, "for" => 67);
        static $filters = array("clean_class" => 39, "length" => 57, "escape" => 62);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'length', 'escape'],
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
