<?php

/* @EasyAdmin/default/field_text.html.twig */
class __TwigTemplate_0a508ea3161928414a059a14cd2545b03ecd4b1dad5b0003737b5ee7a4551422 extends Twig_Template
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
        $__internal_20a1ee22721377fc0c6a47d12ff29f0d98cda56792df5ebb617df7ed44a25a90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a1ee22721377fc0c6a47d12ff29f0d98cda56792df5ebb617df7ed44a25a90->enter($__internal_20a1ee22721377fc0c6a47d12ff29f0d98cda56792df5ebb617df7ed44a25a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_text.html.twig"));

        $__internal_0a7a04e1f26da1d42d7a778f9a1736ca7342e9d2ce190676f93b7c40fa09fb8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7a04e1f26da1d42d7a778f9a1736ca7342e9d2ce190676f93b7c40fa09fb8f->enter($__internal_0a7a04e1f26da1d42d7a778f9a1736ca7342e9d2ce190676f93b7c40fa09fb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_text.html.twig"));

        // line 1
        if (((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 1, $this->getSourceContext()); })()) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })())), "html", null, true);
            echo "
";
        }
        
        $__internal_20a1ee22721377fc0c6a47d12ff29f0d98cda56792df5ebb617df7ed44a25a90->leave($__internal_20a1ee22721377fc0c6a47d12ff29f0d98cda56792df5ebb617df7ed44a25a90_prof);

        
        $__internal_0a7a04e1f26da1d42d7a778f9a1736ca7342e9d2ce190676f93b7c40fa09fb8f->leave($__internal_0a7a04e1f26da1d42d7a778f9a1736ca7342e9d2ce190676f93b7c40fa09fb8f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "@EasyAdmin/default/field_text.html.twig", "/home/hurricane8/Documents/Easy/easyMimoun/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_text.html.twig");
    }
}
