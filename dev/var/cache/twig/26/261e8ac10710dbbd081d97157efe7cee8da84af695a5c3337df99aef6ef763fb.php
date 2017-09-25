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
        $__internal_39de65aa96fdbb4877b1667141830867439df436820d1daae399772107684f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39de65aa96fdbb4877b1667141830867439df436820d1daae399772107684f6a->enter($__internal_39de65aa96fdbb4877b1667141830867439df436820d1daae399772107684f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_2e5a6b9e3826382d34e1857e53e1ecbf32b29c05633a9dadf068e10fdff57bab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e5a6b9e3826382d34e1857e53e1ecbf32b29c05633a9dadf068e10fdff57bab->enter($__internal_2e5a6b9e3826382d34e1857e53e1ecbf32b29c05633a9dadf068e10fdff57bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 21
        echo "    </head>
    <body>

        <nav class=\"navbar ombrage\">
            <div class=\"container\">
                <div>
                    <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img class=\"img logo\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Alchimiste_logo.png"), "html", null, true);
        echo "\"></a>

                    ";
        // line 29
        if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array())) {
            // line 30
            echo "                        ";
            if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "admin", array())) {
                // line 31
                echo "                        ";
            } elseif ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "collector", array())) {
                // line 32
                echo "                        ";
            } else {
                echo " 
                            <div class=\"img bloclegende\"><a href=\"";
                // line 33
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compteclient");
                echo "\"><img class=\" une\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/déchets2.png"), "html", null, true);
                echo "\" >Compte Client</a></div>
                        ";
            }
            // line 35
            echo "                    ";
        }
        // line 36
        echo "
                    ";
        // line 37
        if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array())) {
            // line 38
            echo "                        ";
            if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "admin", array())) {
                echo " 
                        ";
            } elseif ($this->getAttribute(            // line 39
($context["user_manager"] ?? $this->getContext($context, "user_manager")), "collector", array())) {
                // line 40
                echo "                            <div class=\"img bloclegende2\"><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comptecollecteur");
                echo "\"><img class=\"img deux\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/velo.png"), "html", null, true);
                echo "\" >Compte Collecteur</a></div>
                                ";
            } else {
                // line 42
                echo "                        ";
            }
            // line 43
            echo "                    ";
        }
        // line 44
        echo "

                    ";
        // line 46
        if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array())) {
            // line 47
            echo "                        ";
            if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "admin", array())) {
                // line 48
                echo "                            <div class=\"img bloclegende3\"><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compteadmin");
                echo "\"><img class=\"img trois\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/composteur2.png"), "html", null, true);
                echo "\">Compte Alchimistes</a></div>
                                ";
            } elseif ($this->getAttribute(            // line 49
($context["user_manager"] ?? $this->getContext($context, "user_manager")), "collector", array())) {
                // line 50
                echo "                                ";
            } elseif (( !$this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "collector", array()) &&  !$this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "collector", array()))) {
                // line 51
                echo "                                ";
            } else {
                // line 52
                echo "                                ";
            }
            // line 53
            echo "                            ";
        }
        // line 54
        echo "
                    ";
        // line 55
        if (twig_test_empty($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()))) {
            // line 56
            echo "                        <div class=\"img bloclegende4\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion");
            echo "\"><img class=\"img quatre\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/plante.png"), "html", null, true);
            echo "\">Connexion</a></div>
                        <div class=\"clear\"></div>
                    ";
        }
        // line 59
        echo "                </div>
                <div>
                    <div class=\"clear\"></div>

                    <div class=\"navresponsive\">
                        <nav class=\"navbar navbar-default \">
                            <div class=\"container-fluid\">
                                ";
        // line 66
        if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array())) {
            // line 67
            echo "                                    ";
            if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "admin", array())) {
                // line 68
                echo "                                    ";
            } elseif ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "collector", array())) {
                // line 69
                echo "                                    ";
            } else {
                echo " 
                                        <div class=\"navbar-header\">
                                            <a class=\"navbar-brand\" href=\"";
                // line 71
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compteclient");
                echo "\">Compte client</a>
                                        </div>
                                    ";
            }
            // line 74
            echo "                                ";
        }
        // line 75
        echo "                                
                                ";
        // line 76
        if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array())) {
            // line 77
            echo "                                    ";
            if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "admin", array())) {
                // line 78
                echo "                                        <div class=\"navbar-header\">
                                            <a class=\"navbar-brand\" href=\"";
                // line 79
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compteadmin");
                echo "\">Compte alchimiste</a>
                                        </div>
                                    ";
            } elseif ($this->getAttribute(            // line 81
($context["user_manager"] ?? $this->getContext($context, "user_manager")), "collector", array())) {
                // line 82
                echo "                                        <div class=\"navbar-header\">
                                            <a class=\"navbar-brand\" href=\"";
                // line 83
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comptecollecteur");
                echo "\">Compte collecteur</a>
                                        </div>
                                    ";
            }
            // line 85
            echo "    
                                ";
        }
        // line 87
        echo "                                
                                ";
        // line 88
        if (twig_test_empty($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array()))) {
            echo "<div class=\"navbar-header\">
                                    <a class=\"navbar-brand\" href=\"";
            // line 89
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion");
            echo "\">Connexion</a></div>
                                ";
        }
        // line 91
        echo "
                        </nav>
                    </div>                         
                </div>
                        ";
        // line 95
        if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array())) {
            // line 96
            echo "                            <div class=\" col-lg-12 col-md-12 col-xs-12 col-sm-12\" style=\"text-align: left;\">
                                <span style=\"font-size:1.7em;font-weight: bold;\">Bonjour ";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "firstname", array()), "html", null, true);
            echo "</span>
                                <br>
                                <a style=\"font-size:1.3em;font-weight: bold;\" href=\"";
            // line 99
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion");
            echo "\">Deconnexion</a>
                            </div>
                        ";
        }
        // line 102
        echo "                    </div>
                </nav>
                <div>
                    ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
            // line 106
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 107
                echo "                            ";
                if (($context["type"] == "error")) {
                    echo " ";
                    $context["type"] = "danger";
                    echo " ";
                }
                // line 108
                echo "                            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\"> ";
                echo $context["flash"];
                echo " </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                    ";
        $this->displayBlock('content', $context, $blocks);
        // line 113
        echo "                </div>
                ";
        // line 114
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_39de65aa96fdbb4877b1667141830867439df436820d1daae399772107684f6a->leave($__internal_39de65aa96fdbb4877b1667141830867439df436820d1daae399772107684f6a_prof);

        
        $__internal_2e5a6b9e3826382d34e1857e53e1ecbf32b29c05633a9dadf068e10fdff57bab->leave($__internal_2e5a6b9e3826382d34e1857e53e1ecbf32b29c05633a9dadf068e10fdff57bab_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac80b4f859f4ab1029c112272e579ea35cfd4db5a8120ad83a0b78f10ff9dc8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac80b4f859f4ab1029c112272e579ea35cfd4db5a8120ad83a0b78f10ff9dc8a->enter($__internal_ac80b4f859f4ab1029c112272e579ea35cfd4db5a8120ad83a0b78f10ff9dc8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b06e2027356c99e757bc30227660c73cee2bda85471be6076df36b369aee85d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b06e2027356c99e757bc30227660c73cee2bda85471be6076df36b369aee85d6->enter($__internal_b06e2027356c99e757bc30227660c73cee2bda85471be6076df36b369aee85d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_b06e2027356c99e757bc30227660c73cee2bda85471be6076df36b369aee85d6->leave($__internal_b06e2027356c99e757bc30227660c73cee2bda85471be6076df36b369aee85d6_prof);

        
        $__internal_ac80b4f859f4ab1029c112272e579ea35cfd4db5a8120ad83a0b78f10ff9dc8a->leave($__internal_ac80b4f859f4ab1029c112272e579ea35cfd4db5a8120ad83a0b78f10ff9dc8a_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c3c0b7ee969c1597fcddbfeb4f4d7c438b62dfbe10695286965b6f67c08b74db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c0b7ee969c1597fcddbfeb4f4d7c438b62dfbe10695286965b6f67c08b74db->enter($__internal_c3c0b7ee969c1597fcddbfeb4f4d7c438b62dfbe10695286965b6f67c08b74db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_adf043f5be7388abc42e931f5e850e826a5870bf2cc172627f87910c79f2d7e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adf043f5be7388abc42e931f5e850e826a5870bf2cc172627f87910c79f2d7e2->enter($__internal_adf043f5be7388abc42e931f5e850e826a5870bf2cc172627f87910c79f2d7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link href=\"https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" rel=\"stylesheet\">
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/homepage.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/collector.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/menuadmin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" rel=\"stylesheet\">
            <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
        ";
        
        $__internal_adf043f5be7388abc42e931f5e850e826a5870bf2cc172627f87910c79f2d7e2->leave($__internal_adf043f5be7388abc42e931f5e850e826a5870bf2cc172627f87910c79f2d7e2_prof);

        
        $__internal_c3c0b7ee969c1597fcddbfeb4f4d7c438b62dfbe10695286965b6f67c08b74db->leave($__internal_c3c0b7ee969c1597fcddbfeb4f4d7c438b62dfbe10695286965b6f67c08b74db_prof);

    }

    // line 111
    public function block_content($context, array $blocks = array())
    {
        $__internal_ee0217e0c480dee0b19151dc9ac7d5beaaf76ea2956664d7e3233398b51776f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee0217e0c480dee0b19151dc9ac7d5beaaf76ea2956664d7e3233398b51776f3->enter($__internal_ee0217e0c480dee0b19151dc9ac7d5beaaf76ea2956664d7e3233398b51776f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3e3483f7dadd741ebe992c69a22f08d67e491ba03da0a2b856fd5e89f01e0647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e3483f7dadd741ebe992c69a22f08d67e491ba03da0a2b856fd5e89f01e0647->enter($__internal_3e3483f7dadd741ebe992c69a22f08d67e491ba03da0a2b856fd5e89f01e0647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 112
        echo "                    ";
        
        $__internal_3e3483f7dadd741ebe992c69a22f08d67e491ba03da0a2b856fd5e89f01e0647->leave($__internal_3e3483f7dadd741ebe992c69a22f08d67e491ba03da0a2b856fd5e89f01e0647_prof);

        
        $__internal_ee0217e0c480dee0b19151dc9ac7d5beaaf76ea2956664d7e3233398b51776f3->leave($__internal_ee0217e0c480dee0b19151dc9ac7d5beaaf76ea2956664d7e3233398b51776f3_prof);

    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_af9897015d9e291ae9ceb442504e548ad9dd2984a831647e88b98ff8f974e174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af9897015d9e291ae9ceb442504e548ad9dd2984a831647e88b98ff8f974e174->enter($__internal_af9897015d9e291ae9ceb442504e548ad9dd2984a831647e88b98ff8f974e174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_78c692c65c6217fae8ef1b425dc8c487a47c0e49355dfd7f352bc1eef2eab86a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c692c65c6217fae8ef1b425dc8c487a47c0e49355dfd7f352bc1eef2eab86a->enter($__internal_78c692c65c6217fae8ef1b425dc8c487a47c0e49355dfd7f352bc1eef2eab86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 115
        echo "                    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
                    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
                    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
                    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/homepagescript.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/menu.js"), "html", null, true);
        echo "\"></script>
                ";
        
        $__internal_78c692c65c6217fae8ef1b425dc8c487a47c0e49355dfd7f352bc1eef2eab86a->leave($__internal_78c692c65c6217fae8ef1b425dc8c487a47c0e49355dfd7f352bc1eef2eab86a_prof);

        
        $__internal_af9897015d9e291ae9ceb442504e548ad9dd2984a831647e88b98ff8f974e174->leave($__internal_af9897015d9e291ae9ceb442504e548ad9dd2984a831647e88b98ff8f974e174_prof);

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
        return array (  399 => 119,  395 => 118,  390 => 115,  381 => 114,  371 => 112,  362 => 111,  348 => 17,  344 => 16,  340 => 15,  336 => 14,  331 => 11,  322 => 10,  304 => 8,  294 => 114,  291 => 113,  288 => 111,  282 => 110,  271 => 108,  264 => 107,  259 => 106,  255 => 105,  250 => 102,  244 => 99,  239 => 97,  236 => 96,  234 => 95,  228 => 91,  223 => 89,  219 => 88,  216 => 87,  212 => 85,  206 => 83,  203 => 82,  201 => 81,  196 => 79,  193 => 78,  190 => 77,  188 => 76,  185 => 75,  182 => 74,  176 => 71,  170 => 69,  167 => 68,  164 => 67,  162 => 66,  153 => 59,  144 => 56,  142 => 55,  139 => 54,  136 => 53,  133 => 52,  130 => 51,  127 => 50,  125 => 49,  118 => 48,  115 => 47,  113 => 46,  109 => 44,  106 => 43,  103 => 42,  95 => 40,  93 => 39,  88 => 38,  86 => 37,  83 => 36,  80 => 35,  73 => 33,  68 => 32,  65 => 31,  62 => 30,  60 => 29,  53 => 27,  45 => 21,  43 => 10,  38 => 8,  29 => 1,);
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
            <link href=\"{{ asset('css/homepage.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"{{ asset('css/collector.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"{{ asset('css/menuadmin.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" rel=\"stylesheet\">
            <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
        {% endblock %}
    </head>
    <body>

        <nav class=\"navbar ombrage\">
            <div class=\"container\">
                <div>
                    <a href=\"{{path('homepage')}}\"><img class=\"img logo\" src=\"{{asset('images/Alchimiste_logo.png')}}\"></a>

                    {% if user_manager.user %}
                        {% if user_manager.admin%}
                        {% elseif  user_manager.collector %}
                        {% else %} 
                            <div class=\"img bloclegende\"><a href=\"{{path('compteclient')}}\"><img class=\" une\" src=\"{{asset('images/déchets2.png')}}\" >Compte Client</a></div>
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
                        <div class=\"img bloclegende4\"><a href=\"{{path('connexion')}}\"><img class=\"img quatre\" src=\"{{asset('images/plante.png')}}\">Connexion</a></div>
                        <div class=\"clear\"></div>
                    {% endif %}
                </div>
                <div>
                    <div class=\"clear\"></div>

                    <div class=\"navresponsive\">
                        <nav class=\"navbar navbar-default \">
                            <div class=\"container-fluid\">
                                {% if user_manager.user %}
                                    {% if user_manager.admin%}
                                    {% elseif  user_manager.collector %}
                                    {% else %} 
                                        <div class=\"navbar-header\">
                                            <a class=\"navbar-brand\" href=\"{{path('compteclient')}}\">Compte client</a>
                                        </div>
                                    {% endif %}
                                {% endif %}
                                
                                {% if user_manager.user %}
                                    {% if user_manager.admin %}
                                        <div class=\"navbar-header\">
                                            <a class=\"navbar-brand\" href=\"{{path('compteadmin')}}\">Compte alchimiste</a>
                                        </div>
                                    {% elseif  user_manager.collector %}
                                        <div class=\"navbar-header\">
                                            <a class=\"navbar-brand\" href=\"{{path('comptecollecteur')}}\">Compte collecteur</a>
                                        </div>
                                    {% endif %}    
                                {% endif %}
                                
                                {% if user_manager.user is empty %}<div class=\"navbar-header\">
                                    <a class=\"navbar-brand\" href=\"{{path('connexion')}}\">Connexion</a></div>
                                {% endif %}

                        </nav>
                    </div>                         
                </div>
                        {% if user_manager.user %}
                            <div class=\" col-lg-12 col-md-12 col-xs-12 col-sm-12\" style=\"text-align: left;\">
                                <span style=\"font-size:1.7em;font-weight: bold;\">Bonjour {{ user_manager.firstname }}</span>
                                <br>
                                <a style=\"font-size:1.3em;font-weight: bold;\" href=\"{{path('deconnexion')}}\">Deconnexion</a>
                            </div>
                        {% endif %}
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
                {% block javascripts %}
                    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
                    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
                    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
                    <script src=\"{{asset('js/homepagescript.js')}}\"></script>
                    <script src=\"{{asset('js/menu.js')}}\"></script>
                {% endblock %}", "layout.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\templates\\layout.html.twig");
    }
}
