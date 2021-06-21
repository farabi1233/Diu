<?php
$uname="admin";
$pwd="admin";
session_start();
if(isset($_SESSION['uname'])){
    echo "<script>location.href='index.php'</script>";
}else{
    if($_POST['uname'] == $uname && $_POST['pwd'] ==$pwd){
        $_SESSION['uname'] = $uname;
        echo "<script>location.href='index.php'</script>";
    }else{
        echo "<script>location.href='login2.php'</script>";
    }
}

?>