<?php include('../include/header.php'); ?>
<?php

$id = $_POST["id"] ;
$title = $_POST['title'];
$description = $_POST['description'];
$date = $_POST['date'];



include('../include/connect.php');
$con = connect_db();


if (!empty($_FILES['image']['name'])) {

    $rand = rand(1111, 888888);
    $image = 'uploads/' . $rand . $_FILES['image']['name'];

    $upload = '../uploads/' . $rand . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $upload);



    if (!empty($row['image'])) {
        //echo str_replace('uploads/','',$row['image']);
        //exit;
        unlink('../uploads/' . str_replace('uploads/','',$row['image']));
    }

    $sql_insert = "UPDATE `blog` SET `id` = NULL, `title` = '$title', `description` = '$description',`date` = '$date',`image` = '$image'  WHERE `blog`.`id` = '$id'";
    if(mysqli_query($con, $sql_insert)){ 
    header("Location: index.php");
    }
    else{
        echo "query problem";
    }
   


}

else{

     $sql_insert = "UPDATE `blog` SET `id` = NULL, `title` = '$title', `description` = '$description',`date` = '$date',`image` = NUll WHERE `blog`.`id` = '$id'";
    if(mysqli_query($con, $sql_insert)){ 
    header("Location: index.php");
    }
    else{
        echo "query problem";
    }



}

?>






<?php include('../include/footer.php'); ?>