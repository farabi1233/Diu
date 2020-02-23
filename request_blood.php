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

            <form class="appoinment-form" action="store_blood_req_info.php" method="POST" enctype="multipart/form-data">


                <div class="form-group col-md-12">
                    <input type="text" class="form-control" name="name" placeholder="Name">
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
                        <select type="text" class="form-control" name="gender">
                            <option disabled selected>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="select-style">
                        <select class="form-control" name="blood_group">
                            <option disabled selected>Blood Group</option>
                           
                                < <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>

                            

                        </select>
                    </div>
                </div>


                <div class="form-group col-md-6">

                <select class="form-control" name="blood_bag">
                            <option disabled selected>Blood bag</option>
                           
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>

                            

                        </select>

                </div>

                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <textarea name="address" class="form-control" rows="6" placeholder="Your Address..."></textarea>
                </div>

                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <button id="submit" class="btn btn-success" type="submit">Submit</button>
                </div>

            </form>

        </div> <!-- end .appointment-form-wrapper  -->

    </div>
    </div> <!--  end .container -->

</section>









<?php include('layouts/footer.php'); ?>