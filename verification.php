<?php
session_start();

$userEmail = $_SESSION['sesemail'];
$userName =  $_SESSION['sesname'];
$getCode = $_GET["code"];
$statusChange = "active";

$connect=mysqli_connect('localhost','root','','userinfo');
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
?> <script> location.href="index.php"; </script> <?php

?>