<?php

/* admin/formulaireCollector.html.twig */
class __TwigTemplate_29daf6a067f872e3758a84870cd24278721b5886218ed99fe6e3816c779c6348 extends Twig_Template
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
        $__internal_e744bde93dd00e5b39c9d04b24142f44459674bd8ceb198f6f708ee71bf08e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e744bde93dd00e5b39c9d04b24142f44459674bd8ceb198f6f708ee71bf08e47->enter($__internal_e744bde93dd00e5b39c9d04b24142f44459674bd8ceb198f6f708ee71bf08e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/formulaireCollector.html.twig"));

        $__internal_f0bd586b949b7a66691e02e8848db0cc65fb554019136a44ec95c1dec04694e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0bd586b949b7a66691e02e8848db0cc65fb554019136a44ec95c1dec04694e3->enter($__internal_f0bd586b949b7a66691e02e8848db0cc65fb554019136a44ec95c1dec04694e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/formulaireCollector.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e744bde93dd00e5b39c9d04b24142f44459674bd8ceb198f6f708ee71bf08e47->leave($__internal_e744bde93dd00e5b39c9d04b24142f44459674bd8ceb198f6f708ee71bf08e47_prof);

        
        $__internal_f0bd586b949b7a66691e02e8848db0cc65fb554019136a44ec95c1dec04694e3->leave($__internal_f0bd586b949b7a66691e02e8848db0cc65fb554019136a44ec95c1dec04694e3_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_5418a642500731729468fe55f87c81d3267d5ebead592e48db96b7b33e04e9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5418a642500731729468fe55f87c81d3267d5ebead592e48db96b7b33e04e9b1->enter($__internal_5418a642500731729468fe55f87c81d3267d5ebead592e48db96b7b33e04e9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_760f649ae5757b3c4f4c1a2b5ec93ae823c4928696ce419fdc2feae9ccb4401d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_760f649ae5757b3c4f4c1a2b5ec93ae823c4928696ce419fdc2feae9ccb4401d->enter($__internal_760f649ae5757b3c4f4c1a2b5ec93ae823c4928696ce419fdc2feae9ccb4401d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    <input id=\"telephone\" name=\"phone_number\" type=\"tel\" placeholder=\"Numéro de téléphone\" class=\"form-control input-md\" value=\"";
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
        
        $__internal_760f649ae5757b3c4f4c1a2b5ec93ae823c4928696ce419fdc2feae9ccb4401d->leave($__internal_760f649ae5757b3c4f4c1a2b5ec93ae823c4928696ce419fdc2feae9ccb4401d_prof);

        
        $__internal_5418a642500731729468fe55f87c81d3267d5ebead592e48db96b7b33e04e9b1->leave($__internal_5418a642500731729468fe55f87c81d3267d5ebead592e48db96b7b33e04e9b1_prof);

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
                    <input id=\"telephone\" name=\"phone_number\" type=\"tel\" placeholder=\"Numéro de téléphone\" class=\"form-control input-md\" value=\"{{ collector.phone_number }}\"> 
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
              
", "admin/formulaireCollector.html.twig", "C:\\xampp\\htdocs\\projet_final\\final_project_wf3\\dev\\templates\\admin\\formulaireCollector.html.twig");
    }
}
