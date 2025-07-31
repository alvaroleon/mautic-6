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

/* @MauticSms/FormTheme/Config/_config_smsconfig_widget.html.twig */
class __TwigTemplate_7127856b88e06f1abe0174c54f4b794e extends Template
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
            '_config_smsconfig_widget' => [$this, 'block__config_smsconfig_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('_config_smsconfig_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__config_smsconfig_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<h4 class=\"fw-sb mt-48 mb-xs\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.smsconfig"), "html", null, true);
        yield "</h4>
<div class=\"text-muted small pb-md\">";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.smsconfig.description"), "html", null, true);
        yield "</div>
<div class=\"row\">
    <div class=\"panel panel-default mb-md\">
        <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    ";
        // line 9
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "sms_transport", [], "any", false, false, false, 9), "vars", [], "any", false, false, false, 9), "choices", [], "any", false, false, false, 9))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "sms_transport", [], "any", false, false, false, 10), 'row');
            yield "
                    ";
        } else {
            // line 12
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.config.smsconfig"), "html", null, true);
            yield "
                    ";
        }
        // line 14
        yield "                </div>
                <hr>
                <div class=\"col-xs-12\">
                    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "sms_disable_trackable_urls", [], "any", false, false, false, 17), 'row');
        yield "
                </div>
            </div>
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
        return "@MauticSms/FormTheme/Config/_config_smsconfig_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  87 => 17,  82 => 14,  76 => 12,  70 => 10,  68 => 9,  59 => 3,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticSms/FormTheme/Config/_config_smsconfig_widget.html.twig", "/var/www/html/docroot/app/bundles/SmsBundle/Resources/views/FormTheme/Config/_config_smsconfig_widget.html.twig");
    }
}
