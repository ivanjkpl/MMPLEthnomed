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

/* modules/contrib/social_link_field/templates/social-link-field-formatter.html.twig */
class __TwigTemplate_8f0c6ffdbce3a6e58cd28c3140ede6f6 extends Template
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
        // line 16
        yield "
";
        // line 18
        $context["classes"] = ["social-link-field", CoreExtension::getAttribute($this->env, $this->source,         // line 20
($context["appearance"] ?? null), "orientation", [], "any", false, false, true, 20)];
        // line 23
        yield "
";
        // line 24
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 25
            yield "  ";
            if (($context["links"] ?? null)) {
                // line 26
                yield "    <ul ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 26), "html", null, true);
                yield ">
      ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                    // line 28
                    yield "        <li>
          <a href=\"";
                    // line 29
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, true, 29), "html", null, true);
                    yield "\" class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["link"], "class", [], "any", false, false, true, 29), "html", null, true);
                    yield "\" title=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, true, 29), "html", null, true);
                    yield "\"";
                    if (($context["new_tab"] ?? null)) {
                        yield " target=\"_blank\"";
                    }
                    yield ">
            ";
                    // line 30
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["link"], "text", [], "any", false, false, true, 30), "html", null, true);
                    yield "
          </a>
        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                yield "    </ul>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($_v0));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["appearance", "links", "attributes", "new_tab"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/social_link_field/templates/social-link-field-formatter.html.twig";
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
        return array (  98 => 24,  92 => 34,  82 => 30,  70 => 29,  67 => 28,  63 => 27,  58 => 26,  55 => 25,  53 => 24,  50 => 23,  48 => 20,  47 => 18,  44 => 16,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/social_link_field/templates/social-link-field-formatter.html.twig", "C:\\xampp\\htdocs\\mmpl\\web\\modules\\contrib\\social_link_field\\templates\\social-link-field-formatter.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 18, "apply" => 24, "if" => 25, "for" => 27);
        static $filters = array("escape" => 26, "spaceless" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'apply', 'if', 'for'],
                ['escape', 'spaceless'],
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
