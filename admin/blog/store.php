<?php

$rand = rand(1111, 888888);
$image = 'uploads/' . $rand . $_FILES['image']['name'];
$upload = '../uploads/' . $rand . $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], $upload);




 $title = $_POST['title'];

 $description = $_POST['description'];
 $date = $_POST['date'];



include('../include/connect.php');
$con = connect_db();
$sql = "INSERT INTO `blog` (`id`, `title`, `description`, `date`,`image`) VALUES (NULL, '$title ', '$description ', '$date','$image');";
if(mysqli_query($con, $sql)){
    header("Location: index.php");
}







?>