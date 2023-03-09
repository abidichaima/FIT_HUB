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

/* utilisateur/new.html.twig */
class __TwigTemplate_7e45ee75c4b93f8dc968bc0083d84497 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/new.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "utilisateur/new.html.twig", 1);
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
        echo "    <div class=\"col-lg-12 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                
                
                                <h4 class=\"card-title\"><svg width=\"50\" height=\"50\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" style=\"margin-left:550px; margin-bottom:30px ;margin-top:0;width:50px; color:black\"> <path d=\"M17 10H20M23 10H20M20 10V7M20 10V13\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> <path d=\"M1 20V19C1 15.134 4.13401 12 8 12V12C11.866 12 15 15.134 15 19V20\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> <path d=\"M8 12C10.2091 12 12 10.2091 12 8C12 5.79086 10.2091 4 8 4C5.79086 4 4 5.79086 4 8C4 10.2091 5.79086 12 8 12Z\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> </svg>

                ";
        // line 11
        echo twig_include($this->env, $context, "utilisateur/_form.html.twig");
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig'%}

{% block body %}
    <div class=\"col-lg-12 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                
                
                                <h4 class=\"card-title\"><svg width=\"50\" height=\"50\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" style=\"margin-left:550px; margin-bottom:30px ;margin-top:0;width:50px; color:black\"> <path d=\"M17 10H20M23 10H20M20 10V7M20 10V13\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> <path d=\"M1 20V19C1 15.134 4.13401 12 8 12V12C11.866 12 15 15.134 15 19V20\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> <path d=\"M8 12C10.2091 12 12 10.2091 12 8C12 5.79086 10.2091 4 8 4C5.79086 4 4 5.79086 4 8C4 10.2091 5.79086 12 8 12Z\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> </svg>

                {{ include('utilisateur/_form.html.twig') }}
            </div>
        </div>
    </div>
{% endblock %}", "utilisateur/new.html.twig", "C:\\Users\\user\\Desktop\\gestion user\\templates\\utilisateur\\new.html.twig");
    }
}
