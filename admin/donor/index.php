<?php include("../include/header.php") ?>






<?php include('../include/connect.php'); ?>
<?php
$con = connect_db();
$sql = "SELECT donor_list.*, blood_group.blood_group FROM donor_list JOIN blood_group on donor_list.blood_id =blood_group.id ";
$result = mysqli_query($con, $sql);
?>
<div class="row">
    <div class="col-ld-12">
        <div class="card card-statistics">
            <div class="container"></div>
            <div class="card">
                <div class="card-body">
                    <h2>Donor List:</h2>
                    <table class="table">
                        <tr>
                            <th>SL No.</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Blood_Group</th>
                            <th>Age</th>
                            <th>Gender </th>
                            <th>Phone No. </th>
                            <th>Email </th>
                            <th>Address </th>
                            <th>Image </th>
                            <th>Action </th>
                        </tr>
                        <?php $sl = 1 ?>
                        <?php while ($row = mysqli_fetch_assoc($result)) {; ?>
                            <tr>
                                <td>
                                    <h5><?php echo $sl; ?></h5>
                                </td>
                                <td>
                                    <h5><?php echo $row['id']; ?></h5>
                                </td>
                                <td>
                                    <h5><?php echo $row['name']; ?></h5>
                                </td>
                                <td>
                                    <h5><?php echo $row['blood_group']; ?></h5>
                                </td>
                                <td>
                                    <h5><?php echo $row['age']; ?></h5>
                                </td>
                                <td>
                                    <h5><?php echo $row['gender']; ?></h5>
                                </td>
                                <td>
                                    <h5><?php echo $row['phone']; ?></h5>
                                </td>
                                <td>
                                    <h5><?php echo $row['email']; ?></h5>
                                </td>
                                <td>
                                    <h5><?php echo $row['address']; ?></h5>
                                </td>
                                <td><img src="<?php echo "../";
                                                echo $row['image']; ?>" alt="" width="100px" height="80px"></td>
                                <td>
                                    <a href="show.php?id=   <?php echo $row['id']; ?>  " class="btn btn-info">View</a>
                                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this Data?');"><i class="nav-icon ti ti-trash"> Delete</i></a>
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