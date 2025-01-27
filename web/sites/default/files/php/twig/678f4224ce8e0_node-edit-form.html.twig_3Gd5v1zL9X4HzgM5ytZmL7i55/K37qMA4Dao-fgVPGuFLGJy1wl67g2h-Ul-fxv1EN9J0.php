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

/* themes/contrib/adaptivetheme/at_core/templates/content-edit/node-edit-form.html.twig */
class __TwigTemplate_1117bf14d344b08fa9251d17aa1ef0fd extends Template
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
        // line 19
        yield "<div data-at-responsive-columns>
  <div class=\"layout-region\">
    <h1 class=\"page__title h2\">";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
        yield "</h1>
  </div>
  <div class=\"layout-node-form clearfix is-responsive__layout\">
    <div class=\"layout-region layout-region-node-main is-responsive__column\">
      <div class=\"layout-region__inner layout-region-node-main__inner\">
       ";
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["form"] ?? null), "advanced", "actions"), "html", null, true);
        yield "
      </div>
    </div>
    <div class=\"layout-region layout-region-node-secondary is-responsive__column\">
      <div class=\"layout-region__inner layout-region-node-secondary__inner\">
        ";
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "advanced", [], "any", false, false, true, 31), "html", null, true);
        yield "
      </div>
    </div>
  </div>
</div>
<div class=\"layout-node-form-footer clearfix\">
  <div class=\"layout-region layout-region-node-footer\">
    <div class=\"layout-region__inner layout-region-node-footer__inner\">
      ";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "actions", [], "any", false, false, true, 39), "html", null, true);
        yield "
    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title", "form"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/adaptivetheme/at_core/templates/content-edit/node-edit-form.html.twig";
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
        return array (  75 => 39,  64 => 31,  56 => 26,  48 => 21,  44 => 19,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/adaptivetheme/at_core/templates/content-edit/node-edit-form.html.twig", "C:\\xampp\\htdocs\\mmpl\\web\\themes\\contrib\\adaptivetheme\\at_core\\templates\\content-edit\\node-edit-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 21, "without" => 26);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'without'],
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
