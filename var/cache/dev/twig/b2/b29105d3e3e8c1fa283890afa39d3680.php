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
class __TwigTemplate_5fcaa3e6c96d428344eec5f5809cdf2d extends Template
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
            'modal' => [$this, 'block_modal'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seance/indexFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seance/indexFront.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        // line 14
        $this->displayBlock('modal', $context, $blocks);
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 152
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container mt-4\">
        <div class=\"card\">
            <div class=\"card-header\">
                Seances
            </div>
            <div class=\"card-body\">
                <div id=\"calendar\"></div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        // line 15
        echo "    <div class=\"modal fade\" id=\"seanceModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"seanceModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"seanceModalLabel\">Seance Details</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div id=\"seanceDetails\"></div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 33
        echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css\" />
    <style>.seance-details {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    padding: 10px;
    position: absolute;
    top: 50px;
    left: 10px;
    z-index: 999;
    max-width: 300px;
    }</style>
    <style>.btn-danger {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .delete-seance {
            margin-left: 10px;
        }</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js\"></script>
    <script>
        \$(document).ready(function() {
            // Define an array of colors
            var colors = ['#FF5733', '#DAF7A6', '#C70039', '#FFC300', '#900C3F', '#4CAF50', '#3F51B5', '#2196F3'];

            \$('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                height: 'auto',
                events: {
                    url: '";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_calendar");
        echo "',
                    type: 'GET',
                    error: function() {
                        alert('Failed to load events');
                    }
                },
                eventClick: function(calEvent, jsEvent, view) {
                    // Hide any previously displayed details
                    \$('.seance-details').hide();

                    // Show details for the clicked seance
                    var seanceDetails = \$('#seance-' + calEvent.id);
                    seanceDetails.show();

                    // Scroll to the details section
                    \$('html, body').animate({
                        scrollTop: seanceDetails.offset().top
                    }, 500);

                    // Remove any previously added delete button
                    \$('.delete-seance').remove();

                    // Add a delete button to the seance details section
                    var deleteButton = '<button class=\"btn btn-danger delete-seance\" data-id=\"' + calEvent.id + '\">Delete</button>';
                    seanceDetails.append(deleteButton);

                    // Bind a click event to the delete button
                    \$('.delete-seance').click(function() {
                        var seanceId = \$(this).data('id');

                        \$.ajax({
                            url: '";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_seance_deleteC", ["id" => 0]);
        echo "'.replace('0', seanceId),
                            method: 'DELETE',
                            success: function(response) {
                                // Remove the seance details section
                                seanceDetails.remove();

                                // Refresh the calendar
                                \$('#calendar').fullCalendar('refetchEvents');
                            },
                            error: function() {
                                alert('Failed to delete seance');
                            }
                        });
                    });
                },

                eventRender: function(event, element) {
                    // Assign a random color to the event
                    var color = colors[Math.floor(Math.random() * colors.length)];
                    element.css('background-color', color);

                    // Add tooltip to show description, coach, and dates on mouseover
                    element.attr('data-toggle', 'tooltip');
                    element.attr('data-html', 'true');
                    element.attr('title', 'Start Time: ' + moment(event.start).format('YYYY-MM-DD HH:mm:ss') + '\\nEnd Time: ' + moment(event.end).format('YYYY-MM-DD HH:mm:ss') + '\\nDescription: ' + event.description + '\\nCoach: ' + event.coach);

                    // Create a hidden section to display seance details
                    var seanceDetails = '<div id=\"seance-' + event.id + '\" class=\"seance-details\" style=\"display: none;\">';
                    seanceDetails += '<strong>Seance de ' + event.title + '</strong><br>';
                    seanceDetails += '<strong>Description:</strong> ' + event.description + '<br>';
                    seanceDetails += '<strong>Coach:</strong> ' + event.coach + '<br>';
                    seanceDetails += '<strong>Date de début:</strong> ' + moment(event.start).format('YYYY-MM-DD HH:mm:ss') + '<br>';
                    seanceDetails += '<strong>Date de fin:</strong> ' + moment(event.end).format('YYYY-MM-DD HH:mm:ss') + '<br>';
                    seanceDetails += '</div>';
                    \$('body').append(seanceDetails);
                },

            });

            // Activate tooltips
            \$('[data-toggle=\"tooltip\"]').tooltip();
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "seance/indexFront.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  247 => 108,  213 => 77,  195 => 61,  185 => 60,  150 => 33,  140 => 32,  115 => 15,  105 => 14,  85 => 3,  75 => 2,  64 => 152,  62 => 60,  59 => 59,  57 => 32,  54 => 31,  52 => 14,  50 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block body %}
    <div class=\"container mt-4\">
        <div class=\"card\">
            <div class=\"card-header\">
                Seances
            </div>
            <div class=\"card-body\">
                <div id=\"calendar\"></div>
            </div>
        </div>
    </div>
{% endblock %}
{% block modal %}
    <div class=\"modal fade\" id=\"seanceModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"seanceModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"seanceModalLabel\">Seance Details</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div id=\"seanceDetails\"></div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css\" />
    <style>.seance-details {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    padding: 10px;
    position: absolute;
    top: 50px;
    left: 10px;
    z-index: 999;
    max-width: 300px;
    }</style>
    <style>.btn-danger {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .delete-seance {
            margin-left: 10px;
        }</style>
{% endblock %}

{% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js\"></script>
    <script>
        \$(document).ready(function() {
            // Define an array of colors
            var colors = ['#FF5733', '#DAF7A6', '#C70039', '#FFC300', '#900C3F', '#4CAF50', '#3F51B5', '#2196F3'];

            \$('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                height: 'auto',
                events: {
                    url: '{{ path('app_seance_calendar') }}',
                    type: 'GET',
                    error: function() {
                        alert('Failed to load events');
                    }
                },
                eventClick: function(calEvent, jsEvent, view) {
                    // Hide any previously displayed details
                    \$('.seance-details').hide();

                    // Show details for the clicked seance
                    var seanceDetails = \$('#seance-' + calEvent.id);
                    seanceDetails.show();

                    // Scroll to the details section
                    \$('html, body').animate({
                        scrollTop: seanceDetails.offset().top
                    }, 500);

                    // Remove any previously added delete button
                    \$('.delete-seance').remove();

                    // Add a delete button to the seance details section
                    var deleteButton = '<button class=\"btn btn-danger delete-seance\" data-id=\"' + calEvent.id + '\">Delete</button>';
                    seanceDetails.append(deleteButton);

                    // Bind a click event to the delete button
                    \$('.delete-seance').click(function() {
                        var seanceId = \$(this).data('id');

                        \$.ajax({
                            url: '{{ path('app_seance_deleteC', {'id': 0}) }}'.replace('0', seanceId),
                            method: 'DELETE',
                            success: function(response) {
                                // Remove the seance details section
                                seanceDetails.remove();

                                // Refresh the calendar
                                \$('#calendar').fullCalendar('refetchEvents');
                            },
                            error: function() {
                                alert('Failed to delete seance');
                            }
                        });
                    });
                },

                eventRender: function(event, element) {
                    // Assign a random color to the event
                    var color = colors[Math.floor(Math.random() * colors.length)];
                    element.css('background-color', color);

                    // Add tooltip to show description, coach, and dates on mouseover
                    element.attr('data-toggle', 'tooltip');
                    element.attr('data-html', 'true');
                    element.attr('title', 'Start Time: ' + moment(event.start).format('YYYY-MM-DD HH:mm:ss') + '\\nEnd Time: ' + moment(event.end).format('YYYY-MM-DD HH:mm:ss') + '\\nDescription: ' + event.description + '\\nCoach: ' + event.coach);

                    // Create a hidden section to display seance details
                    var seanceDetails = '<div id=\"seance-' + event.id + '\" class=\"seance-details\" style=\"display: none;\">';
                    seanceDetails += '<strong>Seance de ' + event.title + '</strong><br>';
                    seanceDetails += '<strong>Description:</strong> ' + event.description + '<br>';
                    seanceDetails += '<strong>Coach:</strong> ' + event.coach + '<br>';
                    seanceDetails += '<strong>Date de début:</strong> ' + moment(event.start).format('YYYY-MM-DD HH:mm:ss') + '<br>';
                    seanceDetails += '<strong>Date de fin:</strong> ' + moment(event.end).format('YYYY-MM-DD HH:mm:ss') + '<br>';
                    seanceDetails += '</div>';
                    \$('body').append(seanceDetails);
                },

            });

            // Activate tooltips
            \$('[data-toggle=\"tooltip\"]').tooltip();
        });
    </script>
{% endblock %}

", "seance/indexFront.html.twig", "C:\\Users\\HP\\Videos\\FitHub\\templates\\seance\\indexFront.html.twig");
    }
}
