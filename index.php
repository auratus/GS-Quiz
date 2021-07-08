<?php
session_start();


$connection = mysqli_connect('localhost',"root",'',"comments");

//printing all the comments
$query  = " select * from commentsdata";
$final = mysqli_query($connection,$query);
$rows = mysqli_num_rows($final);


// checking signin
$usr_mail = $_SESSION['sesemail'];
$usrname = $_SESSION['sesname'];


?>

<!DOCTYPE html>
<html>

<head>

    <title>General Studies Quiz - Rohit Technical</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="selectcss.css">
    <script src="https://kit.fontawesome.com/280204ac91.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="description" content="General studies quiz for civil services exams and other competitive exams">
    <meta name="keywords" content="World GK">
    <meta name="author" content="Rohit Sahu">
    <meta name="google-site-verification" content="gkiPSoeZAbqveVr1QKhhG-35-IcFxEnxR3FDnHppuBk" />
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
                    <li><button id="signin"><a href="logout.php"> Log out </a></button></li>
                </ul>


            </div>


        </nav>

    </header>

    <main id="main">
        <form id="child" method="GET" action="mainPage.html">
            <div>
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
            <div>
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

        </form>
    </main>

    <div id="comments_section">

        <div id="comment_numbers">
            <span id="number_of_comments"> <?php echo "{$rows}"  ?> </span>&nbsp;&nbsp;<span id="word_comments">COMMENTS&nbsp;:</span>
        </div>

        <form method="POST" action="comments.php">
            <div id="add_comment">

                <div id="comment_input">
                    <textarea name="comment" id="actual_comment" cols="50" rows="5"
                        placeholder="Enter comment here..." required></textarea>


                </div>

                <div id="submit_comment">
                    <input type="submit">
                    <p id="user_id"> <?php echo "<b>Comment as :</b> {$usrname}" ?> </p>
                </div>

            </div>
        </form>

        <div id="comments_block">
        <?php



for($i = 1 ; $i <= $rows ; $i++){
$array=mysqli_fetch_array($final);
echo " <div class='comments_card'>
<span class='name'> {$array['name']} </span> <span class='date'> {$array['date']} <span class='at'> AT </span> </span> <span class='time'> {$array['time']} </span>
<p class='wrap_comment'> {$array['comment']} </p> <br>
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
                <h4 id="add"><i class="fas fa-map-marker-alt" id="address_icon"></i>&nbsp;&nbsp;ADDRESS : </h4><br>
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
<?php
     if($usr_mail){
?>
 <script>
 document.getElementById('user_id').style.display = "block";
 document.getElementById('login').style.display = "none";
 document.getElementById('signin').style.display = "block";
 </script>
 
<?php
} 
?>

</body>

</html>