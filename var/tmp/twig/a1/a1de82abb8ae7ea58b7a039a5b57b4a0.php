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

/* @MauticCore/Helper/accordion.html.twig */
class __TwigTemplate_17faa35526d47545eef4238f96362660 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "
<!-- Accordion -->
<ul class=\"accordion\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            $context["itemId"] = Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", true, true, false, 11) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 11)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 11)) : ($this->getTemplateForMacro("macro_generate_id", $context, 11, $this->getSourceContext())->macro_generate_id(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 11)]))));
            // line 12
            $context["padding_inline"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "padding_inline", [], "any", true, true, false, 12) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "padding_inline", [], "any", false, false, false, 12)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "padding_inline", [], "any", false, false, false, 12)) : (true));
            // line 13
            yield "<li class=\"panel\">
            <a role=\"button\" id=\"heading";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["itemId"]) || array_key_exists("itemId", $context) ? $context["itemId"] : (function () { throw new RuntimeError('Variable "itemId" does not exist.', 14, $this->source); })()), "html", null, true);
            yield "\" class=\"accordion-heading collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["itemId"]) || array_key_exists("itemId", $context) ? $context["itemId"] : (function () { throw new RuntimeError('Variable "itemId" does not exist.', 14, $this->source); })()), "html", null, true);
            yield "\" aria-expanded=\"false\" aria-controls=\"collapse";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["itemId"]) || array_key_exists("itemId", $context) ? $context["itemId"] : (function () { throw new RuntimeError('Variable "itemId" does not exist.', 14, $this->source); })()), "html", null, true);
            yield "\">
                <i class=\"ri-arrow-down-s-line accordion-arrow\"></i>
                <span class=\"accordion-title\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 16)), "html", null, true);
            yield "</span>
            </a>
            <div id=\"collapse";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["itemId"]) || array_key_exists("itemId", $context) ? $context["itemId"] : (function () { throw new RuntimeError('Variable "itemId" does not exist.', 18, $this->source); })()), "html", null, true);
            yield "\" class=\"collapse accordion-wrapper\" role=\"tabpanel\" aria-labelledby=\"heading";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["itemId"]) || array_key_exists("itemId", $context) ? $context["itemId"] : (function () { throw new RuntimeError('Variable "itemId" does not exist.', 18, $this->source); })()), "html", null, true);
            yield "\">
                <div class=\"accordion-content";
            // line 19
            if ((($tmp =  !(isset($context["padding_inline"]) || array_key_exists("padding_inline", $context) ? $context["padding_inline"] : (function () { throw new RuntimeError('Variable "padding_inline" does not exist.', 19, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " accordion-content--slim";
            }
            yield "\">";
            // line 20
            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 20);
            // line 21
            yield "</div>
            </div>
        </li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "</ul>
";
        yield from [];
    }

    // line 2
    public function macro_generate_id($string = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "string" => $string,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 3
            $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), (isset($context["string"]) || array_key_exists("string", $context) ? $context["string"] : (function () { throw new RuntimeError('Variable "string" does not exist.', 3, $this->source); })()), ".");
            // line 4
            yield "    ";
            $context["id_parts"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 4, $this->source); })()),  -3);
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::join((isset($context["id_parts"]) || array_key_exists("id_parts", $context) ? $context["id_parts"] : (function () { throw new RuntimeError('Variable "id_parts" does not exist.', 5, $this->source); })()), "_"))), "html", null, true);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/accordion.html.twig";
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
        return array (  115 => 5,  112 => 4,  110 => 3,  98 => 2,  92 => 25,  84 => 21,  82 => 20,  77 => 19,  71 => 18,  66 => 16,  57 => 14,  54 => 13,  52 => 12,  50 => 11,  46 => 10,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/accordion.html.twig", "/var/www/html/docroot/app/bundles/CoreBundle/Resources/views/Helper/accordion.html.twig");
    }
}
