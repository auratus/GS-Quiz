<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>  
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{

    font-family: 'Lora', serif;
}

/* preloader starts here */
#preloader{
width: 100vw;
height: 100vh;
position: fixed;
z-index: 9999;
background-color: rgba(255,255,255,0.55);
background-image: url('bgremovedloader.gif');
background-repeat: no-repeat;
background-position: center;
display:none;
}
/* preloader ends here */

#main_sec{

    width: 100vw;
    height: 100vh;
    position: relative;
}

#first_sec{

    width: 50vw;
    height: 100vh;
    position: absolute;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
}
#second_sec{

    width:50vw;
    height: 100vh;
    position: absolute;
    right: 0; 
    background-image: url('svgsignup.svg');
    background-size: 100% 100%;
    background-repeat: no-repeat;
    opacity: 0.9;
}

#form_main{

    width: 50%;
    height:70%;
    background-color:rgba(0,128,128,0.7);
    border-radius: 8px;
    padding: 10px;
    box-shadow: 0px 0px 6px 4px #D3D3D3;
}

#heading{
    
    width:100%;
    height: 13%;
    display: flex;
    justify-content:space-around;
    align-items: center;
    flex-direction: column;
}

#heading h2,h5{
    color:#F8F8FF;
    font-weight: 100;
}

#or{

    width: 100%;
    height: 5vh;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 2.5vh 0 2.5vh 0;
    display: none;
}

#form{

    width: 100%;
    height: 70%;
    margin-top: 30px;
}

#manual{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content:space-around;
    align-items: center;
    flex-direction: column;
}

input{

    width: 80%;
    height: 13%;
    padding: 5px;
    border-radius: 4px;
    outline: none;
    border:none;
    text-align: center;
    font-family: 'Lora', serif;
    
}

::placeholder{

    font-family: 'Lora', serif;
    text-align: center;
}

#submit{
      
    width: 60%;  
    margin-top: 12px;
    color: #F8F8FF;
    background-color: black;
    font-size: 105%;
    cursor:pointer;
    transition-property:background-color;
    transition-duration:0.2s;
    transition-timing-function:linear;
}

#submit:hover{
    background-color:rgba(0,0,0,0.95);
}

#have_acc{
    width: 100%;
    height: 5%;
    display: flex;
    justify-content: center;
    align-items: center;
}

#have_acc a{
    text-decoration: none;
    color: black;
}

#social{

    width: 100%;
    height: 20%;
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-direction:column;
    margin-top: 5px;
    display: none;
}

#fb{
    width: 80%;
    height: 40%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: black;
}

 #social span{

     font-size: 85%;
     color:#F8F8FF; 
 }		

 #gmail{
    
    width: 80%;
    height: 40%;      
    display: flex;
    justify-content: center;
    align-items: center;   
    background-color: black;
       
 }


 @media(max-width: 1080px){

     #second_sec{
         display: none;
     }

     #first_sec{
         width: 100%;
     }

     #form_main{
         width: 90%;
     }

     #heading{
         height: 10%;
         margin-top: 60px;
     }

     #heading h2{
         font-size: 350%;
     }

     #heading h5{
         font-size: 200%;
     }

     #form{
         margin-top: 50px;
     }

     #have_acc h5{
           
           font-size: 200%;
     }

     #have_acc{
         height: 8%;
     }

     ::placeholder{
         font-size: 150%;
     }


#submit{
    font-size: 200%;
 }
}
 </style>
	<title>sign up</title>
    <script>
    // the below is the function to show the preloader just after user clicked the submit button 

//we need to show the preloader using javascript and hiding it using php,this is because when we use php mailer
//library so in between when php mailer executes,the whole backend execution stops until php mailer finish
//execution so if we try to show the preloader using php then it will not work because as we know when php
//mailer executes it stops the other execution at back end. 
        function showPreloader(){
            document.getElementById('preloader').style.display="block";
        }
    </script>
</head>
<body>
<div id="preloader">
        
		</div>

	  <main id="main_sec">
	  	    <section id="first_sec">
	  	    	      <div id="form_main">
	  	    	      	<div id="heading">
	  	    	      	<h2>Create Account</h2>
	  	    	      	<h5>Get started with your free account</h5>
	  	    	      	</div>

	  	    	      	<div id="social">	  	    	      		
   	    	      		<div id="fb">
	  	    	      		<img src="fb.png" width="14" height="14"><span>&nbsp;&nbsp;&nbsp;Login via facebook</span>
	  	    	      		</div>      		
	  	    	      		<div id="gmail">
	  	    	      			<img src="gml.png" width="14" height="14"><span>&nbsp;&nbsp;&nbsp;Login via gmail</span>
	  	    	      		</div>	  	    	      		
	  	    	        </div>

	  	    	      	<div id="or">
	  	    	      		<h4>OR</h4>
	  	    	      	</div>
	  	    	      	<form id="form" method="POST">
	  	    	      	<div id="manual">
	  	    	      		<input type="text" name="usrname" placeholder=" Your full name" id="name" required>
	  	    	      		<input type="email" name="usrmail" placeholder="Your email" required>
	  	    	      		<input type="number" name="contact" placeholder="Your contact" required>
	  	    	      		<input type="password" name="pass" placeholder="Create password" required> 
	  	    	      		<input type="password" name="confirm" placeholder="Confirm password" required>
	  	    	      		<input type="submit" name="submit" value="Create Account" id="submit" onclick="showPreloader()">
	  	    	      	</div>
	  	    	      	</form>
	  	    	      	<div id="have_acc">
	  	    	      		<h5>Have an account ? <a href="login.php">Log in</a></h5></div>
	  	    	      </div>      
	  	    </section>
	  	    <section id="second_sec"></section>
	  </main>

	  <!-- <script> document.getElementById('preloader').style.display = 'none';  </script> -->

	  <p>
	  	<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

  function hidePreloader(){
    echo	" <style type='text/css'>  #preloader{ display: none; }	</style> ";
    echo " hiding preloader ";
  }


if (isset($_POST['submit'])) {

//establishing connection to database

$connect=mysqli_connect('sql104.freewebhosting.com.bd',"ieeos_29365125",'dz80ywpg',"ieeos_29365125_commentsystem");

$usrname=$_POST['usrname'];
$usr_mail=$_POST['usrmail'];
$mobile=$_POST['contact'];
$password=$_POST['pass'];
$confpass=$_POST['confirm'];
$hashpass=password_hash($password, PASSWORD_BCRYPT);


//checking database for existing account from same email id

$query=" select * from signupdata where email='$usr_mail' ";
$para=mysqli_query($connect,$query);
// $arr=mysqli_fetch_array()

if (mysqli_fetch_array($para)) {
	?>
	<script type="text/javascript">alert('account already exist!');</script>
	<?php
}
else{

   if ($password==$confpass) {

    

    $random_number = rand(10000000000000000,95000000000000000);
   	 
        $insert=" insert into signupdata(name,email,mobile,password,status,random) values('$usrname','$usr_mail','$mobile','$hashpass','inactive',' $random_number')";
        $final=mysqli_query($connect,$insert);
        $_SESSION['sesemail']=$usr_mail;//saving for logout
        $_SESSION['sesname']=$usrname;//saving for user name at application form

//code for sending mail starts here        
        //Load Composer's autoloader
require ('Exception.php');
require ('PHPMailer.php');
require ('SMTP.php');

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);



try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info.rohittechnical@gmail.com';                     //SMTP username
    $mail->Password   = 'sahuji@14352';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('info.rohittechnical@gmail.com', 'Rohit Technical');
    // $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    $mail->addAddress($usr_mail,$usrname);               //Name is optional
  


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Rohit Technical Account verification';
    $mail->Body    = "Hello! {$usrname}<br><br><br> Please follow the link below to verify your account :<br><br>"."<html><head><body><a href=\"http://rtgames.synergize.co/verification.php?code={$random_number}\">http://rtgames.synergize.co/verification.php?code={$random_number}</a></body></head></html>"."<br><br>Regards<br>Rohit Technical";
        $mail->send();

    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
//code for sending mail ends here      

hidePreloader();
        ?>
          <script>
		  alert('We have sent a verification link to your registered email id\nPlease visit the link to complete your registration'); 
		  location.href="login.php";
		  </script>
        <?php

   }else{
   	   ?>
   	   <script type="text/javascript">alert('password mismatch');</script>
   	   <?php
   }

}


}

?>
	  </p>


</body>
</html>