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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" >
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"back/data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
      
    </head>
  <!-- Page Wrapper -->
    <div id=\"wrapper\">

        <!-- Sidebar -->
        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

            <!-- Sidebar - Brand -->
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"back/index.html\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                    <i class=\"fas fa-laugh-wink\"></i>
                </div>
                <div class=\"sidebar-brand-text mx-3\">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class=\"sidebar-divider my-0\">

            <!-- Nav Item - Dashboard -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"back/index.html\">
                    <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class=\"sidebar-divider\">

            <!-- Heading -->
          
           

         
            <hr class=\"sidebar-divider\">

            <!-- Heading -->
           
           

            <!-- Nav Item - Tables -->
           
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>Users</span></a>
            </li> 
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roleuser_index");
        echo "\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>Roles</span></a>
            </li>
             <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/cours.html"), "html", null, true);
        echo "\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>Produits</span></a>
            </li>
             <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/cours.html"), "html", null, true);
        echo "\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>Categories</span></a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/cours.html"), "html", null, true);
        echo "\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>commandes</span></a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/cours.html"), "html", null, true);
        echo "\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>cours</span></a>
            </li>
             <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/cours.html"), "html", null, true);
        echo "\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>planning</span></a>
            </li>
             <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/cours.html"), "html", null, true);
        echo "\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>evenement</span></a>
            </li>
             <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/cours.html"), "html", null, true);
        echo "\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>tools</span></a>
            </li>
             <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/cours.html"), "html", null, true);
        echo "\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>articles</span></a>
            </li>
             <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/cours.html"), "html", null, true);
        echo "\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>commentaires</span></a>
            </li>
             <li class=\"nav-item active\">
                <a class=\"nav-link\"  href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/cours.html"), "html", null, true);
        echo "\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>reclamations</span></a>
            </li>
             <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/cours.html"), "html", null, true);
        echo "\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>priorite</span></a>
            </li>
             <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/cours.html"), "html", null, true);
        echo "\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>type</span></a>
            </li>
            <!-- Divider -->
            <hr class=\"sidebar-divider d-none d-md-block\">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </div>

        </ul>
    <body>
        ";
        // line 143
        $this->displayBlock('body', $context, $blocks);
        // line 146
        echo "    </body>
      <footer class=\"sticky-footer bg-white\">
                <div class=\"container my-auto\">
                    <div class=\"copyright text-center my-auto\">
                        <span>  &copy; </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
              ";
        // line 155
        $this->displayBlock('javascripts', $context, $blocks);
        // line 174
        echo "
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " COURS ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "             <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"), "html", null, true);
        echo "\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this page -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendor/datatables/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 143
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 144
        echo "   
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 155
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 156
        echo "          
             <!-- Bootstrap core JavaScript-->
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom scripts for all pages-->
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/sb-admin-2.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Page level plugins -->
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendor/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendor/datatables/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>

    
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/demo/datatables-demo.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 172,  375 => 169,  371 => 168,  365 => 165,  359 => 162,  353 => 159,  349 => 158,  345 => 156,  335 => 155,  324 => 144,  314 => 143,  302 => 18,  296 => 15,  289 => 11,  283 => 9,  273 => 8,  254 => 5,  243 => 174,  241 => 155,  230 => 146,  228 => 143,  211 => 129,  203 => 124,  195 => 119,  187 => 114,  179 => 109,  171 => 104,  163 => 99,  155 => 94,  147 => 89,  139 => 84,  131 => 79,  123 => 74,  115 => 69,  107 => 64,  61 => 20,  58 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" >
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %} COURS {% endblock %}</title>
        <link rel=\"icon\" href=\"back/data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run composer require symfony/webpack-encore-bundle to start using Symfony UX #}
        {% block stylesheets %}
             <link href=\"{{asset('back/vendor/fontawesome-free/css/all.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"{{asset('back/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"{{asset('back/css/sb-admin-2.min.css')}}\" rel=\"stylesheet\">

    <!-- Custom styles for this page -->
    <link href=\"{{asset('back/vendor/datatables/dataTables.bootstrap4.min.css')}}\" rel=\"stylesheet\">
        {% endblock %}

      
    </head>
  <!-- Page Wrapper -->
    <div id=\"wrapper\">

        <!-- Sidebar -->
        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

            <!-- Sidebar - Brand -->
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"back/index.html\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                    <i class=\"fas fa-laugh-wink\"></i>
                </div>
                <div class=\"sidebar-brand-text mx-3\">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class=\"sidebar-divider my-0\">

            <!-- Nav Item - Dashboard -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"back/index.html\">
                    <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class=\"sidebar-divider\">

            <!-- Heading -->
          
           

         
            <hr class=\"sidebar-divider\">

            <!-- Heading -->
           
           

            <!-- Nav Item - Tables -->
           
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{path('app_user_index')}}\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>Users</span></a>
            </li> 
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{path('app_roleuser_index')}}\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>Roles</span></a>
            </li>
             <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{asset('back/cours.html')}}\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>Produits</span></a>
            </li>
             <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{asset('back/cours.html')}}\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>Categories</span></a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{asset('back/cours.html')}}\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>commandes</span></a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{asset('back/cours.html')}}\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>cours</span></a>
            </li>
             <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{asset('back/cours.html')}}\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>planning</span></a>
            </li>
             <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{asset('back/cours.html')}}\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>evenement</span></a>
            </li>
             <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{asset('back/cours.html')}}\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>tools</span></a>
            </li>
             <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{asset('back/cours.html')}}\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>articles</span></a>
            </li>
             <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{asset('back/cours.html')}}\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>commentaires</span></a>
            </li>
             <li class=\"nav-item active\">
                <a class=\"nav-link\"  href=\"{{asset('back/cours.html') }}\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>reclamations</span></a>
            </li>
             <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{asset('back/cours.html')}}\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>priorite</span></a>
            </li>
             <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{asset('back/cours.html')}}\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>type</span></a>
            </li>
            <!-- Divider -->
            <hr class=\"sidebar-divider d-none d-md-block\">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </div>

        </ul>
    <body>
        {% block body %}
   
        {% endblock %}
    </body>
      <footer class=\"sticky-footer bg-white\">
                <div class=\"container my-auto\">
                    <div class=\"copyright text-center my-auto\">
                        <span>  &copy; </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
              {% block javascripts %}
          
             <!-- Bootstrap core JavaScript-->
    <script src=\"{{asset('back/vendor/jquery/jquery.min.js')}}\"></script>
    <script src=\"{{asset('back/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"{{asset('back/vendor/jquery-easing/jquery.easing.min.js')}}\"></script>

    <!-- Custom scripts for all pages-->
    <script src=\"{{asset('back/css/sb-admin-2.min.js')}}\"></script>

    <!-- Page level plugins -->
    <script src=\"{{asset('back/vendor/datatables/jquery.dataTables.min.js')}}\"></script>
    <script src=\"{{asset('back/vendor/datatables/dataTables.bootstrap4.min.js')}}\"></script>

    
    <script src=\"{{asset('back/js/demo/datatables-demo.js')}}\"></script>
        {% endblock %}

</html>", "base.html.twig", "C:\\Users\\Malek Ayedi\\Desktop\\GestionUser\\templates\\base.html.twig");
    }
}
