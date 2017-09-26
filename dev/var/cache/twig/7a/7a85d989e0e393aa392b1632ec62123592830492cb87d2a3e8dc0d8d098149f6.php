<?php

/* comptecollecteur.html.twig */
class __TwigTemplate_9da73eb44b6c151d7b7997f7c28263e21b5f7e9034c8e6ede485e2f828a44599 extends Twig_Template
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
        $__internal_d487d9b81c0c2202382351688b88eb6a1af05a2cd53085af38b1e2ad998cd800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d487d9b81c0c2202382351688b88eb6a1af05a2cd53085af38b1e2ad998cd800->enter($__internal_d487d9b81c0c2202382351688b88eb6a1af05a2cd53085af38b1e2ad998cd800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comptecollecteur.html.twig"));

        $__internal_a2d8cbbd2abafabf0d3b3347f6f6f06316c64192d3a56e63d17b9ceb40d15716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2d8cbbd2abafabf0d3b3347f6f6f06316c64192d3a56e63d17b9ceb40d15716->enter($__internal_a2d8cbbd2abafabf0d3b3347f6f6f06316c64192d3a56e63d17b9ceb40d15716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comptecollecteur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d487d9b81c0c2202382351688b88eb6a1af05a2cd53085af38b1e2ad998cd800->leave($__internal_d487d9b81c0c2202382351688b88eb6a1af05a2cd53085af38b1e2ad998cd800_prof);

        
        $__internal_a2d8cbbd2abafabf0d3b3347f6f6f06316c64192d3a56e63d17b9ceb40d15716->leave($__internal_a2d8cbbd2abafabf0d3b3347f6f6f06316c64192d3a56e63d17b9ceb40d15716_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_676a9ff038289967ae8cf2738870ad2815c66e7f55b7f3c8b07603cc36930a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676a9ff038289967ae8cf2738870ad2815c66e7f55b7f3c8b07603cc36930a36->enter($__internal_676a9ff038289967ae8cf2738870ad2815c66e7f55b7f3c8b07603cc36930a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_68192f52059f70fc77dd08e61ca225ab8626f4de0ac5fddf7188f7bc7e6eb5eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68192f52059f70fc77dd08e61ca225ab8626f4de0ac5fddf7188f7bc7e6eb5eb->enter($__internal_68192f52059f70fc77dd08e61ca225ab8626f4de0ac5fddf7188f7bc7e6eb5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    <div style=\"overflow-y: scroll;\" class=\"panel-body panel-body-collector btn-group-vertical btn-block\" role=\"group\" aria-label=\"...\">
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bins"] ?? $this->getContext($context, "bins")));
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
                    <div class=\"panel-body panel-body-collector\" style=\"overflow-y: scroll;\">
                        <h3>A collecter aujourd'hui</h3>

                        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["adresses"] ?? $this->getContext($context, "adresses")));
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
                    <div class=\"panel-body panel-body-collector\" style=\"overflow-y: scroll;\">
                        <h3>A récolter demain</h3>

                        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["adressesTomorrow"] ?? $this->getContext($context, "adressesTomorrow")));
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
        echo twig_escape_filter($this->env, ($context["totalWaste"] ?? $this->getContext($context, "totalWaste")), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["weeklyWaste"] ?? $this->getContext($context, "weeklyWaste")), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["weeklyOutput"] ?? $this->getContext($context, "weeklyOutput")), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["totalOutput"] ?? $this->getContext($context, "totalOutput")), "html", null, true);
        echo " kilos</strong><br>
                        <i>Génial</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_68192f52059f70fc77dd08e61ca225ab8626f4de0ac5fddf7188f7bc7e6eb5eb->leave($__internal_68192f52059f70fc77dd08e61ca225ab8626f4de0ac5fddf7188f7bc7e6eb5eb_prof);

        
        $__internal_676a9ff038289967ae8cf2738870ad2815c66e7f55b7f3c8b07603cc36930a36->leave($__internal_676a9ff038289967ae8cf2738870ad2815c66e7f55b7f3c8b07603cc36930a36_prof);

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
        return array (  313 => 147,  301 => 138,  289 => 129,  277 => 120,  261 => 107,  250 => 98,  242 => 79,  228 => 78,  224 => 76,  221 => 75,  215 => 72,  211 => 71,  207 => 70,  203 => 69,  200 => 68,  183 => 67,  162 => 61,  158 => 59,  155 => 58,  148 => 54,  144 => 53,  140 => 52,  136 => 51,  133 => 50,  116 => 49,  102 => 37,  92 => 33,  88 => 32,  82 => 31,  71 => 23,  53 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"container collector\">
{#        <h1>Bienvenue {{ user.idcollector }}!</h1>#}
        <div id=\"collector_nav\" class=\"row\">
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
                        <a href=\"{{path('registercollecte')}}\" type=\"button\" class=\"btn btn-warning\">Ajouter</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-xs-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading text-center\"><h3 class='panel-title'>Formulaires à compléter</h3></div>
                    <div style=\"overflow-y: scroll;\" class=\"panel-body panel-body-collector btn-group-vertical btn-block\" role=\"group\" aria-label=\"...\">
                        {%for bin in bins%}                    
                            <a href=\"{{path('registercollecte',{id: bin.id_adresses_collections_have_collector})}}\" class=\"btn btn-default client-to-collect\">
                                Numéro de bac: {{ bin.bin_number }}  
                                <span class=\"icon-edit pull-right\" aria-hidden=\"true\"></span>
                            </a>
                        {%endfor%}
                    </div>
                </div>
            </div>

            <div class=\"col-md-4 col-xs-12 a-collecter\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading text-center\"> 
                        <h2 class='panel-title'>Clients à collecter</h2>
                    </div>
                    <div class=\"panel-body panel-body-collector\" style=\"overflow-y: scroll;\">
                        <h3>A collecter aujourd'hui</h3>

                        {%for adresse in adresses%}
                            <ul>
                                <li>{{adresse.address_name}}</li>
                                <li>Adresse: {{adresse.address_collection}}</li>
                                <li>Code postal: {{adresse.postal_code}}</li>
                                <li>Ville: {{adresse.city}}</li>
                            </ul>                    


                            {% if not loop.last%} {# si ce n'est pas le dernier tour de boucle #}
                                <hr>
                            {% endif %}
                        {%endfor%}                 
                    </div>
                    <hr> 
                    <div class=\"panel-body panel-body-collector\" style=\"overflow-y: scroll;\">
                        <h3>A récolter demain</h3>

                        {%for adresse in adressesTomorrow%}
                            <ul>
                                <li>{{adresse.address_name}}</li>
                                <li>Adresse: {{adresse.address_collection}}</li>
                                <li>Code postal: {{adresse.postal_code}}</li>
                                <li>Ville: {{adresse.city}}</li>
                            </ul>

                            {% if not loop.last%} {# si ce n'est pas le dernier tour de boucle #}
                                <hr>
                            {% endif %}
                        {%endfor%}
                    </div>
                </div>
            </div>
        </div>


        {#<div class=\"col-md-4 col-xs-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading text-center\"><h3 class='panel-title'>Vos DAC de la semaine dernière</h3></div>
                <div class=\"panel-body btn-group-vertical btn-block\" role=\"group\" aria-label=\"...\">
                    
                    <a type=\"button\" class=\"btn btn-default\">
                        Nom Client
                        <span class=\"glyphicon glyphicon-eye-open pull-right\" aria-hidden=\"true\"></span>
                    </a>

                </div>
            </div>
        </div>#}


        <div id=\"composte\" class=\"bloc bloc-collector gris row\">
            <div class=\"col-md-4 col-md-offset-4 col-xs-12\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading \"><h3 class='panel-title'>Rentrez le composte collecté</h3></div>
                    <div class=\"panel-body panel-body-collector\">
                        <form method=\"post\">
                            <fieldset>
                                <a href=\"{{path('registeroutputcompost')}}\" type=\"submit\" id=\"btn-composte\" name=\"singlebutton\" class=\"btn btn-default\">Insérer</a>
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
                        <strong>{{totalWaste}} kilos</strong><br>
                        <i>Super!</i>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-xs-12\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading \"><h3 class='panel-title'>Biodéchets collectés cette semaine</h3></div>
                    <div class=\"panel-body panel-body-collector\">
                        <strong>{{weeklyWaste}} kilos</strong><br>
                        <i>Bravo!</i>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-xs-12\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading \"><h3 class='panel-title'>Composte collecté cette semaine</h3></div>
                    <div class=\"panel-body panel-body-collector\">
                        <strong>{{weeklyOutput}} kilos</strong><br>
                        <i>:)</i>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-xs-12\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading \"><h3 class='panel-title'>Composte collecté depuis le début de votre mission</h3></div>
                    <div class=\"panel-body panel-body-collector\">
                        <strong>{{totalOutput}} kilos</strong><br>
                        <i>Génial</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "comptecollecteur.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\templates\\comptecollecteur.html.twig");
    }
}
