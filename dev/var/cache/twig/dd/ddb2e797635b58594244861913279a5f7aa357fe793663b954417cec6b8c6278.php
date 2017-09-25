<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d767949bf52cd26621aa68727d920e48d3ecaded0f1b6f852976f3adb75da4f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d9128516991b18fc7689f24dd07a44b539df09b2246b4e345f6a317c6de6ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9128516991b18fc7689f24dd07a44b539df09b2246b4e345f6a317c6de6ef6->enter($__internal_1d9128516991b18fc7689f24dd07a44b539df09b2246b4e345f6a317c6de6ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1b510a67f98f456f1205c77d74c0d726031780f84e42cd562e4882d89c49f538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b510a67f98f456f1205c77d74c0d726031780f84e42cd562e4882d89c49f538->enter($__internal_1b510a67f98f456f1205c77d74c0d726031780f84e42cd562e4882d89c49f538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d9128516991b18fc7689f24dd07a44b539df09b2246b4e345f6a317c6de6ef6->leave($__internal_1d9128516991b18fc7689f24dd07a44b539df09b2246b4e345f6a317c6de6ef6_prof);

        
        $__internal_1b510a67f98f456f1205c77d74c0d726031780f84e42cd562e4882d89c49f538->leave($__internal_1b510a67f98f456f1205c77d74c0d726031780f84e42cd562e4882d89c49f538_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c9c64798c8ad1920c855a88721685b887aae310cc08270bdb409e4a7382b19a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c64798c8ad1920c855a88721685b887aae310cc08270bdb409e4a7382b19a2->enter($__internal_c9c64798c8ad1920c855a88721685b887aae310cc08270bdb409e4a7382b19a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fad53d0e1fbfcfa7d8c18000b4edca7dd706717c1fdbe00c484f8d1a710805f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fad53d0e1fbfcfa7d8c18000b4edca7dd706717c1fdbe00c484f8d1a710805f4->enter($__internal_fad53d0e1fbfcfa7d8c18000b4edca7dd706717c1fdbe00c484f8d1a710805f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_fad53d0e1fbfcfa7d8c18000b4edca7dd706717c1fdbe00c484f8d1a710805f4->leave($__internal_fad53d0e1fbfcfa7d8c18000b4edca7dd706717c1fdbe00c484f8d1a710805f4_prof);

        
        $__internal_c9c64798c8ad1920c855a88721685b887aae310cc08270bdb409e4a7382b19a2->leave($__internal_c9c64798c8ad1920c855a88721685b887aae310cc08270bdb409e4a7382b19a2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
