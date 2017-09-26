<?php

/* layout.html.twig */
class __TwigTemplate_43ead304e7abb9a5bc401d94d59a6c830e62190b0066d2ad54c2f0ae086f04f5 extends Twig_Template
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
        $__internal_39680e853e83f917bc0167f7338aa1b29396dfedc2a887d2b3fc5e85da40acfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39680e853e83f917bc0167f7338aa1b29396dfedc2a887d2b3fc5e85da40acfe->enter($__internal_39680e853e83f917bc0167f7338aa1b29396dfedc2a887d2b3fc5e85da40acfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_3d3ecc85cbdbd69f73ab06009c1bd71b46cfca5106d255293675b7e9fbd1e5ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d3ecc85cbdbd69f73ab06009c1bd71b46cfca5106d255293675b7e9fbd1e5ea->enter($__internal_3d3ecc85cbdbd69f73ab06009c1bd71b46cfca5106d255293675b7e9fbd1e5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
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
        
        $__internal_39680e853e83f917bc0167f7338aa1b29396dfedc2a887d2b3fc5e85da40acfe->leave($__internal_39680e853e83f917bc0167f7338aa1b29396dfedc2a887d2b3fc5e85da40acfe_prof);

        
        $__internal_3d3ecc85cbdbd69f73ab06009c1bd71b46cfca5106d255293675b7e9fbd1e5ea->leave($__internal_3d3ecc85cbdbd69f73ab06009c1bd71b46cfca5106d255293675b7e9fbd1e5ea_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_04a71c3f897e2a2b8ef5b202fccfe0c41a8f7e864dc821c82764f3e0051da88e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a71c3f897e2a2b8ef5b202fccfe0c41a8f7e864dc821c82764f3e0051da88e->enter($__internal_04a71c3f897e2a2b8ef5b202fccfe0c41a8f7e864dc821c82764f3e0051da88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1959fda3c7b1c504f124509e26816d8ce3ac1742030ecd415813d05190a9f573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1959fda3c7b1c504f124509e26816d8ce3ac1742030ecd415813d05190a9f573->enter($__internal_1959fda3c7b1c504f124509e26816d8ce3ac1742030ecd415813d05190a9f573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_1959fda3c7b1c504f124509e26816d8ce3ac1742030ecd415813d05190a9f573->leave($__internal_1959fda3c7b1c504f124509e26816d8ce3ac1742030ecd415813d05190a9f573_prof);

        
        $__internal_04a71c3f897e2a2b8ef5b202fccfe0c41a8f7e864dc821c82764f3e0051da88e->leave($__internal_04a71c3f897e2a2b8ef5b202fccfe0c41a8f7e864dc821c82764f3e0051da88e_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bfb896695a082d88b3393e49156b9f6139ff9db8938cc047790ad08f3096e332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfb896695a082d88b3393e49156b9f6139ff9db8938cc047790ad08f3096e332->enter($__internal_bfb896695a082d88b3393e49156b9f6139ff9db8938cc047790ad08f3096e332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6542da5f1f93baaae1bcf424a654fa93081fdfcfea9a69e86b4d8fb6acdc041b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6542da5f1f93baaae1bcf424a654fa93081fdfcfea9a69e86b4d8fb6acdc041b->enter($__internal_6542da5f1f93baaae1bcf424a654fa93081fdfcfea9a69e86b4d8fb6acdc041b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6542da5f1f93baaae1bcf424a654fa93081fdfcfea9a69e86b4d8fb6acdc041b->leave($__internal_6542da5f1f93baaae1bcf424a654fa93081fdfcfea9a69e86b4d8fb6acdc041b_prof);

        
        $__internal_bfb896695a082d88b3393e49156b9f6139ff9db8938cc047790ad08f3096e332->leave($__internal_bfb896695a082d88b3393e49156b9f6139ff9db8938cc047790ad08f3096e332_prof);

    }

    // line 207
    public function block_content($context, array $blocks = array())
    {
        $__internal_f89535259470c0c6d51c3283bcd63f273a666eae9d9785b8fd4b05a683f27805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89535259470c0c6d51c3283bcd63f273a666eae9d9785b8fd4b05a683f27805->enter($__internal_f89535259470c0c6d51c3283bcd63f273a666eae9d9785b8fd4b05a683f27805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c042f94d13458e9f5e28850411674437a29c10af2a53b913a08eb036027db701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c042f94d13458e9f5e28850411674437a29c10af2a53b913a08eb036027db701->enter($__internal_c042f94d13458e9f5e28850411674437a29c10af2a53b913a08eb036027db701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 208
        echo "
            ";
        
        $__internal_c042f94d13458e9f5e28850411674437a29c10af2a53b913a08eb036027db701->leave($__internal_c042f94d13458e9f5e28850411674437a29c10af2a53b913a08eb036027db701_prof);

        
        $__internal_f89535259470c0c6d51c3283bcd63f273a666eae9d9785b8fd4b05a683f27805->leave($__internal_f89535259470c0c6d51c3283bcd63f273a666eae9d9785b8fd4b05a683f27805_prof);

    }

    // line 267
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1b0c240fb0fc5e6edb06d6078fe581cd09ceb24bb0c8b8d0a7bc85a450266ffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0c240fb0fc5e6edb06d6078fe581cd09ceb24bb0c8b8d0a7bc85a450266ffd->enter($__internal_1b0c240fb0fc5e6edb06d6078fe581cd09ceb24bb0c8b8d0a7bc85a450266ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e8c190a204c76d1af22493636fbdf497c184e7086bb490d9ec064d95d5845ac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8c190a204c76d1af22493636fbdf497c184e7086bb490d9ec064d95d5845ac9->enter($__internal_e8c190a204c76d1af22493636fbdf497c184e7086bb490d9ec064d95d5845ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_e8c190a204c76d1af22493636fbdf497c184e7086bb490d9ec064d95d5845ac9->leave($__internal_e8c190a204c76d1af22493636fbdf497c184e7086bb490d9ec064d95d5845ac9_prof);

        
        $__internal_1b0c240fb0fc5e6edb06d6078fe581cd09ceb24bb0c8b8d0a7bc85a450266ffd->leave($__internal_1b0c240fb0fc5e6edb06d6078fe581cd09ceb24bb0c8b8d0a7bc85a450266ffd_prof);

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
        return array (  402 => 277,  397 => 275,  388 => 268,  379 => 267,  368 => 208,  359 => 207,  342 => 31,  337 => 29,  332 => 27,  327 => 25,  322 => 23,  313 => 16,  304 => 15,  286 => 13,  271 => 280,  269 => 267,  228 => 228,  214 => 210,  212 => 207,  209 => 206,  202 => 204,  191 => 201,  188 => 200,  182 => 199,  179 => 198,  175 => 197,  172 => 196,  168 => 195,  158 => 187,  153 => 92,  144 => 86,  140 => 85,  137 => 84,  133 => 82,  121 => 75,  118 => 74,  106 => 67,  103 => 66,  101 => 65,  90 => 59,  87 => 58,  85 => 57,  80 => 55,  75 => 53,  72 => 52,  70 => 51,  63 => 49,  50 => 38,  48 => 15,  43 => 13,  29 => 1,);
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
            <div class=\"blocMap col-lg-3 col-md-3 col-xs-10 col-lg-offset-2 col-md-offset-1 col-xs-offset-1\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.1274968258563!2d2.3321566154971847!3d48.83670671018753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671c7785c4fdb%3A0xb118bc844f2f417a!2sLes+Grands+Voisins!5e0!3m2!1sfr!2sfr!4v1505995015490\" width=\"275\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
            </div>
            
            {#<div class=\"col-lg-4 col-md-6\">
                <h3>Contact:</h3>
                <p>Une question ou un commentaire ? Contactez-nous !</p>
                <p><a href=\"\" title=\"Contact me!\"><i class=\"fa fa-envelope\"></i> Contact</a></p>
                
            </div>#}
            
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
        
        {% block javascripts %}

            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>

            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

            <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>

            <script src=\"{{asset('js/homepagescript.js')}}\"></script>

            <script src=\"{{asset('js/menu.js')}}\"></script>

        {% endblock %}

    </body>

</html>

", "layout.html.twig", "C:\\xampp\\htdocs\\projet_final\\final_project_wf3\\dev\\templates\\layout.html.twig");
    }
}
