<?php
$id = $_GET['id'];
include('../include/connect.php');
$con = connect_db();


$sql = "DELETE FROM donate WHERE id = '$id'";
 mysqli_query($con, $sql);
 header("Location: index.php");




// if(isset($_GET['id'])){


//    $id = $_GET['id'];
    
//     include('../include/connect.php');
//     $con = connect_db();
//     $sql = "DELETE FROM categories WHERE id = $id";
//     
//     $result = mysqli_query($con, $sql);
//     header("Location: index.php");
// }
// else{

//     echo "out of loop";
// }