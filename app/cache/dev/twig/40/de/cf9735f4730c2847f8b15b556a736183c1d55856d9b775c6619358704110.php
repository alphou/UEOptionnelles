<?php

/* UEOChoixBundle::base.html.twig */
class __TwigTemplate_40decf9735f4730c2847f8b15b556a736183c1d55856d9b775c6619358704110 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo "Gestion UEO";
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"navbar\">
        <div class=\"navbar-inner\">
            <a class=\"brand\" href=\"#\">QCM</a>
            ";
        // line 10
        if ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE")) {
            // line 11
            echo "            <ul class=\"nav\">
            <li><a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("etudiant");
            echo "\">Etudiant</a></li>
            ";
            // line 14
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("questionnaire");
            echo "\">Questionnaire</a></li>
            ";
            // line 16
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("session");
            echo "\">Sessions</a></li>
            <li><a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("copie");
            echo "\">Copies</a></li>
            <li><a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("qcm_correction");
            echo "\">Correction</a></li>
            </ul>
            ";
        }
        // line 21
        echo "        </div>
    </div>
        
";
    }

    public function getTemplateName()
    {
        return "UEOChoixBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  67 => 18,  63 => 17,  58 => 16,  53 => 14,  49 => 12,  46 => 11,  44 => 10,  39 => 7,  36 => 6,  29 => 2,);
    }
}
