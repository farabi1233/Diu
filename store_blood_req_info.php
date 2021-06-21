<?php





 $name = $_POST['name'];
 $age = $_POST['age'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $gender = $_POST['gender'];
 $blood_group = $_POST['blood_group'];
 $blood_bag = $_POST['blood_bag'];
 $address = $_POST['address'];


include('admin/include/connect.php');
$con = connect_db();
$sql = "INSERT INTO `req_for_blood` (`id`, `name`, `age`, `email`, `phone`, `gender`, `blood_group`, `blood_bag`, `address`) VALUES (NULL, '$name ', '$age ', '$email', '$phone', '$gender', '$blood_group ', '$blood_bag ', '$address');";
if (mysqli_query($con, $sql)) {
    header("Location: success_req.php");
}
