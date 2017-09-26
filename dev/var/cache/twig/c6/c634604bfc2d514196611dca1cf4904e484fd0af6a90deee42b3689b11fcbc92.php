<?php

/* listCollectorTraitement.html.twig */
class __TwigTemplate_557034a7671e9c43bb561f875b8373579f9589ed74dd632a80f9f8107824846b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "listCollectorTraitement.html.twig", 1);
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
        $__internal_8634a6aaaf9cb2034b20ae94ef1aa9649dcd6deab7fb3c46e464574c01bbff28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8634a6aaaf9cb2034b20ae94ef1aa9649dcd6deab7fb3c46e464574c01bbff28->enter($__internal_8634a6aaaf9cb2034b20ae94ef1aa9649dcd6deab7fb3c46e464574c01bbff28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listCollectorTraitement.html.twig"));

        $__internal_f12777be48d270e56d2a879fbcb6a4626d56c0f26c9e735ed947c8a153237a39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f12777be48d270e56d2a879fbcb6a4626d56c0f26c9e735ed947c8a153237a39->enter($__internal_f12777be48d270e56d2a879fbcb6a4626d56c0f26c9e735ed947c8a153237a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listCollectorTraitement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8634a6aaaf9cb2034b20ae94ef1aa9649dcd6deab7fb3c46e464574c01bbff28->leave($__internal_8634a6aaaf9cb2034b20ae94ef1aa9649dcd6deab7fb3c46e464574c01bbff28_prof);

        
        $__internal_f12777be48d270e56d2a879fbcb6a4626d56c0f26c9e735ed947c8a153237a39->leave($__internal_f12777be48d270e56d2a879fbcb6a4626d56c0f26c9e735ed947c8a153237a39_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_df1fd5e66a3b4a80c96b281068b943eabffa8f92573e125ffd99e62a844d9d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1fd5e66a3b4a80c96b281068b943eabffa8f92573e125ffd99e62a844d9d5d->enter($__internal_df1fd5e66a3b4a80c96b281068b943eabffa8f92573e125ffd99e62a844d9d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8fc021bf521c42e7db191156266f55d7bc303c32ac75345f1e03d5f1afaded8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fc021bf521c42e7db191156266f55d7bc303c32ac75345f1e03d5f1afaded8e->enter($__internal_8fc021bf521c42e7db191156266f55d7bc303c32ac75345f1e03d5f1afaded8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
    <div class=\"\">
        <div class=\"col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
            <h1>Lien Collecteurs lieux traitement</h1>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registertraitementcollector");
        echo "\"><span>Ajouter un lien</span></a>
            <br><br>
        </div>
        <div class=\"col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
        <table class=\"table\">
            <tr>
                <th>Nom du lieu</th>
                <th>Nom du collecteur</th>
                <th>Prénom du collecteur</th>
            </tr>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lieux"] ?? $this->getContext($context, "lieux")));
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 18
            echo "                <tr>
                    <th>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "traitement_nom", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "collector_lastname", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "collector_firstname", array()), "html", null, true);
            echo "</th>
                     <th><a  href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registertraitementcollector", array("id" => $this->getAttribute($context["lieu"], "id_collector_has_processing_location", array()))), "html", null, true);
            echo "\" style=\"font-weight: bold\">Modifier</a></th>
                    <th><a  href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listetraitementcollectordelete", array("id" => $this->getAttribute($context["lieu"], "id_collector_has_processing_location", array()))), "html", null, true);
            echo "\" style=\"font-weight: bold\">Supprimer</a></th>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </table>
    </div>
    </div>
";
        
        $__internal_8fc021bf521c42e7db191156266f55d7bc303c32ac75345f1e03d5f1afaded8e->leave($__internal_8fc021bf521c42e7db191156266f55d7bc303c32ac75345f1e03d5f1afaded8e_prof);

        
        $__internal_df1fd5e66a3b4a80c96b281068b943eabffa8f92573e125ffd99e62a844d9d5d->leave($__internal_df1fd5e66a3b4a80c96b281068b943eabffa8f92573e125ffd99e62a844d9d5d_prof);

    }

    public function getTemplateName()
    {
        return "listCollectorTraitement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  72 => 18,  68 => 17,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\"%}
{% block content %}
    <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
    <div class=\"\">
        <div class=\"col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
            <h1>Lien Collecteurs lieux traitement</h1>
            <a href=\"{{ path('registertraitementcollector') }}\"><span>Ajouter un lien</span></a>
            <br><br>
        </div>
        <div class=\"col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
        <table class=\"table\">
            <tr>
                <th>Nom du lieu</th>
                <th>Nom du collecteur</th>
                <th>Prénom du collecteur</th>
            </tr>
            {% for lieu in lieux %}
                <tr>
                    <th>{{ lieu.traitement_nom }}</th>
                    <th>{{ lieu.collector_lastname }}</th>
                    <th>{{ lieu.collector_firstname }}</th>
                     <th><a  href=\"{{path ('registertraitementcollector', {id: lieu.id_collector_has_processing_location}) }}\" style=\"font-weight: bold\">Modifier</a></th>
                    <th><a  href=\"{{path ('listetraitementcollectordelete', {id: lieu.id_collector_has_processing_location}) }}\" style=\"font-weight: bold\">Supprimer</a></th>
                </tr>
            {% endfor %}
        </table>
    </div>
    </div>
{% endblock %}", "listCollectorTraitement.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\templates\\listCollectorTraitement.html.twig");
    }
}
