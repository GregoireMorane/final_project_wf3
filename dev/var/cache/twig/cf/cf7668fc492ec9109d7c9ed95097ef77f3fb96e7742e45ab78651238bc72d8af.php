<?php

/* admin/formulaireClient.html.twig */
class __TwigTemplate_dabe060cec72b4bb4360622490b72682b4bac94e969ba5ea0fcbdd064ac41bd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/formulaireClient.html.twig", 1);
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
        $__internal_fc7b85af37e3bd306e0634615e6d94635fa25e07e40ba0ccabcc71c0fbb8c115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc7b85af37e3bd306e0634615e6d94635fa25e07e40ba0ccabcc71c0fbb8c115->enter($__internal_fc7b85af37e3bd306e0634615e6d94635fa25e07e40ba0ccabcc71c0fbb8c115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/formulaireClient.html.twig"));

        $__internal_d4f7ea24747217eb454396a63b67086c00ba3db6d10ce991a746b3772827923f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4f7ea24747217eb454396a63b67086c00ba3db6d10ce991a746b3772827923f->enter($__internal_d4f7ea24747217eb454396a63b67086c00ba3db6d10ce991a746b3772827923f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/formulaireClient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc7b85af37e3bd306e0634615e6d94635fa25e07e40ba0ccabcc71c0fbb8c115->leave($__internal_fc7b85af37e3bd306e0634615e6d94635fa25e07e40ba0ccabcc71c0fbb8c115_prof);

        
        $__internal_d4f7ea24747217eb454396a63b67086c00ba3db6d10ce991a746b3772827923f->leave($__internal_d4f7ea24747217eb454396a63b67086c00ba3db6d10ce991a746b3772827923f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_fe109f0a92b00ae47d43d70d0b2e56702f45cffe8f06d8d25c4038a76a9c43e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe109f0a92b00ae47d43d70d0b2e56702f45cffe8f06d8d25c4038a76a9c43e9->enter($__internal_fe109f0a92b00ae47d43d70d0b2e56702f45cffe8f06d8d25c4038a76a9c43e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9f71e247bfb6b36a0c11b29c741b25fd0fcec53f62d969261c0e86b6a37bb231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f71e247bfb6b36a0c11b29c741b25fd0fcec53f62d969261c0e86b6a37bb231->enter($__internal_9f71e247bfb6b36a0c11b29c741b25fd0fcec53f62d969261c0e86b6a37bb231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<form class=\"form-horizontal\" method=\"post\">
    <fieldset>
        <legend style=\"text-align: center;\"><strong>Ajout d'un client</strong></legend>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"company\">Société</label>  
            <div class=\"col-md-4\">
                <input id=\"societe\" name=\"company\" type=\"text\" placeholder=\"Société\" class=\"form-control input-md\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "company", array()), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"start_date_contract\">Date début contrat</label>  
            <div class=\"col-md-4\">
                <input id=\"date\" name=\"start_date_contract\" type=\"date\" placeholder=\"Date début contrat format : 30/12/2000\" class=\"form-control input-md\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "startdatecontract", array()), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"siret\">Numéro SIRET</label>  
            <div class=\"col-md-4\">
                <input id=\"siret\" name=\"siret\" type=\"text\" placeholder=\"Numéro SIRET 14 chiffres\" class=\"form-control input-md\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "siret", array()), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"lastname\">Nom</label>  
            <div class=\"col-md-4\">
                <input id=\"nom\" name=\"lastname\" type=\"text\" placeholder=\"Nom\" class=\"form-control input-md\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "lastname", array()), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"firstname\">Prénom</label>  
            <div class=\"col-md-4\">
                <input id=\"prenom\" name=\"firstname\" type=\"text\" placeholder=\"Prénom\" class=\"form-control input-md\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "firstname", array()), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"email\">Email</label>  
            <div class=\"col-md-4\">
                <input id=\"email\" name=\"email\" type=\"email\" placeholder=\"Email\" class=\"form-control input-md\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "email", array()), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"phone_number\">Numéro de téléphone</label>  
            <div class=\"col-md-4\">
                <input id=\"tel\" name=\"phone_number\" type=\"tel\" placeholder=\"Numéro de téléphone\" class=\"form-control input-md\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "phonenumber", array()), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"billing_address\">Adresse de facturation</label>  
            <div class=\"col-md-4\">
                <input id=\"adresse_facturation\" name=\"billing_address\" type=\"text\" placeholder=\"Adresse de facturation\" class=\"form-control input-md\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "billingaddress", array()), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"postal_code\">Code Postal</label>  
            <div class=\"col-md-4\">
                <input id=\"code_postal\" name=\"postal_code\" type=\"text\" placeholder=\"Code Postal\" class=\"form-control input-md\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "postalcode", array()), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"city\">Ville</label>  
            <div class=\"col-md-4\">
                <input id=\"ville\" name=\"city\" type=\"text\" placeholder=\"Ville\" class=\"form-control input-md\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "city", array()), "html", null, true);
        echo "\">
    
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"country\">Pays</label>  
            <div class=\"col-md-4\">
                <input id=\"pays\" name=\"country\" type=\"text\" placeholder=\"Pays\" class=\"form-control input-md\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "country", array()), "html", null, true);
        echo "\">
    
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"password\">Mot de passe</label>  
            <div class=\"col-md-4\">
                <input id=\"password\" name=\"password\" type=\"password\" placeholder=\"Mot de passe\" class=\"form-control input-md\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"password_confirm\">Confirmation du mot de passe</label>  
            <div class=\"col-md-4\">
                <input id=\"password\" name=\"password_confirm\" type=\"password\" placeholder=\"Confirmation du mot de passe\" class=\"form-control input-md\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"is_active\">Actif</label>
            <div class=\"col-md-4\">
                <select id=\"actif\" name=\"is_active\" class=\"form-control\">
                    <option value=\"1\">Actif</option>
                    <option value=\"0\">Inactif</option>
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
";
        
        $__internal_9f71e247bfb6b36a0c11b29c741b25fd0fcec53f62d969261c0e86b6a37bb231->leave($__internal_9f71e247bfb6b36a0c11b29c741b25fd0fcec53f62d969261c0e86b6a37bb231_prof);

        
        $__internal_fe109f0a92b00ae47d43d70d0b2e56702f45cffe8f06d8d25c4038a76a9c43e9->leave($__internal_fe109f0a92b00ae47d43d70d0b2e56702f45cffe8f06d8d25c4038a76a9c43e9_prof);

    }

    public function getTemplateName()
    {
        return "admin/formulaireClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 70,  138 => 63,  129 => 57,  120 => 51,  111 => 45,  102 => 39,  93 => 33,  84 => 27,  75 => 21,  66 => 15,  57 => 9,  49 => 3,  40 => 2,  11 => 1,);
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
        <legend style=\"text-align: center;\"><strong>Ajout d'un client</strong></legend>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"company\">Société</label>  
            <div class=\"col-md-4\">
                <input id=\"societe\" name=\"company\" type=\"text\" placeholder=\"Société\" class=\"form-control input-md\" value=\"{{ client.company }}\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"start_date_contract\">Date début contrat</label>  
            <div class=\"col-md-4\">
                <input id=\"date\" name=\"start_date_contract\" type=\"date\" placeholder=\"Date début contrat format : 30/12/2000\" class=\"form-control input-md\" value=\"{{ client.startdatecontract }}\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"siret\">Numéro SIRET</label>  
            <div class=\"col-md-4\">
                <input id=\"siret\" name=\"siret\" type=\"text\" placeholder=\"Numéro SIRET 14 chiffres\" class=\"form-control input-md\" value=\"{{ client.siret }}\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"lastname\">Nom</label>  
            <div class=\"col-md-4\">
                <input id=\"nom\" name=\"lastname\" type=\"text\" placeholder=\"Nom\" class=\"form-control input-md\" value=\"{{ client.lastname }}\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"firstname\">Prénom</label>  
            <div class=\"col-md-4\">
                <input id=\"prenom\" name=\"firstname\" type=\"text\" placeholder=\"Prénom\" class=\"form-control input-md\" value=\"{{ client.firstname }}\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"email\">Email</label>  
            <div class=\"col-md-4\">
                <input id=\"email\" name=\"email\" type=\"email\" placeholder=\"Email\" class=\"form-control input-md\" value=\"{{ client.email }}\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"phone_number\">Numéro de téléphone</label>  
            <div class=\"col-md-4\">
                <input id=\"tel\" name=\"phone_number\" type=\"tel\" placeholder=\"Numéro de téléphone\" class=\"form-control input-md\" value=\"{{ client.phonenumber }}\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"billing_address\">Adresse de facturation</label>  
            <div class=\"col-md-4\">
                <input id=\"adresse_facturation\" name=\"billing_address\" type=\"text\" placeholder=\"Adresse de facturation\" class=\"form-control input-md\" value=\"{{ client.billingaddress }}\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"postal_code\">Code Postal</label>  
            <div class=\"col-md-4\">
                <input id=\"code_postal\" name=\"postal_code\" type=\"text\" placeholder=\"Code Postal\" class=\"form-control input-md\" value=\"{{ client.postalcode }}\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"city\">Ville</label>  
            <div class=\"col-md-4\">
                <input id=\"ville\" name=\"city\" type=\"text\" placeholder=\"Ville\" class=\"form-control input-md\" value=\"{{ client.city }}\">
    
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"country\">Pays</label>  
            <div class=\"col-md-4\">
                <input id=\"pays\" name=\"country\" type=\"text\" placeholder=\"Pays\" class=\"form-control input-md\" value=\"{{ client.country }}\">
    
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"password\">Mot de passe</label>  
            <div class=\"col-md-4\">
                <input id=\"password\" name=\"password\" type=\"password\" placeholder=\"Mot de passe\" class=\"form-control input-md\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"password_confirm\">Confirmation du mot de passe</label>  
            <div class=\"col-md-4\">
                <input id=\"password\" name=\"password_confirm\" type=\"password\" placeholder=\"Confirmation du mot de passe\" class=\"form-control input-md\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"is_active\">Actif</label>
            <div class=\"col-md-4\">
                <select id=\"actif\" name=\"is_active\" class=\"form-control\">
                    <option value=\"1\">Actif</option>
                    <option value=\"0\">Inactif</option>
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
", "admin/formulaireClient.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\templates\\admin\\formulaireClient.html.twig");
    }
}
