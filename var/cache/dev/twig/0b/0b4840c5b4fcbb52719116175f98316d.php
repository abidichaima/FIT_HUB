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

/* base.html.twig */
class __TwigTemplate_d37d1c3621cb1b31c9f974580366ac09 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'menu' => [$this, 'block_menu'],
            'hero' => [$this, 'block_hero'],
            'feature' => [$this, 'block_feature'],
            'about' => [$this, 'block_about'],
            'class' => [$this, 'block_class'],
            'schedule' => [$this, 'block_schedule'],
            'contact' => [$this, 'block_contact'],
            'footer' => [$this, 'block_footer'],
            'scripts' => [$this, 'block_scripts'],
            'modalsign' => [$this, 'block_modalsign'],
            'modal1' => [$this, 'block_modal1'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 32
        echo "</head>
<body data-spy=\"scroll\" data-target=\"#navbarNav\" data-offset=\"50\">
";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 590
        echo "</body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "        ";
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
        <meta name=\"description\" content=\"\">
        <meta name=\"keywords\" content=\"\">
        <meta name=\"author\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


        ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "        <!--
        Tooplate 2119 Gymso Fitness
        https://www.tooplate.com/view/2119-gymso-fitness
        -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "            <title>Fithub</title>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/aos.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

            <!-- MAIN CSS -->
            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/tooplate-gymso-style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "
    <!-- MENU BAR -->
";
        // line 37
        $this->displayBlock('menu', $context, $blocks);
        // line 95
        $this->displayBlock('hero', $context, $blocks);
        // line 122
        $this->displayBlock('feature', $context, $blocks);
        // line 158
        $this->displayBlock('about', $context, $blocks);
        // line 211
        $this->displayBlock('class', $context, $blocks);
        // line 275
        $this->displayBlock('schedule', $context, $blocks);
        // line 385
        $this->displayBlock('contact', $context, $blocks);
        // line 424
        $this->displayBlock('footer', $context, $blocks);
        // line 447
        echo "    ";
        // line 491
        $this->displayBlock('scripts', $context, $blocks);
        // line 499
        echo "
";
        // line 500
        $this->displayBlock('modalsign', $context, $blocks);
        // line 537
        echo "
";
        // line 538
        $this->displayBlock('modal1', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 38
        echo "    <nav class=\"navbar navbar-expand-lg fixed-top\">
        <div class=\"container\">
            <img src=\"images/logo.png\" id=\"logo\" class=\"img-fluid\" alt=\"Class\">

            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\"
                    aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ml-lg-auto\">
                    <li class=\"nav-item\">
                        <a href=\"#home\" class=\"nav-link smoothScroll\">Home</a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"#class\" class=\"nav-link smoothScroll\">Classes</a>
                    </li>

                    <li class=\"nav-item\">
                        ";
        // line 59
        echo "                        <div class=\"dropdown\">
                                <buton class=\"dropbtn\">Schedules
                                    <i class =\"fa fa-caret-down\"></i></buton>
                                <a href=\"#\">Book with a nutritionist</a>
                                <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_seance_new");
        echo "\" class=\"btn custom-btn bg-color mt-3\" >Partcicpate</a>
                                <a href=\"/seance/list\" class=\"btn custom-btn bg-color mt-3\" >Seances</a>
                            </div>
                        </div>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"#schedule\" class=\"nav-link smoothScroll\">Event</a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"#schedule\" class=\"nav-link smoothScroll\">Blog</a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"#contact\" class=\"nav-link smoothScroll\">Prices</a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"#contact\" class=\"nav-link smoothScroll\">Contact</a>
                    </li>
                </ul>

                <ul class=\"social-icon ml-lg-3\">
                    <li><a href=\"https://fb.com/tooplate\" class=\"fa fa-facebook\"></a></li>
                    <li><a href=\"#\" class=\"fa fa-instagram\"></a></li>
                </ul>
            </div>

        </div>
    </nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 95
    public function block_hero($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero"));

        // line 96
        echo "    <!-- HERO -->
    <section class=\"hero d-flex flex-column justify-content-center align-items-center\" id=\"home\">

        <div class=\"bg-overlay\"></div>

        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-8 col-md-10 mx-auto col-12\">
                    <div class=\"hero-text mt-5 text-center\">

                        <h6 data-aos=\"fade-up\" data-aos-delay=\"300\">new way to build a healthy lifestyle!</h6>

                        <h1 class=\"text-white\" data-aos=\"fade-up\" data-aos-delay=\"500\">Upgrade your body at Fithub</h1>

                        <a href=\"#feature\" class=\"btn custom-btn mt-3\" data-aos=\"fade-up\" data-aos-delay=\"600\">Get started</a>

                        <a href=\"#about\" class=\"btn custom-btn bordered mt-3\" data-aos=\"fade-up\" data-aos-delay=\"700\">learn more</a>

                    </div>
                </div>

            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 122
    public function block_feature($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "feature"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "feature"));

        // line 123
        echo "    <section class=\"feature\" id=\"feature\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12\">
                    <h2 class=\"mb-3 text-white\" data-aos=\"fade-up\">New to the Fithub?</h2>

                    <h6 class=\"mb-4 text-white\" data-aos=\"fade-up\">Your membership is up to 2 months FREE (\$62.50 per month)</h6>

                </div>

                <div class=\"mr-lg-auto mt-3 col-lg-4 col-md-6 col-12\">
                    <div class=\"about-working-hours\">
                        <div>

                            <h2 class=\"mb-4 text-white\" data-aos=\"fade-up\" data-aos-delay=\"500\">Working hours</h2>

                            <strong class=\"d-block\" data-aos=\"fade-up\" data-aos-delay=\"600\">Sunday : Closed</strong>

                            <strong class=\"mt-3 d-block\" data-aos=\"fade-up\" data-aos-delay=\"700\">Monday - Friday</strong>

                            <p data-aos=\"fade-up\" data-aos-delay=\"800\">7:00 AM - 10:00 PM</p>

                            <strong class=\"mt-3 d-block\" data-aos=\"fade-up\" data-aos-delay=\"700\">Saturday</strong>

                            <p data-aos=\"fade-up\" data-aos-delay=\"800\">6:00 AM - 4:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 158
    public function block_about($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "about"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "about"));

        // line 159
        echo "    <!-- ABOUT -->
    <section class=\"about section\" id=\"about\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12\">
                    <h2 class=\"mb-4\" data-aos=\"fade-up\" data-aos-delay=\"300\">Hello, we are Fithub</h2>

                    ";
        // line 170
        echo "
                </div>

                <div class=\"ml-lg-auto col-lg-3 col-md-6 col-12\" data-aos=\"fade-up\" data-aos-delay=\"700\">
                    <div class=\"team-thumb\">
                        <img src=\"images/team/team-image.jpg\" class=\"img-fluid\" alt=\"Trainer\">

                        <div class=\"team-info d-flex flex-column\">

                            <h3>Mary Yan</h3>
                            <span>Yoga Instructor</span>

                            <ul class=\"social-icon mt-3\">
                                <li><a href=\"#\" class=\"fa fa-twitter\"></a></li>
                                <li><a href=\"#\" class=\"fa fa-instagram\"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12\" data-aos=\"fade-up\" data-aos-delay=\"800\">
                    <div class=\"team-thumb\">
                        <img src=\"images/team/team-image01.jpg\" class=\"img-fluid\" alt=\"Trainer\">

                        <div class=\"team-info d-flex flex-column\">

                            <h3>Catherina</h3>
                            <span>Body trainer</span>

                            <ul class=\"social-icon mt-3\">
                                <li><a href=\"#\" class=\"fa fa-instagram\"></a></li>
                                <li><a href=\"#\" class=\"fa fa-facebook\"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 211
    public function block_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class"));

        // line 212
        echo "    <!-- CLASS -->
    <section class=\"class section\" id=\"class\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-12 col-12 text-center mb-5\">
                    <h6 data-aos=\"fade-up\">Get A Perfect Body</h6>

                    <h2 data-aos=\"fade-up\" data-aos-delay=\"200\">Our Training Classes</h2>
                </div>

                <div class=\"col-lg-4 col-md-6 col-12\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                    <div class=\"class-thumb\">
                        <img src=\"images/class/yoga-class.jpg\" class=\"img-fluid\" alt=\"Class\">

                        <div class=\"class-info\">
                            <h3 class=\"mb-1\">Yoga</h3>

                            <span><strong>Trained by</strong> - Bella</span>

                            <span class=\"class-price\">\$50</span>

                            <p class=\"mt-3\">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                        </div>
                    </div>
                </div>

                <div class=\"mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12\" data-aos=\"fade-up\" data-aos-delay=\"500\">
                    <div class=\"class-thumb\">
                        <img src=\"images/class/crossfit-class.jpg\" class=\"img-fluid\" alt=\"Class\">

                        <div class=\"class-info\">
                            <h3 class=\"mb-1\">Areobic</h3>

                            <span><strong>Trained by</strong> - Mary</span>

                            <span class=\"class-price\">\$66</span>

                            <p class=\"mt-3\">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                        </div>
                    </div>
                </div>

                <div class=\"mt-5 mt-lg-0 col-lg-4 col-md-6 col-12\" data-aos=\"fade-up\" data-aos-delay=\"600\">
                    <div class=\"class-thumb\">
                        <img src=\"images/class/cardio-class.jpg\" class=\"img-fluid\" alt=\"Class\">

                        <div class=\"class-info\">
                            <h3 class=\"mb-1\">Cardio</h3>

                            <span><strong>Trained by</strong> - Cathe</span>

                            <span class=\"class-price\">\$75</span>

                            <p class=\"mt-3\">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 275
    public function block_schedule($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "schedule"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "schedule"));

        // line 276
        echo "    <!-- SCHEDULE -->
    <section class=\"schedule section\" id=\"schedule\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-12 col-12 text-center\">
                    <h6 data-aos=\"fade-up\">our weekly GYM schedules</h6>

                    <h2 class=\"text-white\" data-aos=\"fade-up\" data-aos-delay=\"200\">Workout Timetable</h2>
                </div>

                <div class=\"col-lg-12 py-5 col-md-12 col-12\">
                    <table class=\"table table-bordered table-responsive schedule-table\" data-aos=\"fade-up\" data-aos-delay=\"300\">

                        <thead class=\"thead-light\">
                        <th><i class=\"fa fa-calendar\"></i></th>
                        <th>Mon</th>
                        <th>Tue</th>
                        <th>Wed</th>
                        <th>Thu</th>
                        <th>Fri</th>
                        <th>Sat</th>
                        </thead>

                        <tbody>
                        <tr>
                            <td><small>7:00 am</small></td>
                            <td>
                                <strong>Cardio</strong>
                                <span>7:00 am - 9:00 am</span>
                            </td>
                            <td>
                                <strong>Power Fitness</strong>
                                <span>7:00 am - 9:00 am</span>
                            </td>
                            <td></td>
                            <td></td>
                            <td>
                                <strong>Yoga Section</strong>
                                <span>7:00 am - 9:00 am</span>
                            </td>
                        </tr>

                        <tr>
                            <td><small>9:00 am</small></td>
                            <td></td>
                            <td></td>
                            <td>
                                <strong>Boxing</strong>
                                <span>8:00 am - 9:00 am</span>
                            </td>
                            <td>
                                <strong>Areobic</strong>
                                <span>8:00 am - 9:00 am</span>
                            </td>
                            <td></td>
                            <td>
                                <strong>Cardio</strong>
                                <span>8:00 am - 9:00 am</span>
                            </td>
                        </tr>

                        <tr>
                            <td><small>11:00 am</small></td>
                            <td></td>
                            <td>
                                <strong>Boxing</strong>
                                <span>11:00 am - 2:00 pm</span>
                            </td>
                            <td>
                                <strong>Areobic</strong>
                                <span>11:30 am - 3:30 pm</span>
                            </td>
                            <td></td>
                            <td>
                                <strong>Body work</strong>
                                <span>11:50 am - 5:20 pm</span>
                            </td>
                        </tr>

                        <tr>
                            <td><small>2:00 pm</small></td>
                            <td>
                                <strong>Boxing</strong>
                                <span>2:00 pm - 4:00 pm</span>
                            </td>
                            <td>
                                <strong>Power lifting</strong>
                                <span>3:00 pm - 6:00 pm</span>
                            </td>
                            <td></td>
                            <td>
                                <strong>Cardio</strong>
                                <span>6:00 pm - 9:00 pm</span>
                            </td>
                            <td></td>
                            <td>
                                <strong>Crossfit</strong>
                                <span>5:00 pm - 7:00 pm</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 385
    public function block_contact($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contact"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contact"));

        // line 386
        echo "    <!-- CONTACT -->
    <section class=\"contact section\" id=\"contact\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"ml-auto col-lg-5 col-md-6 col-12\">
                    <h2 class=\"mb-4 pb-2\" data-aos=\"fade-up\" data-aos-delay=\"200\">Feel free to ask anything</h2>

                    <form action=\"#\" method=\"post\" class=\"contact-form webform\" data-aos=\"fade-up\" data-aos-delay=\"400\" role=\"form\">
                        <input type=\"text\" class=\"form-control\" name=\"cf-name\" placeholder=\"Name\">

                        <input type=\"email\" class=\"form-control\" name=\"cf-email\" placeholder=\"Email\">

                        <textarea class=\"form-control\" rows=\"5\" name=\"cf-message\" placeholder=\"Message\"></textarea>

                        <button type=\"submit\" class=\"form-control\" id=\"submit-button\" name=\"submit\">Send Message</button>
                    </form>
                </div>

                <div class=\"mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12\">
                    <h2 class=\"mb-4\" data-aos=\"fade-up\" data-aos-delay=\"600\">Where you can <span>find us</span></h2>

                    <p data-aos=\"fade-up\" data-aos-delay=\"800\"><i class=\"fa fa-map-marker mr-1\"></i> lot 13, V5XR+M37 Résidence Essalem II, Av. Fethi Zouhir, Cebalat Ben Ammar 2083</p>
                    <!-- How to change your own map point
                        1. Go to Google Maps
                        2. Click on your location point
                        3. Click \"Share\" and choose \"Embed map\" tab
                        4. Copy only URL and paste it within the src=\"\" field below
                    -->
                    <div class=\"google-map\" data-aos=\"fade-up\" data-aos-delay=\"900\">
                        <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d25527.99957680255!2d10.190238175767806!3d36.89034952888966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2stn!4v1676310101096!5m2!1sfr!2stn\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 424
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 425
        echo "    <!-- FOOTER -->
    <footer class=\"site-footer\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"ml-auto col-lg-4 col-md-5\">
                    <p class=\"copyright-text\">Copyright &copy; 2022 Fithub Fitness Co.</p>
                </div>

                <div class=\"d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12\">
                    <p class=\"mr-4\">
                        <i class=\"fa fa-envelope-o mr-1\"></i>
                        <a href=\"#\">hello@company.co</a>
                    </p>

                    <p><i class=\"fa fa-phone mr-1\"></i> 010-020-0840</p>
                </div>

            </div>
        </div>
    </footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 491
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 492
        echo "    <!-- SCRIPTS -->
    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/aos.js\"></script>
    <script src=\"js/smoothscroll.js\"></script>
    <script src=\"js/custom.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 500
    public function block_modalsign($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modalsign"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modalsign"));

        // line 501
        echo "    <!-- Modal -->
    <div class=\"modal fade\" id=\"signinForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"signinFormLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">

            <div class=\"modal-content\">
                <div class=\"modal-header\">

                    <h2 class=\"modal-title\" id=\"membershipFormLabel\">Sign in Form</h2>

                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>

                <div class=\"modal-body\">
                    <form class=\"membership-form webform\" role=\"form\">

                        <input type=\"email\" class=\"form-control\" name=\"cf-email\" placeholder=\"Johndoe@gmail.com\">

                        <input type=\"password\" class=\"form-control\" name=\"cf-phone\" placeholder=\"Password\" pattern=\"[0-9]{3}-[0-9]{3}-[0-9]{4}\" required>

                        <button type=\"submit\" class=\"form-control\" id=\"submit-button\" name=\"submit\">Submit Button</button>

                        <div class=\"custom-control custom-checkbox\">
                            <a href=\"#\">Forgot Password?</a>
                            </label>
                        </div>
                    </form>
                </div>

                <div class=\"modal-footer\"></div>

            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 538
    public function block_modal1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal1"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal1"));

        // line 539
        echo "    <div class=\"modal fade\" id=\"form\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header border-bottom-0\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Reserve an appointement</h5>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <div class=\"form-group\">
                                <label for=\"name\">Full name</label>
                                <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Full name\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"email1\">Email address</label>
                                <input type=\"email\" class=\"form-control\" id=\"email1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
                            </div>
                            <div class=\"form-group\">
                                <div>
                                    <label for=\"nutritionist\">Select Nutritionist:</label>
                                </div>
                                <div>
                                    <select style=\"background-color:rgba(0, 0, 0, 0)\" name=\"nutritionist\" id=\"selectnut\">
                                        <option value=\"\">--Please choose an nutritionist--</option>
                                        <option value=\"dog\">Dog</option>
                                        <option value=\"cat\">Cat</option>
                                        <option value=\"hamster\">Hamster</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"date\">Select a date</label>
                                <input type=\"date\" class=\"form-control\" id=\"date\" aria-describedby=\"emailHelp\" placeholder=\"choose a date\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"time\">Select a time</label>
                                <input type=\"time\" class=\"form-control\" id=\"time\" aria-describedby=\"emailHelp\" placeholder=\"choose a time\">
                            </div>
                        </div>
                        <div class=\"modal-footer border-top-0 d-flex justify-content-center\">
                            <button type=\"submit\" class=\"btn btn-success\">Reserve</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  884 => 539,  874 => 538,  829 => 501,  819 => 500,  803 => 492,  793 => 491,  762 => 425,  752 => 424,  705 => 386,  695 => 385,  577 => 276,  567 => 275,  495 => 212,  485 => 211,  435 => 170,  425 => 159,  415 => 158,  371 => 123,  361 => 122,  326 => 96,  316 => 95,  274 => 63,  268 => 59,  246 => 38,  236 => 37,  226 => 538,  223 => 537,  221 => 500,  218 => 499,  216 => 491,  214 => 447,  212 => 424,  210 => 385,  208 => 275,  206 => 211,  204 => 158,  202 => 122,  200 => 95,  198 => 37,  194 => 35,  184 => 34,  172 => 25,  165 => 21,  161 => 20,  156 => 19,  146 => 18,  135 => 6,  125 => 5,  111 => 27,  109 => 18,  97 => 8,  94 => 5,  84 => 4,  71 => 590,  69 => 34,  65 => 32,  63 => 4,  58 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    {% block head %}
        {% block title %}
            <title>Fithub</title>
        {% endblock %}

        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
        <meta name=\"description\" content=\"\">
        <meta name=\"keywords\" content=\"\">
        <meta name=\"author\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/aos.css') }}\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

            <!-- MAIN CSS -->
            <link rel=\"stylesheet\" href=\"{{ asset('css/tooplate-gymso-style.css') }}\">
        {% endblock %}
        <!--
        Tooplate 2119 Gymso Fitness
        https://www.tooplate.com/view/2119-gymso-fitness
        -->
    {% endblock %}
</head>
<body data-spy=\"scroll\" data-target=\"#navbarNav\" data-offset=\"50\">
{% block body %}

    <!-- MENU BAR -->
{% block menu %}
    <nav class=\"navbar navbar-expand-lg fixed-top\">
        <div class=\"container\">
            <img src=\"images/logo.png\" id=\"logo\" class=\"img-fluid\" alt=\"Class\">

            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\"
                    aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ml-lg-auto\">
                    <li class=\"nav-item\">
                        <a href=\"#home\" class=\"nav-link smoothScroll\">Home</a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"#class\" class=\"nav-link smoothScroll\">Classes</a>
                    </li>

                    <li class=\"nav-item\">
                        {# <a href=\"#schedule\" class=\"nav-link smoothScroll\">Schedules</a> #}
                        <div class=\"dropdown\">
                                <buton class=\"dropbtn\">Schedules
                                    <i class =\"fa fa-caret-down\"></i></buton>
                                <a href=\"#\">Book with a nutritionist</a>
                                <a href=\"{{ path('app_participation_seance_new') }}\" class=\"btn custom-btn bg-color mt-3\" >Partcicpate</a>
                                <a href=\"/seance/list\" class=\"btn custom-btn bg-color mt-3\" >Seances</a>
                            </div>
                        </div>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"#schedule\" class=\"nav-link smoothScroll\">Event</a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"#schedule\" class=\"nav-link smoothScroll\">Blog</a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"#contact\" class=\"nav-link smoothScroll\">Prices</a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"#contact\" class=\"nav-link smoothScroll\">Contact</a>
                    </li>
                </ul>

                <ul class=\"social-icon ml-lg-3\">
                    <li><a href=\"https://fb.com/tooplate\" class=\"fa fa-facebook\"></a></li>
                    <li><a href=\"#\" class=\"fa fa-instagram\"></a></li>
                </ul>
            </div>

        </div>
    </nav>
{% endblock %}
{% block hero %}
    <!-- HERO -->
    <section class=\"hero d-flex flex-column justify-content-center align-items-center\" id=\"home\">

        <div class=\"bg-overlay\"></div>

        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-8 col-md-10 mx-auto col-12\">
                    <div class=\"hero-text mt-5 text-center\">

                        <h6 data-aos=\"fade-up\" data-aos-delay=\"300\">new way to build a healthy lifestyle!</h6>

                        <h1 class=\"text-white\" data-aos=\"fade-up\" data-aos-delay=\"500\">Upgrade your body at Fithub</h1>

                        <a href=\"#feature\" class=\"btn custom-btn mt-3\" data-aos=\"fade-up\" data-aos-delay=\"600\">Get started</a>

                        <a href=\"#about\" class=\"btn custom-btn bordered mt-3\" data-aos=\"fade-up\" data-aos-delay=\"700\">learn more</a>

                    </div>
                </div>

            </div>
        </div>
    </section>
{% endblock %}
{% block feature %}
    <section class=\"feature\" id=\"feature\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12\">
                    <h2 class=\"mb-3 text-white\" data-aos=\"fade-up\">New to the Fithub?</h2>

                    <h6 class=\"mb-4 text-white\" data-aos=\"fade-up\">Your membership is up to 2 months FREE (\$62.50 per month)</h6>

                </div>

                <div class=\"mr-lg-auto mt-3 col-lg-4 col-md-6 col-12\">
                    <div class=\"about-working-hours\">
                        <div>

                            <h2 class=\"mb-4 text-white\" data-aos=\"fade-up\" data-aos-delay=\"500\">Working hours</h2>

                            <strong class=\"d-block\" data-aos=\"fade-up\" data-aos-delay=\"600\">Sunday : Closed</strong>

                            <strong class=\"mt-3 d-block\" data-aos=\"fade-up\" data-aos-delay=\"700\">Monday - Friday</strong>

                            <p data-aos=\"fade-up\" data-aos-delay=\"800\">7:00 AM - 10:00 PM</p>

                            <strong class=\"mt-3 d-block\" data-aos=\"fade-up\" data-aos-delay=\"700\">Saturday</strong>

                            <p data-aos=\"fade-up\" data-aos-delay=\"800\">6:00 AM - 4:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>
{% endblock %}
{% block about %}
    <!-- ABOUT -->
    <section class=\"about section\" id=\"about\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12\">
                    <h2 class=\"mb-4\" data-aos=\"fade-up\" data-aos-delay=\"300\">Hello, we are Fithub</h2>

                    {# <p data-aos=\"fade-up\" data-aos-delay=\"400\">You are NOT allowed to redistribute this HTML template downloadable ZIP file on any template collection site. You are allowed to use this template for your personal or business websites.</p>

                                <p data-aos=\"fade-up\" data-aos-delay=\"500\">If you have any question regarding <a rel=\"nofollow\" href=\"https://www.tooplate.com/view/2119-gymso-fitness\" target=\"_parent\">Gymso Fitness HTML template</a>, you can <a rel=\"nofollow\" href=\"https://www.tooplate.com/contact\" target=\"_parent\">contact Tooplate</a> immediately. Thank you.</p> #}

                </div>

                <div class=\"ml-lg-auto col-lg-3 col-md-6 col-12\" data-aos=\"fade-up\" data-aos-delay=\"700\">
                    <div class=\"team-thumb\">
                        <img src=\"images/team/team-image.jpg\" class=\"img-fluid\" alt=\"Trainer\">

                        <div class=\"team-info d-flex flex-column\">

                            <h3>Mary Yan</h3>
                            <span>Yoga Instructor</span>

                            <ul class=\"social-icon mt-3\">
                                <li><a href=\"#\" class=\"fa fa-twitter\"></a></li>
                                <li><a href=\"#\" class=\"fa fa-instagram\"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12\" data-aos=\"fade-up\" data-aos-delay=\"800\">
                    <div class=\"team-thumb\">
                        <img src=\"images/team/team-image01.jpg\" class=\"img-fluid\" alt=\"Trainer\">

                        <div class=\"team-info d-flex flex-column\">

                            <h3>Catherina</h3>
                            <span>Body trainer</span>

                            <ul class=\"social-icon mt-3\">
                                <li><a href=\"#\" class=\"fa fa-instagram\"></a></li>
                                <li><a href=\"#\" class=\"fa fa-facebook\"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
{% endblock %}
{% block class %}
    <!-- CLASS -->
    <section class=\"class section\" id=\"class\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-12 col-12 text-center mb-5\">
                    <h6 data-aos=\"fade-up\">Get A Perfect Body</h6>

                    <h2 data-aos=\"fade-up\" data-aos-delay=\"200\">Our Training Classes</h2>
                </div>

                <div class=\"col-lg-4 col-md-6 col-12\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                    <div class=\"class-thumb\">
                        <img src=\"images/class/yoga-class.jpg\" class=\"img-fluid\" alt=\"Class\">

                        <div class=\"class-info\">
                            <h3 class=\"mb-1\">Yoga</h3>

                            <span><strong>Trained by</strong> - Bella</span>

                            <span class=\"class-price\">\$50</span>

                            <p class=\"mt-3\">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                        </div>
                    </div>
                </div>

                <div class=\"mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12\" data-aos=\"fade-up\" data-aos-delay=\"500\">
                    <div class=\"class-thumb\">
                        <img src=\"images/class/crossfit-class.jpg\" class=\"img-fluid\" alt=\"Class\">

                        <div class=\"class-info\">
                            <h3 class=\"mb-1\">Areobic</h3>

                            <span><strong>Trained by</strong> - Mary</span>

                            <span class=\"class-price\">\$66</span>

                            <p class=\"mt-3\">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                        </div>
                    </div>
                </div>

                <div class=\"mt-5 mt-lg-0 col-lg-4 col-md-6 col-12\" data-aos=\"fade-up\" data-aos-delay=\"600\">
                    <div class=\"class-thumb\">
                        <img src=\"images/class/cardio-class.jpg\" class=\"img-fluid\" alt=\"Class\">

                        <div class=\"class-info\">
                            <h3 class=\"mb-1\">Cardio</h3>

                            <span><strong>Trained by</strong> - Cathe</span>

                            <span class=\"class-price\">\$75</span>

                            <p class=\"mt-3\">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
{% endblock %}
{% block schedule %}
    <!-- SCHEDULE -->
    <section class=\"schedule section\" id=\"schedule\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-12 col-12 text-center\">
                    <h6 data-aos=\"fade-up\">our weekly GYM schedules</h6>

                    <h2 class=\"text-white\" data-aos=\"fade-up\" data-aos-delay=\"200\">Workout Timetable</h2>
                </div>

                <div class=\"col-lg-12 py-5 col-md-12 col-12\">
                    <table class=\"table table-bordered table-responsive schedule-table\" data-aos=\"fade-up\" data-aos-delay=\"300\">

                        <thead class=\"thead-light\">
                        <th><i class=\"fa fa-calendar\"></i></th>
                        <th>Mon</th>
                        <th>Tue</th>
                        <th>Wed</th>
                        <th>Thu</th>
                        <th>Fri</th>
                        <th>Sat</th>
                        </thead>

                        <tbody>
                        <tr>
                            <td><small>7:00 am</small></td>
                            <td>
                                <strong>Cardio</strong>
                                <span>7:00 am - 9:00 am</span>
                            </td>
                            <td>
                                <strong>Power Fitness</strong>
                                <span>7:00 am - 9:00 am</span>
                            </td>
                            <td></td>
                            <td></td>
                            <td>
                                <strong>Yoga Section</strong>
                                <span>7:00 am - 9:00 am</span>
                            </td>
                        </tr>

                        <tr>
                            <td><small>9:00 am</small></td>
                            <td></td>
                            <td></td>
                            <td>
                                <strong>Boxing</strong>
                                <span>8:00 am - 9:00 am</span>
                            </td>
                            <td>
                                <strong>Areobic</strong>
                                <span>8:00 am - 9:00 am</span>
                            </td>
                            <td></td>
                            <td>
                                <strong>Cardio</strong>
                                <span>8:00 am - 9:00 am</span>
                            </td>
                        </tr>

                        <tr>
                            <td><small>11:00 am</small></td>
                            <td></td>
                            <td>
                                <strong>Boxing</strong>
                                <span>11:00 am - 2:00 pm</span>
                            </td>
                            <td>
                                <strong>Areobic</strong>
                                <span>11:30 am - 3:30 pm</span>
                            </td>
                            <td></td>
                            <td>
                                <strong>Body work</strong>
                                <span>11:50 am - 5:20 pm</span>
                            </td>
                        </tr>

                        <tr>
                            <td><small>2:00 pm</small></td>
                            <td>
                                <strong>Boxing</strong>
                                <span>2:00 pm - 4:00 pm</span>
                            </td>
                            <td>
                                <strong>Power lifting</strong>
                                <span>3:00 pm - 6:00 pm</span>
                            </td>
                            <td></td>
                            <td>
                                <strong>Cardio</strong>
                                <span>6:00 pm - 9:00 pm</span>
                            </td>
                            <td></td>
                            <td>
                                <strong>Crossfit</strong>
                                <span>5:00 pm - 7:00 pm</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>
{% endblock %}
{% block contact %}
    <!-- CONTACT -->
    <section class=\"contact section\" id=\"contact\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"ml-auto col-lg-5 col-md-6 col-12\">
                    <h2 class=\"mb-4 pb-2\" data-aos=\"fade-up\" data-aos-delay=\"200\">Feel free to ask anything</h2>

                    <form action=\"#\" method=\"post\" class=\"contact-form webform\" data-aos=\"fade-up\" data-aos-delay=\"400\" role=\"form\">
                        <input type=\"text\" class=\"form-control\" name=\"cf-name\" placeholder=\"Name\">

                        <input type=\"email\" class=\"form-control\" name=\"cf-email\" placeholder=\"Email\">

                        <textarea class=\"form-control\" rows=\"5\" name=\"cf-message\" placeholder=\"Message\"></textarea>

                        <button type=\"submit\" class=\"form-control\" id=\"submit-button\" name=\"submit\">Send Message</button>
                    </form>
                </div>

                <div class=\"mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12\">
                    <h2 class=\"mb-4\" data-aos=\"fade-up\" data-aos-delay=\"600\">Where you can <span>find us</span></h2>

                    <p data-aos=\"fade-up\" data-aos-delay=\"800\"><i class=\"fa fa-map-marker mr-1\"></i> lot 13, V5XR+M37 Résidence Essalem II, Av. Fethi Zouhir, Cebalat Ben Ammar 2083</p>
                    <!-- How to change your own map point
                        1. Go to Google Maps
                        2. Click on your location point
                        3. Click \"Share\" and choose \"Embed map\" tab
                        4. Copy only URL and paste it within the src=\"\" field below
                    -->
                    <div class=\"google-map\" data-aos=\"fade-up\" data-aos-delay=\"900\">
                        <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d25527.99957680255!2d10.190238175767806!3d36.89034952888966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2stn!4v1676310101096!5m2!1sfr!2stn\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>
{% endblock %}
{% block footer %}
    <!-- FOOTER -->
    <footer class=\"site-footer\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"ml-auto col-lg-4 col-md-5\">
                    <p class=\"copyright-text\">Copyright &copy; 2022 Fithub Fitness Co.</p>
                </div>

                <div class=\"d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12\">
                    <p class=\"mr-4\">
                        <i class=\"fa fa-envelope-o mr-1\"></i>
                        <a href=\"#\">hello@company.co</a>
                    </p>

                    <p><i class=\"fa fa-phone mr-1\"></i> 010-020-0840</p>
                </div>

            </div>
        </div>
    </footer>
{% endblock %}
    {#
    {% block modal %}
        <!-- Modal -->

        <div class=\"modal fade\" id=\"membershipForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"membershipFormLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog\" role=\"document\">

            <div class=\"modal-content\">
              <div class=\"modal-header\">

                <h2 class=\"modal-title\" id=\"membershipFormLabel\">Membership Form</h2>

                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                  <span aria-hidden=\"true\">&times;</span>
                </button>
              </div>

              <div class=\"modal-body\">
                <form class=\"membership-form webform\" role=\"form\">
                    <input type=\"text\" class=\"form-control\" name=\"cf-name\" placeholder=\"John Doe\">

                    <input type=\"email\" class=\"form-control\" name=\"cf-email\" placeholder=\"Johndoe@gmail.com\">

                    <input type=\"tel\" class=\"form-control\" name=\"cf-phone\" placeholder=\"123-456-7890\" pattern=\"[0-9]{3}-[0-9]{3}-[0-9]{4}\" required>

                    <textarea class=\"form-control\" rows=\"3\" name=\"cf-message\" placeholder=\"Additional Message\"></textarea>

                    <button type=\"submit\" class=\"form-control\" id=\"submit-button\" name=\"submit\">Submit Button</button>

                    <div class=\"custom-control custom-checkbox\">
                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"signup-agree\">
                        <label class=\"custom-control-label text-small text-muted\" for=\"signup-agree\">I agree to the <a href=\"#\">Terms &amp;Conditions</a>
                        </label>
                    </div>
                </form>
              </div>

              <div class=\"modal-footer\"></div>

            </div>
          </div>
        </div>
    {% endblock %}
    #}
{% block scripts %}
    <!-- SCRIPTS -->
    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/aos.js\"></script>
    <script src=\"js/smoothscroll.js\"></script>
    <script src=\"js/custom.js\"></script>
{% endblock %}

{% block modalsign %}
    <!-- Modal -->
    <div class=\"modal fade\" id=\"signinForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"signinFormLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">

            <div class=\"modal-content\">
                <div class=\"modal-header\">

                    <h2 class=\"modal-title\" id=\"membershipFormLabel\">Sign in Form</h2>

                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>

                <div class=\"modal-body\">
                    <form class=\"membership-form webform\" role=\"form\">

                        <input type=\"email\" class=\"form-control\" name=\"cf-email\" placeholder=\"Johndoe@gmail.com\">

                        <input type=\"password\" class=\"form-control\" name=\"cf-phone\" placeholder=\"Password\" pattern=\"[0-9]{3}-[0-9]{3}-[0-9]{4}\" required>

                        <button type=\"submit\" class=\"form-control\" id=\"submit-button\" name=\"submit\">Submit Button</button>

                        <div class=\"custom-control custom-checkbox\">
                            <a href=\"#\">Forgot Password?</a>
                            </label>
                        </div>
                    </form>
                </div>

                <div class=\"modal-footer\"></div>

            </div>
        </div>
    </div>
{% endblock %}

{% block modal1 %}
    <div class=\"modal fade\" id=\"form\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header border-bottom-0\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Reserve an appointement</h5>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <div class=\"form-group\">
                                <label for=\"name\">Full name</label>
                                <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Full name\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"email1\">Email address</label>
                                <input type=\"email\" class=\"form-control\" id=\"email1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
                            </div>
                            <div class=\"form-group\">
                                <div>
                                    <label for=\"nutritionist\">Select Nutritionist:</label>
                                </div>
                                <div>
                                    <select style=\"background-color:rgba(0, 0, 0, 0)\" name=\"nutritionist\" id=\"selectnut\">
                                        <option value=\"\">--Please choose an nutritionist--</option>
                                        <option value=\"dog\">Dog</option>
                                        <option value=\"cat\">Cat</option>
                                        <option value=\"hamster\">Hamster</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"date\">Select a date</label>
                                <input type=\"date\" class=\"form-control\" id=\"date\" aria-describedby=\"emailHelp\" placeholder=\"choose a date\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"time\">Select a time</label>
                                <input type=\"time\" class=\"form-control\" id=\"time\" aria-describedby=\"emailHelp\" placeholder=\"choose a time\">
                            </div>
                        </div>
                        <div class=\"modal-footer border-top-0 d-flex justify-content-center\">
                            <button type=\"submit\" class=\"btn btn-success\">Reserve</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}
{% endblock %}
</body>
</html>

", "base.html.twig", "C:\\Users\\HP\\Videos\\FitHub\\templates\\base.html.twig");
    }
}
