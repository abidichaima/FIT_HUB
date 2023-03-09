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

/* participation_seance/_form.html.twig */
class __TwigTemplate_5941a8878b25ee12876c91e184443586 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation_seance/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation_seance/_form.html.twig"));

        // line 1
        echo "
";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 38
        echo "    <center>

        <div style=\"margin-top:10px; padding:20px; width:800px; height:fit-content;
       border-radius:10px; background-image: url('../images/background.jpg'); background-size: 100% ; box-shadow: -1px -1px 34px 3px rgba(0,0,0,0.63);
-webkit-box-shadow: -1px -1px 34px 3px rgba(0,0,0,0.63);-moz-box-shadow: -1px -1px 34px 3px rgba(0,0,0,0.63);\" class=\"container\">

            <label style=\"color:white;  font-weight: bold;\"  >on vous souhaite la bienvenue</label>



            ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

            <div class=\"form-group\">
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "typeSport", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Merci de taper votre type de sport"]]);
        echo "
                ";
        // line 52
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "typeSport", [], "any", false, false, false, 52), 'errors'))) {
            // line 53
            echo "                    <div class=\"alert alert-danger\">
                        ";
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "typeSport", [], "any", false, false, false, 54), 'errors');
            echo "
                    </div>
                ";
        }
        // line 57
        echo "            </div>


            <div class=\"form-group\">
                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "dateParticipation", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Merci de taper votre date de participation"]]);
        echo "
                ";
        // line 62
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "dateParticipation", [], "any", false, false, false, 62), 'errors'))) {
            // line 63
            echo "                    <div class=\"alert alert-danger\">
                        ";
            // line 64
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "dateParticipation", [], "any", false, false, false, 64), 'errors');
            echo "
                    </div>
                ";
        }
        // line 67
        echo "                <div class=\"form-group\">
                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "seance", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Merci de taper votre date de participation"]]);
        echo "
                    ";
        // line 69
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "seance", [], "any", false, false, false, 69), 'errors'))) {
            // line 70
            echo "                    <div class=\"alert alert-danger\">
                        ";
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "seance", [], "any", false, false, false, 71), 'errors');
            echo "
                    </div>
                    ";
        }
        // line 74
        echo "                    <div class=\"form-group\">
                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "participant", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Merci de taper votre date de participation"]]);
        echo "
                        ";
        // line 76
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "participant", [], "any", false, false, false, 76), 'errors'))) {
            // line 77
            echo "                            <div class=\"alert alert-danger\">
                                ";
            // line 78
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "participant", [], "any", false, false, false, 78), 'errors');
            echo "
                            </div>
                        ";
        }
        // line 81
        echo "


            <button class=\"btn btn-primary\" style=\"background-color:#FAC031; border:none\">";
        // line 84
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 84, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
            ";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), 'form_end');
        echo "

        </div>

    </center>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "participation_seance/_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  165 => 85,  161 => 84,  156 => 81,  150 => 78,  147 => 77,  145 => 76,  141 => 75,  138 => 74,  132 => 71,  129 => 70,  127 => 69,  123 => 68,  120 => 67,  114 => 64,  111 => 63,  109 => 62,  105 => 61,  99 => 57,  93 => 54,  90 => 53,  88 => 52,  84 => 51,  78 => 48,  66 => 38,  47 => 37,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{#{% block title %}
    <center>

    </center>
{% endblock %}
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
#}
{% block body %}
    <center>

        <div style=\"margin-top:10px; padding:20px; width:800px; height:fit-content;
       border-radius:10px; background-image: url('../images/background.jpg'); background-size: 100% ; box-shadow: -1px -1px 34px 3px rgba(0,0,0,0.63);
-webkit-box-shadow: -1px -1px 34px 3px rgba(0,0,0,0.63);-moz-box-shadow: -1px -1px 34px 3px rgba(0,0,0,0.63);\" class=\"container\">

            <label style=\"color:white;  font-weight: bold;\"  >on vous souhaite la bienvenue</label>



            {{form_start(form,{'attr':{'novalidate':'novalidate'}} )}}

            <div class=\"form-group\">
                {{ form_widget(form.typeSport, {'attr': {'class': 'form-control', 'placeholder': 'Merci de taper votre type de sport'}}) }}
                {% if form_errors(form.typeSport)is not empty %}
                    <div class=\"alert alert-danger\">
                        {{ form_errors(form.typeSport) }}
                    </div>
                {% endif %}
            </div>


            <div class=\"form-group\">
                {{ form_widget(form.dateParticipation, {'attr': {'class': 'form-control', 'placeholder': 'Merci de taper votre date de participation'}}) }}
                {% if form_errors(form.dateParticipation)is not empty %}
                    <div class=\"alert alert-danger\">
                        {{ form_errors(form.dateParticipation) }}
                    </div>
                {% endif %}
                <div class=\"form-group\">
                    {{ form_widget(form.seance, {'attr': {'class': 'form-control', 'placeholder': 'Merci de taper votre date de participation'}}) }}
                    {% if form_errors(form.seance)is not empty %}
                    <div class=\"alert alert-danger\">
                        {{ form_errors(form.seance) }}
                    </div>
                    {% endif %}
                    <div class=\"form-group\">
                        {{ form_widget(form.participant, {'attr': {'class': 'form-control', 'placeholder': 'Merci de taper votre date de participation'}}) }}
                        {% if form_errors(form.participant)is not empty %}
                            <div class=\"alert alert-danger\">
                                {{ form_errors(form.participant) }}
                            </div>
                        {% endif %}



            <button class=\"btn btn-primary\" style=\"background-color:#FAC031; border:none\">{{button_label|default('Save')}}</button>
            {{ form_end(form) }}

        </div>

    </center>

{% endblock %}", "participation_seance/_form.html.twig", "C:\\Users\\HP\\Videos\\FitHub\\templates\\participation_seance\\_form.html.twig");
    }
}
