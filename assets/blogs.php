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
<main id="blogs">
  <section class="zephyr-blog-cover">
      <div class="container">         
      <h1 class="blog-cover-heading"> Zephyr Story Hub</h1>
        <div class="col-md-6 ">
          <div class="top-blog-left">
          <img src="blogs/blog1.jpg" alt="blog-image"  class="img img-responsive"/>
          </div>
          <div class="top-blog-overlay tail-trancation" data-toggle="modal" data-target="#blogonepopup">
            <h3>Philosophical analysis of Dota 2 </h3>
            <p>The International</p>
          </div>
        </div>
        <div class="col-md-6 top-blog-right">
        <div class="row ">
          <div class="col-md-6"> 
            <img src="blogs/blog2.jpg" alt="blog-image"  class="img img-responsive"/>
            <div class="top-blog-overlay tail-trancation"  data-toggle="modal" data-target="#blogtwopopup">
              <h3>Support : The Playmaker </h3>
            </div>
           </div>
          <div class="col-md-6">
           <img src="blogs/blog3.jpg" alt="blog-image"  class="img img-responsive"/>
           <div class="top-blog-overlay tail-trancation"  data-toggle="modal" data-target="#blogthreepopup">
              <h3>Gaming: A Boon in disguise! </h3>
            </div>
          </div>

          </div>
          <div class="row next-row">
          <div class="col-md-6"> 
            <img src="blogs/blog4.png" alt="blog-image"  class="img img-responsive"/>
            <div class="top-blog-overlay tail-trancation"  data-toggle="modal" data-target="#blogfourpopup">
              <h3>Human behaviour in Ambient Gaming</h3>
            </div>
          </div>
         </div>  
        </div>
        </div>
      </div>

  </section> 

  <!-- <section class="blog-profile container">
    <h1>Profiles</h1>
    <div class="col-md-4">
      <img src="blogs/blog1.jpg" alt="" class="img img-responsive" />
      <div class="overlay-right">
        <div>
          <h3>Razz</h3>
          <h4>Game Topic 1</h4>
          <p>Game Discreption</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <img src="blogs/blog2.jpg" alt="" class="img img-responsive" />
      <div class="overlay-right">
        <div>
          <h3>Razz</h3>
          <h4>Game Topic 2</h4>
          <p>Game Discreption</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <img src="blogs/blog3.jpg" alt="" class="img img-responsive" />
      <div class="overlay-right">
        <div>
          <h3>Razz</h3>
          <h4>Game Topic 3</h4>
          <p>Game Discreption</p>
        </div>
      </div>
    </div>
  </section>

  <section class="blog-archive">
<div class="container">
<h1>Blog Archives</h1>
    <div class="row">
      <div class="col-md-4">
        <img src="blogs/blog1.jpg" alt="" class="img img-responsive" />
        <div class="overlay-right">
          <div>
            <h3>Razz</h3>
            <h4>Game Topic 1</h4>
            <p>Game Discreption</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <img src="blogs/blog2.jpg" alt="" class="img img-responsive" />
        <div class="overlay-right">
          <div>
            <h3>Razz</h3>
            <h4>Game Topic 2</h4>
            <p>Game Discreption</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <img src="blogs/blog1.jpg" alt="" class="img img-responsive" />
        <div class="overlay-right">
          <div>
            <h3>Razz</h3>
            <h4>Game Topic 3</h4>
            <p>Game Discreption</p>
          </div>
        </div>
      </div>
    </div>
</div>
  </section> -->
  <div id="blogonepopup" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center">Philosophical analysis of Dota 2</h4>
          </div>
          <div class="modal-body">
          <img src="blogs/blog1.jpg" alt="blog-img" class="blog-img img img-responsive">
              <p>Greetings my fellow Dota lovers. If you are feeling confused regarding the title of this topic, then I
assure you that it will make sense once you start reading. I being a passionate Dota freak myself
have often wondered about its moral value &amp; how it affects my approach towards life. Hope you
guys will enjoy as well as take some lessons from it.</p>
                <ul>
                  <li class="items">                    
                    <h3>Practice makes you perfect </h3>
                    <p>No talent can shine without proper practice. This is the fundamental rule of everything. Only
the person with strong determination &amp; dedication may thrive among others. I don’t this
there is more to say about it that you haven’t know already.</p>
                  </li>
                  <li class="items">
                    <h3>Plan every step </h3>
                    <p>Dota is one of the best strategy games out there in which you compete with other human
opponent to claim victory. In which you have to capitalize on the hero’s strength &amp; limitations to
use it to its maximum potential. Strategy is planning to reach goal. Only a good strategist can
lead properly whether it is in or off game. For every chances &amp; opportunities &amp; challenges that
came and will come into your life, you will need a good plan to prepare in order to achieve
desired result. Everything you face in actual life are all the same, nothing but challenges &amp;
conquering obstacles. What I&#39;ve learned, is to break things down to its very core, to understand
it better, and to estimate its values, and calculating the efforts and methods that I should follow,
to invest my time in, or to simply eliminating the unappropriated options. This is what happens
at every beginning of the game, the Ban/Pick.</p>
                  </li>
                  <li class="items">
                    <h3>Co-ordination is the key </h3>
                    <p>The thing about Dota 2, I admire the most is emphasis on teamwork. No matter how good
you are, if you don’t have good teammates or you are just being selfish, you will definitely
lose in the end against a same level opponent. In real life also no one can argue on the
importance of teamwork. In real life as well as Dota 2 conflicts or disagreements are
common between individuals. To understand well each individual, respect their ideas,
knowing their limits &amp; sacrifice personal needs for bigger target, takes loads of times to
practice, constantly trying, and open-mind towards each other. You&#39;ll also recognize the
ones that you can never work with, the selfish, lazy, and not having a desire
kind of people. Communication is vital in both in and off game. You’ve got a team, but you
also need to communicate. A mid who’s struggling needs to let the supports know and ask
for help. A support saving for boots should holler up so somebody else knows to get wards.
Two cores shouldn’t farm together a lane. If you just take it upon yourself, you will hurt
yourself and also your team. Playing as a team is not a single bit easier than working as a
team in real life.</p>
                  </li>
                  <li class="items">
                    <h3>Everyone is unique in their own way</h3>
                    <p>
                      The heroes of Dota 2 are divided into different class according to their stats and role. This
signifies that every individual is different from other. They can unleash their full potential
once they start capitalizing on their own strengths and co-ordinate with others for maximum
result. Your hero picks reflect your personality. You guys must be wondering “How is that
possible?” To make you understand properly let me share an article, I have come across.
                    </p>
                    <ul>
                      <li class="sub-item"><span class="sub-item-head">The Strength: </span>The Strength: You&#39;re a bit slow, you don&#39;t like analysing &amp; planning, you&#39;re simple and
aggressive, that hook yourself to every fights without thinking, a bit generous to take the
damages for the teammates. Sometimes, you can easily get overconfident.</li>
                      <li class="sub-item"><span class="sub-item-head">The Agility:</span> You&#39;re fast, you like farming to save gold, just like working hard for money,
you&#39;re arrogant, overly confident in every situation. You want to be the central of the views,
the attention seeking type. Brutal, cold blood, materialistic, hard head, and selfish, but have
some above average intelligence and quite skillfull, that is who you are.</li>
                      <li class="sub-item"><span class="sub-item-head">The Intelligent:</span> the brain of the team. Doing everything according to the plan and the role
you&#39;re choosing. Take care of other teammates, harassing enemies hard, giving last hits for
carry. Fast hand, fast thinking. An excellent employee. A true mastermind. But sometimes,
you lack the will to keep things for yourself, and the confident when facing big enemies, so
the selfish &amp; cold blood guys will have their presents &amp; promotions taking away from you.</li>
                    </ul>
                    <p>P.S - As I said before it’s a theoretical analysis. If it is wrong in your case, then pardon me.</p>
                  </li>
                  <li class="items">
                    <h3>Take calculative decision</h3>
                    <p>Every decision that you make comes with a risk of failure. Planning is useless without proper
execution. Sometimes things won’t go the way you planned. Only smart &amp; confident
decision making ability matters at these situations. Controlling the objectives, wisely picking
fights, engaging or disengaging properly and small decisions like this can change the outcome completely at any situation. But this is kind of a double edge sword. If you are not
careful with your decisions, things can get out of hands very quickly. This is also absolute
when comes to real life.</p>
                  </li>
                  <li class="items">
                    <h3>Know your opponent</h3>
                    <p>In Dota knowing your opponent abilities, strengths and weaknesses is the first thing you
should aware of before planning your plays. You need to learn how every hero works in
order to predict their next move. Life is no different, if you know what your competitors or
enemies are good at, you would be better equipped to beat them. As the saying goes “ You
can only get smarter by playing a smarter opponent.” Whether in real life or game we
always should challenge our own limits in order to get better every time.</p>
                  </li>
                </ul>
          </div>
          <div class="modal-footer">        
            <button type="button" class="btn btn-default text-left hidden" data-dismiss="modal">Close</button>        
            <button  class="btn btn-primary text-right" data-dismiss="modal">Back</button>
          </div>
        </div>
    </div>
  </div>
  <div id="blogtwopopup" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center">Support : The Playmaker</h4>
          </div>
          <div class="modal-body">
          <img src="blogs/blog2.jpg" alt="blog-img" class="blog-img img img-responsive">
          <p>Greeting everyone! In this article I am going to shed some lights on the most responsible role in
Dota 2, the support. I have always played support, and although I often get to try other
roles/heroes, it still remains my favorite position. Playing support is about embracing the
strategy you or your captain designed. It’s about understanding the game and anticipating your
opponent’s move to make counter plays possible. Although it is the most underrated role in a
team composition, but a good support can turn the tides of the entire game within seconds.</p>
            <p>But the real question is “How can someone be successful as a support in this carry
dominating meta” . Answering it in a sentence or two is actually impossible. I will try to give a lot
of inputs in that article, share what I do to practice supporting, and hopefully you guys find the
answer you were looking for.</p>
            <ul>
              <li class="items">                    
                <h3>Team practice  </h3>
                <p>Unarguably, the first thing you need in order to improve properly is team practice. Play with
your teammates to improve your synergy by trying different pick combinations &amp; advanced
strategies. Competing with other teams in practice matches will give you a chance to properly
execute your strategies &amp; to keeps your nerves tight in tensed situations. You get to see how
people react to your plays, your warding, and you also get to watch the replay of the opposing
team’s supports, which can sometimes be very helpful. You have to think about what you do, and
how you do it. You have to try everything that comes to your mind, to innovate. It is always a
better idea to push your limits during ‘fake games’ than during an official. There is not much to
say about team practice, it is rather obvious.</p>
                  <p>I want to jump to the second part of my article, which is definitely the one that you will find the
most interesting.</p>
              </li>
              <li class="items">
                <h3>Individual practice</h3>
                <p>
                  Here we are, individual practice. This is definitely the most important part of practicing the
support role. Let’s start from the most obvious, to the least obvious.
                </p>
                <ul>
                  <li class="sub-item">
                    <h3>Solo games </h3>
                    So first of all, you go for games in which you practice your mechanics with the hero you main.
You get used to the range of your spells, the way they interact with other spells/items, you
experiment with different item builds and try to get the timing of spells &amp; items usages perfectly.
This is only possible by practicing hard until you get it right. For an example: <span class="sub-item-head">Smoke of Deceit </span>
is a very cheap item which has the capacity to turn the game around if used correctly.
Additionally, you get to know the damage output &amp; supporting capacity of your spells, the
position you need to have in fights, etc… In other words : you try to improve your mechanics and
your knowledge of the hero in question. <br>
                      There is more that you can do when you just play solo games, of course. You can practice your
warding/vision control. Warding depends on two mains things: the playstyle of the opposing
players/teams, and the strategies/heroes they are running. Some players, for example, are
aggressive by nature, thus their warding will be completely different from a very safe team. The
same reasoning applies to strategies: if they run a line-up that relies heavily on getting Roshan,
they will obviously ward differently than if they would be running a 4 protect 1 type of line-up. It
is important that you keep those two aspects in mind when you try to analyse someone’s way of
warding. Last, but not least, the real-time situation. Indeed, do not underrate the importance of
that. Often you ward just because a fight was about to happen, and by observing that, you can’t
get any intelligence that will be useful outside of that precise game. It is very important for you to
learn how to make the difference between ‘reactionary’ warding or rotations overall, and
‘strategical’ ones.</li>
                  <li class="sub-item">
                    <h3>Replays analysis</h3>
                    This part is probably more important than the solo games. I would say than the solo games are
useful to secure the basics, but looking at replays is truly what will start to make the difference.
You can either analyse your own replays, or others. When you look at your own replays, it is
mainly to get more detailed information about how the opposing team reacted to your support
plays, or to understand better what you did wrong/right. Obviously it is also very important to
ask yourself what could you have done better in that game. The classic reaction is usually that if
the game was won, there’s very few things to look at, but that is completely false. You can win a
game although you played horribly, and vice versa. As a support, it is very important to
understand what your role exactly is, what are the limits of your role. <br>
                    <span class="sub-item-head">For an example :</span>  if you played really well, pressured the mid-lane for instance, and
allowed your mid-lane to really dominate his matchup. The safe-lane was secured as well, and
overall early game was a great success. Nevertheless, your team lost the first big fights, and the
game got out of control extremely quickly. You might have that tendency to, if you get to play that
type of game again, try to get a bit more farm or space. That is just a mistake. It will only reduce
the quality of games you play. It is important to know the limits of what you have to do. The rest
usually comes down to your core’s decision making, or your team calls. Trying to do too much
will actually get you to neglect the basics. You often see supports trying to get 25 kills in 10
minutes in early, forgetting the very basics that are warding, being ready to counter-gank etc…
The most important part of replays analysis is definitely the analysis of other players. Replays are
like a gold mine, it is the access to people’s brain and geniality, so why not use it? Look at replays,
try to understand what they do, and replicate how they do it. Obviously, once you understood it,
you need to try to replicate it, and do it until you’re confident you mastered it. But this is
probably the best way of improving as a support. Don’t copy everything, every player has his
weaknesses, try simply to spot his strengths and adapt them to your way of supporting.</li>
                  <li class="sub-item">
                    <h3>General practice</h3>
                    This is the last point I will tackle in this article, and probably the one you’ve never heard of yet. It
is something I use a lot in order to improve as a support player, and it really helped me so far. I
called it general practice, so what do I mean by that? Basically it means increasing your general
knowledge of the game. Practicing other roles, other heroes, so that you can understand them
better, and thus, counter them better. Whenever I feel like I lack knowledge about a certain hero
or playstyle, I actually practice it on my own to make sure I understand it to perfection. Let’s take
spectre as an example. You’re a support player, and you keep facing spectre. The best way for you
to learn how to counter spectre is to study spectre players, or play it yourself. By playing spectre a

decent amount (until you’re good at understanding how the hero works and what he needs), you
will realize many things about the hero, his strengths and weaknesses. For instance: spectre is a
very slow farmer. You played spectre yourself, and you actually wanted to fight all the time, you
were pinging your team “Haunt: READY” because you were dreaming of getting that roaming
support kill. You realized how crucial your manta was, or you started going for easy targets in
fights. You abused the manta ‘one shot’ move, where you just spot a hero that’s a bit far from the
others in teamfights, in desolate range, and you always jumped him first with manta activation.
Long story short, you know all there is to know about spectre. <br>
So next time you play support against spectre, you are going to mess with him like never
before. You won’t give him the kill he desperately needs, you will place the ward where you know
you would farm with spectre, etc. It is also a great way to practice support roles, learning more
about other roles. You’ll only be able to help your mid-laner effectively if you understand his
match-up, the timings, etc. Same goes for the support duel in a game. If you do not want to get
completely out maneuvered by the opponents like Tuskar or Bounty Hunter, you need to
understand how that hero is played. Because if you don’t, even if you are the best spirit breaker in
the freaking world, you will get outplayed. There are several ways to approach that type of
practice, either you play the heroes yourself, or you watch good players playing them, or last, you
discuss a lot with your team mates, ask them many questions about what annoys them when they
play that hero, what helps them a lot, what are their timings, etc.<br>
So coming to the conclusion, If you manage to keep all that in mind when you play
support, you will be very effective, and improve very fast. It requires a lot of work, and focus, but
it is doable. Also always keep in mind that it is better to practice effectively two hours, while you
are still focused and in good shape, than to just play 10 hours in a row, being tired and lazy.
Quality &gt; Quantity. When you feel like your plays are becoming a bit sloppy, just chill, or go
watch a replay. <br>
Anyway, I hope you enjoyed reading, and most importantly that the article helped you in your
tough support life. If you’re a core player, you now understand the amount of things a support
has to take into account before being effective.  <span class="sub-item-head"> Remember, this is nothing but my personal
opinion/experiences. Cheers!</span>
</li>
                </ul>
              </li>                
            </ul>
          </div>
          <div class="modal-footer">        
            <button type="button" class="btn btn-default text-left hidden" data-dismiss="modal">Close</button>        
            <button  class="btn btn-primary text-right" data-dismiss="modal">Back</button>
          </div>
        </div>
    </div>
  </div>
    </div>
  <div id="blogthreepopup" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center">Gaming: A Boon in disguise!</h4>
          </div>
          <div class="modal-body">
          <img src="blogs/blog3.jpg" alt="blog-img" class="blog-img img img-responsive">
              <p>Someone once told me, &quot;Even if you are good at cooking, you can make a career out of it. No matter
what your background is&quot;. And with life I have had the opportunity to see that it is so true. Remember
the times when people said cricket is a men’s game. Today the world looks forward to watch womens&#39;
cricket match. Online gaming is about to become an Olympic game. So if one loves to play that game day
and night passionately, then he/she should continue to do so cause with constant practice and true
determination one can surely end up as a ‘Professional Gamer’. As everything is about believing in
oneself. These days we are more connected through virtual medium rather than in reality. So why not
make the best use of it. Why not make a career out of the things we are crazy about. Gaming now-a-
days is not just a time killing thing as it was in its initial days. Online gaming has become a sport. It has
become a part and parcel of life. Gaming needs precision, patience, presence of mind and lot more than
a non gamer can think of. It involves a lot of mental exercise. Gaming needs knowledge. Gaming can be
a ‘Bain’ for people who ignore the importance of knowledge. It doesn&#39;t need you to know ‘Rocket
Science’, but it is simple science and math. Online gaming is the future, it&#39;s lucrative and most
interesting thing in today&#39;s world. It&#39;s a serious business, art. Call it whatever you like but only a self
disciplined one can be the master. We all love gaming but to be a gamer, you need to keep calm and
play with passion and dedication.</p>
                <ul>
                  <li class="items">                    
                    <p>Gaming industry or online gaming industry is applying and using a good number of technologies to make
gaming a life time experience. Augmented Reality, Virtual Reality and artificial technology is some of the
latest technologies that have been extensively used in developing a real life experience in online gaming
sector and area. Because these gaming industries understand and value the need of seamless gaming
and better gaming experiences. As it is beneficial to both ends. Gaming industries know that their
products are the sole reason which improves the user engagement, organizational productivity, flow,
learning, crowd sourcing, employee recruitment and evaluation and other areas and sections of human index development. And at the user’s end, these games optimizes natural human desires like socializing,
learning, mastery, competition, achievement, status, self-expression, altruism, or closure according to
the framing of a situation as game or play.</p>
                  </li>
                  <li class="items">
                    <p>The online/offline gaming that primarily is a PC driven activity and with increasing number of smart
phones is migrating towards the Android based platforms has its professional gaming platform known to
be as eSports. It is also known to be as competitive gaming or the pro gaming. As far as future of eSports
in India is concerned it depends and varies on the variety of factors. The future of eSport gaming
depends upon how far gamers are commercially benefitted playing the eSports competitions. It is being
used as a marketing tool to the niche audience with much higher retention rate and numbers.</p>
                  </li>
                  <li class="items">
                    <p>The popularity of eSports game is constantly on rise on the account of its promotion and inducing other
popular gaming technologies being inculcated into it. According to an estimated figure around 90 million
people globally has worldwide watched eSports in year 2016. The increased increasing availability of
online streaming media platforms, especially, Twitch.tv has caused to immense popularity of the game
and especially the eSports competition.</p>
                  </li>
                  <li class="items">
                    <p>
                      As far as gaming viewership has been concerned there round about 85% male and 15% female viewer
watch these games lying between the age group of 18 and 34. Despite this, several female personalities
within eSports are hopeful about the increasing presence of female gamers. The most popular one in
the field eSport companies, internationally, is South Korea that even licensed pro gamers. Other than
South Korea the competitions majorly happens in Europe, North America and China. The global eSport
market generated revenue in the quantum of 500 million dollar in year 2017 with around 250 million
audiences.
                    </p>  
                  </li>
                  <li class="items">
                    <p>The most popular online game categories with eSports are real-time strategy, fighting, first-person
shooter (FPS), and multiplayer online battle arena (MOBA). The most popular eSports games
tournaments are The International, the League of Legends World Championship, the Evolution
Championship Series and the Intel Extreme Masters that are broad casted live and pay handsome prize
money to the competitors.</p>
                  </li>
                  <li class="items">
                    <p>Since the year 2000 onwards a massive surge has been witnessed among professional gamers towards
eSports. Many, developers are deliberately making and designing games for promoting the eSport
subculture. Another category of gaming popularity is fighting and arcade games that, are too immensely
popular at the eSports tournaments. During the last decade, the popular games under eSports were the
professional competition as the multiplayer online battle arena (MOBA) games Dota 2 and League of
Legends, and the first person shooter game Counter-Strike: Global Offensive. The significant earnings
include Smite, StarCraft II, Call of Duty, Heroes of the Storm, Hearthstone and Overwatch.</p>
                  </li>
                  <li class="items">
                    <p>Hence, gaming or eSport as a true sport has a long way to go. However, India is starting to realize and
recognize the wider scope for growth in it in non contextual reference.</p>
                  </li>
                </ul>
          </div>
          <div class="modal-footer">        
            <button type="button" class="btn btn-default text-left hidden" data-dismiss="modal">Close</button>        
            <button  class="btn btn-primary text-right" data-dismiss="modal">Back</button>
          </div>
        </div>
    </div>
  </div>
  <div id="blogfourpopup" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center">Human behaviour in Ambient Gaming</h4>
          </div>
          <div class="modal-body">
          <img src="blogs/blog4.png" alt="blog-img" class="blog-img img img-responsive">
              <p>There are only two ways to influence human behaviour: you can manipulate it or you can inspire it.
              And ‘Modern gaming’ has always been inspiring to its folks since the moment it substantially
              changed its course from being a solo activity to an ambient activity. Use of different modalities like
              speech, listening skills, vision and gestures certainly creates a new form of gaming interaction in
              ambient gaming. And eventually it enriches the user experience by taking it to a new level. This new
              phase of gaming has been implemented to provide a more usable game setting to the players,
              keeping their emotions and the learning process in mind. Revolutionary as it sounds, it did bring in a
              revolution in the input modalities industries. In addition, more actuators have become available, such
              as 3D visualization and tactile feedback.</p>
              <p>This article throws light upon different aspects of human behaviour in ambient gaming :</p>
                <ul>
                  <li class="items">  
                    <h3>1. Psychology:</h3>                  
                    <p>The common fear about video games, that they are addictive and promote such maladies as social
                    isolation, obesity and violence. This misconception has led to a lot of misled ideologies which in
                    return create a problem for the inspiring gamers who put their heart in the strategies and the story of
                    the game. According to an article published by ‘American Journal of Play’ (Fall, 2014), research says
                    that playing video games demonstrates a long-lasting positive effects on basic mental processes such
                    as perception, attention, memory, and decision making. And in an ambient gaming, these basic
                    mental processes get heightened as the games require rapid hand movements, keeping track of
                    many items at once, holding a good deal of information in mind at once, and making split-second
                    decisions. Many of these abilities acquired by the gamers are precisely those that psychologists
                    consider to be the basic building blocks of intelligence.</p>
                  </li>
                  <li class="items">
                    <h3>2. Personality:</h3>  
                    <p>Personality is the unique, integrated and organized system of all behavioural aspects of a person. It is
                    the sum total of one’s experience, thoughts, and actions. A person’s physical traits, attitudes, habits
                    and, emotional and psychological characteristics are all parts of one’s personality. And games are a
                    fundamental part of human experience, played in some form by cultures around the world and
                    throughout history. Many experiments, with elderly participants, show that video game play results
                    in improvement in cognitive flexibility, attention, working memory, and abstract reasoning. And one
                    study found that such play led not just to cognitive improvements, but also to better self-concepts
                    and enhanced qualities of the life in elderly participants.</p>
                  </li>
                  <li class="items">
                    <p>The popularity of eSports game is constantly on rise on the account of its promotion and inducing other
popular gaming technologies being inculcated into it. According to an estimated figure around 90 million
people globally has worldwide watched eSports in year 2016. The increased increasing availability of
online streaming media platforms, especially, Twitch.tv has caused to immense popularity of the game
and especially the eSports competition.</p>
                  </li>
                  <li class="items">
                    <h3>3. Attitude:</h3>
                    <p>
                    Attitude can be defined as a mental state of readiness, organized through experience, exerting a
                    directive and dynamic influence upon the individual’s response to all objects and situations with
                    which it is related. Though the link between playing violent video games and antisocial behaviour,
                    such as increased aggression and decreased empathy, is hotly debated, but the researchers in
                    Germany used functional magnetic resonance imaging (fMRI) on long term players of violent video
                    games and found that they had the same neural response to emotionally provocation images as non-
                    gamers. This finding suggests that empathy is not blunted by playing such games long-term.      </p>  
                  </li>
                  <li class="items">
                    <h3>4. Emotions:</h3>
                    <p>Emotions denote a state of being moved, stirred up or aroused and involve impulses, feelings and
                    physical and psychological reactions. A negative emotional response may lead to non-cooperation
                    and non-participation in a team game. The ability of ambient gaming to evoke strong emotional
                    responses offers a glimpse into a future potential psychological interventions that could use role-
                    playing gaming environments to create a new category of interventions and treatment programs for
                    tackling hard-to- treat issues such as anger management, impulse control, enhancing empathy, and
                    others, which would be an exciting possibility indeed. As video games become ever more ubiquitous
                    and sophisticated, our analysis of their impact needs to advance as well, and become more nuanced.
                    Yes, they have negative impacts but positives ones too.</p>
                  </li>
                  <li class="items">
                    <h3>5. Thinking and reasoning: </h3>
                    <p>Thinking is behaviour which is often implicit and hidden, and in which
                    symbols (images, ideas, and concepts) are ordinarily employed. Group thinking, in which a number of
                    persons participate in the solution of a problem, is usually more efficient than individual effort and is
                    often more satisfactory. In reasoning, the thinking process is applied to the solution of problems.
                    Research from North Carolina State University and Florida State University suggests that mainstream
                    games geared toward entertainment can help improve attention, spatial orientation, and problem
                    solving abilities. Spatial reasoning skills are measured by one’s ability to visualize and manipulate
                    two- and three-dimensional objects, and are seen as being related directly to achievements in
                    technology, engineering, math, and science. However, the New York Times recently resorted that
                    these spatial reasoning skills are often not identified as areas of aptitude in children. As a result, they
                    may not be taught, valued, or assessed in an academic setting.</p>
                  </li>                  
                </ul>
          </div>
          <div class="modal-footer">        
            <button type="button" class="btn btn-default text-left hidden" data-dismiss="modal">Close</button>        
            <button  class="btn btn-primary text-right" data-dismiss="modal">Back</button>
          </div>
        </div>
    </div>
  </div>
    </div>
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
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();

    $('.grid').masonry({
        // options
        itemSelector: '.grid-item',
        columnWidth: 200
      });
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