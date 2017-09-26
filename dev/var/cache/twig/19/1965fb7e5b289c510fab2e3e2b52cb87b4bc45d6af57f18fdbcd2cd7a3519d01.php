<?php

/* collector/formulairedecollecte.html.twig */
class __TwigTemplate_d8d24152477c8d7965fa6d6695fca2b8186d8b8655250f1cf7e1dea81edb8fb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "collector/formulairedecollecte.html.twig", 1);
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
        $__internal_c58dbddc1f018eb6f94e2952ac2f4567df0fd10d41dc09fca25e3b83817b28be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58dbddc1f018eb6f94e2952ac2f4567df0fd10d41dc09fca25e3b83817b28be->enter($__internal_c58dbddc1f018eb6f94e2952ac2f4567df0fd10d41dc09fca25e3b83817b28be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collector/formulairedecollecte.html.twig"));

        $__internal_9a6ff538c8e977687d76a7f73a29d9ac5928bad36273d391243252b532b664a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a6ff538c8e977687d76a7f73a29d9ac5928bad36273d391243252b532b664a4->enter($__internal_9a6ff538c8e977687d76a7f73a29d9ac5928bad36273d391243252b532b664a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "collector/formulairedecollecte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c58dbddc1f018eb6f94e2952ac2f4567df0fd10d41dc09fca25e3b83817b28be->leave($__internal_c58dbddc1f018eb6f94e2952ac2f4567df0fd10d41dc09fca25e3b83817b28be_prof);

        
        $__internal_9a6ff538c8e977687d76a7f73a29d9ac5928bad36273d391243252b532b664a4->leave($__internal_9a6ff538c8e977687d76a7f73a29d9ac5928bad36273d391243252b532b664a4_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_3f102129d1e88203bd9ff99a55908e68de060ce20b8d0a371f77255bddbb18c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f102129d1e88203bd9ff99a55908e68de060ce20b8d0a371f77255bddbb18c9->enter($__internal_3f102129d1e88203bd9ff99a55908e68de060ce20b8d0a371f77255bddbb18c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f05d8b4bbbe7f9fc6bf37ac84b49477887c3eacf5a8a03cdeddbc669b17f719e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f05d8b4bbbe7f9fc6bf37ac84b49477887c3eacf5a8a03cdeddbc669b17f719e->enter($__internal_f05d8b4bbbe7f9fc6bf37ac84b49477887c3eacf5a8a03cdeddbc669b17f719e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "        <form class=\"form-horizontal\" method=\"post\">
            <fieldset>
                <!-- Form Name --> 
                <legend style=\"text-align: center;\"><strong>";
        // line 6
        if ($this->getAttribute(($context["collecte"] ?? $this->getContext($context, "collecte")), "id_adresses_collections_have_collector", array())) {
            echo "Ajout sur le formulaire de collecte de : ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collecte"] ?? $this->getContext($context, "collecte")), "processing_location", array()), "html", null, true);
            echo " ";
        } else {
            echo "Ajout d'une collecte";
        }
        echo "</strong></legend>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"adress_collection_idadress_collection\">Lieu collecté</label>
                    <div class=\"col-md-4\">
                        <select id=\"lieucollecté\" name=\"adress_collection_idadress_collection\" class=\"form-control\">
                            <option value=\"\">Sélectionnez le lieu de collecte</option>
                            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lieux"] ?? $this->getContext($context, "lieux")));
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 13
            echo "                             <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "id_collection_address", array()), "html", null, true);
            echo "\"";
            if (($this->getAttribute($context["lieu"], "id_collection_address", array()) == $this->getAttribute(($context["collecte"] ?? $this->getContext($context, "collecte")), "adress_collection_idadress_collection", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "address_name", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                        </select>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"collector_idcollector\">Collecteur</label>
                    <div class=\"col-md-4\">
                        <select id=\"lieucollecté\" name=\"collector_idcollector\" class=\"form-control\">
                            <option value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "idcollector", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "fullname", array()), "html", null, true);
        echo "</option>
                            ";
        // line 26
        echo "                        </select>
                        ";
        // line 28
        echo "                    </div>
                </div>
                
                
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"bin_number\">Numéro du bac collecté</label>  
                    <div class=\"col-md-4\">
                        <input id=\"bin_number\" name=\"bin_number\" type=\"text\" placeholder=\"Numéro du bac collecté\" class=\"form-control input-md\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collecte"] ?? $this->getContext($context, "collecte")), "bin_number", array()), "html", null, true);
        echo "\"> 
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"weight\">Poids composté en kg</label>  
                    <div class=\"col-md-4\">
                        <input id=\"poids composté\" name=\"weight\" type=\"text\" placeholder=\"Poids composté en kg\" class=\"form-control input-md\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collecte"] ?? $this->getContext($context, "collecte")), "weight", array()), "html", null, true);
        echo "\"> 
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"compost_quality\">Qualité du compost</label>
                    <div class=\"col-md-4\">
                        <select id=\"compostable\" name=\"compost_quality\" class=\"form-control\">
                            <option value=\"bon\">Bonne</option>
                            <option value=\"moyen\">Moyenne</option>
                            <option value=\"mauvais\">Mauvaise</option>
                        </select>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"further_information\">Remarques complémentaires</label>  
                    <div class=\"col-md-4\">
                        <textarea class=\"form-control\" id=\"remarques\" name=\"further_information\" placeholder=\"Remarques complémentaires\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collecte"] ?? $this->getContext($context, "collecte")), "further_information", array()), "html", null, true);
        echo "\"></textarea>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"processing_datetime\">Date de traitement</label>  
                    <div class=\"col-md-4\">
                        <input id=\"processing_datetime\" name=\"processing_datetime\" type=\"datetime-local\" placeholder=\"Date de traitement\" class=\"form-control input-md\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collecte"] ?? $this->getContext($context, "collecte")), "processing_datetime", array()), "html", null, true);
        echo "\"> 
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"processing_location\">Lieu de traitement</label>
                    <div class=\"col-md-4\">
                        <select id=\"processing_location \" name=\"processing_location\" class=\"form-control\">
                            <option value=\"\">Choississez un lieu de traitement</option>
                            ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? $this->getContext($context, "locations")));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 72
            echo "                             <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "id_location_processing", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "processing_location", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                        </select>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"button1id\"></label>
                    <div class=\"col-md-8\">
                        <button id=\"button1id\" name=\"button1id\" class=\"btn btn-success\" type=\"submit\">Valider</button>
                    </div>
                </div>
            </fieldset>
        </form>
";
        
        $__internal_f05d8b4bbbe7f9fc6bf37ac84b49477887c3eacf5a8a03cdeddbc669b17f719e->leave($__internal_f05d8b4bbbe7f9fc6bf37ac84b49477887c3eacf5a8a03cdeddbc669b17f719e_prof);

        
        $__internal_3f102129d1e88203bd9ff99a55908e68de060ce20b8d0a371f77255bddbb18c9->leave($__internal_3f102129d1e88203bd9ff99a55908e68de060ce20b8d0a371f77255bddbb18c9_prof);

    }

    public function getTemplateName()
    {
        return "collector/formulairedecollecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 74,  167 => 72,  163 => 71,  152 => 63,  143 => 57,  124 => 41,  115 => 35,  106 => 28,  103 => 26,  97 => 22,  88 => 15,  73 => 13,  69 => 12,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
        <form class=\"form-horizontal\" method=\"post\">
            <fieldset>
                <!-- Form Name --> 
                <legend style=\"text-align: center;\"><strong>{% if collecte.id_adresses_collections_have_collector%}Ajout sur le formulaire de collecte de : {{ collecte.processing_location }} {% else %}Ajout d'une collecte{% endif %}</strong></legend>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"adress_collection_idadress_collection\">Lieu collecté</label>
                    <div class=\"col-md-4\">
                        <select id=\"lieucollecté\" name=\"adress_collection_idadress_collection\" class=\"form-control\">
                            <option value=\"\">Sélectionnez le lieu de collecte</option>
                            {% for lieu in lieux %}
                             <option value=\"{{lieu.id_collection_address}}\"{%if lieu.id_collection_address == collecte.adress_collection_idadress_collection %}selected{%endif%}>{{lieu.address_name}}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"collector_idcollector\">Collecteur</label>
                    <div class=\"col-md-4\">
                        <select id=\"lieucollecté\" name=\"collector_idcollector\" class=\"form-control\">
                            <option value=\"{{user.idcollector}}\">{{user.fullname}}</option>
                            {#{% for collector in collectors %}
                             <option value=\"{{collector.idcollector}}\"{%if collector.idcollector == collecte.collector_idcollector%}selected{%endif%}>{{collector.firstname}} {{collector.lastname}}</option>
                            {% endfor %}#}
                        </select>
                        {#<input id=\"id_collector\" name=\"collector_idcollector\" type=\"int\" class=\"form-control input-md\" value=\"{{user.idcollector}}\" placeholder=\"{{user.fullname}}\">#}
                    </div>
                </div>
                
                
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"bin_number\">Numéro du bac collecté</label>  
                    <div class=\"col-md-4\">
                        <input id=\"bin_number\" name=\"bin_number\" type=\"text\" placeholder=\"Numéro du bac collecté\" class=\"form-control input-md\" value=\"{{ collecte.bin_number }}\"> 
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"weight\">Poids composté en kg</label>  
                    <div class=\"col-md-4\">
                        <input id=\"poids composté\" name=\"weight\" type=\"text\" placeholder=\"Poids composté en kg\" class=\"form-control input-md\" value=\"{{ collecte.weight }}\"> 
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"compost_quality\">Qualité du compost</label>
                    <div class=\"col-md-4\">
                        <select id=\"compostable\" name=\"compost_quality\" class=\"form-control\">
                            <option value=\"bon\">Bonne</option>
                            <option value=\"moyen\">Moyenne</option>
                            <option value=\"mauvais\">Mauvaise</option>
                        </select>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"further_information\">Remarques complémentaires</label>  
                    <div class=\"col-md-4\">
                        <textarea class=\"form-control\" id=\"remarques\" name=\"further_information\" placeholder=\"Remarques complémentaires\" value=\"{{ collecte.further_information }}\"></textarea>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"processing_datetime\">Date de traitement</label>  
                    <div class=\"col-md-4\">
                        <input id=\"processing_datetime\" name=\"processing_datetime\" type=\"datetime-local\" placeholder=\"Date de traitement\" class=\"form-control input-md\" value=\"{{ collecte.processing_datetime }}\"> 
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"processing_location\">Lieu de traitement</label>
                    <div class=\"col-md-4\">
                        <select id=\"processing_location \" name=\"processing_location\" class=\"form-control\">
                            <option value=\"\">Choississez un lieu de traitement</option>
                            {% for location in locations %}
                             <option value=\"{{location.id_location_processing}}\">{{location.processing_location}}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-4 control-label\" for=\"button1id\"></label>
                    <div class=\"col-md-8\">
                        <button id=\"button1id\" name=\"button1id\" class=\"btn btn-success\" type=\"submit\">Valider</button>
                    </div>
                </div>
            </fieldset>
        </form>
{% endblock %}
", "collector/formulairedecollecte.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\templates\\collector\\formulairedecollecte.html.twig");
    }
}
