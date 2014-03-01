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
        return array (  176 => 87,  169 => 83,  161 => 78,  151 => 71,  144 => 67,  137 => 63,  130 => 59,  123 => 55,  116 => 51,  109 => 47,  102 => 43,  95 => 39,  88 => 35,  81 => 31,  74 => 27,  67 => 23,  60 => 19,  53 => 15,  46 => 11,  38 => 5,  35 => 4,  29 => 2,);
    }
}
