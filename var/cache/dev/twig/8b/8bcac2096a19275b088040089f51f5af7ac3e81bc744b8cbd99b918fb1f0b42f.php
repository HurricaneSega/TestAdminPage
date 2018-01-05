<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ea698e0f5f402decfeacf2f4ae76a57684fc0d714273ec6c32f43fa329c11c50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46c5e50241908e0617b6682d1e86a52ff2c5d14a873fef1df1b7ccf7b3de158f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46c5e50241908e0617b6682d1e86a52ff2c5d14a873fef1df1b7ccf7b3de158f->enter($__internal_46c5e50241908e0617b6682d1e86a52ff2c5d14a873fef1df1b7ccf7b3de158f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ac0045016490e1daa0e0e747ba43218d32a51c665e85d755f610af1efebef05c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac0045016490e1daa0e0e747ba43218d32a51c665e85d755f610af1efebef05c->enter($__internal_ac0045016490e1daa0e0e747ba43218d32a51c665e85d755f610af1efebef05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46c5e50241908e0617b6682d1e86a52ff2c5d14a873fef1df1b7ccf7b3de158f->leave($__internal_46c5e50241908e0617b6682d1e86a52ff2c5d14a873fef1df1b7ccf7b3de158f_prof);

        
        $__internal_ac0045016490e1daa0e0e747ba43218d32a51c665e85d755f610af1efebef05c->leave($__internal_ac0045016490e1daa0e0e747ba43218d32a51c665e85d755f610af1efebef05c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f17e48555304025c0b6f7a48603f5eac1a5a525979886d39586559f8285026ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f17e48555304025c0b6f7a48603f5eac1a5a525979886d39586559f8285026ba->enter($__internal_f17e48555304025c0b6f7a48603f5eac1a5a525979886d39586559f8285026ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dd89490549a4a0267ab2216b81380601c53e45fb22f2f8ab3ba66b9ac4b14a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd89490549a4a0267ab2216b81380601c53e45fb22f2f8ab3ba66b9ac4b14a45->enter($__internal_dd89490549a4a0267ab2216b81380601c53e45fb22f2f8ab3ba66b9ac4b14a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dd89490549a4a0267ab2216b81380601c53e45fb22f2f8ab3ba66b9ac4b14a45->leave($__internal_dd89490549a4a0267ab2216b81380601c53e45fb22f2f8ab3ba66b9ac4b14a45_prof);

        
        $__internal_f17e48555304025c0b6f7a48603f5eac1a5a525979886d39586559f8285026ba->leave($__internal_f17e48555304025c0b6f7a48603f5eac1a5a525979886d39586559f8285026ba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5c1ce3eab003c35e5d33b918538255e7df1e941f13523caacd73e8f1e1784231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c1ce3eab003c35e5d33b918538255e7df1e941f13523caacd73e8f1e1784231->enter($__internal_5c1ce3eab003c35e5d33b918538255e7df1e941f13523caacd73e8f1e1784231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f01a6967cad87eb836c5ea6173cc5421e0bd198b14f1d409aae6bf7eb2b566d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01a6967cad87eb836c5ea6173cc5421e0bd198b14f1d409aae6bf7eb2b566d3->enter($__internal_f01a6967cad87eb836c5ea6173cc5421e0bd198b14f1d409aae6bf7eb2b566d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f01a6967cad87eb836c5ea6173cc5421e0bd198b14f1d409aae6bf7eb2b566d3->leave($__internal_f01a6967cad87eb836c5ea6173cc5421e0bd198b14f1d409aae6bf7eb2b566d3_prof);

        
        $__internal_5c1ce3eab003c35e5d33b918538255e7df1e941f13523caacd73e8f1e1784231->leave($__internal_5c1ce3eab003c35e5d33b918538255e7df1e941f13523caacd73e8f1e1784231_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_936c4b6f94789ad6143e388e37b6d10e82175e068b967e5cedaa49e355c02c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_936c4b6f94789ad6143e388e37b6d10e82175e068b967e5cedaa49e355c02c75->enter($__internal_936c4b6f94789ad6143e388e37b6d10e82175e068b967e5cedaa49e355c02c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a621bda3a2102d3623ace13c5a313e03a945a7e5e53d082c55df0a10d95667a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a621bda3a2102d3623ace13c5a313e03a945a7e5e53d082c55df0a10d95667a0->enter($__internal_a621bda3a2102d3623ace13c5a313e03a945a7e5e53d082c55df0a10d95667a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_a621bda3a2102d3623ace13c5a313e03a945a7e5e53d082c55df0a10d95667a0->leave($__internal_a621bda3a2102d3623ace13c5a313e03a945a7e5e53d082c55df0a10d95667a0_prof);

        
        $__internal_936c4b6f94789ad6143e388e37b6d10e82175e068b967e5cedaa49e355c02c75->leave($__internal_936c4b6f94789ad6143e388e37b6d10e82175e068b967e5cedaa49e355c02c75_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/hurricane8/Documents/Easy/easyMimoun/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
