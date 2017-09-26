<?php

/* compteclientdacpdf.html.twig */
class __TwigTemplate_fdb3372577753002b58fe5b44c48864dd4047f2283d337801cb2d032247f8897 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bf0801d45e85f0aaae75a65f18e827faeb8514623b4a556b78aaede3f429bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf0801d45e85f0aaae75a65f18e827faeb8514623b4a556b78aaede3f429bb1->enter($__internal_0bf0801d45e85f0aaae75a65f18e827faeb8514623b4a556b78aaede3f429bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compteclientdacpdf.html.twig"));

        $__internal_d898e5c61b3ff12f900e3bf9cae735ee2c90e60621569d6ca4b82ea93261d418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d898e5c61b3ff12f900e3bf9cae735ee2c90e60621569d6ca4b82ea93261d418->enter($__internal_d898e5c61b3ff12f900e3bf9cae735ee2c90e60621569d6ca4b82ea93261d418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compteclientdacpdf.html.twig"));

        // line 1
        echo "                                <h1><strong>DOCUMENT D'ACCOMPAGNEMENT COMMERCIAL (DAC)</strong><br />
                pour le transport de sous-produits animaux de catégorie 3 transformés ou non</h1>
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["oneDacDetails"] ?? $this->getContext($context, "oneDacDetails")));
        foreach ($context['_seq'] as $context["_key"] => $context["oneDacDetail"]) {
            // line 4
            echo "    <p><strong>DENOMINATION ET POIDS DES SOUS-PRODUITS</strong><br />
    Sous-produits animaux de CATEGORIE 3 - impropres à la consommation humaine<br />
    <strong>Description du produit :</strong> biodéchets triés à la source, issus de : ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oneDacDetail"], "lieu", array()), "firm_type", array()), "html", null, true);
            echo ".<br />
    <strong>N° du bac : </strong>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["oneDacDetail"], "bin_number", array()), "html", null, true);
            echo ".<br />
    <strong>Qualité des biodéchets :</strong> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["oneDacDetail"], "compost_quality", array()), "html", null, true);
            echo ".<br />
    <strong>Espèces représentés :</strong> mélange (produits en vrac).<br />
    <strong>Informations complémentaires, nature des produits ajoutés (sel, anticoagulant...), le cas échéant : </strong>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["oneDacDetail"], "further_information", array()), "html", null, true);
            echo ".<br />
    <strong>Poids total (en Kg) pesé : </strong>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["oneDacDetail"], "weight", array()), "html", null, true);
            echo ".</p>

    <p><strong>ETABLISSEMENT DE DEPART DES SOUS-PRODUITS</strong><br />
    <strong>Type d'établissement : </strong>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oneDacDetail"], "lieu", array()), "firm_type", array()), "html", null, true);
            echo ".<br />
    <strong>Raison sociale et adresse :</strong>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oneDacDetail"], "lieu", array()), "address_collection", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oneDacDetail"], "lieu", array()), "postal_code", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oneDacDetail"], "lieu", array()), "city", array()), "html", null, true);
            echo "<br />
    <strong>N° de SIRET :</strong>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()), "siret", array()), "html", null, true);
            echo ".<br />
    <strong>Téléphone : </strong>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()), "phonenumber", array()), "html", null, true);
            echo ".<br />
    <strong>Fax : </strong><br />
    <strong>Nom du responsable/représentant de l'établissement de départ : </strong>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()), "lastname", array()), "html", null, true);
            echo "</p>

    <p><strong>COLLECTEUR - TRANSPORTEUR DES SOUS-PRODUITS</strong><br />
    <strong>Raison sociale et adresse:</strong>SAS Les Alchimistes, 6 rue Arnold Géraux, 93450 L'île Saint-Denis<br />
    <strong>N° d'enregistrement : </strong><br />
    <strong>Téléphone : 01 84 21 47 89.</strong><br />
    <strong>Fax : </strong><br />
    <strong>N° d'immatriculation : </strong><br />
    <strong>Date de chargement : </strong>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["oneDacDetail"], "collection_datetime", array()), "html", null, true);
            echo ".<br />
    <strong>Nom et signature du chauffeur/collecteur : </strong>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oneDacDetail"], "collector", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oneDacDetail"], "collector", array()), "lastname", array()), "html", null, true);
            echo ".</p>

    <p><strong>ETABLISSEMENT DESTINATAIRE DES SOUS-PRODUITS</strong><br />
    <strong>Type d'établissement : </strong> installation de compostage.<br />
    <strong>N° d'agrément : </strong><br />
    <strong>Téléphone : </strong>01 84 21 47 89.<br />
    <strong>Fax : </strong><br />
    <strong>Raison sociale et adresse : </strong>SAS Les Alchimistes - ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["oneDacDetail"], "processing_location", array()), "html", null, true);
            echo "<br />
    <strong>Date et heure de réception : </strong>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["oneDacDetail"], "processing_datetime", array()), "html", null, true);
            echo ".<br />
    <strong>Nom du responsable du site de destination ou de son représentant : </strong>Fabien-Kenzo Sato.</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oneDacDetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
";
        
        $__internal_0bf0801d45e85f0aaae75a65f18e827faeb8514623b4a556b78aaede3f429bb1->leave($__internal_0bf0801d45e85f0aaae75a65f18e827faeb8514623b4a556b78aaede3f429bb1_prof);

        
        $__internal_d898e5c61b3ff12f900e3bf9cae735ee2c90e60621569d6ca4b82ea93261d418->leave($__internal_d898e5c61b3ff12f900e3bf9cae735ee2c90e60621569d6ca4b82ea93261d418_prof);

    }

    public function getTemplateName()
    {
        return "compteclientdacpdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 39,  114 => 36,  110 => 35,  98 => 28,  94 => 27,  81 => 19,  76 => 17,  72 => 16,  64 => 15,  60 => 14,  54 => 11,  50 => 10,  45 => 8,  41 => 7,  37 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("                                <h1><strong>DOCUMENT D'ACCOMPAGNEMENT COMMERCIAL (DAC)</strong><br />
                pour le transport de sous-produits animaux de catégorie 3 transformés ou non</h1>
{% for oneDacDetail in oneDacDetails %}
    <p><strong>DENOMINATION ET POIDS DES SOUS-PRODUITS</strong><br />
    Sous-produits animaux de CATEGORIE 3 - impropres à la consommation humaine<br />
    <strong>Description du produit :</strong> biodéchets triés à la source, issus de : {{ oneDacDetail.lieu.firm_type }}.<br />
    <strong>N° du bac : </strong>{{ oneDacDetail.bin_number }}.<br />
    <strong>Qualité des biodéchets :</strong> {{ oneDacDetail.compost_quality }}.<br />
    <strong>Espèces représentés :</strong> mélange (produits en vrac).<br />
    <strong>Informations complémentaires, nature des produits ajoutés (sel, anticoagulant...), le cas échéant : </strong>{{ oneDacDetail.further_information }}.<br />
    <strong>Poids total (en Kg) pesé : </strong>{{ oneDacDetail.weight }}.</p>

    <p><strong>ETABLISSEMENT DE DEPART DES SOUS-PRODUITS</strong><br />
    <strong>Type d'établissement : </strong>{{ oneDacDetail.lieu.firm_type }}.<br />
    <strong>Raison sociale et adresse :</strong>{{ oneDacDetail.lieu.address_collection }} {{ oneDacDetail.lieu.postal_code }} {{ oneDacDetail.lieu.city }}<br />
    <strong>N° de SIRET :</strong>{{ user_manager.user.siret }}.<br />
    <strong>Téléphone : </strong>{{ user_manager.user.phonenumber }}.<br />
    <strong>Fax : </strong><br />
    <strong>Nom du responsable/représentant de l'établissement de départ : </strong>{{ user_manager.user.firstname }} {{ user_manager.user.lastname }}</p>

    <p><strong>COLLECTEUR - TRANSPORTEUR DES SOUS-PRODUITS</strong><br />
    <strong>Raison sociale et adresse:</strong>SAS Les Alchimistes, 6 rue Arnold Géraux, 93450 L'île Saint-Denis<br />
    <strong>N° d'enregistrement : </strong><br />
    <strong>Téléphone : 01 84 21 47 89.</strong><br />
    <strong>Fax : </strong><br />
    <strong>N° d'immatriculation : </strong><br />
    <strong>Date de chargement : </strong>{{ oneDacDetail.collection_datetime }}.<br />
    <strong>Nom et signature du chauffeur/collecteur : </strong>{{ oneDacDetail.collector.firstname }} {{ oneDacDetail.collector.lastname }}.</p>

    <p><strong>ETABLISSEMENT DESTINATAIRE DES SOUS-PRODUITS</strong><br />
    <strong>Type d'établissement : </strong> installation de compostage.<br />
    <strong>N° d'agrément : </strong><br />
    <strong>Téléphone : </strong>01 84 21 47 89.<br />
    <strong>Fax : </strong><br />
    <strong>Raison sociale et adresse : </strong>SAS Les Alchimistes - {{ oneDacDetail.processing_location }}<br />
    <strong>Date et heure de réception : </strong>{{ oneDacDetail.processing_datetime }}.<br />
    <strong>Nom du responsable du site de destination ou de son représentant : </strong>Fabien-Kenzo Sato.</p>
{% endfor %}

", "compteclientdacpdf.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\templates\\compteclientdacpdf.html.twig");
    }
}
