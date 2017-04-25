<!DOCTYPE html>
<html lang="en">
    <!-- START Head -->
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">

        <!-- Enable responsiveness on mobile devices-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

        <title>
            SKARLA | Forms Extended 
        </title>

        <!--START Loader -->
        <style>
            #initial-loader{display:flex;align-items:center;justify-content:center;flex-wrap:wrap;width:100%;background:#212121;position:fixed;z-index:10000;top:0;left:0;bottom:0;right:0;transition:opacity .2s ease-out}#initial-loader .initial-loader-top{display:flex;align-items:center;justify-content:space-between;width:200px;border-bottom:1px solid #2d2d2d;padding-bottom:5px}#initial-loader .initial-loader-top > *{display:block;flex-shrink:0;flex-grow:0}#initial-loader .initial-loader-bottom{padding-top:10px;color:#5C5C5C;font-family:-apple-system,"Helvetica Neue",Helvetica,"Segoe UI",Arial,sans-serif;font-size:12px}@keyframes spin{100%{transform:rotate(360deg)}}#initial-loader .loader g{transform-origin:50% 50%;animation:spin .5s linear infinite}body.loading {overflow: hidden !important} body.loaded #initial-loader{opacity:0}
        </style>
        <!--END Loader-->

        <!-- SCSS Output -->        
        <link rel="stylesheet" href="{{skarla_css_url("app.min.e7c8016f.css")}}">

        <!-- START Favicon -->
        <!--        <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicons/apple-touch-icon.png">
                <link rel="icon" type="image/png" sizes="192x192" href="../assets/images/favicons/android-chrome-192x192.png">
                <link rel="icon" type="image/png" sizes="192x192" href="../assets/images/favicons/android-chrome-256x256.png">
                <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicons/favicon-32x32.png">
                <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicons/favicon-16x16.png">
                <link rel="mask-icon" href="../assets/images/favicons/safari-pinned-tab.svg" color="#f85d4c">
                <meta name="theme-color" content="#ffffff">-->
        <!-- END Favicon -->

        <!-- RSS -->
        <!--<link rel="alternate" type="application/rss+xml" title="RSS" href="../atom.xml">-->

<!--    <style>
    .navigation .sidebar {
  background: background: rgba(39,40,46,1);
background: -moz-linear-gradient(top, rgba(39,40,46,1) 0%, rgba(58,65,80,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(39,40,46,1)), color-stop(100%, rgba(58,65,80,1)));
background: -webkit-linear-gradient(top, rgba(39,40,46,1) 0%, rgba(58,65,80,1) 100%);
background: -o-linear-gradient(top, rgba(39,40,46,1) 0%, rgba(58,65,80,1) 100%);
background: -ms-linear-gradient(top, rgba(39,40,46,1) 0%, rgba(58,65,80,1) 100%);
background: linear-gradient(to bottom, rgba(39,40,46,1) 0%, rgba(58,65,80,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#27282e', endColorstr='#3a4150', GradientType=0 );
  direction: ltr;
}
    </style>-->
        <!-- jekyll settings -->
        <script>
            var ASSET_PATH_BASE = '../';
        </script>
    </head>
    <!-- END Head -->


    <body class="sidebar-full-height  ">

        <!-- Bower Libraries Scripts -->
        <script src="{{skarla_vendor_url("js/lib.min.js")}}"></script>               

        <div class="main-wrap">
            <nav class="navigation">
                <!-- START Navbar -->
                <div class="navbar-default navbar navbar-fixed-top">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <a class="current navbar-brand" href="../index.html">
                                <img alt="Spin Logo Inverted" class="h-20" src="../assets/images/logo-warning-black@2X.png">
                            </a>
                            <button class="action-right-sidebar-toggle navbar-toggle collapsed" data-target="#navdbar" data-toggle="collapse" type="button">
                                <i class="fa fa-fw fa-align-right"></i>
                            </button>
                            <button class="navbar-toggle collapsed" data-target="#navbar" data-toggle="collapse" type="button">
                                <i class="fa fa-fw fa-user"></i>
                            </button>
                            <button class="action-sidebar-open navbar-toggle collapsed" type="button">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="navbar">

                            <!-- START Search Mobile -->
                            <div class="form-group hidden-lg hidden-md hidden-sm">
                                <div class="input-group hidden-lg hidden-md">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-search"></i></button>
                                    </span>
                                </div>
                            </div>
                            <!-- END Search Mobile -->

                            <!-- START Left Side Navbar -->
                            <ul class="nav navbar-nav navbar-left clearfix yamm">

                                <!-- START Switch Sidebar ON/OFF -->
                                <li id="sidebar-switch" class="hidden-xs">
                                    <a class="action-toggle-sidebar-slim" data-placement="bottom" data-toggle="tooltip" href="#" title="Slim sidebar on/off">
                                        <i class="fa fa-lg fa-bars fa-fw"></i>
                                    </a>
                                </li>
                                <!-- END Switch Sidebar ON/OFF -->

                                <!-- START Menu Only Visible on Navbar -->
                                <li id="top-menu-switch" class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <i class="fa fa-fw fa-caret-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">

                                                    <!-- START Start, Widgets Navbar Menu -->
                                                    <ul class="col-sm-2 list-unstyled">
                                                        <li>
                                                            <p class="text-muted small text-uppercase"><strong> Start</strong></p>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a href="../start/overview.html" class="text-gray-lighter">
                                                                <span class="nav-label">Overview</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a href="../start/projects.html" class="text-gray-lighter">
                                                                <span class="nav-label">Projects</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a href="../start/analytics.html" class="text-gray-lighter">
                                                                <span class="nav-label">Analytics</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a href="../start/activity-team.html" class="text-gray-lighter">
                                                                <span class="nav-label">Activity Team</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a href="../start/e-commerce.html" class="text-gray-lighter">
                                                                <span class="nav-label">E-Commerce</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a href="../start/financial.html" class="text-gray-lighter">
                                                                <span class="nav-label">Financial</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a href="../start/stock.html" class="text-gray-lighter">
                                                                <span class="nav-label">Stock</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a href="../start/performance.html" class="text-gray-lighter">
                                                                <span class="nav-label">Performance</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a href="../start/exchange&amp;trading.html" class="text-gray-lighter">
                                                                <span class="nav-label">Exchange &amp; Trading</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a href="../start/system.html" class="text-gray-lighter">
                                                                <span class="nav-label">System</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a href="../start/monitor.html" class="text-gray-lighter">
                                                                <span class="nav-label">Monitor</span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <p class="text-muted small text-uppercase m-t-2"><strong>Widgets</strong></p>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a href="../widgets/widgets.html" class="text-gray-lighter">
                                                                <span class="nav-label">Widgets</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a href="../graphs-widgets/widgets.html" class="text-gray-lighter">
                                                                <span class="nav-label">Graphs Widgets</span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <p class="text-muted small text-uppercase m-t-2"><strong>Tables</strong></p>
                                                        </li>

                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../tables/pricing-tables.html">
                                                                <span class="nav-label">Pricing Tables</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../tables/tables.html">
                                                                <span class="nav-label">Tables</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../tables/datatables.html">
                                                                <span class="nav-label">Datatables</span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <p class="text-muted small text-uppercase m-t-2"> <strong> Grid</strong></p>
                                                            <ul>
                                                                <li class="m-l-1 ">
                                                                    <a class="text-gray-lighter" href="../grids/grids.html">
                                                                        <span class="nav-label">Grids</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                    <!-- END Start, Widgets Navbar Menu -->

                                                    <!-- START Layouts, Sidebars Navbar Menu -->
                                                    <ul class="col-sm-2 list-unstyled">
                                                        <li>
                                                            <p class="text-muted small text-uppercase"><strong>Layouts</strong></p>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../layouts/default-fullwidth.html">
                                                                <span class="nav-label">Default FullWidth</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../layouts/default-fixed.html">
                                                                <span class="nav-label">Default Fixed</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../layouts/default-w-navbar.html">
                                                                <span class="nav-label">Default w/ Navbar</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../layouts/default-w-footer.html">
                                                                <span class="nav-label">Default w/ Footer</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../layouts/default-footer-fixed.html">
                                                                <span class="nav-label">Default Footer Fixed</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../layouts/navbar.html">
                                                                <span class="nav-label">Navbar</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../layouts/navbar-container.html">
                                                                <span class="nav-label">Navbar Container</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../layouts/empty-page.html">
                                                                <span class="nav-label">Empty Page</span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <p class="text-muted small text-uppercase m-t-2"><strong>Sidebars</strong></p>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../sidebars/sidebar-default.html">
                                                                <span class="nav-label">Sidebar Default</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../sidebars/sidebar-w-progress.html">
                                                                <span class="nav-label">Sidebar w/ Progress</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../sidebars/sidebar-w-menu.html">
                                                                <span class="nav-label">Sidebar w/ Menu</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../sidebars/sidebar-w-bars.html">
                                                                <span class="nav-label">Sidebar w/ Bars</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../sidebars/sidebar-avatar-&amp;-bars.html">
                                                                <span class="nav-label">Sidebar Avatar &amp; Bars</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../sidebars/sidebar-aside.html">
                                                                <span class="nav-label">Sidebar ASide</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../sidebars/sidebar-avatar-numbers.html">
                                                                <span class="nav-label">With Avatar &amp; Numbers</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../sidebars/sidebar-avatar-stats.html">
                                                                <span class="nav-label">With Avatar &amp; Stats</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../sidebars/sidebar-slim.html">
                                                                <span class="nav-label">Sidebar Slim</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../sidebars/sidebar-big-icons.html">
                                                                <span class="nav-label">Sidebar Big Icons</span>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                    <!-- END Layouts, Sidebars Navbar Menu -->

                                                    <!-- START Layouts, Sidebars Navbar Menu -->
                                                    <ul class="col-sm-2 list-unstyled">
                                                        <li>
                                                            <p class="text-muted small text-uppercase"><strong> Interface</strong></p>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../interface/colors.html">
                                                                <span class="nav-label">Colors</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../interface/typography.html">
                                                                <span class="nav-label">Typography</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../interface/buttons.html">
                                                                <span class="nav-label">Buttons</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../interface/paginations&amp;pager.html">
                                                                <span class="nav-label">Paginations &amp; Pager</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../interface/images&amp;thumbs.html">
                                                                <span class="nav-label">Images &amp; Thumbs</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../interface/avatars.html">
                                                                <span class="nav-label">Avatars</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../interface/navbars.html">
                                                                <span class="nav-label">Navbars</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../interface/alerts.html">
                                                                <span class="nav-label">Alerts</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../interface/toastr.html">
                                                                <span class="nav-label">Toastr</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../interface/modals.html">
                                                                <span class="nav-label">Modals</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../interface/progress-bars.html">
                                                                <span class="nav-label">Progress Bars</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../interface/badges&amp;labels.html">
                                                                <span class="nav-label">Badges &amp; Labels</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../interface/breadcrumps.html">
                                                                <span class="nav-label">Breadcrumbs</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../interface/tabs&amp;pills.html">
                                                                <span class="nav-label">Tabs &amp; Pills</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../interface/tooltips&amp;popovers.html">
                                                                <span class="nav-label">Tooltips &amp; Popovers</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../interface/list-groups.html">
                                                                <span class="nav-label">List Groups</span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <p class="text-muted small text-uppercase m-t-2"><strong>Graphs</strong></p>
                                                        </li>

                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../graphs/highcharts.html">
                                                                <span class="nav-label">Highcharts</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../graphs/highstock.html">
                                                                <span class="nav-label">Highstock</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../graphs/peity.html">
                                                                <span class="nav-label">Peity</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../graphs/sparklines.html">
                                                                <span class="nav-label">Sparklines</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../graphs/chartist.html">
                                                                <span class="nav-label">Chartist</span>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                    <!-- END Layouts, Sidebars Navbar Menu -->

                                                    <!-- START Pages Navbar Menu -->
                                                    <ul class="col-sm-2 list-unstyled">
                                                        <li>
                                                            <p class="text-muted small text-uppercase"><strong> Pages</strong></p>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../pages/register.html">
                                                                <span class="nav-label">Register</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../pages/login.html">
                                                                <span class="nav-label">Login</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../pages/forgot-password.html">
                                                                <span class="nav-label">Forgot Password</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../pages/lock-screen.html">
                                                                <span class="nav-label">Lock Screen</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../pages/error-404.html">
                                                                <span class="nav-label">Error 404</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../pages/invoice.html">
                                                                <span class="nav-label">Invoice</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../pages/timeline.html">
                                                                <span class="nav-label">Timeline</span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <p class="text-muted small text-uppercase m-t-2"><strong>Projects</strong></p>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../apps/projects-list.html">
                                                                <span class="nav-label">Projects List</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../apps/projects-grid.html">
                                                                <span class="nav-label">Projects Grid</span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <p class="text-muted small text-uppercase m-t-2"> <strong> Tasks</strong></p>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../apps/tasks-list.html">
                                                                <span class="nav-label">Tasks List</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../apps/tasks-grid.html">
                                                                <span class="nav-label">Tasks Grid</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../apps/tasks-details.html">
                                                                <span class="nav-label">Tasks Details</span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <p class="text-muted small text-uppercase m-t-2"><strong>Files Manager</strong></p>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../apps/files-list.html">
                                                                <span class="nav-label">Files List</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../apps/files-grid.html">
                                                                <span class="nav-label">Files Grid</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted small text-uppercase m-t-2"><strong> Search Results</strong></p>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../apps/search-results.html">
                                                                <span class="nav-label">Search Results</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../apps/images-results.html">
                                                                <span class="nav-label">Images Results</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../apps/videos-results.html">
                                                                <span class="nav-label">Videos Results</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../apps/users-results.html">
                                                                <span class="nav-label">Users Results</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <!-- END Pages Navbar Menu -->

                                                    <!-- START Pages Navbar Menu -->
                                                    <ul class="col-sm-2 list-unstyled">
                                                        <li>
                                                            <p class="text-muted small text-uppercase"><strong> Users</strong></p>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../apps/users-list.html">
                                                                <span class="nav-label">Users List</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../apps/users-grid.html">
                                                                <span class="nav-label">Users Grid</span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <p class="text-muted small text-uppercase m-t-2"><strong>Mailbox</strong></p>
                                                        </li>

                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../apps/inbox.html">
                                                                <span class="nav-label">Inbox</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../apps/email-details.html">
                                                                <span class="nav-label">Email Details</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../apps/new-email.html">
                                                                <span class="nav-label">New Email</span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <p class="text-muted small text-uppercase m-t-2"> <strong> Profile User</strong></p>
                                                        </li>

                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../apps/profile-details.html">
                                                                <span class="nav-label">Profile Details</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../apps/profile-edit.html">
                                                                <span class="nav-label">Profile Edit</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../apps/account-edit.html">
                                                                <span class="nav-label">Account Edit</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../apps/billing-edit.html">
                                                                <span class="nav-label">Billing Edit</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../apps/settings-edit.html">
                                                                <span class="nav-label">Settings Edit</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../apps/sessions-edit.html">
                                                                <span class="nav-label">Sessions Edit</span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <p class="text-muted small text-uppercase m-t-2"><strong> Icons</strong></p>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../icon/fonts-awesome.html">
                                                                <span class="nav-label">Fonts Awesome</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../icon/glyphicons.html">
                                                                <span class="nav-label">Glyphicons</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted small text-uppercase m-t-2"><strong>Versions</strong></p>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../versions/jquery.html">
                                                                <span class="nav-label">JQuery</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../versions/react.html">
                                                                <span class="nav-label">React</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../versions/react.html">
                                                                <span class="nav-label">Photoshop .PSD</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <!-- END Pages Navbar Menu -->

                                                    <!-- START Pages Navbar Menu -->
                                                    <ul class="col-sm-2 list-unstyled">
                                                        <li>
                                                            <p class="text-muted small text-uppercase"><strong>Forms</strong></p>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../forms/forms.html">
                                                                <span class="nav-label">Forms</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../forms/forms-layouts.html">
                                                                <span class="nav-label">Forms Layouts</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../forms/date-range-picker.html">
                                                                <span class="nav-label">Date Range Picker</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-l-1 active">
                                                            <a class="text-gray-lighter" href="../forms/forms-extended.html">
                                                                <span class="nav-label">Forms Extended</span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <p class="text-muted small text-uppercase m-t-2"><strong>Panels</strong></p>
                                                        </li>
                                                        <li class="m-l-1 ">
                                                            <a class="text-gray-lighter" href="../panels/panels.html">
                                                                <span class="nav-label">Panels</span>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                    <!-- END Pages Navbar Menu -->

                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!-- END Menu Only Visible on Navbar -->


                                <li class="spin-search-box clearfix hidden-xs">
                                    <a href="#" class="pull-left">
                                        <i class="fa fa-search fa-lg icon-inactive"></i>
                                        <i class="fa fa-close fa-lg icon-active"></i>
                                    </a>
                                    <div class="input-group input-group-sm pull-left p-10">
                                        <input type="text" class="form-control" placeholder="Search for...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                            <!-- START Left Side Navbar -->

                            <!-- START Right Side Navbar -->
                            <ul class="nav navbar-nav navbar-right">

                                <li role="separator" class="divider hidden-lg hidden-md hidden-sm"></li>
                                <li class="dropdown-header hidden-lg hidden-md hidden-sm text-gray-lighter text-uppercase">
                                    <strong>Your Profile</strong>
                                </li>

                                <!-- START Notification -->
                                <li class="dropdown">

                                    <!-- START Icon Notification with Badge (10)-->
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                                        <i class="fa fa-lg fa-fw fa-bell hidden-xs"></i>
                                        <span class="hidden-sm hidden-md hidden-lg">
                                            Notifications <span class="badge badge-primary m-l-1">10</span>
                                        </span>
                                        <span class="label label-primary label-pill label-with-icon hidden-xs">10</span>
                                        <span class="fa fa-fw fa-angle-down hidden-lg hidden-md hidden-sm"></span>
                                    </a>
                                    <!-- END Icon Notification with Badge (10)-->

                                    <!-- START Notification Dropdown Menu -->
                                    <ul class="dropdown-menu dropdown-menu-right p-t-0 b-t-0 p-b-0 b-b-0 b-a-0">
                                        <li>
                                            <div class="yamm-content p-t-0 p-r-0 p-l-0 p-b-0">
                                                <ul class="list-group m-b-0 b-b-0">
                                                    <li class="list-group-item b-r-0 b-l-0 b-r-0 b-t-r-0  b-t-l-0 b-b-2 w-350">
                                                        <small class="text-uppercase">
                                                            <strong>Notifications</strong>
                                                        </small>
                                                        <a role="button" href="../apps/settings-edit.html" class="btn m-t-0 btn-xs btn-default pull-right">
                                                            <i class="fa fa-fw fa-gear"></i>
                                                        </a>
                                                    </li>

                                                    <!-- START Scroll Inside Panel -->
                                                    <li class="list-group-item b-a-0 p-x-0 p-y-0 b-t-0">
                                                        <div class="scroll-300 custom-scrollbar">
                                                            <a href="../pages/timeline.html" class="list-group-item b-r-0 b-t-0 b-l-0">
                                                                <div class="media">
                                                                    <div class="media-left">
                                                                        <span class="fa-stack fa-lg">
                                                                            <i class="fa fa-circle-thin fa-stack-2x text-danger"></i>
                                                                            <i class="fa fa-close fa-stack-1x fa-fw text-danger"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h5 class="m-t-0">
                                                                            <span>calculating the firewall won&apos;t do anything, we need to index the neural JSON system!</span>
                                                                        </h5>
                                                                        <p class="text-nowrap small m-b-0">
                                                                            <span>04-Jun-2011, 05:45</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="../pages/timeline.html" class="list-group-item b-r-0 b-l-0">
                                                                <div class="media">
                                                                    <div class="media-left">
                                                                        <span class="fa-stack fa-lg">
                                                                            <i class="fa fa-circle-thin fa-stack-2x text-primary"></i>
                                                                            <i class="fa fa-info fa-stack-1x text-primary"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h5 class="m-t-0">
                                                                            <span>Try to compress the HTTP circuit, maybe it will synthesize the bluetooth transmitter!</span>
                                                                        </h5>
                                                                        <p class="text-nowrap small m-b-0">
                                                                            <span>31-Dec-2013, 09:11</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="../pages/timeline.html" class="list-group-item b-r-0 b-l-0">
                                                                <div class="media">
                                                                    <div class="media-left">
                                                                        <span class="fa-stack fa-lg">
                                                                            <i class="fa fa-circle-thin fa-stack-2x text-success"></i>
                                                                            <i class="fa fa-check fa-stack-1x text-success"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h5 class="m-t-0">
                                                                            <span>synthesizing the program won&apos;t do anything, we need to index the bluetooth JSON interface!</span>
                                                                        </h5>
                                                                        <p class="text-nowrap small m-b-0">
                                                                            <span>15-Nov-2011, 02:48</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="../pages/timeline.html" class="list-group-item b-r-0 b-l-0">
                                                                <div class="media">
                                                                    <div class="media-left">
                                                                        <span class="fa-stack fa-lg">
                                                                            <i class="fa fa-circle-thin fa-stack-2x text-warning"></i>
                                                                            <i class="fa fa-exclamation fa-stack-1x fa-fw text-warning"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h5 class="m-t-0">
                                                                            <span>Use the neural AGP pixel, then you can parse the primary microchip!</span>
                                                                        </h5>
                                                                        <p class="text-nowrap small m-b-0">
                                                                            <span>10-Sep-2011, 04:01</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </li>

                                                    <!-- END Scroll Inside Panel -->
                                                    <li class="list-group-item b-a-0 p-x-0 p-y-0 r-a-0 b-b-0">
                                                        <a class="list-group-item text-center b-r-0 b-b-0 b-l-0 b-r-b-r-0 b-r-b-l-0" href="../pages/timeline.html">
                                                            See All Notifications <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </li>
                                    </ul>
                                    <!-- END Notification Dropdown Menu -->

                                </li>
                                <!-- END Notification -->

                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                                        <i class="fa fa-lg fa-fw fa-envelope hidden-xs"></i>
                                        <span class="hidden-sm hidden-md hidden-lg">Messages <span class="badge badge-info m-l-1">3</span></span>
                                        <span class="label label-info label-pill label-with-icon hidden-xs">3</span>
                                        <span class="fa fa-fw fa-angle-down hidden-lg hidden-md hidden-sm"></span>
                                    </a>

                                    <!-- START Messages Dropdown Menu -->
                                    <ul class="dropdown-menu dropdown-menu-right p-t-0 b-t-0 p-b-0 b-b-0 b-a-0">
                                        <li>
                                            <div class="yamm-content p-t-0 p-r-0 p-l-0 p-b-0">
                                                <ul class="list-group m-b-0">
                                                    <li class="list-group-item b-r-0 b-l-0 b-r-0 b-t-r-0 b-t-l-0 b-b-2 w-350">
                                                        <small class="text-uppercase">
                                                            <strong>Messages</strong>
                                                        </small>
                                                        <a role="button" href="../apps/new-email.html" class="btn m-t-0 btn-xs btn-default pull-right">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                    </li>

                                                    <!-- START Scroll Inside Panel -->
                                                    <li class="list-group-item b-a-0 p-x-0 p-y-0 b-t-0">
                                                        <div class="scroll-200 custom-scrollbar">

                                                            <a href="../apps/email-details.html" class="list-group-item b-r-0 b-t-0 b-l-0">
                                                                <div class="media">
                                                                    <div class="media-left media-middle">
                                                                        <div class="avatar">
                                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/nasirwd/128.jpg" alt="Avatar">
                                                                            <i class="avatar-status avatar-status-bottom bg-danger b-gray-darker"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body media-auto">
                                                                        <h5 class="m-b-0 m-t-0">
                                                                            <span>Lenora Jakubowski</span>
                                                                            <small><span>05:60</span></small>
                                                                        </h5>
                                                                        <p class="m-t-0 m-b-0">
                                                                            <span>Voluptas repellat inventore ratione voluptas autem fugit ut dolore totam.</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </a>

                                                            <a href="../apps/email-details.html" class="list-group-item b-r-0 b-l-0">
                                                                <div class="media">
                                                                    <div class="media-left media-middle">
                                                                        <div class="avatar">
                                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/donjain/128.jpg" alt="Avatar">
                                                                            <i class="avatar-status avatar-status-bottom bg-warning b-gray-darker"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body media-auto">
                                                                        <h5 class="m-b-0 m-t-0">
                                                                            <span>Alycia Heaney</span>
                                                                            <small><span>02:19</span></small>
                                                                        </h5>
                                                                        <p class="m-t-0 m-b-0">
                                                                            <span>Dolores et magnam exercitationem reiciendis dolorem voluptas.</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </a>

                                                            <a href="../apps/email-details.html" class="list-group-item b-r-0 b-l-0">
                                                                <div class="media">
                                                                    <div class="media-left media-middle">
                                                                        <div class="avatar">
                                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/sethlouey/128.jpg" alt="Avatar">
                                                                            <i class="avatar-status avatar-status-bottom bg-success b-gray-darker"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body media-auto">
                                                                        <h5 class="m-b-0 m-t-0">
                                                                            <span>Abelardo Braun</span>
                                                                            <small><span>03:44</span></small>
                                                                        </h5>
                                                                        <p class="m-t-0 m-b-0">
                                                                            <span>Necessitatibus dolores cumque voluptatem.</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </a>

                                                            <a href="../apps/email-details.html" class="list-group-item b-r-0 b-l-0">
                                                                <div class="media">
                                                                    <div class="media-left media-middle">
                                                                        <div class="avatar">
                                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/juanmamartinez/128.jpg" alt="Avatar">
                                                                            <i class="avatar-status avatar-status-bottom bg-danger b-gray-darker"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body media-auto">
                                                                        <h5 class="m-b-0 m-t-0">
                                                                            <span>Elmira Casper</span>
                                                                            <small><span>11:55</span></small>
                                                                        </h5>
                                                                        <p class="m-t-0 m-b-0">
                                                                            <span>Deserunt recusandae blanditiis magni qui laborum voluptatum repudiandae.</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </a>

                                                            <a href="../apps/email-details.html" class="list-group-item b-r-0 b-l-0">
                                                                <div class="media">
                                                                    <div class="media-left media-middle">
                                                                        <div class="avatar">
                                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/spedwig/128.jpg" alt="Avatar">
                                                                            <i class="avatar-status avatar-status-bottom bg-warning b-gray-darker"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body media-auto">
                                                                        <h5 class="m-b-0 m-t-0">
                                                                            <span>Glenda Zboncak</span>
                                                                            <small><span>09:47</span></small>
                                                                        </h5>
                                                                        <p class="m-t-0 m-b-0">
                                                                            <span>Aliquam laboriosam quod officia exercitationem quis aliquid beatae ut provident.</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </a>

                                                            <a href="../apps/email-details.html" class="list-group-item b-r-0 b-l-0">
                                                                <div class="media">
                                                                    <div class="media-left media-middle">
                                                                        <div class="avatar">
                                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/peter576/128.jpg" alt="Avatar">
                                                                            <i class="avatar-status avatar-status-bottom bg-success b-gray-darker"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body media-auto">
                                                                        <h5 class="m-b-0 m-t-0">
                                                                            <span>Lela Goyette</span>
                                                                            <small><span>11:34</span></small>
                                                                        </h5>
                                                                        <p class="m-t-0 m-b-0">
                                                                            <span>Impedit porro qui.</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </a>

                                                        </div>
                                                    </li>
                                                    <!-- END Scroll Inside Panel -->

                                                    <li class="list-group-item b-a-0 p-x-0 b-b-0 p-y-0 r-a-0">
                                                        <a class="list-group-item text-center b-b-0 b-r-0 b-l-0 b-r-b-r-0 b-r-b-l-0" href="../apps/inbox.html">
                                                            See All Messages <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- END Messages Dropdown Menu -->

                                </li>

                                <li class="dropdown">
                                    <a class="dropdown-toggle user-dropdown" data-toggle="dropdown" href="#" role="button">
                                        <span class="m-r-1">Jasmin Wisozk</span>
                                        <div class="avatar avatar-image avatar-sm avatar-inline">
                                            <img alt="User" src="https://s3.amazonaws.com/uifaces/faces/twitter/mymyboy/128.jpg">
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-header">
                                            <small class="text-uppercase"><strong>Account</strong></small>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        <li>
                                            <a href="../apps/profile-details.html">
                                                <i class="fa fa-user fa-fw text-gray-dark m-r-1"></i>
                                                Your Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../apps/profile-edit.html">
                                                <i class="fa fa-gear fa-fw text-gray-dark m-r-1"></i>
                                                Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../apps/faq.html">
                                                <i class="fa fa-file fa-fw text-gray-dark m-r-1"></i>
                                                Faq
                                            </a>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        <li>
                                            <a href="../pages/login.html">
                                                <i class="fa fa-sign-out fa-fw text-gray-dark m-r-1"></i>
                                                Log Out
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a class="action-right-sidebar-toggle" title="Right sidebar on/off">
                                        <i class="fa fa-lg fa-align-right"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- END Right Side Navbar -->
                        </div>

                    </div>
                </div>
                <!-- END Navbar -->

                <!-- START Sidebars -->
                <aside class="navbar-default sidebar">
                    <div class="sidebar-overlay-head">
                        <img src="../assets/images/logo-warning-white@2X.png" alt="Logo" width="80">
                        <a href="#" class="sidebar-switch action-sidebar-close">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                    <div class="sidebar-content">
                        <!-- START Sidebar Header -->
                        <div class="add-on-container">
                            <div class="sidebar-container-default sidebar-section">
                                <div class="media">
                                    <div class="media-left media-top">
                                        <div class="avatar avatar-image avatar-inline">
                                            <img src="../assets/images/avatars/avatar-33.jpg" alt="Avatar">
                                            <i class="avatar-status bg-success avatar-status-bottom b-sidebar-status"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="media-heading text-white m-t-0 m-b-0"><span>Ian Torp</span></h5>
                                        <small>Back-end Developer</small>
                                    </div>
                                    <div class="media-right media-middle">
                                        <i class="fa fa-fw fa-gear"></i>
                                    </div>
                                </div>

                                <div class="progress h-3 m-t-3 m-b-0 bg-sidebar-muted">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                        <span class="sr-only">45% Complete</span>
                                    </div>
                                </div>

                                <!-- START Name & % -->
                                <div class="media m-t-0">
                                    <div class="media-body media-middle">
                                        <small class="text-left">Capacity</small>
                                    </div>
                                    <div class="media-right text-white">
                                        <small class="text-white">34%</small>
                                    </div>
                                </div>
                                <!-- END Name & % -->

                                <div class="progress h-3 m-t-1 m-b-0 bg-sidebar-muted">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                        <span class="sr-only">45% Complete</span>
                                    </div>
                                </div>

                                <!-- START Name & % -->
                                <div class="media m-t-0">
                                    <div class="media-body media-middle">
                                        <small class="text-left">Storage</small>
                                    </div>
                                    <div class="media-right text-white">
                                        <small class="text-white">67%</small>
                                    </div>
                                </div>
                                <!-- END Name & % -->

                                <div class="progress h-3 m-t-1 m-b-0 bg-sidebar-muted">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                        <span class="sr-only">45% Complete</span>
                                    </div>
                                </div>

                                <!-- START Name & % -->
                                <div class="media m-t-0">
                                    <div class="media-body media-middle">
                                        <small class="text-left">Quota Limit</small>
                                    </div>
                                    <div class="media-right text-white">
                                        <small class="text-white">87%</small>
                                    </div>
                                </div>
                                <!-- END Name & % -->

                            </div>

                            <div class="sidebar-container-big-icons">
                                <div class="avatar avatar-image avatar-inline m-b-1">
                                    <img src="../assets/images/avatars/avatar-33.jpg" alt="Avatar">
                                    <i class="avatar-status bg-success avatar-status-bottom"></i>
                                </div>
                                <p class="text-white m-y-0">Roxane Skiles</p>
                            </div>

                            <div class="sidebar-container-slim">
                                <div class="avatar avatar-image avatar-sm">
                                    <img src="../assets/images/avatars/avatar-33.jpg" alt="Avatar">
                                    <i class="avatar-status bg-success avatar-status-bottom  b-gray-darker"></i>
                                </div>
                            </div>
                        </div>
                        <!-- END Sidebar Header -->

                        <div class="sidebar-content">
                            <div class="sidebar-default-visible small text-uppercase sidebar-section m-t-3 m-b-2">
                                <strong>Navigation</strong>
                            </div>

                            <!-- START Tree Sidebar Common -->
                            <ul class="side-menu">

                                <li class="Dashboards">
                                    <a href="#" title="Dashboards">
                                        <i class="fa fa-home fa-lg fa-fw"></i><span class="nav-label">Start</span><i class="fa arrow"></i>
                                    </a>
                                    <ul>
                                        <li class="">
                                            <a href="../start/financial.html">
                                                <span class="nav-label">Financial</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../start/projects.html">
                                                <span class="nav-label">Projects</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../start/monitor.html">
                                                <span class="nav-label">Monitor</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../start/system.html">
                                                <span class="nav-label">System</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../start/activity-team.html">
                                                <span class="nav-label">Activity Team</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../start/e-commerce.html">
                                                <span class="nav-label">E-Commerce</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../start/stock.html">
                                                <span class="nav-label">Stock</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../start/performance.html">
                                                <span class="nav-label">Performance</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../start/exchange&amp;trading.html">
                                                <span class="nav-label">Exchange &amp; Trading</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../start/overview.html">
                                                <span class="nav-label">Overview</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#" title="Dashboards">
                                        <i class="fa fa-th fa-lg"></i><span class="nav-label">Widgets</span>
                                        <span class="pull-right badge badge-primary badge-outline text-uppercase">New</span>
                                    </a>
                                    <ul>
                                        <li class="">
                                            <a href="../widgets/widgets.html">
                                                <span class="nav-label">Data Widgets</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../widgets/graphs-widgets.html">
                                                <span class="nav-label">Graphs Widgets</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#" title="Layouts">
                                        <i class="fa fa-columns fa-lg fa-fw"></i><span class="nav-label">Layouts</span><i class="fa arrow"></i>
                                    </a>
                                    <ul>
                                        <li class="">
                                            <a href="../layouts/default.html">
                                                <span class="nav-label">Default</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../layouts/default-fixed.html">
                                                <span class="nav-label">Fixed</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../layouts/default-w-navbar.html">
                                                <span class="nav-label">Without Navbar</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../layouts/default-w-footer.html">
                                                <span class="nav-label">Without Footer</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../layouts/default-footer-fixed.html">
                                                <span class="nav-label">Footer Fixed</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../layouts/navbar.html">
                                                <span class="nav-label">Navbar</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../layouts/navbar-fixed.html">
                                                <span class="nav-label">Navbar Fixed</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../layouts/navbar-container.html">
                                                <span class="nav-label">Navbar Container</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../layouts/default-fullwidth.html">
                                                <span class="nav-label">FullWidth</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../layouts/empty-page.html">
                                                <span class="nav-label">Empty Page</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../layouts/boxed.html">
                                                <span class="nav-label">Boxed</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#" title="Layouts">
                                        <i class="fa fa-fw fa-lg fa-bars"></i><span class="nav-label">Sidebars</span><i class="fa arrow"></i>
                                    </a>
                                    <ul>
                                        <li class="">
                                            <a href="../sidebars/sidebar-default.html">
                                                <span class="nav-label">Default</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../sidebars/sidebar-w-progress.html">
                                                <span class="nav-label">Without Progress</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../sidebars/sidebar-w-menu.html">
                                                <span class="nav-label">Without Menu</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../sidebars/sidebar-w-bars.html">
                                                <span class="nav-label">Without Bars</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../sidebars/sidebar-avatar-&amp;-bars.html">
                                                <span class="nav-label">Avatar &amp; Bars</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../sidebars/sidebar-aside.html">
                                                <span class="nav-label">Sidebar ASide</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../sidebars/sidebar-avatar-numbers.html">
                                                <span class="nav-label">Avatar &amp; Numbers</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../sidebars/sidebar-avatar-stats.html">
                                                <span class="nav-label">Avatar &amp; Stats</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../sidebars/sidebar-slim.html">
                                                <span class="nav-label">Slim</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../sidebars/sidebar-big-icons.html">
                                                <span class="nav-label">Big Icons</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#" title="Skins">
                                        <i class="fa fa-google-wallet fa-lg"></i><span class="nav-label">Skins</span>
                                        <span class="pull-right badge badge-warning badge-outline text-uppercase">42</span>
                                    </a>

                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="nav-label">Dark &amp; Inverse</span> <i class="fa arrow"></i>
                                            </a>
                                            <ul>
                                                <li class="">
                                                    <a href="../skins/dark-inverse-primary.html">
                                                        <span class="nav-label">Primary</span>
                                                        <small><i class="fa fa-fw fa-circle text-primary pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/dark-inverse-info.html">
                                                        <span class="nav-label">Info</span>
                                                        <small><i class="fa fa-fw fa-circle text-info pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/dark-inverse-success.html">
                                                        <span class="nav-label">Success</span>
                                                        <small><i class="fa fa-fw fa-circle text-success pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/dark-inverse-warning.html">
                                                        <span class="nav-label">Warning</span>
                                                        <small><i class="fa fa-fw fa-circle text-warning pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/dark-inverse-danger.html">
                                                        <span class="nav-label">Danger</span>
                                                        <small><i class="fa fa-fw fa-circle text-danger pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/dark-inverse-soft-purple.html">
                                                        <span class="nav-label">Soft Purple</span>
                                                        <small><i class="fa fa-fw fa-circle text-soft-purple pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/dark-inverse-lighting-yellow.html">
                                                        <span class="nav-label">Lighting Yellow</span>
                                                        <small><i class="fa fa-fw fa-circle text-lighting-yellow pull-right"></i></small>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <span class="nav-label">Dark &amp; White</span> <i class="fa arrow"></i>
                                            </a>
                                            <ul>
                                                <li class="">
                                                    <a href="../skins/dark-default-primary.html">
                                                        <span class="nav-label">Primary</span>
                                                        <small><i class="fa fa-fw fa-circle text-primary pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/dark-default-info.html">
                                                        <span class="nav-label">Info</span>
                                                        <small><i class="fa fa-fw fa-circle text-info pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/dark-default-success.html">
                                                        <span class="nav-label">Success</span>
                                                        <small><i class="fa fa-fw fa-circle text-success pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/dark-default-warning.html">
                                                        <span class="nav-label">Warning</span>
                                                        <small><i class="fa fa-fw fa-circle text-warning pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/dark-default-danger.html">
                                                        <span class="nav-label">Danger</span>
                                                        <small><i class="fa fa-fw fa-circle text-danger pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/dark-default-soft-purple.html">
                                                        <span class="nav-label">Soft Purple</span>
                                                        <small><i class="fa fa-fw fa-circle text-soft-purple pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/dark-default-lighting-yellow.html">
                                                        <span class="nav-label">Lighting Yellow</span>
                                                        <small><i class="fa fa-fw fa-circle text-lighting-yellow pull-right"></i></small>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <span class="nav-label">Dark &amp; Color</span> <i class="fa arrow"></i>
                                            </a>
                                            <ul>
                                                <li class="">
                                                    <a href="../skins/dark-primary.html">
                                                        <span class="nav-label">Primary</span>
                                                        <small><i class="fa fa-fw fa-circle text-primary pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/dark-info.html">
                                                        <span class="nav-label">Info</span>
                                                        <small><i class="fa fa-fw fa-circle text-info pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/dark-success.html">
                                                        <span class="nav-label">Success</span>
                                                        <small><i class="fa fa-fw fa-circle text-success pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/dark-warning.html">
                                                        <span class="nav-label">Warning</span>
                                                        <small><i class="fa fa-fw fa-circle text-warning pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/dark-danger.html">
                                                        <span class="nav-label">Danger</span>
                                                        <small><i class="fa fa-fw fa-circle text-danger pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/dark-soft-purple.html">
                                                        <span class="nav-label">Soft Purple</span>
                                                        <small><i class="fa fa-fw fa-circle text-soft-purple pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/dark-lighting-yellow.html">
                                                        <span class="nav-label">Lighting Yellow</span>
                                                        <small><i class="fa fa-fw fa-circle text-lighting-yellow pull-right"></i></small>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <span class="nav-label">Light &amp; Inverse</span> <i class="fa arrow"></i>
                                            </a>
                                            <ul>
                                                <li class="">
                                                    <a href="../skins/light-inverse-primary.html">
                                                        <span class="nav-label">Primary</span>
                                                        <small><i class="fa fa-fw fa-circle text-primary pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/light-inverse-info.html">
                                                        <span class="nav-label">Info</span>
                                                        <small><i class="fa fa-fw fa-circle text-info pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/light-inverse-success.html">
                                                        <span class="nav-label">Success</span>
                                                        <small><i class="fa fa-fw fa-circle text-success pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/light-inverse-warning.html">
                                                        <span class="nav-label">Warning</span>
                                                        <small><i class="fa fa-fw fa-circle text-warning pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/light-inverse-danger.html">
                                                        <span class="nav-label">Danger</span>
                                                        <small><i class="fa fa-fw fa-circle text-danger pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/light-inverse-soft-purple.html">
                                                        <span class="nav-label">Soft Purple</span>
                                                        <small><i class="fa fa-fw fa-circle text-soft-purple pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/light-inverse-lighting-yellow.html">
                                                        <span class="nav-label">Lighting Yellow</span>
                                                        <small><i class="fa fa-fw fa-circle text-lighting-yellow pull-right"></i></small>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <span class="nav-label">Light &amp; Color</span> <i class="fa arrow"></i>
                                            </a>
                                            <ul>
                                                <li class="">
                                                    <a href="../skins/light-primary.html">
                                                        <span class="nav-label">Primary</span>
                                                        <small><i class="fa fa-fw fa-circle text-primary pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/light-info.html">
                                                        <span class="nav-label">Info</span>
                                                        <small><i class="fa fa-fw fa-circle text-info pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/light-success.html">
                                                        <span class="nav-label">Success</span>
                                                        <small><i class="fa fa-fw fa-circle text-success pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/light-warning.html">
                                                        <span class="nav-label">Warning</span>
                                                        <small><i class="fa fa-fw fa-circle text-warning pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/light-danger.html">
                                                        <span class="nav-label">Danger</span>
                                                        <small><i class="fa fa-fw fa-circle text-danger pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/light-soft-purple.html">
                                                        <span class="nav-label">Soft Purple</span>
                                                        <small><i class="fa fa-fw fa-circle text-soft-purple pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/light-lighting-yellow.html">
                                                        <span class="nav-label">Lighting Yellow</span>
                                                        <small><i class="fa fa-fw fa-circle text-lighting-yellow pull-right"></i></small>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <span class="nav-label">Light &amp; White</span> <i class="fa arrow"></i>
                                            </a>
                                            <ul>
                                                <li class="">
                                                    <a href="../skins/light-default-primary.html">
                                                        <span class="nav-label">Primary</span>
                                                        <small><i class="fa fa-fw fa-circle text-primary pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/light-default-info.html">
                                                        <span class="nav-label">Info</span>
                                                        <small><i class="fa fa-fw fa-circle text-info pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/light-default-success.html">
                                                        <span class="nav-label">Success</span>
                                                        <small><i class="fa fa-fw fa-circle text-success pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/light-default-warning.html">
                                                        <span class="nav-label">Warning</span>
                                                        <small><i class="fa fa-fw fa-circle text-warning pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/light-default-danger.html">
                                                        <span class="nav-label">Danger</span>
                                                        <small><i class="fa fa-fw fa-circle text-danger pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/light-default-soft-purple.html">
                                                        <span class="nav-label">Soft Purple</span>
                                                        <small><i class="fa fa-fw fa-circle text-soft-purple pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/light-default-lighting-yellow.html">
                                                        <span class="nav-label">Lighting Yellow</span>
                                                        <small><i class="fa fa-fw fa-circle text-lighting-yellow pull-right"></i></small>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <span class="nav-label">Color &amp; Inverse</span> <i class="fa arrow"></i>
                                            </a>
                                            <ul>
                                                <li class="">
                                                    <a href="../skins/primary-inverse.html">
                                                        <span class="nav-label">Primary</span>
                                                        <small><i class="fa fa-fw fa-circle text-primary pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/info-inverse.html">
                                                        <span class="nav-label">Info</span>
                                                        <small><i class="fa fa-fw fa-circle text-info pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/success-inverse.html">
                                                        <span class="nav-label">Success</span>
                                                        <small><i class="fa fa-fw fa-circle text-success pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/warning-inverse.html">
                                                        <span class="nav-label">Warning</span>
                                                        <small><i class="fa fa-fw fa-circle text-warning pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/danger-inverse.html">
                                                        <span class="nav-label">Danger</span>
                                                        <small><i class="fa fa-fw fa-circle text-danger pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/soft-purple-inverse.html">
                                                        <span class="nav-label">Soft Purple</span>
                                                        <small><i class="fa fa-fw fa-circle text-soft-purple pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/lighting-yellow-inverse.html">
                                                        <span class="nav-label">Lighting Yellow</span>
                                                        <small><i class="fa fa-fw fa-circle text-lighting-yellow pull-right"></i></small>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <span class="nav-label">Color &amp; White</span> <i class="fa arrow"></i>
                                            </a>
                                            <ul>
                                                <li class="">
                                                    <a href="../skins/primary-default.html">
                                                        <span class="nav-label">Primary</span>
                                                        <small><i class="fa fa-fw fa-circle text-primary pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/info-default.html">
                                                        <span class="nav-label">Info</span>
                                                        <small><i class="fa fa-fw fa-circle text-info pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/success-default.html">
                                                        <span class="nav-label">Success</span>
                                                        <small><i class="fa fa-fw fa-circle text-success pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/warning-default.html">
                                                        <span class="nav-label">Warning</span>
                                                        <small><i class="fa fa-fw fa-circle text-warning pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/danger-default.html">
                                                        <span class="nav-label">Danger</span>
                                                        <small><i class="fa fa-fw fa-circle text-danger pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/soft-purple-default.html">
                                                        <span class="nav-label">Soft Purple</span>
                                                        <small><i class="fa fa-fw fa-circle text-soft-purple pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/lighting-yellow-default.html">
                                                        <span class="nav-label">Lighting Yellow</span>
                                                        <small><i class="fa fa-fw fa-circle text-lighting-yellow pull-right"></i></small>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <span class="nav-label">Color &amp; Color</span> <i class="fa arrow"></i>
                                            </a>
                                            <ul>
                                                <li class="">
                                                    <a href="../skins/primary-primary.html">
                                                        <span class="nav-label">Primary</span>
                                                        <small><i class="fa fa-fw fa-circle text-primary pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/info-info.html">
                                                        <span class="nav-label">Info</span>
                                                        <small><i class="fa fa-fw fa-circle text-info pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/success-success.html">
                                                        <span class="nav-label">Success</span>
                                                        <small><i class="fa fa-fw fa-circle text-success pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/warning-warning.html">
                                                        <span class="nav-label">Warning</span>
                                                        <small><i class="fa fa-fw fa-circle text-warning pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/danger-danger.html">
                                                        <span class="nav-label">Danger</span>
                                                        <small><i class="fa fa-fw fa-circle text-danger pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/soft-purple-soft-purple.html">
                                                        <span class="nav-label">Soft Purple</span>
                                                        <small><i class="fa fa-fw fa-circle text-soft-purple pull-right"></i></small>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../skins/lighting-yellow-lighting-yellow.html">
                                                        <span class="nav-label">Lighting Yellow</span>
                                                        <small><i class="fa fa-fw fa-circle text-lighting-yellow pull-right"></i></small>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>


                                    </ul>
                                </li>


                                <li>
                                    <a href="#">
                                        <i class="fa fa-toggle-on fa-lg"></i><span class="nav-label">Interface</span><i class="fa arrow"></i>
                                    </a>
                                    <ul>
                                        <li class="">
                                            <a href="../interface/colors.html">
                                                <span class="nav-label">Colors</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../interface/typography.html">
                                                <span class="nav-label">Typography</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../interface/buttons.html">
                                                <span class="nav-label">Buttons</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../interface/paginations&amp;pager.html">
                                                <span class="nav-label">Paginations &amp; Pager</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../interface/images&amp;thumbs.html">
                                                <span class="nav-label">Images &amp; Thumbs</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../interface/avatars.html">
                                                <span class="nav-label">Avatars</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../interface/navbars.html">
                                                <span class="nav-label">Navbars</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../interface/alerts.html">
                                                <span class="nav-label">Alerts</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../interface/toastr.html">
                                                <span class="nav-label">Toastr</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../interface/modals.html">
                                                <span class="nav-label">Modals</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../interface/progress-bars.html">
                                                <span class="nav-label">Progress Bars</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../interface/badges&amp;labels.html">
                                                <span class="nav-label">Badges &amp; Labels</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../interface/breadcrumps.html">
                                                <span class="nav-label">Breadcrumbs</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../interface/tabs&amp;pills.html">
                                                <span class="nav-label">Tabs &amp; Pills</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../interface/tooltips&amp;popovers.html">
                                                <span class="nav-label">Tooltips &amp; Popovers</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../interface/list-groups.html">
                                                <span class="nav-label">List Groups</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#" title="Graphs">
                                        <i class="fa fa-pie-chart  fa-lg"></i><span class="nav-label">Graphs</span> <i class="fa arrow"></i>
                                    </a>
                                    <ul>
                                        <li class="">
                                            <a href="../graphs/peity.html">
                                                <span class="nav-label">Peity</span>
                                            </a>
                                        </li>
                                        <li class="" id="sidebar-link-highstock">
                                            <a href="../graphs/highstock.html">
                                                <span class="nav-label">Highstock</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../graphs/sparklines.html">
                                                <span class="nav-label">Sparklines</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../graphs/chartist.html">
                                                <span class="nav-label">Chartist</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../graphs/highcharts.html">
                                                <span class="nav-label">Highcharts</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#" title="Tables">
                                        <i class="fa fa-trello fa-lg"></i><span class="nav-label">Tables</span> <i class="fa arrow"></i>
                                    </a>
                                    <ul>
                                        <li class="">
                                            <a href="../tables/pricing-tables.html">
                                                <span class="nav-label">Pricing Tables</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../tables/tables.html">
                                                <span class="nav-label">Tables</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../tables/datatables.html">
                                                <span class="nav-label">Datatables</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#" title="Forms">
                                        <i class="fa fa-check-square-o fa-fw fa-lg"></i><span class="nav-label">Forms</span> <i class="fa arrow"></i>
                                    </a>
                                    <ul>
                                        <li class="">
                                            <a href="../forms/forms.html">
                                                <span class="nav-label">Forms</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../forms/forms-layouts.html">
                                                <span class="nav-label">Forms Layouts</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../forms/date-range-picker.html">
                                                <span class="nav-label">Date Range Picker</span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="../forms/forms-extended.html">
                                                <span class="nav-label">Forms Extended</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="">
                                    <a href="../grids/grids.html" title="Grids">
                                        <i class="fa fa-lg fa-th-list fa-fw"></i><span class="nav-label">Grids</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" title="Pages">
                                        <i class="fa fa-clone fa-lg"></i><span class="nav-label">Pages</span> <i class="fa arrow"></i>
                                    </a>
                                    <ul>
                                        <li class="">
                                            <a href="../pages/register.html">
                                                <span class="nav-label">Register</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../pages/login.html">
                                                <span class="nav-label">login</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../pages/forgot-password.html">
                                                <span class="nav-label">Forgot Password</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../pages/lock-screen.html">
                                                <span class="nav-label">Lock Screen</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../pages/error-404.html">
                                                <span class="nav-label">Error 404</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../pages/invoice.html">
                                                <span class="nav-label">Invoice</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../pages/timeline.html">
                                                <span class="nav-label">Timeline</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#" title="Apps">
                                        <i class="fa fa-suitcase fa-lg"></i><span class="nav-label">Apps</span> <i class="fa arrow"></i>
                                    </a>

                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="nav-label">Projects</span> <i class="fa arrow"></i>
                                            </a>
                                            <ul>
                                                <li class="">
                                                    <a href="../apps/projects-list.html">
                                                        <span class="nav-label">Projects List</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../apps/projects-grid.html">
                                                        <span class="nav-label">Projects Grid</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <span class="nav-label">Tasks</span> <i class="fa arrow"></i>
                                            </a>
                                            <ul>
                                                <li class="">
                                                    <a href="../apps/tasks-list.html">
                                                        <span class="nav-label">Tasks List</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../apps/tasks-grid.html">
                                                        <span class="nav-label">Tasks Grid</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../apps/tasks-details.html">
                                                        <span class="nav-label">Tasks Details</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <span class="nav-label">Files Manager</span> <i class="fa arrow"></i>
                                            </a>
                                            <ul>
                                                <li class="">
                                                    <a href="../apps/files-list.html">
                                                        <span class="nav-label">Files List</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../apps/files-grid.html">
                                                        <span class="nav-label">Files Grid</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <span class="nav-label">Search Results</span> <i class="fa arrow"></i>
                                            </a>
                                            <ul>
                                                <li class="">
                                                    <a href="../apps/search-results.html">
                                                        <span class="nav-label">Search Results</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../apps/images-results.html">
                                                        <span class="nav-label">Images Results</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../apps/videos-results.html">
                                                        <span class="nav-label">Videos Results</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../apps/users-results.html">
                                                        <span class="nav-label">Users Results</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="">
                                            <a href="../apps/faq.html">
                                                <span class="nav-label">FAQ</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <span class="nav-label">Users</span> <i class="fa arrow"></i>
                                            </a>
                                            <ul>
                                                <li class="">
                                                    <a href="../apps/users-list.html">
                                                        <span class="nav-label">Users List</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../apps/users-grid.html">
                                                        <span class="nav-label">Users Grid</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="">
                                            <a href="../apps/chat.html">
                                                <span class="nav-label">Chat</span>
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="../apps/calendar.html">
                                                <span class="nav-label">Calendar</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <span class="nav-label">Mailbox</span> <i class="fa arrow"></i>
                                            </a>
                                            <ul>
                                                <li class="">
                                                    <a href="../apps/inbox.html">
                                                        <span class="nav-label">Inbox</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../apps/email-details.html">
                                                        <span class="nav-label">Email Details</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../apps/new-email.html">
                                                        <span class="nav-label">New Email</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="">
                                            <a href="../apps/clients.html">
                                                <span class="nav-label">Clients</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <span class="nav-label">Profile User</span> <i class="fa arrow"></i>
                                            </a>
                                            <ul>
                                                <li class="">
                                                    <a href="../apps/profile-details.html">
                                                        <span class="nav-label">Profile Details</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../apps/profile-edit.html">
                                                        <span class="nav-label">Profile Edit</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../apps/account-edit.html">
                                                        <span class="nav-label">Account Edit</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../apps/billing-edit.html">
                                                        <span class="nav-label">Billing Edit</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../apps/settings-edit.html">
                                                        <span class="nav-label">Settings Edit</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="../apps/sessions-edit.html">
                                                        <span class="nav-label">Sessions Edit</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#" title="Icons">
                                        <i class="fa fa-star  fa-lg"></i><span class="nav-label">Icons</span><i class="fa arrow"></i>
                                    </a>
                                    <ul>
                                        <li class="">
                                            <a href="../icon/fonts-awesome.html">
                                                <span class="nav-label">Fonts Awesome</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../icon/glyphicons.html">
                                                <span class="nav-label">Glyphicons</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="">
                                    <a href="../panels/panels.html">
                                        <i class="fa fa-columns fa-lg "></i><span class="nav-label">Panels</span>
                                    </a>
                                </li>

                                <li class="">
                                    <a href="../styleguide/styleguide.html">
                                        <i class="fa fa-cube  fa-lg"></i><span class="nav-label">Styleguide</span>
                                    </a>
                                </li>

                                <li class="">
                                    <a href="../docs/docs.html">
                                        <i class="fa fa-file-o fa-lg "></i><span class="nav-label">Docs</span>
                                        <span class="badge badge-gray badge-outline pull-right">3</span>
                                    </a>
                                </li>

                            </ul>
                            <!-- END Tree Sidebar Common  -->


                            <div class="sidebar-default-visible">
                                <hr>
                            </div>

                            <div class="sidebar-default-visible sidebar-section m-b-2">
                                <span class="small text-uppercase p-b-2 block">
                                    <strong>Labels</strong>
                                </span>

                                <p class="m-t-2"><i class="fa fa-circle-o text-primary m-r-1"></i>Videos</p>
                                <p><i class="fa fa-circle-o text-info m-r-1"></i> Pictures</p>
                                <p><i class="fa fa-circle-o text-warning m-r-1"></i> Documents</p>
                            </div>
                        </div>
                    </div>
                </aside>



            </nav>

            <div class="content">
                <!-- START Sub-Navbar with Header only-->
                <div class="sub-navbar sub-navbar__header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="page-header m-t-0">
                                    <h3 class="m-t-0">Forms Extended</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Sub-Navbar with Header only-->

                <!-- START Sub-Navbar with Header and Breadcrumbs-->
                <div class="sub-navbar sub-navbar__header-breadcrumbs" style="-webkit-box-shadow: 0px 10px 12px 0px rgba(0,0,0,0.03);
                     -moz-box-shadow: 0px 10px 12px 0px rgba(0,0,0,0.03);
                     box-shadow: 0px 10px 12px 0px rgba(0,0,0,0.03);">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 sub-navbar-column">
                                <div class="sub-navbar-header">
                                    <h3>Forms Extended</h3>
                                </div>
                                <ol class="breadcrumb navbar-text navbar-right no-bg">
                                    <li class="current-parent">
                                        <a class="current-parent" href="../index.html">
                                            <i class="fa fa-fw fa-home"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Forms
                                        </a>
                                    </li>
                                    <li class="active">Forms Extended</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Sub-Navbar with Header and Breadcrumbs-->


                <div class="container">
                    <div class="row">

                        <!-- START EDIT CONTENT -->
                        <div class="col-lg-12">

                            <h4 class="m-t-1">Switchers</h4>
                            <p class="m-b-2 m-t-0">Switchery is a simple component that helps you turn your default HTML checkbox inputs into beautiful iOS 7 style switches in just few simple steps. You can easily customize switches, so that they match your design perfectly.</p>

                            <!-- START ROW Switchery -->
                            <div class="row">
                                <div class="col-lg-4">
                                    <h5>Basic Switchers</h5>
                                    <p>For existing <kbd>&lt;input&gt;</kbd> just add a class <kbd>.js-switch</kbd>.</p>
                                    <p class="small m-t-2 text-uppercase"><strong>Examples</strong></p>
                                    <div class="m-b-1">
                                        <input type="checkbox" class="js-switch" checked> <span class="m-l-1">On</span></div>
                                    <div class="m-b-1">
                                        <input type="checkbox" class="js-switch"> <span class="m-l-1">Off</span></div>
                                    <div class="m-b-1">
                                        <input type="checkbox" class="js-switch" checked disabled> <span class="m-l-1">On Disabled</span></div>
                                    <div class="m-b-1">
                                        <input type="checkbox" class="js-switch" disabled> <span class="m-l-1">Off Disabled</span></div>
                                </div>
                                <div class="col-lg-4">
                                    <h5>Colors Variations</h5>
                                    <p>For existing <kbd>&lt;input&gt;</kbd> just add a class <kbd>.js-switch-primary</kbd> , <kbd>.js-switch-info</kbd> etc.</p>
                                    <p class="small m-t-2 text-uppercase"><strong>Examples</strong></p>
                                    <div class="m-b-1">
                                        <input type="checkbox" class="js-switch-primary" checked> <span class="m-l-1">Switch Primary</span></div>
                                    <div class="m-b-1">
                                        <input type="checkbox" class="js-switch-info" checked> <span class="m-l-1">Switch Info</span></div>
                                    <div class="m-b-1">
                                        <input type="checkbox" class="js-switch-success" checked> <span class="m-l-1">Switch Success</span></div>
                                    <div class="m-b-1">
                                        <input type="checkbox" class="js-switch-warning" checked> <span class="m-l-1">Switch Warning</span></div>
                                    <div class="m-b-1">
                                        <input type="checkbox" class="js-switch-danger" checked> <span class="m-l-1">Switch Danger</span></div>
                                </div>
                                <div class="col-lg-4">
                                    <h5>Sizes</h5>
                                    <p>For existing <kbd>&lt;input&gt;</kbd> just add a class <kbd>.&quot;js-switch-small</kbd> or <kbd>.js-switch-large</kbd> .</p>
                                    <p class="small m-t-2 text-uppercase"><strong>Examples</strong></p>
                                    <div class="m-b-1">
                                        <input type="checkbox" class="js-switch-small" checked> <span class="m-l-1">Switch Small</span></div>
                                    <div class="m-b-1">
                                        <input type="checkbox" class="js-switch" checked> <span class="m-l-1">Switch Default</span></div>
                                    <div class="m-b-1">
                                        <input type="checkbox" class="js-switch-large" checked> <span class="m-l-1">Switch Large</span></div>
                                </div>
                            </div>
                            <!-- END ROW Switchery -->

                            <h4 class="m-t-3">Bootstrap Select</h4>
                            <p class="m-b-2 m-t-0">Bootstrap-select is a jQuery plugin that utilizes Bootstrap&apos;s dropdown.js to style and bring additional functionality to standard select elements.</p>

                            <!-- START ROW Bootstrap Select #1 -->
                            <div class="row">

                                <!-- START Standard Select Boxes etc. -->
                                <div class="col-lg-4">

                                    <h5 class="m-t-1">Standard Select Boxes</h5>
                                    <p class="small text-uppercase"><strong>example</strong></p>
                                    <select class="selectpicker">
                                        <option>iOS</option>
                                        <option>OSX</option>
                                        <option>Windows</option>
                                    </select>

                                    <h5 class="m-t-2">Select Boxes with Optgroups</h5>
                                    <p class="small text-uppercase"><strong>example</strong></p>
                                    <select class="selectpicker">
                                        <optgroup label="Most Popular">
                                            <option>Windows</option>
                                            <option>iOS</option>
                                            <option>OSX</option>
                                            <option>Linux</option>
                                        </optgroup>
                                        <optgroup label="Others">
                                            <option>Amiga OS</option>
                                            <option>BeOS</option>
                                            <option>OS2/Warp</option>
                                        </optgroup>
                                    </select>

                                    <h5 class="m-t-2">Select Boxes with Optgroups</h5>
                                    <p>You can also show the checkmark icon on standard select boxes with the <kbd>show-tick</kbd> class:</p>
                                    <p class="small text-uppercase"><strong>example</strong></p>
                                    <select class="selectpicker show-tick">
                                        <option>Linux</option>
                                        <option>OSX</option>
                                        <option>Windows</option>
                                    </select>

                                    <h5 class="m-t-2">Menu Arrow</h5>
                                    <p>The Bootstrap menu arrow can be added with the <kbd>show-menu-arrow</kbd> class:</p>
                                    <p class="small text-uppercase"><strong>example</strong></p>
                                    <select class="selectpicker show-menu-arrow">
                                        <option>Amiga OS</option>
                                        <option>BeOS</option>
                                        <option>OS2/Warp</option>
                                    </select>

                                </div>
                                <!-- END Standard Select Boxes etc. -->

                                <!-- START Button Classes -->
                                <div class="col-lg-4">

                                    <h5 class="m-t-1">Button Classes</h5>
                                    <p>You can set the button classes via the <kbd>data-style</kbd> attribute:</p>
                                    <p class="small m-b-0 text-uppercase"><strong>examples</strong></p>

                                    <select class="selectpicker m-t-2" data-style="btn-primary">
                                        <option>Linux</option>
                                        <option>OSX</option>
                                        <option>Windows</option>
                                    </select>

                                    <select class="selectpicker" data-style="btn-info m-t-2">
                                        <option>OSX</option>
                                        <option>Windows</option>
                                        <option>iOS</option>
                                    </select>

                                    <select class="selectpicker" data-style="btn-success m-t-2">
                                        <option>Windows</option>
                                        <option>iOS</option>
                                        <option>OSX</option>
                                    </select>

                                    <select class="selectpicker" data-style="btn-warning  m-t-2">
                                        <option>iOS</option>
                                        <option>OSX</option>
                                        <option>Windows</option>
                                    </select>

                                    <select class="selectpicker" data-style="btn-danger  m-t-2">
                                        <option>Amiga OS</option>
                                        <option>BeOS</option>
                                        <option>OS2/Warp</option>
                                    </select>

                                </div>
                                <!-- END Button Classes -->

                                <!-- START Limit the Number of Selections -->
                                <div class="col-lg-4">

                                    <h5 class="m-t-1">Limit the Number of Selections</h5>
                                    <p>Limit the number of options that can be selected via the <kbd>data-max-options</kbd> attribute. It also works for option groups. Customize the message displayed when the limit is reached with <kbd>maxOptionsText</kbd>.</p>
                                    <p class="small m-b-0 text-uppercase"><strong>examples</strong></p>

                                    <select class="selectpicker m-t-2" multiple data-max-options="2">
                                        <option>Windows</option>
                                        <option>iOS</option>
                                        <option>OSX</option>
                                    </select>

                                    <select class="selectpicker m-t-2" multiple>
                                        <optgroup label="Mobile" data-max-options="2">
                                            <option>Android</option>
                                            <option>iOS</option>
                                            <option>Windows</option>
                                        </optgroup>
                                        <optgroup label="Desktop" data-max-options="2">
                                            <option>Atari TOS</option>
                                            <option>Amiga OS</option>
                                            <option>Unix</option>
                                        </optgroup>
                                    </select>

                                </div>
                                <!-- END Limit the Number of Selections -->

                            </div>
                            <!-- END ROW Bootstrap Select #1 -->

                            <!-- START ROW Bootstrap Select #2 -->
                            <div class="row m-t-3">

                                <!-- START Selected text format & Custom Content-->
                                <div class="col-lg-4 m-b-3">

                                    <h5 class="m-t-1">Selected Text Format</h5>
                                    <p>Specify how the selection is displayed with the <kbd>data-selected-text-format</kbd> attribute on a multiple select.</p>
                                    <p class="small text-uppercase m-t-2"><strong>examples</strong></p>
                                    <select class="selectpicker" multiple data-selected-text-format="count">
                                        <option>Windows</option>
                                        <option>iOS</option>
                                        <option>OSX</option>
                                    </select>
                                    <select class="selectpicker m-t-2" multiple data-selected-text-format="count &gt; 3">
                                        <option>Android</option>
                                        <option>iOS</option>
                                        <option>Windows</option>
                                        <option>Symbian</option>
                                    </select>

                                    <h5 class="m-t-2">Custom Content</h5>
                                    <p>Insert custom HTML into the option with the <kbd>data-content</kbd> attribute:</p>
                                    <p class="small text-uppercase m-t-2"><strong>example</strong></p>
                                    <select class="selectpicker">
                                        <option data-content="&lt;span class=&apos;label label-success label-outline&apos;&gt;Android&lt;/span&gt;">Android</option>
                                        <option data-content="&lt;span class=&apos;label label-primary label-outline&apos;&gt;Windows&lt;/span&gt;">Windows</option>
                                        <option data-content="&lt;span class=&apos;label label-info label-outline&apos;&gt;OSX&lt;/span&gt;">OSX</option>
                                        <option data-content="&lt;span class=&apos;label label-danger label-outline&apos;&gt;Linux&lt;/span&gt;">Linux</option>
                                    </select>

                                </div>
                                <!-- END Selected text format & Custom Content -->

                                <!-- START Live Search & Subtext -->
                                <div class="col-lg-4">

                                    <h5 class="m-t-1">Live Search</h5>
                                    <p>You can add a search input by passing <kbd>data-live-search=&quot;true&quot;</kbd> attribute:</p>
                                    <p class="small m-t-2 text-uppercase"><strong>examples</strong></p>
                                    <select class="selectpicker" data-live-search="true">
                                        <option>Android</option>
                                        <option>iOS</option>
                                        <option>Windows</option>
                                        <option>Symbian</option>
                                        <option>Atari TOS</option>
                                        <option>Amiga OS</option>
                                        <option>Unix</option>
                                        <option>Linux</option>
                                        <option>OSX</option>
                                    </select>

                                    <h5 class="m-t-2">Subtext</h5>
                                    <p>Add subtext to an option or optgroup with the <kbd>data-subtext</kbd> attribute:</p>
                                    <p class="small  m-t-2 text-uppercase"><strong>example</strong></p>
                                    <select class="selectpicker" data-size="5">
                                        <option data-subtext="Maverick">OSX</option>
                                        <option data-subtext="XP">Windows</option>
                                        <option data-subtext="9.3">iOS</option>
                                        <option data-subtext="KitKat">Android</option>
                                    </select>

                                </div>
                                <!-- END Button Classes -->

                                <!-- START Icons & Select/deselect all options -->
                                <div class="col-lg-4">

                                    <h5 class="m-t-1">Icons</h5>
                                    <p>Add an icon to an option or optgroup with the <kbd>data-icon</kbd> attribute:</p>
                                    <p class="small m-t-2 text-uppercase"><strong>example</strong></p>
                                    <select class="selectpicker">
                                        <option data-icon="fa fa-apple"> OSX</option>
                                        <option data-icon="fa fa-android"> Android</option>
                                        <option data-icon="fa fa-windows"> Windows</option>
                                        <option data-icon="fa fa-linux"> Linux</option>
                                    </select>

                                    <h5 class="m-t-2">Select/Deselect All Options</h5>
                                    <p>Adds two buttons to the top of the menu - Select All &amp; Deselect All with <kbd>data-actions-box=&quot;true&quot;</kbd>.</p>
                                    <p class="small m-t-2 text-uppercase"><strong>example</strong></p>
                                    <select class="selectpicker" multiple data-actions-box="true">
                                        <option>iOS</option>
                                        <option>Windows</option>
                                        <option>Symbian</option>
                                        <option>Atari TOS</option>
                                        <option>Amiga OS</option>
                                    </select>

                                </div>
                                <!-- END Icons & Select/deselect all options -->

                            </div>
                            <!-- END ROW Bootstrap Select #2 -->

                            <h4 class="m-t-3">Select 2 <small>with Select2 Theme</small></h4>
                            <p class="m-b-2 m-t-0">Select2 gives you a customizable select box with support for searching, tagging, remote data sets, infinite scrolling, and many other highly used options.</p>

                            <!-- START ROW Select2 -->
                            <div class="row">
                                <!-- START col-lg-6  -->
                                <div class="col-lg-6 m-b-3">

                                    <h5>Single select boxes</h5>
                                    <p>Select2 can take a regular select box like this...</p>
                                    <div class="form-group">
                                        <label for="single" class="control-label small text-uppercase"><strong>example</strong></label>
                                        <select id="single" class="form-control select2 select2-input">

                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI" disabled="disabled">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>

                                        </select>
                                    </div>

                                    <h5 class="m-t-2">Multiple select boxes</h5>
                                    <p>Select2 also supports multi-value select boxes. The select below is declared with the <kbd>multiple</kbd> attribute.</p>
                                    <div class="form-group">
                                        <label for="multiple" class="small text-uppercase control-label"><strong>example</strong></label>
                                        <select id="multiple" class="form-control select2-multiple select2-input" multiple="multiple">
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI" disabled="disabled">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>

                                        </select>
                                    </div>

                                    <h5 class="m-t-2">Select Success</h5>

                                    <div class="form-group has-success">
                                        <label for="select2-single-input-group" class="control-label small text-uppercase">Example</label>
                                        <div class="input-group  select2-bootstrap-prepend">
                                            <span class="input-group-addon">
                                                <input type="radio">
                                            </span>
                                            <select id="select2-single-input-group" class="form-control select2 select2-input">

                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI" disabled="disabled">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>

                                            </select>
                                        </div>
                                    </div>

                                    <h5 class="m-t-2">Select Warning</h5>

                                    <div class="form-group has-warning">
                                        <label for="select2-multiple" class="control-label small text-uppercase"><strong>example</strong></label>
                                        <select id="select2-multiple" class="form-control select2-multiple select2-input" multiple="multiple">
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI" disabled="disabled">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>

                                        </select>
                                    </div>

                                    <h5 class="m-t-2">Select Danger</h5>
                                    <div class="form-group has-error">
                                        <label class="control-label small text-uppercase">Example</label>
                                        <div class="input-group input-group select2-bootstrap-prepend">
                                            <span class="input-group-addon">
                                                <input type="radio">
                                            </span>
                                            <select id="select2-multiple-input-group-lg" class="form-control select2 select2-input">

                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI" disabled="disabled">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>

                                            </select>
                                        </div>
                                    </div>

                                    <h5 class="m-t-2">Disabled mode</h5>
                                    <p>Select2 will respond to the <kbd>disabled</kbd> attribute on <kbd>&lt;select&gt;</kbd> elements. You can also initialize Select2 with <kbd>disabled: true</kbd> to get the same effect.</p>

                                    <div class="form-group">
                                        <label for="select2-disabled-inputs-single" class="control-label small text-uppercase">Example</label>
                                        <div class="input-group select2-bootstrap-prepend">
                                            <span class="input-group-addon">
                                                <input type="checkbox">
                                            </span>
                                            <select id="select2-disabled-inputs-single" class="form-control select2 select2-input" disabled="disabled">

                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI" disabled="disabled">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>

                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <!-- END col-lg-6  -->

                                <!-- START col-lg-6  -->
                                <div class="col-lg-6 m-b-3">

                                    <h5 class="m-t-2">Select2 Append Checkbox</h5>

                                    <div class="form-group">
                                        <label for="select2-single-append" class="small text-uppercase control-label"><strong>Example</strong></label>
                                        <div class="input-group select2-bootstrap-prepend">
                                            <span class="input-group-addon">
                                                <input type="checkbox" checked="checked">
                                            </span>
                                            <select id="select2-single-append" class="form-control select2-allow-clear select2-input">

                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI" disabled="disabled">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>

                                            </select>
                                        </div>
                                    </div>

                                    <h5 class="m-t-2">Select2 Multi Append Radiobutton</h5>
                                    <div class="form-group">
                                        <label for="single-append-radio" class="small text-uppercase control-label"><strong>Example</strong></label>
                                        <div class="input-group select2-bootstrap-prepend">
                                            <span class="input-group-addon">
                                                <input type="radio">
                                            </span>
                                            <select id="single-append-radio" class="form-control select2-allow-clear select2-input" multiple="multiple">

                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI" disabled="disabled">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>

                                            </select>
                                        </div>
                                    </div>

                                    <h5 class="m-t-2">Select2 Append</h5>
                                    <div class="form-group">
                                        <label for="single-append-text" class="control-label small text-uppercase"><strong>Example</strong></label>
                                        <div class="input-group select2-bootstrap-append">
                                            <select id="single-append-text" class="form-control select2-allow-clear select2-input">

                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI" disabled="disabled">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>

                                            </select>
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button" data-select2-open="single-append-text">
                                                    <span class="fa fa-search"></span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>

                                    <h5 class="m-t-2">Select2 Prepend</h5>
                                    <div class="form-group">
                                        <label for="single-prepend-text" class="control-label small text-uppercase"><strong>Example</strong></label>
                                        <div class="input-group select2-bootstrap-prepend">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button" data-select2-open="single-prepend-text">
                                                    <span class="fa fa-search"></span>
                                                </button>
                                            </span>
                                            <select id="single-prepend-text" class="form-control select2 select2-input">

                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                            </select>
                                        </div>
                                    </div>

                                    <h5 class="m-t-2">Select2 Multi Append</h5>
                                    <div class="form-group">
                                        <label for="multi-append" class="control-label small text-uppercase"><strong>Example</strong></label>
                                        <div class="input-group select2-bootstrap-append">
                                            <select id="multi-append" class="form-control select2 select2-input" multiple="multiple">

                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                            </select>
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button" data-select2-open="multi-append">
                                                    <span class="fa fa-search"></span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>

                                    <h5 class="m-t-2">Select2 Multi Prepend</h5>
                                    <div class="form-group">
                                        <label for="multi-prepend" class="control-label small text-uppercase"><strong>Example</strong></label>
                                        <div class="input-group select2-bootstrap-prepend">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button" data-select2-open="multi-prepend">
                                                    State
                                                </button>
                                            </span>
                                            <select id="multi-prepend" class="form-control select2 select2-input" multiple="multiple">

                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI" disabled="disabled">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>

                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <!-- END col-lg-6  -->
                            </div>
                            <!-- END ROW Select2 -->

                        </div>
                        <!-- END EDIT CONTENT -->

                    </div>
                </div>
                <script src="..//assets/vendor/js/select2.min.js"></script>
                <script src="..//assets/vendor/js/bootstrap-select.min.js"></script>

            </div>

            <!-- START Layout Options (Right Side) -->
            <div class="layout-options">
                <button type="button" class="btn btn-primary action-toggle-layout-options" data-toggle="tooltip" data-placement="left" title="Show/Hide Layout settings"><i class="fa fa-gear"></i></button>
                <button type="button" class="btn btn-primary action-toggle-layout-options disabled" data-toggle="tooltip" data-placement="left" title="Layout settings disabled on this page"><i class="fa fa-gear"></i></button>

                <div class="panel panel-default b-a-0 shadow-box">

                    <div class="panel-body">

                        <!-- START Tabs: Options | Skins -->
                        <ul class="nav nav-tabs tab-color-white nav-justified">
                            <li role="presentation" class="active">
                                <a aria-expanded="true" data-toggle="tab" href="#tab-options" role="tab">Options</a>
                            </li>
                            <li role="presentation">
                                <a aria-expanded="true" data-toggle="tab" href="#tab-skins" role="tab">Skins</a>
                            </li>
                        </ul>
                        <!-- END Tabs: Options | Skins -->

                        <!-- START Tabs Content: Options & Skins -->
                        <div class="tab-content">

                            <!-- START Tab Options -->
                            <div class="tab-pane fade in active p-r-1" id="tab-options" role="tabpanel">

                                <!-- START: Navbar options v2-->
                                <div class="input-group m-t-2">
                                    <p class="small text-uppercase"><strong>Navbar Options</strong></p>

                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="layout-navbar-enabled" class="group-switch" checked data-target-body-class="navbar-disabled" data-direction="disabled"> Show/Hide
                                    </label>

                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="layout-navbar-fixed" data-target-body-class="navbar-fixed" data-direction="enabled"> Fixed
                                    </label>

                                </div>
                                <!-- END: Navbar options v2-->

                                <!-- START: SubNavbar options -->
                                <div class="input-group">
                                    <p class="small text-uppercase m-t-2">
                                        <strong>Header Layout</strong>
                                    </p>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="layout-subnavbar-enabled" class="group-switch" checked data-target-body-class="sub-navbar-disabled" data-direction="disabled"> Show/Hide Header
                                        </label>
                                    </div>
                                </div>
                                <select class="form-control m-b-1" id="layout-subnavbar-style">
                                    <option selected value="">Header 1</option>
                                    <option value="sub-navbar-header-only">Header 2</option>
                                </select>
                                <!-- END: SubNavbar options -->

                                <!-- START: Sidebar options -->
                                <div class="input-group">
                                    <p class="small text-uppercase m-t-2"><strong>Sidebar Options</strong></p>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="layout-sidebar-enabled" class="group-switch" checked data-target-body-class="sidebar-disabled" data-direction="disabled"> Show/Hide Sidebar
                                        </label>
                                    </div>
                                    <select class="form-control" id="layout-sidebar-style">
                                        <option selected value="">Default Sidebar</option>
                                        <option value="sidebar-slim">Slim Sidebar</option>
                                        <option value="sidebar-big-icons">Big Icons Sidebar</option>
                                        <option value="sidebar-big-icons sidebar-with-avatar">Big Icons with Avatar</option>
                                    </select>



                                    <label for="layout-sidebar-fixed" class="checkbox-inline m-t-1">
                                        <input type="checkbox" id="layout-sidebar-fixed" data-target-body-class="sidebar-fixed" data-direction="enabled"> Fixed
                                    </label>

                                    <label for="layout-sidebar-full-height" class="checkbox-inline  m-t-1">
                                        <input type="checkbox" id="layout-sidebar-full-height" data-target-body-class="sidebar-full-height" data-direction="enabled"> Aside
                                    </label>



                                </div>
                                <!-- END: Sidebar options -->

                                <!-- START: Content View -->
                                <p class="small text-uppercase m-t-2"><strong>Content View</strong></p>
                                <select class="form-control" id="layout-content-view">
                                    <option selected value="container">Container</option>
                                    <option value="container-fluid">Container Fluid</option>
                                    <option value="boxed-layout">Boxed</option>
                                </select>
                                <!-- END: Content View -->

                                <!-- START: Footer Options -->
                                <div class="input-group">
                                    <p class="small text-uppercase m-t-2"><strong>Footer Options</strong></p>


                                    <label for="layout-footer-enabled" class="checkbox-inline">
                                        <input type="checkbox" id="layout-footer-enabled" class="group-switch" checked data-target-body-class="footer-disabled" data-direction="disabled"> Show/Hide
                                    </label>

                                    <label for="layout-footer-fixed" class="checkbox-inline">
                                        <input type="checkbox" id="layout-footer-fixed" data-target-body-class="footer-fixed" data-direction="enabled"> Fixed
                                    </label>

                                </div>
                                <!-- END: Footer Options -->



                            </div>
                            <!-- END Tab Options -->

                            <!-- START Tab Skins -->
                            <div class="tab-pane fade in p-r-1" id="tab-skins" role="tabpanel">

                                <p class="small text-uppercase m-t-2"><strong>Main Color</strong></p>

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="mainColor" id="main-color-primary" value="primary" checked>
                                        Primary 
                                    </label>
                                    <i class="fa fa-circle pull-right text-primary"></i>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="mainColor" id="main-color-info" value="info">
                                        Info
                                    </label>
                                    <i class="fa fa-circle pull-right text-info"></i>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="mainColor" id="main-color-success" value="success">
                                        Success
                                    </label>
                                    <i class="fa fa-circle pull-right text-success"></i>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="mainColor" id="main-color-warning" value="warning">
                                        Warning
                                    </label>
                                    <i class="fa fa-circle pull-right text-warning"></i>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="mainColor" id="main-color-danger" value="danger">
                                        Danger
                                    </label>
                                    <i class="fa fa-circle pull-right text-danger"></i>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="mainColor" id="main-color-softpurple" value="softpurple">
                                        Soft-Purple 
                                    </label>
                                    <i class="fa fa-circle pull-right text-soft-purple"></i>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="mainColor" id="main-color-lightingyellow" value="lightingyellow">
                                        Lighting-Yellow 
                                    </label>
                                    <i class="fa fa-circle pull-right text-lighting-yellow"></i>
                                </div>

                                <!-- Single button -->
                                <!--          <div class="btn-group">
                                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-circle text-primary"></i> Primary <span class="caret"></span>
                                          </button>
                                          <ul class="dropdown-menu dropdown-menu-right">
                                          <li class="active"><a href="#"><i class="fa fa-circle text-primary"></i> Primary </a></li>
                                          <li><a href="#"><i class="fa fa-circle text-info"></i> Info </a></li>
                                          <li><a href="#"><i class="fa fa-circle text-success"></i> Success </a></li>
                                          <li><a href="#"><i class="fa fa-circle text-warning"></i> Warning </a></li>
                                          <li><a href="#"><i class="fa fa-circle text-danger"></i> Danger </a></li>
                                          <li><a href="#"><i class="fa fa-circle text-soft-purple"></i> Soft Purple </a></li>
                                          <li><a href="#"><i class="fa fa-circle text-lighting-yellow"></i> Lighting Yellow </a></li>
                                          </ul>
                                          </div>-->

                                <p class="small text-uppercase m-t-2"><strong>Navbar</strong></p>

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="navbarStyle" id="navbar-style-dark" value="inverse" checked>
                                        Dark
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="navbarStyle" id="navbar-style-light" value="default">
                                        Light
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="navbarStyle" id="navbar-style-color" value="color">
                                        Like Main Color
                                    </label>
                                </div>

                                <p class="small text-uppercase m-t-2"><strong>Sidebar</strong></p>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="sidebarStyle" id="sidebar-style-dark" value="dark" checked>
                                        Dark
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="sidebarStyle" id="sidebar-style-light" value="light">
                                        Light
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="sidebarStyle" id="sidebar-style-color" value="color">
                                        Like Main Color
                                    </label>
                                </div>



                            </div>
                            <!-- END Tab Skins -->

                        </div>
                        <!-- END Tabs Content: Options & Skins -->


                    </div>

                    <div class="panel-footer">
                        <button type="button" class="btn btn-default btn-block action-reset-layout-options">Reset Options</button>
                    </div>
                </div>
            </div>
            <!-- END Layout Options (Right Side) -->
            <div class="right-sidebar shadow-box">
                <!-- DodatkowyContent: data-target-extra-content wskazuje, że ten konkretny div ma być przykrywany przez kontener o id chatpanel2 -->
                <div class="container-fluid" data-target-extra-content="chatpanel2">
                    <div class="row">

                        <!-- <a href="#" class="extra-content-open">Extra content Large</a>-->

                        <!-- START Tabs -->
                        <div class="tabbable-line">
                            <ul class="nav nav-tabs m-r-1 m-t-2">
                                <!-- Tab: Calendar -->
                                <li role="presentation" class="visible-xs">
                                    <a class="action-right-sidebar-toggle" href="javascript:void(0)" role="tab">
                                        <span class="fa fa-times"></span>
                                    </a>
                                </li>
                                <!-- Tab: Calendar -->
                                <li class="active" role="presentation">
                                    <a data-toggle="tab" href="#tab-calendar" role="tab"><span class="fa fa-calendar-o"></span></a>
                                </li>
                                <!-- Tab: Statisticts -->
                                <li role="presentation">
                                    <a data-toggle="tab" href="#tab-statistics" role="tab"><span class="fa fa-area-chart"></span></a>
                                </li>
                                <!-- Tab: Users -->
                                <li role="presentation">
                                    <a data-toggle="tab" href="#right-sidebar-users" role="tab"><span class="fa fa-users"></span></a>
                                </li>
                                <!-- Tab: Timeline -->
                                <li role="presentation">
                                    <a data-toggle="tab" href="#right-sidebar-timeline" role="tab"><span class="fa fa-list"></span></a>
                                </li>
                                <!-- Tab: Settings -->
                                <li role="presentation">
                                    <a data-toggle="tab" href="#right-sidebar-settings" role="tab"><span class="fa fa-gear"></span></a>
                                </li>
                            </ul>
                            <!-- END Tabs -->

                            <!-- START Tab: Calendar -->
                            <div class="tab-content vertical-scroll-container" id="myTabContent">
                                <div class="tab-pane fade in active p-r-1" id="tab-calendar" role="tabpanel">

                                    <p class="small text-uppercase text-gray-light m-b-0 m-t-1"><strong>Weather</strong></p>
                                    <!-- START Widget - Weather Current -->
                                    <div class="m-t-0 m-b-3">
                                        <p class="h1 m-t-0 m-b-0">
                                            <span>Sunday</span>
                                        </p>
                                        <span class="h4 m-t-0 m-b-0">30 July</span>
                                        <p class="m-t-2">Partly cloudy today, temperature minimum 11&#xBA;, maximum 15&#xBA;</p>
                                        <a href="../start/weather.html">More Details <i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <!-- END Widget - Weather Current -->

                                    <!-- START Widget - Stock -->
                                    <table class="table table-condensed table-hover">
                                        <thead>
                                            <tr>
                                                <th class="small text-gray-light text-uppercase">
                                                    <strong>Stock</strong>
                                                </th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-gray-darker">DOW J</td>
                                                <td>17 552,89</td>
                                                <td class="text-right"><span class="badge badge-danger badge-outline">-0.29%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-gray-darker">APPL</td>
                                                <td>1 987</td>
                                                <td class="text-right"><span class="badge badge-success badge-outline">+7.10%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-gray-darker">CAC</td>
                                                <td>17 552,89</td>
                                                <td class="text-right"><span class="badge badge-danger badge-outline">-0.29%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-gray-darker">DAX</td>
                                                <td>1 987</td>
                                                <td class="text-right"><span class="badge badge-success badge-outline">+7.10%</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- END Widget - Stock -->

                                    <!-- START Widget - Emails Today -->
                                    <table class="table m-t-2 m-b-3">
                                        <thead>
                                            <tr>
                                                <th class="small text-gray-light text-uppercase">
                                                    <strong>Emails Today </strong>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <div class="media-left media-middle">
                                                            <a href="../apps/email-details.html">
                                                                <div class="avatar avatar-image"> 
                                                                    <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/michaelkoper/128.jpg" alt="Avatar">
                                                                    <i class="avatar-status avatar-status-bottom bg-success b-white"></i> 
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="media-body media-auto">
                                                            <h5 class="m-b-0">
                                                                <span>Hildegard Turcotte</span> 
                                                                <small><span>09:13</span></small>
                                                            </h5>
                                                            <p class="m-t-0 m-b-0">
                                                                <span>Assumenda rerum tempore repudiandae sint non temporibus.</span>
                                                            </p>
                                                            <div class="btn-group" role="group">
                                                                <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html">
                                                                    <i class="fa fa-reply text-gray-light"></i>
                                                                </a>
                                                                <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html">
                                                                    <i class="fa fa-archive text-gray-light"></i>
                                                                </a>
                                                                <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html">
                                                                    <i class="fa fa-trash text-gray-light"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <div class="media-left media-middle">
                                                            <a href="../apps/email-details.html">
                                                                <div class="avatar avatar-image"> 
                                                                    <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/sharvin/128.jpg" alt="Avatar">
                                                                    <i class="avatar-status avatar-status-bottom bg-danger b-white"></i> 
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="media-body media-auto">
                                                            <h5 class="m-b-0">
                                                                <span>Heath Medhurst</span> 
                                                                <small><span>05:39</span></small>
                                                            </h5>
                                                            <p class="m-t-0 m-b-0">
                                                                <span>Laudantium ea eum voluptate optio.</span>
                                                            </p>
                                                            <div class="btn-group" role="group">
                                                                <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html">
                                                                    <i class="fa fa-reply text-gray-light"></i>
                                                                </a>
                                                                <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html">
                                                                    <i class="fa fa-archive text-gray-light"></i>
                                                                </a>
                                                                <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html">
                                                                    <i class="fa fa-trash text-gray-light"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <div class="media-left media-middle">
                                                            <a href="../apps/email-details.html">
                                                                <div class="avatar avatar-image"> 
                                                                    <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/jacksonlatka/128.jpg" alt="Avatar">
                                                                    <i class="avatar-status avatar-status-bottom bg-warning b-white"></i> 
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="media-body media-auto">
                                                            <h5 class="m-b-0">
                                                                <span>Orin Flatley</span> 
                                                                <small><span>10:17</span></small>
                                                            </h5>
                                                            <p class="m-t-0 m-b-0">
                                                                <span>Eaque facilis sit totam.</span>
                                                            </p>
                                                            <div class="btn-group" role="group">
                                                                <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html">
                                                                    <i class="fa fa-reply text-gray-light"></i>
                                                                </a>
                                                                <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html">
                                                                    <i class="fa fa-archive text-gray-light"></i>
                                                                </a>
                                                                <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html">
                                                                    <i class="fa fa-trash text-gray-light"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <!-- END Widget - Emails Today -->

                                    <!-- START Widget - Tasks -->
                                    <table class="table table-condensed m-t-2 m-b-0">

                                        <thead>
                                            <tr>
                                                <th class="small text-gray-light text-uppercase">
                                                    <strong>Tasks</strong>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="">
                                                            <a href="../apps/tasks-details.html">
                                                                <span>I&apos;ll calculate the wireless SAS protocol, that should protocol the SCSI system!</span>
                                                            </a>
                                                            <span class="m-t-1 small">
                                                                <br><i class="fa fa-history small"></i> 
                                                                <span>14-Jan-2013, 07:29</span> 
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="" checked>
                                                            <del> 
                                                                <a href="../apps/tasks-details.html" class="text-gray-light">
                                                                    <span>If we program the array, we can get to the ADP application through the back-end THX interface!</span></a>
                                                            </del>
                                                            <span class="m-t-1 small">
                                                                <br><i class="fa fa-history small text-gray-light"></i> 
                                                                <span>30-Jul-2011, 06:28</span> 
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="" checked>
                                                            <del>
                                                                <a href="../apps/tasks-details.html" class="text-gray-light">
                                                                    <span>The SDD firewall is down, parse the solid state sensor so we can reboot the IB array!</span>
                                                                </a>
                                                            </del>
                                                            <span class="m-t-1 small">
                                                                <br><i class="fa fa-history small text-gray-light"></i> 
                                                                <span>16-Jun-2012, 07:03</span> 
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <!-- END Widget - Emails Today -->

                                </div>
                                <!-- END Tab: Calendar -->

                                <!-- START Tab: Statistics -->
                                <div class="tab-pane fade p-r-1" id="tab-statistics" role="tabpanel">

                                    <p class="small text-uppercase text-center text-gray-light m-b-0 m-t-1"><strong>Statisticts</strong></p>
                                    <!-- START Peity Charts -->
                                    <div class="row m-t-3">
                                        <div class="col-sm-4">
                                            <p class="data-attributes text-center">
                                                <span data-peity="{ &quot;fill&quot;: [&quot;RGBA(86, 161, 245, 1.00)&quot;, &quot;RGBA(86, 161, 245, 0.2)&quot;],  &quot;innerRadius&quot;: 20, &quot;radius&quot;: 28 }">4/7</span>
                                            </p>
                                            <h5 class="m-b-0 text-center">CPU
                                            </h5>
                                            <p class="m-t-0 p-t-0 text-center">76%</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="data-attributes text-center">
                                                <span data-peity="{ &quot;fill&quot;: [&quot;RGBA(70, 197, 152, 1.00)&quot;, &quot;RGBA(70, 197, 152, 0.2)&quot;],  &quot;innerRadius&quot;: 20, &quot;radius&quot;: 28 }">6/7</span>
                                            </p>
                                            <h5 class="m-b-0 text-center">Drive
                                            </h5>
                                            <p class="m-t-0 p-t-0 text-center">98%</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="data-attributes text-center">
                                                <span data-peity="{ &quot;fill&quot;: [&quot;RGBA(248, 93, 76, 1.00)&quot;, &quot;RGBA(248, 93, 76, 0.2)&quot;],  &quot;innerRadius&quot;: 20, &quot;radius&quot;: 28 }">2/7</span>
                                            </p>
                                            <h5 class="m-b-0 text-center">Memory
                                            </h5>
                                            <p class="m-t-0 p-t-0 text-center">16%</p>
                                        </div>
                                    </div>
                                    <!-- END Peity Charts -->

                                    <!-- START Network -->
                                    <p class="small text-center text-gray-light text-uppercase m-t-2">
                                        <strong>Network</strong>
                                    </p>
                                    <p class="text-nowrap text-center m-t-0">
                                        <span class="text-gray-darker small">21 KB/s</span> 
                                        <i class="fa fa-level-down text-primary m-r-2"></i>
                                        <i class="fa fa-level-up text-primary"></i> 
                                        <span class="text-gray-darker small">89 KB/s</span>
                                    </p>
                                    <!-- END Network -->

                                    <!-- START Table: System -->
                                    <table class="table m-t-2  v-a-m">
                                        <thead>
                                            <tr>
                                                <th class="small">
                                                    <i class="fa text-gray-light fa-database m-r-1"></i>
                                                    <span class="text-uppercase text-gray-light">
                                                        <strong>system</strong>
                                                    </span>
                                                </th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr class="small v-a-m">
                                                <td> Disabled </td>
                                                <td class="text-right v-a-m text-gray-darker">1:36</td>
                                            </tr>
                                            <tr class="small v-a-m">
                                                <td> Processing </td>
                                                <td class="text-right v-a-m text-gray-darker">
                                                    <span>27474</span>
                                                </td>
                                            </tr>
                                            <tr class="small v-a-m">
                                                <td> CPU User </td>
                                                <td class="text-right v-a-m text-gray-darker">16%</td>
                                            </tr>
                                            <tr class="small v-a-m">
                                                <td> CPU System </td>
                                                <td class="text-right v-a-m text-gray-darker">19%</td>
                                            </tr>
                                            <tr class="small v-a-m">
                                                <td> CPU Free </td>
                                                <td class="text-right v-a-m text-gray-darker">78%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- END Table: System -->
                                    <!-- START Table: LAN -->
                                    <table class="table v-a-m">
                                        <thead>
                                            <tr>
                                                <th class="small"><i class="fa fa-wifi text-gray-light m-r-1"></i>
                                                    <span class="text-uppercase text-gray-light"><strong>Lan</strong></span></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="small v-a-m">
                                                <td>Wi-Fi</td>
                                                <td class="text-right v-a-m text-gray-darker"><i class="fa fa-fw fa-sort"></i></td>
                                            </tr>
                                            <tr class="small v-a-m">
                                                <td>IP</td>
                                                <td class="text-right v-a-m text-gray-darker"><samp><span>132.156.213.56</span></samp></td>
                                            </tr>
                                            <tr class="small v-a-m">
                                                <td>MAC</td>
                                                <td class="text-right v-a-m text-gray-darker"><samp><span>2d:68:b9:f9:2a:48</span></samp></td>
                                            </tr>
                                            <tr class="small v-a-m">
                                                <td>
                                                    <i class="fa fa-long-arrow-down"></i>
                                                </td>
                                                <td class="text-right v-a-m text-gray-darker"><span class="m-r-1">578.00  KB/s</span>
                                                    <span>545.00 MB</span>
                                                </td>
                                            </tr>
                                            <tr class=" small v-a-m">
                                                <td>
                                                    <i class="fa fa-long-arrow-up text-gray-darker"></i>
                                                </td>
                                                <td class="text-right v-a-m text-gray-darker"><span class="m-r-1">950.00  KB/s</span>
                                                    <span>620.00 MB</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- END Table: LAN -->
                                    <!-- START Widget - Usage -->
                                    <ul class="list-group b-a-0 m-t-3">

                                        <li class="list-group-item">
                                            <i class="fa fa-hdd-o small  m-r-1"></i> 
                                            <span class="text-uppercase small m-t-0">
                                                <strong>Macintosh</strong> 
                                                <span class="pull-right text-right text-gray-darker">
                                                    <span>307.00</span>
                                                </span>
                                            </span>
                                            <div class="progress b-r-a-0 m-t-1 m-b-1 h-3">
                                                <div class="progress-bar" role="progressbar" style="width: 60%;">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <span class="m-t-0">
                                                <span class="text-gray-darker">
                                                    <span>494.00 GB</span>
                                                </span>
                                            </span>
                                            <span class="text-gray-light"> / 640.00 GB</span>
                                        </li>

                                        <li class="list-group-item">
                                            <i class="fa fa-hdd-o small m-r-1"></i> <span class="text-uppercase small m-t-2"><strong>Windows</strong>
                                                <span class="pull-right text-right text-gray-darker"><span>293.00</span></span>
                                            </span>
                                            <div class="progress b-r-a-0 m-t-1 m-b-1 h-3">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <span class="m-t-0">
                                                <span class="text-gray-darker">
                                                    <span>931.00 GB</span>
                                                </span>
                                            </span>
                                            <span class="text-gray-light"> / 739.00 GB</span>
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fa fa-hdd-o small m-r-1"></i> <span class="text-uppercase small m-t-2"><strong>Linux</strong>
                                                <span class="pull-right text-right text-gray-darker"><span>951.00</span></span>
                                            </span>
                                            <div class="progress b-r-a-0 m-t-1 m-b-1 h-3">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                            <span class="m-t-0">
                                                <span class="text-gray-darker">
                                                    <span>879.00 GB</span>
                                                </span>
                                            </span>
                                            <span class="text-gray-light"> / 507.00 GB</span>
                                        </li>
                                    </ul>
                                    <!-- END Widget - Usage -->
                                </div>
                                <!-- END Tab: Statisticts -->

                                <!-- START Tab: Users -->
                                <div class="tab-pane fade p-r-1" id="right-sidebar-users" role="tabpanel">
                                    <p class="small text-uppercase text-gray-light m-b-2 m-t-1"><strong>Users with Chat</strong></p>
                                    <!-- START Search Input -->
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-search"></i></button>
                                        </span>
                                    </div>
                                    <!-- END Search Input -->
                                    <!-- DodatkowyContent: data-target-extra-content wskazuje, że ten konkretny div ma być przykrywany przez kontener o id chatpanel -->
                                    <div class="m-t-1" data-target-extra-content="chatpanel">


                                        <ul class="nav nav-pills nav-stacked">

                                            <li role="presentation">
                                                <p class="small text-uppercase text-gray-light m-t-2"><strong>Online (3)</strong></p>
                                            </li>

                                            <!-- START User Online (Small) -->
                                            <li role="presentation">
                                                <a href="#" class="extra-content-open">
                                                    <div class="media">
                                                        <div class="media-left media-middle">
                                                            <div class="avatar avatar-image avatar-sm">
                                                                <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/karalek/128.jpg" alt="Avatar">
                                                                <i class="avatar-status avatar-status-bottom  bg-success b-white"></i>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="m-t-0 m-b-0"><span>Harrison Thiel</span></h5>
                                                            <p class="small text-gray-light m-b-0"><span>Global Solutions Architect</span></p>
                                                        </div>
                                                        <div class="media-right media-middle">
                                                            <span class="badge">4</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- START User Online (Small) -->

                                            <!-- START User Online (Small) -->
                                            <li role="presentation">
                                                <a href="#" class="extra-content-open">
                                                    <div class="media">
                                                        <div class="media-left  media-middle">
                                                            <div class="avatar avatar-image avatar-sm">
                                                                <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/goddardlewis/128.jpg" alt="Avatar">
                                                                <i class="avatar-status avatar-status-bottom  bg-success b-white"></i>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="m-t-0 m-b-0"><span>Celia Koss</span></h5>
                                                            <p class="small text-gray-light m-b-0"><span>Human Interactions Manager</span></p>
                                                        </div>

                                                        <div class="media-right  media-middle">

                                                        </div>

                                                    </div>
                                                </a>
                                            </li>
                                            <!-- START User Online (Small) -->

                                            <!-- START User Online (Small) -->
                                            <li role="presentation">
                                                <a href="#" class="extra-content-open">
                                                    <div class="media">
                                                        <div class="media-left  media-middle">
                                                            <div class="avatar avatar-image avatar-sm">
                                                                <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/g3d/128.jpg" alt="Avatar">
                                                                <i class="avatar-status avatar-status-bottom  bg-success b-white"></i>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="m-t-0 m-b-0"><span>Kaleigh Runolfsson</span></h5>
                                                            <p class="small text-gray-light m-b-0"><span>Future Factors Strategist</span></p>
                                                        </div>

                                                        <div class="media-right media-middle">

                                                            <span class="badge bg-danger">13</span>

                                                        </div>

                                                    </div>
                                                </a>
                                            </li>
                                            <!-- START User Online (Small) -->
                                            <li role="presentation">
                                                <p class="small text-uppercase text-gray-light m-t-2"><strong>Busy (3)</strong></p>
                                            </li>

                                            <!-- START User Online (Busy) -->
                                            <li class="collapsed" role="presentation">
                                                <a href="#" class="extra-content-open">
                                                    <div class="media">
                                                        <div class="media-left media-middle">
                                                            <div class="avatar avatar-image avatar-sm ">
                                                                <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/necodymiconer/128.jpg" alt="Avatar">
                                                                <i class="avatar-status avatar-status-bottom  bg-danger b-white"></i>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="m-t-0 m-b-0"><span>Destany Smitham</span></h5>
                                                            <p class="small text-gray-light m-b-0"><span>Dynamic Group Producer</span></p>
                                                        </div>

                                                        <div class="media-right  media-middle">

                                                        </div>

                                                    </div>
                                                </a>
                                            </li>
                                            <!-- START User Online (Busy) -->

                                            <!-- START User Online (Busy) -->
                                            <li role="presentation">
                                                <a href="#" class="extra-content-open">
                                                    <div class="media">
                                                        <div class="media-left media-middle">
                                                            <div class="avatar avatar-image avatar-sm ">
                                                                <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/miguelmendes/128.jpg" alt="Avatar">
                                                                <i class="avatar-status avatar-status-bottom  bg-danger b-white"></i>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="m-t-0 m-b-0"><span>Bruce Mayert</span></h5>
                                                            <p class="small text-gray-light m-b-0"><span>Investor Division Liason</span></p>
                                                        </div>

                                                        <div class="media-right  media-middle">

                                                        </div>

                                                    </div>
                                                </a>
                                            </li>
                                            <!-- START User Online (Busy) -->

                                            <!-- START User Online (Busy) -->
                                            <li role="presentation">
                                                <a href="#" class="extra-content-open">
                                                    <div class="media">
                                                        <div class="media-left media-middle">
                                                            <div class="avatar avatar-image avatar-sm ">
                                                                <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/xadhix/128.jpg" alt="Avatar">
                                                                <i class="avatar-status avatar-status-bottom  bg-danger b-white"></i>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="m-t-0 m-b-0"><span>Elliot Veum</span></h5>
                                                            <p class="small text-gray-light m-b-0"><span>Principal Branding Associate</span></p>
                                                        </div>

                                                        <div class="media-right  media-middle">

                                                        </div>

                                                    </div>
                                                </a>
                                            </li>
                                            <!-- START User Online (Busy) -->

                                            <li role="presentation">
                                                <p class="small text-gray-light text-uppercase m-t-2"><strong>Away (3)</strong></p>
                                            </li>

                                            <!-- START User Online (Away) -->
                                            <li role="presentation">
                                                <a href="#" class="extra-content-open">
                                                    <div class="media">
                                                        <div class="media-left media-middle">
                                                            <div class="avatar avatar-image avatar-sm ">
                                                                <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/andrewcohen/128.jpg" alt="Avatar">
                                                                <i class="avatar-status avatar-status-bottom  bg-warning b-white"></i>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="m-t-0 m-b-0"><span>Cletus Carter</span></h5>
                                                            <p class="small text-gray-light m-b-0"><span>Principal Tactics Engineer</span></p>
                                                        </div>

                                                        <div class="media-right  media-middle">

                                                        </div>

                                                    </div>
                                                </a>
                                            </li>
                                            <!-- START User Online (Away) -->

                                            <!-- START User Online (Away) -->
                                            <li role="presentation">
                                                <a href="#" class="extra-content-open">
                                                    <div class="media">
                                                        <div class="media-left media-middle">
                                                            <div class="avatar avatar-image avatar-sm ">
                                                                <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/skkirilov/128.jpg" alt="Avatar">
                                                                <i class="avatar-status avatar-status-bottom  bg-warning b-white"></i>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="m-t-0 m-b-0"><span>Zola Jacobson</span></h5>
                                                            <p class="small text-gray-light m-b-0"><span>Investor Intranet Designer</span></p>
                                                        </div>

                                                        <div class="media-right media-middle">

                                                        </div>

                                                    </div>
                                                </a>
                                            </li>
                                            <!-- START User Online (Away) -->

                                            <!-- START User Online (Away) -->
                                            <li role="presentation">
                                                <a href="#" class="extra-content-open">
                                                    <div class="media">
                                                        <div class="media-left media-middle">
                                                            <div class="avatar avatar-image avatar-sm ">
                                                                <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/isaacfifth/128.jpg" alt="Avatar">
                                                                <i class="avatar-status avatar-status-bottom  bg-warning b-white"></i>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="m-t-0 m-b-0"><span>Jadon Davis</span></h5>
                                                            <p class="small text-gray-light m-b-0"><span>District Identity Analyst</span></p>
                                                        </div>

                                                        <div class="media-right  media-middle">

                                                        </div>

                                                    </div>
                                                </a>
                                            </li>
                                            <!-- START User Online (Away) -->

                                            <li role="presentation">
                                                <p class="small text-gray-light text-uppercase m-t-2"><strong>Offline (3)</strong></p>
                                            </li>

                                            <!-- START User Online (Away) -->
                                            <li role="presentation">
                                                <a href="#" class="extra-content-open">
                                                    <div class="media">
                                                        <div class="media-left media-middle">
                                                            <div class="avatar avatar-image avatar-sm ">
                                                                <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/jarsen/128.jpg" alt="Avatar">
                                                                <i class="avatar-status avatar-status-bottom  bg-gray-lighter b-white"></i>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="m-t-0 m-b-0"><span>Fredrick Lockman</span></h5>
                                                            <p class="small text-gray-light m-b-0"><span>Legacy Marketing Architect</span></p>
                                                        </div>

                                                        <div class="media-right  media-middle">

                                                        </div>

                                                    </div>
                                                </a>
                                            </li>
                                            <!-- START User Online (Away) -->

                                            <!-- START User Online (Away) -->
                                            <li role="presentation">
                                                <a href="#" class="extra-content-open">
                                                    <div class="media">
                                                        <div class="media-left media-middle">
                                                            <div class="avatar avatar-image avatar-sm ">
                                                                <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/borges_marcos/128.jpg" alt="Avatar">
                                                                <i class="avatar-status avatar-status-bottom  bg-gray-lighter  b-white"></i>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="m-t-0 m-b-0"><span>Toni Klein</span></h5>
                                                            <p class="small text-gray-light m-b-0"><span>Corporate Accounts Representative</span></p>
                                                        </div>

                                                        <div class="media-right  media-middle">

                                                        </div>

                                                    </div>
                                                </a>
                                            </li>
                                            <!-- START User Online (Away) -->

                                            <!-- START User Online (Away) -->
                                            <li role="presentation">
                                                <a href="#" class="extra-content-open">
                                                    <div class="media">
                                                        <div class="media-left media-middle">
                                                            <div class="avatar avatar-image avatar-sm ">
                                                                <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/emileboudeling/128.jpg" alt="Avatar">
                                                                <i class="avatar-status avatar-status-bottom  bg-gray-lighter  b-white"></i>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="m-t-0 m-b-0"><span>Marianna Armstrong</span></h5>
                                                            <p class="small text-gray-light m-b-0"><span>Corporate Response Supervisor</span></p>
                                                        </div>

                                                        <div class="media-right  media-middle">

                                                        </div>

                                                    </div>
                                                </a>
                                            </li>
                                            <!-- START User Online (Away) -->

                                        </ul>

                                    </div>

                                    <!-- START Chat Content (Hide Tab: Users) -->
                                    <div class="right-sidebar-extra-content p-r-2" id="chatpanel">

                                        <div class="panel panel-default m-t-3">

                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <a class="extra-content-close small" href="javascript:void(0);"><i class="fa fa-fw fa-chevron-left"></i></a>
                                                    </div>
                                                    <div class="col-xs-6 text-center">
                                                        <span>G. Swaniawski</span>
                                                    </div>
                                                    <div class="col-xs-3 text-right">
                                                        <a href="#" class="text-gray-lighter"><i class="fa fa-fw fa-circle text-success"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel-body">

                                                <!-- START Left Chat -->
                                                <div class="media">
                                                    <div class="media-left">
                                                        <div class="avatar avatar-image avatar-sm">
                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/aeon56/128.jpg" alt="Avatar">
                                                            <i class="avatar-status avatar-status-bottom  bg-warning b-brand-gray-darker"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="panel-default">
                                                            <div class="panel-body bg-gray-light text-white b-r-a-3">
                                                                <span>Cupiditate expedita laborum eveniet.</span>
                                                            </div>
                                                        </div>
                                                        <h6 class="m-t-1"><span>Gage Conn</span>   <small><span> 04:28</span></small></h6>
                                                    </div>
                                                </div>
                                                <!-- END Left Chat -->

                                                <!-- START Right Chat -->
                                                <div class="media m-b-0">
                                                    <div class="media-body">
                                                        <div class="panel-default">
                                                            <div class="panel-body bg-primary text-white b-r-a-3">
                                                                <span>Impedit est et similique dolorum.</span>
                                                            </div>
                                                        </div>
                                                        <h6 class="m-t-1"><span>June Ledner</span>   <small><span> 12:22</span></small></h6>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="avatar avatar-image avatar-sm">
                                                            <img class="media-object img-circle" alt="Avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/rikas/128.jpg">
                                                            <i class="avatar-status avatar-status-bottom  bg-danger b-brand-gray-darker"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END Right Chat -->

                                                <!-- START Left Chat -->
                                                <div class="media">
                                                    <div class="media-left">
                                                        <div class="avatar avatar-image avatar-sm">
                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/buryaknick/128.jpg" alt="Avatar">
                                                            <i class="avatar-status avatar-status-bottom  bg-success b-brand-gray-darker"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="panel-default">
                                                            <div class="panel-body bg-gray-light text-white b-r-a-3">
                                                                <span>Aperiam vel quis tenetur. Magni consequatur quo. Iusto rerum tenetur porro minus. Autem perferendis quasi neque sit.</span>
                                                            </div>
                                                        </div>
                                                        <h6 class="m-t-1"><span>Josh Baumbach</span>   <small><span>03:39</span></small></h6>
                                                    </div>
                                                </div>
                                                <!-- END Left Chat -->

                                                <!-- START Right Chat -->
                                                <div class="media m-b-0">
                                                    <div class="media-body">
                                                        <div class="panel-default">
                                                            <div class="panel-body bg-gray-light text-white b-r-a-3">
                                                                <span>Totam nostrum mollitia quia occaecati.</span>
                                                            </div>
                                                        </div>
                                                        <h6 class="m-t-1"><span>Lincoln Carroll</span>   <small><span> 03:26</span></small></h6>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="avatar avatar-image avatar-sm">
                                                            <img class="media-object img-circle" alt="Avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/poormini/128.jpg">
                                                            <i class="avatar-status avatar-status-bottom  bg-danger b-brand-gray-darker"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END Right Chat -->

                                            </div>

                                            <!-- START Input Your Message -->
                                            <div class="panel-footer">
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="button">
                                                            <i class="fa fa-fw fa-plus"></i>
                                                        </button>
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="Your Message...">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="button">Go!</button>
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- END Input Your Message -->

                                        </div>

                                    </div>
                                    <!-- END Chat Content (Hide Tab: Users) -->
                                </div>
                                <!-- END Tab: Users -->

                                <!-- START Tab: Settings -->
                                <div class="tab-pane fade p-r-1" id="right-sidebar-settings" role="tabpanel">

                                    <p class="text-uppercase small m-t-1 m-b-2"><strong>Settings</strong></p>

                                    <div class="row m-b-1">
                                        <div class="col-sm-6"><span class="text-gray-darker">Notifications</span></div>
                                        <div class="col-sm-6 text-right"> <input type="checkbox" class="js-switch-small" checked></div>
                                    </div>
                                    <p class="m-b-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                                    <div class="row m-b-1">
                                        <div class="col-sm-6"><span class="text-gray-darker">Activity</span></div>
                                        <div class="col-sm-6 text-right"><input type="checkbox" class="js-switch-small-primary" checked></div>
                                    </div>
                                    <p class="m-b-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                                    <div class="row m-b-1">
                                        <div class="col-sm-6"><span class="text-gray-darker">Statisticts</span></div>
                                        <div class="col-sm-6 text-right"><input type="checkbox" class="js-switch-small-warning" checked></div>
                                    </div>
                                    <p class="m-b-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                                    <div class="row m-b-1">
                                        <div class="col-sm-9"><span class="text-gray-darker">Settings for Responsive</span></div>
                                        <div class="col-sm-3 text-right"><input type="checkbox" class="js-switch-small-danger" checked></div>
                                    </div>
                                    <p class="m-b-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                                </div>
                                <!-- END Tab: Settings -->

                                <!-- START Tab: Timeline -->
                                <div class="tab-pane fade p-r-1" id="right-sidebar-timeline" role="tabpanel">

                                    <p class="text-uppercase small m-t-1 m-b-2"><strong>Timeline</strong></p>

                                    <!-- START Timeline - Active Entry (Day) -->
                                    <div class="timeline">
                                        <!-- Timeline - Badge Date -->
                                        <div class="timeline-date">
                                            <span class="badge">Today</span>
                                        </div>
                                        <div class="timeline-item p-r-1">
                                            <!-- Timeline - Mini Icon -->
                                            <div class="timeline-icon">
                                                <i class="fa fa-fw fa-times-circle text-danger"></i>
                                            </div>

                                            <!-- Timeline - Icon  -->
                                            <div class="timeline-item-head clearfix m-b-0">
                                                <!-- Timeline - Header & Subtitle -->

                                                <!-- START Avatar, Message & Time -->
                                                <div class="row">

                                                    <div class="col-lg-12 m-l-1">

                                                        <span class="badge badge-danger badge-outline">Alert</span>
                                                        <br>
                                                        <p class="text-gray-darker m-t-1"><span>We need to program the open-source HDD hard drive!</span></p>
                                                        <p class="text-nowrap small"><span>08-May-2013, 07:28</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- END Avatar, Message & Time -->

                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Timeline - Active Entry (Day) -->

                                    <!-- START Timeline - Active Entry -->
                                    <div class="timeline">
                                        <div class="timeline-item p-r-1">
                                            <!-- Timeline - Mini Icon -->
                                            <div class="timeline-icon">
                                                <i class="fa fa-fw fa-exclamation-circle text-warning"></i>
                                            </div>

                                            <!-- Timeline - Icon  -->
                                            <div class="timeline-item-head clearfix m-b-0">
                                                <!-- Timeline - Header & Subtitle -->

                                                <!-- START Avatar, Message & Time -->
                                                <div class="row">

                                                    <div class="col-lg-12 m-l-1">

                                                        <span class="badge badge-warning badge-outline">Warning</span>
                                                        <br>
                                                        <p class="text-gray-darker m-t-1"><span>We need to transmit the neural ADP firewall!</span></p>
                                                        <p class="text-nowrap small"><span>17-Feb-2015, 12:04</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- END Avatar, Message & Time -->

                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Timeline - Active Entry -->

                                    <!-- START Timeline - Active Entry -->
                                    <div class="timeline">
                                        <div class="timeline-item p-r-1">
                                            <!-- Timeline - Mini Icon -->
                                            <div class="timeline-icon">
                                                <i class="fa fa-fw fa-info-circle text-info"></i>
                                            </div>

                                            <!-- Timeline - Icon  -->
                                            <div class="timeline-item-head clearfix m-b-0">
                                                <!-- Timeline - Header & Subtitle -->

                                                <!-- START Avatar, Message & Time -->
                                                <div class="row">

                                                    <div class="col-lg-12 m-l-1">

                                                        <span class="badge badge-info badge-outline">Info</span>
                                                        <br>
                                                        <p class="text-gray-darker m-t-1">15 Files Uploaded</p>
                                                        <p class="text-nowrap small"><span>11-Sep-2013, 03:07</span>
                                                        </p>
                                                        <i class="m-l-1 fa fa-file-text-o fa-fw"></i> read_me.txt<br>
                                                        <i class="m-l-1 fa fa-file-zip-o fa-fw"></i> all-files.zip<br>
                                                        <i class="m-l-1 fa fa-file-word-o fa-fw"></i> alice-feedback.doc<br>

                                                        <span class="badge m-t-1 m-b-1">+12</span>

                                                    </div>
                                                </div>
                                                <!-- END Avatar, Message & Time -->

                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Timeline - Active Entry -->

                                    <!-- START Timeline - Active Entry -->
                                    <div class="timeline">
                                        <div class="timeline-item p-r-1">
                                            <!-- Timeline - Mini Icon -->
                                            <div class="timeline-icon">
                                                <i class="fa fa-fw fa-plus-circle  text-primary"></i>
                                            </div>

                                            <!-- Timeline - Icon  -->
                                            <div class="timeline-item-head clearfix m-b-0">
                                                <!-- Timeline - Header & Subtitle -->

                                                <!-- START Avatar, Message & Time -->
                                                <div class="row">

                                                    <div class="col-lg-12 m-l-1">

                                                        <span class="badge badge-primary badge-outline">Message</span>
                                                        <br>
                                                        <p class="text-gray-darker m-t-1">6 users have been accepted by the Admin</p>
                                                        <p class="text-nowrap small"><span>27-May-2011, 12:42</span>
                                                        </p>
                                                        <div class="m-b-1">
                                                            <div class="avatar avatar-image avatar-sm visible-lg-inline-block visible-md-inline-block visible-sm-inline-block visible-xs-inline-block">
                                                                <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/xtopherpaul/128.jpg" alt="Avatar">
                                                            </div>
                                                            <div class="avatar avatar-image avatar-sm visible-lg-inline-block visible-md-inline-block visible-sm-inline-block visible-xs-inline-block">
                                                                <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/_pedropinho/128.jpg" alt="Avatar">
                                                            </div>
                                                            <div class="avatar avatar-image  avatar-sm visible-lg-inline-block visible-md-inline-block visible-sm-inline-block visible-xs-inline-block">
                                                                <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/damenleeturks/128.jpg" alt="Avatar">
                                                            </div>
                                                            <div class="avatar avatar-image  avatar-sm visible-lg-inline-block visible-md-inline-block visible-sm-inline-block visible-xs-inline-block">
                                                                <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/reetajayendra/128.jpg" alt="Avatar">
                                                            </div>
                                                            <div class="avatar avatar-image  avatar-sm visible-lg-inline-block visible-md-inline-block visible-sm-inline-block visible-xs-inline-block">
                                                                <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/jervo/128.jpg" alt="Avatar">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END Avatar, Message & Time -->

                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Timeline - Active Entry -->

                                    <!-- START Timeline - Active Entry (Day) -->
                                    <div class="timeline">
                                        <!-- Timeline - Badge Date -->
                                        <div class="timeline-date">
                                            <span class="badge">Yesterday</span>
                                        </div>
                                        <div class="timeline-item p-r-1">
                                            <!-- Timeline - Mini Icon -->
                                            <div class="timeline-icon">
                                                <i class="fa fa-fw fa-check-circle text-success"></i>
                                            </div>

                                            <!-- Timeline - Icon  -->
                                            <div class="timeline-item-head clearfix m-b-0">
                                                <!-- Timeline - Header & Subtitle -->

                                                <!-- START Avatar, Message & Time -->
                                                <div class="row">

                                                    <div class="col-lg-12 m-l-1">

                                                        <span class="badge badge-success badge-outline">Success</span>
                                                        <br>
                                                        <p class="text-gray-darker m-t-1"><span>If we connect the matrix, we can get to the HDD pixel through the wireless SQL sensor!</span></p>
                                                        <p class="text-nowrap small"><span>21-Jul-2012, 07:52</span>
                                                        </p>

                                                        <p><span>Et id modi est ullam omnis officia.</span></p>
                                                    </div>
                                                </div>
                                                <!-- END Avatar, Message & Time -->

                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Timeline - Active Entry (Day) -->

                                    <!-- START Timeline - Active Entry -->
                                    <div class="timeline">

                                        <div class="timeline-item p-r-1">
                                            <!-- Timeline - Mini Icon -->
                                            <div class="timeline-icon">
                                                <i class="fa fa-fw fa-circle text-gray"></i>
                                            </div>

                                            <!-- Timeline - Icon  -->
                                            <div class="timeline-item-head clearfix m-b-0">
                                                <!-- Timeline - Header & Subtitle -->

                                                <!-- START Avatar, Message & Time -->
                                                <div class="row">

                                                    <div class="col-lg-12 m-l-1">

                                                        <span class="badge badge-gray badge-outline">Obsolete</span>
                                                        <br>
                                                        <del><p class="m-t-1"><span>If we navigate the panel, we can get to the FTP array through the solid state SAS microchip!</span></p></del>
                                                        <p class="text-nowrap small"><span>30-Jan-2013, 04:50</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- END Avatar, Message & Time -->

                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Timeline - Active Entry  -->
                                </div>
                                <!-- END Tab: Timeline -->
                            </div>
                            <!-- END Tabs All Content --></div>
                    </div>
                </div>
                <!-- START Content Show in Full-Height -->
                <div class="right-sidebar-extra-content" id="chatpanel2">
                    <a href="#" class="extra-content-close">Back</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, ipsa, rem. Accusantium autem blanditiis dolor ducimus earum eius eligendi, eos est exercitationem id illo in mollitia neque optio pariatur placeat quisquam recusandae reiciendis repellat reprehenderit. Amet at deleniti dicta distinctio dolorem eveniet hic id, iusto magnam maxime modi officiis perspiciatis porro praesentium quas, recusandae repudiandae rerum tempora totam unde velit voluptate, voluptatem. Alias consequatur consequuntur et nisi quibusdam quo quos ut. Asperiores commodi deserunt dicta dolor eligendi ex fugit, harum itaque laborum maiores mollitia nam nihil obcaecati officiis quae quis repellendus tenetur voluptate. Eos ratione saepe voluptatibus? Animi, illo magni!</p>
                </div>
                <!-- END Content Show in Full-Height -->
            </div>
            <!-- START Footer -->
            <footer class="bg-white">
                <div class="container-fluid">
                    <p class="text-gray">
                        <strong>SKARLA Dashboard 1.0 </strong> <i class="m-r-1 text-gray-light">(HTML/JQuery Version)</i>
                        <span class="text-gray">&#xA9; 2009 - 2016. Made by 
                            <i class="fa fa-fw fa-heart text-danger"></i> New York, US</span>
                    </p>
                </div>
            </footer>
            <!-- END Footer -->

        </div>
       <!-- <script>
            // Hide loader
            (function() {
                var bodyElement = document.querySelector('body');
                bodyElement.classList.add('loading');
    
                document.addEventListener('readystatechange', function() {
                    if(document.readyState === 'complete') {
                        var bodyElement = document.querySelector('body');
                        var loaderElement = document.querySelector('#initial-loader');
    
                        bodyElement.classList.add('loaded');
                        setTimeout(function() {
                            bodyElement.removeChild(loaderElement);
                            bodyElement.classList.remove('loading', 'loaded');
                        }, 200);
                    }
                });
            })();
        </script>-->

        <!-- Bower Libraries Styles -->        
        <link rel="stylesheet" href="{{skarla_vendor_url("css/lib.min.css")}}">

        <script src="{{skarla_js_url("app.min.e05f769f.js")}}"></script>
        <script src="{{skarla_js_url("plugins-init.js")}}"></script>
        <script src="{{skarla_js_url("switchery-settings.js")}}"></script>

    </body>

</html>
