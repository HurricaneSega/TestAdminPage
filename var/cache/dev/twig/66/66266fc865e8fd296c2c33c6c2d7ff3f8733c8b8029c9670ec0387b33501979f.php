<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_a89d6e296678450744fafe5f31ea545fb13b5b0fde6469924431281416379e91 extends Twig_Template
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
        $__internal_588d61e02e6a6fbe74e2bbaa3bfee00b7effbd77595a623f3c0e54a628483122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_588d61e02e6a6fbe74e2bbaa3bfee00b7effbd77595a623f3c0e54a628483122->enter($__internal_588d61e02e6a6fbe74e2bbaa3bfee00b7effbd77595a623f3c0e54a628483122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        $__internal_57111ee929e8968198b7ee6fc0fd7be2e20eb822c21430c37e6c6ea4fc8e2b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57111ee929e8968198b7ee6fc0fd7be2e20eb822c21430c37e6c6ea4fc8e2b1b->enter($__internal_57111ee929e8968198b7ee6fc0fd7be2e20eb822c21430c37e6c6ea4fc8e2b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo "
";
        
        $__internal_588d61e02e6a6fbe74e2bbaa3bfee00b7effbd77595a623f3c0e54a628483122->leave($__internal_588d61e02e6a6fbe74e2bbaa3bfee00b7effbd77595a623f3c0e54a628483122_prof);

        
        $__internal_57111ee929e8968198b7ee6fc0fd7be2e20eb822c21430c37e6c6ea4fc8e2b1b->leave($__internal_57111ee929e8968198b7ee6fc0fd7be2e20eb822c21430c37e6c6ea4fc8e2b1b_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "@EasyAdmin/default/field_id.html.twig", "/home/hurricane8/Documents/Easy/easyMimoun/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_id.html.twig");
    }
}
