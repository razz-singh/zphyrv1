<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Zephyr India</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo/zephyr_india_tm_1pc_icon.ico"/>
      
    <!--scripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://rawgit.com/bbClassic/YRSS/master/yrss.min.js"></script>
      
    <!--styles-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> 
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Frijole" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">  
  <link href="css/login.css" rel="stylesheet">	
    <link rel="stylesheet" href="css/particle.css">
    <link href="css/custom.css" rel="stylesheet">   

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="particles-js">
      <div id="header">
          <div id="z-upper-header" class="container">
              <!-- <ul class="z-social-links">
                <li><a class="z-social-rss" href="#"><span class="fa fa-rss"></span></a></li>
                <li><a class="z-social-twitch" href="#"><span class="fa fa-twitch"></span></a></li>
                <li><a class="z-social-steam" href="#"><span class="fa fa-steam"></span></a></li>
                <li><a class="z-social-facebook" href="#"><span class="fa fa-facebook"></span></a></li>
                <li><a class="z-social-google-plus" href="#"><span class="fa fa-google-plus"></span></a></li>
                <li><a class="nk-social-twitter" href="https://twitter.com/nkdevv" target="_blank"><span class="fa fa-twitter"></span></a></li>
                <li><a class="nk-social-youtube" href="https://youtube.com/nkdevv" target="_blank"><span class="fa fa-youtube"></span></a></li> 
            </ul> -->
              <ul class="z-signin-header">
                  <li><a href="login-activity.php"><span class="fa fa-user"></span> Login</a></li>
              </ul>
          </div>
          
           <nav class="navbar">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#"><img src="img/logo/Zephyr_India_tm.png" width="60"/></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" class="metal linear">
                  <ul class="nav navbar-nav">
                    <li class="metal linear"><a href="../index.html">HOME</a></li>
                    <li class="metal linear"><a href="about.php">ABOUT</a></li>
                    <li class="metal linear"><a href="events.php">EVENTS</a></li>
                    <li class="dropdown metal linear">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GAMES <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li class="metal linear"><a href="csgo.php">COUNTER STRIKE GLOBAL OFFENSIVE</a></li>
                        <li class="metal linear"><a href="dota2.php">DOTA 2</a></li>
                        <li class="metal linear"><a href="lol.php">LEAGUE OF LEGENDS</a></li>
                      </ul>
                    </li>
                    <li class="metal linear"><a href="forums.php" target="_blank">FORUMS</a></li>
                    <li class="metal linear"><a href="blogs.php">BLOGS</a></li>
                    <li class="metal linear"><a href="gallery.php">GALLERY</a></li>
                    <li class="metal linear"><a href="contact.php">CONTACT</a></li>
                    <li class="metal linear"><a href="career.php">CAREER</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        
      </div>
<main id="login-page">


  
      <div class="container">
        <div class="frame">
          <div class="nav">
            <ul class="links">
              <li class="signin-active"><a class="btn">Sign in</a></li>
              <li class="signup-inactive"><a class="btn">Sign up </a></li>
            </ul>
          </div>
          <div ng-app ng-init="checked = false">
                      <form class="form-signin"  method="post" name="form">
                                  
                <label for="username">Username</label>
                <input class="form-styling required" type="text" name="useridByLogin" id="useridBylogin" placeholder=""/>
                                  
                <label for="password">Password</label>
                <input class="form-styling required" type="password" name="userPassByLogin" id="userPassByLogin" placeholder=""/>
                <input type="checkbox" id="checkbox"/>
                <label for="checkbox" ><span class="ui"></span>Keep me signed in</label>
                <div class="btn-animate">
                  <a class="btn-signin" id="signin-btn">Sign in</a>
                </div>
                      </form>
              
            <form class="form-signup"  method="post" name="form">
              
                <div class="form-group">
                    <label for="firstname">First Name:</label>
                    <input type="text" class="form-control form-styling" id="firstname" placeholder="First name" name="firstname">
                  </div>
            
            
          <div class="form-group">
            <label for="lastname">Last Name:</label>
            <input type="email" class="form-control form-styling" id="lastname" placeholder="Last name" name="lastname">
          </div>
          <div class="form-group">
            <label for="pass">Password:</label>
            <input type="password" class="form-control form-styling" id="pass" placeholder="Enter password" name="pass" >
          </div>
            <div class="form-group">
            <label for="pass1">Confirm Password:</label>
            <input type="password" class="form-control form-styling" id="pass1" placeholder="Confirm password:" name="pass1">
          </div>
            <div class="form-group">
            <label for="userunique">Username:</label>
            <input type="text" class="form-control form-styling" id="userunique" placeholder="Enter username" name="userUnq">
          </div>
                      
            <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control form-styling" id="email" placeholder="Enter your email" name="email">
          </div>
            
            <div class="form-group">
        <label for="sel1">Country</label>
        <select class="form-control form-styling " id="country" name ="country"></select> 
      </div>
            
            
            <div class="form-group">
        <label for="sel1">State</label>
        <select class="form-control form-styling" name ="state" id ="state">
                  <option value="-1">Select State</option>
                </select>
      </div>
            
            <div class="form-group">
        <label for="gamepref">Game Preference</label>
        <select class="form-control form-styling " id="gamepref" name="gamepref">
          <option value="-1">Select Game</option>
          <option >LOL</option>
          <option>DOTA 2</option>
          <option>CSGO</option>
          <option>OTHER</option>
        </select>
      </div>
            <div class="form-group" id="gender">
                <label for="sel1">Gender</label><br/>
                  <label class="radio-inline">
            <input type="radio" name="gender" value="male">Male
          </label>
          <label class="radio-inline">
            <input type="radio" name="gender" value="female">Female
          </label>
          <label class="radio-inline">
            <input type="radio" name="gender" value="other">Other
          </label>
                
                
                
            </div>                 
                <a  class="btn-signup" id="signup-btn"  data-toggle="modal" data-target="#privacy-terms">Sign Up</a>
                
                      </form>
            
                  
            </div>
            
          
          
        </div>

      </div>

      <div class="modal fade" id="privacy-terms" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Zephyr terms of service</h4>
      </div>
      <div class="modal-body">
      <!-- <div id="pdfRenderer"></div> -->
      <embed src="http://www.thezphyr.com/assets/website_terms_of_service.pdf" type="pdf" width="100%" height="100%">
      <!-- <iframe id="frame" src="http://www.thezphyr.com/assets/website_terms_of_service.pdf" width="300px" height="360px"></iframe> -->
      <!-- <iframe src="http://www.thezphyr.com/assets/website_terms_of_service.pdf" width="300px" height="360px"></iframe> -->
      
      </div>      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Accept</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  </main>
    
    
    
    
    
     <script type= "text/javascript" src="assets/js/countries.js"></script>
    
       <script language="javascript">
	populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
	//populateCountries("country2");
	//populateCountries("country2");
</script>
<script>
$(function() {
	$(".btn").click(function() {
		$(".form-signin").toggleClass("form-signin-left");
    $(".form-signup").toggleClass("form-signup-left");
    $(".frame").toggleClass("frame-long");
    $(".signup-inactive").toggleClass("signup-active");
    $(".signin-active").toggleClass("signin-inactive");
    $(".forgot").toggleClass("forgot-left");   
    $(this).removeClass("idle").addClass("active");
	});
});

$(function() {
	/*$(".btn-signup").click(function() {
  $(".nav").toggleClass("nav-up");
  $(".form-signup-left").toggleClass("form-signup-down");
  $(".success").toggleClass("success-left"); 
  $(".frame").toggleClass("frame-short");
	});*/
});

$(function() {
	/*$(".btn-signin").click(function() {
  $(".btn-animate").toggleClass("btn-animate-grow");
  $(".welcome").toggleClass("welcome-left");
  $(".cover-photo").toggleClass("cover-photo-down");
  $(".frame").toggleClass("frame-short");
  $(".profile-photo").toggleClass("profile-photo-down");
  $(".btn-goback").toggleClass("btn-goback-up");
  $(".forgot").toggleClass("forgot-fade");
	});*/
});
</script>
    
    <script>
        
         $("#signin-btn").click(function(){
             $("input[name='userPassByLogin']").css("border","none");
             var userkeyID=$("input[name='useridByLogin']").val();
             var userkeyPASS=$("input[name='userPassByLogin']").val();
             console.log(userkeyID,userkeyPASS);
             if(userkeyPASS.length<8 && userkeyID.length<8 ){
                  $("input[name='userPassByLogin']").css("border","1px solid #f00");
                 $("input[name='useridByLogin']").css("border","1px solid #f00");
               
                 return 0;
             }
             
             $.ajax({
          method: "POST",
          url: "login_verifier.php",
          data: { 
              username:userkeyID,
              pass:userkeyPASS
          }
        }).done(function( msg ) {
            console.log( "Data Saved: " + msg );
                 if(!msg){
                     $("input[name='userPassByLogin']").css("border","1px solid #f00");
                     $("input[name='useridByLogin']").css("border","1px solid #f00");
                 }
                 else{
                     window.location="http://google.com";
                 }
          });
        
             
         });
        
        
        
        
        
        
        
        $("#signup-btn").click(function(){
            
        var firstName=$("input[name='firstname']").val();
        var lastName=$("input[name='lastname']").val();
        var password=$("input[name='pass']").val();
        var password1=$("input[name='pass1']").val();
        var email=$("input[name='email']").val();
        var userid=$("input[name='userUnq']").val();
        var country=$("select#country").val();
        var state=$("select#state").val();
        var gamePref=$("select#gamepref").val();
        var gender=$("#gender input[name='gender']:checked").val();
        validate();
 function validateEmail(emaildata) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(emaildata);
}
            
 function validate() {
 if (validateEmail(email)) {
    
    $("#email").css("border", "1px solid green");
  } else {
    
    $("#email").css("border", "1px solid #f00");
  }
     console.log("validation function called");
  return false;
}



        console.log(firstName,lastName,password,password1,email,country,state,gamePref,gender,userid);
$("input").each(function(e){
    if($(this).val()==""){
        $(this).css("border","1px solid #f00");
        
    }
    
});
            
            $("select").each(function(e){
       if($(this).val()<1) {
           $(this).css("border","1px solid #f00");
       }
    });
    
    if($("#gender input[name='gender']:checked").val()==undefined){
        
        console.log("gender not checked");
        $("#gender input[name='gender']").parent(".radio-inline").css("color","#f00");
    }
            else{
                console.log("gender checked");
            }
            if(password.length<8||password!=password1){
                $("input[name='pass']").css("border","1px solid #f00");
                $("input[name='pass1']").css("border","1px solid #f00");
                return 0;
                
            }
            
            
 


       
/*
$("input[name='pass']")
$("input[name='pass1']")
$("input[name='email']")
$("input[name='userUnq']")
$("select#country")
$("select#state")
$("select#gamepref")
$("#gender input[name='gender']:checked"))*/
            
           
            $.ajax({
  method: "POST",
  url: "registration.php",
  data: { 
      
            firstname: firstName,
            lastname:lastName,
            pass:password,
            email:email,
            country:country,
            state:state,
            gamepreference:gamePref,
            gender:gender,
            username:userid
         
  }
})
  .done(function( msg ) {
    console.log( "Data Saved: " + msg );
    
    window.location="/login.php";
  });
        });
        
       
    </script>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/pdfobject.js"></script>
    <script src="js/particle.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <script>
      var pdf = new PDFObject({
        url: "website_terms_of_service.pdf",
        id: "pdfRendered",
        pdfOpenParams: {
          view: "FitH"
        }
      }).embed("pdfRenderer");
    </script>

    <script>
particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 355,
      "density": {
        "enable": true,
        "value_area": 789.1476416322727
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.48927153781200905,
      "random": false,
      "anim": {
        "enable": true,
        "speed": 2,
        "opacity_min": 0,
        "sync": false
      }
    },
    "size": {
      "value": 4,
      "random": true,
      "anim": {
        "enable": true,
        "speed": 2,
        "size_min": 0,
        "sync": false
      }
    },
    "line_linked": {
      "enable": false,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 2,
      "direction": "none",
      "random": true,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "bubble"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 83.91608391608392,
        "size": 1,
        "duration": 3,
        "opacity": 1,
        "speed":50
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});
</script>
</body>
</html>







