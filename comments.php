<?php

session_start();

//for hiding the warnings
error_reporting(E_ALL ^ E_WARNING);

$userEmail=$_SESSION['sesemail'];
$userName=$_SESSION['sesname'];
$connection1 = mysqli_connect('sql104.freewebhosting.com.bd',"ieeos_29365125",'dz80ywpg',"ieeos_29365125_commentsystem");
    $query1=" select * from signupdata where email='$userEmail' ";
    $send_query = mysqli_query($connection1,$query1);
    $response_array = mysqli_fetch_array($send_query);

if($userEmail && $userName && $response_array['status']=="active"){
       
$connection = mysqli_connect('sql104.freewebhosting.com.bd',"ieeos_29365125",'dz80ywpg',"ieeos_29365125_commentsystem");
$query12 = " select * from commentsdata where email='$userEmail' ";
$final12 = mysqli_query($connection,$query12);
$array12 = mysqli_fetch_array($final12);

if($array12){

    ?>
    <script>
        alert('only one comment per user is allowed.');
        location.href = "index.php";
    </script>
        <?php

}else{
//converting line breaks into <br> so that we get the same comment as entered by user      
    $message =nl2br($_POST['comment'],false);

//converting line breaks into <br> so that we get the same comment as entered by user  

    date_default_timezone_set('Asia/Kolkata');
    $date = date('F d,Y');
    $time = date('G:i');
    
    $query = "insert into commentsdata(name,email,comment,date,time) values('$userName','$userEmail','$message','$date','$time')";
    $final = mysqli_query($connection,$query);
    header('location:index.php');

}
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