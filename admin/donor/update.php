<?php include('../include/header.php'); ?>



<?php
$id = $_POST['id'];
$name = $_POST['name'];
$blood_group = $_POST['blood_group'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
 $address = $_POST['address'];

include('../include/connect.php');
$con = connect_db();
$sql = "SELECT * FROM `donor_list` WHERE id ='$id';";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);


if (empty($_FILES['image']['name'])) {


    $sql_insert = "UPDATE `donor_list` SET `id`='$id', `name` = '$name',`blood_group` = '$blood_group',`age` = '$age',`gender` = '$gender',`phone` = '$phone',`email` = '$email',`address` = '$address'  WHERE `id` = '$id'";
    mysqli_query($con, $sql_insert);

    header("Location:index.php");
    ob_end_flush();
} else {


    $rand = rand(1111, 888888);
    $image = 'uploads/' . $rand . $_FILES['image']['name'];

    $upload = '../uploads/' . $rand . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $upload);



    if (!empty($row['image'])) {
        //echo str_replace('uploads/','',$row['image']);
        //exit;
        unlink('../uploads/' . str_replace('uploads/', '', $row['image']));
    }
    $sql_insert = "UPDATE `donor_list` SET `id`='$id', `name` = '$name',`blood_group` = '$blood_group',`age` = '$age',`gender` = '$gender',`phone` = '$phone',`email` = '$email',`address` = '$address',`image` = '$image'  WHERE `id` = '$id'";
    mysqli_query($con, $sql_insert);

    header("Location:index.php");
    ob_end_flush();
}

?>



<?php include('../include/footer.php'); ?>