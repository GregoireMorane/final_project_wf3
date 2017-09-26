<?php

/* listClient.html.twig */
class __TwigTemplate_23fadf9c55230333a6ddbe95ed74a3bbf9cd93cc5539750222577e2a5d1ec834 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "listClient.html.twig", 1);
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
        $__internal_c52b0c10cd5bbbf6b45c7644a538c7aeaba1e9c4e1dbcb23b7b3b5a8f1b673b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52b0c10cd5bbbf6b45c7644a538c7aeaba1e9c4e1dbcb23b7b3b5a8f1b673b8->enter($__internal_c52b0c10cd5bbbf6b45c7644a538c7aeaba1e9c4e1dbcb23b7b3b5a8f1b673b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listClient.html.twig"));

        $__internal_82d42e25c6f04d72209fc9acd7f3c56838b1503765d86b38b5c9c0f803773695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d42e25c6f04d72209fc9acd7f3c56838b1503765d86b38b5c9c0f803773695->enter($__internal_82d42e25c6f04d72209fc9acd7f3c56838b1503765d86b38b5c9c0f803773695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listClient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c52b0c10cd5bbbf6b45c7644a538c7aeaba1e9c4e1dbcb23b7b3b5a8f1b673b8->leave($__internal_c52b0c10cd5bbbf6b45c7644a538c7aeaba1e9c4e1dbcb23b7b3b5a8f1b673b8_prof);

        
        $__internal_82d42e25c6f04d72209fc9acd7f3c56838b1503765d86b38b5c9c0f803773695->leave($__internal_82d42e25c6f04d72209fc9acd7f3c56838b1503765d86b38b5c9c0f803773695_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_8f438ceccaa0abd56e617ca52f4c325fa5a6493e94b3a62ee1a16f78d2ec4440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f438ceccaa0abd56e617ca52f4c325fa5a6493e94b3a62ee1a16f78d2ec4440->enter($__internal_8f438ceccaa0abd56e617ca52f4c325fa5a6493e94b3a62ee1a16f78d2ec4440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a4712c3f2de2a72628c2b612a8fd81a735665ff7eafed8318822cc3372c66ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4712c3f2de2a72628c2b612a8fd81a735665ff7eafed8318822cc3372c66ac5->enter($__internal_a4712c3f2de2a72628c2b612a8fd81a735665ff7eafed8318822cc3372c66ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
    <div class=\"\">
        <div class=\"col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
            <h1>Clients</h1>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registerclient");
        echo "\"><span>Ajouter un client</span></a>
            <br><br>
        </div>
        <div class=\"col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
        <table class=\"table\">
            <tr style=\"font-weight: bold;\">
                <th>Nom</th>
                <th>Prénom</th>
                <th>email</th>
                <th>Numéro de téléphone</th>
                <th>Date de début de contrat</th>
                <th>Adresse de facturation</th>
                <th>Code Postal</th>
                <th>Ville</th>
                <th>Pays</th>
                <th>Entreprise</th>
                <th>Numéro de siret</th>
                <th>Mot de passe</th>
                <th> </th>
                <th> </th>
            </tr>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 29
            echo "                <tr>
                    <th>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "lastname", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "firstname", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "email", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "phonenumber", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "startdatecontract", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "billingaddress", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "postalcode", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "city", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "country", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "company", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "siret", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "password", array()), "html", null, true);
            echo "</th>
                    <th><a  href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registerclient", array("id" => $this->getAttribute($context["client"], "idclient", array()))), "html", null, true);
            echo "\" style=\"font-weight: bold\">Modifier</a></th>
                    <th><a  href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeclientdelete", array("id" => $this->getAttribute($context["client"], "idclient", array()))), "html", null, true);
            echo "\" style=\"font-weight: bold\">Supprimer</a></th>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </table>
    </div>
    </div>
";
        
        $__internal_a4712c3f2de2a72628c2b612a8fd81a735665ff7eafed8318822cc3372c66ac5->leave($__internal_a4712c3f2de2a72628c2b612a8fd81a735665ff7eafed8318822cc3372c66ac5_prof);

        
        $__internal_8f438ceccaa0abd56e617ca52f4c325fa5a6493e94b3a62ee1a16f78d2ec4440->leave($__internal_8f438ceccaa0abd56e617ca52f4c325fa5a6493e94b3a62ee1a16f78d2ec4440_prof);

    }

    public function getTemplateName()
    {
        return "listClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 46,  138 => 43,  134 => 42,  130 => 41,  126 => 40,  122 => 39,  118 => 38,  114 => 37,  110 => 36,  106 => 35,  102 => 34,  98 => 33,  94 => 32,  90 => 31,  86 => 30,  83 => 29,  79 => 28,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
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
            <h1>Clients</h1>
            <a href=\"{{ path('registerclient') }}\"><span>Ajouter un client</span></a>
            <br><br>
        </div>
        <div class=\"col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
        <table class=\"table\">
            <tr style=\"font-weight: bold;\">
                <th>Nom</th>
                <th>Prénom</th>
                <th>email</th>
                <th>Numéro de téléphone</th>
                <th>Date de début de contrat</th>
                <th>Adresse de facturation</th>
                <th>Code Postal</th>
                <th>Ville</th>
                <th>Pays</th>
                <th>Entreprise</th>
                <th>Numéro de siret</th>
                <th>Mot de passe</th>
                <th> </th>
                <th> </th>
            </tr>
            {% for client in clients %}
                <tr>
                    <th>{{ client.lastname }}</th>
                    <th>{{ client.firstname }}</th>
                    <th>{{ client.email }}</th>
                    <th>{{ client.phonenumber }}</th>
                    <th>{{ client.startdatecontract }}</th>
                    <th>{{ client.billingaddress }}</th>
                    <th>{{ client.postalcode }}</th>
                    <th>{{ client.city }}</th>
                    <th>{{ client.country }}</th>
                    <th>{{ client.company }}</th>
                    <th>{{ client.siret }}</th>
                    <th>{{ client.password }}</th>
                    <th><a  href=\"{{path ('registerclient', {id: client.idclient}) }}\" style=\"font-weight: bold\">Modifier</a></th>
                    <th><a  href=\"{{path ('listeclientdelete', {id: client.idclient}) }}\" style=\"font-weight: bold\">Supprimer</a></th>
                </tr>
            {% endfor %}
        </table>
    </div>
    </div>
{% endblock %}", "listClient.html.twig", "C:\\xampp\\htdocs\\projet_final\\final_project_wf3\\dev\\templates\\listClient.html.twig");
    }
}
