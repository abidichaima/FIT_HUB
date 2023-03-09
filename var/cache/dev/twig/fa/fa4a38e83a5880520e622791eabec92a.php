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

/* video/indexFront.html.twig */
class __TwigTemplate_af3c44e3eef8bca4397d84b870a9d016 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "video/indexFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "video/indexFront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "video/indexFront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .pagination a {
            color: #333;
            text-decoration: none;
            padding: 10px;
            margin-right: 5px;
            border-radius: 5px;
            background-color: #eee;
        }

        .pagination .current {
            color: #fff;
            background-color: #fac031;
        }

        .pagination a:hover {
            background-color: #ccc;
            color: #fff;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "
    <section class=\"video-grid\" style=\"overflow-x: auto; white-space: nowrap;\">

        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 38
            echo "            <article class=\"video-card\" style=\"display: inline-block; margin-right: 25px; margin-bottom: 20px; vertical-align: top; background-color: #333; color: #fff; border-radius: 10px;\">
                <video width=\"320\" height=\"180\" controls style=\"display: block; margin: 10px auto;\">
                    <source src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("videos/" . twig_get_attribute($this->env, $this->source, $context["video"], "video", [], "any", false, false, false, 40))), "html", null, true);
            echo "\">
                    Your browser does not support the video tag.
                </video>
                <div class=\"card-body\" style=\"padding: 20px;\">
                    <h2 class=\"card-title\" style=\"margin: 0; font-size: 24px;\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "title", [], "any", false, false, false, 44), "html", null, true);
            echo "</h2>
                    <p class=\"card-text\" style=\"margin: 10px 0; font-size: 16px;\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "seance", [], "any", false, false, false, 45), "html", null, true);
            echo "</p>
                    <p class=\"card-text\"><small class=\"text-muted\" style=\"color: #ccc;\">";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "createdAt", [], "any", false, false, false, 46), "Y-m-d H:i:s"), "html", null, true);
            echo "</small></p>
                    <div class=\"button-group\" style=\"display: flex; justify-content: space-between; align-items: center; margin-top: 20px; padding: 0 20px;\">
                        <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_showFront", ["id" => twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"btn btn-primary\" style=\"padding: 10px 20px; border-radius: 5px; text-transform: uppercase; font-weight: bold; cursor: pointer; background-color: #fac031;\">Watch now</a>

                    </div>
                </div>
            </article>
            ";
            // line 53
            if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 53) % 3)) {
                // line 54
                echo "                <div style=\"margin-right: 20px;\"></div>
            ";
            }
            // line 56
            echo "        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 57
            echo "            <p>No videos found</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    </section>

    <div>
        <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_new");
        echo "\" class=\"btn btn-primary\" style=\"padding: 10px 20px; border-radius: 5px; text-transform: uppercase; font-weight: bold; cursor: pointer; background-color: #fac031;\">Upload video</a>
    </div>

    <div class=\"pagination\">
        ";
        // line 66
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 66, $this->source); })()));
        echo "
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "video/indexFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 66,  205 => 62,  200 => 59,  193 => 57,  180 => 56,  176 => 54,  174 => 53,  166 => 48,  161 => 46,  157 => 45,  153 => 44,  146 => 40,  142 => 38,  124 => 37,  119 => 34,  109 => 33,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    {{ parent() }}
    <style>
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .pagination a {
            color: #333;
            text-decoration: none;
            padding: 10px;
            margin-right: 5px;
            border-radius: 5px;
            background-color: #eee;
        }

        .pagination .current {
            color: #fff;
            background-color: #fac031;
        }

        .pagination a:hover {
            background-color: #ccc;
            color: #fff;
        }
    </style>
{% endblock %}

{% block body %}

    <section class=\"video-grid\" style=\"overflow-x: auto; white-space: nowrap;\">

        {% for video in videos %}
            <article class=\"video-card\" style=\"display: inline-block; margin-right: 25px; margin-bottom: 20px; vertical-align: top; background-color: #333; color: #fff; border-radius: 10px;\">
                <video width=\"320\" height=\"180\" controls style=\"display: block; margin: 10px auto;\">
                    <source src=\"{{ asset('videos/' ~ video.video) }}\">
                    Your browser does not support the video tag.
                </video>
                <div class=\"card-body\" style=\"padding: 20px;\">
                    <h2 class=\"card-title\" style=\"margin: 0; font-size: 24px;\">{{ video.title }}</h2>
                    <p class=\"card-text\" style=\"margin: 10px 0; font-size: 16px;\">{{ video.seance }}</p>
                    <p class=\"card-text\"><small class=\"text-muted\" style=\"color: #ccc;\">{{ video.createdAt|date('Y-m-d H:i:s') }}</small></p>
                    <div class=\"button-group\" style=\"display: flex; justify-content: space-between; align-items: center; margin-top: 20px; padding: 0 20px;\">
                        <a href=\"{{ path('app_video_showFront', {'id': video.id}) }}\" class=\"btn btn-primary\" style=\"padding: 10px 20px; border-radius: 5px; text-transform: uppercase; font-weight: bold; cursor: pointer; background-color: #fac031;\">Watch now</a>

                    </div>
                </div>
            </article>
            {% if loop.index is divisible by 3 %}
                <div style=\"margin-right: 20px;\"></div>
            {% endif %}
        {% else %}
            <p>No videos found</p>
        {% endfor %}
    </section>

    <div>
        <a href=\"{{ path('app_video_new')}}\" class=\"btn btn-primary\" style=\"padding: 10px 20px; border-radius: 5px; text-transform: uppercase; font-weight: bold; cursor: pointer; background-color: #fac031;\">Upload video</a>
    </div>

    <div class=\"pagination\">
        {{ knp_pagination_render(videos) }}
    </div>

{% endblock %}
", "video/indexFront.html.twig", "C:\\Users\\HP\\Videos\\FitHub\\templates\\video\\indexFront.html.twig");
    }
}
