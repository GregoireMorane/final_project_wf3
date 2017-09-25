<?php

/* index.html.twig */
class __TwigTemplate_7f369f760805ef7be4d5467a3a6ed9d4879c998580b3fac7ace0d93777ab73af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
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
        $__internal_18e6322ac3501b6405d3b9ddd22d2384a097f733c2934e96c88a6a3fd974b062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e6322ac3501b6405d3b9ddd22d2384a097f733c2934e96c88a6a3fd974b062->enter($__internal_18e6322ac3501b6405d3b9ddd22d2384a097f733c2934e96c88a6a3fd974b062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_b03b574a15425e9def6d900320169266b2f7bc729ef1028407b308afb78bc17f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03b574a15425e9def6d900320169266b2f7bc729ef1028407b308afb78bc17f->enter($__internal_b03b574a15425e9def6d900320169266b2f7bc729ef1028407b308afb78bc17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18e6322ac3501b6405d3b9ddd22d2384a097f733c2934e96c88a6a3fd974b062->leave($__internal_18e6322ac3501b6405d3b9ddd22d2384a097f733c2934e96c88a6a3fd974b062_prof);

        
        $__internal_b03b574a15425e9def6d900320169266b2f7bc729ef1028407b308afb78bc17f->leave($__internal_b03b574a15425e9def6d900320169266b2f7bc729ef1028407b308afb78bc17f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d081099c54bd875948b2399165cad1b9d95b1c93949da0be65e798a4ea163fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d081099c54bd875948b2399165cad1b9d95b1c93949da0be65e798a4ea163fcd->enter($__internal_d081099c54bd875948b2399165cad1b9d95b1c93949da0be65e798a4ea163fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b004ec142f232b69a83705a60e87508368270db40c0f1f7d157bce1938213e0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b004ec142f232b69a83705a60e87508368270db40c0f1f7d157bce1938213e0a->enter($__internal_b004ec142f232b69a83705a60e87508368270db40c0f1f7d157bce1938213e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div id=\"homepage\">
        <div class=\"imgHead\">
            <img class=\"imgBackground\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/img-perso3.JPG"), "html", null, true);
        echo "\">
        </div>
        <br>
        <div class=\"bloc2\">
            <div class=\"blocGauche2 col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
                <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon-material.png"), "html", null, true);
        echo "\" width=\"50\" height=\"50\">
                <h2>Les alchimistes</h2>
                <span>Les Alchimistes se proposent de collecter et transformer les déchets organiques en ville: bio-déchets mais aussi couches usagées !</span>
                <br>
                <span>Les Alchimistes partent du constat que les déchets sont mal valorisés et voyagent trop.</span>
                <br>
                <span>Nous faisons le pari que nous pouvons traiter les déchets organiques, en ville, à moins de 3 km de l’endroit où ils sont générés.</span>
                <br>
                <span>Et donc mieux valoriser le compost ainsi fabriqué en milieu urbain dense. Au lieu de gros camions-poubelles odorants, volumineux, bruyants, nous préférons la logistique douce (tri-porteurs ou camionnettes électriques, …).</span>
                <br>
                <span>Aux plate-formes de compostage industrielles à ciel ouvert, nous préférons les composteurs semi-industriels en circuit fermés évitant nuisances olfactives et machines industrielles.</span>
                <br>
                <span>A la vente du compost à bas prix, nous préférons la vente du compost de haute qualité pour un usage local d’agriculture urbaine pour les professionnels et les particuliers.</span>
                <br>
                <span>A des métiers, très spécialisés, à faible valeur ajoutée et mal valorisés, nous préférons la création du métier de collecteur-maître composteur, inséré dans son quartier avec des missions riches et diverses.</span>
                <br>
                <span>Pour un produit dense et volumineux, le circuit-court s’impose !</span>
            </div>
        </div>
        <div class=\"clear\"></div>
        <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
        <div class=\"clear\"></div>
        <br>
        <div class=\"bloc4\">
            <div class=\"blocGauche2 col-lg-5 col-md-10 col-xs-10 col-md-offset-1 col-md-offset-1 col-xs-offset-1\">
                <img class=\"imgBackground\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/cercle.png"), "html", null, true);
        echo "\">
            </div>
            <div class=\"blocDroite2 col-lg-5 col-md-10 col-xs-10 col-md-offset-1 col-md-offset-1 col-xs-offset-1\">
                <h3>Bouclons la boucle !</h3>
                <span>Alors que le volume des déchets ménagers a doublé depuis 1960, Les Alchimistes ont pour ambition de s’attaquer à la problématique des biodéchets avec une solution pertinente et innovante.</span>
                <br><br>
                <span>Finis les camions encombrants, bruyants et malodorants qui transportent les biodéchets à des kilomètres.</span>
                <br><br>
                <span>Les Alchimistes les récupèrent et les traitent, au cœur de la ville, pour approvisionner les jardiniers et agriculteurs urbains en amendement riche et 100% naturel.</span>
            </div>
        </div>
        <div class=\"clear\"></div>
        <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
        <div class=\"clear\"></div>
        <div class=\"bloc5\">
            <div class=\"blocGauche2 col-lg-4 col-md-10 col-xs-10 col-lg-offset-4 col-md-offset-1 col-xs-offset-1\">
                <h2>Nous produisons en ville un compost ultra-local et de heute qualité</h2>
            </div>
        </div>
        <div class=\"clear\"></div>
        <div class=\"bloc6\">
            <div class=\"blocGauche2 col-lg-3 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
                <h3>Qualité</h3>
                <span>Nous collectons vos déchets organiques et les compostons dans votre quartier. La proximité limite drastiquement l’impact du transport et permet de relocaliser la gestion des déchets au plus près de leur production.</span>
            </div>
            <div class=\"blocGauche2 col-lg-3 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
                <h3>Transparence</h3>
                <span>Nos sites de compostage sont facilement accessibles. Les enfants et autres visiteurs viennent pour mieux comprendre le cycle de la matière organique et la nécessité du tri sélectif. Toutes les informations, origine des matières entrantes, transformation, maturation… sont disponibles et la traçabilité est assurée.</span>
            </div>
            <div class=\"blocGauche2 col-lg-3 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
                <h3>Professionnalisme</h3>
                <span>Nous utilisons des composteurs électromécaniques. Nos machines permettent de monitorer finement le procédé de compostage et d’accepter tout type déchets alimentaires (restes de cuisine et de table comprenant de la viande et du poisson). Nos sites ont un agrément sanitaire délivré par la préfecture et notre compost est normé NFU 44051.</span>
            </div>
        </div>
        <div class=\"clear\"></div>
        <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
        <div class=\"clear\"></div>
        <br>
        <div class=\"footr\">
            <div class=\"blocMap col-lg-3 col-md-3 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.1274968258563!2d2.3321566154971847!3d48.83670671018753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671c7785c4fdb%3A0xb118bc844f2f417a!2sLes+Grands+Voisins!5e0!3m2!1sfr!2sfr!4v1505995015490\" width=\"275\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
            </div>
            <div class=\"blocInfo col-lg-3 col-md-3 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
                <h3>Contact :</h3>
                <h4>LES ALCHIMISTES</h4>
                <span>SAS au capital de 12 000€</span><br>
                <span>SIRET: 824 298 343 00016</span><br><br>
                <span>Le PHARES, 6 rue Arnold Géraux</span><br>
                <span>93450 L’ïle-Saint-Denis</span><br><br>
                <span>+33 1 84 21 47 89</span><br>
                <span>contact@alchimistes.co</span><br>
            </div>
            <div class=\"blocReseaux col-lg-3 col-md-3 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
                <h3>Suivez-nous :</h3><br>
                <a href=\"https://www.facebook.com/Lesalchimistesfleurs/\"><img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "\" width=\"75\" height=\"60\"></a><br><br>
                <a href=\"https://twitter.com/AlchimistesCo\"><img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo-twitter.png"), "html", null, true);
        echo "\" width=\"75\" height=\"60\"></a>
            </div>
        </div>
        <a href=\"javascript:\" id=\"return-to-top\"><i class=\"icon-chevron-up\"></i></a>
    </div>
";
        
        $__internal_b004ec142f232b69a83705a60e87508368270db40c0f1f7d157bce1938213e0a->leave($__internal_b004ec142f232b69a83705a60e87508368270db40c0f1f7d157bce1938213e0a_prof);

        
        $__internal_d081099c54bd875948b2399165cad1b9d95b1c93949da0be65e798a4ea163fcd->leave($__internal_d081099c54bd875948b2399165cad1b9d95b1c93949da0be65e798a4ea163fcd_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 91,  146 => 90,  89 => 36,  61 => 11,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <div id=\"homepage\">
        <div class=\"imgHead\">
            <img class=\"imgBackground\" src=\"{{asset('images/img-perso3.JPG')}}\">
        </div>
        <br>
        <div class=\"bloc2\">
            <div class=\"blocGauche2 col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
                <img src=\"{{asset('images/icon-material.png')}}\" width=\"50\" height=\"50\">
                <h2>Les alchimistes</h2>
                <span>Les Alchimistes se proposent de collecter et transformer les déchets organiques en ville: bio-déchets mais aussi couches usagées !</span>
                <br>
                <span>Les Alchimistes partent du constat que les déchets sont mal valorisés et voyagent trop.</span>
                <br>
                <span>Nous faisons le pari que nous pouvons traiter les déchets organiques, en ville, à moins de 3 km de l’endroit où ils sont générés.</span>
                <br>
                <span>Et donc mieux valoriser le compost ainsi fabriqué en milieu urbain dense. Au lieu de gros camions-poubelles odorants, volumineux, bruyants, nous préférons la logistique douce (tri-porteurs ou camionnettes électriques, …).</span>
                <br>
                <span>Aux plate-formes de compostage industrielles à ciel ouvert, nous préférons les composteurs semi-industriels en circuit fermés évitant nuisances olfactives et machines industrielles.</span>
                <br>
                <span>A la vente du compost à bas prix, nous préférons la vente du compost de haute qualité pour un usage local d’agriculture urbaine pour les professionnels et les particuliers.</span>
                <br>
                <span>A des métiers, très spécialisés, à faible valeur ajoutée et mal valorisés, nous préférons la création du métier de collecteur-maître composteur, inséré dans son quartier avec des missions riches et diverses.</span>
                <br>
                <span>Pour un produit dense et volumineux, le circuit-court s’impose !</span>
            </div>
        </div>
        <div class=\"clear\"></div>
        <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
        <div class=\"clear\"></div>
        <br>
        <div class=\"bloc4\">
            <div class=\"blocGauche2 col-lg-5 col-md-10 col-xs-10 col-md-offset-1 col-md-offset-1 col-xs-offset-1\">
                <img class=\"imgBackground\" src=\"{{asset('images/cercle.png')}}\">
            </div>
            <div class=\"blocDroite2 col-lg-5 col-md-10 col-xs-10 col-md-offset-1 col-md-offset-1 col-xs-offset-1\">
                <h3>Bouclons la boucle !</h3>
                <span>Alors que le volume des déchets ménagers a doublé depuis 1960, Les Alchimistes ont pour ambition de s’attaquer à la problématique des biodéchets avec une solution pertinente et innovante.</span>
                <br><br>
                <span>Finis les camions encombrants, bruyants et malodorants qui transportent les biodéchets à des kilomètres.</span>
                <br><br>
                <span>Les Alchimistes les récupèrent et les traitent, au cœur de la ville, pour approvisionner les jardiniers et agriculteurs urbains en amendement riche et 100% naturel.</span>
            </div>
        </div>
        <div class=\"clear\"></div>
        <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
        <div class=\"clear\"></div>
        <div class=\"bloc5\">
            <div class=\"blocGauche2 col-lg-4 col-md-10 col-xs-10 col-lg-offset-4 col-md-offset-1 col-xs-offset-1\">
                <h2>Nous produisons en ville un compost ultra-local et de heute qualité</h2>
            </div>
        </div>
        <div class=\"clear\"></div>
        <div class=\"bloc6\">
            <div class=\"blocGauche2 col-lg-3 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
                <h3>Qualité</h3>
                <span>Nous collectons vos déchets organiques et les compostons dans votre quartier. La proximité limite drastiquement l’impact du transport et permet de relocaliser la gestion des déchets au plus près de leur production.</span>
            </div>
            <div class=\"blocGauche2 col-lg-3 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
                <h3>Transparence</h3>
                <span>Nos sites de compostage sont facilement accessibles. Les enfants et autres visiteurs viennent pour mieux comprendre le cycle de la matière organique et la nécessité du tri sélectif. Toutes les informations, origine des matières entrantes, transformation, maturation… sont disponibles et la traçabilité est assurée.</span>
            </div>
            <div class=\"blocGauche2 col-lg-3 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
                <h3>Professionnalisme</h3>
                <span>Nous utilisons des composteurs électromécaniques. Nos machines permettent de monitorer finement le procédé de compostage et d’accepter tout type déchets alimentaires (restes de cuisine et de table comprenant de la viande et du poisson). Nos sites ont un agrément sanitaire délivré par la préfecture et notre compost est normé NFU 44051.</span>
            </div>
        </div>
        <div class=\"clear\"></div>
        <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
        <div class=\"clear\"></div>
        <br>
        <div class=\"footr\">
            <div class=\"blocMap col-lg-3 col-md-3 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.1274968258563!2d2.3321566154971847!3d48.83670671018753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671c7785c4fdb%3A0xb118bc844f2f417a!2sLes+Grands+Voisins!5e0!3m2!1sfr!2sfr!4v1505995015490\" width=\"275\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
            </div>
            <div class=\"blocInfo col-lg-3 col-md-3 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
                <h3>Contact :</h3>
                <h4>LES ALCHIMISTES</h4>
                <span>SAS au capital de 12 000€</span><br>
                <span>SIRET: 824 298 343 00016</span><br><br>
                <span>Le PHARES, 6 rue Arnold Géraux</span><br>
                <span>93450 L’ïle-Saint-Denis</span><br><br>
                <span>+33 1 84 21 47 89</span><br>
                <span>contact@alchimistes.co</span><br>
            </div>
            <div class=\"blocReseaux col-lg-3 col-md-3 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
                <h3>Suivez-nous :</h3><br>
                <a href=\"https://www.facebook.com/Lesalchimistesfleurs/\"><img src=\"{{asset('images/facebook.png')}}\" width=\"75\" height=\"60\"></a><br><br>
                <a href=\"https://twitter.com/AlchimistesCo\"><img src=\"{{asset('images/logo-twitter.png')}}\" width=\"75\" height=\"60\"></a>
            </div>
        </div>
        <a href=\"javascript:\" id=\"return-to-top\"><i class=\"icon-chevron-up\"></i></a>
    </div>
{% endblock %}
", "index.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\templates\\index.html.twig");
    }
}
