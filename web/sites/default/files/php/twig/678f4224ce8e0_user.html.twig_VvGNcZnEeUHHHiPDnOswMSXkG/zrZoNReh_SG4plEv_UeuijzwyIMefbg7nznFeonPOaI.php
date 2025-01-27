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

/* themes/contrib/adaptivetheme/at_core/templates/user/user.html.twig */
class __TwigTemplate_64e2f833bb4a29ceb01f09e330242056 extends Template
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
        // line 24
        $context["classes"] = ["user", "user--profile", ("user--id-" . CoreExtension::getAttribute($this->env, $this->source,         // line 27
($context["user"] ?? null), "id", [], "any", false, false, true, 27)), ((        // line 28
($context["roles"] ?? null)) ? (Twig\Extension\CoreExtension::join(($context["roles"] ?? null), " ")) : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 29
($context["user"] ?? null), "isBlocked", [], "method", false, false, true, 29)) ? ("user--is-blocked") : ("user--is-active")), ((        // line 30
($context["view_mode"] ?? null)) ? (("user--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : (""))];
        // line 33
        yield "<article";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 33), "setAttribute", ["role", "article"], "method", false, false, true, 33), "id"), "html", null, true);
        yield ">";
        // line 35
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "isBlocked", [], "method", false, false, true, 35)) {
            // line 36
            yield "<span class=\"user__status user--is-blocked marker marker--warning\" aria-label=\"Status message\" role=\"contentinfo\">
      <span class=\"visually-hidden\">";
            // line 37
            yield t("This user is", array());
            yield "</span>";
            yield t("Blocked", array());
            // line 38
            yield "</span>";
        }
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        // line 42
        if (($context["label"] ?? null)) {
            // line 43
            if ((($context["view_mode"] ?? null) == "full")) {
                // line 44
                yield "<h1";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["user__title"], "method", false, false, true, 44), "html", null, true);
                yield ">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
                yield "</h1>";
            } else {
                // line 46
                yield "<h2";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["user__title"], "method", false, false, true, 46), "html", null, true);
                yield ">";
                // line 47
                if (($context["access_profiles"] ?? null)) {
                    // line 48
                    yield "<a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true);
                    yield "user/";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, true, 48), "html", null, true);
                    yield "\" class=\"user__title-link\" rel=\"bookmark\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
                    yield "</a>";
                } else {
                    // line 50
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
                }
                // line 52
                yield "</h2>";
            }
        }
        // line 55
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        // line 57
        if (($context["content"] ?? null)) {
            // line 58
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        }
        // line 61
        yield "</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["user", "roles", "view_mode", "attributes", "title_prefix", "label", "title_attributes", "access_profiles", "base_path", "title_suffix", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/adaptivetheme/at_core/templates/user/user.html.twig";
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
        return array (  108 => 61,  105 => 58,  103 => 57,  101 => 55,  97 => 52,  94 => 50,  85 => 48,  83 => 47,  79 => 46,  72 => 44,  70 => 43,  68 => 42,  66 => 41,  63 => 38,  59 => 37,  56 => 36,  54 => 35,  50 => 33,  48 => 30,  47 => 29,  46 => 28,  45 => 27,  44 => 24,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/adaptivetheme/at_core/templates/user/user.html.twig", "C:\\xampp\\htdocs\\mmpl\\web\\themes\\contrib\\adaptivetheme\\at_core\\templates\\user\\user.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 24, "if" => 35, "trans" => 37);
        static $filters = array("join" => 28, "clean_class" => 30, "escape" => 33, "without" => 33);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['join', 'clean_class', 'escape', 'without'],
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
