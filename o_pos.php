


<?php include('admin/include/connect.php'); ?>
<?php


$con = connect_db();
$sql = "SELECT donor_list.*, donate.date , donate.venue FROM donor_list JOIN donate on donor_list.id = donate.user_id WHERE donor_list.id= donate.user_id AND donor_list.blood_group = 'O+' ORDER BY donate.user_id DESC";

$result = mysqli_query($con, $sql);







?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->


<head>
    <meta charset="utf-8">
    <title>DIU Blood Center</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="DIU Blood Center">
    <meta name="author" content="xenioushk">
    <link rel="shortcut icon" href="asset/images/favicon.png" />
    <!-- The styles Start-->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" />
    <link href="asset/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="asset/css/animate.css" rel="stylesheet" type="text/css">
    <link href="asset/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="asset/css/venobox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="asset/css/styles.css" />

    <link rel="stylesheet" href="asset/fonts/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 
    <link rel="stylesheet" href="asset/extra_css/adminlte.css">
  
</head>

<body>

 <!--  HEADER -->
 <header class="main-header clearfix stuck" data-sticky_header="true">
        <section class="header-wrapper navgiation-wrapper">
            <div class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="logo" href="http://localhost/DIU/"><img alt="" src="asset/images/logo.png"> </a>
                    </div>

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="drop">
                                <a href="http://localhost/DIU/" title="Home Layout 01">Home</a>
                            </li>

                            
                            <li class="drop"><a href="#">DONOR LIST</a>
                                <ul class="drop-down">
                                    <li><a href="http://localhost/DIU/a_pos.php">A+ (A positive)</a></li>
                                    <li><a href="http://localhost/DIU/a_neg.php">A– (A negative) </a></li>
                                    <li><a href="http://localhost/DIU/b_pos.php">B+ (B positive) </a></li>
                                    <li><a href="http://localhost/DIU/b_neg.php">B– (B negative) </a></li>
                                    <li><a href="http://localhost/DIU/ab_pos.php">AB+ (AB positive) </a></li>
                                    <li><a href="http://localhost/DIU/ab_neg.php">AB– (AB negative) </a></li>
                                    <li><a href="http://localhost/DIU/o_pos.php">O+ (O positive) </a></li>
                                    <li><a href="http://localhost/DIU/o_neg.php">O– (O negative)</a></li>
                                </ul>
                            </li>









                            <li>
                                <a href="#">Campaign</a>
                                <ul class="drop-down">
                                    <li><a href="http://localhost/DIU/campaigns.php">All Campaigns</a></li>
                                </ul>
                            </li>

                            <li><a href="http://localhost/DIU/blogs.php" title="About Us">Blog</a></li>
                            <li><a href="http://localhost/DIU/about.php" title="About Us">About Us</a></li>

                            <li><a href="http://localhost/DIU/contact.php">Contact US</a></li>
                            <li id="blink">
                                <style>
                                    @keyframes blink {
                                        50% {
                                            opacity: .369
                                        }
                                    }

                                    #blink {
                                        animation: blink 1s linear infinite;
                                    }
                                </style>
                                <a href="http://localhost/DIU/registration_donor.php">

                                    <font color="red"><b>Recent Request</b></font>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </section>

    <!--  PAGE HE   ADING -->
 </header>











 
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>
                        DONOR LIST: O+ (Positive)
                    </h3>
                </div>
            </div> <!-- end .row  -->
        </div> <!-- end .container  -->
    </section> <!-- end .page-header  -->

    

    <section class="content">

 

        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body">
                <div class="row d-flex align-items-stretch">




                <?php while($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                            <div class="card-header text-muted border-bottom-0">
                                #DONOR ID : <?php echo $row['id'] ; ?>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b> <?php echo $row['name'] ; ?></b></h2>
                                        <h4 class="text-muted text-sm"><b>Blood Group : </b><?php echo $row['blood_group'] ; ?> </h4>
                                        <h4 class="text-muted text-sm"><b>Donate  Date : </b><?php echo $row['date'] ; ?> </h4>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"></i></span> Address : <?php echo $row['address'] ; ?></li>
                                            <li class="small"><span class="fa-li"></i></span> Phone #:<?php echo $row['phone'] ; ?></b></li>
                                            <li class="small"><span class="fa-li"></i></span> Email : <?php echo $row['email'] ; ?></li>
                                            <li class="small"><span class="fa-li"></i></span> Gender : <?php echo $row['gender'] ; ?></li>
                                            <li class="small"><span class="fa-li"></i></span> Age : <?php echo $row['age'] ; ?></li>
                                            <li class="small"><span class="fa-li"></i></span> Donate Venue : <?php echo $row['venue'] ; ?></li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="<?php echo "admin/"; echo $row['image']; ?>" alt="" class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                   
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="fas fa-user"></i> View Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>  
                       
                    </div>
                    
                    

                       
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <nav aria-label="Contacts Page Navigation">
                    <ul class="pagination justify-content-center m-0">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                        <li class="page-item"><a class="page-link" href="#">8</a></li>
                    </ul>
                </nav>
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->

    </section>


















    <footer>



        <!--FOOTER CONTENT  -->

        <section class="footer-contents">

            <div class="container">


            </div> <!--  end .container -->
            <div class="container">

                <div class="row clearfix">

                    <div class="col-md-6 col-sm-12">
                        <p class="copyright-text"> Copyright © 2020, All Right Reserved - by DIU_BLOOD_CENTER </p>

                    </div> <!-- end .col-sm-6  -->

                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="footer-nav">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">Causes</a>
                                    </li>
                                    <li>
                                        <a href="donate.html">Events</a>
                                    </li>
                                    <li>
                                        <a href="blog-with-sidebar.html">Gallery</a>
                                    </li>
                                    <li>
                                        <a href="campaign-grid.html">Blog</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                    <li>
                                        <div class="top-bar-social">

                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-youtube"></i></a>
                                    </li>
                        </div>
                        </ul>
                        </nav>
                    </div> <!--  end .footer-nav  -->
                </div> <!--  end .col-lg-6  -->

            </div> <!-- end .row  -->

            </div> <!--  end .container  -->

        </section> <!--  end .footer-content  -->

    </footer>

    <!-- END FOOTER  -->


</body>


</html>