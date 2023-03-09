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

/* profile/show.html.twig */
class __TwigTemplate_8e54e7cf81c32ee4f06b4dd5e5bb4f22 extends Template
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
        // line 4
        return "acceuil1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/show.html.twig"));

        $this->parent = $this->loadTemplate("acceuil1.html.twig", "profile/show.html.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
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
                <th>Nom</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 29, $this->source); })()), "adresse", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 33, $this->source); })()), "telephone", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date_de_naissance</th>
                <td>";
        // line 37
        ((twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 37, $this->source); })()), "dateDeNaissance", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 37, $this->source); })()), "dateDeNaissance", [], "any", false, false, false, 37), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
           
            
           
         </tbody>
      
            <div align=\"center\">
                <tr>
                <th></th>
                
                 <td>
                    <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49)]), "html", null, true);
        echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"50\" height=\"30\" style=\"margin-left:120;\" color='black' fill=\"currentColor\" class=\"bi bi-pencil\" viewBox=\"0 0 16 16\"> <path d=\"M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z\"/> </svg>
                </td>
                </tr>
                <tr>
                <th></th>
               
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
        return "profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 49,  112 => 37,  105 => 33,  98 => 29,  91 => 25,  84 => 21,  68 => 7,  58 => 6,  35 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("


{% extends 'acceuil1.html.twig' %}

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
           
            
           
         </tbody>
      
            <div align=\"center\">
                <tr>
                <th></th>
                
                 <td>
                    <a href=\"{{ path('app_profile_edit', {'id': utilisateur.id}) }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"50\" height=\"30\" style=\"margin-left:120;\" color='black' fill=\"currentColor\" class=\"bi bi-pencil\" viewBox=\"0 0 16 16\"> <path d=\"M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z\"/> </svg>
                </td>
                </tr>
                <tr>
                <th></th>
               
                </tr>

        </table>            
                </div> 
            </div>
        </div>
    </div>
</div>
    
   
{% endblock %}

", "profile/show.html.twig", "C:\\Users\\user\\Desktop\\gestion user\\templates\\profile\\show.html.twig");
    }
}
