<?php

/* admin/formulaireCollector.html.twig */
class __TwigTemplate_b507e3bf8f28e959804cd545b6f2da39ded095d6a97fcaadfba2f0ef5f5ee7f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/formulaireCollector.html.twig", 1);
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
        $__internal_8ee92062b883ef517786b6d0815e60eecd2e951e2d5d876f38a70fa800afed22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee92062b883ef517786b6d0815e60eecd2e951e2d5d876f38a70fa800afed22->enter($__internal_8ee92062b883ef517786b6d0815e60eecd2e951e2d5d876f38a70fa800afed22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/formulaireCollector.html.twig"));

        $__internal_27415e88cfb66b9b256c2d33bea97849a9c65dabe59e181f08ccfe3f34143904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27415e88cfb66b9b256c2d33bea97849a9c65dabe59e181f08ccfe3f34143904->enter($__internal_27415e88cfb66b9b256c2d33bea97849a9c65dabe59e181f08ccfe3f34143904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/formulaireCollector.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ee92062b883ef517786b6d0815e60eecd2e951e2d5d876f38a70fa800afed22->leave($__internal_8ee92062b883ef517786b6d0815e60eecd2e951e2d5d876f38a70fa800afed22_prof);

        
        $__internal_27415e88cfb66b9b256c2d33bea97849a9c65dabe59e181f08ccfe3f34143904->leave($__internal_27415e88cfb66b9b256c2d33bea97849a9c65dabe59e181f08ccfe3f34143904_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_c3df6936f8905611d65ca8cbec81c9963a92560beda02800db4db0e908ad30aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3df6936f8905611d65ca8cbec81c9963a92560beda02800db4db0e908ad30aa->enter($__internal_c3df6936f8905611d65ca8cbec81c9963a92560beda02800db4db0e908ad30aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_22a96907dee66e5d53f2ca42fc3eec44c6449957fa8809850f7f74a678efe948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22a96907dee66e5d53f2ca42fc3eec44c6449957fa8809850f7f74a678efe948->enter($__internal_22a96907dee66e5d53f2ca42fc3eec44c6449957fa8809850f7f74a678efe948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <form class=\"form-horizontal \" method=\"post\" >
        <fieldset>
            <legend style=\"text-align: center;\"><strong>";
        // line 5
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "idcollector", array())) {
            echo "Modification des informations du collecteur : ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "lastname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firstname", array()), "html", null, true);
        } else {
            echo "Ajout d'un collecteur";
        }
        echo "</strong></legend>
            <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"lastname\">Nom</label>  
                <div class=\"col-md-4\">
                    <input id=\"nom\" name=\"lastname\" type=\"text\" placeholder=\"Nom\" class=\"form-control input-md\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "lastname", array()), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"firstname\">Prénom</label>  
                <div class=\"col-md-4\">
                    <input id=\"prénom\" name=\"firstname\" type=\"text\" placeholder=\"Prénom\" class=\"form-control input-md\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firstname", array()), "html", null, true);
        echo "\">  
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"address\">Adresse</label>  
                <div class=\"col-md-4\">
                    <input id=\"adresse\" name=\"address\" type=\"text\" placeholder=\"Adresse\" class=\"form-control input-md\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "address", array()), "html", null, true);
        echo "\"> 
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"city\">Ville</label>  
                <div class=\"col-md-4\">
                    <input id=\"ville\" name=\"city\" type=\"text\" placeholder=\"ville\" class=\"form-control input-md\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "city", array()), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"postal_code\">Code postal</label>  
                <div class=\"col-md-4\">
                    <input id=\"codepostal\" name=\"postal_code\" type=\"text\" placeholder=\"Code postal\" class=\"form-control input-md\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "postal_code", array()), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"email\">Email</label>  
                <div class=\"col-md-4\">
                    <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"Email\" class=\"form-control input-md\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "email", array()), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"phone_number\">Numéro de téléphone</label>  
                <div class=\"col-md-4\">
                    <input id=\"telephone\" name=\"phone_number\" type=\"text\" placeholder=\"Numéro de téléphone\" class=\"form-control input-md\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phone_number", array()), "html", null, true);
        echo "\"> 
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"password\">Mot de passe</label>
                <div class=\"col-md-4\">
                    <input id=\"mot de passe\" name=\"password\" type=\"password\" placeholder=\"Mot de passe\" class=\"form-control input-md\">
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"password_confirm\">Confirmation du mot de passe</label>
                <div class=\"col-md-4\">
                    <input id=\"mot de passe\" name=\"password_confirm\" type=\"password\" placeholder=\"Confirmation du mot de passe\" class=\"form-control input-md\">
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"statut\">Statut</label>
                <div class=\"col-md-4\">
                    <select id=\"statut\" name=\"status\" class=\"form-control\">
                        <option value=\"salarié\">Collecteur</option>
                        <option value=\"admin\">collecteur &amp; administrateur</option>
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
        
        $__internal_22a96907dee66e5d53f2ca42fc3eec44c6449957fa8809850f7f74a678efe948->leave($__internal_22a96907dee66e5d53f2ca42fc3eec44c6449957fa8809850f7f74a678efe948_prof);

        
        $__internal_c3df6936f8905611d65ca8cbec81c9963a92560beda02800db4db0e908ad30aa->leave($__internal_c3df6936f8905611d65ca8cbec81c9963a92560beda02800db4db0e908ad30aa_prof);

    }

    public function getTemplateName()
    {
        return "admin/formulaireCollector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 45,  112 => 39,  103 => 33,  94 => 27,  85 => 21,  76 => 15,  67 => 9,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
    <form class=\"form-horizontal \" method=\"post\" >
        <fieldset>
            <legend style=\"text-align: center;\"><strong>{% if collector.idcollector%}Modification des informations du collecteur : {{ collector.lastname }} {{ collector.firstname }}{% else %}Ajout d'un collecteur{% endif %}</strong></legend>
            <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"lastname\">Nom</label>  
                <div class=\"col-md-4\">
                    <input id=\"nom\" name=\"lastname\" type=\"text\" placeholder=\"Nom\" class=\"form-control input-md\" value=\"{{ collector.lastname }}\">
                </div>
            </div>
            <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"firstname\">Prénom</label>  
                <div class=\"col-md-4\">
                    <input id=\"prénom\" name=\"firstname\" type=\"text\" placeholder=\"Prénom\" class=\"form-control input-md\" value=\"{{ collector.firstname }}\">  
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"address\">Adresse</label>  
                <div class=\"col-md-4\">
                    <input id=\"adresse\" name=\"address\" type=\"text\" placeholder=\"Adresse\" class=\"form-control input-md\" value=\"{{ collector.address }}\"> 
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"city\">Ville</label>  
                <div class=\"col-md-4\">
                    <input id=\"ville\" name=\"city\" type=\"text\" placeholder=\"ville\" class=\"form-control input-md\" value=\"{{ collector.city }}\">
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"postal_code\">Code postal</label>  
                <div class=\"col-md-4\">
                    <input id=\"codepostal\" name=\"postal_code\" type=\"text\" placeholder=\"Code postal\" class=\"form-control input-md\" value=\"{{ collector.postal_code }}\">
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"email\">Email</label>  
                <div class=\"col-md-4\">
                    <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"Email\" class=\"form-control input-md\" value=\"{{ collector.email }}\">
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"phone_number\">Numéro de téléphone</label>  
                <div class=\"col-md-4\">
                    <input id=\"telephone\" name=\"phone_number\" type=\"text\" placeholder=\"Numéro de téléphone\" class=\"form-control input-md\" value=\"{{ collector.phone_number }}\"> 
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"password\">Mot de passe</label>
                <div class=\"col-md-4\">
                    <input id=\"mot de passe\" name=\"password\" type=\"password\" placeholder=\"Mot de passe\" class=\"form-control input-md\">
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"password_confirm\">Confirmation du mot de passe</label>
                <div class=\"col-md-4\">
                    <input id=\"mot de passe\" name=\"password_confirm\" type=\"password\" placeholder=\"Confirmation du mot de passe\" class=\"form-control input-md\">
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"statut\">Statut</label>
                <div class=\"col-md-4\">
                    <select id=\"statut\" name=\"status\" class=\"form-control\">
                        <option value=\"salarié\">Collecteur</option>
                        <option value=\"admin\">collecteur &amp; administrateur</option>
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
              
", "admin/formulaireCollector.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\templates\\admin\\formulaireCollector.html.twig");
    }
}
