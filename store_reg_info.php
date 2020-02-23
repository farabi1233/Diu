<?php

$rand = rand(1111, 888888);
$image = 'uploads/' . $rand . $_FILES['image']['name'];
$upload = 'admin/uploads/' . $rand . $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], $upload);



$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$blood_group = $_POST['blood_group'];
$address = $_POST['address'];

include('admin/include/connect.php');
$con = connect_db();
$sql = "INSERT INTO `reg_donor` (`id`, `name`, `age`, `email`, `phone`, `gender`, `blood_group`, `image`, `address`) VALUES (NULL, '$name ', '$age ', '$email', '$phone', '$gender', '$blood_group ', '$image ', '$address');";
if (mysqli_query($con, $sql)) {
    header("Location: index.php");
}
