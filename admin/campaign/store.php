<?php

$rand = rand(1111, 888888);
$image = 'uploads/' . $rand . $_FILES['image']['name'];
$upload = '../uploads/' . $rand . $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], $upload);



$id = $_POST['id'];
 $name = $_POST['name'];

 $details = $_POST['details'];
 $start = $_POST['start'];
 $end = $_POST['end'];
 $location = $_POST['location'];



include('../include/connect.php');
$con = connect_db();
$sql = "INSERT INTO `campaign` ( `name`, `details`, `start_time`, `end_time`, `location`, `image`) VALUES ( '$name ', '$details ', '$start', '$end', '$location', '$image');";
if(mysqli_query($con, $sql)){
    header("Location: index.php");
}
