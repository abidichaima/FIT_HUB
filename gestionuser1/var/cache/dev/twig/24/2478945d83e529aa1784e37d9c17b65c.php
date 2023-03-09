<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* utilisateur/show.html.twig */
class __TwigTemplate_862d8d5a9580b4bf2b957822b359dc40 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/show.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "utilisateur/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"col-lg-12 grid-margin stretch-card\">
  <div class=\"card\">
    <div class=\"card-body\">
      <br>
      <center>
        <h4 class=\"card-title\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"80\" height=\"50\" style=\"margin-bottom:20; margin-left:100px;\" fill=\"currentColor\" class=\"bi bi-person-check-fill\" viewBox=\"0 0 16 16\"> <path fill-rule=\"evenodd\" d=\"M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z\"/> <path d=\"M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z\"/> </svg></h4>
         <div class=\"table-responsive\">
            <table class=\"table table-striped\">
            <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>";
        // line 23
        ((twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 23, $this->source); })()), "roles", [], "any", false, false, false, 23)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 23, $this->source); })()), "roles", [], "any", false, false, false, 23)), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 27, $this->source); })()), "password", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 35, $this->source); })()), "prenom", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 39, $this->source); })()), "adresse", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 43, $this->source); })()), "telephone", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date_de_naissance</th>
                <td>";
        // line 47
        ((twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 47, $this->source); })()), "dateDeNaissance", [], "any", false, false, false, 47)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 47, $this->source); })()), "dateDeNaissance", [], "any", false, false, false, 47), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Genre</th>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 51, $this->source); })()), "genre", [], "any", false, false, false, 51), "html", null, true);
        echo "</td>
            </tr>
            
           
         </tbody>
      
            <div align=\"center\">
                <tr>
                <th></th>
                
                 <td>
                    <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62)]), "html", null, true);
        echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"50\" height=\"30\" style=\"margin-left:120;\" color='black' fill=\"currentColor\" class=\"bi bi-pencil\" viewBox=\"0 0 16 16\"> <path d=\"M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z\"/> </svg>
                </td>
                </tr>
                <tr>
                <th></th>
                <td>
                    ";
        // line 68
        echo twig_include($this->env, $context, "utilisateur/_delete_form.html.twig");
        echo "
                </td>
                </tr>

        </table>            
                </div> 
            </div>
        </div>
    </div>
</div>
    
   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 68,  158 => 62,  144 => 51,  137 => 47,  130 => 43,  123 => 39,  116 => 35,  109 => 31,  102 => 27,  95 => 23,  88 => 19,  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block body %}
<div class=\"col-lg-12 grid-margin stretch-card\">
  <div class=\"card\">
    <div class=\"card-body\">
      <br>
      <center>
        <h4 class=\"card-title\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"80\" height=\"50\" style=\"margin-bottom:20; margin-left:100px;\" fill=\"currentColor\" class=\"bi bi-person-check-fill\" viewBox=\"0 0 16 16\"> <path fill-rule=\"evenodd\" d=\"M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z\"/> <path d=\"M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z\"/> </svg></h4>
         <div class=\"table-responsive\">
            <table class=\"table table-striped\">
            <tbody>
            <tr>
                <th>Id</th>
                <td>{{ utilisateur.id }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ utilisateur.email }}</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>{{ utilisateur.roles ? utilisateur.roles|json_encode : '' }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ utilisateur.password }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ utilisateur.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ utilisateur.prenom }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ utilisateur.adresse }}</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>{{ utilisateur.telephone }}</td>
            </tr>
            <tr>
                <th>Date_de_naissance</th>
                <td>{{ utilisateur.dateDeNaissance ? utilisateur.dateDeNaissance|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Genre</th>
                <td>{{ utilisateur.genre }}</td>
            </tr>
            
           
         </tbody>
      
            <div align=\"center\">
                <tr>
                <th></th>
                
                 <td>
                    <a href=\"{{ path('app_utilisateur_edit', {'id': utilisateur.id}) }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"50\" height=\"30\" style=\"margin-left:120;\" color='black' fill=\"currentColor\" class=\"bi bi-pencil\" viewBox=\"0 0 16 16\"> <path d=\"M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z\"/> </svg>
                </td>
                </tr>
                <tr>
                <th></th>
                <td>
                    {{ include('utilisateur/_delete_form.html.twig') }}
                </td>
                </tr>

        </table>            
                </div> 
            </div>
        </div>
    </div>
</div>
    
   
{% endblock %}
", "utilisateur/show.html.twig", "C:\\Users\\user\\Desktop\\gestion user\\templates\\utilisateur\\show.html.twig");
    }
}
