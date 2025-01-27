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

/* themes/contrib/adaptivetheme/at_core/templates/navigation/menu-local-tasks.html.twig */
class __TwigTemplate_1400a53847a9e35015691d48beffa36b extends Template
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
        // line 14
        if ((($context["primary"] ?? null) || ($context["secondary"] ?? null))) {
            // line 15
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("at_core/at.responsivelists"), "html", null, true);
            yield "
";
        }
        // line 17
        if (($context["primary"] ?? null)) {
            // line 18
            yield "  <nav class=\"is-horizontal is-responsive\" role=\"navigation\" aria-labelledby=\"primary-tabs-title\" data-at-responsive-list>
    <h2 id=\"primary-tabs-title\" class=\"visually-hidden\">";
            // line 19
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Primary tabs"));
            yield "</h2>
    <ul class=\"tabs tabs--primary is-responsive__list\">";
            // line 20
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["primary"] ?? null), "html", null, true);
            yield "</ul>
  </nav>
";
        }
        // line 23
        if (($context["secondary"] ?? null)) {
            // line 24
            yield "  <nav class=\"is-horizontal is-responsive\" role=\"navigation\" aria-labelledby=\"secondary-tabs-title\" data-at-responsive-list>
    <h2 id=\"secondary-tabs-title\" class=\"visually-hidden\">";
            // line 25
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Secondary tabs"));
            yield "</h2>
    <ul class=\"tabs tabs--secondary is-responsive__list\">";
            // line 26
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["secondary"] ?? null), "html", null, true);
            yield "</ul>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["primary", "secondary"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/adaptivetheme/at_core/templates/navigation/menu-local-tasks.html.twig";
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
        return array (  76 => 26,  72 => 25,  69 => 24,  67 => 23,  61 => 20,  57 => 19,  54 => 18,  52 => 17,  46 => 15,  44 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/adaptivetheme/at_core/templates/navigation/menu-local-tasks.html.twig", "C:\\xampp\\htdocs\\mmpl\\web\\themes\\contrib\\adaptivetheme\\at_core\\templates\\navigation\\menu-local-tasks.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14);
        static $filters = array("escape" => 15, "t" => 19);
        static $functions = array("attach_library" => 15);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
