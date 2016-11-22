
<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Form Validation | Remark Admin Template</title>

  <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="assets/css/site.min.css">

  <link rel="stylesheet" href="assets/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="assets/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="assets/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="assets/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="assets/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="assets/vendor/flag-icon-css/flag-icon.css">

  <!-- Plugin -->
  <link rel="stylesheet" href="assets/vendor/formvalidation/formValidation.css">
  <link rel="stylesheet" href="assets/vendor/toastr/toastr.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="assets/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

  <!-- Inline -->
  <style>
    .has-feedback .form-control-feedback {
      right: 15px;
    }
    
    .summary-errors p,
    .summary-errors ul li a {
      color: inherit;
    }
    
    .summary-errors ul li a:hover {
      text-decoration: none;
    }
    
    @media (min-width: 768px) {
      #exampleFullForm .form-horizontal .control-label {
        text-align: inherit;
      }
    }
  </style>

  <!--[if lt IE 9]>
    <script src="assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="assets/vendor/media-match/media.match.min.js"></script>
    <script src="assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="assets/vendor/modernizr/modernizr.js"></script>
  <script src="assets/vendor/breakpoints/breakpoints.js"></script>
  <script>
    Breakpoints();
  </script>
</head>
@extends('admin.include.sidebar')
<body>
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
      data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon wb-search" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        <img class="navbar-brand-logo" src="assets/images/logo.png" title="Remark">
        <span class="navbar-brand-text"> Remark</span>
      </div>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li class="hidden-xs" id="toggleFullscreen">
            <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
          <li class="hidden-float">
            <a class="icon wb-search" data-toggle="collapse" href="#site-navbar-search" role="button">
              <span class="sr-only">Toggle Search</span>
            </a>
          </li>
          <li class="dropdown dropdown-fw dropdown-mega">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="slide-bottom" role="button">Mega <i class="icon wb-chevron-down-mini" aria-hidden="true"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <div class="mega-content">
                  <div class="row">
                    <div class="col-sm-4">
                      <h5>UI Kit</h5>
                      <ul class="blocks-2">
                        <li class="mega-menu margin-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../advanced/animation.html">Animation</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/buttons.html">Buttons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/colors.html">Colors</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/dropdowns.html">Dropdowns</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/icons.html">Icons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../advanced/lightbox.html">Lightbox</a>
                            </li>
                          </ul>
                        </li>
                        <li class="mega-menu margin-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/modals.html">Modals</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/panels.html">Panels</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../structure/overlay.html">Overlay</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/tooltip-popover.html ">Tooltips</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../advanced/scrollable.html">Scrollable</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/typography.html">Typography</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <h5>Media
                        <span class="badge badge-success">4</span>
                      </h5>
                      <ul class="blocks-3">
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="assets/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="assets/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="assets/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="assets/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="assets/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="assets/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <h5 class="margin-bottom-0">Accordion</h5>
                      <!-- Accordion -->
                      <div class="panel-group panel-group-simple" id="siteMegaAccordion" aria-multiselectable="true"
                      role="tablist">
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingOne" role="tab">
                            <a class="panel-title" data-toggle="collapse" href="#siteMegaCollapseOne" data-parent="#siteMegaAccordion"
                            aria-expanded="false" aria-controls="siteMegaCollapseOne">
                                Collapsible Group Item #1
                              </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseOne" aria-labelledby="siteMegaAccordionHeadingOne"
                          role="tabpanel">
                            <div class="panel-body">
                              De moveat laudatur vestra parum doloribus labitur sentire partes, eripuit praesenti
                              congressus ostendit alienae, voluptati ornateque
                              accusamus clamat reperietur convicia albucius.
                            </div>
                          </div>
                        </div>
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingTwo" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseTwo"
                            data-parent="#siteMegaAccordion" aria-expanded="false"
                            aria-controls="siteMegaCollapseTwo">
                                Collapsible Group Item #2
                              </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseTwo" aria-labelledby="siteMegaAccordionHeadingTwo"
                          role="tabpanel">
                            <div class="panel-body">
                              Praestabiliorem. Pellat excruciant legantur ullum leniter vacare foris voluptate
                              loco ignavi, credo videretur multoque choro fatemur
                              mortis animus adoptionem, bello statuat expediunt
                              naturales.
                            </div>
                          </div>
                        </div>

                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingThree" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseThree"
                            data-parent="#siteMegaAccordion" aria-expanded="false"
                            aria-controls="siteMegaCollapseThree">
                                Collapsible Group Item #3
                              </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseThree" aria-labelledby="siteMegaAccordionHeadingThree"
                          role="tabpanel">
                            <div class="panel-body">
                              Horum, antiquitate perciperet d conspectum locus obruamus animumque perspici probabis
                              suscipere. Desiderat magnum, contenta poena desiderant
                              concederetur menandri damna disputandum corporum.
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Accordion -->
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" data-animation="slide-bottom"
            aria-expanded="false" role="button">
              <span class="flag-icon flag-icon-us"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-gb"></span> English</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-fr"></span> French</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-cn"></span> Chinese</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-de"></span> German</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-nl"></span> Dutch</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <span class="avatar avatar-online">
                <img src="assets/portraits/5.jpg" alt="...">
                <i></i>
              </span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
              </li>
              <li class="divider" role="presentation"></li>
              <li role="presentation">
                <a href="/admin/login" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <i class="icon wb-bell" aria-hidden="true"></i>
              <span class="badge badge-danger up">5</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <li class="dropdown-menu-header" role="presentation">
                <h5>NOTIFICATIONS</h5>
                <span class="label label-round label-danger">New 5</span>
              </li>

              <li class="list-group" role="presentation">
                <div data-role="container">
                  <div data-role="content">
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-order bg-red-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">A new order has been placed</h6>
                          <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">5 hours ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-user bg-green-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Completed the task</h6>
                          <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">2 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Settings updated</h6>
                          <time class="media-meta" datetime="2015-06-11T14:05:00+08:00">2 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Event started</h6>
                          <time class="media-meta" datetime="2015-06-10T13:50:18+08:00">3 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-chat bg-orange-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Message received</h6>
                          <time class="media-meta" datetime="2015-06-10T12:34:48+08:00">3 days ago</time>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </li>
              <li class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon wb-settings" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)" role="menuitem">
                    All notifications
                  </a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0)" title="Messages" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <i class="icon wb-envelope" aria-hidden="true"></i>
              <span class="badge badge-info up">3</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <li class="dropdown-menu-header" role="presentation">
                <h5>MESSAGES</h5>
                <span class="label label-round label-info">New 3</span>
              </li>

              <li class="list-group" role="presentation">
                <div data-role="container">
                  <div data-role="content">
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-online">
                            <img src="assets/portraits/2.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Mary Adams</h6>
                          <div class="media-meta">
                            <time datetime="2015-06-17T20:22:05+08:00">30 minutes ago</time>
                          </div>
                          <div class="media-detail">Anyways, i would like just do it</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-off">
                            <img src="assets/portraits/3.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Caleb Richards</h6>
                          <div class="media-meta">
                            <time datetime="2015-06-17T12:30:30+08:00">12 hours ago</time>
                          </div>
                          <div class="media-detail">I checheck the document. But there seems</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-busy">
                            <img src="assets/portraits/4.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">June Lane</h6>
                          <div class="media-meta">
                            <time datetime="2015-06-16T18:38:40+08:00">2 days ago</time>
                          </div>
                          <div class="media-detail">Lorem ipsum Id consectetur et minim</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-away">
                            <img src="assets/portraits/5.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Edward Fletcher</h6>
                          <div class="media-meta">
                            <time datetime="2015-06-15T20:34:48+08:00">3 days ago</time>
                          </div>
                          <div class="media-detail">Dolor et irure cupidatat commodo nostrud nostrud.</div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </li>
              <li class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon wb-settings" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)" role="menuitem">
                    See all messages
                  </a>
              </li>
            </ul>
          </li>
          <li id="toggleChat">
            <a data-toggle="site-sidebar" href="javascript:void(0)" title="Chat" data-url="../site-sidebar.tpl">
              <i class="icon wb-chat" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->

      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->
    </div>
  </nav>
  <div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-category">General</li>
            <li class="site-menu-item">
              <a href="javascript:void(0)" data-slug="dashboard">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Dashboard</span>
              </a>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="page">
                <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                <span class="site-menu-title">Users</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="400.html" data-slug="page-error-400">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">View All Users</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="403.html" data-slug="page-error-403">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Add New User</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="site-menubar-footer">
      <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
      data-original-title="Settings">
        <span class="icon wb-settings" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
        <span class="icon wb-eye-close" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
        <span class="icon wb-power" aria-hidden="true"></span>
      </a>
    </div>
  </div>
  <div class="site-gridmenu">
    <ul>
      <li>
        <a href="../apps/mailbox/mailbox.html">
          <i class="icon wb-envelope"></i>
          <span>Mailbox</span>
        </a>
      </li>
      <li>
        <a href="../apps/calendar/calendar.html">
          <i class="icon wb-calendar"></i>
          <span>Calendar</span>
        </a>
      </li>
      <li>
        <a href="../apps/contacts/contacts.html">
          <i class="icon wb-user"></i>
          <span>Contacts</span>
        </a>
      </li>
      <li>
        <a href="../apps/media/overview.html">
          <i class="icon wb-camera"></i>
          <span>Media</span>
        </a>
      </li>
      <li>
        <a href="../apps/documents/categories.html">
          <i class="icon wb-order"></i>
          <span>Documents</span>
        </a>
      </li>
      <li>
        <a href="../apps/projects/projects.html">
          <i class="icon wb-image"></i>
          <span>Project</span>
        </a>
      </li>
      <li>
        <a href="../apps/forum/forum.html">
          <i class="icon wb-chat-group"></i>
          <span>Forum</span>
        </a>
      </li>
      <li>
        <a href="/admin/dashboard">
          <i class="icon wb-dashboard"></i>
          <span>Dashboard</span>
        </a>
      </li>
    </ul>
  </div>


  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Add User</h1>
      <ol class="breadcrumb">
        <li><a href="/admin/dashboard">Home</a></li>
        <li><a href="/admin/user">Users</a></li>
        <li class="active">Add User</li>
      </ol>
    </div>
    <div class="page-content container-fluid">
      <!-- Panel Full Example -->
      <div class="panel">
        <div class="panel-heading">
        </div>
        <div class="panel-body">
          <form id="adduser" method="POST" action="/admin/adduser"  >
          {{ csrf_field()}}
            <div class="row row-lg">
              <div class="col-lg-6 form-horizontal">
                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">Name
                    <span class="required">*</span>
                  </label>
                  <div class=" col-lg-12 col-sm-9">
                    <input type="text" class="form-control" name="name" placeholder="John Fish"
                    required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">Email
                    <span class="required">*</span>
                  </label>
                  <div class="col-lg-12 col-sm-9">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="icon wb-envelope" aria-hidden="true"></i>
                      </span>
                      <input type="email" class="form-control" name="email" placeholder="email@email.com"
                      required="">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">Password
                    <span class="required">*</span>
                  </label>
                  <div class="col-lg-12 col-sm-9">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="icon wb-lock" aria-hidden="true"></i>
                      </span>
                      <input type="password" class="form-control" name="password" placeholder="Min length 8"
                      required="">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-12 col-sm-3 control-label">Role</label>
                  <div class="col-lg-12 col-sm-9">
                    <select class="form-control" id="role" name="role" required="">
                      <option value="">Choose a Role</option>
                      <option value="admin">Admin</option>
                      <option value="student">Student</option>
                      <option value="teacher">Teacher</option>
                      
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group col-lg-12 text-right padding-top-m">
                <button type="submit" class="btn btn-primary" id="validateButton1">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- End Panel Full Example -->
    </div>
  </div>
  <!-- End Page -->
  <!-- Footer -->
  <footer class="site-footer">
    <span class="site-footer-legal">© 2016 Oxenlab</span>
    <div class="site-footer-right">
      Crafted with <i class="red-600 wb wb-heart"></i> by <a href="http://oxenlab.com">Oxenlab</a>
    </div>
  </footer>

  <!-- Core  -->
  <script src="assets/vendor/jquery/jquery.js"></script>
  <script src="assets/vendor/bootstrap/bootstrap.js"></script>
  <script src="assets/vendor/animsition/jquery.animsition.js"></script>
  <script src="assets/vendor/asscroll/jquery-asScroll.js"></script>
  <script src="assets/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="assets/vendor/asscrollable/jquery.asScrollable.all.js"></script>
  <script src="assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

  <!-- Plugins -->
  <script src="assets/vendor/switchery/switchery.min.js"></script>
  <script src="assets/vendor/intro-js/intro.js"></script>
  <script src="assets/vendor/screenfull/screenfull.js"></script>
  <script src="assets/vendor/slidepanel/jquery-slidePanel.js"></script>

  <script src="assets/vendor/formvalidation/formValidation.min.js"></script>
  <script src="assets/vendor/formvalidation/framework/bootstrap.min.js"></script>

  <!-- Scripts -->
  <script src="assets/js/core.js"></script>
  <script src="assets/js/site.js"></script>
  <script src="assets/js/app.js"></script>

  <script src="assets/js/sections/menu.js"></script>
  <script src="assets/js/sections/menubar.js"></script>
  <script src="assets/js/sections/sidebar.js"></script>

  <script src="assets/js/configs/config-colors.js"></script>
  <script src="assets/js/configs/config-tour.js"></script>

  <script src="assets/vendor/toastr/toastr.js"></script>
  <script src="assets/js/components/toastr.js"></script>

  <script src="assets/js/components/asscrollable.js"></script>
  <script src="assets/js/components/animsition.js"></script>
  <script src="assets/js/components/slidepanel.js"></script>
  <script src="assets/js/components/switchery.js"></script>


  <script>
    (function(document, window, $) {
      'use strict';
      var Site = window.Site;
      $(document).ready(function($) {
        Site.run();
      });

      // Example Validataion Full
      // ------------------------
      (function() {
        $('#exampleFullForm').formValidation({
          framework: "bootstrap",
          button: {
            selector: '#validateButton1',
            disabled: 'disabled'
          },
          icon: null,
          fields: {
            username: {
              validators: {
                notEmpty: {
                  message: 'The username is required'
                },
                stringLength: {
                  min: 6,
                  max: 30
                },
                regexp: {
                  regexp: /^[a-zA-Z0-9]+$/
                }
              }
            },
            email: {
              validators: {
                notEmpty: {
                  message: 'The username is required'
                },
                emailAddress: {
                  message: 'The email address is not valid'
                }
              }
            },
            password: {
              validators: {
                notEmpty: {
                  message: 'The password is required'
                },
                stringLength: {
                  min: 8
                }
              }
            },
            birthday: {
              validators: {
                notEmpty: {
                  message: 'The birthday is required'
                },
                date: {
                  format: 'YYYY/MM/DD'
                }
              }
            },
            github: {
              validators: {
                url: {
                  message: 'The url is not valid'
                }
              }
            },
            skills: {
              validators: {
                notEmpty: {
                  message: 'The skills is required'
                },
                stringLength: {
                  max: 300
                }
              }
            },
            porto_is: {
              validators: {
                notEmpty: {
                  message: 'Please specify at least one'
                }
              }
            },
            'for[]': {
              validators: {
                notEmpty: {
                  message: 'Please specify at least one'
                }
              }
            },
            company: {
              validators: {
                notEmpty: {
                  message: 'Please company'
                }
              }
            },
            browsers: {
              validators: {
                notEmpty: {
                  message: 'Please specify at least one browser you use daily for development'
                }
              }
            }
          }
        });
      })();

      // Example Validataion Constraints
      // -------------------------------
      (function() {
        $('#exampleConstraintsForm, #exampleConstraintsFormTypes').formValidation({
          framework: "bootstrap",
          icon: null,
          fields: {
            type_email: {
              validators: {
                emailAddress: {
                  message: 'The email address is not valid'
                }
              }
            },
            type_url: {
              validators: {
                url: {
                  message: 'The url is not valid'
                }
              }
            },
            type_digits: {
              validators: {
                digits: {
                  message: 'The value is not digits'
                }
              }
            },
            type_numberic: {
              validators: {
                integer: {
                  message: 'The value is not an number'
                }
              }
            },
            type_phone: {
              validators: {
                phone: {
                  message: 'The value is not an phone(US)'
                }
              }
            },
            type_credit_card: {
              validators: {
                creditCard: {
                  message: 'The credit card number is not valid'
                }
              }
            },
            type_date: {
              validators: {
                date: {
                  format: 'YYYY/MM/DD'
                }
              }
            },
            type_color: {
              validators: {
                color: {
                  type: ['hex', 'hsl', 'hsla', 'keyword', 'rgb',
                    'rgba'
                  ], // The default value for type
                  message: 'The value is not valid color'
                }
              }
            },
            type_ip: {
              validators: {
                ip: {
                  ipv4: true,
                  ipv6: true,
                  message: 'The value is not valid ip(v4 or v6)'
                }
              }
            }
          }
        });
      })();

      // Example Validataion Standard Mode
      // ---------------------------------
      (function() {
        $('#exampleStandardForm').formValidation({
          framework: "bootstrap",
          button: {
            selector: '#validateButton2',
            disabled: 'disabled'
          },
          icon: null,
          fields: {
            standard_fullName: {
              validators: {
                notEmpty: {
                  message: 'The full name is required and cannot be empty'
                }
              }
            },
            standard_email: {
              validators: {
                notEmpty: {
                  message: 'The email address is required and cannot be empty'
                },
                emailAddress: {
                  message: 'The email address is not valid'
                }
              }
            },
            standard_content: {
              validators: {
                notEmpty: {
                  message: 'The content is required and cannot be empty'
                },
                stringLength: {
                  max: 500,
                  message: 'The content must be less than 500 characters long'
                }
              }
            }
          }
        });
      })();

      // Example Validataion Summary Mode
      // -------------------------------
      (function() {
        $('.summary-errors').hide();

        $('#exampleSummaryForm').formValidation({
          framework: "bootstrap",
          button: {
            selector: '#validateButton3',
            disabled: 'disabled'
          },
          icon: null,
          fields: {
            summary_fullName: {
              validators: {
                notEmpty: {
                  message: 'The full name is required and cannot be empty'
                }
              }
            },
            summary_email: {
              validators: {
                notEmpty: {
                  message: 'The email address is required and cannot be empty'
                },
                emailAddress: {
                  message: 'The email address is not valid'
                }
              }
            },
            summary_content: {
              validators: {
                notEmpty: {
                  message: 'The content is required and cannot be empty'
                },
                stringLength: {
                  max: 500,
                  message: 'The content must be less than 500 characters long'
                }
              }
            }
          }
        })

        .on('success.form.fv', function(e) {
          // Reset the message element when the form is valid
          $('.summary-errors').html('');
        })

        .on('err.field.fv', function(e, data) {
          // data.fv     --> The FormValidation instance
          // data.field  --> The field name
          // data.element --> The field element
          $('.summary-errors').show();

          // Get the messages of field
          var messages = data.fv.getMessages(data.element);

          // Remove the field messages if they're already available
          $('.summary-errors').find('li[data-field="' + data.field +
            '"]').remove();

          // Loop over the messages
          for (var i in messages) {
            // Create new 'li' element to show the message
            $('<li/>')
              .attr('data-field', data.field)
              .wrapInner(
                $('<a/>')
                .attr('href', 'javascript: void(0);')
                // .addClass('alert alert-danger alert-dismissible')
                .html(messages[i])
                .on('click', function(e) {
                  // Focus on the invalid field
                  data.element.focus();
                })
              ).appendTo('.summary-errors > ul');
          }

          // Hide the default message
          // $field.data('fv.messages') returns the default element containing the messages
          data.element
            .data('fv.messages')
            .find('.help-block[data-fv-for="' + data.field + '"]')
            .hide();
        })

        .on('success.field.fv', function(e, data) {
          // Remove the field messages
          $('.summary-errors > ul').find('li[data-field="' + data.field +
            '"]').remove();
          if ($('#exampleSummaryForm').data('formValidation').isValid()) {
            $('.summary-errors').hide();
          }
        });
      })();
    })(document, window, jQuery);
  </script>

</body>

</html>