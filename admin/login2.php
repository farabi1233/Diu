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
                                <h2>ACCOUNT LOGIN</h2>
                                <form action="login_function.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="name">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter Username ">
                                    </div>

                                    <div class="form-group" s>
                                        <label for="name">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Enter Password">
                                    </div>
                                    <div>
                                        <p><b>Email or Password id Wrong! please try again</b></p>
                                    </div>




                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button><br><br>

                                    <a href="#">Forgot Password? </a> <br>
                                    <a href="#">Sing Up? </a>
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