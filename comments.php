<?php

session_start();


$userEmail=$_SESSION['sesemail'];
$userName=$_SESSION['sesname'];

if($userEmail && $userName){
$connection = mysqli_connect('localhost',"root",'',"comments");

$message = $_POST['comment'];


date_default_timezone_set('Asia/Kolkata');
$date = date('F d,Y');
$time = date('G:i');

$query = "insert into commentsdata(name,email,comment,date,time) values('Rohit','rohitsahu721@yahoo.com','$message','$date','$time')";
$final = mysqli_query($connection,$query);
header('location:index.php');
}

else{
    ?>
<script>
    alert('You must login to continue');
    location.href = "index.php";
</script>
    <?php
}

?>