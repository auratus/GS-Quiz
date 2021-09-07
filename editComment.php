<?php

session_start();
$message = $_POST['comment'];
$usr_mail=$_SESSION['sesemail'];

//converting line breaks into <br> so that we get the same comment as entered by user  
   $messageConverted = nl2br($message);

$userEmail=$_SESSION['sesemail'];
$userName=$_SESSION['sesname'];

$connection = mysqli_connect('sql104.freewebhosting.com.bd',"ieeos_29365125",'dz80ywpg',"ieeos_29365125_commentsystem");

$query = " update commentsdata set comment='$messageConverted' where email='$usr_mail' ";
$final = mysqli_query($connection,$query);

header('location:index.php');
?>