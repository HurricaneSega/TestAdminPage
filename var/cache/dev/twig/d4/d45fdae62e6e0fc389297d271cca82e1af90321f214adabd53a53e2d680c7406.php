<?php

/* @EasyAdmin/default/new.html.twig */
class __TwigTemplate_2566d178561add698926ea8c07a5ede6fce0022499c0a4ecaec73c2f73a2ecf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 7, $this->getSourceContext()); })()), "templates", array()), "layout", array()), "@EasyAdmin/default/new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9b88869718599674852e2585c02979b80e9a598c872a86ab87909d87472f0b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9b88869718599674852e2585c02979b80e9a598c872a86ab87909d87472f0b0->enter($__internal_f9b88869718599674852e2585c02979b80e9a598c872a86ab87909d87472f0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        $__internal_43bcd2d80541e27eaa0fb7899e833d256784f99e4cbdf8a6f9e6c16f18dbe312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43bcd2d80541e27eaa0fb7899e833d256784f99e4cbdf8a6f9e6c16f18dbe312->enter($__internal_43bcd2d80541e27eaa0fb7899e833d256784f99e4cbdf8a6f9e6c16f18dbe312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"), true);
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_af1a346d1fccc07bc7fc73f633e75fb5fae94a6fe831664af840c3ed587d3c27"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 4, $this->getSourceContext()); })()), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "name", array()), array(),         // line 4
(isset($context["__internal_af1a346d1fccc07bc7fc73f633e75fb5fae94a6fe831664af840c3ed587d3c27"]) || array_key_exists("__internal_af1a346d1fccc07bc7fc73f633e75fb5fae94a6fe831664af840c3ed587d3c27", $context) ? $context["__internal_af1a346d1fccc07bc7fc73f633e75fb5fae94a6fe831664af840c3ed587d3c27"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_af1a346d1fccc07bc7fc73f633e75fb5fae94a6fe831664af840c3ed587d3c27" does not exist.', 4, $this->getSourceContext()); })())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),         // line 5
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "label", array()), array(),         // line 4
(isset($context["__internal_af1a346d1fccc07bc7fc73f633e75fb5fae94a6fe831664af840c3ed587d3c27"]) || array_key_exists("__internal_af1a346d1fccc07bc7fc73f633e75fb5fae94a6fe831664af840c3ed587d3c27", $context) ? $context["__internal_af1a346d1fccc07bc7fc73f633e75fb5fae94a6fe831664af840c3ed587d3c27"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_af1a346d1fccc07bc7fc73f633e75fb5fae94a6fe831664af840c3ed587d3c27" does not exist.', 4, $this->getSourceContext()); })())));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9b88869718599674852e2585c02979b80e9a598c872a86ab87909d87472f0b0->leave($__internal_f9b88869718599674852e2585c02979b80e9a598c872a86ab87909d87472f0b0_prof);

        
        $__internal_43bcd2d80541e27eaa0fb7899e833d256784f99e4cbdf8a6f9e6c16f18dbe312->leave($__internal_43bcd2d80541e27eaa0fb7899e833d256784f99e4cbdf8a6f9e6c16f18dbe312_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_577bdbe098ee68c8cc2a249c2ca06b583bfe4cf6aae6b79e79c4624a7e2ce698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_577bdbe098ee68c8cc2a249c2ca06b583bfe4cf6aae6b79e79c4624a7e2ce698->enter($__internal_577bdbe098ee68c8cc2a249c2ca06b583bfe4cf6aae6b79e79c4624a7e2ce698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_13bdd927890b5268d3702ec481732c8efdff25cd2b2fb883680d54139b2e944e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13bdd927890b5268d3702ec481732c8efdff25cd2b2fb883680d54139b2e944e->enter($__internal_13bdd927890b5268d3702ec481732c8efdff25cd2b2fb883680d54139b2e944e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 9, $this->getSourceContext()); })()), "name", array())), "html", null, true);
        
        $__internal_13bdd927890b5268d3702ec481732c8efdff25cd2b2fb883680d54139b2e944e->leave($__internal_13bdd927890b5268d3702ec481732c8efdff25cd2b2fb883680d54139b2e944e_prof);

        
        $__internal_577bdbe098ee68c8cc2a249c2ca06b583bfe4cf6aae6b79e79c4624a7e2ce698->leave($__internal_577bdbe098ee68c8cc2a249c2ca06b583bfe4cf6aae6b79e79c4624a7e2ce698_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_7e75746bfdae8c1b0d7b824b1aac3fe5683765b8e3f3c4fd72e4366d87fe1022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e75746bfdae8c1b0d7b824b1aac3fe5683765b8e3f3c4fd72e4366d87fe1022->enter($__internal_7e75746bfdae8c1b0d7b824b1aac3fe5683765b8e3f3c4fd72e4366d87fe1022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_3810bc9747478875a75025411a4781c37c42542a975900c54b909c42c8c27893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3810bc9747478875a75025411a4781c37c42542a975900c54b909c42c8c27893->enter($__internal_3810bc9747478875a75025411a4781c37c42542a975900c54b909c42c8c27893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 10, $this->getSourceContext()); })()), "name", array()))), "html", null, true);
        
        $__internal_3810bc9747478875a75025411a4781c37c42542a975900c54b909c42c8c27893->leave($__internal_3810bc9747478875a75025411a4781c37c42542a975900c54b909c42c8c27893_prof);

        
        $__internal_7e75746bfdae8c1b0d7b824b1aac3fe5683765b8e3f3c4fd72e4366d87fe1022->leave($__internal_7e75746bfdae8c1b0d7b824b1aac3fe5683765b8e3f3c4fd72e4366d87fe1022_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_47d06fbaf1946e8663db26afdb5551fd023ebd5dec64c69f2af10a0bbdf10f9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d06fbaf1946e8663db26afdb5551fd023ebd5dec64c69f2af10a0bbdf10f9c->enter($__internal_47d06fbaf1946e8663db26afdb5551fd023ebd5dec64c69f2af10a0bbdf10f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_cfc5c58de87661c631dfdf666e7b10139ddfb7ce0492819e5131a98aad1a3881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc5c58de87661c631dfdf666e7b10139ddfb7ce0492819e5131a98aad1a3881->enter($__internal_cfc5c58de87661c631dfdf666e7b10139ddfb7ce0492819e5131a98aad1a3881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 14, $this->getSourceContext()); })()), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 15, $this->getSourceContext()); })()), "new", array()), "title", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 15, $this->getSourceContext()); })()),         // line 4
(isset($context["__internal_af1a346d1fccc07bc7fc73f633e75fb5fae94a6fe831664af840c3ed587d3c27"]) || array_key_exists("__internal_af1a346d1fccc07bc7fc73f633e75fb5fae94a6fe831664af840c3ed587d3c27", $context) ? $context["__internal_af1a346d1fccc07bc7fc73f633e75fb5fae94a6fe831664af840c3ed587d3c27"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_af1a346d1fccc07bc7fc73f633e75fb5fae94a6fe831664af840c3ed587d3c27" does not exist.', 4, $this->getSourceContext()); })()))) : (        // line 15
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 15, $this->getSourceContext()); })()))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cfc5c58de87661c631dfdf666e7b10139ddfb7ce0492819e5131a98aad1a3881->leave($__internal_cfc5c58de87661c631dfdf666e7b10139ddfb7ce0492819e5131a98aad1a3881_prof);

        
        $__internal_47d06fbaf1946e8663db26afdb5551fd023ebd5dec64c69f2af10a0bbdf10f9c->leave($__internal_47d06fbaf1946e8663db26afdb5551fd023ebd5dec64c69f2af10a0bbdf10f9c_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_5fb116dfe2345ad1d3d25bf3155f79b7c91d197ae4b4399e1abdfa5015e6647b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb116dfe2345ad1d3d25bf3155f79b7c91d197ae4b4399e1abdfa5015e6647b->enter($__internal_5fb116dfe2345ad1d3d25bf3155f79b7c91d197ae4b4399e1abdfa5015e6647b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_f6c43fb7ec7197206c85804e7a463de1035046d4fa116d511a61b5468042a985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c43fb7ec7197206c85804e7a463de1035046d4fa116d511a61b5468042a985->enter($__internal_f6c43fb7ec7197206c85804e7a463de1035046d4fa116d511a61b5468042a985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_f6c43fb7ec7197206c85804e7a463de1035046d4fa116d511a61b5468042a985->leave($__internal_f6c43fb7ec7197206c85804e7a463de1035046d4fa116d511a61b5468042a985_prof);

        
        $__internal_5fb116dfe2345ad1d3d25bf3155f79b7c91d197ae4b4399e1abdfa5015e6647b->leave($__internal_5fb116dfe2345ad1d3d25bf3155f79b7c91d197ae4b4399e1abdfa5015e6647b_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_10e02b890b9508065bc90f0d8002eadcd772d3c56b288f64c73c34441ed26aa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10e02b890b9508065bc90f0d8002eadcd772d3c56b288f64c73c34441ed26aa3->enter($__internal_10e02b890b9508065bc90f0d8002eadcd772d3c56b288f64c73c34441ed26aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_de13c7ca9637fc8487829486b4db0f31ba1ea1fc467e2dd900593603453ddd61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de13c7ca9637fc8487829486b4db0f31ba1ea1fc467e2dd900593603453ddd61->enter($__internal_de13c7ca9637fc8487829486b4db0f31ba1ea1fc467e2dd900593603453ddd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), 'form');
        echo "
    ";
        
        $__internal_de13c7ca9637fc8487829486b4db0f31ba1ea1fc467e2dd900593603453ddd61->leave($__internal_de13c7ca9637fc8487829486b4db0f31ba1ea1fc467e2dd900593603453ddd61_prof);

        
        $__internal_10e02b890b9508065bc90f0d8002eadcd772d3c56b288f64c73c34441ed26aa3->leave($__internal_10e02b890b9508065bc90f0d8002eadcd772d3c56b288f64c73c34441ed26aa3_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_36eee0854ef4ce72a901f48ea9c3f32c10bb86410a554fe4e95ec46b2306ef44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36eee0854ef4ce72a901f48ea9c3f32c10bb86410a554fe4e95ec46b2306ef44->enter($__internal_36eee0854ef4ce72a901f48ea9c3f32c10bb86410a554fe4e95ec46b2306ef44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_574b52e5e1a7d89df6b775f6dee489045a873e1ed324ab363659c141e06defd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574b52e5e1a7d89df6b775f6dee489045a873e1ed324ab363659c141e06defd2->enter($__internal_574b52e5e1a7d89df6b775f6dee489045a873e1ed324ab363659c141e06defd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_574b52e5e1a7d89df6b775f6dee489045a873e1ed324ab363659c141e06defd2->leave($__internal_574b52e5e1a7d89df6b775f6dee489045a873e1ed324ab363659c141e06defd2_prof);

        
        $__internal_36eee0854ef4ce72a901f48ea9c3f32c10bb86410a554fe4e95ec46b2306ef44->leave($__internal_36eee0854ef4ce72a901f48ea9c3f32c10bb86410a554fe4e95ec46b2306ef44_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 36,  180 => 30,  172 => 26,  163 => 25,  150 => 21,  131 => 20,  122 => 19,  109 => 15,  108 => 4,  106 => 15,  103 => 14,  101 => 13,  92 => 12,  74 => 10,  56 => 9,  46 => 7,  44 => 4,  43 => 5,  42 => 4,  41 => 5,  39 => 4,  37 => 3,  35 => 1,  23 => 7,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-new-' ~ _entity_config.name %}
{% block body_class 'new new-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "@EasyAdmin/default/new.html.twig", "/home/hurricane8/Documents/Easy/easyMimoun/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/new.html.twig");
    }
}
