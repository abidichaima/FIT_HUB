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

/* base1.html.twig */
class __TwigTemplate_5e37354af67f5e3c23c97f24ce956c38 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base1.html.twig"));

        // line 1
        echo " <!DOCTYPE html>
<html lang=\"en\" >
    

  <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Shiva's | Gym \">
    <meta name=\"keywords\" content=\"Gym, unica, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
   ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "  
 <!-- Page Preloder -->
    <div id=\"preloder\">
        <div class=\"loader\"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class=\"offcanvas-menu-overlay\"></div>
    <div class=\"offcanvas-menu-wrapper\">
        <div class=\"canvas-close\">
            <i class=\"fa fa-close\"></i>
        </div>
        <div class=\"canvas-search search-switch\">
            <i class=\"fa fa-search\"></i>
        </div>
        <nav class=\"canvas-menu mobile-menu\">
            <ul>
                <li><a href=\"front/index.html\">Home</a></li>
                <li><a href=\"front/about-us.html\">About Us</a></li>
                <li><a href=\"front/class-details.html\">Classes</a></li>
                <li><a href=\"front/services.html\">Services</a></li>
                <li><a href=\"front/team.html\">Our Team</a></li>
                <li><a href=\"#\">Pages</a>
                    <ul class=\"dropdown\">
                        <li><a href=\"front/about-us.html\">About us</a></li>
                        <li><a href=\"front/class-timetable.html\">Classes timetable</a></li>
                        <li><a href=\"front/bmi-calculator.html\">Bmi calculate</a></li>
                        <li><a href=\"front/team.html\">Our team</a></li>
                        <li><a href=\"front/gallery.html\">Gallery</a></li>
                        <li><a href=\"front/blog.html\">Our blog</a></li>
                        <li><a href=\"front/404.html\">404</a></li>
                    </ul>
                </li>
                <li><a href=\"front/contact.html\">Contact</a></li>
            </ul>
        </nav>
        <div id=\"mobile-menu-wrap\"></div>
        <div class=\"canvas-social\">
            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class=\"header-section\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"logo\">
                        <a href=\"front/index.html\">
                            <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/logo.png "), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <nav class=\"nav-menu\">
                        <ul>
                            <li><a href=\"front/index.html\">Home</a></li>
                            <li><a href=\"front/about-us.html\">About Us</a></li>
                            <li><a href=\"front/class-details.html\">Classes</a></li>
                            <li><a href=\"front/services.html\">Services</a></li>
                            <li><a href=\"front/team.html\">Our Team</a></li>
                            <li class=\"active\"><a href=\"#\">Pages</a>
                                <ul class=\"dropdown\">
                                    <li><a href=\"front/about-us.html\">About us</a></li>
                                    <li><a href=\"front/class-timetable.html\">Classes timetable</a></li>
                                    <li><a href=\"front/bmi-calculator.html\">Bmi calculate</a></li>
                                    <li><a href=\"front/team.html\">Our team</a></li>
                                    <li><a href=\"front/gallery.html\">Gallery</a></li>
                                    <li><a href=\"front/blog.html\">Our blog</a></li>
                                    <li><a href=\"front/404.html\">404</a></li>
                                </ul>
                            </li>
                            <li><a href=\"front/contact.html\">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"top-option\">
                        <div class=\"to-search search-switch\">
                            <i class=\"fa fa-search\"></i>
                        </div>
                        <div class=\"to-social\">
                        <i style=\"font-size:24px;color:white\" class=\"fa\" >&#xf07a;</i>
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"canvas-open\">
                <i class=\"fa fa-bars\"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class=\"breadcrumb-section set-bg\" data-setbg=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/breadcrumb-bg.jpg"), "html", null, true);
        echo "\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb-text\">
                        <h2>Login</h2>
                        <div class=\"bt-option\">
                            <a href=\"front/index.html\">Home</a>
                            <span>Login</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

 ";
        // line 146
        $this->displayBlock('body', $context, $blocks);
        // line 149
        echo "

    <!-- Get In Touch Section Begin -->
    <div class=\"gettouch-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"gt-text\">
                        <i class=\"fa fa-map-marker\"></i>
                        <p>333 Middle Winchendon Rd, Rindge,<br/> NH 03461</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"gt-text\">
                        <i class=\"fa fa-mobile\"></i>
                        <ul>
                            <li>125-711-811</li>
                            <li>125-668-886</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"gt-text email\">
                        <i class=\"fa fa-envelope\"></i>
                        <p>Support.gymcenter@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->

    <!-- Footer Section Begin -->
    <section class=\"footer-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"fs-about\">
                        <div class=\"fa-logo\">
                            <a href=\"#\"><img src=\"front/img/logo.png\" alt=\"\"></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore magna aliqua endisse ultrices gravida lorem.</p>
                        <div class=\"fa-social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            <a href=\"#\"><i class=\"fa  fa-envelope-o\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div class=\"fs-widget\">
                        <h4>Useful links</h4>
                        <ul>
                            <li><a href=\"#\">About</a></li>
                            <li><a href=\"#\">Blog</a></li>
                            <li><a href=\"#\">Classes</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div class=\"fs-widget\">
                        <h4>Support</h4>
                        <ul>
                            <li><a href=\"";
        // line 216
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Login</a></li>
                            <li><a href=\"#\">My account</a></li>
                            <li><a href=\"";
        // line 218
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Subscribe</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"fs-widget\">
                        <h4>Tips et Guides</h4>
                        <div class=\"fw-recent\">
                            <h6><a href=\"front/blog-details.html\">Physical fitness may help prevent depression, anxiety</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                        <div class=\"fw-recent\">
                            <h6><a href=\"./blog-details.html\">Fitness: The best exercise to lose belly fat and tone up...</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"copyright-text\">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class=\"search-model\">
        <div class=\"h-100 d-flex align-items-center justify-content-center\">
            <div class=\"search-close-switch\">+</div>
            <form class=\"search-model-form\">
                <input type=\"text\" id=\"search-input\" placeholder=\"Search here.....\">
            </form>
        </div>
    </div>
    <!-- Search model end -->

";
        // line 267
        $this->displayBlock('javascripts', $context, $blocks);
        // line 279
        echo "

</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Sportify ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    <!-- Google Font -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("font/https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("font/https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/flaticon.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/owl.carousel.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/barfiller.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/magnific-popup.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/slicknav.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
     ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 146
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 147
        echo "   
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 267
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 268
        echo "    <!-- Js Plugins -->
    <script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/./js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/./js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/./js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/./js/masonry.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/./js/jquery.barfiller.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/./js/jquery.slicknav.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/./js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/./js/main.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  481 => 276,  477 => 275,  473 => 274,  469 => 273,  465 => 272,  461 => 271,  457 => 270,  453 => 269,  450 => 268,  440 => 267,  429 => 147,  419 => 146,  407 => 24,  403 => 23,  399 => 22,  395 => 21,  391 => 20,  387 => 19,  383 => 18,  379 => 17,  373 => 14,  369 => 13,  366 => 12,  356 => 11,  337 => 10,  322 => 279,  320 => 267,  268 => 218,  263 => 216,  194 => 149,  192 => 146,  172 => 129,  119 => 79,  64 => 26,  62 => 11,  58 => 10,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <!DOCTYPE html>
<html lang=\"en\" >
    

  <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Shiva's | Gym \">
    <meta name=\"keywords\" content=\"Gym, unica, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>{% block title %}Sportify {% endblock %}</title>
   {% block stylesheets %}
    <!-- Google Font -->
    <link href=\"{{asset('font/https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('font/https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap')}}\" rel=\"stylesheet\">

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"{{asset('front/css/bootstrap.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{asset('front/css/font-awesome.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{asset('front/css/flaticon.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{asset('front/css/owl.carousel.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{asset('front/css/barfiller.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{asset('front/css/magnific-popup.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{asset('front/css/slicknav.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{asset('front/css/style.css')}}\" type=\"text/css\">
     {% endblock %}
  
 <!-- Page Preloder -->
    <div id=\"preloder\">
        <div class=\"loader\"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class=\"offcanvas-menu-overlay\"></div>
    <div class=\"offcanvas-menu-wrapper\">
        <div class=\"canvas-close\">
            <i class=\"fa fa-close\"></i>
        </div>
        <div class=\"canvas-search search-switch\">
            <i class=\"fa fa-search\"></i>
        </div>
        <nav class=\"canvas-menu mobile-menu\">
            <ul>
                <li><a href=\"front/index.html\">Home</a></li>
                <li><a href=\"front/about-us.html\">About Us</a></li>
                <li><a href=\"front/class-details.html\">Classes</a></li>
                <li><a href=\"front/services.html\">Services</a></li>
                <li><a href=\"front/team.html\">Our Team</a></li>
                <li><a href=\"#\">Pages</a>
                    <ul class=\"dropdown\">
                        <li><a href=\"front/about-us.html\">About us</a></li>
                        <li><a href=\"front/class-timetable.html\">Classes timetable</a></li>
                        <li><a href=\"front/bmi-calculator.html\">Bmi calculate</a></li>
                        <li><a href=\"front/team.html\">Our team</a></li>
                        <li><a href=\"front/gallery.html\">Gallery</a></li>
                        <li><a href=\"front/blog.html\">Our blog</a></li>
                        <li><a href=\"front/404.html\">404</a></li>
                    </ul>
                </li>
                <li><a href=\"front/contact.html\">Contact</a></li>
            </ul>
        </nav>
        <div id=\"mobile-menu-wrap\"></div>
        <div class=\"canvas-social\">
            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class=\"header-section\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"logo\">
                        <a href=\"front/index.html\">
                            <img src=\"{{ asset('front/img/logo.png ')}}\" alt=\"\">
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <nav class=\"nav-menu\">
                        <ul>
                            <li><a href=\"front/index.html\">Home</a></li>
                            <li><a href=\"front/about-us.html\">About Us</a></li>
                            <li><a href=\"front/class-details.html\">Classes</a></li>
                            <li><a href=\"front/services.html\">Services</a></li>
                            <li><a href=\"front/team.html\">Our Team</a></li>
                            <li class=\"active\"><a href=\"#\">Pages</a>
                                <ul class=\"dropdown\">
                                    <li><a href=\"front/about-us.html\">About us</a></li>
                                    <li><a href=\"front/class-timetable.html\">Classes timetable</a></li>
                                    <li><a href=\"front/bmi-calculator.html\">Bmi calculate</a></li>
                                    <li><a href=\"front/team.html\">Our team</a></li>
                                    <li><a href=\"front/gallery.html\">Gallery</a></li>
                                    <li><a href=\"front/blog.html\">Our blog</a></li>
                                    <li><a href=\"front/404.html\">404</a></li>
                                </ul>
                            </li>
                            <li><a href=\"front/contact.html\">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"top-option\">
                        <div class=\"to-search search-switch\">
                            <i class=\"fa fa-search\"></i>
                        </div>
                        <div class=\"to-social\">
                        <i style=\"font-size:24px;color:white\" class=\"fa\" >&#xf07a;</i>
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"canvas-open\">
                <i class=\"fa fa-bars\"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class=\"breadcrumb-section set-bg\" data-setbg=\"{{asset('front/img/breadcrumb-bg.jpg')}}\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb-text\">
                        <h2>Login</h2>
                        <div class=\"bt-option\">
                            <a href=\"front/index.html\">Home</a>
                            <span>Login</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

 {% block body %}
   
        {% endblock %}


    <!-- Get In Touch Section Begin -->
    <div class=\"gettouch-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"gt-text\">
                        <i class=\"fa fa-map-marker\"></i>
                        <p>333 Middle Winchendon Rd, Rindge,<br/> NH 03461</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"gt-text\">
                        <i class=\"fa fa-mobile\"></i>
                        <ul>
                            <li>125-711-811</li>
                            <li>125-668-886</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"gt-text email\">
                        <i class=\"fa fa-envelope\"></i>
                        <p>Support.gymcenter@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->

    <!-- Footer Section Begin -->
    <section class=\"footer-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"fs-about\">
                        <div class=\"fa-logo\">
                            <a href=\"#\"><img src=\"front/img/logo.png\" alt=\"\"></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore magna aliqua endisse ultrices gravida lorem.</p>
                        <div class=\"fa-social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            <a href=\"#\"><i class=\"fa  fa-envelope-o\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div class=\"fs-widget\">
                        <h4>Useful links</h4>
                        <ul>
                            <li><a href=\"#\">About</a></li>
                            <li><a href=\"#\">Blog</a></li>
                            <li><a href=\"#\">Classes</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div class=\"fs-widget\">
                        <h4>Support</h4>
                        <ul>
                            <li><a href=\"{{path('app_login')}}\">Login</a></li>
                            <li><a href=\"#\">My account</a></li>
                            <li><a href=\"{{path('app_register')}}\">Subscribe</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"fs-widget\">
                        <h4>Tips et Guides</h4>
                        <div class=\"fw-recent\">
                            <h6><a href=\"front/blog-details.html\">Physical fitness may help prevent depression, anxiety</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                        <div class=\"fw-recent\">
                            <h6><a href=\"./blog-details.html\">Fitness: The best exercise to lose belly fat and tone up...</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"copyright-text\">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class=\"search-model\">
        <div class=\"h-100 d-flex align-items-center justify-content-center\">
            <div class=\"search-close-switch\">+</div>
            <form class=\"search-model-form\">
                <input type=\"text\" id=\"search-input\" placeholder=\"Search here.....\">
            </form>
        </div>
    </div>
    <!-- Search model end -->

{% block javascripts %}
    <!-- Js Plugins -->
    <script src=\"{{asset('front/./js/jquery-3.3.1.min.js')}}\"></script>
    <script src=\"{{asset('front/./js/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('front/./js/jquery.magnific-popup.min.js')}}\"></script>
    <script src=\"{{asset('front/./js/masonry.pkgd.min.js')}}\"></script>
    <script src=\"{{asset('front/./js/jquery.barfiller.js')}}\"></script>
    <script src=\"{{asset('front/./js/jquery.slicknav.js')}}\"></script>
    <script src=\"{{asset('front/./js/owl.carousel.min.js')}}\"></script>
    <script src=\"{{asset('front/./js/main.js')}}\"></script>

    {% endblock %}


</body>

</html>
", "base1.html.twig", "C:\\Users\\Malek Ayedi\\Desktop\\GestionUser\\templates\\base1.html.twig");
    }
}
