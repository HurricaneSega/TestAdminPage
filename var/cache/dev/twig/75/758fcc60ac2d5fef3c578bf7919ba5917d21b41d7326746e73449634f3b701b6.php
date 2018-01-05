<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_601325c5341e9f3980f7ef35a0ea135f6506e1bde6de67289bf692b45d1503de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dac6050c5122382a6981fc4398ee854feecb770dc485b46776d0d544e10799f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dac6050c5122382a6981fc4398ee854feecb770dc485b46776d0d544e10799f4->enter($__internal_dac6050c5122382a6981fc4398ee854feecb770dc485b46776d0d544e10799f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0a709667a502e5c0ac3f77578096ef5417b53f93442a346208e36fe61ce6546a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a709667a502e5c0ac3f77578096ef5417b53f93442a346208e36fe61ce6546a->enter($__internal_0a709667a502e5c0ac3f77578096ef5417b53f93442a346208e36fe61ce6546a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dac6050c5122382a6981fc4398ee854feecb770dc485b46776d0d544e10799f4->leave($__internal_dac6050c5122382a6981fc4398ee854feecb770dc485b46776d0d544e10799f4_prof);

        
        $__internal_0a709667a502e5c0ac3f77578096ef5417b53f93442a346208e36fe61ce6546a->leave($__internal_0a709667a502e5c0ac3f77578096ef5417b53f93442a346208e36fe61ce6546a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eb542aea1686781734d046b5e7c5190c6f3006f00d67ecd03380f1942900f979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb542aea1686781734d046b5e7c5190c6f3006f00d67ecd03380f1942900f979->enter($__internal_eb542aea1686781734d046b5e7c5190c6f3006f00d67ecd03380f1942900f979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ae8cb1ff01eaea0b49a6177fa4c4cd39b117ce03cd4a07b05a470df93317d65f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae8cb1ff01eaea0b49a6177fa4c4cd39b117ce03cd4a07b05a470df93317d65f->enter($__internal_ae8cb1ff01eaea0b49a6177fa4c4cd39b117ce03cd4a07b05a470df93317d65f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_ae8cb1ff01eaea0b49a6177fa4c4cd39b117ce03cd4a07b05a470df93317d65f->leave($__internal_ae8cb1ff01eaea0b49a6177fa4c4cd39b117ce03cd4a07b05a470df93317d65f_prof);

        
        $__internal_eb542aea1686781734d046b5e7c5190c6f3006f00d67ecd03380f1942900f979->leave($__internal_eb542aea1686781734d046b5e7c5190c6f3006f00d67ecd03380f1942900f979_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/hurricane8/Documents/Easy/easyMimoun/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
