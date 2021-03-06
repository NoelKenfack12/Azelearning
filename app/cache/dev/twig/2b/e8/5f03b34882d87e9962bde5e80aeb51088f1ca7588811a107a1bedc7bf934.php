<?php

/* GeneralTemplateBundle:Menu:menubare.html.twig */
class __TwigTemplate_2be85f03b34882d87e9962bde5e80aeb51088f1ca7588811a107a1bedc7bf934 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")) == "home")) {
            // line 2
            echo "
\t<!-- partial:partials/_horizontal-navbar.html -->
    <div class=\"horizontal-menu\">
      <nav class=\"navbar top-navbar col-lg-12 col-12 p-0\">
        <div class=\"nav-top flex-grow-1\">
          <div class=\"container d-flex flex-row h-100 align-items-center\">
            <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-center\">
              <a class=\"navbar-brand brand-logo\" href=\"index.html\"><img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("templatehome/images/logo.svg"), "html", null, true);
            echo "\" alt=\"logo\"/></a>
              <a class=\"navbar-brand brand-logo-mini\" href=\"index.html\"><img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("templatehome/images/logo-mini.svg"), "html", null, true);
            echo "\" alt=\"logo\"/></a>
            </div>
            <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end flex-grow-1\">
              <ul class=\"navbar-nav navbar-nav-right\">
                <li class=\"nav-item dropdown\">
                  <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
                    <i class=\"mdi mdi-bell-outline mx-0\"></i>
                    <span class=\"count\"></span>
                  </a>
                  <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                    <a class=\"dropdown-item\">
                      <p class=\"mb-0 font-weight-normal float-left\">You have 4 new notifications
                      </p>
                      <span class=\"badge badge-pill badge-warning float-right\">View all</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item preview-item\">
                      <div class=\"preview-thumbnail\">
                        <div class=\"preview-icon bg-success\">
                          <i class=\"mdi mdi-information mx-0\"></i>
                        </div>
                      </div>
                      <div class=\"preview-item-content\">
                        <h6 class=\"preview-subject font-weight-medium\">Application Error</h6>
                        <p class=\"font-weight-light small-text\">
                          Just now
                        </p>
                      </div>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item preview-item\">
                      <div class=\"preview-thumbnail\">
                        <div class=\"preview-icon bg-warning\">
                          <i class=\"mdi mdi-settings mx-0\"></i>
                        </div>
                      </div>
                      <div class=\"preview-item-content\">
                        <h6 class=\"preview-subject font-weight-medium\">Settings</h6>
                        <p class=\"font-weight-light small-text\">
                          Private message
                        </p>
                      </div>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item preview-item\">
                      <div class=\"preview-thumbnail\">
                        <div class=\"preview-icon bg-info\">
                          <i class=\"mdi mdi-account-box mx-0\"></i>
                        </div>
                      </div>
                      <div class=\"preview-item-content\">
                        <h6 class=\"preview-subject font-weight-medium\">New user registration</h6>
                        <p class=\"font-weight-light small-text\">
                          2 days ago
                        </p>
                      </div>
                    </a>
                  </div>
                </li>
                <li class=\"nav-item dropdown\">
                  <a class=\"nav-link count-indicator dropdown-toggle\" id=\"messageDropdown\" href=\"#\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"mdi mdi-email-outline mx-0\"></i>
                    <span class=\"count\"></span>
                  </a>
                  <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"messageDropdown\">
                    <div class=\"dropdown-item\">
                      <p class=\"mb-0 font-weight-normal float-left\">You have 7 unread mails
                      </p>
                      <span class=\"badge badge-info badge-pill float-right\">View all</span>
                    </div>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item preview-item\">
                      <div class=\"preview-thumbnail\">
                          <img src=\"../../images/faces/face4.jpg\" alt=\"image\" class=\"profile-pic\">
                      </div>
                      <div class=\"preview-item-content flex-grow\">
                        <h6 class=\"preview-subject ellipsis font-weight-medium\">David Grey
                          <span class=\"float-right font-weight-light small-text\">1 Minutes ago</span>
                        </h6>
                        <p class=\"font-weight-light small-text\">
                          The meeting is cancelled
                        </p>
                      </div>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item preview-item\">
                      <div class=\"preview-thumbnail\">
                          <img src=\"../../images/faces/face2.jpg\" alt=\"image\" class=\"profile-pic\">
                      </div>
                      <div class=\"preview-item-content flex-grow\">
                        <h6 class=\"preview-subject ellipsis font-weight-medium\">Tim Cook
                          <span class=\"float-right font-weight-light small-text\">15 Minutes ago</span>
                        </h6>
                        <p class=\"font-weight-light small-text\">
                          New product launch
                        </p>
                      </div>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item preview-item\">
                      <div class=\"preview-thumbnail\">
                          <img src=\"../../images/faces/face3.jpg\" alt=\"image\" class=\"profile-pic\">
                      </div>
                      <div class=\"preview-item-content flex-grow\">
                        <h6 class=\"preview-subject ellipsis font-weight-medium\"> Johnson
                          <span class=\"float-right font-weight-light small-text\">18 Minutes ago</span>
                        </h6>
                        <p class=\"font-weight-light small-text\">
                          Upcoming board meeting
                        </p>
                      </div>
                    </a>
                  </div>
                </li>
                <li class=\"nav-item nav-profile dropdown\">
                  <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
                    <img src=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("templatehome/images/face4.jpg"), "html", null, true);
            echo "\" alt=\"profile\"/>
                  </a>
                  <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
                    <a class=\"dropdown-item\">
                      <i class=\"mdi mdi-settings text-primary\"></i>
                      Settings
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\">
                      <i class=\"mdi mdi-logout text-primary\"></i>
                      Logout
                    </a>
                  </div>
                </li>
                <li class=\"nav-item nav-settings d-none d-lg-block\">
                  <a class=\"nav-link\" href=\"#\">
                    <i class=\"mdi mdi-apps\"></i>
                  </a>
                </li>
              </ul>
              <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"horizontal-menu-toggle\">
                <span class=\"mdi mdi-menu\"></span>
              </button>
            </div>
          </div>
        </div>
      </nav>
      <nav class=\"bottom-navbar\">
        <div class=\"container\">
          <ul class=\"nav page-navigation\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"index.html\">
                <i class=\"mdi mdi-view-dashboard-outline menu-icon\"></i>
                <span class=\"menu-title\">Dashboard</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"pages/widgets/widgets.html\">
                <i class=\"mdi mdi-airplay menu-icon\"></i>
                <span class=\"menu-title\">Widgets</span>
              </a>
            </li>
            <li class=\"nav-item mega-menu\">
              <a href=\"#\" class=\"nav-link\">
                <i class=\"mdi mdi-puzzle-outline menu-icon\"></i>
                <span class=\"menu-title\">UI Elements</span>
                <i class=\"menu-arrow\"></i>
              </a>
              <div class=\"submenu\">
                <div class=\"col-group-wrapper row\">
                  <div class=\"col-group col-md-4\">
                    <div class=\"row\">
                      <div class=\"col-12\">
                        <p class=\"category-heading\">Basic Elements</p>
                        <div class=\"submenu-item\">
                          <div class=\"row\">
                            <div class=\"col-md-6\">
                              <ul>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/ui-features/accordions.html\">Accordion</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/ui-features/buttons.html\">Buttons</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/ui-features/badges.html\">Badges</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/ui-features/breadcrumbs.html\">Breadcrumbs</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/ui-features/dropdowns.html\">Dropdown</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/ui-features/modals.html\">Modals</a></li>
                              </ul>
                            </div>
                            <div class=\"col-md-6\">
                              <ul>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/ui-features/progress.html\">Progress bar</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/ui-features/pagination.html\">Pagination</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/ui-features/tabs.html\">Tabs</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/ui-features/typography.html\">Typography</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/ui-features/tooltips.html\">Tooltip</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"col-group col-md-4\">
                    <div class=\"row\">
                      <div class=\"col-12\">
                        <p class=\"category-heading\">Advanced Elements</p>
                        <div class=\"submenu-item\">
                          <div class=\"row\">
                            <div class=\"col-md-6\">
                              <ul>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/ui-features/dragula.html\">Dragula</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/ui-features/carousel.html\">Carousel</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/ui-features/clipboard.html\">Clipboard</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/ui-features/context-menu.html\">Context Menu</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/ui-features/loaders.html\">Loader</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/ui-features/slider.html\">Slider</a></li>
                              </ul>
                            </div>
                            <div class=\"col-md-6\">
                              <ul>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/ui-features/popups.html\">Popup</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/ui-features/notifications.html\">Notification</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"col-group col-md-4\">
                    <p class=\"category-heading\">Icons</p>
                    <ul class=\"submenu-item\">
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/icons/flag-icons.html\">Flag Icons</a></li>
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/icons/font-awesome.html\">Font Awesome</a></li>
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/icons/simple-line-icon.html\">Simple Line Icons</a></li>
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/icons/themify.html\">Themify Icons</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class=\"nav-item\">
              <a href=\"#\" class=\"nav-link\">
                <i class=\"mdi mdi-file-document-box-outline menu-icon\"></i>
                <span class=\"menu-title\">Forms</span>
                <i class=\"menu-arrow\"></i></a>
              <div class=\"submenu\">
                <ul class=\"submenu-item\">
                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/forms/basic_elements.html\">Basic Elements</a></li>
                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/forms/advanced_elements.html\">Advanced Elements</a></li>
                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/forms/validation.html\">Validation</a></li>
                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/forms/wizard.html\">Wizard</a></li>
                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/forms/text_editor.html\">Text Editor</a></li>
                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/forms/code_editor.html\">Code Editor</a></li>
                </ul>
              </div>
            </li>
            <li class=\"nav-item mega-menu\">
              <a href=\"#\" class=\"nav-link\">
                <i class=\"mdi mdi-finance menu-icon\"></i>
                <span class=\"menu-title\">Data</span>
                <i class=\"menu-arrow\"></i></a>
              <div class=\"submenu\">
                <div class=\"col-group-wrapper row\">
                  <div class=\"col-group col-md-6\">
                    <p class=\"category-heading\">Charts</p>
                    <div class=\"submenu-item\">
                      <div class=\"row\">
                        <div class=\"col-md-6\">
                          <ul>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/charts/chartjs.html\">Chart Js</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/charts/morris.html\">Morris</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/charts/flot-chart.html\">Flot</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/charts/google-charts.html\">Google Chart</a></li>
                          </ul>
                        </div>
                        <div class=\"col-md-6\">
                          <ul>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/charts/sparkline.html\">Sparkline</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/charts/c3.html\">C3 Chart</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/charts/chartist.html\">Chartist</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/charts/justGage.html\">JustGage</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"col-group col-md-3\">
                    <p class=\"category-heading\">Table</p>
                    <ul class=\"submenu-item\">
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/tables/basic-table.html\">Basic Table</a></li>
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/tables/data-table.html\">Data Table</a></li>
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/tables/js-grid.html\">Js-grid</a></li>
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/tables/sortable-table.html\">Sortable Table</a></li>
                    </ul>
                  </div>
                  <div class=\"col-group col-md-3\">
                    <p class=\"category-heading\">Maps</p>
                    <ul class=\"submenu-item\">
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/maps/mapeal.html\">Mapeal</a></li>
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/maps/vector-map.html\">Vector Map</a></li>
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/maps/google-maps.html\">Google Map</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class=\"nav-item mega-menu\">
              <a href=\"#\" class=\"nav-link\">
                <i class=\"mdi mdi-codepen menu-icon\"></i>
                <span class=\"menu-title\">Sample Pages</span>
                <i class=\"menu-arrow\"></i></a>
              <div class=\"submenu\">
                <div class=\"col-group-wrapper row\">
                  <div class=\"col-group col-md-3\">
                    <p class=\"category-heading\">User Pages</p>
                    <ul class=\"submenu-item\">
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/samples/login.html\">Login</a></li>
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/samples/login-2.html\">Login 2</a></li>
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/samples/register.html\">Register</a></li>
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/samples/register-2.html\">Register 2</a></li>
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/samples/lock-screen.html\">Lockscreen</a></li>
                    </ul>
                  </div>
                  <div class=\"col-group col-md-3\">
                    <p class=\"category-heading\">Error Pages</p>
                    <ul class=\"submenu-item\">
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/samples/error-400.html\">400</a></li>
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/samples/error-404.html\">404</a></li>
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/samples/error-500.html\">500</a></li>
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/samples/error-505.html\">505</a></li>
                    </ul>
                  </div>
                  <div class=\"col-group col-md-3\">
                    <p class=\"category-heading\">E-commerce</p>
                    <ul class=\"submenu-item\">
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/samples/invoice.html\">Invoice</a></li>
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/samples/pricing-table.html\">Pricing Table</a></li>
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/samples/orders.html\">Orders</a></li>
                    </ul>
                  </div>
                  <div class=\"col-group col-md-3\">
                    <p class=\"category-heading\">General</p>
                    <ul class=\"submenu-item\">
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/samples/search-results.html\">Search Results</a></li>
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/samples/profile.html\">Profile</a></li>
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/samples/timeline.html\">Timeline</a></li>
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/samples/news-grid.html\">News grid</a></li>
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/samples/portfolio.html\">Portfolio</a></li>
                      <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/samples/faq.html\">FAQ</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class=\"nav-item\">
              <a href=\"#\" class=\"nav-link\">
                <i class=\"mdi mdi-image-filter menu-icon\"></i>
                <span class=\"menu-title\">Apps</span>
                <i class=\"menu-arrow\"></i></a>
              <div class=\"submenu\">
                <ul class=\"submenu-item\">
                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/apps/email.html\">Email</a></li>
                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/apps/calendar.html\">Calendar</a></li>
                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/apps/todo.html\">Todo List</a></li>
                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/apps/gallery.html\">Gallery</a></li>
                </ul>
              </div>
            </li>
            <li class=\"nav-item\">
              <a href=\"pages/documentation/documentation.html\" class=\"nav-link\">
                <i class=\"mdi mdi-file-document-box-outline menu-icon\"></i>
                <span class=\"menu-title\">Documentation</span></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
";
        } else {
            // line 383
            echo "<!-- Fixed navbar -->
<div class=\"navbar navbar-default navbar-fixed-top\" style=\"box-shadow: 0 15px 15px -1px #f2f2f2 inset; background: #fff;\">
  <div style=\"box-shadow: 0px 6px 6px #CCC;\">
  <div class=\"container\">
\t<div class=\"navbar-header\">
\t  <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t<span class=\"icon-bar\"></span>
\t\t<span class=\"icon-bar\"></span>
\t\t<span class=\"icon-bar\"></span>
\t  </button>
\t  <a class=\"navbar-brand\" href=\"";
            // line 393
            echo $this->env->getExtension('routing')->getPath("users_user_acces_plateforme");
            echo "\" style=\"color: green;\"><b>Az Corp</b></a>
\t</div>
\t<div class=\"navbar-collapse collapse\">
\t  <ul class=\"nav navbar-nav\">
\t\t<li><a href=\"";
            // line 397
            echo $this->env->getExtension('routing')->getPath("produit_service_visiter_notre_blog");
            echo "\" style=\"color: green;\">Formations</a></li>
\t\t<li><a href=\"";
            // line 398
            echo $this->env->getExtension('routing')->getPath("produit_produit_accueil_boutique_produit");
            echo "\" style=\"color: green;\">Cours</a></li>
\t\t<li><a href=\"";
            // line 399
            echo $this->env->getExtension('routing')->getPath("produit_service_forum_site");
            echo "\" style=\"color: green;\">Forum</a></li>
\t\t<li><a href=\"";
            // line 400
            echo $this->env->getExtension('routing')->getPath("produit_service_apropos_denous");
            echo "\" style=\"color: green;\">À propos</a></li>
\t\t<li>
\t\t<div class=\"search zone-etab-rechercher\" style=\"display: inline;\" value=\"0\" name=\"\">
\t\t\t<form class=\"form-recherche-product\" action=\"#!\" method=\"post\" style=\"display: inline;\">
\t\t\t\t<input type=\"text\" class=\"search-form form-products-plateforme\" autocomplete= \"off\" placeholder=\"Lancez la recherche\" style=\"color: #333; margin-top: 15px;\"/>
\t\t\t\t<i class=\"glyphicon glyphicon-search recherche-products\" style=\"color: green; z-index: 1000; position: absolute; margin-top: 20px;\"></i>
\t\t\t</form>
\t   </div>
\t\t</li>
\t  </ul>
\t  <ul class=\"nav navbar-nav navbar-right\">
\t\t
\t\t<li><a href=\"";
            // line 412
            echo $this->env->getExtension('routing')->getPath("produit_service_toute_actualite_entreprise");
            echo "\" style=\"color: green;\">Formateurs</a></li>
\t\t<li>
\t\t<div class=\"btn-group\" style=\"margin-top: 15px; margin-left: 5px;\">
\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" style=\"cursor: pointer; color: green;\">";
            // line 415
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                echo "<img src=\"";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "imgprofil") != null)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "imgprofil"), "getwebpath")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/co.png"), "html", null, true);
                }
                echo "\" alt=\"\" style=\"width: 20px; height:20px; border-radius: 15px; margin-top: -5px;\"/> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "name", array(0 => 15), "method"), "html", null, true);
                echo " ";
            } else {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/co.png"), "html", null, true);
                echo "\" alt=\"\" style=\"width: 20px; height:20px; border-radius: 15px; margin-top: -5px;\"/> Espace membre";
            }
            echo " <span class=\"caret\"></span></a>
\t\t\t<ul class=\"dropdown-menu\" style=\"margin-top: 13px; border-radius: 0px;\">
\t\t\t\t";
            // line 417
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 418
                echo "\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_user_user_accueil", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
                echo "\"><span class=\"fa fa-user\"></span> Mon compte utilisateur</a></li>
\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t<li><a href=\"";
                // line 420
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_user_modifier_profil", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
                echo "\"><span class=\"fa fa-edit\"></span> Modifier mes paramètres</a></li>
\t\t\t\t";
                // line 421
                if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "formateur") == true) && $this->env->getExtension('security')->isGranted("ROLE_FORMATEUR"))) {
                    // line 422
                    echo "\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t<li><a href=\"";
                    // line 423
                    echo $this->env->getExtension('routing')->getPath("produit_produit_ajouter_nouveau_produit");
                    echo "\"><span class=\"fa fa-plus\"></span> Ajoutez un cours</a></li>
\t\t\t\t";
                }
                // line 425
                echo "\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t<li><a href=\"";
                // line 426
                echo $this->env->getExtension('routing')->getPath("produit_service_yourcv_recrutement");
                echo "\"><span class=\"fa fa-external-link\"></span> Créditez votre compte</a></li>
\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t<li><a href=\"";
                // line 428
                echo $this->env->getExtension('routing')->getPath("logout");
                echo "\"><span class=\"fa fa-sign-out\"></span> Déconnexion</a></li>
\t\t\t\t";
            } else {
                // line 430
                echo "\t\t\t\t<li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("users_user_inscription_user");
                echo "\"><span class=\"fa fa-hand-o-right\"></span> Inscription</a></li>
\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t<li><a href=\"";
                // line 432
                echo $this->env->getExtension('routing')->getPath("login");
                echo "\"><span class=\"fa fa-sign-in\"></span> Connexion</a></li>
\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t<li><a href=\"#!\"><span class=\"fa fa-bell-o\"></span> Notifications</a></li>
\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t<li><a href=\"";
                // line 436
                echo $this->env->getExtension('routing')->getPath("produit_service_yourcv_recrutement");
                echo "\"><span class=\"fa fa-external-link\"></span> Créditez votre compte</a></li>
\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t<li><a href=\"";
                // line 438
                echo $this->env->getExtension('routing')->getPath("produit_service_toute_actualite_entreprise");
                echo "\"><span class=\"fa fa-users\"></span> Formateurs</a></li>
\t\t\t\t";
            }
            // line 440
            echo "\t\t\t</ul>
\t\t</div>
\t\t</li>
\t  </ul>
\t</div><!--/.nav-collapse -->
  </div>
  </div>
</div>


<script type=\"text/javascript\">

function rechercheetab()
{
if(\$('.form-products-plateforme').val().length >= 2)// on vérifier si l'utilisateur a entré plus de 5 caractères
{
  var libre = \$('.zone-etab-rechercher').attr('value'); // on initialise la variable libre
  var donnee = \$('.form-products-plateforme').val();  //on récupère la donnée
  if (libre == 0 && donnee != \$('.zone-etab-rechercher').attr('name')){ // on vérifier si la requête précedente est rétournée et que la recherche ne corespnd pas à la dernière effectuée
  \$('.zone-etab-rechercher').attr('value',1); // on bloque d'autres recherches
  \$('.zone-etab-rechercher').attr('name',donnee); // on enregistre la recherche effectuer.
  \$('.recherche-products').removeClass('glyphicon-search');
  \$('.recherche-products').html('<img src=\"";
            // line 462
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/attente.gif"), "html", null, true);
            echo "\" alt=\"\" style=\"width: 15px; height: 15px; margin-top: -10px;\"/>'); //attente du résultat
  
\t  \$.get('";
            // line 464
            echo $this->env->getExtension('routing')->getPath("produit_produit_recherche_new_produit");
            echo "', { donnee: \$('.form-products-plateforme').val() }, function(data){
\t\t  \$('.recherche-products').html('');
\t\t  \$('.recherche-products').addClass('glyphicon-search');
\t\t  \$('.content-recherche-products-market').html(data);
\t\t  \$('.content-manage-market').hide();
\t\t  \$('.content-recherche-products-market').show();
\t\t  \$('.content-manage-market').css('margin-top','0px');
\t\t  \$('.content-manage-market').css('padding-top','0px');
\t\t  \$('.zone-etab-rechercher').attr('value',0);
\t\t  setTimeout(function() { rechercheetab(); }, 100);  // on relance la fonction après 200 ms.
\t  });
  }else{
\tsetTimeout(function() { rechercheetab(); }, 100);
  }
}else{
\tsetTimeout(function() { rechercheetab(); }, 100);
    }
}


\$(\".form-products-plateforme\").focus(function(){
rechercheetab(); 
});

\$('.form-recherche-product').on('submit', function(){
    if(\$('.form-products-plateforme').val().length < 2)// on vérifier si l'utilisateur a entré plus de 5 caractères
\t{
\t\t\$('.infos-action-effectuer').html('<span class=\"fa fa-warning\"></span> Echec ! Rentrez au moins 2 caractères !');
\t\t\$('#infos-action-effectuer').modal('show');
\t}else{
\t\t\$('.infos-action-effectuer').html('<span class=\"fa fa-warning\"></span> Patientez ! Auto-recherche en cours !');
\t\t\$('#infos-action-effectuer').modal('show');
\t}
\treturn false;
});
</script>

";
        }
    }

    public function getTemplateName()
    {
        return "GeneralTemplateBundle:Menu:menubare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  571 => 464,  566 => 462,  542 => 440,  537 => 438,  532 => 436,  525 => 432,  519 => 430,  514 => 428,  509 => 426,  506 => 425,  501 => 423,  498 => 422,  496 => 421,  492 => 420,  486 => 418,  484 => 417,  465 => 415,  459 => 412,  444 => 400,  440 => 399,  436 => 398,  432 => 397,  425 => 393,  413 => 383,  153 => 126,  34 => 10,  30 => 9,  21 => 2,  19 => 1,);
    }
}
