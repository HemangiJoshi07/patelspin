<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/codefox/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jun 2019 10:08:39 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Codefox - Responsive Bootstrap 4 Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- C3 charts css -->
        <link href="plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />
        <link href="plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />

        <link href="plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/fixedHeader.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/scroller.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/summernote/summernote-bs4.css" rel="stylesheet" />
        <script src="assets/js/modernizr.min.js"></script>
        
       
    </head>


    <body>
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <!--<a href="index.html" class="logo"><span>Code<span>Fox</span></span><i class="mdi mdi-layers"></i></a>-->
                    <!-- Image logo -->
                    <a href="index.html" class="logo">
                        <span>
                            <img src="assets/images/logo.png" alt="" height="20">
                        </span>
                        <i>
                            <img src="assets/images/logo_sm.png" alt="" height="28">
                        </i>
                    </a>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">

                        <!-- Navbar-left -->
                        <ul class="nav navbar-left">
                            <li>
                                <button type="button" class="button-menu-mobile open-left waves-effect">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>

                            <li class="d-none d-sm-block lang-option">
                                <select class="selectpicker form-control" title="" data-width="110px">
                                    <option> English </option>
                                    <option> French </option>
                                    <option> Germany </option>
                                    <option> Spanish</option>
                                </select>
                            </li>
                        </ul>

                        <!-- Right(Notification) -->
                        <ul class="nav navbar-right list-inline">
                            <li class="d-none d-sm-block list-inline-item">
                                <form role="search" class="app-search">
                                    <input type="text" placeholder="Search..."
                                           class="form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                            <li class="list-inline-item">
                                <div class="dropdown">
                                    <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                        <i class="dripicons-bell"></i>
                                        <span class="badge badge-pill badge-pink">4</span>
                                    </a>
    
                                    <ul class="dropdown-menu dropdown-menu-right dropdown-lg user-list notify-list">
                                        <li class="list-group notification-list m-b-0">
                                            <div class="slimscroll">
                                                <!-- list item-->
                                                <a href="javascript:void(0);" class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left p-r-10">
                                                        <em class="fa fa-diamond bg-primary"></em>
                                                        </div>
                                                        <div class="media-body">
                                                        <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                        <p class="m-0">
                                                            There are new settings available
                                                        </p>
                                                        </div>
                                                    </div>
                                                </a>
    
                                                <!-- list item-->
                                                <a href="javascript:void(0);" class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left p-r-10">
                                                        <em class="fa fa-cog bg-warning"></em>
                                                        </div>
                                                        <div class="media-body">
                                                        <h5 class="media-heading">New settings</h5>
                                                        <p class="m-0">
                                                            There are new settings available
                                                        </p>
                                                        </div>
                                                    </div>
                                                </a>
    
                                                <!-- list item-->
                                                <a href="javascript:void(0);" class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left p-r-10">
                                                        <em class="fa fa-bell-o bg-custom"></em>
                                                        </div>
                                                        <div class="media-body">
                                                        <h5 class="media-heading">Updates</h5>
                                                        <p class="m-0">
                                                            There are <span class="text-primary font-600">2</span> new updates available
                                                        </p>
                                                        </div>
                                                    </div>
                                                </a>
    
                                                <!-- list item-->
                                                <a href="javascript:void(0);" class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left p-r-10">
                                                        <em class="fa fa-user-plus bg-danger"></em>
                                                        </div>
                                                        <div class="media-body">
                                                        <h5 class="media-heading">New user registered</h5>
                                                        <p class="m-0">
                                                            You have 10 unread messages
                                                        </p>
                                                        </div>
                                                    </div>
                                                </a>
    
                                                <!-- list item-->
                                                <a href="javascript:void(0);" class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left p-r-10">
                                                        <em class="fa fa-diamond bg-primary"></em>
                                                        </div>
                                                        <div class="media-body">
                                                        <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                        <p class="m-0">
                                                            There are new settings available
                                                        </p>
                                                        </div>
                                                    </div>
                                                </a>
    
                                                <!-- list item-->
                                                <a href="javascript:void(0);" class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left p-r-10">
                                                        <em class="fa fa-cog bg-warning"></em>
                                                        </div>
                                                        <div class="media-body">
                                                        <h5 class="media-heading">New settings</h5>
                                                        <p class="m-0">
                                                            There are new settings available
                                                        </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                        <!-- end notification list -->
                                    </ul>
                                </div>
                            </li>

                            <li class="dropdown user-box list-inline-item">
                                <a href="#" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="rounded-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li><a href="javascript:void(0)" class="dropdown-item">Profile</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><span class="badge badge-pill badge-info float-right">4</span>Settings</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item">Lock screen</a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item">Logout</a></li>
                                </ul>
                            </li>

                        </ul> <!-- end navbar-right -->

                    </div><!-- end container-fluid -->
                </div><!-- end navbar -->
            </div>