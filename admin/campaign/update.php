<?php include('../include/header.php'); ?>
<?php

$id = $_POST['id'];


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
}


$name = $_POST['name'];
$details = $_POST['details'];
$start = $_POST['start'];
$end = $_POST['end'];
$location = $_POST['location'];



$sql_insert = "UPDATE `campaign` SET `id` = '$id', `name` = '$name',`start_time` = '$start',`end_time` = '$emd',`location` = '$location',`image` = '$image'  WHERE `campaign`.`id` = '$id'";
if(mysqli_query($con, $sql_insert)){ 
header("Location: index.php");
}
else{
    echo "query problem";
}
?>

<?php include('../include/footer.php'); ?>