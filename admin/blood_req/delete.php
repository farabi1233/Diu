<?php
$id = $_GET['id'];
include('../include/connect.php');
$con = connect_db();


$sql = "DELETE FROM req_for_blood WHERE id = '$id'";
mysqli_query($con, $sql);
header("Location: index.php");

