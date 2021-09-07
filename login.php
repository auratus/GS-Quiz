<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<style type="text/css">

		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body{

			font-family: 'Lora', serif;
		}

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
			height:65%;
			background-color:rgba(0,128,128,0.7);
			border-radius: 8px;
			padding: 10px;
			box-shadow: 3.5px 3.5px 4px 2px #D3D3D3;
		}

		#heading{
            
            width:100%;
            height: 8%;
			display: flex;
			justify-content:space-around;
			align-items: center;
			flex-direction: column;
		}

		#heading h2{
			color:#F8F8FF;
			font-weight: 100;
		}

		#cred_msg{
			width: 100%;
			height: 8%;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		#avatar{

			width: 100%;
			height: 25%;
			display: flex;
			justify-content: center;
			align-items: center;
			margin: 10px 0 10px 0;
		}

		#avatar img{

			width: 30%;
			height: 100%;
		}

		

		#form{

			width: 100%;
			height: 45%;
			margin-top: 10px;
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
			height: 22%;
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
              
            width: 70%;  
			margin-top: 12px;
			color: #F8F8FF;
			background-color: black;
			font-size: 100%; /*font size in percentage depends on font size of its parent block(here 'div')*/
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

		h5{
			color:#F8F8FF;
			font-weight: 100; 
		}

		#cre_acc{

			font-size: 95%;
		}

		@media(max-width: 1080px){

			#heading{
				margin-top: 30px;
			}

          #second_sec{
          	display: none;
          }

          #first_sec{
          	width: 100vw;
          }

          #form_main{

          	width: 90%;
          	height: 60%;
          }

          #heading h2{
          	font-size:250%;
          }

          #avatar{
          	height: 20%;
          }

          #cred_msg h5{

          	font-size: 150%;
          }

          #form{
          	height: 45%;
          }

          #manual input{
          	width: 65%;

          }

          #avatar{
          	margin: 20px 0 20px 0;
          }

          #have_acc{
          	height: 8%;
          }

          #have_acc h5{

          	font-size: 150%;
          }

          #submit{
          	font-size: 250%;
          }

          ::placeholder{
          	font-size: 200%;
          }

		}


	</style>
	<title>Log In</title>
</head>
<body>

	  <main id="main_sec">
	  	    <section id="first_sec">
	  	    	      <div id="form_main">
	  	    	      	<div id="heading">
	  	    	      	<h2>User Log In</h2>  	    	      	
	  	    	      	</div>
                        
                        <div id="avatar"><img src="maleavatar.svg"></div>

	  	    	      	<div id='cred_msg'><h5>Enter Your Credentials</h5></div>

	  	    	      	<form id="form" method="POST">
	  	    	      	<div id="manual">
	  	    	      		<input type="email" name="usrmail" placeholder="Your email" required>
	  	    	      		<input type="password" name="pass" placeholder="Your password" required> 
	  	    	      		<input type="submit" name="submit" value="Log In" id="submit">
	  	    	      	</div>
	  	    	      	</form>
	  	    	      	<div id="have_acc">
	  	    	      		<h5>New user ? <a href="signup.php" id="cre_acc">Create account</a></h5></div>
	  	    	      </div>      
	  	    </section>
	  	    <section id="second_sec"></section>
	  </main>

	  <?php  

	  $connect=mysqli_connect('sql104.freewebhosting.com.bd',"ieeos_29365125",'dz80ywpg',"ieeos_29365125_commentsystem");
       
      if (isset($_POST['submit'])) {
      	
                  $usermail=$_POST['usrmail'];
                  $userpass=$_POST['pass'];
                  $hashed=password_hash($userpass, PASSWORD_BCRYPT);

                  

                  $query=" select * from signupdata where email='$usermail' ";
                  $call=mysqli_query($connect,$query);
                  $arr=mysqli_fetch_array($call);

                  if ($arr) {
                     $dbpass=$arr['password'];
                     $status = $arr["status"];

                     if($status=='active'){

                     if (password_verify($userpass,$dbpass )) {
                     	
                     	$_SESSION['sesemail']=$arr['email']; //storing in session bcz we will make use of it 
                     	                                     // in next page.
                     	$_SESSION['sesname']=$arr['name'];
                      	?>
                      	<script type="text/javascript"> location.href="index.php"; </script>
                      	<?php
                      } 
                      else{
                      	?>
                      	<script type="text/javascript">alert('Wrong password');</script>
                      	<?php
                      }

                  }

                  else{

                    ?>  <script> 
                      alert("your account has not been verified yet!\nPlease visit the verification link sent to your email id to complete your verification process.") 
                      location.href="login.php";
                      </script>  
                      <?php

              }

                }   

                else{
 
                    ?>
                    <script type="text/javascript">alert('account does not exist');</script>
                    <?php

               }
                

      }

	  ?>

</body>
</html>