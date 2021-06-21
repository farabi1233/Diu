<?php 
session_start();
if(!isset($_SESSION['uname'])){
    echo "<script>location.href='login.php'</script>";
}else{
}
?>

<?php $url = '/diu-blood-center-php/admin/';
include('include/connect.php');
$con = connect_db();
//$sql = "SELECT* FROM blog  where `blog`.`id` = '$id'";
// $result = mysqli_query($con, $sql);
// $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DIU</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <!-- <link rel="shortcut icon" href="assets/img/favicon.ico"> -->
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors.css" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
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
                        <a class="navbar-brand" href="<?php echo $url; ?>">
                            <img src="../asset/images/logo.png" class="img-fluid logo-desktop" alt="logo" />
                            <img src="../asset/images/logo.png" class="img-fluid logo-mobile" alt="logo" />
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
                    <ul class="metismenu " >
                            <br>
                            <li class="active">
                                <a href="<?php echo $url; ?>" aria-expanded="false">
                                    <i class="nav-icon ti ti-menu"></i>
                                    <span class="nav-title">Dashboard</span>

                                </a>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <i class="nav-icon ti ti-plus"></i>
                                    <span class="nav-title">Add Data</span>

                                </a>
                                <ul aria-expanded="false">
                                    <li > <a href='<?php echo $url; ?>donor/create.php'>Donor</a> </li>
                                    <li> <a href='<?php echo $url; ?>campaign/create.php'>Campaign </a> </li>
                                    <li> <a href='<?php echo $url; ?>blog/create.php'>Blog </a> </li>
                                    <li> <a href='<?php echo $url; ?>donate/create.php'>Blood Donation</a> </li>
                                </ul>
                            </li>
                            <li class="active">
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <i class="nav-icon ti ti-eye"></i>
                                    <span class="nav-title">View Data</span>

                                </a>
                                <ul aria-expanded="false">
                                <li> <a href="<?php echo $url; ?>donor/index.php">Donor</a> </li>
                                    <li> <a href="<?php echo $url; ?>campaign/index.php">Campaign </a> </li>
                                    <li> <a href="<?php echo $url; ?>blog/index.php">Blog</a> </li>
                                    <li> <a href="<?php echo $url; ?>donate/index.php">Blood Donation List</a> </li>
                                    <li> <a href="<?php echo $url; ?>blood_req/index.php">Request For Blood</a> </li>
                                    <li> <a href="<?php echo $url; ?>reg_info/index.php">New Donor Apply List</a> </li>

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
                                    <form action="logout.php" method="post">
                                    <a href="logout" class="tooltip-wrapper"  data-placement="top"  data-original-title="Logout?">
                                        <button type="submit" class="btn btn-sm btn-secondary"><i class="fa fa-sign-out "></i> Logout</button>
                                     </a>
                                    </form>
                                    
                                    </div>
                                    <!-- icon  finish-->
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>

                        <!-- end row -->
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card card-statistics">





                                    <div class="row no-gutters">
                                        <div class="col-xxl-3 col-lg-6">
                                            <div class="p-20 border-lg-right border-bottom border-xxl-bottom-0">
                                                <div class="d-flex m-b-10">
                                                    <p class="mb-0 font-regular text-muted font-weight-bold">Total Donor</p>
                                                    <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                                                </div>
                                                <div class="d-block d-sm-flex h-100 align-items-center">
                                                    <div class="apexchart-wrapper">
                                                        <div id="analytics7"></div>
                                                    </div>
                                                    <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                                        <h3 class="mb-0"><i class="icon-arrow-up-circle">

                                                                <?php

                                                                $sql = "SELECT* FROM donor_list ;";
                                                                $result = mysqli_query($con, $sql);
                                                                $donor = 0;
                                                                while ($x = mysqli_fetch_assoc($result)) {
                                                                    $donor++;
                                                                }

                                                                ?>



                                                            </i> <?php echo $donor;  ?> </h3>
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-lg-6">
                                            <div class="p-20 border-xxl-right border-bottom border-xxl-bottom-0">
                                                <div class="d-flex m-b-10">
                                                    <p class="mb-0 font-regular text-muted font-weight-bold">Total Request For Blood</p>
                                                    <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                                                </div>
                                                <div class="d-block d-sm-flex h-100 align-items-center">
                                                    <div class="apexchart-wrapper">
                                                        <div id="analytics8"></div>
                                                    </div>
                                                    <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">

                                                        <?php

                                                        $sql = "SELECT* FROM req_for_blood ;";
                                                        $result = mysqli_query($con, $sql);
                                                        $req = 0;
                                                        while ($x = mysqli_fetch_assoc($result)) {
                                                            $req++;
                                                        }

                                                        ?>

                                                        <h3 class="mb-0"><i class="icon-arrow-up-circle"></i> <?php echo $req;  ?></h3>
                                                        <p>This month</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-lg-6">
                                            <div class="p-20 border-lg-right border-bottom border-lg-bottom-0">
                                                <div class="d-flex m-b-10">
                                                    <p class="mb-0 font-regular text-muted font-weight-bold">Total Blood Donation </p>
                                                    <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                                                </div>
                                                <div class="d-block d-sm-flex h-100 align-items-center">
                                                    <div class="apexchart-wrapper">
                                                        <div id="analytics9"></div>
                                                    </div>
                                                    <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                                        <?php

                                                        $sql = "SELECT* FROM donate ;";
                                                        $result = mysqli_query($con, $sql);
                                                        $donate = 0;
                                                        while ($x = mysqli_fetch_assoc($result)) {
                                                            $donate++;
                                                        }

                                                        ?>

                                                        <h3 class="mb-0"><i class="icon-arrow-up-circle"></i><?php echo $donate ?></h3>
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-lg-6">
                                            <div class="p-20 border-lg-right border-bottom border-xxl-bottom-0">
                                                <div class="d-flex m-b-10">
                                                    <p class="mb-0 font-regular text-muted font-weight-bold">Total Campaign</p>
                                                    <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                                                </div>
                                                <div class="d-block d-sm-flex h-100 align-items-center">
                                                    <div class="apexchart-wrapper">
                                                        <div id="analytics7"></div>
                                                    </div>
                                                    <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                                        <h3 class="mb-0"><i class="icon-arrow-up-circle">

                                                                <?php

                                                                $sql = "SELECT* FROM campaign ;";
                                                                $result = mysqli_query($con, $sql);
                                                                $camp = 0;
                                                                while ($x = mysqli_fetch_assoc($result)) {
                                                                    $camp++;
                                                                }

                                                                ?>



                                                            </i> <?php echo $camp;  ?> </h3>
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div></div>
                                        <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="verticalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="verticalCenterTitle">Add New Event</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="modelemail">Event Name</label>
                                                                <input type="email" class="form-control" id="modelemail">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Choose Event Color</label>
                                                                <select class="form-control">
                                                                    <option>Primary</option>
                                                                    <option>Warning</option>
                                                                    <option>Success</option>
                                                                    <option>Danger</option>
                                                                </select>
                                                            </div>

                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-success">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end container-fluid -->
                                </div>
                                <!-- end app-main -->
                            </div>
                            <!-- end app-container -->
                            <!-- begin footer -->
                            <!-- <footer class="footer">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-left">
                        <p>&copy; Copyright 2019. All rights reserved.</p>
                    </div>
                   <div class="col  col-sm-6 ml-sm-auto text-center text-sm-right">
                        <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                    </div>
                </div>
            </footer> -->
                            <!-- end footer -->
                        </div>
                        <!-- end app-wrap -->
                    </div>
                    <!-- end app -->

                    <!-- plugins -->
                    <script src="assets/js/vendors.js"></script>

                    <!-- custom app -->
                    <script src="assets/js/app.js"></script>
</body>


</html>