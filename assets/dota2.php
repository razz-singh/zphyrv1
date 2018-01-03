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
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
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
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
                    <li class="metal linear"><a href="forums.php">FORUMS</a></li>
                    <li class="metal linear"><a href="blogs.php">BLOGS</a></li>
                    <li class="metal linear"><a href="gallery.php">GALLERY</a></li>
                    <li class="metal linear"><a href="contact.php">CONTACT</a></li>                   
                    <li class="metal linear"><a href="career.php">CAREER</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        
      </div>
  <main id="dota2">
    <div id="gameSubHeader">
          <div class="col-md-4"><a href="dota2/ranking.php">Ranking</a></div>
          <div class="col-md-4"><a href="dota2/replay.php">Replay</a></div>
          <div class="col-md-4"><a href="dota2/trading.php">Trading</a></div>
      </div>
      <section class="dota_cover">
        <div class="dota-cover-logo">
        </div>
        <!-- <div class="col-md-4 col-sm-6"><img src="dota2/photos/header-1.png" alt="dota header image 1" class="img img-responsive"></div>
        <div class="col-md-4 col-sm-6"><img src="dota2/photos/header-2.png" alt="dota header image 2" class="img img-responsive"></div>
        <div class="col-md-4 col-sm-6"><img src="dota2/photos/header-3.png" alt="dota header image 3" class="img img-responsive"></div> -->
      </section>
      <scetion class="dota-history">
        <h1 class="wow slideInLeft">History</h1>
         <div id="dota-history-img-with-text-around">
            <img src="dota2/photos/history-sec-1.jpg" alt="A photograph of sliced kiwifruit on a while plate" class="curve wow slideInLeft" data-wow-duration="0.4s">
            <p class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">DOTA (Defence of The Ancients) first started in the year 2003 as a multiplayer online battle arena mod for
Warcraft III: Reign of Chaos &amp; its expansion Frozen Throne developed by Blizzard Entertainment. It was
featured in several worldwide tournaments including BizzCon &amp; Asian WCG
(World Cyber Games). Legendary player of Warcraft 3 Jang “moon” Jae-ho
who is the champion of WCG 2008 Warcraft earned over $3 million from
108 tournaments.</p>

              <p class="wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.8s">American video game developer Valve Corporation acquired all the
property rights to Dota in 2009 to develop a stand-alone sequel DOTA 2,
which was released in July 2013. With more attractive visual upgrade and
small tweaks to the gameplay, Heroes &amp; Items Dota 2 has revised the legacy
of its parent. Since its release Dota 2 has been the most played game on
Steam with peaks of over a million concurrent players.</p>

              <p class="wow fadeInLeft" data-wow-duration="1.1s" data-wow-delay="1.1s" >To attract more Dota players &amp; followers towards its sequel Valve sponsored sixteen accomplished Dota
teams to compete at The International, a Dota 2 specific eSports tournament, for a $1 million prize in 2011,
which has become an annual grand championship tournament in 2012.</p>

              <div class="horizontalLine"></div>
          </div>
      </scetion>
      <section class="dota-international container">
         <div >
            <h2 class="text-center">The International</h2>
            <div class="row">
              <div class="col-xs-4 col-xs-offset-4">
                <div class="horizontalLine"></div>
              </div>
            </div>
            <p class="text-center">The International (TI) is an annual Dota 2 eSports tournament
    hosted by Valve Corporation, the game&#39;s developer.</p>
          </div>

          <div class="dota-international-2011 row dota-international-tournament black-bg-st">
            <div class="col-md-4 wow slideInLeft">
             <img src="dota2/photos/international-2011.png" alt="international-ranking" class="img img-responsive" data-wow-duration="0.4s">          
            </div>
            <div class="col-md-4 wow fadeInDown middle-container mCustomScrollbar" data-mcs-theme="dark">
              <h2>The International 2011</h2>
              <div class="row">
              <div class="col-xs-4 col-xs-offset-4">
                <div class="horizontalLine"></div>
              </div>
            </div>
             <p class="" data-wow-duration="1.1s" data-wow-delay="1.1s" >The first tournament took place in Cologne, Germany at Gamescom in 2011 and was held shortly after the
public reveal of Dota 2, with a total prize pot of $1.6 million. </p>
            </div>
            <div class="col-md-4 wow slideInRight"> 
             <img src="dota2/photos/international-tournament-2011.jpg" alt="international-ranking" class="img img-responsive" data-wow-duration="0.4s">          
          </div>
          </div>          
        <div class="horizontalLine"></div>

          <div class="dota-international-2012 row dota-international-tournament">
            <div class="col-md-4 wow slideInLeft">
             <img src="dota2/photos/international-2012.png" alt="international-ranking" class="img img-responsive" data-wow-duration="0.4s">          
            </div>
            <div class="col-md-4 wow fadeInDown middle-container mCustomScrollbar" data-mcs-theme="dark">
              <h2>The International 2012</h2>
              <div class="row">
              <div class="col-xs-4 col-xs-offset-4">
                <div class="horizontalLine"></div>
              </div>
            </div>
             <p>The second International took place in 2012 at the Benaroya Hall in Seattle, and retained the same $1.6
million prize structure. </p>
            </div>
            <div class="col-md-4 wow slideInRight"> 
             <img src="dota2/photos/international-tournament-2012.jpg" alt="international-ranking" class="img img-responsive" data-wow-duration="0.4s">          
          </div>
          </div>          
        <div class="horizontalLine"></div>

          <div class="dota-international-2013 row dota-international-tournament black-bg-st">
            <div class="col-md-4 wow slideInLeft">
             <img src="dota2/photos/international-2013.png" alt="international-ranking" class="img img-responsive" data-wow-duration="0.4s">          
            </div>
            <div class="col-md-4 wow fadeInDown middle-container mCustomScrollbar" data-mcs-theme="dark">
              <h2>The International 2013</h2>
              <div class="row">
              <div class="col-xs-4 col-xs-offset-4">
                <div class="horizontalLine"></div>
              </div>
            </div>
             <p class="" data-wow-duration="1.1s" data-wow-delay="1.1s" >Valve announced The International 2013 on April 25, 2013. It was again hosted at the Benaroya Hall in
Seattle from August 7 to 11. The first team to be invited were the defending champions, Invictus Gaming.
Sixteen teams participated, thirteen of which received invitations, and the final three being decided in two
qualifying tournaments and a match at the start of the tournament. This event had a prize pool of over $2.8
million and since then, each annual tournament of The International has broken the previous one&#39;s prize pool
record.</p>
            </div>
            <div class="col-md-4 wow slideInRight"> 
             <img src="dota2/photos/international-tournament-2013.jpg" alt="international-ranking" class="img img-responsive" data-wow-duration="0.4s">          
          </div>
          </div>          
        <div class="horizontalLine"></div>

          <div class="dota-international-2014 row dota-international-tournament">
            <div class="col-md-4 wow slideInLeft">
             <img src="dota2/photos/international-2014.png" alt="international-ranking" class="img img-responsive" data-wow-duration="0.4s">          
            </div>
            <div class="col-md-4 middle-container mCustomScrollbar" data-mcs-theme="dark">
              <h2>The International 2014</h2>
              <div class="row">
              <div class="col-xs-4 col-xs-offset-4">
                <div class="horizontalLine"></div>
              </div>
            </div>
             <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.4s" >On March 31, 2014, Valve announced The International 2014, which would take place from July 18 to July
21 at the KeyArena, which is a venue with a significantly larger capacity than Benaroya Hall from the
previous two years. Unlike the previous three events, there would be three tiers for admissions, including
general admission, floor seating and VIP passes. Its price pool raised over $10.9 million, exceeding the prizes
pools of some most expensive tournaments in the world of sports like the Super Bowl, Masters Tournament, and
Tour de France.</p>
               <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.7s" >
For The International 2014, 11 teams would receive direct invites, with an additional 4 spots determined
by regional qualifiers taking place between May 12 and May 25. The 16 th spot would be determined by a
wild card qualifier between the runners-up from the regional competitions.</p>
            </div>
            <div class="col-md-4 wow slideInRight"> 
             <img src="dota2/photos/international-tournament-2014.jpg" alt="international-ranking" class="img img-responsive" data-wow-duration="0.4s">          
          </div>
          </div>          
        <div class="horizontalLine"></div>

          <div class="dota-international-2015 row dota-international-tournament black-bg-st">
            <div class="col-md-4 wow slideInLeft">
             <img src="dota2/photos/international-2015.png" alt="international-ranking" class="img img-responsive" data-wow-duration="0.4s">          
            </div>
            <div class="col-md-4 wow fadeInDown middle-container mCustomScrollbar" data-mcs-theme="dark">
              <h2>The International 2015</h2>
              <div class="row">
              <div class="col-xs-4 col-xs-offset-4">
                <div class="horizontalLine"></div>
              </div>
            </div>
             <p class="" data-wow-duration="1.1s" data-wow-delay="1.1s" >The first details pertaining to The International 2015 were revealed on January 5, 2015, with the preliminary
announcement of the tournament 16 teams attended the event, which took place from August 3 to August 8 at
the KeyArena in Seattle. The prize pool totaled more than US$18 million, of which US$16.4 million was
contributed by players. Thanks to this professional Dota 2 is the highest paying eSport in the world with premium
tournaments often have prize pools totaling millions of US dollars.</p>
            </div>
            <div class="col-md-4 wow slideInRight"> 
             <img src="dota2/photos/international-tournament-2015.jpg" alt="international-ranking" class="img img-responsive" data-wow-duration="0.4s">          
          </div>
          </div>          
        <div class="horizontalLine"></div>

          <div class="dota-international-2016 row dota-international-tournament">
            <div class="col-md-4 wow slideInLeft">
             <img src="dota2/photos/international-2016.png" alt="international-ranking" class="img img-responsive" data-wow-duration="0.4s">          
            </div>
            <div class="col-md-4 middle-container mCustomScrollbar" data-mcs-theme="dark">
              <h2>The International 2016</h2>
              <div class="row">
              <div class="col-xs-4 col-xs-offset-4">
                <div class="horizontalLine"></div>
              </div>
            </div>
             <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.4s" >The first details pertaining to The International 2016 were revealed on March 31, 2016, with the
announcement of ticket sales for the tournament. Open qualifiers for The International 2016 began on
June 21, with regional qualifiers following on June 25. Following the qualifiers, the tournament main event
took place from August 3–11, with the finals being held on August 13.</p>
             <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.7s" >The initial prize pool was seeded with $1,600,000 from the developers, with more to be added from
players through in-game purchases of the Battle Pass.</p>
             <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s" >The final prize pool reached $20,770,460, making the tournament have the largest prize pool in eSports
history.</p>
            </div>
            <div class="col-md-4 wow slideInRight"> 
             <img src="dota2/photos/international-tournament-2016.jpg" alt="international-ranking" class="img img-responsive" data-wow-duration="0.4s">          
          </div>
          </div>          
        <div class="horizontalLine"></div>
      </section>
  </main>
    
      <footer>
          <div class="container">
              <div><h4>Copyright &copy; 2017 | All rights reserved</h4></div>
          <div id="z-upper-header" class="container">
              <ul class="z-social-links">
                <li><a class="z-social-rss" href="#"><span class="fa fa-rss"></span></a></li>
                <li><a class="z-social-twitch" href="#"><span class="fa fa-twitch"></span></a></li>
                <li><a class="z-social-steam" href="#"><span class="fa fa-steam"></span></a></li>
                <li><a class="z-social-facebook" href="#"><span class="fa fa-facebook"></span></a></li>
                <li><a class="z-social-google-plus" href="#"><span class="fa fa-google-plus"></span></a></li>
                <li><a class="nk-social-twitter" href="https://twitter.com/nkdevv" target="_blank"><span class="fa fa-twitter"></span></a></li>
                <li><a class="nk-social-youtube" href="https://youtube.com/nkdevv" target="_blank"><span class="fa fa-youtube"></span></a></li>
            </ul>
          </div>
          </div>
      </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>     
    <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
      <script>
        (function($) {
            $(window).on("load", function() {
                $(".content").mCustomScrollbar();
            });
        })(jQuery);
    </script>
  </body>
</html>