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

/* roleuser/index.html.twig */
class __TwigTemplate_261b71bbb675f95bb41d6d7f561f3fe1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "roleuser/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "roleuser/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "roleuser/index.html.twig", 1);
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

        echo "RoleUser index";
        
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
        echo "    <h1>RoleUser </h1>






<div class=\"container\">
    <table class=\"table table-dark table-striped\">

<div class=\"mt-5 mb-6 \">
        <thead>
            <tr>
                <th>Id</th>
                <th>Role</th>
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roleusers"]) || array_key_exists("roleusers", $context) ? $context["roleusers"] : (function () { throw new RuntimeError('Variable "roleusers" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["roleuser"]) {
            // line 26
            echo "            <tr>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["roleuser"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["roleuser"], "role", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                
                <td>
                 <div class=\"my-2\"></div>
                                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roleuser_show", ["id" => twig_get_attribute($this->env, $this->source, $context["roleuser"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"btn btn-success btn-icon-split\">
                                        
                                        <span class=\"text\">show</span>
                                    </a>
               <div class=\"my-2\"></div>
                                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roleuser_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["roleuser"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\"  class=\"btn btn-success btn-icon-split\">
                                      
                                        <span class=\"text\">edit</span>
                                    </a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['roleuser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>
</div>
    <div class=\"my-2\">
         <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roleuser_new");
        echo "\" class=\"btn btn-success btn-icon-split\">
                                      
          <span class=\"text\">Create new</span>
        </a></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "roleuser/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 52,  157 => 48,  148 => 44,  136 => 37,  128 => 32,  121 => 28,  117 => 27,  114 => 26,  109 => 25,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}RoleUser index{% endblock %}

{% block body %}
    <h1>RoleUser </h1>






<div class=\"container\">
    <table class=\"table table-dark table-striped\">

<div class=\"mt-5 mb-6 \">
        <thead>
            <tr>
                <th>Id</th>
                <th>Role</th>
                
            </tr>
        </thead>
        <tbody>
        {% for roleuser in roleusers %}
            <tr>
                <td>{{ roleuser.id }}</td>
                <td>{{ roleuser.role }}</td>
                
                <td>
                 <div class=\"my-2\"></div>
                                    <a href=\"{{ path('app_roleuser_show', {'id': roleuser.id}) }}\" class=\"btn btn-success btn-icon-split\">
                                        
                                        <span class=\"text\">show</span>
                                    </a>
               <div class=\"my-2\"></div>
                                    <a href=\"{{ path('app_roleuser_edit', {'id': roleuser.id})}}\"  class=\"btn btn-success btn-icon-split\">
                                      
                                        <span class=\"text\">edit</span>
                                    </a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
    <div class=\"my-2\">
         <a href=\"{{ path('app_roleuser_new') }}\" class=\"btn btn-success btn-icon-split\">
                                      
          <span class=\"text\">Create new</span>
        </a></div>
{% endblock %}
", "roleuser/index.html.twig", "C:\\Users\\Malek Ayedi\\Desktop\\GestionUser\\templates\\roleuser\\index.html.twig");
    }
}
