<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">

    <!-- App title -->
    <title>Uplon - Responsive Admin Dashboard Template</title>
    <!-- DataTables -->
    <link href="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="<?php echo base_url();?>assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Multi Item Selection examples -->
    <link href="<?php echo base_url();?>assets/plugins/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Switchery css -->
    <link href="<?php echo base_url();?>assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
    <script src="<?php echo base_url();?>assets/js/modernizr.min.js"></script>

    <!-- Sweet Alert css -->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css" />


    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">

    <!-- App CSS -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- Modernizr js -->
    <script src="<?php echo base_url();?>assets/js/modernizr.min.js"></script>




</head>

<body>

    <!-- Navigation Bar-->
    <header id="topnav">
        <div class="topbar-main">
            <div class="container">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <i class="zmdi zmdi-group-work icon-c-logo"></i>
                        <span>Uplon</span>
                    </a>
                </div>
                <!-- End Logo container-->


                <div class="menu-extras navbar-topbar">

                    <ul class="list-inline float-right mb-0">

                        <li class="list-inline-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>

                    

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                Wlecome,User
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <!-- <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow">
                                        <small>Welcome ! Kanchan</small>
                                    </h5>
                                </div> -->

                                <!-- item-->
                                <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-account-circle"></i>
                                    <span>Profile</span>
                                </a> -->

                                <!-- item-->
                               <!--  <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-settings"></i>
                                    <span>Settings</span>
                                </a> -->

                                <!-- item-->
                               <!--  <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-lock-open"></i>
                                    <span>Lock Screen</span>
                                </a> -->

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-power"></i>
                                    <a href="<?php echo base_url();?>logout">Logout</a>
                                </a>

                            </div>
                        </li>

                    </ul>

                </div>
                <!-- end menu-extras -->
                <div class="clearfix"></div>

            </div>
            <!-- end container -->
        </div>
        <!-- end topbar-main -->


        <div class="navbar-custom">
            <div class="container">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li>
                            <a href="<?php echo base_url();?>dashborad">
                                <i class="zmdi zmdi-view-dashboard"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                       <!--  <li>
                            <a href="<?php echo base_url();?>wallet">
                                <i class="zmdi zmdi-format-underlined"></i>
                                <span>Wallet</span>
                            </a>
                        </li> -->
                        <li>
                            <a href="<?php echo base_url();?>exchange">
                                <i class="zmdi zmdi-format-underlined"></i>
                                <span>Exchange</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>properties">
                                <i class="zmdi zmdi-format-underlined"></i>
                                <span>Properties</span>
                            </a>
                        </li>
                    </ul>
                    <!-- End navigation menu  -->
                </div>
            </div>
        </div>
    </header>
    <!-- End Navigation Bar-->