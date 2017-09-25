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
        $__internal_ff8685184e3861c0699322cc044cc8bbcda5529862d143fad9ff5c232d57907c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8685184e3861c0699322cc044cc8bbcda5529862d143fad9ff5c232d57907c->enter($__internal_ff8685184e3861c0699322cc044cc8bbcda5529862d143fad9ff5c232d57907c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_49a8e73ab32b9e1e5d2fe397b9661243e87cf69603b55dbb79c7b59a51ace4b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49a8e73ab32b9e1e5d2fe397b9661243e87cf69603b55dbb79c7b59a51ace4b7->enter($__internal_49a8e73ab32b9e1e5d2fe397b9661243e87cf69603b55dbb79c7b59a51ace4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff8685184e3861c0699322cc044cc8bbcda5529862d143fad9ff5c232d57907c->leave($__internal_ff8685184e3861c0699322cc044cc8bbcda5529862d143fad9ff5c232d57907c_prof);

        
        $__internal_49a8e73ab32b9e1e5d2fe397b9661243e87cf69603b55dbb79c7b59a51ace4b7->leave($__internal_49a8e73ab32b9e1e5d2fe397b9661243e87cf69603b55dbb79c7b59a51ace4b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae0e599c212d1ef5c213a3099ad6b8a6aa42c8cefac9ff3823ee9bd38797c138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae0e599c212d1ef5c213a3099ad6b8a6aa42c8cefac9ff3823ee9bd38797c138->enter($__internal_ae0e599c212d1ef5c213a3099ad6b8a6aa42c8cefac9ff3823ee9bd38797c138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e2e79b8c02274d5df8a754856d327fc33f86469ce26cb36519392ad2578b2580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e79b8c02274d5df8a754856d327fc33f86469ce26cb36519392ad2578b2580->enter($__internal_e2e79b8c02274d5df8a754856d327fc33f86469ce26cb36519392ad2578b2580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e2e79b8c02274d5df8a754856d327fc33f86469ce26cb36519392ad2578b2580->leave($__internal_e2e79b8c02274d5df8a754856d327fc33f86469ce26cb36519392ad2578b2580_prof);

        
        $__internal_ae0e599c212d1ef5c213a3099ad6b8a6aa42c8cefac9ff3823ee9bd38797c138->leave($__internal_ae0e599c212d1ef5c213a3099ad6b8a6aa42c8cefac9ff3823ee9bd38797c138_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bbfdb267812bc6168adc60d4d4585ea8e07c6fff76d62e09675be1995ce6b85c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbfdb267812bc6168adc60d4d4585ea8e07c6fff76d62e09675be1995ce6b85c->enter($__internal_bbfdb267812bc6168adc60d4d4585ea8e07c6fff76d62e09675be1995ce6b85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6ddad1a648298a0e990544c1f8997cff92ab3378ab4a0a074d1803f1da7aded3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ddad1a648298a0e990544c1f8997cff92ab3378ab4a0a074d1803f1da7aded3->enter($__internal_6ddad1a648298a0e990544c1f8997cff92ab3378ab4a0a074d1803f1da7aded3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6ddad1a648298a0e990544c1f8997cff92ab3378ab4a0a074d1803f1da7aded3->leave($__internal_6ddad1a648298a0e990544c1f8997cff92ab3378ab4a0a074d1803f1da7aded3_prof);

        
        $__internal_bbfdb267812bc6168adc60d4d4585ea8e07c6fff76d62e09675be1995ce6b85c->leave($__internal_bbfdb267812bc6168adc60d4d4585ea8e07c6fff76d62e09675be1995ce6b85c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_172ba4f824681abb6b00bdcaf62a976f53a02a5f68efb1e6e535c31923012c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172ba4f824681abb6b00bdcaf62a976f53a02a5f68efb1e6e535c31923012c94->enter($__internal_172ba4f824681abb6b00bdcaf62a976f53a02a5f68efb1e6e535c31923012c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_860482d01e1e0d8bc6358d251cc1a0c84a10cd236ef00c12dc1db6f407798905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_860482d01e1e0d8bc6358d251cc1a0c84a10cd236ef00c12dc1db6f407798905->enter($__internal_860482d01e1e0d8bc6358d251cc1a0c84a10cd236ef00c12dc1db6f407798905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_860482d01e1e0d8bc6358d251cc1a0c84a10cd236ef00c12dc1db6f407798905->leave($__internal_860482d01e1e0d8bc6358d251cc1a0c84a10cd236ef00c12dc1db6f407798905_prof);

        
        $__internal_172ba4f824681abb6b00bdcaf62a976f53a02a5f68efb1e6e535c31923012c94->leave($__internal_172ba4f824681abb6b00bdcaf62a976f53a02a5f68efb1e6e535c31923012c94_prof);

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
