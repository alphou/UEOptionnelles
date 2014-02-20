<?php

/* UEOChoixBundle:Prof:emargement.html.twig */
class __TwigTemplate_4911f1d21b8b81e03b21780324e75031f59da99755eb15ef781590c4ba6a3bb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\t<!DOCTYPE html>
\t\t\t<html lang=\"fr\">
  <head>
    <title>Inscriptions pédagogiques</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <META NAME=\"ROBOTS\" CONTENT=\"NOINDEX, NOFOLLOW\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\">
    <!-- Bootstrap -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Custom styles for this template -->
    <link href=\"css/styles.css?v=12220\" rel=\"stylesheet\">
    
  </head>  
  <body id=\"index\">
  
  <div class=\"container\">
      <div class=\"header\">
        <ul class=\"nav nav-pills pull-right\">
          <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModalContact\"><span class=\"glyphicon glyphicon-envelope\"></span>  Contact</a></li>
        </ul>
        <h3 class=\"text-muted\"><a href=\"/Etudiant.php\">Inscriptions pédagogiques</a></h3>
      </div>

      <div class=\"jumbotron\">
        <h1>Master STIC - Spécialités ISRI, MIAGE et 2IBS
 - Inscriptions pédagogiques</h1>
        <p class=\"lead\">Cette application permet aux étudiants du Master STIC - ISRI, MIAGE et 2IBS de choisir leurs UE optionnelles</p>
        <p>Pour choisir vos UEs optionnelles vous devez :</p>
        <ol>
  <li>Vous inscrire et attendre le mail d'activation de votre compte - Vérifiez votre adresse mail!</li>
  <li>Vous loguer sur le système avec les login/password que vous avez choisis</li>
  <li>Faire vos choix à chaque semestre</li>
</ol> 
        <!-- Button trigger modal -->
<button class=\"btn btn-success btn-lg\" data-toggle=\"modal\" data-target=\"#myModalInscription\">
  Inscription
</button>
        <!-- Button trigger modal -->
<button class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#myModalConnexion\">
  Connexion
</button>
        
      </div> <!-- End Introduction HP -->
      
      <div class=\"footer\">
        <p>&copy; UPJV 2013</p>
      </div>

    </div> <!-- /container -->


<!-- Modal -->
<div class=\"modal fade\" id=\"myModalInscription\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <form class=\"form-signin\" role=\"form\">
      \t\t<h2 class=\"form-signin-heading\">Formulaire l inscription</h2>
      \t\t<p>Veuillez vous inscrire et attendre l activation de votre compte pour pouvoir faire vos choix d options.</p><p>

Les champs annotés d une astérisque * doivent être remplis.</p>
\t\t  <div class=\"form-group\">
\t\t    <label>Nom : </label>
\t\t    <input type=\"text\" class=\"form-control\" placeholder=\"Nom\" required>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <label>Prénom : </label>
\t\t    <input type=\"text\" class=\"form-control\" placeholder=\"Prénom\" required>
\t\t  </div>
\t\t  
\t\t  <div class=\"form-group\">
\t\t  <label>Choisir un parcours : </label>
<select class=\"form-control\">
<option value=\"7\">Master 1 2IBS</option>
<option value=\"6\">Master 1 ISRI</option>
<option value=\"5\">Master 1 MIAGE</option>
<option value=\"8\">Master 2 2IBS INFO</option>
<option value=\"9\">Master 2 2IBS INSTRUM</option>
<option value=\"4\">Master 2 ISRI</option>
<option value=\"3\">Master 2 MIAGE 2COM</option>
<option value=\"1\">Master 2 MIAGE OSIE</option>
<option value=\"2\">Master 2 MIAGE SIS</option>
</select>
\t\t  </div>
\t\t  
\t\t  <div class=\"form-group\">
\t\t    <label for=\"exampleInputEmail1\">Adresse email : </label>
\t\t    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Entrer votre adresse email\" required>
\t\t  </div>
\t\t  
\t\t  
\t\t  <div class=\"form-group\">
\t\t    <label>Identifiant : </label>
\t\t    <input type=\"text\" class=\"form-control\" placeholder=\"Identifiant\" required>
\t\t  </div>
\t\t  
\t\t  <div class=\"form-group\">
\t\t    <label>Mot de passe : </label>
\t\t    <input type=\"text\" class=\"form-control\" placeholder=\"Mot de passe\" required>
\t\t  </div>
\t\t  
\t\t  
\t\t  <div class=\"form-group\">
\t\t    <label>Confirmer mot de passe : </label>
\t\t    <input type=\"text\" class=\"form-control\" placeholder=\"Mot de passe\" required>
\t\t  </div>
\t\t 
\t\t  <button type=\"submit\" class=\"btn btn-default\" >Envoyer</button>
\t\t</form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Modal -->
<div class=\"modal fade\" id=\"myModalConnexion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <form class=\"smallModel form-signin\">
        <h2 class=\"form-signin-heading\">Connexion</h2>
        <p><input type=\"text\" class=\"form-control\" placeholder=\"Identifiant\" required autofocus></p>
        <p><input type=\"Mot de passe\" class=\"form-control\" placeholder=\"Mot de passe\" required></p>
        <label class=\"checkbox\">
          <input type=\"checkbox\" value=\"remember-me\"> Sauvegarder
        </label>
        <p><button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" onclick=window.location=\"/recapChoix.php\">Se connecter</button>
        <a href=\"#\">Mot de passe oublié</a>
        </p>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --> 

    
<!-- Modal -->
<div class=\"modal fade\" id=\"myModalContact\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <form class=\"form-signin\" role=\"form\">
      <h2 class=\"form-signin-heading\">Nous contacter par email</h2>
      \t\t<p>Vous avez des questions concernant les UE optionnelles ou l utilisation de l application web. contactez-nous.</p><p>

Les champs annotés de un astérisque * doivent être remplis.</p>
\t\t  <div class=\"form-group\">
\t\t    <label>Nom / Prenom</label>
\t\t    <input type=\"text\" class=\"form-control\" placeholder=\"Nom / Prénom\">
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <label for=\"exampleInputEmail1\">Adresse email</label>
\t\t    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Entrer votre adresse email\">
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t  <label>Parcourt</label>
\t\t  <select class=\"form-control\">
  <option>MIAGE</option>
  <option>2IBS</option>
</select>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t  <label>Message</label>
\t\t  
\t\t  <textarea class=\"form-control\" rows=\"3\"></textarea>
\t\t  
\t\t  </div>
\t\t  <div class=\"checkbox\">
\t\t    <label>
\t\t      <input type=\"checkbox\"> Recevoir une copie de message par email
\t\t    </label>
\t\t  </div>
\t\t  <button type=\"submit\" class=\"btn btn-default\" >Envoyer</button>
\t\t</form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --> 
<!-- jQuery (necessary for Bootstrap s JavaScript plugins) -->
    <script src=\"js/jquery-1.10.2.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"js/bootstrap.min.js\"></script>
  </body>
</html>    ";
    }

    public function getTemplateName()
    {
        return "UEOChoixBundle:Prof:emargement.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  118 => 41,  97 => 32,  137 => 52,  81 => 34,  152 => 59,  134 => 50,  127 => 62,  65 => 26,  58 => 29,  70 => 29,  53 => 18,  34 => 10,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 53,  132 => 51,  128 => 49,  107 => 41,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 64,  143 => 56,  135 => 53,  119 => 44,  102 => 46,  71 => 32,  67 => 26,  63 => 21,  59 => 25,  38 => 6,  94 => 28,  89 => 20,  85 => 30,  75 => 33,  68 => 12,  56 => 24,  87 => 36,  21 => 2,  26 => 6,  93 => 28,  88 => 38,  78 => 34,  46 => 14,  27 => 4,  44 => 11,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 34,  91 => 31,  62 => 30,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 29,  72 => 16,  69 => 27,  47 => 12,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 58,  120 => 58,  115 => 43,  111 => 42,  108 => 36,  101 => 33,  98 => 31,  96 => 31,  83 => 35,  74 => 30,  66 => 15,  55 => 15,  52 => 23,  50 => 18,  43 => 8,  41 => 15,  35 => 6,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 82,  154 => 77,  149 => 51,  147 => 58,  144 => 70,  141 => 48,  133 => 55,  130 => 47,  125 => 44,  122 => 43,  116 => 54,  112 => 53,  109 => 50,  106 => 36,  103 => 40,  99 => 39,  95 => 42,  92 => 35,  86 => 28,  82 => 22,  80 => 29,  73 => 28,  64 => 10,  60 => 22,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 10,  39 => 10,  36 => 5,  33 => 6,  30 => 8,);
    }
}
