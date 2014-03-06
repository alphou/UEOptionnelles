<?php

/* UEOChoixBundle::layout.html.twig */
class __TwigTemplate_0664007040c5cbb743c87265b616c18dc008612546c46899981c820578c65062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ueoprojet/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "    
<div class=\"container\">
    <div class=\"header\">
    <ul class=\"nav nav-pills pull-right\">
    <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModalContact\"><span class=\"glyphicon glyphicon-envelope\"></span>Contact</a></li>

    </ul>
        <h3 class=\"text-muted \"><a href=\"#\">Inscription pédagogique</a></h3>
    </div>
        <div>
         <ul class=\"nav nav-tabs nav-justified\">
            <br>
            <li><a href=\"#\">Choix</a></li>
            <li><a href=\"#\">Feuille d'emargement</a></li>
            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("etudiant");
        echo "\">Etudiants</a></li>
            <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("parcours");
        echo "\">Parcours</a></li>
            <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("maquette");
        echo "\">Maquette</a></li>
            <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("module");
        echo "\">UEs</a></li>
            <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("specialite");
        echo "\">Spéciliatés</a></li>
           
         </ul>
        </div>
    </div>
        
";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "  
        
";
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        // line 40
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ueoprojet/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "UEOChoixBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 40,  90 => 36,  87 => 35,  76 => 27,  72 => 26,  64 => 24,  60 => 23,  44 => 9,  41 => 8,  34 => 5,  31 => 4,  112 => 40,  100 => 34,  96 => 39,  92 => 32,  86 => 29,  82 => 28,  78 => 27,  74 => 26,  68 => 25,  65 => 24,  61 => 23,  42 => 7,  38 => 5,  35 => 4,  29 => 2,);
    }
}
