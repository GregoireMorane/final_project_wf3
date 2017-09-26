<?php

/* listCollector.html.twig */
class __TwigTemplate_2adcfc4e32d492a0519d3bde314195819747634c1aabd62b31320f75cdbe9ed3 extends Twig_Template
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
        $__internal_2c4142cfe1e4f7b2e0749cbc45fee7fcd87d884c2ffa7aada592bbeee55a1578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c4142cfe1e4f7b2e0749cbc45fee7fcd87d884c2ffa7aada592bbeee55a1578->enter($__internal_2c4142cfe1e4f7b2e0749cbc45fee7fcd87d884c2ffa7aada592bbeee55a1578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listCollector.html.twig"));

        $__internal_9d1a2c48d7a85e624b6fe9b2c39998e7c61b458490de8af1a46542ec0b4b2038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d1a2c48d7a85e624b6fe9b2c39998e7c61b458490de8af1a46542ec0b4b2038->enter($__internal_9d1a2c48d7a85e624b6fe9b2c39998e7c61b458490de8af1a46542ec0b4b2038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listCollector.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c4142cfe1e4f7b2e0749cbc45fee7fcd87d884c2ffa7aada592bbeee55a1578->leave($__internal_2c4142cfe1e4f7b2e0749cbc45fee7fcd87d884c2ffa7aada592bbeee55a1578_prof);

        
        $__internal_9d1a2c48d7a85e624b6fe9b2c39998e7c61b458490de8af1a46542ec0b4b2038->leave($__internal_9d1a2c48d7a85e624b6fe9b2c39998e7c61b458490de8af1a46542ec0b4b2038_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_5e1d8b36c3c32721f81cd7facc2524a41de2fb70151b000412a63c9f30ed7279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1d8b36c3c32721f81cd7facc2524a41de2fb70151b000412a63c9f30ed7279->enter($__internal_5e1d8b36c3c32721f81cd7facc2524a41de2fb70151b000412a63c9f30ed7279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_83f41b6c33f498521af6d3445d9015fbdbf2e0ed8ca45bba3e747dc6ec06dd98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83f41b6c33f498521af6d3445d9015fbdbf2e0ed8ca45bba3e747dc6ec06dd98->enter($__internal_83f41b6c33f498521af6d3445d9015fbdbf2e0ed8ca45bba3e747dc6ec06dd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_83f41b6c33f498521af6d3445d9015fbdbf2e0ed8ca45bba3e747dc6ec06dd98->leave($__internal_83f41b6c33f498521af6d3445d9015fbdbf2e0ed8ca45bba3e747dc6ec06dd98_prof);

        
        $__internal_5e1d8b36c3c32721f81cd7facc2524a41de2fb70151b000412a63c9f30ed7279->leave($__internal_5e1d8b36c3c32721f81cd7facc2524a41de2fb70151b000412a63c9f30ed7279_prof);

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
{% endblock %}", "listCollector.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\templates\\listCollector.html.twig");
    }
}
