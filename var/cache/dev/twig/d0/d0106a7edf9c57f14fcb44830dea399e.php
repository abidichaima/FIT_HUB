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

/* seance/index.html.twig */
class __TwigTemplate_8a53efb03faa773a72d02f8e4d98ffbf extends Template
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
        return "baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seance/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seance/index.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "seance/index.html.twig", 1);
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

                <hr>
                ";
        // line 9
        if (twig_test_empty((isset($context["seances"]) || array_key_exists("seances", $context) ? $context["seances"] : (function () { throw new RuntimeError('Variable "seances" does not exist.', 9, $this->source); })()))) {
            // line 10
            echo "                    <p>No records found.</p>
                ";
        } else {
            // line 12
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["seances"]) || array_key_exists("seances", $context) ? $context["seances"] : (function () { throw new RuntimeError('Variable "seances" does not exist.', 12, $this->source); })()));
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
                // line 13
                echo "                        <div class=\"card mb-5\">
                            <div class=\"card-body\">
                                <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_showBack", ["id" => twig_get_attribute($this->env, $this->source, $context["seance"], "id", [], "any", false, false, false, 15)]), "html", null, true);
                echo "\">
                                    <h2 class=\"card-title\">";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["seance"], "titreSeance", [], "any", false, false, false, 16), "html", null, true);
                echo "</h2>
                                    <p class=\"card-text\">";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["seance"], "descriptionSeance", [], "any", false, false, false, 17), "html", null, true);
                echo "</p>
                                    <p class=\"card-text\">";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["seance"], "coach", [], "any", false, false, false, 18), "html", null, true);
                echo "</p>
                                    <p class=\"card-text\"><small class=\"text-muted\">Starts: ";
                // line 19
                ((twig_get_attribute($this->env, $this->source, $context["seance"], "dateDebutSeance", [], "any", false, false, false, 19)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["seance"], "dateDebutSeance", [], "any", false, false, false, 19), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                echo "</small></p>
                                    <p class=\"card-text\"><small class=\"text-muted\">Ends: ";
                // line 20
                ((twig_get_attribute($this->env, $this->source, $context["seance"], "dateFinSeance", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["seance"], "dateFinSeance", [], "any", false, false, false, 20), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                echo "</small></p>
                                </a>
                            </div>
                            <div class=\"card-footer text-muted d-flex justify-content-end\">
                                        ";
                // line 24
                echo twig_include($this->env, $context, "seance/_delete_form.html.twig", ["id" => twig_get_attribute($this->env, $this->source, $context["seance"], "id", [], "any", false, false, false, 24)]);
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
            // line 28
            echo "                ";
        }
        // line 29
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "seance/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 29,  148 => 28,  130 => 24,  123 => 20,  119 => 19,  115 => 18,  111 => 17,  107 => 16,  103 => 15,  99 => 13,  81 => 12,  77 => 10,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseback.html.twig' %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">

                <hr>
                {% if seances is empty %}
                    <p>No records found.</p>
                {% else %}
                    {% for seance in seances %}
                        <div class=\"card mb-5\">
                            <div class=\"card-body\">
                                <a href=\"{{ path('app_seance_showBack', {'id': seance.id}) }}\">
                                    <h2 class=\"card-title\">{{ seance.titreSeance }}</h2>
                                    <p class=\"card-text\">{{ seance.descriptionSeance }}</p>
                                    <p class=\"card-text\">{{ seance.coach }}</p>
                                    <p class=\"card-text\"><small class=\"text-muted\">Starts: {{ seance.dateDebutSeance ? seance.dateDebutSeance|date('Y-m-d H:i:s') : '' }}</small></p>
                                    <p class=\"card-text\"><small class=\"text-muted\">Ends: {{ seance.dateFinSeance ? seance.dateFinSeance|date('Y-m-d H:i:s') : '' }}</small></p>
                                </a>
                            </div>
                            <div class=\"card-footer text-muted d-flex justify-content-end\">
                                        {{ include('seance/_delete_form.html.twig', {'id': seance.id}) }}
                            </div>
                        </div>
                    {% endfor %}
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}

", "seance/index.html.twig", "C:\\Users\\HP\\Videos\\FitHub\\templates\\seance\\index.html.twig");
    }
}
