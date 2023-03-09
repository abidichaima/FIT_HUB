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

/* baseback.html.twig */
class __TwigTemplate_d098b3005e4564d186e5dd7736b1642d extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseback.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <!-- plugins:css -->
  ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "  <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/favicon.png"), "html", null, true);
        echo "\" />
</head>

<body>
<div class=\"container-scroller\">
  <!-- partial:partials/_navbar.html -->
  <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
    <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-center\">
        </div>
    <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
      <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
        <span class=\"icon-menu\"></span>
      </button>
      <ul class=\"navbar-nav mr-lg-2\">
        <li class=\"nav-item nav-search d-none d-lg-block\">
          <div class=\"input-group\">
            <div class=\"input-group-prepend hover-cursor\" id=\"navbar-search-icon\">
                <span class=\"input-group-text\" id=\"search\">
                  <i class=\"icon-search\"></i>
                </span>
            </div>
            <input type=\"text\" class=\"form-control\" id=\"navbar-search-input\" placeholder=\"Search now\" aria-label=\"search\" aria-describedby=\"search\">
          </div>
        </li>
      </ul>
      <ul class=\"navbar-nav navbar-nav-right\">
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
            <i class=\"icon-bell mx-0\"></i>
            <span class=\"count\"></span>
          </a>
          <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
            <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
            <a class=\"dropdown-item preview-item\">
              <div class=\"preview-thumbnail\">
                <div class=\"preview-icon bg-success\">
                  <i class=\"ti-info-alt mx-0\"></i>
                </div>
              </div>
              <div class=\"preview-item-content\">
                <h6 class=\"preview-subject font-weight-normal\">Application Error</h6>
                <p class=\"font-weight-light small-text mb-0 text-muted\">
                  Just now
                </p>
              </div>
            </a>
            <a class=\"dropdown-item preview-item\">
              <div class=\"preview-thumbnail\">
                <div class=\"preview-icon bg-warning\">
                  <i class=\"ti-settings mx-0\"></i>
                </div>
              </div>
              <div class=\"preview-item-content\">
                <h6 class=\"preview-subject font-weight-normal\">Settings</h6>
                <p class=\"font-weight-light small-text mb-0 text-muted\">
                  Private message
                </p>
              </div>
            </a>
            <a class=\"dropdown-item preview-item\">
              <div class=\"preview-thumbnail\">
                <div class=\"preview-icon bg-info\">
                  <i class=\"ti-user mx-0\"></i>
                </div>
              </div>
              <div class=\"preview-item-content\">
                <h6 class=\"preview-subject font-weight-normal\">New user registration</h6>
                <p class=\"font-weight-light small-text mb-0 text-muted\">
                  2 days ago
                </p>
              </div>
            </a>
          </div>
        </li>
        <li class=\"nav-item nav-profile dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
            <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/faces/face28.jpg"), "html", null, true);
        echo "\" alt=\"profile\"/>
          </a>
          <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
            <a class=\"dropdown-item\">
              <i class=\"ti-settings text-primary\"></i>
              Settings
            </a>
            <a class=\"dropdown-item\">
              <i class=\"ti-power-off text-primary\"></i>
              Logout
            </a>
          </div>
        </li>
        <li class=\"nav-item nav-settings d-none d-lg-flex\">
          <a class=\"nav-link\" href=\"#\">
            <i class=\"icon-ellipsis\"></i>
          </a>
        </li>
      </ul>
      <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
        <span class=\"icon-menu\"></span>
      </button>
    </div>
  </nav>
  <!-- partial -->
  <div class=\"container-fluid page-body-wrapper\">
    <!-- partial:partials/_settings-panel.html -->
    <div class=\"theme-setting-wrapper\">
      <div id=\"settings-trigger\"><i class=\"ti-settings\"></i></div>
      <div id=\"theme-settings\" class=\"settings-panel\">
        <i class=\"settings-close ti-close\"></i>
        <p class=\"settings-heading\">SIDEBAR SKINS</p>
        <div class=\"sidebar-bg-options selected\" id=\"sidebar-light-theme\"><div class=\"img-ss rounded-circle bg-light border mr-3\"></div>Light</div>
        <div class=\"sidebar-bg-options\" id=\"sidebar-dark-theme\"><div class=\"img-ss rounded-circle bg-dark border mr-3\"></div>Dark</div>
        <p class=\"settings-heading mt-2\">HEADER SKINS</p>
        <div class=\"color-tiles mx-0 px-4\">
          <div class=\"tiles success\"></div>
          <div class=\"tiles warning\"></div>
          <div class=\"tiles danger\"></div>
          <div class=\"tiles info\"></div>
          <div class=\"tiles dark\"></div>
          <div class=\"tiles default\"></div>
        </div>
      </div>
    </div>
    <div id=\"right-sidebar\" class=\"settings-panel\">
      <i class=\"settings-close ti-close\"></i>
      <ul class=\"nav nav-tabs border-top\" id=\"setting-panel\" role=\"tablist\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" id=\"todo-tab\" data-toggle=\"tab\" href=\"#todo-section\" role=\"tab\" aria-controls=\"todo-section\" aria-expanded=\"true\">TO DO LIST</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" id=\"chats-tab\" data-toggle=\"tab\" href=\"#chats-section\" role=\"tab\" aria-controls=\"chats-section\">CHATS</a>
        </li>
      </ul>
      <div class=\"tab-content\" id=\"setting-content\">
        <div class=\"tab-pane fade show active scroll-wrapper\" id=\"todo-section\" role=\"tabpanel\" aria-labelledby=\"todo-section\">
          <div class=\"add-items d-flex px-3 mb-0\">
            <form class=\"form w-100\">
              <div class=\"form-group d-flex\">
                <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"Add To-do\">
                <button type=\"submit\" class=\"add btn btn-primary todo-list-add-btn\" id=\"add-task\">Add</button>
              </div>
            </form>
          </div>
          <div class=\"list-wrapper px-3\">
            <ul class=\"d-flex flex-column-reverse todo-list\">
              <li>
                <div class=\"form-check\">
                  <label class=\"form-check-label\">
                    <input class=\"checkbox\" type=\"checkbox\">
                    Team review meeting at 3.00 PM
                  </label>
                </div>
                <i class=\"remove ti-close\"></i>
              </li>
              <li>
                <div class=\"form-check\">
                  <label class=\"form-check-label\">
                    <input class=\"checkbox\" type=\"checkbox\">
                    Prepare for presentation
                  </label>
                </div>
                <i class=\"remove ti-close\"></i>
              </li>
              <li>
                <div class=\"form-check\">
                  <label class=\"form-check-label\">
                    <input class=\"checkbox\" type=\"checkbox\">
                    Resolve all the low priority tickets due today
                  </label>
                </div>
                <i class=\"remove ti-close\"></i>
              </li>
              <li class=\"completed\">
                <div class=\"form-check\">
                  <label class=\"form-check-label\">
                    <input class=\"checkbox\" type=\"checkbox\" checked>
                    Schedule meeting for next week
                  </label>
                </div>
                <i class=\"remove ti-close\"></i>
              </li>
              <li class=\"completed\">
                <div class=\"form-check\">
                  <label class=\"form-check-label\">
                    <input class=\"checkbox\" type=\"checkbox\" checked>
                    Project review
                  </label>
                </div>
                <i class=\"remove ti-close\"></i>
              </li>
            </ul>
          </div>
          <h4 class=\"px-3 text-muted mt-5 font-weight-light mb-0\">Events</h4>
          <div class=\"events pt-4 px-3\">
            <div class=\"wrapper d-flex mb-2\">
              <i class=\"ti-control-record text-primary mr-2\"></i>
              <span>Feb 11 2018</span>
            </div>
            <p class=\"mb-0 font-weight-thin text-gray\">Creating component page build a js</p>
            <p class=\"text-gray mb-0\">The total number of sessions</p>
          </div>
          <div class=\"events pt-4 px-3\">
            <div class=\"wrapper d-flex mb-2\">
              <i class=\"ti-control-record text-primary mr-2\"></i>
              <span>Feb 7 2018</span>
            </div>
            <p class=\"mb-0 font-weight-thin text-gray\">Meeting with Alisa</p>
            <p class=\"text-gray mb-0 \">Call Sarah Graves</p>
          </div>
        </div>
        <!-- To do section tab ends -->
        <div class=\"tab-pane fade\" id=\"chats-section\" role=\"tabpanel\" aria-labelledby=\"chats-section\">
          <div class=\"d-flex align-items-center justify-content-between border-bottom\">
            <p class=\"settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0\">Friends</p>
            <small class=\"settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal\">See All</small>
          </div>
          <ul class=\"chat-list\">
            <li class=\"list active\">
              <div class=\"profile\"><img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/faces/face1.jpg"), "html", null, true);
        echo "\" alt=\"image\"><span class=\"online\"></span></div>
              <div class=\"info\">
                <p>Thomas Douglas</p>
                <p>Available</p>
              </div>
              <small class=\"text-muted my-auto\">19 min</small>
            </li>
            <li class=\"list\">
              <div class=\"profile\"><img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/faces/face2.jpg"), "html", null, true);
        echo "\" alt=\"image\"><span class=\"offline\"></span></div>
              <div class=\"info\">
                <div class=\"wrapper d-flex\">
                  <p>Catherine</p>
                </div>
                <p>Away</p>
              </div>
              <div class=\"badge badge-success badge-pill my-auto mx-2\">4</div>
              <small class=\"text-muted my-auto\">23 min</small>
            </li>
            <li class=\"list\">
              <div class=\"profile\"><img src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/faces/face3.jpg"), "html", null, true);
        echo "\" alt=\"image\"><span class=\"online\"></span></div>
              <div class=\"info\">
                <p>Daniel Russell</p>
                <p>Available</p>
              </div>
              <small class=\"text-muted my-auto\">14 min</small>
            </li>
            <li class=\"list\">
              <div class=\"profile\"><img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/faces/face4.jpg"), "html", null, true);
        echo "\" alt=\"image\"><span class=\"offline\"></span></div>
              <div class=\"info\">
                <p>James Richardson</p>
                <p>Away</p>
              </div>
              <small class=\"text-muted my-auto\">2 min</small>
            </li>
            <li class=\"list\">
              <div class=\"profile\"><img src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/faces/face5.jpg"), "html", null, true);
        echo "\" alt=\"image\"><span class=\"online\"></span></div>
              <div class=\"info\">
                <p>Madeline Kennedy</p>
                <p>Available</p>
              </div>
              <small class=\"text-muted my-auto\">5 min</small>
            </li>
            <li class=\"list\">
              <div class=\"profile\"><img src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/faces/face6.jpg"), "html", null, true);
        echo "\" alt=\"image\"><span class=\"online\"></span></div>
              <div class=\"info\">
                <p>Sarah Graves</p>
                <p>Available</p>
              </div>
              <small class=\"text-muted my-auto\">47 min</small>
            </li>
          </ul>
        </div>
        <!-- chat tab ends -->
      </div>
    </div>
    <!-- partial -->
    <!-- partial:partials/_sidebar.html -->
    <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
      <ul class=\"nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">
            <i class=\"icon-grid menu-icon\"></i>
            <span class=\"menu-title\">Home</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
            <i class=\"icon-layout menu-icon\"></i>
            <span class=\"menu-title\">Utilisateur</span>
            <i class=\"menu-arrow\"></i>
          </a>
          <div class=\"collapse\" id=\"ui-basic\">
            <ul class=\"nav flex-column sub-menu\">
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Ajouter Utilisateur</a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Afficher Utilisateur</a></li>
            </ul>
          </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#form-elements\" aria-expanded=\"false\" aria-controls=\"form-elements\">
            <i class=\"icon-columns menu-icon\"></i>
            <span class=\"menu-title\">Abonnement</span>
            <i class=\"menu-arrow\"></i>
          </a>
          <div class=\"collapse\" id=\"form-elements\">
            <ul class=\"nav flex-column sub-menu\">
              <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">Ajouter Abonnement</a></li>
              <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">Afficher Abonnement</a></li>
              <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">Ajouter Pack</a></li>
              <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">Afficher Pack</a></li>
            </ul>
          </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#charts\" aria-expanded=\"false\" aria-controls=\"charts\">
            <i class=\"icon-bar-graph menu-icon\"></i>
            <span class=\"menu-title\">Consultation</span>
            <i class=\"menu-arrow\"></i>
          </a>
          <div class=\"collapse\" id=\"charts\">
            <ul class=\"nav flex-column sub-menu\">
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Ajouter Consultation</a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Afficher Consultations</a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Ajouter Fiche</a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Afficher Fiches</a></li>
            </ul>
          </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#tables\" aria-expanded=\"false\" aria-controls=\"tables\">
            <i class=\"icon-grid-2 menu-icon\"></i>
            <span class=\"menu-title\">Blog</span>
            <i class=\"menu-arrow\"></i>
          </a>
          <div class=\"collapse\" id=\"tables\">
            <ul class=\"nav flex-column sub-menu\">
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Ajouter Article</a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Afficher Article</a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Ajouter Commentaire</a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Afficher Commentaire</a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Ajouter Categorie</a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Afficher Categorie</a></li>
            </ul>
          </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#icons\" aria-expanded=\"false\" aria-controls=\"icons\">
            <i class=\"icon-contract menu-icon\"></i>
            <span class=\"menu-title\">Séance</span>
            <i class=\"menu-arrow\"></i>
          </a>
          <div class=\"collapse\" id=\"icons\">
            <ul class=\"nav flex-column sub-menu\">
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/seance/new\">Ajouter Séance</a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/seance\">Afficher les Séances</a></li>
                 <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/participation/seance/\">Afficher Participations</a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/histogram-chart-month\">Statistiques</a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/video/admin\">Afficher Vidéos</a></li>
            </ul>
          </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
            <i class=\"icon-head menu-icon\"></i>
            <span class=\"menu-title\">Evenement </span>
            <i class=\"menu-arrow\"></i>
          </a>
          <div class=\"collapse\" id=\"auth\">
            <ul class=\"nav flex-column sub-menu\">
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\"> Ajouter Evenement </a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\"> Afficher Evenements </a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\"> Ajouter Ticket </a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\"> Afficher Tickets </a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\"> Ajouter Participation </a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\"> Afficher Participations </a></li>
            </ul>
          </div>
        </li>


      </ul>
    </nav>
    <!-- partial -->
    <div class=\"main-panel\">
      <div class=\"content-wrapper\">
        <div class=\"row\">
          ";
        // line 406
        $this->displayBlock('body', $context, $blocks);
        // line 407
        echo "
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->


  </div>
  <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->




<!-- partial:partials/_footer.html -->
<footer class=\"footer\">
  <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
    <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Copyright © 2021.  Premium <a href=\"https://www.bootstrapdash.com/\" target=\"_blank\">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
    <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\">Hand-crafted & made with <i class=\"ti-heart text-danger ml-1\"></i></span>
  </div>
</footer>
<!-- partial -->





<!-- plugins:js -->
<script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendors/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendors/datatables.net/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendors/datatables.net-bs4/dataTables.bootstrap4.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/js/dataTables.select.min.js"), "html", null, true);
        echo "\"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/js/template.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/js/settings.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/js/todolist.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/js/dashboard.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/js/Chart.roundedBarCharts.js"), "html", null, true);
        echo "\"></script>
<!-- End custom js for this page-->
</body>

</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Fithub Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendors/feather/feather.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendors/css/vendor.bundle.base.css"), "html", null, true);
        echo "\">
    <!-- endinject -->f
    <!-- Plugin css for this page -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendors/datatables.net-bs4/dataTables.bootstrap4.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/js/select.dataTables.min.css"), "html", null, true);
        echo "\">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/css/vertical-layout-light/style.css"), "html", null, true);
        echo "\">
    <!-- endinject -->
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 406
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "baseback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  643 => 406,  630 => 21,  624 => 18,  620 => 17,  616 => 16,  610 => 13,  606 => 12,  601 => 11,  591 => 10,  572 => 8,  555 => 456,  551 => 455,  545 => 452,  541 => 451,  537 => 450,  533 => 449,  529 => 448,  522 => 444,  518 => 443,  514 => 442,  510 => 441,  504 => 438,  471 => 407,  469 => 406,  343 => 283,  332 => 275,  321 => 267,  310 => 259,  296 => 248,  285 => 240,  142 => 100,  62 => 24,  60 => 10,  55 => 8,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>{% block title %} Fithub Admin{% endblock %}</title>
  <!-- plugins:css -->
  {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{asset('./BackOffice/vendors/feather/feather.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('./BackOffice/vendors/ti-icons/css/themify-icons.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('./BackOffice/vendors/css/vendor.bundle.base.css')}}\">
    <!-- endinject -->f
    <!-- Plugin css for this page -->
    <link rel=\"stylesheet\" href=\"{{asset('./BackOffice/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('./BackOffice/vendors/ti-icons/css/themify-icons.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('./BackOffice/js/select.dataTables.min.css')}}\">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"{{asset('./BackOffice/css/vertical-layout-light/style.css')}}\">
    <!-- endinject -->
  {% endblock %}
  <link rel=\"shortcut icon\" href=\"{{asset('./BackOffice/images/favicon.png')}}\" />
</head>

<body>
<div class=\"container-scroller\">
  <!-- partial:partials/_navbar.html -->
  <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
    <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-center\">
        </div>
    <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
      <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
        <span class=\"icon-menu\"></span>
      </button>
      <ul class=\"navbar-nav mr-lg-2\">
        <li class=\"nav-item nav-search d-none d-lg-block\">
          <div class=\"input-group\">
            <div class=\"input-group-prepend hover-cursor\" id=\"navbar-search-icon\">
                <span class=\"input-group-text\" id=\"search\">
                  <i class=\"icon-search\"></i>
                </span>
            </div>
            <input type=\"text\" class=\"form-control\" id=\"navbar-search-input\" placeholder=\"Search now\" aria-label=\"search\" aria-describedby=\"search\">
          </div>
        </li>
      </ul>
      <ul class=\"navbar-nav navbar-nav-right\">
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
            <i class=\"icon-bell mx-0\"></i>
            <span class=\"count\"></span>
          </a>
          <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
            <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
            <a class=\"dropdown-item preview-item\">
              <div class=\"preview-thumbnail\">
                <div class=\"preview-icon bg-success\">
                  <i class=\"ti-info-alt mx-0\"></i>
                </div>
              </div>
              <div class=\"preview-item-content\">
                <h6 class=\"preview-subject font-weight-normal\">Application Error</h6>
                <p class=\"font-weight-light small-text mb-0 text-muted\">
                  Just now
                </p>
              </div>
            </a>
            <a class=\"dropdown-item preview-item\">
              <div class=\"preview-thumbnail\">
                <div class=\"preview-icon bg-warning\">
                  <i class=\"ti-settings mx-0\"></i>
                </div>
              </div>
              <div class=\"preview-item-content\">
                <h6 class=\"preview-subject font-weight-normal\">Settings</h6>
                <p class=\"font-weight-light small-text mb-0 text-muted\">
                  Private message
                </p>
              </div>
            </a>
            <a class=\"dropdown-item preview-item\">
              <div class=\"preview-thumbnail\">
                <div class=\"preview-icon bg-info\">
                  <i class=\"ti-user mx-0\"></i>
                </div>
              </div>
              <div class=\"preview-item-content\">
                <h6 class=\"preview-subject font-weight-normal\">New user registration</h6>
                <p class=\"font-weight-light small-text mb-0 text-muted\">
                  2 days ago
                </p>
              </div>
            </a>
          </div>
        </li>
        <li class=\"nav-item nav-profile dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
            <img src=\"{{asset('./BackOffice/images/faces/face28.jpg')}}\" alt=\"profile\"/>
          </a>
          <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
            <a class=\"dropdown-item\">
              <i class=\"ti-settings text-primary\"></i>
              Settings
            </a>
            <a class=\"dropdown-item\">
              <i class=\"ti-power-off text-primary\"></i>
              Logout
            </a>
          </div>
        </li>
        <li class=\"nav-item nav-settings d-none d-lg-flex\">
          <a class=\"nav-link\" href=\"#\">
            <i class=\"icon-ellipsis\"></i>
          </a>
        </li>
      </ul>
      <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
        <span class=\"icon-menu\"></span>
      </button>
    </div>
  </nav>
  <!-- partial -->
  <div class=\"container-fluid page-body-wrapper\">
    <!-- partial:partials/_settings-panel.html -->
    <div class=\"theme-setting-wrapper\">
      <div id=\"settings-trigger\"><i class=\"ti-settings\"></i></div>
      <div id=\"theme-settings\" class=\"settings-panel\">
        <i class=\"settings-close ti-close\"></i>
        <p class=\"settings-heading\">SIDEBAR SKINS</p>
        <div class=\"sidebar-bg-options selected\" id=\"sidebar-light-theme\"><div class=\"img-ss rounded-circle bg-light border mr-3\"></div>Light</div>
        <div class=\"sidebar-bg-options\" id=\"sidebar-dark-theme\"><div class=\"img-ss rounded-circle bg-dark border mr-3\"></div>Dark</div>
        <p class=\"settings-heading mt-2\">HEADER SKINS</p>
        <div class=\"color-tiles mx-0 px-4\">
          <div class=\"tiles success\"></div>
          <div class=\"tiles warning\"></div>
          <div class=\"tiles danger\"></div>
          <div class=\"tiles info\"></div>
          <div class=\"tiles dark\"></div>
          <div class=\"tiles default\"></div>
        </div>
      </div>
    </div>
    <div id=\"right-sidebar\" class=\"settings-panel\">
      <i class=\"settings-close ti-close\"></i>
      <ul class=\"nav nav-tabs border-top\" id=\"setting-panel\" role=\"tablist\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" id=\"todo-tab\" data-toggle=\"tab\" href=\"#todo-section\" role=\"tab\" aria-controls=\"todo-section\" aria-expanded=\"true\">TO DO LIST</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" id=\"chats-tab\" data-toggle=\"tab\" href=\"#chats-section\" role=\"tab\" aria-controls=\"chats-section\">CHATS</a>
        </li>
      </ul>
      <div class=\"tab-content\" id=\"setting-content\">
        <div class=\"tab-pane fade show active scroll-wrapper\" id=\"todo-section\" role=\"tabpanel\" aria-labelledby=\"todo-section\">
          <div class=\"add-items d-flex px-3 mb-0\">
            <form class=\"form w-100\">
              <div class=\"form-group d-flex\">
                <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"Add To-do\">
                <button type=\"submit\" class=\"add btn btn-primary todo-list-add-btn\" id=\"add-task\">Add</button>
              </div>
            </form>
          </div>
          <div class=\"list-wrapper px-3\">
            <ul class=\"d-flex flex-column-reverse todo-list\">
              <li>
                <div class=\"form-check\">
                  <label class=\"form-check-label\">
                    <input class=\"checkbox\" type=\"checkbox\">
                    Team review meeting at 3.00 PM
                  </label>
                </div>
                <i class=\"remove ti-close\"></i>
              </li>
              <li>
                <div class=\"form-check\">
                  <label class=\"form-check-label\">
                    <input class=\"checkbox\" type=\"checkbox\">
                    Prepare for presentation
                  </label>
                </div>
                <i class=\"remove ti-close\"></i>
              </li>
              <li>
                <div class=\"form-check\">
                  <label class=\"form-check-label\">
                    <input class=\"checkbox\" type=\"checkbox\">
                    Resolve all the low priority tickets due today
                  </label>
                </div>
                <i class=\"remove ti-close\"></i>
              </li>
              <li class=\"completed\">
                <div class=\"form-check\">
                  <label class=\"form-check-label\">
                    <input class=\"checkbox\" type=\"checkbox\" checked>
                    Schedule meeting for next week
                  </label>
                </div>
                <i class=\"remove ti-close\"></i>
              </li>
              <li class=\"completed\">
                <div class=\"form-check\">
                  <label class=\"form-check-label\">
                    <input class=\"checkbox\" type=\"checkbox\" checked>
                    Project review
                  </label>
                </div>
                <i class=\"remove ti-close\"></i>
              </li>
            </ul>
          </div>
          <h4 class=\"px-3 text-muted mt-5 font-weight-light mb-0\">Events</h4>
          <div class=\"events pt-4 px-3\">
            <div class=\"wrapper d-flex mb-2\">
              <i class=\"ti-control-record text-primary mr-2\"></i>
              <span>Feb 11 2018</span>
            </div>
            <p class=\"mb-0 font-weight-thin text-gray\">Creating component page build a js</p>
            <p class=\"text-gray mb-0\">The total number of sessions</p>
          </div>
          <div class=\"events pt-4 px-3\">
            <div class=\"wrapper d-flex mb-2\">
              <i class=\"ti-control-record text-primary mr-2\"></i>
              <span>Feb 7 2018</span>
            </div>
            <p class=\"mb-0 font-weight-thin text-gray\">Meeting with Alisa</p>
            <p class=\"text-gray mb-0 \">Call Sarah Graves</p>
          </div>
        </div>
        <!-- To do section tab ends -->
        <div class=\"tab-pane fade\" id=\"chats-section\" role=\"tabpanel\" aria-labelledby=\"chats-section\">
          <div class=\"d-flex align-items-center justify-content-between border-bottom\">
            <p class=\"settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0\">Friends</p>
            <small class=\"settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal\">See All</small>
          </div>
          <ul class=\"chat-list\">
            <li class=\"list active\">
              <div class=\"profile\"><img src=\"{{asset('./BackOffice/images/faces/face1.jpg')}}\" alt=\"image\"><span class=\"online\"></span></div>
              <div class=\"info\">
                <p>Thomas Douglas</p>
                <p>Available</p>
              </div>
              <small class=\"text-muted my-auto\">19 min</small>
            </li>
            <li class=\"list\">
              <div class=\"profile\"><img src=\"{{asset('./BackOffice/images/faces/face2.jpg')}}\" alt=\"image\"><span class=\"offline\"></span></div>
              <div class=\"info\">
                <div class=\"wrapper d-flex\">
                  <p>Catherine</p>
                </div>
                <p>Away</p>
              </div>
              <div class=\"badge badge-success badge-pill my-auto mx-2\">4</div>
              <small class=\"text-muted my-auto\">23 min</small>
            </li>
            <li class=\"list\">
              <div class=\"profile\"><img src=\"{{asset('./BackOffice/images/faces/face3.jpg')}}\" alt=\"image\"><span class=\"online\"></span></div>
              <div class=\"info\">
                <p>Daniel Russell</p>
                <p>Available</p>
              </div>
              <small class=\"text-muted my-auto\">14 min</small>
            </li>
            <li class=\"list\">
              <div class=\"profile\"><img src=\"{{asset('./BackOffice/images/faces/face4.jpg')}}\" alt=\"image\"><span class=\"offline\"></span></div>
              <div class=\"info\">
                <p>James Richardson</p>
                <p>Away</p>
              </div>
              <small class=\"text-muted my-auto\">2 min</small>
            </li>
            <li class=\"list\">
              <div class=\"profile\"><img src=\"{{asset('./BackOffice/images/faces/face5.jpg')}}\" alt=\"image\"><span class=\"online\"></span></div>
              <div class=\"info\">
                <p>Madeline Kennedy</p>
                <p>Available</p>
              </div>
              <small class=\"text-muted my-auto\">5 min</small>
            </li>
            <li class=\"list\">
              <div class=\"profile\"><img src=\"{{asset('./BackOffice/images/faces/face6.jpg')}}\" alt=\"image\"><span class=\"online\"></span></div>
              <div class=\"info\">
                <p>Sarah Graves</p>
                <p>Available</p>
              </div>
              <small class=\"text-muted my-auto\">47 min</small>
            </li>
          </ul>
        </div>
        <!-- chat tab ends -->
      </div>
    </div>
    <!-- partial -->
    <!-- partial:partials/_sidebar.html -->
    <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
      <ul class=\"nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">
            <i class=\"icon-grid menu-icon\"></i>
            <span class=\"menu-title\">Home</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
            <i class=\"icon-layout menu-icon\"></i>
            <span class=\"menu-title\">Utilisateur</span>
            <i class=\"menu-arrow\"></i>
          </a>
          <div class=\"collapse\" id=\"ui-basic\">
            <ul class=\"nav flex-column sub-menu\">
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Ajouter Utilisateur</a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Afficher Utilisateur</a></li>
            </ul>
          </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#form-elements\" aria-expanded=\"false\" aria-controls=\"form-elements\">
            <i class=\"icon-columns menu-icon\"></i>
            <span class=\"menu-title\">Abonnement</span>
            <i class=\"menu-arrow\"></i>
          </a>
          <div class=\"collapse\" id=\"form-elements\">
            <ul class=\"nav flex-column sub-menu\">
              <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">Ajouter Abonnement</a></li>
              <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">Afficher Abonnement</a></li>
              <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">Ajouter Pack</a></li>
              <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">Afficher Pack</a></li>
            </ul>
          </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#charts\" aria-expanded=\"false\" aria-controls=\"charts\">
            <i class=\"icon-bar-graph menu-icon\"></i>
            <span class=\"menu-title\">Consultation</span>
            <i class=\"menu-arrow\"></i>
          </a>
          <div class=\"collapse\" id=\"charts\">
            <ul class=\"nav flex-column sub-menu\">
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Ajouter Consultation</a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Afficher Consultations</a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Ajouter Fiche</a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Afficher Fiches</a></li>
            </ul>
          </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#tables\" aria-expanded=\"false\" aria-controls=\"tables\">
            <i class=\"icon-grid-2 menu-icon\"></i>
            <span class=\"menu-title\">Blog</span>
            <i class=\"menu-arrow\"></i>
          </a>
          <div class=\"collapse\" id=\"tables\">
            <ul class=\"nav flex-column sub-menu\">
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Ajouter Article</a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Afficher Article</a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Ajouter Commentaire</a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Afficher Commentaire</a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Ajouter Categorie</a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\">Afficher Categorie</a></li>
            </ul>
          </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#icons\" aria-expanded=\"false\" aria-controls=\"icons\">
            <i class=\"icon-contract menu-icon\"></i>
            <span class=\"menu-title\">Séance</span>
            <i class=\"menu-arrow\"></i>
          </a>
          <div class=\"collapse\" id=\"icons\">
            <ul class=\"nav flex-column sub-menu\">
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/seance/new\">Ajouter Séance</a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/seance\">Afficher les Séances</a></li>
                 <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/participation/seance/\">Afficher Participations</a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/histogram-chart-month\">Statistiques</a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/video/admin\">Afficher Vidéos</a></li>
            </ul>
          </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
            <i class=\"icon-head menu-icon\"></i>
            <span class=\"menu-title\">Evenement </span>
            <i class=\"menu-arrow\"></i>
          </a>
          <div class=\"collapse\" id=\"auth\">
            <ul class=\"nav flex-column sub-menu\">
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\"> Ajouter Evenement </a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\"> Afficher Evenements </a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\"> Ajouter Ticket </a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\"> Afficher Tickets </a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\"> Ajouter Participation </a></li>
              <li class=\"nav-item\"> <a class=\"nav-link\" href=\"\"> Afficher Participations </a></li>
            </ul>
          </div>
        </li>


      </ul>
    </nav>
    <!-- partial -->
    <div class=\"main-panel\">
      <div class=\"content-wrapper\">
        <div class=\"row\">
          {% block body %} {% endblock %}

        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->


  </div>
  <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->




<!-- partial:partials/_footer.html -->
<footer class=\"footer\">
  <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
    <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Copyright © 2021.  Premium <a href=\"https://www.bootstrapdash.com/\" target=\"_blank\">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
    <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\">Hand-crafted & made with <i class=\"ti-heart text-danger ml-1\"></i></span>
  </div>
</footer>
<!-- partial -->





<!-- plugins:js -->
<script src=\"{{asset('./BackOffice/vendors/js/vendor.bundle.base.js')}}\"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src=\"{{asset('./BackOffice/vendors/chart.js/Chart.min.js')}}\"></script>
<script src=\"{{asset('./BackOffice/vendors/datatables.net/jquery.dataTables.js')}}\"></script>
<script src=\"{{asset('./BackOffice/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}\"></script>
<script src=\"{{asset('./BackOffice/js/dataTables.select.min.js')}}\"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src=\"{{asset('./BackOffice/js/off-canvas.js')}}\"></script>
<script src=\"{{asset('./BackOffice/js/hoverable-collapse.js')}}\"></script>
<script src=\"{{asset('./BackOffice/js/template.js')}}\"></script>
<script src=\"{{asset('./BackOffice/js/settings.js')}}\"></script>
<script src=\"{{asset('./BackOffice/js/todolist.js')}}\"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src=\"{{asset('./BackOffice/js/dashboard.js')}}\"></script>
<script src=\"{{asset('./BackOffice/js/Chart.roundedBarCharts.js')}}\"></script>
<!-- End custom js for this page-->
</body>

</html>

", "baseback.html.twig", "C:\\Users\\HP\\Videos\\FitHub\\templates\\baseback.html.twig");
    }
}
