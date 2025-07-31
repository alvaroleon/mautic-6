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

/* @MauticCore/FormTheme/Config/_config_coreconfig_widget--dateformat.html.twig */
class __TwigTemplate_36e0431d47a437e9d9a862a74ea03190 extends Template
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
        // line 1
        $context["dateFormats_help"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "<div class=\"d-flex fd-column\">
    <h4 class=\"fw-b mt-lg mb-sm\">";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.defaults.dates"), "html", null, true);
            yield "</h4>
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <p>
                <strong>";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.locale.us_format"), "html", null, true);
            yield ":</strong>
                <code>m/d/Y h:i A</code>
                ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.locale.example"), "html", null, true);
            yield ": 06/24/2024 08:20 AM
            </p>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <p>
                <strong>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.locale.uk_format"), "html", null, true);
            yield ":</strong>
                <code>d/m/Y H:i</code>
                ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.locale.example"), "html", null, true);
            yield ": 24/06/2024 08:20
            </p>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <p>
                <strong>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.locale.iso_format"), "html", null, true);
            yield ":</strong>
                <code>Y-m-d\\TH:i:sP</code>
                ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.locale.example"), "html", null, true);
            yield ": 2024-06-24T08:20:00+00:00
            </p>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <p>
                <strong>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.locale.rfc_format"), "html", null, true);
            yield ":</strong>
                <code>D, d M Y H:i:s O</code>
                ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.locale.example"), "html", null, true);
            yield ": Mon, 24 Jun 2024 08:20:00 +0000
            </p>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <p>
                <strong>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.locale.full_month_format"), "html", null, true);
            yield ":</strong>
                <code>l, F j, Y g:i A</code>
                ";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.locale.example"), "html", null, true);
            yield ": Monday, June 24, 2024 8:20 AM
            </p>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <p>
                <strong>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.locale.short_format"), "html", null, true);
            yield ":</strong>
                <code>d-M-y H:i</code>
                ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.locale.example"), "html", null, true);
            yield ": 24-Jun-24 08:20
            </p>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <p>
                <strong>";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.locale.year_day_format"), "html", null, true);
            yield ":</strong>
                <code>Y-z H:i:s</code>
                ";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.locale.example"), "html", null, true);
            yield ": 2024-176 08:20:00
            </p>
        </div>
    </div>
</div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        yield "<div>
    ";
        // line 76
        yield from $this->load("@MauticCore/Helper/toggletip.html.twig", 76)->unwrap()->yield(CoreExtension::merge($context, ["size" => "sm", "content" =>         // line 78
(isset($context["dateFormats_help"]) || array_key_exists("dateFormats_help", $context) ? $context["dateFormats_help"] : (function () { throw new RuntimeError('Variable "dateFormats_help" does not exist.', 78, $this->source); })()), "html" => true, "trigger" => "click"]));
        // line 82
        yield "</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/FormTheme/Config/_config_coreconfig_widget--dateformat.html.twig";
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
        return array (  171 => 82,  169 => 78,  168 => 76,  165 => 75,  155 => 69,  150 => 67,  139 => 59,  134 => 57,  123 => 49,  118 => 47,  107 => 39,  102 => 37,  91 => 29,  86 => 27,  75 => 19,  70 => 17,  59 => 9,  54 => 7,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/FormTheme/Config/_config_coreconfig_widget--dateformat.html.twig", "/var/www/html/docroot/app/bundles/CoreBundle/Resources/views/FormTheme/Config/_config_coreconfig_widget--dateformat.html.twig");
    }
}
