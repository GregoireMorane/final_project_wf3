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
        $__internal_38c359943510a4eae603d253e15b678d30b2cd3669cb1b1d0a6ccc1c5dc79204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c359943510a4eae603d253e15b678d30b2cd3669cb1b1d0a6ccc1c5dc79204->enter($__internal_38c359943510a4eae603d253e15b678d30b2cd3669cb1b1d0a6ccc1c5dc79204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_25d31b2a90b316ddc64bdcd9a7b4a5ea861426d3df24c4bc30f97164b286704e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d31b2a90b316ddc64bdcd9a7b4a5ea861426d3df24c4bc30f97164b286704e->enter($__internal_25d31b2a90b316ddc64bdcd9a7b4a5ea861426d3df24c4bc30f97164b286704e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38c359943510a4eae603d253e15b678d30b2cd3669cb1b1d0a6ccc1c5dc79204->leave($__internal_38c359943510a4eae603d253e15b678d30b2cd3669cb1b1d0a6ccc1c5dc79204_prof);

        
        $__internal_25d31b2a90b316ddc64bdcd9a7b4a5ea861426d3df24c4bc30f97164b286704e->leave($__internal_25d31b2a90b316ddc64bdcd9a7b4a5ea861426d3df24c4bc30f97164b286704e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_50f7b015884504029083ce4596c17283634f5de889eb8976e519505170fa3825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f7b015884504029083ce4596c17283634f5de889eb8976e519505170fa3825->enter($__internal_50f7b015884504029083ce4596c17283634f5de889eb8976e519505170fa3825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_50f60964b20bce0cbf15d6a0a7f8e507f7b148ff2e4fb11af9e553dda3067da6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50f60964b20bce0cbf15d6a0a7f8e507f7b148ff2e4fb11af9e553dda3067da6->enter($__internal_50f60964b20bce0cbf15d6a0a7f8e507f7b148ff2e4fb11af9e553dda3067da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div id=\"homepage\">
        <div style=\"margin-top: 5em;\" class=\"row imgHead\">
            <img class=\"imgBackground\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/img-perso3.JPG"), "html", null, true);
        echo "\">
        </div>
        <br>
        <div class=\"row col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1\" style=\"margin-bottom: 4em;\">
            <h2 style=\"color: #40a529;\" class=\"row text-center\">Les alchimistes</h2><br>
            <p class=\"text-justify\">
                Les Alchimistes se proposent de collecter et transformer les déchets organiques en ville: bio-déchets mais aussi couches usagées !
                Les Alchimistes partent du constat que les déchets sont mal valorisés et voyagent trop. <br><br>
                Nous faisons le pari que nous pouvons traiter les déchets organiques, en ville, à moins de 3 km de l’endroit où ils sont générés.
                Et donc mieux valoriser le compost ainsi fabriqué en milieu urbain dense. Au lieu de gros camions-poubelles odorants, volumineux, bruyants, nous préférons la logistique douce (tri-porteurs ou camionnettes électriques, …).
                <br><br>Aux plate-formes de compostage industrielles à ciel ouvert, nous préférons les composteurs semi-industriels en circuit fermés évitant nuisances olfactives et machines industrielles.
                A la vente du compost à bas prix, nous préférons la vente du compost de haute qualité pour un usage local d’agriculture urbaine pour les professionnels et les particuliers.
                <br><br>A des métiers, très spécialisés, à faible valeur ajoutée et mal valorisés, nous préférons la création du métier de collecteur-maître composteur, inséré dans son quartier avec des missions riches et diverses.
                Pour un produit dense et volumineux, le circuit-court s’impose !
            </p>
        </div>

        <div class=\"row\" >
            <div class=\"col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1\">
                <img class=\"imgBackground\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/cercle.png"), "html", null, true);
        echo "\">
            </div>

            <div class=\"col-md-5 col-md-offset-0 col-xs-10 col-xs-offset-1 text-justify\">
                <h3>Bouclons la boucle !</h3>
                <p>Alors que le volume des déchets ménagers a doublé depuis 1960, Les Alchimistes ont pour ambition de s’attaquer à la problématique des biodéchets avec une solution pertinente et innovante.</p>
                <p>Finis les camions encombrants, bruyants et malodorants qui transportent les biodéchets à des kilomètres.</p>
                <p>Les Alchimistes les récupèrent et les traitent, au cœur de la ville, pour approvisionner les jardiniers et agriculteurs urbains en amendement riche et 100% naturel.</p>
            </div>
        </div>

        <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
        
        <div class=\"row text-center col-md-8 col-xs-10 col-md-offset-2 col-xs-offset-1\">
            <h2>Nous produisons en ville un compost ultra-local et de haute qualité</h2>
        </div>

        <div class=\"row text-justify\">
            <div style=\"margin-right: 2em\"class=\"col-md-3 col-xs-10 col-xs-offset-1\">
                <h3>Qualité</h3>
                <span>Nous collectons vos déchets organiques et les compostons dans votre quartier. La proximité limite drastiquement l’impact du transport et permet de relocaliser la gestion des déchets au plus près de leur production.</span>
            </div>
            <div style=\"margin-right: 2em;\" class=\"col-md-3 col-md-offset-0 col-xs-10 col-xs-offset-1\">
                <h3>Transparence</h3>
                <span>Nos sites de compostage sont facilement accessibles. Les enfants et autres visiteurs viennent pour mieux comprendre le cycle de la matière organique et la nécessité du tri sélectif. Toutes les informations, origine des matières entrantes, transformation, maturation… sont disponibles et la traçabilité est assurée.</span>
            </div>
            <div class=\"col-md-3 col-md-offset-0 col-xs-10 col-xs-offset-1\">
                <h3>Professionnalisme</h3>
                <span>Nous utilisons des composteurs électromécaniques. Nos machines permettent de monitorer finement le procédé de compostage et d’accepter tout type déchets alimentaires (restes de cuisine et de table comprenant de la viande et du poisson). Nos sites ont un agrément sanitaire délivré par la préfecture et notre compost est normé NFU 44051.</span>
            </div>
        </div>
    </div>
";
        
        $__internal_50f60964b20bce0cbf15d6a0a7f8e507f7b148ff2e4fb11af9e553dda3067da6->leave($__internal_50f60964b20bce0cbf15d6a0a7f8e507f7b148ff2e4fb11af9e553dda3067da6_prof);

        
        $__internal_50f7b015884504029083ce4596c17283634f5de889eb8976e519505170fa3825->leave($__internal_50f7b015884504029083ce4596c17283634f5de889eb8976e519505170fa3825_prof);

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
        return array (  75 => 25,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
        <div style=\"margin-top: 5em;\" class=\"row imgHead\">
            <img class=\"imgBackground\" src=\"{{asset('images/img-perso3.JPG')}}\">
        </div>
        <br>
        <div class=\"row col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1\" style=\"margin-bottom: 4em;\">
            <h2 style=\"color: #40a529;\" class=\"row text-center\">Les alchimistes</h2><br>
            <p class=\"text-justify\">
                Les Alchimistes se proposent de collecter et transformer les déchets organiques en ville: bio-déchets mais aussi couches usagées !
                Les Alchimistes partent du constat que les déchets sont mal valorisés et voyagent trop. <br><br>
                Nous faisons le pari que nous pouvons traiter les déchets organiques, en ville, à moins de 3 km de l’endroit où ils sont générés.
                Et donc mieux valoriser le compost ainsi fabriqué en milieu urbain dense. Au lieu de gros camions-poubelles odorants, volumineux, bruyants, nous préférons la logistique douce (tri-porteurs ou camionnettes électriques, …).
                <br><br>Aux plate-formes de compostage industrielles à ciel ouvert, nous préférons les composteurs semi-industriels en circuit fermés évitant nuisances olfactives et machines industrielles.
                A la vente du compost à bas prix, nous préférons la vente du compost de haute qualité pour un usage local d’agriculture urbaine pour les professionnels et les particuliers.
                <br><br>A des métiers, très spécialisés, à faible valeur ajoutée et mal valorisés, nous préférons la création du métier de collecteur-maître composteur, inséré dans son quartier avec des missions riches et diverses.
                Pour un produit dense et volumineux, le circuit-court s’impose !
            </p>
        </div>

        <div class=\"row\" >
            <div class=\"col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1\">
                <img class=\"imgBackground\" src=\"{{asset('images/cercle.png')}}\">
            </div>

            <div class=\"col-md-5 col-md-offset-0 col-xs-10 col-xs-offset-1 text-justify\">
                <h3>Bouclons la boucle !</h3>
                <p>Alors que le volume des déchets ménagers a doublé depuis 1960, Les Alchimistes ont pour ambition de s’attaquer à la problématique des biodéchets avec une solution pertinente et innovante.</p>
                <p>Finis les camions encombrants, bruyants et malodorants qui transportent les biodéchets à des kilomètres.</p>
                <p>Les Alchimistes les récupèrent et les traitent, au cœur de la ville, pour approvisionner les jardiniers et agriculteurs urbains en amendement riche et 100% naturel.</p>
            </div>
        </div>

        <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
        
        <div class=\"row text-center col-md-8 col-xs-10 col-md-offset-2 col-xs-offset-1\">
            <h2>Nous produisons en ville un compost ultra-local et de haute qualité</h2>
        </div>

        <div class=\"row text-justify\">
            <div style=\"margin-right: 2em\"class=\"col-md-3 col-xs-10 col-xs-offset-1\">
                <h3>Qualité</h3>
                <span>Nous collectons vos déchets organiques et les compostons dans votre quartier. La proximité limite drastiquement l’impact du transport et permet de relocaliser la gestion des déchets au plus près de leur production.</span>
            </div>
            <div style=\"margin-right: 2em;\" class=\"col-md-3 col-md-offset-0 col-xs-10 col-xs-offset-1\">
                <h3>Transparence</h3>
                <span>Nos sites de compostage sont facilement accessibles. Les enfants et autres visiteurs viennent pour mieux comprendre le cycle de la matière organique et la nécessité du tri sélectif. Toutes les informations, origine des matières entrantes, transformation, maturation… sont disponibles et la traçabilité est assurée.</span>
            </div>
            <div class=\"col-md-3 col-md-offset-0 col-xs-10 col-xs-offset-1\">
                <h3>Professionnalisme</h3>
                <span>Nous utilisons des composteurs électromécaniques. Nos machines permettent de monitorer finement le procédé de compostage et d’accepter tout type déchets alimentaires (restes de cuisine et de table comprenant de la viande et du poisson). Nos sites ont un agrément sanitaire délivré par la préfecture et notre compost est normé NFU 44051.</span>
            </div>
        </div>
    </div>
{% endblock %}
", "index.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\templates\\index.html.twig");
    }
}
