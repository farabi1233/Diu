<?php include('admin/include/connect.php'); ?>
<?php
$con = connect_db();
$sql = "SELECT donor_list.*, donate.date , donate.venue FROM donor_list JOIN donate on donor_list.id = donate.user_id WHERE donor_list.id= donate.user_id AND donor_list.blood_group = 'A+' ORDER BY donate.user_id DESC" ;
$result = mysqli_query($con, $sql);
?>
<?php include('layouts/header_donor_list.php'); ?>
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>
                        DONOR LIST: A+ (Positive)
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
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    #DONOR ID : <?php echo $row['id']; ?>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b> <?php echo $row['name']; ?></b></h2>
                                            <h4 class="text-muted text-sm"><b>Blood Group : </b><?php echo $row['blood_group']; ?> </h4>
                                            <h4 class="text-muted text-sm"><b>Donate Date : </b><?php echo $row['date']; ?> </h4>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"></i></span> Address : <?php echo $row['address']; ?></li>
                                                <li class="small"><span class="fa-li"></i></span> Phone #:<?php echo $row['phone']; ?></b></li>
                                                <li class="small"><span class="fa-li"></i></span> Email : <?php echo $row['email']; ?></li>
                                                <li class="small"><span class="fa-li"></i></span> Gender : <?php echo $row['gender']; ?></li>
                                                <li class="small"><span class="fa-li"></i></span> Age : <?php echo $row['age']; ?></li>
                                                <li class="small"><span class="fa-li"></i></span> Donate Venue : <?php echo $row['venue']; ?></li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img src="<?php echo "admin/";
                                                        echo $row['image']; ?>" alt="" class="img-circle img-fluid">
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

        </div>
        <!-- /.card -->
    </section>
<?php include('layouts/footer_donor_list.php'); ?>

