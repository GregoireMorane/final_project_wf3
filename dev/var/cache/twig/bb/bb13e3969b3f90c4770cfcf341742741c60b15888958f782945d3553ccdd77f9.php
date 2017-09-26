<?php

/* listCollector.html.twig */
class __TwigTemplate_61a03cec8b9562cd243581a532d738ad3977f31f4e2e1bbb25f0f538366b0a40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "listCollector.html.twig", 1);
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
        $__internal_a9046556248b7d99b330196736267cca26fabebf469f01e851b16cb4e7a2de41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9046556248b7d99b330196736267cca26fabebf469f01e851b16cb4e7a2de41->enter($__internal_a9046556248b7d99b330196736267cca26fabebf469f01e851b16cb4e7a2de41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listCollector.html.twig"));

        $__internal_0c777be403d0f29d9113a9f150f29a76ddcf7a5cdd784eeccebf5ea9db72d34f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c777be403d0f29d9113a9f150f29a76ddcf7a5cdd784eeccebf5ea9db72d34f->enter($__internal_0c777be403d0f29d9113a9f150f29a76ddcf7a5cdd784eeccebf5ea9db72d34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listCollector.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9046556248b7d99b330196736267cca26fabebf469f01e851b16cb4e7a2de41->leave($__internal_a9046556248b7d99b330196736267cca26fabebf469f01e851b16cb4e7a2de41_prof);

        
        $__internal_0c777be403d0f29d9113a9f150f29a76ddcf7a5cdd784eeccebf5ea9db72d34f->leave($__internal_0c777be403d0f29d9113a9f150f29a76ddcf7a5cdd784eeccebf5ea9db72d34f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_554d49134519e08d2184959a0a2a58d17bd1ade3eeb8f1d12e4b62c4b859c5f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_554d49134519e08d2184959a0a2a58d17bd1ade3eeb8f1d12e4b62c4b859c5f9->enter($__internal_554d49134519e08d2184959a0a2a58d17bd1ade3eeb8f1d12e4b62c4b859c5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ffb42606d1a8c2018b6240ae01be9194aa5f27cdd5677aa821bf92d46973dc9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb42606d1a8c2018b6240ae01be9194aa5f27cdd5677aa821bf92d46973dc9b->enter($__internal_ffb42606d1a8c2018b6240ae01be9194aa5f27cdd5677aa821bf92d46973dc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
    <div class=\"\">
        <div class=\"col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
            <h1>Collecteurs</h1>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registercollector");
        echo "\"><span>Ajouter un collecteur</span></a>
            <br><br>
        </div>
        <div class=\"col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
        <table class=\"table\">
            <tr style=\"font-weight: bold;\">
                <th>Nom</th>
                <th>Prénom</th>
                <th>email</th>
                <th>Numéro de téléphone</th>
                <th>Adresse</th>
                <th>Code Postal</th>
                <th>Ville</th>
                <th>Statut</th>
                <th>Mot de passe</th>
                <th></th>
                <th></th>
            </tr>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collectors"] ?? $this->getContext($context, "collectors")));
        foreach ($context['_seq'] as $context["_key"] => $context["collector"]) {
            // line 26
            echo "                <tr>
                    <th>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["collector"], "lastname", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["collector"], "firstname", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["collector"], "email", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["collector"], "phone_number", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["collector"], "address", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["collector"], "postal_code", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["collector"], "city", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["collector"], "status", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["collector"], "password", array()), "html", null, true);
            echo "</th>
                    <th><a  href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registercollector", array("id" => $this->getAttribute($context["collector"], "idcollector", array()))), "html", null, true);
            echo "\" style=\"font-weight: bold\">Modifier</a></th>
                    <th><a  href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listecollectordelete", array("id" => $this->getAttribute($context["collector"], "idcollector", array()))), "html", null, true);
            echo "\" style=\"font-weight: bold\">Supprimer</a></th>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collector'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
    </div>
    </div>
";
        
        $__internal_ffb42606d1a8c2018b6240ae01be9194aa5f27cdd5677aa821bf92d46973dc9b->leave($__internal_ffb42606d1a8c2018b6240ae01be9194aa5f27cdd5677aa821bf92d46973dc9b_prof);

        
        $__internal_554d49134519e08d2184959a0a2a58d17bd1ade3eeb8f1d12e4b62c4b859c5f9->leave($__internal_554d49134519e08d2184959a0a2a58d17bd1ade3eeb8f1d12e4b62c4b859c5f9_prof);

    }

    public function getTemplateName()
    {
        return "listCollector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 40,  123 => 37,  119 => 36,  115 => 35,  111 => 34,  107 => 33,  103 => 32,  99 => 31,  95 => 30,  91 => 29,  87 => 28,  83 => 27,  80 => 26,  76 => 25,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
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
            <h1>Collecteurs</h1>
            <a href=\"{{ path('registercollector') }}\"><span>Ajouter un collecteur</span></a>
            <br><br>
        </div>
        <div class=\"col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
        <table class=\"table\">
            <tr style=\"font-weight: bold;\">
                <th>Nom</th>
                <th>Prénom</th>
                <th>email</th>
                <th>Numéro de téléphone</th>
                <th>Adresse</th>
                <th>Code Postal</th>
                <th>Ville</th>
                <th>Statut</th>
                <th>Mot de passe</th>
                <th></th>
                <th></th>
            </tr>
            {% for collector in collectors %}
                <tr>
                    <th>{{ collector.lastname }}</th>
                    <th>{{ collector.firstname }}</th>
                    <th>{{ collector.email }}</th>
                    <th>{{ collector.phone_number }}</th>
                    <th>{{ collector.address }}</th>
                    <th>{{ collector.postal_code }}</th>
                    <th>{{ collector.city }}</th>
                    <th>{{ collector.status }}</th>
                    <th>{{ collector.password }}</th>
                    <th><a  href=\"{{path ('registercollector', {id: collector.idcollector}) }}\" style=\"font-weight: bold\">Modifier</a></th>
                    <th><a  href=\"{{path ('listecollectordelete', {id: collector.idcollector}) }}\" style=\"font-weight: bold\">Supprimer</a></th>
                </tr>
            {% endfor %}
        </table>
    </div>
    </div>
{% endblock %}", "listCollector.html.twig", "C:\\xampp\\htdocs\\projet_final\\final_project_wf3\\dev\\templates\\listCollector.html.twig");
    }
}
