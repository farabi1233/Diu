<?php include('../include/header.php'); ?>



<?php
$id = $_POST['id'];
 $title = $_POST['title'];
$description = $_POST['description'];
$date = $_POST['date'];


include('../include/connect.php');
$con = connect_db();
$sql = "SELECT * FROM `blog` WHERE id ='$id';";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$row['image'];



if (empty($_FILES['image']['name'])) {

    
    $sql_insert = "UPDATE `blog` SET  `title` = '$title',`description` = '$description',`date` = '$date' WHERE `blog`.`id` = '$id'";
    mysqli_query($con, $sql_insert);
        
     header("Location:index.php");
       ob_end_flush();
    

}
else{

   
       $rand = rand(1111, 888888);
    $image = 'uploads/' . $rand . $_FILES['image']['name'];

    $upload = '../uploads/' . $rand . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $upload);



    if (!empty($row['image'])) {
        //echo str_replace('uploads/','',$row['image']);
        //exit;
        unlink('../uploads/' . str_replace('uploads/','',$row['image']));
    }
    $sql_insert = "UPDATE `blog` SET  `title` = '$title',`description` = '$description',`date` = '$date',`image` = '$image' WHERE `blog`.`id` = '$id'";
    mysqli_query($con, $sql_insert);
        
        header("Location:index.php");
       ob_end_flush();
}

?>



<?php include('../include/footer.php'); ?>