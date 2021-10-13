<?php 

if(isset($_POST['name'])&&!empty($_POST['name'])&&isset($_POST['email'])&&!empty($_POST['email'])&&isset($_POST['cn'])&&!empty($_POST['cn'])&&isset($_POST['branch'])&&!empty($_POST['branch'])&&isset($_POST['year'])&&!empty($_POST['year']))
	{
		$host='localhost';
		$user_name='juithost';
		$pass='aphrodite12345';
		$contactno=$_POST['cn'];
		$year=$_POST['year'];
		$branch=$_POST['branch'];
		$database_name='juithost_acm';
		$name=$_POST['name'];
		$emailid=$_POST['email'];
		$message=$_POST['message'];
		$subject="ACM-JUIT Confirmation Mail";
		$msg="Registered!!!";
		$mess="Dear ".$name.",\nThanks for registering for acm-JUIT. You will get the updates regarding the interview soon.\n\n\n\n----------------\nACM-JUIT";
		$from="acmjuit@juit.acm.org";
		$headers = "From: $from";
		if(strlen($contactno)==10)
		{
		$interest=$_POST['interest'];
		if(@mysql_connect($host,$user_name,$pass)&& mysql_select_db($database_name))
		{
			$query="INSERT INTO `juithost_acm`.`register2016`VALUES(NULL,'$name','$emailid','$contactno','$branch','$year','$interest','$message')";
			mysql_query($query);
			mail($emailid,$subject,$mess,$headers,"-f " . $from);
		}
		}
		else{
			$GLOBALS['regerror'] = "enter a valid Contact Number";
		}
		
	}

?>
<!DOCTYPE html>
<html lang="en">
    

<head>
	
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1.0, user-scalable=0, width=device-width, minimal-ui=1">

        <meta name="description" content="acm-JUIT | Communitate Valemus">
        
        <meta name="author" content="Pranav Jain, Atishay Arvind, Jatin Dx, Himanshu Bansal">

        <!-- For iPad with high-resolution Retina display running iOS ≥ 7: -->
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="ico/favicons.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/favicons.png">
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="ico/favicons.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/favicons.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/favicons.png">
        <link rel="apple-touch-icon-precomposed" href="ico/favicons.png">
        <link rel="icon" href="ico/favicons.png" sizes="32x32">
        <link rel="icon" href="ico/favicons.png" sizes="16x16">
        <link rel="icon" href="ico/favicons.png" sizes="16x16">
        <meta property="og:title" content="acm-JUIT | Communitate Valemus" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="index.html" />
        <meta property="og:image" content="ico/favicons.png" />
        <meta property="og:site_name" content="acm-JUIT" />

        <title>Register  | acm-JUIT </title>

        <link href="fonts/fonts.minba49.css?ts=1406904178" rel="stylesheet">
        <link href="css/baseba49.css?ts=1406904178" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="js/min/html5shiv.js?ts=1406904178"></script>
        <script src="js/min/respond.min.js?ts=1406904178"></script>
        <![endif]-->
	
    </head>
    <body  >
        <nav id="main-nav" role="navigation">
        <button type="button" class="menu-toggle pull-left">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand logo pull-left" href="../index.html">
            <img src="../img/Logo Blue.png" title="acm-JUIT"/>
        </a>
        <ul class="site-menu list-unstyled pull-right hidden-xs" id="contact" >
             <li><a href="organization/index.html" >Organization</a></li>
             <li><a href="team/index.html" >Team</a></li>
	     <li><a href="events/index.html" >Events</a></li>
             <li><a href="register.php" class="active">Register</a></li>
             <li><a href="blog/">Blog</a></li>
             <li><a href="contact/index.html">Contact</a></li>
        </ul>
</nav>

        <nav id="main-nav-drop">
            <section id="nav-section" class="hidden-lg hidden-md hidden-sm visible-xs">
                <6 class="sr-only">acm-JUIT Mobile Nav</h6>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="site-menu">
                                <li><a href="organization/index.html" >Organization</a></li>
                                <li><a href="team/index.html" >Team</a></li>
	     			<li><a href="events/index.html" >Events</a></li>
             			<li><a href="register.php" class="active">Register</a></li>
             			<li><a href="blog/">Blog</a></li>
             			<li><a href="contact/index.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section id="slogan">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <p class="section-title">acm-JUIT</p>
                            <h5>We foster an environment where the future engineer comes first.</h5>
                        </div>
                    </div>
                </div>
            </section>
            <section id="projects">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <p class="section-title">External Links</p>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5 class="nav-section-header">DIGITAL LIBRARY</h5>
                                    <h5><a href="http://dl.acm.org/">ACM DIGITAL LIBRARY</a></h5>
                                </div>
                                <div class="col-md-3">
                                    <h5 class="nav-section-header">ACM BOOKS</h5>
                                    <h5><a href="http://books.acm.org/">COLLECTION OF ACM E-BOOKS</a></h5>
                                </div>
                                <div class="col-md-3">
                                    <h5 class="nav-section-header">TECH PACK</h5>
                                    <h5><a href="http://books.acm.org/">AN INTEGRATED LEARNING PACKAGE</a></h5>
                                </div>
                                <div class="col-md-3">
                                    <h5 class="nav-section-header">E LEARN MAGAZINE</h5>
                                    <h5><a href="http://books.acm.org/">WHERE THOUGHT AND PRACTICE MEET</a></h5>
                                </div>
                            </div>                </div>
                    </div>
                </div>
            </section>

            <section id="social">
                <h6 class="sr-only">acm-JUIT Social Links</h6>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <p class="section-title">Share The Love</p>
                            <a href="https://www.facebook.com/groups/271614976337713/" class="ss-icon ss-social-regular ss-facebook pull-left" target="_blank" data-target="blank"></a>
                            <a href="https://plus.google.com/104662353881377642557/posts" class="ss-icon ss-social-regular ss-googleplus pull-left" target="_blank" data-target="blank"></a>
                            <a href="https://www.linkedin.com/groups/JUIT-Student-Chapter-ACM-6691739?gid=6691739&trk=vsrp_groups_res_name&trkInfo=VSRPsearchId%3A3544023041407952400000%2CVSRPtargetId%3A6691739%2CVSRPcmpt%3Aprimary" class="ss-icon ss-social-regular ss-linkedin pull-left" target="_blank" data-target="blank"></a>

                        </div>
                    </div>
                </div>
            </section>

        </nav>

        <div id="main-wrap">
            
    <header class="header lrg-header contact" style="background:url('img/reggister.jpg') no-repeat;background-size:cover;background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="slogan-wrap">
                        <h2 class="page-title " style="color:#47A3DA;text-align:center;margin-top:10%">Register</h2>
                       
                    </div>
                </div>
            </div>
        </div>
    </header>
	
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                      
                        <div class="col-md-5 col-md-push-1" >
                           
						   
							   
							   <h5 class="yellow">Registration CLOSED!!! </h5>
                           
                            <!--<form id="contactForm" action="#" method="post">
                            
                                <label for="name" class="sr-only">Name</label>
                                <input type="text" id="name" class="form-control" placeholder="Name" name="name"/>
                                <label for="email" class="sr-only">Branch</label>
                                <input type="text" id="branch" class="form-control" placeholder="Branch" name="branch"/>
								<label for="email" class="sr-only">Year</label>
                                <input type="text" id="year" class="form-control" placeholder="Year" name="year"/>
								<label for="email" class="sr-only">Email</label>
                                <input type="text" id="email" class="form-control" placeholder="Email" name="email"/>
								<label for="email" class="sr-only">Contact No.</label>
                                <input type="text" id="contact" class="form-control" placeholder="Contact No." name="cn"/>
								<label for="interest" class="sr-only">Interest Area</label>
								<p style="color:#000;font-size:18px;margin-bottom:0px;background:#f2f2f2;border:#f2f2f2;margin-bottom: .2em;padding-left: .97em;padding-right: .97em;padding-top:6px;padding-bottom:6px;"><span style="font-size:20px;">Interest Area</span><br/>
                                
								<input type="radio" name="interest" value="web"/><span style="color:#000;">Web</span><br/>
								<input type="radio" name="interest" value="electronics"/><span style="color:#000;">Electronics</span><br/>
								<input type="radio" name="interest" value="programming"/><span style="color:#000;">Programming</span><br/>
								<input type="radio" name="interest" value="design" /><span style="color:#000;">Design</span><br/>
								</p>
                                <label for="message" class="sr-only">Why you want to join?</label>
                                <textarea name="message" id="message" placeholder="Why you want to join?" class="form-control" name="message"></textarea>
                                <div id="response" style="display: none;"></div>
                                <button class="btn">Submit</button>
                            </form>-->
							
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
		
  

   
    <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="../index.html" class="pull-left hidden-xs hidden-sm">
                    <img src="img/acmbiglogo.png" alt="acm-JUIT" width="146" height="62"/>
                </a>
                <a class="ss-icon go-top" href="#">navigateup</a>

                <ul id="site-map" class="pull-left">
                    
                    <li><a href="organization/index.html" >Organization</a></li>
             	    <li><a href="team/index.html" >Team</a></li>
	     	    <li><a href="events/index.html" >Events</a></li>
             	    <li><a href="register.php" class="active">Register</a></li>
             	    <li><a href="blog/">Blog</a></li>
             	    <li><a href="contact/index.html">Contact</a></li>
                </ul>

                <span class="logo-mark yellow hidden-lg hidden-md hidden-sm"></span>
                <p class="copyright pull-right hidden-xs"></p>
            </div>
        </div>
    </div>
</footer>


        </div>

                        <script src="js/min/base.minba49.js?ts=1406904178"></script>
            <!--FOR DEVELOPMENT-->
            <!--<script src="js/min/jquery.min.js?ts=1406904178"></script>-->
            <!--<script src="js/min/jquery.base.min.js?ts=1406904178"></script>-->
            <!--<script src="js/min/bootstrap.min.js?ts=1406904178"></script>-->
            <!--<script src="js/min/modernizr.custom.min.js?ts=1406904178"></script>-->
            <!--<script src="js/min/slick.min.js?ts=1406904178"></script>-->
            <script>(function(e,t,n,r,i,s,o){e["GoogleAnalyticsObject"]=i;e[i]=e[i]||function(){(e[i].q=e[i].q||[]).push(arguments)},e[i].l=1*new Date;s=t.createElement(n),o=t.getElementsByTagName(n)[0];s.async=1;s.src=r;o.parentNode.insertBefore(s,o)})(window,document,"script","../../www.google-analytics.com/analytics.js","ga");ga("create","UA-19231153-1","croscon.com");ga("send","pageview")</script>
        

    <script type="text/javascript">$(window).load(function(){Engine.ui.getDate();Engine.utils.initContactForm();});</script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA142-g1WylWghVUCoPiSZKUH9lgK-9YjI"></script>
    <script>function initialize(){var e=new google.maps.LatLng(40.7453297,-73.9929523);var t={center:e,zoom:16};var n=new google.maps.Map(document.getElementById("map-canvas"),t);var r=new google.maps.Marker({position:new google.maps.LatLng(40.7453297,-73.9929523),icon:"http://www.croscon.com/img/map-marker.svg?ts=1406904178"});r.setMap(n);$("#map").on("shown.bs.modal",function(){google.maps.event.trigger(n,"resize");n.setCenter(r.getPosition())})}google.maps.event.addDomListener(window,"load",initialize)</script>

    </body>
</html>