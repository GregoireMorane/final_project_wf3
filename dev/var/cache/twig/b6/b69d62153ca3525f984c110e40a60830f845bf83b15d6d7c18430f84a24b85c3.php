<?php

/* admin/formulaireClient.html.twig */
class __TwigTemplate_f4dd6a3545713cc83e5a69608f2322fc64590dcbbf1ec724bc0a26e9243f8c04 extends Twig_Template
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
        $__internal_348bddf0493396aceff793eca0a0fec2716c290d04e26b24b3324752c7f6263e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348bddf0493396aceff793eca0a0fec2716c290d04e26b24b3324752c7f6263e->enter($__internal_348bddf0493396aceff793eca0a0fec2716c290d04e26b24b3324752c7f6263e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/formulaireClient.html.twig"));

        $__internal_47d8d5e5fed77245886aac61899852c1020ed12d0acacb4e78baf874ec10e49a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d8d5e5fed77245886aac61899852c1020ed12d0acacb4e78baf874ec10e49a->enter($__internal_47d8d5e5fed77245886aac61899852c1020ed12d0acacb4e78baf874ec10e49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/formulaireClient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_348bddf0493396aceff793eca0a0fec2716c290d04e26b24b3324752c7f6263e->leave($__internal_348bddf0493396aceff793eca0a0fec2716c290d04e26b24b3324752c7f6263e_prof);

        
        $__internal_47d8d5e5fed77245886aac61899852c1020ed12d0acacb4e78baf874ec10e49a->leave($__internal_47d8d5e5fed77245886aac61899852c1020ed12d0acacb4e78baf874ec10e49a_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_ec7ec1800b5a78668442722a84fcc3f015940a9bf272b4542058d6bec7e870a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7ec1800b5a78668442722a84fcc3f015940a9bf272b4542058d6bec7e870a8->enter($__internal_ec7ec1800b5a78668442722a84fcc3f015940a9bf272b4542058d6bec7e870a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d17fe63bdd364f5e144c2c9b6ea95eb507829b9deae0ba092b5b85002d943e54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d17fe63bdd364f5e144c2c9b6ea95eb507829b9deae0ba092b5b85002d943e54->enter($__internal_d17fe63bdd364f5e144c2c9b6ea95eb507829b9deae0ba092b5b85002d943e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_d17fe63bdd364f5e144c2c9b6ea95eb507829b9deae0ba092b5b85002d943e54->leave($__internal_d17fe63bdd364f5e144c2c9b6ea95eb507829b9deae0ba092b5b85002d943e54_prof);

        
        $__internal_ec7ec1800b5a78668442722a84fcc3f015940a9bf272b4542058d6bec7e870a8->leave($__internal_ec7ec1800b5a78668442722a84fcc3f015940a9bf272b4542058d6bec7e870a8_prof);

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
", "admin/formulaireClient.html.twig", "C:\\xampp\\htdocs\\projet_final\\final_project_wf3\\dev\\templates\\admin\\formulaireClient.html.twig");
    }
}
