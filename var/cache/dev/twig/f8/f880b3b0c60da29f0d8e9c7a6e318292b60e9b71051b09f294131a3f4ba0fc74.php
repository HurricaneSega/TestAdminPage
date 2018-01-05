<?php

/* @EasyAdmin/default/list.html.twig */
class __TwigTemplate_7f05ca707a3e03a37f436d5ebc8a54cc0aaaf3b8072da3b176a45614000233dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'content_header' => array($this, 'block_content_header'),
            'content_title_wrapper' => array($this, 'block_content_title_wrapper'),
            'global_actions' => array($this, 'block_global_actions'),
            'search_action' => array($this, 'block_search_action'),
            'search_form' => array($this, 'block_search_form'),
            'new_action' => array($this, 'block_new_action'),
            'main' => array($this, 'block_main'),
            'table_head' => array($this, 'block_table_head'),
            'table_body' => array($this, 'block_table_body'),
            'item_actions' => array($this, 'block_item_actions'),
            'paginator' => array($this, 'block_paginator'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "templates", array()), "layout", array()), "@EasyAdmin/default/list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d14e306a5e42f872e831987fe8af33f8da6b3d9358c758f585bba11630d08b97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d14e306a5e42f872e831987fe8af33f8da6b3d9358c758f585bba11630d08b97->enter($__internal_d14e306a5e42f872e831987fe8af33f8da6b3d9358c758f585bba11630d08b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/list.html.twig"));

        $__internal_0cef174c1c158413739fd568e7b19c4edb7a963d03551d53d315c3634759e912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cef174c1c158413739fd568e7b19c4edb7a963d03551d53d315c3634759e912->enter($__internal_0cef174c1c158413739fd568e7b19c4edb7a963d03551d53d315c3634759e912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/list.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 2
        $context["__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 2, $this->getSourceContext()); })()), "translation_domain", array());
        // line 3
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 3, $this->getSourceContext()); })()), "name", array()), array(),         // line 2
(isset($context["__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28"]) || array_key_exists("__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28", $context) ? $context["__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28" does not exist.', 2, $this->getSourceContext()); })())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),         // line 3
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 3, $this->getSourceContext()); })()), "label", array()), array(),         // line 2
(isset($context["__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28"]) || array_key_exists("__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28", $context) ? $context["__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28" does not exist.', 2, $this->getSourceContext()); })())));
        // line 7
        $context["_request_parameters"] = twig_array_merge(((array_key_exists("_request_parameters", $context)) ? (_twig_default_filter((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 7, $this->getSourceContext()); })()), array())) : (array())), array("action" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 8
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "action"), "method"), "entity" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 9
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 9, $this->getSourceContext()); })()), "name", array()), "menuIndex" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 10
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "menuIndex"), "method"), "submenuIndex" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 11
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "submenuIndex"), "method"), "sortField" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 12
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"), "sortDirection" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 13
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"), "page" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 14
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "page", 1 => 1), "method")));
        // line 17
        if (("search" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 18
            $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 18, $this->getSourceContext()); })()), array("query" => ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 19
($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "sortField" => ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 20
($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"))) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"))), "sortDirection" => ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 21
($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"))) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method")))));
        }
        // line 25
        $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 25, $this->getSourceContext()); })()), array("referer" => twig_urlencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 25, $this->getSourceContext()); })())))));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d14e306a5e42f872e831987fe8af33f8da6b3d9358c758f585bba11630d08b97->leave($__internal_d14e306a5e42f872e831987fe8af33f8da6b3d9358c758f585bba11630d08b97_prof);

        
        $__internal_0cef174c1c158413739fd568e7b19c4edb7a963d03551d53d315c3634759e912->leave($__internal_0cef174c1c158413739fd568e7b19c4edb7a963d03551d53d315c3634759e912_prof);

    }

    // line 27
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_6b08dc48069a24dc45d1c3166de9590d7d61bf5380522134e1bbf7bfb20b74bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b08dc48069a24dc45d1c3166de9590d7d61bf5380522134e1bbf7bfb20b74bf->enter($__internal_6b08dc48069a24dc45d1c3166de9590d7d61bf5380522134e1bbf7bfb20b74bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_ea934067c8584e05b78df7e9cc8b1ff1535e91004c4e779d1d17321f45c3c3ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea934067c8584e05b78df7e9cc8b1ff1535e91004c4e779d1d17321f45c3c3ae->enter($__internal_ea934067c8584e05b78df7e9cc8b1ff1535e91004c4e779d1d17321f45c3c3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-list-" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 27, $this->getSourceContext()); })()), "name", array())), "html", null, true);
        
        $__internal_ea934067c8584e05b78df7e9cc8b1ff1535e91004c4e779d1d17321f45c3c3ae->leave($__internal_ea934067c8584e05b78df7e9cc8b1ff1535e91004c4e779d1d17321f45c3c3ae_prof);

        
        $__internal_6b08dc48069a24dc45d1c3166de9590d7d61bf5380522134e1bbf7bfb20b74bf->leave($__internal_6b08dc48069a24dc45d1c3166de9590d7d61bf5380522134e1bbf7bfb20b74bf_prof);

    }

    // line 28
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_0553d3b00bde9f8b3c7518586edc4926910cd16d8953705e7c04ee5211b582cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0553d3b00bde9f8b3c7518586edc4926910cd16d8953705e7c04ee5211b582cc->enter($__internal_0553d3b00bde9f8b3c7518586edc4926910cd16d8953705e7c04ee5211b582cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_938a66a92ebb56c3861e3ec0a495c9d9a40e02ba5ebee332a3824fe54ef911d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938a66a92ebb56c3861e3ec0a495c9d9a40e02ba5ebee332a3824fe54ef911d5->enter($__internal_938a66a92ebb56c3861e3ec0a495c9d9a40e02ba5ebee332a3824fe54ef911d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("list list-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 28, $this->getSourceContext()); })()), "name", array()))), "html", null, true);
        
        $__internal_938a66a92ebb56c3861e3ec0a495c9d9a40e02ba5ebee332a3824fe54ef911d5->leave($__internal_938a66a92ebb56c3861e3ec0a495c9d9a40e02ba5ebee332a3824fe54ef911d5_prof);

        
        $__internal_0553d3b00bde9f8b3c7518586edc4926910cd16d8953705e7c04ee5211b582cc->leave($__internal_0553d3b00bde9f8b3c7518586edc4926910cd16d8953705e7c04ee5211b582cc_prof);

    }

    // line 30
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_ea3bc96b7e1c97f54c54417cc9beb49bb59f6cd3aeebcfbcb225455bd817f653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea3bc96b7e1c97f54c54417cc9beb49bb59f6cd3aeebcfbcb225455bd817f653->enter($__internal_ea3bc96b7e1c97f54c54417cc9beb49bb59f6cd3aeebcfbcb225455bd817f653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_1b42ef5deac568204ba9dd8204cb45d726250c7ae6126405e933fc709d057dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b42ef5deac568204ba9dd8204cb45d726250c7ae6126405e933fc709d057dfc->enter($__internal_1b42ef5deac568204ba9dd8204cb45d726250c7ae6126405e933fc709d057dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 31
        ob_start();
        // line 32
        echo "    ";
        if (("search" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 32, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 33
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("search.page_title", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 33, $this->getSourceContext()); })()), "nbResults", array()), array(), "EasyAdminBundle");
            // line 34
            echo "        ";
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 34, $this->getSourceContext()); })()), "search", array()), "title", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 34, $this->getSourceContext()); })()), "nbResults", array()), array(),             // line 2
(isset($context["__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28"]) || array_key_exists("__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28", $context) ? $context["__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28" does not exist.', 2, $this->getSourceContext()); })()))) : (            // line 34
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 34, $this->getSourceContext()); })())));
            echo "
    ";
        } else {
            // line 36
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 36, $this->getSourceContext()); })()), "EasyAdminBundle");
            // line 37
            echo "        ";
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "list", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 37, $this->getSourceContext()); })()), "list", array()), "title", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 37, $this->getSourceContext()); })()),             // line 2
(isset($context["__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28"]) || array_key_exists("__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28", $context) ? $context["__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28" does not exist.', 2, $this->getSourceContext()); })()))) : (            // line 37
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 37, $this->getSourceContext()); })())));
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1b42ef5deac568204ba9dd8204cb45d726250c7ae6126405e933fc709d057dfc->leave($__internal_1b42ef5deac568204ba9dd8204cb45d726250c7ae6126405e933fc709d057dfc_prof);

        
        $__internal_ea3bc96b7e1c97f54c54417cc9beb49bb59f6cd3aeebcfbcb225455bd817f653->leave($__internal_ea3bc96b7e1c97f54c54417cc9beb49bb59f6cd3aeebcfbcb225455bd817f653_prof);

    }

    // line 42
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_0be128f085f2a9675964e097b6e50fbfad6ecccd2e1e9d08c061833d0c21c8f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be128f085f2a9675964e097b6e50fbfad6ecccd2e1e9d08c061833d0c21c8f9->enter($__internal_0be128f085f2a9675964e097b6e50fbfad6ecccd2e1e9d08c061833d0c21c8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_ba36eee1cf8efde5acae73bf14139aa886aec75e9fad9b2a39debdc4fda4f822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba36eee1cf8efde5acae73bf14139aa886aec75e9fad9b2a39debdc4fda4f822->enter($__internal_ba36eee1cf8efde5acae73bf14139aa886aec75e9fad9b2a39debdc4fda4f822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 43
        echo "    <div class=\"row\">
        <div class=\"col-sm-5\">
            ";
        // line 45
        $this->displayBlock('content_title_wrapper', $context, $blocks);
        // line 48
        echo "        </div>

        <div class=\"col-sm-7\">
            <div class=\"global-actions\">
                ";
        // line 52
        $this->displayBlock('global_actions', $context, $blocks);
        // line 93
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_ba36eee1cf8efde5acae73bf14139aa886aec75e9fad9b2a39debdc4fda4f822->leave($__internal_ba36eee1cf8efde5acae73bf14139aa886aec75e9fad9b2a39debdc4fda4f822_prof);

        
        $__internal_0be128f085f2a9675964e097b6e50fbfad6ecccd2e1e9d08c061833d0c21c8f9->leave($__internal_0be128f085f2a9675964e097b6e50fbfad6ecccd2e1e9d08c061833d0c21c8f9_prof);

    }

    // line 45
    public function block_content_title_wrapper($context, array $blocks = array())
    {
        $__internal_65abf02ff2d9de0c99071da52ef2e44baa581ca7015b2ce827661931535f0b50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65abf02ff2d9de0c99071da52ef2e44baa581ca7015b2ce827661931535f0b50->enter($__internal_65abf02ff2d9de0c99071da52ef2e44baa581ca7015b2ce827661931535f0b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title_wrapper"));

        $__internal_460b6f0ffa78f9646113d7f35f4156c9b0eafebb5a776663bd5e3adb06ed07e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460b6f0ffa78f9646113d7f35f4156c9b0eafebb5a776663bd5e3adb06ed07e8->enter($__internal_460b6f0ffa78f9646113d7f35f4156c9b0eafebb5a776663bd5e3adb06ed07e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title_wrapper"));

        // line 46
        echo "                <h1 class=\"title\">";
        $this->displayBlock("content_title", $context, $blocks);
        echo "</h1>
            ";
        
        $__internal_460b6f0ffa78f9646113d7f35f4156c9b0eafebb5a776663bd5e3adb06ed07e8->leave($__internal_460b6f0ffa78f9646113d7f35f4156c9b0eafebb5a776663bd5e3adb06ed07e8_prof);

        
        $__internal_65abf02ff2d9de0c99071da52ef2e44baa581ca7015b2ce827661931535f0b50->leave($__internal_65abf02ff2d9de0c99071da52ef2e44baa581ca7015b2ce827661931535f0b50_prof);

    }

    // line 52
    public function block_global_actions($context, array $blocks = array())
    {
        $__internal_b8bde6f5e7d2fad6b6485fcd58bdaf7140b4aab85016934acc3af0dfe2b901a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8bde6f5e7d2fad6b6485fcd58bdaf7140b4aab85016934acc3af0dfe2b901a1->enter($__internal_b8bde6f5e7d2fad6b6485fcd58bdaf7140b4aab85016934acc3af0dfe2b901a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        $__internal_35492c867393b74dd956e30b5dcf3b5e23e3ac5761bb5bc33656e879186ae842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35492c867393b74dd956e30b5dcf3b5e23e3ac5761bb5bc33656e879186ae842->enter($__internal_35492c867393b74dd956e30b5dcf3b5e23e3ac5761bb5bc33656e879186ae842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        // line 53
        echo "                    ";
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "search", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 53, $this->getSourceContext()); })()), "name", array()))) {
            // line 54
            echo "                        ";
            $context["_action"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "search", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 54, $this->getSourceContext()); })()), "name", array()));
            // line 55
            echo "
                        ";
            // line 56
            $this->displayBlock('search_action', $context, $blocks);
            // line 79
            echo "                    ";
        }
        // line 80
        echo "
                    ";
        // line 81
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "new", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 81, $this->getSourceContext()); })()), "name", array()))) {
            // line 82
            echo "                        ";
            $context["_action"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "new", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 82, $this->getSourceContext()); })()), "name", array()));
            // line 83
            echo "                        ";
            $this->displayBlock('new_action', $context, $blocks);
            // line 91
            echo "                    ";
        }
        // line 92
        echo "                ";
        
        $__internal_35492c867393b74dd956e30b5dcf3b5e23e3ac5761bb5bc33656e879186ae842->leave($__internal_35492c867393b74dd956e30b5dcf3b5e23e3ac5761bb5bc33656e879186ae842_prof);

        
        $__internal_b8bde6f5e7d2fad6b6485fcd58bdaf7140b4aab85016934acc3af0dfe2b901a1->leave($__internal_b8bde6f5e7d2fad6b6485fcd58bdaf7140b4aab85016934acc3af0dfe2b901a1_prof);

    }

    // line 56
    public function block_search_action($context, array $blocks = array())
    {
        $__internal_c30349172b256fa52d84a0907be20b4515e98de98c5d1d57f64407a2a9498f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c30349172b256fa52d84a0907be20b4515e98de98c5d1d57f64407a2a9498f42->enter($__internal_c30349172b256fa52d84a0907be20b4515e98de98c5d1d57f64407a2a9498f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_action"));

        $__internal_743b19da4ca3b9f4193b50bed1813bb9a9c4005dcf1688f38941a193ac187e51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743b19da4ca3b9f4193b50bed1813bb9a9c4005dcf1688f38941a193ac187e51->enter($__internal_743b19da4ca3b9f4193b50bed1813bb9a9c4005dcf1688f38941a193ac187e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_action"));

        // line 57
        echo "                            <div class=\"form-action ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["_action"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["_action"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                                <form method=\"get\" action=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                    ";
        // line 59
        $this->displayBlock('search_form', $context, $blocks);
        // line 76
        echo "                                </form>
                            </div>
                        ";
        
        $__internal_743b19da4ca3b9f4193b50bed1813bb9a9c4005dcf1688f38941a193ac187e51->leave($__internal_743b19da4ca3b9f4193b50bed1813bb9a9c4005dcf1688f38941a193ac187e51_prof);

        
        $__internal_c30349172b256fa52d84a0907be20b4515e98de98c5d1d57f64407a2a9498f42->leave($__internal_c30349172b256fa52d84a0907be20b4515e98de98c5d1d57f64407a2a9498f42_prof);

    }

    // line 59
    public function block_search_form($context, array $blocks = array())
    {
        $__internal_e00ee0a5719192c48e592c4806869d99d2584cccae7f9d017f78c41816577203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00ee0a5719192c48e592c4806869d99d2584cccae7f9d017f78c41816577203->enter($__internal_e00ee0a5719192c48e592c4806869d99d2584cccae7f9d017f78c41816577203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_form"));

        $__internal_d73fd9fb43bf57238ca4cbaf310289a6c3f3385652d98d99150b448eb70eedbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73fd9fb43bf57238ca4cbaf310289a6c3f3385652d98d99150b448eb70eedbf->enter($__internal_d73fd9fb43bf57238ca4cbaf310289a6c3f3385652d98d99150b448eb70eedbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_form"));

        // line 60
        echo "                                        <input type=\"hidden\" name=\"action\" value=\"search\">
                                        <input type=\"hidden\" name=\"entity\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 61, $this->getSourceContext()); })()), "entity", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortField\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 62, $this->getSourceContext()); })()), "sortField", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 62, $this->getSourceContext()); })()), "sortField", array()))), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortDirection\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 63, $this->getSourceContext()); })()), "sortDirection", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 63, $this->getSourceContext()); })()), "sortDirection", array()))), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 64, $this->getSourceContext()); })()), "menuIndex", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 65, $this->getSourceContext()); })()), "submenuIndex", array()), "html", null, true);
        echo "\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "html", null, true);
        echo "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn\" type=\"submit\" formtarget=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 69, $this->getSourceContext()); })()), "target", array()), "html", null, true);
        echo "\">
                                                    <i class=\"fa fa-search\"></i>
                                                    <span class=\"hidden-xs hidden-sm\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["_action"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["_action"] ?? null), "label", array()), "action.search")) : ("action.search")), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 71, $this->getSourceContext()); })()),         // line 2
(isset($context["__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28"]) || array_key_exists("__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28", $context) ? $context["__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28" does not exist.', 2, $this->getSourceContext()); })())), "html", null, true);
        // line 71
        echo "</span>
                                                </button>
                                            </span>
                                        </div>
                                    ";
        
        $__internal_d73fd9fb43bf57238ca4cbaf310289a6c3f3385652d98d99150b448eb70eedbf->leave($__internal_d73fd9fb43bf57238ca4cbaf310289a6c3f3385652d98d99150b448eb70eedbf_prof);

        
        $__internal_e00ee0a5719192c48e592c4806869d99d2584cccae7f9d017f78c41816577203->leave($__internal_e00ee0a5719192c48e592c4806869d99d2584cccae7f9d017f78c41816577203_prof);

    }

    // line 83
    public function block_new_action($context, array $blocks = array())
    {
        $__internal_2412687eccd80be6c74e5388215c70d7919fd57fa376d5959bc8d1e0cadba02c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2412687eccd80be6c74e5388215c70d7919fd57fa376d5959bc8d1e0cadba02c->enter($__internal_2412687eccd80be6c74e5388215c70d7919fd57fa376d5959bc8d1e0cadba02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_action"));

        $__internal_ab28e521e1379443d5e0579b71a5dd6f4dc0ae784952456af1d48f8485ecdac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab28e521e1379443d5e0579b71a5dd6f4dc0ae784952456af1d48f8485ecdac1->enter($__internal_ab28e521e1379443d5e0579b71a5dd6f4dc0ae784952456af1d48f8485ecdac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_action"));

        // line 84
        echo "                            <div class=\"button-action\">
                                <a class=\"";
        // line 85
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["_action"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["_action"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 85, $this->getSourceContext()); })()), array("action" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 85, $this->getSourceContext()); })()), "name", array())))), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 85, $this->getSourceContext()); })()), "target", array()), "html", null, true);
        echo "\">
                                    ";
        // line 86
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 86, $this->getSourceContext()); })()), "icon", array())) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 86, $this->getSourceContext()); })()), "icon", array()), "html", null, true);
            echo "\"></i>";
        }
        // line 87
        echo "                                    ";
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["_action"] ?? null), "label", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 87, $this->getSourceContext()); })()), "label", array())))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 87, $this->getSourceContext()); })()), "label", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 87, $this->getSourceContext()); })()),         // line 2
(isset($context["__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28"]) || array_key_exists("__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28", $context) ? $context["__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28" does not exist.', 2, $this->getSourceContext()); })()))) : ("")), "html", null, true);
        // line 87
        echo "
                                </a>
                            </div>
                        ";
        
        $__internal_ab28e521e1379443d5e0579b71a5dd6f4dc0ae784952456af1d48f8485ecdac1->leave($__internal_ab28e521e1379443d5e0579b71a5dd6f4dc0ae784952456af1d48f8485ecdac1_prof);

        
        $__internal_2412687eccd80be6c74e5388215c70d7919fd57fa376d5959bc8d1e0cadba02c->leave($__internal_2412687eccd80be6c74e5388215c70d7919fd57fa376d5959bc8d1e0cadba02c_prof);

    }

    // line 98
    public function block_main($context, array $blocks = array())
    {
        $__internal_4f0f77aac19413210c23d54bceaca55127c4b3c05242f6b1782207ede3cb3dee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f0f77aac19413210c23d54bceaca55127c4b3c05242f6b1782207ede3cb3dee->enter($__internal_4f0f77aac19413210c23d54bceaca55127c4b3c05242f6b1782207ede3cb3dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_363f956c4461976749e030fc4259b8d90ff6ac3ddfdad825ac21e81238041df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363f956c4461976749e030fc4259b8d90ff6ac3ddfdad825ac21e81238041df3->enter($__internal_363f956c4461976749e030fc4259b8d90ff6ac3ddfdad825ac21e81238041df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 99
        echo "    ";
        $context["_list_item_actions"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("list", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 99, $this->getSourceContext()); })()), "name", array()));
        // line 100
        echo "
    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        ";
        // line 104
        $this->displayBlock('table_head', $context, $blocks);
        // line 131
        echo "        </thead>

        <tbody>
        ";
        // line 134
        $this->displayBlock('table_body', $context, $blocks);
        // line 171
        echo "        </tbody>
    </table>
    </div>

    ";
        // line 175
        $this->displayBlock('paginator', $context, $blocks);
        // line 178
        echo "
    ";
        // line 179
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_363f956c4461976749e030fc4259b8d90ff6ac3ddfdad825ac21e81238041df3->leave($__internal_363f956c4461976749e030fc4259b8d90ff6ac3ddfdad825ac21e81238041df3_prof);

        
        $__internal_4f0f77aac19413210c23d54bceaca55127c4b3c05242f6b1782207ede3cb3dee->leave($__internal_4f0f77aac19413210c23d54bceaca55127c4b3c05242f6b1782207ede3cb3dee_prof);

    }

    // line 104
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_43d0edc07dc2a8c193a969b2677c5cba6d85e57b8132c60c52f11765ac9f629a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43d0edc07dc2a8c193a969b2677c5cba6d85e57b8132c60c52f11765ac9f629a->enter($__internal_43d0edc07dc2a8c193a969b2677c5cba6d85e57b8132c60c52f11765ac9f629a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        $__internal_0a26df74ace0d60367d5974c2038a61c1af7aaf5f632dfa7a6ce48b75d1e489c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a26df74ace0d60367d5974c2038a61c1af7aaf5f632dfa7a6ce48b75d1e489c->enter($__internal_0a26df74ace0d60367d5974c2038a61c1af7aaf5f632dfa7a6ce48b75d1e489c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 105
        echo "            <tr>
                ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 106, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 107
            echo "                    ";
            $context["isSortingField"] = (twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "property", array()) == twig_first($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 107, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortField"), "method"), ".")));
            // line 108
            echo "                    ";
            $context["nextSortDirection"] = (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new Twig_Error_Runtime('Variable "isSortingField" does not exist.', 108, $this->getSourceContext()); })())) ? ((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 108, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortDirection"), "method") == "DESC")) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 109
            echo "                    ";
            $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "label", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($context["field"]))), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 109, $this->getSourceContext()); })()),             // line 2
(isset($context["__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28"]) || array_key_exists("__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28", $context) ? $context["__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28" does not exist.', 2, $this->getSourceContext()); })()));
            // line 110
            echo "                    ";
            $context["_column_icon"] = (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new Twig_Error_Runtime('Variable "isSortingField" does not exist.', 110, $this->getSourceContext()); })())) ? (((((isset($context["nextSortDirection"]) || array_key_exists("nextSortDirection", $context) ? $context["nextSortDirection"] : (function () { throw new Twig_Error_Runtime('Variable "nextSortDirection" does not exist.', 110, $this->getSourceContext()); })()) == "DESC")) ? ("fa-caret-up") : ("fa-caret-down"))) : ("fa-sort"));
            // line 111
            echo "
                    <th data-property-name=\"";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "property", array()), "html", null, true);
            echo "\" class=\"";
            echo (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new Twig_Error_Runtime('Variable "isSortingField" does not exist.', 112, $this->getSourceContext()); })())) ? ("sorted") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "virtual", array())) ? ("virtual") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "dataType", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "css_class", array()), "html", null, true);
            echo "\">
                        ";
            // line 113
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "sortable", array())) {
                // line 114
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 114, $this->getSourceContext()); })()), array("page" => 1, "sortField" => twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "property", array()), "sortDirection" => (isset($context["nextSortDirection"]) || array_key_exists("nextSortDirection", $context) ? $context["nextSortDirection"] : (function () { throw new Twig_Error_Runtime('Variable "nextSortDirection" does not exist.', 114, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">
                                <i class=\"fa ";
                // line 115
                echo twig_escape_filter($this->env, (isset($context["_column_icon"]) || array_key_exists("_column_icon", $context) ? $context["_column_icon"] : (function () { throw new Twig_Error_Runtime('Variable "_column_icon" does not exist.', 115, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></i>
                                ";
                // line 116
                echo (isset($context["_column_label"]) || array_key_exists("_column_label", $context) ? $context["_column_label"] : (function () { throw new Twig_Error_Runtime('Variable "_column_label" does not exist.', 116, $this->getSourceContext()); })());
                echo "
                            </a>
                        ";
            } else {
                // line 119
                echo "                            <span>";
                echo (isset($context["_column_label"]) || array_key_exists("_column_label", $context) ? $context["_column_label"] : (function () { throw new Twig_Error_Runtime('Variable "_column_label" does not exist.', 119, $this->getSourceContext()); })());
                echo "</span>
                        ";
            }
            // line 121
            echo "                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "
                ";
        // line 124
        if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_item_actions" does not exist.', 124, $this->getSourceContext()); })())) > 0)) {
            // line 125
            echo "                    <th>
                        <span>";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 126, $this->getSourceContext()); })()), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </th>
                ";
        }
        // line 129
        echo "            </tr>
        ";
        
        $__internal_0a26df74ace0d60367d5974c2038a61c1af7aaf5f632dfa7a6ce48b75d1e489c->leave($__internal_0a26df74ace0d60367d5974c2038a61c1af7aaf5f632dfa7a6ce48b75d1e489c_prof);

        
        $__internal_43d0edc07dc2a8c193a969b2677c5cba6d85e57b8132c60c52f11765ac9f629a->leave($__internal_43d0edc07dc2a8c193a969b2677c5cba6d85e57b8132c60c52f11765ac9f629a_prof);

    }

    // line 134
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_8552c9de34bd402c26cd6b60a4ad7660a88ce6c815bf98e4fe8654d066adf846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8552c9de34bd402c26cd6b60a4ad7660a88ce6c815bf98e4fe8654d066adf846->enter($__internal_8552c9de34bd402c26cd6b60a4ad7660a88ce6c815bf98e4fe8654d066adf846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_4152db5a5081e609467ec792a9e92e800496d27be9f4d7608ce87b7fd6af883d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4152db5a5081e609467ec792a9e92e800496d27be9f4d7608ce87b7fd6af883d->enter($__internal_4152db5a5081e609467ec792a9e92e800496d27be9f4d7608ce87b7fd6af883d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 135
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 135, $this->getSourceContext()); })()), "currentPageResults", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 136
            echo "                ";
            // line 137
            echo "                ";
            $context["_item_id"] = ("" . twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 137, $this->getSourceContext()); })()), "primary_key_field_name", array())));
            // line 138
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, (isset($context["_item_id"]) || array_key_exists("_item_id", $context) ? $context["_item_id"] : (function () { throw new Twig_Error_Runtime('Variable "_item_id" does not exist.', 138, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                    ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 139, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
                // line 140
                echo "                        ";
                $context["isSortingField"] = (twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "property", array()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 140, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortField"), "method"));
                // line 141
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "label", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($context["field"]))), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 141, $this->getSourceContext()); })()),                 // line 2
(isset($context["__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28"]) || array_key_exists("__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28", $context) ? $context["__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_d4035c96997c0308eb4f0e76cc89ac0f7b544bb7a1c61531ae5d83c6db15fe28" does not exist.', 2, $this->getSourceContext()); })()));
                // line 142
                echo "
                        <td data-label=\"";
                // line 143
                echo twig_escape_filter($this->env, (isset($context["_column_label"]) || array_key_exists("_column_label", $context) ? $context["_column_label"] : (function () { throw new Twig_Error_Runtime('Variable "_column_label" does not exist.', 143, $this->getSourceContext()); })()), "html", null, true);
                echo "\" class=\"";
                echo (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new Twig_Error_Runtime('Variable "isSortingField" does not exist.', 143, $this->getSourceContext()); })())) ? ("sorted") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "dataType", array())), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "css_class", array()), "html", null, true);
                echo "\">
                            ";
                // line 144
                echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "list", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 144, $this->getSourceContext()); })()), "name", array()), $context["item"], $context["metadata"]);
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "
                    ";
            // line 148
            if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_item_actions" does not exist.', 148, $this->getSourceContext()); })())) > 0)) {
                // line 149
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 149, $this->getSourceContext()); })()), "EasyAdminBundle");
                // line 150
                echo "                        <td data-label=\"";
                echo twig_escape_filter($this->env, (isset($context["_column_label"]) || array_key_exists("_column_label", $context) ? $context["_column_label"] : (function () { throw new Twig_Error_Runtime('Variable "_column_label" does not exist.', 150, $this->getSourceContext()); })()), "html", null, true);
                echo "\" class=\"actions\">
                        ";
                // line 151
                $this->displayBlock('item_actions', $context, $blocks);
                // line 160
                echo "                        </td>
                    ";
            }
            // line 162
            echo "                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 164
            echo "                <tr>
                    <td class=\"no-results\" colspan=\"";
            // line 165
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, (isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_item_actions" does not exist.', 165, $this->getSourceContext()); })())) > 0)) ? ((twig_length_filter($this->env, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 165, $this->getSourceContext()); })())) + 1)) : (twig_length_filter($this->env, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 165, $this->getSourceContext()); })())))), "html", null, true);
            echo "\">
                        ";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search.no_results", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 166, $this->getSourceContext()); })()), "EasyAdminBundle"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "        ";
        
        $__internal_4152db5a5081e609467ec792a9e92e800496d27be9f4d7608ce87b7fd6af883d->leave($__internal_4152db5a5081e609467ec792a9e92e800496d27be9f4d7608ce87b7fd6af883d_prof);

        
        $__internal_8552c9de34bd402c26cd6b60a4ad7660a88ce6c815bf98e4fe8654d066adf846->leave($__internal_8552c9de34bd402c26cd6b60a4ad7660a88ce6c815bf98e4fe8654d066adf846_prof);

    }

    // line 151
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_956033c87b9ed5315e74190e416499f055cece168e435a35c4010599987e5144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_956033c87b9ed5315e74190e416499f055cece168e435a35c4010599987e5144->enter($__internal_956033c87b9ed5315e74190e416499f055cece168e435a35c4010599987e5144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_c70f8f6c2ddc65493d1298f280dfcef5696e761a47fc534ad0b55c419443edf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70f8f6c2ddc65493d1298f280dfcef5696e761a47fc534ad0b55c419443edf2->enter($__internal_c70f8f6c2ddc65493d1298f280dfcef5696e761a47fc534ad0b55c419443edf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 152
        echo "                            ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 153
(isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_item_actions" does not exist.', 153, $this->getSourceContext()); })()), "request_parameters" =>         // line 154
(isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 154, $this->getSourceContext()); })()), "translation_domain" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 155
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 155, $this->getSourceContext()); })()), "translation_domain", array()), "trans_parameters" =>         // line 156
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 156, $this->getSourceContext()); })()), "item_id" =>         // line 157
(isset($context["_item_id"]) || array_key_exists("_item_id", $context) ? $context["_item_id"] : (function () { throw new Twig_Error_Runtime('Variable "_item_id" does not exist.', 157, $this->getSourceContext()); })())), false);
        // line 158
        echo "
                        ";
        
        $__internal_c70f8f6c2ddc65493d1298f280dfcef5696e761a47fc534ad0b55c419443edf2->leave($__internal_c70f8f6c2ddc65493d1298f280dfcef5696e761a47fc534ad0b55c419443edf2_prof);

        
        $__internal_956033c87b9ed5315e74190e416499f055cece168e435a35c4010599987e5144->leave($__internal_956033c87b9ed5315e74190e416499f055cece168e435a35c4010599987e5144_prof);

    }

    // line 175
    public function block_paginator($context, array $blocks = array())
    {
        $__internal_9f98e56f9b79450a7a42977c8d37723f85e14b4205c7c254dfa4d2698e8d30cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f98e56f9b79450a7a42977c8d37723f85e14b4205c7c254dfa4d2698e8d30cd->enter($__internal_9f98e56f9b79450a7a42977c8d37723f85e14b4205c7c254dfa4d2698e8d30cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginator"));

        $__internal_a838725c389d6efe1571737b7e9a52bfd0e0288d041e0af2e2963e6f3dd09e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a838725c389d6efe1571737b7e9a52bfd0e0288d041e0af2e2963e6f3dd09e98->enter($__internal_a838725c389d6efe1571737b7e9a52bfd0e0288d041e0af2e2963e6f3dd09e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginator"));

        // line 176
        echo "        ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 176, $this->getSourceContext()); })()), "templates", array()), "paginator", array()));
        echo "
    ";
        
        $__internal_a838725c389d6efe1571737b7e9a52bfd0e0288d041e0af2e2963e6f3dd09e98->leave($__internal_a838725c389d6efe1571737b7e9a52bfd0e0288d041e0af2e2963e6f3dd09e98_prof);

        
        $__internal_9f98e56f9b79450a7a42977c8d37723f85e14b4205c7c254dfa4d2698e8d30cd->leave($__internal_9f98e56f9b79450a7a42977c8d37723f85e14b4205c7c254dfa4d2698e8d30cd_prof);

    }

    // line 179
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_6c7eec37803a55e811f1521a2d9c0b68658668f97a3fd2377a7268f3834c3649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c7eec37803a55e811f1521a2d9c0b68658668f97a3fd2377a7268f3834c3649->enter($__internal_6c7eec37803a55e811f1521a2d9c0b68658668f97a3fd2377a7268f3834c3649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_9053030875d7e2deb0a8e84b5cdf8a86dae6c9a0da812ffca4c9ee5a35f08145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9053030875d7e2deb0a8e84b5cdf8a86dae6c9a0da812ffca4c9ee5a35f08145->enter($__internal_9053030875d7e2deb0a8e84b5cdf8a86dae6c9a0da812ffca4c9ee5a35f08145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 180
        echo "        ";
        $context["referer"] = (((((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 180, $this->getSourceContext()); })()), "currentPage", array()) == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 180, $this->getSourceContext()); })()), "nbPages", array())) && (1 != twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 180, $this->getSourceContext()); })()), "currentPage", array()))) && (1 == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 180, $this->getSourceContext()); })()), "currentPageResults", array()), "count", array())))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 181
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 181, $this->getSourceContext()); })()), "request", array()), "query", array()), array("page" => (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 181, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "page"), "method") - 1))))) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 182
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 182, $this->getSourceContext()); })()), "request", array()), "requestUri", array())));
        // line 184
        echo "
        ";
        // line 185
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "list", "referer" => twig_urlencode_filter(        // line 187
(isset($context["referer"]) || array_key_exists("referer", $context) ? $context["referer"] : (function () { throw new Twig_Error_Runtime('Variable "referer" does not exist.', 187, $this->getSourceContext()); })())), "delete_form" =>         // line 188
(isset($context["delete_form_template"]) || array_key_exists("delete_form_template", $context) ? $context["delete_form_template"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form_template" does not exist.', 188, $this->getSourceContext()); })()), "_translation_domain" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 189
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 189, $this->getSourceContext()); })()), "translation_domain", array()), "_trans_parameters" =>         // line 190
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 190, $this->getSourceContext()); })()), "_entity_config" =>         // line 191
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 191, $this->getSourceContext()); })())), false);
        // line 192
        echo "
    ";
        
        $__internal_9053030875d7e2deb0a8e84b5cdf8a86dae6c9a0da812ffca4c9ee5a35f08145->leave($__internal_9053030875d7e2deb0a8e84b5cdf8a86dae6c9a0da812ffca4c9ee5a35f08145_prof);

        
        $__internal_6c7eec37803a55e811f1521a2d9c0b68658668f97a3fd2377a7268f3834c3649->leave($__internal_6c7eec37803a55e811f1521a2d9c0b68658668f97a3fd2377a7268f3834c3649_prof);

    }

    // line 196
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_ab57e9338e1a6d949c705434946084c61ee326e026c82dc141171d12a7ebad84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab57e9338e1a6d949c705434946084c61ee326e026c82dc141171d12a7ebad84->enter($__internal_ab57e9338e1a6d949c705434946084c61ee326e026c82dc141171d12a7ebad84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_c78a6a91b63dabf4baa78d6272557a49032e8afee2bc72385dc5dab12ebc8785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78a6a91b63dabf4baa78d6272557a49032e8afee2bc72385dc5dab12ebc8785->enter($__internal_c78a6a91b63dabf4baa78d6272557a49032e8afee2bc72385dc5dab12ebc8785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 197
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main').find('table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"";
        // line 209
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "edit", "entity" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 209, $this->getSourceContext()); })()), "name", array()), "view" => "list"));
        echo "\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function() {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 240
        if (("search" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 240, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 241
            echo "        <script type=\"text/javascript\">
            var _search_query = \"";
            // line 242
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    ";
        }
        
        $__internal_c78a6a91b63dabf4baa78d6272557a49032e8afee2bc72385dc5dab12ebc8785->leave($__internal_c78a6a91b63dabf4baa78d6272557a49032e8afee2bc72385dc5dab12ebc8785_prof);

        
        $__internal_ab57e9338e1a6d949c705434946084c61ee326e026c82dc141171d12a7ebad84->leave($__internal_ab57e9338e1a6d949c705434946084c61ee326e026c82dc141171d12a7ebad84_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  831 => 242,  828 => 241,  826 => 240,  792 => 209,  776 => 197,  767 => 196,  756 => 192,  754 => 191,  753 => 190,  752 => 189,  751 => 188,  750 => 187,  749 => 185,  746 => 184,  744 => 182,  743 => 181,  741 => 180,  732 => 179,  719 => 176,  710 => 175,  699 => 158,  697 => 157,  696 => 156,  695 => 155,  694 => 154,  693 => 153,  691 => 152,  682 => 151,  672 => 170,  662 => 166,  658 => 165,  655 => 164,  641 => 162,  637 => 160,  635 => 151,  630 => 150,  627 => 149,  625 => 148,  622 => 147,  613 => 144,  603 => 143,  600 => 142,  598 => 2,  596 => 141,  593 => 140,  589 => 139,  584 => 138,  581 => 137,  579 => 136,  560 => 135,  551 => 134,  540 => 129,  534 => 126,  531 => 125,  529 => 124,  526 => 123,  519 => 121,  513 => 119,  507 => 116,  503 => 115,  498 => 114,  496 => 113,  484 => 112,  481 => 111,  478 => 110,  476 => 2,  474 => 109,  471 => 108,  468 => 107,  464 => 106,  461 => 105,  452 => 104,  442 => 179,  439 => 178,  437 => 175,  431 => 171,  429 => 134,  424 => 131,  422 => 104,  416 => 100,  413 => 99,  404 => 98,  391 => 87,  389 => 2,  387 => 87,  381 => 86,  373 => 85,  370 => 84,  361 => 83,  347 => 71,  345 => 2,  344 => 71,  339 => 69,  334 => 67,  329 => 65,  325 => 64,  321 => 63,  317 => 62,  313 => 61,  310 => 60,  301 => 59,  289 => 76,  287 => 59,  283 => 58,  278 => 57,  269 => 56,  259 => 92,  256 => 91,  253 => 83,  250 => 82,  248 => 81,  245 => 80,  242 => 79,  240 => 56,  237 => 55,  234 => 54,  231 => 53,  222 => 52,  209 => 46,  200 => 45,  187 => 93,  185 => 52,  179 => 48,  177 => 45,  173 => 43,  164 => 42,  150 => 37,  149 => 2,  147 => 37,  144 => 36,  139 => 34,  138 => 2,  136 => 34,  133 => 33,  130 => 32,  128 => 31,  119 => 30,  101 => 28,  83 => 27,  73 => 5,  71 => 25,  68 => 21,  67 => 20,  66 => 19,  65 => 18,  63 => 17,  61 => 14,  60 => 13,  59 => 12,  58 => 11,  57 => 10,  56 => 9,  55 => 8,  54 => 7,  52 => 2,  51 => 3,  50 => 2,  49 => 3,  47 => 2,  45 => 1,  33 => 5,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% set _request_parameters = _request_parameters|default({})|merge({
    action: app.request.get('action'),
    entity: _entity_config.name,
    menuIndex: app.request.get('menuIndex'),
    submenuIndex: app.request.get('submenuIndex'),
    sortField: app.request.get('sortField', ''),
    sortDirection: app.request.get('sortDirection', 'DESC'),
    page: app.request.get('page', 1)
}) %}

{% if 'search' == app.request.get('action') %}
    {% set _request_parameters = _request_parameters|merge({
        query: app.request.get('query')|default(''),
        sortField: _entity_config.search.sort.field|default(app.request.get('sortField', '')),
        sortDirection: _entity_config.search.sort.direction|default(app.request.get('sortDirection', 'DESC')),
    }) %}
{% endif %}

{% set _request_parameters = _request_parameters|merge({ referer: path('easyadmin', _request_parameters)|url_encode }) %}

{% block body_id 'easyadmin-list-' ~ _entity_config.name %}
{% block body_class 'list list-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% if 'search' == app.request.get('action') %}
        {% set _default_title = 'search.page_title'|transchoice(paginator.nbResults, {}, 'EasyAdminBundle') %}
        {{ (_entity_config.search.title is defined ? _entity_config.search.title|transchoice(paginator.nbResults) : _default_title)|raw }}
    {% else %}
        {% set _default_title = 'list.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
        {{ (_entity_config.list.title is defined ? _entity_config.list.title|trans(_trans_parameters) : _default_title)|raw }}
    {% endif %}
{% endspaceless %}
{% endblock %}

{% block content_header %}
    <div class=\"row\">
        <div class=\"col-sm-5\">
            {% block content_title_wrapper %}
                <h1 class=\"title\">{{ block('content_title') }}</h1>
            {% endblock %}
        </div>

        <div class=\"col-sm-7\">
            <div class=\"global-actions\">
                {% block global_actions %}
                    {% if easyadmin_action_is_enabled_for_list_view('search', _entity_config.name) %}
                        {% set _action = easyadmin_get_action_for_list_view('search', _entity_config.name) %}

                        {% block search_action %}
                            <div class=\"form-action {{ _action.css_class|default('') }}\">
                                <form method=\"get\" action=\"{{ path('easyadmin') }}\">
                                    {% block search_form %}
                                        <input type=\"hidden\" name=\"action\" value=\"search\">
                                        <input type=\"hidden\" name=\"entity\" value=\"{{ _request_parameters.entity }}\">
                                        <input type=\"hidden\" name=\"sortField\" value=\"{{ _entity_config.search.sort.field|default(_request_parameters.sortField) }}\">
                                        <input type=\"hidden\" name=\"sortDirection\" value=\"{{ _entity_config.search.sort.direction|default(_request_parameters.sortDirection) }}\">
                                        <input type=\"hidden\" name=\"menuIndex\" value=\"{{ _request_parameters.menuIndex }}\">
                                        <input type=\"hidden\" name=\"submenuIndex\" value=\"{{ _request_parameters.submenuIndex }}\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"{{ app.request.get('query')|default('') }}\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn\" type=\"submit\" formtarget=\"{{ _action.target }}\">
                                                    <i class=\"fa fa-search\"></i>
                                                    <span class=\"hidden-xs hidden-sm\">{{ _action.label|default('action.search')|trans(_trans_parameters) }}</span>
                                                </button>
                                            </span>
                                        </div>
                                    {% endblock %}
                                </form>
                            </div>
                        {% endblock search_action %}
                    {% endif %}

                    {% if easyadmin_action_is_enabled_for_list_view('new', _entity_config.name) %}
                        {% set _action = easyadmin_get_action_for_list_view('new', _entity_config.name) %}
                        {% block new_action %}
                            <div class=\"button-action\">
                                <a class=\"{{ _action.css_class|default('') }}\" href=\"{{ path('easyadmin', _request_parameters|merge({ action: _action.name })) }}\" target=\"{{ _action.target }}\">
                                    {% if _action.icon %}<i class=\"fa fa-{{ _action.icon }}\"></i>{% endif %}
                                    {{ _action.label is defined and not _action.label is empty ? _action.label|trans(_trans_parameters) }}
                                </a>
                            </div>
                        {% endblock new_action %}
                    {% endif %}
                {% endblock global_actions %}
            </div>
        </div>
    </div>
{% endblock content_header %}

{% block main %}
    {% set _list_item_actions = easyadmin_get_actions_for_list_item(_entity_config.name) %}

    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        {% block table_head %}
            <tr>
                {% for field, metadata in fields %}
                    {% set isSortingField = metadata.property == app.request.get('sortField')|split('.')|first %}
                    {% set nextSortDirection = isSortingField ? (app.request.get('sortDirection') == 'DESC' ? 'ASC' : 'DESC') : 'DESC' %}
                    {% set _column_label = (metadata.label ?: field|humanize)|trans(_trans_parameters) %}
                    {% set _column_icon = isSortingField ? (nextSortDirection == 'DESC' ? 'fa-caret-up' : 'fa-caret-down') : 'fa-sort' %}

                    <th data-property-name=\"{{ metadata.property }}\" class=\"{{ isSortingField ? 'sorted' }} {{ metadata.virtual ? 'virtual' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\">
                        {% if metadata.sortable %}
                            <a href=\"{{ path('easyadmin', _request_parameters|merge({ page: 1, sortField: metadata.property, sortDirection: nextSortDirection })) }}\">
                                <i class=\"fa {{ _column_icon }}\"></i>
                                {{ _column_label|raw }}
                            </a>
                        {% else %}
                            <span>{{ _column_label|raw }}</span>
                        {% endif %}
                    </th>
                {% endfor %}

                {% if _list_item_actions|length > 0 %}
                    <th>
                        <span>{{ 'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') }}</span>
                    </th>
                {% endif %}
            </tr>
        {% endblock table_head %}
        </thead>

        <tbody>
        {% block table_body %}
            {% for item in paginator.currentPageResults %}
                {# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
                {% set _item_id = '' ~ attribute(item, _entity_config.primary_key_field_name) %}
                <tr data-id=\"{{ _item_id }}\">
                    {% for field, metadata in fields %}
                        {% set isSortingField = metadata.property == app.request.get('sortField') %}
                        {% set _column_label =  (metadata.label ?: field|humanize)|trans(_trans_parameters)  %}

                        <td data-label=\"{{ _column_label }}\" class=\"{{ isSortingField ? 'sorted' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\">
                            {{ easyadmin_render_field_for_list_view(_entity_config.name, item, metadata) }}
                        </td>
                    {% endfor %}

                    {% if _list_item_actions|length > 0 %}
                        {% set _column_label =  'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') %}
                        <td data-label=\"{{ _column_label }}\" class=\"actions\">
                        {% block item_actions %}
                            {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                                actions: _list_item_actions,
                                request_parameters: _request_parameters,
                                translation_domain: _entity_config.translation_domain,
                                trans_parameters: _trans_parameters,
                                item_id: _item_id
                            }, with_context = false) }}
                        {% endblock item_actions %}
                        </td>
                    {% endif %}
                </tr>
            {% else %}
                <tr>
                    <td class=\"no-results\" colspan=\"{{ _list_item_actions|length > 0 ? fields|length + 1 : fields|length }}\">
                        {{ 'search.no_results'|trans(_trans_parameters, 'EasyAdminBundle') }}
                    </td>
                </tr>
            {% endfor %}
        {% endblock table_body %}
        </tbody>
    </table>
    </div>

    {% block paginator %}
        {{ include(_entity_config.templates.paginator) }}
    {% endblock paginator %}

    {% block delete_form %}
        {% set referer = paginator.currentPage == paginator.nbPages and 1 != paginator.currentPage and 1 == paginator.currentPageResults.count
            ? path('easyadmin', app.request.query|merge({ page: app.request.query.get('page') - 1 }))
            : app.request.requestUri
        %}

        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'list',
            referer: referer|url_encode,
            delete_form: delete_form_template,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock main %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main').find('table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"{{ path('easyadmin', { action: 'edit', entity: _entity_config.name, view: 'list' })|raw }}\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function() {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    {% if 'search' == app.request.get('action') %}
        <script type=\"text/javascript\">
            var _search_query = \"{{ app.request.get('query')|default('')|e('js') }}\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    {% endif %}
{% endblock %}
", "@EasyAdmin/default/list.html.twig", "/home/hurricane8/Documents/Easy/easyMimoun/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/list.html.twig");
    }
}
