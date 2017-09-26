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
        $__internal_8f7a9ea2856e2979483154e3f6bb83984153f04fdc17c7629db7b8c3e3058f0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f7a9ea2856e2979483154e3f6bb83984153f04fdc17c7629db7b8c3e3058f0c->enter($__internal_8f7a9ea2856e2979483154e3f6bb83984153f04fdc17c7629db7b8c3e3058f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listCollectorTraitement.html.twig"));

        $__internal_0612d7b2fe22bb9396976e46c33f94aeebd15ad0e106d647b5f62f45c570e57f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0612d7b2fe22bb9396976e46c33f94aeebd15ad0e106d647b5f62f45c570e57f->enter($__internal_0612d7b2fe22bb9396976e46c33f94aeebd15ad0e106d647b5f62f45c570e57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listCollectorTraitement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f7a9ea2856e2979483154e3f6bb83984153f04fdc17c7629db7b8c3e3058f0c->leave($__internal_8f7a9ea2856e2979483154e3f6bb83984153f04fdc17c7629db7b8c3e3058f0c_prof);

        
        $__internal_0612d7b2fe22bb9396976e46c33f94aeebd15ad0e106d647b5f62f45c570e57f->leave($__internal_0612d7b2fe22bb9396976e46c33f94aeebd15ad0e106d647b5f62f45c570e57f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_72d4a47de43bcfd92412a917b8db9b6cae4e974af2157d3df13f091dbf1e6cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d4a47de43bcfd92412a917b8db9b6cae4e974af2157d3df13f091dbf1e6cd3->enter($__internal_72d4a47de43bcfd92412a917b8db9b6cae4e974af2157d3df13f091dbf1e6cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e71dcda22259077ff864895b20c6d3dda4e176244aecd5d6370f08f5f1560889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e71dcda22259077ff864895b20c6d3dda4e176244aecd5d6370f08f5f1560889->enter($__internal_e71dcda22259077ff864895b20c6d3dda4e176244aecd5d6370f08f5f1560889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e71dcda22259077ff864895b20c6d3dda4e176244aecd5d6370f08f5f1560889->leave($__internal_e71dcda22259077ff864895b20c6d3dda4e176244aecd5d6370f08f5f1560889_prof);

        
        $__internal_72d4a47de43bcfd92412a917b8db9b6cae4e974af2157d3df13f091dbf1e6cd3->leave($__internal_72d4a47de43bcfd92412a917b8db9b6cae4e974af2157d3df13f091dbf1e6cd3_prof);

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
