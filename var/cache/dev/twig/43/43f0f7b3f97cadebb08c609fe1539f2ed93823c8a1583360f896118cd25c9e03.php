<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_b54a7434227174fc145f2902d694f8cdb97730489753fb36222a4492ded945a8 extends Twig_Template
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
        $__internal_a573aa3a077641615a22b09ca443e1b330f2b97f202fd00e3aceed72a8837716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a573aa3a077641615a22b09ca443e1b330f2b97f202fd00e3aceed72a8837716->enter($__internal_a573aa3a077641615a22b09ca443e1b330f2b97f202fd00e3aceed72a8837716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_158b9bb7f9ca09ddedd0d0f002563cb457ddb8cf89f93f07a2305c486e344885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158b9bb7f9ca09ddedd0d0f002563cb457ddb8cf89f93f07a2305c486e344885->enter($__internal_158b9bb7f9ca09ddedd0d0f002563cb457ddb8cf89f93f07a2305c486e344885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_a573aa3a077641615a22b09ca443e1b330f2b97f202fd00e3aceed72a8837716->leave($__internal_a573aa3a077641615a22b09ca443e1b330f2b97f202fd00e3aceed72a8837716_prof);

        
        $__internal_158b9bb7f9ca09ddedd0d0f002563cb457ddb8cf89f93f07a2305c486e344885->leave($__internal_158b9bb7f9ca09ddedd0d0f002563cb457ddb8cf89f93f07a2305c486e344885_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/hurricane8/Documents/Easy/easyMimoun/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
