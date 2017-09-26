<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8db40cc2c624584f88885a370e7004fc22e61fabe7892802fa1f50ecfdc75e4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_6dd897c59a8b4deee9449f6d1360864676bd3cf1bc38ef15780d061805a21ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dd897c59a8b4deee9449f6d1360864676bd3cf1bc38ef15780d061805a21ca9->enter($__internal_6dd897c59a8b4deee9449f6d1360864676bd3cf1bc38ef15780d061805a21ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a397db0e652485976c4ba5716810b3df0650b5f50ca9f669eab9e3db2e654e4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a397db0e652485976c4ba5716810b3df0650b5f50ca9f669eab9e3db2e654e4b->enter($__internal_a397db0e652485976c4ba5716810b3df0650b5f50ca9f669eab9e3db2e654e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dd897c59a8b4deee9449f6d1360864676bd3cf1bc38ef15780d061805a21ca9->leave($__internal_6dd897c59a8b4deee9449f6d1360864676bd3cf1bc38ef15780d061805a21ca9_prof);

        
        $__internal_a397db0e652485976c4ba5716810b3df0650b5f50ca9f669eab9e3db2e654e4b->leave($__internal_a397db0e652485976c4ba5716810b3df0650b5f50ca9f669eab9e3db2e654e4b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f36f04dd08cee2d458f33ad4f680a6e2539a1f51a7019135e4bb032af039e322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f36f04dd08cee2d458f33ad4f680a6e2539a1f51a7019135e4bb032af039e322->enter($__internal_f36f04dd08cee2d458f33ad4f680a6e2539a1f51a7019135e4bb032af039e322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f17d0f7df8724c836953f81d88b218004675ddc3eed3c15afb28df76f69457c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f17d0f7df8724c836953f81d88b218004675ddc3eed3c15afb28df76f69457c2->enter($__internal_f17d0f7df8724c836953f81d88b218004675ddc3eed3c15afb28df76f69457c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f17d0f7df8724c836953f81d88b218004675ddc3eed3c15afb28df76f69457c2->leave($__internal_f17d0f7df8724c836953f81d88b218004675ddc3eed3c15afb28df76f69457c2_prof);

        
        $__internal_f36f04dd08cee2d458f33ad4f680a6e2539a1f51a7019135e4bb032af039e322->leave($__internal_f36f04dd08cee2d458f33ad4f680a6e2539a1f51a7019135e4bb032af039e322_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fb6437150500be5a07cc7a1289c7e7c650324838acb8a3b94897d256fe0918c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb6437150500be5a07cc7a1289c7e7c650324838acb8a3b94897d256fe0918c3->enter($__internal_fb6437150500be5a07cc7a1289c7e7c650324838acb8a3b94897d256fe0918c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d2b1ca67b7254e93271ad3053ee844ef6522651327b5e48a4d4b7bcdb502a6d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b1ca67b7254e93271ad3053ee844ef6522651327b5e48a4d4b7bcdb502a6d1->enter($__internal_d2b1ca67b7254e93271ad3053ee844ef6522651327b5e48a4d4b7bcdb502a6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d2b1ca67b7254e93271ad3053ee844ef6522651327b5e48a4d4b7bcdb502a6d1->leave($__internal_d2b1ca67b7254e93271ad3053ee844ef6522651327b5e48a4d4b7bcdb502a6d1_prof);

        
        $__internal_fb6437150500be5a07cc7a1289c7e7c650324838acb8a3b94897d256fe0918c3->leave($__internal_fb6437150500be5a07cc7a1289c7e7c650324838acb8a3b94897d256fe0918c3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eb324cd35a868355fa2aca31fc44b5b6939d4b7abc88a47bdf44b8d96474062f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb324cd35a868355fa2aca31fc44b5b6939d4b7abc88a47bdf44b8d96474062f->enter($__internal_eb324cd35a868355fa2aca31fc44b5b6939d4b7abc88a47bdf44b8d96474062f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_daaf3e5df586c9d3bd840e05e81d589528be18ae4eb91cea0f578c1a3a535124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daaf3e5df586c9d3bd840e05e81d589528be18ae4eb91cea0f578c1a3a535124->enter($__internal_daaf3e5df586c9d3bd840e05e81d589528be18ae4eb91cea0f578c1a3a535124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_daaf3e5df586c9d3bd840e05e81d589528be18ae4eb91cea0f578c1a3a535124->leave($__internal_daaf3e5df586c9d3bd840e05e81d589528be18ae4eb91cea0f578c1a3a535124_prof);

        
        $__internal_eb324cd35a868355fa2aca31fc44b5b6939d4b7abc88a47bdf44b8d96474062f->leave($__internal_eb324cd35a868355fa2aca31fc44b5b6939d4b7abc88a47bdf44b8d96474062f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\final_project_wf3\\dev\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
