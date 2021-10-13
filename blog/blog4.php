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
  
      $insert=mysql_query("INSERT INTO blog4 VALUES('','$name','$comment','$date1')");
    }
  }
 $date1=""; 
$name="";
$comment="";
$insert=""; 
header('location:blog4.php');
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
    <title>No Shave November</title>
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
            <div class="mdl-card__media mdl-color-text--grey-50" id="blog4">
              <h3>No Shave November</h3>
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
 The month of November is a tiring month for most college students as they run the final lap of the semester in preparation for finals but simultaneously are eager for their much-needed monthlong Christmas break.
However, November is also important for another reason:NO SHAVE NOVEMBER. The tradition goes that guys grow out lumberjack-like beards throughout the month. Although no one reason or explanation exists for this tradition, most guys will tell you it’s nice to have an excuse to not shave for a month. For a long time, this sans-shave month was purposeless and without any particular meaning or online presence. It was just a fun thing for college kids to do.

</p>
              <p>
                Actual meaning-No-Shave November is a month-long journey during which participants forgo shaving and grooming in order to evoke conversation and raise cancer awareness.
             <p>
                The story-For the Hill family, from the Chicago suburbs, the November grooming fad became much more significant. No-Shave November has been a tradition for many years, but it wasn’t until the fall of 2009 that members of the Chicagoland Hill family decided to use it as a means to raise money for charity. It was a project that held special meaning to the eight Hill children after their father, Matthew Hill, passed away from colon cancer in November 2007.
             </p>
             <p>
               In November 2007, the eight Hill siblings lost their father to an 18-month battle with colon cancer. As Rebecca, the oldest, and a friend contemplated ways to raise money for cancer research, they decided to give the facial hair fest some meaning.The family launched NO SHAVE NOVEMBER , an organization dedicated to raising funds and awareness for cancer, and built off a reality many cancer patients face - hair loss following chemotherapy treatment.
             </p>
             <p>
                The rules-The rules of No-Shave November are simple: put down your razor for 30 days and donate your monthly hair-maintenance expenses to the cause. Strict dress-code at work? Don't worry about it! They encourage participation of any kind; grooming and trimming are perfectly acceptable.
             </p>
             <p>Get involved-Participants in No-Shave November have always been willing to ditch their razors and, more recently, donate to cancer fighting foundations. But what started as an easy way for a few followers on Facebook to donate their hard-earned money has turned into a nationwide celebration. Every November for the past six years, these No-Shavers have donated the cost of grooming (from a few dollars on razors to $100 on a salon visit) and helped the “No shave november”  organization raise over $2 million dollars to date. As a family run, web-based organization, No-Shave November has grown exponentially since 2009. Their goal is to keep raising money for cancer prevention, education, and research and to let that hair grow in the process! They want every participant to embrace their hair for the many cancer patients that lose theirs due to vigorous treatments. 
             </p>
             <p>
              Together, anything is possible, and we’ll get closer to eradicating cancer one whisker at a time!
The sky is the limit!!
“Let it Grow..Let it Grow!”

             </p>
            
           

          </div>
            
        <div class="mdl-color-text--primary-contrast mdl-card__supporting-text comments">      
<div class="mdl-color-text--primary-contrast mdl-card__supporting-text">
<form method="post" action="blog4.php" id="form1">
  <p><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  <input class="mdl-textfield__input" name="name" type="text" id="name" placeholder="Your Name">
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
    //$sql_connection = mysql_connect("localhost", "juithost", "aphrodite12345") or die(mysql_error());
//mysql_select_db('blog');
  //$result = mysql_query("SELECT * FROM blog4 ORDER BY id DESC ");
    
   
 
   
    
    //if($result){
      //while ($row =mysql_fetch_assoc($result)) 
      //{
        
        //$name=$row["name"];
        //$comment=$row['comment'];
        //$date1=$row['date1'];
          
      //echo '<div class="comment mdl-color-text--grey-700">
        //        <header class="comment__header">
          //        <img src="images/user.png" class="comment__avatar">
            //      <div class="comment__author">
              //      <strong><b>'.$name.'</b></strong>
                //    <span>'.$date1.'</span>
                  //</div>
                //</header>
                //<div class="comment__text">
                  //'.$comment.'</div></div>';
      //}
        //    }
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