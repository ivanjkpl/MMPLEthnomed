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

/* themes/contrib/adaptivetheme/at_core/templates/field/field--image.html.twig */
class __TwigTemplate_7f7293ed623c43825ab07aac3d4337e5 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["delta"] => $context["item"]) {
            // line 67
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "caption", [], "any", false, false, true, 67), "show", [], "any", false, false, true, 67) == true)) {
                // line 68
                yield "<figure";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 68), "addClass", ["field-type-image__figure", ("image-count-" . ($context["delta"] + 1)), "caption", "caption-img"], "method", false, false, true, 68), "html", null, true);
                yield " role=\"group\">";
            } else {
                // line 70
                yield "<figure";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 70), "addClass", ["field-type-image__figure", ("image-count-" . ($context["delta"] + 1))], "method", false, false, true, 70), "html", null, true);
                yield ">";
            }
            // line 72
            yield "<div class=\"field-type-image__item\">
        ";
            // line 73
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 73), "html", null, true);
            // line 74
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "caption", [], "any", false, false, true, 74), "show", [], "any", false, false, true, 74) == true)) {
                // line 75
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "caption", [], "any", false, false, true, 75), "width", [], "any", false, false, true, 75)) {
                    // line 76
                    yield "            ";
                    $context["caption_width"] = ((" style=max-width:" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "caption", [], "any", false, false, true, 76), "width", [], "any", false, false, true, 76)) . "px");
                }
                // line 78
                yield "<figcaption class=\"field-type-image__figcaption\" property=\"schema:description\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["caption_width"] ?? null), "html", null, true);
                yield ">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "caption", [], "any", false, false, true, 78), "title", [], "any", false, false, true, 78), "html", null, true);
                yield "</figcaption>";
            }
            // line 80
            yield "</div>
    </figure>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['delta'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["field_name", "entity_type", "field_formatter", "field_type", "label_display", "items", "attributes", "label_hidden", "title_attributes", "label"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/adaptivetheme/at_core/templates/field/field--image.html.twig";
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
        return array (  121 => 83,  114 => 80,  107 => 78,  103 => 76,  101 => 75,  99 => 74,  97 => 73,  94 => 72,  89 => 70,  84 => 68,  82 => 67,  78 => 66,  71 => 64,  69 => 63,  65 => 62,  62 => 60,  59 => 58,  57 => 57,  55 => 54,  54 => 52,  52 => 48,  51 => 47,  50 => 46,  49 => 45,  48 => 44,  47 => 43,  46 => 41,  44 => 39,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/adaptivetheme/at_core/templates/field/field--image.html.twig", "C:\\xampp\\htdocs\\mmpl\\web\\themes\\contrib\\adaptivetheme\\at_core\\templates\\field\\field--image.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 39, "if" => 57, "for" => 66);
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
