<?php

/* UEOChoixBundle:Module:new.html.twig */
class __TwigTemplate_5162dcf582b834e96cd86ae0247332301af5495091185707f003481eab740cc6 extends Twig_Template
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
        echo "Gestion des modules";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Module creation</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"nav\">
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("module");
        echo "\">
            Liste des modules
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "UEOChoixBundle:Module:new.html.twig";
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
