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
  
      $insert=mysql_query("INSERT INTO blog2 VALUES('','$name','$comment','$date1')");
    }
  }
 $date1=""; 
$name="";
$comment="";
$insert=""; 
header('location:blog2.php');
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
    <title>Google Inbox will start using A.I to answer emails for you</title>
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
            <div class="mdl-card__media mdl-color-text--grey-50" id="blog2">
              <h3>Google Inbox will start using A.I to answer emails for you</h3>
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
             Google's mobile software is inching closer to becoming a true personal assistant, with the coming integration of an upcoming feature called Smart Reply.
Google's Inbox email app will soon be able to answer your emails, by suggesting a few short replies based on the content of the email you received. The responses aren't complex, mainly consisting of phrases like "We'll be there" or "I'll check on it."
</p>
              <p>
             Smart Reply uses deep learning, a stab at artificial intelligence. Over time, the machine will learn more and more about language, and how you like to respond to emails. A main tenet of artificial intelligence today is called machine learning which can be simple statistics, or vast arrays of mathematical functions called artificial neural networks.
             <p>

              There are a bunch of different kinds of artificial neural networks that are good at different things. These neural networks are just clusters of mathematical equations that can deal with certain inputs and outputs, all linked together. When an individual cluster, or "neuron" is done processing a piece of information, they pass it along to the next "neuron" down the line. The constellation of neurons begins to break down information into known quantities called vectors, and from understanding relationships between vectors they can compare to other relationships and make sense of data.
            </p>
            <p>Google Inbox uses two of these recurrent neural networks: one to process the information in the email you received, and another to generate possible responses.
The first step is to understand the situation, so the first neural net "reads" your email for you. It scans word by word. Instead of understanding the syntax of the sentence, the neural net goes straight for meaning.
The second takes that vector, or idea, and formulates a response by predicting which word should come next, grammatically and logically, and then outputting that word.

            </p>
            <p>
              Since privacy is an issue, no humans will ever be able to read your email to verify the accuracy of the neural network. The Smart Reply feature will be able to generate around 20,000 responses that will vary between three and six words.
            </p>
           

          </div>
            
        <div class="mdl-color-text--primary-contrast mdl-card__supporting-text comments">      
<div class="mdl-color-text--primary-contrast mdl-card__supporting-text">
<form method="post" action="blog2.php" id="form1">
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
 /*   $sql_connection = mysql_connect("localhost", "juithost", "aphrodite12345") or die(mysql_error());
mysql_select_db('blog');
  $result = mysql_query("SELECT * FROM blog2 ORDER BY id DESC ");
    
   
 
   
    
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
            }
              */  ?>
                
              
            </div>
          </div>

          <nav class="demo-nav mdl-color-text--grey-50 mdl-cell mdl-cell--12-col">
            <a href="index.php" class="demo-nav__button">
              <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
                <i class="material-icons">arrow_back</i>
              </button>
              Newer
            </a>
            <div class="section-spacer"></div>
            <a href="index.php" class="demo-nav__button">
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