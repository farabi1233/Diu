<?php include('layouts/header.php'); ?>

<h3>hello</h3>
<?php
$id = $_GET['id'];
include('admin/include/connect.php');
$con = connect_db();
$sql = "SELECT* FROM blog  where `blog`.`id` = '$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

?>
<!--  PAGE HE   ADING -->

<section class="page-header">

    <div class="container">

        <div class="row">

            <div class="col-sm-12 text-center">

                <h3>
                    BLOG
                </h3>



            </div>

        </div> <!-- end .row  -->

    </div> <!-- end .container  -->

</section> <!-- end .page-header  -->




<section class="section-content-block">



    <div class="row">
        <div class="container">
            <div class="col-md-8">

                <article class="post single-post-inner">



                    <div class="single-post-inner-title">
                        <h2><?php echo $row['title']; ?></h2>
                    </div>
                    <hr>
                    <div class="post-inner-featured-content">
                        <img alt="" src="<?php echo "admin/";echo $row['image']; ?>" height="400px">
                    </div>
                    <hr>
                    <div class="single-post-inner-title">

                        <p class="single-post-meta"><i class="fa fa-user"></i>&nbsp; Volunteer Panel &nbsp; &nbsp; <i class="fa fa-share"></i>&nbsp; Published Date : <?php echo $row['date']; ?></p>
                    </div>

                    <div class="single-post-inner-content">
                        <?php echo $row['description']; ?>
                    </div>

                    <div class="single-post-inner-meta">
                        <div class="tag-list">
                            <a href="#">Donation</a>
                            <a href="#">Blood</a>
                            <a href="#">Happy</a>
                            <a href="#">People</a>
                        </div>
                    </div>


                </article> <!--  end single-post-container -->


            </div>


            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="widget site-sidebar">

                            <?php
                            
                           
                            
                            $sql2 = "SELECT * FROM `blog` ORDER BY id DESC LIMIT 4";
                            $result2 = mysqli_query($con, $sql2);
                            

                            ?>

                            <h2 class="widget-title">Recent Posts</h2>
                            <?php while ($row2 = mysqli_fetch_assoc($result2)) { ?>
                            <div class="single-recent-post">
                                <a href="single_blog.php?id=<?php echo $row2['id'];?>"><?php $y= $row2['title']; echo substr("$y",0,60)  ;  ?></a>
                                <span><i class="fa fa-calendar icon-color"></i>&nbsp;Upload Date: <?php echo $row2['date']; ?></span>
                            </div>

                            <?php } ?>

                            


                        </div>


                    </div>
                </div>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <div class="widget site-sidebar">

                            <h2 class="widget-title">Campaigns</h2>

                            <?php
                        
                            
                            $sql3 = "SELECT * FROM `campaign` ORDER BY id DESC LIMIT 6";
                            $result3 = mysqli_query($con, $sql3);
                            

                            ?>


                            <ul class="widget-post-category clearfix">
                               
                            <?php while ($row3 = mysqli_fetch_assoc($result3)) { ?>
                            <li>

                               
                                    <a " href="campaign_single.php?id=<?php echo $row3['id'];?>"><?php $y= $row3['name']; echo substr("$y",0,60)  ;  ?></a>
                                    <span class="pull-right badge">Start Date : <?php echo $row3['start_time']; ?></span>
                                </li>
                                <?php } ?>

                                
                               
                            </ul>

                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>


















</section> <!-- end .section-content-block  -->













<?php include('layouts/footer.php'); ?>