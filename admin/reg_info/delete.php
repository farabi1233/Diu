<?php
$id = $_GET['id'];
include('../include/connect.php');
$con = connect_db();
$sql = "SELECT * FROM reg_donor WHERE id = $id";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);
$image_location = '../' . $data['image'];
if (file_exists($image_location)) {
    unlink($image_location);
}
$sql = "DELETE FROM reg_donor WHERE id = '$id'";
mysqli_query($con, $sql);
header("Location: index.php");

