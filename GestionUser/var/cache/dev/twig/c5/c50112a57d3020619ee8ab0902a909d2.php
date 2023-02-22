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

/* roleuser/show.html.twig */
class __TwigTemplate_8d7ebe492c03cd40ffb2a912dfb2f80e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "roleuser/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "roleuser/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "roleuser/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "RoleUser";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>RoleUser</h1>
<div class=\"container\">
    <table class=\"table table-dark table-striped\">
  
<div class=\"mt-5 mb-6 \">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["roleuser"]) || array_key_exists("roleuser", $context) ? $context["roleuser"] : (function () { throw new RuntimeError('Variable "roleuser" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Role</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["roleuser"]) || array_key_exists("roleuser", $context) ? $context["roleuser"] : (function () { throw new RuntimeError('Variable "roleuser" does not exist.', 18, $this->source); })()), "role", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            
           
        </tbody>
    </table>
    <div class=\"my-2\">
                                     <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roleuser_index");
        echo "\"  class=\"btn btn-success btn-icon-split\">
                                      
                                        <span class=\"text\">back to list</span>
                                    </a>
                                    </div>
    <div class=\"my-2\">
                                    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roleuser_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["roleuser"]) || array_key_exists("roleuser", $context) ? $context["roleuser"] : (function () { throw new RuntimeError('Variable "roleuser" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
        echo "\"  class=\"btn btn-success btn-icon-split\">
                                      
                                        <span class=\"text\">edit</span>
                                    </a>
</div>
    ";
        // line 36
        echo twig_include($this->env, $context, "roleuser/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "roleuser/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 36,  124 => 31,  115 => 25,  105 => 18,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}RoleUser{% endblock %}

{% block body %}
    <h1>RoleUser</h1>
<div class=\"container\">
    <table class=\"table table-dark table-striped\">
  
<div class=\"mt-5 mb-6 \">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ roleuser.id }}</td>
            </tr>
            <tr>
                <th>Role</th>
                <td>{{ roleuser.role }}</td>
            </tr>
            
           
        </tbody>
    </table>
    <div class=\"my-2\">
                                     <a href=\"{{ path('app_roleuser_index') }}\"  class=\"btn btn-success btn-icon-split\">
                                      
                                        <span class=\"text\">back to list</span>
                                    </a>
                                    </div>
    <div class=\"my-2\">
                                    <a href=\"{{ path('app_roleuser_edit', {'id': roleuser.id})}}\"  class=\"btn btn-success btn-icon-split\">
                                      
                                        <span class=\"text\">edit</span>
                                    </a>
</div>
    {{ include('roleuser/_delete_form.html.twig') }}
{% endblock %}
", "roleuser/show.html.twig", "C:\\Users\\Malek Ayedi\\Desktop\\GestionUser\\templates\\roleuser\\show.html.twig");
    }
}
