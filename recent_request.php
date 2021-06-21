<?php include('layouts/header_donor_list.php'); ?>
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>
                        Recent Request for Blood
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
                    <?php include('admin/include/connect.php'); ?>
                    <?php
                    $con = connect_db();
                    $sql = "SELECT * FROM req_for_blood ORDER BY id DESC";
                    $result = mysqli_query($con, $sql);
                    ?>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    #Request ID : <?php echo $row['id'];  ?>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>Patient Name : <?php echo $row['name'];  ?></b></h2>
                                            <h3 class="text-muted text-sm"> Address: <?php echo $row['address'];  ?></h3>
                                            <h3 class="text-muted text-sm"> Blood Group: <b><?php echo $row['blood_group'];  ?></b></h3>
                                            <h3 class="text-muted text-sm"> Blood Bag: <?php echo $row['blood_bag'];  ?></h3>
                                            <h3 class="text-muted text-sm">Age : <?php echo $row['age'];  ?> </h3>
                                            <h3 class="text-muted text-sm"> Gender : <?php echo $row['gender']; ?> </h3>
                                            <h3 class="text-muted text-sm"> Email : <?php echo $row['email']; ?> </h3>
                                            <h3 class="text-muted text-sm">Phone No : <?php echo $row['phone']; ?> </h3>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img src="" class="img-circle img-fluid">

                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="mailto:<?php echo $row['email']; ?>" class="btn btn-sm bg-teal">
                                            <i class="fas fa-paper-plane"> Send Mail</i>
                                        </a>
                                        <a href="tel:<?php echo $row['phone']; ?>" class="btn btn-sm btn-primary">
                                            <i class="fas fa-phone"></i> Call Now
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
    <?php include('layouts/footer_donor_list.php'); ?>