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

/* participation_seance/showBack.html.twig */
class __TwigTemplate_d557aec3874b61fb008c45d2338c1fee extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation_seance/showBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation_seance/showBack.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "participation_seance/showBack.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"card\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participation_seance"]) || array_key_exists("participation_seance", $context) ? $context["participation_seance"] : (function () { throw new RuntimeError('Variable "participation_seance" does not exist.', 9, $this->source); })()), "typeSport", [], "any", false, false, false, 9), "html", null, true);
        echo "</h5>
            <p class=\"card-text\">";
        // line 10
        ((twig_get_attribute($this->env, $this->source, (isset($context["participation_seance"]) || array_key_exists("participation_seance", $context) ? $context["participation_seance"] : (function () { throw new RuntimeError('Variable "participation_seance" does not exist.', 10, $this->source); })()), "dateParticipation", [], "any", false, false, false, 10)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participation_seance"]) || array_key_exists("participation_seance", $context) ? $context["participation_seance"] : (function () { throw new RuntimeError('Variable "participation_seance" does not exist.', 10, $this->source); })()), "dateParticipation", [], "any", false, false, false, 10), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</p>
            <p class=\"card-title\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participation_seance"]) || array_key_exists("participation_seance", $context) ? $context["participation_seance"] : (function () { throw new RuntimeError('Variable "participation_seance" does not exist.', 11, $this->source); })()), "seance", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
            <p class=\"card-title\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participation_seance"]) || array_key_exists("participation_seance", $context) ? $context["participation_seance"] : (function () { throw new RuntimeError('Variable "participation_seance" does not exist.', 12, $this->source); })()), "participant", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>

        </div>
        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sport.jpg"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participation_seance"]) || array_key_exists("participation_seance", $context) ? $context["participation_seance"] : (function () { throw new RuntimeError('Variable "participation_seance" does not exist.', 15, $this->source); })()), "typeSport", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
        <div class=\"card-body\">
            <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_seance_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["participation_seance"]) || array_key_exists("participation_seance", $context) ? $context["participation_seance"] : (function () { throw new RuntimeError('Variable "participation_seance" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
        echo "\" class=\"card-link\">Edit</a>
            ";
        // line 18
        echo twig_include($this->env, $context, "participation_seance/_delete_form.html.twig");
        echo "


            <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_seance_index1");
        echo "\" class=\"card-link\">Back to list</a>
             </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "participation_seance/showBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 21,  121 => 18,  117 => 17,  110 => 15,  104 => 12,  100 => 11,  96 => 10,  92 => 9,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

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
            <a href=\"{{ path('app_participation_seance_edit', {'id': participation_seance.id}) }}\" class=\"card-link\">Edit</a>
            {{ include('participation_seance/_delete_form.html.twig') }}


            <a href=\"{{ path('app_participation_seance_index1') }}\" class=\"card-link\">Back to list</a>
             </div>
    </div>
{% endblock %}
", "participation_seance/showBack.html.twig", "C:\\Users\\HP\\Videos\\FitHub\\templates\\participation_seance\\showBack.html.twig");
    }
}
