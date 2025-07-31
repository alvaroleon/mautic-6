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

/* @MauticNotification/FormTheme/Config/_config_notification_config_widget.html.twig */
class __TwigTemplate_d32be682142536e7db8da984ed22c5a9 extends Template
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
            '_config_notification_config_widget' => [$this, 'block__config_notification_config_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "  ";
        yield from $this->unwrap()->yieldBlock('_config_notification_config_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__config_notification_config_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "  <h4 class=\"fw-sb mt-48 mb-xs\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.campaign_notification_config"), "html", null, true);
        yield "</h4>
  <div class=\"text-muted small pb-md\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.campaign_notification_config.description"), "html", null, true);
        yield "</div>
  <div class=\"row\">
      <div class=\"panel panel-default mb-md\">
          <div class=\"panel-body\">
              <div class=\"row\">
                  <div class=\"col-xs-12\">
                      ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "campaign_send_notification_to_author", [], "any", false, false, false, 15), 'row');
        yield "
                  </div>
              </div>
              <div class=\"row\">
                  <div class=\"col-xs-12\">
                      ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "campaign_notification_email_addresses", [], "any", false, false, false, 20), 'row');
        yield "
                  </div>
              </div>
          </div>
      </div>
  </div>

  <h4 class=\"fw-sb mt-48 mb-xs\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.webhook_notification_config"), "html", null, true);
        yield "</h4>
  <div class=\"text-muted small pb-md\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.webhook_notification_config.description"), "html", null, true);
        yield "</div>
  <div class=\"row\">
      <div class=\"panel panel-default mb-md\">
          <div class=\"panel-body\">
              <div class=\"row\">
                  <div class=\"col-xs-12\">
                      ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "webhook_send_notification_to_author", [], "any", false, false, false, 34), 'row');
        yield "
                  </div>
              </div>
              <div class=\"row\">
                  <div class=\"col-xs-12\">
                      ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "webhook_notification_email_addresses", [], "any", false, false, false, 39), 'row');
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
        return "@MauticNotification/FormTheme/Config/_config_notification_config_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  108 => 39,  100 => 34,  91 => 28,  87 => 27,  77 => 20,  69 => 15,  60 => 9,  55 => 8,  43 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticNotification/FormTheme/Config/_config_notification_config_widget.html.twig", "/var/www/html/docroot/app/bundles/NotificationBundle/Resources/views/FormTheme/Config/_config_notification_config_widget.html.twig");
    }
}
