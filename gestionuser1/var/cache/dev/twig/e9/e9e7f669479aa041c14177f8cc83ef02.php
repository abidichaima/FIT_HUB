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

/* utilisateur/acceuil.html.twig */
class __TwigTemplate_f138c8e2cda11258118102fe021ee2a6 extends Template
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
            'contact' => [$this, 'block_contact'],
            'footer' => [$this, 'block_footer'],
            'modal' => [$this, 'block_modal'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/acceuil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/acceuil.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>

     <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

     <meta charset=\"UTF-8\">
     <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
     <meta name=\"description\" content=\"\">
     <meta name=\"keywords\" content=\"\">
     <meta name=\"author\" content=\"\">
     <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "<!--
Tooplate 2119 Gymso Fitness
https://www.tooplate.com/view/2119-gymso-fitness
-->
</head>
<body data-spy=\"scroll\" data-target=\"#navbarNav\" data-offset=\"50\">

    <!-- MENU BAR -->
    <nav class=\"navbar navbar-expand-lg fixed-top\">
        <div class=\"container\">
             

            <a class=\"navbar-brand\" href=\"index.html\">FitHub</a>

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
                        <a href=\"#about\" class=\"nav-link smoothScroll\">About Us</a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"#class\" class=\"nav-link smoothScroll\">Classes</a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"#schedule\" class=\"nav-link smoothScroll\">Schedules</a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"#contact\" class=\"nav-link smoothScroll\">Contact</a>
                    </li>
                </ul>
                <ul>
                <li>
               

\t\t\t\t</ul>
                
                  
\t\t\t\t


                <ul class=\"social-icon ml-lg-3\">
                    <li><a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show");
        echo "\" class=\"fa fa-user-circle\" style=\"font-size:25px;color:#FAC031\"></i></a></li>
                    <li><a href=\"#\" class=\"fa fa-facebook\" style=\"font-size:22px\"></a></li>
                    <li><a href=\"#\" class=\"fa fa-instagram\" style=\"font-size:22px\"></a></li>
                    <li><a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\" class=\"fa fa-sign-out\" style=\"font-size:22px\"></a></li>
                </ul>
            </div>

        </div>
    </nav>


     <!-- HERO -->
     <section class=\"hero d-flex flex-column justify-content-center align-items-center\" id=\"home\">

            <div class=\"bg-overlay\"></div>

               <div class=\"container\">
                    <div class=\"row\">

                         <div class=\"col-lg-8 col-md-10 mx-auto col-12\">
                              <div class=\"hero-text mt-5 text-center\">

                                    <h6 data-aos=\"fade-up\" data-aos-delay=\"300\">new way to build a healthy lifestyle!</h6>

                                    <h1 class=\"text-white\" data-aos=\"fade-up\" data-aos-delay=\"500\">Upgrade your body at fitHub</h1>

                                    

                                    <a href=\"#about\" class=\"btn custom-btn bordered mt-3\" data-aos=\"fade-up\" data-aos-delay=\"700\">learn more</a>
                                   
                              </div>
                         </div>

                    </div>
               </div>
     </section>


";
        // line 112
        $this->displayBlock('body', $context, $blocks);
        // line 115
        echo "

";
        // line 117
        $this->displayBlock('contact', $context, $blocks);
        // line 151
        echo "

    ";
        // line 153
        $this->displayBlock('footer', $context, $blocks);
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('modal', $context, $blocks);
        // line 221
        echo "
    ";
        // line 222
        $this->displayBlock('js', $context, $blocks);
        // line 230
        echo "
</body>
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

        echo "FitHub | Home Page";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "     <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/css/bootstrap.min.css"), "html", null, true);
        echo "\">
     <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/css/font-awesome.min.css"), "html", null, true);
        echo "\">
     <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/css/aos.css"), "html", null, true);
        echo "\">

     <!-- MAIN CSS -->
     <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/css/tooplate-gymso-style.css"), "html", null, true);
        echo "\">
     ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 112
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 113
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 117
    public function block_contact($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contact"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contact"));

        // line 118
        echo "     <!-- CONTACT -->
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

                        <p data-aos=\"fade-up\" data-aos-delay=\"800\"><i class=\"fa fa-map-marker mr-1\"></i> 120-240 Rio de Janeiro - State of Rio de Janeiro, Brazil</p>
                        <div class=\"google-map\" data-aos=\"fade-up\" data-aos-delay=\"900\">
                           <iframe src=\"https://maps.google.com/maps?q=Av.+Lúcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed\" width=\"1920\" height=\"250\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
                        </div>
                    </div>
                    
               </div>
          </div>
     </section>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 153
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 154
        echo "    
     <!-- FOOTER -->
     <footer class=\"site-footer\">
          <div class=\"container\">
               <div class=\"row\">

                    <div class=\"ml-auto col-lg-4 col-md-5\">
                        <p class=\"copyright-text\">Copyright &copy; 2020 Gymso Fitness Co.
                        
                        <br>Design: <a href=\"https://www.tooplate.com\">Tooplate</a></p>
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

    // line 180
    public function block_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        // line 181
        echo "    <!-- Modal -->
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
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 222
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 223
        echo "     <!-- SCRIPTS -->
     <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/js/aos.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/js/smoothscroll.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/js/custom.js"), "html", null, true);
        echo "\"></script>
     ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/acceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 228,  461 => 227,  457 => 226,  453 => 225,  449 => 224,  446 => 223,  436 => 222,  387 => 181,  377 => 180,  343 => 154,  333 => 153,  291 => 118,  281 => 117,  270 => 113,  260 => 112,  248 => 20,  242 => 17,  238 => 16,  233 => 15,  223 => 14,  204 => 5,  192 => 230,  190 => 222,  187 => 221,  185 => 180,  182 => 179,  180 => 153,  176 => 151,  174 => 117,  170 => 115,  168 => 112,  130 => 77,  124 => 74,  70 => 22,  68 => 14,  56 => 5,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>

     <title>{% block title %}FitHub | Home Page{% endblock %}</title>

     <meta charset=\"UTF-8\">
     <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
     <meta name=\"description\" content=\"\">
     <meta name=\"keywords\" content=\"\">
     <meta name=\"author\" content=\"\">
     <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    {% block stylesheets %}
     <link rel=\"stylesheet\" href=\"{{asset('./FrontOffice/css/bootstrap.min.css')}}\">
     <link rel=\"stylesheet\" href=\"{{asset('./FrontOffice/css/font-awesome.min.css')}}\">
     <link rel=\"stylesheet\" href=\"{{asset('./FrontOffice/css/aos.css')}}\">

     <!-- MAIN CSS -->
     <link rel=\"stylesheet\" href=\"{{asset('./FrontOffice/css/tooplate-gymso-style.css')}}\">
     {% endblock %}
<!--
Tooplate 2119 Gymso Fitness
https://www.tooplate.com/view/2119-gymso-fitness
-->
</head>
<body data-spy=\"scroll\" data-target=\"#navbarNav\" data-offset=\"50\">

    <!-- MENU BAR -->
    <nav class=\"navbar navbar-expand-lg fixed-top\">
        <div class=\"container\">
             

            <a class=\"navbar-brand\" href=\"index.html\">FitHub</a>

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
                        <a href=\"#about\" class=\"nav-link smoothScroll\">About Us</a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"#class\" class=\"nav-link smoothScroll\">Classes</a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"#schedule\" class=\"nav-link smoothScroll\">Schedules</a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"#contact\" class=\"nav-link smoothScroll\">Contact</a>
                    </li>
                </ul>
                <ul>
                <li>
               

\t\t\t\t</ul>
                
                  
\t\t\t\t


                <ul class=\"social-icon ml-lg-3\">
                    <li><a href=\"{{ path('app_profile_show') }}\" class=\"fa fa-user-circle\" style=\"font-size:25px;color:#FAC031\"></i></a></li>
                    <li><a href=\"#\" class=\"fa fa-facebook\" style=\"font-size:22px\"></a></li>
                    <li><a href=\"#\" class=\"fa fa-instagram\" style=\"font-size:22px\"></a></li>
                    <li><a href=\"{{ path('app_front') }}\" class=\"fa fa-sign-out\" style=\"font-size:22px\"></a></li>
                </ul>
            </div>

        </div>
    </nav>


     <!-- HERO -->
     <section class=\"hero d-flex flex-column justify-content-center align-items-center\" id=\"home\">

            <div class=\"bg-overlay\"></div>

               <div class=\"container\">
                    <div class=\"row\">

                         <div class=\"col-lg-8 col-md-10 mx-auto col-12\">
                              <div class=\"hero-text mt-5 text-center\">

                                    <h6 data-aos=\"fade-up\" data-aos-delay=\"300\">new way to build a healthy lifestyle!</h6>

                                    <h1 class=\"text-white\" data-aos=\"fade-up\" data-aos-delay=\"500\">Upgrade your body at fitHub</h1>

                                    

                                    <a href=\"#about\" class=\"btn custom-btn bordered mt-3\" data-aos=\"fade-up\" data-aos-delay=\"700\">learn more</a>
                                   
                              </div>
                         </div>

                    </div>
               </div>
     </section>


{% block body %}

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

                        <p data-aos=\"fade-up\" data-aos-delay=\"800\"><i class=\"fa fa-map-marker mr-1\"></i> 120-240 Rio de Janeiro - State of Rio de Janeiro, Brazil</p>
                        <div class=\"google-map\" data-aos=\"fade-up\" data-aos-delay=\"900\">
                           <iframe src=\"https://maps.google.com/maps?q=Av.+Lúcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed\" width=\"1920\" height=\"250\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
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
                        <p class=\"copyright-text\">Copyright &copy; 2020 Gymso Fitness Co.
                        
                        <br>Design: <a href=\"https://www.tooplate.com\">Tooplate</a></p>
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

    {% block js %}
     <!-- SCRIPTS -->
     <script src=\"{{asset('./FrontOffice/js/jquery.min.js')}}\"></script>
     <script src=\"{{asset('./FrontOffice/js/bootstrap.min.js')}}\"></script>
     <script src=\"{{asset('./FrontOffice/js/aos.js')}}\"></script>
     <script src=\"{{asset('./FrontOffice/js/smoothscroll.js')}}\"></script>
     <script src=\"{{asset('./FrontOffice/js/custom.js')}}\"></script>
     {% endblock %}

</body>
</html>", "utilisateur/acceuil.html.twig", "C:\\Users\\user\\Desktop\\FitHub\\templates\\utilisateur\\acceuil.html.twig");
    }
}
