<?php
$sql = "SELECT* FROM donor_list ;";
$result = mysqli_query(mysqli_connect('localhost', 'root', '', 'diu_blood_center'), $sql);
$donor = 0;
while ($x = mysqli_fetch_assoc($result)) {
    $donor++;
}
?>
<?php
$sql = "SELECT* FROM req_for_blood ;";
$result = mysqli_query(mysqli_connect('localhost', 'root', '', 'diu_blood_center'), $sql);
$req = 0;
while ($x = mysqli_fetch_assoc($result)) {
    $req++;
}
?>
<?php
$sql = "SELECT* FROM donate ;";
$result = mysqli_query(mysqli_connect('localhost', 'root', '', 'diu_blood_center'), $sql);
$donate = 0;
while ($x = mysqli_fetch_assoc($result)) {
    $donate++;
}
?>
<?php
$sql = "SELECT* FROM campaign ;";
$result = mysqli_query(mysqli_connect('localhost', 'root', '', 'diu_blood_center'), $sql);
$camp = 0;
while ($x = mysqli_fetch_assoc($result)) {
    $camp++;
}
?>

<section class="section-counter">

    <div class="container wow fadeInUp">

        <div class="row">

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                <div class="counter-block-1 text-center">

                    <i class="fa fa-heartbeat icon"></i>
                    <span class="counter"><?php echo $donor;  ?></span>
                    <h4>Total Donor</h4>

                </div>

            </div> <!--  end .col-lg-3  -->

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                <div class="counter-block-1 text-center">

                    <i class="fa fa-stethoscope icon"></i>
                    <span class="counter"><?php echo $donate;  ?></span>
                    <h4>Total Donation</h4>

                </div>

            </div> <!--  end .col-lg-3  -->

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                <div class="counter-block-1 text-center">

                    <i class="fa fa-users icon"></i>
                    <span class="counter"><?php echo $req;  ?></span>
                    <h4>Total Request</h4>

                </div>

            </div> <!--  end .col-lg-3  -->

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                <div class="counter-block-1 text-center">

                    <i class="fa fa-building icon"></i>
                    <span class="counter"><?php echo $camp;  ?></span>
                    <h4>Total Campaign</h4>

                </div>

            </div> <!--  end .col-lg-3  -->


        </div> <!-- end row  -->

    </div> <!--  end .container  -->

</section> <!--  end .section-counter -->