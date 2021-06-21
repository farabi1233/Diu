<?php 
session_start();
if(isset($_SESSION['uname'])){
    echo "<script>location.href='index.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <title>login</title>
    <style>
        body {
            background-color: #3498DB
        }


        p {
            color: #FDFEFE ;
            background-color: #CB4335 ;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-6 mx-auto">
                    <div class="jumbotron">

                        <div class="card">
                            <div class="card-body">
                                <h2>Admin Login Panel</h2>
                                <form action="login_function.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                        <label for="name">Username</label>
                                        <input type="text" class="form-control" name="uname" id="uname" placeholder="Enter Username ">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Password</label>
                                        <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter Password">
                                    </div>
                                    <div>
                                        <p><b>Username or Password is Wrong! please try again</b></p>
                                    </div>

                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button><br><br>

                                    username: <span style="color: red;" >admin </span>
                                    <br>
                                    password:<span style="color: red;" >admin</span>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>



</body>

</html>