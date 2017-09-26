<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_f20c820d69ae08283175354e37cc7118f074b382ccc53d7c09d9905b2b00ff82 extends Twig_Template
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
        $__internal_c0028c090edddf586b3e146762912508991b222171ed3fe552aaad0bd4389dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0028c090edddf586b3e146762912508991b222171ed3fe552aaad0bd4389dfb->enter($__internal_c0028c090edddf586b3e146762912508991b222171ed3fe552aaad0bd4389dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d03ac53348894a6e9f73932617bc2ca5580cc7a89c4db6c1cf4b68401dadfc3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d03ac53348894a6e9f73932617bc2ca5580cc7a89c4db6c1cf4b68401dadfc3f->enter($__internal_d03ac53348894a6e9f73932617bc2ca5580cc7a89c4db6c1cf4b68401dadfc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0028c090edddf586b3e146762912508991b222171ed3fe552aaad0bd4389dfb->leave($__internal_c0028c090edddf586b3e146762912508991b222171ed3fe552aaad0bd4389dfb_prof);

        
        $__internal_d03ac53348894a6e9f73932617bc2ca5580cc7a89c4db6c1cf4b68401dadfc3f->leave($__internal_d03ac53348894a6e9f73932617bc2ca5580cc7a89c4db6c1cf4b68401dadfc3f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6591979899ad49550ca91f63063e4a4b44bb3a6082bb6e38f0c057a65df06656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6591979899ad49550ca91f63063e4a4b44bb3a6082bb6e38f0c057a65df06656->enter($__internal_6591979899ad49550ca91f63063e4a4b44bb3a6082bb6e38f0c057a65df06656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_911fb5a63c5c4dd70548cc2c11217f96412aa49400f8290e04c18b249608177c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_911fb5a63c5c4dd70548cc2c11217f96412aa49400f8290e04c18b249608177c->enter($__internal_911fb5a63c5c4dd70548cc2c11217f96412aa49400f8290e04c18b249608177c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_911fb5a63c5c4dd70548cc2c11217f96412aa49400f8290e04c18b249608177c->leave($__internal_911fb5a63c5c4dd70548cc2c11217f96412aa49400f8290e04c18b249608177c_prof);

        
        $__internal_6591979899ad49550ca91f63063e4a4b44bb3a6082bb6e38f0c057a65df06656->leave($__internal_6591979899ad49550ca91f63063e4a4b44bb3a6082bb6e38f0c057a65df06656_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\projet_final\\final_project_wf3\\dev\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
