<?php
require "../includes/common.inc.php";
if($_SESSION['username']){
    $sql = "SELECT * FROM user WHERE username='{$_SESSION['username']}'";
    $res = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_assoc($res);
    if($rows){
        $arr = [];
        $arr['id'] = $rows['id'];
        $arr['username'] = $rows['username'];
        $arr['sex'] = $rows['sex'];
        $arr['email'] = $rows['email'];
        $arr['date'] = $rows['date'];
        $arr['phone'] = $rows['phone'];
        switch($rows['level']){
            case 0:
                $arr['level'] = "普通用户";
                break;
            case 1:
                $arr['level'] = "管理员";
                break;
            default:
                $arr['level'] = "出错了";
        }
        $arr = _html($arr);
    }else{
        echo "<script>alert('此用户不存在');window.location.href='login.php'</script>";
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

    <!-- Contact Edit Modal -->
    <div class="modal fade" id="modal-contact-edit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-popout">
            <div class="modal-content">
                <div class="block block-themed block-transparent remove-margin-b">
                    <div class="block-header bg-primary-dark">
                        <ul class="block-options">
                            <li>
                                <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title"><i class="fa fa-user-circle push-5-r"></i> Edit Contact</h3>
                    </div>
                    <div class="block-content">
                        <form class="form-horizontal push-10-t push-10" action="../app/modify_ing.php" method="post">
                            <input class="form-control" type="hidden" id="modify-id" name="modify-id" value="<?php echo $arr['id']?>">
                            <!--                        <div class="form-group">-->
                            <!--                            <div class="col-sm-8 col-sm-offset-2">-->
                            <!--                                <div class="push">-->
                            <!--                                    <img class="img-avatar" src="assets/img/avatars/avatar15.jpg" alt="">-->
                            <!--                                </div>-->
                            <!--                                <label for="contact-avatar">Select new avatar</label>-->
                            <!--                                <input type="file" id="contact-avatar" name="contact-avatar">-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <div class="form-group push-50-t">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material form-material-primary floating input-group">
                                        <input class="form-control" type="password" id="modify-password" name="modify-password" value="<?php echo $arr['password']?>">
                                        <label for="contact-name">密码</label>
                                        <span class="input-group-addon"><i class="si si-user"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material form-material-primary floating input-group">
                                        <input class="form-control" type="email" id="modify-email" name="modify-email" value="<?php echo $arr['email']?>">
                                        <label for="contact-email">邮箱</label>
                                        <span class="input-group-addon"><i class="si si-envelope-open"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material form-material-primary floating input-group">
                                        <input class="form-control" type="text" id="modify-phone" name="modify-phone" value="<?php echo $arr['phone']?>">
                                        <label for="contact-phone">手机</label>
                                        <span class="input-group-addon"><i class="si si-screen-smartphone"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group push-50-t">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material form-material-primary floating input-group">
                                        <input class="form-control" type="text" id="contact-facebook" name="contact-facebook" value="https://facebook.com/user.one.ui">
                                        <label for="contact-facebook">Facebook</label>
                                        <span class="input-group-addon"><i class="si si-social-facebook"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material form-material-primary floating input-group">
                                        <input class="form-control" type="text" id="contact-twitter" name="contact-twitter" value="https://twitter.com/user.one.ui">
                                        <label for="contact-twitter">Twitter</label>
                                        <span class="input-group-addon"><i class="si si-social-twitter"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material form-material-primary floating input-group">
                                        <input class="form-control" type="text" id="contact-youtube" name="contact-youtube" value="https://youtube.com/user.one.ui">
                                        <label for="contact-youtube">Youtube</label>
                                        <span class="input-group-addon"><i class="si si-social-youtube"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group push-50-t">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material form-material-primary floating">
                                        <select class="form-control" id="modify-sex" name="modify-sex" size="1">
                                            <option value="<?php echo $arr['sex']?>"  selected><?php echo $arr['sex']?></option>
                                            <option value="男">男</option>
                                            <option value="女">女</option>
                                        </select>
                                        <label for="contact-work-title">性别</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-material form-material-primary floating">
                                        <select class="form-control" id="contact-category" name="contact-category" size="1">
                                            <option value="1" selected>Friends</option>
                                            <option value="2">Work</option>
                                            <option value="3">Family</option>
                                        </select>
                                        <label for="contact-category">Category</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-check push-5-r"></i>修改</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Contact Edit Modal -->


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
                            <span class="font-w600 push-10-l">Jack Greene</span>
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
                                                        <img class="img-avatar" src="assets/img/avatars/avatar3.jpg" alt="">
                                                        <i class="fa fa-circle text-success"></i> Lisa Gordon
                                                        <div class="font-w400 text-muted"><small>Copywriter</small></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar9.jpg" alt="">
                                                        <i class="fa fa-circle text-success"></i> Ethan Howard
                                                        <div class="font-w400 text-muted"><small>Web Developer</small></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar3.jpg" alt="">
                                                        <i class="fa fa-circle text-success"></i> Linda Moore
                                                        <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar3.jpg" alt="">
                                                        <i class="fa fa-circle text-warning"></i> Judy Alvarez
                                                        <div class="font-w400 text-muted"><small>Photographer</small></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar10.jpg" alt="">
                                                        <i class="fa fa-circle text-warning"></i> Ronald George
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

            <?php require '../includes/header.inc.php'?>

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content content-boxed">
                    <!-- User Header -->
                    <div class="block">
                        <!-- Basic Info -->
                        <div class="bg-image" style="background-image: url('assets/img/photos/photo6@2x.jpg');">
                            <div class="block-content bg-primary-dark-op text-center overflow-hidden">
                                <div class="push-30-t push animated fadeInDown">
                                    <img class="img-avatar img-avatar96 img-avatar-thumb" src="assets/img/avatars/avatar4.jpg" alt="">
                                </div>
                                <div class="push-30 animated fadeInUp">
                                    <h2 class="h4 font-w600 text-white push-5"><?php echo $arr['level']?></h2>
                                    <h3 class="h5 text-gray"><?php echo $arr['username']?></h3>
                                </div>
                            </div>
                        </div>
                        <!-- END Basic Info -->

                        <!-- Stats -->
                        <div class="block-content text-center">
                            <div class="row items-push text-uppercase">
                                <div class="col-xs-6 col-sm-3">
                                    <div class="font-w700 text-gray-darker animated fadeIn">Sales</div>
                                    <a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">22000</a>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="font-w700 text-gray-darker animated fadeIn">Products</div>
                                    <a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">16</a>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="font-w700 text-gray-darker animated fadeIn">Followers</div>
                                    <a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">2600</a>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="font-w700 text-gray-darker animated fadeIn">3603 Ratings</div>
                                    <div class="text-warning push-10-t animated flipInX">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Stats -->
                    </div>
                    <!-- END User Header -->

                    <!-- Main Content -->
                    <div class="row">
                        <div class="col-sm-5 col-sm-push-7 col-lg-4 col-lg-push-8">
                            <!-- Follow -->
                            <div class="block">
                                <div class="block-content block-content-full text-center">
                                    <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#modal-contact-edit"><i class="fa fa-fw fa-plus text-success"></i> 修改资料</button>
                                    <button class="btn btn-sm btn-default"><i class="fa fa-fw fa-inbox text-info"></i> Send Message</button>
                                </div>
                            </div>
                            <!-- END Follow -->

                            <!-- About -->
                            <div class="block">
                                <div class="block-content">
                                    <p>Hi there, welcome to my profile!</p>
                                    <p>I'm a web designer and I love creating stuff that solve problems and make your life easier. Feel free to follow me to know more about me and my projects. Thanks for stopping by, wish you a great day!</p>
                                </div>
                            </div>
                            <!-- END About -->

                            <!-- Followers -->
                            <div class="block block-opt-refresh-icon6">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title"><i class="fa fa-fw fa-share-alt"></i> Followers</h3>
                                </div>
                                <div class="block-content">
                                    <ul class="nav-users push">
                                        <li>
                                            <a href="base_pages_profile.html">
                                                <img class="img-avatar" src="assets/img/avatars/avatar10.jpg" alt="">
                                                <i class="fa fa-circle text-success"></i> George Stone
                                                <div class="font-w400 text-muted"><small>Web Developer</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="base_pages_profile.html">
                                                <img class="img-avatar" src="assets/img/avatars/avatar4.jpg" alt="">
                                                <i class="fa fa-circle text-warning"></i> Linda Moore
                                                <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="base_pages_profile.html">
                                                <img class="img-avatar" src="assets/img/avatars/avatar5.jpg" alt="">
                                                <i class="fa fa-circle text-danger"></i> Amy Hunter
                                                <div class="font-w400 text-muted"><small>Photographer</small></div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="text-center push">
                                        <small><a href="javascript:void(0)">Load More..</a></small>
                                    </div>
                                </div>
                            </div>
                            <!-- END Followers -->

                            <!-- Products -->
                            <div class="block block-opt-refresh-icon6">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title"><i class="fa fa-fw fa-briefcase"></i> Products</h3>
                                </div>
                                <div class="block-content">
                                    <ul class="list list-simple list-li-clearfix">
                                        <li>
                                            <a class="item item-rounded pull-left push-10-r bg-info" href="javascript:void(0)">
                                                <i class="si si-rocket text-white-op"></i>
                                            </a>
                                            <h5 class="push-10-t">MyPanel</h5>
                                            <div class="font-s13">Responsive App Template</div>
                                        </li>
                                        <li>
                                            <a class="item item-rounded pull-left push-10-r bg-amethyst" href="javascript:void(0)">
                                                <i class="si si-calendar text-white-op"></i>
                                            </a>
                                            <h5 class="push-10-t">Project Time</h5>
                                            <div class="font-s13">Web application</div>
                                        </li>
                                        <li>
                                            <a class="item item-rounded pull-left push-10-r bg-danger" href="javascript:void(0)">
                                                <i class="si si-speedometer text-white-op"></i>
                                            </a>
                                            <h5 class="push-10-t">iDashboard</h5>
                                            <div class="font-s13">Bootstrap Admin Template</div>
                                        </li>
                                    </ul>
                                    <div class="text-center push">
                                        <small><a href="javascript:void(0)">View More..</a></small>
                                    </div>
                                </div>
                            </div>
                            <!-- END Products -->

                            <!-- Ratings -->
                            <div class="block block-opt-refresh-icon6">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title"><i class="fa fa-fw fa-star"></i> Ratings</h3>
                                </div>
                                <div class="block-content">
                                    <ul class="list list-simple">
                                        <li>
                                            <div class="push-5 clearfix">
                                                <div class="text-warning pull-right">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <a class="font-w600" href="base_pages_profile.html">Laura Bell</a>
                                                <span class="text-muted">(5/5)</span>
                                            </div>
                                            <div class="font-s13">Flawless design execution! I'm really impressed with the product, it really helped me build my app so fast! Thank you!</div>
                                        </li>
                                        <li>
                                            <div class="push-5 clearfix">
                                                <div class="text-warning pull-right">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <a class="font-w600" href="base_pages_profile.html">Tiffany Kim</a>
                                                <span class="text-muted">(5/5)</span>
                                            </div>
                                            <div class="font-s13">Great value for money and awesome support! Would buy again and again! Thanks!</div>
                                        </li>
                                        <li>
                                            <div class="push-5 clearfix">
                                                <div class="text-warning pull-right">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <a class="font-w600" href="base_pages_profile.html">Amy Hunter</a>
                                                <span class="text-muted">(5/5)</span>
                                            </div>
                                            <div class="font-s13">Working great in all my devices, quality and quantity in a great package! Thank you!</div>
                                        </li>
                                    </ul>
                                    <div class="text-center push">
                                        <small><a href="javascript:void(0)">Read More..</a></small>
                                    </div>
                                </div>
                            </div>
                            <!-- END Ratings -->
                        </div>
                        <div class="col-sm-7 col-sm-pull-5 col-lg-8 col-lg-pull-4">
                            <!-- Timeline -->
                            <div class="block block-opt-refresh-icon6">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                        </li>
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title"><i class="fa fa-newspaper-o"></i> Updates</h3>
                                </div>
                                <div class="block-content">
                                    <!-- Facebook Notification -->
                                    <div class="block block-transparent pull-r-l">
                                        <div class="block-header bg-gray-lighter">
                                            <ul class="block-options">
                                                <li>
                                                    <span><em class="text-muted">3 hrs ago</em></span>
                                                </li>
                                                <li>
                                                    <span><i class="fa fa-facebook text-primary"></i></span>
                                                </li>
                                            </ul>
                                            <h3 class="block-title">+ 290 Page Likes</h3>
                                        </div>
                                        <div class="block-content">
                                            <p class="font-s13">This is great, keep it up!</p>
                                        </div>
                                    </div>
                                    <!-- END Facebook Notification -->

                                    <!-- Generic Notification -->
                                    <div class="block block-transparent pull-r-l">
                                        <div class="block-header bg-gray-lighter">
                                            <ul class="block-options">
                                                <li>
                                                    <span><em class="text-muted">4 hrs ago</em></span>
                                                </li>
                                                <li>
                                                    <span><i class="fa fa-briefcase text-modern"></i></span>
                                                </li>
                                            </ul>
                                            <h3 class="block-title">3 New Products were added!</h3>
                                        </div>
                                        <div class="block-content block-content-full">
                                            <a class="item item-rounded push-10-r bg-info" data-toggle="tooltip" title="MyPanel" href="javascript:void(0)">
                                                <i class="si si-rocket text-white-op"></i>
                                            </a>
                                            <a class="item item-rounded push-10-r bg-amethyst" data-toggle="tooltip" title="Project Time" href="javascript:void(0)">
                                                <i class="si si-calendar text-white-op"></i>
                                            </a>
                                            <a class="item item-rounded push-10-r bg-city" data-toggle="tooltip" title="iDashboard" href="javascript:void(0)">
                                                <i class="si si-speedometer text-white-op"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Generic Notification -->

                                    <!-- Twitter Notification -->
                                    <div class="block block-transparent pull-r-l">
                                        <div class="block-header bg-gray-lighter">
                                            <ul class="block-options">
                                                <li>
                                                    <span><em class="text-muted">12 hrs ago</em></span>
                                                </li>
                                                <li>
                                                    <span><i class="fa fa-twitter text-info"></i></span>
                                                </li>
                                            </ul>
                                            <h3 class="block-title">+ 1150 Followers</h3>
                                        </div>
                                        <div class="block-content">
                                            <p class="font-s13">You’re getting more and more followers, keep it up!</p>
                                        </div>
                                    </div>
                                    <!-- END Twitter Notification -->

                                    <!-- System Notification -->
                                    <div class="block block-transparent pull-r-l">
                                        <div class="block-header bg-gray-lighter">
                                            <ul class="block-options">
                                                <li>
                                                    <span><em class="text-muted">1 day ago</em></span>
                                                </li>
                                                <li>
                                                    <span><i class="fa fa-database text-smooth"></i></span>
                                                </li>
                                            </ul>
                                            <h3 class="block-title">Database backup completed!</h3>
                                        </div>
                                        <div class="block-content">
                                            <p class="font-s13">Download the <a href="javascript:void(0)">latest backup</a>.</p>
                                        </div>
                                    </div>
                                    <!-- END System Notification -->

                                    <!-- Social Notification -->
                                    <div class="block block-transparent pull-r-l">
                                        <div class="block-header bg-gray-lighter">
                                            <ul class="block-options">
                                                <li>
                                                    <span><em class="text-muted">2 days ago</em></span>
                                                </li>
                                                <li>
                                                    <span><i class="fa fa-user-plus text-success"></i></span>
                                                </li>
                                            </ul>
                                            <h3 class="block-title">+ 5 Friend Requests</h3>
                                        </div>
                                        <div class="block-content">
                                            <ul class="nav-users push">
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar3.jpg" alt="">
                                                        <i class="fa fa-circle text-success"></i> Evelyn Willis
                                                        <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar11.jpg" alt="">
                                                        <i class="fa fa-circle text-success"></i> Scott Ruiz
                                                        <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar4.jpg" alt="">
                                                        <i class="fa fa-circle text-warning"></i> Julia Cole
                                                        <div class="font-w400 text-muted"><small>Photographer</small></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar12.jpg" alt="">
                                                        <i class="fa fa-circle text-warning"></i> Bruce Edwards
                                                        <div class="font-w400 text-muted"><small>Copywriter</small></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar12.jpg" alt="">
                                                        <i class="fa fa-circle text-danger"></i> Eugene Burke
                                                        <div class="font-w400 text-muted"><small>UI Designer</small></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- END Social Notification -->

                                    <!-- System Notification -->
                                    <div class="block block-transparent pull-r-l">
                                        <div class="block-header bg-gray-lighter">
                                            <ul class="block-options">
                                                <li>
                                                    <span><em class="text-muted">1 week ago</em></span>
                                                </li>
                                                <li>
                                                    <span><i class="fa fa-cog text-primary-dark"></i></span>
                                                </li>
                                            </ul>
                                            <h3 class="block-title">System updated to v2.02</h3>
                                        </div>
                                        <div class="block-content">
                                            <p class="font-s13">Check the complete changelog at the <a href="javascript:void(0)">activity page</a>.</p>
                                        </div>
                                    </div>
                                    <!-- END System Notification -->

                                    <!-- Generic Notification -->
                                    <div class="block block-transparent pull-r-l">
                                        <div class="block-header bg-gray-lighter">
                                            <ul class="block-options">
                                                <li>
                                                    <span><em class="text-muted">2 weeks ago</em></span>
                                                </li>
                                                <li>
                                                    <span><i class="fa fa-briefcase text-modern"></i></span>
                                                </li>
                                            </ul>
                                            <h3 class="block-title">1 New Product was added!</h3>
                                        </div>
                                        <div class="block-content block-content-full">
                                            <a class="item item-rounded push-10-r bg-modern" data-toggle="tooltip" title="eSettings" href="javascript:void(0)">
                                                <i class="si si-settings text-white-op"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Generic Notification -->

                                    <!-- System Notification -->
                                    <div class="block block-transparent pull-r-l">
                                        <div class="block-header bg-gray-lighter">
                                            <ul class="block-options">
                                                <li>
                                                    <span><em class="text-muted">2 months ago</em></span>
                                                </li>
                                                <li>
                                                    <span><i class="fa fa-cog text-primary-dark"></i></span>
                                                </li>
                                            </ul>
                                            <h3 class="block-title">System updated to v2.01</h3>
                                        </div>
                                        <div class="block-content">
                                            <p class="font-s13">Check the complete changelog at the <a href="javascript:void(0)">activity page</a>.</p>
                                        </div>
                                    </div>
                                    <!-- END System Notification -->
                                </div>
                            </div>
                            <!-- END Timeline -->
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
    </body>
</html>