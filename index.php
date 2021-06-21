<?php include('layouts/header.php'); ?>


<!-- BNANER START -->
<section class="section-banner">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="banner-content">
                    <h2>
                        Donate blood and get real blessings.
                    </h2>
                    <h3>Your Blood is Precious , Donate it and make it Divine<br>
                        Donating blood not only saves the life also save donor's lives.
                    </h3>
                    <a href="/diu-blood-center-php/registration_donor.php" class="btn btn-slider"><b>DONATE NOW!</b> </a>
                    <?php echo "&nbsp;" ?>
                    <a href="/diu-blood-center-php/request_blood.php" class="btn btn-slider"><b> REQUEST FOR BLOOD</b></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BNANER END -->



<!--  DONATION PROCESS  START-->
<section class="section-content-block section-process">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="section-heading"><span>Donation</span> Process</h2>
                <p class="section-subheading">The donation process from the time you arrive center until the time you leave</p>
            </div>
        </div>
        <div class="row wow fadeInUp">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="process-layout">
                    <figure class="process-img">
                        <img src="asset/images/process_1.jpg" alt="process" />
                        <div class="step">
                            <h3>1</h3>
                        </div>
                    </figure>
                    <article class="process-info">
                        <h2>Registration</h2>
                        <p>You need to complete a very simple registration form in online. Which contains all required contact information to enter in the donation process.</p>
                    </article>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="process-layout">
                    <figure class="process-img">
                        <img src="asset/images/process_2.jpg" alt="process" />
                        <div class="step">
                            <h3>2</h3>
                        </div>
                    </figure>
                    <article class="process-info">
                        <h2>Screening</h2>
                        <p>A drop of blood from your finger will take for simple test to ensure that your blood iron levels are proper enough for donation process.You also get 5 free test.</p>
                    </article>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="process-layout">
                    <figure class="process-img">
                        <img src="asset/images/process_3.jpg" alt="process" />
                        <div class="step">
                            <h3>3</h3>
                        </div>
                    </figure>
                    <article class="process-info">
                        <h2>Donation</h2>
                        <p>After ensuring and passed screening test successfully you will be directed to a donor bed for donation. It will take only 6-10 minutes.</p>
                    </article>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="process-layout">
                    <figure class="process-img">
                        <img src="asset/images/process_4.jpg" alt="process" />
                        <div class="step">
                            <h3>4</h3>
                        </div>
                    </figure>
                    <article class="process-info">
                        <h2>Refreshment</h2>
                        <p>You can also stay in sitting room until you feel strong enough to leave our center. You will receive awesome drink from us in donation zone. </p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  DONATION PROCESS  END-->


<?php include('layouts/awards.php'); ?>


<!--  TOP 3 DONOR START-->

<section class="section-content-block section-secondary-bg section-our-team">
    <div class="container wow fadeInUp">
        <div class="row section-heading-wrapper">
            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="section-heading">Our Top 3 Donors</h2>
                <p class="section-subheading">Top three donors in DIU Blood Center</p>
            </div>
        </div>
        <div class="row">
            <div class="row">
                <?php include('admin/include/connect.php'); ?>
                <?php
                $con1 = connect_db();
                $sql = "SELECT donor_list.*, COUNT(*) as count FROM donor_list JOIN donate on donor_list.id = donate.user_id WHERE donor_list.id= donate.user_id GROUP BY donor_list.id  ORDER BY count DESC LIMIT 3 ";
                $result = mysqli_query($con1, $sql);
                ?>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <div class="team-layout-1">
                            <figure class="team-member">
                                <a href="#" title="ALEXANDER GARY">
                                    <img src="<?php echo "admin/";
                                                echo $row['image']; ?>" height="400px" width="300px" />
                                </a>
                            </figure>
                            <article class="team-info">
                                <h3><?php echo $row['name']; ?> </h3>
                                <h4>Total Donate :<?php echo " ";
                                                    echo $row['count'];
                                                    echo " "; ?>Times</h4>
                            </article>
                            <div class="team-content">
                                <div class="team-social-share text-center clearfix">
                                    <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                    <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                    <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                    <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
</section>
<!--  TOP 3 DONOR END -->


<section class="section-content-block cta-section-3">
    <div class="container wow fadeIn animated">
        <div class="row">
            <div class="col-md-12">
                <div class="cta-content text-center">
                    <h2>Join with us and save life</h2>
                    <a class="btn-cta-3" href="mailto:admin@admin.com">Become Volunteer</a>
                </div>
            </div>
        </div>
    </div>
</section>



<!--  SECTION CAMPAIGNS  START -->
<section class="section-content-block">
    <div class="container">
        <div class="row section-heading-wrapper">
            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="section-heading">Donation Campaigns</h2>
                <p class="section-subheading">Campaigns to encourage new donors to join and existing to continue to give blood.</p>
            </div>
        </div>
        < <div class="row">
            <?php
            $con = connect_db();
            $sql = "SELECT * FROM campaign ORDER BY id DESC LIMIT 4";
            $result = mysqli_query($con, $sql);
            ?>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="event-latest">
                        <div class="row">

                            <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
                                <div class="event-latest-thumbnail">
                                    <a href="campaign_single.php?id=<?php echo $row['id']; ?>">
                                        <img src="<?php echo "admin/";
                                                    echo $row['image']; ?>" height="250px" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                <div class="event-details">
                                    <a class="latest-date" href="campaign_single.php?id=<?php echo $row['id']; ?>"><?php echo $row['start_time']; ?></a>
                                    <h4 class="event-latest-title">
                                        <a href="campaign_single.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
                                    </h4>
                                    <p><?php $x = $row['details'];
                                        echo substr("$x", 0, 80);
                                        echo "...."; ?></p>
                                    <div class="event-latest-details">
                                        <a class="author" href="campaign_single.php?id=<?php echo $row['id']; ?>"><i class="fa fa-clock-o" aria-hidden="true"></i> End: <?php echo $row['end_time']; ?></a>
                                        <a class="comments" href="campaign_single.php?id=<?php echo $row['id']; ?>"> <i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $row['location']; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
    </div>
    </div>
</section>
<!--  SECTION CAMPAIGNS  START -->



<!--  FOOTER  START -->
<?php include('layouts/footer.php'); ?>