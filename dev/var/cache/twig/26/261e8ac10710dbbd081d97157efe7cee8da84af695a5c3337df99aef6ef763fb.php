<?php

/* layout.html.twig */
class __TwigTemplate_926546ac8075819e16250945cf85e661982b1f763ea9e5448882de84c49db097 extends Twig_Template
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
        $__internal_83f963b84edc4b8bc8772b70fcd369ea696cb5d2af2d2748f5590728917db43b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f963b84edc4b8bc8772b70fcd369ea696cb5d2af2d2748f5590728917db43b->enter($__internal_83f963b84edc4b8bc8772b70fcd369ea696cb5d2af2d2748f5590728917db43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_e1ef2db63a432b3d4d14e624d2633f076f83c018d4220ed0f342c0ac397b5de9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1ef2db63a432b3d4d14e624d2633f076f83c018d4220ed0f342c0ac397b5de9->enter($__internal_e1ef2db63a432b3d4d14e624d2633f076f83c018d4220ed0f342c0ac397b5de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array())) {
            // line 52
            echo "                        <div style=\"text-align:center;\" class=\"bloc-deconnexion col-md-3 col-xs-10 col-md-offset-2 col-xs-offset-1\" style=\"text-align: left;\">
                            <span>Bonjour ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "firstname", array()), "html", null, true);
            echo "</span>
                            <br>
                            <a style=\"color: #40a529; text-decoration: none; font-weight: bold;\" href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion");
            echo "\">Déconnexion</a>
                        </div>
                            ";
            // line 57
            if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "admin", array())) {
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
($context["user_manager"] ?? $this->getContext($context, "user_manager")), "collector", array())) {
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
        // line 189
        echo "                </div>
            </div>
                </div>
            </div>
        </nav>

        <div>

            ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
            // line 198
            echo "
                ";
            // line 199
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 200
                echo "
                    ";
                // line 201
                if (($context["type"] == "error")) {
                    echo " ";
                    $context["type"] = "danger";
                    echo " ";
                }
                // line 202
                echo "
                    <div class=\"alert alert-";
                // line 203
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\"> ";
                echo $context["flash"];
                echo " </div>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "
            ";
        // line 209
        $this->displayBlock('content', $context, $blocks);
        // line 212
        echo "
        </div>

        <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
        <div class=\"clear\"></div>

        
        <div class=\"footr text-justify\">
            <div class=\"blocMap col-lg-3 col-md-3 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.1274968258563!2d2.3321566154971847!3d48.83670671018753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671c7785c4fdb%3A0xb118bc844f2f417a!2sLes+Grands+Voisins!5e0!3m2!1sfr!2sfr!4v1505995015490\" width=\"275\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
            </div>
            
            ";
        // line 230
        echo "            
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
            <div class=\"blocReseaux col-md-3 col-xs-10 col-md-offset-0 col-xs-offset-1\">
                <h3>Nous suivre sur :</h3>
                <a class=\"text-left\" href=\"https://twitter.com/AlchimistesCo?ref_src=twsrc%5Etfw&ref_url=http%3A%2F%2Falchimistes.co%2F\" id=\"gh\" target=\"_blank\" title=\"Twitter\">
                    <span class=\"fa-stack fa-lg\">
                      <i class=\"fa fa-square-o fa-stack-2x\"></i>
                      <i class=\"fa fa-twitter fa-stack-1x\"></i>
                    </span>Twitter
                </a><br />
                <a class=\"text-left\" href=\"'https://www.facebook.com/Lesalchimistesfleurs/\"  target=\"_blank\" title=\"Facebook\">
                    <span class=\"fa-stack fa-lg\">
                      <i class=\"fa fa-square-o fa-stack-2x\"></i>
                      <i class=\"fa fa-facebook fa-stack-1x\"></i>
                    </span>Facebook
                </a><br />
                <a class=\"text-left\" href=\"https://www.linkedin.com/company/les-alchimistes-sas?trk=ppro_cprof\"  target=\"_blank\" title=\"Linkedin\">
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
        // line 269
        $this->displayBlock('javascripts', $context, $blocks);
        // line 282
        echo "
    </body>

</html>

";
        
        $__internal_83f963b84edc4b8bc8772b70fcd369ea696cb5d2af2d2748f5590728917db43b->leave($__internal_83f963b84edc4b8bc8772b70fcd369ea696cb5d2af2d2748f5590728917db43b_prof);

        
        $__internal_e1ef2db63a432b3d4d14e624d2633f076f83c018d4220ed0f342c0ac397b5de9->leave($__internal_e1ef2db63a432b3d4d14e624d2633f076f83c018d4220ed0f342c0ac397b5de9_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_9894a4ecf8d7f5522278d261a109f0f175bf11a269bfa059e12853e9af1b504d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9894a4ecf8d7f5522278d261a109f0f175bf11a269bfa059e12853e9af1b504d->enter($__internal_9894a4ecf8d7f5522278d261a109f0f175bf11a269bfa059e12853e9af1b504d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a187ae968eb95c5390f9d7e7b2ed5bdb11279cf897796123a5f61578496e1e39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a187ae968eb95c5390f9d7e7b2ed5bdb11279cf897796123a5f61578496e1e39->enter($__internal_a187ae968eb95c5390f9d7e7b2ed5bdb11279cf897796123a5f61578496e1e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_a187ae968eb95c5390f9d7e7b2ed5bdb11279cf897796123a5f61578496e1e39->leave($__internal_a187ae968eb95c5390f9d7e7b2ed5bdb11279cf897796123a5f61578496e1e39_prof);

        
        $__internal_9894a4ecf8d7f5522278d261a109f0f175bf11a269bfa059e12853e9af1b504d->leave($__internal_9894a4ecf8d7f5522278d261a109f0f175bf11a269bfa059e12853e9af1b504d_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_900e57b9c5917ae323d3f76a11a46590bc1c7866a06c4d7bd3f4453180390da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900e57b9c5917ae323d3f76a11a46590bc1c7866a06c4d7bd3f4453180390da1->enter($__internal_900e57b9c5917ae323d3f76a11a46590bc1c7866a06c4d7bd3f4453180390da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_07d6702453aee89ef95a112efbc0c266a243b3f4bc5280c890b830643e646ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d6702453aee89ef95a112efbc0c266a243b3f4bc5280c890b830643e646ba9->enter($__internal_07d6702453aee89ef95a112efbc0c266a243b3f4bc5280c890b830643e646ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_07d6702453aee89ef95a112efbc0c266a243b3f4bc5280c890b830643e646ba9->leave($__internal_07d6702453aee89ef95a112efbc0c266a243b3f4bc5280c890b830643e646ba9_prof);

        
        $__internal_900e57b9c5917ae323d3f76a11a46590bc1c7866a06c4d7bd3f4453180390da1->leave($__internal_900e57b9c5917ae323d3f76a11a46590bc1c7866a06c4d7bd3f4453180390da1_prof);

    }

    // line 209
    public function block_content($context, array $blocks = array())
    {
        $__internal_77305e0f0835d9d8679aeaf818df3a7610013255796b16304dd38f0ae6e9df99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77305e0f0835d9d8679aeaf818df3a7610013255796b16304dd38f0ae6e9df99->enter($__internal_77305e0f0835d9d8679aeaf818df3a7610013255796b16304dd38f0ae6e9df99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a88341875d88365246cc7ab167b5aeb28038a0d8c7ed065235839603c9cad207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a88341875d88365246cc7ab167b5aeb28038a0d8c7ed065235839603c9cad207->enter($__internal_a88341875d88365246cc7ab167b5aeb28038a0d8c7ed065235839603c9cad207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 210
        echo "
            ";
        
        $__internal_a88341875d88365246cc7ab167b5aeb28038a0d8c7ed065235839603c9cad207->leave($__internal_a88341875d88365246cc7ab167b5aeb28038a0d8c7ed065235839603c9cad207_prof);

        
        $__internal_77305e0f0835d9d8679aeaf818df3a7610013255796b16304dd38f0ae6e9df99->leave($__internal_77305e0f0835d9d8679aeaf818df3a7610013255796b16304dd38f0ae6e9df99_prof);

    }

    // line 269
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fdc361cc76ad4c065dc20e5ce234c07751758543d12915923a95319431465a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc361cc76ad4c065dc20e5ce234c07751758543d12915923a95319431465a30->enter($__internal_fdc361cc76ad4c065dc20e5ce234c07751758543d12915923a95319431465a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6b2108de2d870bf6a4ed3ddea8cd1e61315619936e3e1c2f8a3d554efff138ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b2108de2d870bf6a4ed3ddea8cd1e61315619936e3e1c2f8a3d554efff138ca->enter($__internal_6b2108de2d870bf6a4ed3ddea8cd1e61315619936e3e1c2f8a3d554efff138ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 270
        echo "
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>

            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

            <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>

            <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/homepagescript.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/menu.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_6b2108de2d870bf6a4ed3ddea8cd1e61315619936e3e1c2f8a3d554efff138ca->leave($__internal_6b2108de2d870bf6a4ed3ddea8cd1e61315619936e3e1c2f8a3d554efff138ca_prof);

        
        $__internal_fdc361cc76ad4c065dc20e5ce234c07751758543d12915923a95319431465a30->leave($__internal_fdc361cc76ad4c065dc20e5ce234c07751758543d12915923a95319431465a30_prof);

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
        return array (  402 => 279,  397 => 277,  388 => 270,  379 => 269,  368 => 210,  359 => 209,  342 => 31,  337 => 29,  332 => 27,  327 => 25,  322 => 23,  313 => 16,  304 => 15,  286 => 13,  271 => 282,  269 => 269,  228 => 230,  214 => 212,  212 => 209,  209 => 208,  202 => 206,  191 => 203,  188 => 202,  182 => 201,  179 => 200,  175 => 199,  172 => 198,  168 => 197,  158 => 189,  153 => 92,  144 => 86,  140 => 85,  137 => 84,  133 => 82,  121 => 75,  118 => 74,  106 => 67,  103 => 66,  101 => 65,  90 => 59,  87 => 58,  85 => 57,  80 => 55,  75 => 53,  72 => 52,  70 => 51,  63 => 49,  50 => 38,  48 => 15,  43 => 13,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html lang=\"fr\">

    <head>

        <meta charset=\"utf-8\">

        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>{% block title '' %} Les alchimistes</title>

        {% block stylesheets %}

            <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">

            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

            <link href=\"https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" rel=\"stylesheet\">

            <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\" type=\"text/css\" />

            <link href=\"{{ asset('css/compteclient.css') }}\" rel=\"stylesheet\" type=\"text/css\" />

            <link href=\"{{ asset('css/collector.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>

            <link href=\"{{ asset('css/menuadmin.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
            
            <link href=\"{{ asset('css/homepage.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>

            <link href=\"https://fonts.googleapis.com/css?family=Anton|Arvo|Oswald|Poppins\" rel=\"stylesheet\">

            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

        {% endblock %}

    </head>

    <body>

        <nav class=\"navbar ombrage\">

            <div class=\"container\">

                <div>
                    <div class=\"col-lg-3 col-md-3 col-xs-12\">
                        <a href=\"{{path('homepage')}}\"><img id=\"ImageHeader\" src=\"{{asset('images/Alchimiste_logo.png')}}\"></a>
                    </div>
                    {% if user_manager.user %}
                        <div style=\"text-align:center;\" class=\"bloc-deconnexion col-md-3 col-xs-10 col-md-offset-2 col-xs-offset-1\" style=\"text-align: left;\">
                            <span>Bonjour {{ user_manager.firstname }}</span>
                            <br>
                            <a style=\"color: #40a529; text-decoration: none; font-weight: bold;\" href=\"{{path('deconnexion')}}\">Déconnexion</a>
                        </div>
                            {% if user_manager.admin %}
                                <div style=\"text-align:center;\" class=\"col-lg-3 col-md-3 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
                                    <a style=\"color: #40a529; text-decoration: none; font-weight: bold;\" href=\"{{path('compteadmin')}}\"><img class=\"imageLogoHeader\" src=\"{{asset('images/composteur2.png')}}\">
                                        <br>
                                        <span>Compte Alchimistes</span>
                                    </a>
                                </div>
                                <div class=\"clear\"></div>
                            {% elseif user_manager.collector %}
                                <div style=\"text-align:center;\" class=\"col-lg-3 col-md-3 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
                                    <a style=\"color: #40a529; text-decoration: none; font-weight: bold;\" href=\"{{path('comptecollecteur')}}\"><img class=\"imageLogoHeader\" src=\"{{asset('images/velo.png')}}\">
                                        <br>
                                        <span>Compte Collecteur</span>
                                    </a>
                                </div>
                                <div class=\"clear\"></div>
                            {% else %}
                                <div style=\"text-align:center;\" class=\"col-lg-3 col-md-3 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
                                    <a style=\"color: #40a529; text-decoration: none; font-weight: bold;\" href=\"{{path('compteclient')}}\"><img class=\"imageLogoHeader\" src=\"{{asset('images/plante.png')}}\" >
                                        <br>
                                        <span>Compte Client</span>
                                    </a>
                                </div>
                                <div class=\"clear\"></div>
                            {% endif %}
                        </div>
                    {% else %}
                        <div style=\"text-align:center;\" class=\"col-lg-3 col-md-3 col-xs-10 col-lg-offset-5 col-md-offset-5 col-xs-offset-1\">
                            <a style=\"color: #40a529; text-decoration: none; font-weight: bold;\" href=\"{{path('connexion')}}\">
                                <img class=\"imageLogoHeaderConnexion\" src=\"{{asset('images/fleur.png')}}\" >
                                Connexion
                            </a>
                        </div>
                        <div class=\"clear\"></div>
                    {% endif %}
                    
                    
                    
                    {#{% if user_manager.user %}
                        {% if user_manager.admin%}
                            {% elseif  user_manager.collector %}
                            {% else %} 
                                <div class=\"img bloclegende\"><a href=\"{{path('compteclient')}}\"><img class=\" une\" src=\"{{asset('images/déchets2.png')}}\" >Compte Client</a><div class=\"clear\"></div>
                        {% endif %}
                    {% endif %}

                    {% if user_manager.user %}
                        {% if user_manager.admin %} 
                        {% elseif  user_manager.collector %}
                            <div class=\"img bloclegende2\"><a href=\"{{path('comptecollecteur')}}\"><img class=\"img deux\" src=\"{{asset('images/velo.png')}}\" >Compte Collecteur</a></div>
                        {% else %}
                        {% endif %}
                    {% endif %}


                    {% if user_manager.user %}
                        {% if user_manager.admin %}
                            <div class=\"img bloclegende3\"><a href=\"{{path('compteadmin')}}\"><img class=\"img trois\" src=\"{{asset('images/composteur2.png')}}\">Compte Alchimistes</a></div>
                        {% elseif  user_manager.collector %}
                        {% elseif not user_manager.collector and not user_manager.collector%}
                        {% else %}
                        {% endif %}
                    {% endif %}

                    {% if user_manager.user is empty %}

                        <div class=\"img bloclegende\">
                            <a href=\"{{path('connexion')}}\"><img class=\" une\" src=\"{{asset('images/déchets2.png')}}\" >Compte Client</a><div class=\"clear\"></div>
                        </div>
                        <div class=\"img bloclegende2\"><a href=\"{{path('connexion')}}\"><img class=\"img deux\" src=\"{{asset('images/velo.png')}}\" >Compte Collecteur</a></div>
                        <div class=\"img bloclegende3\"><a href=\"{{path('connexion')}}\"><img class=\"img trois\" src=\"{{asset('images/composteur2.png')}}\">Compte Alchimistes</a></div>
                        <div class=\"img bloclegende4\"><a href=\"{{path('connexion')}}\"><img class=\"img quatre\" src=\"{{asset('images/plante.png')}}\">Connexion</a></div>
                        <div class=\"clear\"></div>
                    {% else %}
                    {% endif %}

                    {% if user_manager.user is empty %}
                        <div class=\"img bloclegende4\"><a href=\"{{path('connexion')}}\"><img class=\"img quatre\" src=\"{{asset('images/plante.png')}}\">Connexion</a></div>
                        <div class=\"clear\"></div>
                        {% if user_manager.user is empty%}
                        <div class=\"navresponsive\">
                            <nav class=\"navbar navbar-default \">
                                <div class=\"container-fluid\">
                                    <div class=\"navbar-header\">
                                        {% if user_manager.admin %}
                                        <div class=\"navbar-header\">
                                            <a class=\"navbar-brand\" href=\"{{path('compteadmin')}}\">
                                                Compte alchimiste
                                            </a>
                                        </div>
                                        {% elseif  user_manager.collector %}
                                        <div class=\"navbar-header\">
                                            <a class=\"navbar-brand\" href=\"{{path('connexion')}}\">
                                                Compte collecteur
                                            </a>
                                        </div>
                                        {% else %}
                                        <div class=\"navbar-header\">
                                            <a class=\"navbar-brand\" href=\"{{path('connexion')}}\">
                                                Compte client
                                            </a>
                                        </div>
                                        {% endif %}
                                        {% if user_manager.user is empty %}  
                                            <div class=\"navbar-header\">
                                                <a class=\"navbar-brand\" href=\"{{path('connexion')}}\">Acceuil</a>
                                            </div>
                                            <div class=\"navbar-header\">
                                                <a class=\"navbar-brand\" href=\"{{path('connexion')}}\">Compte client</a>
                                            </div>
                                            <div class=\"navbar-header\">
                                                <a class=\"navbar-brand\" href=\"{{path('connexion')}}\">Compte collecteur</a>
                                            </div>
                                            <div class=\"navbar-header\">
                                                <a class=\"navbar-brand\" href=\"{{path('connexion')}}\">Connexion</a>
                                            </div>
                                        {% else %}
                                        {% endif %}
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>

                    {% if user_manager.user %}
                        <div class=\" col-lg-12 col-md-12 col-xs-12 col-sm-12\" style=\"text-align: left;\">
                            <span style=\"font-size:1.7em;font-weight: bold;\">Bonjour {{ user_manager.firstname }}</span>
                            <br>
                            <a style=\"font-size:1.3em;font-weight: bold;\" href=\"{{path('deconnexion')}}\">Deconnexion</a>
                        </div>
                        <div class=\"clear\"></div>
                    {% endif %}#}
                </div>
            </div>
                </div>
            </div>
        </nav>

        <div>

            {% for type, flashes in app.session.flashbag.all %}

                {% for  flash in flashes %}

                    {% if type == 'error' %} {% set type = 'danger' %} {% endif %}

                    <div class=\"alert alert-{{type}}\"> {{ flash | raw }} </div>

                {% endfor %}

            {% endfor %}

            {% block content %}

            {% endblock %}

        </div>

        <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
        <div class=\"clear\"></div>

        
        <div class=\"footr text-justify\">
            <div class=\"blocMap col-lg-3 col-md-3 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.1274968258563!2d2.3321566154971847!3d48.83670671018753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671c7785c4fdb%3A0xb118bc844f2f417a!2sLes+Grands+Voisins!5e0!3m2!1sfr!2sfr!4v1505995015490\" width=\"275\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
            </div>
            
            {#<div class=\"col-lg-4 col-md-6\">
                <h3>Contact:</h3>
                <p>Une question ou un commentaire ? Contactez-nous !</p>
                <p><a href=\"\" title=\"Contact me!\"><i class=\"fa fa-envelope\"></i> Contact</a></p>
                
            </div>#}
            
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
            <div class=\"blocReseaux col-md-3 col-xs-10 col-md-offset-0 col-xs-offset-1\">
                <h3>Nous suivre sur :</h3>
                <a class=\"text-left\" href=\"https://twitter.com/AlchimistesCo?ref_src=twsrc%5Etfw&ref_url=http%3A%2F%2Falchimistes.co%2F\" id=\"gh\" target=\"_blank\" title=\"Twitter\">
                    <span class=\"fa-stack fa-lg\">
                      <i class=\"fa fa-square-o fa-stack-2x\"></i>
                      <i class=\"fa fa-twitter fa-stack-1x\"></i>
                    </span>Twitter
                </a><br />
                <a class=\"text-left\" href=\"'https://www.facebook.com/Lesalchimistesfleurs/\"  target=\"_blank\" title=\"Facebook\">
                    <span class=\"fa-stack fa-lg\">
                      <i class=\"fa fa-square-o fa-stack-2x\"></i>
                      <i class=\"fa fa-facebook fa-stack-1x\"></i>
                    </span>Facebook
                </a><br />
                <a class=\"text-left\" href=\"https://www.linkedin.com/company/les-alchimistes-sas?trk=ppro_cprof\"  target=\"_blank\" title=\"Linkedin\">
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
        
        {% block javascripts %}

            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>

            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

            <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>

            <script src=\"{{asset('js/homepagescript.js')}}\"></script>

            <script src=\"{{asset('js/menu.js')}}\"></script>

        {% endblock %}

    </body>

</html>

", "layout.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\templates\\layout.html.twig");
    }
}
