<?php

/* layout.html.twig */
class __TwigTemplate_e77fc26382d636284df607cd23abff9caf3717bb9f70c5835486a68795c3af04 extends Twig_Template
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
        // line 38
        echo "
    </head>

    <body>

        <nav class=\"navbar ombrage\">

            <div class=\"container\">

                <div>
                    <div class=\"col-lg-3 col-md-3 col-xs-12\">
                        <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img id=\"ImageHeader\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Alchimiste_logo.png"), "html", null, true);
        echo "\"></a>
                    </div>
                    ";
        // line 51
        if ($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "user", array())) {
            // line 52
            echo "                        <div style=\"text-align:center;\" class=\"bloc-deconnexion col-md-3 col-xs-10 col-md-offset-2 col-xs-offset-1\" style=\"text-align: left;\">
                            <span>Bonjour ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "firstname", array()), "html", null, true);
            echo "</span>
                            <br>
                            <a style=\"color: #40a529; text-decoration: none; font-weight: bold;\" href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion");
            echo "\">Déconnexion</a>
                        </div>
                            ";
            // line 57
            if ($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "admin", array())) {
                // line 58
                echo "                                <div style=\"text-align:center;\" class=\"col-lg-3 col-md-3 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
                                    <a style=\"color: #40a529; text-decoration: none; font-weight: bold;\" href=\"";
                // line 59
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compteadmin");
                echo "\"><img class=\"imageLogoHeader\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/composteur2.png"), "html", null, true);
                echo "\">
                                        <br>
                                        <span>Compte Alchimistes</span>
                                    </a>
                                </div>
                                <div class=\"clear\"></div>
                            ";
            } elseif ($this->getAttribute(            // line 65
(isset($context["user_manager"]) ? $context["user_manager"] : null), "collector", array())) {
                // line 66
                echo "                                <div style=\"text-align:center;\" class=\"col-lg-3 col-md-3 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
                                    <a style=\"color: #40a529; text-decoration: none; font-weight: bold;\" href=\"";
                // line 67
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comptecollecteur");
                echo "\"><img class=\"imageLogoHeader\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/velo.png"), "html", null, true);
                echo "\">
                                        <br>
                                        <span>Compte Collecteur</span>
                                    </a>
                                </div>
                                <div class=\"clear\"></div>
                            ";
            } else {
                // line 74
                echo "                                <div style=\"text-align:center;\" class=\"col-lg-3 col-md-3 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
                                    <a style=\"color: #40a529; text-decoration: none; font-weight: bold;\" href=\"";
                // line 75
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compteclient");
                echo "\"><img class=\"imageLogoHeader\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/plante.png"), "html", null, true);
                echo "\" >
                                        <br>
                                        <span>Compte Client</span>
                                    </a>
                                </div>
                                <div class=\"clear\"></div>
                            ";
            }
            // line 82
            echo "                        </div>
                    ";
        } else {
            // line 84
            echo "                        <div style=\"text-align:center;\" class=\"col-lg-3 col-md-3 col-xs-10 col-lg-offset-5 col-md-offset-5 col-xs-offset-1\">
                            <a style=\"color: #40a529; text-decoration: none; font-weight: bold;\" href=\"";
            // line 85
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion");
            echo "\">
                                <img class=\"imageLogoHeaderConnexion\" src=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/fleur.png"), "html", null, true);
            echo "\" >
                                Connexion
                            </a>
                        </div>
                        <div class=\"clear\"></div>
                    ";
        }
        // line 92
        echo "                    
                    
                    
                    ";
        // line 187
        echo "                </div>
            </div>
                </div>
            </div>
        </nav>

        <div>

            ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
            // line 196
            echo "
                ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 198
                echo "
                    ";
                // line 199
                if (($context["type"] == "error")) {
                    echo " ";
                    $context["type"] = "danger";
                    echo " ";
                }
                // line 200
                echo "
                    <div class=\"alert alert-";
                // line 201
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\"> ";
                echo $context["flash"];
                echo " </div>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "
            ";
        // line 207
        $this->displayBlock('content', $context, $blocks);
        // line 210
        echo "
        </div>

        <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
        <div class=\"clear\"></div>

        
        <div class=\"footr text-justify\">
            <div class=\"blocMap col-lg-3 col-md-3 col-xs-10 col-lg-offset-2 col-md-offset-1 col-xs-offset-1\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.1274968258563!2d2.3321566154971847!3d48.83670671018753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671c7785c4fdb%3A0xb118bc844f2f417a!2sLes+Grands+Voisins!5e0!3m2!1sfr!2sfr!4v1505995015490\" width=\"275\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
            </div>
            
            ";
        // line 228
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
            <div class=\"blocReseaux col-md-3 col-xs-10 col-md-offset-1 col-xs-offset-1\">
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
            <div class=\"col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1 text-right\">
                <br><p>Copyright © Morane/Zheng/Corré/Keita (2017) | <a>Politique de Confidentialité</a> | <a>Mentions Légales</a></p>
            </div>
        </div>
            
        <a href=\"javascript:\" id=\"return-to-top\"><i class=\"icon-chevron-up\"></i></a>
        
        ";
        // line 267
        $this->displayBlock('javascripts', $context, $blocks);
        // line 280
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

            <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compteclient.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

            <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/collector.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

            <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/menuadmin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            
            <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/homepage.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

            <link href=\"https://fonts.googleapis.com/css?family=Anton|Arvo|Oswald|Poppins\" rel=\"stylesheet\">

            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

        ";
    }

    // line 207
    public function block_content($context, array $blocks = array())
    {
        // line 208
        echo "
            ";
    }

    // line 267
    public function block_javascripts($context, array $blocks = array())
    {
        // line 268
        echo "
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>

            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

            <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>

            <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/homepagescript.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 277
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
        return array (  348 => 277,  343 => 275,  334 => 268,  331 => 267,  326 => 208,  323 => 207,  312 => 31,  307 => 29,  302 => 27,  297 => 25,  292 => 23,  283 => 16,  280 => 15,  274 => 13,  265 => 280,  263 => 267,  222 => 228,  208 => 210,  206 => 207,  203 => 206,  196 => 204,  185 => 201,  182 => 200,  176 => 199,  173 => 198,  169 => 197,  166 => 196,  162 => 195,  152 => 187,  147 => 92,  138 => 86,  134 => 85,  131 => 84,  127 => 82,  115 => 75,  112 => 74,  100 => 67,  97 => 66,  95 => 65,  84 => 59,  81 => 58,  79 => 57,  74 => 55,  69 => 53,  66 => 52,  64 => 51,  57 => 49,  44 => 38,  42 => 15,  37 => 13,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "C:\\xampp\\htdocs\\gregoire_morane\\final_project_wf3\\dev\\templates\\layout.html.twig");
    }
}
