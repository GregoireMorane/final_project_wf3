<?php

/* errors/404.html.twig */
class __TwigTemplate_2d79de4bca7a57354167d68dff26a0d4b21ef1dc4d92ed7827591a66b0e7a7dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "errors/404.html.twig", 1);
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
        echo "    <div class=\"col-xs-10 col-xs-offset-1\">
        <p style='text-align: center; font-size: 1.5em;'>
            Oups ! La page que vous avez demandé est introuvable  :(
        </p>
        <br>
        <p style='text-align: center; font-size: 1.4em;'>
            <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" style='color: green; font-weight: bold; text-decoration: none;'>Retour à la page d'accueil</a>
        </p>
        <br>
    </div>
            <img id=\"img404\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/background-image.jpg"), "html", null, true);
        echo "\" alt=\"\"> <br>
    
";
    }

    public function getTemplateName()
    {
        return "errors/404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "errors/404.html.twig", "C:\\xampp\\htdocs\\gregoire_morane\\final_project_wf3\\dev\\templates\\errors\\404.html.twig");
    }
}
