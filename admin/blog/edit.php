<?php include('../include/header.php'); ?>


<?php

$id = $_GET['id'];


include('../include/connect.php');
$con = connect_db();

$sql = "SELECT* FROM blog  where `blog`.`id` = '$id'";

$result = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($result);





?>

<div class="row">
    <div class="col-sm-9">
        <div class="card card-statistics">


            <div class="card">
                <div class="card-body">
                    <h2>Edit Blog Data: :</h2>
                    <hr>
                    <form action="update.php" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                            <label for="name">Title</label>
                            <input  type="text" class="form-control" name="id" value="<?php echo $row['id'];  ?> " >
                        </div>

                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" class="form-control" name="title" value="<?php echo $row['title'];  ?>">
                        </div>




                        <div class="form-group">
                            <label for="name">Description</label>
                            <textarea type="text" class="form-control" name="description" placeholder="Campaign Details" rows="3"> <?php echo $row['description'];  ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="name">date:</label>
                            <input  required type="date" class="form-control" name="date" <?php echo $row['date'];  ?>">
                        </div>
                        


                        <div class="form-group">
                            <label for="name">Blog Image </label><br>

                            <img src="<?php echo "../";
                                        echo $row['image'];  ?>" alt="" width="100px" height="80px">
                            <input type="file" class="form-control" name="image">
                        </div>

                        <button type="submit" class="btn btn-primary" name="submit">Update</button>
                    </form>




                </div>
            </div>

            <?php include('../include/footer.php'); ?>