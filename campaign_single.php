<?php include('layouts/header.php'); ?>
<?php
$id = $_GET['id'];
include('admin/include/connect.php');
$con = connect_db();
$sql = "SELECT* FROM campaign  where `campaign`.`id` = '$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);


?>

<!--  PAGE HE   ADING -->

<section class="page-header">

    <div class="container">

        <div class="row">

            <div class="col-sm-12 text-center">

                <h3>
                    CAMPAIGN
                </h3>



            </div>

        </div> <!-- end .row  -->

    </div> <!-- end .container  -->

</section> <!-- end .page-header  -->




<section class="section-content-block">

    <div class="container">

        <div class="row">



            <div class="article-event clearfix">

                <div class="col-sm-12">

                    <article class="post single-post-inner">

                        <div class="post-inner-featured-content">
                            <img alt="" src="<?php echo "admin/";
                                                echo $row['image']; ?>" height="400px">
                        </div>


                        <div class="single-post-inner-title">
                            <h2><?php echo $row['name']; ?></h2>
                            <p class="single-post-meta"><i class="fa fa-user"></i>&nbsp; Admin &nbsp; &nbsp; <i class="fa fa-share"></i>&nbsp; Starting on : <?php echo $row['start_time']; ?></p>
                        </div>

                        <div class="single-post-inner-content">
                            <?php echo $row['details']; ?>
                        </div>


                    </article> <!--  end single-post-container -->


                </div> <!--  end .single-post-container -->

                <div class="col-sm-4">

                    <h4 class="event-content-title">Details</h4>

                    <p class="event-content-info">

                        <span class="event-sub-content-title"> Start Date: </span><em class="date"><?php echo $row['start_time']; ?></em>
                        <span class="event-sub-content-title"> End Date:</span> <em class="date"><?php echo $row['end_time']; ?></em>

                        <span class="event-sub-content-title">Cost: </span> 
                        Free
                        <span class="event-sub-content-title">Event Category:</span>
                        <a href="#">Main Events</a>

                    </p>
                </div> <!-- end .col-sm-4  -->

                <div class="col-sm-4">

                    <h4 class="event-content-title">Organizer</h4>

                    <p class="event-content-info">
                        DIU Blood Center <br />
                        <span class="event-sub-content-title">Phone:</span>
                        +8801 77 4339 279 <br />
                        <span class="event-sub-content-title">Email:</span>
                        <a href="#" title="info@bloodcenter.com">diu@bloodcenter.com </a>
                        <span class="event-sub-content-title">Website:</span>
                        <a href="#" title="www.bloodcenter.com ">http://diubloodcenter.com </a>
                    </p>

                </div> <!-- end .col-sm-4  -->

                <div class="col-sm-4">

                    <h4 class="event-content-title">Venue</h4>
                    <?php echo $row['location']; ?>
                    <p class="event-content-info">
                        <span class="event-sub-content-title">Email:</span>
                        <a href="#" title="info@bloodcenter.com">diu@diu.com </a><br />
                        <span class="event-sub-content-title">Phone:</span>
                        +8801 788 55 1420 <br />
                        <span class="event-sub-content-title">Website:</span>
                        <a href="#" title="www.bloodcenter.com ">http://diubloodcenter.com </a>
                    </p>


                </div> <!-- end .col-sm-4  -->

            </div>



        </div> <!--  end .row  -->




    </div>

    </div> <!--  end container -->

</section> <!-- end .section-content-block  -->













<?php include('layouts/footer.php'); ?>