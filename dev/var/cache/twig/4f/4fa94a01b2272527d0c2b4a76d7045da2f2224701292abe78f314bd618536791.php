<?php

/* connexion.html.twig */
class __TwigTemplate_67e5ca0139c701b7e410b6036dea6e996db008793c056740c707269aef64d838 extends Twig_Template
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
        $__internal_8e9e7e7ab07b2d8255f8c7cdc60dbd6ac3a7f03326e723a4413faac395181645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e9e7e7ab07b2d8255f8c7cdc60dbd6ac3a7f03326e723a4413faac395181645->enter($__internal_8e9e7e7ab07b2d8255f8c7cdc60dbd6ac3a7f03326e723a4413faac395181645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connexion.html.twig"));

        $__internal_2bd7736f079fe01984796506ec0d09537f6e202acacb588d0f8b7b78b890aed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd7736f079fe01984796506ec0d09537f6e202acacb588d0f8b7b78b890aed4->enter($__internal_2bd7736f079fe01984796506ec0d09537f6e202acacb588d0f8b7b78b890aed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e9e7e7ab07b2d8255f8c7cdc60dbd6ac3a7f03326e723a4413faac395181645->leave($__internal_8e9e7e7ab07b2d8255f8c7cdc60dbd6ac3a7f03326e723a4413faac395181645_prof);

        
        $__internal_2bd7736f079fe01984796506ec0d09537f6e202acacb588d0f8b7b78b890aed4->leave($__internal_2bd7736f079fe01984796506ec0d09537f6e202acacb588d0f8b7b78b890aed4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9b932f41cc8dd6c250c0557aa518d08a35952841e4b36a5d921da36c24419162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b932f41cc8dd6c250c0557aa518d08a35952841e4b36a5d921da36c24419162->enter($__internal_9b932f41cc8dd6c250c0557aa518d08a35952841e4b36a5d921da36c24419162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d9439fd92cde3b25821f8eeed2bee3ed103dcf97bc644776bef099077b5f512a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9439fd92cde3b25821f8eeed2bee3ed103dcf97bc644776bef099077b5f512a->enter($__internal_d9439fd92cde3b25821f8eeed2bee3ed103dcf97bc644776bef099077b5f512a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_d9439fd92cde3b25821f8eeed2bee3ed103dcf97bc644776bef099077b5f512a->leave($__internal_d9439fd92cde3b25821f8eeed2bee3ed103dcf97bc644776bef099077b5f512a_prof);

        
        $__internal_9b932f41cc8dd6c250c0557aa518d08a35952841e4b36a5d921da36c24419162->leave($__internal_9b932f41cc8dd6c250c0557aa518d08a35952841e4b36a5d921da36c24419162_prof);

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
", "connexion.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\templates\\connexion.html.twig");
    }
}
