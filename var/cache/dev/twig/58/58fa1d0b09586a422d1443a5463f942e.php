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

/* seance/_form.html.twig */
class __TwigTemplate_c54f833529241aabdc5ee533be02f696 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seance/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seance/_form.html.twig"));

        // line 1
        echo "

";
        // line 3
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

        // line 4
        echo "    <center>
                ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
            <div class=\"form-group\">
                ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "titreSeance", [], "any", false, false, false, 7), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Titre"]]);
        echo "
                ";
        // line 8
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "titreSeance", [], "any", false, false, false, 8), 'errors'))) {
            // line 9
            echo "                    <div class=\"alert alert-danger\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "titreSeance", [], "any", false, false, false, 9), 'errors');
            echo "</div>
                ";
        }
        // line 11
        echo "            </div>
            <div class=\"form-group\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "descriptionSeance", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Description"]]);
        echo "
                ";
        // line 14
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "descriptionSeance", [], "any", false, false, false, 14), 'errors'))) {
            // line 15
            echo "                    <div class=\"alert alert-danger\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "descriptionSeance", [], "any", false, false, false, 15), 'errors');
            echo "</div>
                ";
        }
        // line 17
        echo "            </div>
            <div class=\"form-group\">
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "nbParticipantSeance", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nombre de participants"]]);
        echo "
                ";
        // line 20
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "nbParticipantSeance", [], "any", false, false, false, 20), 'errors'))) {
            // line 21
            echo "                    <div class=\"alert alert-danger\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nbParticipantSeance", [], "any", false, false, false, 21), 'errors');
            echo "</div>
                ";
        }
        // line 23
        echo "            </div>
            <div class=\"form-group date-input\">
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "dateDebutSeance", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Date de début"]]);
        echo "
                ";
        // line 26
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "dateDebutSeance", [], "any", false, false, false, 26), 'errors'))) {
            // line 27
            echo "                    <div class=\"alert alert-danger\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "dateDebutSeance", [], "any", false, false, false, 27), 'errors');
            echo "</div>
                ";
        }
        // line 29
        echo "            </div>
            <div class=\"form-group date-input\">
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "dateFinSeance", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Date de fin"]]);
        echo "
                ";
        // line 32
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "dateFinSeance", [], "any", false, false, false, 32), 'errors'))) {
            // line 33
            echo "                    <div class=\"alert alert-danger\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "dateFinSeance", [], "any", false, false, false, 33), 'errors');
            echo "</div>
                ";
        }
        // line 35
        echo "            </div>
            <div class=\"form-group\">
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "coach", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom du coach"]]);
        echo "
                ";
        // line 38
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "coach", [], "any", false, false, false, 38), 'errors'))) {
            // line 39
            echo "                    <div class=\"alert alert-danger\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "coach", [], "any", false, false, false, 39), 'errors');
            echo "</div>
                ";
        }
        // line 41
        echo "            </div>
            <button class=\"btn btn-primary\" style=\"background-color:#4b49ab; border:none\">";
        // line 42
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 42, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
        </div>
    </center>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "seance/_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  174 => 43,  170 => 42,  167 => 41,  161 => 39,  159 => 38,  155 => 37,  151 => 35,  145 => 33,  143 => 32,  139 => 31,  135 => 29,  129 => 27,  127 => 26,  123 => 25,  119 => 23,  113 => 21,  111 => 20,  107 => 19,  103 => 17,  97 => 15,  95 => 14,  91 => 13,  87 => 11,  81 => 9,  79 => 8,  75 => 7,  70 => 5,  67 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block body %}
    <center>
                {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
            <div class=\"form-group\">
                {{ form_widget(form.titreSeance, {'attr': {'class': 'form-control', 'placeholder': 'Titre'}}) }}
                {% if form_errors(form.titreSeance) is not empty %}
                    <div class=\"alert alert-danger\">{{ form_errors(form.titreSeance) }}</div>
                {% endif %}
            </div>
            <div class=\"form-group\">
                {{ form_widget(form.descriptionSeance, {'attr': {'class': 'form-control', 'placeholder': 'Description'}}) }}
                {% if form_errors(form.descriptionSeance) is not empty %}
                    <div class=\"alert alert-danger\">{{ form_errors(form.descriptionSeance) }}</div>
                {% endif %}
            </div>
            <div class=\"form-group\">
                {{ form_widget(form.nbParticipantSeance, {'attr': {'class': 'form-control', 'placeholder': 'Nombre de participants'}}) }}
                {% if form_errors(form.nbParticipantSeance) is not empty %}
                    <div class=\"alert alert-danger\">{{ form_errors(form.nbParticipantSeance) }}</div>
                {% endif %}
            </div>
            <div class=\"form-group date-input\">
                {{ form_widget(form.dateDebutSeance, {'attr': {'class': 'form-control', 'placeholder': 'Date de début'}}) }}
                {% if form_errors(form.dateDebutSeance) is not empty %}
                    <div class=\"alert alert-danger\">{{ form_errors(form.dateDebutSeance) }}</div>
                {% endif %}
            </div>
            <div class=\"form-group date-input\">
                {{ form_widget(form.dateFinSeance, {'attr': {'class': 'form-control', 'placeholder': 'Date de fin'}}) }}
                {% if form_errors(form.dateFinSeance) is not empty %}
                    <div class=\"alert alert-danger\">{{ form_errors(form.dateFinSeance) }}</div>
                {% endif %}
            </div>
            <div class=\"form-group\">
                {{ form_widget(form.coach, {'attr': {'class': 'form-control', 'placeholder': 'Nom du coach'}}) }}
                {% if form_errors(form.coach) is not empty %}
                    <div class=\"alert alert-danger\">{{ form_errors(form.coach) }}</div>
                {% endif %}
            </div>
            <button class=\"btn btn-primary\" style=\"background-color:#4b49ab; border:none\">{{ button_label|default('Enregistrer') }}</button>
            {{ form_end(form) }}
        </div>
    </center>
{% endblock %}
", "seance/_form.html.twig", "C:\\Users\\HP\\Videos\\FitHub\\templates\\seance\\_form.html.twig");
    }
}
