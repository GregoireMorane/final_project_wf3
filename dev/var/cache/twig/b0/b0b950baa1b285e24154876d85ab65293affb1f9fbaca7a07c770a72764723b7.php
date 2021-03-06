<?php

/* index.html.twig */
class __TwigTemplate_eb61f67697ce0fbcaed6d5b581e1831c9c08a45be631eb2679381c54d539ac8e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
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
        return array (  57 => 25,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "C:\\xampp\\htdocs\\gregoire_morane\\final_project_wf3\\dev\\templates\\index.html.twig");
    }
}
