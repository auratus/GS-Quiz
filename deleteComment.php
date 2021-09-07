<?php
session_start();

$commentId = $_GET['id'];

$connection = mysqli_connect('sql104.freewebhosting.com.bd',"ieeos_29365125",'dz80ywpg',"ieeos_29365125_commentsystem");
$query = " delete from commentsdata where id='$commentId' " ;
$final = mysqli_query($connection,$query);
header("location:index.php");



?>