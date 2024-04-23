<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/lexa-ajax/layouts/red/layouts-colored-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jun 2022 18:19:37 GMT -->
<head>

        <meta charset="utf-8" />
        <title>SGR Train Reservation System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url("assets/images/favicon.ico");?>">

        <!-- Bootstrap Css -->
        <link href="<?php echo base_url("assets/css/bootstrap.min.css");?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo base_url("assets/css/icons.min.css");?>" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo base_url("assets/css/app.min.css");?>" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="colored">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <h4>SGR Train Reservation System </h4>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>

                        <div class="d-none d-sm-block">
                            <div class="dropdown dropdown-topbar pt-3 mt-1 d-inline-block">
                                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        shortcut go<i class="mdi mdi-chevron-down"></i>
                                    </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="<?php echo base_url('index.php/users/create/');?>"><i class="dripicons-user"></i>Be an Admin</a>
                                    <a class="dropdown-item" href="<?php echo base_url('index.php/bank/');?>"><i class="dripicons-stopwatch"></i>Bookings</a>
                                    <a class="dropdown-item" href="<?php echo base_url("index.php/agents/create/");?>"><i class="dripicons-lifting"></i>Add Train </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?php echo base_url('index.php/tax/');?>"><i class="dripicons-flag"></i>Time table</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex">

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="fa fa-search"></span>
                            </div>
                        </form>

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>





                        <div class="dropdown d-none d-lg-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen font-size-24"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-bell"></i>
                                <span class="badge bg-danger rounded-pill">Start</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="m-0">new tarin</h5>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="<?php echo base_url('index.php/agents/');?>" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                <span class="avatar-title border-success rounded-circle ">
                                                    <i class="dripicons-flag"></i>
                                                </span>
                                            </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Trains information</h6>
                                                <div class="text-muted">
                                                    <p class="mb-1">Train information table</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="<?php echo base_url('index.php/contacts/');?>" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                <span class="avatar-title border-warning rounded-circle ">
                                                    <i class="dripicons-list"></i>
                                                </span>
                                            </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">The varous train terminols</h6>
                                                <div class="text-muted">
                                                    <p class="mb-1">The train satations record list </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="<?php echo base_url('index.php/users/');?>" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                <span class="avatar-title border-info rounded-circle ">
                                                    <i class="dripicons-user-group"></i>
                                                </span>
                                            </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">This is the admins list </h6>
                                                <div class="text-muted">
                                                    <p class="mb-1">If you want  to be part of  it  get in tach with Alex</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0);" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                <span class="avatar-title border-primary rounded-circle ">
                                                    <i class="mdi mdi-cart-outline"></i>
                                                </span>
                                            </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your order is placed</h6>
                                                <div class="text-muted">
                                                    <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0);" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                <span class="avatar-title border-warning rounded-circle ">
                                                    <i class="mdi mdi-message"></i>
                                                </span>
                                            </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">New Message received</h6>
                                                <div class="text-muted">
                                                    <p class="mb-1">You have 87 unread messages</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top">
                                    <a class="btn btn-sm btn-link font-size-14 w-100 text-center" href="javascript:void(0)">
                                        View all
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">


                        <span class="user-name"><?php echo $login['fullName'];?></span></a>
                </button>


                <div class="dropdown-menu dropdown-menu-end">

                    <!-- item-->

                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle font-size-17 text-muted align-middle me-1"></i> <?php echo $login['fullName'];?></a>

                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline font-size-17 text-muted align-middle me-1"></i> Lock screen</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="<?php echo base_url('index.php/login/logout/');?>"><i class="mdi mdi-power font-size-17 text-muted align-middle me-1 text-danger"></i> Logout</a>

                </div>
            </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="mdi mdi-spin mdi-cog"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </header>
