<?php
/**
 * Created by PhpStorm.
 * User: Rare
 * Date: 2017/7/17
 * Time: 17:49
 */
    require "../includes/common.inc.php";
?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>OneUI - Admin Dashboard Template &amp; UI Framework</title>

    <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-192x192.png" sizes="192x192">

    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Web fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="assets/js/plugins/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/js/plugins/highlightjs/github-gist.min.css">

    <!-- Bootstrap and OneUI CSS framework -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" id="css-main" href="assets/css/oneui.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>
<!-- Page Container -->
<!--
    Available Classes:

    'enable-cookies'             Remembers active color theme between pages (when set through color theme list)

    'sidebar-l'                  Left Sidebar and right Side Overlay
    'sidebar-r'                  Right Sidebar and left Side Overlay
    'sidebar-mini'               Mini hoverable Sidebar (> 991px)
    'sidebar-o'                  Visible Sidebar by default (> 991px)
    'sidebar-o-xs'               Visible Sidebar by default (< 992px)

    'side-overlay-hover'         Hoverable Side Overlay (> 991px)
    'side-overlay-o'             Visible Side Overlay by default (> 991px)

    'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

    'header-navbar-fixed'        Enables fixed header
-->
<div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
    <!-- Side Overlay-->
    <aside id="side-overlay">
        <!-- Side Overlay Scroll Container -->
        <div id="side-overlay-scroll">
            <!-- Side Header -->
            <div class="side-header side-content">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default pull-right" type="button" data-toggle="layout" data-action="side_overlay_close">
                    <i class="fa fa-times"></i>
                </button>
                <span>
                            <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar10.jpg" alt="">
                            <span class="font-w600 push-10-l">Ethan Howard</span>
                        </span>
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="side-content remove-padding-t">
                <!-- Side Overlay Tabs -->
                <div class="block pull-r-l border-t">
                    <ul class="nav nav-tabs nav-tabs-alt nav-justified" data-toggle="tabs">
                        <li class="active">
                            <a href="#tabs-side-overlay-overview"><i class="fa fa-fw fa-coffee"></i> Overview</a>
                        </li>
                        <li>
                            <a href="#tabs-side-overlay-sales"><i class="fa fa-fw fa-line-chart"></i> Sales</a>
                        </li>
                    </ul>
                    <div class="block-content tab-content">
                        <!-- Overview Tab -->
                        <div class="tab-pane fade fade-right in active" id="tabs-side-overlay-overview">
                            <!-- Activity -->
                            <div class="block pull-r-l">
                                <div class="block-header bg-gray-lighter">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title">Recent Activity</h3>
                                </div>
                                <div class="block-content">
                                    <!-- Activity List -->
                                    <ul class="list list-activity">
                                        <li>
                                            <i class="si si-wallet text-success"></i>
                                            <div class="font-w600">New sale ($15)</div>
                                            <div><a href="javascript:void(0)">Admin Template</a></div>
                                            <div><small class="text-muted">3 min ago</small></div>
                                        </li>
                                        <li>
                                            <i class="si si-pencil text-info"></i>
                                            <div class="font-w600">You edited the file</div>
                                            <div><a href="javascript:void(0)"><i class="fa fa-file-text-o"></i> Documentation.doc</a></div>
                                            <div><small class="text-muted">15 min ago</small></div>
                                        </li>
                                        <li>
                                            <i class="si si-close text-danger"></i>
                                            <div class="font-w600">Project deleted</div>
                                            <div><a href="javascript:void(0)">Line Icon Set</a></div>
                                            <div><small class="text-muted">4 hours ago</small></div>
                                        </li>
                                    </ul>
                                    <!-- END Activity List -->
                                </div>
                            </div>
                            <!-- END Activity -->

                            <!-- Online Friends -->
                            <div class="block pull-r-l">
                                <div class="block-header bg-gray-lighter">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title">Online Friends</h3>
                                </div>
                                <div class="block-content block-content-full">
                                    <!-- Users Navigation -->
                                    <ul class="nav-users remove-margin-b">
                                        <li>
                                            <a href="base_pages_profile.html">
                                                <img class="img-avatar" src="assets/img/avatars/avatar7.jpg" alt="">
                                                <i class="fa fa-circle text-success"></i> Helen Silva
                                                <div class="font-w400 text-muted"><small>Copywriter</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="base_pages_profile.html">
                                                <img class="img-avatar" src="assets/img/avatars/avatar12.jpg" alt="">
                                                <i class="fa fa-circle text-success"></i> Ethan Howard
                                                <div class="font-w400 text-muted"><small>Web Developer</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="base_pages_profile.html">
                                                <img class="img-avatar" src="assets/img/avatars/avatar5.jpg" alt="">
                                                <i class="fa fa-circle text-success"></i> Sara Holland
                                                <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="base_pages_profile.html">
                                                <img class="img-avatar" src="assets/img/avatars/avatar5.jpg" alt="">
                                                <i class="fa fa-circle text-warning"></i> Susan Elliott
                                                <div class="font-w400 text-muted"><small>Photographer</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="base_pages_profile.html">
                                                <img class="img-avatar" src="assets/img/avatars/avatar9.jpg" alt="">
                                                <i class="fa fa-circle text-warning"></i> Jeremy Fuller
                                                <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- END Users Navigation -->
                                </div>
                            </div>
                            <!-- END Online Friends -->

                            <!-- Quick Settings -->
                            <div class="block pull-r-l">
                                <div class="block-header bg-gray-lighter">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title">Quick Settings</h3>
                                </div>
                                <div class="block-content">
                                    <!-- Quick Settings Form -->
                                    <form class="form-bordered" action="base_pages_dashboard.html" method="post" onsubmit="return false;">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-8">
                                                    <div class="font-s13 font-w600">Online Status</div>
                                                    <div class="font-s13 font-w400 text-muted">Show your status to all</div>
                                                </div>
                                                <div class="col-xs-4 text-right">
                                                    <label class="css-input switch switch-sm switch-primary push-10-t">
                                                        <input type="checkbox"><span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-8">
                                                    <div class="font-s13 font-w600">Auto Updates</div>
                                                    <div class="font-s13 font-w400 text-muted">Keep up to date</div>
                                                </div>
                                                <div class="col-xs-4 text-right">
                                                    <label class="css-input switch switch-sm switch-primary push-10-t">
                                                        <input type="checkbox"><span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-8">
                                                    <div class="font-s13 font-w600">Notifications</div>
                                                    <div class="font-s13 font-w400 text-muted">Do you need them?</div>
                                                </div>
                                                <div class="col-xs-4 text-right">
                                                    <label class="css-input switch switch-sm switch-primary push-10-t">
                                                        <input type="checkbox" checked><span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-8">
                                                    <div class="font-s13 font-w600">API Access</div>
                                                    <div class="font-s13 font-w400 text-muted">Enable/Disable access</div>
                                                </div>
                                                <div class="col-xs-4 text-right">
                                                    <label class="css-input switch switch-sm switch-primary push-10-t">
                                                        <input type="checkbox" checked><span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Quick Settings Form -->
                                </div>
                            </div>
                            <!-- END Quick Settings -->
                        </div>
                        <!-- END Overview Tab -->

                        <!-- Sales Tab -->
                        <div class="tab-pane fade fade-left" id="tabs-side-overlay-sales">
                            <div class="block pull-r-l">
                                <!-- Stats -->
                                <div class="block-content pull-t">
                                    <div class="row items-push">
                                        <div class="col-xs-6">
                                            <div class="font-w700 text-gray-darker text-uppercase">Sales</div>
                                            <a class="h3 font-w300 text-primary" href="javascript:void(0)">22030</a>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="font-w700 text-gray-darker text-uppercase">Balance</div>
                                            <a class="h3 font-w300 text-primary" href="javascript:void(0)">$ 4.589,00</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Stats -->

                                <!-- Today -->
                                <div class="block-content block-content-full block-content-mini bg-gray-lighter">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <span class="font-w600 font-s13 text-gray-darker text-uppercase">Today</span>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <span class="font-s13 text-muted">$996</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <ul class="list list-activity pull-r-l">
                                        <li>
                                            <i class="fa fa-circle text-success"></i>
                                            <div class="font-w600">New sale! + $249</div>
                                            <div><small class="text-muted">3 min ago</small></div>
                                        </li>
                                        <li>
                                            <i class="fa fa-circle text-success"></i>
                                            <div class="font-w600">New sale! + $129</div>
                                            <div><small class="text-muted">50 min ago</small></div>
                                        </li>
                                        <li>
                                            <i class="fa fa-circle text-success"></i>
                                            <div class="font-w600">New sale! + $119</div>
                                            <div><small class="text-muted">2 hours ago</small></div>
                                        </li>
                                        <li>
                                            <i class="fa fa-circle text-success"></i>
                                            <div class="font-w600">New sale! + $499</div>
                                            <div><small class="text-muted">3 hours ago</small></div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END Today -->

                                <!-- Yesterday -->
                                <div class="block-content block-content-full block-content-mini bg-gray-lighter">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <span class="font-w600 font-s13 text-gray-darker text-uppercase">Yesterday</span>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <span class="font-s13 text-muted">$765</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <ul class="list list-activity pull-r-l">
                                        <li>
                                            <i class="fa fa-circle text-success"></i>
                                            <div class="font-w600">New sale! + $249</div>
                                            <div><small class="text-muted">26 hours ago</small></div>
                                        </li>
                                        <li>
                                            <i class="fa fa-circle text-danger"></i>
                                            <div class="font-w600">Product Purchase - $50</div>
                                            <div><small class="text-muted">28 hours ago</small></div>
                                        </li>
                                        <li>
                                            <i class="fa fa-circle text-success"></i>
                                            <div class="font-w600">New sale! + $119</div>
                                            <div><small class="text-muted">29 hours ago</small></div>
                                        </li>
                                        <li>
                                            <i class="fa fa-circle text-danger"></i>
                                            <div class="font-w600">Paypal Withdrawal - $300</div>
                                            <div><small class="text-muted">37 hours ago</small></div>
                                        </li>
                                        <li>
                                            <i class="fa fa-circle text-success"></i>
                                            <div class="font-w600">New sale! + $129</div>
                                            <div><small class="text-muted">39 hours ago</small></div>
                                        </li>
                                        <li>
                                            <i class="fa fa-circle text-success"></i>
                                            <div class="font-w600">New sale! + $119</div>
                                            <div><small class="text-muted">45 hours ago</small></div>
                                        </li>
                                        <li>
                                            <i class="fa fa-circle text-success"></i>
                                            <div class="font-w600">New sale! + $499</div>
                                            <div><small class="text-muted">46 hours ago</small></div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END Yesterday -->

                                <!-- More -->
                                <div class="text-center">
                                    <small><a href="javascript:void(0)">Load More..</a></small>
                                </div>
                                <!-- END More -->
                            </div>
                        </div>
                        <!-- END Sales Tab -->
                    </div>
                </div>
                <!-- END Side Overlay Tabs -->
            </div>
            <!-- END Side Content -->
        </div>
        <!-- END Side Overlay Scroll Container -->
    </aside>
    <!-- END Side Overlay -->

    <?php
    require ROOT_PATH."includes/nav_left.inc.php";
    ?>

    <!-- Header -->
    <header id="header-navbar" class="content-mini content-mini-full">
        <!-- Header Navigation Right -->
        <ul class="nav-header pull-right">
            <li>
                <div class="btn-group">
                    <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                        <img src="assets/img/avatars/avatar10.jpg" alt="Avatar">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-header">Profile</li>
                        <li>
                            <a tabindex="-1" href="base_pages_inbox.html">
                                <i class="si si-envelope-open pull-right"></i>
                                <span class="badge badge-primary pull-right">3</span>Inbox
                            </a>
                        </li>
                        <li>
                            <a tabindex="-1" href="base_pages_profile.html">
                                <i class="si si-user pull-right"></i>
                                <span class="badge badge-success pull-right">1</span>Profile
                            </a>
                        </li>
                        <li>
                            <a tabindex="-1" href="javascript:void(0)">
                                <i class="si si-settings pull-right"></i>Settings
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Actions</li>
                        <li>
                            <a tabindex="-1" href="base_pages_lock.html">
                                <i class="si si-lock pull-right"></i>Lock Account
                            </a>
                        </li>
                        <li>
                            <a tabindex="-1" href="base_pages_login.html">
                                <i class="si si-logout pull-right"></i>Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" data-toggle="layout" data-action="side_overlay_toggle" type="button">
                    <i class="fa fa-tasks"></i>
                </button>
            </li>
        </ul>
        <!-- END Header Navigation Right -->

        <!-- Header Navigation Left -->
        <ul class="nav-header pull-left">
            <li class="hidden-md hidden-lg">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                    <i class="fa fa-navicon"></i>
                </button>
            </li>
            <li class="hidden-xs hidden-sm">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                    <i class="fa fa-ellipsis-v"></i>
                </button>
            </li>
            <li>
                <!-- Opens the Apps modal found at the bottom of the page, before including JS code -->
                <button class="btn btn-default pull-right" data-toggle="modal" data-target="#apps-modal" type="button">
                    <i class="si si-grid"></i>
                </button>
            </li>
            <li class="visible-xs">
                <!-- Toggle class helper (for .js-header-search below), functionality initialized in App() -> uiToggleClass() -->
                <button class="btn btn-default" data-toggle="class-toggle" data-target=".js-header-search" data-class="header-search-xs-visible" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </li>
            <li class="js-header-search header-search">
                <form class="form-horizontal" action="base_pages_search.html" method="post">
                    <div class="form-material form-material-primary input-group remove-margin-t remove-margin-b">
                        <input class="form-control" type="text" id="base-material-text" name="base-material-text" placeholder="Search..">
                        <span class="input-group-addon"><i class="si si-magnifier"></i></span>
                    </div>
                </form>
            </li>
        </ul>
        <!-- END Header Navigation Left -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content content-boxed">
            <!-- User Header -->
            <div class="block">
                <!-- Basic Info -->
                <div class="bg-image" style="background-image: url('assets/img/photos/photo25@2x.jpg');">
                    <div class="block-content bg-primary-dark-op clearfix">
                        <div class="pull-left push">
                            <img class="img-avatar img-avatar-thumb" src="assets/img/avatars/avatar10.jpg" alt="">
                        </div>
                        <div class="pull-left push-15-t push-15-l">
                            <h2 class="h4 font-w600 text-white push-5">Ryan Hall</h2>
                            <h3 class="h5 text-white-op"><em>Life Explorer</em></h3>
                        </div>
                    </div>
                </div>
                <!-- END Basic Info -->
            </div>
            <!-- END User Header -->

            <!-- Main Content -->
            <div class="row">
                <div class="col-sm-4 col-lg-3">
                    <!-- Social Menu -->
                    <div class="block">
                        <div class="block-content">
                            <div class="font-w600 font-s12 text-uppercase text-muted push-10">Home</div>
                            <ul class="nav nav-pills nav-stacked push">
                                <li class="active">
                                    <a href="javascript:void(0)"><i class="fa fa-fw fa-newspaper-o push-5-r"></i> News Feed</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><span class="badge pull-right">3</span><i class="fa fa-fw fa-envelope push-5-r"></i> Messages</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fa fa-fw fa-pencil push-5-r"></i> Events</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fa fa-fw fa-photo push-5-r"></i> Photos</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fa fa-fw fa-search push-5-r"></i> Browse</a>
                                </li>
                            </ul>
                            <div class="font-w600 font-s12 text-uppercase text-muted push-10">Pages</div>
                            <ul class="nav nav-pills nav-stacked font-s13 push">
                                <li>
                                    <a href="javascript:void(0)"><span class="badge pull-right">1</span>Nature Lovers</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><span class="badge pull-right">6</span>Gaming Studio</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><span class="badge pull-right">9</span>Funny &amp; More</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><span class="badge pull-right">4</span>Funny Stories</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><span class="badge pull-right">5</span>Dreamers</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><span class="badge pull-right">1</span>Video Games</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><span class="badge pull-right">2</span>Photographers</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END Social Menu -->
                </div>
                <div class="col-sm-8 col-lg-6">
                    <!-- Social Timeline -->
                    <!-- Update 1 -->
                    <div class="block">
                        <div class="block-header">
                            <ul class="block-options">
                                <li class="dropdown">
                                    <button type="button" data-toggle="dropdown">
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right font-s13">
                                        <li>
                                            <a tabindex="-1" href="javascript:void(0)">
                                                <i class="fa fa-times text-danger push-5-r"></i>
                                                Hide similar posts
                                            </a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="javascript:void(0)">
                                                <i class="fa fa-thumbs-down text-warning push-5-r"></i>
                                                Stop following this user
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a tabindex="-1" href="javascript:void(0)">
                                                <i class="fa fa-warning push-5-r"></i>
                                                Report this post
                                            </a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="javascript:void(0)">
                                                <i class="fa fa-bookmark push-5-r"></i>
                                                Bookmark this post
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="clearfix">
                                <div class="pull-left push-15-r">
                                    <img class="img-avatar img-avatar48" src="assets/img/avatars/avatar1.jpg" alt="">
                                </div>
                                <div class="push-5-t">
                                    <a class="font-w600" href="javascript:void(0)">Laura Bell</a><br>
                                    <span class="font-s12 text-muted">2 hours ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <p class="push-10 pull-t">We had an awesome time! Roadtrip for ever!</p>
                            <img class="img-responsive" src="assets/img/photos/photo19.jpg" alt="">
                            <hr>
                            <div class="row text-center font-s13">
                                <div class="col-xs-4">
                                    <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                        <i class="fa fa-thumbs-up push-5-r"></i>
                                        <span class="hidden-xs">Like!</span>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                        <i class="fa fa-comment push-5-r"></i>
                                        <span class="hidden-xs">Comment</span>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                        <i class="fa fa-share-alt push-5-r"></i>
                                        <span class="hidden-xs">Share</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-full bg-gray-lighter">
                            <!-- Comments -->
                            <div class="media push-15">
                                <div class="media-left">
                                    <a href="javascript:void(0)">
                                        <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="media-body font-s13">
                                    <a class="font-w600" href="javascript:void(0)">Evelyn Willis</a>
                                    <div class="push-5">It was awesome! Looking forward for the new roadtrip!</div>
                                    <div class="font-s12">
                                        <a href="javascript:void(0)">Like!</a> -
                                        <a href="javascript:void(0)">Reply</a> -
                                        <span class="text-muted"><em>10 min ago</em></span>
                                    </div>
                                    <div class="media push-10">
                                        <div class="media-left">
                                            <a href="javascript:void(0)">
                                                <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body font-s13">
                                            <a class="font-w600" href="javascript:void(0)">Judy Alvarez</a>
                                            <div class="push-5">Yes!!</div>
                                            <div class="font-s12">
                                                <a href="javascript:void(0)">Like!</a> -
                                                <a href="javascript:void(0)">Reply</a> -
                                                <span class="text-muted"><em>15 min ago</em></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media push-15">
                                <div class="media-left">
                                    <a href="javascript:void(0)">
                                        <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar12.jpg" alt="">
                                    </a>
                                </div>
                                <div class="media-body font-s13">
                                    <a class="font-w600" href="javascript:void(0)">Ronald George</a>
                                    <div class="push-5">Really nice!</div>
                                    <div class="font-s12">
                                        <a href="javascript:void(0)">Like!</a> -
                                        <a href="javascript:void(0)">Reply</a> -
                                        <span class="text-muted"><em>20 min ago</em></span>
                                    </div>
                                </div>
                            </div>
                            <!-- END Comments -->

                            <!-- Post Comment -->
                            <form class="form-horizontal" action="base_ui_timeline_social.html" method="post" onsubmit="return false;">
                                <input class="form-control" type="text" placeholder="Write a comment..">
                            </form>
                            <!-- END Post Comment -->
                        </div>
                    </div>
                    <!-- END Update 1 -->

                    <!-- Update 2 -->
                    <div class="block">
                        <div class="block-header">
                            <ul class="block-options">
                                <li class="dropdown">
                                    <button type="button" data-toggle="dropdown">
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right font-s13">
                                        <li>
                                            <a tabindex="-1" href="javascript:void(0)">
                                                <i class="fa fa-times text-danger push-5-r"></i>
                                                Hide similar posts
                                            </a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="javascript:void(0)">
                                                <i class="fa fa-thumbs-down text-warning push-5-r"></i>
                                                Stop following this user
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a tabindex="-1" href="javascript:void(0)">
                                                <i class="fa fa-warning push-5-r"></i>
                                                Report this post
                                            </a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="javascript:void(0)">
                                                <i class="fa fa-bookmark push-5-r"></i>
                                                Bookmark this post
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="clearfix">
                                <div class="pull-left push-15-r">
                                    <img class="img-avatar img-avatar48" src="assets/img/avatars/avatar9.jpg" alt="">
                                </div>
                                <div class="push-5-t">
                                    <a class="font-w600" href="javascript:void(0)">Walter Fox</a><br>
                                    <span class="font-s12 text-muted">5 hours ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <p class="push-10 pull-t">Finally, the project is almost finished! Can't wait to show you what we've created!</p>
                            <hr>
                            <div class="row text-center font-s13">
                                <div class="col-xs-4">
                                    <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                        <i class="fa fa-thumbs-up push-5-r"></i>
                                        <span class="hidden-xs">Like!</span>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                        <i class="fa fa-comment push-5-r"></i>
                                        <span class="hidden-xs">Comment</span>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                        <i class="fa fa-share-alt push-5-r"></i>
                                        <span class="hidden-xs">Share</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-full bg-gray-lighter">
                            <!-- Post Comment -->
                            <form class="form-horizontal" action="base_ui_timeline_social.html" method="post" onsubmit="return false;">
                                <input class="form-control" type="text" placeholder="Write a comment..">
                            </form>
                            <!-- END Post Comment -->
                        </div>
                    </div>
                    <!-- END Update 2 -->

                    <!-- Update 3 -->
                    <div class="block">
                        <div class="block-header">
                            <ul class="block-options">
                                <li class="dropdown">
                                    <button type="button" data-toggle="dropdown">
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right font-s13">
                                        <li>
                                            <a tabindex="-1" href="javascript:void(0)">
                                                <i class="fa fa-times text-danger push-5-r"></i>
                                                Hide similar posts
                                            </a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="javascript:void(0)">
                                                <i class="fa fa-thumbs-down text-warning push-5-r"></i>
                                                Stop following this user
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a tabindex="-1" href="javascript:void(0)">
                                                <i class="fa fa-warning push-5-r"></i>
                                                Report this post
                                            </a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="javascript:void(0)">
                                                <i class="fa fa-bookmark push-5-r"></i>
                                                Bookmark this post
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="clearfix">
                                <div class="pull-left push-15-r">
                                    <img class="img-avatar img-avatar48" src="assets/img/avatars/avatar13.jpg" alt="">
                                </div>
                                <div class="push-5-t">
                                    <a class="font-w600" href="javascript:void(0)">Adam Hall</a><br>
                                    <span class="font-s12 text-muted">1 day ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <p class="push-10 pull-t">Photos from our last trip! We had a great time!</p>
                            <!-- Gallery (.js-gallery class is initialized in App() -> uiHelperMagnific()) -->
                            <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                            <div class="row js-gallery">
                                <div class="col-xs-6">
                                    <a class="img-link" href="assets/img/photos/photo25@2x.jpg">
                                        <img class="img-responsive" src="assets/img/photos/photo25.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    <a class="img-link" href="assets/img/photos/photo27@2x.jpg">
                                        <img class="img-responsive" src="assets/img/photos/photo27.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <div class="row text-center font-s13">
                                <div class="col-xs-4">
                                    <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                        <i class="fa fa-thumbs-up push-5-r"></i>
                                        <span class="hidden-xs">Like!</span>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                        <i class="fa fa-comment push-5-r"></i>
                                        <span class="hidden-xs">Comment</span>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                        <i class="fa fa-share-alt push-5-r"></i>
                                        <span class="hidden-xs">Share</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-full bg-gray-lighter">
                            <!-- Comments -->
                            <div class="media push-15">
                                <div class="media-left">
                                    <a href="javascript:void(0)">
                                        <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar4.jpg" alt="">
                                    </a>
                                </div>
                                <div class="media-body font-s13">
                                    <a class="font-w600" href="javascript:void(0)">Emma Cooper</a>
                                    <div class="push-5">Awesome photos!</div>
                                    <div class="font-s12">
                                        <a href="javascript:void(0)">Like!</a> -
                                        <a href="javascript:void(0)">Reply</a> -
                                        <span class="text-muted"><em>1 day ago</em></span>
                                    </div>
                                </div>
                            </div>
                            <!-- END Comments -->

                            <!-- Post Comment -->
                            <form class="form-horizontal" action="base_ui_timeline_social.html" method="post" onsubmit="return false;">
                                <input class="form-control" type="text" placeholder="Write a comment..">
                            </form>
                            <!-- END Post Comment -->
                        </div>
                    </div>
                    <!-- END Update 3 -->

                    <!-- Update 4 -->
                    <div class="block">
                        <div class="block-header">
                            <ul class="block-options">
                                <li class="dropdown">
                                    <button type="button" data-toggle="dropdown">
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right font-s13">
                                        <li>
                                            <a tabindex="-1" href="javascript:void(0)">
                                                <i class="fa fa-times text-danger push-5-r"></i>
                                                Hide similar posts
                                            </a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="javascript:void(0)">
                                                <i class="fa fa-thumbs-down text-warning push-5-r"></i>
                                                Stop following this user
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a tabindex="-1" href="javascript:void(0)">
                                                <i class="fa fa-warning push-5-r"></i>
                                                Report this post
                                            </a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="javascript:void(0)">
                                                <i class="fa fa-bookmark push-5-r"></i>
                                                Bookmark this post
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="clearfix">
                                <div class="pull-left push-15-r">
                                    <img class="img-avatar img-avatar48" src="assets/img/avatars/avatar5.jpg" alt="">
                                </div>
                                <div class="push-5-t">
                                    <a class="font-w600" href="javascript:void(0)">Linda Moore</a><br>
                                    <span class="font-s12 text-muted">3 days ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <p class="push-10 pull-t">Get started with HTML!</p>
                            <pre class="pre-sh"><code class="html">&lt;!doctype html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;

        &lt;title&gt;Title&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- Your content --&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
                            <hr>
                            <div class="row text-center font-s13">
                                <div class="col-xs-4">
                                    <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                        <i class="fa fa-thumbs-up push-5-r"></i>
                                        <span class="hidden-xs">Like!</span>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                        <i class="fa fa-comment push-5-r"></i>
                                        <span class="hidden-xs">Comment</span>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                        <i class="fa fa-share-alt push-5-r"></i>
                                        <span class="hidden-xs">Share</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-full bg-gray-lighter">
                            <!-- Post Comment -->
                            <form class="form-horizontal" action="base_ui_timeline_social.html" method="post" onsubmit="return false;">
                                <input class="form-control" type="text" placeholder="Write a comment..">
                            </form>
                            <!-- END Post Comment -->
                        </div>
                    </div>
                    <!-- END Update 4 -->
                    <!-- END Social Timeline -->
                </div>
                <div class="col-sm-12 col-lg-3">
                    <!-- Suggestions -->
                    <div class="block block-bordered block-rounded">
                        <div class="block-content">
                            <div class="push-10">
                                <img class="img-responsive" src="assets/img/photos/photo2.jpg" alt="">
                            </div>
                            <div class="push-10 clearfix">
                                <a class="btn btn-default pull-right push-10-l" href="javascript:void(0)"><i class="fa fa-plus"></i></a>
                                <a class="font-w600" href="javascript:void(0)">Best Travel Photos</a>
                                <div class="font-s12 text-muted">19k Members</div>
                            </div>
                        </div>
                    </div>
                    <div class="block block-bordered block-rounded">
                        <div class="block-content">
                            <div class="push-10">
                                <img class="img-responsive" src="assets/img/photos/photo6.jpg" alt="">
                            </div>
                            <div class="push-10 clearfix">
                                <a class="btn btn-default pull-right push-10-l" href="javascript:void(0)"><i class="fa fa-plus"></i></a>
                                <a class="font-w600" href="javascript:void(0)">Mountain Lovers</a>
                                <div class="font-s12 text-muted">59k Members</div>
                            </div>
                        </div>
                    </div>
                    <!-- END Suggestions -->
                </div>
            </div>
            <!-- END Main Content -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
        <div class="pull-right">
            Crafted with <i class="fa fa-heart text-city"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
        </div>
        <div class="pull-left">
            <a class="font-w600" href="http://goo.gl/6LF10W" target="_blank">OneUI 3.2</a> &copy; <span class="js-year-copy"></span>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!-- Apps Modal -->
<!-- Opens from the button in the header -->
<div class="modal fade" id="apps-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-sm modal-dialog modal-dialog-top">
        <div class="modal-content">
            <!-- Apps Block -->
            <div class="block block-themed block-transparent">
                <div class="block-header bg-primary-dark">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Apps</h3>
                </div>
                <div class="block-content">
                    <div class="row text-center">
                        <div class="col-xs-6">
                            <a class="block block-rounded" href="base_pages_dashboard.html">
                                <div class="block-content text-white bg-default">
                                    <i class="si si-speedometer fa-2x"></i>
                                    <div class="font-w600 push-15-t push-15">Backend</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <a class="block block-rounded" href="frontend_home.html">
                                <div class="block-content text-white bg-modern">
                                    <i class="si si-rocket fa-2x"></i>
                                    <div class="font-w600 push-15-t push-15">Frontend</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Apps Block -->
        </div>
    </div>
</div>
<!-- END Apps Modal -->

<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/core/jquery.slimscroll.min.js"></script>
<script src="assets/js/core/jquery.scrollLock.min.js"></script>
<script src="assets/js/core/jquery.appear.min.js"></script>
<script src="assets/js/core/jquery.countTo.min.js"></script>
<script src="assets/js/core/jquery.placeholder.min.js"></script>
<script src="assets/js/core/js.cookie.min.js"></script>
<script src="assets/js/app.js"></script>

<!-- Page JS Plugins -->
<script src="assets/js/plugins/magnific-popup/magnific-popup.min.js"></script>
<script src="assets/js/plugins/highlightjs/highlight.pack.js"></script>

<!-- Page JS Code -->
<script>
  jQuery(function () {
    // Init page helpers (Magnific Popup + Highlight.js plugin)
    App.initHelpers(['magnific-popup', 'highlightjs']);
  });
</script>
</body>
</html>