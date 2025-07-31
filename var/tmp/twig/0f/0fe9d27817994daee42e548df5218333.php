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

/* @MauticCore/Helper/_tag.html.twig */
class __TwigTemplate_1befe85f353f2616542ce0ca77d41797 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 2
            yield "    ";
            $context["type"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "type", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "type", [], "any", false, false, false, 2), "read-only")) : ("read-only"));
            // line 3
            yield "    ";
            $context["color"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "color", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "color", [], "any", false, false, false, 3), "gray")) : ("gray"));
            // line 4
            yield "    ";
            $context["icon"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "icon", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "icon", [], "any", false, false, false, 4), "")) : (""));
            // line 5
            yield "    ";
            $context["attributes"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "attributes", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "attributes", [], "any", false, false, false, 5), [])) : ([]));
            // line 6
            yield "    ";
            $context["icon_only"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "icon_only", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "icon_only", [], "any", false, false, false, 6), false)) : (false));
            // line 7
            yield "    ";
            $context["size"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "size", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "size", [], "any", false, false, false, 7), "md")) : ("md"));
            // line 8
            yield "
    ";
            // line 10
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", true, true, false, 10)) {
                // line 11
                yield "        ";
                $context["id"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11);
                // line 12
                yield "    ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "label", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 13
                yield "        ";
                $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "label", [], "any", false, false, false, 13), ".");
                // line 14
                yield "        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 14, $this->source); })())) >= 2)) {
                    // line 15
                    yield "            ";
                    $context["id"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 15, $this->source); })()),  -2, 2), "-"), [" " => "-"]));
                    // line 16
                    yield "        ";
                } else {
                    // line 17
                    yield "            ";
                    $context["id"] = ("tag-" . Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "label", [], "any", false, false, false, 17), [" " => "-", "." => "-"])));
                    // line 18
                    yield "        ";
                }
                // line 19
                yield "    ";
            } else {
                // line 20
                yield "        ";
                $context["id"] = ("tag-" . Twig\Extension\CoreExtension::random($this->env->getCharset()));
                // line 21
                yield "    ";
            }
            // line 22
            yield "
    ";
            // line 23
            $context["translated_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "label", [], "any", false, false, false, 23));
            // line 24
            yield "    ";
            $context["classes"] = ["label", ("label-" . (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 24, $this->source); })()))];
            // line 25
            yield "
    ";
            // line 26
            if ((($tmp = (isset($context["icon_only"]) || array_key_exists("icon_only", $context) ? $context["icon_only"] : (function () { throw new RuntimeError('Variable "icon_only" does not exist.', 26, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 27
                yield "        ";
                $context["classes"] = Twig\Extension\CoreExtension::merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 27, $this->source); })()), ["label-icon"]);
                // line 28
                yield "    ";
            }
            // line 29
            yield "
    ";
            // line 31
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 31)) {
                // line 32
                yield "        ";
                $context["classes"] = ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 32, $this->source); })()), "class", [], "any", false, false, false, 32))) ? (Twig\Extension\CoreExtension::merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 32, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 32, $this->source); })()), "class", [], "any", false, false, false, 32))) : (Twig\Extension\CoreExtension::merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 32, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 32, $this->source); })()), "class", [], "any", false, false, false, 32)])));
                // line 33
                yield "    ";
            }
            // line 34
            yield "
    ";
            // line 35
            $context["other_attributes"] = Twig\Extension\CoreExtension::filter($this->env, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 35, $this->source); })()), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 35, $this->source); })()) != "class") && ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 35, $this->source); })()) != "id")); });
            // line 36
            yield "    ";
            $context["truncated_label"] = (isset($context["translated_label"]) || array_key_exists("translated_label", $context) ? $context["translated_label"] : (function () { throw new RuntimeError('Variable "translated_label" does not exist.', 36, $this->source); })());
            // line 37
            yield "    ";
            $context["label_tooltip"] = "";
            // line 38
            yield "    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["translated_label"]) || array_key_exists("translated_label", $context) ? $context["translated_label"] : (function () { throw new RuntimeError('Variable "translated_label" does not exist.', 38, $this->source); })())) > 27)) {
                // line 39
                yield "        ";
                $context["truncated_label"] = (Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["translated_label"]) || array_key_exists("translated_label", $context) ? $context["translated_label"] : (function () { throw new RuntimeError('Variable "translated_label" does not exist.', 39, $this->source); })()), 0, 24) . "...");
                // line 40
                yield "        ";
                $context["label_tooltip"] = (isset($context["translated_label"]) || array_key_exists("translated_label", $context) ? $context["translated_label"] : (function () { throw new RuntimeError('Variable "translated_label" does not exist.', 40, $this->source); })());
                // line 41
                yield "    ";
            }
            // line 42
            yield "
    ";
            // line 44
            yield "    ";
            $context["wrapper_tag"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "href", [], "any", true, true, false, 44)) ? ("a") : ("div"));
            // line 45
            yield "    <";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["wrapper_tag"]) || array_key_exists("wrapper_tag", $context) ? $context["wrapper_tag"] : (function () { throw new RuntimeError('Variable "wrapper_tag" does not exist.', 45, $this->source); })()), "html", null, true);
            yield " id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 45, $this->source); })()), "html", null, true);
            yield "\" class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 45, $this->source); })()), " "), "html", null, true);
            yield "\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["translated_label"]) || array_key_exists("translated_label", $context) ? $context["translated_label"] : (function () { throw new RuntimeError('Variable "translated_label" does not exist.', 45, $this->source); })()), "html", null, true);
            yield "\" size=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 45, $this->source); })()), "html", null, true);
            yield "\"
        ";
            // line 46
            if (((isset($context["wrapper_tag"]) || array_key_exists("wrapper_tag", $context) ? $context["wrapper_tag"] : (function () { throw new RuntimeError('Variable "wrapper_tag" does not exist.', 46, $this->source); })()) == "a")) {
                yield " href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 46, $this->source); })()), "href", [], "any", false, false, false, 46), "html", null, true);
                yield "\" ";
            }
            // line 47
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["other_attributes"]) || array_key_exists("other_attributes", $context) ? $context["other_attributes"] : (function () { throw new RuntimeError('Variable "other_attributes" does not exist.', 47, $this->source); })()));
            foreach ($context['_seq'] as $context["attr_key"] => $context["attr_value"]) {
                // line 48
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr_key"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr_value"], "html", null, true);
                yield "\"
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attr_key'], $context['attr_value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            yield ">

        ";
            // line 51
            if ((($tmp = (isset($context["icon_only"]) || array_key_exists("icon_only", $context) ? $context["icon_only"] : (function () { throw new RuntimeError('Variable "icon_only" does not exist.', 51, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 52
                yield "            <i class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 52, $this->source); })()), "html", null, true);
                yield "\" aria-hidden=\"true\" focusable=\"false\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["translated_label"]) || array_key_exists("translated_label", $context) ? $context["translated_label"] : (function () { throw new RuntimeError('Variable "translated_label" does not exist.', 52, $this->source); })()), "html", null, true);
                yield "\" data-toggle=\"tooltip\" tooltip-placement=\"top\"></i>
        ";
            } else {
                // line 54
                yield "            ";
                if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 54, $this->source); })()) == "dismissible")) {
                    // line 55
                    yield "                ";
                    if ((($tmp = (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 55, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 56
                        yield "                    <i class=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 56, $this->source); })()), "html", null, true);
                        yield "\" aria-hidden=\"true\" focusable=\"false\"></i>
                ";
                    }
                    // line 58
                    yield "                <span aria-hidden=\"true\" ";
                    if ((($tmp = (isset($context["label_tooltip"]) || array_key_exists("label_tooltip", $context) ? $context["label_tooltip"] : (function () { throw new RuntimeError('Variable "label_tooltip" does not exist.', 58, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label_tooltip"]) || array_key_exists("label_tooltip", $context) ? $context["label_tooltip"] : (function () { throw new RuntimeError('Variable "label_tooltip" does not exist.', 58, $this->source); })()), "html", null, true);
                        yield "\" data-toggle=\"tooltip\" tooltip-placement=\"top\"";
                    }
                    yield ">
                    ";
                    // line 59
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["truncated_label"]) || array_key_exists("truncated_label", $context) ? $context["truncated_label"] : (function () { throw new RuntimeError('Variable "truncated_label" does not exist.', 59, $this->source); })()), "html", null, true);
                    yield "
                </span>
                <button type=\"button\" aria-label=\"";
                    // line 61
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.builder.storage.dismiss.button"), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.builder.storage.dismiss.button"), "html", null, true);
                    yield "\">
                    <i class=\"ri-close-line\" aria-hidden=\"true\" focusable=\"false\"></i>
                </button>

            ";
                } elseif ((                // line 65
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 65, $this->source); })()) == "read-only")) {
                    // line 66
                    yield "                ";
                    if ((($tmp = (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 66, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 67
                        yield "                    <i class=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 67, $this->source); })()), "html", null, true);
                        yield "\" aria-hidden=\"true\" focusable=\"false\"></i>
                ";
                    }
                    // line 69
                    yield "                <span aria-hidden=\"true\" ";
                    if ((($tmp = (isset($context["label_tooltip"]) || array_key_exists("label_tooltip", $context) ? $context["label_tooltip"] : (function () { throw new RuntimeError('Variable "label_tooltip" does not exist.', 69, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label_tooltip"]) || array_key_exists("label_tooltip", $context) ? $context["label_tooltip"] : (function () { throw new RuntimeError('Variable "label_tooltip" does not exist.', 69, $this->source); })()), "html", null, true);
                        yield "\" data-toggle=\"tooltip\" tooltip-placement=\"top\"";
                    }
                    yield ">
                    ";
                    // line 70
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["truncated_label"]) || array_key_exists("truncated_label", $context) ? $context["truncated_label"] : (function () { throw new RuntimeError('Variable "truncated_label" does not exist.', 70, $this->source); })()), "html", null, true);
                    yield "
                </span>

            ";
                } elseif ((                // line 73
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 73, $this->source); })()) == "selectable")) {
                    // line 74
                    yield "                <button type=\"button\" aria-pressed=\"false\" title=\"";
                    yield (((isset($context["label_tooltip"]) || array_key_exists("label_tooltip", $context) ? $context["label_tooltip"] : (function () { throw new RuntimeError('Variable "label_tooltip" does not exist.', 74, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label_tooltip"], "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["translated_label"]) || array_key_exists("translated_label", $context) ? $context["translated_label"] : (function () { throw new RuntimeError('Variable "translated_label" does not exist.', 74, $this->source); })()), "html", null, true)));
                    yield "\">
                    ";
                    // line 75
                    if ((($tmp = (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 75, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 76
                        yield "                        <i class=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 76, $this->source); })()), "html", null, true);
                        yield "\" aria-hidden=\"true\" focusable=\"false\"></i>
                    ";
                    }
                    // line 78
                    yield "                    <span aria-hidden=\"true\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["truncated_label"]) || array_key_exists("truncated_label", $context) ? $context["truncated_label"] : (function () { throw new RuntimeError('Variable "truncated_label" does not exist.', 78, $this->source); })()), "html", null, true);
                    yield "</span>
                </button>

            ";
                } else {
                    // line 82
                    yield "                ";
                    if ((($tmp = (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 82, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 83
                        yield "                    <i class=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 83, $this->source); })()), "html", null, true);
                        yield "\" aria-hidden=\"true\" focusable=\"false\"></i>
                ";
                    }
                    // line 85
                    yield "                <span aria-hidden=\"true\" ";
                    if ((($tmp = (isset($context["label_tooltip"]) || array_key_exists("label_tooltip", $context) ? $context["label_tooltip"] : (function () { throw new RuntimeError('Variable "label_tooltip" does not exist.', 85, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label_tooltip"]) || array_key_exists("label_tooltip", $context) ? $context["label_tooltip"] : (function () { throw new RuntimeError('Variable "label_tooltip" does not exist.', 85, $this->source); })()), "html", null, true);
                        yield "\"";
                    }
                    yield ">
                    ";
                    // line 86
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["truncated_label"]) || array_key_exists("truncated_label", $context) ? $context["truncated_label"] : (function () { throw new RuntimeError('Variable "truncated_label" does not exist.', 86, $this->source); })()), "html", null, true);
                    yield "
                </span>
            ";
                }
                // line 89
                yield "        ";
            }
            // line 90
            yield "    </";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["wrapper_tag"]) || array_key_exists("wrapper_tag", $context) ? $context["wrapper_tag"] : (function () { throw new RuntimeError('Variable "wrapper_tag" does not exist.', 90, $this->source); })()), "html", null, true);
            yield ">
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/_tag.html.twig";
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
        return array (  323 => 90,  320 => 89,  314 => 86,  305 => 85,  299 => 83,  296 => 82,  288 => 78,  282 => 76,  280 => 75,  275 => 74,  273 => 73,  267 => 70,  258 => 69,  252 => 67,  249 => 66,  247 => 65,  238 => 61,  233 => 59,  224 => 58,  218 => 56,  215 => 55,  212 => 54,  204 => 52,  202 => 51,  198 => 49,  187 => 48,  182 => 47,  176 => 46,  163 => 45,  160 => 44,  157 => 42,  154 => 41,  151 => 40,  148 => 39,  145 => 38,  142 => 37,  139 => 36,  137 => 35,  134 => 34,  131 => 33,  128 => 32,  125 => 31,  122 => 29,  119 => 28,  116 => 27,  114 => 26,  111 => 25,  108 => 24,  106 => 23,  103 => 22,  100 => 21,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  64 => 8,  61 => 7,  58 => 6,  55 => 5,  52 => 4,  49 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/_tag.html.twig", "/var/www/html/docroot/app/bundles/CoreBundle/Resources/views/Helper/_tag.html.twig");
    }
}
