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

/* @MauticCore/Helper/builder.html.twig */
class __TwigTemplate_18b54eda0b3ff189428f303bee02f503 extends Template
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
        // line 8
        yield "<div class=\"hide builder ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "-builder ";
        if ((($tmp = (isset($context["isCodeMode"]) || array_key_exists("isCodeMode", $context) ? $context["isCodeMode"] : (function () { throw new RuntimeError('Variable "isCodeMode" does not exist.', 8, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "code-mode";
        }
        yield "\">
    <div class=\"builder-content\">
        <input type=\"hidden\" id=\"builder_url\" value=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((("mautic_" . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 10, $this->source); })())) . "_action"), ["objectAction" => "builder", "objectId" => (isset($context["objectId"]) || array_key_exists("objectId", $context) ? $context["objectId"] : (function () { throw new RuntimeError('Variable "objectId" does not exist.', 10, $this->source); })())]), "html", null, true);
        yield "\" />
    </div>
    <div class=\"builder-panel\">
        <div class=\"code-editor ";
        // line 13
        if ((($tmp =  !(isset($context["isCodeMode"]) || array_key_exists("isCodeMode", $context) ? $context["isCodeMode"] : (function () { throw new RuntimeError('Variable "isCodeMode" does not exist.', 13, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "hide";
        }
        yield "\">
            <div id=\"customHtmlContainer\"></div>
            <i class=\"text-secondary\">";
        // line 15
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.code.mode.token.dropdown.hint"));
        yield "</i>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/builder.html.twig";
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
        return array (  65 => 15,  58 => 13,  52 => 10,  42 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/builder.html.twig", "/var/www/html/docroot/app/bundles/CoreBundle/Resources/views/Helper/builder.html.twig");
    }
}
