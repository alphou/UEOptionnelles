<?php

/* UEOChoixBundle:Module:show.html.twig */
class __TwigTemplate_a6fee2d5bae14d29a38db9454ebc97bf5c0b7cc486ba58eee6c240641fad8fff extends Twig_Template
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
        echo "<h1>Module</h1>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Intitule</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "intitule"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Semestre</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "semestre"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenu"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbinscrits</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbInscrits"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbplaces</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbPlaces"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Professeur1</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "professeur1"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Professeur2</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "professeur2"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Professeur3</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "professeur3"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Professeur4</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "professeur4"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Professeur5</th>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "professeur5"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Professeur6</th>
                <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "professeur6"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Professeur7</th>
                <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "professeur7"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Professeur8</th>
                <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "professeur8"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Professeur9</th>
                <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "professeur9"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Professeur10</th>
                <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "professeur10"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"nav\">
    <li>
        <a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("module");
        echo "\">
            Liste des modules
        </a>
    </li>
    <li>
        <a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("module_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 87
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "UEOChoixBundle:Module:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 78,  137 => 63,  124 => 48,  100 => 42,  81 => 31,  77 => 26,  104 => 43,  58 => 21,  84 => 30,  53 => 15,  34 => 5,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 83,  140 => 52,  132 => 50,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 43,  71 => 25,  67 => 23,  63 => 17,  59 => 16,  38 => 5,  94 => 41,  89 => 29,  85 => 28,  75 => 36,  68 => 24,  56 => 15,  87 => 37,  21 => 2,  26 => 6,  93 => 28,  88 => 35,  78 => 27,  46 => 11,  27 => 4,  44 => 9,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 71,  142 => 59,  138 => 54,  136 => 51,  121 => 46,  117 => 44,  105 => 40,  91 => 16,  62 => 23,  49 => 11,  24 => 4,  25 => 1,  19 => 1,  79 => 37,  72 => 16,  69 => 5,  47 => 4,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 60,  145 => 46,  139 => 45,  131 => 52,  123 => 55,  120 => 47,  115 => 43,  111 => 37,  108 => 44,  101 => 32,  98 => 18,  96 => 41,  83 => 12,  74 => 27,  66 => 15,  55 => 17,  52 => 21,  50 => 14,  43 => 7,  41 => 8,  35 => 4,  32 => 4,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 87,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 67,  141 => 48,  133 => 55,  130 => 59,  125 => 44,  122 => 43,  116 => 51,  112 => 45,  109 => 47,  106 => 36,  103 => 32,  99 => 31,  95 => 39,  92 => 40,  86 => 28,  82 => 38,  80 => 11,  73 => 19,  64 => 23,  60 => 19,  57 => 11,  54 => 10,  51 => 14,  48 => 11,  45 => 17,  42 => 7,  39 => 12,  36 => 5,  33 => 4,  30 => 8,);
    }
}
