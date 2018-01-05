<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_dcd45490b7c595326da0389712db479e798d3914652fabfb33a589be8122a6f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_910873213113ab6a19a7e288781ec5a8dd7e76a16140c3ee95486dc6de7aabb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_910873213113ab6a19a7e288781ec5a8dd7e76a16140c3ee95486dc6de7aabb0->enter($__internal_910873213113ab6a19a7e288781ec5a8dd7e76a16140c3ee95486dc6de7aabb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_7e1e59ce17bac1265f0583cf17628d09e7ee748d47b0fd8a5367e9a19e123a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e1e59ce17bac1265f0583cf17628d09e7ee748d47b0fd8a5367e9a19e123a93->enter($__internal_7e1e59ce17bac1265f0583cf17628d09e7ee748d47b0fd8a5367e9a19e123a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_910873213113ab6a19a7e288781ec5a8dd7e76a16140c3ee95486dc6de7aabb0->leave($__internal_910873213113ab6a19a7e288781ec5a8dd7e76a16140c3ee95486dc6de7aabb0_prof);

        
        $__internal_7e1e59ce17bac1265f0583cf17628d09e7ee748d47b0fd8a5367e9a19e123a93->leave($__internal_7e1e59ce17bac1265f0583cf17628d09e7ee748d47b0fd8a5367e9a19e123a93_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_60c8448beec5776b4fe09ecbbafbe227daa31c02b0d0d93af9ec07af4dd4f810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60c8448beec5776b4fe09ecbbafbe227daa31c02b0d0d93af9ec07af4dd4f810->enter($__internal_60c8448beec5776b4fe09ecbbafbe227daa31c02b0d0d93af9ec07af4dd4f810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3cbbb77f690ab37f907b8b5835f3110bbe7749cbea8b401de78b7d442ebccee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cbbb77f690ab37f907b8b5835f3110bbe7749cbea8b401de78b7d442ebccee2->enter($__internal_3cbbb77f690ab37f907b8b5835f3110bbe7749cbea8b401de78b7d442ebccee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3cbbb77f690ab37f907b8b5835f3110bbe7749cbea8b401de78b7d442ebccee2->leave($__internal_3cbbb77f690ab37f907b8b5835f3110bbe7749cbea8b401de78b7d442ebccee2_prof);

        
        $__internal_60c8448beec5776b4fe09ecbbafbe227daa31c02b0d0d93af9ec07af4dd4f810->leave($__internal_60c8448beec5776b4fe09ecbbafbe227daa31c02b0d0d93af9ec07af4dd4f810_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7acfe181f1a5ab855a599984ec05be0e67fc557c61e0bc67b04b8875056599cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7acfe181f1a5ab855a599984ec05be0e67fc557c61e0bc67b04b8875056599cf->enter($__internal_7acfe181f1a5ab855a599984ec05be0e67fc557c61e0bc67b04b8875056599cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_91d9e68be072f70b29001432a491613cb5d309b2bb6c87e01a2b2c2840d56219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d9e68be072f70b29001432a491613cb5d309b2bb6c87e01a2b2c2840d56219->enter($__internal_91d9e68be072f70b29001432a491613cb5d309b2bb6c87e01a2b2c2840d56219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_91d9e68be072f70b29001432a491613cb5d309b2bb6c87e01a2b2c2840d56219->leave($__internal_91d9e68be072f70b29001432a491613cb5d309b2bb6c87e01a2b2c2840d56219_prof);

        
        $__internal_7acfe181f1a5ab855a599984ec05be0e67fc557c61e0bc67b04b8875056599cf->leave($__internal_7acfe181f1a5ab855a599984ec05be0e67fc557c61e0bc67b04b8875056599cf_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_14ca241e7f9e8f8ae4e286f373712876c30e9bae7ce6f1723be325f940e09918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ca241e7f9e8f8ae4e286f373712876c30e9bae7ce6f1723be325f940e09918->enter($__internal_14ca241e7f9e8f8ae4e286f373712876c30e9bae7ce6f1723be325f940e09918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c1c1554b848edd6fec198c4a5140619639d01213e3b2b09f0df4977f7e6dc70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1c1554b848edd6fec198c4a5140619639d01213e3b2b09f0df4977f7e6dc70->enter($__internal_1c1c1554b848edd6fec198c4a5140619639d01213e3b2b09f0df4977f7e6dc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1c1c1554b848edd6fec198c4a5140619639d01213e3b2b09f0df4977f7e6dc70->leave($__internal_1c1c1554b848edd6fec198c4a5140619639d01213e3b2b09f0df4977f7e6dc70_prof);

        
        $__internal_14ca241e7f9e8f8ae4e286f373712876c30e9bae7ce6f1723be325f940e09918->leave($__internal_14ca241e7f9e8f8ae4e286f373712876c30e9bae7ce6f1723be325f940e09918_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/hurricane8/Documents/Easy/easyMimoun/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
