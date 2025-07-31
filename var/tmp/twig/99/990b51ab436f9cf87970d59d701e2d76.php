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

/* @MauticCore/Standard/list.html.twig */
class __TwigTemplate_7dcefb3334cdaab9eb425f57777c42bf extends Template
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

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
            'mainContent' => [$this, 'block_mainContent'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 5
        return $this->load((((($tmp = (isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 5, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), 5);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["ignoreStandardColumns"] = ((array_key_exists("ignoreStandardColumns", $context)) ? ((isset($context["ignoreStandardColumns"]) || array_key_exists("ignoreStandardColumns", $context) ? $context["ignoreStandardColumns"] : (function () { throw new RuntimeError('Variable "ignoreStandardColumns" does not exist.', 1, $this->source); })())) : ([]));
        // line 2
        $context["isIndex"] = ((((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 2, $this->source); })()) == "index")) ? (true) : (false));
        // line 3
        $context["tmpl"] = "list";
        // line 13
        if ((($tmp =  !array_key_exists("headerTitle", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            $context["headerTitle"] = "Mautic";
        }
        // line 16
        $context["headerTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 16, $this->source); })()));
        // line 5
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "    ";
        if (array_key_exists("mauticContent", $context)) {
            // line 9
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mauticContent"]) || array_key_exists("mauticContent", $context) ? $context["mauticContent"] : (function () { throw new RuntimeError('Variable "mauticContent" does not exist.', 9, $this->source); })()), "html", null, true);
            yield "
    ";
        }
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 18, $this->source); })()), "html", null, true);
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "    ";
        if ((($tmp = (isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 21, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "        <div id=\"page-list-wrapper\" class=\"panel panel-default\">";
            // line 23
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 24
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 24, $this->source); })()), "action" =>             // line 25
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 25, $this->source); })()), "actionRoute" =>             // line 26
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 26, $this->source); })()), "indexRoute" =>             // line 27
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 27, $this->source); })()), "translationBase" =>             // line 28
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 28, $this->source); })()), "preCustomButtons" => ((            // line 29
array_key_exists("toolBarButtons", $context)) ? ((isset($context["toolBarButtons"]) || array_key_exists("toolBarButtons", $context) ? $context["toolBarButtons"] : (function () { throw new RuntimeError('Variable "toolBarButtons" does not exist.', 29, $this->source); })())) : (null)), "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 31
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 31, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 31, $this->source); })()) . ":delete"), [], "array", false, false, false, 31)], "filters" => ((            // line 33
array_key_exists("filters", $context)) ? ((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 33, $this->source); })())) : ([])), "page_actions" => ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,             // line 36
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 36, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 36, $this->source); })()) . ":create"), [], "array", false, false, false, 36)], "actionRoute" =>             // line 38
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 38, $this->source); })()), "indexRoute" =>             // line 39
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 39, $this->source); })()), "translationBase" =>             // line 40
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 40, $this->source); })())]]);
            // line 44
            yield "<div class=\"page-list\">
                ";
            // line 45
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("content.above", $context);
            yield "
                ";
            // line 46
            yield from             $this->unwrap()->yieldBlock("mainContent", $context, $blocks);
            yield "
                ";
            // line 47
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("content.below", $context);
            yield "
            </div>
        </div>
    ";
        } else {
            // line 51
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("mainContent", $context, $blocks);
            yield "
    ";
        }
        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mainContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 56
        yield "    ";
        if ((($tmp =  !array_key_exists("templateVariables", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "        ";
            $context["templateVariables"] = [];
            // line 58
            yield "    ";
        }
        // line 59
        yield "
    ";
        // line 60
        if ((($tmp =  !array_key_exists("sessionVar", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "        ";
            $context["sessionVar"] = "entity";
            // line 62
            yield "    ";
        }
        // line 63
        yield "
    ";
        // line 64
        if ((($tmp =  !array_key_exists("nameAction", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 65
            yield "        ";
            $context["nameAction"] = "view";
            // line 66
            yield "    ";
        }
        // line 67
        yield "
    ";
        // line 68
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 68, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "        ";
            if ($this->env->getTest('instanceof')->getCallable()((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 69, $this->source); })()), "DoctrineORMToolsPaginationPaginator")) {
                // line 70
                yield "            ";
                $context["item"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 70, $this->source); })()), "getIterator", [], "method", false, false, false, 70), "getArrayCopy", [], "method", false, false, false, 70);
                // line 71
                yield "        ";
            }
            // line 72
            yield "
        ";
            // line 73
            $context["firstItem"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 73, $this->source); })()));
            // line 74
            yield "        <div class=\"table-responsive\">
            <table class=\"table table-hover ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 75, $this->source); })()), "html", null, true);
            yield "-list\">
                <thead>
                <tr>
                    ";
            // line 78
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreStandardColumns"]) || array_key_exists("ignoreStandardColumns", $context) ? $context["ignoreStandardColumns"] : (function () { throw new RuntimeError('Variable "ignoreStandardColumns" does not exist.', 78, $this->source); })()))) {
                // line 79
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "actionRoute" =>                 // line 82
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 82, $this->source); })()), "indexRoute" =>                 // line 83
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 83, $this->source); })()), "templateButtons" => ["delete" => (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,                 // line 85
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 85, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 85, $this->source); })()) . ":deleteown"), [], "array", false, false, false, 85)) ||  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 85, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 85, $this->source); })()) . ":deleteown"), [], "array", false, false, false, 85))) ||  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 85, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 85, $this->source); })()) . ":delete"), [], "array", false, false, false, 85)))]]);
                // line 88
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" =>                 // line 91
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 91, $this->source); })()), "orderBy" => (                // line 92
(isset($context["tablePrefix"]) || array_key_exists("tablePrefix", $context) ? $context["tablePrefix"] : (function () { throw new RuntimeError('Variable "tablePrefix" does not exist.', 92, $this->source); })()) . ".name"), "text" => "mautic.core.name", "class" => "col-name", "default" => true]);
                // line 99
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["firstItem"] ?? null), "getCategory", [], "any", true, true, false, 99)) {
                    // line 100
                    yield "                            ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" =>                     // line 102
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 102, $this->source); })()), "orderBy" => (((                    // line 103
array_key_exists("categoryTablePrefix", $context)) ? ((isset($context["categoryTablePrefix"]) || array_key_exists("categoryTablePrefix", $context) ? $context["categoryTablePrefix"] : (function () { throw new RuntimeError('Variable "categoryTablePrefix" does not exist.', 103, $this->source); })())) : ("cat")) . ".title"), "text" => "mautic.core.category", "class" => "visible-md visible-lg col-focus-category"]);
                    // line 106
                    yield "
                        ";
                }
                // line 108
                yield "                    ";
            }
            // line 109
            yield "
                        ";
            // line 110
            if (array_key_exists("listHeaders", $context)) {
                // line 111
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listHeaders"]) || array_key_exists("listHeaders", $context) ? $context["listHeaders"] : (function () { throw new RuntimeError('Variable "listHeaders" does not exist.', 111, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                    // line 112
                    yield "                                ";
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["header"], "sessionVar", [], "any", true, true, false, 112)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 113
                        yield "                                    ";
                        $context["header"] = Twig\Extension\CoreExtension::merge($context["header"], ["sessionVar" => (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 113, $this->source); })())]);
                        // line 114
                        yield "                                ";
                    }
                    // line 115
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", $context["header"]);
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
                unset($context['_seq'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                yield "                        ";
            }
            // line 118
            yield "
                        ";
            // line 119
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreStandardColumns"]) || array_key_exists("ignoreStandardColumns", $context) ? $context["ignoreStandardColumns"] : (function () { throw new RuntimeError('Variable "ignoreStandardColumns" does not exist.', 119, $this->source); })()))) {
                // line 120
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" =>                 // line 122
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 122, $this->source); })()), "orderBy" => (                // line 123
(isset($context["tablePrefix"]) || array_key_exists("tablePrefix", $context) ? $context["tablePrefix"] : (function () { throw new RuntimeError('Variable "tablePrefix" does not exist.', 123, $this->source); })()) . ".id"), "text" => "mautic.core.id", "class" => "visible-md visible-lg col-id"]);
            }
            // line 128
            yield "
                        ";
            // line 129
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("list.headers", $context);
            yield "
                </tr>
                </thead>
                <tbody>
                ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 133, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 134
                yield "                    <tr>
                        ";
                // line 135
                if (Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreStandardColumns"]) || array_key_exists("ignoreStandardColumns", $context) ? $context["ignoreStandardColumns"] : (function () { throw new RuntimeError('Variable "ignoreStandardColumns" does not exist.', 135, $this->source); })()))) {
                    // line 136
                    yield "                            <td>";
                    // line 137
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                     // line 139
$context["item"], "templateButtons" => ["edit" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 141
$context["item"], "getCreatedBy", [], "any", true, true, false, 141)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                     // line 144
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 144, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 144, $this->source); })()) . ":editown"), [], "array", false, false, false, 144), CoreExtension::getAttribute($this->env, $this->source,                     // line 145
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 145, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 145, $this->source); })()) . ":editother"), [], "array", false, false, false, 145), CoreExtension::getAttribute($this->env, $this->source,                     // line 146
$context["item"], "getCreatedBy", [], "method", false, false, false, 146))) : (CoreExtension::getAttribute($this->env, $this->source,                     // line 149
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 149, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 149, $this->source); })()) . ":edit"), [], "array", false, false, false, 149))), "clone" => ((                    // line 150
array_key_exists("enableCloneButton", $context)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 150, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 150, $this->source); })()) . ":create"), [], "array", false, false, false, 150)) : (false)), "delete" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 151
$context["item"], "getCreatedBy", [], "any", true, true, false, 151)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                     // line 154
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 154, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 154, $this->source); })()) . ":deleteown"), [], "array", false, false, false, 154), CoreExtension::getAttribute($this->env, $this->source,                     // line 155
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 155, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 155, $this->source); })()) . ":deleteother"), [], "array", false, false, false, 155), CoreExtension::getAttribute($this->env, $this->source,                     // line 156
$context["item"], "getCreatedBy", [], "method", false, false, false, 156))) : (CoreExtension::getAttribute($this->env, $this->source,                     // line 159
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 159, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 159, $this->source); })()) . ":delete"), [], "array", false, false, false, 159))), "abtest" => ((                    // line 160
array_key_exists("enableAbTestButton", $context)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 160, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 160, $this->source); })()) . ":create"), [], "array", false, false, false, 160)) : (false))], "actionRoute" =>                     // line 162
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 162, $this->source); })()), "indexRoute" =>                     // line 163
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 163, $this->source); })()), "translationBase" =>                     // line 164
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 164, $this->source); })()), "customButtons" => ((                    // line 165
array_key_exists("customButtons", $context)) ? ((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 165, $this->source); })())) : ([]))]);
                    // line 167
                    yield "</td>
                            <td>
                                <div>
                                    ";
                    // line 170
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isPublished", [], "any", true, true, false, 170)) {
                        // line 171
                        yield "                                    ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                         // line 173
$context["item"], "model" => (isset($context["modelName"]) || array_key_exists("modelName", $context) ? $context["modelName"] : (function () { throw new RuntimeError('Variable "modelName" does not exist.', 173, $this->source); })())]);
                        // line 174
                        yield "
                                    ";
                    }
                    // line 176
                    yield "                                    <a data-toggle=\"ajax\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(                    // line 177
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 177, $this->source); })()), ["objectId" => CoreExtension::getAttribute($this->env, $this->source,                     // line 178
$context["item"], "getId", [], "method", false, false, false, 178), "objectAction" => (isset($context["nameAction"]) || array_key_exists("nameAction", $context) ? $context["nameAction"] : (function () { throw new RuntimeError('Variable "nameAction" does not exist.', 178, $this->source); })())]), "html", null, true);
                    // line 179
                    yield "\">
                                        ";
                    // line 180
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 180), "html", null, true);
                    yield "
                                        ";
                    // line 181
                    yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("list.name", $context);
                    yield "
                                    </a>
                                </div>
                                ";
                    // line 184
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "any", true, true, false, 184) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 184))) {
                        // line 185
                        yield "                                    <div class=\"text-secondary mt-4\">
                                        <small>";
                        // line 186
                        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 186));
                        yield "</small>
                                    </div>
                                ";
                    }
                    // line 189
                    yield "                            </td>
                            ";
                    // line 190
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getCategory", [], "any", true, true, false, 190)) {
                        // line 191
                        yield "                                <td class=\"visible-md visible-lg\">
                                    ";
                        // line 192
                        $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getCategory", [], "method", false, false, false, 192);
                        // line 193
                        yield "                                    ";
                        [$context["catName"], $context["color"]] =                         [(((($tmp = (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 193, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source,                         // line 194
(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 194, $this->source); })()), "getTitle", [], "method", false, false, false, 194)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized"))), (((($tmp =                         // line 195
(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 195, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("#" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 195, $this->source); })()), "getColor", [], "method", false, false, false, 195))) : (""))];
                        // line 196
                        yield "                                    <div class=\"d-flex ai-center gap-xs\"><span class=\"label label-gray label-category\" style=\"background: ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 196, $this->source); })()), "html", null, true);
                        yield ";\"> </span> ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 196, $this->source); })()), "html", null, true);
                        yield "</div>
                                </td>
                            ";
                    }
                    // line 199
                    yield "                        ";
                }
                // line 200
                yield "                        ";
                if (array_key_exists("listItemTemplate", $context)) {
                    // line 201
                    yield "                            ";
                    $context["templateVariables"] = Twig\Extension\CoreExtension::merge((isset($context["templateVariables"]) || array_key_exists("templateVariables", $context) ? $context["templateVariables"] : (function () { throw new RuntimeError('Variable "templateVariables" does not exist.', 201, $this->source); })()), ["item" => $context["item"]]);
                    // line 202
                    yield Twig\Extension\CoreExtension::include($this->env, $context, (isset($context["listItemTemplate"]) || array_key_exists("listItemTemplate", $context) ? $context["listItemTemplate"] : (function () { throw new RuntimeError('Variable "listItemTemplate" does not exist.', 202, $this->source); })()), (isset($context["templateVariables"]) || array_key_exists("templateVariables", $context) ? $context["templateVariables"] : (function () { throw new RuntimeError('Variable "templateVariables" does not exist.', 202, $this->source); })()));
                }
                // line 204
                yield "                        ";
                if (Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreStandardColumns"]) || array_key_exists("ignoreStandardColumns", $context) ? $context["ignoreStandardColumns"] : (function () { throw new RuntimeError('Variable "ignoreStandardColumns" does not exist.', 204, $this->source); })()))) {
                    // line 205
                    yield "                            <td class=\"visible-md visible-lg\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 205), "html", null, true);
                    yield "</td>
                        ";
                }
                // line 207
                yield "
                        ";
                // line 208
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("list.columns", $context);
                yield "
                    </tr>
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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 211
            yield "                </tbody>
            </table>
        </div>
        <div class=\"panel-footer\">";
            // line 215
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 217
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 217, $this->source); })()), "page" =>             // line 218
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 218, $this->source); })()), "limit" =>             // line 219
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 219, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 220
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 220, $this->source); })())), "sessionVar" =>             // line 221
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 221, $this->source); })())]);
            // line 223
            yield "</div>
    ";
        } else {
            // line 225
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
        }
        // line 227
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Standard/list.html.twig";
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
        return array (  481 => 227,  478 => 225,  474 => 223,  472 => 221,  471 => 220,  470 => 219,  469 => 218,  468 => 217,  467 => 215,  462 => 211,  445 => 208,  442 => 207,  436 => 205,  433 => 204,  430 => 202,  427 => 201,  424 => 200,  421 => 199,  412 => 196,  410 => 195,  409 => 194,  407 => 193,  405 => 192,  402 => 191,  400 => 190,  397 => 189,  391 => 186,  388 => 185,  386 => 184,  380 => 181,  376 => 180,  373 => 179,  371 => 178,  370 => 177,  368 => 176,  364 => 174,  362 => 173,  360 => 171,  358 => 170,  353 => 167,  351 => 165,  350 => 164,  349 => 163,  348 => 162,  347 => 160,  346 => 159,  345 => 156,  344 => 155,  343 => 154,  342 => 151,  341 => 150,  340 => 149,  339 => 146,  338 => 145,  337 => 144,  336 => 141,  335 => 139,  334 => 137,  332 => 136,  330 => 135,  327 => 134,  310 => 133,  303 => 129,  300 => 128,  297 => 123,  296 => 122,  295 => 120,  293 => 119,  290 => 118,  287 => 117,  273 => 115,  270 => 114,  267 => 113,  264 => 112,  246 => 111,  244 => 110,  241 => 109,  238 => 108,  234 => 106,  232 => 103,  231 => 102,  229 => 100,  227 => 99,  225 => 92,  224 => 91,  223 => 88,  221 => 85,  220 => 83,  219 => 82,  218 => 79,  216 => 78,  210 => 75,  207 => 74,  205 => 73,  202 => 72,  199 => 71,  196 => 70,  193 => 69,  191 => 68,  188 => 67,  185 => 66,  182 => 65,  180 => 64,  177 => 63,  174 => 62,  171 => 61,  169 => 60,  166 => 59,  163 => 58,  160 => 57,  157 => 56,  150 => 55,  141 => 51,  134 => 47,  130 => 46,  126 => 45,  123 => 44,  121 => 40,  120 => 39,  119 => 38,  118 => 36,  117 => 33,  116 => 31,  115 => 29,  114 => 28,  113 => 27,  112 => 26,  111 => 25,  110 => 24,  109 => 23,  107 => 22,  104 => 21,  97 => 20,  86 => 18,  77 => 9,  74 => 8,  67 => 7,  63 => 5,  61 => 16,  58 => 14,  56 => 13,  54 => 3,  52 => 2,  50 => 1,  43 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Standard/list.html.twig", "/var/www/html/docroot/app/bundles/CoreBundle/Resources/views/Standard/list.html.twig");
    }
}
