<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_bb9e410c47559b51895b256741f419dc4a68713f001e232c42ee735529744755 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('content_header', $context, $blocks);
        // line 26
        echo "
    <div class=\"block\">
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "    </div>

    ";
        // line 31
        if (array_key_exists("code", $context)) {
            // line 32
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 34
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
        </div>
    ";
        }
    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 20
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  127 => 28,  129 => 43,  84 => 29,  70 => 27,  161 => 78,  137 => 63,  81 => 24,  134 => 46,  126 => 44,  118 => 42,  114 => 41,  110 => 22,  223 => 183,  215 => 178,  206 => 172,  200 => 169,  191 => 166,  185 => 163,  100 => 27,  65 => 24,  90 => 32,  76 => 17,  34 => 5,  23 => 3,  104 => 23,  58 => 18,  53 => 10,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 83,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 160,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 17,  71 => 28,  67 => 18,  63 => 23,  59 => 18,  38 => 6,  94 => 34,  89 => 20,  85 => 25,  75 => 6,  68 => 20,  56 => 11,  87 => 25,  21 => 2,  26 => 2,  93 => 29,  88 => 31,  78 => 26,  46 => 9,  27 => 4,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 168,  183 => 82,  171 => 61,  166 => 71,  163 => 60,  158 => 67,  156 => 66,  151 => 71,  142 => 59,  138 => 47,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 27,  62 => 19,  49 => 12,  24 => 6,  25 => 3,  19 => 1,  79 => 32,  72 => 20,  69 => 30,  47 => 8,  40 => 11,  37 => 7,  22 => 1,  246 => 90,  157 => 56,  145 => 51,  139 => 45,  131 => 52,  123 => 40,  120 => 20,  115 => 43,  111 => 37,  108 => 19,  101 => 32,  98 => 37,  96 => 32,  83 => 12,  74 => 23,  66 => 15,  55 => 12,  52 => 10,  50 => 8,  43 => 7,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 87,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 67,  141 => 49,  133 => 55,  130 => 59,  125 => 44,  122 => 43,  116 => 36,  112 => 50,  109 => 47,  106 => 39,  103 => 28,  99 => 40,  95 => 39,  92 => 32,  86 => 34,  82 => 28,  80 => 29,  73 => 16,  64 => 13,  60 => 14,  57 => 12,  54 => 16,  51 => 11,  48 => 9,  45 => 17,  42 => 8,  39 => 7,  36 => 4,  33 => 3,  30 => 1,);
    }
}
