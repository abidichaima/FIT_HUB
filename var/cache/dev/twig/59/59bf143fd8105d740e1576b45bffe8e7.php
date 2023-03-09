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

/* seance/show.html.twig */
class __TwigTemplate_165f0c826eda33d64aec51ac68db5c4a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'html' => [$this, 'block_html'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 46
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seance/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seance/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "seance/show.html.twig", 46);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 47
    public function block_html($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "html"));

        // line 48
        echo "<!DOCTYPE html>
<head>
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">


    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
        }

        /* Style the outer container */
        .testbox {
            max-width: 800px;
            margin: 0 auto;
        }

        /* Style the inner container */
        .testbox > div {
            padding: 20px;
            border-radius: 6px;
            background: #fff;
            box-shadow: 0 0 8px #006622;
        }

        /* Style the banner */
        .banner h1 {
            margin: 0;
            font-size: 32px;
            font-weight: bold;
            color: #006622;
            text-align: center;
        }

        /* Style the table */
        .table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #006622;
        }

        /* Style the table headings */
        .table th {
            background-color: #006622;
            color: #fff;
            font-weight: bold;
            text-align: left;
            padding: 10px;
        }

        /* Style the table data */
        .table td {
            border: 1px solid #4b49ab;
            padding: 10px;
        }

        /* Style the delete and edit buttons */
        .btn {
            background-color: #4b49ab;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            margin: 10px;
            cursor: pointer;
        }

        /* Style the back to list button */
        .btn-back {
            background-color: #fff;
            color: #4b49ab;
            border: 2px solid #4b49ab;
            padding: 10px 20px;
            border-radius: 6px;
            margin: 10px;
            cursor: pointer;
        }

        /* Style the legend */
        legend {
            font-weight: bold;
            color: #006622;
            font-size: 20px;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #4b49ab;
            border-radius: 6px;
        }

        /* Style the columns */
        .columns {
            display: flex;
            flex-wrap: wrap;
        }

        .columns > * {
            flex: 1 1 50%;
            padding: 10px;
            box-sizing: border-box;
        }

        /* Style the title */
        .columns h1 {
            font-size: 24px;
            font-weight: bold;
            color: #4b49ab;
            margin: 0;
            margin-bottom: 20px;
        }

    </style>
</head>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 162
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 163
        echo "<body>
<div class=\"testbox\">
    <div style=\" width: 100%;
            padding: 20px;
            border-radius: 6px;
            background: #fff;
            box-shadow: 0 0 8px #4b49ab;\">

        <div class=\"banner\">
            <h1>
        </div>
        <br/>
        <fieldset>

            <div class=\"colums\">

                <table class=\"table\" border=\"5\">
                    <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 183, $this->source); })()), "id", [], "any", false, false, false, 183), "html", null, true);
        echo "</td>


                    </tr>

                    <tr>
                        <th>Titre de la séance</th>-
                        <td>";
        // line 190
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 190, $this->source); })()), "titreSeance", [], "any", false, false, false, 190), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Description de la séance</th>
                        <td>";
        // line 194
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 194, $this->source); })()), "descriptionSeance", [], "any", false, false, false, 194), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nombre des participants</th>
                        <td>";
        // line 198
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 198, $this->source); })()), "nbParticipantSeance", [], "any", false, false, false, 198), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <th>Date_Debut</th>
                        <td>";
        // line 203
        ((twig_get_attribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 203, $this->source); })()), "dateDebutSeance", [], "any", false, false, false, 203)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 203, $this->source); })()), "dateDebutSeance", [], "any", false, false, false, 203), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                    </tr>
                    <tr>
                        <th>Date_Fin</th>
                        <td>";
        // line 207
        ((twig_get_attribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 207, $this->source); })()), "dateFinSeance", [], "any", false, false, false, 207)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 207, $this->source); })()), "dateFinSeance", [], "any", false, false, false, 207), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nom et Prenom du coach</th>
                        <td>";
        // line 211
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 211, $this->source); })()), "coach", [], "any", false, false, false, 211), "html", null, true);
        echo "</td>
                    </tr>

                    <tr> <th>Delete</th>
                        <td>
                            ";
        // line 216
        echo twig_include($this->env, $context, "seance/_delete_form.html.twig");
        echo "
                            <a href=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["seance"]) || array_key_exists("seance", $context) ? $context["seance"] : (function () { throw new RuntimeError('Variable "seance" does not exist.', 217, $this->source); })()), "id", [], "any", false, false, false, 217)]), "html", null, true);
        echo "\"><button class=\"btn\">Edit</button></a>
                        </td>

                    </tbody>
                </table>

                <a href=\"";
        // line 223
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_index1");
        echo "\"><button class=\"btn\">Back to list</button></a>

            </div>
        </fieldset>
    </div>



</div>
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "seance/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 223,  282 => 217,  278 => 216,  270 => 211,  263 => 207,  256 => 203,  248 => 198,  241 => 194,  234 => 190,  224 => 183,  202 => 163,  192 => 162,  69 => 48,  59 => 47,  36 => 46,);
    }

    public function getSourceContext()
    {
        return new Source("
{#<!DOCTYPE html>

<title>Seance</title>

{% block body %}
    <h1>Seance</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ seance.id }}</td>
            </tr>
            <tr>
                <th>TitreSeance</th>
                <td>{{ seance.titreSeance }}</td>
            </tr>
            <tr>
                <th>DescriptionSeance</th>
                <td>{{ seance.descriptionSeance }}</td>
            </tr>
            <tr>
                <th>NbParticipantSeance</th>
                <td>{{ seance.nbParticipantSeance }}</td>
            </tr>
            <tr>
                <th>DateDebutSeance</th>
                <td>{{ seance.dateDebutSeance ? seance.dateDebutSeance|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>DateFinSeance</th>
                <td>{{ seance.dateFinSeance ? seance.dateFinSeance|date('Y-m-d') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_seance_index') }}\">back to list</a>

    <a href=\"{{ path('app_seance_edit', {'id': seance.id}) }}\">edit</a>


    {{ include('seance/_delete_form.html.twig') }}
{% endblock %}
#}
{% extends 'base.html.twig' %}
{% block html %}
<!DOCTYPE html>
<head>
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">


    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
        }

        /* Style the outer container */
        .testbox {
            max-width: 800px;
            margin: 0 auto;
        }

        /* Style the inner container */
        .testbox > div {
            padding: 20px;
            border-radius: 6px;
            background: #fff;
            box-shadow: 0 0 8px #006622;
        }

        /* Style the banner */
        .banner h1 {
            margin: 0;
            font-size: 32px;
            font-weight: bold;
            color: #006622;
            text-align: center;
        }

        /* Style the table */
        .table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #006622;
        }

        /* Style the table headings */
        .table th {
            background-color: #006622;
            color: #fff;
            font-weight: bold;
            text-align: left;
            padding: 10px;
        }

        /* Style the table data */
        .table td {
            border: 1px solid #4b49ab;
            padding: 10px;
        }

        /* Style the delete and edit buttons */
        .btn {
            background-color: #4b49ab;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            margin: 10px;
            cursor: pointer;
        }

        /* Style the back to list button */
        .btn-back {
            background-color: #fff;
            color: #4b49ab;
            border: 2px solid #4b49ab;
            padding: 10px 20px;
            border-radius: 6px;
            margin: 10px;
            cursor: pointer;
        }

        /* Style the legend */
        legend {
            font-weight: bold;
            color: #006622;
            font-size: 20px;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #4b49ab;
            border-radius: 6px;
        }

        /* Style the columns */
        .columns {
            display: flex;
            flex-wrap: wrap;
        }

        .columns > * {
            flex: 1 1 50%;
            padding: 10px;
            box-sizing: border-box;
        }

        /* Style the title */
        .columns h1 {
            font-size: 24px;
            font-weight: bold;
            color: #4b49ab;
            margin: 0;
            margin-bottom: 20px;
        }

    </style>
</head>
{% endblock %}
{% block body %}
<body>
<div class=\"testbox\">
    <div style=\" width: 100%;
            padding: 20px;
            border-radius: 6px;
            background: #fff;
            box-shadow: 0 0 8px #4b49ab;\">

        <div class=\"banner\">
            <h1>
        </div>
        <br/>
        <fieldset>

            <div class=\"colums\">

                <table class=\"table\" border=\"5\">
                    <tbody>
                    <tr>
                        <th>Id</th>
                        <td>{{ seance.id }}</td>


                    </tr>

                    <tr>
                        <th>Titre de la séance</th>-
                        <td>{{ seance.titreSeance}}</td>
                    </tr>
                    <tr>
                        <th>Description de la séance</th>
                        <td>{{ seance.descriptionSeance}}</td>
                    </tr>
                    <tr>
                        <th>Nombre des participants</th>
                        <td>{{ seance.nbParticipantSeance}}</td>
                    </tr>

                    <tr>
                        <th>Date_Debut</th>
                        <td>{{ seance.dateDebutSeance ? seance.dateDebutSeance|date('Y-m-d') : '' }}</td>
                    </tr>
                    <tr>
                        <th>Date_Fin</th>
                        <td>{{ seance.dateFinSeance ? seance.dateFinSeance|date('Y-m-d') : '' }}</td>
                    </tr>
                    <tr>
                        <th>Nom et Prenom du coach</th>
                        <td>{{ seance.coach }}</td>
                    </tr>

                    <tr> <th>Delete</th>
                        <td>
                            {{ include('seance/_delete_form.html.twig') }}
                            <a href=\"{{ path('app_seance_edit', {'id': seance.id}) }}\"><button class=\"btn\">Edit</button></a>
                        </td>

                    </tbody>
                </table>

                <a href=\"{{ path('app_seance_index1') }}\"><button class=\"btn\">Back to list</button></a>

            </div>
        </fieldset>
    </div>



</div>
</body>
{% endblock %}
", "seance/show.html.twig", "C:\\Users\\HP\\Videos\\FitHub\\templates\\seance\\show.html.twig");
    }
}
