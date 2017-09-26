<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cc5e957115d6ef23573d3e4c1c0a2c304b67cfbcbaccb31c8cd65408f74dbe49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_de74ce23a25b2d1f80024bbc3523b929a2032e8ed198391a47784a86f327eea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de74ce23a25b2d1f80024bbc3523b929a2032e8ed198391a47784a86f327eea6->enter($__internal_de74ce23a25b2d1f80024bbc3523b929a2032e8ed198391a47784a86f327eea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_193275387fc61cdd9f573dfbac0c00952947317c0d0d01e16e16c7f1c33416d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_193275387fc61cdd9f573dfbac0c00952947317c0d0d01e16e16c7f1c33416d7->enter($__internal_193275387fc61cdd9f573dfbac0c00952947317c0d0d01e16e16c7f1c33416d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de74ce23a25b2d1f80024bbc3523b929a2032e8ed198391a47784a86f327eea6->leave($__internal_de74ce23a25b2d1f80024bbc3523b929a2032e8ed198391a47784a86f327eea6_prof);

        
        $__internal_193275387fc61cdd9f573dfbac0c00952947317c0d0d01e16e16c7f1c33416d7->leave($__internal_193275387fc61cdd9f573dfbac0c00952947317c0d0d01e16e16c7f1c33416d7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8918122aacea9f6206ce9f47eef0f9f2bfd615e2a4b1b960eb8c56bddf7bda10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8918122aacea9f6206ce9f47eef0f9f2bfd615e2a4b1b960eb8c56bddf7bda10->enter($__internal_8918122aacea9f6206ce9f47eef0f9f2bfd615e2a4b1b960eb8c56bddf7bda10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_624db7a53506748a773d5b72189e7a019579596096f34e7998300a5f3a825668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_624db7a53506748a773d5b72189e7a019579596096f34e7998300a5f3a825668->enter($__internal_624db7a53506748a773d5b72189e7a019579596096f34e7998300a5f3a825668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_624db7a53506748a773d5b72189e7a019579596096f34e7998300a5f3a825668->leave($__internal_624db7a53506748a773d5b72189e7a019579596096f34e7998300a5f3a825668_prof);

        
        $__internal_8918122aacea9f6206ce9f47eef0f9f2bfd615e2a4b1b960eb8c56bddf7bda10->leave($__internal_8918122aacea9f6206ce9f47eef0f9f2bfd615e2a4b1b960eb8c56bddf7bda10_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6fa61ea5eec22eb1fee5242383b9b9137d39daaadd2cda663e1ec9d6905f1368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa61ea5eec22eb1fee5242383b9b9137d39daaadd2cda663e1ec9d6905f1368->enter($__internal_6fa61ea5eec22eb1fee5242383b9b9137d39daaadd2cda663e1ec9d6905f1368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a9283f5c92b34d989eb25c55e192121a9ded2deda52bd293b99d5dece3ad2421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9283f5c92b34d989eb25c55e192121a9ded2deda52bd293b99d5dece3ad2421->enter($__internal_a9283f5c92b34d989eb25c55e192121a9ded2deda52bd293b99d5dece3ad2421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a9283f5c92b34d989eb25c55e192121a9ded2deda52bd293b99d5dece3ad2421->leave($__internal_a9283f5c92b34d989eb25c55e192121a9ded2deda52bd293b99d5dece3ad2421_prof);

        
        $__internal_6fa61ea5eec22eb1fee5242383b9b9137d39daaadd2cda663e1ec9d6905f1368->leave($__internal_6fa61ea5eec22eb1fee5242383b9b9137d39daaadd2cda663e1ec9d6905f1368_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_94f66c6fd8fc9f6dee50bf6bc26076ee33e7a2cf4d08acd32b93608f554d17c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f66c6fd8fc9f6dee50bf6bc26076ee33e7a2cf4d08acd32b93608f554d17c7->enter($__internal_94f66c6fd8fc9f6dee50bf6bc26076ee33e7a2cf4d08acd32b93608f554d17c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1a4ec865958d6653fdd0f973bb397e886cf60f84b052c911e9dc469b5002ad2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a4ec865958d6653fdd0f973bb397e886cf60f84b052c911e9dc469b5002ad2a->enter($__internal_1a4ec865958d6653fdd0f973bb397e886cf60f84b052c911e9dc469b5002ad2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1a4ec865958d6653fdd0f973bb397e886cf60f84b052c911e9dc469b5002ad2a->leave($__internal_1a4ec865958d6653fdd0f973bb397e886cf60f84b052c911e9dc469b5002ad2a_prof);

        
        $__internal_94f66c6fd8fc9f6dee50bf6bc26076ee33e7a2cf4d08acd32b93608f554d17c7->leave($__internal_94f66c6fd8fc9f6dee50bf6bc26076ee33e7a2cf4d08acd32b93608f554d17c7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\projet_final\\final_project_wf3\\dev\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
