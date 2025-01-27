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

/* themes/contrib/adaptivetheme/at_core/templates/content/node.html.twig */
class __TwigTemplate_9d5aa33325543a466b59c61820840ef0 extends Template
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
        // line 71
        $context["classes"] = ["node", ("node--id-" . CoreExtension::getAttribute($this->env, $this->source,         // line 73
($context["node"] ?? null), "id", [], "any", false, false, true, 73)), ("node--type-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 74
($context["node"] ?? null), "bundle", [], "any", false, false, true, 74))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 75)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 76
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 76)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 77
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 77)) ? ("node--unpublished") : ("")), ((        // line 78
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : (""))];
        // line 81
        yield "<article";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 81), "setAttribute", ["role", "article"], "method", false, false, true, 81), "html", null, true);
        yield ">
  <div class=\"node__container\">

    <header";
        // line 84
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["header_attributes"] ?? null), "addClass", ["node__header"], "method", false, false, true, 84), "html", null, true);
        yield ">";
        // line 85
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "isPublished", [], "method", false, false, true, 85)) {
            // line 86
            yield "<span class=\"node__status node--unpublished marker marker--warning\" aria-label=\"Status message\" role=\"contentinfo\">
          <span class=\"visually-hidden\">";
            // line 87
            yield t("This node is", array());
            yield "</span>";
            yield t("Unpublished", array());
            // line 88
            yield "</span>";
        }
        // line 91
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        // line 92
        if (($context["label"] ?? null)) {
            // line 93
            if ((($context["view_mode"] ?? null) == "full")) {
                // line 94
                yield "<h1";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["node__title"], "method", false, false, true, 94), "html", null, true);
                yield ">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
                yield "</h1>";
            } else {
                // line 96
                yield "<h2";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["node__title"], "method", false, false, true, 96), "html", null, true);
                yield "><a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
                yield "\" class=\"node__title-link\" rel=\"bookmark\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
                yield "</a></h2>";
            }
        }
        // line 99
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        // line 101
        if (($context["display_submitted"] ?? null)) {
            // line 102
            yield "<div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["meta_attributes"] ?? null), "html", null, true);
            yield ">";
            // line 103
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true);
            // line 104
            yield "<div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["submitted_attributes"] ?? null), "html", null, true);
            yield ">
             <span class=\"node__author\">";
            // line 105
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author_name"] ?? null), "html", null, true);
            yield "</span>
             <span class=\"node__pubdate\">";
            // line 106
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true);
            yield "</span>
          </div>";
            // line 108
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true);
            // line 109
            yield "</div>";
        }
        // line 111
        yield "</header>

    <div";
        // line 113
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content"], "method", false, false, true, 113), "html", null, true);
        yield ">";
        // line 114
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "comment"), "html", null, true);
        // line 115
        yield "</div>";
        // line 117
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 117), "html", null, true);
        // line 119
        yield "</div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "header_attributes", "title_prefix", "label", "title_attributes", "url", "title_suffix", "display_submitted", "meta_attributes", "author_picture", "submitted_attributes", "author_name", "date", "metadata", "content_attributes", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/adaptivetheme/at_core/templates/content/node.html.twig";
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
        return array (  138 => 119,  136 => 117,  134 => 115,  132 => 114,  129 => 113,  125 => 111,  122 => 109,  120 => 108,  116 => 106,  112 => 105,  107 => 104,  105 => 103,  101 => 102,  99 => 101,  97 => 99,  87 => 96,  80 => 94,  78 => 93,  76 => 92,  74 => 91,  71 => 88,  67 => 87,  64 => 86,  62 => 85,  59 => 84,  52 => 81,  50 => 78,  49 => 77,  48 => 76,  47 => 75,  46 => 74,  45 => 73,  44 => 71,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/adaptivetheme/at_core/templates/content/node.html.twig", "C:\\xampp\\htdocs\\mmpl\\web\\themes\\contrib\\adaptivetheme\\at_core\\templates\\content\\node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 71, "if" => 85, "trans" => 87);
        static $filters = array("clean_class" => 74, "escape" => 81, "without" => 114);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class', 'escape', 'without'],
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
