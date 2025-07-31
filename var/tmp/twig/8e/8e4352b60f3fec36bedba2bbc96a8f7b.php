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

/* @MauticEmail/Email/_list.html.twig */
class __TwigTemplate_254bf763bdd82e10434a52cb06464949 extends Template
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 1, $this->source); })())) > 0)) {
            // line 2
            yield "    <div class=\"table-responsive\">
        <table class=\"table table-hover email-list\">
            <thead>
            <tr>";
            // line 6
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true"]);
            // line 10
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "email", "orderBy" => "e.name", "text" => "mautic.core.name", "class" => "col-email-name"]);
            // line 17
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "email", "orderBy" => "c.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-email-category"]);
            // line 24
            yield "<th class=\"visible-sm visible-md visible-lg col-email-stats\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.stats"), "html", null, true);
            yield "</th>";
            // line 26
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "email", "orderBy" => "e.dateAdded", "text" => "mautic.lead.import.label.dateAdded", "class" => "visible-lg col-email-dateAdded"]);
            // line 33
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "email", "orderBy" => "e.dateModified", "defaultDir" => "DESC", "text" => "mautic.lead.import.label.dateModified", "class" => "visible-lg col-email-dateModified", "default" => true]);
            // line 42
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "email", "orderBy" => "e.createdByUser", "text" => "mautic.core.createdby", "class" => "visible-lg col-email-createdByUser"]);
            // line 49
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "email", "orderBy" => "e.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-email-id"]);
            // line 55
            yield "</tr>
            </thead>
            <tbody>
            ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 58, $this->source); })()));
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
                // line 59
                yield "                ";
                $context["hasVariants"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isVariant", [], "method", false, false, false, 59);
                // line 60
                yield "                ";
                $context["hasTranslations"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isTranslation", [], "method", false, false, false, 60);
                // line 61
                yield "                ";
                $context["type"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getEmailType", [], "method", false, false, false, 61);
                // line 62
                yield "                ";
                $context["hasDraft"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "hasDraft", [], "method", false, false, false, 62);
                // line 63
                yield "                ";
                $context["mauticTemplateVars"] = Twig\Extension\CoreExtension::merge($context, ["item" => $context["item"]]);
                // line 64
                yield "                <tr id=\"row_email_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 64), "html", null, true);
                yield "\">
                    <td>
                        ";
                // line 66
                $context["edit"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 67
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 67, $this->source); })()), "email:emails:editown", [], "array", false, false, false, 67), CoreExtension::getAttribute($this->env, $this->source,                 // line 68
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 68, $this->source); })()), "email:emails:editother", [], "array", false, false, false, 68), CoreExtension::getAttribute($this->env, $this->source,                 // line 69
$context["item"], "getCreatedBy", [], "method", false, false, false, 69));
                // line 71
                yield "
                        ";
                // line 72
                $context["sendButton"] = ["attr" => ["data-toggle" => "ajax", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "send", "objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 75
$context["item"], "getId", [], "method", false, false, false, 75)])], "iconClass" => "ri-send-plane-line-o", "btnText" => "mautic.email.send"];
                // line 80
                yield "
                        ";
                // line 81
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isBackgroundSending", [], "method", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 82
                    yield "                            ";
                    $context["sendButton"] = Twig\Extension\CoreExtension::merge((isset($context["sendButton"]) || array_key_exists("sendButton", $context) ? $context["sendButton"] : (function () { throw new RuntimeError('Variable "sendButton" does not exist.', 82, $this->source); })()), ["attr" => ["href" => "javascript:void(0);", "disabled" => true], "tooltip" => "mautic.email.send.disabled", "btnClass" => "disabled"]);
                    // line 90
                    yield "                        ";
                }
                // line 91
                yield "
                        ";
                // line 92
                $context["customButtons"] = ((("list" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 92, $this->source); })()))) ? ([(isset($context["sendButton"]) || array_key_exists("sendButton", $context) ? $context["sendButton"] : (function () { throw new RuntimeError('Variable "sendButton" does not exist.', 92, $this->source); })())]) : ([]));
                // line 95
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 96
$context["item"], "templateButtons" => ["edit" =>                 // line 98
(isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 98, $this->source); })()), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 99
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 99, $this->source); })()), "email:emails:create", [], "array", false, false, false, 99), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 101
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 101, $this->source); })()), "email:emails:deleteown", [], "array", false, false, false, 101), CoreExtension::getAttribute($this->env, $this->source,                 // line 102
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 102, $this->source); })()), "email:emails:deleteother", [], "array", false, false, false, 102), CoreExtension::getAttribute($this->env, $this->source,                 // line 103
$context["item"], "getCreatedBy", [], "method", false, false, false, 103)), "abtest" => (((!                // line 105
(isset($context["hasVariants"]) || array_key_exists("hasVariants", $context) ? $context["hasVariants"] : (function () { throw new RuntimeError('Variable "hasVariants" does not exist.', 105, $this->source); })())) && (isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 105, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 105, $this->source); })()), "email:emails:create", [], "array", false, false, false, 105))], "routeBase" => "email", "customButtons" =>                 // line 108
(isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 108, $this->source); })())]);
                // line 110
                yield "</td>
                    <td>
                        <div>";
                // line 113
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 114
$context["item"], "model" => "email"]);
                // line 117
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 117)]), "html", null, true);
                yield "\"
                               data-toggle=\"ajax\">
                                ";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 119), "html", null, true);
                yield "
                                ";
                // line 120
                if ((($tmp = (isset($context["hasVariants"]) || array_key_exists("hasVariants", $context) ? $context["hasVariants"] : (function () { throw new RuntimeError('Variable "hasVariants" does not exist.', 120, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 121
                    yield "                                  <span data-toggle=\"tooltip\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.ab_test"), "html", null, true);
                    yield "\"><i class=\"ri-fw ri-organization-chart fs-14\"></i></span>
                                ";
                }
                // line 123
                yield "                                ";
                if ((($tmp = (isset($context["hasTranslations"]) || array_key_exists("hasTranslations", $context) ? $context["hasTranslations"] : (function () { throw new RuntimeError('Variable "hasTranslations" does not exist.', 123, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 124
                    yield "                                  <span data-toggle=\"tooltip\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.translation"), "html", null, true);
                    yield "\"><i class=\"ri-fw ri-translate fs-14\"></i></span>
                                ";
                }
                // line 126
                yield "                                ";
                if (("list" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 126, $this->source); })()))) {
                    // line 127
                    yield "                                  <span data-toggle=\"tooltip\"title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.icon_tooltip.list_email"), "html", null, true);
                    yield "\"><i class=\"ri-pie-chart-line fs-14\"></i></span>
                                ";
                }
                // line 129
                yield "                                ";
                if (((isset($context["isDraftEnabled"]) || array_key_exists("isDraftEnabled", $context) ? $context["isDraftEnabled"] : (function () { throw new RuntimeError('Variable "isDraftEnabled" does not exist.', 129, $this->source); })()) && (isset($context["hasDraft"]) || array_key_exists("hasDraft", $context) ? $context["hasDraft"] : (function () { throw new RuntimeError('Variable "hasDraft" does not exist.', 129, $this->source); })()))) {
                    // line 130
                    yield "                                <span data-toggle=\"tooltip\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.icon_tooltip.has_draft"), "html", null, true);
                    yield "\">
                                    <i class=\"fa fa-fw fa-file\"></i>
                                </span>
                                ";
                }
                // line 134
                yield "                                ";
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("email.name", (isset($context["mauticTemplateVars"]) || array_key_exists("mauticTemplateVars", $context) ? $context["mauticTemplateVars"] : (function () { throw new RuntimeError('Variable "mauticTemplateVars" does not exist.', 134, $this->source); })()));
                yield "
                            </a>
                        </div>
                        ";
                // line 137
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 137))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 138
                    yield "                            <div class=\"text-secondary mt-4\">
                                <small>";
                    // line 139
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 139));
                    yield "</small>
                            </div>
                        ";
                }
                // line 142
                yield "                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 144
                $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getCategory", [], "method", false, false, false, 144);
                // line 145
                yield "                        ";
                $context["catName"] = (((($tmp = (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 145, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 145, $this->source); })()), "getTitle", [], "method", false, false, false, 145)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 146
                yield "                        ";
                $context["color"] = (((($tmp = (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 146, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("#" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 146, $this->source); })()), "getColor", [], "method", false, false, false, 146))) : (""));
                // line 147
                yield "                        <div class=\"d-flex ai-center gap-xs\"><span class=\"label label-gray label-category\" style=\"background: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 147, $this->source); })()), "html", null, true);
                yield ";\"> </span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 147, $this->source); })()), "html", null, true);
                yield "</div>
                    </td>
                    <td class=\"visible-sm visible-md visible-lg col-stats\" data-stats=\"";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 149), "html", null, true);
                yield "\">
                        ";
                // line 150
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("email.stats.above", (isset($context["mauticTemplateVars"]) || array_key_exists("mauticTemplateVars", $context) ? $context["mauticTemplateVars"] : (function () { throw new RuntimeError('Variable "mauticTemplateVars" does not exist.', 150, $this->source); })()));
                yield "
                        <span class=\"mt-xs label label-warm-gray";
                // line 151
                yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getPendingCount", [], "method", false, false, false, 151) > 0) && ("list" == CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getEmailType", [], "method", false, false, false, 151)))) ? ("") : (" hide"));
                yield "\"
                              id=\"pending-";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 152), "html", null, true);
                yield "\"
                              data-toggle=\"tooltip\"
                              title=\"";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.leadcount.tooltip"), "html", null, true);
                yield "\">
                          <i class=\"ri-more-fill\"></i><a href=\"";
                // line 155
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.email_pending") . ":") . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 155))]), "html", null, true);
                yield "\">
                              ";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.leadcount", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getPendingCount", [], "method", false, false, false, 156)]), "html", null, true);
                yield "
                          </a>
                        </span>
                        <span class=\"mt-xs label label-magenta";
                // line 159
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getQueuedCount", [], "method", false, false, false, 159) > 0)) ? ("") : (" hide"));
                yield "\"
                              id=\"queued-";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 160), "html", null, true);
                yield "\"
                              data-toggle=\"tooltip\"
                              title=\"";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.queued.tooltip"), "html", null, true);
                yield "\">
                          <i class=\"ri-mail-send-line\"></i><a href=\"";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.email_queued") . ":") . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 163))]), "html", null, true);
                yield "\">
                              ";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.queued", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getQueuedCount", [], "method", false, false, false, 164)]), "html", null, true);
                yield "
                          </a>
                        </span>
                        <span class=\"mt-xs label label-blue\" id=\"sent-count-";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 167), "html", null, true);
                yield "\">
                            <i class=\"ri-mail-unread-line\"></i><a href=\"";
                // line 168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.email_sent") . ":") . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 168))]), "html", null, true);
                yield "\"
                             data-toggle=\"tooltip\"
                             title=\"";
                // line 170
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.tooltip"), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.sentcount", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getSentCount", [true], "method", false, false, false, 170)]), "html", null, true);
                yield "</a>
                        </span>
                        <span class=\"mt-xs label label-teal\" id=\"read-count-";
                // line 172
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 172), "html", null, true);
                yield "\">
                            <i class=\"ri-mail-open-line\"></i><a href=\"";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.email_read") . ":") . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 173))]), "html", null, true);
                yield "\"
                             data-toggle=\"tooltip\"
                             title=\"";
                // line 175
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.tooltip"), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.readcount", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getReadCount", [true], "method", false, false, false, 175)]), "html", null, true);
                yield "</a>
                             <span id=\"read-percent-";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 176), "html", null, true);
                yield "\">
                                (";
                // line 177
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getReadPercentage", [true], "method", false, false, false, 177), "html", null, true);
                yield "%)
                            </span>
                        </span>

                        ";
                // line 181
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("email.stats", (isset($context["mauticTemplateVars"]) || array_key_exists("mauticTemplateVars", $context) ? $context["mauticTemplateVars"] : (function () { throw new RuntimeError('Variable "mauticTemplateVars" does not exist.', 181, $this->source); })()));
                yield "
                        ";
                // line 182
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("email.stats.below", (isset($context["mauticTemplateVars"]) || array_key_exists("mauticTemplateVars", $context) ? $context["mauticTemplateVars"] : (function () { throw new RuntimeError('Variable "mauticTemplateVars" does not exist.', 182, $this->source); })()));
                yield "
                    </td>
                    <td class=\"visible-lg\" title=\"";
                // line 184
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 184)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 184))) : (""));
                yield "\">
                        ";
                // line 185
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 185)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 185))) : (""));
                yield "
                    </td>
                    <td class=\"visible-lg\" title=\"";
                // line 187
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 187)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 187))) : (""));
                yield "\">
                        ";
                // line 188
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 188)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 188))) : (""));
                yield "
                    </td>
                    <td class=\"visible-lg\">";
                // line 190
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getCreatedByUser", [], "method", false, false, false, 190));
                yield "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 191
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 191), "html", null, true);
                yield "</td>
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
            // line 194
            yield "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">";
            // line 198
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 199
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 199, $this->source); })()), "page" =>             // line 200
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 200, $this->source); })()), "limit" =>             // line 201
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 201, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_index"), "sessionVar" => "email"]);
            // line 205
            yield "</div>
";
        } else {
            // line 207
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticEmail/Email/_list.html.twig";
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
        return array (  397 => 207,  393 => 205,  391 => 201,  390 => 200,  389 => 199,  388 => 198,  383 => 194,  366 => 191,  362 => 190,  357 => 188,  353 => 187,  348 => 185,  344 => 184,  339 => 182,  335 => 181,  328 => 177,  324 => 176,  318 => 175,  313 => 173,  309 => 172,  302 => 170,  297 => 168,  293 => 167,  287 => 164,  283 => 163,  279 => 162,  274 => 160,  270 => 159,  264 => 156,  260 => 155,  256 => 154,  251 => 152,  247 => 151,  243 => 150,  239 => 149,  231 => 147,  228 => 146,  225 => 145,  223 => 144,  219 => 142,  213 => 139,  210 => 138,  208 => 137,  201 => 134,  193 => 130,  190 => 129,  184 => 127,  181 => 126,  175 => 124,  172 => 123,  166 => 121,  164 => 120,  160 => 119,  154 => 117,  152 => 114,  151 => 113,  147 => 110,  145 => 108,  144 => 105,  143 => 103,  142 => 102,  141 => 101,  140 => 99,  139 => 98,  138 => 96,  137 => 95,  135 => 92,  132 => 91,  129 => 90,  126 => 82,  124 => 81,  121 => 80,  119 => 75,  118 => 72,  115 => 71,  113 => 69,  112 => 68,  111 => 67,  110 => 66,  104 => 64,  101 => 63,  98 => 62,  95 => 61,  92 => 60,  89 => 59,  72 => 58,  67 => 55,  65 => 49,  63 => 42,  61 => 33,  59 => 26,  55 => 24,  53 => 17,  51 => 10,  49 => 6,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/Email/_list.html.twig", "/var/www/html/docroot/app/bundles/EmailBundle/Resources/views/Email/_list.html.twig");
    }
}
