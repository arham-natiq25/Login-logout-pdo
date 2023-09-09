<?php
include 'includes/init.php';


if (isset($_SESSION['logged_in'])) {

    // assigning an empty array to session
    $_SESSION=[];
    //forcefully expiring a cookie 
    setcookie(session_name(),session_id(),time()-1000,"/");
    session_destroy();

    header("location:index.php");
    

}else{
       header("location:index.php?error=Please login to your account");
}
?>