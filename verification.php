<?php
session_start();

$userEmail = $_SESSION['sesemail'];
$userName =  $_SESSION['sesname'];
$getCode = $_GET["code"];
$statusChange = "active";

$connect=mysqli_connect('sql104.freewebhosting.com.bd',"ieeos_29365125",'dz80ywpg',"ieeos_29365125_commentsystem");
$selection = " select * from signupdata where email='$userEmail' ";
$selectQuery = mysqli_query($connect,$selection);
$array = mysqli_fetch_array($selectQuery);
$randValue = $array['random'];
if($getCode==$randValue){
$query = " update signupdata set status='$statusChange' where email='$userEmail' ";
$final = mysqli_query($connect,$query);
}
else{
    ?> <script> alert('Sorry!\nVerification could not be completed.') </script> <?php
}
?> <script> 
alert('Verification successful'); 
location.href="index.php"; </script> <?php

?>
