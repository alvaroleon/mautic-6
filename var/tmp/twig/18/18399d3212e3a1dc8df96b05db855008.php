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

/* @MauticPage/FormTheme/Config/_config_trackingconfig_widget.html.twig */
class __TwigTemplate_ff148217318386126a7335f1652f24a4 extends Template
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
            '_config_trackingconfig_widget' => [$this, 'block__config_trackingconfig_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('_config_trackingconfig_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__config_trackingconfig_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<h4 class=\"fw-sb mt-48 mb-xs\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.pagetracking"), "html", null, true);
        yield "</h4>
<div class=\"text-muted small pb-md\">";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.pagetracking.description"), "html", null, true);
        yield "</div>
<div class=\"row\">
    <div class=\"panel panel-default mb-md\">
        <div class=\"panel-body\">
            <div class=\"form-group\">
                <p>";
        // line 8
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.pagetracking.info"));
        yield "</p>
                <pre>&lt;script&gt;
    (function(w,d,t,u,n,a,m){w['MauticTrackingObject']=n;
        w[n]=w[n]||function(){(w[n].q=w[n].q||[]).push(arguments)},a=d.createElement(t),
        m=d.getElementsByTagName(t)[0];a.async=1;a.src=u;m.parentNode.insertBefore(a,m)
    })(window,document,'script','";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_js");
        yield "','mt');

    mt('send', 'pageview');
&lt;/script&gt;</pre>
            </div>
            <div class=\"row\">
                <hr>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "children", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["name"] => $context["f"]) {
            // line 21
            yield "                    ";
            if (CoreExtension::inFilter($context["name"], ["anonymize_ip", "track_contact_by_ip", "track_by_tracking_url", "do_not_track_404_anonymous"])) {
                // line 22
                yield "                        <div class=\"col-xs-12\">
                            ";
                // line 23
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                yield "
                            ";
                // line 24
                if (($context["name"] == "anonymize_ip")) {
                    // line 25
                    yield "                                <div class=\"anonymize_ip_address hide text-danger\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.config.form.anonymize_ip.warning"), "html", null, true);
                    yield "</div>
                            ";
                }
                // line 27
                yield "                        </div>
                    ";
            }
            // line 29
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['name'], $context['f'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "            </div>
        </div>
    </div>
</div>

<h4 class=\"fw-sb mt-48 mb-xs\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.tracking.facebook.pixel"), "html", null, true);
        yield "</h4>
<div class=\"text-muted small pb-md\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.tracking.facebook.pixel.description"), "html", null, true);
        yield "</div>
<div class=\"row\">
    <div class=\"panel panel-default mb-md\">
        <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "facebook_pixel_id", [], "any", false, false, false, 42), 'row');
        yield "
                </div>
                <hr>
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "children", [], "any", false, false, false, 45));
        foreach ($context['_seq'] as $context["name"] => $context["f"]) {
            // line 46
            yield "                    ";
            if (CoreExtension::inFilter($context["name"], ["facebook_pixel_trackingpage_enabled", "facebook_pixel_landingpage_enabled"])) {
                // line 47
                yield "                        <div class=\"col-xs-12\">
                            ";
                // line 48
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                yield "
                        </div>
                    ";
            }
            // line 51
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['name'], $context['f'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "            </div>
        </div>
    </div>
</div>

<h4 class=\"fw-sb mt-48 mb-xs\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.tracking.google.analytics"), "html", null, true);
        yield "</h4>
<div class=\"text-muted small pb-md\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.tracking.google.analytics.description"), "html", null, true);
        yield "</div>
<div class=\"row\">
    <div class=\"panel panel-default mb-md\">
        <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "google_analytics_id", [], "any", false, false, false, 64), 'row');
        yield "
                </div>
                <hr>
                ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "children", [], "any", false, false, false, 67));
        foreach ($context['_seq'] as $context["name"] => $context["f"]) {
            // line 68
            yield "                    ";
            if (CoreExtension::inFilter($context["name"], ["google_analytics_trackingpage_enabled", "google_analytics_landingpage_enabled", "google_analytics_anonymize_ip"])) {
                // line 69
                yield "                        <div class=\"col-xs-12\">
                            ";
                // line 70
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                yield "
                        </div>
                    ";
            }
            // line 73
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['name'], $context['f'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "            </div>
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
        return "@MauticPage/FormTheme/Config/_config_trackingconfig_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  213 => 74,  207 => 73,  201 => 70,  198 => 69,  195 => 68,  191 => 67,  185 => 64,  176 => 58,  172 => 57,  165 => 52,  159 => 51,  153 => 48,  150 => 47,  147 => 46,  143 => 45,  137 => 42,  128 => 36,  124 => 35,  117 => 30,  111 => 29,  107 => 27,  101 => 25,  99 => 24,  95 => 23,  92 => 22,  89 => 21,  85 => 20,  75 => 13,  67 => 8,  59 => 3,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPage/FormTheme/Config/_config_trackingconfig_widget.html.twig", "/var/www/html/docroot/app/bundles/PageBundle/Resources/views/FormTheme/Config/_config_trackingconfig_widget.html.twig");
    }
}
