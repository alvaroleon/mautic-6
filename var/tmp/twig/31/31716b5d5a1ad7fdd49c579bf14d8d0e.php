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

/* @MauticCore/FormTheme/Config/_config_coreconfig_widget.html.twig */
class __TwigTemplate_6910c47f5302b4cc0141141c388c41a5 extends Template
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
            '_config_coreconfig_widget' => [$this, 'block__config_coreconfig_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('_config_coreconfig_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__config_coreconfig_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["fields"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "children", [], "any", false, false, false, 2);
        // line 3
        $context["fieldKeys"] = Twig\Extension\CoreExtension::keys((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 3, $this->source); })()));
        // line 4
        yield "
";
        // line 6
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["fieldKeys"]) || array_key_exists("fieldKeys", $context) ? $context["fieldKeys"] : (function () { throw new RuntimeError('Variable "fieldKeys" does not exist.', 6, $this->source); })()), function ($__k__) use ($context, $macros) { $context["k"] = $__k__; return CoreExtension::inFilter((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 6, $this->source); })()), ["site_url", "webroot", "404_page", "cache_path", "log_path", "theme", "image_path", "last_shown_tab"]); })) > 0)) {
            // line 8
            yield "    <h4 class=\"fw-sb mt-48 mb-xs\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.general"), "html", null, true);
            yield "</h4>
    <div class=\"text-muted small pb-md\">";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.general.description"), "html", null, true);
            yield "</div>
    <div class=\"row\">
        <div class=\"panel panel-default mb-md\">
            <div class=\"panel-body\">
                <div class=\"row\">

                    ";
            // line 15
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "webroot", [], "any", true, true, false, 15)) {
                // line 16
                yield "                    <div class=\"col-xs-12\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "webroot", [], "any", false, false, false, 16), 'row');
                yield "</div>
                    ";
            }
            // line 18
            yield "
                    ";
            // line 19
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "404_page", [], "array", true, true, false, 19)) {
                // line 20
                yield "                    <div class=\"col-xs-12\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "404_page", [], "array", false, false, false, 20), 'row');
                yield "</div>
                    ";
            }
            // line 22
            yield "
                    ";
            // line 23
            $context["technicalPathsContent"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 24
                yield "                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "site_url", [], "any", true, true, false, 24)) {
                    // line 25
                    yield "                        ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "site_url", [], "any", false, false, false, 25), 'row');
                    yield "
                    ";
                }
                // line 27
                yield "
                    ";
                // line 28
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "cache_path", [], "any", true, true, false, 28)) {
                    // line 29
                    yield "                        ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "cache_path", [], "any", false, false, false, 29), 'row');
                    yield "
                    ";
                }
                // line 31
                yield "
                    ";
                // line 32
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "log_path", [], "any", true, true, false, 32)) {
                    // line 33
                    yield "                        ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "log_path", [], "any", false, false, false, 33), 'row');
                    yield "
                    ";
                }
                // line 35
                yield "
                    ";
                // line 36
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "theme", [], "any", true, true, false, 36)) {
                    // line 37
                    yield "                        ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "theme", [], "any", false, false, false, 37), 'row');
                    yield "
                    ";
                }
                // line 39
                yield "
                    ";
                // line 40
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image_path", [], "any", true, true, false, 40)) {
                    // line 41
                    yield "                        ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "image_path", [], "any", false, false, false, 41), 'row');
                    yield "
                    ";
                }
                // line 43
                yield "
                    ";
                // line 44
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "last_shown_tab", [], "any", true, true, false, 44)) {
                    // line 45
                    yield "                        ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "last_shown_tab", [], "any", false, false, false, 45), 'row');
                    yield "
                    ";
                }
                // line 47
                yield "                ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 48
            yield "
                ";
            // line 49
            yield from $this->load("@MauticCore/Helper/accordion.html.twig", 49)->unwrap()->yield(CoreExtension::merge($context, ["items" => [["title" => "mautic.core.config.technical_paths", "content" =>             // line 53
(isset($context["technicalPathsContent"]) || array_key_exists("technicalPathsContent", $context) ? $context["technicalPathsContent"] : (function () { throw new RuntimeError('Variable "technicalPathsContent" does not exist.', 53, $this->source); })())]]]));
            // line 57
            yield "
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 63
        yield "
";
        // line 65
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["fieldKeys"]) || array_key_exists("fieldKeys", $context) ? $context["fieldKeys"] : (function () { throw new RuntimeError('Variable "fieldKeys" does not exist.', 65, $this->source); })()), function ($__k__) use ($context, $macros) { $context["k"] = $__k__; return CoreExtension::inFilter((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 65, $this->source); })()), ["default_pagelist", "timezone", "locale", "date_format_full", "date_format_short", "date_format_dateonly", "date_format_timeonly"]); })) > 0)) {
            // line 67
            yield "    <h4 class=\"fw-sb mt-48 mb-xs\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.defaults"), "html", null, true);
            yield "</h4>
    <div class=\"text-muted small pb-md\">";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.defaults.description"), "html", null, true);
            yield "</div>
    <div class=\"row\">
        <div class=\"panel panel-default mb-md\">
            <div class=\"panel-body\">
                <div class=\"row\">

                    ";
            // line 74
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "locale", [], "any", true, true, false, 74)) {
                // line 75
                yield "                    <div class=\"col-xs-12\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "locale", [], "any", false, false, false, 75), 'row');
                yield "</div>
                    ";
            }
            // line 77
            yield "
                    ";
            // line 78
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "default_timezone", [], "any", true, true, false, 78)) {
                // line 79
                yield "                    <div class=\"col-xs-12\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "default_timezone", [], "any", false, false, false, 79), 'row');
                yield "</div>
                    ";
            }
            // line 81
            yield "
                    <div class=\"mt-lg\">
                        ";
            // line 83
            $context["paginationContent"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 84
                yield "                            ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "default_pagelimit", [], "any", true, true, false, 84)) {
                    // line 85
                    yield "                                ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "default_pagelimit", [], "any", false, false, false, 85), 'row');
                    yield "
                            ";
                }
                // line 87
                yield "
                            ";
                // line 88
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "cached_data_timeout", [], "any", true, true, false, 88)) {
                    // line 89
                    yield "                                ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "cached_data_timeout", [], "any", false, false, false, 89), 'row');
                    yield "
                            ";
                }
                // line 91
                yield "
                            ";
                // line 92
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "default_daterange_filter", [], "any", true, true, false, 92)) {
                    // line 93
                    yield "                                ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "default_daterange_filter", [], "any", false, false, false, 93), 'row');
                    yield "
                            ";
                }
                // line 95
                yield "                        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 96
            yield "
                        ";
            // line 97
            $context["dateFormatsContent"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 98
                yield "                            ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date_format_full", [], "any", true, true, false, 98)) {
                    // line 99
                    yield "                                ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "date_format_full", [], "any", false, false, false, 99), 'row');
                    yield "
                            ";
                }
                // line 101
                yield "
                            ";
                // line 102
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date_format_short", [], "any", true, true, false, 102)) {
                    // line 103
                    yield "                                ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "date_format_short", [], "any", false, false, false, 103), 'row');
                    yield "
                            ";
                }
                // line 105
                yield "
                            ";
                // line 106
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date_format_dateonly", [], "any", true, true, false, 106)) {
                    // line 107
                    yield "                                ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "date_format_dateonly", [], "any", false, false, false, 107), 'row');
                    yield "
                            ";
                }
                // line 109
                yield "
                            ";
                // line 110
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date_format_timeonly", [], "any", true, true, false, 110)) {
                    // line 111
                    yield "                                ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "date_format_timeonly", [], "any", false, false, false, 111), 'row');
                    yield "
                            ";
                }
                // line 113
                yield "
                            ";
                // line 114
                yield from $this->load("@MauticCore/FormTheme/Config/_config_coreconfig_widget--dateformat.html.twig", 114)->unwrap()->yield($context);
                // line 115
                yield "                        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 116
            yield "
                        ";
            // line 117
            yield from $this->load("@MauticCore/Helper/accordion.html.twig", 117)->unwrap()->yield(CoreExtension::merge($context, ["items" => [["title" => "mautic.core.config.pagination_and_display", "content" =>             // line 121
(isset($context["paginationContent"]) || array_key_exists("paginationContent", $context) ? $context["paginationContent"] : (function () { throw new RuntimeError('Variable "paginationContent" does not exist.', 121, $this->source); })())], ["title" => "mautic.core.config.date_formats", "content" =>             // line 125
(isset($context["dateFormatsContent"]) || array_key_exists("dateFormatsContent", $context) ? $context["dateFormatsContent"] : (function () { throw new RuntimeError('Variable "dateFormatsContent" does not exist.', 125, $this->source); })())]]]));
            // line 129
            yield "                    </div>
                </div>
            </div>
        </div>
    </div>

";
        }
        // line 136
        yield "
";
        // line 138
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["fieldKeys"]) || array_key_exists("fieldKeys", $context) ? $context["fieldKeys"] : (function () { throw new RuntimeError('Variable "fieldKeys" does not exist.', 138, $this->source); })()), function ($__k__) use ($context, $macros) { $context["k"] = $__k__; return CoreExtension::inFilter((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 138, $this->source); })()), ["cors_restrict_domains", "trusted_hosts", "trusted_proxies", "headers_sts"]); })) > 0)) {
            // line 139
            yield "    <h4 class=\"fw-sb mt-48 mb-xs\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.cors"), "html", null, true);
            yield "</h4>
    <div class=\"text-muted small pb-md\">";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.cors.description"), "html", null, true);
            yield "</div>
    <div class=\"row\">
        <div class=\"panel panel-default mb-md\">
            <div class=\"panel-body\">
                <div class=\"row\">

                    ";
            // line 146
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "cors_restrict_domains", [], "any", true, true, false, 146)) {
                // line 147
                yield "                        <div class=\"col-xs-12\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "cors_restrict_domains", [], "any", false, false, false, 147), 'row');
                yield "</div>
                    ";
            }
            // line 149
            yield "
                    ";
            // line 150
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "cors_valid_domains", [], "any", true, true, false, 150)) {
                // line 151
                yield "                        <div class=\"col-xs-12\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "cors_valid_domains", [], "any", false, false, false, 151), 'row');
                yield "</div>
                    ";
            }
            // line 153
            yield "
                    <hr>

                    ";
            // line 156
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "trusted_hosts", [], "any", true, true, false, 156)) {
                // line 157
                yield "                        <div class=\"col-xs-12\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "trusted_hosts", [], "any", false, false, false, 157), 'row');
                yield "</div>
                    ";
            }
            // line 159
            yield "
                    ";
            // line 160
            $context["trustSettingsContent"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 161
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "trusted_proxies", [], "any", true, true, false, 161)) {
                    // line 162
                    yield "                            ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "trusted_proxies", [], "any", false, false, false, 162), 'row');
                    yield "
                        ";
                }
                // line 164
                yield "                    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 165
            yield "
                    ";
            // line 166
            $context["responseHeadersContent"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 167
                yield "                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "headers_sts", [], "any", true, true, false, 167)) {
                    // line 168
                    yield "                        ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "headers_sts", [], "any", false, false, false, 168), 'row');
                    yield "
                    ";
                }
                // line 170
                yield "
                    ";
                // line 171
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "headers_sts_subdomains", [], "any", true, true, false, 171)) {
                    // line 172
                    yield "                        ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "headers_sts_subdomains", [], "any", false, false, false, 172), 'row');
                    yield "
                    ";
                }
                // line 174
                yield "
                    ";
                // line 175
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "headers_sts_preload", [], "any", true, true, false, 175)) {
                    // line 176
                    yield "                        ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "headers_sts_preload", [], "any", false, false, false, 176), 'row');
                    yield "
                    ";
                }
                // line 178
                yield "
                    ";
                // line 179
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "headers_sts_expire_time", [], "any", true, true, false, 179)) {
                    // line 180
                    yield "                        ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "headers_sts_expire_time", [], "any", false, false, false, 180), 'row');
                    yield "
                    ";
                }
                // line 182
                yield "
                    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 184
            yield "
                    ";
            // line 185
            yield from $this->load("@MauticCore/Helper/accordion.html.twig", 185)->unwrap()->yield(CoreExtension::merge($context, ["items" => [["title" => "mautic.core.config.trust_settings", "content" =>             // line 189
(isset($context["trustSettingsContent"]) || array_key_exists("trustSettingsContent", $context) ? $context["trustSettingsContent"] : (function () { throw new RuntimeError('Variable "trustSettingsContent" does not exist.', 189, $this->source); })())], ["title" => "mautic.core.config.response_headers", "content" =>             // line 193
(isset($context["responseHeadersContent"]) || array_key_exists("responseHeadersContent", $context) ? $context["responseHeadersContent"] : (function () { throw new RuntimeError('Variable "responseHeadersContent" does not exist.', 193, $this->source); })())]]]));
            // line 197
            yield "                </div>
            </div>
        </div>
    </div>
";
        }
        // line 202
        yield "
";
        // line 204
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["fieldKeys"]) || array_key_exists("fieldKeys", $context) ? $context["fieldKeys"] : (function () { throw new RuntimeError('Variable "fieldKeys" does not exist.', 204, $this->source); })()), function ($__k__) use ($context, $macros) { $context["k"] = $__k__; return CoreExtension::inFilter((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 204, $this->source); })()), ["ip_lookup_service", "do_not_track_ips", "do_not_track_bots", "transliterate_page_title"]); })) > 0)) {
            // line 206
            yield "    <h4 class=\"fw-sb mt-48 mb-xs\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.misc"), "html", null, true);
            yield "</h4>
    <div class=\"text-muted small pb-md\">";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.misc.description"), "html", null, true);
            yield "</div>
    <div class=\"row\">
        <div class=\"panel panel-default mb-md\">
            <div class=\"panel-body\">
                <div class=\"row\">

                    ";
            // line 213
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "max_entity_lock_time", [], "any", true, true, false, 213)) {
                // line 214
                yield "                        <div class=\"col-xs-12\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "max_entity_lock_time", [], "any", false, false, false, 214), 'row');
                yield "</div>
                    ";
            }
            // line 216
            yield "
                    ";
            // line 217
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "transliterate_page_title", [], "any", true, true, false, 217)) {
                // line 218
                yield "                        <div class=\"col-xs-12\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), "transliterate_page_title", [], "any", false, false, false, 218), 'row');
                yield "</div>
                    ";
            }
            // line 220
            yield "
                    ";
            // line 221
            $context["ipLookupContent"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 222
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "ip_lookup_service", [], "any", true, true, false, 222)) {
                    // line 223
                    yield "                            ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), "ip_lookup_service", [], "any", false, false, false, 223), 'row');
                    yield "
                        ";
                }
                // line 225
                yield "
                        ";
                // line 226
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "ip_lookup_auth", [], "any", true, true, false, 226)) {
                    // line 227
                    yield "                            ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 227, $this->source); })()), "ip_lookup_auth", [], "any", false, false, false, 227), 'row');
                    yield "
                        ";
                }
                // line 229
                yield "
                        ";
                // line 230
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "ip_lookup_create_organization", [], "any", true, true, false, 230)) {
                    // line 231
                    yield "                            ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "ip_lookup_create_organization", [], "any", false, false, false, 231), 'row');
                    yield "
                        ";
                }
                // line 233
                yield "
                        <div id=\"ip_lookup_config_container\">
                            ";
                // line 235
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "ip_lookup_config", [], "any", true, true, false, 235)) {
                    // line 236
                    yield "                                ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 236, $this->source); })()), "ip_lookup_config", [], "any", false, false, false, 236), 'row');
                    yield "
                            ";
                }
                // line 238
                yield "                        </div>
                        <div class=\"row\">
                            <div class=\"small text-center\" id=\"ip_lookup_attribution\">";
                // line 240
                yield (isset($context["ipLookupAttribution"]) || array_key_exists("ipLookupAttribution", $context) ? $context["ipLookupAttribution"] : (function () { throw new RuntimeError('Variable "ipLookupAttribution" does not exist.', 240, $this->source); })());
                yield "</div>
                        </div>
                    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 243
            yield "
                    ";
            // line 244
            $context["trackingContent"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 245
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "do_not_track_ips", [], "any", true, true, false, 245)) {
                    // line 246
                    yield "                            ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 246, $this->source); })()), "do_not_track_ips", [], "any", false, false, false, 246), 'row');
                    yield "
                        ";
                }
                // line 248
                yield "
                        ";
                // line 249
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "do_not_track_bots", [], "any", true, true, false, 249)) {
                    // line 250
                    yield "                            ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "do_not_track_bots", [], "any", false, false, false, 250), 'row');
                    yield "
                        ";
                }
                // line 252
                yield "                    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 253
            yield "
                    ";
            // line 254
            $context["shortenerContent"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 255
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "shortener_service", [], "any", true, true, false, 255)) {
                    // line 256
                    yield "
                                <div class=\"col-xs-12\">
                                    ";
                    // line 258
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 258, $this->source); })()), "shortener_service", [], "any", false, false, false, 258), 'label');
                    yield "
                                    ";
                    // line 259
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 259, $this->source); })()), "shortener_service", [], "any", false, false, false, 259), "vars", [], "any", false, false, false, 259), "choices", [], "any", false, false, false, 259)) > 0)) {
                        // line 260
                        yield "                                        ";
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 260, $this->source); })()), "shortener_service", [], "any", false, false, false, 260), 'widget');
                        yield "
                                    ";
                    } else {
                        // line 262
                        yield "                                        <div class=\"alert alert-info\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.form.shortener.empty"), "html", null, true);
                        yield "</div>
                                    ";
                    }
                    // line 264
                    yield "                                </div>

                                ";
                    // line 266
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 266, $this->source); })()), "shortener_service", [], "any", false, false, false, 266), "vars", [], "any", false, false, false, 266), "choices", [], "any", false, false, false, 266)) > 0)) {
                        // line 267
                        yield "                                    ";
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "shortener_email_enable", [], "any", true, true, false, 267)) {
                            // line 268
                            yield "                                        <div class=\"col-md-3\">
                                            ";
                            // line 269
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 269, $this->source); })()), "shortener_email_enable", [], "any", false, false, false, 269), 'row');
                            yield "
                                        </div>
                                    ";
                        }
                        // line 272
                        yield "                                    ";
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "shortener_sms_enable", [], "any", true, true, false, 272)) {
                            // line 273
                            yield "                                        <div class=\"col-md-3\">
                                            ";
                            // line 274
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 274, $this->source); })()), "shortener_sms_enable", [], "any", false, false, false, 274), 'row');
                            yield "
                                        </div>
                                    ";
                        }
                        // line 277
                        yield "                                ";
                    }
                    // line 278
                    yield "
                        ";
                }
                // line 280
                yield "                    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 281
            yield "
                    ";
            // line 282
            yield from $this->load("@MauticCore/Helper/accordion.html.twig", 282)->unwrap()->yield(CoreExtension::merge($context, ["items" => [["title" => "mautic.core.config.ip_lookup", "content" =>             // line 286
(isset($context["ipLookupContent"]) || array_key_exists("ipLookupContent", $context) ? $context["ipLookupContent"] : (function () { throw new RuntimeError('Variable "ipLookupContent" does not exist.', 286, $this->source); })())], ["title" => "mautic.core.config.tracking_settings", "content" =>             // line 290
(isset($context["trackingContent"]) || array_key_exists("trackingContent", $context) ? $context["trackingContent"] : (function () { throw new RuntimeError('Variable "trackingContent" does not exist.', 290, $this->source); })())], ["title" => "mautic.core.config.link_shorteners", "padding_inline" => false, "content" =>             // line 295
(isset($context["shortenerContent"]) || array_key_exists("shortenerContent", $context) ? $context["shortenerContent"] : (function () { throw new RuntimeError('Variable "shortenerContent" does not exist.', 295, $this->source); })())]]]));
            // line 299
            yield "
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 305
        yield "
";
        // line 307
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["fieldKeys"]) || array_key_exists("fieldKeys", $context) ? $context["fieldKeys"] : (function () { throw new RuntimeError('Variable "fieldKeys" does not exist.', 307, $this->source); })()), function ($__k__) use ($context, $macros) { $context["k"] = $__k__; return CoreExtension::inFilter((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 307, $this->source); })()), ["update_stability", "composer_updates"]); })) > 0)) {
            // line 308
            yield "    <h4 class=\"fw-sb mt-48 mb-xs\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.update"), "html", null, true);
            yield "</h4>
    <div class=\"text-muted small pb-md\">";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.update.description"), "html", null, true);
            yield "</div>
    <div class=\"row\">
        <div class=\"panel panel-default mb-md\">
            <div class=\"panel-body\">
                <div class=\"row\">

                    ";
            // line 315
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "update_stability", [], "any", true, true, false, 315)) {
                // line 316
                yield "                        <div class=\"col-xs-12\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 316, $this->source); })()), "update_stability", [], "any", false, false, false, 316), 'row');
                yield "</div>
                    ";
            }
            // line 318
            yield "
                    ";
            // line 319
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "composer_updates", [], "any", true, true, false, 319)) {
                // line 320
                yield "
                        <div class=\"col-xs-12\">
                            ";
                // line 322
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 322, $this->source); })()), "composer_updates", [], "any", false, false, false, 322), 'row');
                yield "
                            <div class=\"alert alert-danger\" role=\"alert\">
                                ";
                // line 324
                yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.form.update.composer.warning", ["%url_start%" => "<a href=\"https://mau.tc/switch-to-composer\" target=\"_blank\" style=\"color: red; text-decoration: underline\">", "%url_end%" => "</a>"]);
                // line 327
                yield "
                            </div>
                        </div>
                    ";
            }
            // line 331
            yield "                </div>
            </div>
        </div>
    </div>

";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/FormTheme/Config/_config_coreconfig_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  731 => 331,  725 => 327,  723 => 324,  718 => 322,  714 => 320,  712 => 319,  709 => 318,  703 => 316,  701 => 315,  692 => 309,  687 => 308,  685 => 307,  682 => 305,  674 => 299,  672 => 295,  671 => 290,  670 => 286,  669 => 282,  666 => 281,  662 => 280,  658 => 278,  655 => 277,  649 => 274,  646 => 273,  643 => 272,  637 => 269,  634 => 268,  631 => 267,  629 => 266,  625 => 264,  619 => 262,  613 => 260,  611 => 259,  607 => 258,  603 => 256,  600 => 255,  598 => 254,  595 => 253,  591 => 252,  585 => 250,  583 => 249,  580 => 248,  574 => 246,  571 => 245,  569 => 244,  566 => 243,  559 => 240,  555 => 238,  549 => 236,  547 => 235,  543 => 233,  537 => 231,  535 => 230,  532 => 229,  526 => 227,  524 => 226,  521 => 225,  515 => 223,  512 => 222,  510 => 221,  507 => 220,  501 => 218,  499 => 217,  496 => 216,  490 => 214,  488 => 213,  479 => 207,  474 => 206,  472 => 204,  469 => 202,  462 => 197,  460 => 193,  459 => 189,  458 => 185,  455 => 184,  450 => 182,  444 => 180,  442 => 179,  439 => 178,  433 => 176,  431 => 175,  428 => 174,  422 => 172,  420 => 171,  417 => 170,  411 => 168,  408 => 167,  406 => 166,  403 => 165,  399 => 164,  393 => 162,  390 => 161,  388 => 160,  385 => 159,  379 => 157,  377 => 156,  372 => 153,  366 => 151,  364 => 150,  361 => 149,  355 => 147,  353 => 146,  344 => 140,  339 => 139,  337 => 138,  334 => 136,  325 => 129,  323 => 125,  322 => 121,  321 => 117,  318 => 116,  314 => 115,  312 => 114,  309 => 113,  303 => 111,  301 => 110,  298 => 109,  292 => 107,  290 => 106,  287 => 105,  281 => 103,  279 => 102,  276 => 101,  270 => 99,  267 => 98,  265 => 97,  262 => 96,  258 => 95,  252 => 93,  250 => 92,  247 => 91,  241 => 89,  239 => 88,  236 => 87,  230 => 85,  227 => 84,  225 => 83,  221 => 81,  215 => 79,  213 => 78,  210 => 77,  204 => 75,  202 => 74,  193 => 68,  188 => 67,  186 => 65,  183 => 63,  175 => 57,  173 => 53,  172 => 49,  169 => 48,  165 => 47,  159 => 45,  157 => 44,  154 => 43,  148 => 41,  146 => 40,  143 => 39,  137 => 37,  135 => 36,  132 => 35,  126 => 33,  124 => 32,  121 => 31,  115 => 29,  113 => 28,  110 => 27,  104 => 25,  101 => 24,  99 => 23,  96 => 22,  90 => 20,  88 => 19,  85 => 18,  79 => 16,  77 => 15,  68 => 9,  63 => 8,  61 => 6,  58 => 4,  56 => 3,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/FormTheme/Config/_config_coreconfig_widget.html.twig", "/var/www/html/docroot/app/bundles/CoreBundle/Resources/views/FormTheme/Config/_config_coreconfig_widget.html.twig");
    }
}
