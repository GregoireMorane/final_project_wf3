<?php

/* connexion.html.twig */
class __TwigTemplate_8675e0cf97ea129fb373713d0c2a15da1999e49b7991b9c25fe8dc085eace9a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "connexion.html.twig", 1);
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
        $__internal_0fb4fb2bd5d18bea71ddbf01232d590f934ec72993451badfeb791908ec03fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb4fb2bd5d18bea71ddbf01232d590f934ec72993451badfeb791908ec03fca->enter($__internal_0fb4fb2bd5d18bea71ddbf01232d590f934ec72993451badfeb791908ec03fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connexion.html.twig"));

        $__internal_492096f3334bd88877b1e9579ee1c536e6a4b4809b96a7367685a814c5232e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_492096f3334bd88877b1e9579ee1c536e6a4b4809b96a7367685a814c5232e37->enter($__internal_492096f3334bd88877b1e9579ee1c536e6a4b4809b96a7367685a814c5232e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fb4fb2bd5d18bea71ddbf01232d590f934ec72993451badfeb791908ec03fca->leave($__internal_0fb4fb2bd5d18bea71ddbf01232d590f934ec72993451badfeb791908ec03fca_prof);

        
        $__internal_492096f3334bd88877b1e9579ee1c536e6a4b4809b96a7367685a814c5232e37->leave($__internal_492096f3334bd88877b1e9579ee1c536e6a4b4809b96a7367685a814c5232e37_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_56fe7b779d63fa383fd5b642a6785da707a3df10a2706e981c2cd9b3c0bcf3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56fe7b779d63fa383fd5b642a6785da707a3df10a2706e981c2cd9b3c0bcf3a7->enter($__internal_56fe7b779d63fa383fd5b642a6785da707a3df10a2706e981c2cd9b3c0bcf3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_00fc1b8c115d4af6ae6211dd1ccdcd940c24e148ac3346d797b722983cb96d38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00fc1b8c115d4af6ae6211dd1ccdcd940c24e148ac3346d797b722983cb96d38->enter($__internal_00fc1b8c115d4af6ae6211dd1ccdcd940c24e148ac3346d797b722983cb96d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
    <div class=\"clear\"></div>
        <form class=\"form-horizontal\" method=\"post\">
            <fieldset>
                <h3 style=\"text-align:center;color:black;\">Identifiez vous</h3>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"radios\">Vous êtes : </label>
                    <div class=\"col-md-4\">
                        <div class=\"radio\">
                            <label for=\"radios-0\">
                            <input type=\"radio\" name=\"radios\" id=\"radios-0\" value=\"client\">
                            Client
                            </label>
                        </div>
                        <div class=\"radio\">
                            <label for=\"radios-1\">
                              <input type=\"radio\" name=\"radios\" id=\"radios-1\" value=\"salarié\">
                              Collecteur
                            </label>
                        </div>
                        <div class=\"radio\">
                          <label for=\"radios-2\">
                            <input type=\"radio\" name=\"radios\" id=\"radios-2\" value=\"admin\">
                            Administrateur
                          </label>
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"email\">Votre identifiant</label>  
                    <div class=\"col-md-4\">
                        <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"Email\" class=\"form-control input-md\">
                        <span>Identifiant oublié : Merci de contacter Les Alchimistes</span> 
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"password\">Votre mot de passe</label>  
                    <div class=\"col-md-4\">
                        <input id=\"password\" name=\"password\" type=\"password\" placeholder=\"Mot de passe\" class=\"form-control input-md\">
                        <span>Mot de passe oublié : Merci de contacter Les Alchimistes</span>  
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"submitButton\"></label>
                    <div class=\"col-md-4\">
                      <button id=\"submitButton\" name=\"submitButton\" class=\"btn btn-primary\" type=\"submit\">Connexion à votre espace</button>
                    </div>
                </div>
            </fieldset>
        </form>
    
";
        
        $__internal_00fc1b8c115d4af6ae6211dd1ccdcd940c24e148ac3346d797b722983cb96d38->leave($__internal_00fc1b8c115d4af6ae6211dd1ccdcd940c24e148ac3346d797b722983cb96d38_prof);

        
        $__internal_56fe7b779d63fa383fd5b642a6785da707a3df10a2706e981c2cd9b3c0bcf3a7->leave($__internal_56fe7b779d63fa383fd5b642a6785da707a3df10a2706e981c2cd9b3c0bcf3a7_prof);

    }

    public function getTemplateName()
    {
        return "connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
    <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
    <div class=\"clear\"></div>
        <form class=\"form-horizontal\" method=\"post\">
            <fieldset>
                <h3 style=\"text-align:center;color:black;\">Identifiez vous</h3>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"radios\">Vous êtes : </label>
                    <div class=\"col-md-4\">
                        <div class=\"radio\">
                            <label for=\"radios-0\">
                            <input type=\"radio\" name=\"radios\" id=\"radios-0\" value=\"client\">
                            Client
                            </label>
                        </div>
                        <div class=\"radio\">
                            <label for=\"radios-1\">
                              <input type=\"radio\" name=\"radios\" id=\"radios-1\" value=\"salarié\">
                              Collecteur
                            </label>
                        </div>
                        <div class=\"radio\">
                          <label for=\"radios-2\">
                            <input type=\"radio\" name=\"radios\" id=\"radios-2\" value=\"admin\">
                            Administrateur
                          </label>
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"email\">Votre identifiant</label>  
                    <div class=\"col-md-4\">
                        <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"Email\" class=\"form-control input-md\">
                        <span>Identifiant oublié : Merci de contacter Les Alchimistes</span> 
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"password\">Votre mot de passe</label>  
                    <div class=\"col-md-4\">
                        <input id=\"password\" name=\"password\" type=\"password\" placeholder=\"Mot de passe\" class=\"form-control input-md\">
                        <span>Mot de passe oublié : Merci de contacter Les Alchimistes</span>  
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"submitButton\"></label>
                    <div class=\"col-md-4\">
                      <button id=\"submitButton\" name=\"submitButton\" class=\"btn btn-primary\" type=\"submit\">Connexion à votre espace</button>
                    </div>
                </div>
            </fieldset>
        </form>
    
{% endblock %}
", "connexion.html.twig", "C:\\xampp\\htdocs\\projet_final\\final_project_wf3\\dev\\templates\\connexion.html.twig");
    }
}
