<?php include('../include/header.php'); ?>
<?php include('../include/connect.php'); ?>
<?php


$con = connect_db();
$sql = "SELECT donate.*, donor_list.name as name, donor_list.blood_group as blood_group  FROM donor_list JOIN donate on donor_list.id = donate.user_id WHERE donor_list.id= donate.user_id ORDER BY donate.user_id DESC";

$result = mysqli_query($con, $sql);







?>


<div class="row">
    <div class="col-md-12">
        <div class="card card-statistics">



            <div class="container"></div>
            <div class="card">
                <div class="card-body">

                    <h2>Blood Donate List:</h2>
                    <table class="table">
                        <tr>
                            <th>SL No.</th>
                            <th>User ID</th>
                            <th>User Name  </th>
                            <th> Blood Group </th>
                            <th> Donate Date </th>
                            <th> Venue </th>
                            <th> Action </th>



                        </tr>
                        <?php $sl = 1 ?>
                        <?php while ($row = mysqli_fetch_assoc($result)) {; ?>

                            <tr>
                                <td><?php echo $sl; ?></td>

                                <td><h5><?php echo $row['user_id']; ?></h5></td>
                                <td><h5><?php echo $row['name']; ?></h5></td>
                               
                                <td><h5><?php echo $row['blood_group']; ?></h5></td>
                                <td><h5><?php echo $row['date']; ?></h5></td>
                                <td><h5><?php echo $row['venue']; ?></h5></td>
                                

                                <td>
                                   
                                    
                                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this Data?');">Delete</a>
                                </td>
                            </tr>
                            </tr>

                        <?php $sl++;
                        } ?>
                    </table>


                </div>

            </div>


        </div>
        <?php include('../include/footer.php'); ?>