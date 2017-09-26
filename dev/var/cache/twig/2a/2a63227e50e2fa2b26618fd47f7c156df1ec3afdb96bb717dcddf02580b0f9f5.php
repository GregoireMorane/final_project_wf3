<?php

/* admin/formulaireTraitementCollector.html.twig */
class __TwigTemplate_d463b60f40f38d6001719d4c9ad299f6e67168f6f99c87cd6a73226d9a4d911e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/formulaireTraitementCollector.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5ca6450182da632e90e4a8dd1d66c8f9ece150e9dcba3d79069500d736e6a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ca6450182da632e90e4a8dd1d66c8f9ece150e9dcba3d79069500d736e6a16->enter($__internal_a5ca6450182da632e90e4a8dd1d66c8f9ece150e9dcba3d79069500d736e6a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/formulaireTraitementCollector.html.twig"));

        $__internal_09542416ca993c828a909352370761cc9b438fe0c6cc9a3c70d41c7bd37ac7c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09542416ca993c828a909352370761cc9b438fe0c6cc9a3c70d41c7bd37ac7c3->enter($__internal_09542416ca993c828a909352370761cc9b438fe0c6cc9a3c70d41c7bd37ac7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/formulaireTraitementCollector.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5ca6450182da632e90e4a8dd1d66c8f9ece150e9dcba3d79069500d736e6a16->leave($__internal_a5ca6450182da632e90e4a8dd1d66c8f9ece150e9dcba3d79069500d736e6a16_prof);

        
        $__internal_09542416ca993c828a909352370761cc9b438fe0c6cc9a3c70d41c7bd37ac7c3->leave($__internal_09542416ca993c828a909352370761cc9b438fe0c6cc9a3c70d41c7bd37ac7c3_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_4c15f50f6ccb295e56bdcf96e64b000872896a6819dce53688d56998d9ab66b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c15f50f6ccb295e56bdcf96e64b000872896a6819dce53688d56998d9ab66b3->enter($__internal_4c15f50f6ccb295e56bdcf96e64b000872896a6819dce53688d56998d9ab66b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f289da2ad41dd7a421fa6d0cadeaa8c6c2b801f15a76fcd6758dfd34c3fc93f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f289da2ad41dd7a421fa6d0cadeaa8c6c2b801f15a76fcd6758dfd34c3fc93f1->enter($__internal_f289da2ad41dd7a421fa6d0cadeaa8c6c2b801f15a76fcd6758dfd34c3fc93f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <form class=\"form-horizontal\" method=\"post\">
    <fieldset>
        <legend style=\"text-align: center;\"><strong>Assignation d'un collecteur à un lieu de traitement</strong></legend>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"collector_idcollector\">Collecteur</label>
            <div class=\"col-md-4\">
                <select id=\"client\" name=\"collector_idcollector\" class=\"form-control\">
                    <option value=\"\">Choisissez un collecteur</option>
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collectors"] ?? $this->getContext($context, "collectors")));
        foreach ($context['_seq'] as $context["_key"] => $context["collector"]) {
            // line 12
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["collector"], "idcollector", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["collector"], "firstname", array()), "html", null, true);
            echo " </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collector'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                </select>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"processing_location_id_location_processing\">Lieu de traitement</label>
            <div class=\"col-md-4\">
                <select id=\"client\" name=\"processing_location_id_location_processing\" class=\"form-control\">
                    <option value=\"\">Lieu de collecte a assigner</option>
                     ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? $this->getContext($context, "locations")));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 23
            echo "                             <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "id_location_processing", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "processing_location", array()), "html", null, true);
            echo " </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                </select>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"button1id\"></label>
            <div class=\"col-md-8\">
                <button id=\"button1id\" name=\"button1id\" class=\"btn btn-success\" type=\"submit\">Valider</button>
            </div>
        </div>
    </fieldset>
</form>
";
        
        $__internal_f289da2ad41dd7a421fa6d0cadeaa8c6c2b801f15a76fcd6758dfd34c3fc93f1->leave($__internal_f289da2ad41dd7a421fa6d0cadeaa8c6c2b801f15a76fcd6758dfd34c3fc93f1_prof);

        
        $__internal_4c15f50f6ccb295e56bdcf96e64b000872896a6819dce53688d56998d9ab66b3->leave($__internal_4c15f50f6ccb295e56bdcf96e64b000872896a6819dce53688d56998d9ab66b3_prof);

    }

    public function getTemplateName()
    {
        return "admin/formulaireTraitementCollector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  88 => 23,  84 => 22,  74 => 14,  63 => 12,  59 => 11,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}
{% block content %}
    <form class=\"form-horizontal\" method=\"post\">
    <fieldset>
        <legend style=\"text-align: center;\"><strong>Assignation d'un collecteur à un lieu de traitement</strong></legend>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"collector_idcollector\">Collecteur</label>
            <div class=\"col-md-4\">
                <select id=\"client\" name=\"collector_idcollector\" class=\"form-control\">
                    <option value=\"\">Choisissez un collecteur</option>
                    {% for collector in collectors %}
                            <option value=\"{{collector.idcollector}}\">{{collector.firstname}} </option>
                    {% endfor %}
                </select>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"processing_location_id_location_processing\">Lieu de traitement</label>
            <div class=\"col-md-4\">
                <select id=\"client\" name=\"processing_location_id_location_processing\" class=\"form-control\">
                    <option value=\"\">Lieu de collecte a assigner</option>
                     {% for location in locations %}
                             <option value=\"{{location.id_location_processing}}\">{{location.processing_location}} </option>
                    {% endfor %}
                </select>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"button1id\"></label>
            <div class=\"col-md-8\">
                <button id=\"button1id\" name=\"button1id\" class=\"btn btn-success\" type=\"submit\">Valider</button>
            </div>
        </div>
    </fieldset>
</form>
{% endblock %}", "admin/formulaireTraitementCollector.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\templates\\admin\\formulaireTraitementCollector.html.twig");
    }
}
