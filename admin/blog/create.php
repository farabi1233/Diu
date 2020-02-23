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
                    <h2>Add New Blog :</h2>
                    <hr>
                    <form action="store.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Blog Title">
                        </div>
                        <div class="form-group">
                            <label for="name">Blog Description</label>
                            <textarea type="text" class="form-control" name="description" rows="6"> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="name">Date</label>
                            <input type="date" class="form-control" id="e" name="date" placeholder="In Which day Campaign Start">
                            <script>
                                document.getElementById('e').value = new Date().toISOString().substring(0, 10);
                            </script>
                        </div>

                        <div cla <div class="form-group">
                            <label for="name">Blog Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>

                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
            <?php include('../include/footer.php'); ?>