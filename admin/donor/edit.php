<?php include('../include/header.php'); ?>
<?php
$id = $_GET['id'];
include('../include/connect.php');
$con = connect_db();
$sql = "SELECT* FROM donor_list  where id = '$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>
<?php

?>

<div class="card">
    <div class="card-body">
        <h2>Edit Donor Data</h2>
        <hr>
        <form action="update.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">ID: (required)</label>
                <input required type="text" class="form-control" name="id" value="<?php echo $row['id'];  ?>">
            </div>
            <div class="form-group">
                <label for="name">Name: (required)</label>
                <input required type="text" class="form-control" name="name" value="<?php echo $row['name'];  ?>">
            </div>
            <div class="form-group">
                <label for="name">Blood Group: (required)</label>
                <select required type="text" class="form-control" name="blood_group">
                    
                        
                <option  selected value="<?php echo $row['blood_group'];  ?>"><?php echo $row['blood_group'];  ?></option>
                           
                           <option value="O+">O+</option>
                           <option value="O-">O-</option>
                           <option value="A+">A+</option>
                           <option value="A-">A-</option>
                           <option value="B+">B+</option>
                           <option value="B-">B-</option>
                           <option value="AB+">AB+</option>
                           <option value="AB-">AB-</option>
                          

                       
                               

                  
                </select>
            </div>
            <div class="form-group">
                <label for="name">Age</label>
                <input type="text" class="form-control" name="age" value="<?php echo $row['age'];  ?>">
            </div>
            <div class="form-group">
                <label for="name">Gender</label>
                <select type="text" class="form-control" name="gender" required>
                    <?php

                    if (!empty($row['gender'])) { ?>
                        <option value="<?php echo $row['gender'];  ?>" disabled selected><?php echo $row['gender'];  ?></option>
                    <?php  }
                    ?>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="others">Others</option>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Phone No: (required) </label>
                <input required type="text" class="form-control" name="phone" value="<?php echo $row['phone']; ?>">
            </div>
            <div class="form-group">
                <label for="name">Email Address</label>
                <input type="email" class="form-control" name="email" value="<?php echo $row['email'];  ?>">
            </div>
            <div class="form-group">
                <label for="name">Address</label>
                <textarea type="text" class="form-control" name="address" placeholder="Enter Address" rows="6"><?php echo $row['address'];  ?> </textarea>
            </div>
            <div class="form-group">
                <label for="name">Donor Image </label><br>
                <img src="<?php echo "../";
                echo $row['image'];  ?>" alt="" width="100px" height="80px">
                <input type="file" class="form-control" name="image">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</div>
<?php include('../include/footer.php'); ?>