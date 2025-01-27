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

/* themes/contrib/adaptivetheme/at_core/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_8119246d9cb067531dbdbe0133c354fa extends Template
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
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        $context["classes"] = ["block", "block-branding", ("block-config-provider--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 19
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 19))), ("block-plugin-id--" . \Drupal\Component\Utility\Html::getClass(        // line 20
($context["plugin_id_clean"] ?? null))), ((        // line 21
($context["label"] ?? null)) ? ("has-title") : ("")), ((        // line 22
($context["site_logo"] ?? null)) ? ("has-logo") : ("")), ((        // line 23
($context["site_name"] ?? null)) ? ("has-name") : ("")), ((        // line 24
($context["site_slogan"] ?? null)) ? ("has-slogan") : (""))];
        // line 27
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 27), "html", null, true);
        yield ">
  <div class=\"block__inner block-branding__inner\">

    ";
        // line 30
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        // line 31
        if (($context["label"] ?? null)) {
            // line 32
            yield "<h2";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["block__title"], "method", false, false, true, 32), "html", null, true);
            yield "><span>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "</span></h2>";
        }
        // line 34
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        // line 36
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 54
        yield "</div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["configuration", "plugin_id_clean", "label", "site_logo", "site_name", "site_slogan", "attributes", "title_prefix", "title_attributes", "title_suffix", "content_attributes"]);        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["block__content", "block-branding__content", "site-branding"], "method", false, false, true, 37), "html", null, true);
        yield ">";
        // line 38
        if (($context["site_logo"] ?? null)) {
            // line 39
            yield "<a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\" rel=\"home\" class=\"site-branding__logo-link\"><img src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\" class=\"site-branding__logo-img\" /></a>";
        }
        // line 41
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 42
            yield "<span class=\"site-branding__text\">";
            // line 43
            if (($context["site_name"] ?? null)) {
                // line 44
                yield "<strong class=\"site-branding__name\"><a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                yield "\" rel=\"home\" class=\"site-branding__name-link\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
                yield "</a></strong>";
            }
            // line 46
            if (($context["site_slogan"] ?? null)) {
                // line 47
                yield "<em class=\"site-branding__slogan\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true);
                yield "</em>";
            }
            // line 49
            yield "</span>";
        }
        // line 51
        yield "</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/adaptivetheme/at_core/templates/block/block--system-branding-block.html.twig";
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
        return array (  132 => 51,  129 => 49,  124 => 47,  122 => 46,  113 => 44,  111 => 43,  109 => 42,  107 => 41,  96 => 39,  94 => 38,  90 => 37,  83 => 36,  75 => 54,  73 => 36,  71 => 34,  64 => 32,  62 => 31,  60 => 30,  53 => 27,  51 => 24,  50 => 23,  49 => 22,  48 => 21,  47 => 20,  46 => 19,  45 => 16,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/adaptivetheme/at_core/templates/block/block--system-branding-block.html.twig", "C:\\xampp\\htdocs\\mmpl\\web\\themes\\contrib\\adaptivetheme\\at_core\\templates\\block\\block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 31, "block" => 36);
        static $filters = array("clean_class" => 19, "escape" => 27, "t" => 39);
        static $functions = array("path" => 39);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
                ['path'],
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
