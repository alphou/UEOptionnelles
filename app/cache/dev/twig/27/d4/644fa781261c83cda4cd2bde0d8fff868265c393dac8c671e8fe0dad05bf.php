<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_27d4644fa781261c83cda4cd2bde0d8fff868265c393dac8c671e8fe0dad05bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username")), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((!twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session")))) {
            // line 8
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token"), "providerKey")) . ".target_path")), "method");
            // line 9
            echo "        ";
            if ((!twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 10
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  127 => 59,  129 => 46,  118 => 41,  114 => 40,  90 => 36,  76 => 33,  161 => 78,  137 => 63,  124 => 48,  100 => 27,  81 => 24,  77 => 26,  104 => 43,  58 => 18,  84 => 30,  53 => 16,  34 => 5,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 83,  140 => 52,  132 => 50,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 49,  119 => 42,  102 => 40,  71 => 28,  67 => 20,  63 => 23,  59 => 16,  38 => 8,  94 => 41,  89 => 29,  85 => 28,  75 => 36,  68 => 24,  56 => 15,  87 => 25,  21 => 2,  26 => 6,  93 => 29,  88 => 35,  78 => 32,  46 => 14,  27 => 4,  44 => 9,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 71,  142 => 59,  138 => 54,  136 => 51,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 19,  49 => 12,  24 => 4,  25 => 1,  19 => 2,  79 => 37,  72 => 21,  69 => 31,  47 => 4,  40 => 11,  37 => 7,  22 => 3,  246 => 90,  157 => 60,  145 => 46,  139 => 45,  131 => 52,  123 => 55,  120 => 55,  115 => 43,  111 => 37,  108 => 39,  101 => 32,  98 => 18,  96 => 37,  83 => 29,  74 => 27,  66 => 15,  55 => 17,  52 => 21,  50 => 10,  43 => 8,  41 => 9,  35 => 5,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 87,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 55,  144 => 67,  141 => 48,  133 => 55,  130 => 59,  125 => 44,  122 => 42,  116 => 51,  112 => 50,  109 => 47,  106 => 36,  103 => 28,  99 => 31,  95 => 35,  92 => 40,  86 => 35,  82 => 34,  80 => 11,  73 => 32,  64 => 19,  60 => 19,  57 => 11,  54 => 16,  51 => 16,  48 => 11,  45 => 17,  42 => 8,  39 => 12,  36 => 7,  33 => 6,  30 => 8,);
    }
}
