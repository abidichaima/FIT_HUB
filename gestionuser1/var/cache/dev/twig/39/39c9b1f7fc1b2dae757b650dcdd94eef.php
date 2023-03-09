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

/* utilisateur/index.html.twig */
class __TwigTemplate_c2b741e723ea5cad415b584379234d16 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "utilisateur/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
 
<div class=\"col-lg-12 grid-margin stretch-card\">
    <div class=\"card\">
        <div class=\"card-body\">
        <center>
            <h4 class=\"card-title\"></h4>
            </center>
            <div align=\"center\">
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_new");
        echo "\"><svg width=\"50\" height=\"50\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" style=\"margin-left:-1000px; margin-bottom:30px ;margin-top:-20px;width:50px; color:black\"> <path d=\"M17 10H20M23 10H20M20 10V7M20 10V13\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> <path d=\"M1 20V19C1 15.134 4.13401 12 8 12V12C11.866 12 15 15.134 15 19V20\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> <path d=\"M8 12C10.2091 12 12 10.2091 12 8C12 5.79086 10.2091 4 8 4C5.79086 4 4 5.79086 4 8C4 10.2091 5.79086 12 8 12Z\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> </svg>
            </a>
                </div>
            <div class=\"table-responsive\">
                <table class=\"table table-striped\">
                 <thead>
                  <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Password</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse</th>
                    <th>Telephone</th>
                    <th>Date_de_naissance</th>
                    <th>Genre</th>
                    
                    
                 </tr>
             </thead>
           <tbody>
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) || array_key_exists("utilisateurs", $context) ? $context["utilisateurs"] : (function () { throw new RuntimeError('Variable "utilisateurs" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 37
            echo "            <tr>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "email", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            ((twig_get_attribute($this->env, $this->source, $context["utilisateur"], "roles", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["utilisateur"], "roles", [], "any", false, false, false, 40)), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "password", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "nom", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "prenom", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "adresse", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "telephone", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            ((twig_get_attribute($this->env, $this->source, $context["utilisateur"], "dateDeNaissance", [], "any", false, false, false, 46)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "dateDeNaissance", [], "any", false, false, false, 46), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "genre", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
               
                <td>
                 
                <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_show", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\"><svg width=\"25\" height=\"30\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"> <path d=\"M21.2572 10.9622C21.7314 11.5813 21.7314 12.4187 21.2572 13.0378C19.764 14.9868 16.1818 19 12 19C7.81823 19 4.23598 14.9868 2.74284 13.0378C2.26857 12.4187 2.26856 11.5813 2.74283 10.9622C4.23598 9.01321 7.81823 5 12 5C16.1818 5 19.764 9.01321 21.2572 10.9622Z\" stroke=\"black\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> <circle cx=\"12\" cy=\"12\" r=\"3\" stroke=\"black\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> </svg>
                <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" style=\"margin-left:20;\" color='black' fill=\"currentColor\" class=\"bi bi-pencil\" viewBox=\"0 0 16 16\"> <path d=\"M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z\"/> </svg>
                <path d=\"m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z\"/> </svg>
               <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_block_utilisateur", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" style=\"color:black\" width=\"25\" height=\"25\" fill=\"currentColor\" class=\"bi bi-lock\" viewBox=\"0 0 16 16\"> <path d=\"M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z\"/> </svg></a>
               <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_unblock_utilisateur", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\"style=\"color:black\" width=\"25\" height=\"25\" fill=\"currentColor\" class=\"bi bi-unlock\" viewBox=\"0 0 16 16\"> <path d=\"M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2zM3 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1H3z\"/> </svg></a>

               
                </td>
                </td>
            </tr>
               <td colspan=\"5\"></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </tbody>
    </table>
     <br>
               
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
        return "utilisateur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 64,  167 => 55,  163 => 54,  158 => 52,  154 => 51,  147 => 47,  143 => 46,  139 => 45,  135 => 44,  131 => 43,  127 => 42,  123 => 41,  119 => 40,  115 => 39,  111 => 38,  108 => 37,  104 => 36,  79 => 14,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}


{% block body %}

 
<div class=\"col-lg-12 grid-margin stretch-card\">
    <div class=\"card\">
        <div class=\"card-body\">
        <center>
            <h4 class=\"card-title\"></h4>
            </center>
            <div align=\"center\">
            <a href=\"{{ path('app_utilisateur_new') }}\"><svg width=\"50\" height=\"50\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" style=\"margin-left:-1000px; margin-bottom:30px ;margin-top:-20px;width:50px; color:black\"> <path d=\"M17 10H20M23 10H20M20 10V7M20 10V13\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> <path d=\"M1 20V19C1 15.134 4.13401 12 8 12V12C11.866 12 15 15.134 15 19V20\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> <path d=\"M8 12C10.2091 12 12 10.2091 12 8C12 5.79086 10.2091 4 8 4C5.79086 4 4 5.79086 4 8C4 10.2091 5.79086 12 8 12Z\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> </svg>
            </a>
                </div>
            <div class=\"table-responsive\">
                <table class=\"table table-striped\">
                 <thead>
                  <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Password</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse</th>
                    <th>Telephone</th>
                    <th>Date_de_naissance</th>
                    <th>Genre</th>
                    
                    
                 </tr>
             </thead>
           <tbody>
        {% for utilisateur in utilisateurs %}
            <tr>
                <td>{{ utilisateur.id }}</td>
                <td>{{ utilisateur.email }}</td>
                <td>{{ utilisateur.roles ? utilisateur.roles|json_encode : '' }}</td>
                <td>{{ utilisateur.password }}</td>
                <td>{{ utilisateur.nom }}</td>
                <td>{{ utilisateur.prenom }}</td>
                <td>{{ utilisateur.adresse }}</td>
                <td>{{ utilisateur.telephone }}</td>
                <td>{{ utilisateur.dateDeNaissance ? utilisateur.dateDeNaissance|date('Y-m-d') : '' }}</td>
                <td>{{ utilisateur.genre }}</td>
               
                <td>
                 
                <a href=\"{{ path('app_utilisateur_show', {'id': utilisateur.id}) }}\"><svg width=\"25\" height=\"30\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"> <path d=\"M21.2572 10.9622C21.7314 11.5813 21.7314 12.4187 21.2572 13.0378C19.764 14.9868 16.1818 19 12 19C7.81823 19 4.23598 14.9868 2.74284 13.0378C2.26857 12.4187 2.26856 11.5813 2.74283 10.9622C4.23598 9.01321 7.81823 5 12 5C16.1818 5 19.764 9.01321 21.2572 10.9622Z\" stroke=\"black\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> <circle cx=\"12\" cy=\"12\" r=\"3\" stroke=\"black\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> </svg>
                <a href=\"{{ path('app_utilisateur_edit', {'id': utilisateur.id}) }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" style=\"margin-left:20;\" color='black' fill=\"currentColor\" class=\"bi bi-pencil\" viewBox=\"0 0 16 16\"> <path d=\"M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z\"/> </svg>
                <path d=\"m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z\"/> </svg>
               <a href=\"{{ path('app_block_utilisateur', { 'id': utilisateur.id }) }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" style=\"color:black\" width=\"25\" height=\"25\" fill=\"currentColor\" class=\"bi bi-lock\" viewBox=\"0 0 16 16\"> <path d=\"M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z\"/> </svg></a>
               <a href=\"{{ path('app_unblock_utilisateur', { 'id': utilisateur.id }) }}\"><svg xmlns=\"http://www.w3.org/2000/svg\"style=\"color:black\" width=\"25\" height=\"25\" fill=\"currentColor\" class=\"bi bi-unlock\" viewBox=\"0 0 16 16\"> <path d=\"M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2zM3 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1H3z\"/> </svg></a>

               
                </td>
                </td>
            </tr>
               <td colspan=\"5\"></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
     <br>
               
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "utilisateur/index.html.twig", "C:\\Users\\user\\Desktop\\gestion user\\templates\\utilisateur\\index.html.twig");
    }
}
