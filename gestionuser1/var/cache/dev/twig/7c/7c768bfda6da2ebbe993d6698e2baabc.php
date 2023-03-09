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

/* utilisateur/_form.html.twig */
class __TwigTemplate_9c4d2a696d02a9df937d8d3ff270742f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/_form.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('body', $context, $blocks);
        
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

        // line 4
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div class=\"col-lg-12 grid-margin stretch-card\">
  <div class=\"card\">
    <div class=\"card-body\">
      <br>


    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
      
        <div class=\"form-group\">
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Merci de taper votre nom"]]);
        echo "
            ";
        // line 19
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), 'errors'))) {
            echo "    
            <div class=\"alert alert-danger\">
            ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), 'errors');
            echo "
            </div>
            ";
        }
        // line 24
        echo "        </div>
       
        <div class=\"form-group\">
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "prenom", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Merci de taper votre prenom"]]);
        echo "
            ";
        // line 28
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "prenom", [], "any", false, false, false, 28), 'errors'))) {
            // line 29
            echo "            <div class=\"alert alert-danger\">
            ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "prenom", [], "any", false, false, false, 30), 'errors');
            echo "
            </div>
             ";
        }
        // line 33
        echo "        </div>
         <div class=\"form-group\">
       
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Merci de choisir une date"]]);
        echo "
            ";
        // line 37
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 37), 'errors'))) {
            // line 38
            echo "            <div class=\"alert alert-danger\">
            ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 39), 'errors');
            echo "
            
            </div>
            ";
        }
        // line 43
        echo "        </div>
        <div class=\"form-group\" >
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "telephone", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Merci de taper votre numero de telephone "]]);
        echo "
            ";
        // line 46
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "telephone", [], "any", false, false, false, 46), 'errors'))) {
            // line 47
            echo "            <div class=\"alert alert-danger\">
            ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "telephone", [], "any", false, false, false, 48), 'errors');
            echo "
            
            </div>
            ";
        }
        // line 52
        echo "        </div>
       
        
        <div class=\"form-group\">
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "adresse", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Merci de taper votre adresse"]]);
        echo "
            ";
        // line 57
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "adresse", [], "any", false, false, false, 57), 'errors'))) {
            echo " 
            <div class=\"alert alert-danger\">
            ";
            // line 59
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "adresse", [], "any", false, false, false, 59), 'errors');
            echo "
            
            </div>
            ";
        }
        // line 63
        echo "        </div>
        

        <div class=\"form-group\">
       
            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "genre", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Merci de choisir le genre"]]);
        echo "
            ";
        // line 69
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "genre", [], "any", false, false, false, 69), 'errors'))) {
            // line 70
            echo "            <div class=\"alert alert-danger\">
            ";
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "genre", [], "any", false, false, false, 71), 'errors');
            echo "
            
            </div>
            ";
        }
        // line 75
        echo "        </div>
       
         <div class=\"form-group\">
            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "roles", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Merci de choisir le role"]]);
        echo "
            ";
        // line 79
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "roles", [], "any", false, false, false, 79), 'errors'))) {
            // line 80
            echo "            <div class=\"alert alert-danger\">
            ";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "roles", [], "any", false, false, false, 81), 'errors');
            echo "
            </div>
            ";
        }
        // line 84
        echo "        </div>
 
        <div class=\"form-group\">
            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "email", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Merci de taper votre email"]]);
        echo "
            ";
        // line 88
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "email", [], "any", false, false, false, 88), 'errors'))) {
            // line 89
            echo "            <div class=\"alert alert-danger\">
            ";
            // line 90
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "email", [], "any", false, false, false, 90), 'errors');
            echo "
            
            </div>
            ";
        }
        // line 94
        echo "
            
        </div>
        <div class=\"form-group\">
        
            ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "password", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Merci de taper votre mot de passe"]]);
        echo "
            ";
        // line 100
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "password", [], "any", false, false, false, 100), 'errors'))) {
            // line 101
            echo "            <div class=\"alert alert-danger\">
            ";
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "password", [], "any", false, false, false, 102), 'errors');
            echo "
            
            </div>
            ";
        }
        // line 106
        echo "        </div>
       
       
        
       
        
       <button class=\"btn btn-primary\" style=\" border:none\">";
        // line 112
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 112, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button> 
       <div align=\"right\">
\t\t\t\t
                 <a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_index");
        echo "\" ><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"50\" height=\"30\" style=\"color:black\" fill=\"currentColor\" class=\"bi bi-arrow-left-right\" viewBox=\"0 0 16 16\"> <path fill-rule=\"evenodd\" d=\"M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z\"/> </svg>
\t\t\t\t\t
        </div>
        

    ";
        // line 120
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), 'form_end');
        echo "
 
        
    
</div>




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  317 => 120,  309 => 115,  303 => 112,  295 => 106,  288 => 102,  285 => 101,  283 => 100,  279 => 99,  272 => 94,  265 => 90,  262 => 89,  260 => 88,  256 => 87,  251 => 84,  245 => 81,  242 => 80,  240 => 79,  236 => 78,  231 => 75,  224 => 71,  221 => 70,  219 => 69,  215 => 68,  208 => 63,  201 => 59,  196 => 57,  192 => 56,  186 => 52,  179 => 48,  176 => 47,  174 => 46,  170 => 45,  166 => 43,  159 => 39,  156 => 38,  154 => 37,  150 => 36,  145 => 33,  139 => 30,  136 => 29,  134 => 28,  130 => 27,  125 => 24,  119 => 21,  114 => 19,  110 => 18,  104 => 15,  95 => 8,  85 => 7,  74 => 4,  64 => 3,  54 => 7,  51 => 6,  49 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block title %}

{% endblock %}

{% block body %}

<div class=\"col-lg-12 grid-margin stretch-card\">
  <div class=\"card\">
    <div class=\"card-body\">
      <br>


    {{form_start(form,{'attr':{'novalidate':'novalidate'}} )}}
      
        <div class=\"form-group\">
            {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Merci de taper votre nom'}}) }}
            {% if form_errors(form.nom)is not empty %}    
            <div class=\"alert alert-danger\">
            {{ form_errors(form.nom) }}
            </div>
            {% endif %}
        </div>
       
        <div class=\"form-group\">
            {{ form_widget(form.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Merci de taper votre prenom'}}) }}
            {% if form_errors(form.prenom)is not empty %}
            <div class=\"alert alert-danger\">
            {{ form_errors(form.prenom) }}
            </div>
             {% endif %}
        </div>
         <div class=\"form-group\">
       
            {{ form_widget(form.date_de_naissance, {'attr': {'class': 'form-control', 'placeholder': 'Merci de choisir une date'}}) }}
            {% if form_errors(form.date_de_naissance)is not empty %}
            <div class=\"alert alert-danger\">
            {{ form_errors(form.date_de_naissance) }}
            
            </div>
            {% endif %}
        </div>
        <div class=\"form-group\" >
            {{ form_widget(form.telephone, {'attr': {'class': 'form-control', 'placeholder': 'Merci de taper votre numero de telephone '}}) }}
            {% if form_errors(form.telephone)is not empty %}
            <div class=\"alert alert-danger\">
            {{ form_errors(form.telephone) }}
            
            </div>
            {% endif %}
        </div>
       
        
        <div class=\"form-group\">
            {{ form_widget(form.adresse, {'attr': {'class': 'form-control', 'placeholder': 'Merci de taper votre adresse'}}) }}
            {% if form_errors(form.adresse)is not empty %} 
            <div class=\"alert alert-danger\">
            {{ form_errors(form.adresse) }}
            
            </div>
            {% endif %}
        </div>
        

        <div class=\"form-group\">
       
            {{ form_widget(form.genre, {'attr': {'class': 'form-control', 'placeholder': 'Merci de choisir le genre'}}) }}
            {% if form_errors(form.genre)is not empty %}
            <div class=\"alert alert-danger\">
            {{ form_errors(form.genre) }}
            
            </div>
            {% endif %}
        </div>
       
         <div class=\"form-group\">
            {{ form_widget(form.roles, {'attr': {'class': 'form-control', 'placeholder': 'Merci de choisir le role'}}) }}
            {% if form_errors(form.roles)is not empty %}
            <div class=\"alert alert-danger\">
            {{ form_errors(form.roles) }}
            </div>
            {% endif %}
        </div>
 
        <div class=\"form-group\">
            {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'Merci de taper votre email'}}) }}
            {% if form_errors(form.email)is not empty %}
            <div class=\"alert alert-danger\">
            {{ form_errors(form.email) }}
            
            </div>
            {% endif %}

            
        </div>
        <div class=\"form-group\">
        
            {{ form_widget(form.password, {'attr': {'class': 'form-control', 'placeholder': 'Merci de taper votre mot de passe'}}) }}
            {% if form_errors(form.password)is not empty %}
            <div class=\"alert alert-danger\">
            {{ form_errors(form.password) }}
            
            </div>
            {% endif %}
        </div>
       
       
        
       
        
       <button class=\"btn btn-primary\" style=\" border:none\">{{button_label|default('Save')}}</button> 
       <div align=\"right\">
\t\t\t\t
                 <a href=\"{{ path('app_utilisateur_index') }}\" ><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"50\" height=\"30\" style=\"color:black\" fill=\"currentColor\" class=\"bi bi-arrow-left-right\" viewBox=\"0 0 16 16\"> <path fill-rule=\"evenodd\" d=\"M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z\"/> </svg>
\t\t\t\t\t
        </div>
        

    {{ form_end(form) }}
 
        
    
</div>




{% endblock %}", "utilisateur/_form.html.twig", "C:\\Users\\user\\Desktop\\gestion user\\templates\\utilisateur\\_form.html.twig");
    }
}
