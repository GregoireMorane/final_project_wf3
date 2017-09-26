<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f66cb2e31df30b95dd2addf5dd653a76ae8fef80a5a1bc20395e4e7b443f4eb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fed46219c04d34528c17495089b215765b29c13fcf4dcd7fd3562dd8c1132688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed46219c04d34528c17495089b215765b29c13fcf4dcd7fd3562dd8c1132688->enter($__internal_fed46219c04d34528c17495089b215765b29c13fcf4dcd7fd3562dd8c1132688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_bea112985ec03cb39a79369dbcfd008d59f51958de9b3294b6b36dcf74e1ef04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea112985ec03cb39a79369dbcfd008d59f51958de9b3294b6b36dcf74e1ef04->enter($__internal_bea112985ec03cb39a79369dbcfd008d59f51958de9b3294b6b36dcf74e1ef04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fed46219c04d34528c17495089b215765b29c13fcf4dcd7fd3562dd8c1132688->leave($__internal_fed46219c04d34528c17495089b215765b29c13fcf4dcd7fd3562dd8c1132688_prof);

        
        $__internal_bea112985ec03cb39a79369dbcfd008d59f51958de9b3294b6b36dcf74e1ef04->leave($__internal_bea112985ec03cb39a79369dbcfd008d59f51958de9b3294b6b36dcf74e1ef04_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d4a30773eb5258ee34ac0593f7d4717c300e50c50753f60cf00b3e910cdea0a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4a30773eb5258ee34ac0593f7d4717c300e50c50753f60cf00b3e910cdea0a7->enter($__internal_d4a30773eb5258ee34ac0593f7d4717c300e50c50753f60cf00b3e910cdea0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5bc7634f10aeb9b2d6c43f6ee6f315e879ba17ab31995c41ba053b3ad2858ee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc7634f10aeb9b2d6c43f6ee6f315e879ba17ab31995c41ba053b3ad2858ee3->enter($__internal_5bc7634f10aeb9b2d6c43f6ee6f315e879ba17ab31995c41ba053b3ad2858ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5bc7634f10aeb9b2d6c43f6ee6f315e879ba17ab31995c41ba053b3ad2858ee3->leave($__internal_5bc7634f10aeb9b2d6c43f6ee6f315e879ba17ab31995c41ba053b3ad2858ee3_prof);

        
        $__internal_d4a30773eb5258ee34ac0593f7d4717c300e50c50753f60cf00b3e910cdea0a7->leave($__internal_d4a30773eb5258ee34ac0593f7d4717c300e50c50753f60cf00b3e910cdea0a7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_566eb73a1b2b81461981364642f3620a9feffffe498d7db3ef3ca2bc1d2015bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566eb73a1b2b81461981364642f3620a9feffffe498d7db3ef3ca2bc1d2015bf->enter($__internal_566eb73a1b2b81461981364642f3620a9feffffe498d7db3ef3ca2bc1d2015bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_652e6be1d42482341c1c917ede7dd2635f43a126440b450bc041b941c6c6a7a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_652e6be1d42482341c1c917ede7dd2635f43a126440b450bc041b941c6c6a7a6->enter($__internal_652e6be1d42482341c1c917ede7dd2635f43a126440b450bc041b941c6c6a7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_652e6be1d42482341c1c917ede7dd2635f43a126440b450bc041b941c6c6a7a6->leave($__internal_652e6be1d42482341c1c917ede7dd2635f43a126440b450bc041b941c6c6a7a6_prof);

        
        $__internal_566eb73a1b2b81461981364642f3620a9feffffe498d7db3ef3ca2bc1d2015bf->leave($__internal_566eb73a1b2b81461981364642f3620a9feffffe498d7db3ef3ca2bc1d2015bf_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f0cf750df1105ba559f6e48597a8431d875318e27ca3870d13a7c8795078489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0cf750df1105ba559f6e48597a8431d875318e27ca3870d13a7c8795078489->enter($__internal_7f0cf750df1105ba559f6e48597a8431d875318e27ca3870d13a7c8795078489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bafa66ed53e1b4dd98aaceeaa1a19851559e22bb76d9ba09872096a9a31d1244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bafa66ed53e1b4dd98aaceeaa1a19851559e22bb76d9ba09872096a9a31d1244->enter($__internal_bafa66ed53e1b4dd98aaceeaa1a19851559e22bb76d9ba09872096a9a31d1244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_bafa66ed53e1b4dd98aaceeaa1a19851559e22bb76d9ba09872096a9a31d1244->leave($__internal_bafa66ed53e1b4dd98aaceeaa1a19851559e22bb76d9ba09872096a9a31d1244_prof);

        
        $__internal_7f0cf750df1105ba559f6e48597a8431d875318e27ca3870d13a7c8795078489->leave($__internal_7f0cf750df1105ba559f6e48597a8431d875318e27ca3870d13a7c8795078489_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\projet_final\\final_project_wf3\\dev\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
