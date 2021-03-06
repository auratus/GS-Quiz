<!DOCTYPE html>
<html>
<head>
    <title>Quiz | Rohit Technical</title>
    <link rel="stylesheet" href="GKCSS.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/280204ac91.js" crossorigin="anonymous"></script>
    <script>

        
function refresh(){
    this.location.reload();
}


//declaring function for "onclick()" event
function submit_quiz(){

document.getElementById('button').style.display="none";


//disabling the input after submission
let disArr = document.getElementsByTagName('input');
for(x=0;x<=39;x++){
    disArr[x].disabled=true;
}


 //displaying correct answers   
for(let m=1;m<=10;m++){
    document.getElementById(`sahi_jawab${m}`).style.display="block";
}
                   var score=0;
                   let check_radio="";

                   
                   //now we will loop through all the radio inputs to see if user have attempted the question
                   //or not

                   // here we are checking which radio input is chosen by user
                    //it return "true" if respective input is checked and "false" if input is not checked 
                   for(l=1;l<=40;l++){
                     
                    check_radio=document.getElementById(`number${l}`).checked;
                    

                    //below conditional statement will only execute if user has checked the respective radio
                    //input
                    if(check_radio){
                      
                        var inner_val = "";
                    
                    //now here we are finding the correct answer for the respective question which further
                    //will be compared with the user entered answer
                    if(l<=4){
                     inner_val =  document.getElementById(`answer_1`).innerHTML;
                    }

                   else if(l>4 && l<=8){
                     inner_val =  document.getElementById(`answer_2`).innerHTML;
                    }

                   else if(l>8 && l<=12){
                     inner_val =  document.getElementById(`answer_3`).innerHTML;
                    }

                    else if(l>12 && l<=16){
                     inner_val =  document.getElementById(`answer_4`).innerHTML;
                    }

                   else if(l>16 && l<=20){
                     inner_val =  document.getElementById(`answer_5`).innerHTML;
                    }

                    else if(l>20 && l<=24){
                     inner_val =  document.getElementById(`answer_6`).innerHTML;
                    }    
                    
                    else if(l>24 && l<=28){
                     inner_val =  document.getElementById(`answer_7`).innerHTML;
                    }

                    else if(l>28 && l<=32){
                     inner_val =  document.getElementById(`answer_8`).innerHTML;
                    }

                    else if(l>32 && l<=36){
                     inner_val =  document.getElementById(`answer_9`).innerHTML;
                    }

                    else if(l>36 && l<=40){
                     inner_val =  document.getElementById(`answer_10`).innerHTML;
                    }
                      let usr_value =  document.getElementById(`number${l}`).value;
                      if(inner_val===usr_value){
                          score =score + 1;
                          document.getElementById(`cross${l}`).innerHTML="&#x2714;";
                          document.getElementById(`cross${l}`).style.color="green";
                      }

                       else{
                        document.getElementById(`cross${l}`).innerHTML="&#x2718;";
                        document.getElementById(`cross${l}`).style.color="red";
                      }


                    }
    
                   }


                   //at last printing the final score
                   document.getElementById('animation_main').style.display="none";
                  document.getElementById('marks_main').style.display="flex";
                   document.getElementById('marks').innerHTML=`${score}`;
                   location.href="#"
               }


    </script>
</head>

<body>
    
    <div id="preloader">
        
    </div>

    <header id="header">
        <div id="logo_main">
        <a href="https://rohittechnical.cf/" id="anchor"><img src="logo1.png" alt="Logo" id="logo"/></a>
    </div>

    <div id="home"> 
        <a id="category_head" href="index.php"> Home </a>
    </div>
    </header>
    <div id="animation_main">
          
        <h1 id="animation">Javascript Quiz <span id="heart">&#x2764;</span></h1>

     </div>


    <div id="marks_main"> 
          
        <h2 id="your_score">Your Score</h2>
        <h2 id="marks">  </h3>
        <button id="play_again" onclick="refresh()"><a href="#" id="play_link">Play again</a></button>  

    </div>
    <main id="main">
        <div id="ques_sup" >
        <div id="questions_main">

        </div>
    </div>
       
    <div id="butt_sup">
        <button onclick="submit_quiz()" id="button">Submit</button>
    </div>
        
    </main>


    <footer id="main_footer">
        <div id="child_footer">
            <section>
                <h3>OTHER LINKS :</h3><br>
                <ul id="add_links">
                     <a href="PrivacyPolicy.html" id="privacy"><i class="far fa-hand-point-right" id="pp_icon"></i><li id="pp">&nbsp;&nbsp;PRIVACY POLICY</li></a>
                     <!-- <a href="#"><li>PRICING POLICY</li></a> -->
                     <a href="disclaimer.html" id="disclaimer" target="_blank"><i class="far fa-hand-point-right" id="dis_icon"></i><li id="dis">&nbsp;&nbsp;DISCLAIMER</li></a>
                     <!-- <a href="#"><li>TERMS & CONDITIONS</li></a> -->
                </ul>
           </section>
        
        <section>
             <h3>SOCIAL LINKS :</h3><br>
             <ul>
             <a title="Instagram" href="https://www.instagram.com/rohitsahu2663" target="_blank"><li id="insta"><i class="fab fa-instagram" id="insta_icon"></i>&nbsp;&nbsp;INSTAGRAM</li>  </a>
             <a title="Facebook" href="https://www.facebook.com/profile.php?id=100032448461635"  target="_blank"><li id="face"><i class="fab fa-facebook" id="facebook_icon"></i>&nbsp;&nbsp;FACEBOOK</li>  </a>
             <a title="Twitter" href="https://twitter.com/RohitSa91980236" target="_blank"><li id="twitter"><i class="fab fa-twitter" id="twitter_icon"></i>&nbsp;&nbsp;TWITTER</li></a>
             <!-- <a href="#"><li>&#x274F;&nbsp;&nbsp;CORPORATE APPLICATIONS</li></a> -->
        </ul>
        </section>
        
        <section id="con_tact">
             <h3>CONTACT US :</h3><br>
             <h4 id="add"><i class="fas fa-map-marker-alt" id="address_icon"></i>&nbsp;&nbsp;ADDRESS : </h4><br>
             <p id="add_ress">401,ABC PLAZA,XYZ ROAD,JABALPUR,M.P,482001</p>
             <br>
             <a href="tel:9109274958" id="mobile_text"><span id="mo_num"><i class="fas fa-phone-square-alt"></i></span>&nbsp;&nbsp;9109274958</a>
             <br>
             <a href="mailto:rohitsahu721@yahoo.com" id="email_text"><span id="e_id"><i class="fas fa-envelope-open-text"></i></span>&nbsp;&nbsp;rohitsahu721@yahoo.com</a>
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

    <script>
this.addEventListener("load",()=>{

const params = (new URL(document.location)).searchParams;

const category = params.get('category');
const difficulty = params.get("difficulty");

if(category!='Select Category' && difficulty!="Select Difficulty"){


fetch(`https://opentdb.com/api.php?amount=10&category=${category}&difficulty=${difficulty}&type=multiple`).
            then((jsondata) => {
                return jsondata.json();
            }).then((objectdata) => {
                let result = "";
                let options = "";
                let correct_option = "";
               let rand_index = "";
                 let choice = "";
                let k=1;


//checking whether we are receiving any data from api or not because some links are unavailable
if(objectdata.results[0]!=null){
                //here we are looping through the data received from api to print questions and its respective
                //options
                for (i = 0; i <= 9; i++) {
                    result = (objectdata.results[i]).question;
                    document.getElementById('questions_main').insertAdjacentHTML('beforeend', `<div class="new_ques"
                    id="question${i}"><p>${i + 1}. &nbsp; ${result}</p></div>`);
    
                    incorrect_options = (objectdata.results[i]).incorrect_answers;
                    correct_option = (objectdata.results[i]).correct_answer;
                    
                    //here we are generating a random number between 0-3 so that we can push the correct 
                    //answer into the incorrect answers array.The random number will be the index number
                    //where we push our correct answer.
                    rand_index = Math.floor(Math.random() * 4);
                    
                    //here we have used splice method to push an element into array of incorrect answers
                    incorrect_options.splice(rand_index, 0, correct_option);
                    // console.log(incorrect_options);
    

                    //here we are looping through the array to print options(correct and incorrect)
                    for (j = 0; j <= 3; j++) {
                        choice = incorrect_options[j];
                        // console.log(choice);
                        document.querySelector('#questions_main').insertAdjacentHTML("beforeend", `<div class="inputs">
                    <input type="radio" name="options${i}" id="number${k + i + j}" value="${choice}">&nbsp;&nbsp;
                    <label for="number${k+i+j}">${choice}</label><span id="cross${k+i+j}" class="incorrect"> </span></div>`);
                    }


                    //now here we are printing the correct answer after every question and its respective
                    //options are printed
                    document.querySelector('#questions_main').insertAdjacentHTML('beforeend', `<div id="sahi_jawab${i + 1}">
                    <p class="c_ans">Correct answer : <span id="answer_${i + 1}" class="c_option">${correct_option}</span>
                        </p></div><hr></hr>`);
    

         //here we are incrementing value of k by 3 to get unique id's for correct option           
         k = k+3;
              
    
                }

                 }

            else{
                  location.href="index.php";
                  alert('This Quiz is unavailable right now.Please select another Category/difficulty.');
                  
              }
              document.getElementById('preloader').style.display="none";
            })
            .catch((error) => {
                console.log(error);
            });
    
        }
        
          else{
              location.href="index.php";
              alert("Please select valid input");
          }

});


    </script>

    <?php

$user_ip = $_POST['userData']; 
$url = 'https://ipgeolocation.abstractapi.com/v1/?api_key=4eed304d254d42138029c0babc1d48e4&ip_address='.$user_ip;
  $response = file_get_contents($url);
 
  $parsedResponse = json_decode($response);  
 
  $ipAdd = $parsedResponse->{'ip_address'};

  $city = $parsedResponse->{'city'};
 
  $region = $parsedResponse->{'region'};
  
  $postalCode = $parsedResponse->{'postal_code'};
 
  $country = $parsedResponse->{'country'};
  
  $continent = $parsedResponse->{'continent'};
  
  $longitute = $parsedResponse->{'longitude'};
 
  $latitude = $parsedResponse->{'latitude'};
  
  $timezoneName =  $parsedResponse->{'timezone'}->{'name'};
  
  $timezoneAbbreviation = $parsedResponse->{'timezone'}->{'abbreviation'};
  
  $currentTime = $parsedResponse->{'timezone'}->{'current_time'};
  
  $flag = $parsedResponse->{'flag'}->{'svg'};
  
  $currencyName = $parsedResponse->{'currency'}->{'currency_name'};
  
  $autoSysOrg = $parsedResponse->{'connection'}->{'autonomous_system_organization'};
  
  $connectionType = $parsedResponse->{'connection'}->{'connection_type'};
  
  $isp = $parsedResponse->{'connection'}->{'isp_name'};
  
  $orgName = $parsedResponse->{'connection'}->{'organization_name'};

  $connection =mysqli_connect('sql104.freewebhosting.com.bd',"ieeos_29365125",'dz80ywpg',"ieeos_29365125_commentsystem");

  date_default_timezone_set('Asia/Kolkata');
    $date = date('F d,Y');

  $statement = " insert into userdata(city,autonomousSystemOrganization,connectionType,internetServiceProvider,ispOrganizationName,continent,country,currencyName,flag,ipAddress,latitude,longitude,postalCode,region,timezoneAbbreviation,currentTime,timezoneRegion,date) values('$city','$autoSysOrg','$connectionType','$isp','$orgName','$continent','$country','$currencyName','$flag','$ipAdd','$latitude','$longitute','$postalCode','$region','$timezoneAbbreviation','$currentTime','$timezoneName','$date) " ;
  $query = mysqli_query($connection,$statement);
?>
</body>
</html>