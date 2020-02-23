<?php



echo $user_id = $_POST['user_id'];


 $date = $_POST['date'];
 $venue = $_POST['venue'];




include('../include/connect.php');
$con = connect_db();
$sql = "INSERT INTO `donate` (`id`, `user_id`, `date`, `venue`) VALUES (NULL, '$user_id ', '$date ', '$venue');";
if(mysqli_query($con, $sql)){
    header("Location: index.php");
}







?>