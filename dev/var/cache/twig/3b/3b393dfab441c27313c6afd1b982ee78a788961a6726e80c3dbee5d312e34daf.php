<?php

/* compteadmin.html.twig */
class __TwigTemplate_8b6271a96885a8cc86217c87beffdbba364747a5e14e0cfecf45a9e64bf4dc7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "compteadmin.html.twig", 1);
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
        $__internal_5a710ce61af59b907c56edb3281e5079941490b797e865764d80be3bdd9f91d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a710ce61af59b907c56edb3281e5079941490b797e865764d80be3bdd9f91d1->enter($__internal_5a710ce61af59b907c56edb3281e5079941490b797e865764d80be3bdd9f91d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compteadmin.html.twig"));

        $__internal_0ea3c52d4703bc6fb506eb7faf657621720cd5e3a51f710142e7d4ddef04b280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea3c52d4703bc6fb506eb7faf657621720cd5e3a51f710142e7d4ddef04b280->enter($__internal_0ea3c52d4703bc6fb506eb7faf657621720cd5e3a51f710142e7d4ddef04b280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compteadmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a710ce61af59b907c56edb3281e5079941490b797e865764d80be3bdd9f91d1->leave($__internal_5a710ce61af59b907c56edb3281e5079941490b797e865764d80be3bdd9f91d1_prof);

        
        $__internal_0ea3c52d4703bc6fb506eb7faf657621720cd5e3a51f710142e7d4ddef04b280->leave($__internal_0ea3c52d4703bc6fb506eb7faf657621720cd5e3a51f710142e7d4ddef04b280_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7838cc56e3404d43b2e7e82d18e4bc62c11a1fa342a31dc9ad3a9f2360e71b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7838cc56e3404d43b2e7e82d18e4bc62c11a1fa342a31dc9ad3a9f2360e71b6c->enter($__internal_7838cc56e3404d43b2e7e82d18e4bc62c11a1fa342a31dc9ad3a9f2360e71b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2cdb481ce7e032e86115f344d8f4cac13c784fdc943883c630c070c657172be9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cdb481ce7e032e86115f344d8f4cac13c784fdc943883c630c070c657172be9->enter($__internal_2cdb481ce7e032e86115f344d8f4cac13c784fdc943883c630c070c657172be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">

    <div class=\"container \">    
        ";
        // line 8
        echo "        <div class=\"list col-md-4 col-sm-4 col-lg-4 col-xs-4\">
            ";
        // line 10
        echo "            <div id=\"monmenu\" style=\"padding-left: 0px\">
                <ul class=niveau1>
                    <li class=\"plus italic\">Liste des lieux de traitement</li>
                        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? $this->getContext($context, "locations")));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 14
            echo "                        <li><a  class=\"col-md-10 col-sm-10 col-lg-10 col-xs-10\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registerlieutraitement", array("id" => $this->getAttribute($context["location"], "id_location_processing", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "processing_location", array()), "html", null, true);
            echo "</a><span class=\"glyphicon glyphicon-menu-right pull right\" style=\"font-size:2em;\"></span>

                            ";
            // line 17
            echo "                            <ul class=niveau2>
                                <li class=\"plus italic\">Les collecteurs de ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "processing_location", array()), "html", null, true);
            echo "</li>
                                    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["location"], "collectors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["collector"]) {
                // line 20
                echo "                                    <li class=plus><a class=\"col-md-9 col-sm-9 col-lg-9 col-xs-9\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registercollector", array("id" => $this->getAttribute($context["collector"], "idcollector", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["collector"], "firstname", array()), "html", null, true);
                echo "</a><span class=\"glyphicon glyphicon-menu-right pull right\" style=\"font-size:2em; \"></span>

                                        ";
                // line 23
                echo "                                        <ul class =\"niveau3\">
                                            <li class=\"plus italic\">Les clients de ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "processing_location", array()), "html", null, true);
                echo "</li>
                                                ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["location"], "clients", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                    // line 26
                    echo "                                                <li class=plus>
                                                    <a class=\"col-md-9 col-sm-9 col-lg-9 col-xs-9\" href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registerclient", array("id" => $this->getAttribute($context["client"], "idclient", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "fullname", array()), "html", null, true);
                    echo "</a><span class=\"glyphicon glyphicon-menu-right pull right\" style=\"font-size:2em;\"></span>

                                                    ";
                    // line 30
                    echo "                                                    <ul class=niveau4>
                                                        <li class=\"plus italic\">les lieux de collectes du client ";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "fullname", array()), "html", null, true);
                    echo "</li>
                                                            ";
                    // line 32
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["location"], "lieux", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
                        // line 33
                        echo "                                                            <li class=\"plus\" style=\"height: 54px;\">
                                                                <a href=\"";
                        // line 34
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registerlieucollecte", array("id" => $this->getAttribute($context["lieu"], "id_collection_address", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "address_name", array()), "html", null, true);
                        echo "</a>
                                                            </li>
                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "                                                        <li class=\"plus italic\">
                                                            <a class=\"buttonlink\" href=\"";
                    // line 38
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registerlieucollecte");
                    echo "\"><img  class=\"buttonadd\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/addbutton.png"), "html", null, true);
                    echo "\"></a>
                                                            Ajouter un lieu de collecte à ce client</a>
                                                        </li>
                                                    </ul>";
                    // line 42
                    echo "
                                                </li>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                                            <li class=\"plus italic\"> 
                                                <a class=\"buttonlink\" href=\"";
                // line 46
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registerclient");
                echo "\"><img  class=\"buttonadd\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/addbutton.png"), "html", null, true);
                echo "\"></a>
                                                    Ajouter un client</li>
                                        </ul>";
                // line 49
                echo "                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collector'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                                <li class=\"plus italic\">
                                    <a class=\"buttonlink\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registertraitementcollector", array("id" => $this->getAttribute($context["location"], "id_location_processing", array()))), "html", null, true);
            echo "\">
                                        <img  class=\"buttonadd\" src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/addbutton.png"), "html", null, true);
            echo "\"></a>
                                        Assigner un collectecteur à ce lieu de traitement</li>
                            </ul>";
            // line 56
            echo "
                        </li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                        <li class=\"plus italic\">
                            <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registerlieutraitement");
        echo "\"><img class=\"buttonadd\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/addbutton.png"), "html", null, true);
        echo "\"></a>
                            ajouter un lieu de traitment 
                        </li>
                    </ul>
                </div>";
        // line 64
        echo "            </div>

            ";
        // line 67
        echo "            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-body\">
                        <h3 class=\"accesliste\">Liste des collecteurs</h3>
                        <a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listecollector");
        echo "\">
                            <img  src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/list.png"), "html", null, true);
        echo "\">
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-body\">
                        <h3 class=\"accesliste\">Liste des lieux de collectes</h3>
                        <a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listelieucollecte");
        echo "\">
                            <img  src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/list.png"), "html", null, true);
        echo "\">
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-body\">
                        <h3 class=\"accesliste\">Liste des les clients</h3>
                        <a href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listeclient");
        echo "\">
                            <img  src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/list.png"), "html", null, true);
        echo "\">
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-body\">
                        <h3 class=\"accesliste\">Liste des lieux de traitement</h3>
                        <a href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listelieutraitement");
        echo "\">
                            <img  src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/list.png"), "html", null, true);
        echo "\">
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-5 col-lg-offset-5 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-body\">
                        <h3 class=\"accesliste\">Liste des relations entre les lieux de traitement et les collecteurs</h3>
                        <a href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listetraitementcollector");
        echo "\">
                            <img  src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/list.png"), "html", null, true);
        echo "\">
                        </a>
                    </div>
                </div>
            </div>
            <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
            ";
        // line 122
        echo "            <div class=\"col-lg-4 col-md-4 col-xs-10 col-sm-10 col-md-offset-2 col-lg-offset-2 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading \">
                        <p><strong><p class=\"kg\">";
        // line 125
        echo twig_escape_filter($this->env, ($context["totalweightbyweek"] ?? $this->getContext($context, "totalweightbyweek")), "html", null, true);
        echo " Kg </p> de biodéchets collectés cette semaine</strong></p>
                        <i class=\"kg\">Bravo!</i>
                    </div>
                </div>
            </div>


            <div class=\"col-lg-4 col-md-4 col-xs-10 col-sm-10 col-md-offset-0 col-lg-offset-0 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading \">
                        <p><strong><p class=\"kg\">";
        // line 135
        echo twig_escape_filter($this->env, ($context["totalweight"] ?? $this->getContext($context, "totalweight")), "html", null, true);
        echo " Kg </p> de biodéchets collecté depuis le début de l'année</strong></p>
                        <i class=\"kg\">Bravo!</i>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-4 col-md-4 col-xs-10 col-sm-10 col-md-offset-2 col-lg-offset-2 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading \">
                        <p><strong><p class=\"kg\">";
        // line 144
        echo twig_escape_filter($this->env, ($context["totalweightoutputcompost"] ?? $this->getContext($context, "totalweightoutputcompost")), "html", null, true);
        echo " Kg </p> de composte collectés cette année</strong></p>
                        <i class=\"kg\">Bravo!</i>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-4 col-md-4 col-xs-10 col-sm-10 col-md-offset-0 col-lg-offset-0 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading \">
                        <p><strong><p class=\"kg\">";
        // line 153
        echo twig_escape_filter($this->env, ($context["totalweightoutputcompostbyweek"] ?? $this->getContext($context, "totalweightoutputcompostbyweek")), "html", null, true);
        echo " Kg </p> de composte collecté cette semaine</strong></p>
                        <i class=\"kg\">Bravo!</i>
                    </div>
                </div>
            </div>
            <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
            ";
        // line 160
        echo "        <div class=\"end_bloc\">
            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-2 col-lg-offset-2 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-body\">
                        <h3>Nouveau collecteur</h3>
                        <a href=\"";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registercollector");
        echo "\">
                            <img  src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/add.png"), "html", null, true);
        echo "\">
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-0 col-lg-offset-0 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-body\">
                        <h3>Nouveau client</h3>
                        <a href=\"";
        // line 175
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registerclient");
        echo "\">
                            <img  src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/add.png"), "html", null, true);
        echo "\">
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-0 col-lg-offset-0 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-body\">
                        <h3>Nouveau secteur</h3>
                        <a href=\"";
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registerlieutraitement");
        echo "\">
                            <img  src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/add.png"), "html", null, true);
        echo "\">
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-2 col-lg-offset-2 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-body\">
                        <h3>Nouveau lieu de collecte</h3>
                        <a href=\"";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registerlieucollecte");
        echo "\">
                            <img  src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/add.png"), "html", null, true);
        echo "\">
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-0 col-lg-offset-0 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-body\">
                        <h3>Nouvelle assignation d'un collecteur à lieu de traitement</h3>
                        <a href=\"";
        // line 205
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registertraitementcollector");
        echo "\">
                            <img  src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/add.png"), "html", null, true);
        echo "\">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        ";
        
        $__internal_2cdb481ce7e032e86115f344d8f4cac13c784fdc943883c630c070c657172be9->leave($__internal_2cdb481ce7e032e86115f344d8f4cac13c784fdc943883c630c070c657172be9_prof);

        
        $__internal_7838cc56e3404d43b2e7e82d18e4bc62c11a1fa342a31dc9ad3a9f2360e71b6c->leave($__internal_7838cc56e3404d43b2e7e82d18e4bc62c11a1fa342a31dc9ad3a9f2360e71b6c_prof);

    }

    public function getTemplateName()
    {
        return "compteadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 206,  418 => 205,  406 => 196,  402 => 195,  390 => 186,  386 => 185,  374 => 176,  370 => 175,  358 => 166,  354 => 165,  347 => 160,  338 => 153,  326 => 144,  314 => 135,  301 => 125,  296 => 122,  287 => 115,  283 => 114,  271 => 105,  267 => 104,  254 => 94,  250 => 93,  237 => 83,  233 => 82,  220 => 72,  216 => 71,  210 => 67,  206 => 64,  197 => 59,  194 => 58,  187 => 56,  182 => 53,  178 => 52,  175 => 51,  168 => 49,  161 => 46,  158 => 45,  150 => 42,  142 => 38,  139 => 37,  128 => 34,  125 => 33,  121 => 32,  117 => 31,  114 => 30,  107 => 27,  104 => 26,  100 => 25,  96 => 24,  93 => 23,  85 => 20,  81 => 19,  77 => 18,  74 => 17,  66 => 14,  62 => 13,  57 => 10,  54 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
    <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">

    <div class=\"container \">    
        {#le menu en deskotp#}
        <div class=\"list col-md-4 col-sm-4 col-lg-4 col-xs-4\">
            {#menu niveau 1#}
            <div id=\"monmenu\" style=\"padding-left: 0px\">
                <ul class=niveau1>
                    <li class=\"plus italic\">Liste des lieux de traitement</li>
                        {% for location in locations %}
                        <li><a  class=\"col-md-10 col-sm-10 col-lg-10 col-xs-10\" href=\"{{path ('registerlieutraitement', {id: location.id_location_processing}) }}\" >{{location.processing_location}}</a><span class=\"glyphicon glyphicon-menu-right pull right\" style=\"font-size:2em;\"></span>

                            {#menu niveau 2#}
                            <ul class=niveau2>
                                <li class=\"plus italic\">Les collecteurs de {{location.processing_location}}</li>
                                    {% for collector in location.collectors %}
                                    <li class=plus><a class=\"col-md-9 col-sm-9 col-lg-9 col-xs-9\" href=\"{{path ('registercollector', {id: collector.idcollector}) }}\" >{{collector.firstname}}</a><span class=\"glyphicon glyphicon-menu-right pull right\" style=\"font-size:2em; \"></span>

                                        {#menu niveau 3#}
                                        <ul class =\"niveau3\">
                                            <li class=\"plus italic\">Les clients de {{location.processing_location}}</li>
                                                {% for client in location.clients %}
                                                <li class=plus>
                                                    <a class=\"col-md-9 col-sm-9 col-lg-9 col-xs-9\" href=\"{{path ('registerclient', {id:client.idclient })}}\">{{client.fullname}}</a><span class=\"glyphicon glyphicon-menu-right pull right\" style=\"font-size:2em;\"></span>

                                                    {#menu niveau 4#}
                                                    <ul class=niveau4>
                                                        <li class=\"plus italic\">les lieux de collectes du client {{client.fullname}}</li>
                                                            {% for lieu in location.lieux %}
                                                            <li class=\"plus\" style=\"height: 54px;\">
                                                                <a href=\"{{path ('registerlieucollecte', {id: lieu.id_collection_address}) }}\">{{lieu.address_name}}</a>
                                                            </li>
                                                        {% endfor %}
                                                        <li class=\"plus italic\">
                                                            <a class=\"buttonlink\" href=\"{{ path('registerlieucollecte')}}\"><img  class=\"buttonadd\" src=\"{{asset('images/addbutton.png')}}\"></a>
                                                            Ajouter un lieu de collecte à ce client</a>
                                                        </li>
                                                    </ul>{# fin menu niveau 4#}

                                                </li>
                                            {% endfor %}
                                            <li class=\"plus italic\"> 
                                                <a class=\"buttonlink\" href=\"{{ path('registerclient')}}\"><img  class=\"buttonadd\" src=\"{{asset('images/addbutton.png')}}\"></a>
                                                    Ajouter un client</li>
                                        </ul>{# fin menu niveau 3#}
                                    </li>
                                {% endfor %}
                                <li class=\"plus italic\">
                                    <a class=\"buttonlink\" href=\"{{ path('registertraitementcollector', {id: location.id_location_processing} )}}\">
                                        <img  class=\"buttonadd\" src=\"{{asset('images/addbutton.png')}}\"></a>
                                        Assigner un collectecteur à ce lieu de traitement</li>
                            </ul>{# fin menu niveau 2#}

                        </li>{% endfor %}
                        <li class=\"plus italic\">
                            <a href=\"{{ path('registerlieutraitement')}}\"><img class=\"buttonadd\" src=\"{{asset('images/addbutton.png')}}\"></a>
                            ajouter un lieu de traitment 
                        </li>
                    </ul>
                </div>{# fin menu niveau 1#}
            </div>

            {#listes#}
            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-body\">
                        <h3 class=\"accesliste\">Liste des collecteurs</h3>
                        <a href=\"{{ path('listecollector')}}\">
                            <img  src=\"{{asset('images/list.png')}}\">
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-body\">
                        <h3 class=\"accesliste\">Liste des lieux de collectes</h3>
                        <a href=\"{{ path('listelieucollecte')}}\">
                            <img  src=\"{{asset('images/list.png')}}\">
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-body\">
                        <h3 class=\"accesliste\">Liste des les clients</h3>
                        <a href=\"{{ path('listeclient')}}\">
                            <img  src=\"{{asset('images/list.png')}}\">
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-body\">
                        <h3 class=\"accesliste\">Liste des lieux de traitement</h3>
                        <a href=\"{{ path('listelieutraitement')}}\">
                            <img  src=\"{{asset('images/list.png')}}\">
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-5 col-lg-offset-5 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-body\">
                        <h3 class=\"accesliste\">Liste des relations entre les lieux de traitement et les collecteurs</h3>
                        <a href=\"{{ path('listetraitementcollector')}}\">
                            <img  src=\"{{asset('images/list.png')}}\">
                        </a>
                    </div>
                </div>
            </div>
            <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
            {#blocs informations#}
            <div class=\"col-lg-4 col-md-4 col-xs-10 col-sm-10 col-md-offset-2 col-lg-offset-2 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading \">
                        <p><strong><p class=\"kg\">{{totalweightbyweek}} Kg </p> de biodéchets collectés cette semaine</strong></p>
                        <i class=\"kg\">Bravo!</i>
                    </div>
                </div>
            </div>


            <div class=\"col-lg-4 col-md-4 col-xs-10 col-sm-10 col-md-offset-0 col-lg-offset-0 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading \">
                        <p><strong><p class=\"kg\">{{totalweight}} Kg </p> de biodéchets collecté depuis le début de l'année</strong></p>
                        <i class=\"kg\">Bravo!</i>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-4 col-md-4 col-xs-10 col-sm-10 col-md-offset-2 col-lg-offset-2 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading \">
                        <p><strong><p class=\"kg\">{{totalweightoutputcompost}} Kg </p> de composte collectés cette année</strong></p>
                        <i class=\"kg\">Bravo!</i>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-4 col-md-4 col-xs-10 col-sm-10 col-md-offset-0 col-lg-offset-0 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading \">
                        <p><strong><p class=\"kg\">{{totalweightoutputcompostbyweek}} Kg </p> de composte collecté cette semaine</strong></p>
                        <i class=\"kg\">Bravo!</i>
                    </div>
                </div>
            </div>
            <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
            {#Blocs créations#}
        <div class=\"end_bloc\">
            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-2 col-lg-offset-2 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-body\">
                        <h3>Nouveau collecteur</h3>
                        <a href=\"{{ path('registercollector')}}\">
                            <img  src=\"{{asset('images/add.png')}}\">
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-0 col-lg-offset-0 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-body\">
                        <h3>Nouveau client</h3>
                        <a href=\"{{ path('registerclient')}}\">
                            <img  src=\"{{asset('images/add.png')}}\">
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-0 col-lg-offset-0 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-body\">
                        <h3>Nouveau secteur</h3>
                        <a href=\"{{ path('registerlieutraitement')}}\">
                            <img  src=\"{{asset('images/add.png')}}\">
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-2 col-lg-offset-2 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-body\">
                        <h3>Nouveau lieu de collecte</h3>
                        <a href=\"{{ path('registerlieucollecte')}}\">
                            <img  src=\"{{asset('images/add.png')}}\">
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-0 col-lg-offset-0 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-body\">
                        <h3>Nouvelle assignation d'un collecteur à lieu de traitement</h3>
                        <a href=\"{{ path('registertraitementcollector')}}\">
                            <img  src=\"{{asset('images/add.png')}}\">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        {% endblock %}
", "compteadmin.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\templates\\compteadmin.html.twig");
    }
}
