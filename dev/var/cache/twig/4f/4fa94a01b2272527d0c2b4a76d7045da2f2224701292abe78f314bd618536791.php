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
        $__internal_29d91e820e6782d36cfa21a367d835ef0203ed439ad0de7b874f56eabcf12f71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d91e820e6782d36cfa21a367d835ef0203ed439ad0de7b874f56eabcf12f71->enter($__internal_29d91e820e6782d36cfa21a367d835ef0203ed439ad0de7b874f56eabcf12f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connexion.html.twig"));

        $__internal_1ade768c5be2224eb3f16474ff7dd65f39e98ba8721dab4dc43671cc6abc65cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ade768c5be2224eb3f16474ff7dd65f39e98ba8721dab4dc43671cc6abc65cd->enter($__internal_1ade768c5be2224eb3f16474ff7dd65f39e98ba8721dab4dc43671cc6abc65cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29d91e820e6782d36cfa21a367d835ef0203ed439ad0de7b874f56eabcf12f71->leave($__internal_29d91e820e6782d36cfa21a367d835ef0203ed439ad0de7b874f56eabcf12f71_prof);

        
        $__internal_1ade768c5be2224eb3f16474ff7dd65f39e98ba8721dab4dc43671cc6abc65cd->leave($__internal_1ade768c5be2224eb3f16474ff7dd65f39e98ba8721dab4dc43671cc6abc65cd_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4e72d4fd64395e7d09bf3e8fbac339bb0e76d687f29a59fadeef3597ff5f1bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e72d4fd64395e7d09bf3e8fbac339bb0e76d687f29a59fadeef3597ff5f1bbb->enter($__internal_4e72d4fd64395e7d09bf3e8fbac339bb0e76d687f29a59fadeef3597ff5f1bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_77c8373fcb1b113c12a724db8203eadf9d6f73150a930a7f6fff34c13eb1b353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77c8373fcb1b113c12a724db8203eadf9d6f73150a930a7f6fff34c13eb1b353->enter($__internal_77c8373fcb1b113c12a724db8203eadf9d6f73150a930a7f6fff34c13eb1b353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    
        <form class=\"form-horizontal\" method=\"post\">
            <fieldset>
                <legend style=\"text-align : center;\">Identifiez vous</legend>
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
        
        $__internal_77c8373fcb1b113c12a724db8203eadf9d6f73150a930a7f6fff34c13eb1b353->leave($__internal_77c8373fcb1b113c12a724db8203eadf9d6f73150a930a7f6fff34c13eb1b353_prof);

        
        $__internal_4e72d4fd64395e7d09bf3e8fbac339bb0e76d687f29a59fadeef3597ff5f1bbb->leave($__internal_4e72d4fd64395e7d09bf3e8fbac339bb0e76d687f29a59fadeef3597ff5f1bbb_prof);

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
    
        <form class=\"form-horizontal\" method=\"post\">
            <fieldset>
                <legend style=\"text-align : center;\">Identifiez vous</legend>
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
