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

/* @MauticForm/Field/select.html.twig */
class __TwigTemplate_71b51beb11132440e06e6b75017c7d7c extends Template
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
        // line 5
        $context["defaultInputFormClass"] = "not-chosen";
        // line 6
        $context["defaultInputClass"] = "selectbox";
        // line 7
        $context["containerType"] = "select";
        // line 10
        $context["defaultInputFormClass"] = ((array_key_exists("defaultInputFormClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 10, $this->source); })()), "")) : (""));
        // line 11
        $context["defaultLabelClass"] = ((array_key_exists("defaultLabelClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 11, $this->source); })()), "label")) : ("label"));
        // line 12
        $context["formName"] = ((array_key_exists("formName", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 12, $this->source); })()), "")) : (""));
        // line 13
        $context["defaultInputClass"] = ("mauticform-" . (isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 13, $this->source); })()));
        // line 14
        $context["defaultLabelClass"] = ("mauticform-" . (isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 14, $this->source); })()));
        // line 15
        $context["containerClass"] = ((array_key_exists("containerClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 15, $this->source); })()), (isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 15, $this->source); })()))) : ((isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 15, $this->source); })())));
        // line 16
        $context["order"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "order", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 16, $this->source); })()), "order", [], "any", false, false, false, 16), 0)) : (0));
        // line 17
        $context["validationMessage"] = "";
        // line 19
        $context["inputAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "inputAttributes", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 19, $this->source); })()), "inputAttributes", [], "any", false, false, false, 19), "")) : ("")));
        // line 20
        $context["labelAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "labelAttributes", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 20, $this->source); })()), "labelAttributes", [], "any", false, false, false, 20), "")) : ("")));
        // line 21
        $context["containerAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "containerAttributes", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 21, $this->source); })()), "containerAttributes", [], "any", false, false, false, 21), "")) : ("")));
        // line 23
        if (( !array_key_exists("ignoreName", $context) || (array_key_exists("ignoreName", $context) && Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreName"]) || array_key_exists("ignoreName", $context) ? $context["ignoreName"] : (function () { throw new RuntimeError('Variable "ignoreName" does not exist.', 23, $this->source); })()))))) {
            // line 24
            $context["inputName"] = (("mauticform[" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 24, $this->source); })()), "alias", [], "any", false, false, false, 24)) . "]");
            // line 25
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 25), "multiple", [], "any", true, true, false, 25) && (true == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 25, $this->source); })()), "properties", [], "any", false, false, false, 25), "multiple", [], "any", false, false, false, 25)))) {
                // line 26
                $context["inputName"] = ((isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 26, $this->source); })()) . "[]");
            }
            // line 28
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 28, $this->source); })()), ["name" =>             // line 29
(isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 29, $this->source); })())]);
        }
        // line 33
        if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 33, $this->source); })()), "type", [], "any", false, false, false, 33), ["checkboxgrp", "radiogrp", "textarea"])) {
            // line 34
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 34, $this->source); })()), ["value" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 35
($context["field"] ?? null), "defaultValue", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 35, $this->source); })()), "defaultValue", [], "any", false, false, false, 35), "")) : (""))]);
        }
        // line 39
        if (( !array_key_exists("ignoreId", $context) || (array_key_exists("ignoreId", $context) && Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreId"]) || array_key_exists("ignoreId", $context) ? $context["ignoreId"] : (function () { throw new RuntimeError('Variable "ignoreId" does not exist.', 39, $this->source); })()))))) {
            // line 40
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 40, $this->source); })()), ["id" => ((("mauticform_input" .             // line 41
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 41, $this->source); })())) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 41, $this->source); })()), "alias", [], "any", false, false, false, 41))]);
            // line 43
            $context["labelAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 43, $this->source); })()), ["id" => ((("mauticform_label" .             // line 44
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 44, $this->source); })())) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 44, $this->source); })()), "alias", [], "any", false, false, false, 44)), "for" => ((("mauticform_input" .             // line 45
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 45, $this->source); })())) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 45, $this->source); })()), "alias", [], "any", false, false, false, 45))]);
        }
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 49), "placeholder", [], "any", true, true, false, 49) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 49, $this->source); })()), "properties", [], "any", false, false, false, 49), "placeholder", [], "any", false, false, false, 49)))) {
            // line 50
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 50, $this->source); })()), ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 51
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 51, $this->source); })()), "properties", [], "any", false, false, false, 51), "placeholder", [], "any", false, false, false, 51)]);
        }
        // line 55
        if ((array_key_exists("inForm", $context) && ((true == (isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 55, $this->source); })())) ||  !Twig\Extension\CoreExtension::testEmpty((isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 55, $this->source); })()))))) {
            // line 56
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 56, $this->source); })()), "type", [], "any", false, false, false, 56), ["button", "pagebreak"])) {
                // line 57
                $context["defaultInputFormClass"] = ((isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 57, $this->source); })()) . " btn btn-ghost");
            }
            // line 60
            $context["labelAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 60, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 61
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 61, $this->source); })()), "class", [], "any", false, false, false, 61), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 61, $this->source); })())])]);
            // line 63
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 63, $this->source); })()), ["disabled" => "disabled", "class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 65
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 65)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 65, $this->source); })()), "class", [], "any", false, false, false, 65), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 65, $this->source); })()), (isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 65, $this->source); })())])]);
        } else {
            // line 68
            $context["labelAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 68, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 69
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 69)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 69, $this->source); })()), "class", [], "any", false, false, false, 69), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 69, $this->source); })())])]);
            // line 71
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 71, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 72
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 72)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 72, $this->source); })()), "class", [], "any", false, false, false, 72), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 72, $this->source); })())])]);
        }
        // line 76
        $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 76, $this->source); })()), ["id" => ((("mauticform" .         // line 77
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 77, $this->source); })())) . "_") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 77, $this->source); })())), "class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,         // line 78
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 78)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 78, $this->source); })()), "class", [], "any", false, false, false, 78), [])) : ([])), ["mauticform-row", ("mauticform-" .         // line 80
(isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 80, $this->source); })())), ("mauticform-field-" .         // line 81
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 81, $this->source); })()))])]);
        // line 84
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 84, $this->source); })()), "parent", [], "any", false, false, false, 84) && CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 84, $this->source); })()), "parent", [], "any", false, false, false, 84), [], "array", true, true, false, 84))) {
            // line 85
            $context["values"] = Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 85, $this->source); })()), "conditions", [], "any", false, false, false, 85), "values", [], "any", false, false, false, 85), "|");
            // line 87
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 87, $this->source); })()), "conditions", [], "any", false, false, false, 87), "any", [], "any", false, false, false, 87) != false) && ("notIn" != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 87, $this->source); })()), "conditions", [], "any", false, false, false, 87), "expr", [], "any", false, false, false, 87)))) {
                // line 88
                $context["values"] = "*";
            }
            // line 91
            $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 91, $this->source); })()), ["data-mautic-form-show-on" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 92
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 92, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 92, $this->source); })()), "parent", [], "any", false, false, false, 92), [], "array", false, false, false, 92), "alias", [], "any", false, false, false, 92) . ":") . (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 92, $this->source); })())), "data-mautic-form-expr" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 93
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 93, $this->source); })()), "conditions", [], "any", false, false, false, 93), "expr", [], "any", false, false, false, 93), "class" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source,             // line 94
(isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 94, $this->source); })()), "class", [], "any", false, false, false, 94), ["mauticform-field-hidden"])]);
        }
        // line 100
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "isRequired", [], "any", true, true, false, 100) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 100, $this->source); })()), "isRequired", [], "any", false, false, false, 100))) {
            // line 101
            $context["required"] = true;
            // line 102
            $context["validationMessage"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 102, $this->source); })()), "validationMessage", [], "any", false, false, false, 102);
            // line 103
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["validationMessage"]) || array_key_exists("validationMessage", $context) ? $context["validationMessage"] : (function () { throw new RuntimeError('Variable "validationMessage" does not exist.', 103, $this->source); })()))) {
                // line 104
                $context["validationMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.generic.required", [], "validators", ((array_key_exists("language", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 104, $this->source); })()), null)) : (null)));
            }
            // line 106
            $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 106, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 107
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 107)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 107, $this->source); })()), "class", [], "any", false, false, false, 107), [])) : ([])), ["mauticform-required"]), "data-validate" => CoreExtension::getAttribute($this->env, $this->source,             // line 110
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 110, $this->source); })()), "alias", [], "any", false, false, false, 110), "data-validation-type" => CoreExtension::getAttribute($this->env, $this->source,             // line 111
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 111, $this->source); })()), "type", [], "any", false, false, false, 111)]);
            // line 113
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 113), "multiple", [], "any", true, true, false, 113) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 113, $this->source); })()), "properties", [], "any", false, false, false, 113), "multiple", [], "any", false, false, false, 113) != false))) {
                // line 114
                $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 114, $this->source); })()), ["data-validate-multiple" => "true"]);
            }
        } elseif ((        // line 118
array_key_exists("required", $context) && (true == (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 118, $this->source); })())))) {
            // line 120
            $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 120, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 121
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 121)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 121, $this->source); })()), "class", [], "any", false, false, false, 121), [])) : ([])), ["mauticform-required"])]);
        }
        // line 128
        if ((((array_key_exists("list", $context) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 128), "syncList", [], "any", true, true, false, 128)) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 128), "list", [], "any", true, true, false, 128)) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 128), "optionList", [], "any", true, true, false, 128))) {
            // line 129
            $context["parseList"] = [];
            // line 130
            $context["isBooleanList"] = false;
            // line 132
            if (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 133
($context["field"] ?? null), "properties", [], "any", false, true, false, 133), "syncList", [], "any", true, true, false, 133) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 133, $this->source); })()), "properties", [], "any", false, false, false, 133), "syncList", [], "any", false, false, false, 133))) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,             // line 134
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 134, $this->source); })()), "mappedField", [], "any", false, false, false, 134))) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,             // line 135
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 135, $this->source); })()), "mappedObject", [], "any", false, false, false, 135))) && CoreExtension::getAttribute($this->env, $this->source,             // line 136
($context["mappedFields"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 136, $this->source); })()), "mappedObject", [], "any", false, false, false, 136), [], "array", true, true, false, 136))) {
                // line 139
                yield "    ";
                $context["fieldCollection"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 139, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 139, $this->source); })()), "mappedObject", [], "any", false, false, false, 139), [], "array", false, false, false, 139);
                // line 140
                yield "    ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fieldCollection"]) || array_key_exists("fieldCollection", $context) ? $context["fieldCollection"] : (function () { throw new RuntimeError('Variable "fieldCollection" does not exist.', 140, $this->source); })()), "getFieldByKey", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 140, $this->source); })()), "mappedField", [], "any", false, false, false, 140), false], "method", false, false, false, 140))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 141
                    yield "      ";
                    $context["mappedField"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["fieldCollection"]) || array_key_exists("fieldCollection", $context) ? $context["fieldCollection"] : (function () { throw new RuntimeError('Variable "fieldCollection" does not exist.', 141, $this->source); })()), "getFieldByKey", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 141, $this->source); })()), "mappedField", [], "any", false, false, false, 141)], "method", false, false, false, 141);
                    // line 142
                    yield "      ";
                    $context["mappedFieldType"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 142, $this->source); })()), "type", [], "any", false, false, false, 142);
                    // line 144
                    if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 144), "syncList", [], "any", true, true, false, 144) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 144, $this->source); })()), "properties", [], "any", false, false, false, 144), "syncList", [], "any", false, false, false, 144))) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 144, $this->source); })()), "properties", [], "any", false, false, false, 144), "syncList", [], "any", false, false, false, 144))) {
                        // line 145
                        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mappedField"] ?? null), "properties", [], "any", false, true, false, 145), "list", [], "any", true, true, false, 145) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 145, $this->source); })()), "properties", [], "any", false, false, false, 145), "list", [], "any", false, false, false, 145)))) {
                            // line 146
                            $context["parseList"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 146, $this->source); })()), "properties", [], "any", false, false, false, 146), "list", [], "any", false, false, false, 146);
                        } elseif (("boolean" ==                         // line 147
(isset($context["mappedFieldType"]) || array_key_exists("mappedFieldType", $context) ? $context["mappedFieldType"] : (function () { throw new RuntimeError('Variable "mappedFieldType" does not exist.', 147, $this->source); })()))) {
                            // line 148
                            $context["parseList"] = ["0" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                             // line 149
(isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 149, $this->source); })()), "properties", [], "any", false, false, false, 149), "no", [], "any", false, false, false, 149), "1" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                             // line 150
(isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 150, $this->source); })()), "properties", [], "any", false, false, false, 150), "yes", [], "any", false, false, false, 150)];
                        } elseif (("country" ==                         // line 152
(isset($context["mappedFieldType"]) || array_key_exists("mappedFieldType", $context) ? $context["mappedFieldType"] : (function () { throw new RuntimeError('Variable "mappedFieldType" does not exist.', 152, $this->source); })()))) {
                            // line 153
                            $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getCountryChoices();
                        } elseif (("region" ==                         // line 154
(isset($context["mappedFieldType"]) || array_key_exists("mappedFieldType", $context) ? $context["mappedFieldType"] : (function () { throw new RuntimeError('Variable "mappedFieldType" does not exist.', 154, $this->source); })()))) {
                            // line 155
                            $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getRegionChoices();
                        } elseif (("timezone" ==                         // line 156
(isset($context["mappedFieldType"]) || array_key_exists("mappedFieldType", $context) ? $context["mappedFieldType"] : (function () { throw new RuntimeError('Variable "mappedFieldType" does not exist.', 156, $this->source); })()))) {
                            // line 157
                            $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getTimezonesChoices();
                        } elseif (("locale" ==                         // line 158
(isset($context["mappedFieldType"]) || array_key_exists("mappedFieldType", $context) ? $context["mappedFieldType"] : (function () { throw new RuntimeError('Variable "mappedFieldType" does not exist.', 158, $this->source); })()))) {
                            // line 159
                            $context["list"] = $this->extensions['Mautic\LeadBundle\Twig\Extension\FormFieldExtension']->getLeadFieldLocaleChoices();
                        }
                    }
                }
            }
            // line 165
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 165, $this->source); })()))) {
                // line 166
                if (array_key_exists("list", $context)) {
                    // line 167
                    $context["parseList"] = (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 167, $this->source); })());
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 168
($context["field"] ?? null), "properties", [], "any", false, true, false, 168), "optionList", [], "any", true, true, false, 168) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 168, $this->source); })()), "properties", [], "any", false, false, false, 168), "optionList", [], "any", false, false, false, 168)))) {
                    // line 169
                    $context["parseList"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 169, $this->source); })()), "properties", [], "any", false, false, false, 169), "optionList", [], "any", false, false, false, 169);
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 170
($context["field"] ?? null), "properties", [], "any", false, true, false, 170), "list", [], "any", true, true, false, 170) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 170, $this->source); })()), "properties", [], "any", false, false, false, 170), "list", [], "any", false, false, false, 170)))) {
                    // line 171
                    $context["parseList"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 171, $this->source); })()), "properties", [], "any", false, false, false, 171), "list", [], "any", false, false, false, 171);
                }
                // line 174
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["parseList"] ?? null), "list", [], "any", true, true, false, 174)) {
                    // line 175
                    $context["parseList"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 175, $this->source); })()), "list", [], "any", false, false, false, 175);
                }
            }
            // line 179
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 179, $this->source); })()), "mappedField", [], "any", false, false, false, 179) && CoreExtension::getAttribute($this->env, $this->source, ($context["mappedFields"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 179, $this->source); })()), "mappedObject", [], "any", false, false, false, 179), [], "array", true, true, false, 179))) {
                // line 181
                yield "    ";
                $context["fieldCollection"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 181, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 181, $this->source); })()), "mappedObject", [], "any", false, false, false, 181), [], "array", false, false, false, 181);
                // line 182
                yield "
    ";
                // line 183
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["fieldCollection"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 183, $this->source); })()), "mappedField", [], "any", false, false, false, 183), [], "array", true, true, false, 183)) {
                    // line 184
                    yield "      ";
                    $context["mappedField"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["fieldCollection"]) || array_key_exists("fieldCollection", $context) ? $context["fieldCollection"] : (function () { throw new RuntimeError('Variable "fieldCollection" does not exist.', 184, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 184, $this->source); })()), "mappedField", [], "any", false, false, false, 184), [], "array", false, false, false, 184);
                    // line 185
                    if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 185, $this->source); })()), "type", [], "any", false, false, false, 185), ["datetime", "date"])) {
                        // line 186
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 186, $this->source); })()));
                        foreach ($context['_seq'] as $context["key"] => $context["aTemp"]) {
                            // line 187
                            $context["date"] = ((("datetime" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 187, $this->source); })()), "type", [], "any", false, false, false, 187))) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, $context["aTemp"], "label", [], "any", false, false, false, 187))) : ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, $context["aTemp"], "label", [], "any", false, false, false, 187))));
                            // line 188
                            if ((($tmp = (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 188, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 189
                                $context["parseList"] = Twig\Extension\CoreExtension::merge((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 189, $this->source); })()), [ (string)                                // line 190
$context["key"] => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 190, $this->source); })()), $context["key"], [], "array", false, false, false, 190), ["label" =>                                 // line 191
(isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 191, $this->source); })())])]);
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['key'], $context['aTemp'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                }
            }
            // line 200
            if ((($tmp = (isset($context["isBooleanList"]) || array_key_exists("isBooleanList", $context) ? $context["isBooleanList"] : (function () { throw new RuntimeError('Variable "isBooleanList" does not exist.', 200, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 201
                $context["list"] = Mautic\FormBundle\Helper\FormFieldHelper::parseBooleanList((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 201, $this->source); })()));
            } else {
                // line 203
                $context["list"] = Mautic\FormBundle\Helper\FormFieldHelper::parseList((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 203, $this->source); })()));
            }
            // line 206
            $context["firstListValue"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 206, $this->source); })()));
        }
        // line 210
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 210), "multiple", [], "any", true, true, false, 210) && (true == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 210, $this->source); })()), "properties", [], "any", false, false, false, 210), "multiple", [], "any", false, false, false, 210)))) {
            // line 211
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 211, $this->source); })()), ["multiple" => "multiple"]);
        }
        // line 229
        yield "<div ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 229, $this->source); })()));
        foreach ($context['_seq'] as $context["attrName"] => $context["attrValue"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrName"], "html", null, true);
            yield "=\"";
            if (is_iterable($context["attrValue"])) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join($context["attrValue"], " "), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrValue"], "html", null, true);
            }
            yield "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrName'], $context['attrValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield ">
  ";
        // line 230
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 230, $this->source); })()), "showLabel", [], "any", false, false, false, 230)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<label ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 230, $this->source); })()));
            foreach ($context['_seq'] as $context["attrName"] => $context["attrValue"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrName"], "html", null, true);
                yield "=\"";
                if (is_iterable($context["attrValue"])) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join($context["attrValue"], " "), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrValue"], "html", null, true);
                }
                yield "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attrName'], $context['attrValue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">";
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 230, $this->source); })()), "label", [], "any", false, false, false, 230));
            yield "</label>";
        }
        // line 231
        yield "  ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 231, $this->source); })()), "helpMessage", [], "any", false, false, false, 231))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class=\"mauticform-helpmessage\">";
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 231, $this->source); })()), "helpMessage", [], "any", false, false, false, 231));
            yield "</span>";
        }
        // line 232
        yield "
  <select ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 233, $this->source); })()));
        foreach ($context['_seq'] as $context["attrName"] => $context["attrValue"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrName"], "html", null, true);
            yield "=\"";
            if (is_iterable($context["attrValue"])) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join($context["attrValue"], " "), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrValue"], "html", null, true);
            }
            yield "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrName'], $context['attrValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield ">
    ";
        // line 235
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 237
($context["field"] ?? null), "properties", [], "any", false, true, false, 237), "placeholder", [], "any", true, true, false, 237) || ( !CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultValue", [], "any", true, true, false, 237) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultValue", [], "any", true, true, false, 237) && (false == CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 237, $this->source); })()), "defaultValue", [], "any", false, false, false, 237))))) && ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 239
($context["field"] ?? null), "properties", [], "any", false, true, false, 239), "multiple", [], "any", true, true, false, 239) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 239), "multiple", [], "any", true, true, false, 239) && (false == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 239, $this->source); })()), "properties", [], "any", false, false, false, 239), "multiple", [], "any", false, false, false, 239)))))) {
            // line 241
            $context["placeholder"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 241), "placeholder", [], "any", true, true, false, 241)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 241, $this->source); })()), "properties", [], "any", false, false, false, 241), "placeholder", [], "any", false, false, false, 241), "")) : (""));
            // line 242
            yield "<option value=\"\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 242, $this->source); })()), "html", null, true);
            yield "</option>";
        }
        // line 244
        yield $this->getTemplateForMacro("macro_print_options", $context, 244, $this->getSourceContext())->macro_print_options(...[(isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 244, $this->source); })()), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 244, $this->source); })())]);
        yield "
  </select>
  <span class=\"mauticform-errormsg\" style=\"display:none;\">";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["validationMessage"]) || array_key_exists("validationMessage", $context) ? $context["validationMessage"] : (function () { throw new RuntimeError('Variable "validationMessage" does not exist.', 246, $this->source); })()), "html", null, true);
        yield "</span>
</div>";
        yield from [];
    }

    // line 216
    public function macro_print_options($list = null, $field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "list" => $list,
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 217
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 217, $this->source); })()));
            foreach ($context['_seq'] as $context["listValue"] => $context["listLabel"]) {
                // line 218
                yield "    ";
                if (is_iterable($context["listLabel"])) {
                    // line 219
                    yield "      ";
                    // line 220
                    yield "      <optgroup label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["listValue"], "html", null, true);
                    yield "\">
        ";
                    // line 221
                    yield $this->getTemplateForMacro("macro_print_options", $context, 221, $this->getSourceContext())->macro_print_options(...[$context["listLabel"], (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 221, $this->source); })())]);
                    yield "
      </optgroup>
    ";
                } else {
                    // line 224
                    yield "<option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["listValue"]);
                    yield "\" ";
                    if (($context["listValue"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 224, $this->source); })()), "defaultValue", [], "any", false, false, false, 224))) {
                        yield "selected=\"selected\"";
                    }
                    yield ">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["listLabel"], "html", null, true);
                    yield "</option>";
                }
                // line 226
                yield "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['listValue'], $context['listLabel'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/Field/select.html.twig";
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
        return array (  438 => 226,  427 => 224,  421 => 221,  416 => 220,  414 => 219,  411 => 218,  407 => 217,  394 => 216,  387 => 246,  382 => 244,  377 => 242,  375 => 241,  373 => 239,  372 => 237,  371 => 235,  353 => 233,  350 => 232,  343 => 231,  321 => 230,  302 => 229,  299 => 211,  297 => 210,  294 => 206,  291 => 203,  288 => 201,  286 => 200,  276 => 191,  275 => 190,  274 => 189,  272 => 188,  270 => 187,  266 => 186,  264 => 185,  261 => 184,  259 => 183,  256 => 182,  253 => 181,  251 => 179,  247 => 175,  245 => 174,  242 => 171,  240 => 170,  238 => 169,  236 => 168,  234 => 167,  232 => 166,  230 => 165,  224 => 159,  222 => 158,  220 => 157,  218 => 156,  216 => 155,  214 => 154,  212 => 153,  210 => 152,  208 => 150,  207 => 149,  206 => 148,  204 => 147,  202 => 146,  200 => 145,  198 => 144,  195 => 142,  192 => 141,  189 => 140,  186 => 139,  184 => 136,  183 => 135,  182 => 134,  181 => 133,  180 => 132,  178 => 130,  176 => 129,  174 => 128,  171 => 121,  170 => 120,  168 => 118,  165 => 114,  163 => 113,  161 => 111,  160 => 110,  159 => 107,  158 => 106,  155 => 104,  153 => 103,  151 => 102,  149 => 101,  147 => 100,  144 => 94,  143 => 93,  142 => 92,  141 => 91,  138 => 88,  136 => 87,  134 => 85,  132 => 84,  130 => 81,  129 => 80,  128 => 78,  127 => 77,  126 => 76,  123 => 72,  122 => 71,  120 => 69,  119 => 68,  116 => 65,  115 => 63,  113 => 61,  112 => 60,  109 => 57,  107 => 56,  105 => 55,  102 => 51,  101 => 50,  99 => 49,  96 => 45,  95 => 44,  94 => 43,  92 => 41,  91 => 40,  89 => 39,  86 => 35,  85 => 34,  83 => 33,  80 => 29,  79 => 28,  76 => 26,  74 => 25,  72 => 24,  70 => 23,  68 => 21,  66 => 20,  64 => 19,  62 => 17,  60 => 16,  58 => 15,  56 => 14,  54 => 13,  52 => 12,  50 => 11,  48 => 10,  46 => 7,  44 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Field/select.html.twig", "/var/www/html/docroot/app/bundles/FormBundle/Resources/views/Field/select.html.twig");
    }
}
