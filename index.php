<?php
session_start();

//for hiding the warnings
error_reporting(E_ALL ^ E_WARNING);

$connection = mysqli_connect('sql104.freewebhosting.com.bd',"ieeos_29365125",'dz80ywpg',"ieeos_29365125_commentsystem");

//printing all the comments
$query  = " select * from commentsdata";
$final = mysqli_query($connection,$query);
$array=mysqli_fetch_array($final);
$rows = mysqli_num_rows($final);


// checking signin
$usr_mail = $_SESSION['sesemail'];
$usrname = $_SESSION['sesname'];



//making connection to database for showing/hiding 3 dots
$query2 = " select * from commentsdata where email='$usr_mail' ";
    $final2 = mysqli_query($connection,$query2);
    $array2 = mysqli_fetch_array($final2);
    $usrid = $array2['id'];

?>

<!DOCTYPE html>
<html>

<head>

    <title>General Studies Quiz - Rohit Technical</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="selectcss.css">
    <script src="https://kit.fontawesome.com/280204ac91.js" crossorigin="anonymous"></script>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta charset="UTF-8">
    <meta name="description" content="General studies quiz for civil services exams and other competitive exams">
    <meta name="keywords" content="World GK">
    <meta name="author" content="Rohit Sahu">
    <meta name="google-site-verification" content="gkiPSoeZAbqveVr1QKhhG-35-IcFxEnxR3FDnHppuBk" />
    <script>

function delFunc(){
    debugger;
    if(confirm(`Are you sure?\nDelete comment?`)){
        location.href=`deleteComment.php?id=<?php echo $array['id'] ?>`
    }
}

fetch('https://api.ipify.org/?format=json').
    then((jasonRes)=>{
        return jasonRes.json();
    }).then((objRes)=>{
        document.getElementById('ip').value = objRes.ip;
    }).catch((arror)=>{
        console.log(arror);
    });

        

</script>

</head>

<body>
    <header>
        <nav id="navigation_child">
            <div id="logo_div">
                <img src="logo1.png" id="rt_logo">
            </div>

            <div id="nav_main">

                <!-- the below three must be siblings in order to make transition using checkbox -->

                <input type="checkbox" id="checkBox" />
                <label for="checkBox" id="checkLabel">&#x2630;</label>
                <ul id="drop_down">
                    <label id="close" for="checkBox"> <i class="fas fa-window-close"></i></label>
                    <li id="index"><a href="https://rohittechnical.cf/">Home</a></li>
                    <li id="services"><a href="https://rohittechnical.cf/services.html">Services</a></li>
                    <li id="contactus"><a href="https://rohittechnical.cf/contactus.html">Contact Us</a></li>
                    <li id="myprojects"><a href="https://rohittechnical.cf/myprojects.html">Projects</a></li>
                    <li><button id="login"><a href="login.php"> Log in </a></button></li>
                    <!-- <li><button id="signin"><a href="logout.php"> Log out </a></button></li> -->
                    <li id="signin"> <img src="maleavatar.svg"/> <div id="nou"> <div id="logout"> <p id="logoutbtn"><a href="logout.php" >Logout</a></p> <p id="userInfo"><a href="userInfo.php" >User Info</a></p></div> <?php echo"{$usrname}"; ?>&nbsp;<i class="fas fa-caret-down"></i></div> </li>
                    <li id="mo_log_btn"> <p> <a href="logout.php"> Log out </a> </p> </li>
                    <li id="mo_usr_btn"> <p> <a href="userInfo.php"> User Info</a> </p> </li>
                </ul>


            </div>


        </nav>

    </header>

    <main id="main">
        <form id="child" method="GET" action="mainPage.php">
            <div id='selection'>
                <h1 id="category_head">Select Category :</h1>
                <select id="category" required name="category">
                    <option class="options">Select Category</option>
                    <option class="options" value="9">World GK</option>
                    <option class="options" value="10">Entertainment:Books</option>
                    <option class="options" value="11">Entertainment:Film</option>
                    <option class="options" value="12">Entertainment:Music</option>
                    <option class="options" value="13">Entertainment:Musicals and Theatres</option>
                    <option class="options" value="14">Entertainment:Television</option>
                    <option class="options" value="15">Entertainment:Video Games</option>
                    <option class="options" value="16">Entertainment:Board Games</option>
                    <option class="options" value="17">Science&Nature</option>
                    <option class="options" value="18">Science:Computers</option>
                    <option class="options" value="19">Science:Mathematics</option>
                    <option class="options" value="20">Mythology</option>
                    <option class="options" value="21">Sports</option>
                    <option class="options" value="22">Geography</option>
                    <option class="options" value="23">History</option>
                    <option class="options" value="24">Politics</option>
                    <option class="options" value="26">Celebrities</option>
                    <option class="options" value="27">Animals</option>
                    <option class="options" value="28">Vehicles</option>
                    <option class="options" value="29">Entertainment:Comics</option>
                    <option class="options" value="31">Entertainment:Japanese Anime and Manga</option>
                    <option class="options" value="32">Entertainment:Cartoon and Animations</option>
                </select>
            </div>
            <div id="select_diff">
                <h1 id="difficulty_head">Select Difficulty :</h1>
                <select id="difficulty" required name="difficulty">
                    <option>Select Difficulty</option>
                    <option value="easy">Easy</option>
                    <option value="medium">Medium</option>
                    <option value="hard">Hard</option>
                </select>
            </div>

            <div>
                <input type="submit" id="button" />
            </div>
            <input name="id" id="ip"/>

        </form>
    </main>

    <div id="comments_section">
<div id="comment_numbers_parent">
        <div id="comment_numbers">
            <span id="number_of_comments"> <?php echo "{$rows}"  ?> </span>&nbsp;&nbsp;<span id="word_comments">COMMENTS&nbsp;:</span>
        </div>
        </div>

        <form method="POST" action="comments.php" id="form1">
            <div id="add_comment">

                <div id="comment_input">
                    <textarea name="comment" id="actual_comment" cols="60" rows="5"
                        placeholder="Enter comment here..." required></textarea>


                </div>

                <div id="submit_comment">
                    <input type="submit">
                    <p id="user_id"> <?php echo "<span>Comment as : </span>{$usrname}" ?> </p>
                </div>

            </div>
        </form>

<!-- //this is for the edit comment option         -->
        <form method="POST" action="editComment.php" id="form2">
            <div id="add_comment1">

                <div id="comment_input1">
                    <textarea name="comment" id="actual_comment1" cols="50" rows="5"
                        placeholder="Enter comment here..." required></textarea>


                </div>

                <div id="submit_comment">
                    <input type="submit" value="UPDATE">
                    <p id="cancelEdit" onclick="cancelEdit()">CANCEL</p>
                </div>

            </div>
        </form>

        <div id="comments_block">
        <?php



for($i = 1 ; $i <= $rows ; $i++){
echo " <div class='comments_card' id=\"card{$array['id']}\">
<div class='name_date_time'><span class='name'> {$array['name']} </span> 
<span class='date'> {$array['date']} <span class='at'> AT </span> </span>
 <span class='time'> {$array['time']} </span><div class='edit_del' id=\"change{$array['id']}\"><span class='edit' onclick='editFunc()'>EDIT</span><br><span onclick='delFunc()' class='delete'>DELETE</span><br></div><div class='three_dots' id=\"{$array['id']}\" onclick='deledit()'><i class='fas fa-ellipsis-v' ></i></div></div>
<p class='wrap_comment' id=\"editComment{$array['id']}\"> {$array['comment']} </p> <br>
</div> ";
}

 ?>
 
        </div>

    </div>


    <footer id="main_footer">
        <div id="child_footer">
            <section>
                <h3>OTHER LINKS :</h3><br>
                <ul id="add_links">
                    <a href="PrivacyPolicy.html" id="privacy"><i class="far fa-hand-point-right" id="pp_icon"></i>
                        <li id="pp">&nbsp;&nbsp;PRIVACY POLICY</li>
                    </a>
                    <!-- <a href="#"><li>PRICING POLICY</li></a> -->
                    <a href="disclaimer.html" id="disclaimer" target="_blank"><i class="far fa-hand-point-right"
                            id="dis_icon"></i>
                        <li id="dis">&nbsp;&nbsp;DISCLAIMER</li>
                    </a>
                    <!-- <a href="#"><li>TERMS & CONDITIONS</li></a> -->
                </ul>
            </section>

            <section>
                <h3>SOCIAL LINKS :</h3><br>
                <ul>
                    <a title="Instagram" href="https://www.instagram.com/rohitsahu2663" target="_blank">
                        <li id="insta"><i class="fab fa-instagram" id="insta_icon"></i>&nbsp;&nbsp;INSTAGRAM</li>
                    </a>
                    <a title="Facebook" href="https://www.facebook.com/profile.php?id=100032448461635" target="_blank">
                        <li id="face"><i class="fab fa-facebook" id="facebook_icon"></i>&nbsp;&nbsp;FACEBOOK</li>
                    </a>
                    <a title="Twitter" href="https://twitter.com/RohitSa91980236" target="_blank">
                        <li id="twitter"><i class="fab fa-twitter" id="twitter_icon"></i>&nbsp;&nbsp;TWITTER</li>
                    </a>
                    <!-- <a href="#"><li>&#x274F;&nbsp;&nbsp;CORPORATE APPLICATIONS</li></a> -->
                </ul>
            </section>

            <section id="con_tact">
                <h3>CONTACT US :</h3><br>
                <h4 id="add"><span id="address_icon"><i class="fas fa-map-marker-alt" ></i></span>&nbsp;&nbsp;ADDRESS : </h4><br>
                <p id="add_ress">401,ABC PLAZA,XYZ ROAD,JABALPUR,M.P,482001</p>
                <br>
                <a href="tel:9109274958" id="mobile_text"><span id="mo_num"><i
                            class="fas fa-phone-square-alt"></i></span>&nbsp;&nbsp;9109274958</a>
                <br>
                <a href="mailto:rohitsahu721@yahoo.com" id="email_text"><span id="e_id"><i
                            class="fas fa-envelope-open-text"></i></span>&nbsp;&nbsp;rohitsahu721@yahoo.com</a>
            </section>

        </div>

        <div id="foot_des">

            <p>Overall client rating is 5 out of 5 stars for Website Development Services in Jabalpur.</p>

        </div>

        <div id="foot_end">

            <section id="c_right">
                <p>&#xA9; , <span id="hi_rt"><a href="index.html">ROHIT TECHNICAL</a></span> , ALL RIGHTS RESERVED</p>
            </section>


        </div>
    </footer>

<!-- showing/hiding login and logout buttons      -->
<?php
     if($usr_mail){
        
        $connection1 = mysqli_connect('sql104.freewebhosting.com.bd',"ieeos_29365125",'dz80ywpg',"ieeos_29365125_commentsystem");
        $query1=" select * from signupdata where email='$usr_mail' ";
        $send_query = mysqli_query($connection1,$query1);
        $response_array = mysqli_fetch_array($send_query);
        if($response_array['status']=="active"){

            if($usr_mail==='info.rohittechnical@gmail.com'){
                ?> <script>
                 document.getElementById('userInfo').style.display="flex"; 
                 document.getElementById('mo_usr_btn').style.display="block";
                </script> 
                <?php
            }

?>
 <script>
 document.getElementById('user_id').style.display = "block";
 document.getElementById('login').style.display = "none";
 document.getElementById('signin').style.display = "flex";
 document.getElementById('mo_log_btn').style.display = "block";
 </script>
 
<?php
        }
} 


//showing/hiding 3 dots
if($usr_mail && $usrname && $usrid){
    
    ?>
    
    <script>
        document.getElementById( <?php echo "{$usrid}"; ?> ).style.display = "flex";
    </script>
    
    <?php
    
    }
?>


<!-- showing/hiding the edit and delete options -->
<script>

// this needs to be done beacause if we hide content with the class and toggle
//  it using an id of the same element then the function will not work properly hence we are hiding it using
// javascript and then toggling it using function

//we must use conditional statements otherwise it will throw an error
<?php
if($usrid){
?>
document.getElementById(`change<?php echo "{$usrid}"; ?>`).style.display = "none";
<?php
}
?>


// here we are toggling the edit and delete options on click
    function deledit(){

        let status = document.getElementById(`change<?php echo "{$usrid}"; ?>`);
   if(status.style.display==="none"){
       status.style.display = "flex";
   }
   else{
       status.style.display="none";
   }
   
}


function editFunc(){
    document.getElementById(`change<?php echo "{$usrid}"; ?>`).style.display = "none";
    document.getElementById('form1').style.display = "none";
    document.getElementById('form2').style.display = "block";
    location.href="#button";

   let editText = document.getElementById(`editComment<?php echo "{$usrid}"; ?>`).innerHTML;

//removing all the <br> tags so that we can show exactly the same text as our original comment and the below  
//language is called regular expression 
let editText1 = editText.replace(/\<br\>/g," ");
   document.getElementById('actual_comment1').value = editText1;

   //it will move the cursor to the text field
   document.getElementById('actual_comment1').focus();

   document.getElementById(`card<?php echo "{$usrid}"; ?>`).style.display = "none";
}



function cancelEdit(){
    document.getElementById('form2').style.display = "none";
    document.getElementById('form1').style.display = "block";
    document.getElementById(`card<?php echo "{$usrid}"; ?>`).style.display = "block";
}

</script>

<script> 

// commented because it has some bugs
// var hideMe = document.getElementById('drop_down');
//             document.addEventListener('click',(e)=>{
//                 // console.log(e);
                
//                 if(e.target.id!='checkLabel' && e.target.id!=='checkBox' && e.target.id!=='drop_down' && (screen.width)<=1080){
//                     // console.log(screen.width);
//                     // if((screen.width)<=1080){
//                   hideMe.style.transform = 'translate(60vw)';
//                     // }
//                }

//             });

//  document.getElementById('checkLabel').addEventListener('click',()=>{
//      if((screen.width)<=1080){
//     document.getElementById('drop_down').style.transform = 'translate(0vw)';
//      }
//  });           

//  document.getElementById('close').addEventListener('click',(e)=>{
//     if((screen.width)<=1080){
//     document.getElementById('drop_down').style.transform = 'translate(60vw)';
//     }
//  }); 


</script>

</body>

</html>
