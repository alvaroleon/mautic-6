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

/* @MauticUser/FormTheme/Config/_config_userconfig_widget.html.twig */
class __TwigTemplate_59b15b5208fae921fdc45f3aeb7361bd extends Template
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
            '_config_userconfig_widget' => [$this, 'block__config_userconfig_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('_config_userconfig_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__config_userconfig_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["fields"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "children", [], "any", false, false, false, 2);
        // line 3
        $context["fieldKeys"] = Twig\Extension\CoreExtension::keys((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 3, $this->source); })()));
        // line 4
        yield "
";
        // line 5
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["fieldKeys"]) || array_key_exists("fieldKeys", $context) ? $context["fieldKeys"] : (function () { throw new RuntimeError('Variable "fieldKeys" does not exist.', 5, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return CoreExtension::inFilter((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 5, $this->source); })()), ["saml_idp_metadata", "saml_idp_own_certificate", "saml_idp_own_private_key", "saml_idp_own_password"]); })) > 0)) {
            // line 6
            yield "    <h4 class=\"fw-sb mt-48 mb-xs\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.config.header.saml"), "html", null, true);
            yield "</h4>
    <div class=\"text-muted small pb-md\">";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.saml.description"), "html", null, true);
            yield "</div>
    <div class=\"row\">
        <div class=\"panel panel-default mb-md\">
            <div class=\"panel-body\">
                <div class=\"row\">
                    ";
            // line 12
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "saml_idp_entity_id", [], "any", true, true, false, 12)) {
                // line 13
                yield "                        <div class=\"col-xs-12\">
                            ";
                // line 14
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 14, $this->source); })()), "saml_idp_entity_id", [], "any", false, false, false, 14), 'row');
                yield "
                        </div>
                    ";
            }
            // line 17
            yield "                    <div class=\"col-xs-12\">
                        ";
            // line 18
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 18, $this->source); })()), "saml_idp_metadata", [], "any", false, false, false, 18), 'row', ["fieldValue" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formConfig"]) || array_key_exists("formConfig", $context) ? $context["formConfig"] : (function () { throw new RuntimeError('Variable "formConfig" does not exist.', 18, $this->source); })()), "parameters", [], "any", false, false, false, 18), "saml_idp_metadata", [], "any", false, false, false, 18)]);
            yield "
                    </div>
                    <div class=\"col-xs-12\">
                        ";
            // line 21
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 21, $this->source); })()), "saml_idp_default_role", [], "any", false, false, false, 21), 'row');
            yield "
                    </div>
                </div>

                <hr />
                <div class=\"alert alert-info\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.config.form.saml.idp_attributes"), "html", null, true);
            yield "</div>

                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        ";
            // line 30
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 30, $this->source); })()), "saml_idp_email_attribute", [], "any", false, false, false, 30), 'row');
            yield "
                    </div>
                    <div class=\"col-xs-12\">
                        ";
            // line 33
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 33, $this->source); })()), "saml_idp_username_attribute", [], "any", false, false, false, 33), 'row');
            yield "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        ";
            // line 38
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 38, $this->source); })()), "saml_idp_firstname_attribute", [], "any", false, false, false, 38), 'row');
            yield "
                    </div>
                    <div class=\"col-xs-12\">
                        ";
            // line 41
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 41, $this->source); })()), "saml_idp_lastname_attribute", [], "any", false, false, false, 41), 'row');
            yield "
                    </div>
                </div>

                <hr />
                <div class=\"alert alert-info\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.config.form.saml.idp.own_certificate.description"), "html", null, true);
            yield "</div>

                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        ";
            // line 50
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 50, $this->source); })()), "saml_idp_own_certificate", [], "any", false, false, false, 50), 'row', ["fieldValue" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formConfig"]) || array_key_exists("formConfig", $context) ? $context["formConfig"] : (function () { throw new RuntimeError('Variable "formConfig" does not exist.', 50, $this->source); })()), "parameters", [], "any", false, false, false, 50), "saml_idp_own_certificate", [], "any", false, false, false, 50)]);
            yield "
                    </div>
                    <div class=\"col-xs-12\">
                        ";
            // line 53
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 53, $this->source); })()), "saml_idp_own_private_key", [], "any", false, false, false, 53), 'row', ["fieldValue" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formConfig"]) || array_key_exists("formConfig", $context) ? $context["formConfig"] : (function () { throw new RuntimeError('Variable "formConfig" does not exist.', 53, $this->source); })()), "parameters", [], "any", false, false, false, 53), "saml_idp_own_private_key", [], "any", false, false, false, 53)]);
            yield "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        ";
            // line 58
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 58, $this->source); })()), "saml_idp_own_password", [], "any", false, false, false, 58), 'row');
            yield "
                    </div>
                </div>
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
        return "@MauticUser/FormTheme/Config/_config_userconfig_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  160 => 58,  152 => 53,  146 => 50,  139 => 46,  131 => 41,  125 => 38,  117 => 33,  111 => 30,  104 => 26,  96 => 21,  90 => 18,  87 => 17,  81 => 14,  78 => 13,  76 => 12,  68 => 7,  63 => 6,  61 => 5,  58 => 4,  56 => 3,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticUser/FormTheme/Config/_config_userconfig_widget.html.twig", "/var/www/html/docroot/app/bundles/UserBundle/Resources/views/FormTheme/Config/_config_userconfig_widget.html.twig");
    }
}
