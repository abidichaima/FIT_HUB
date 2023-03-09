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

/* utilisateur/formlogin.html.twig */
class __TwigTemplate_31e111a5e1395cf51f407d68361d6efc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/formlogin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/formlogin.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "utilisateur/formlogin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "<style>
    
    .form-style {
        padding: 50px;
    }
    .form-group {
        margin-bottom: 30px;
        width: 50%;
    }
    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 16px;
    }
    ::placeholder {
        color: #000000!important;
    }
    .logo {
        weight:100;

    }
    #role {
         margin-bottom: 30px;
        width: 50%;

    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "<center>
<div style=\"margin-top:10px; padding:20px; width:800px; height:fit-content; 
       border-radius:10px; background-image: url('../images/image.jpg'); background-size: 100% ; box-shadow: -1px -1px 34px 3px rgba(0,0,0,0.63);
-webkit-box-shadow: -1px -1px 34px 3px rgba(0,0,0,0.63);-moz-box-shadow: -1px -1px 34px 3px rgba(0,0,0,0.63);\" class=\"container\">

<label style=\"color:#FAC031;  font-weight: bold; font-size: 20px;\"  >Soyez bienvenus</label> 


    
       <div class=\"container\">
       ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formlogin"]) || array_key_exists("formlogin", $context) ? $context["formlogin"] : (function () { throw new RuntimeError('Variable "formlogin" does not exist.', 44, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
       <div class=\"form-group\">
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formlogin"]) || array_key_exists("formlogin", $context) ? $context["formlogin"] : (function () { throw new RuntimeError('Variable "formlogin" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Merci de taper votre email"]]);
        echo "
            ";
        // line 47
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formlogin"]) || array_key_exists("formlogin", $context) ? $context["formlogin"] : (function () { throw new RuntimeError('Variable "formlogin" does not exist.', 47, $this->source); })()), "email", [], "any", false, false, false, 47), 'errors'))) {
            // line 48
            echo "            <div class=\"alert alert-danger\" >
            ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formlogin"]) || array_key_exists("formlogin", $context) ? $context["formlogin"] : (function () { throw new RuntimeError('Variable "formlogin" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), 'errors');
            echo "
            </div>
            ";
        }
        // line 52
        echo "        </div>
        <div class=\"form-group\">
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formlogin"]) || array_key_exists("formlogin", $context) ? $context["formlogin"] : (function () { throw new RuntimeError('Variable "formlogin" does not exist.', 54, $this->source); })()), "password", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Merci de taper votre mot de passe"]]);
        echo "
            ";
        // line 55
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formlogin"]) || array_key_exists("formlogin", $context) ? $context["formlogin"] : (function () { throw new RuntimeError('Variable "formlogin" does not exist.', 55, $this->source); })()), "password", [], "any", false, false, false, 55), 'errors'))) {
            // line 56
            echo "            <div class=\"alert alert-danger\">
            ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formlogin"]) || array_key_exists("formlogin", $context) ? $context["formlogin"] : (function () { throw new RuntimeError('Variable "formlogin" does not exist.', 57, $this->source); })()), "password", [], "any", false, false, false, 57), 'errors');
            echo "
            ";
        }
        // line 59
        echo "            </div>
        </div>

       
        
         <button class=\"btn btn-primary\" style=\"background-color:#FAC031; border:none\">";
        // line 64
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 64, $this->source); })()), "log in")) : ("log in")), "html", null, true);
        echo "</button>
         <div class=\"custom-control custom-checkbox\">
\t\t\t\t\t<a href=\"#\">Forgot Password?</a>
\t\t\t\t\t
                </div>


        ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formlogin"]) || array_key_exists("formlogin", $context) ? $context["formlogin"] : (function () { throw new RuntimeError('Variable "formlogin" does not exist.', 71, $this->source); })()), 'form_end');
        echo "
</div>
</center>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/formlogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 71,  192 => 64,  185 => 59,  180 => 57,  177 => 56,  175 => 55,  171 => 54,  167 => 52,  161 => 49,  158 => 48,  156 => 47,  152 => 46,  147 => 44,  135 => 34,  125 => 33,  88 => 4,  78 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}
{% block title %}{% endblock %}
{% block css %}
<style>
    
    .form-style {
        padding: 50px;
    }
    .form-group {
        margin-bottom: 30px;
        width: 50%;
    }
    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 16px;
    }
    ::placeholder {
        color: #000000!important;
    }
    .logo {
        weight:100;

    }
    #role {
         margin-bottom: 30px;
        width: 50%;

    }
</style>
{% endblock %}

{% block body %}
<center>
<div style=\"margin-top:10px; padding:20px; width:800px; height:fit-content; 
       border-radius:10px; background-image: url('../images/image.jpg'); background-size: 100% ; box-shadow: -1px -1px 34px 3px rgba(0,0,0,0.63);
-webkit-box-shadow: -1px -1px 34px 3px rgba(0,0,0,0.63);-moz-box-shadow: -1px -1px 34px 3px rgba(0,0,0,0.63);\" class=\"container\">

<label style=\"color:#FAC031;  font-weight: bold; font-size: 20px;\"  >Soyez bienvenus</label> 


    
       <div class=\"container\">
       {{form_start(formlogin,{'attr':{'novalidate':'novalidate'}} )}}
       <div class=\"form-group\">
            {{ form_widget(formlogin.email, {'attr': {'class': 'form-control', 'placeholder': 'Merci de taper votre email'}}) }}
            {% if form_errors(formlogin.email)is not empty %}
            <div class=\"alert alert-danger\" >
            {{ form_errors(formlogin.email) }}
            </div>
            {% endif %}
        </div>
        <div class=\"form-group\">
            {{ form_widget(formlogin.password, {'attr': {'class': 'form-control', 'placeholder': 'Merci de taper votre mot de passe'}}) }}
            {% if form_errors(formlogin.password)is not empty %}
            <div class=\"alert alert-danger\">
            {{ form_errors(formlogin.password) }}
            {% endif %}
            </div>
        </div>

       
        
         <button class=\"btn btn-primary\" style=\"background-color:#FAC031; border:none\">{{button_label|default('log in')}}</button>
         <div class=\"custom-control custom-checkbox\">
\t\t\t\t\t<a href=\"#\">Forgot Password?</a>
\t\t\t\t\t
                </div>


        {{ form_end(formlogin) }}
</div>
</center>

{% endblock %}", "utilisateur/formlogin.html.twig", "C:\\Users\\user\\Desktop\\gestion user\\templates\\utilisateur\\formlogin.html.twig");
    }
}
