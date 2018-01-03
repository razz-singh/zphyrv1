
<html lang="en">
<head>
    <title>Zephyr India</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo/zephyr_india_tm_1pc_icon.ico"/>
     <meta charset="utf-8">
    <meta name="google-signin-client_id" content="691064610996-bk5hs1uroo5m1dfci7p75ohakac6f7oa.apps.googleusercontent.com">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Frijole" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
    <link href="custombox.min.css" rel="stylesheet" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/particle.css">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="particles-js" class="login-page">

<span class="back-btn"> 
    <img src="img/back.png" alt="back-img" class="img img-responsive ">
</span>
    <div class="login-chooser wow fadeIn" data-wow-delay="2s" data-wow-duration="1.5s">

        <div class="g-btns-container"> 
            <div class="g-login-btn-custom">
                <i class="fa fa-google-plus">
                <span>Login With Google</span> 
                </i>
            </div>      
            <form class="form-signin" role="form">
                <div id="status"></div>        
                <div class="row"> 
                    <div class="">
                        <button class="g-signin " 
                            data-scope="https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email"
                            data-requestvisibleactions="http://schemas.google.com/AddActivity"
                            data-clientId="691064610996-bk5hs1uroo5m1dfci7p75ohakac6f7oa.apps.googleusercontent.com"//my googgle client id
                            data-accesstype="offline"
                            data-callback="mycoddeSignIn"
                            data-theme="dark"
                            data-cookiepolicy="single_host_origin">
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <?php
        require 'includes/lightopenid/openid.php';
        $_STEAMAPI = "76561198388076880";
        try 
        {
            $openid = new LightOpenID('http://www.thezphyr.com/');
            if(!$openid->mode) 
            {
                if(isset($_GET['login'])) 
                {
                    $openid->identity = 'http://steamcommunity.com/openid/?l=english';    // This is forcing english because it has a weird habit of selecting a random language otherwise
                    header('Location: ' . $openid->authUrl());
                }
        ?>
        <div class="stm-btn-container">
            <div class="stm-login-btn-custom">
                <i class="fa fa-steem">
                <span>Login With Steam</span> 
                </i>
            </div> 
            <form action="?login" method="post" class="stm-form">
                <input type="image" src="http://cdn.steamcommunity.com/public/images/signinthroughsteam/sits_small.png">
            </form>
        </div>
    
    <?php
        } 
        elseif($openid->mode == 'cancel') 
        {
            echo 'User has canceled authentication!';
        } 
        else 
        {
            if($openid->validate()) 
            {
                    $id = $openid->identity;
                    // identity is something like: http://steamcommunity.com/openid/id/76561197960435530
                    // we only care about the unique account ID at the end of the URL.
                    $ptn = "/^http:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/";
                    preg_match($ptn, $id, $matches);
                    echo "User is logged in (steamID: $matches[1])\n";

                    $url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$_STEAMAPI&steamids=$matches[1]";
                    $json_object= file_get_contents($url);
                    $json_decoded = json_decode($json_object);

                    foreach ($json_decoded->response->players as $player)
                    {
                        echo "
                        <br/>Player ID: $player->steamid
                        <br/>Player Name: $player->personaname
                        <br/>Profile URL: $player->profileurl
                        <br/>SmallAvatar: <img src='$player->avatar'/> 
                        <br/>MediumAvatar: <img src='$player->avatarmedium'/> 
                        <br/>LargeAvatar: <img src='$player->avatarfull'/> 
                        ";
                    }

            } 
            else 
            {
                    echo "User is not logged in.\n";
            }
        }
    } 
    catch(ErrorException $e) 
    {
        echo $e->getMessage();
    }
    ?>
        
        
        <div class="zephyr-login">
            <a href="login.php">Login with Zephyr</a>
        </div>
        

        <div class="fb-btns-container">
        <div class="fb-login-btn-custom" style="top: 230px;">
            <i class="fa fa-facebook">
               <span>Facebook</span> 
            </i>
        </div>
        <div class="fb-login-button" data-width="20" data-max-rows="1" data-size="medium" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false"></div>
    </div>
        
        <div id="fb-root"></div>  

    </div>    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
     <script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>
    <script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
    
    
    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/particle.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        new WOW().init();
    </script>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=294195084357218";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    
    <script>
        function onSuccess(googleUser) {
        var profile = googleUser.getBasicProfile();
        gapi.client.load('plus', 'v1', function () {
            var request = gapi.client.plus.people.get({
                'userId': 'me'
            });
            //Display the user details
            request.execute(function (resp) {
                var profileHTML = '<div class="profile"><div class="head">Welcome '+resp.name.givenName+'! <a href="javascript:void(0);" onclick="signOut();">Sign out</a></div>';
                profileHTML += '<img src="'+resp.image.url+'"/><div class="proDetails"><p>'+resp.displayName+'</p><p>'+resp.emails[0].value+'</p><p>'+resp.gender+'</p><p>'+resp.id+'</p><p><a href="'+resp.url+'">View Google+ Profile</a></p></div></div>';
                $('.userContent').html(profileHTML);
                $('#gSignIn').slideUp('slow');
            });
        });
        }
        function onFailure(error) {
            alert(error);
        }
        function renderButton() {
            gapi.signin2.render('gSignIn', {
                'scope': 'profile email',
                'width': 240,
                'height': 50,
                'longtitle': true,
                'theme': 'dark',
                'onsuccess': onSuccess,
                'onfailure': onFailure
            });
        }
        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function () {
                $('.userContent').html('');
                $('#gSignIn').slideDown('slow');
            });
        }
        </script>


<<script>
    $().ready(function(){
        $(".back-btn").click(function(){
            window.history.go(-1); 
            return false;
        });
    });
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
<style>
</style>
</body>
</html>
