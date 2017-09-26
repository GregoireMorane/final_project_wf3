<?php

/* listClient.html.twig */
class __TwigTemplate_f8d253cae17d679106483f6c7e4516d9cbfa56e26c8b19c5988f9a531e59c5c5 extends Twig_Template
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
        $__internal_a43c1c9211324aee1f03cc54b6846e2c1b8842b38b5113219d3e880250c42261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43c1c9211324aee1f03cc54b6846e2c1b8842b38b5113219d3e880250c42261->enter($__internal_a43c1c9211324aee1f03cc54b6846e2c1b8842b38b5113219d3e880250c42261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listClient.html.twig"));

        $__internal_859f999c7a23eaf4752242718e175ad180cba8ed75b1833066561b23d6f704ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_859f999c7a23eaf4752242718e175ad180cba8ed75b1833066561b23d6f704ab->enter($__internal_859f999c7a23eaf4752242718e175ad180cba8ed75b1833066561b23d6f704ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listClient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a43c1c9211324aee1f03cc54b6846e2c1b8842b38b5113219d3e880250c42261->leave($__internal_a43c1c9211324aee1f03cc54b6846e2c1b8842b38b5113219d3e880250c42261_prof);

        
        $__internal_859f999c7a23eaf4752242718e175ad180cba8ed75b1833066561b23d6f704ab->leave($__internal_859f999c7a23eaf4752242718e175ad180cba8ed75b1833066561b23d6f704ab_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_cde22a1e98c0190ff36e5464aedc42be8ee2809a69d7df7c1d7d4914b574a3c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde22a1e98c0190ff36e5464aedc42be8ee2809a69d7df7c1d7d4914b574a3c6->enter($__internal_cde22a1e98c0190ff36e5464aedc42be8ee2809a69d7df7c1d7d4914b574a3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_588775be6b20ea9929f095790fafde20f1104c488ce7b63ed63b1b47525e15d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_588775be6b20ea9929f095790fafde20f1104c488ce7b63ed63b1b47525e15d1->enter($__internal_588775be6b20ea9929f095790fafde20f1104c488ce7b63ed63b1b47525e15d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_588775be6b20ea9929f095790fafde20f1104c488ce7b63ed63b1b47525e15d1->leave($__internal_588775be6b20ea9929f095790fafde20f1104c488ce7b63ed63b1b47525e15d1_prof);

        
        $__internal_cde22a1e98c0190ff36e5464aedc42be8ee2809a69d7df7c1d7d4914b574a3c6->leave($__internal_cde22a1e98c0190ff36e5464aedc42be8ee2809a69d7df7c1d7d4914b574a3c6_prof);

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
{% endblock %}", "listClient.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\templates\\listClient.html.twig");
    }
}
