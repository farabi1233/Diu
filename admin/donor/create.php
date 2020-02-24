<?php include('../include/header.php'); ?>


<?php


include('../include/connect.php');





?>

<div class="row">
    <div class="col-sm-9">
        <div class="card card-statistics">

            <div class="card">
                <div class="card-body">
                    <h2>Add New Donor </h2>
                    <hr>
                    <form action="store.php" method="POST" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label for="name">Name: (required)</label>
                            <input required type="text" class="form-control" name="name" placeholder="Enter Donor Name">
                        </div>
                        <div class="form-group">
                            <label for="name">Blood Group: (required)</label>
                            <select class="form-control" name="blood_group">
                            <option disabled selected>Blood Group</option>
                           
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
                            <input type="text" class="form-control" name="age" placeholder="Enter Age">
                        </div>
                        <div class="form-group">
                            <label for="name">Gender</label>
                            <select type="text" class="form-control" name="gender">
                                <option value="" disabled selected>Select Gender ...</option>

                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Phone No: (required) </label>
                            <input required type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="name">Email Address</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email Address">
                        </div>
                        <div class="form-group">
                            <label for="name">Address</label>
                            <textarea type="text" class="form-control" name="address" placeholder="Enter Address" rows="6"> </textarea>
                        </div>
                        <div cla <div class="form-group">
                            <label for="name">Donor Image </label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
            <?php include('../include/footer.php'); ?>