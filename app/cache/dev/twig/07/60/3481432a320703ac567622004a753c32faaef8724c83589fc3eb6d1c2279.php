<?php

/* ::base.html.twig */
class __TwigTemplate_07603481432a320703ac567622004a753c32faaef8724c83589fc3eb6d1c2279 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'notif' => array($this, 'block_notif'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicontest.ico"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ueoprojet/js/jquery.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('menu', $context, $blocks);
        // line 14
        echo "         <div class=\"container\">
        ";
        // line 15
        $this->displayBlock('notif', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "                 
        </div>
        ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Inscription pédagogique";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 11
    public function block_menu($context, array $blocks = array())
    {
        // line 12
        echo "
        ";
    }

    // line 15
    public function block_notif($context, array $blocks = array())
    {
        // line 16
        echo "        ";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "        

        ";
    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 23,  98 => 18,  95 => 17,  91 => 16,  88 => 15,  83 => 12,  80 => 11,  75 => 6,  69 => 5,  62 => 23,  58 => 21,  55 => 17,  53 => 15,  50 => 14,  48 => 11,  37 => 7,  25 => 1,  99 => 40,  90 => 36,  87 => 35,  76 => 27,  72 => 26,  64 => 24,  60 => 23,  44 => 9,  41 => 8,  34 => 5,  31 => 5,  112 => 40,  100 => 34,  96 => 39,  92 => 32,  86 => 29,  82 => 28,  78 => 27,  74 => 26,  68 => 25,  65 => 24,  61 => 23,  42 => 8,  38 => 5,  35 => 6,  29 => 2,);
    }
}
