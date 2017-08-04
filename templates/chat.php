<?php
require "../includes/common.inc.php";
//判断是否登录了
if($_SESSION['username']){
    //写短信
    if($_GET['action'] == "write"){
        $message = [];
        $message['toUser'] = $_POST['toUser'];
        $message['formUser'] = $_SESSION['username'];
        $message['content'] = $_POST['content'];
        $sql1 = "INSERT INTO chat
(
chat_toUser,
chat_fromUser,
chat_content,
chat_date
)
VALUE 
(
'{$message['toUser']}',
'{$message['formUser']}',
'{$message['content']}',
NOW()
)
";
        if ($conn->query($sql1) === TRUE) {
            echo "<script>alert('新记录插入成功');window.location.href='contacts.php'</script>";
        } else {
            exit( "Error: " . $sql . "<br>" . $conn->error );
        }

        exit();
    }
    //获取数据
    if(isset($_GET['id'])){
        $sql = "SELECT username FROM user WHERE id='{$_GET['id']}' LIMIT 1";
        $res = $conn->query($sql);
        $rows = $res->fetch_assoc();
        if($rows){
            $html = [];
            $html['toUser'] = $rows['username'];
            $html = _html($html);
        }else{
            echo "<script>alert('不存在此用户1');window.location.href='contacts.php'</script>";
        }
    }else{
        echo "<script>alert('不存在此用户2');window.location.href='contacts.php'</script>";
    }
}else{
    echo "<script>alert('未登录');window.location.href='login.php'</script>";
}
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
                            <span class="font-w600 push-10-l">Craig Stone</span>
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
                                                <img class="img-avatar" src="assets/img/avatars/avatar2.jpg" alt="">
                                                <i class="fa fa-circle text-success"></i> Evelyn Willis
                                                <div class="font-w400 text-muted"><small>Copywriter</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="base_pages_profile.html">
                                                <img class="img-avatar" src="assets/img/avatars/avatar16.jpg" alt="">
                                                <i class="fa fa-circle text-success"></i> Ryan Hall
                                                <div class="font-w400 text-muted"><small>Web Developer</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="base_pages_profile.html">
                                                <img class="img-avatar" src="assets/img/avatars/avatar5.jpg" alt="">
                                                <i class="fa fa-circle text-success"></i> Lisa Gordon
                                                <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="base_pages_profile.html">
                                                <img class="img-avatar" src="assets/img/avatars/avatar6.jpg" alt="">
                                                <i class="fa fa-circle text-warning"></i> Evelyn Willis
                                                <div class="font-w400 text-muted"><small>Photographer</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="base_pages_profile.html">
                                                <img class="img-avatar" src="assets/img/avatars/avatar9.jpg" alt="">
                                                <i class="fa fa-circle text-warning"></i> Donald Barnes
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
        <!-- Chat layout and demo functionality is initialized in js/pages/base_ui_chat.js -->
        <!--
            You can use the following JS function to add a message to a chat window:

            BaseUIChat.addMessage($chatId, $chatMsg, $chatMsgLevel)

            $chatId         : the data-chat-id attribute of your chat window
            $chatMsg        : the message you would like to add
            $chatMsgLevel   : 'self' the user sends the message, '' empty if the user receives the message (changes its style)
        -->
        <div class="js-chat-container content content-full" data-chat-mode="full">
            <!-- Full Chat -->
            <div class="block remove-margin-b">
                <ul class="js-chat-head nav nav-tabs" data-toggle="tabs">
                    <li class="active">
                        <a href="#chat-window1">
                            <img class="img-avatar img-avatar16" src="assets/img/avatars/avatar3.jpg" alt="">
                            <span class="push-5-l"><?php echo $html['toUser']?></span>
                        </a>
                    </li>
                    <li>
                        <a href="#chat-window2">
                            <img class="img-avatar img-avatar16" src="assets/img/avatars/avatar10.jpg" alt="">
                            <span class="push-5-l">John</span>
                        </a>
                    </li>
                    <li class="pull-right">
                        <a href="#chat-people">
                            <i class="si si-users"></i>
                        </a>
                    </li>
                </ul>
                <div class="tab-content overflow-hidden">
                    <!-- Chat Window 1 -->
                    <div class="tab-pane fade in active" id="chat-window1">
                        <div class="js-chat-talk overflow-y-auto block-content block-content-full" data-chat-id="1">
                            <!-- Messages -->
<!--                            <div class="font-s12 text-muted text-center push-20-t push-15"><em>Yesterday</em></div>-->
<!--                            <div class="block block-rounded block-transparent push-15 push-50-l">-->
<!--                                <div class="block-content block-content-full block-content-mini bg-gray-lighter">Hi there!</div>-->
<!--                            </div>-->
<!--                            <div class="block block-rounded block-transparent push-15 push-50-l">-->
<!--                                <div class="block-content block-content-full block-content-mini bg-gray-lighter">How are you?</div>-->
<!--                            </div>-->
<!--                            <div class="font-s12 text-muted text-center push-20-t push-10"><em>Today</em></div>-->
<!--                            <div class="block block-rounded block-transparent push-15 push-50-r">-->
<!--                                <div class="block-content block-content-full block-content-mini bg-gray-light">I'm fine, thanks! I hope you are doing great, too!</div>-->
<!--                            </div>-->
                            <!-- END Messages -->
                        </div>
                        <div class="block-content block-content-full block-content-mini">
                            <form action="chat.php?action=write" method="post">
                                <input type="hidden" value="<?php echo $html['toUser']?>" name="toUser">
                                <input class="js-chat-input form-control" type="text" data-target-chat-id="1" placeholder="Type a message and hit enter.." name="content">
                            </form>
                        </div>
                    </div>
                    <!-- END Chat Window 1 -->

                    <!-- Chat Window 2 -->
                    <div class="tab-pane fade" id="chat-window2">
                        <div class="js-chat-talk overflow-y-auto block-content block-content-full" data-chat-id="2">
                            <!-- Messages -->
                            <div class="font-s12 text-muted text-center push-20-t push-15"><em>3 hours ago</em></div>
                            <div class="block block-rounded block-transparent push-15 push-50-l">
                                <div class="block-content block-content-full block-content-mini bg-gray-lighter">Hi Admin!</div>
                            </div>
                            <div class="block block-rounded block-transparent push-15 push-50-l">
                                <div class="block-content block-content-full block-content-mini bg-gray-lighter">Can you help me out?</div>
                            </div>
                            <div class="block block-rounded block-transparent push-15 push-50-l">
                                <div class="block-content block-content-full block-content-mini bg-gray-lighter">I'm building a new app and I would like your opinion!</div>
                            </div>
                            <div class="font-s12 text-muted text-center push-20-t push-10"><em>1 hour ago</em></div>
                            <div class="block block-rounded block-transparent push-15 push-50-r">
                                <div class="block-content block-content-full block-content-mini bg-gray-light">Hey John, sure thing, feel free to let me know!</div>
                            </div>
                            <!-- END Messages -->
                        </div>
                        <div class="js-chat-form block-content block-content-full block-content-mini">
                            <form action="?action=write" method="post">
                                <input class="js-chat-input form-control" type="text" data-target-chat-id="2" placeholder="Type a message and hit enter..">
                            </form>
                        </div>
                    </div>
                    <!-- END Chat Window 2 -->

                    <!-- People -->
                    <div class="tab-pane fade fade-up" id="chat-people">
                        <div class="js-chat-people overflow-y-auto block-content block-content-full">
                            <div class="row remove-margin">
                                <div class="col-sm-4">
                                    <h3 class="text-success push-20-t push">Online</h3>
                                    <ul class="nav-users push-10-t push">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-avatar" src="assets/img/avatars/avatar3.jpg" alt="">
                                                <i class="fa fa-circle text-success"></i> Sara Holland
                                                <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-avatar" src="assets/img/avatars/avatar13.jpg" alt="">
                                                <i class="fa fa-circle text-success"></i> Ethan Howard
                                                <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-avatar" src="assets/img/avatars/avatar5.jpg" alt="">
                                                <i class="fa fa-circle text-success"></i> Ashley Welch
                                                <div class="font-w400 text-muted"><small>Photographer</small></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <h3 class="text-warning push-20-t push">Away</h3>
                                    <ul class="nav-users push-10-t push">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-avatar" src="assets/img/avatars/avatar2.jpg" alt="">
                                                <i class="fa fa-circle text-warning"></i> Amber Walker
                                                <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-avatar" src="assets/img/avatars/avatar12.jpg" alt="">
                                                <i class="fa fa-circle text-warning"></i> Joshua Munoz
                                                <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-avatar" src="assets/img/avatars/avatar6.jpg" alt="">
                                                <i class="fa fa-circle text-warning"></i> Susan Elliott
                                                <div class="font-w400 text-muted"><small>Photographer</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-avatar" src="assets/img/avatars/avatar12.jpg" alt="">
                                                <i class="fa fa-circle text-warning"></i> Eugene Burke
                                                <div class="font-w400 text-muted"><small>Web Developer</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-avatar" src="assets/img/avatars/avatar1.jpg" alt="">
                                                <i class="fa fa-circle text-warning"></i> Denise Watson
                                                <div class="font-w400 text-muted"><small>Photographer</small></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <h3 class="text-muted push-20-t push">Offline</h3>
                                    <ul class="nav-users push-10-t push">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-avatar" src="assets/img/avatars/avatar1.jpg" alt="">
                                                <i class="fa fa-circle text-muted"></i> Amber Walker
                                                <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-avatar" src="assets/img/avatars/avatar15.jpg" alt="">
                                                <i class="fa fa-circle text-muted"></i> Donald Barnes
                                                <div class="font-w400 text-muted"><small>Web Developer</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-avatar" src="assets/img/avatars/avatar5.jpg" alt="">
                                                <i class="fa fa-circle text-muted"></i> Susan Elliott
                                                <div class="font-w400 text-muted"><small>Photographer</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-avatar" src="assets/img/avatars/avatar15.jpg" alt="">
                                                <i class="fa fa-circle text-muted"></i> Bruce Edwards
                                                <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-avatar" src="assets/img/avatars/avatar5.jpg" alt="">
                                                <i class="fa fa-circle text-muted"></i> Amber Walker
                                                <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-avatar" src="assets/img/avatars/avatar14.jpg" alt="">
                                                <i class="fa fa-circle text-muted"></i> Joshua Munoz
                                                <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-avatar" src="assets/img/avatars/avatar5.jpg" alt="">
                                                <i class="fa fa-circle text-muted"></i> Amanda Powell
                                                <div class="font-w400 text-muted"><small>Web Developer</small></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END People -->
                </div>
            </div>
            <!-- END Full Chat -->
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

<!-- Page JS Code -->
<script src="assets/js/pages/base_ui_chat.js"></script>
</body>
</html>