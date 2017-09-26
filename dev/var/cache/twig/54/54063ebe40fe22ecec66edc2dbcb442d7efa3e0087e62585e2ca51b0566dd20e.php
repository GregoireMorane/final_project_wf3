<?php

/* compteclientdac.html.twig */
class __TwigTemplate_07d570fb07f7511f29e0207280d0261bde7920678ca574d53c9a2acf8995fd00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "compteclientdac.html.twig", 1);
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
        $__internal_6e4357554d4aeb5ecb74928005d64a9e5665c079c462d3422074e995d5d14eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4357554d4aeb5ecb74928005d64a9e5665c079c462d3422074e995d5d14eb9->enter($__internal_6e4357554d4aeb5ecb74928005d64a9e5665c079c462d3422074e995d5d14eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compteclientdac.html.twig"));

        $__internal_48e9a46614d9d636bc70942e9efc8f87814f2564918f77906a9b3ceb0aef3c3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48e9a46614d9d636bc70942e9efc8f87814f2564918f77906a9b3ceb0aef3c3e->enter($__internal_48e9a46614d9d636bc70942e9efc8f87814f2564918f77906a9b3ceb0aef3c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compteclientdac.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e4357554d4aeb5ecb74928005d64a9e5665c079c462d3422074e995d5d14eb9->leave($__internal_6e4357554d4aeb5ecb74928005d64a9e5665c079c462d3422074e995d5d14eb9_prof);

        
        $__internal_48e9a46614d9d636bc70942e9efc8f87814f2564918f77906a9b3ceb0aef3c3e->leave($__internal_48e9a46614d9d636bc70942e9efc8f87814f2564918f77906a9b3ceb0aef3c3e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4bd4a0ee79c7695865b2bd2504d08c2e5d942bc50aff4a21d394a3dde1f47d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd4a0ee79c7695865b2bd2504d08c2e5d942bc50aff4a21d394a3dde1f47d30->enter($__internal_4bd4a0ee79c7695865b2bd2504d08c2e5d942bc50aff4a21d394a3dde1f47d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2b99cff93832e9d4caa99075d09c4452830c1b822cfd37201b0704107ae61960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b99cff93832e9d4caa99075d09c4452830c1b822cfd37201b0704107ae61960->enter($__internal_2b99cff93832e9d4caa99075d09c4452830c1b822cfd37201b0704107ae61960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-xs-12\">

                <div class=\"row\">
                    <div class=\"text-center bloc gris dactitle\">
                        DOCUMENT D'ACCOMPAGNEMENT COMMERCIAL (DAC)<br />
                        Pour le transport de sous-produits animaux de catégorie 3<br />
                        Transformés ou non
                    </div>
                </div>

                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["oneDacDetails"] ?? $this->getContext($context, "oneDacDetails")));
        foreach ($context['_seq'] as $context["_key"] => $context["oneDacDetail"]) {
            echo "                
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\">
                            <tbody>
                                <tr class=\"text-center\">
                                    <td colspan=\"4\" class=\"tabtitle\">Dénomination et poids des sous-produits</td>
                                </tr>
                                <tr class=\"text-center\">
                                    <td colspan=\"4\" class=\"tabsubtitle\">Sous-produits animaux de CATEGORIE 3 - impropres à la consommation humaine</td>
                                </tr>
                                <tr>
                                    <td colspan=\"4\">
                                        <p><strong>Description du produit :</strong></p>
                                        <p style=\"text-indent: 3em;\"><strong>biodéchets triés à la source, issus de : </strong>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oneDacDetail"], "lieu", array()), "firm_type", array()), "html", null, true);
            echo ".</p>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <p><strong>N° du bac : </strong>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["oneDacDetail"], "bin_number", array()), "html", null, true);
            echo ".</p>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <p><strong>Qualité des biodéchets :</strong> ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["oneDacDetail"], "compost_quality", array()), "html", null, true);
            echo ".</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"4\"><strong>Espèces représentés :</strong> mélange (produits en vrac).</td>
                                </tr>
                                <tr>
                                    <td colspan=\"2\">
                                        <p><strong>Informations complémentaires, nature des produits ajoutés (sel, anticoagulant...), le cas échéant: </strong>
                                            ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["oneDacDetail"], "further_information", array()), "html", null, true);
            echo ".</p>
                                    </td>
                                    <td colspan=\"2\"><strong>Poids total (en Kg) pesé : </strong>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["oneDacDetail"], "weight", array()), "html", null, true);
            echo ".</td> 
                                </tr>
                                <tr class=\"text-center\">
                                    <td colspan=\"4\" class=\"tabtitle\">Etablissement de départ des sous-produits</td>
                                </tr>
                                <tr>
                                    <td colspan=\"2\" rowspan=\"3\">
                                        <p><strong>Type d'établissement : </strong>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oneDacDetail"], "lieu", array()), "firm_type", array()), "html", null, true);
            echo ".<p>
                                        <p><strong>Raison sociale et adresse :</strong></p>
                                            <p class=\"text-center\">
                                                ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oneDacDetail"], "lieu", array()), "address_collection", array()), "html", null, true);
            echo "<br /> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oneDacDetail"], "lieu", array()), "postal_code", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oneDacDetail"], "lieu", array()), "city", array()), "html", null, true);
            echo "
                                            </p>
                                    </td>
                                    <td colspan=\"2\"><strong>N° de SIRET :</strong>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()), "siret", array()), "html", null, true);
            echo ".</td>
                                </tr>
                                <tr>
                                    <td><strong>Téléphone :</strong>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()), "phonenumber", array()), "html", null, true);
            echo ".</td>
                                    <td><strong>Fax :</strong></td>
                                </tr>
                                <tr>
                                    <td colspan=\"2\"><strong>Nom du responsable/représentant de l'établissement de départ :</strong>
                                        <p class=\"text-center\">";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()), "lastname", array()), "html", null, true);
            echo "</p>
                                    </td>
                                </tr>        
                                <tr class=\"text-center\">
                                    <td colspan=\"4\" class=\"tabtitle\">Collecteur - Transporteur des sous-produits</td>
                                </tr>
                                <tr>
                                    <td colspan=\"2\" rowspan=\"5\">
                                        <p><strong>Raison sociale et adresse:</strong></p>
                                        <p class=\"text-center\">
                                            SAS Les Alchimistes<br/>6 rue Arnold Géraux<br/>93450 L'île Saint-Denis
                                        </p>
                                    </td>
                                    <td colspan=\"2\"><strong>N° d'enregistrement :</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Téléphone : 01 84 21 47 89.</strong></td>
                                    <td><strong>Fax :</strong></td>
                                </tr>
                                <tr>
                                    <td colspan=\"2\"><strong>N° d'immatriculation :</strong></td>
                                </tr>
                                <tr>
                                    <td colspan=\"2\"><strong>Date de chargement : </strong>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["oneDacDetail"], "collection_datetime", array()), "html", null, true);
            echo ".</td>
                                </tr>
                                <tr>
                                    <td colspan=\"2\"><strong>Nom et signature du chauffeur/collecteur : </strong>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oneDacDetail"], "collector", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oneDacDetail"], "collector", array()), "lastname", array()), "html", null, true);
            echo ".
                                    </td>
                                </tr>
                                <tr class=\"text-center\">
                                    <td colspan=\"4\" class=\"tabtitle\">Etablissement destinataire des sous-produits</td>
                                </tr>
                                <tr>
                                    <td colspan=\"2\" rowspan=\"2\"><strong>Type d'établissement : installation de compostage.</strong></td>
                                    <td colspan=\"2\"><strong>N° d'agrément :</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Téléphone :</strong> 01 84 21 47 89.</td>
                                    <td><strong>Fax :</strong></td>
                                </tr>
                                <tr>
                                    <td colspan=\"2\" rowspan=\"2\">
                                        <p><strong>Raison sociale et adresse :</strong></p>
                                        <p class=\"text-center\">
                                            SAS Les Alchimistes<br/>
                                            ";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oneDacDetail"], "location_processing", array()), "processing_address", array()), "html", null, true);
            echo "<br /> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oneDacDetail"], "location_processing", array()), "postal_code", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oneDacDetail"], "location_processing", array()), "city", array()), "html", null, true);
            echo ".
                                        </p>
                                    </td>
                                    <td colspan=\"2\"><strong>Date et heure de réception : </strong>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["oneDacDetail"], "processing_datetime", array()), "html", null, true);
            echo ".</td>
                                </tr>
                                <tr>
                                    <td colspan=\"2\"><strong>Nom du responsable du site de destination ou de son représentant :</strong>
                                        <p class=\"text-center\">Fabien-Kenzo Sato</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class=\"row\">
                        <div class=\"text-center\">
                            <h4 class=\"ici\">Pour obtenir votre DAC au format PDF, cliquez <a href=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dacpdf", array("id_dac" => $this->getAttribute($context["oneDacDetail"], "id_adresses_collections_have_collector", array()))), "html", null, true);
            echo "\">ici</a>.</h4>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oneDacDetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_2b99cff93832e9d4caa99075d09c4452830c1b822cfd37201b0704107ae61960->leave($__internal_2b99cff93832e9d4caa99075d09c4452830c1b822cfd37201b0704107ae61960_prof);

        
        $__internal_4bd4a0ee79c7695865b2bd2504d08c2e5d942bc50aff4a21d394a3dde1f47d30->leave($__internal_4bd4a0ee79c7695865b2bd2504d08c2e5d942bc50aff4a21d394a3dde1f47d30_prof);

    }

    public function getTemplateName()
    {
        return "compteclientdac.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 135,  237 => 131,  221 => 118,  211 => 115,  187 => 96,  181 => 93,  153 => 70,  145 => 65,  139 => 62,  129 => 59,  123 => 56,  113 => 49,  108 => 47,  94 => 36,  88 => 33,  82 => 30,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-xs-12\">

                <div class=\"row\">
                    <div class=\"text-center bloc gris dactitle\">
                        DOCUMENT D'ACCOMPAGNEMENT COMMERCIAL (DAC)<br />
                        Pour le transport de sous-produits animaux de catégorie 3<br />
                        Transformés ou non
                    </div>
                </div>

                {% for oneDacDetail in oneDacDetails %}                
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\">
                            <tbody>
                                <tr class=\"text-center\">
                                    <td colspan=\"4\" class=\"tabtitle\">Dénomination et poids des sous-produits</td>
                                </tr>
                                <tr class=\"text-center\">
                                    <td colspan=\"4\" class=\"tabsubtitle\">Sous-produits animaux de CATEGORIE 3 - impropres à la consommation humaine</td>
                                </tr>
                                <tr>
                                    <td colspan=\"4\">
                                        <p><strong>Description du produit :</strong></p>
                                        <p style=\"text-indent: 3em;\"><strong>biodéchets triés à la source, issus de : </strong>{{ oneDacDetail.lieu.firm_type }}.</p>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <p><strong>N° du bac : </strong>{{ oneDacDetail.bin_number }}.</p>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <p><strong>Qualité des biodéchets :</strong> {{ oneDacDetail.compost_quality }}.</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"4\"><strong>Espèces représentés :</strong> mélange (produits en vrac).</td>
                                </tr>
                                <tr>
                                    <td colspan=\"2\">
                                        <p><strong>Informations complémentaires, nature des produits ajoutés (sel, anticoagulant...), le cas échéant: </strong>
                                            {{ oneDacDetail.further_information }}.</p>
                                    </td>
                                    <td colspan=\"2\"><strong>Poids total (en Kg) pesé : </strong>{{ oneDacDetail.weight }}.</td> 
                                </tr>
                                <tr class=\"text-center\">
                                    <td colspan=\"4\" class=\"tabtitle\">Etablissement de départ des sous-produits</td>
                                </tr>
                                <tr>
                                    <td colspan=\"2\" rowspan=\"3\">
                                        <p><strong>Type d'établissement : </strong>{{ oneDacDetail.lieu.firm_type }}.<p>
                                        <p><strong>Raison sociale et adresse :</strong></p>
                                            <p class=\"text-center\">
                                                {{ oneDacDetail.lieu.address_collection }}<br /> {{ oneDacDetail.lieu.postal_code }} {{ oneDacDetail.lieu.city }}
                                            </p>
                                    </td>
                                    <td colspan=\"2\"><strong>N° de SIRET :</strong>{{ user_manager.user.siret }}.</td>
                                </tr>
                                <tr>
                                    <td><strong>Téléphone :</strong>{{ user_manager.user.phonenumber }}.</td>
                                    <td><strong>Fax :</strong></td>
                                </tr>
                                <tr>
                                    <td colspan=\"2\"><strong>Nom du responsable/représentant de l'établissement de départ :</strong>
                                        <p class=\"text-center\">{{ user_manager.user.firstname }} {{ user_manager.user.lastname }}</p>
                                    </td>
                                </tr>        
                                <tr class=\"text-center\">
                                    <td colspan=\"4\" class=\"tabtitle\">Collecteur - Transporteur des sous-produits</td>
                                </tr>
                                <tr>
                                    <td colspan=\"2\" rowspan=\"5\">
                                        <p><strong>Raison sociale et adresse:</strong></p>
                                        <p class=\"text-center\">
                                            SAS Les Alchimistes<br/>6 rue Arnold Géraux<br/>93450 L'île Saint-Denis
                                        </p>
                                    </td>
                                    <td colspan=\"2\"><strong>N° d'enregistrement :</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Téléphone : 01 84 21 47 89.</strong></td>
                                    <td><strong>Fax :</strong></td>
                                </tr>
                                <tr>
                                    <td colspan=\"2\"><strong>N° d'immatriculation :</strong></td>
                                </tr>
                                <tr>
                                    <td colspan=\"2\"><strong>Date de chargement : </strong>{{ oneDacDetail.collection_datetime }}.</td>
                                </tr>
                                <tr>
                                    <td colspan=\"2\"><strong>Nom et signature du chauffeur/collecteur : </strong>{{ oneDacDetail.collector.firstname }} {{ oneDacDetail.collector.lastname }}.
                                    </td>
                                </tr>
                                <tr class=\"text-center\">
                                    <td colspan=\"4\" class=\"tabtitle\">Etablissement destinataire des sous-produits</td>
                                </tr>
                                <tr>
                                    <td colspan=\"2\" rowspan=\"2\"><strong>Type d'établissement : installation de compostage.</strong></td>
                                    <td colspan=\"2\"><strong>N° d'agrément :</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Téléphone :</strong> 01 84 21 47 89.</td>
                                    <td><strong>Fax :</strong></td>
                                </tr>
                                <tr>
                                    <td colspan=\"2\" rowspan=\"2\">
                                        <p><strong>Raison sociale et adresse :</strong></p>
                                        <p class=\"text-center\">
                                            SAS Les Alchimistes<br/>
                                            {{ oneDacDetail.location_processing.processing_address }}<br /> {{ oneDacDetail.location_processing.postal_code }} {{ oneDacDetail.location_processing.city }}.
                                        </p>
                                    </td>
                                    <td colspan=\"2\"><strong>Date et heure de réception : </strong>{{ oneDacDetail.processing_datetime }}.</td>
                                </tr>
                                <tr>
                                    <td colspan=\"2\"><strong>Nom du responsable du site de destination ou de son représentant :</strong>
                                        <p class=\"text-center\">Fabien-Kenzo Sato</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class=\"row\">
                        <div class=\"text-center\">
                            <h4 class=\"ici\">Pour obtenir votre DAC au format PDF, cliquez <a href=\"{{ path('dacpdf', {id_dac: oneDacDetail.id_adresses_collections_have_collector}) }}\">ici</a>.</h4>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "compteclientdac.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\templates\\compteclientdac.html.twig");
    }
}
