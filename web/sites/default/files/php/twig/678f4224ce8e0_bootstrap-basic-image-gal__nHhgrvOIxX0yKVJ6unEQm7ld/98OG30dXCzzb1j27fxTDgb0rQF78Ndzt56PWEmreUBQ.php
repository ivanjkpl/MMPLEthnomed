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

/* modules/contrib/bootstrap_basic_image_gallery/templates/bootstrap-basic-image-gallery.html.twig */
class __TwigTemplate_ceeecf59f567e7166e10d1240527d5a3 extends Template
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
<div class=\"bootstrap-basic-image-gallery\">

  <div class=\"main-image\" data-toggle=\"modal\" data-slide-to=\"0\" data-target=\"#";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["modal"] ?? null), "id", [], "any", false, false, true, 19), "html", null, true);
        yield "\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main"] ?? null), "html", null, true);
        yield "</div>

  ";
        // line 21
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["thumbnails"] ?? null), "images", [], "any", false, false, true, 21)) > 1)) {
            // line 22
            yield "    <div class=\"thumbnails\">
      ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["thumbnails"] ?? null), "images", [], "any", false, false, true, 23));
            foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                // line 24
                yield "        <div class=\"thumb ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["thumbnails"] ?? null), "class", [], "any", false, false, true, 24), "html", null, true);
                yield "\" style=\"width:";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["thumbnails"] ?? null), "width", [], "any", false, false, true, 24), "html", null, true);
                yield "%;\" data-toggle=\"modal\" data-slide-to=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
                yield "\" data-target=\"#";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["modal"] ?? null), "id", [], "any", false, false, true, 24), "html", null, true);
                yield "\">
          ";
                // line 25
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["image"], "html", null, true);
                yield "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "    </div>
  ";
        }
        // line 30
        yield "
  <div class=\"modal fade carousel slide ";
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["lazyload"] ?? null), "html", null, true);
        yield "\" id=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["modal"] ?? null), "id", [], "any", false, false, true, 31), "html", null, true);
        yield "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["modal"] ?? null), "id", [], "any", false, false, true, 31), "html", null, true);
        yield "-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["modal"] ?? null), "id", [], "any", false, false, true, 35), "html", null, true);
        yield "-title\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["modal"] ?? null), "label", [], "any", false, false, true, 35), "html", null, true);
        yield "</h5>
          <button class=\"close btn btn-default\" data-dismiss=\"modal\" value=\"&times;\"><span aria-hidden=\"true\">×</span></button>
        </div>

        <div class=\"modal-body\">
          <div id=\"";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["carousel"] ?? null), "id", [], "any", false, false, true, 40), "html", null, true);
        yield "\" class=\"carousel slide ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["lazyload"] ?? null), "html", null, true);
        yield "\" data-interval=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["carousel"] ?? null), "interval", [], "any", false, false, true, 40), "html", null, true);
        yield "\" data-ride=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["carousel"] ?? null), "autoplay", [], "any", false, false, true, 40), "html", null, true);
        yield "\">

            <div class=\"carousel-inner\" role=\"listbox\">
              ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["carousel"] ?? null), "images", [], "any", false, false, true, 43));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["carousel_image"]) {
            // line 44
            yield "                <div class=\"carousel-item item slide-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
            yield " ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 44)) {
                yield "active";
            }
            yield "\">
                  ";
            // line 45
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["carousel_image"], "html", null, true);
            yield "
                  <div class=\"carousel-caption\">";
            // line 46
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["carousel_image"], "#caption", [], "any", false, false, true, 46), "html", null, true);
            yield "</div>
                </div>
              ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['carousel_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "
              ";
        // line 50
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["thumbnails"] ?? null), "images", [], "any", false, false, true, 50)) > 1)) {
            // line 51
            yield "              <a class=\"carousel-control-prev left carousel-control\" href=\"#";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["carousel"] ?? null), "id", [], "any", false, false, true, 51), "html", null, true);
            yield "\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon icon-prev\"></span>
                <span class=\"sr-only\">";
            // line 53
            yield t("Previous", array());
            yield "</span>
              </a>
              <a class=\"carousel-control-next right carousel-control\" href=\"#";
            // line 55
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["carousel"] ?? null), "id", [], "any", false, false, true, 55), "html", null, true);
            yield "\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon icon-next\"></span>
                <span class=\"sr-only\">";
            // line 57
            yield t("Next", array());
            yield "</span>
              </a>
              ";
        }
        // line 60
        yield "            </div>

            ";
        // line 62
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["thumbnails"] ?? null), "images", [], "any", false, false, true, 62)) > 1)) {
            // line 63
            yield "            <ol class=\"carousel-indicators\">
              ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["carousel"] ?? null), "images", [], "any", false, false, true, 64)) - 1)));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                // line 65
                yield "                <li data-target=\"#";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["carousel"] ?? null), "id", [], "any", false, false, true, 65), "html", null, true);
                yield "\" data-slide-to=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["index"], "html", null, true);
                yield "\" class=\"";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 65)) {
                    yield "active";
                }
                yield "\"></li>
              ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            yield "            </ol>
            ";
        }
        // line 69
        yield "
          </div>
        </div>

        <div class=\"modal-footer\">
          <button class=\"btn btn-secondary\" data-dismiss=\"modal\" value=\"Close\">";
        // line 74
        yield t("Close", array());
        yield "</button>
        </div>
      </div>
    </div>
  </div>

</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["modal", "main", "thumbnails", "lazyload", "carousel", "loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/bootstrap_basic_image_gallery/templates/bootstrap-basic-image-gallery.html.twig";
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
        return array (  259 => 74,  252 => 69,  248 => 67,  225 => 65,  208 => 64,  205 => 63,  203 => 62,  199 => 60,  193 => 57,  188 => 55,  183 => 53,  177 => 51,  175 => 50,  172 => 49,  155 => 46,  151 => 45,  142 => 44,  125 => 43,  113 => 40,  103 => 35,  92 => 31,  89 => 30,  85 => 28,  76 => 25,  65 => 24,  61 => 23,  58 => 22,  56 => 21,  49 => 19,  44 => 16,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/bootstrap_basic_image_gallery/templates/bootstrap-basic-image-gallery.html.twig", "C:\\xampp\\htdocs\\mmpl\\web\\modules\\contrib\\bootstrap_basic_image_gallery\\templates\\bootstrap-basic-image-gallery.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 21, "for" => 23, "trans" => 53);
        static $filters = array("escape" => 19, "length" => 21);
        static $functions = array("range" => 64);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'trans'],
                ['escape', 'length'],
                ['range'],
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
