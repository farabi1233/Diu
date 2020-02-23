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
                    <h2>Add New Campaign :</h2>
                    <hr>
                    <form action="store.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Name: (required)</label>
                            <input required type="text" class="form-control" name="name" placeholder="Enter Campaign Name">
                        </div>

                        <div class="form-group">
                            <label for="name">Details: (required)</label>
                            <textarea required type="text" class="form-control" name="details" placeholder="Campaign Details" rows="3"> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="name">Starting Day: (required)</label>
                            <input required type="date" class="form-control" name="start" placeholder="In Which day Campaign Start">
                        </div>
                        <div class="form-group">
                            <label for="name">Ending Day: (required)</label>
                            <input required type="date" class="form-control" name="end" placeholder="In Which day Campaign End"">
                         </div>
                         <div class=" form-group">
                            <label for="name">Location: (required)</label>
                            <textarea required type="text" class="form-control" name="location" placeholder="Enter Locaton" rows="3"> </textarea>
                        </div>
                        <div cla <div class="form-group">
                            <label for="name">Promo Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
            <?php include('../include/footer.php'); ?>