<?php include('../include/header.php'); ?>
<?php include('../include/connect.php'); ?>
<?php
$con = connect_db();
$sql = "SELECT * FROM `campaign`";
$result = mysqli_query($con, $sql);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-statistics">
            <div class="container"></div>
            <div class="card">
                <div class="card-body">
                    <h2>Campaign List:</h2>
                    <table class="table">
                        <tr>
                            <th>SL No.</th>
                            <th>Name</th>
                            <th>Details</th>
                            <th>Start Time</th>
                            <th>End Time </th>
                            <th>Location</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        <?php $sl = 1 ?>
                        <?php while ($row = mysqli_fetch_assoc($result)) {; ?>
                            <tr>
                                <td><?php echo $sl; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['details']; ?></td>
                                <td><?php echo $row['start_time']; ?></td>
                                <td><?php echo $row['end_time']; ?></td>
                                <td><?php echo $row['location']; ?></td>
                                <td><img src="<?php echo "../";
                                echo $row['image']; ?>" alt="" width="100px" height="80px"></td>
                                <td>
                                    <a href="show.php?id=<?php echo $row['id']; ?>" class="btn btn-info">View</a>
                                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
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