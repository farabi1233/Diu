<?php ob_start(); ?>

<?php $url = 'http://localhost/DIU/admin/'; ?>


<!DOCTYPE html>
<html lang="en">


<head>
    <title>Mentor - Bootstrap 4 Admin Dashboard Template</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors.css" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
</head>

<body>
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            
            <!-- begin app-header -->
            <header class="app-header top-bar">
                <!-- begin navbar -->
                <nav class="navbar navbar-expand-md">

                    <!-- begin navbar-header -->
                    <div class="navbar-header d-flex align-items-center">
                        <a href="javascript:void:(0)" class="mobile-toggle"><i class="ti ti-align-right"></i></a>
                        <a class="navbar-brand" href="<?php echo $url; ?>index.php">
                            <img src="../assets/img/logo.png" class="img-fluid logo-desktop" alt="logo" />
                            <img src="../assets/img/logo-icon.png" class="img-fluid logo-mobile" alt="logo" />
                        </a>
                    </div>







                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti ti-align-left"></i>
                    </button>
                    <!-- end navbar-header -->



                    <!-- begin navigation -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navigation d-flex">
                           
                           
                        </div>
                    </div>
                    <!-- end navigation -->
              </nav>
                <!-- end navbar -->
            </header>
            <!-- end app-header -->
            <!-- begin app-container -->
            <div class="app-container">
                <!-- begin app-nabar -->
                <aside class="app-navbar">
                    <!-- begin sidebar-nav -->
                    <div class="sidebar-nav scrollbar scroll_light">
                        <ul class="metismenu " id="sidebarNav">
                            <br>
                            <li class="active">
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <i class="nav-icon ti ti-rocket"></i>
                                    <span class="nav-title">Add Data</span>
                                    
                                </a>
                                <ul aria-expanded="false">
                                    <li class="active"> <a href='<?php echo $url; ?>donor/create.php'>Add Donor</a> </li>
                                    <li> <a href='<?php echo $url; ?>campaign/create.php'>Add Campaign </a> </li>
                                    <li> <a href='<?php echo $url; ?>blog/create.php'>Add Blog </a> </li>
                                </ul>
                            </li>
                            
                            
                            
                            
                            
                           
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-layout-column3-alt"></i><span class="nav-title">Show Data</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href="<?php echo $url; ?>donor/index.php">Donor</a> </li>
                                    <li> <a href="<?php echo $url; ?>campaign/index.php">Campaign </a> </li>
                                    <li> <a href="<?php echo $url; ?>blog/index.php">Blog</a> </li>
                                    <li> <a href="<?php echo $url; ?>donate/index.php">Who Donated</a> </li>
                            
                                    <li> <a href="<?php echo $url; ?>apply/index.php">Who Apply For Reg.</a> </li>

                                </ul>
                            </li>
                           
                           
                        </ul>
                    </div>
                    <!-- end sidebar-nav -->
                </aside>
                <!-- end app-navbar -->








                <!-- begin app-main -->
                <div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    <div class="container-fluid">
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                                <div class="d-block d-lg-flex flex-nowrap align-items-center">
                                    <div class="page-title mr-4 pr-4 border-right">
                                        <h1>Dashboard</h1>
                                    </div>
                                     <!-- icon  start-->
                                    <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                                        <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Todo list">
                                            <i class="fe fe-edit btn btn-icon text-primary"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Projects">
                                            <i class="fa fa-lightbulb-o btn btn-icon text-success"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Task">
                                            <i class="fa fa-check btn btn-icon text-warning"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Calendar">
                                            <i class="fa fa-calendar-o btn btn-icon text-cyan"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Analytics">
                                            <i class="fa fa-bar-chart-o btn btn-icon text-danger"></i>
                                        </a>
                                    </div>
                                    <!-- icon  finish-->
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                    
                        <!-- end row -->
                        <!-- begin row -->
                       
<!-- use in body diV -->
                        <!-- <div class="row">
                            <div class="col-sm-9">
                                <div class="card card-statistics"> -->
