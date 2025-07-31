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

/* @MauticCore/FormTheme/Config/_config_themeconfig_widget.html.twig */
class __TwigTemplate_78776661e39b7fe70ea0975867b1868b extends Template
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
            '_config_themeconfig_widget' => [$this, 'block__config_themeconfig_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('_config_themeconfig_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__config_themeconfig_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<h4 class=\"fw-sb mt-48 mb-xs\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.themeconfig"), "html", null, true);
        yield "</h4>
<div class=\"text-muted small pb-md\">";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.themeconfig.description"), "html", null, true);
        yield "</div>
<div class=\"row\">
    <div class=\"panel panel-default mb-md\">
        <div class=\"panel-body\">
            <h3 class=\"pt-20\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.appearance.accent_colors"), "html", null, true);
        yield "</h3>
            <div class=\"help-block mb-lg\">
                ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.account.appearance.accent_help"), "html", null, true);
        yield "
                ";
        // line 10
        yield from $this->load("@MauticCore/Helper/toggletip.html.twig", 10)->unwrap()->yield(CoreExtension::merge($context, ["title" => "mautic.user.account.appearance.accent_toggletip.title", "content" => "mautic.user.account.appearance.accent_toggletip.content"]));
        // line 14
        yield "            </div>
            <div class=\"d-flex fw-wrap gap-lg mb-lg\">
                ";
        // line 16
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/FormTheme/Config/accent.html.twig", ["accents" => [["id" => "01"], ["id" => "02"], ["id" => "03"], ["id" => "04"], ["id" => "05"], ["id" => "06"], ["id" => "07"], ["id" => "08"], ["id" => "09"], ["id" => "10"], ["id" => "11"], ["id" => "12"], ["id" => "13"], ["id" => "14"], ["id" => "15"], ["id" => "16"], ["id" => "17"], ["id" => "18"], ["id" => "19"], ["id" => "20"], ["id" => "21"], ["id" => "22"], ["id" => "23"], ["id" => "24"], ["id" => "25"]]]);
        // line 44
        yield "
            </div>
            <hr>
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "children", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 48
            yield "                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        ";
            // line 50
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
            yield "
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['f'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "        </div>
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
        return "@MauticCore/FormTheme/Config/_config_themeconfig_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  106 => 54,  96 => 50,  92 => 48,  88 => 47,  83 => 44,  81 => 16,  77 => 14,  75 => 10,  71 => 9,  66 => 7,  59 => 3,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/FormTheme/Config/_config_themeconfig_widget.html.twig", "/var/www/html/docroot/app/bundles/CoreBundle/Resources/views/FormTheme/Config/_config_themeconfig_widget.html.twig");
    }
}
