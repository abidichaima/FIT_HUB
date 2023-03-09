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

/* utilisateur/add.html.twig */
class __TwigTemplate_b1a1e9b3d37ee79016925390f9e9f6d8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/add.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "utilisateur/add.html.twig", 1);
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

        // line 4
        echo "<center>
 
</center>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 9
        echo "<style>
    
    .form-style {
        padding: 50px;
    }
    .form-group {
        margin-bottom: 30px;
        width: 50%;
    }
    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 16px;
    }
    ::placeholder {
        color: #000000!important;
    }
    .logo {
        weight:100;

    }
    #role {
         margin-bottom: 30px;
        width: 50%;

    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "<center>

<div style=\"margin-top:10px; padding:20px; width:800px; height:fit-content; 
       border-radius:10px; background-image: url('../images/image.jpg'); background-size: 100% ; box-shadow: -1px -1px 34px 3px rgba(0,0,0,0.63);
-webkit-box-shadow: -1px -1px 34px 3px rgba(0,0,0,0.63);-moz-box-shadow: -1px -1px 34px 3px rgba(0,0,0,0.63);\" class=\"container\">

<label  style=\"color:black;  font-weight: bold; font-size: 30px; font-family:Big Caslon;\"  ><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 256 256\"><rect width=\"256\" height=\"256\" fill=\"none\"/><path d=\"M220.2,104l-20-34.7a28.1,28.1,0,0,0-47.3-1.9l-17.3-30A28.1,28.1,0,0,0,97.3,27.1a29.4,29.4,0,0,0-9.9,9.6,27.9,27.9,0,0,0-11.5-6.2,27.1,27.1,0,0,0-21.2,2.8A27.9,27.9,0,0,0,44.4,71.5l3.4,5.8A28.5,28.5,0,0,0,36,81a28.1,28.1,0,0,0-10.2,38.2l42,72.8a88,88,0,1,0,152.4-88Zm-6.7,62.6A71.2,71.2,0,0,1,180,210.3,72.1,72.1,0,0,1,81.6,184l-42-72.8a12,12,0,0,1,20.8-12l22,38.1a8,8,0,1,0,13.9-8l-22-38.1h0l-16-27.7a12,12,0,0,1-1.2-9.1,11.8,11.8,0,0,1,5.6-7.3,12,12,0,0,1,9.1-1.2,12.5,12.5,0,0,1,7.3,5.6L87,65.4h.1l26,45a7.7,7.7,0,0,0,6.9,4,7.3,7.3,0,0,0,4-1.1,8,8,0,0,0,2.9-10.9l-26-45h0a12,12,0,1,1,20.8-12l30,51.9h0l6.3,11a48.1,48.1,0,0,0-10.9,61,8,8,0,0,0,13.8-8,32,32,0,0,1,11.7-43.7,8.1,8.1,0,0,0,3.8-4.9,8.4,8.4,0,0,0-.8-6l-10-17.4a12,12,0,0,1,13.5-17.5,11.8,11.8,0,0,1,7.2,5.5l20,34.7A70.9,70.9,0,0,1,213.5,166.6Zm-125.8,78a8.2,8.2,0,0,1-6.6,3.4,8.6,8.6,0,0,1-4.6-1.4A117.9,117.9,0,0,1,41.1,208a8,8,0,1,1,13.8-8,102.6,102.6,0,0,0,30.8,33.4A8.1,8.1,0,0,1,87.7,244.6ZM168,31a8,8,0,0,1,8-8h0a60.2,60.2,0,0,1,52,30,7.9,7.9,0,0,1-3,10.9,7.1,7.1,0,0,1-4,1.1,8,8,0,0,1-6.9-4A44,44,0,0,0,176,39,8,8,0,0,1,168,31Z\"/></svg>Bienvenue</label> 




       ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 50, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
      
        <div class=\"form-group\">
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 53, $this->source); })()), "nom", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Merci de taper votre nom"]]);
        echo "
            ";
        // line 54
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 54, $this->source); })()), "nom", [], "any", false, false, false, 54), 'errors'))) {
            echo "    
            <div class=\"alert alert-danger \">
            ";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 56, $this->source); })()), "nom", [], "any", false, false, false, 56), 'errors');
            echo "
            </div>
            ";
        }
        // line 59
        echo "        </div>
       
        <div class=\"form-group\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 62, $this->source); })()), "prenom", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Merci de taper votre prenom"]]);
        echo "
            ";
        // line 63
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 63, $this->source); })()), "prenom", [], "any", false, false, false, 63), 'errors'))) {
            // line 64
            echo "            <div class=\"alert alert-danger \">
            ";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 65, $this->source); })()), "prenom", [], "any", false, false, false, 65), 'errors');
            echo "
            </div>
             ";
        }
        // line 68
        echo "        </div>
         <div class=\"form-group\">
       
            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 71, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Merci de choisir une date"]]);
        echo "
            ";
        // line 72
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 72, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 72), 'errors'))) {
            // line 73
            echo "            <div class=\"alert alert-danger \">
            ";
            // line 74
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 74, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 74), 'errors');
            echo "
            
            </div>
            ";
        }
        // line 78
        echo "        </div>
        <div class=\"form-group\" >
            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 80, $this->source); })()), "telephone", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Merci de taper votre numero de telephone "]]);
        echo "
            ";
        // line 81
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 81, $this->source); })()), "telephone", [], "any", false, false, false, 81), 'errors'))) {
            // line 82
            echo "            <div class=\"alert alert-danger \">
            ";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 83, $this->source); })()), "telephone", [], "any", false, false, false, 83), 'errors');
            echo "
            
            </div>
            ";
        }
        // line 87
        echo "        </div>
       
        
        <div class=\"form-group\">
            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 91, $this->source); })()), "adresse", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Merci de taper votre adresse"]]);
        echo "
            ";
        // line 92
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 92, $this->source); })()), "adresse", [], "any", false, false, false, 92), 'errors'))) {
            echo " 
            <div class=\"alert alert-danger \">
            ";
            // line 94
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 94, $this->source); })()), "adresse", [], "any", false, false, false, 94), 'errors');
            echo "
            
            </div>
            ";
        }
        // line 98
        echo "        </div>
        

        <div class=\"form-group\">
       
            ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 103, $this->source); })()), "genre", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Merci de choisir le genre"]]);
        echo "
            ";
        // line 104
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 104, $this->source); })()), "genre", [], "any", false, false, false, 104), 'errors'))) {
            // line 105
            echo "            <div class=\"alert alert-danger \">
            ";
            // line 106
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 106, $this->source); })()), "genre", [], "any", false, false, false, 106), 'errors');
            echo "
            
            </div>
            ";
        }
        // line 110
        echo "        </div>
        
 
        <div class=\"form-group\">
            ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 114, $this->source); })()), "email", [], "any", false, false, false, 114), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Merci de taper votre email"]]);
        echo "
            ";
        // line 115
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 115, $this->source); })()), "email", [], "any", false, false, false, 115), 'errors'))) {
            // line 116
            echo "            <div class=\"alert alert-danger \">
            ";
            // line 117
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 117, $this->source); })()), "email", [], "any", false, false, false, 117), 'errors');
            echo "
            
            </div>
            ";
        }
        // line 121
        echo "
            
        </div>
        <div class=\"form-group\">
        
            ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 126, $this->source); })()), "password", [], "any", false, false, false, 126), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Merci de taper votre mot de passe"]]);
        echo "
            ";
        // line 127
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 127, $this->source); })()), "password", [], "any", false, false, false, 127), 'errors'))) {
            // line 128
            echo "            <div class=\"alert alert-danger \">
            ";
            // line 129
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 129, $this->source); })()), "password", [], "any", false, false, false, 129), 'errors');
            echo "
            
            </div>
            ";
        }
        // line 133
        echo "        </div>
       
       
        
       
        
       <button class=\"btn custom-btn bg-color mt-3\" style=\"background-color:#FAC031;width:757px; border:none\">";
        // line 139
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 139, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button> 
       
        

        ";
        // line 143
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 143, $this->source); })()), 'form_end');
        echo "

        
    
</div>


</center>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 143,  333 => 139,  325 => 133,  318 => 129,  315 => 128,  313 => 127,  309 => 126,  302 => 121,  295 => 117,  292 => 116,  290 => 115,  286 => 114,  280 => 110,  273 => 106,  270 => 105,  268 => 104,  264 => 103,  257 => 98,  250 => 94,  245 => 92,  241 => 91,  235 => 87,  228 => 83,  225 => 82,  223 => 81,  219 => 80,  215 => 78,  208 => 74,  205 => 73,  203 => 72,  199 => 71,  194 => 68,  188 => 65,  185 => 64,  183 => 63,  179 => 62,  174 => 59,  168 => 56,  163 => 54,  159 => 53,  153 => 50,  140 => 39,  130 => 38,  93 => 9,  83 => 8,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}
<center>
 
</center>
{% endblock %}
{% block css %}
<style>
    
    .form-style {
        padding: 50px;
    }
    .form-group {
        margin-bottom: 30px;
        width: 50%;
    }
    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 16px;
    }
    ::placeholder {
        color: #000000!important;
    }
    .logo {
        weight:100;

    }
    #role {
         margin-bottom: 30px;
        width: 50%;

    }
</style>
{% endblock %}

{% block body %}
<center>

<div style=\"margin-top:10px; padding:20px; width:800px; height:fit-content; 
       border-radius:10px; background-image: url('../images/image.jpg'); background-size: 100% ; box-shadow: -1px -1px 34px 3px rgba(0,0,0,0.63);
-webkit-box-shadow: -1px -1px 34px 3px rgba(0,0,0,0.63);-moz-box-shadow: -1px -1px 34px 3px rgba(0,0,0,0.63);\" class=\"container\">

<label  style=\"color:black;  font-weight: bold; font-size: 30px; font-family:Big Caslon;\"  ><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 256 256\"><rect width=\"256\" height=\"256\" fill=\"none\"/><path d=\"M220.2,104l-20-34.7a28.1,28.1,0,0,0-47.3-1.9l-17.3-30A28.1,28.1,0,0,0,97.3,27.1a29.4,29.4,0,0,0-9.9,9.6,27.9,27.9,0,0,0-11.5-6.2,27.1,27.1,0,0,0-21.2,2.8A27.9,27.9,0,0,0,44.4,71.5l3.4,5.8A28.5,28.5,0,0,0,36,81a28.1,28.1,0,0,0-10.2,38.2l42,72.8a88,88,0,1,0,152.4-88Zm-6.7,62.6A71.2,71.2,0,0,1,180,210.3,72.1,72.1,0,0,1,81.6,184l-42-72.8a12,12,0,0,1,20.8-12l22,38.1a8,8,0,1,0,13.9-8l-22-38.1h0l-16-27.7a12,12,0,0,1-1.2-9.1,11.8,11.8,0,0,1,5.6-7.3,12,12,0,0,1,9.1-1.2,12.5,12.5,0,0,1,7.3,5.6L87,65.4h.1l26,45a7.7,7.7,0,0,0,6.9,4,7.3,7.3,0,0,0,4-1.1,8,8,0,0,0,2.9-10.9l-26-45h0a12,12,0,1,1,20.8-12l30,51.9h0l6.3,11a48.1,48.1,0,0,0-10.9,61,8,8,0,0,0,13.8-8,32,32,0,0,1,11.7-43.7,8.1,8.1,0,0,0,3.8-4.9,8.4,8.4,0,0,0-.8-6l-10-17.4a12,12,0,0,1,13.5-17.5,11.8,11.8,0,0,1,7.2,5.5l20,34.7A70.9,70.9,0,0,1,213.5,166.6Zm-125.8,78a8.2,8.2,0,0,1-6.6,3.4,8.6,8.6,0,0,1-4.6-1.4A117.9,117.9,0,0,1,41.1,208a8,8,0,1,1,13.8-8,102.6,102.6,0,0,0,30.8,33.4A8.1,8.1,0,0,1,87.7,244.6ZM168,31a8,8,0,0,1,8-8h0a60.2,60.2,0,0,1,52,30,7.9,7.9,0,0,1-3,10.9,7.1,7.1,0,0,1-4,1.1,8,8,0,0,1-6.9-4A44,44,0,0,0,176,39,8,8,0,0,1,168,31Z\"/></svg>Bienvenue</label> 




       {{form_start(utilisateur,{'attr':{'novalidate':'novalidate'}} )}}
      
        <div class=\"form-group\">
            {{ form_widget(utilisateur.nom, {'attr': {'class': 'form-control', 'placeholder': 'Merci de taper votre nom'}}) }}
            {% if form_errors(utilisateur.nom)is not empty %}    
            <div class=\"alert alert-danger \">
            {{ form_errors(utilisateur.nom) }}
            </div>
            {% endif %}
        </div>
       
        <div class=\"form-group\">
            {{ form_widget(utilisateur.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Merci de taper votre prenom'}}) }}
            {% if form_errors(utilisateur.prenom)is not empty %}
            <div class=\"alert alert-danger \">
            {{ form_errors(utilisateur.prenom) }}
            </div>
             {% endif %}
        </div>
         <div class=\"form-group\">
       
            {{ form_widget(utilisateur.date_de_naissance, {'attr': {'class': 'form-control', 'placeholder': 'Merci de choisir une date'}}) }}
            {% if form_errors(utilisateur.date_de_naissance)is not empty %}
            <div class=\"alert alert-danger \">
            {{ form_errors(utilisateur.date_de_naissance) }}
            
            </div>
            {% endif %}
        </div>
        <div class=\"form-group\" >
            {{ form_widget(utilisateur.telephone, {'attr': {'class': 'form-control', 'placeholder': 'Merci de taper votre numero de telephone '}}) }}
            {% if form_errors(utilisateur.telephone)is not empty %}
            <div class=\"alert alert-danger \">
            {{ form_errors(utilisateur.telephone) }}
            
            </div>
            {% endif %}
        </div>
       
        
        <div class=\"form-group\">
            {{ form_widget(utilisateur.adresse, {'attr': {'class': 'form-control', 'placeholder': 'Merci de taper votre adresse'}}) }}
            {% if form_errors(utilisateur.adresse)is not empty %} 
            <div class=\"alert alert-danger \">
            {{ form_errors(utilisateur.adresse) }}
            
            </div>
            {% endif %}
        </div>
        

        <div class=\"form-group\">
       
            {{ form_widget(utilisateur.genre, {'attr': {'class': 'form-control', 'placeholder': 'Merci de choisir le genre'}}) }}
            {% if form_errors(utilisateur.genre)is not empty %}
            <div class=\"alert alert-danger \">
            {{ form_errors(utilisateur.genre) }}
            
            </div>
            {% endif %}
        </div>
        
 
        <div class=\"form-group\">
            {{ form_widget(utilisateur.email, {'attr': {'class': 'form-control', 'placeholder': 'Merci de taper votre email'}}) }}
            {% if form_errors(utilisateur.email)is not empty %}
            <div class=\"alert alert-danger \">
            {{ form_errors(utilisateur.email) }}
            
            </div>
            {% endif %}

            
        </div>
        <div class=\"form-group\">
        
            {{ form_widget(utilisateur.password, {'attr': {'class': 'form-control', 'placeholder': 'Merci de taper votre mot de passe'}}) }}
            {% if form_errors(utilisateur.password)is not empty %}
            <div class=\"alert alert-danger \">
            {{ form_errors(utilisateur.password) }}
            
            </div>
            {% endif %}
        </div>
       
       
        
       
        
       <button class=\"btn custom-btn bg-color mt-3\" style=\"background-color:#FAC031;width:757px; border:none\">{{button_label|default('Save')}}</button> 
       
        

        {{ form_end(utilisateur) }}

        
    
</div>


</center>

{% endblock %}", "utilisateur/add.html.twig", "C:\\Users\\user\\Desktop\\gestion user\\templates\\utilisateur\\add.html.twig");
    }
}
