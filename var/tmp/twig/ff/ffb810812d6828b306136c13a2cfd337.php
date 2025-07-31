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

/* @MauticEmail/FormTheme/Config/_config_emailconfig_widget.html.twig */
class __TwigTemplate_3b98718e21b1a3f5e154484081a15ead extends Template
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
            '_config_emailconfig_widget' => [$this, 'block__config_emailconfig_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "
";
        // line 9
        yield from $this->unwrap()->yieldBlock('_config_emailconfig_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__config_emailconfig_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        $context["fields"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "children", [], "any", false, false, false, 10);
        // line 11
        $context["fieldKeys"] = Twig\Extension\CoreExtension::keys((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 11, $this->source); })()));
        // line 12
        yield "
";
        // line 13
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), ["@MauticEmail/FormTheme/Config/monitored_email_widget.html.twig", "@MauticEmail/FormTheme/Config/monitored_mailboxes_widget.html.twig"], true);
        // line 17
        yield "
";
        // line 18
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["fieldKeys"]) || array_key_exists("fieldKeys", $context) ? $context["fieldKeys"] : (function () { throw new RuntimeError('Variable "fieldKeys" does not exist.', 18, $this->source); })()), function ($__k__) use ($context, $macros) { $context["k"] = $__k__; return CoreExtension::inFilter((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 18, $this->source); })()), ["mailer_from_name", "mailer_from_email", "mailer_reply_to_email"]); })) > 0)) {
            // line 19
            yield "    <h4 class=\"fw-sb mt-48 mb-xs\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.config.header.mail"), "html", null, true);
            yield "</h4>
    <div class=\"text-muted small pb-md\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.mail.description"), "html", null, true);
            yield "</div>
    <div class=\"row\">
        <div class=\"panel panel-default mb-md\">
            <div class=\"panel-body\">
                <div class=\"row\">
                    ";
            // line 25
            yield $this->getTemplateForMacro("macro_row_if_exists", $context, 25, $this->getSourceContext())->macro_row_if_exists(...[(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 25, $this->source); })()), "mailer_from_name"]);
            yield "
                    ";
            // line 26
            yield $this->getTemplateForMacro("macro_row_if_exists", $context, 26, $this->getSourceContext())->macro_row_if_exists(...[(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 26, $this->source); })()), "mailer_from_email"]);
            yield "
                    ";
            // line 27
            yield $this->getTemplateForMacro("macro_row_if_exists", $context, 27, $this->getSourceContext())->macro_row_if_exists(...[(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 27, $this->source); })()), "mailer_reply_to_email"]);
            yield "
                    ";
            // line 28
            yield $this->getTemplateForMacro("macro_row_if_exists", $context, 28, $this->getSourceContext())->macro_row_if_exists(...[(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 28, $this->source); })()), "mailer_return_path"]);
            yield "
                    ";
            // line 29
            yield $this->getTemplateForMacro("macro_row_if_exists", $context, 29, $this->getSourceContext())->macro_row_if_exists(...[(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 29, $this->source); })()), "mailer_address_length_limit"]);
            yield "
                    ";
            // line 30
            yield $this->getTemplateForMacro("macro_row_if_exists", $context, 30, $this->getSourceContext())->macro_row_if_exists(...[(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 30, $this->source); })()), "mailer_is_owner"]);
            yield "
                    ";
            // line 31
            yield $this->getTemplateForMacro("macro_row_if_exists", $context, 31, $this->getSourceContext())->macro_row_if_exists(...[(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 31, $this->source); })()), "mailer_custom_headers"]);
            yield "
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 37
        yield "
<h4 class=\"fw-sb mt-48 mb-xs\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.config.header.dsn"), "html", null, true);
        yield "</h4>
<div class=\"text-muted small pb-md\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.dsn.description"), "html", null, true);
        yield "</div>
<div class=\"row\">
    <div class=\"panel panel-default mb-md\">
        <div class=\"panel-body\">
            <div class=\"col-xs-12\">
                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 44, $this->source); })()), "mailer_dsn", [], "any", false, false, false, 44), 'row');
        yield "
            </div>
        </div>
    </div>
</div>

<h4 class=\"fw-sb mt-48 mb-xs\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.frequency_rules"), "html", null, true);
        yield "</h4>
<div class=\"text-muted small pb-md\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.frequency_rules.description"), "html", null, true);
        yield "</div>
<div class=\"row\">
    <div class=\"panel panel-default mb-md\">
        <div class=\"panel-body\">
            <div class=\"col-xs-12\">
                ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 56, $this->source); })()), "email_frequency_number", [], "any", false, false, false, 56), 'row');
        yield "
                ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 57, $this->source); })()), "email_frequency_time", [], "any", false, false, false, 57), 'row');
        yield "
            </div>
        </div>
    </div>
</div>

";
        // line 63
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "monitored_email", [], "any", true, true, false, 63)) {
            // line 64
            yield "    <h4 class=\"fw-sb mt-48 mb-xs\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.config.header.monitored_email"), "html", null, true);
            yield "</h4>
    <div class=\"text-muted small pb-md\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.monitored_email.description"), "html", null, true);
            yield "</div>
    <div class=\"row\">
        <div class=\"panel panel-default mb-md\">
            <div class=\"panel-body\">
                ";
            // line 69
            if ($this->env->getTest('function')->getCallable()("imap_open")) {
                // line 70
                yield "                    ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "monitored_email", [], "any", false, false, false, 70), 'widget');
                yield "
                ";
            } else {
                // line 72
                yield "                    <div class=\"alert alert-info\">";
                yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.imap_extension_missing"));
                yield "</div>
                ";
            }
            // line 74
            yield "            </div>
        </div>
    </div>
";
        }
        // line 78
        yield "
<h4 class=\"fw-sb mt-48 mb-xs\">";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.config.header.message"), "html", null, true);
        yield "</h4>
<div class=\"text-muted small pb-md\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.message.description"), "html", null, true);
        yield "</div>
<div class=\"row\">
    <div class=\"panel panel-default mb-md\">
        <div class=\"panel-body\">
            <div class=\"row\">
                ";
        // line 85
        yield $this->getTemplateForMacro("macro_row_if_exists", $context, 85, $this->getSourceContext())->macro_row_if_exists(...[(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 85, $this->source); })()), "webview_text"]);
        yield "
                ";
        // line 86
        yield $this->getTemplateForMacro("macro_row_if_exists", $context, 86, $this->getSourceContext())->macro_row_if_exists(...[(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 86, $this->source); })()), "default_signature_text"]);
        yield "
                ";
        // line 87
        yield $this->getTemplateForMacro("macro_row_if_exists", $context, 87, $this->getSourceContext())->macro_row_if_exists(...[(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 87, $this->source); })()), "mailer_append_tracking_pixel"]);
        yield "
                ";
        // line 88
        yield $this->getTemplateForMacro("macro_row_if_exists", $context, 88, $this->getSourceContext())->macro_row_if_exists(...[(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 88, $this->source); })()), "mailer_convert_embed_images"]);
        yield "
                ";
        // line 89
        yield $this->getTemplateForMacro("macro_row_if_exists", $context, 89, $this->getSourceContext())->macro_row_if_exists(...[(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 89, $this->source); })()), "disable_trackable_urls"]);
        yield "
                ";
        // line 90
        yield $this->getTemplateForMacro("macro_row_if_exists", $context, 90, $this->getSourceContext())->macro_row_if_exists(...[(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 90, $this->source); })()), "minify_email_html"]);
        yield "
                ";
        // line 91
        yield $this->getTemplateForMacro("macro_row_if_exists", $context, 91, $this->getSourceContext())->macro_row_if_exists(...[(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 91, $this->source); })()), "email_draft_enabled"]);
        yield "
            </div>
        </div>
    </div>
</div>

<h4 class=\"fw-sb mt-48 mb-xs\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.config.header.unsubscribe"), "html", null, true);
        yield "</h4>
<div class=\"text-muted small pb-md\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.unsubscribe.description"), "html", null, true);
        yield "</div>
<div class=\"row\">
    <div class=\"panel panel-default mb-md\">
        <div class=\"panel-body\">
            <div class=\"row\">
                ";
        // line 103
        yield $this->getTemplateForMacro("macro_row_if_exists", $context, 103, $this->getSourceContext())->macro_row_if_exists(...[(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 103, $this->source); })()), "unsubscribe_text"]);
        yield "
                ";
        // line 104
        yield $this->getTemplateForMacro("macro_row_if_exists", $context, 104, $this->getSourceContext())->macro_row_if_exists(...[(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 104, $this->source); })()), "unsubscribe_message"]);
        yield "
                ";
        // line 105
        yield $this->getTemplateForMacro("macro_row_if_exists", $context, 105, $this->getSourceContext())->macro_row_if_exists(...[(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 105, $this->source); })()), "resubscribe_message"]);
        yield "
                ";
        // line 106
        yield $this->getTemplateForMacro("macro_row_if_exists", $context, 106, $this->getSourceContext())->macro_row_if_exists(...[(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 106, $this->source); })()), "show_contact_preferences"]);
        yield "
                ";
        // line 107
        yield $this->getTemplateForMacro("macro_row_if_exists", $context, 107, $this->getSourceContext())->macro_row_if_exists(...[(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 107, $this->source); })()), "show_contact_segments"]);
        yield "
                ";
        // line 108
        yield $this->getTemplateForMacro("macro_row_if_exists", $context, 108, $this->getSourceContext())->macro_row_if_exists(...[(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 108, $this->source); })()), "show_contact_frequency"]);
        yield "
                ";
        // line 109
        yield $this->getTemplateForMacro("macro_row_if_exists", $context, 109, $this->getSourceContext())->macro_row_if_exists(...[(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 109, $this->source); })()), "show_contact_pause_dates"]);
        yield "
                ";
        // line 110
        yield $this->getTemplateForMacro("macro_row_if_exists", $context, 110, $this->getSourceContext())->macro_row_if_exists(...[(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 110, $this->source); })()), "show_contact_categories"]);
        yield "
                ";
        // line 111
        yield $this->getTemplateForMacro("macro_row_if_exists", $context, 111, $this->getSourceContext())->macro_row_if_exists(...[(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 111, $this->source); })()), "show_contact_preferred_channels"]);
        yield "
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 1
    public function macro_row_if_exists($form = null, $field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "  ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 2, $this->source); })()), [], "array", true, true, false, 2)) {
                // line 3
                yield "    <div class=\"col-xs-12\">
      ";
                // line 4
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 4, $this->source); })()), [], "array", false, false, false, 4), 'row');
                yield "
    </div>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticEmail/FormTheme/Config/_config_emailconfig_widget.html.twig";
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
        return array (  322 => 4,  319 => 3,  316 => 2,  303 => 1,  292 => 111,  288 => 110,  284 => 109,  280 => 108,  276 => 107,  272 => 106,  268 => 105,  264 => 104,  260 => 103,  252 => 98,  248 => 97,  239 => 91,  235 => 90,  231 => 89,  227 => 88,  223 => 87,  219 => 86,  215 => 85,  207 => 80,  203 => 79,  200 => 78,  194 => 74,  188 => 72,  182 => 70,  180 => 69,  173 => 65,  168 => 64,  166 => 63,  157 => 57,  153 => 56,  145 => 51,  141 => 50,  132 => 44,  124 => 39,  120 => 38,  117 => 37,  108 => 31,  104 => 30,  100 => 29,  96 => 28,  92 => 27,  88 => 26,  84 => 25,  76 => 20,  71 => 19,  69 => 18,  66 => 17,  64 => 13,  61 => 12,  59 => 11,  57 => 10,  46 => 9,  43 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/FormTheme/Config/_config_emailconfig_widget.html.twig", "/var/www/html/docroot/app/bundles/EmailBundle/Resources/views/FormTheme/Config/_config_emailconfig_widget.html.twig");
    }
}
