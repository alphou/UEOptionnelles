<?php

/* UEOChoixBundle::layout.html.twig */
class __TwigTemplate_3002b8a618942176d5dc1561c4a336160efa9fa15b8cc6f0ea2f7f2c9ee820b7 extends Twig_Template
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
        echo "    <div class=\"navbar\">
        <div class=\"navbar-inner\">
            <a class=\"brand\" href=\"#\">Inscription pédagogique</a>
            <ul class=\"nav\">
            <br>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("etudiant");
        echo "\">Etudiant</a></li>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("parcours");
        echo "\">Parcours</a></li>
            <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("module");
        echo "\">Module</a></li>
            <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("specialite");
        echo "\">Speciliate</a></li>
            
           
            </ul>
        </div>
    </div>
        
";
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        // line 27
        echo "       
        
";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
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
        return array (  87 => 31,  84 => 30,  78 => 27,  75 => 26,  63 => 17,  59 => 16,  55 => 15,  51 => 14,  44 => 9,  41 => 8,  34 => 5,  31 => 4,  147 => 55,  135 => 49,  129 => 46,  122 => 42,  118 => 41,  114 => 40,  108 => 39,  102 => 38,  96 => 37,  90 => 36,  86 => 35,  82 => 34,  76 => 33,  73 => 32,  69 => 31,  43 => 8,  38 => 5,  35 => 4,  29 => 2,);
    }
}
