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
        return array (  90 => 36,  76 => 27,  34 => 5,  23 => 1,  104 => 23,  58 => 21,  53 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 13,  67 => 15,  63 => 10,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 6,  68 => 25,  56 => 16,  87 => 35,  21 => 2,  26 => 6,  93 => 28,  88 => 15,  78 => 21,  46 => 7,  27 => 4,  44 => 9,  31 => 4,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 16,  62 => 23,  49 => 12,  24 => 4,  25 => 1,  19 => 1,  79 => 18,  72 => 26,  69 => 5,  47 => 4,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 18,  96 => 39,  83 => 12,  74 => 14,  66 => 15,  55 => 17,  52 => 21,  50 => 5,  43 => 8,  41 => 8,  35 => 5,  32 => 4,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 40,  95 => 17,  92 => 21,  86 => 28,  82 => 62,  80 => 11,  73 => 19,  64 => 24,  60 => 23,  57 => 11,  54 => 10,  51 => 14,  48 => 11,  45 => 17,  42 => 8,  39 => 12,  36 => 5,  33 => 4,  30 => 8,);
    }
}
