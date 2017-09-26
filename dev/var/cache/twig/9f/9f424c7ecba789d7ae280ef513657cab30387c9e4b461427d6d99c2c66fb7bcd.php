<?php

/* collector/formulaireOutputCompost.html.twig */
class __TwigTemplate_f3205cd0a6d59299c977962d71f6ae299c9007e035b945ae11b7bb0dc7e6ffb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "collector/formulaireOutputCompost.html.twig", 1);
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
        $__internal_3804059b1b4daf7dd76d3e07b6bdf021815988ac8440e58add0d9ebf158726f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3804059b1b4daf7dd76d3e07b6bdf021815988ac8440e58add0d9ebf158726f2->enter($__internal_3804059b1b4daf7dd76d3e07b6bdf021815988ac8440e58add0d9ebf158726f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collector/formulaireOutputCompost.html.twig"));

        $__internal_b848eecd76a870c4b5d1d8ae8918d4009e8aec90b8fdacec26268071dee19b4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b848eecd76a870c4b5d1d8ae8918d4009e8aec90b8fdacec26268071dee19b4e->enter($__internal_b848eecd76a870c4b5d1d8ae8918d4009e8aec90b8fdacec26268071dee19b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collector/formulaireOutputCompost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3804059b1b4daf7dd76d3e07b6bdf021815988ac8440e58add0d9ebf158726f2->leave($__internal_3804059b1b4daf7dd76d3e07b6bdf021815988ac8440e58add0d9ebf158726f2_prof);

        
        $__internal_b848eecd76a870c4b5d1d8ae8918d4009e8aec90b8fdacec26268071dee19b4e->leave($__internal_b848eecd76a870c4b5d1d8ae8918d4009e8aec90b8fdacec26268071dee19b4e_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_9e8c5213a64b624d0ba9066f482eac9560033c75bec13cfe2d086d7cb7bf9ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8c5213a64b624d0ba9066f482eac9560033c75bec13cfe2d086d7cb7bf9ade->enter($__internal_9e8c5213a64b624d0ba9066f482eac9560033c75bec13cfe2d086d7cb7bf9ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fe95d240b238ed10f91b096ea94b212497680d1848aa2861d516e5bbace52337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe95d240b238ed10f91b096ea94b212497680d1848aa2861d516e5bbace52337->enter($__internal_fe95d240b238ed10f91b096ea94b212497680d1848aa2861d516e5bbace52337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<form class=\"form-horizontal\" method=\"post\">
    <fieldset>
        <legend style=\"text-align: center;\"><strong>Formulaire sortie du compost</strong></legend>
        ";
        // line 12
        echo "        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"quantity_exit\">Poids</label>  
            <div class=\"col-md-4\">
                <input id=\"poids\" name=\"quantity_exit\" type=\"text\" placeholder=\"Poids en kg\" class=\"form-control input-md\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["output"] ?? $this->getContext($context, "output")), "quantity_exit", array()), "html", null, true);
        echo "\"> 
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"collector_idcollector\">Collecteur</label>
            <div class=\"col-md-4\">
                <select id=\"client\" name=\"collector_idcollector\" class=\"form-control\">
                    <option value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "idcollector", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "fullname", array()), "html", null, true);
        echo "</option>
                    ";
        // line 26
        echo "                </select>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"location_processing_idlocation_processing\">Lieu de traitement</label>
            <div class=\"col-md-4\">
                <select id=\"client\" name=\"location_processing_idlocation_processing\" class=\"form-control\">
                    <option value=\"\">Choisissez un lieu de traitement</option>
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? $this->getContext($context, "locations")));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 35
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "id_location_processing", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "processing_location", array()), "html", null, true);
            echo " </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </select>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"valider\"></label>
            <div class=\"col-md-8\">
                <button id=\"valider\" name=\"valider\" class=\"btn btn-success\" type=\"submit\">Valider</button>
            </div>
        </div>
    </fieldset>
</form>
";
        
        $__internal_fe95d240b238ed10f91b096ea94b212497680d1848aa2861d516e5bbace52337->leave($__internal_fe95d240b238ed10f91b096ea94b212497680d1848aa2861d516e5bbace52337_prof);

        
        $__internal_9e8c5213a64b624d0ba9066f482eac9560033c75bec13cfe2d086d7cb7bf9ade->leave($__internal_9e8c5213a64b624d0ba9066f482eac9560033c75bec13cfe2d086d7cb7bf9ade_prof);

    }

    public function getTemplateName()
    {
        return "collector/formulaireOutputCompost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 37,  89 => 35,  85 => 34,  75 => 26,  69 => 22,  59 => 15,  54 => 12,  49 => 3,  40 => 2,  11 => 1,);
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
        <legend style=\"text-align: center;\"><strong>Formulaire sortie du compost</strong></legend>
        {#<div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"output_datetime\">Date de sortie</label>  
            <div class=\"col-md-4\">
                <input id=\"poids\" name=\"output_datetime\" type=\"text\" placeholder=\"Date de sortie\" class=\"form-control input-md\" value=\"{{ output.output_datetime }}\"> 
            </div>
        </div>#}
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"quantity_exit\">Poids</label>  
            <div class=\"col-md-4\">
                <input id=\"poids\" name=\"quantity_exit\" type=\"text\" placeholder=\"Poids en kg\" class=\"form-control input-md\" value=\"{{ output.quantity_exit }}\"> 
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"collector_idcollector\">Collecteur</label>
            <div class=\"col-md-4\">
                <select id=\"client\" name=\"collector_idcollector\" class=\"form-control\">
                    <option value=\"{{user.idcollector}}\">{{user.fullname}}</option>
                    {#{% for collector in collectors %}
                             <option value=\"{{collector.idcollector}}\">{{collector.firstname}} {{collector.lastname}}</option>
                    {% endfor %}#}
                </select>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"location_processing_idlocation_processing\">Lieu de traitement</label>
            <div class=\"col-md-4\">
                <select id=\"client\" name=\"location_processing_idlocation_processing\" class=\"form-control\">
                    <option value=\"\">Choisissez un lieu de traitement</option>
                    {% for location in locations %}
                            <option value=\"{{location.id_location_processing}}\">{{location.processing_location}} </option>
                    {% endfor %}
                </select>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"valider\"></label>
            <div class=\"col-md-8\">
                <button id=\"valider\" name=\"valider\" class=\"btn btn-success\" type=\"submit\">Valider</button>
            </div>
        </div>
    </fieldset>
</form>
{% endblock %}
", "collector/formulaireOutputCompost.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\templates\\collector\\formulaireOutputCompost.html.twig");
    }
}
