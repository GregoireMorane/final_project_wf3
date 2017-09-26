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
        $__internal_e4cb655c34601c80cea0e6099968f30657c731695bef951e11f8986f2a26c1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4cb655c34601c80cea0e6099968f30657c731695bef951e11f8986f2a26c1b2->enter($__internal_e4cb655c34601c80cea0e6099968f30657c731695bef951e11f8986f2a26c1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/formulaireLieuTraitement.html.twig"));

        $__internal_02f5f7faa23fac836a15fddfb7b8022e7f31735b42a063e65fd5f2682a3da6bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f5f7faa23fac836a15fddfb7b8022e7f31735b42a063e65fd5f2682a3da6bb->enter($__internal_02f5f7faa23fac836a15fddfb7b8022e7f31735b42a063e65fd5f2682a3da6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/formulaireLieuTraitement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4cb655c34601c80cea0e6099968f30657c731695bef951e11f8986f2a26c1b2->leave($__internal_e4cb655c34601c80cea0e6099968f30657c731695bef951e11f8986f2a26c1b2_prof);

        
        $__internal_02f5f7faa23fac836a15fddfb7b8022e7f31735b42a063e65fd5f2682a3da6bb->leave($__internal_02f5f7faa23fac836a15fddfb7b8022e7f31735b42a063e65fd5f2682a3da6bb_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_34909fc96c821578163fab1616b0439a3e6c40ea2e947dfc0dcab67bcdb2d86d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34909fc96c821578163fab1616b0439a3e6c40ea2e947dfc0dcab67bcdb2d86d->enter($__internal_34909fc96c821578163fab1616b0439a3e6c40ea2e947dfc0dcab67bcdb2d86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c175cf26f665d24221b889394e3720b0efde5ecb2cf0bc200f56e0986d640c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c175cf26f665d24221b889394e3720b0efde5ecb2cf0bc200f56e0986d640c96->enter($__internal_c175cf26f665d24221b889394e3720b0efde5ecb2cf0bc200f56e0986d640c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_c175cf26f665d24221b889394e3720b0efde5ecb2cf0bc200f56e0986d640c96->leave($__internal_c175cf26f665d24221b889394e3720b0efde5ecb2cf0bc200f56e0986d640c96_prof);

        
        $__internal_34909fc96c821578163fab1616b0439a3e6c40ea2e947dfc0dcab67bcdb2d86d->leave($__internal_34909fc96c821578163fab1616b0439a3e6c40ea2e947dfc0dcab67bcdb2d86d_prof);

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
