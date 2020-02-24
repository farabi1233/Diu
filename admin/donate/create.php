<?php include('../include/header.php'); ?>


<?php


include('../include/connect.php');
$con = connect_db();





?>
<div class="row">
    <div class="col-sm-9">
        <div class="card card-statistics">


            <div class="card">
                <div class="card-body">
                    <h2>Add Donate Info :</h2>
                    <hr>
                    <form action="store.php" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="name">User Id</label>
                            <input type="text" class="form-control" name="user_id" placeholder="Enter Donor  ID">
                        </div>


                        <div class="form-group">


                            <label for="name">Date :</label>
                            <input type="date" class="form-control" id="e" name="date" placeholder="Donate Date">
                            <script>
                                document.getElementById('e').value = new Date().toISOString().substring(0, 10);
                            </script>
                        </div>

                       


                          

                        <div class="form-group">
                            <label for="name">Venue : (required)</label>
                            <select required type="text" class="form-control" name="venue">
                                <option value="" disabled selected>Select Venue ...</option>

                                <option value="Permanent Campus">Permanent Campus</option>
                                <option value="Main Campus ">Main Campus </option>
                                <option value="Others">Others</option>


                            </select>
                        </div>



                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>




                </div>
            </div>


            <?php include('../include/footer.php'); ?>