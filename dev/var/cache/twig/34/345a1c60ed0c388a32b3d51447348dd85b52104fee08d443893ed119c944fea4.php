<?php

/* admin/formulaireAdresseCollecte.html.twig */
class __TwigTemplate_cf33bcb428182be4765b16637a21748b931e84404d447eabebfb0ef8924a0612 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/formulaireAdresseCollecte.html.twig", 1);
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
        $__internal_10e221abee361f8f0303e9833959a248c72cf4f2101ab20dee6e221701c09b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e221abee361f8f0303e9833959a248c72cf4f2101ab20dee6e221701c09b11->enter($__internal_10e221abee361f8f0303e9833959a248c72cf4f2101ab20dee6e221701c09b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/formulaireAdresseCollecte.html.twig"));

        $__internal_77f21450c37a65016c1696eee4299bfff1b6d194ec862055f64433f5315923a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77f21450c37a65016c1696eee4299bfff1b6d194ec862055f64433f5315923a7->enter($__internal_77f21450c37a65016c1696eee4299bfff1b6d194ec862055f64433f5315923a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/formulaireAdresseCollecte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10e221abee361f8f0303e9833959a248c72cf4f2101ab20dee6e221701c09b11->leave($__internal_10e221abee361f8f0303e9833959a248c72cf4f2101ab20dee6e221701c09b11_prof);

        
        $__internal_77f21450c37a65016c1696eee4299bfff1b6d194ec862055f64433f5315923a7->leave($__internal_77f21450c37a65016c1696eee4299bfff1b6d194ec862055f64433f5315923a7_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_5dfa995e6dfedc2f596a5a9be3ac75823914bb68282b7aa7f8f3cc4c44057825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dfa995e6dfedc2f596a5a9be3ac75823914bb68282b7aa7f8f3cc4c44057825->enter($__internal_5dfa995e6dfedc2f596a5a9be3ac75823914bb68282b7aa7f8f3cc4c44057825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_44c2d9b1c9943fbb32b8742ea55303c62f04202e58d8afa5dc723bd7b41237a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44c2d9b1c9943fbb32b8742ea55303c62f04202e58d8afa5dc723bd7b41237a2->enter($__internal_44c2d9b1c9943fbb32b8742ea55303c62f04202e58d8afa5dc723bd7b41237a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <form class=\"form-horizontal\" method=\"post\">
        <fieldset>
            <legend style=\"text-align: center;\"><strong>";
        // line 5
        if ($this->getAttribute(($context["adresses_collectes"] ?? $this->getContext($context, "adresses_collectes")), "id_collection_address", array())) {
            echo "Modification du lieu de collecte : ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["adresses_collectes"] ?? $this->getContext($context, "adresses_collectes")), "address_name", array()), "html", null, true);
        } else {
            echo "Ajout d'un lieu de collecte";
        }
        echo "</strong></legend>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"client_idclient\">Site apartenant au client </label>
                <div class=\"col-md-4\">
                    <select id=\"client\" name=\"client_idclient\" class=\"form-control\">
                        <option value=\"\">Choisissez un client</option>
                        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 12
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "idClient", array()), "html", null, true);
            echo "\"";
            if (($this->getAttribute($context["client"], "idclient", array()) == $this->getAttribute(($context["adresses_collectes"] ?? $this->getContext($context, "adresses_collectes")), "id_collection_address", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "firstname", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "lastname", array()), "html", null, true);
            echo " </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                    </select>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"address_collection\">Adresse de collecte</label>  
                <div class=\"col-md-4\">
                    <input id=\"adresse_collecte\" name=\"address_collection\" type=\"text\" placeholder=\"Adresse de collecte\" class=\"form-control input-md\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["adresses_collectes"] ?? $this->getContext($context, "adresses_collectes")), "address_collection", array()), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"address_name\">Nom de l'établissement</label>  
                <div class=\"col-md-4\">
                    <input id=\"adresse_collecte\" name=\"address_name\" type=\"text\" placeholder=\"Nom de l'établissement\" class=\"form-control input-md\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["adresses_collectes"] ?? $this->getContext($context, "adresses_collectes")), "address_name", array()), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"firm_type\">Type d'établissement</label>
                <div class=\"col-md-4\">
                    <select id=\"lieu_traitement\" name=\"firm_type\" class=\"form-control\">
                        <option value=\"\" selected>Choisissez un type d'établissement</option>
                        ";
        // line 34
        if ($this->getAttribute(($context["adresses_collectes"] ?? $this->getContext($context, "adresses_collectes")), "id_collection_address", array())) {
            // line 35
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["adresses_collectes"] ?? $this->getContext($context, "adresses_collectes")), "firm_type", array()), "html", null, true);
            echo "\" selected >";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["firm_type"] ?? $this->getContext($context, "firm_type")), $this->getAttribute(($context["adresses_collectes"] ?? $this->getContext($context, "adresses_collectes")), "firm_type", array()), array(), "array"), "html", null, true);
            echo "</option>
                            ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["firm_type"] ?? $this->getContext($context, "firm_type")));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 37
                echo "                                ";
                if (($context["type"] != $this->getAttribute(($context["adresses_collectes"] ?? $this->getContext($context, "adresses_collectes")), "firm_type", array()))) {
                    // line 38
                    echo "                                    <option value=\"";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "</option>
                                ";
                }
                // line 40
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                        ";
        } else {
            // line 42
            echo "                            <option value=\"epicerie\">Epicerie</option>
                            <option value=\"restaurant\">Restaurant</option>
                            <option value=\"restaurantCollectif\">Restaurant Collectif</option>
                        ";
        }
        // line 46
        echo "                    </select>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"city\">Ville</label>  
                <div class=\"col-md-4\">
                    <input id=\"ville\" name=\"city\" type=\"text\" placeholder=\"Ville\" class=\"form-control input-md\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["adresses_collectes"] ?? $this->getContext($context, "adresses_collectes")), "city", array()), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"postal_code\">Code postal</label>  
                <div class=\"col-md-4\">
                    <input id=\"code_postal\" name=\"postal_code\" type=\"text\" placeholder=\"Code postal\" class=\"form-control input-md\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["adresses_collectes"] ?? $this->getContext($context, "adresses_collectes")), "postal_code", array()), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"country\">Pays</label>  
                <div class=\"col-md-4\">
                    <input id=\"pays\" name=\"country\" type=\"text\" placeholder=\"Pays\" class=\"form-control input-md\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute(($context["adresses_collectes"] ?? $this->getContext($context, "adresses_collectes")), "country", array()), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"location_processing_idlocation_processing\">Lieu de traitement</label>
                <div class=\"col-md-4\">
                    <select id=\"lieu_traitement\" name=\"location_processing_idlocation_processing\" class=\"form-control\">
                        <option value=\"\">Choisissez un lieu de traitement</option>
                        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? $this->getContext($context, "locations")));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 73
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "id_location_processing", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["location"], "id_location_processing", array()) == $this->getAttribute(($context["adresses_collectes"] ?? $this->getContext($context, "adresses_collectes")), "id_collection_address", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "processing_location", array()), "html", null, true);
            echo " </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                    </select>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"collection_day\">Jours de collecte</label>
                <div class=\"col-md-4\">
                    <select id=\"jours_collecte\" name=\"collection_day\" class=\"form-control\">
                        <option value=\"\" selected>Choisissez un type d'établissement</option>
                        ";
        // line 83
        if ($this->getAttribute(($context["adresses_collectes"] ?? $this->getContext($context, "adresses_collectes")), "id_collection_address", array())) {
            // line 84
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["adresses_collectes"] ?? $this->getContext($context, "adresses_collectes")), "collection_day", array()), "html", null, true);
            echo "\" selected >";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collection_day"] ?? $this->getContext($context, "collection_day")), $this->getAttribute(($context["adresses_collectes"] ?? $this->getContext($context, "adresses_collectes")), "collection_day", array()), array(), "array"), "html", null, true);
            echo "</option>
                            ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection_day"] ?? $this->getContext($context, "collection_day")));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 86
                echo "                                ";
                if (($context["type"] != $this->getAttribute(($context["adresses_collectes"] ?? $this->getContext($context, "adresses_collectes")), "collection_day", array()))) {
                    // line 87
                    echo "                                    <option value=\"";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "</option>
                                ";
                }
                // line 89
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                        ";
        } else {
            // line 91
            echo "                            
                                <option value=\"\">Choisissez un jour de collecte</option>
                                <option value=\"lundi\">Lundi</option>
                                <option value=\"mardi\">Mardi</option>
                                <option value=\"mercredi\">Mercredi</option>
                                <option value=\"jeudi\">Jeudi</option>
                                <option value=\"vendredi\">Vendredi</option>
                                <option value=\"samedi\">Samedi</option>
                                <option value=\"dimanche\">Dimanche</option>
                           
                        ";
        }
        // line 102
        echo "                    </select>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"further_information\">Remarques complémentaires</label>
                <div class=\"col-md-4\">                    
                    <textarea class=\"form-control\" id=\"remarques\" name=\"further_information\" placeholder=\"Remarques complémentaires\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute(($context["adresses_collectes"] ?? $this->getContext($context, "adresses_collectes")), "further_information", array()), "html", null, true);
        echo "\"></textarea>
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
        
        $__internal_44c2d9b1c9943fbb32b8742ea55303c62f04202e58d8afa5dc723bd7b41237a2->leave($__internal_44c2d9b1c9943fbb32b8742ea55303c62f04202e58d8afa5dc723bd7b41237a2_prof);

        
        $__internal_5dfa995e6dfedc2f596a5a9be3ac75823914bb68282b7aa7f8f3cc4c44057825->leave($__internal_5dfa995e6dfedc2f596a5a9be3ac75823914bb68282b7aa7f8f3cc4c44057825_prof);

    }

    public function getTemplateName()
    {
        return "admin/formulaireAdresseCollecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 108,  266 => 102,  253 => 91,  250 => 90,  244 => 89,  236 => 87,  233 => 86,  229 => 85,  222 => 84,  220 => 83,  210 => 75,  195 => 73,  191 => 72,  180 => 64,  171 => 58,  162 => 52,  154 => 46,  148 => 42,  145 => 41,  139 => 40,  131 => 38,  128 => 37,  124 => 36,  117 => 35,  115 => 34,  104 => 26,  95 => 20,  87 => 14,  71 => 12,  67 => 11,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
    <form class=\"form-horizontal\" method=\"post\">
        <fieldset>
            <legend style=\"text-align: center;\"><strong>{% if adresses_collectes.id_collection_address%}Modification du lieu de collecte : {{ adresses_collectes.address_name }}{% else %}Ajout d'un lieu de collecte{% endif %}</strong></legend>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"client_idclient\">Site apartenant au client </label>
                <div class=\"col-md-4\">
                    <select id=\"client\" name=\"client_idclient\" class=\"form-control\">
                        <option value=\"\">Choisissez un client</option>
                        {% for client in clients %}
                            <option value=\"{{client.idClient}}\"{% if client.idclient == adresses_collectes.id_collection_address %}selected{%endif%}>{{client.firstname}}{{client.lastname}} </option>
                        {% endfor %}
                    </select>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"address_collection\">Adresse de collecte</label>  
                <div class=\"col-md-4\">
                    <input id=\"adresse_collecte\" name=\"address_collection\" type=\"text\" placeholder=\"Adresse de collecte\" class=\"form-control input-md\" value=\"{{ adresses_collectes.address_collection }}\">
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"address_name\">Nom de l'établissement</label>  
                <div class=\"col-md-4\">
                    <input id=\"adresse_collecte\" name=\"address_name\" type=\"text\" placeholder=\"Nom de l'établissement\" class=\"form-control input-md\" value=\"{{ adresses_collectes.address_name }}\">
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"firm_type\">Type d'établissement</label>
                <div class=\"col-md-4\">
                    <select id=\"lieu_traitement\" name=\"firm_type\" class=\"form-control\">
                        <option value=\"\" selected>Choisissez un type d'établissement</option>
                        {% if adresses_collectes.id_collection_address%}
                            <option value=\"{{adresses_collectes.firm_type}}\" selected >{{firm_type[adresses_collectes.firm_type]}}</option>
                            {% for type in firm_type %}
                                {% if type != adresses_collectes.firm_type %}
                                    <option value=\"{{type}}\">{{type}}</option>
                                {%endif%}
                            {% endfor %}
                        {% else %}
                            <option value=\"epicerie\">Epicerie</option>
                            <option value=\"restaurant\">Restaurant</option>
                            <option value=\"restaurantCollectif\">Restaurant Collectif</option>
                        {% endif %}
                    </select>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"city\">Ville</label>  
                <div class=\"col-md-4\">
                    <input id=\"ville\" name=\"city\" type=\"text\" placeholder=\"Ville\" class=\"form-control input-md\" value=\"{{ adresses_collectes.city }}\">
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"postal_code\">Code postal</label>  
                <div class=\"col-md-4\">
                    <input id=\"code_postal\" name=\"postal_code\" type=\"text\" placeholder=\"Code postal\" class=\"form-control input-md\" value=\"{{ adresses_collectes.postal_code }}\">
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"country\">Pays</label>  
                <div class=\"col-md-4\">
                    <input id=\"pays\" name=\"country\" type=\"text\" placeholder=\"Pays\" class=\"form-control input-md\" value=\"{{ adresses_collectes.country }}\">
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"location_processing_idlocation_processing\">Lieu de traitement</label>
                <div class=\"col-md-4\">
                    <select id=\"lieu_traitement\" name=\"location_processing_idlocation_processing\" class=\"form-control\">
                        <option value=\"\">Choisissez un lieu de traitement</option>
                        {% for location in locations %}
                            <option value=\"{{location.id_location_processing}}\" {% if location.id_location_processing == adresses_collectes.id_collection_address %}selected{%endif%}>{{location.processing_location}} </option>
                        {% endfor %}
                    </select>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"collection_day\">Jours de collecte</label>
                <div class=\"col-md-4\">
                    <select id=\"jours_collecte\" name=\"collection_day\" class=\"form-control\">
                        <option value=\"\" selected>Choisissez un type d'établissement</option>
                        {% if adresses_collectes.id_collection_address%}
                            <option value=\"{{adresses_collectes.collection_day}}\" selected >{{collection_day[adresses_collectes.collection_day]}}</option>
                            {% for type in collection_day %}
                                {% if type != adresses_collectes.collection_day %}
                                    <option value=\"{{type}}\">{{type}}</option>
                                {%endif%}
                            {% endfor %}
                        {% else %}
                            
                                <option value=\"\">Choisissez un jour de collecte</option>
                                <option value=\"lundi\">Lundi</option>
                                <option value=\"mardi\">Mardi</option>
                                <option value=\"mercredi\">Mercredi</option>
                                <option value=\"jeudi\">Jeudi</option>
                                <option value=\"vendredi\">Vendredi</option>
                                <option value=\"samedi\">Samedi</option>
                                <option value=\"dimanche\">Dimanche</option>
                           
                        {% endif %}
                    </select>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-4 control-label\" for=\"further_information\">Remarques complémentaires</label>
                <div class=\"col-md-4\">                    
                    <textarea class=\"form-control\" id=\"remarques\" name=\"further_information\" placeholder=\"Remarques complémentaires\" value=\"{{ adresses_collectes.further_information }}\"></textarea>
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
", "admin/formulaireAdresseCollecte.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\templates\\admin\\formulaireAdresseCollecte.html.twig");
    }
}
