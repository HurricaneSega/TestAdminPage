<?php

/* @EasyAdmin/default/includes/_delete_form.html.twig */
class __TwigTemplate_da871a805ab16d4baf80f3b3b92e1713a2b1e54d0e4fd1fd1ee38026eefb8f69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73113d78bbf19f7252cd859bfd660c500ec3dca0bf6665ac1462aae96429b52c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73113d78bbf19f7252cd859bfd660c500ec3dca0bf6665ac1462aae96429b52c->enter($__internal_73113d78bbf19f7252cd859bfd660c500ec3dca0bf6665ac1462aae96429b52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/includes/_delete_form.html.twig"));

        $__internal_8aaaaa4ea03e44896edbf9d8f473a6f144031e31b80f23546ee564188723288d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aaaaa4ea03e44896edbf9d8f473a6f144031e31b80f23546ee564188723288d->enter($__internal_8aaaaa4ea03e44896edbf9d8f473a6f144031e31b80f23546ee564188723288d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/includes/_delete_form.html.twig"));

        // line 1
        echo         // line 2
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 2, $this->getSourceContext()); })()), 'form', array("action" => ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 3
(isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 3, $this->getSourceContext()); })()), "vars", array()), "action", array()) . "&referer=") . (isset($context["referer"]) || array_key_exists("referer", $context) ? $context["referer"] : (function () { throw new Twig_Error_Runtime('Variable "referer" does not exist.', 3, $this->getSourceContext()); })())), "method" => "DELETE", "attr" => array("id" => "delete-form", "style" => "display: none")));
        // line 7
        echo "

<div id=\"modal-delete\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_modal.title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 13, $this->getSourceContext()); })()), "EasyAdminBundle"), "html", null, true);
        echo "</h4>
                <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_modal.content", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 14, $this->getSourceContext()); })()), "EasyAdminBundle"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" data-dismiss=\"modal\" class=\"btn\">
                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.cancel", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 18, $this->getSourceContext()); })()), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 18, $this->getSourceContext()); })())), "html", null, true);
        echo "
                </button>

                ";
        // line 21
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 21, $this->getSourceContext()); })()), "delete", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 21, $this->getSourceContext()); })()), "name", array()))) {
            // line 22
            echo "                    ";
            $context["_delete_action"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 22, $this->getSourceContext()); })()), "delete", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 22, $this->getSourceContext()); })()), "name", array()));
            // line 23
            echo "                    <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-danger\" id=\"modal-delete-button\" formtarget=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_delete_action"]) || array_key_exists("_delete_action", $context) ? $context["_delete_action"] : (function () { throw new Twig_Error_Runtime('Variable "_delete_action" does not exist.', 23, $this->getSourceContext()); })()), "target", array()), "html", null, true);
            echo "\">
                        ";
            // line 24
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_delete_action"]) || array_key_exists("_delete_action", $context) ? $context["_delete_action"] : (function () { throw new Twig_Error_Runtime('Variable "_delete_action" does not exist.', 24, $this->getSourceContext()); })()), "icon", array())) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_delete_action"]) || array_key_exists("_delete_action", $context) ? $context["_delete_action"] : (function () { throw new Twig_Error_Runtime('Variable "_delete_action" does not exist.', 24, $this->getSourceContext()); })()), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 25
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_modal.action", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 25, $this->getSourceContext()); })()), "EasyAdminBundle"), "html", null, true);
            echo "
                    </button>
                ";
        }
        // line 28
        echo "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_73113d78bbf19f7252cd859bfd660c500ec3dca0bf6665ac1462aae96429b52c->leave($__internal_73113d78bbf19f7252cd859bfd660c500ec3dca0bf6665ac1462aae96429b52c_prof);

        
        $__internal_8aaaaa4ea03e44896edbf9d8f473a6f144031e31b80f23546ee564188723288d->leave($__internal_8aaaaa4ea03e44896edbf9d8f473a6f144031e31b80f23546ee564188723288d_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/includes/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 28,  70 => 25,  64 => 24,  59 => 23,  56 => 22,  54 => 21,  48 => 18,  41 => 14,  37 => 13,  29 => 7,  27 => 3,  26 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{
    form(delete_form, {
        action: delete_form.vars.action ~ '&referer=' ~ referer,
        method: 'DELETE',
        attr: { id: 'delete-form', style: 'display: none' }
    })
}}

<div id=\"modal-delete\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4>{{ 'delete_modal.title'|trans(_trans_parameters, 'EasyAdminBundle') }}</h4>
                <p>{{ 'delete_modal.content'|trans(_trans_parameters, 'EasyAdminBundle') }}</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" data-dismiss=\"modal\" class=\"btn\">
                    {{ 'action.cancel'|trans(_trans_parameters, _translation_domain) }}
                </button>

                {% if easyadmin_action_is_enabled(view, 'delete', _entity_config.name) %}
                    {% set _delete_action = easyadmin_get_action(view, 'delete', _entity_config.name) %}
                    <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-danger\" id=\"modal-delete-button\" formtarget=\"{{ _delete_action.target }}\">
                        {% if _delete_action.icon %}<i class=\"fa fa-{{ _delete_action.icon }}\"></i>{% endif %}
                        {{ 'delete_modal.action'|trans(_trans_parameters, 'EasyAdminBundle') }}
                    </button>
                {% endif %}
            </div>
        </div>
    </div>
</div>
", "@EasyAdmin/default/includes/_delete_form.html.twig", "/home/hurricane8/Documents/Easy/easyMimoun/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/includes/_delete_form.html.twig");
    }
}
