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

/* @MauticEmail/Email/details.html.twig */
class __TwigTemplate_9776637b104569bea1e41c26aa050487 extends Template
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
            'headerTitle' => [$this, 'block_headerTitle'],
            'mauticContent' => [$this, 'block_mauticContent'],
            'indexButton' => [$this, 'block_indexButton'],
            'publishStatus' => [$this, 'block_publishStatus'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->load((((($tmp = (isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 1, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("@MauticCore/Default/raw_output.html.twig") : ("@MauticCore/Default/content.html.twig")), 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        $context["variantContent"] = Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Variant/index.html.twig", ["activeEntity" =>         // line 26
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 26, $this->source); })()), "variants" =>         // line 27
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 27, $this->source); })()), "abTestResults" =>         // line 28
(isset($context["abTestResults"]) || array_key_exists("abTestResults", $context) ? $context["abTestResults"] : (function () { throw new RuntimeError('Variable "abTestResults" does not exist.', 28, $this->source); })()), "model" => "email", "actionRoute" => "mautic_email_action"]);
        // line 33
        $context["showVariants"] = (array_key_exists("variantContent", $context) &&  !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim((isset($context["variantContent"]) || array_key_exists("variantContent", $context) ? $context["variantContent"] : (function () { throw new RuntimeError('Variable "variantContent" does not exist.', 33, $this->source); })()))));
        // line 35
        $context["translationContent"] = Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Translation/index.html.twig", ["activeEntity" =>         // line 37
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 37, $this->source); })()), "translations" =>         // line 38
(isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 38, $this->source); })()), "model" => "email", "actionRoute" => "mautic_email_action"]);
        // line 44
        $context["showTranslations"] =  !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim((isset($context["translationContent"]) || array_key_exists("translationContent", $context) ? $context["translationContent"] : (function () { throw new RuntimeError('Variable "translationContent" does not exist.', 44, $this->source); })())));
        // line 45
        $context["emailType"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 45, $this->source); })()), "emailType", [], "any", false, false, false, 45);
        // line 47
        if ((($tmp =  !array_key_exists("emailType", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            $context["emailType"] = "template";
        }
        // line 50
        $context["customButtons"] = [];
        // line 52
        if ((($tmp =  !(isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 52, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            if (("list" == (isset($context["emailType"]) || array_key_exists("emailType", $context) ? $context["emailType"] : (function () { throw new RuntimeError('Variable "emailType" does not exist.', 53, $this->source); })()))) {
                // line 54
                $context["sendButton"] = ["attr" => ["data-toggle" => "ajax", "href" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 57
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 57, $this->source); })()), "isBackgroundSending", [], "method", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("javascript:void(0);") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "send", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 57, $this->source); })()), "getId", [], "method", false, false, false, 57)])))], "iconClass" => "ri-send-plane-line", "btnText" => "mautic.email.send", "primary" => true];
                // line 63
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 63, $this->source); })()), "isBackgroundSending", [], "method", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 64
                    $context["sendButton"] = Twig\Extension\CoreExtension::merge((isset($context["sendButton"]) || array_key_exists("sendButton", $context) ? $context["sendButton"] : (function () { throw new RuntimeError('Variable "sendButton" does not exist.', 64, $this->source); })()), ["tooltip" => "mautic.email.send.disabled"]);
                    // line 65
                    $context["sendButton"] = Twig\Extension\CoreExtension::merge((isset($context["sendButton"]) || array_key_exists("sendButton", $context) ? $context["sendButton"] : (function () { throw new RuntimeError('Variable "sendButton" does not exist.', 65, $this->source); })()), ["attr" => ["disabled" => true]]);
                }
                // line 68
                $context["customButtons"] = Twig\Extension\CoreExtension::merge((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 68, $this->source); })()), [(isset($context["sendButton"]) || array_key_exists("sendButton", $context) ? $context["sendButton"] : (function () { throw new RuntimeError('Variable "sendButton" does not exist.', 68, $this->source); })())]);
            }
            // line 70
            $context["sendExampleButton"] = ["attr" => ["id" => "sendEmailButton", "class" => "btn btn-tertiary btn-nospin", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "sendExample", "objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 76
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 76, $this->source); })()), "getId", [], "method", false, false, false, 76)]), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.send.example")], "iconClass" => "ri-mail-send-line", "btnText" => "mautic.email.send.example"];
            // line 82
            $context["customButtons"] = Twig\Extension\CoreExtension::merge((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 82, $this->source); })()), [(isset($context["sendExampleButton"]) || array_key_exists("sendExampleButton", $context) ? $context["sendExampleButton"] : (function () { throw new RuntimeError('Variable "sendExampleButton" does not exist.', 82, $this->source); })())]);
            // line 83
            $context["heatmapButton"] = ["attr" => ["class" => "btn btn-tertiary btn-nospin", "data-toggle" => "email-heatmap", "data-email" => CoreExtension::getAttribute($this->env, $this->source,             // line 87
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 87, $this->source); })()), "getId", [], "method", false, false, false, 87), "data-target" => "#MauticSharedModal", "href" => "#", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.heatmap.click_heatmap")], "iconClass" => "ri-fire-line", "btnText" => "mautic.email.heatmap.click_heatmap"];
            // line 95
            $context["customButtons"] = Twig\Extension\CoreExtension::merge((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 95, $this->source); })()), [(isset($context["heatmapButton"]) || array_key_exists("heatmapButton", $context) ? $context["heatmapButton"] : (function () { throw new RuntimeError('Variable "heatmapButton" does not exist.', 95, $this->source); })())]);
        }
        // line 99
        $context["allowAbTest"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 99, $this->source); })()), "isTranslation", [true], "method", false, false, false, 99) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 99, $this->source); })()), "parent", [], "array", false, false, false, 99), "isVariant", [true], "method", false, false, false, 99))) ? (false) : (true));
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "email";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_indexButton(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "    ";
        if ((($tmp =  !(isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 8, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>             // line 10
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 10, $this->source); })()), "templateButtons" => ["close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,             // line 13
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 13, $this->source); })()), "email:emails:viewown", [], "array", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source,             // line 14
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 14, $this->source); })()), "email:emails:viewother", [], "array", false, false, false, 14), CoreExtension::getAttribute($this->env, $this->source,             // line 15
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 15, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 15))], "routeBase" => "email", "targetLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.emails"), "customButtons" => []]);
        }
        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_publishStatus(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 102
        yield "    ";
        if ((($tmp =  !(isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 102, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 103
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" =>             // line 104
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 104, $this->source); })()), "status" => (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source,             // line 105
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 105, $this->source); })()), "getPublishUp", [], "method", false, false, false, 105))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("sending") : ("available"))]);
            // line 108
            $context["tags"] = [["color" => "warm-gray", "label" => (((            // line 111
(isset($context["emailType"]) || array_key_exists("emailType", $context) ? $context["emailType"] : (function () { throw new RuntimeError('Variable "emailType" does not exist.', 111, $this->source); })()) == "list")) ? ("mautic.email.type.list.header") : ((((            // line 113
(isset($context["emailType"]) || array_key_exists("emailType", $context) ? $context["emailType"] : (function () { throw new RuntimeError('Variable "emailType" does not exist.', 113, $this->source); })()) == "template")) ? ("mautic.email.type.template.header") : ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 113, $this->source); })())))))]];
            // line 116
            yield "
        ";
            // line 118
            yield "        ";
            $context["tags"] = Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 118, $this->source); })()), (((CoreExtension::getAttribute($this->env, $this->source,             // line 119
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 119, $this->source); })()), "isVariant", [], "any", false, false, false, 119) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 119, $this->source); })()), "isVariant", [true], "method", false, false, false, 119))) ? ([["color" => "warm-gray", "label" => "mautic.email.icon_tooltip.abtest"]]) : ([]))), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 122
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 122, $this->source); })()), "isVariant", [true], "method", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ([["color" => "warm-gray", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variant_of", ["%parent%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 123
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 123, $this->source); })()), "parent", [], "any", false, false, false, 123), "getName", [], "method", false, false, false, 123)]), "icon" => "ri-organization-chart"]]) : ([]))), (((CoreExtension::getAttribute($this->env, $this->source,             // line 125
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 125, $this->source); })()), "isTranslation", [], "any", false, false, false, 125) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 125, $this->source); })()), "isTranslation", [true], "method", false, false, false, 125))) ? ([["color" => "warm-gray", "label" => "mautic.core.icon_tooltip.translation"]]) : ([]))), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 128
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 128, $this->source); })()), "isTranslation", [true], "method", false, false, false, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ([["color" => "warm-gray", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.translation_of", ["%parent%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 129
(isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 129, $this->source); })()), "parent", [], "any", false, false, false, 129), "name", [], "any", false, false, false, 129)]), "icon" => "ri-translate"]]) : ([])));
            // line 132
            yield "
        ";
            // line 133
            yield from $this->load("@MauticCore/Helper/_tag.html.twig", 133)->unwrap()->yield(CoreExtension::merge($context, ["tags" => (isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 133, $this->source); })())]));
            // line 134
            yield "
    ";
        }
        yield from [];
    }

    // line 138
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 139
        yield "    ";
        if ((($tmp =  !(isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 139, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 140
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>             // line 141
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 141, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,             // line 144
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 144, $this->source); })()), "email:emails:editown", [], "array", false, false, false, 144), CoreExtension::getAttribute($this->env, $this->source,             // line 145
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 145, $this->source); })()), "email:emails:editother", [], "array", false, false, false, 145), CoreExtension::getAttribute($this->env, $this->source,             // line 146
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 146, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 146)), "clone" => CoreExtension::getAttribute($this->env, $this->source,             // line 148
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 148, $this->source); })()), "email:emails:create", [], "array", false, false, false, 148), "abtest" => (            // line 149
(isset($context["allowAbTest"]) || array_key_exists("allowAbTest", $context) ? $context["allowAbTest"] : (function () { throw new RuntimeError('Variable "allowAbTest" does not exist.', 149, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 149, $this->source); })()), "email:emails:create", [], "array", false, false, false, 149)), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,             // line 151
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 151, $this->source); })()), "email:emails:deleteown", [], "array", false, false, false, 151), CoreExtension::getAttribute($this->env, $this->source,             // line 152
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 152, $this->source); })()), "email:emails:deleteother", [], "array", false, false, false, 152), CoreExtension::getAttribute($this->env, $this->source,             // line 153
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 153, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 153))], "routeBase" => "email", "customButtons" =>             // line 157
(isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 157, $this->source); })())]);
        }
        yield from [];
    }

    // line 162
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 163
        yield "  <!-- start: box layout -->
  <div class=\"box-layout\">
      <!-- left section -->
      <div class=\"col-md-9 height-auto\">
          <div>
              <!-- email detail header -->
              <div class=\"pr-md pl-md pt-lg pb-lg\">
                  <div class=\"box-layout\">
                      <div class=\"col-xs-10\">
                          <div>";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 172, $this->source); })()), "subject", [], "any", false, false, false, 172), "html", null, true);
        yield "</div>
                          <div class=\"text-secondary\">";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["emailPreview"]) || array_key_exists("emailPreview", $context) ? $context["emailPreview"] : (function () { throw new RuntimeError('Variable "emailPreview" does not exist.', 173, $this->source); })()), "html", null, true);
        yield "</div>
                          ";
        // line 174
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 174, $this->source); })()), "isVariant", [true], "method", false, false, false, 174)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 175
            yield "                            <div class=\"small\">
                              <a href=\"";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 176, $this->source); })()), "parent", [], "any", false, false, false, 176), "id", [], "any", false, false, false, 176)]), "html", null, true);
            yield "\" data-toggle=\"ajax\">";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variant_of", ["%parent%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 177, $this->source); })()), "parent", [], "any", false, false, false, 177), "name", [], "any", false, false, false, 177)]), "html", null, true);
            // line 178
            yield "</a>
                            </div>
                          ";
        }
        // line 181
        yield "                          ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 181, $this->source); })()), "isTranslation", [true], "method", false, false, false, 181)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 182
            yield "                            <div class=\"small\">
                              <a href=\"";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 183, $this->source); })()), "parent", [], "any", false, false, false, 183), "id", [], "any", false, false, false, 183)]), "html", null, true);
            yield "\" data-toggle=\"ajax\">";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.translation_of", ["%parent%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 184, $this->source); })()), "parent", [], "any", false, false, false, 184), "name", [], "any", false, false, false, 184)]), "html", null, true);
            // line 185
            yield "</a>
                            </div>
                          ";
        }
        // line 188
        yield "                      </div>
                  </div>
              </div>
              <!--/ email detail header -->

              <!-- email detail collapseable -->
              <div class=\"collapse pr-md pl-md\" id=\"email-details\">
                  <div class=\"pr-md pl-md pb-md\">
                      <div class=\"panel shd-none mb-0\">
                          <table class=\"table table-hover mb-0\">
                              <tbody>";
        // line 199
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 199, $this->source); })())]);
        // line 200
        yield "<tr>
                                  <td width=\"20%\">
                                      <span class=\"fw-b\">";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.theme"), "html", null, true);
        yield "</span>
                                  </td>
                                  <td>";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 204, $this->source); })()), "template", [], "any", false, false, false, 204), "html", null, true);
        yield "</td>
                              </tr>
                              ";
        // line 206
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 206, $this->source); })()), "fromName", [], "any", false, false, false, 206)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 207
            yield "                                  <tr>
                                      <td width=\"20%\">
                                          <span class=\"fw-b\">";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.from_name"), "html", null, true);
            yield "</span>
                                      </td>
                                      <td>";
            // line 211
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 211, $this->source); })()), "fromName", [], "any", false, false, false, 211), "html", null, true);
            yield "</td>
                                  </tr>
                              ";
        }
        // line 214
        yield "                              ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 214, $this->source); })()), "fromAddress", [], "any", false, false, false, 214)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 215
            yield "                                  <tr>
                                      <td width=\"20%\">
                                          <span class=\"fw-b\">";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.from_email"), "html", null, true);
            yield "</span>
                                      </td>
                                      <td>";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 219, $this->source); })()), "fromAddress", [], "any", false, false, false, 219), "html", null, true);
            yield "</td>
                                  </tr>
                              ";
        }
        // line 222
        yield "                              ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 222, $this->source); })()), "replyToAddress", [], "any", false, false, false, 222)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 223
            yield "                                  <tr>
                                      <td width=\"20%\">
                                          <span class=\"fw-b\">";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.reply_to_email"), "html", null, true);
            yield "</span>
                                      </td>
                                      <td>";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 227, $this->source); })()), "replyToAddress", [], "any", false, false, false, 227), "html", null, true);
            yield "</td>
                                  </tr>
                              ";
        }
        // line 230
        yield "                              ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 230, $this->source); })()), "bccAddress", [], "any", false, false, false, 230)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 231
            yield "                                  <tr>
                                      <td width=\"20%\">
                                          <span class=\"fw-b\">";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.bcc"), "html", null, true);
            yield "</span>
                                      </td>
                                      <td>";
            // line 235
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 235, $this->source); })()), "bccAddress", [], "any", false, false, false, 235), "html", null, true);
            yield "</td>
                                  </tr>
                              ";
        }
        // line 238
        yield "                              ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 238, $this->source); })()), "getPreheaderText", [], "method", false, false, false, 238)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 239
            yield "                                <tr>
                                    <td width=\"20%\">
                                        <span class=\"fw-b\">";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preheader_text"), "html", null, true);
            yield "</span>
                                    </td>
                                    <td>";
            // line 243
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 243, $this->source); })()), "getPreheaderText", [], "method", false, false, false, 243), "html", null, true);
            yield "</td>
                                </tr>
                              ";
        }
        // line 246
        yield "                              ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 246, $this->source); })()), "headers", [], "any", false, false, false, 246)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 247
            yield "                                  <tr>
                                      <td width=\"20%\">
                                          <span class=\"fw-b\">";
            // line 249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.custom_headers"), "html", null, true);
            yield "</span>
                                      </td>
                                      <td>";
            // line 251
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->simpleArrayToHtml(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 251, $this->source); })()), "headers", [], "any", false, false, false, 251));
            yield "</td>
                                  </tr>
                              ";
        }
        // line 254
        yield "                              <tr>
                                  <td width=\"20%\">
                                      <span class=\"fw-b\">";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.sent"), "html", null, true);
        yield "</span>
                                  </td>
                                  <td>";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 258, $this->source); })()), "sentCount", [], "any", false, false, false, 258), "html", null, true);
        yield "</td>
                              </tr>
                              <tr>
                                  <td width=\"20%\">
                                      <span class=\"fw-b\">";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.delivered"), "html", null, true);
        yield "</span>
                                  </td>
                                  <td data-email-stat-delivered-for=\"";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 264, $this->source); })()), "id", [], "any", false, false, false, 264), "html", null, true);
        yield "\"><div class=\"spinner\"><i class=\"ri-loader-3-line ri-spin\"></i></div></td>
                              </tr>
                              <tr>
                                  <td width=\"20%\">
                                      <span class=\"fw-b\">";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.read"), "html", null, true);
        yield "</span>
                                  </td>
                                  <td>";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 270, $this->source); })()), "readCount", [], "any", false, false, false, 270), "html", null, true);
        yield "</td>
                              </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
              <!--/ email detail collapseable -->
          </div>

          <div>
              <!-- email detail collapseable toggler -->
              <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\" title=\"";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-secondary collapsed\" data-toggle=\"collapse\" data-target=\"#email-details\">
                      <span class=\"caret\"></span> ";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "
                    </a>
                </span>
              </div>
              <!--/ email detail collapseable toggler -->

              ";
        // line 291
        $context["isVariant"] = ((((isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 291, $this->source); })()) || (isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 291, $this->source); })()))) ? (((isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 291, $this->source); })()) || (isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 291, $this->source); })()))) : (0));
        // line 292
        yield "              ";
        $context["dateFrom"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 292, $this->source); })()), "children", [], "any", false, false, false, 292), "date_from", [], "array", false, false, false, 292), "vars", [], "any", false, false, false, 292), "data", [], "array", false, false, false, 292);
        // line 293
        yield "              ";
        $context["dateTo"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 293, $this->source); })()), "children", [], "any", false, false, false, 293), "date_to", [], "array", false, false, false, 293), "vars", [], "any", false, false, false, 293), "data", [], "array", false, false, false, 293);
        // line 294
        yield "
              <div class=\"stats-menu pl-md mt-lg\">
                  <!-- tabs controls -->
                  <ul class=\"nav nav-tabs nav-tabs-contained\">
                      <li class=\"active\">
                          <a href=\"#stats-container\" role=\"tab\" data-toggle=\"tab\">
                              ";
        // line 300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.thead.stats"), "html", null, true);
        yield "
                          </a>
                      </li>
                      <li>
                          <a href=\"#reads-map-container\" role=\"tab\" data-toggle=\"tab\" data-load=\"map\">
                              ";
        // line 305
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.thead.maps"), "html", null, true);
        yield "
                          </a>
                      </li>
                  </ul>
                  <!--/ tabs controls -->

                  <div class=\"date-range\">
                      ";
        // line 312
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" =>         // line 313
(isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 313, $this->source); })())]);
        // line 314
        yield "
                  </div>
              </div>

              <div class=\"stats-menu__content tab-content pa-md mb-lg shd-sm\">
                  <div class=\"tab-pane active bdr-w-0\" id=\"stats-container\">
                      <div id=\"emailGraphStats\"
                           data-graph-url=\"";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_graph_stats", ["objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 321, $this->source); })()), "id", [], "any", false, false, false, 321), "isVariant" => (isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 321, $this->source); })()), "dateFrom" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dateFrom"]) || array_key_exists("dateFrom", $context) ? $context["dateFrom"] : (function () { throw new RuntimeError('Variable "dateFrom" does not exist.', 321, $this->source); })()), "Y-m-d"), "dateTo" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dateTo"]) || array_key_exists("dateTo", $context) ? $context["dateTo"] : (function () { throw new RuntimeError('Variable "dateTo" does not exist.', 321, $this->source); })()), "Y-m-d")]), "html", null, true);
        yield "\"
                      >
                          <div class=\"spinner\">
                              <i class=\"ri-loader-3-line ri-spin\"></i>
                          </div>
                      </div>

                  </div>
                  <div class=\"tab-pane bdr-w-0\" id=\"reads-map-container\"
                       data-map-url=\"";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_map_stats", ["objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 330, $this->source); })()), "id", [], "any", false, false, false, 330), "isVariant" => (isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 330, $this->source); })()), "dateFrom" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dateFrom"]) || array_key_exists("dateFrom", $context) ? $context["dateFrom"] : (function () { throw new RuntimeError('Variable "dateFrom" does not exist.', 330, $this->source); })()), "Y-m-d"), "dateTo" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dateTo"]) || array_key_exists("dateTo", $context) ? $context["dateTo"] : (function () { throw new RuntimeError('Variable "dateTo" does not exist.', 330, $this->source); })()), "Y-m-d")]), "html", null, true);
        yield "\"
                  >
                      <div class=\"spinner\">
                          <i class=\"ri-loader-3-line ri-spin\"></i>
                      </div>
                  </div>
              </div>

              ";
        // line 338
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        yield "

              <!-- tabs controls -->
              <ul class=\"nav nav-tabs nav-tabs-contained\">
                  <li class=\"active\">
                      <a href=\"#clicks-container\" role=\"tab\" data-toggle=\"tab\">
                          ";
        // line 344
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.click_counts"), "html", null, true);
        yield "
                      </a>
                  </li>
                  <li>
                      <a href=\"#contacts-container\" role=\"tab\" data-toggle=\"tab\">
                          ";
        // line 349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.associated.contacts"), "html", null, true);
        yield "
                      </a>
                  </li>
                  ";
        // line 352
        if ((($tmp = (isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 352, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 353
            yield "                      <li>
                          <a href=\"#variants-container\" role=\"tab\" data-toggle=\"tab\">
                              ";
            // line 355
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variants"), "html", null, true);
            yield "
                          </a>
                      </li>
                  ";
        }
        // line 359
        yield "                  ";
        if ((($tmp = (isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 359, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 360
            yield "                      <li>
                          <a href=\"#translation-container\" role=\"tab\" data-toggle=\"tab\">
                              ";
            // line 362
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.translations"), "html", null, true);
            yield "
                          </a>
                      </li>
                  ";
        }
        // line 366
        yield "              </ul>
              <!--/ tabs controls -->
          </div>

          <!-- start: tab-content -->
          <div class=\"tab-content pa-md\">
              <div class=\"tab-pane active bdr-w-0\" id=\"clicks-container\">";
        // line 373
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticPage/Trackable/click_counts.html.twig", ["trackables" =>         // line 374
(isset($context["trackables"]) || array_key_exists("trackables", $context) ? $context["trackables"] : (function () { throw new RuntimeError('Variable "trackables" does not exist.', 374, $this->source); })()), "entity" =>         // line 375
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 375, $this->source); })()), "channel" => "email"]);
        // line 378
        yield "</div>

              <div class=\"tab-pane bdr-w-0 page-list\" id=\"contacts-container\">
                  ";
        // line 381
        yield (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 381, $this->source); })());
        yield "
              </div>

              ";
        // line 384
        if ((($tmp = (isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 384, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 385
            yield "                  <!-- #variants-container -->
                  <div class=\"tab-pane bdr-w-0\" id=\"variants-container\">
                      ";
            // line 387
            yield (isset($context["variantContent"]) || array_key_exists("variantContent", $context) ? $context["variantContent"] : (function () { throw new RuntimeError('Variable "variantContent" does not exist.', 387, $this->source); })());
            yield "
                  </div>
                  <!--/ #variants-container -->
              ";
        }
        // line 391
        yield "
              <!-- #translation-container -->
              ";
        // line 393
        if ((($tmp = (isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 393, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 394
            yield "                  <div class=\"tab-pane bdr-w-0\" id=\"translation-container\">
                      ";
            // line 395
            yield (isset($context["translationContent"]) || array_key_exists("translationContent", $context) ? $context["translationContent"] : (function () { throw new RuntimeError('Variable "translationContent" does not exist.', 395, $this->source); })());
            yield "
                  </div>
              ";
        }
        // line 398
        yield "              <!--/ #translation-container -->
          </div>
      </div>
      <!--/ left section -->

      <!-- right section -->
      <div class=\"col-md-3 bdr-l height-auto\">
          <!-- preview URL -->
          <div class=\"panel shd-none bdr-rds-0 bdr-w-0 mt-sm mb-0\">
              <div class=\"panel-heading\">
                  <div class=\"panel-title\">";
        // line 408
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preview.url"), "html", null, true);
        yield "</div>
              </div>
              <div class=\"panel-body pt-xs\">
                  ";
        // line 411
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["previewSettingsForm"] ?? null), "translation", [], "any", true, true, false, 411)) {
            // line 412
            yield "                  <div class=\"row\">
                      <div class=\"form-group col-xs-12 \">
                          <div class=\"control-label\">";
            // line 414
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preview.show.translation"), "html", null, true);
            yield "</div>
                          ";
            // line 415
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["previewSettingsForm"]) || array_key_exists("previewSettingsForm", $context) ? $context["previewSettingsForm"] : (function () { throw new RuntimeError('Variable "previewSettingsForm" does not exist.', 415, $this->source); })()), "translation", [], "any", false, false, false, 415), 'widget');
            yield "
                      </div>
                  </div>
                  ";
        }
        // line 419
        yield "                  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["previewSettingsForm"] ?? null), "variant", [], "any", true, true, false, 419)) {
            // line 420
            yield "                  <div class=\"row\">
                      <div class=\"form-group col-xs-12 \">
                          <div class=\"control-label\">";
            // line 422
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preview.show.ab.variant"), "html", null, true);
            yield "</div>
                          ";
            // line 423
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["previewSettingsForm"]) || array_key_exists("previewSettingsForm", $context) ? $context["previewSettingsForm"] : (function () { throw new RuntimeError('Variable "previewSettingsForm" does not exist.', 423, $this->source); })()), "variant", [], "any", false, false, false, 423), 'widget');
            yield "
                      </div>
                  </div>
                  ";
        }
        // line 427
        yield "                  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["previewSettingsForm"] ?? null), "contact", [], "any", true, true, false, 427)) {
            // line 428
            yield "                      <div class=\"row\">
                          <div class=\"form-group col-xs-12 \">
                              <div class=\"control-label\">";
            // line 430
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preview.show.contact"), "html", null, true);
            yield "</div>
                              ";
            // line 431
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["previewSettingsForm"]) || array_key_exists("previewSettingsForm", $context) ? $context["previewSettingsForm"] : (function () { throw new RuntimeError('Variable "previewSettingsForm" does not exist.', 431, $this->source); })()), "contact", [], "any", false, false, false, 431), 'widget');
            yield "
                          </div>
                      </div>
                  ";
        }
        // line 435
        yield "                  <div class=\"row\">
                      <div class=\"form-group col-xs-12 \">
                          <div class=\"input-group\">
                              <div class=\"input-group-addon\">";
        // line 439
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>         // line 440
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 440, $this->source); })()), "model" => "email", "query" => "customToggle=publicPreview"]);
        // line 444
        yield "</div>
                              <input id=\"content_preview_url\" data-route=\"email/preview\" onclick=\"this.setSelectionRange(0, this.value.length);\" type=\"text\" class=\"form-control\" readonly value=\"";
        // line 445
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 445, $this->source); })()));
        yield "\"/>
                              <span class=\"input-group-btn\">
                                ";
        // line 447
        yield from $this->load("@MauticCore/Helper/button.html.twig", 447)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.open_link", "variant" => "ghost", "icon_only" => true, "icon" => "ri-external-link-line", "attributes" => ["id" => "content_preview_url_button", "type" => "button"], "onclick" => (("window.open(\"" .         // line 458
(isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 458, $this->source); })())) . "\", \"_blank\");")]]]));
        // line 462
        yield "                          </span>
                              <input type=\"hidden\" id=\"content_preview_settings_object_id\" value=\"";
        // line 463
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 463, $this->source); })()), "id", [], "any", false, false, false, 463), "html", null, true);
        yield "\">
                              <input type=\"hidden\" id=\"content_preview_settings_contact_id\" value=\"\">
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Draft preview URL -->
          ";
        // line 472
        if ((array_key_exists("draftPreviewUrl", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["draftPreviewUrl"]) || array_key_exists("draftPreviewUrl", $context) ? $context["draftPreviewUrl"] : (function () { throw new RuntimeError('Variable "draftPreviewUrl" does not exist.', 472, $this->source); })())))) {
            // line 473
            yield "          <div class=\"panel bg-transparent shd-none bdr-rds-0 bdr-w-0 mt-sm mb-0\">
              <div class=\"panel-heading\">
                  <div class=\"panel-title\">";
            // line 475
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.draft.preview.url"), "html", null, true);
            yield "</div>
              </div>
              <div class=\"panel-body pt-xs\">
                  <div class=\"input-group\">
                      <div class=\"input-group-addon\">";
            // line 480
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => CoreExtension::getAttribute($this->env, $this->source,             // line 481
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 481, $this->source); })()), "getDraft", [], "method", false, false, false, 481), "model" => "email.email_draft", "query" => "customToggle=publicPreview"]);
            // line 485
            yield "</div>
                      <input onclick=\"this.setSelectionRange(0, this.value.length);\" type=\"text\" class=\"form-control\"
                             readonly
                             value=\"";
            // line 488
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["draftPreviewUrl"]) || array_key_exists("draftPreviewUrl", $context) ? $context["draftPreviewUrl"] : (function () { throw new RuntimeError('Variable "draftPreviewUrl" does not exist.', 488, $this->source); })()));
            yield "\"/>
                      <span class=\"input-group-btn\">
                        <button class=\"btn btn-default btn-nospin\" onclick=\"window.open('";
            // line 490
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["draftPreviewUrl"]) || array_key_exists("draftPreviewUrl", $context) ? $context["draftPreviewUrl"] : (function () { throw new RuntimeError('Variable "draftPreviewUrl" does not exist.', 490, $this->source); })()), "html", null, true);
            yield "', '_blank');\">
                            <i class=\"fa fa-external-link\"></i>
                        </button>
                    </span>
                  </div>
              </div>
          </div>
          ";
        }
        // line 498
        yield "
          <!-- email usages -->
          <div class=\"panel shd-none bdr-rds-0 bdr-w-0 mt-sm mb-0\" data-fetch-email-usages=\"";
        // line 500
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 500, $this->source); })()), "id", [], "any", false, false, false, 500), "html", null, true);
        yield "\">
              <div class=\"panel-heading\">
                  <div class=\"panel-title\">";
        // line 502
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.usages"), "html", null, true);
        yield "</div>
              </div>
              <div class=\"panel-body pt-xs\">
                  <i class=\"ri-loader-3-line ri-spin\"></i>
              </div>
          </div>

          <!-- activity feed -->";
        // line 510
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 510, $this->source); })())]);
        // line 512
        yield "</div>
      <!-- right section -->
      <input name=\"entityId\" id=\"entityId\" type=\"hidden\" value=\"";
        // line 514
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 514, $this->source); })()), "id", [], "any", false, false, false, 514));
        yield "\"/>
  </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticEmail/Email/details.html.twig";
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
        return array (  810 => 514,  806 => 512,  804 => 510,  794 => 502,  789 => 500,  785 => 498,  774 => 490,  769 => 488,  764 => 485,  762 => 481,  761 => 480,  754 => 475,  750 => 473,  748 => 472,  736 => 463,  733 => 462,  731 => 458,  730 => 447,  725 => 445,  722 => 444,  720 => 440,  719 => 439,  714 => 435,  707 => 431,  703 => 430,  699 => 428,  696 => 427,  689 => 423,  685 => 422,  681 => 420,  678 => 419,  671 => 415,  667 => 414,  663 => 412,  661 => 411,  655 => 408,  643 => 398,  637 => 395,  634 => 394,  632 => 393,  628 => 391,  621 => 387,  617 => 385,  615 => 384,  609 => 381,  604 => 378,  602 => 375,  601 => 374,  600 => 373,  592 => 366,  585 => 362,  581 => 360,  578 => 359,  571 => 355,  567 => 353,  565 => 352,  559 => 349,  551 => 344,  542 => 338,  531 => 330,  519 => 321,  510 => 314,  508 => 313,  507 => 312,  497 => 305,  489 => 300,  481 => 294,  478 => 293,  475 => 292,  473 => 291,  464 => 285,  459 => 283,  443 => 270,  438 => 268,  431 => 264,  426 => 262,  419 => 258,  414 => 256,  410 => 254,  404 => 251,  399 => 249,  395 => 247,  392 => 246,  386 => 243,  381 => 241,  377 => 239,  374 => 238,  368 => 235,  363 => 233,  359 => 231,  356 => 230,  350 => 227,  345 => 225,  341 => 223,  338 => 222,  332 => 219,  327 => 217,  323 => 215,  320 => 214,  314 => 211,  309 => 209,  305 => 207,  303 => 206,  298 => 204,  293 => 202,  289 => 200,  287 => 199,  275 => 188,  270 => 185,  268 => 184,  265 => 183,  262 => 182,  259 => 181,  254 => 178,  252 => 177,  249 => 176,  246 => 175,  244 => 174,  240 => 173,  236 => 172,  225 => 163,  218 => 162,  212 => 157,  211 => 153,  210 => 152,  209 => 151,  208 => 149,  207 => 148,  206 => 146,  205 => 145,  204 => 144,  203 => 141,  202 => 140,  199 => 139,  192 => 138,  185 => 134,  183 => 133,  180 => 132,  178 => 129,  177 => 128,  176 => 125,  175 => 123,  174 => 122,  173 => 119,  171 => 118,  168 => 116,  166 => 113,  165 => 111,  164 => 108,  162 => 105,  161 => 104,  160 => 103,  157 => 102,  150 => 101,  144 => 15,  143 => 14,  142 => 13,  141 => 10,  140 => 9,  137 => 8,  130 => 7,  119 => 5,  108 => 3,  104 => 1,  102 => 99,  99 => 95,  97 => 87,  96 => 83,  94 => 82,  92 => 76,  91 => 70,  88 => 68,  85 => 65,  83 => 64,  81 => 63,  79 => 57,  78 => 54,  76 => 53,  74 => 52,  72 => 50,  69 => 48,  67 => 47,  65 => 45,  63 => 44,  61 => 38,  60 => 37,  59 => 35,  57 => 33,  55 => 28,  54 => 27,  53 => 26,  52 => 25,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/Email/details.html.twig", "/var/www/html/docroot/app/bundles/EmailBundle/Resources/views/Email/details.html.twig");
    }
}
