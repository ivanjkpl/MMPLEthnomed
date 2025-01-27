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

/* themes/contrib/adaptivetheme/at_core/templates/block/block--responsive-menu.html.twig */
class __TwigTemplate_4832b4e14bcd2fa8570ea87b1142f5fc extends Template
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
        // line 29
        $context["classes"] = ["rm-block", ("rm-config-provider--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 31
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 31))), ("rm-plugin-id--" . \Drupal\Component\Utility\Html::getClass(        // line 32
($context["plugin_id_clean"] ?? null))), "js-hide"];
        // line 36
        $context["heading_id"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 36) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 37
        $context["config_label"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "label", [], "any", false, false, true, 37)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "label", [], "any", false, false, true, 37)) : (t("Main menu")));
        // line 38
        $context["rm_label_class"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "label", [], "any", false, false, true, 38)) ? ("rm-toggle__label") : ("visually-hidden"));
        // line 40
        yield "<svg style=\"display:none;\">
  ";
        // line 42
        yield "  <symbol id=\"rm-toggle__icon--open\" viewBox=\"0 0 1792 1792\" preserveAspectRatio=\"xMinYMid meet\">
    <path class=\"rm-toggle__icon__path\" d=\"M1664 1344v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45z\"/>
  </symbol>
  ";
        // line 46
        yield "  <symbol id=\"rm-toggle__icon--close\" viewBox=\"0 0 1792 1792\" preserveAspectRatio=\"xMinYMid meet\">
    <path class=\"rm-toggle__icon__path\" d=\"M1490 1322q0 40-28 68l-136 136q-28 28-68 28t-68-28l-294-294-294 294q-28 28-68 28t-68-28l-136-136q-28-28-28-68t28-68l294-294-294-294q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 294 294-294q28-28 68-28t68 28l136 136q28 28 28 68t-28 68l-294 294 294 294q28 28 28 68z\"/>
  </symbol>
</svg>
<nav aria-labelledby=\"";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
        yield "\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 50), "role", "aria-labelledby"), "html", null, true);
        yield ">
  <div class=\"rm-block__inner\">
    <div";
        // line 52
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["rm-toggle"], "method", false, false, true, 52), "id"), "html", null, true);
        yield ">
      <button class=\"rm-toggle__link un-button\" role='button' aria-expanded=\"false\">
        ";
        // line 55
        yield "        <svg class=\"rm-toggle__icon\">
          <use id=\"rm-toggle__icon--use\" xlink:href=\"#rm-toggle__icon--open\"></use>
        </svg>
        ";
        // line 59
        yield "        <span class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["rm_label_class"] ?? null), "html", null, true);
        yield "\" id=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
        yield "\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["config_label"] ?? null), "html", null, true);
        yield "</span>
      </button>
    </div>";
        // line 62
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 77
        yield "</div>
</nav>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["configuration", "plugin_id_clean", "attributes", "title_attributes", "click_menus_enabled", "content"]);        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 63
        yield "<div class=\"rm-block__content\" id=\"rm-content\">
        ";
        // line 65
        if (($context["click_menus_enabled"] ?? null)) {
            // line 66
            yield "<span id=\"rm-accordion-trigger\" class=\"hidden\">
            <button class=\"rm-accordion-trigger un-button\" role='button' aria-expanded=\"false\">
              <svg class=\"rm-accordion-trigger__icon\" viewBox=\"0 0 1792 1792\" preserveAspectRatio=\"xMinYMid meet\"><path d=\"M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z\"/></svg>
              ";
            // line 70
            yield "              <span class=\"visually-hidden\">";
            yield t("Toggle sub-menu", array());
            yield "</span>
            </button>
          </span>";
        }
        // line 74
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        // line 75
        yield "</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/adaptivetheme/at_core/templates/block/block--responsive-menu.html.twig";
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
        return array (  132 => 75,  130 => 74,  123 => 70,  118 => 66,  116 => 65,  113 => 63,  106 => 62,  98 => 77,  96 => 62,  86 => 59,  81 => 55,  76 => 52,  69 => 50,  63 => 46,  58 => 42,  55 => 40,  53 => 38,  51 => 37,  49 => 36,  47 => 32,  46 => 31,  45 => 29,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/adaptivetheme/at_core/templates/block/block--responsive-menu.html.twig", "C:\\xampp\\htdocs\\mmpl\\web\\themes\\contrib\\adaptivetheme\\at_core\\templates\\block\\block--responsive-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "block" => 62, "if" => 65, "trans" => 70);
        static $filters = array("clean_class" => 31, "clean_id" => 36, "t" => 37, "escape" => 50, "without" => 50);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'trans'],
                ['clean_class', 'clean_id', 't', 'escape', 'without'],
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
