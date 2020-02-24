<?php include('layouts/header.php'); ?>
<?php include('admin/include/connect.php'); ?>
<?php


$con = connect_db();
$sql = "SELECT * FROM blog ORDER BY id DESC";

$result = mysqli_query($con, $sql);







?>

<!--  PAGE HE   ADING -->

<section class="page-header">

    <div class="container">

        <div class="row">

            <div class="col-sm-12 text-center">

                <h3>
                    Blogs
                </h3>



            </div>

        </div> <!-- end .row  -->

    </div> <!-- end .container  -->

</section> <!-- end .page-header  -->





<!-- TEAM SECTION -->

<section class="section-content-block section-home-blog">

    <div class="container wow fadeInUp">

        <div class="row section-heading-wrapper">

            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="section-heading">Recent Blog</h2>
                <p class="section-subheading">
                    Latest news and statements regarding giving blood, blood processing and supply.
                </p>
            </div> <!-- end .col-md-12  -->

        </div> <!--  end .row  -->

        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col-lg-4 col-md-4 col-sm-12">

                    <div class="latest-news-container">

                        <a href="single_blog.php?id=<?php echo $row['id'];?> ">
                            <figure>
                                <img src="<?php echo "admin/";echo $row['image']; ?>" alt="latest news" height="250px" width="170px">
                            </figure>


                            <div class="news-content">

                                <h3>
                                    <a href="single_blog.php?id=<?php echo $row['id'];?>"><?php $y= $row['title']; echo substr("$y",0,60)  ;  ?></a>
                                </h3>

                                <div class="news-meta-info">
                                    <i class="fa fa-clock-o"></i> Upload Date: <?php echo $row['date']; ?>
                                </div>

                                <div class="update-details">
                                    <?php $x = $row['description'];
                                    echo substr("$x", 0, 100);
                                    echo "...."; ?>
                                </div>

                            </div>

                        </a>

                    </div><!--  end .latest-news-container  -->

                </div> <!--  end col-lg-4  -->

            <?php } ?>






        </div> <!-- end row  -->

        <div class="row">
            <div class="col-sm-12 col-md-4 col-md-offset-4 text-center">
                <a href="#" class="btn btn-load-more">- Load More Blog -</a>
            </div>
        </div> <!-- end .row  -->

    </div> <!-- end .container  -->

</section> <!--  end .section-latest-blog -->



<section class="cta-section-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <h2>We are helping people from 40 years</h2>
                <p>
                    You can give blood at any of our blood donation venues all over the world. We have total sixty thousands donor centers and visit thousands of other venues on various occasions.
                </p>
                <a class="btn btn-cta-2" href="#">BECOME VOLUNTEER</a>
            </div> <!--  end .col-md-8  -->
        </div> <!--  end .row  -->
    </div>
</section>





<?php include('layouts/footer.php'); ?>