<?php

/* layout.html.twig */
class __TwigTemplate_a703499a9fd30016908d8707bb54066738730504c2c868f2d4028b677dd181f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html lang=\"fr\">

    <head>

        <meta charset=\"utf-8\">

        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo " Les alchimistes</title>

        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 40
        echo "
    </head>

    <body>

        <nav class=\"navbar ombrage\">

            <div class=\"container\">

                <div ";
        // line 49
        echo " >

                    <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img class=\"img logo\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Alchimiste_logo.png"), "html", null, true);
        echo "\"></a>

                    <div class=\"img bloclegende\">

                        <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compteclient");
        echo "\"><img class=\" une\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/déchets2.png"), "html", null, true);
        echo "\" >Compte Client</a><div class=\"clear\"></div>

                    </div>

                    <div class=\"img bloclegende2\"><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comptecollecteur");
        echo "\"><img class=\"img deux\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/velo.png"), "html", null, true);
        echo "\" >Compte Collecteur</a></div>

                    <div class=\"img bloclegende3\"><a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compteadmin");
        echo "\"><img class=\"img trois\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/composteur2.png"), "html", null, true);
        echo "\">Compte Alchimistes</a></div>

                    <div class=\"img bloclegende4\"><a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion");
        echo "\"><img class=\"img quatre\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/plante.png"), "html", null, true);
        echo "\">Connexion</a></div>

                    <div class=\"clear\"></div>

                    <div class=\"navresponsive\">

                        <nav class=\"navbar navbar-default\">

                            <div class=\"container-fluid\">

                                <div class=\"navbar-header\">

                                    <a class=\"navbar-brand\" href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">

                                        Acceuil

                                    </a>

                                </div>

                                <div class=\"navbar-header\">

                                    <a class=\"navbar-brand\" href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compteclient");
        echo "\">

                                        Compte client

                                    </a>

                                </div>

                                <div class=\"navbar-header\">

                                    <a class=\"navbar-brand\" href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comptecollecteur");
        echo "\">

                                        Compte collecteur

                                    </a>

                                </div>

                                <div class=\"navbar-header\">

                                    <a class=\"navbar-brand\" href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion");
        echo "\">

                                        Connexion

                                    </a>

                                </div>

                            </div>

                        </nav>

                    </div>

                <div style=\"max-width:300px;\">

                    <a href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img id=\"logo\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Alchimiste_logo.png"), "html", null, true);
        echo "\"></a>

                </div>

            ";
        // line 125
        if ($this->getAttribute(($context["user_manager"] ?? null), "user", array())) {
            // line 126
            echo "
                <div class=\"bloc-deconnexion col-lg-5 col-md-5 col-xs-10 col-lg-offset-7 col-md-offset-5 col-xs-offset-2\" style=\"text-align: right;\">

                    <span>Bonjour ";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user_manager"] ?? null), "firstname", array()), "html", null, true);
            echo "</span>

                    <br>

                    <a href=\"";
            // line 133
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion");
            echo "\">Deconnexion</a>

                    ";
            // line 135
            if ($this->getAttribute(($context["user_manager"] ?? null), "admin", array())) {
                // line 136
                echo "
                        <a href=\"";
                // line 137
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compteadmin");
                echo "\">Page d'administration</a>

                    ";
            } elseif ($this->getAttribute(            // line 139
($context["user_manager"] ?? null), "collector", array())) {
                // line 140
                echo "
                        <a href=\"";
                // line 141
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comptecollecteur");
                echo "\">Page collecteur</a>

                    ";
            } else {
                // line 144
                echo "
                        <a href=\"";
                // line 145
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compteclient");
                echo "\">Page client</a>

                    ";
            }
            // line 148
            echo "
            ";
        } else {
            // line 150
            echo "
                </div>

                <div class=\"clear\"></div>

                <div class=\"bloc-connexion col-lg-5 col-md-5 col-xs-10 col-lg-offset-7 col-md-offset-5 col-xs-offset-2\" style=\"text-align: right;\">

                    <a href=\"";
            // line 157
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion");
            echo "\">Connexion</a>

                </div>

                <div class=\"clear\"></div>

            ";
        }
        // line 164
        echo "
            </div>

        </nav>

        <div>

            ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
            // line 172
            echo "
                ";
            // line 173
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 174
                echo "
                    ";
                // line 175
                if (($context["type"] == "error")) {
                    echo " ";
                    $context["type"] = "danger";
                    echo " ";
                }
                // line 176
                echo "
                    <div class=\"alert alert-";
                // line 177
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\"> ";
                echo $context["flash"];
                echo " </div>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "
            ";
        // line 183
        $this->displayBlock('content', $context, $blocks);
        // line 186
        echo "
        </div>

        ";
        // line 189
        $this->displayBlock('javascripts', $context, $blocks);
        // line 202
        echo "
    </body>

</html>

";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo "";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "
            <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">

            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

            <link href=\"https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" rel=\"stylesheet\">

            <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

            <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

            <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/homepage.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

            <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compteclient.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

            <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/collector.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

            <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/menuadmin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

            <link href=\"https://fonts.googleapis.com/css?family=Anton|Arvo|Oswald|Poppins\" rel=\"stylesheet\">

            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

        ";
    }

    // line 183
    public function block_content($context, array $blocks = array())
    {
        // line 184
        echo "
            ";
    }

    // line 189
    public function block_javascripts($context, array $blocks = array())
    {
        // line 190
        echo "
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>

            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

            <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>

            <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/homepagescript.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/menu.js"), "html", null, true);
        echo "\"></script>

        ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 199,  392 => 197,  383 => 190,  380 => 189,  375 => 184,  372 => 183,  361 => 33,  356 => 31,  351 => 29,  346 => 27,  341 => 25,  336 => 23,  327 => 16,  324 => 15,  318 => 13,  309 => 202,  307 => 189,  302 => 186,  300 => 183,  297 => 182,  290 => 180,  279 => 177,  276 => 176,  270 => 175,  267 => 174,  263 => 173,  260 => 172,  256 => 171,  247 => 164,  237 => 157,  228 => 150,  224 => 148,  218 => 145,  215 => 144,  209 => 141,  206 => 140,  204 => 139,  199 => 137,  196 => 136,  194 => 135,  189 => 133,  182 => 129,  177 => 126,  175 => 125,  166 => 121,  147 => 105,  134 => 95,  121 => 85,  108 => 75,  91 => 63,  84 => 61,  77 => 59,  68 => 55,  59 => 51,  55 => 49,  44 => 40,  42 => 15,  37 => 13,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "C:\\xampp\\htdocs\\projet_final\\final_project_wf3\\dev\\templates\\layout.html.twig");
    }
}
