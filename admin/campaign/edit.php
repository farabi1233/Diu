<?php include('../include/header.php'); ?>


<?php

$id = $_GET['id'];


include('../include/connect.php');
$con = connect_db();

$sql = "SELECT* FROM campaign ";

$result = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($result);





?>

<div class="row">
                            <div class="col-sm-9">
                                <div class="card card-statistics">


<div class="card">
    <div class="card-body">
        <h2>Edit Campaign Data:  :</h2>
        <hr>
        <form action="update.php" method="POST" enctype="multipart/form-data">
        
        <div class="form-group">
                <label for="name">Id</label>
                <input type="text" class="form-control" name="id" value="<?php echo $row['id'];  ?>">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $row['name'];  ?>">
            </div>
            
            
            
            
            <div class="form-group">
                <label for="name">Details</label>
                <textarea type="text" class="form-control" name="details" placeholder="Campaign Details" rows="3"> <?php echo $row['details'];  ?></textarea>
            </div>

            <div class="form-group">
                <label for="name">Start:</label>
                <input type="date" class="form-control" name="start" <?php echo $row['start_time'];  ?>">
            </div>
            <div class="form-group">
                <label for="name">End:</label>
                <input type="date" class="form-control" name="end" <?php echo $row['end_time'];  ?>">
            </div>
            <div class="form-group">
                <label for="name">Location</label>
                <textarea type="text" class="form-control" name="location" placeholder="Enter Locaton" rows="3"><?php echo $row['location'];  ?> </textarea>
            </div>

        
        
            <div class="form-group">
                <label for="name">Prome Image </label><br>

                <img src="<?php echo "../";
                            echo $row['image'];  ?>" alt="" width="100px" height="80px">
                <input type="file" class="form-control" name="image">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>




    </div>
</div>

<?php include('../include/footer.php'); ?>