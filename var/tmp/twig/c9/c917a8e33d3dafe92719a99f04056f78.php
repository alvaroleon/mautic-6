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

/* @MauticConfig/Config/form.html.twig */
class __TwigTemplate_e4e9004b4cf1f6b1b6dee0cdc6ef7689 extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 18
        return $this->load((((($tmp = (isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 18, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), 18);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["formThemes"]) || array_key_exists("formThemes", $context) ? $context["formThemes"] : (function () { throw new RuntimeError('Variable "formThemes" does not exist.', 10, $this->source); })())) && is_iterable((isset($context["formThemes"]) || array_key_exists("formThemes", $context) ? $context["formThemes"] : (function () { throw new RuntimeError('Variable "formThemes" does not exist.', 10, $this->source); })())))) {
            // line 11
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), (isset($context["formThemes"]) || array_key_exists("formThemes", $context) ? $context["formThemes"] : (function () { throw new RuntimeError('Variable "formThemes" does not exist.', 11, $this->source); })()), true);
        } elseif (( !Twig\Extension\CoreExtension::testEmpty(        // line 12
(isset($context["formThemes"]) || array_key_exists("formThemes", $context) ? $context["formThemes"] : (function () { throw new RuntimeError('Variable "formThemes" does not exist.', 12, $this->source); })())) && $this->env->getTest('string')->getCallable()((isset($context["formThemes"]) || array_key_exists("formThemes", $context) ? $context["formThemes"] : (function () { throw new RuntimeError('Variable "formThemes" does not exist.', 12, $this->source); })())))) {
            // line 13
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), [(isset($context["formThemes"]) || array_key_exists("formThemes", $context) ? $context["formThemes"] : (function () { throw new RuntimeError('Variable "formThemes" does not exist.', 13, $this->source); })())], true);
        }
        // line 16
        $context["isIndex"] = ((("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 16, $this->source); })()))) ? (true) : (false));
        // line 17
        $context["tmpl"] = "list";
        // line 18
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "config";
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.header.index"), "html", null, true);
        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "<!-- start: box layout -->
<div class=\"container\">
    <!-- step container -->
     <div class=\"row\">
         <div class=\"col-md-3 height-auto\">
             <div class=\"\">
                 ";
        // line 31
        if ((($tmp =  !(isset($context["isWritable"]) || array_key_exists("isWritable", $context) ? $context["isWritable"] : (function () { throw new RuntimeError('Variable "isWritable" does not exist.', 31, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "                     <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.notwritable"), "html", null, true);
            yield "</div>
                 ";
        }
        // line 34
        yield "                 <!-- Nav tabs -->
                 <ul class=\"list-group list-group-tabs\" role=\"tablist\">
                     ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "children", [], "any", false, false, false, 36)), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["formConfigs"] ?? null), (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 36, $this->source); })()), [], "array", true, true, false, 36) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 36, $this->source); })()), [], "array", false, false, false, 36), "children", [], "any", false, false, false, 36)) > 0)); }));
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
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 37
            yield "                         <li role=\"presentation\" class=\"list-group-item ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "in active";
            }
            yield "\">
                             ";
            // line 38
            $context["containsErrors"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), $context["key"], [], "array", false, false, false, 38));
            // line 39
            yield "                             <a href=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" aria-controls=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" role=\"tab\" data-toggle=\"tab\" class=\"list-group-item-text steps ";
            if ((($tmp = $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), $context["key"], [], "array", false, false, false, 39))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "text-danger";
            }
            yield "\">
                                 ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.config.tab." . $context["key"])), "html", null, true);
            yield "
                                 ";
            // line 41
            if ((($tmp = $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), $context["key"], [], "array", false, false, false, 41))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 42
                yield "                                     <i class=\"ri-alert-line\"></i>
                                 ";
            }
            // line 44
            yield "                             </a>
                         </li>
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
        unset($context['_seq'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "                 </ul>
             </div>
         </div>

         <!-- container -->
         <div class=\"col-md-9 height-auto\">
             ";
        // line 53
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_start');
        yield "
             <!-- Tab panes -->
             <div class=\"tab-content\">
                 ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "children", [], "any", false, false, false, 56)), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return CoreExtension::getAttribute($this->env, $this->source, ($context["formConfigs"] ?? null), (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 56, $this->source); })()), [], "array", true, true, false, 56); }));
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
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 57
            yield "                     ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), $context["key"], [], "array", false, false, false, 57), "children", [], "any", false, false, false, 57)) > 0)) {
                // line 58
                yield "                       <div role=\"tabpanel\" class=\"tab-pane fade ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "in active";
                }
                yield " bdr-w-0\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\">
                           <div>
                            <div class=\"row pa-md bdr-b\">
                                <h4 class=\"fw-sb\">";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.config.tab." . $context["key"])), "html", null, true);
                yield "</h4>
                            </div>
                               ";
                // line 63
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), $context["key"], [], "array", false, false, false, 63), 'widget', ["formConfig" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["formConfigs"]) || array_key_exists("formConfigs", $context) ? $context["formConfigs"] : (function () { throw new RuntimeError('Variable "formConfigs" does not exist.', 63, $this->source); })()), $context["key"], [], "array", false, false, false, 63)]);
                yield "
                           </div>
                       </div>
                     ";
            } else {
                // line 67
                yield "                       ";
                CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), $context["key"], [], "array", false, false, false, 67), "setRendered", [], "method", false, false, false, 67);
                // line 68
                yield "                     ";
            }
            // line 69
            yield "                 ";
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
        unset($context['_seq'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "             </div>
             ";
        // line 71
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'form_end');
        yield "
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
        return "@MauticConfig/Config/form.html.twig";
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
        return array (  258 => 71,  255 => 70,  241 => 69,  238 => 68,  235 => 67,  228 => 63,  223 => 61,  212 => 58,  209 => 57,  192 => 56,  186 => 53,  178 => 47,  162 => 44,  158 => 42,  156 => 41,  152 => 40,  141 => 39,  139 => 38,  132 => 37,  115 => 36,  111 => 34,  105 => 32,  103 => 31,  95 => 25,  88 => 24,  77 => 22,  66 => 20,  62 => 18,  60 => 17,  58 => 16,  55 => 13,  53 => 12,  51 => 11,  49 => 10,  42 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticConfig/Config/form.html.twig", "/var/www/html/docroot/app/bundles/ConfigBundle/Resources/views/Config/form.html.twig");
    }
}
