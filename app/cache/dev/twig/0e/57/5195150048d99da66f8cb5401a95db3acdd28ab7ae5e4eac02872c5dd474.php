<?php

/* UEOChoixBundle:Specialite:show.html.twig */
class __TwigTemplate_0e575195150048d99da66f8cb5401a95db3acdd28ab7ae5e4eac02872c5dd474 extends Twig_Template
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
        echo "Gestion des specialite";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Specialite</h1>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <!--<th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>-->
            </tr>
            <tr>
                <th>Intitule</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "intitule"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"nav\">
    <li>
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("specialite");
        echo "\">
            Liste des spécialité
        </a>
    </li>
    <li>
        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("specialite_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Modifier
        </a>
    </li>
    <li>";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "UEOChoixBundle:Specialite:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 32,  71 => 28,  63 => 23,  53 => 16,  46 => 12,  38 => 6,  35 => 5,  29 => 2,);
    }
}
