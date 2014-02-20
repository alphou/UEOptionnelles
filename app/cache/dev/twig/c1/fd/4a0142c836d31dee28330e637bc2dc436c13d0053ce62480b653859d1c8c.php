<?php

/* UEOChoixBundle:Parcours:new.html.twig */
class __TwigTemplate_c1fd4a0142c836d31dee28330e637bc2dc436c13d0053ce62480b653859d1c8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UEOChoixBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UEOChoixBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Gestion des etudiants";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Parcours creation</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"nav\">
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("parcours");
        echo "\">
            Liste des parcours
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "UEOChoixBundle:Parcours:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  42 => 7,  38 => 5,  35 => 4,  29 => 2,);
    }
}
