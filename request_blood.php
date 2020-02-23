<?php include('layouts/header.php'); ?>


<!--  PAGE HE   ADING -->

<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3>
                    REQUEST FOR BLOOD
                </h3>
            </div>
        </div> <!-- end .row  -->
    </div> <!-- end .container  -->
</section> <!-- end .page-header  -->



<section class="section-content-block section-secondary-bg">

    <div class="container">

      

            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="section-heading"><span>Blood Request Form</h2>
                
            </div> <!-- end .col-sm-10  -->






    <div class="col-md-12" style="padding-left: 0px   ">

        <div class="appointment-form-wrapper theme-custom-box-shadow text-center clearfix wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;">
            <h3 class="join-heading join-heading-alt">Your Information</h3>

            <form class="appoinment-form" action="store.php" method="POST" enctype="multipart/form-data">


                <div class="form-group col-md-12">
                    <input type="text" class="form-control" name="name" placeholder="Patient Name">
                </div>


                <div class="form-group col-md-12">
                    <input type="text" class="form-control" name="age" placeholder="Age">
                </div>
                <div class="form-group col-md-12">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group col-md-12">
                    <input type="text" class="form-control" name="phone" placeholder="Phone Number(+88)">
                </div>
                <div class="form-group col-md-12">
                    <div class="select-style">
                        <select class="form-control" name="gender">
                            <option disabled selected>Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Others</option>
                        </select>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="select-style">
                        <select class="form-control" name="blood_group_id">
                            <option disabled selected>Blood Group (required)</option>
                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                <option value="<?php echo $row['id']  ?>"><?php echo $row['blood_group']  ?></option>
                            <?php } ?>

                        </select>
                    </div>
                </div>


                <div class="form-group col-md-6">
                    <div class="select-style">
                        <select class="form-control" name="bag">
                            <option disabled selected>Blood Bag (required)</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
                    </div>
                </div>

                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <textarea name="address" class="form-control" rows="6" placeholder="Your Address..."></textarea>
                </div>

                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <button id="btn_submit" class="btn btn-success" type="submit">Submit</button>
                </div>

            </form>

        </div> <!-- end .appointment-form-wrapper  -->

    </div>
    </div> <!--  end .container -->

</section>









<?php include('layouts/footer.php'); ?>