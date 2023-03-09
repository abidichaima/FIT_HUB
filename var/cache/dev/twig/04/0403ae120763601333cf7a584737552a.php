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

/* video/showFront.html.twig */
class __TwigTemplate_39c7454231d4c1aa149d2ac2459819f1 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "video/showFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "video/showFront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "video/showFront.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"card mb-3\">
                    <div class=\"embed-responsive embed-responsive-16by9\">
                        ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 11, $this->source); })()), "video", [], "any", false, false, false, 11)) {
            // line 12
            echo "                            <video width=\"426\" height=\"240\" controls>
                                <source src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("videos/" . twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 13, $this->source); })()), "video", [], "any", false, false, false, 13))), "html", null, true);
            echo "\" type=\"video/mp4\">
                                Your browser does not support the video tag.
                            </video>

                        ";
        }
        // line 18
        echo "                    </div>
                    <div>
                   <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Edit</a></div>
                    <div class=\"card-body\">
                        <h2 class=\"card-title\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), "html", null, true);
        echo "</h2>
                        <p class=\"card-text\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 23, $this->source); })()), "seance", [], "any", false, false, false, 23), "html", null, true);
        echo "</p>
                        <p class=\"card-text\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>
                            </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <h5>Related Videos</h5>
                <ul class=\"list-unstyled\">
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["relatedVideos"]) || array_key_exists("relatedVideos", $context) ? $context["relatedVideos"] : (function () { throw new RuntimeError('Variable "relatedVideos" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["relatedVideo"]) {
            // line 32
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_showFront", ["id" => twig_get_attribute($this->env, $this->source, $context["relatedVideo"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["relatedVideo"], "title", [], "any", false, false, false, 32), "html", null, true);
            echo "</a></li>
                        <li>
                            <video width=\"426\" height=\"240\" controls>
                                <source src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("videos/" . twig_get_attribute($this->env, $this->source, $context["relatedVideo"], "video", [], "any", false, false, false, 35))), "html", null, true);
            echo "\" type=\"video/mp4\">
                                Your browser does not support the video tag.
                            </video>

                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['relatedVideo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </ul>
            </div>
        </div>
    </div>
    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_index1");
        echo "\" class=\"btn btn-secondary\">Back to list</a>


    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "video/showFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 45,  160 => 41,  148 => 35,  139 => 32,  135 => 31,  125 => 24,  121 => 23,  117 => 22,  112 => 20,  108 => 18,  100 => 13,  97 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ video.title }}{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"card mb-3\">
                    <div class=\"embed-responsive embed-responsive-16by9\">
                        {% if video.video %}
                            <video width=\"426\" height=\"240\" controls>
                                <source src=\"{{ asset('videos/' ~ video.video) }}\" type=\"video/mp4\">
                                Your browser does not support the video tag.
                            </video>

                        {% endif %}
                    </div>
                    <div>
                   <a href=\"{{ path('app_video_edit', {'id': video.id}) }}\" class=\"btn btn-primary\">Edit</a></div>
                    <div class=\"card-body\">
                        <h2 class=\"card-title\">{{ video.title }}</h2>
                        <p class=\"card-text\">{{ video.seance }}</p>
                        <p class=\"card-text\">{{ video.description }}</p>
                            </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <h5>Related Videos</h5>
                <ul class=\"list-unstyled\">
                    {% for relatedVideo in relatedVideos %}
                        <li><a href=\"{{ path('app_video_showFront', {'id': relatedVideo.id}) }}\">{{ relatedVideo.title }}</a></li>
                        <li>
                            <video width=\"426\" height=\"240\" controls>
                                <source src=\"{{ asset('videos/' ~ relatedVideo.video) }}\" type=\"video/mp4\">
                                Your browser does not support the video tag.
                            </video>

                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
    <a href=\"{{ path('app_video_index1') }}\" class=\"btn btn-secondary\">Back to list</a>


    </div>
{% endblock %}
", "video/showFront.html.twig", "C:\\Users\\HP\\Videos\\FitHub\\templates\\video\\showFront.html.twig");
    }
}
