<?php

/* compteclient.html.twig */
class __TwigTemplate_59c89df882266390922d46bcc2ed4a548830ce01de0e1dec04ca8a7af4d3c4f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "compteclient.html.twig", 1);
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
        $__internal_83231666c1ae74a7a9846bec13ba1dd9dd2d87750a9d5eda5eea591b067e7a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83231666c1ae74a7a9846bec13ba1dd9dd2d87750a9d5eda5eea591b067e7a65->enter($__internal_83231666c1ae74a7a9846bec13ba1dd9dd2d87750a9d5eda5eea591b067e7a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compteclient.html.twig"));

        $__internal_fa4ac92fc833c34ad8dc2a88fe656ec646fb772f9ad4952b54e306da715d76c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa4ac92fc833c34ad8dc2a88fe656ec646fb772f9ad4952b54e306da715d76c9->enter($__internal_fa4ac92fc833c34ad8dc2a88fe656ec646fb772f9ad4952b54e306da715d76c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compteclient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83231666c1ae74a7a9846bec13ba1dd9dd2d87750a9d5eda5eea591b067e7a65->leave($__internal_83231666c1ae74a7a9846bec13ba1dd9dd2d87750a9d5eda5eea591b067e7a65_prof);

        
        $__internal_fa4ac92fc833c34ad8dc2a88fe656ec646fb772f9ad4952b54e306da715d76c9->leave($__internal_fa4ac92fc833c34ad8dc2a88fe656ec646fb772f9ad4952b54e306da715d76c9_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_8ee629864a796add9fedfc5b408bc781f8df3cfb744750dc8145b297f1263de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee629864a796add9fedfc5b408bc781f8df3cfb744750dc8145b297f1263de5->enter($__internal_8ee629864a796add9fedfc5b408bc781f8df3cfb744750dc8145b297f1263de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6486d9c3f0cdfb8ab5bd26dd4d90e8221f52cd4a58916e187245bc5c05070d22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6486d9c3f0cdfb8ab5bd26dd4d90e8221f52cd4a58916e187245bc5c05070d22->enter($__internal_6486d9c3f0cdfb8ab5bd26dd4d90e8221f52cd4a58916e187245bc5c05070d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class=\"container\">
    <div class=\"container-fluid\">
        <div id=\"liens\" class=\"row\">
            <div class=\"col-md-6 col-xs-12\">
                <button type=\"button\" class=\"btn btn-block\"><a href=\"#biodechets\">Vos biodéchets<a></button>
            </div>
            <div class=\" col-md-6 col-xs-12\">
                <button type=\"button\" class=\"btn btn-block\"><a href=\"#contact\">Vous et les alchimistes</a></button>
            </div>
        </div>

        <div id=\"biodechets\"></div>
        <div class=\"row bloc jaune\">

            <div class=\"col-xs-12 col-md-4 panel-body btn-group-vertical\" role=\"group\">
                <button type=\"button\" class=\"btn btn-primary\">Vos DAC</button>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collectionDates"] ?? $this->getContext($context, "collectionDates")));
        foreach ($context['_seq'] as $context["_key"] => $context["collectionDate"]) {
            // line 25
            echo "                        <button type=\"button\" class=\"btn btn-default\">Collecte du ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["collectionDate"], "collection_datetime", array()), "html", null, true);
            echo "
                            <span class=\"glyphicon glyphicon-eye-open pull-right\"><a></a></span>
                        </button>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collectionDate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </div>

            <div class=\"col-xs-12 col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading text-center\">
                        <h3 class=\"panel-title\">Nombre de kilos de biodéchets collectés<br />cette semaine</h3>
                    </div>
                    <div class=\"panel-body text-center\">
                        ";
        // line 37
        echo twig_escape_filter($this->env, ($context["currentWeekBioWasteWeight"] ?? $this->getContext($context, "currentWeekBioWasteWeight")), "html", null, true);
        echo "
                    </div>
                </div>
            </div>

            <div class=\"col-xs-12 col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading text-center\">
                        <h3 class=\"panel-title\">Nombre de kilos de biodéchets collectés<br />depuis le début</h3>
                    </div>
                    <div class=\"panel-body text-center\">
                        <p>";
        // line 48
        echo twig_escape_filter($this->env, ($context["totalBioWasteWeight"] ?? $this->getContext($context, "totalBioWasteWeight")), "html", null, true);
        echo "</p>
                    </div>
                </div>
            </div>

        </div>

        <div id=\"contact\"></div>
        <div class=\"row bloc vert\">
            <div class=\"col-xs-12 col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title text-center\">Vos informations</h3>
                    </div>
                    <div class=\"panel-body text-left\">
                        <p>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()), "company", array()), "html", null, true);
        echo "</p>
                        <p>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()), "billingaddress", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()), "postalcode", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()), "city", array()), "html", null, true);
        echo ".</p>
                        <p>Tél. (de 9h à 17h30) : ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()), "phonenumber", array()), "html", null, true);
        echo ".</p>
                        <p>Contact : ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()), "lastname", array()), "html", null, true);
        echo ".</p>
                        <p>Courriel : ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()), "email", array()), "html", null, true);
        echo ".</p>
                        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lieux"] ?? $this->getContext($context, "lieux")));
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 69
            echo "                            <p>Jours de collecte : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "collection_day", array()), "html", null, true);
            echo "</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                    </div>
                </div>
            </div>

            <div class=\"col-xs-12 col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title text-center\">Votre collecteur</h3>
                    </div>
                    <div class=\"panel-body text-left\">
                        ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collectors"] ?? $this->getContext($context, "collectors")));
        foreach ($context['_seq'] as $context["_key"] => $context["collector"]) {
            // line 82
            echo "                            <p>Contact : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["collector"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["collector"], "lastname", array()), "html", null, true);
            echo ".</p>
                            <p>Tél. (de 9h à 17h30): ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["collector"], "phone_number", array()), "html", null, true);
            echo ".</p>
                            <p>Courriel :";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["collector"], "email", array()), "html", null, true);
            echo "</p>
                            <p>Contactez ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["collector"], "firstname", array()), "html", null, true);
            echo " en cas de besoin de ramassage.</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collector'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                        
                    </div>
                </div>
            </div>

            <div class=\"col-xs-12 col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title text-center\">Votre contact administrateur</h3>
                    </div>
                    <div class=\"panel-body\">
                        <p>Contact : Fabien-Kenzo Sato</p>
                        <p>Fixe (de 9h à 17h30): 01 84 21 47 89</p>
                        <p>Mobile : 07 77 07 08 10</p>
                        <p>Courriel : kenzo@alchimistes.co</p>
                        <p>Contactez Kenzo pour tous les sujets relatifs aux Alchimistes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
";
        
        $__internal_6486d9c3f0cdfb8ab5bd26dd4d90e8221f52cd4a58916e187245bc5c05070d22->leave($__internal_6486d9c3f0cdfb8ab5bd26dd4d90e8221f52cd4a58916e187245bc5c05070d22_prof);

        
        $__internal_8ee629864a796add9fedfc5b408bc781f8df3cfb744750dc8145b297f1263de5->leave($__internal_8ee629864a796add9fedfc5b408bc781f8df3cfb744750dc8145b297f1263de5_prof);

    }

    public function getTemplateName()
    {
        return "compteclient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 86,  194 => 85,  190 => 84,  186 => 83,  179 => 82,  175 => 81,  163 => 71,  154 => 69,  150 => 68,  146 => 67,  140 => 66,  136 => 65,  128 => 64,  124 => 63,  106 => 48,  92 => 37,  82 => 29,  71 => 25,  67 => 24,  49 => 8,  40 => 7,  11 => 1,);
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

{#{% block stylesheets %}
    <link href=\"{{ asset('css/compteclient.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
{% endblock %}#}

{% block content %}
    <div class=\"container\">
    <div class=\"container-fluid\">
        <div id=\"liens\" class=\"row\">
            <div class=\"col-md-6 col-xs-12\">
                <button type=\"button\" class=\"btn btn-block\"><a href=\"#biodechets\">Vos biodéchets<a></button>
            </div>
            <div class=\" col-md-6 col-xs-12\">
                <button type=\"button\" class=\"btn btn-block\"><a href=\"#contact\">Vous et les alchimistes</a></button>
            </div>
        </div>

        <div id=\"biodechets\"></div>
        <div class=\"row bloc jaune\">

            <div class=\"col-xs-12 col-md-4 panel-body btn-group-vertical\" role=\"group\">
                <button type=\"button\" class=\"btn btn-primary\">Vos DAC</button>
                    {% for collectionDate in collectionDates %}
                        <button type=\"button\" class=\"btn btn-default\">Collecte du {{ collectionDate.collection_datetime }}
                            <span class=\"glyphicon glyphicon-eye-open pull-right\"><a></a></span>
                        </button>
                    {% endfor %}
            </div>

            <div class=\"col-xs-12 col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading text-center\">
                        <h3 class=\"panel-title\">Nombre de kilos de biodéchets collectés<br />cette semaine</h3>
                    </div>
                    <div class=\"panel-body text-center\">
                        {{ currentWeekBioWasteWeight }}
                    </div>
                </div>
            </div>

            <div class=\"col-xs-12 col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading text-center\">
                        <h3 class=\"panel-title\">Nombre de kilos de biodéchets collectés<br />depuis le début</h3>
                    </div>
                    <div class=\"panel-body text-center\">
                        <p>{{ totalBioWasteWeight }}</p>
                    </div>
                </div>
            </div>

        </div>

        <div id=\"contact\"></div>
        <div class=\"row bloc vert\">
            <div class=\"col-xs-12 col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title text-center\">Vos informations</h3>
                    </div>
                    <div class=\"panel-body text-left\">
                        <p>{{ user_manager.user.company }}</p>
                        <p>{{ user_manager.user.billingaddress}} {{ user_manager.user.postalcode}} {{ user_manager.user.city}}.</p>
                        <p>Tél. (de 9h à 17h30) : {{ user_manager.user.phonenumber }}.</p>
                        <p>Contact : {{ user_manager.user.firstname }} {{ user_manager.user.lastname }}.</p>
                        <p>Courriel : {{ user_manager.user.email }}.</p>
                        {% for lieu in lieux %}
                            <p>Jours de collecte : {{ lieu.collection_day }}</p>
                        {% endfor %}
                    </div>
                </div>
            </div>

            <div class=\"col-xs-12 col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title text-center\">Votre collecteur</h3>
                    </div>
                    <div class=\"panel-body text-left\">
                        {% for collector in collectors %}
                            <p>Contact : {{ collector.firstname }} {{ collector.lastname }}.</p>
                            <p>Tél. (de 9h à 17h30): {{ collector.phone_number }}.</p>
                            <p>Courriel :{{ collector.email }}</p>
                            <p>Contactez {{ collector.firstname }} en cas de besoin de ramassage.</p>
                        {% endfor %}                        
                    </div>
                </div>
            </div>

            <div class=\"col-xs-12 col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title text-center\">Votre contact administrateur</h3>
                    </div>
                    <div class=\"panel-body\">
                        <p>Contact : Fabien-Kenzo Sato</p>
                        <p>Fixe (de 9h à 17h30): 01 84 21 47 89</p>
                        <p>Mobile : 07 77 07 08 10</p>
                        <p>Courriel : kenzo@alchimistes.co</p>
                        <p>Contactez Kenzo pour tous les sujets relatifs aux Alchimistes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
{% endblock %}
", "compteclient.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\templates\\compteclient.html.twig");
    }
}
