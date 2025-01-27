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

/* themes/contrib/adaptivetheme/at_core/templates/layout/html.html.twig */
class __TwigTemplate_d36bc01b9fa0c24549267145dda2065f extends Template
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
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("at_core/at.breakpoints"), "html", null, true);
        // line 27
        yield "<!DOCTYPE html>
<html";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["html_attributes"] ?? null), "addClass", ["no-js", "adaptivetheme"], "method", false, false, true, 28), "html", null, true);
        yield ">
  <head>
    ";
        // line 30
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["touch_icons"] ?? null), "html", null, true);
        yield "
    <head-placeholder token=\"";
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">
    <link rel=\"dns-prefetch\" href=\"//cdnjs.cloudflare.com\">";
        // line 33
        if (($context["google_dns_prefetch"] ?? null)) {
            // line 34
            yield "<link rel=\"dns-prefetch\" href=\"//fonts.googleapis.com\">";
        }
        // line 36
        if (($context["typekit_dns_prefetch"] ?? null)) {
            // line 37
            yield "<link rel=\"dns-prefetch\" href=\"//use.typekit.net\">";
        }
        // line 39
        yield "<title>";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, ($context["head_title"] ?? null), " | "));
        yield "</title>
    <css-placeholder token=\"";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">
    <js-placeholder token=\"";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">
  </head>";
        // line 44
        $context["body_classes"] = [((        // line 45
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("user-logged-out")), ((        // line 46
($context["is_front"] ?? null)) ? ("path-frontpage") : ("path-not-frontpage")), ((        // line 47
($context["root_path"] ?? null)) ? (("path-" . \Drupal\Component\Utility\Html::getClass(($context["root_path"] ?? null)))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 48
($context["path_info"] ?? null), "args", [], "any", false, false, true, 48)) ? (("path-" . CoreExtension::getAttribute($this->env, $this->source, ($context["path_info"] ?? null), "args", [], "any", false, false, true, 48))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 49
($context["path_info"] ?? null), "query", [], "any", false, false, true, 49)) ? (("path-query-" . CoreExtension::getAttribute($this->env, $this->source, ($context["path_info"] ?? null), "query", [], "any", false, false, true, 49))) : ("")), ((        // line 50
($context["node_type"] ?? null)) ? (("page-node-type--" . \Drupal\Component\Utility\Html::getClass(($context["node_type"] ?? null)))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 51
($context["head_title_array"] ?? null), "name", [], "any", false, false, true, 51)) ? (("site-name--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, ($context["head_title_array"] ?? null), "name", [], "any", false, false, true, 51)))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 52
($context["theme"] ?? null), "name", [], "any", false, false, true, 52)) ? (("theme-name--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "name", [], "any", false, false, true, 52)))) : ("")), ((        // line 53
($context["db_offline"] ?? null)) ? ("db-offline") : (""))];
        // line 56
        yield "<body ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 56), "role"), "html", null, true);
        yield ">
    ";
        // line 58
        yield "    <a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["skip_link_target"] ?? null), "html", null, true);
        yield "\" class=\"visually-hidden focusable skip-link\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        yield "</a>
    ";
        // line 59
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true);
        yield "
    ";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true);
        yield "
    ";
        // line 61
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true);
        yield "
    <js-bottom-placeholder token=\"";
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">
  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["html_attributes", "touch_icons", "placeholder_token", "google_dns_prefetch", "typekit_dns_prefetch", "head_title", "logged_in", "is_front", "root_path", "path_info", "node_type", "head_title_array", "theme", "db_offline", "attributes", "skip_link_target", "page_top", "page", "page_bottom"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/adaptivetheme/at_core/templates/layout/html.html.twig";
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
        return array (  120 => 62,  116 => 61,  112 => 60,  108 => 59,  101 => 58,  96 => 56,  94 => 53,  93 => 52,  92 => 51,  91 => 50,  90 => 49,  89 => 48,  88 => 47,  87 => 46,  86 => 45,  85 => 44,  81 => 41,  77 => 40,  72 => 39,  69 => 37,  67 => 36,  64 => 34,  62 => 33,  58 => 31,  54 => 30,  49 => 28,  46 => 27,  44 => 26,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/adaptivetheme/at_core/templates/layout/html.html.twig", "C:\\xampp\\htdocs\\mmpl\\web\\themes\\contrib\\adaptivetheme\\at_core\\templates\\layout\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 33, "set" => 44);
        static $filters = array("escape" => 26, "raw" => 31, "safe_join" => 39, "clean_class" => 47, "without" => 56, "t" => 58);
        static $functions = array("attach_library" => 26);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'raw', 'safe_join', 'clean_class', 'without', 't'],
                ['attach_library'],
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
