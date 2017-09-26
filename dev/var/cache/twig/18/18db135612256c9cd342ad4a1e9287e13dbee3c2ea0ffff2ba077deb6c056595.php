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
        $__internal_04ad600a19c8cabdfb8c31e5b8460134026475990024540587b49e6c013b52c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ad600a19c8cabdfb8c31e5b8460134026475990024540587b49e6c013b52c9->enter($__internal_04ad600a19c8cabdfb8c31e5b8460134026475990024540587b49e6c013b52c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compteclient.html.twig"));

        $__internal_b9083ef2278bcfde9ad10c18da823611934e1f2c29d903da5151a0a8657072b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9083ef2278bcfde9ad10c18da823611934e1f2c29d903da5151a0a8657072b6->enter($__internal_b9083ef2278bcfde9ad10c18da823611934e1f2c29d903da5151a0a8657072b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compteclient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04ad600a19c8cabdfb8c31e5b8460134026475990024540587b49e6c013b52c9->leave($__internal_04ad600a19c8cabdfb8c31e5b8460134026475990024540587b49e6c013b52c9_prof);

        
        $__internal_b9083ef2278bcfde9ad10c18da823611934e1f2c29d903da5151a0a8657072b6->leave($__internal_b9083ef2278bcfde9ad10c18da823611934e1f2c29d903da5151a0a8657072b6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_30a5490914c60a860ed809757e02914b5f7e6b227708d8f96c6a50212a69232b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a5490914c60a860ed809757e02914b5f7e6b227708d8f96c6a50212a69232b->enter($__internal_30a5490914c60a860ed809757e02914b5f7e6b227708d8f96c6a50212a69232b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f9b6b30859f7a9bf84f98ce3d461c34aa0a832370281eb292f5b8ba8c6e0880e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9b6b30859f7a9bf84f98ce3d461c34aa0a832370281eb292f5b8ba8c6e0880e->enter($__internal_f9b6b30859f7a9bf84f98ce3d461c34aa0a832370281eb292f5b8ba8c6e0880e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"blocGauche2 col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
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
        <div class=\"row jaune bloc-comptetitle bloc\">

            <div class=\"col-xs-12 col-md-6 panel-body btn-group-vertical dacbouton\" role=\"group\">
                <button type=\"button\" class=\"btn btn-primary btn-static\">Vos DAC</button>
                    <div class=\"btn btn-default  btn-group-vertical\" style=\"max-height: 10em; overflow-y: scroll;\">
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collectionDates"] ?? $this->getContext($context, "collectionDates")));
        foreach ($context['_seq'] as $context["_key"] => $context["collectionDate"]) {
            // line 23
            echo "                        <button type=\"button\" class=\"btn btn-default btn-static text-left\">
                            Collecte du ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["collectionDate"], "collection_datetime", array()), "html", null, true);
            echo "
                            <a class=\"btn btn-default pull-right\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compteclientdac", array("id_dac" => $this->getAttribute($context["collectionDate"], "id_adresses_collections_have_collector", array()))), "html", null, true);
            echo "\">
                                <i class=\"fa fa-file\" aria-hidden=\"true\"></i>
                            </a>
                        </button>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collectionDate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    </div>
            </div>

            <div class=\"col-xs-12 col-md-3\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading text-center\">
                        <h3 class=\"panel-title\">Biodéchets collectés cette semaine (en Kg).</h3>
                    </div>
                    <div class=\"panel-body text-center\">
                        ";
        // line 39
        echo twig_escape_filter($this->env, ($context["currentWeekBioWasteWeight"] ?? $this->getContext($context, "currentWeekBioWasteWeight")), "html", null, true);
        echo "
                    </div>
                </div>
            </div>

            <div class=\"col-xs-12 col-md-3\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading text-center\">
                        <h3 class=\"panel-title\">Biodéchets collectés depuis le début (en Kg).</h3>
                    </div>
                    <div class=\"panel-body text-center\">
                        ";
        // line 50
        echo twig_escape_filter($this->env, ($context["totalBioWasteWeight"] ?? $this->getContext($context, "totalBioWasteWeight")), "html", null, true);
        echo "
                    </div>
                </div>
            </div>

        </div>

        <div id=\"contact\"></div>
        <div class=\"row bloc vert bloc-comptetitle\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-6\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title text-center\"><strong>Vos informations client</strong></h3>
                        </div>
                        <div class=\"panel-body text-left\">
                            <p>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()), "company", array()), "html", null, true);
        echo "</p>
                            <p>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()), "billingaddress", array()), "html", null, true);
        echo "<br />";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()), "postalcode", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()), "city", array()), "html", null, true);
        echo "</p>
                            <p>Contact : ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()), "lastname", array()), "html", null, true);
        echo ".</p>
                            <p>Tél. (de 9h à 17h30) : ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()), "phonenumber", array()), "html", null, true);
        echo ".</p>
                            <p>Courriel : ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()), "email", array()), "html", null, true);
        echo ".</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-xs-12 col-md-6\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title text-center\"><strong>Votre contact administrateur</strong></h3>
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

            ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lieux"] ?? $this->getContext($context, "lieux")));
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 92
            echo "               <div class=\"row \">
                    <div class=\"col-xs-12 col-md-10 col-md-offset-1\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                <div class=\"col-md-6\">
                                    <h4><strong>Votre lieu de collecte : ";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "address_name", array()), "html", null, true);
            echo "</strong></h4>
                                <p class=\"text-left\">";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "address_collection", array()), "html", null, true);
            echo "<br />";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "postal_code", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "city", array()), "html", null, true);
            echo "</p>
                                <p class=\"text-left\">Type d'établissement : ";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "firm_type", array()), "html", null, true);
            echo ".</p>
                                <p class=\"text-left\">Jours de collecte : ";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "collection_day", array()), "html", null, true);
            echo ".</p>
                                <p class=\"text-left\">Information complémentaires : ";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "further_information", array()), "html", null, true);
            echo ".
                                </div>

                                ";
            // line 104
            if (twig_test_empty($this->getAttribute($this->getAttribute($context["lieu"], "collector", array()), "idcollector", array()))) {
                // line 105
                echo "                                   <div class=\"col-md-6\">
                                       <h4><strong>Le collecteur a contacter pour ce lieu</strong></h4>
                                       <p>Pour le moment, aucun collecteur n'est attribué à ce lieu.</p>
                                   </div>
                                ";
            } else {
                // line 110
                echo "                                    <div class=\"col-md-6\">
                                        <h4><strong>Le collecteur a contacter pour ce lieu</strong></h4>
                                    <p class=\"text-left\">Collecteur : ";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lieu"], "collector", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lieu"], "collector", array()), "lastname", array()), "html", null, true);
                echo ".</p>
                                    <p class=\"text-left\">Tél. (de 9h à 17h30): ";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lieu"], "collector", array()), "phone_number", array()), "html", null, true);
                echo ".</p>
                                    <p class=\"text-left\">Courriel :";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lieu"], "collector", array()), "email", array()), "html", null, true);
                echo "</p>
                                    <p class=\"text-leftt\">Contactez ";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lieu"], "collector", array()), "firstname", array()), "html", null, true);
                echo " en cas de besoin de ramassage.</p>
                                    </div>
                                ";
            }
            // line 118
            echo "                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "        </div>
    </div>
</div>
";
        
        $__internal_f9b6b30859f7a9bf84f98ce3d461c34aa0a832370281eb292f5b8ba8c6e0880e->leave($__internal_f9b6b30859f7a9bf84f98ce3d461c34aa0a832370281eb292f5b8ba8c6e0880e_prof);

        
        $__internal_30a5490914c60a860ed809757e02914b5f7e6b227708d8f96c6a50212a69232b->leave($__internal_30a5490914c60a860ed809757e02914b5f7e6b227708d8f96c6a50212a69232b_prof);

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
        return array (  261 => 123,  251 => 118,  245 => 115,  241 => 114,  237 => 113,  231 => 112,  227 => 110,  220 => 105,  218 => 104,  212 => 101,  208 => 100,  204 => 99,  196 => 98,  192 => 97,  185 => 92,  181 => 91,  157 => 70,  153 => 69,  147 => 68,  139 => 67,  135 => 66,  116 => 50,  102 => 39,  91 => 30,  80 => 25,  76 => 24,  73 => 23,  69 => 22,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"container\">
        <div class=\"blocGauche2 col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
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
        <div class=\"row jaune bloc-comptetitle bloc\">

            <div class=\"col-xs-12 col-md-6 panel-body btn-group-vertical dacbouton\" role=\"group\">
                <button type=\"button\" class=\"btn btn-primary btn-static\">Vos DAC</button>
                    <div class=\"btn btn-default  btn-group-vertical\" style=\"max-height: 10em; overflow-y: scroll;\">
                    {% for collectionDate in collectionDates %}
                        <button type=\"button\" class=\"btn btn-default btn-static text-left\">
                            Collecte du {{ collectionDate.collection_datetime }}
                            <a class=\"btn btn-default pull-right\" href=\"{{ path('compteclientdac', {id_dac: collectionDate.id_adresses_collections_have_collector}) }}\">
                                <i class=\"fa fa-file\" aria-hidden=\"true\"></i>
                            </a>
                        </button>
                    {% endfor %}
                    </div>
            </div>

            <div class=\"col-xs-12 col-md-3\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading text-center\">
                        <h3 class=\"panel-title\">Biodéchets collectés cette semaine (en Kg).</h3>
                    </div>
                    <div class=\"panel-body text-center\">
                        {{ currentWeekBioWasteWeight }}
                    </div>
                </div>
            </div>

            <div class=\"col-xs-12 col-md-3\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading text-center\">
                        <h3 class=\"panel-title\">Biodéchets collectés depuis le début (en Kg).</h3>
                    </div>
                    <div class=\"panel-body text-center\">
                        {{ totalBioWasteWeight }}
                    </div>
                </div>
            </div>

        </div>

        <div id=\"contact\"></div>
        <div class=\"row bloc vert bloc-comptetitle\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-6\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title text-center\"><strong>Vos informations client</strong></h3>
                        </div>
                        <div class=\"panel-body text-left\">
                            <p>{{ user_manager.user.company }}</p>
                            <p>{{ user_manager.user.billingaddress}}<br />{{ user_manager.user.postalcode}} {{ user_manager.user.city}}</p>
                            <p>Contact : {{ user_manager.user.firstname }} {{ user_manager.user.lastname }}.</p>
                            <p>Tél. (de 9h à 17h30) : {{ user_manager.user.phonenumber }}.</p>
                            <p>Courriel : {{ user_manager.user.email }}.</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-xs-12 col-md-6\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title text-center\"><strong>Votre contact administrateur</strong></h3>
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

            {% for lieu in lieux %}
               <div class=\"row \">
                    <div class=\"col-xs-12 col-md-10 col-md-offset-1\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                <div class=\"col-md-6\">
                                    <h4><strong>Votre lieu de collecte : {{ lieu.address_name }}</strong></h4>
                                <p class=\"text-left\">{{ lieu.address_collection }}<br />{{ lieu.postal_code }} {{ lieu.city }}</p>
                                <p class=\"text-left\">Type d'établissement : {{ lieu.firm_type }}.</p>
                                <p class=\"text-left\">Jours de collecte : {{ lieu.collection_day }}.</p>
                                <p class=\"text-left\">Information complémentaires : {{ lieu.further_information }}.
                                </div>

                                {% if lieu.collector.idcollector is empty %}
                                   <div class=\"col-md-6\">
                                       <h4><strong>Le collecteur a contacter pour ce lieu</strong></h4>
                                       <p>Pour le moment, aucun collecteur n'est attribué à ce lieu.</p>
                                   </div>
                                {% else %}
                                    <div class=\"col-md-6\">
                                        <h4><strong>Le collecteur a contacter pour ce lieu</strong></h4>
                                    <p class=\"text-left\">Collecteur : {{ lieu.collector.firstname }} {{ lieu.collector.lastname }}.</p>
                                    <p class=\"text-left\">Tél. (de 9h à 17h30): {{ lieu.collector.phone_number }}.</p>
                                    <p class=\"text-left\">Courriel :{{ lieu.collector.email }}</p>
                                    <p class=\"text-leftt\">Contactez {{ lieu.collector.firstname }} en cas de besoin de ramassage.</p>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}
", "compteclient.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\templates\\compteclient.html.twig");
    }
}
