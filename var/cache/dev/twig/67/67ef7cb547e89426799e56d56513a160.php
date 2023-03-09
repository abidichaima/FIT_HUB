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

/* participation_seance/show.html.twig */
class __TwigTemplate_d986121b3e8a92514b27ca25d7471e76 extends Template
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
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation_seance/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation_seance/show.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "participation_seance/show.html.twig", 1);
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

        echo "ParticipationSeance";
        
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
        echo "    <div class=\"card\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participation_seance"]) || array_key_exists("participation_seance", $context) ? $context["participation_seance"] : (function () { throw new RuntimeError('Variable "participation_seance" does not exist.', 8, $this->source); })()), "typeSport", [], "any", false, false, false, 8), "html", null, true);
        echo "</h5>
            <p class=\"card-text\">";
        // line 9
        ((twig_get_attribute($this->env, $this->source, (isset($context["participation_seance"]) || array_key_exists("participation_seance", $context) ? $context["participation_seance"] : (function () { throw new RuntimeError('Variable "participation_seance" does not exist.', 9, $this->source); })()), "dateParticipation", [], "any", false, false, false, 9)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participation_seance"]) || array_key_exists("participation_seance", $context) ? $context["participation_seance"] : (function () { throw new RuntimeError('Variable "participation_seance" does not exist.', 9, $this->source); })()), "dateParticipation", [], "any", false, false, false, 9), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</p>
            <p class=\"card-title\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participation_seance"]) || array_key_exists("participation_seance", $context) ? $context["participation_seance"] : (function () { throw new RuntimeError('Variable "participation_seance" does not exist.', 10, $this->source); })()), "seance", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
            <p class=\"card-title\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participation_seance"]) || array_key_exists("participation_seance", $context) ? $context["participation_seance"] : (function () { throw new RuntimeError('Variable "participation_seance" does not exist.', 11, $this->source); })()), "participant", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>

        </div>
        <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sport.jpg"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participation_seance"]) || array_key_exists("participation_seance", $context) ? $context["participation_seance"] : (function () { throw new RuntimeError('Variable "participation_seance" does not exist.', 14, $this->source); })()), "typeSport", [], "any", false, false, false, 14), "html", null, true);
        echo "\">
        <div class=\"card-body\">


              ";
        // line 18
        echo twig_include($this->env, $context, "participation_seance/_delete_form.html.twig");
        echo "
        </div>
        <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_seance_index");
        echo "\" class=\"card-link\">Back to list</a>

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "participation_seance/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 20,  119 => 18,  110 => 14,  104 => 11,  100 => 10,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}ParticipationSeance{% endblock %}

{% block body %}
    <div class=\"card\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">{{ participation_seance.typeSport }}</h5>
            <p class=\"card-text\">{{ participation_seance.dateParticipation ? participation_seance.dateParticipation|date('Y-m-d') : '' }}</p>
            <p class=\"card-title\">{{ participation_seance.seance }}</p>
            <p class=\"card-title\">{{ participation_seance.participant }}</p>

        </div>
        <img src=\"{{ asset('images/sport.jpg') }}\" alt=\"{{ participation_seance.typeSport }}\">
        <div class=\"card-body\">


              {{ include('participation_seance/_delete_form.html.twig') }}
        </div>
        <a href=\"{{ path('app_participation_seance_index') }}\" class=\"card-link\">Back to list</a>

    </div>
{% endblock %}
", "participation_seance/show.html.twig", "C:\\Users\\HP\\Videos\\FitHub\\templates\\participation_seance\\show.html.twig");
    }
}
