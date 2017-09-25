<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8db40cc2c624584f88885a370e7004fc22e61fabe7892802fa1f50ecfdc75e4f extends Twig_Template
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
        $__internal_21d93379bbdcce2ff350265762c8db42a8e2017c80cf42eef1fb4aa6485feaae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d93379bbdcce2ff350265762c8db42a8e2017c80cf42eef1fb4aa6485feaae->enter($__internal_21d93379bbdcce2ff350265762c8db42a8e2017c80cf42eef1fb4aa6485feaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_232cc74c569d3b0cf27535fe86790c091fcff34497831e6287387a7bd76f2b69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_232cc74c569d3b0cf27535fe86790c091fcff34497831e6287387a7bd76f2b69->enter($__internal_232cc74c569d3b0cf27535fe86790c091fcff34497831e6287387a7bd76f2b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21d93379bbdcce2ff350265762c8db42a8e2017c80cf42eef1fb4aa6485feaae->leave($__internal_21d93379bbdcce2ff350265762c8db42a8e2017c80cf42eef1fb4aa6485feaae_prof);

        
        $__internal_232cc74c569d3b0cf27535fe86790c091fcff34497831e6287387a7bd76f2b69->leave($__internal_232cc74c569d3b0cf27535fe86790c091fcff34497831e6287387a7bd76f2b69_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dc5bf1b08bbc4ec6ba440fa6fb938f11fca050a864e7fc8d44842b69d3444e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5bf1b08bbc4ec6ba440fa6fb938f11fca050a864e7fc8d44842b69d3444e29->enter($__internal_dc5bf1b08bbc4ec6ba440fa6fb938f11fca050a864e7fc8d44842b69d3444e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bcc37f3f3c2c66e470c633f3439ca2883d3f4800df6548c99c56c46b42e7ee8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcc37f3f3c2c66e470c633f3439ca2883d3f4800df6548c99c56c46b42e7ee8d->enter($__internal_bcc37f3f3c2c66e470c633f3439ca2883d3f4800df6548c99c56c46b42e7ee8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bcc37f3f3c2c66e470c633f3439ca2883d3f4800df6548c99c56c46b42e7ee8d->leave($__internal_bcc37f3f3c2c66e470c633f3439ca2883d3f4800df6548c99c56c46b42e7ee8d_prof);

        
        $__internal_dc5bf1b08bbc4ec6ba440fa6fb938f11fca050a864e7fc8d44842b69d3444e29->leave($__internal_dc5bf1b08bbc4ec6ba440fa6fb938f11fca050a864e7fc8d44842b69d3444e29_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d2ab06e0020f8346f2d748cd950fe1d73cb7f0ad1d5c30a929f71465d49c8e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ab06e0020f8346f2d748cd950fe1d73cb7f0ad1d5c30a929f71465d49c8e7f->enter($__internal_d2ab06e0020f8346f2d748cd950fe1d73cb7f0ad1d5c30a929f71465d49c8e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3aae45d176eb19701c6c1a41a3ded204280a584f3624546398d01a4e6c56fb69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aae45d176eb19701c6c1a41a3ded204280a584f3624546398d01a4e6c56fb69->enter($__internal_3aae45d176eb19701c6c1a41a3ded204280a584f3624546398d01a4e6c56fb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3aae45d176eb19701c6c1a41a3ded204280a584f3624546398d01a4e6c56fb69->leave($__internal_3aae45d176eb19701c6c1a41a3ded204280a584f3624546398d01a4e6c56fb69_prof);

        
        $__internal_d2ab06e0020f8346f2d748cd950fe1d73cb7f0ad1d5c30a929f71465d49c8e7f->leave($__internal_d2ab06e0020f8346f2d748cd950fe1d73cb7f0ad1d5c30a929f71465d49c8e7f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_80362f83613289d3c1873da1f75a1b2a6c7b17c9f4e10f97ba038220e170c6b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80362f83613289d3c1873da1f75a1b2a6c7b17c9f4e10f97ba038220e170c6b8->enter($__internal_80362f83613289d3c1873da1f75a1b2a6c7b17c9f4e10f97ba038220e170c6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_65672b696e3dea54985af6ee3e82d4df0ce1a7fdce2cc617836bf74e2430abd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65672b696e3dea54985af6ee3e82d4df0ce1a7fdce2cc617836bf74e2430abd3->enter($__internal_65672b696e3dea54985af6ee3e82d4df0ce1a7fdce2cc617836bf74e2430abd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_65672b696e3dea54985af6ee3e82d4df0ce1a7fdce2cc617836bf74e2430abd3->leave($__internal_65672b696e3dea54985af6ee3e82d4df0ce1a7fdce2cc617836bf74e2430abd3_prof);

        
        $__internal_80362f83613289d3c1873da1f75a1b2a6c7b17c9f4e10f97ba038220e170c6b8->leave($__internal_80362f83613289d3c1873da1f75a1b2a6c7b17c9f4e10f97ba038220e170c6b8_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
