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

/* seance/indexFront.html.twig */
class __TwigTemplate_9c5caecebbe37aaa940dbc65009e53e4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seance/indexFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seance/indexFront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "seance/indexFront.html.twig", 1);
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
        echo "    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <div class=\"d-flex justify-content-end mb-4\">
                    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_new1");
        echo "\" class=\"btn btn-success\">Create New</a>
                </div>

                <hr>
                ";
        // line 12
        if (twig_test_empty((isset($context["seances"]) || array_key_exists("seances", $context) ? $context["seances"] : (function () { throw new RuntimeError('Variable "seances" does not exist.', 12, $this->source); })()))) {
            // line 13
            echo "                    <p>No records found.</p>
                ";
        } else {
            // line 15
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["seances"]) || array_key_exists("seances", $context) ? $context["seances"] : (function () { throw new RuntimeError('Variable "seances" does not exist.', 15, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["seance"]) {
                // line 16
                echo "                        <div class=\"card mb-5\">
                            <div class=\"card-body\">
                                <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_show", ["id" => twig_get_attribute($this->env, $this->source, $context["seance"], "id", [], "any", false, false, false, 18)]), "html", null, true);
                echo "\">
                                    <h2 class=\"card-title\">";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["seance"], "titreSeance", [], "any", false, false, false, 19), "html", null, true);
                echo "</h2>
                                    <p class=\"card-text\">";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["seance"], "descriptionSeance", [], "any", false, false, false, 20), "html", null, true);
                echo "</p>
                                    <p class=\"card-text\">";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["seance"], "coach", [], "any", false, false, false, 21), "html", null, true);
                echo "</p>
                                    <p class=\"card-text\"><small class=\"text-muted\">Starts: ";
                // line 22
                ((twig_get_attribute($this->env, $this->source, $context["seance"], "dateDebutSeance", [], "any", false, false, false, 22)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["seance"], "dateDebutSeance", [], "any", false, false, false, 22), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</small></p>
                                    <p class=\"card-text\"><small class=\"text-muted\">Ends: ";
                // line 23
                ((twig_get_attribute($this->env, $this->source, $context["seance"], "dateFinSeance", [], "any", false, false, false, 23)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["seance"], "dateFinSeance", [], "any", false, false, false, 23), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</small></p>
                                </a>
                            </div>
                            <div class=\"card-footer text-muted d-flex justify-content-end\">
                                <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_edit1", ["id" => twig_get_attribute($this->env, $this->source, $context["seance"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                echo "\" class=\"btn btn-primary mr-2\">Edit</a>
                                ";
                // line 28
                echo twig_include($this->env, $context, "seance/_delete_form.html.twig", ["id" => twig_get_attribute($this->env, $this->source, $context["seance"], "id", [], "any", false, false, false, 28)]);
                echo "
                            </div>
                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                ";
        }
        // line 33
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "seance/indexFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 33,  158 => 32,  140 => 28,  136 => 27,  129 => 23,  125 => 22,  121 => 21,  117 => 20,  113 => 19,  109 => 18,  105 => 16,  87 => 15,  83 => 13,  81 => 12,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <div class=\"d-flex justify-content-end mb-4\">
                    <a href=\"{{ path('app_seance_new1') }}\" class=\"btn btn-success\">Create New</a>
                </div>

                <hr>
                {% if seances is empty %}
                    <p>No records found.</p>
                {% else %}
                    {% for seance in seances %}
                        <div class=\"card mb-5\">
                            <div class=\"card-body\">
                                <a href=\"{{ path('app_seance_show', {'id': seance.id}) }}\">
                                    <h2 class=\"card-title\">{{ seance.titreSeance }}</h2>
                                    <p class=\"card-text\">{{ seance.descriptionSeance }}</p>
                                    <p class=\"card-text\">{{ seance.coach }}</p>
                                    <p class=\"card-text\"><small class=\"text-muted\">Starts: {{ seance.dateDebutSeance ? seance.dateDebutSeance|date('Y-m-d') : '' }}</small></p>
                                    <p class=\"card-text\"><small class=\"text-muted\">Ends: {{ seance.dateFinSeance ? seance.dateFinSeance|date('Y-m-d') : '' }}</small></p>
                                </a>
                            </div>
                            <div class=\"card-footer text-muted d-flex justify-content-end\">
                                <a href=\"{{ path('app_seance_edit1', {'id': seance.id}) }}\" class=\"btn btn-primary mr-2\">Edit</a>
                                {{ include('seance/_delete_form.html.twig', {'id': seance.id}) }}
                            </div>
                        </div>
                    {% endfor %}
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}



", "seance/indexFront.html.twig", "C:\\Users\\HP\\Videos\\FitHub\\templates\\seance\\indexFront.html.twig");
    }
}
