<?php

/* listLieuTraitement.html.twig */
class __TwigTemplate_67c6691fe07acaca8989338fa71450e0935319bcf462dc1e686a3c3c67931d12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "listLieuTraitement.html.twig", 1);
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
        $__internal_5f65d38241c6a1db9a1758f7542dfbe53df9ada3a3c8372a05849e6db5fc1a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f65d38241c6a1db9a1758f7542dfbe53df9ada3a3c8372a05849e6db5fc1a0a->enter($__internal_5f65d38241c6a1db9a1758f7542dfbe53df9ada3a3c8372a05849e6db5fc1a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listLieuTraitement.html.twig"));

        $__internal_60deda4babe9555139e3ebb3d0ba08ad8f743be1ae9d0aab76fe8d203e88702e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60deda4babe9555139e3ebb3d0ba08ad8f743be1ae9d0aab76fe8d203e88702e->enter($__internal_60deda4babe9555139e3ebb3d0ba08ad8f743be1ae9d0aab76fe8d203e88702e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listLieuTraitement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f65d38241c6a1db9a1758f7542dfbe53df9ada3a3c8372a05849e6db5fc1a0a->leave($__internal_5f65d38241c6a1db9a1758f7542dfbe53df9ada3a3c8372a05849e6db5fc1a0a_prof);

        
        $__internal_60deda4babe9555139e3ebb3d0ba08ad8f743be1ae9d0aab76fe8d203e88702e->leave($__internal_60deda4babe9555139e3ebb3d0ba08ad8f743be1ae9d0aab76fe8d203e88702e_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_8ac4621e448d7f4006db766db1359a82e000adce5ffffb7b152bab5d7bfd2667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac4621e448d7f4006db766db1359a82e000adce5ffffb7b152bab5d7bfd2667->enter($__internal_8ac4621e448d7f4006db766db1359a82e000adce5ffffb7b152bab5d7bfd2667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_503f5e7cd19f0684587e0715a918fad376df47e79f94af612d5140ca5c9455a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_503f5e7cd19f0684587e0715a918fad376df47e79f94af612d5140ca5c9455a5->enter($__internal_503f5e7cd19f0684587e0715a918fad376df47e79f94af612d5140ca5c9455a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
    <div class=\"\">
        <div class=\"col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
            <h1>Lieux de Traitement</h1>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registerlieutraitement");
        echo "\"><span>Ajouter un lieu de traitement</span></a>
            <br><br>
        </div>
        <div class=\"col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
            <table class=\"table\">
                <tr>
                    <th>Adresse</th>
                    <th>Nom du lieu</th>
                    <th>Code Postal</th>
                    <th>Ville</th>
                    <th>Pays</th>
                </tr>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lieux"] ?? $this->getContext($context, "lieux")));
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 20
            echo "                    <tr>
                        <th>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "processing_address", array()), "html", null, true);
            echo "</th>
                        <th>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "processing_location", array()), "html", null, true);
            echo "</th>
                        <th>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "postal_code", array()), "html", null, true);
            echo "</th>
                        <th>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "city", array()), "html", null, true);
            echo "</th>
                        <th>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "country", array()), "html", null, true);
            echo "</th>
                        <th><a  href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registerlieutraitement", array("id" => $this->getAttribute($context["lieu"], "id_location_processing", array()))), "html", null, true);
            echo "\" style=\"font-weight: bold\">Modifier</a></th>
                        <th><a  href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listetraitementcollectordelete", array("id" => $this->getAttribute($context["lieu"], "id_location_processing", array()))), "html", null, true);
            echo "\" style=\"font-weight: bold\">Supprimer</a></th>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </table>
        </div>
    </div>
";
        
        $__internal_503f5e7cd19f0684587e0715a918fad376df47e79f94af612d5140ca5c9455a5->leave($__internal_503f5e7cd19f0684587e0715a918fad376df47e79f94af612d5140ca5c9455a5_prof);

        
        $__internal_8ac4621e448d7f4006db766db1359a82e000adce5ffffb7b152bab5d7bfd2667->leave($__internal_8ac4621e448d7f4006db766db1359a82e000adce5ffffb7b152bab5d7bfd2667_prof);

    }

    public function getTemplateName()
    {
        return "listLieuTraitement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 30,  101 => 27,  97 => 26,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  74 => 20,  70 => 19,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
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
            <h1>Lieux de Traitement</h1>
            <a href=\"{{ path('registerlieutraitement') }}\"><span>Ajouter un lieu de traitement</span></a>
            <br><br>
        </div>
        <div class=\"col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
            <table class=\"table\">
                <tr>
                    <th>Adresse</th>
                    <th>Nom du lieu</th>
                    <th>Code Postal</th>
                    <th>Ville</th>
                    <th>Pays</th>
                </tr>
                {% for lieu in lieux %}
                    <tr>
                        <th>{{ lieu.processing_address }}</th>
                        <th>{{ lieu.processing_location }}</th>
                        <th>{{ lieu.postal_code }}</th>
                        <th>{{ lieu.city }}</th>
                        <th>{{ lieu.country }}</th>
                        <th><a  href=\"{{path ('registerlieutraitement', {id: lieu.id_location_processing}) }}\" style=\"font-weight: bold\">Modifier</a></th>
                        <th><a  href=\"{{path ('listetraitementcollectordelete', {id: lieu.id_location_processing}) }}\" style=\"font-weight: bold\">Supprimer</a></th>
                    </tr>
                {% endfor %}
            </table>
        </div>
    </div>
{% endblock %}", "listLieuTraitement.html.twig", "C:\\xampp\\htdocs\\projet_final\\final_project_wf3\\dev\\templates\\listLieuTraitement.html.twig");
    }
}
