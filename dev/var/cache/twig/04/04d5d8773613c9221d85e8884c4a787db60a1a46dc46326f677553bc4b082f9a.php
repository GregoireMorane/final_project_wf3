<?php

/* listLieuxCollecte.html.twig */
class __TwigTemplate_838a2975f63d20dc9691314358e54b3f606a02b858004d6952570ce499e88ca2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "listLieuxCollecte.html.twig", 1);
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
        $__internal_a1ab30771cd010cc8c7e60db2f5e6b41f1f7ae8eb89826b6c6dfc215c6b4bd61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1ab30771cd010cc8c7e60db2f5e6b41f1f7ae8eb89826b6c6dfc215c6b4bd61->enter($__internal_a1ab30771cd010cc8c7e60db2f5e6b41f1f7ae8eb89826b6c6dfc215c6b4bd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listLieuxCollecte.html.twig"));

        $__internal_a386052ece9f6911428afc2ceff3def0ab99fd7813c7a0d6fb22462f866f7550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a386052ece9f6911428afc2ceff3def0ab99fd7813c7a0d6fb22462f866f7550->enter($__internal_a386052ece9f6911428afc2ceff3def0ab99fd7813c7a0d6fb22462f866f7550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listLieuxCollecte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1ab30771cd010cc8c7e60db2f5e6b41f1f7ae8eb89826b6c6dfc215c6b4bd61->leave($__internal_a1ab30771cd010cc8c7e60db2f5e6b41f1f7ae8eb89826b6c6dfc215c6b4bd61_prof);

        
        $__internal_a386052ece9f6911428afc2ceff3def0ab99fd7813c7a0d6fb22462f866f7550->leave($__internal_a386052ece9f6911428afc2ceff3def0ab99fd7813c7a0d6fb22462f866f7550_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_8010de5a19bc7843e45b1c5c3c6d3396c835c871bae870877132fe67be6158ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8010de5a19bc7843e45b1c5c3c6d3396c835c871bae870877132fe67be6158ac->enter($__internal_8010de5a19bc7843e45b1c5c3c6d3396c835c871bae870877132fe67be6158ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_91e316f5ccfcbd19481fd645b3b9040cc84b97397733ba12c98ee8734d211f92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e316f5ccfcbd19481fd645b3b9040cc84b97397733ba12c98ee8734d211f92->enter($__internal_91e316f5ccfcbd19481fd645b3b9040cc84b97397733ba12c98ee8734d211f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
    <div class=\"\">
        <div class=\"col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
            <h1>Lieux de collecte</h1>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registerlieucollecte");
        echo "\"><span>Ajouter un lieu de collecte</span></a>
            <br><br>
        </div>
        <div class=\"col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
        <table class=\"table\">
            <tr>
                <th>Adresse</th>
                <th>Nom de l'adresse</th>
                <th>Type d'établissement</th>
                <th>Code Postal</th>
                <th>Ville</th>
                <th>Pays</th>
                <th>Jour de collecte</th>
                <th>Informations Complémentaires</th>
                <th>Nom du client</th>
                <th>Prénom du client</th>
            </tr>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collectes"] ?? $this->getContext($context, "collectes")));
        foreach ($context['_seq'] as $context["_key"] => $context["collecte"]) {
            // line 25
            echo "                <tr>
                    <th>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["collecte"], "address_collection", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["collecte"], "address_name", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["collecte"], "firm_type", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["collecte"], "postal_code", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["collecte"], "city", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["collecte"], "country", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["collecte"], "collection_day", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["collecte"], "further_information", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["collecte"], "clientFirstname", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["collecte"], "clientLastname", array()), "html", null, true);
            echo "</th>
                    <th><a  href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registerlieucollecte", array("id" => $this->getAttribute($context["collecte"], "id_collection_address", array()))), "html", null, true);
            echo "\" style=\"font-weight: bold\">Modifier</a></th>
                    <th><a  href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listelieucollectedelete", array("id" => $this->getAttribute($context["collecte"], "id_collection_address", array()))), "html", null, true);
            echo "\" style=\"font-weight: bold\">Supprimer</a></th>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collecte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
    </div>
    </div>
";
        
        $__internal_91e316f5ccfcbd19481fd645b3b9040cc84b97397733ba12c98ee8734d211f92->leave($__internal_91e316f5ccfcbd19481fd645b3b9040cc84b97397733ba12c98ee8734d211f92_prof);

        
        $__internal_8010de5a19bc7843e45b1c5c3c6d3396c835c871bae870877132fe67be6158ac->leave($__internal_8010de5a19bc7843e45b1c5c3c6d3396c835c871bae870877132fe67be6158ac_prof);

    }

    public function getTemplateName()
    {
        return "listLieuxCollecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 40,  126 => 37,  122 => 36,  118 => 35,  114 => 34,  110 => 33,  106 => 32,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  79 => 25,  75 => 24,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
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
            <h1>Lieux de collecte</h1>
            <a href=\"{{ path('registerlieucollecte') }}\"><span>Ajouter un lieu de collecte</span></a>
            <br><br>
        </div>
        <div class=\"col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
        <table class=\"table\">
            <tr>
                <th>Adresse</th>
                <th>Nom de l'adresse</th>
                <th>Type d'établissement</th>
                <th>Code Postal</th>
                <th>Ville</th>
                <th>Pays</th>
                <th>Jour de collecte</th>
                <th>Informations Complémentaires</th>
                <th>Nom du client</th>
                <th>Prénom du client</th>
            </tr>
            {% for collecte in collectes %}
                <tr>
                    <th>{{ collecte.address_collection }}</th>
                    <th>{{ collecte.address_name }}</th>
                    <th>{{ collecte.firm_type }}</th>
                    <th>{{ collecte.postal_code }}</th>
                    <th>{{ collecte.city }}</th>
                    <th>{{ collecte.country }}</th>
                    <th>{{ collecte.collection_day }}</th>
                    <th>{{ collecte.further_information }}</th>
                    <th>{{ collecte.clientFirstname }}</th>
                    <th>{{ collecte.clientLastname }}</th>
                    <th><a  href=\"{{path ('registerlieucollecte', {id: collecte.id_collection_address}) }}\" style=\"font-weight: bold\">Modifier</a></th>
                    <th><a  href=\"{{path ('listelieucollectedelete', {id: collecte.id_collection_address}) }}\" style=\"font-weight: bold\">Supprimer</a></th>
                </tr>
            {% endfor %}
        </table>
    </div>
    </div>
{% endblock %}", "listLieuxCollecte.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\templates\\listLieuxCollecte.html.twig");
    }
}
