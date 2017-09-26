<?php

/* layout.html.twig */
class __TwigTemplate_be2fb1ca707a228bf70da04b0839b89a1db0b0aa79b608739d80639b664ba09b extends Twig_Template
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
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " Les alchimistes</title>

        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "    </head>
    <body>

        <nav class=\"navbar ombrage\">
            <div class=\"container\">
                <div ";
        // line 28
        echo " >
                    <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img class=\"img logo\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Alchimiste_logo.png"), "html", null, true);
        echo "\"></a>
                    <div class=\"img bloclegende\">
                        <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compteclient");
        echo "\"><img class=\" une\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/déchets2.png"), "html", null, true);
        echo "\" >Compte Client</a><div class=\"clear\"></div>
                    </div>
                    <div class=\"img bloclegende2\"><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comptecollecteur");
        echo "\"><img class=\"img deux\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/velo.png"), "html", null, true);
        echo "\" >Compte Collecteur</a></div>
                    <div class=\"img bloclegende3\"><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compteadmin");
        echo "\"><img class=\"img trois\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/composteur2.png"), "html", null, true);
        echo "\">Compte Alchimistes</a></div>
                    <div class=\"img bloclegende4\"><a href=\"";
        // line 35
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
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                                        Acceuil
                                    </a>
                                </div>
                                <div class=\"navbar-header\">
                                    <a class=\"navbar-brand\" href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compteclient");
        echo "\">
                                        Compte client
                                    </a>
                                </div>
                                <div class=\"navbar-header\">
                                    <a class=\"navbar-brand\" href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comptecollecteur");
        echo "\">
                                        Compte collecteur
                                    </a>
                                </div>
                                <div class=\"navbar-header\">
                                    <a class=\"navbar-brand\" href=\"";
        // line 56
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
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Alchimiste_logo.png"), "html", null, true);
        echo "\" ></a>
                </div>
            ";
        // line 66
        if ($this->getAttribute(($context["user_manager"] ?? null), "user", array())) {
            // line 67
            echo "                <div class=\"bloc-deconnexion col-lg-5 col-md-5 col-xs-10 col-lg-offset-7 col-md-offset-5 col-xs-offset-2\" style=\"text-align: right;\">
                    <span>Bonjour ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user_manager"] ?? null), "firstname", array()), "html", null, true);
            echo "</span>
                    <br>
                    <a href=\"";
            // line 70
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion");
            echo "\">Deconnexion</a>
                    ";
            // line 71
            if ($this->getAttribute(($context["user_manager"] ?? null), "admin", array())) {
                // line 72
                echo "                        <a href=\"#\">Page admin</a>
                    ";
            } elseif ($this->getAttribute(            // line 73
($context["user_manager"] ?? null), "collector", array())) {
                // line 74
                echo "                        <a href=\"#\">Page collecteur</a>
                    ";
            } else {
                // line 76
                echo "                        <a href=\"#\">Page client</a>
                    ";
            }
            // line 78
            echo "            ";
        } else {
            // line 79
            echo "                </div>
                <div class=\"clear\"></div>
                <div class=\"bloc-connexion col-lg-5 col-md-5 col-xs-10 col-lg-offset-7 col-md-offset-5 col-xs-offset-2\" style=\"text-align: right;\">
                    <a href=\"";
            // line 82
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion");
            echo "\">Connexion</a>
                </div>
                <div class=\"clear\"></div>
            ";
        }
        // line 86
        echo "            </div>
        </nav>
        <div>
            ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
            // line 90
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 91
                echo "                    ";
                if (($context["type"] == "error")) {
                    echo " ";
                    $context["type"] = "danger";
                    echo " ";
                }
                // line 92
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\"> ";
                echo $context["flash"];
                echo " </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 97
        echo "        </div>

        <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
        <div class=\"clear\"></div>
        <br>
        
        <div class=\"footr text-center\">
            <div class=\"blocMap col-lg-3 col-md-3 col-xs-10 col-lg-offset-2 col-md-offset-1 col-xs-offset-1\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.1274968258563!2d2.3321566154971847!3d48.83670671018753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671c7785c4fdb%3A0xb118bc844f2f417a!2sLes+Grands+Voisins!5e0!3m2!1sfr!2sfr!4v1505995015490\" width=\"275\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
            </div>
            
            ";
        // line 114
        echo "            
            <div class=\"blocInfo col-lg-3 col-md-3 col-xs-10 col-lg-offset-0 col-md-offset-1 col-xs-offset-1\">
                <h3>Contact :</h3>
                <h4>LES ALCHIMISTES</h4>
                <span>SAS au capital de 12 000€</span><br>
                <span>SIRET: 824 298 343 00016</span><br><br>
                <span>Le PHARES, 6 rue Arnold Géraux</span><br>
                <span>93450 L’ïle-Saint-Denis</span><br><br>
                <span>+33 1 84 21 47 89</span><br>
                <span>contact@alchimistes.co</span><br>
            </div>
            <div class=\"blocReseaux col-lg-3 col-md-3 col-xs-10 col-lg-offset-0 col-md-offset-1 col-xs-offset-1\">
                <h3>Nous suivre sur :</h3>
                <a class=\"text-left\" href=\"\" id=\"gh\" target=\"_blank\" title=\"Twitter\">
                    <span class=\"fa-stack fa-lg\">
                      <i class=\"fa fa-square-o fa-stack-2x\"></i>
                      <i class=\"fa fa-twitter fa-stack-1x\"></i>
                    </span>Twitter
                </a><br />
                <a class=\"text-left\" href=\"\"  target=\"_blank\" title=\"Facebook\">
                    <span class=\"fa-stack fa-lg\">
                      <i class=\"fa fa-square-o fa-stack-2x\"></i>
                      <i class=\"fa fa-facebook fa-stack-1x\"></i>
                    </span>Facebook
                </a><br />
                <a class=\"text-left\" href=\"\"  target=\"_blank\" title=\"Facebook\">
                    <span class=\"fa-stack fa-lg\">
                      <i class=\"fa fa-square-o fa-stack-2x\"></i>
                      <i class=\"fa fa-linkedin fa-stack-1x\"></i>
                    </span>Linkedin
                </a>
            </div>
            <div class=\"col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1 text-center\">
                <p>Copyright © Zheng/Morane/Corré/Keita (2017) | <a href=\"\">Politique de Confidentialité</a> | <a href=\"\">Mentions Légales</a></p>
            </div>
        </div>
            
        <a href=\"javascript:\" id=\"return-to-top\"><i class=\"icon-chevron-up\"></i></a>
        
        ";
        // line 153
        $this->displayBlock('javascripts', $context, $blocks);
        // line 160
        echo "    </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link href=\"https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" rel=\"stylesheet\">
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/homepage.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compteclient.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/collector.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/menuadmin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"https://fonts.googleapis.com/css?family=Anton|Arvo|Oswald|Poppins\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        ";
    }

    // line 95
    public function block_content($context, array $blocks = array())
    {
        // line 96
        echo "            ";
    }

    // line 153
    public function block_javascripts($context, array $blocks = array())
    {
        // line 154
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
            <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
            <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/homepagescript.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 158
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
        return array (  336 => 158,  332 => 157,  327 => 154,  324 => 153,  320 => 96,  317 => 95,  309 => 19,  305 => 18,  301 => 17,  297 => 16,  293 => 15,  289 => 14,  284 => 11,  281 => 10,  275 => 8,  269 => 160,  267 => 153,  226 => 114,  213 => 97,  210 => 95,  204 => 94,  193 => 92,  186 => 91,  181 => 90,  177 => 89,  172 => 86,  165 => 82,  160 => 79,  157 => 78,  153 => 76,  149 => 74,  147 => 73,  144 => 72,  142 => 71,  138 => 70,  133 => 68,  130 => 67,  128 => 66,  121 => 64,  110 => 56,  102 => 51,  94 => 46,  86 => 41,  75 => 35,  69 => 34,  63 => 33,  56 => 31,  49 => 29,  46 => 28,  39 => 23,  37 => 10,  32 => 8,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "C:\\xampp\\htdocs\\alsaleh_keita\\final_project_wf3\\dev\\templates\\layout.html.twig");
    }
}
