<?php include('../include/header.php'); ?>
<?php include('../include/connect.php'); ?>
<?php


$con = connect_db();
$sql = "SELECT * FROM `donate`";

$result = mysqli_query($con, $sql);







?>


<div class="row">
    <div class="col-md-9">
        <div class="card card-statistics">



            <div class="container"></div>
            <div class="card">
                <div class="card-body">

                    <h2>Blood Donate List:</h2>
                    <table class="table">
                        <tr>
                            <th>SL No.</th>
                            <th>Id</th>
                            <th>Date  </th>
                            <th> Venue </th>
                            <th> Action </th>


                        </tr>
                        <?php $sl = 1 ?>
                        <?php while ($row = mysqli_fetch_assoc($result)) {; ?>

                            <tr>
                                <td><?php echo $sl; ?></td>

                                <td><?php echo $row['user_id']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td><?php echo $row['venue']; ?></td>
                                

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