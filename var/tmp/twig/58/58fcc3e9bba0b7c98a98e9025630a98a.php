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

/* @MauticMessenger/FormTheme/Config/_config_messengerconfig_widget.html.twig */
class __TwigTemplate_f2fc734ad56879cb67db9de82103687f extends Template
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
            '_config_messengerconfig_widget' => [$this, 'block__config_messengerconfig_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('_config_messengerconfig_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__config_messengerconfig_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<div class=\"alert alert-info mt-md\" role=\"alert\">
    ";
        // line 3
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.messenger.config.dsn_help_general", ["%link%" => "https://symfony.com/doc/5.4/messenger.html#transport-configuration"], "messages");
        // line 4
        yield "</div>

<h4 class=\"fw-sb mt-48 mb-xs\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.messenger.config.dsn_email"), "html", null, true);
        yield "</h4>
<div class=\"text-muted small pb-md\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.messenger.email.description"), "html", null, true);
        yield "</div>
<div class=\"row\">
    <div class=\"panel panel-default mb-md\">
        <div class=\"panel-body\">
            ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "messenger_dsn_email", [], "any", false, false, false, 11), 'row');
        yield "
        </div>
    </div>
</div>

<h4 class=\"fw-sb mt-48 mb-xs\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.messenger.config.dsn_hit"), "html", null, true);
        yield "</h4>
<div class=\"text-muted small pb-md\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.messenger.hit.description"), "html", null, true);
        yield "</div>
<div class=\"row\">
    <div class=\"panel panel-default mb-md\">
        <div class=\"panel-body\">
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "messenger_dsn_hit", [], "any", false, false, false, 21), 'row');
        yield "
        </div>
    </div>
</div>

<div class=\"alert alert-info\" role=\"alert\">
    ";
        // line 27
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.messenger.config.dsn_help_retry_strategy", ["%link%" => "https://symfony.com/doc/5.4/messenger.html#retries-failures"], "messages");
        // line 28
        yield "</div>

<h4 class=\"fw-sb mt-48 mb-xs\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.messenger.config.retry_strategy"), "html", null, true);
        yield "</h4>
<div class=\"text-muted small pb-md\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.messenger.retry.description"), "html", null, true);
        yield "</div>
<div class=\"row\">
    <div class=\"panel panel-default mb-md\">
        <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-lg-3\">
                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "messenger_retry_strategy_max_retries", [], "any", false, false, false, 37), 'row');
        yield "
                </div>
                <div class=\"col-xs-12 col-lg-3\">
                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "messenger_retry_strategy_delay", [], "any", false, false, false, 40), 'row');
        yield "
                </div>
                <div class=\"col-xs-12 col-lg-3\">
                    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "messenger_retry_strategy_multiplier", [], "any", false, false, false, 43), 'row');
        yield "
                </div>
                <div class=\"col-xs-12 col-lg-3\">
                    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "messenger_retry_strategy_max_delay", [], "any", false, false, false, 46), 'row');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"alert alert-info\" role=\"alert\">
    ";
        // line 54
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.messenger.config.dsn_help_failed", ["%link%" => "https://symfony.com/doc/5.4/messenger.html#saving-retrying-failed-messages"], "messages");
        // line 55
        yield "</div>

<h4 class=\"fw-sb mt-48 mb-xs\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.messenger.config.dsn_failed"), "html", null, true);
        yield "</h4>
<div class=\"text-muted small pb-md\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.messenger.failed.description"), "html", null, true);
        yield "</div>
<div class=\"row\">
    <div class=\"panel panel-default mb-md\">
        <div class=\"panel-body\">
            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "messenger_dsn_failed", [], "any", false, false, false, 62), 'row');
        yield "   
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
        return "@MauticMessenger/FormTheme/Config/_config_messengerconfig_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  167 => 62,  160 => 58,  156 => 57,  152 => 55,  150 => 54,  139 => 46,  133 => 43,  127 => 40,  121 => 37,  112 => 31,  108 => 30,  104 => 28,  102 => 27,  93 => 21,  86 => 17,  82 => 16,  74 => 11,  67 => 7,  63 => 6,  59 => 4,  57 => 3,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticMessenger/FormTheme/Config/_config_messengerconfig_widget.html.twig", "/var/www/html/docroot/app/bundles/MessengerBundle/Resources/views/FormTheme/Config/_config_messengerconfig_widget.html.twig");
    }
}
