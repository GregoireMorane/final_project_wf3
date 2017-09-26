<?php

/* admin/formulaireLieuTraitement.html.twig */
class __TwigTemplate_5f8f9778bab5bff78b27b2bd24567c2ba44aac30635a53b0aa213f5347d41b94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/formulaireLieuTraitement.html.twig", 1);
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
        $__internal_cfc991ddf8fb863bec18fd9b86df035917f9d1ca305b98bbf67362f04c3ae549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc991ddf8fb863bec18fd9b86df035917f9d1ca305b98bbf67362f04c3ae549->enter($__internal_cfc991ddf8fb863bec18fd9b86df035917f9d1ca305b98bbf67362f04c3ae549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/formulaireLieuTraitement.html.twig"));

        $__internal_cdfe95cc91e08056cce77c89fa9641377bbaa8d8fa3291172ed0a9b3d5f1119a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdfe95cc91e08056cce77c89fa9641377bbaa8d8fa3291172ed0a9b3d5f1119a->enter($__internal_cdfe95cc91e08056cce77c89fa9641377bbaa8d8fa3291172ed0a9b3d5f1119a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/formulaireLieuTraitement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfc991ddf8fb863bec18fd9b86df035917f9d1ca305b98bbf67362f04c3ae549->leave($__internal_cfc991ddf8fb863bec18fd9b86df035917f9d1ca305b98bbf67362f04c3ae549_prof);

        
        $__internal_cdfe95cc91e08056cce77c89fa9641377bbaa8d8fa3291172ed0a9b3d5f1119a->leave($__internal_cdfe95cc91e08056cce77c89fa9641377bbaa8d8fa3291172ed0a9b3d5f1119a_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_f11ec07f6082c860cee9f4f603dfc47a883533b370881330cdeae1b6e441c2d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11ec07f6082c860cee9f4f603dfc47a883533b370881330cdeae1b6e441c2d1->enter($__internal_f11ec07f6082c860cee9f4f603dfc47a883533b370881330cdeae1b6e441c2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b3677b3c413064db8622607eaec61b5e71c7c3301a8f366952157b8cfed9829d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3677b3c413064db8622607eaec61b5e71c7c3301a8f366952157b8cfed9829d->enter($__internal_b3677b3c413064db8622607eaec61b5e71c7c3301a8f366952157b8cfed9829d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<form class=\"form-horizontal\" method=\"post\">
    <fieldset>
        <legend style=\"text-align: center;\"><strong>";
        // line 5
        if ($this->getAttribute(($context["lieutraitement"] ?? $this->getContext($context, "lieutraitement")), "id_location_processing", array())) {
            echo "Modification du lieu de traitement : ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["lieutraitement"] ?? $this->getContext($context, "lieutraitement")), "processing_location", array()), "html", null, true);
        } else {
            echo "Ajout d'un lieu de traitement";
        }
        echo "</strong></legend>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"processing_location\">Lieu de traitement</label>  
            <div class=\"col-md-4\">
                <input id=\"lieu_traitement\" name=\"processing_location\" type=\"text\" placeholder=\"Lieu de traitement\" class=\"form-control input-md\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["lieutraitement"] ?? $this->getContext($context, "lieutraitement")), "processing_location", array()), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"processing_address\">Adresse traitement</label>  
            <div class=\"col-md-4\">
                <input id=\"adresse_traitement\" name=\"processing_address\" type=\"text\" placeholder=\"Adresse traitement\" class=\"form-control input-md\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["lieutraitement"] ?? $this->getContext($context, "lieutraitement")), "processing_address", array()), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"postal_code\">Code postal</label>  
            <div class=\"col-md-4\">
                <input id=\"code_postal\" name=\"postal_code\" type=\"text\" placeholder=\"Code postal\" class=\"form-control input-md\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["lieutraitement"] ?? $this->getContext($context, "lieutraitement")), "postal_code", array()), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"city\">Ville</label>  
            <div class=\"col-md-4\">
                <input id=\"ville\" name=\"city\" type=\"text\" placeholder=\"Ville\" class=\"form-control input-md\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["lieutraitement"] ?? $this->getContext($context, "lieutraitement")), "city", array()), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"country\">Pays</label>  
            <div class=\"col-md-4\">
                <input id=\"pays\" name=\"country\" type=\"text\" placeholder=\"Pays\" class=\"form-control input-md\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["lieutraitement"] ?? $this->getContext($context, "lieutraitement")), "country", array()), "html", null, true);
        echo "\">
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
        
        $__internal_b3677b3c413064db8622607eaec61b5e71c7c3301a8f366952157b8cfed9829d->leave($__internal_b3677b3c413064db8622607eaec61b5e71c7c3301a8f366952157b8cfed9829d_prof);

        
        $__internal_f11ec07f6082c860cee9f4f603dfc47a883533b370881330cdeae1b6e441c2d1->leave($__internal_f11ec07f6082c860cee9f4f603dfc47a883533b370881330cdeae1b6e441c2d1_prof);

    }

    public function getTemplateName()
    {
        return "admin/formulaireLieuTraitement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 33,  92 => 27,  83 => 21,  74 => 15,  65 => 9,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
        <legend style=\"text-align: center;\"><strong>{% if lieutraitement.id_location_processing%}Modification du lieu de traitement : {{ lieutraitement.processing_location }}{% else %}Ajout d'un lieu de traitement{% endif %}</strong></legend>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"processing_location\">Lieu de traitement</label>  
            <div class=\"col-md-4\">
                <input id=\"lieu_traitement\" name=\"processing_location\" type=\"text\" placeholder=\"Lieu de traitement\" class=\"form-control input-md\" value=\"{{ lieutraitement.processing_location }}\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"processing_address\">Adresse traitement</label>  
            <div class=\"col-md-4\">
                <input id=\"adresse_traitement\" name=\"processing_address\" type=\"text\" placeholder=\"Adresse traitement\" class=\"form-control input-md\" value=\"{{ lieutraitement.processing_address }}\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"postal_code\">Code postal</label>  
            <div class=\"col-md-4\">
                <input id=\"code_postal\" name=\"postal_code\" type=\"text\" placeholder=\"Code postal\" class=\"form-control input-md\" value=\"{{ lieutraitement.postal_code }}\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"city\">Ville</label>  
            <div class=\"col-md-4\">
                <input id=\"ville\" name=\"city\" type=\"text\" placeholder=\"Ville\" class=\"form-control input-md\" value=\"{{ lieutraitement.city }}\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"country\">Pays</label>  
            <div class=\"col-md-4\">
                <input id=\"pays\" name=\"country\" type=\"text\" placeholder=\"Pays\" class=\"form-control input-md\" value=\"{{ lieutraitement.country }}\">
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
{% endblock %}
", "admin/formulaireLieuTraitement.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\templates\\admin\\formulaireLieuTraitement.html.twig");
    }
}
