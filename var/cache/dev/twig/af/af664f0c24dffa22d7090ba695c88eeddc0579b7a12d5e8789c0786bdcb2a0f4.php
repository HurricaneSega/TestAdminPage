<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_c4c5a969f9f9fc671e1c276d25650ba77ccadc4f29636ca1169ac85ae437c35d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a978376fe6929eb92f9769b40e982f5a53a855be28b6281235506246fcdfff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a978376fe6929eb92f9769b40e982f5a53a855be28b6281235506246fcdfff6->enter($__internal_3a978376fe6929eb92f9769b40e982f5a53a855be28b6281235506246fcdfff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        $__internal_079895fdd14a2b123ef19b43d2a36e1d39fd9609f1029dde541810f1b5c6e20e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_079895fdd14a2b123ef19b43d2a36e1d39fd9609f1029dde541810f1b5c6e20e->enter($__internal_079895fdd14a2b123ef19b43d2a36e1d39fd9609f1029dde541810f1b5c6e20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "    </head>

    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 162
        echo "</html>
";
        
        $__internal_3a978376fe6929eb92f9769b40e982f5a53a855be28b6281235506246fcdfff6->leave($__internal_3a978376fe6929eb92f9769b40e982f5a53a855be28b6281235506246fcdfff6_prof);

        
        $__internal_079895fdd14a2b123ef19b43d2a36e1d39fd9609f1029dde541810f1b5c6e20e->leave($__internal_079895fdd14a2b123ef19b43d2a36e1d39fd9609f1029dde541810f1b5c6e20e_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d85c899cceec7705e01035c6aa6c1f3e9cf84ab8db4c69287c503569215cd563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d85c899cceec7705e01035c6aa6c1f3e9cf84ab8db4c69287c503569215cd563->enter($__internal_d85c899cceec7705e01035c6aa6c1f3e9cf84ab8db4c69287c503569215cd563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_36eeb086decf8b67b64303a48ea61e141d5873ff93b014c3abf188ba8531960c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36eeb086decf8b67b64303a48ea61e141d5873ff93b014c3abf188ba8531960c->enter($__internal_36eeb086decf8b67b64303a48ea61e141d5873ff93b014c3abf188ba8531960c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_36eeb086decf8b67b64303a48ea61e141d5873ff93b014c3abf188ba8531960c->leave($__internal_36eeb086decf8b67b64303a48ea61e141d5873ff93b014c3abf188ba8531960c_prof);

        
        $__internal_d85c899cceec7705e01035c6aa6c1f3e9cf84ab8db4c69287c503569215cd563->leave($__internal_d85c899cceec7705e01035c6aa6c1f3e9cf84ab8db4c69287c503569215cd563_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_d811f1d14d1ba1b550c6a8c565b665a638e824651b772a839835d3cce44503ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d811f1d14d1ba1b550c6a8c565b665a638e824651b772a839835d3cce44503ab->enter($__internal_d811f1d14d1ba1b550c6a8c565b665a638e824651b772a839835d3cce44503ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_b6433d9aec28a3348c972e93cdc1b03c486d3f1469164f48626f55aaefe1495b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6433d9aec28a3348c972e93cdc1b03c486d3f1469164f48626f55aaefe1495b->enter($__internal_b6433d9aec28a3348c972e93cdc1b03c486d3f1469164f48626f55aaefe1495b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_b6433d9aec28a3348c972e93cdc1b03c486d3f1469164f48626f55aaefe1495b->leave($__internal_b6433d9aec28a3348c972e93cdc1b03c486d3f1469164f48626f55aaefe1495b_prof);

        
        $__internal_d811f1d14d1ba1b550c6a8c565b665a638e824651b772a839835d3cce44503ab->leave($__internal_d811f1d14d1ba1b550c6a8c565b665a638e824651b772a839835d3cce44503ab_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_1f012104785cfb684e1868e52e9c385b79cb4363ae29c20e588d8af2f68c3715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f012104785cfb684e1868e52e9c385b79cb4363ae29c20e588d8af2f68c3715->enter($__internal_1f012104785cfb684e1868e52e9c385b79cb4363ae29c20e588d8af2f68c3715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_a13bafb5e3c2fa337624a01df649b805045f55176f2d9d579817161bf8899b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13bafb5e3c2fa337624a01df649b805045f55176f2d9d579817161bf8899b4f->enter($__internal_a13bafb5e3c2fa337624a01df649b805045f55176f2d9d579817161bf8899b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["favicon"]) || array_key_exists("favicon", $context) ? $context["favicon"] : (function () { throw new Twig_Error_Runtime('Variable "favicon" does not exist.', 25, $this->getSourceContext()); })()), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["favicon"]) || array_key_exists("favicon", $context) ? $context["favicon"] : (function () { throw new Twig_Error_Runtime('Variable "favicon" does not exist.', 25, $this->getSourceContext()); })()), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_a13bafb5e3c2fa337624a01df649b805045f55176f2d9d579817161bf8899b4f->leave($__internal_a13bafb5e3c2fa337624a01df649b805045f55176f2d9d579817161bf8899b4f_prof);

        
        $__internal_1f012104785cfb684e1868e52e9c385b79cb4363ae29c20e588d8af2f68c3715->leave($__internal_1f012104785cfb684e1868e52e9c385b79cb4363ae29c20e588d8af2f68c3715_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_838a701d722e7a26e635b3b1b169a2b8d9b34ac957f457783a87770441ae8197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_838a701d722e7a26e635b3b1b169a2b8d9b34ac957f457783a87770441ae8197->enter($__internal_838a701d722e7a26e635b3b1b169a2b8d9b34ac957f457783a87770441ae8197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_f8ed3109267208fdd37ba9ba342ea144267befd8409e31dcfa1fa495ed47a3df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ed3109267208fdd37ba9ba342ea144267befd8409e31dcfa1fa495ed47a3df->enter($__internal_f8ed3109267208fdd37ba9ba342ea144267befd8409e31dcfa1fa495ed47a3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_f8ed3109267208fdd37ba9ba342ea144267befd8409e31dcfa1fa495ed47a3df->leave($__internal_f8ed3109267208fdd37ba9ba342ea144267befd8409e31dcfa1fa495ed47a3df_prof);

        
        $__internal_838a701d722e7a26e635b3b1b169a2b8d9b34ac957f457783a87770441ae8197->leave($__internal_838a701d722e7a26e635b3b1b169a2b8d9b34ac957f457783a87770441ae8197_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_725188debe41cebb4c4294f7f3909dc4c59035dae3a3ac7339afdf104e39ce40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_725188debe41cebb4c4294f7f3909dc4c59035dae3a3ac7339afdf104e39ce40->enter($__internal_725188debe41cebb4c4294f7f3909dc4c59035dae3a3ac7339afdf104e39ce40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_79ae850e6a7c0c410248a0bbd171cf64723c6a0efde35c8ac809aebd2f1eaf3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ae850e6a7c0c410248a0bbd171cf64723c6a0efde35c8ac809aebd2f1eaf3e->enter($__internal_79ae850e6a7c0c410248a0bbd171cf64723c6a0efde35c8ac809aebd2f1eaf3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_79ae850e6a7c0c410248a0bbd171cf64723c6a0efde35c8ac809aebd2f1eaf3e->leave($__internal_79ae850e6a7c0c410248a0bbd171cf64723c6a0efde35c8ac809aebd2f1eaf3e_prof);

        
        $__internal_725188debe41cebb4c4294f7f3909dc4c59035dae3a3ac7339afdf104e39ce40->leave($__internal_725188debe41cebb4c4294f7f3909dc4c59035dae3a3ac7339afdf104e39ce40_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_52d3aadf3a8eb1203e587fb1270d1a7e98db3f850482c0ac92a8270f2631bbb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d3aadf3a8eb1203e587fb1270d1a7e98db3f850482c0ac92a8270f2631bbb5->enter($__internal_52d3aadf3a8eb1203e587fb1270d1a7e98db3f850482c0ac92a8270f2631bbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b993f66d7ea0be453c4eeff489c3846b4c6e4254153e2074293e7b56b9a8c3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b993f66d7ea0be453c4eeff489c3846b4c6e4254153e2074293e7b56b9a8c3ff->enter($__internal_b993f66d7ea0be453c4eeff489c3846b4c6e4254153e2074293e7b56b9a8c3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 53, $this->getSourceContext()); })()), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('wrapper', $context, $blocks);
        // line 153
        echo "        </div>

        ";
        // line 155
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 156
        echo "
        ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 158
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "    </body>
    ";
        
        $__internal_b993f66d7ea0be453c4eeff489c3846b4c6e4254153e2074293e7b56b9a8c3ff->leave($__internal_b993f66d7ea0be453c4eeff489c3846b4c6e4254153e2074293e7b56b9a8c3ff_prof);

        
        $__internal_52d3aadf3a8eb1203e587fb1270d1a7e98db3f850482c0ac92a8270f2631bbb5->leave($__internal_52d3aadf3a8eb1203e587fb1270d1a7e98db3f850482c0ac92a8270f2631bbb5_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_58e2cb2b9aa09267b3114ab59df455856029ee6116d884394d29f8e41e2aa867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58e2cb2b9aa09267b3114ab59df455856029ee6116d884394d29f8e41e2aa867->enter($__internal_58e2cb2b9aa09267b3114ab59df455856029ee6116d884394d29f8e41e2aa867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_fda4313a3043b5d118804c1b48062a57859fef173c95a25f1b7dc67cd4b683f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda4313a3043b5d118804c1b48062a57859fef173c95a25f1b7dc67cd4b683f0->enter($__internal_fda4313a3043b5d118804c1b48062a57859fef173c95a25f1b7dc67cd4b683f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_fda4313a3043b5d118804c1b48062a57859fef173c95a25f1b7dc67cd4b683f0->leave($__internal_fda4313a3043b5d118804c1b48062a57859fef173c95a25f1b7dc67cd4b683f0_prof);

        
        $__internal_58e2cb2b9aa09267b3114ab59df455856029ee6116d884394d29f8e41e2aa867->leave($__internal_58e2cb2b9aa09267b3114ab59df455856029ee6116d884394d29f8e41e2aa867_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_929397b355b3a31f9125b6cd0a882285bbd3f6afd0d7af62da76c84867fad4a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_929397b355b3a31f9125b6cd0a882285bbd3f6afd0d7af62da76c84867fad4a8->enter($__internal_929397b355b3a31f9125b6cd0a882285bbd3f6afd0d7af62da76c84867fad4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_8515bab83e2affaad34bcc3f1267604d477f92cb885e3d2ae5eb5280f1fd62b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8515bab83e2affaad34bcc3f1267604d477f92cb885e3d2ae5eb5280f1fd62b7->enter($__internal_8515bab83e2affaad34bcc3f1267604d477f92cb885e3d2ae5eb5280f1fd62b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_8515bab83e2affaad34bcc3f1267604d477f92cb885e3d2ae5eb5280f1fd62b7->leave($__internal_8515bab83e2affaad34bcc3f1267604d477f92cb885e3d2ae5eb5280f1fd62b7_prof);

        
        $__internal_929397b355b3a31f9125b6cd0a882285bbd3f6afd0d7af62da76c84867fad4a8->leave($__internal_929397b355b3a31f9125b6cd0a882285bbd3f6afd0d7af62da76c84867fad4a8_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_bd265c0645f59d2131d119d689c5b8dcd18617102b9b691e2181f4e6b2942c0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd265c0645f59d2131d119d689c5b8dcd18617102b9b691e2181f4e6b2942c0d->enter($__internal_bd265c0645f59d2131d119d689c5b8dcd18617102b9b691e2181f4e6b2942c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_c3b3fafbb1a925c3fa87db2619eb33df99a8adbd02094b5b5c6c0c1c2d7b84c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3b3fafbb1a925c3fa87db2619eb33df99a8adbd02094b5b5c6c0c1c2d7b84c1->enter($__internal_c3b3fafbb1a925c3fa87db2619eb33df99a8adbd02094b5b5c6c0c1c2d7b84c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 56
        echo "            <header class=\"main-header\">
            ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 110
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 113
        $this->displayBlock('sidebar', $context, $blocks);
        // line 124
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 127
        $this->displayBlock('content', $context, $blocks);
        // line 151
        echo "            </div>
        ";
        
        $__internal_c3b3fafbb1a925c3fa87db2619eb33df99a8adbd02094b5b5c6c0c1c2d7b84c1->leave($__internal_c3b3fafbb1a925c3fa87db2619eb33df99a8adbd02094b5b5c6c0c1c2d7b84c1_prof);

        
        $__internal_bd265c0645f59d2131d119d689c5b8dcd18617102b9b691e2181f4e6b2942c0d->leave($__internal_bd265c0645f59d2131d119d689c5b8dcd18617102b9b691e2181f4e6b2942c0d_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_5793b460a7dbaa6996d69156f8b35a9f62cb757decadf3631c5f5fc6c5d8df6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5793b460a7dbaa6996d69156f8b35a9f62cb757decadf3631c5f5fc6c5d8df6c->enter($__internal_5793b460a7dbaa6996d69156f8b35a9f62cb757decadf3631c5f5fc6c5d8df6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_82b2e1f414a29f5e966bba522a581f31cab8596ff9862e1ec51b527faeef1460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b2e1f414a29f5e966bba522a581f31cab8596ff9862e1ec51b527faeef1460->enter($__internal_82b2e1f414a29f5e966bba522a581f31cab8596ff9862e1ec51b527faeef1460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 58
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 64
        $this->displayBlock('header_logo', $context, $blocks);
        // line 69
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 72
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 107
        echo "                    </div>
                </nav>
            ";
        
        $__internal_82b2e1f414a29f5e966bba522a581f31cab8596ff9862e1ec51b527faeef1460->leave($__internal_82b2e1f414a29f5e966bba522a581f31cab8596ff9862e1ec51b527faeef1460_prof);

        
        $__internal_5793b460a7dbaa6996d69156f8b35a9f62cb757decadf3631c5f5fc6c5d8df6c->leave($__internal_5793b460a7dbaa6996d69156f8b35a9f62cb757decadf3631c5f5fc6c5d8df6c_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_842300e8e0dd8126c30d57e75d0f5ba9dbc1778b8c9c8529636e120d17796bc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_842300e8e0dd8126c30d57e75d0f5ba9dbc1778b8c9c8529636e120d17796bc5->enter($__internal_842300e8e0dd8126c30d57e75d0f5ba9dbc1778b8c9c8529636e120d17796bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_b053d9ab118945a5547aca482d04106382c9934cf6aec7bbad6b775ba584443a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b053d9ab118945a5547aca482d04106382c9934cf6aec7bbad6b775ba584443a->enter($__internal_b053d9ab118945a5547aca482d04106382c9934cf6aec7bbad6b775ba584443a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 65
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 66
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_b053d9ab118945a5547aca482d04106382c9934cf6aec7bbad6b775ba584443a->leave($__internal_b053d9ab118945a5547aca482d04106382c9934cf6aec7bbad6b775ba584443a_prof);

        
        $__internal_842300e8e0dd8126c30d57e75d0f5ba9dbc1778b8c9c8529636e120d17796bc5->leave($__internal_842300e8e0dd8126c30d57e75d0f5ba9dbc1778b8c9c8529636e120d17796bc5_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_31f2c2d89ff5df8475555987aeccba536725ed10b7c3ea20eb4b633ccc836c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f2c2d89ff5df8475555987aeccba536725ed10b7c3ea20eb4b633ccc836c3c->enter($__internal_31f2c2d89ff5df8475555987aeccba536725ed10b7c3ea20eb4b633ccc836c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_5da41926c5fbad03ef94e73fa64cf12711eceec80b2d86b51f71c0bdb91436df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da41926c5fbad03ef94e73fa64cf12711eceec80b2d86b51f71c0bdb91436df->enter($__internal_5da41926c5fbad03ef94e73fa64cf12711eceec80b2d86b51f71c0bdb91436df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 73
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 74
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 76
        $this->displayBlock('user_menu', $context, $blocks);
        // line 104
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_5da41926c5fbad03ef94e73fa64cf12711eceec80b2d86b51f71c0bdb91436df->leave($__internal_5da41926c5fbad03ef94e73fa64cf12711eceec80b2d86b51f71c0bdb91436df_prof);

        
        $__internal_31f2c2d89ff5df8475555987aeccba536725ed10b7c3ea20eb4b633ccc836c3c->leave($__internal_31f2c2d89ff5df8475555987aeccba536725ed10b7c3ea20eb4b633ccc836c3c_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_7585f0ff3041970bf7c39d2def6829e0ae831f8787f41c1a0bc27dfa46ee9c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7585f0ff3041970bf7c39d2def6829e0ae831f8787f41c1a0bc27dfa46ee9c60->enter($__internal_7585f0ff3041970bf7c39d2def6829e0ae831f8787f41c1a0bc27dfa46ee9c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_c0b85a8e83e5a5da859c49806bca6d44a4ef4c6fee169b1d2dd7570c3607a2eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b85a8e83e5a5da859c49806bca6d44a4ef4c6fee169b1d2dd7570c3607a2eb->enter($__internal_c0b85a8e83e5a5da859c49806bca6d44a4ef4c6fee169b1d2dd7570c3607a2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 77
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 79
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), false)) : (false)) == false)) {
            // line 80
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 82
(isset($context["_logout_path"]) || array_key_exists("_logout_path", $context) ? $context["_logout_path"] : (function () { throw new Twig_Error_Runtime('Variable "_logout_path" does not exist.', 82, $this->getSourceContext()); })())) {
            // line 83
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 84
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 89
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 95
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 100
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 103
        echo "                                ";
        
        $__internal_c0b85a8e83e5a5da859c49806bca6d44a4ef4c6fee169b1d2dd7570c3607a2eb->leave($__internal_c0b85a8e83e5a5da859c49806bca6d44a4ef4c6fee169b1d2dd7570c3607a2eb_prof);

        
        $__internal_7585f0ff3041970bf7c39d2def6829e0ae831f8787f41c1a0bc27dfa46ee9c60->leave($__internal_7585f0ff3041970bf7c39d2def6829e0ae831f8787f41c1a0bc27dfa46ee9c60_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_a8f7456db6c3a64310b996ae3c71279ec635b00a5339dbf244843e2319a32159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f7456db6c3a64310b996ae3c71279ec635b00a5339dbf244843e2319a32159->enter($__internal_a8f7456db6c3a64310b996ae3c71279ec635b00a5339dbf244843e2319a32159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_1523ce49f692c6aae09b7b004af6782ed6292a75af48d1aa289be69d9fac85ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1523ce49f692c6aae09b7b004af6782ed6292a75af48d1aa289be69d9fac85ea->enter($__internal_1523ce49f692c6aae09b7b004af6782ed6292a75af48d1aa289be69d9fac85ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 96
        echo "                                                <li>
                                                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["_logout_path"]) || array_key_exists("_logout_path", $context) ? $context["_logout_path"] : (function () { throw new Twig_Error_Runtime('Variable "_logout_path" does not exist.', 97, $this->getSourceContext()); })()), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        
        $__internal_1523ce49f692c6aae09b7b004af6782ed6292a75af48d1aa289be69d9fac85ea->leave($__internal_1523ce49f692c6aae09b7b004af6782ed6292a75af48d1aa289be69d9fac85ea_prof);

        
        $__internal_a8f7456db6c3a64310b996ae3c71279ec635b00a5339dbf244843e2319a32159->leave($__internal_a8f7456db6c3a64310b996ae3c71279ec635b00a5339dbf244843e2319a32159_prof);

    }

    // line 113
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4a981dca135a67b65c658bda7174d3f8c43b9158f29e63a8cd4241d513298c97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a981dca135a67b65c658bda7174d3f8c43b9158f29e63a8cd4241d513298c97->enter($__internal_4a981dca135a67b65c658bda7174d3f8c43b9158f29e63a8cd4241d513298c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_ada42a50bfd4fbee0f488bd7d9753d6a5f6b399989cf2722932e69afe98fd174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada42a50bfd4fbee0f488bd7d9753d6a5f6b399989cf2722932e69afe98fd174->enter($__internal_ada42a50bfd4fbee0f488bd7d9753d6a5f6b399989cf2722932e69afe98fd174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 114
        echo "                <section class=\"sidebar\">
                    ";
        // line 115
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 122
        echo "                </section>
            ";
        
        $__internal_ada42a50bfd4fbee0f488bd7d9753d6a5f6b399989cf2722932e69afe98fd174->leave($__internal_ada42a50bfd4fbee0f488bd7d9753d6a5f6b399989cf2722932e69afe98fd174_prof);

        
        $__internal_4a981dca135a67b65c658bda7174d3f8c43b9158f29e63a8cd4241d513298c97->leave($__internal_4a981dca135a67b65c658bda7174d3f8c43b9158f29e63a8cd4241d513298c97_prof);

    }

    // line 115
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_31bc64a2a8ad8615a22130880962fa63d0bc223e92dfb372718c97d0753f49b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31bc64a2a8ad8615a22130880962fa63d0bc223e92dfb372718c97d0753f49b9->enter($__internal_31bc64a2a8ad8615a22130880962fa63d0bc223e92dfb372718c97d0753f49b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_5dd35d5ce5c18fd82e99975a8812dfe751a85850d0a6a60f64c4dc4daaba0e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd35d5ce5c18fd82e99975a8812dfe751a85850d0a6a60f64c4dc4daaba0e88->enter($__internal_5dd35d5ce5c18fd82e99975a8812dfe751a85850d0a6a60f64c4dc4daaba0e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 116
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 117
array_key_exists("_entity_config", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 117, $this->getSourceContext()); })()), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 120
        echo "
                    ";
        
        $__internal_5dd35d5ce5c18fd82e99975a8812dfe751a85850d0a6a60f64c4dc4daaba0e88->leave($__internal_5dd35d5ce5c18fd82e99975a8812dfe751a85850d0a6a60f64c4dc4daaba0e88_prof);

        
        $__internal_31bc64a2a8ad8615a22130880962fa63d0bc223e92dfb372718c97d0753f49b9->leave($__internal_31bc64a2a8ad8615a22130880962fa63d0bc223e92dfb372718c97d0753f49b9_prof);

    }

    // line 127
    public function block_content($context, array $blocks = array())
    {
        $__internal_21f8f8d1d0a013370be8969b8264b62e1b02fd1ee8f97f3c72e048603835e2a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21f8f8d1d0a013370be8969b8264b62e1b02fd1ee8f97f3c72e048603835e2a5->enter($__internal_21f8f8d1d0a013370be8969b8264b62e1b02fd1ee8f97f3c72e048603835e2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_246f0bf46a3544508bee99c7f07ff93ecaf9b61852406a578f1d36c6a0d94cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246f0bf46a3544508bee99c7f07ff93ecaf9b61852406a578f1d36c6a0d94cdb->enter($__internal_246f0bf46a3544508bee99c7f07ff93ecaf9b61852406a578f1d36c6a0d94cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 128
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 131
        echo "
                <section class=\"content-header\">
                ";
        // line 133
        $this->displayBlock('content_header', $context, $blocks);
        // line 136
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 145
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 148
        $this->displayBlock('main', $context, $blocks);
        // line 149
        echo "                </section>
            ";
        
        $__internal_246f0bf46a3544508bee99c7f07ff93ecaf9b61852406a578f1d36c6a0d94cdb->leave($__internal_246f0bf46a3544508bee99c7f07ff93ecaf9b61852406a578f1d36c6a0d94cdb_prof);

        
        $__internal_21f8f8d1d0a013370be8969b8264b62e1b02fd1ee8f97f3c72e048603835e2a5->leave($__internal_21f8f8d1d0a013370be8969b8264b62e1b02fd1ee8f97f3c72e048603835e2a5_prof);

    }

    // line 128
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_1418e2e4b96d77b0490ee6ab611d4a9f8630650965271285d221aa0a11d3328a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1418e2e4b96d77b0490ee6ab611d4a9f8630650965271285d221aa0a11d3328a->enter($__internal_1418e2e4b96d77b0490ee6ab611d4a9f8630650965271285d221aa0a11d3328a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_699360229543397dd4605e55e3141023890a9b9a0628960c4543e16166db9b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699360229543397dd4605e55e3141023890a9b9a0628960c4543e16166db9b9f->enter($__internal_699360229543397dd4605e55e3141023890a9b9a0628960c4543e16166db9b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 129
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 129, $this->getSourceContext()); })()), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_699360229543397dd4605e55e3141023890a9b9a0628960c4543e16166db9b9f->leave($__internal_699360229543397dd4605e55e3141023890a9b9a0628960c4543e16166db9b9f_prof);

        
        $__internal_1418e2e4b96d77b0490ee6ab611d4a9f8630650965271285d221aa0a11d3328a->leave($__internal_1418e2e4b96d77b0490ee6ab611d4a9f8630650965271285d221aa0a11d3328a_prof);

    }

    // line 133
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_a96495aabd145b135c56126be32af9caa9a5be19b61b341b2ec6b87be6317540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a96495aabd145b135c56126be32af9caa9a5be19b61b341b2ec6b87be6317540->enter($__internal_a96495aabd145b135c56126be32af9caa9a5be19b61b341b2ec6b87be6317540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_a356738cd4dc805be746e585ffc3e4cd6a084eb3382258cd29a9cbc08acb0f82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a356738cd4dc805be746e585ffc3e4cd6a084eb3382258cd29a9cbc08acb0f82->enter($__internal_a356738cd4dc805be746e585ffc3e4cd6a084eb3382258cd29a9cbc08acb0f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 134
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_a356738cd4dc805be746e585ffc3e4cd6a084eb3382258cd29a9cbc08acb0f82->leave($__internal_a356738cd4dc805be746e585ffc3e4cd6a084eb3382258cd29a9cbc08acb0f82_prof);

        
        $__internal_a96495aabd145b135c56126be32af9caa9a5be19b61b341b2ec6b87be6317540->leave($__internal_a96495aabd145b135c56126be32af9caa9a5be19b61b341b2ec6b87be6317540_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_f2c18aaa5887458968e1392b1f6bb94cb31b046d0381359b1fc717c71ef3279a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2c18aaa5887458968e1392b1f6bb94cb31b046d0381359b1fc717c71ef3279a->enter($__internal_f2c18aaa5887458968e1392b1f6bb94cb31b046d0381359b1fc717c71ef3279a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_7f8e8519f9666c66b239a34d77cec0d0f9591d13f30440de5a13323e23085a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f8e8519f9666c66b239a34d77cec0d0f9591d13f30440de5a13323e23085a3d->enter($__internal_7f8e8519f9666c66b239a34d77cec0d0f9591d13f30440de5a13323e23085a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_7f8e8519f9666c66b239a34d77cec0d0f9591d13f30440de5a13323e23085a3d->leave($__internal_7f8e8519f9666c66b239a34d77cec0d0f9591d13f30440de5a13323e23085a3d_prof);

        
        $__internal_f2c18aaa5887458968e1392b1f6bb94cb31b046d0381359b1fc717c71ef3279a->leave($__internal_f2c18aaa5887458968e1392b1f6bb94cb31b046d0381359b1fc717c71ef3279a_prof);

    }

    // line 136
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_0ca5e10beef2a2b91e5ce82089e8ecc1d9fc53e8ea57b0433ea271470d4a5100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ca5e10beef2a2b91e5ce82089e8ecc1d9fc53e8ea57b0433ea271470d4a5100->enter($__internal_0ca5e10beef2a2b91e5ce82089e8ecc1d9fc53e8ea57b0433ea271470d4a5100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_366d7137f248e67c06aba22c0a8b3c295885b3b2dcd394fbac129a52ede0b8ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366d7137f248e67c06aba22c0a8b3c295885b3b2dcd394fbac129a52ede0b8ab->enter($__internal_366d7137f248e67c06aba22c0a8b3c295885b3b2dcd394fbac129a52ede0b8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 137
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 137, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 137, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 138
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 140
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 140, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 140, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 144
        echo "                ";
        
        $__internal_366d7137f248e67c06aba22c0a8b3c295885b3b2dcd394fbac129a52ede0b8ab->leave($__internal_366d7137f248e67c06aba22c0a8b3c295885b3b2dcd394fbac129a52ede0b8ab_prof);

        
        $__internal_0ca5e10beef2a2b91e5ce82089e8ecc1d9fc53e8ea57b0433ea271470d4a5100->leave($__internal_0ca5e10beef2a2b91e5ce82089e8ecc1d9fc53e8ea57b0433ea271470d4a5100_prof);

    }

    // line 148
    public function block_main($context, array $blocks = array())
    {
        $__internal_a45954fadf38186bc4c9e0df075bdb03fe82ae8a532a9bed122dec95c2b81a3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a45954fadf38186bc4c9e0df075bdb03fe82ae8a532a9bed122dec95c2b81a3f->enter($__internal_a45954fadf38186bc4c9e0df075bdb03fe82ae8a532a9bed122dec95c2b81a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_1e6f09ecb40012f579ce12b35019a8c12e0911465e1bb74c37bbd448d91cf87e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e6f09ecb40012f579ce12b35019a8c12e0911465e1bb74c37bbd448d91cf87e->enter($__internal_1e6f09ecb40012f579ce12b35019a8c12e0911465e1bb74c37bbd448d91cf87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_1e6f09ecb40012f579ce12b35019a8c12e0911465e1bb74c37bbd448d91cf87e->leave($__internal_1e6f09ecb40012f579ce12b35019a8c12e0911465e1bb74c37bbd448d91cf87e_prof);

        
        $__internal_a45954fadf38186bc4c9e0df075bdb03fe82ae8a532a9bed122dec95c2b81a3f->leave($__internal_a45954fadf38186bc4c9e0df075bdb03fe82ae8a532a9bed122dec95c2b81a3f_prof);

    }

    // line 155
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_91a964fa66f892a6d86e57386409a209e98c428715550149ad6d0540731fe4a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91a964fa66f892a6d86e57386409a209e98c428715550149ad6d0540731fe4a3->enter($__internal_91a964fa66f892a6d86e57386409a209e98c428715550149ad6d0540731fe4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_5c3fc033458334c455add57a287508226ed617c1a44748885d3932e89d4cf5b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3fc033458334c455add57a287508226ed617c1a44748885d3932e89d4cf5b3->enter($__internal_5c3fc033458334c455add57a287508226ed617c1a44748885d3932e89d4cf5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_5c3fc033458334c455add57a287508226ed617c1a44748885d3932e89d4cf5b3->leave($__internal_5c3fc033458334c455add57a287508226ed617c1a44748885d3932e89d4cf5b3_prof);

        
        $__internal_91a964fa66f892a6d86e57386409a209e98c428715550149ad6d0540731fe4a3->leave($__internal_91a964fa66f892a6d86e57386409a209e98c428715550149ad6d0540731fe4a3_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  775 => 155,  758 => 148,  748 => 144,  741 => 140,  737 => 138,  734 => 137,  725 => 136,  696 => 134,  687 => 133,  674 => 129,  665 => 128,  654 => 149,  652 => 148,  647 => 145,  644 => 136,  642 => 133,  638 => 131,  635 => 128,  626 => 127,  615 => 120,  613 => 117,  611 => 116,  602 => 115,  591 => 122,  589 => 115,  586 => 114,  577 => 113,  562 => 97,  559 => 96,  550 => 95,  540 => 103,  535 => 100,  533 => 95,  524 => 89,  519 => 86,  514 => 84,  511 => 83,  509 => 82,  505 => 81,  502 => 80,  500 => 79,  494 => 77,  485 => 76,  473 => 104,  471 => 76,  467 => 74,  464 => 73,  455 => 72,  442 => 66,  433 => 65,  424 => 64,  412 => 107,  410 => 72,  405 => 69,  403 => 64,  396 => 60,  392 => 58,  383 => 57,  372 => 151,  370 => 127,  365 => 124,  363 => 113,  358 => 110,  356 => 57,  353 => 56,  344 => 55,  311 => 53,  300 => 160,  291 => 158,  287 => 157,  284 => 156,  282 => 155,  278 => 153,  276 => 55,  266 => 53,  257 => 52,  236 => 30,  227 => 29,  215 => 43,  212 => 42,  209 => 29,  200 => 28,  185 => 25,  182 => 24,  173 => 23,  160 => 15,  154 => 13,  145 => 12,  127 => 10,  116 => 162,  114 => 52,  110 => 50,  105 => 48,  100 => 47,  98 => 46,  95 => 45,  93 => 28,  90 => 27,  88 => 23,  85 => 22,  76 => 20,  72 => 19,  69 => 18,  67 => 12,  62 => 10,  51 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "@EasyAdmin/default/layout.html.twig", "/home/hurricane8/Documents/Easy/easyMimoun/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/layout.html.twig");
    }
}
