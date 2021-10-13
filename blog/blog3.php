<?php 
error_reporting(0);
 require('connect.php');

     

if( isset($_POST['name'])&&!empty($_POST['name']) && isset($_POST['comment'])&&!empty($_POST['comment']))
{
$date1=""; 
$name="";
$comment="";
$insert="";
if(function_exists('date_default_timezone_set'))
{
    date_default_timezone_set("Asia/Kolkata");
}

  $date1=date("F j, Y, g:i a"); 

if( isset($_POST['name']))
{
   $name=$_POST['name']; 
}
if( isset($_POST['comment']))
{
    $comment=$_POST['comment'];
}

if(isset($_POST['submit']))
{
  if($name && $comment)
  {
  
      $insert=mysql_query("INSERT INTO blog3 VALUES('','$name','$comment','$date1')");
    }
  }
 $date1=""; 
$name="";
$comment="";
$insert=""; 
header('location:blog3.php');
}
    
   



?>



<!doctype html>
<!--
 
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MIT researcher built a drone that dodges trees at 30 mph</title>
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="../ico/favicons.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../ico/favicons.png">
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="../ico/favicons.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../ico/favicons.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../ico/favicons.png">
        <link rel="apple-touch-icon-precomposed" href="../ico/favicons.png">
        <link rel="icon" href="../ico/favicons.png" sizes="32x32">
        <link rel="icon" href="../ico/favicons.png" sizes="16x16">
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href='//fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="material.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body>
    <div class="demo-blog demo-blog--blogpost mdl-layout mdl-js-layout has-drawer is-upgraded">
      <main class="mdl-layout__content">
        <div class="demo-back">
          <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" href="index.php" title="go back" role="button">
            <i class="material-icons" role="presentation">arrow_back</i>
          </a>
        </div>
        <div class="demo-blog__posts mdl-grid">
          <div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--12-col">
            <div class="mdl-card__media mdl-color-text--grey-50" id="blog3">
              <h3>MIT researcher built a drone that dodges trees at 30 mph</h3>
            </div>
            <div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
              <div class="minilogo"></div>
              <div>
                <strong>The Newist</strong>
                <span>Nov, 4, 2015</span>
              </div>
              <div class="section-spacer"></div>
              <div class="meta__favorites">
                 <i class="material-icons" role="presentation">favorite</i>
                <span class="visuallyhidden">favorites</span>
              </div>
             
              
            </div>
            <div class="mdl-color-text--grey-700 mdl-card__supporting-text">
              <p>
             George of the Jungle would be jealous of this drone. Unlike that hapless hero, this drone can expertly avoid all manner of obstacles, including trees, while in motion.
Andrew Barry, a researcher at MIT’s Computer Science and Artificial Intelligence Lab (CSAIL), designed the drone as part of his PhD thesis.

</p>
              <p>
                The drone can recognize and avoid obstacles speeds of 30 miles per hour, without any human direction. The drone only cost $1,700 to build, using easily sourced components. A camera on each wing allows the drone to "see" in stereo, and two computer processors on board helps process the information. The drone creates a map of the world 32 feet (10 meters) in front of it, identifying obstacles, and mapping a path around them. The drone doesn't require preloaded maps, and can be flown in many environments. The researchers hope that eventually it can even be flown in areas with dense obstacles, like a thickly wooded forest.
             <p>
                This type of system is still experimental, but it could be the next step in making drones safer and more manoeuvrable. Google is hoping to havedelivery drones in the air by 2017, and technology like this could help delivery drones become a normal part of society. 
             </p>
            
           

          </div>
            
        <div class="mdl-color-text--primary-contrast mdl-card__supporting-text comments">      
<div class="mdl-color-text--primary-contrast mdl-card__supporting-text">
<form method="post" action="blog3.php" id="form1">
  <p><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  <input class="mdl-textfield__input" name="name" type="text"   id="name" placeholder="Your Name">
    <label class="mdl-textfield__label" for="sample5" ></label>
  </div></p>
  <div></div>
  <div class="mdl-textfield mdl-js-textfield">
    <textarea class="mdl-textfield__input" name="comment" type="text" rows= "3" id="comment" placeholder="Comment"></textarea>
    <label class="mdl-textfield__label" for="sample5" ></label>
  </div>
  <br>
  <span id="error">
  </span>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <button class="mdl-button mdl-js-button mdl-button--raised" type="hidden" name="submit" >
  Submit
</button>
</form>
</div>


<?php
   /* $sql_connection = mysql_connect("localhost", "juithost", "aphrodite12345") or die(mysql_error());
mysql_select_db('blog');
  $result = mysql_query("SELECT * FROM blog3 ORDER BY id DESC ");
    
   
 
   
    
    if($result){
      while ($row =mysql_fetch_assoc($result)) 
      {
        
        $name=$row["name"];
        $comment=$row['comment'];
        $date1=$row['date1'];
          
      echo '<div class="comment mdl-color-text--grey-700">
                <header class="comment__header">
                  <img src="images/user.png" class="comment__avatar">
                  <div class="comment__author">
                    <strong><b>'.$name.'</b></strong>
                    <span>'.$date1.'</span>
                  </div>
                </header>
                <div class="comment__text">
                  '.$comment.'</div></div>';
      }
            }*/
                ?>
                
             
            </div>
          </div>

          <nav class="demo-nav mdl-color-text--grey-50 mdl-cell mdl-cell--12-col">
            <a href="blog2.php" class="demo-nav__button">
              <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
                <i class="material-icons">arrow_back</i>
              </button>
              Newer
            </a>
            <div class="section-spacer"></div>
            <a href="blog3.php" class="demo-nav__button">
              Older
              <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
                <i class="material-icons">arrow_forward</i>
              </button>
            </a>
          </nav>
        </div>

        <footer >
          
        </footer>
      </main>
      <div class="mdl-layout__obfuscator"></div>
    </div>
     <script src="../../material.min.js"></script>
     <script src="form.js"></script>
  </body>
</html>