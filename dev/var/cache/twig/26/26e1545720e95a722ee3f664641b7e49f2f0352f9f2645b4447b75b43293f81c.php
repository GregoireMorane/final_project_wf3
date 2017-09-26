<?php

/* compteadmin.html.twig */
class __TwigTemplate_5fed79790fa4f0454bcdcd8aa503bc025b920b846c6ef648fead5e670db4e65e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) ? $context["locations"] : null));
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
                                                        <li class=\"plus italic\">les lieux de colectes du client ";
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
                                                            ajouter un lieu de collecte à ce client</a>
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
                                                    ajouter un client</li>
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
                                        assigner un collectecteur à ce lieu de traitement</li>
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
                        <h3 class=\"accesliste\">liste des collecteurs</h3>
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
                        <h3 class=\"accesliste\">liste des lieux de collectes</h3>
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
                        <h3 class=\"accesliste\">liste des les clients</h3>
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
                        <h3 class=\"accesliste\">liste des lieux de traitement</h3>
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
                        <h3 class=\"accesliste\">liste des relations entre les lieux de traitement et les collecteurs</h3>
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
        echo "            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading \">
                        <p><strong><p class=\"kg\">";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["totalweightbyweek"]) ? $context["totalweightbyweek"] : null), "html", null, true);
        echo " Kg </p> de biodéchets collectés cette semaine</strong></p>
                        <i class=\"kg\">Bravo!</i>
                    </div>
                </div>
            </div>


            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading \">
                        <p><strong><p class=\"kg\">";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["totalweight"]) ? $context["totalweight"] : null), "html", null, true);
        echo " Kg </p> de biodéchets collecté depuis le début de l'année</strong></p>
                        <i class=\"kg\">Bravo!</i>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading \">
                        <p><strong><p class=\"kg\">";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["totalweightoutputcompost"]) ? $context["totalweightoutputcompost"] : null), "html", null, true);
        echo " Kg </p> de composte collectés cette année</strong></p>
                        <i class=\"kg\">Bravo!</i>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading \">
                        <p><strong><p class=\"kg\">";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["totalweightoutputcompostbyweek"]) ? $context["totalweightoutputcompostbyweek"] : null), "html", null, true);
        echo " Kg </p> de composte collecté cette semaine</strong></p>
                        <i class=\"kg\">Bravo!</i>
                    </div>
                </div>
            </div>
            <hr class=\"hrStyle col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1\">
            ";
        // line 159
        echo "          
            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-body\">
                        <h3>Nouveau collecteur</h3>
                        <a href=\"";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registercollector");
        echo "\">
                            <img  src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/add.png"), "html", null, true);
        echo "\">
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-body\">
                        <h3>Nouveau client</h3>
                        <a href=\"";
        // line 174
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registerclient");
        echo "\">
                            <img  src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/add.png"), "html", null, true);
        echo "\">
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-body\">
                        <h3>Nouveau secteur</h3>
                        <a href=\"";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registerlieutraitement");
        echo "\">
                            <img  src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/add.png"), "html", null, true);
        echo "\">
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-body\">
                        <h3>Nouveau lieu de collecte</h3>
                        <a href=\"";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registerlieucollecte");
        echo "\">
                            <img  src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/add.png"), "html", null, true);
        echo "\">
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-3 col-xs-10 col-sm-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-body\">
                        <h3>Nouvelle assignation d'un collecteur à lieu de traitement</h3>
                        <a href=\"";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registertraitementcollector");
        echo "\">
                            <img  src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/add.png"), "html", null, true);
        echo "\">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        ";
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
        return array (  404 => 205,  400 => 204,  388 => 195,  384 => 194,  372 => 185,  368 => 184,  356 => 175,  352 => 174,  340 => 165,  336 => 164,  329 => 159,  320 => 153,  308 => 144,  296 => 135,  283 => 125,  278 => 122,  269 => 115,  265 => 114,  253 => 105,  249 => 104,  236 => 94,  232 => 93,  219 => 83,  215 => 82,  202 => 72,  198 => 71,  192 => 67,  188 => 64,  179 => 59,  176 => 58,  169 => 56,  164 => 53,  160 => 52,  157 => 51,  150 => 49,  143 => 46,  140 => 45,  132 => 42,  124 => 38,  121 => 37,  110 => 34,  107 => 33,  103 => 32,  99 => 31,  96 => 30,  89 => 27,  86 => 26,  82 => 25,  78 => 24,  75 => 23,  67 => 20,  63 => 19,  59 => 18,  56 => 17,  48 => 14,  44 => 13,  39 => 10,  36 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "compteadmin.html.twig", "C:\\xampp\\htdocs\\gregoire_morane\\final_project_wf3\\dev\\templates\\compteadmin.html.twig");
    }
}
