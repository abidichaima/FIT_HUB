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

/* participation_seance/indexFront.html.twig */
class __TwigTemplate_884f61ed7a6d11d65cb3417cc45fd30f extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation_seance/indexFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation_seance/indexFront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "participation_seance/indexFront.html.twig", 1);
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
        echo "    <!-- Add this to the <head> section of your HTML document -->
    <style>
        .product-card {
            position: relative;
            display: flex;
            flex-direction: column;
            width: 250px;
            height: 350px;
            margin: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            background-color: #fff;
        }

        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-card .product-details {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 15px;
        }

        .product-card h4 {
            margin: 0;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .product-card p {
            margin: 0;
            font-size: 0.9rem;
        }

        .product-card .price {
            font-size: 1.1rem;
            font-weight: bold;
        }

        .product-card .actions {
            position: absolute;
            bottom: 15px;
            left: 15px;
        }

        .product-card .actions a {
            display: inline-block;
            margin-right: 10px;
            padding: 8px 12px;
            font-size: 0.9rem;
            font-weight: bold;
            color: #fff;
            background-color: #4b49ab;
            border-radius: 5px;
            text-decoration: none;
        }

        .product-card .actions a:hover {
            background-color: #0069d9;
        }
    </style>

    <div class=\"container my-5\">
        <div class=\"row justify-content-center\">
            ";
        // line 73
        if ((twig_length_filter($this->env, (isset($context["participation_seances"]) || array_key_exists("participation_seances", $context) ? $context["participation_seances"] : (function () { throw new RuntimeError('Variable "participation_seances" does not exist.', 73, $this->source); })())) > 0)) {
            // line 74
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["participation_seances"]) || array_key_exists("participation_seances", $context) ? $context["participation_seances"] : (function () { throw new RuntimeError('Variable "participation_seances" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["participationSeance"]) {
                // line 75
                echo "                    <div class=\"product-card\">
                        <img src=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sport.jpg"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participationSeance"], "typeSport", [], "any", false, false, false, 76), "html", null, true);
                echo "\">
                        <div class=\"product-details\">
                            <h4>";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participationSeance"], "typeSport", [], "any", false, false, false, 78), "html", null, true);
                echo "</h4>
                            <p>";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participationSeance"], "seance", [], "any", false, false, false, 79), "html", null, true);
                echo "</p>
                            <p>";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participationSeance"], "participant", [], "any", false, false, false, 80), "html", null, true);
                echo "</p>
                            <div class=\"price\">
                                <p>";
                // line 82
                ((twig_get_attribute($this->env, $this->source, $context["participationSeance"], "dateParticipation", [], "any", false, false, false, 82)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participationSeance"], "dateParticipation", [], "any", false, false, false, 82), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</p>
                            </div>
                            <div class=\"actions\">
                                <a href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_seance_show1", ["id" => twig_get_attribute($this->env, $this->source, $context["participationSeance"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                echo "\">Show</a>
                                <a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_seance_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["participationSeance"], "id", [], "any", false, false, false, 86)]), "html", null, true);
                echo "\" class=\"card-link\">Edit</a>
                                   </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participationSeance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "            ";
        } else {
            // line 92
            echo "                <p>No records found</p>
            ";
        }
        // line 94
        echo "        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10 col-lg-8\"></div>
        </div>
    </div>
    <a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_seance_index1");
        echo "\">back to list</a>
    *";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "participation_seance/indexFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 99,  196 => 94,  192 => 92,  189 => 91,  178 => 86,  174 => 85,  168 => 82,  163 => 80,  159 => 79,  155 => 78,  148 => 76,  145 => 75,  140 => 74,  138 => 73,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
    <!-- Add this to the <head> section of your HTML document -->
    <style>
        .product-card {
            position: relative;
            display: flex;
            flex-direction: column;
            width: 250px;
            height: 350px;
            margin: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            background-color: #fff;
        }

        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-card .product-details {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 15px;
        }

        .product-card h4 {
            margin: 0;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .product-card p {
            margin: 0;
            font-size: 0.9rem;
        }

        .product-card .price {
            font-size: 1.1rem;
            font-weight: bold;
        }

        .product-card .actions {
            position: absolute;
            bottom: 15px;
            left: 15px;
        }

        .product-card .actions a {
            display: inline-block;
            margin-right: 10px;
            padding: 8px 12px;
            font-size: 0.9rem;
            font-weight: bold;
            color: #fff;
            background-color: #4b49ab;
            border-radius: 5px;
            text-decoration: none;
        }

        .product-card .actions a:hover {
            background-color: #0069d9;
        }
    </style>

    <div class=\"container my-5\">
        <div class=\"row justify-content-center\">
            {% if participation_seances|length > 0 %}
                {% for participationSeance in participation_seances %}
                    <div class=\"product-card\">
                        <img src=\"{{ asset('images/sport.jpg') }}\" alt=\"{{ participationSeance.typeSport }}\">
                        <div class=\"product-details\">
                            <h4>{{ participationSeance.typeSport }}</h4>
                            <p>{{ participationSeance.seance }}</p>
                            <p>{{ participationSeance.participant }}</p>
                            <div class=\"price\">
                                <p>{{ participationSeance.dateParticipation ? participationSeance.dateParticipation|date('Y-m-d') : '' }}</p>
                            </div>
                            <div class=\"actions\">
                                <a href=\"{{ path('app_participation_seance_show1', {'id': participationSeance.id}) }}\">Show</a>
                                <a href=\"{{ path('app_participation_seance_edit', {'id': participationSeance.id}) }}\" class=\"card-link\">Edit</a>
                                   </div>
                        </div>
                    </div>
                {% endfor %}
            {% else %}
                <p>No records found</p>
            {% endif %}
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10 col-lg-8\"></div>
        </div>
    </div>
    <a href=\"{{ path('app_participation_seance_index1') }}\">back to list</a>
    *{% endblock %}
", "participation_seance/indexFront.html.twig", "C:\\Users\\HP\\Videos\\FitHub\\templates\\participation_seance\\indexFront.html.twig");
    }
}
