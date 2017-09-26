<?php

/* admin/formulaireTraitementCollector.html.twig */
class __TwigTemplate_99611fbe835bf140e1f1d747b343debb45e9e5fbcd51fccaf8b8a49a8b72f8be extends Twig_Template
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
        $__internal_2c3c3c8652c6dd15b68b4f7ee95f9d935b2fbd49ffa000d0f3e5aa2a96ad1917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3c3c8652c6dd15b68b4f7ee95f9d935b2fbd49ffa000d0f3e5aa2a96ad1917->enter($__internal_2c3c3c8652c6dd15b68b4f7ee95f9d935b2fbd49ffa000d0f3e5aa2a96ad1917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/formulaireTraitementCollector.html.twig"));

        $__internal_32419e5f16fb1cb1b5dc24a30053bd721db70e0cb9ce8591421aa18b1db20dba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32419e5f16fb1cb1b5dc24a30053bd721db70e0cb9ce8591421aa18b1db20dba->enter($__internal_32419e5f16fb1cb1b5dc24a30053bd721db70e0cb9ce8591421aa18b1db20dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/formulaireTraitementCollector.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c3c3c8652c6dd15b68b4f7ee95f9d935b2fbd49ffa000d0f3e5aa2a96ad1917->leave($__internal_2c3c3c8652c6dd15b68b4f7ee95f9d935b2fbd49ffa000d0f3e5aa2a96ad1917_prof);

        
        $__internal_32419e5f16fb1cb1b5dc24a30053bd721db70e0cb9ce8591421aa18b1db20dba->leave($__internal_32419e5f16fb1cb1b5dc24a30053bd721db70e0cb9ce8591421aa18b1db20dba_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_f736793833d5519d23fab5a3bc5722f0076f7a22a6d1d973175447aeda70973f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f736793833d5519d23fab5a3bc5722f0076f7a22a6d1d973175447aeda70973f->enter($__internal_f736793833d5519d23fab5a3bc5722f0076f7a22a6d1d973175447aeda70973f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_13647e40d60d1f767d71282b881d94b47d380523df24362bf56e7aea61cc8bfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13647e40d60d1f767d71282b881d94b47d380523df24362bf56e7aea61cc8bfd->enter($__internal_13647e40d60d1f767d71282b881d94b47d380523df24362bf56e7aea61cc8bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_13647e40d60d1f767d71282b881d94b47d380523df24362bf56e7aea61cc8bfd->leave($__internal_13647e40d60d1f767d71282b881d94b47d380523df24362bf56e7aea61cc8bfd_prof);

        
        $__internal_f736793833d5519d23fab5a3bc5722f0076f7a22a6d1d973175447aeda70973f->leave($__internal_f736793833d5519d23fab5a3bc5722f0076f7a22a6d1d973175447aeda70973f_prof);

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
{% endblock %}", "admin/formulaireTraitementCollector.html.twig", "C:\\xampp\\htdocs\\projet_final\\final_project_wf3\\dev\\templates\\admin\\formulaireTraitementCollector.html.twig");
    }
}
