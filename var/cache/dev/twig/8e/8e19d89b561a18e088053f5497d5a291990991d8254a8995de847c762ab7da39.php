<?php

/* @EasyAdmin/default/menu.html.twig */
class __TwigTemplate_ae583a99e0b96ec5d5ea35ccf68b63d6ede49e44a725b38495a54a0cc3d07ff6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main_menu_before' => array($this, 'block_main_menu_before'),
            'main_menu' => array($this, 'block_main_menu'),
            'menu_item' => array($this, 'block_menu_item'),
            'menu_subitem' => array($this, 'block_menu_subitem'),
            'main_menu_after' => array($this, 'block_main_menu_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75b6a2ab3c64c01bb7924059822c3cfa7d53abdf20bb0b820633189622ff3610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75b6a2ab3c64c01bb7924059822c3cfa7d53abdf20bb0b820633189622ff3610->enter($__internal_75b6a2ab3c64c01bb7924059822c3cfa7d53abdf20bb0b820633189622ff3610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/menu.html.twig"));

        $__internal_97bdcd179b8a3582375235acd0d0bc974c5cdd8aa8d1462d7e9aef84401ee0bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97bdcd179b8a3582375235acd0d0bc974c5cdd8aa8d1462d7e9aef84401ee0bb->enter($__internal_97bdcd179b8a3582375235acd0d0bc974c5cdd8aa8d1462d7e9aef84401ee0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/menu.html.twig"));

        // line 28
        echo "
";
        // line 29
        $context["helper"] = $this;
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('main_menu_before', $context, $blocks);
        // line 32
        echo "
<ul class=\"sidebar-menu\">
    ";
        // line 34
        $context["_menu_items"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.menu");
        // line 35
        echo "
    ";
        // line 36
        $this->displayBlock('main_menu', $context, $blocks);
        // line 57
        echo "</ul>

";
        // line 59
        $this->displayBlock('main_menu_after', $context, $blocks);
        
        $__internal_75b6a2ab3c64c01bb7924059822c3cfa7d53abdf20bb0b820633189622ff3610->leave($__internal_75b6a2ab3c64c01bb7924059822c3cfa7d53abdf20bb0b820633189622ff3610_prof);

        
        $__internal_97bdcd179b8a3582375235acd0d0bc974c5cdd8aa8d1462d7e9aef84401ee0bb->leave($__internal_97bdcd179b8a3582375235acd0d0bc974c5cdd8aa8d1462d7e9aef84401ee0bb_prof);

    }

    // line 31
    public function block_main_menu_before($context, array $blocks = array())
    {
        $__internal_a7e1ab3778246284a8e68ee3ccd9f168ce6ee517d209279c93cae7a046a92edc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e1ab3778246284a8e68ee3ccd9f168ce6ee517d209279c93cae7a046a92edc->enter($__internal_a7e1ab3778246284a8e68ee3ccd9f168ce6ee517d209279c93cae7a046a92edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_before"));

        $__internal_b17412dc99b363dc6b1aecc4659f76d7c7aeed526fd9b7bbe764c4439be79026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b17412dc99b363dc6b1aecc4659f76d7c7aeed526fd9b7bbe764c4439be79026->enter($__internal_b17412dc99b363dc6b1aecc4659f76d7c7aeed526fd9b7bbe764c4439be79026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_before"));

        
        $__internal_b17412dc99b363dc6b1aecc4659f76d7c7aeed526fd9b7bbe764c4439be79026->leave($__internal_b17412dc99b363dc6b1aecc4659f76d7c7aeed526fd9b7bbe764c4439be79026_prof);

        
        $__internal_a7e1ab3778246284a8e68ee3ccd9f168ce6ee517d209279c93cae7a046a92edc->leave($__internal_a7e1ab3778246284a8e68ee3ccd9f168ce6ee517d209279c93cae7a046a92edc_prof);

    }

    // line 36
    public function block_main_menu($context, array $blocks = array())
    {
        $__internal_8b245873843be2fdf3b3509b5661eda46a505b5f4414b4167a4580875af37955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b245873843be2fdf3b3509b5661eda46a505b5f4414b4167a4580875af37955->enter($__internal_8b245873843be2fdf3b3509b5661eda46a505b5f4414b4167a4580875af37955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        $__internal_5c5306a2908e47595fbe981948a82139fbe695cddc39266b33e87a7b39f96515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c5306a2908e47595fbe981948a82139fbe695cddc39266b33e87a7b39f96515->enter($__internal_5c5306a2908e47595fbe981948a82139fbe695cddc39266b33e87a7b39f96515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        // line 37
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["_menu_items"]) || array_key_exists("_menu_items", $context) ? $context["_menu_items"] : (function () { throw new Twig_Error_Runtime('Variable "_menu_items" does not exist.', 37, $this->getSourceContext()); })()));
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
            // line 38
            echo "            ";
            $this->displayBlock('menu_item', $context, $blocks);
            // line 55
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    ";
        
        $__internal_5c5306a2908e47595fbe981948a82139fbe695cddc39266b33e87a7b39f96515->leave($__internal_5c5306a2908e47595fbe981948a82139fbe695cddc39266b33e87a7b39f96515_prof);

        
        $__internal_8b245873843be2fdf3b3509b5661eda46a505b5f4414b4167a4580875af37955->leave($__internal_8b245873843be2fdf3b3509b5661eda46a505b5f4414b4167a4580875af37955_prof);

    }

    // line 38
    public function block_menu_item($context, array $blocks = array())
    {
        $__internal_8521d74fc27496fbe3b7ba1a93acac2c6ed1c198fe97aa907e3a4c31dfb3b872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8521d74fc27496fbe3b7ba1a93acac2c6ed1c198fe97aa907e3a4c31dfb3b872->enter($__internal_8521d74fc27496fbe3b7ba1a93acac2c6ed1c198fe97aa907e3a4c31dfb3b872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_item"));

        $__internal_d525bbe0889ef33dd282cbb3227a3d2ee1d6a724bee928488af49eed710dc609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d525bbe0889ef33dd282cbb3227a3d2ee1d6a724bee928488af49eed710dc609->enter($__internal_d525bbe0889ef33dd282cbb3227a3d2ee1d6a724bee928488af49eed710dc609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_item"));

        // line 39
        echo "                <li class=\"";
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 39, $this->getSourceContext()); })()), "type", array()) == "divider")) ? ("header") : (""));
        echo " ";
        echo (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 39, $this->getSourceContext()); })()), "children", array()))) ? ("treeview") : (""));
        echo " ";
        echo (((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new Twig_Error_Runtime('Variable "loop" does not exist.', 39, $this->getSourceContext()); })()), "index0", array()))) ? ("active") : (""));
        echo " ";
        echo (((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) !=  -1)) ? ("submenu-active") : (""));
        echo "\">
                    ";
        // line 40
        echo $context["helper"]->macro_render_menu_item((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 40, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "translation_domain", array()), "messages")) : ("messages")));
        echo "

                    ";
        // line 42
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "children", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "children", array()), array())) : (array())))) {
            // line 43
            echo "                        <ul class=\"treeview-menu\">
                            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 44, $this->getSourceContext()); })()), "children", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                // line 45
                echo "                                ";
                $this->displayBlock('menu_subitem', $context, $blocks);
                // line 50
                echo "                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                        </ul>
                    ";
        }
        // line 53
        echo "                </li>
            ";
        
        $__internal_d525bbe0889ef33dd282cbb3227a3d2ee1d6a724bee928488af49eed710dc609->leave($__internal_d525bbe0889ef33dd282cbb3227a3d2ee1d6a724bee928488af49eed710dc609_prof);

        
        $__internal_8521d74fc27496fbe3b7ba1a93acac2c6ed1c198fe97aa907e3a4c31dfb3b872->leave($__internal_8521d74fc27496fbe3b7ba1a93acac2c6ed1c198fe97aa907e3a4c31dfb3b872_prof);

    }

    // line 45
    public function block_menu_subitem($context, array $blocks = array())
    {
        $__internal_586ac3fce1c7d160d8d327b1710b312e35e4ef8ea0024aa5efa04b32fa650c2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_586ac3fce1c7d160d8d327b1710b312e35e4ef8ea0024aa5efa04b32fa650c2f->enter($__internal_586ac3fce1c7d160d8d327b1710b312e35e4ef8ea0024aa5efa04b32fa650c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_subitem"));

        $__internal_25d2e88c81a99d0cd32a8970347b4c425bc0345ee9728bfdc0be6913f5ec8245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d2e88c81a99d0cd32a8970347b4c425bc0345ee9728bfdc0be6913f5ec8245->enter($__internal_25d2e88c81a99d0cd32a8970347b4c425bc0345ee9728bfdc0be6913f5ec8245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_subitem"));

        // line 46
        echo "                                    <li class=\"";
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new Twig_Error_Runtime('Variable "subitem" does not exist.', 46, $this->getSourceContext()); })()), "type", array()) == "divider")) ? ("header") : (""));
        echo " ";
        echo ((((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new Twig_Error_Runtime('Variable "loop" does not exist.', 46, $this->getSourceContext()); })()), "parent", array()), "loop", array()), "index0", array())) && (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new Twig_Error_Runtime('Variable "loop" does not exist.', 46, $this->getSourceContext()); })()), "index0", array())))) ? ("active") : (""));
        echo "\">
                                        ";
        // line 47
        echo $context["helper"]->macro_render_menu_item((isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new Twig_Error_Runtime('Variable "subitem" does not exist.', 47, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "translation_domain", array()), "messages")) : ("messages")));
        echo "
                                    </li>
                                ";
        
        $__internal_25d2e88c81a99d0cd32a8970347b4c425bc0345ee9728bfdc0be6913f5ec8245->leave($__internal_25d2e88c81a99d0cd32a8970347b4c425bc0345ee9728bfdc0be6913f5ec8245_prof);

        
        $__internal_586ac3fce1c7d160d8d327b1710b312e35e4ef8ea0024aa5efa04b32fa650c2f->leave($__internal_586ac3fce1c7d160d8d327b1710b312e35e4ef8ea0024aa5efa04b32fa650c2f_prof);

    }

    // line 59
    public function block_main_menu_after($context, array $blocks = array())
    {
        $__internal_7ed27e278968b4dda4deacd5b49c3dee2f7fd8e034ff6fec6df38119ab5ab3f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ed27e278968b4dda4deacd5b49c3dee2f7fd8e034ff6fec6df38119ab5ab3f0->enter($__internal_7ed27e278968b4dda4deacd5b49c3dee2f7fd8e034ff6fec6df38119ab5ab3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_after"));

        $__internal_97a9bee0d56c1ada6f9fc2e59a79233888078ce84c1a0d5ee607328d7839d27b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a9bee0d56c1ada6f9fc2e59a79233888078ce84c1a0d5ee607328d7839d27b->enter($__internal_97a9bee0d56c1ada6f9fc2e59a79233888078ce84c1a0d5ee607328d7839d27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_after"));

        
        $__internal_97a9bee0d56c1ada6f9fc2e59a79233888078ce84c1a0d5ee607328d7839d27b->leave($__internal_97a9bee0d56c1ada6f9fc2e59a79233888078ce84c1a0d5ee607328d7839d27b_prof);

        
        $__internal_7ed27e278968b4dda4deacd5b49c3dee2f7fd8e034ff6fec6df38119ab5ab3f0->leave($__internal_7ed27e278968b4dda4deacd5b49c3dee2f7fd8e034ff6fec6df38119ab5ab3f0_prof);

    }

    // line 1
    public function macro_render_menu_item($__item__ = null, $__translation_domain__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "translation_domain" => $__translation_domain__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_64627b536ec281b00668d2c0e09a65cbb21b6e47b205a931ac96822400fdf444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_64627b536ec281b00668d2c0e09a65cbb21b6e47b205a931ac96822400fdf444->enter($__internal_64627b536ec281b00668d2c0e09a65cbb21b6e47b205a931ac96822400fdf444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            $__internal_020813d56a4575d957757a67aaae47aea189c03dda914675680407d7a27d5db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_020813d56a4575d957757a67aaae47aea189c03dda914675680407d7a27d5db7->enter($__internal_020813d56a4575d957757a67aaae47aea189c03dda914675680407d7a27d5db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            // line 2
            echo "    ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 2, $this->getSourceContext()); })()), "type", array()) == "divider")) {
                // line 3
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 3, $this->getSourceContext()); })()), "label", array()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 3, $this->getSourceContext()); })())), "html", null, true);
                echo "
    ";
            } else {
                // line 5
                echo "        ";
                $context["menu_params"] = array("menuIndex" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 5, $this->getSourceContext()); })()), "menu_index", array()), "submenuIndex" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 5, $this->getSourceContext()); })()), "submenu_index", array()));
                // line 6
                echo "        ";
                $context["path"] = (((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 7
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 7, $this->getSourceContext()); })()), "type", array()) == "link")) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 7, $this->getSourceContext()); })()), "url", array())) : ((((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 8
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 8, $this->getSourceContext()); })()), "type", array()) == "route")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 8, $this->getSourceContext()); })()), "route", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 8, $this->getSourceContext()); })()), "params", array()))) : ((((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 9
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 9, $this->getSourceContext()); })()), "type", array()) == "entity")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(twig_array_merge(array("entity" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 9, $this->getSourceContext()); })()), "entity", array()), "action" => "list"), (isset($context["menu_params"]) || array_key_exists("menu_params", $context) ? $context["menu_params"] : (function () { throw new Twig_Error_Runtime('Variable "menu_params" does not exist.', 9, $this->getSourceContext()); })())), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 9, $this->getSourceContext()); })()), "params", array())))) : ((((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 10
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 10, $this->getSourceContext()); })()), "type", array()) == "empty")) ? ("#") : (""))))))));
                // line 12
                echo "
        ";
                // line 17
                echo "        ";
                if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 17, $this->getSourceContext()); })()), "type", array()) == "route") && (is_string($__internal_fa83fda17172658368fb9f2463e53e9b9ddd71b90e8c37fb5aed3cba28885e68 = (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 17, $this->getSourceContext()); })())) && is_string($__internal_871aefba687543f43f973781eb325f6d101055ab75e69c97207bd3f496f5cbdb = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin")) && ('' === $__internal_871aefba687543f43f973781eb325f6d101055ab75e69c97207bd3f496f5cbdb || 0 === strpos($__internal_fa83fda17172658368fb9f2463e53e9b9ddd71b90e8c37fb5aed3cba28885e68, $__internal_871aefba687543f43f973781eb325f6d101055ab75e69c97207bd3f496f5cbdb))))) {
                    // line 18
                    echo "            ";
                    $context["path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 18, $this->getSourceContext()); })()), "route", array()), twig_array_merge((isset($context["menu_params"]) || array_key_exists("menu_params", $context) ? $context["menu_params"] : (function () { throw new Twig_Error_Runtime('Variable "menu_params" does not exist.', 18, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 18, $this->getSourceContext()); })()), "params", array())));
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "
        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
                echo "\" ";
                if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "target", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "target", array()), false)) : (false))) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 21, $this->getSourceContext()); })()), "target", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 22
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 22, $this->getSourceContext()); })()), "icon", array()))) {
                    echo "<i class=\"fa ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 22, $this->getSourceContext()); })()), "icon", array()), "html", null, true);
                    echo "\"></i>";
                }
                // line 23
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 23, $this->getSourceContext()); })()), "label", array()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 23, $this->getSourceContext()); })())), "html", null, true);
                echo "</span>
            ";
                // line 24
                if ( !twig_test_empty(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "children", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "children", array()), array())) : (array())))) {
                    echo "<i class=\"fa fa-angle-left pull-right\"></i>";
                }
                // line 25
                echo "        </a>
    ";
            }
            
            $__internal_020813d56a4575d957757a67aaae47aea189c03dda914675680407d7a27d5db7->leave($__internal_020813d56a4575d957757a67aaae47aea189c03dda914675680407d7a27d5db7_prof);

            
            $__internal_64627b536ec281b00668d2c0e09a65cbb21b6e47b205a931ac96822400fdf444->leave($__internal_64627b536ec281b00668d2c0e09a65cbb21b6e47b205a931ac96822400fdf444_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 25,  335 => 24,  330 => 23,  324 => 22,  314 => 21,  311 => 20,  308 => 19,  305 => 18,  302 => 17,  299 => 12,  297 => 10,  296 => 9,  295 => 8,  294 => 7,  292 => 6,  289 => 5,  283 => 3,  280 => 2,  261 => 1,  244 => 59,  231 => 47,  224 => 46,  215 => 45,  204 => 53,  200 => 51,  186 => 50,  183 => 45,  166 => 44,  163 => 43,  161 => 42,  156 => 40,  145 => 39,  136 => 38,  126 => 56,  112 => 55,  109 => 38,  91 => 37,  82 => 36,  65 => 31,  55 => 59,  51 => 57,  49 => 36,  46 => 35,  44 => 34,  40 => 32,  38 => 31,  35 => 30,  33 => 29,  30 => 28,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro render_menu_item(item, translation_domain) %}
    {% if item.type == 'divider' %}
        {{ item.label|trans(domain = translation_domain) }}
    {% else %}
        {% set menu_params = { menuIndex: item.menu_index, submenuIndex: item.submenu_index } %}
        {% set path =
            item.type == 'link' ? item.url :
            item.type == 'route' ? path(item.route, item.params) :
            item.type == 'entity' ? path('easyadmin', { entity: item.entity, action: 'list' }|merge(menu_params)|merge(item.params)) :
            item.type == 'empty' ? '#' : ''
        %}

        {# if the URL generated for the route belongs to the backend, regenerate
           the URL to include the menu_params to display the selected menu item
           (this is checked comparing the beginning of the route URL with the backend homepage URL)
        #}
        {% if item.type == 'route' and (path starts with path('easyadmin')) %}
            {% set path = path(item.route, menu_params|merge(item.params)) %}
        {% endif %}

        <a href=\"{{ path }}\" {% if item.target|default(false) %}target=\"{{ item.target }}\"{% endif %}>
            {% if item.icon is not empty %}<i class=\"fa {{ item.icon }}\"></i>{% endif %}
            <span>{{ item.label|trans(domain = translation_domain) }}</span>
            {% if item.children|default([]) is not empty %}<i class=\"fa fa-angle-left pull-right\"></i>{% endif %}
        </a>
    {% endif %}
{% endmacro %}

{% import _self as helper %}

{% block main_menu_before %}{% endblock %}

<ul class=\"sidebar-menu\">
    {% set _menu_items = easyadmin_config('design.menu') %}

    {% block main_menu %}
        {% for item in _menu_items %}
            {% block menu_item %}
                <li class=\"{{ item.type == 'divider' ? 'header' }} {{ item.children is not empty ? 'treeview' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.index0 ? 'active' }} {{ app.request.query.get('submenuIndex')|default(-1) != -1 ? 'submenu-active' }}\">
                    {{ helper.render_menu_item(item, _entity_config.translation_domain|default('messages')) }}

                    {% if item.children|default([]) is not empty %}
                        <ul class=\"treeview-menu\">
                            {% for subitem in item.children %}
                                {% block menu_subitem %}
                                    <li class=\"{{ subitem.type == 'divider' ? 'header' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.parent.loop.index0 and app.request.query.get('submenuIndex')|default(-1) == loop.index0 ? 'active' }}\">
                                        {{ helper.render_menu_item(subitem, _entity_config.translation_domain|default('messages')) }}
                                    </li>
                                {% endblock menu_subitem %}
                            {% endfor %}
                        </ul>
                    {% endif %}
                </li>
            {% endblock menu_item %}
        {% endfor %}
    {% endblock main_menu %}
</ul>

{% block main_menu_after %}{% endblock %}
", "@EasyAdmin/default/menu.html.twig", "/home/hurricane8/Documents/Easy/easyMimoun/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/menu.html.twig");
    }
}
