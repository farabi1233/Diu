<?php include('layouts/header.php'); ?>
<?php include('admin/include/connect.php'); ?>
<?php


$con = connect_db();
$sql = "SELECT * FROM campaign ORDER BY id DESC";

$result = mysqli_query($con, $sql);







?>

        <!--  PAGE HE   ADING -->

        <section class="page-header">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 text-center">
                    
                        <h3>
                            All Campaigns
                        </h3>

                        

                    </div>

                </div> <!-- end .row  -->

            </div> <!-- end .container  -->

        </section> <!-- end .page-header  -->


        <section class="section-content-block" >

<div class="container">

    <div class="row section-heading-wrapper">

        <div class="col-md-12 col-sm-12 text-center">
            <h2 class="section-heading">Donation Campaigns</h2>
            <p class="section-subheading">Campaigns to encourage new donors to join and existing to continue to give blood.</p>
        </div> <!-- end .col-sm-12  -->                       

    </div> <!-- end .row  -->


    <div class="row">
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="event-latest">
                <div class="row"> 

                    <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
                        <div class="event-latest-thumbnail">
                            <a href="campaign_single.php?id=<?php echo $row['id'];?> ">
                                <img src="<?php echo "admin/";echo $row['image']; ?>" height="250px" alt="">
                            </a>
                        </div>
                    </div> <!--  col-sm-5  -->

                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="event-details">
                            <a class="latest-date" href="campaign_single.php?id=<?php echo $row['id'];?>"><?php echo $row['start_time']; ?></a>
                            <h4 class="event-latest-title">
                                <a href="campaign_single.php?id=<?php echo $row['id'];?>"><?php echo $row['name']; ?></a>
                            </h4>
                            <p><?php $x = $row['details'];echo substr("$x", 0, 80);echo "...."; ?></p>
                            <div class="event-latest-details">
                                <a class="author" href="campaign_single.php?id=<?php echo $row['id'];?>"><i class="fa fa-clock-o" aria-hidden="true"></i>End: <?php echo $row['end_time']; ?></a>
                                <a class="comments" href="campaign_single.php?id=<?php echo $row['id'];?>"> <i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $row['location']; ?></a>
                            </div>
                        </div>
                    </div> <!--  col-sm-7  -->

                </div>

            </div>
        </div> <!--  col-sm-6  -->
        <?php } ?>
        <<!--  col-sm-6  -->
    </div> <!--  end .row  -->

     <!-- end .row                 -->

    <div class="row">
        <div class="col-sm-12 col-md-4 col-md-offset-4 text-center">
            <a class="btn btn-load-more" href="#">Load All Campaigns</a>
        </div>
    </div>

</div> <!--  end .container  --> 

</section>




<section class="cta-section-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                        <h2>Donate Blood , Safe Life</h2>
                        <p>
                            You can give blood at any of our blood donation venues!                        
                        </p>
                        <a class="btn btn-cta-2" href="mailto:admin@diublood.com">BECOME VOLUNTEER</a>
                    </div> <!--  end .col-md-8  -->
                </div> <!--  end .row  -->
            </div>
        </section>  
        
<?php include('layouts/footer.php'); ?>



