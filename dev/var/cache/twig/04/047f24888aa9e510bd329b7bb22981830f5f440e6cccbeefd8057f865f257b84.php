<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_472ecd9ba0eb4027e0fdba703f9fd44226629c9536556e2a71be3d00e0e1fa84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7be0e94ecb4415e4a3b762eb3d44cbd8ec76a98a0f49d91000f4207e8a2649e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7be0e94ecb4415e4a3b762eb3d44cbd8ec76a98a0f49d91000f4207e8a2649e->enter($__internal_b7be0e94ecb4415e4a3b762eb3d44cbd8ec76a98a0f49d91000f4207e8a2649e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c8100c0045341362608e8e6ea82b0139d53cb618995d29ac6f252729eab82488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8100c0045341362608e8e6ea82b0139d53cb618995d29ac6f252729eab82488->enter($__internal_c8100c0045341362608e8e6ea82b0139d53cb618995d29ac6f252729eab82488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7be0e94ecb4415e4a3b762eb3d44cbd8ec76a98a0f49d91000f4207e8a2649e->leave($__internal_b7be0e94ecb4415e4a3b762eb3d44cbd8ec76a98a0f49d91000f4207e8a2649e_prof);

        
        $__internal_c8100c0045341362608e8e6ea82b0139d53cb618995d29ac6f252729eab82488->leave($__internal_c8100c0045341362608e8e6ea82b0139d53cb618995d29ac6f252729eab82488_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_34b46bfc407b0ed0696d014903e96b65c6b77aa4534796f670d0e87fd53a0b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b46bfc407b0ed0696d014903e96b65c6b77aa4534796f670d0e87fd53a0b1c->enter($__internal_34b46bfc407b0ed0696d014903e96b65c6b77aa4534796f670d0e87fd53a0b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_526e29aa794deb6faa6651606c3ae2a853168df2c5b09a01a2c8650edc388998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526e29aa794deb6faa6651606c3ae2a853168df2c5b09a01a2c8650edc388998->enter($__internal_526e29aa794deb6faa6651606c3ae2a853168df2c5b09a01a2c8650edc388998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_526e29aa794deb6faa6651606c3ae2a853168df2c5b09a01a2c8650edc388998->leave($__internal_526e29aa794deb6faa6651606c3ae2a853168df2c5b09a01a2c8650edc388998_prof);

        
        $__internal_34b46bfc407b0ed0696d014903e96b65c6b77aa4534796f670d0e87fd53a0b1c->leave($__internal_34b46bfc407b0ed0696d014903e96b65c6b77aa4534796f670d0e87fd53a0b1c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7d007cd21668fe25e7927189a356c1130b32cfb308ab54f3ae00ed64637278df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d007cd21668fe25e7927189a356c1130b32cfb308ab54f3ae00ed64637278df->enter($__internal_7d007cd21668fe25e7927189a356c1130b32cfb308ab54f3ae00ed64637278df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e9b3b12977905cf7ed909784abeddffd75c31c2c8a151b3a4bdb27675eebdf9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9b3b12977905cf7ed909784abeddffd75c31c2c8a151b3a4bdb27675eebdf9e->enter($__internal_e9b3b12977905cf7ed909784abeddffd75c31c2c8a151b3a4bdb27675eebdf9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e9b3b12977905cf7ed909784abeddffd75c31c2c8a151b3a4bdb27675eebdf9e->leave($__internal_e9b3b12977905cf7ed909784abeddffd75c31c2c8a151b3a4bdb27675eebdf9e_prof);

        
        $__internal_7d007cd21668fe25e7927189a356c1130b32cfb308ab54f3ae00ed64637278df->leave($__internal_7d007cd21668fe25e7927189a356c1130b32cfb308ab54f3ae00ed64637278df_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_692c819d1fad89db06fcd0fed5d4efdd40f677310f2701d481669327563a5b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692c819d1fad89db06fcd0fed5d4efdd40f677310f2701d481669327563a5b82->enter($__internal_692c819d1fad89db06fcd0fed5d4efdd40f677310f2701d481669327563a5b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_10053f7c7c7491825a69ffda9b603b02e30cb1870212ccfb4d87fc7d787edc83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10053f7c7c7491825a69ffda9b603b02e30cb1870212ccfb4d87fc7d787edc83->enter($__internal_10053f7c7c7491825a69ffda9b603b02e30cb1870212ccfb4d87fc7d787edc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_10053f7c7c7491825a69ffda9b603b02e30cb1870212ccfb4d87fc7d787edc83->leave($__internal_10053f7c7c7491825a69ffda9b603b02e30cb1870212ccfb4d87fc7d787edc83_prof);

        
        $__internal_692c819d1fad89db06fcd0fed5d4efdd40f677310f2701d481669327563a5b82->leave($__internal_692c819d1fad89db06fcd0fed5d4efdd40f677310f2701d481669327563a5b82_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
