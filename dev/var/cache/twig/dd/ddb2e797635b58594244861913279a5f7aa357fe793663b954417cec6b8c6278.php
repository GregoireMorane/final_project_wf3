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
        $__internal_0fbd9e9b1287a78b34a51f346683b6ad2b3a7f2801227b6b7360b933682d3391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fbd9e9b1287a78b34a51f346683b6ad2b3a7f2801227b6b7360b933682d3391->enter($__internal_0fbd9e9b1287a78b34a51f346683b6ad2b3a7f2801227b6b7360b933682d3391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_eedd34bd21d5bd3e0c10a2cfb16700c5cbca33c2a066870e9fdf8df9614c5061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eedd34bd21d5bd3e0c10a2cfb16700c5cbca33c2a066870e9fdf8df9614c5061->enter($__internal_eedd34bd21d5bd3e0c10a2cfb16700c5cbca33c2a066870e9fdf8df9614c5061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fbd9e9b1287a78b34a51f346683b6ad2b3a7f2801227b6b7360b933682d3391->leave($__internal_0fbd9e9b1287a78b34a51f346683b6ad2b3a7f2801227b6b7360b933682d3391_prof);

        
        $__internal_eedd34bd21d5bd3e0c10a2cfb16700c5cbca33c2a066870e9fdf8df9614c5061->leave($__internal_eedd34bd21d5bd3e0c10a2cfb16700c5cbca33c2a066870e9fdf8df9614c5061_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3e9d0cea3672599d608d3b9363ebc4154805e5405b13f22c5843efd55652d66f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e9d0cea3672599d608d3b9363ebc4154805e5405b13f22c5843efd55652d66f->enter($__internal_3e9d0cea3672599d608d3b9363ebc4154805e5405b13f22c5843efd55652d66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7a9f7386bae4de3599cda924638e754576900e47d5f0a729249ba6d89fd2bb38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a9f7386bae4de3599cda924638e754576900e47d5f0a729249ba6d89fd2bb38->enter($__internal_7a9f7386bae4de3599cda924638e754576900e47d5f0a729249ba6d89fd2bb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_7a9f7386bae4de3599cda924638e754576900e47d5f0a729249ba6d89fd2bb38->leave($__internal_7a9f7386bae4de3599cda924638e754576900e47d5f0a729249ba6d89fd2bb38_prof);

        
        $__internal_3e9d0cea3672599d608d3b9363ebc4154805e5405b13f22c5843efd55652d66f->leave($__internal_3e9d0cea3672599d608d3b9363ebc4154805e5405b13f22c5843efd55652d66f_prof);

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
