<?php

/* comptecollecteur.html.twig */
class __TwigTemplate_7d9fbeaf78bc15f0bba7193c9c9f368463bc6a4c77dbd5e20a35190554e180b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "comptecollecteur.html.twig", 1);
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
    <div class=\"container collector\">
";
        // line 7
        echo "        <div id=\"collector_nav\" class=\"row\">
            <a href=\"#collecte\" class=\"col-md-4 col-xs-12\">
                <button class=\"btn btn-block btn-warning\">Collecte de biodéchets</button>
            </a>
            <a href=\"#composte\" class=\"col-md-4 col-xs-12\">
                <button class=\"btn btn-block btn-composte\">Récolte de composte</button>
            </a>
            <a href=\"#recap\" class=\"col-md-4 col-xs-12\">
                <button class=\"btn btn-block btn-success\">Vos réussites</button>
            </a>
        </div>
        <div id=\"collecte\" class=\"row bloc bloc-collector jaune\">
            <div class=\"col-md-4 col-xs-12\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading \"><h2 class='panel-title'>Nouvelle collecte</h2></div>
                    <div class=\"panel-body panel-body-collector\">
                        <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registercollecte");
        echo "\" type=\"button\" class=\"btn btn-warning\">Ajouter</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-xs-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading text-center\"><h3 class='panel-title'>Formulaires à compléter</h3></div>
                    <div class=\"panel-body panel-body-collector btn-group-vertical btn-block\" role=\"group\" aria-label=\"...\">
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bins"]) ? $context["bins"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["bin"]) {
            echo "                    
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registercollecte", array("id" => $this->getAttribute($context["bin"], "id_adresses_collections_have_collector", array()))), "html", null, true);
            echo "\" class=\"btn btn-default client-to-collect\">
                                Numéro de bac: ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["bin"], "bin_number", array()), "html", null, true);
            echo "  
                                <span class=\"icon-edit pull-right\" aria-hidden=\"true\"></span>
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    </div>
                </div>
            </div>

            <div class=\"col-md-4 col-xs-12 a-collecter\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading text-center\"> 
                        <h2 class='panel-title'>Clients à collecter</h2>
                    </div>
                    <div class=\"panel-body panel-body-collector\">
                        <h3>A collecter aujourd'hui</h3>

                        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adresses"]) ? $context["adresses"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
            // line 50
            echo "                            <ul>
                                <li>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "address_name", array()), "html", null, true);
            echo "</li>
                                <li>Adresse: ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "address_collection", array()), "html", null, true);
            echo "</li>
                                <li>Code postal: ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "postal_code", array()), "html", null, true);
            echo "</li>
                                <li>Ville: ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "city", array()), "html", null, true);
            echo "</li>
                            </ul>                    


                            ";
            // line 58
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo " ";
                // line 59
                echo "                                <hr>
                            ";
            }
            // line 61
            echo "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                 
                    </div>
                    <hr> 
                    <div class=\"panel-body panel-body-collector\">
                        <h3>A récolter demain</h3>

                        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adressesTomorrow"]) ? $context["adressesTomorrow"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
            // line 68
            echo "                            <ul>
                                <li>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "address_name", array()), "html", null, true);
            echo "</li>
                                <li>Adresse: ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "address_collection", array()), "html", null, true);
            echo "</li>
                                <li>Code postal: ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "postal_code", array()), "html", null, true);
            echo "</li>
                                <li>Ville: ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "city", array()), "html", null, true);
            echo "</li>
                            </ul>

                            ";
            // line 75
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo " ";
                // line 76
                echo "                                <hr>
                            ";
            }
            // line 78
            echo "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                    </div>
                </div>
            </div>
        </div>


        ";
        // line 98
        echo "

        <div id=\"composte\" class=\"bloc bloc-collector gris row\">
            <div class=\"col-md-4 col-md-offset-4 col-xs-12\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading \"><h3 class='panel-title'>Rentrez le composte collecté</h3></div>
                    <div class=\"panel-body panel-body-collector\">
                        <form method=\"post\">
                            <fieldset>
                                <a href=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registeroutputcompost");
        echo "\" type=\"submit\" id=\"btn-composte\" name=\"singlebutton\" class=\"btn btn-default\">Insérer</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id=\"recap\" class=\"bloc bloc-collector vert row\">
            <div class=\"col-md-6 col-xs-12\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading \"><h3 class='panel-title'>Biodéchets collectés depuis le début de votre mission</h3></div>
                    <div class=\"panel-body panel-body-collector\">
                        <strong>";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["totalWaste"]) ? $context["totalWaste"] : null), "html", null, true);
        echo " kilos</strong><br>
                        <i>Super!</i>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-xs-12\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading \"><h3 class='panel-title'>Biodéchets collectés cette semaine</h3></div>
                    <div class=\"panel-body panel-body-collector\">
                        <strong>";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["weeklyWaste"]) ? $context["weeklyWaste"] : null), "html", null, true);
        echo " kilos</strong><br>
                        <i>Bravo!</i>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-xs-12\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading \"><h3 class='panel-title'>Composte collecté cette semaine</h3></div>
                    <div class=\"panel-body panel-body-collector\">
                        <strong>";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["weeklyOutput"]) ? $context["weeklyOutput"] : null), "html", null, true);
        echo " kilos</strong><br>
                        <i>:)</i>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-xs-12\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading \"><h3 class='panel-title'>Composte collecté depuis le début de votre mission</h3></div>
                    <div class=\"panel-body panel-body-collector\">
                        <strong>";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["totalOutput"]) ? $context["totalOutput"] : null), "html", null, true);
        echo " kilos</strong><br>
                        <i>Génial</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "comptecollecteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 147,  283 => 138,  271 => 129,  259 => 120,  243 => 107,  232 => 98,  224 => 79,  210 => 78,  206 => 76,  203 => 75,  197 => 72,  193 => 71,  189 => 70,  185 => 69,  182 => 68,  165 => 67,  144 => 61,  140 => 59,  137 => 58,  130 => 54,  126 => 53,  122 => 52,  118 => 51,  115 => 50,  98 => 49,  84 => 37,  74 => 33,  70 => 32,  64 => 31,  53 => 23,  35 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "comptecollecteur.html.twig", "C:\\xampp\\htdocs\\gregoire_morane\\final_project_wf3\\dev\\templates\\comptecollecteur.html.twig");
    }
}
