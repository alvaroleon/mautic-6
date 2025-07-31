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

/* @MauticCampaign/SubscribedEvents/Timeline/index.html.twig */
class __TwigTemplate_d2bb29a1365cc2691cc2654595992384 extends Template
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
        $context["item"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 1, $this->source); })()), "extra", [], "any", false, false, false, 1), "log", [], "any", false, false, false, 1);
        // line 2
        $context["errors"] = false;
        // line 3
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "metadata", [], "any", false, true, false, 3), "errors", [], "any", true, true, false, 3) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 3, $this->source); })()), "metadata", [], "any", false, false, false, 3), "errors", [], "any", false, false, false, 3)))) {
            // line 4
            yield "    ";
            $context["errors"] = ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "metadata", [], "any", false, false, false, 4), "errors", [], "any", false, false, false, 4))) ? (Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "metadata", [], "any", false, false, false, 4), "errors", [], "any", false, false, false, 4), "<br />")) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "metadata", [], "any", false, false, false, 4), "errors", [], "any", false, false, false, 4)));
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 5
($context["item"] ?? null), "metadata", [], "any", false, true, false, 5), "failed", [], "any", true, true, false, 5) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "metadata", [], "any", false, false, false, 5), "failed", [], "any", false, false, false, 5)))) {
            // line 6
            yield "    ";
            $context["errors"] = (((($tmp = (!Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "metadata", [], "any", false, false, false, 6), "reason", [], "any", false, false, false, 6)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "metadata", [], "any", false, false, false, 6), "reason", [], "any", false, false, false, 6)) : ("mautic.campaign.event.failed.timeline"));
            // line 7
            yield "    ";
            $context["errors"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 7, $this->source); })()));
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 8
($context["item"] ?? null), "fail_reason", [], "any", true, true, false, 8) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "fail_reason", [], "any", false, false, false, 8)))) {
            // line 9
            yield "    ";
            $context["errors"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "fail_reason", [], "any", false, false, false, 9);
        }
        // line 11
        yield "
";
        // line 12
        $context["parentDetails"] = false;
        // line 13
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 13), "parentDetails", [], "any", true, true, false, 13)) {
            // line 14
            yield "    ";
            $context["parentDetails"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 14, $this->source); })()), "extra", [], "any", false, false, false, 14), "parentDetails", [], "any", false, false, false, 14);
        }
        // line 16
        yield "
";
        // line 17
        $context["cancelled"] = (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), "isScheduled", [], "any", false, false, false, 17)) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), "dateTriggered", [], "any", false, false, false, 17)));
        // line 18
        $context["dateSpan"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "triggerDate", [], "any", false, false, false, 18))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((((("<span class=\"timeline-campaign-event-date-" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "event_id", [], "any", false, false, false, 18)) . "\" data-date=\"") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "triggerDate", [], "any", false, false, false, 18), "format", ["Y-m-d H:i:s"], "method", false, false, false, 18)) . "\">") . $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "triggerDate", [], "any", false, false, false, 18))) . "</span>")) : (""));
        // line 19
        yield "
";
        // line 20
        if ((($tmp = (isset($context["cancelled"]) || array_key_exists("cancelled", $context) ? $context["cancelled"] : (function () { throw new RuntimeError('Variable "cancelled" does not exist.', 20, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "    ";
            // line 22
            yield "    ";
            $context["item"] = Twig\Extension\CoreExtension::merge((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 22, $this->source); })()), ["isScheduled" => true]);
        }
        // line 24
        yield "
<div class=\"mt-10\">
    ";
        // line 26
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 26, $this->source); })()), "isScheduled", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "        <p class=\"mt-0 mb-10 text-info\" id=\"timeline-campaign-event-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 27, $this->source); })()), "event_id", [], "any", false, false, false, 27), "html", null, true);
            yield "\">
        <span id=\"timeline-campaign-event-text-";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 28, $this->source); })()), "event_id", [], "any", false, false, false, 28), "html", null, true);
            yield "\"";
            yield (((($tmp = (isset($context["cancelled"]) || array_key_exists("cancelled", $context) ? $context["cancelled"] : (function () { throw new RuntimeError('Variable "cancelled" does not exist.', 28, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" class=\"text-warning\"") : (""));
            yield ">
            <i class=\"ri-time-line\"></i>
            <span class=\"timeline-campaign-event-scheduled-";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 30, $this->source); })()), "event_id", [], "any", false, false, false, 30), "html", null, true);
            yield (((($tmp = (isset($context["cancelled"]) || array_key_exists("cancelled", $context) ? $context["cancelled"] : (function () { throw new RuntimeError('Variable "cancelled" does not exist.', 30, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" hide") : (""));
            yield "\">
                ";
            // line 31
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.timeline.event.scheduled.time", ["%date%" => (isset($context["dateSpan"]) || array_key_exists("dateSpan", $context) ? $context["dateSpan"] : (function () { throw new RuntimeError('Variable "dateSpan" does not exist.', 31, $this->source); })()), "%event%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 31, $this->source); })()), "eventLabel", [], "any", false, false, false, 31)]));
            yield "
            </span>
            <span class=\"timeline-campaign-event-cancelled-";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 33, $this->source); })()), "event_id", [], "any", false, false, false, 33), "html", null, true);
            yield ((Twig\Extension\CoreExtension::testEmpty((isset($context["cancelled"]) || array_key_exists("cancelled", $context) ? $context["cancelled"] : (function () { throw new RuntimeError('Variable "cancelled" does not exist.', 33, $this->source); })()))) ? (" hide") : (""));
            yield "\">
                ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.cancelled.time", ["%date%" => (isset($context["dateSpan"]) || array_key_exists("dateSpan", $context) ? $context["dateSpan"] : (function () { throw new RuntimeError('Variable "dateSpan" does not exist.', 34, $this->source); })()), "%event%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 34, $this->source); })()), "eventLabel", [], "any", false, false, false, 34)]), "html", null, true);
            yield "
            </span>
        </span>
            ";
            // line 37
            if (((isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 37, $this->source); })()) && $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess("lead:leads:editown", "lead:leads:editother", CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 37, $this->source); })()), "getPermissionUser", [], "method", false, false, false, 37)))) {
                // line 38
                yield "                <span class=\"form-buttons btn-group btn-group-xs mb-3\" role=\"group\" aria-label=\"Field options\">
                    <button type=\"button\" id=\"timeline-campaign-event-save-";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 39, $this->source); })()), "event_id", [], "any", false, false, false, 39), "html", null, true);
                yield "\"
                            class=\"btn btn-ghost btn-nospin\" onmousedown=\"return false;\"
                            onclick=\"Mautic.saveScheduledCampaignEvent(";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 41, $this->source); })()), "event_id", [], "any", false, false, false, 41), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 41, $this->source); })()), "getId", [], "method", false, false, false, 41), "html", null, true);
                yield ")\"
                            data-toggle=\"tooltip\" title=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.save"), "html", null, true);
                yield "\" style=\"display:none\">
                        <i class=\"ri-save-line text-interactive\"></i>
                    </button>
                    <button type=\"button\" class=\"btn btn-ghost btn-nospin btn-reschedule\"
                            onclick=\"Mautic.updateScheduledCampaignEvent(";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 46, $this->source); })()), "event_id", [], "any", false, false, false, 46), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 46, $this->source); })()), "getId", [], "method", false, false, false, 46), "html", null, true);
                yield ")\"
                            data-toggle=\"tooltip\" title=\"";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.reschedule"), "html", null, true);
                yield "\">
                        <i class=\"ri-time-line text-interactive\"></i>
                    </button>
                    <button type=\"button\"
                            class=\"btn btn-ghost btn-nospin\"";
                // line 51
                yield (((($tmp = (isset($context["cancelled"]) || array_key_exists("cancelled", $context) ? $context["cancelled"] : (function () { throw new RuntimeError('Variable "cancelled" does not exist.', 51, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" disabled") : (""));
                yield " onclick=\"Mautic.cancelScheduledCampaignEvent(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 51, $this->source); })()), "event_id", [], "any", false, false, false, 51), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 51, $this->source); })()), "getId", [], "method", false, false, false, 51), "html", null, true);
                yield ")\"
                            data-toggle=\"tooltip\" title=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.cancel"), "html", null, true);
                yield "\">
                        <i class=\"ri-close-line text-danger\"></i>
                    </button>
                </span>
            ";
            }
            // line 57
            yield "        </p>
    ";
        }
        // line 59
        yield "    
    ";
        // line 60
        if ((($tmp = (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 60, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 61, $this->source); })()), "isScheduled", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 62
                yield "            <hr/>
        ";
            }
            // line 64
            yield "        <p class=\"text-danger mt-0 mb-10\"><i class=\"ri-alert-line\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.last_error"), "html", null, true);
            yield "
            :<br/>";
            // line 65
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 65, $this->source); })()));
            yield "</p>
    ";
        }
        // line 67
        yield "    
    ";
        // line 68
        if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "metadata", [], "any", false, true, false, 68), "timeline", [], "any", true, true, false, 68) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 68, $this->source); })()), "metadata", [], "any", false, false, false, 68), "timeline", [], "any", false, false, false, 68))) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 68, $this->source); })()), "campaign_description", [], "any", false, false, false, 68)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 68, $this->source); })()), "event_description", [], "any", false, false, false, 68))) {
            // line 69
            yield "        <hr/>
        ";
            // line 70
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "metadata", [], "any", false, true, false, 70), "timeline", [], "any", true, true, false, 70) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 70, $this->source); })()), "metadata", [], "any", false, false, false, 70), "timeline", [], "any", false, false, false, 70)))) {
                // line 71
                yield "            <p class=\"mt-0 mb-10\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 71, $this->source); })()), "metadata", [], "any", false, false, false, 71), "timeline", [], "any", false, false, false, 71), "html", null, true);
                yield "</p>
        ";
            }
            // line 73
            yield "        
        ";
            // line 74
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 74, $this->source); })()), "campaign_description", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 75
                yield "            <p class=\"mt-0 mb-10\">";
                yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.campaign.description", ["%description%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 75, $this->source); })()), "campaign_description", [], "any", false, false, false, 75)]));
                yield "</p>
        ";
            }
            // line 77
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 77, $this->source); })()), "event_description", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 78
                yield "            <p class=\"mt-0 mb-10\">";
                yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.campaign.description", ["%description%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 78, $this->source); })()), "event_description", [], "any", false, false, false, 78)]));
                yield "</p>
        ";
            }
            // line 80
            yield "    ";
        }
        // line 81
        yield "    ";
        if (((isset($context["parentDetails"]) || array_key_exists("parentDetails", $context) ? $context["parentDetails"] : (function () { throw new RuntimeError('Variable "parentDetails" does not exist.', 81, $this->source); })()) != false)) {
            // line 82
            yield "        <h6 class=\"mt-lg mb-sm\">
            ";
            // line 83
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.parent.details", ["%path%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["parentDetails"]) || array_key_exists("parentDetails", $context) ? $context["parentDetails"] : (function () { throw new RuntimeError('Variable "parentDetails" does not exist.', 83, $this->source); })()), "path", [], "any", false, false, false, 83), "%type%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["parentDetails"]) || array_key_exists("parentDetails", $context) ? $context["parentDetails"] : (function () { throw new RuntimeError('Variable "parentDetails" does not exist.', 83, $this->source); })()), "type", [], "any", false, false, false, 83), "%name%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["parentDetails"]) || array_key_exists("parentDetails", $context) ? $context["parentDetails"] : (function () { throw new RuntimeError('Variable "parentDetails" does not exist.', 83, $this->source); })()), "name", [], "any", false, false, false, 83)]));
            yield "
        </h6>
        <dl class=\"dl-horizontal\">
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parentDetails"]) || array_key_exists("parentDetails", $context) ? $context["parentDetails"] : (function () { throw new RuntimeError('Variable "parentDetails" does not exist.', 86, $this->source); })()), "properties", [], "any", false, false, false, 86));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 87
                yield "                <dt>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["key"]), "html", null, true);
                yield ":</dt>
                <dd>";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(json_encode($context["value"]), "\""), "html", null, true);
                yield "</dd>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            yield "        </dl>
    ";
        }
        // line 92
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCampaign/SubscribedEvents/Timeline/index.html.twig";
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
        return array (  283 => 92,  279 => 90,  271 => 88,  266 => 87,  262 => 86,  256 => 83,  253 => 82,  250 => 81,  247 => 80,  241 => 78,  238 => 77,  232 => 75,  230 => 74,  227 => 73,  221 => 71,  219 => 70,  216 => 69,  214 => 68,  211 => 67,  206 => 65,  201 => 64,  197 => 62,  194 => 61,  192 => 60,  189 => 59,  185 => 57,  177 => 52,  169 => 51,  162 => 47,  156 => 46,  149 => 42,  143 => 41,  138 => 39,  135 => 38,  133 => 37,  127 => 34,  122 => 33,  117 => 31,  112 => 30,  105 => 28,  100 => 27,  98 => 26,  94 => 24,  90 => 22,  88 => 21,  86 => 20,  83 => 19,  81 => 18,  79 => 17,  76 => 16,  72 => 14,  70 => 13,  68 => 12,  65 => 11,  61 => 9,  59 => 8,  56 => 7,  53 => 6,  51 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCampaign/SubscribedEvents/Timeline/index.html.twig", "/var/www/html/docroot/app/bundles/CampaignBundle/Resources/views/SubscribedEvents/Timeline/index.html.twig");
    }
}
