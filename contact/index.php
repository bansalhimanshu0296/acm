<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=0, width=device-width, minimal-ui=1">

    <meta name="description" content="acm-JUIT | We put the 'engine' in engineer.">
    <meta name="author" content="Jatin Dx">
    <meta name="author" content="Pranav Jain">
    <meta name="author" content="Atishay Arvind">
    <meta name="author" content="Pranav Jain,Atishay Arvind,Jatin Dx">
    <!-- For iPad with high-resolution Retina display running iOS ≥ 7: -->
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../ico/favicons.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../ico/favicons.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="../ico/favicons.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../ico/favicons.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../ico/favicons.png">
    <link rel="apple-touch-icon-precomposed" href="../ico/favicons.png">
    <link rel="icon" href="../ico/favicons.png" sizes="32x32">
    <link rel="icon" href="../ico/favicons.png" sizes="16x16">
    <meta property="og:title" content="acm-JUIT" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="index.html" />
    <meta property="og:image" content="ico/favicons.png" />
    <meta property="og:site_name" content="acm-JUIT" />

    <title>Contact | acm-JUIT</title>

    <link href="../fonts/fonts.minba49.css?ts=1406904178" rel="stylesheet">
    <link href="../css/baseba49.css?ts=1406904178" rel="stylesheet">
 <?php
    if(isset($_POST['name'])&&!empty($_POST['name'])&&isset($_POST['email'])&&!empty($_POST['email']))
	{
		$host='localhost';
		$user_name='juithost';
		$pass='#ripkutta123';
		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message'];
		$database_name='juithost_acm';
		if(@mysql_connect($host,$user_name,$pass)&& mysql_select_db($database_name))
		{
			$query="INSERT INTO `juithost_acm`.`contact`VALUES(NULL,'$name','$email','$message')";
			mysql_query($query);
		}
	}
?>

    <!--[if lt IE 9]>
    <script src="/js/min/html5shiv.js?ts=1406904178"></script>
    <script src="/js/min/respond.min.js?ts=1406904178"></script>
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
            <!--<h3 style="margin:0;color:white;"><span style="border:2px solid white;border-radius:100%;font-size:30px;padding:15px 5px;margin-top:-15px;position:relative;top:-5px;">acm</span>-JUIT</h3>-->
            <img src="../img/acmbiglogo.png" title="acm-JUIT"/>
        </a>
        <ul class="site-menu list-unstyled pull-right hidden-xs" id="contact" >
             <li><a href="../organization/index.html" >Organisation</a></li>
             <li><a href="../team/index.html" >Team</a></li>
			 <li><a href="../events/index.html" >Events</a></li>
			  <!--<li><a href="../register.php" >Register</a></li>-->
             <li><a href="index.html"  class="active" >Contact</a></li>
        </ul>
</nav>

        <nav id="main-nav-drop">
            <section id="nav-section" class="hidden-lg hidden-md hidden-sm visible-xs">
                <h6 class="sr-only">acm-JUIT Mobile Nav</h6>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="site-menu">
                                <li><a href="../organization/index.html">Organisation</a></li>
                                <li><a href="../team/index.html" >Team</a></li>
                                <li><a href="../events/index.html" >Events</a></li>
                                <!--<li><a href="../register.php" >Register</a></li>-->
                                <li><a href="index.php" class="active">Contact</a></li>
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
                                    <h5><a href="http://dl.acm.org/" target="_blank" data-target="blank">ACM DIGITAL LIBRARY</a></h5>
                                </div>
                                <div class="col-md-3">
                                    <h5 class="nav-section-header">ACM BOOKS</h5>
                                    <h5><a href="http://books.acm.org/" target="_blank" data-target="blank">COLLECTION OF ACM E-BOOKS</a></h5>
                                </div>
                                <div class="col-md-3">
                                    <h5 class="nav-section-header">TECH PACK</h5>
                                    <h5><a href="http://techpack.acm.org/" target="_blank" data-target="blank">AN INTEGRATED LEARNING PACKAGE</a></h5>
                                </div>
                                <div class="col-md-3">
                                    <h5 class="nav-section-header">E LEARN MAGAZINE</h5>
                                    <h5><a href="http://elearnmag.acm.org/index.cfm" target="_blank" data-target="blank">WHERE THOUGHT AND PRACTICE MEET</a></h5>
                                </div>
                            </div>
						</div>
                    </div>
                </div>
            </section>

            <section id="social">
                <h6 class="sr-only">acm-JUIT Social Links</h6>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <p class="section-title">Share The Love</p>
                            <a href="https://www.facebook.com/acmwolves" class="ss-icon ss-social-regular ss-facebook pull-left" target="_blank" data-target="blank"></a>
                            <a href="https://plus.google.com/104662353881377642557/posts" class="ss-icon ss-social-regular ss-googleplus pull-left" target="_blank" data-target="blank"></a>
                            <a href="https://www.linkedin.com/groups/JUIT-Student-Chapter-ACM-6691739?gid=6691739&trk=vsrp_groups_res_name&trkInfo=VSRPsearchId%3A3544023041407952400000%2CVSRPtargetId%3A6691739%2CVSRPcmpt%3Aprimary" class="ss-icon ss-social-regular ss-linkedin pull-left" target="_blank" data-target="blank"></a>

                        </div>
                    </div>
                </div>
            </section>
0
        </nav>

        <div id="main-wrap">
            
    <header class="header lrg-header contact">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="slogan-wrap">
                        <h2 class="page-title time-target"></h2>
                        <h2 class="page-title-caption office-status"></h2>
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
                        <div class="col-md-5 col-md-push-1" style="left:5%;padding:0;">
                             
                            <h5 class="copy-title">ACM-JUIT</h5>
                            <address style="color:#000;">
                                Jaypee University of Information Technology<br/>
                                Waknaghat,P.O. Waknaghat<br/>
                                Teh. Kandaghat,Distt. Solan<br/>
								PIN-173 234,Himachal Pradesh<br/>
								India
                            </address>
                            <!--<div class="map-wrap" data-toggle="modal" data-target="#map">
                                <span class="ss-icon ss-expand"></span>
                                <a href="javascript:void(0);">View Map</a>
                                <div class="overlay"></div>
                            </div>-->
                            <h5 class="copy-title">Contact Information</h5>
                            <p style="color:#000;">
                              You can mail us at <a href="mailto:contactus@juit.acm.org">contactus@juit.acm.org</a><br/></p>
							   <p style="color:#000;">
                              For web related queries you can push a mail at <a href="mailto:webmaster@juit.acm.org">webmaster@juit.acm.org</a>
                        </div>
                        <div class="col-md-5 col-md-push-1" style="border-left:1px dotted black;">
                           
							   
							   
							   <h5 class="yellow">Get In Touch</h5>

                            <p style="color:#000;">Enter your details and shoot us a quick note so we can best answer your potential needs.</p>
                            <form id="contactForm" method="post" action="index.php">
                                <label for="name" class="sr-only">Name</label>
                                <input type="text" name ="name" class="form-control" placeholder="Name"/>
                                <label for="email" class="sr-only">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email"/>
                                
                                <label for="message" class="sr-only">Message</label>
                                <textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
                                <div id="response" style="display: none;"></div>
                                <button class="btn" id="contactFormButton" type="button">Submit</button>
                            </form>
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
                    <img src="../img/acmbiglogo.png" alt="acm-JUIT | Communitate Valemus" style="height:60px;"/>
                </a>
                <a class="ss-icon go-top" href="#">navigateup</a>

                <ul id="site-map" class="pull-left">
                    
                    <li><a href="../organization/index.html" >Organisation</a></li>
                    <li><a href="../team/index.html" >Team</a></li>
					<li><a href="../events/index.html" >Events</a></li>
					<!--<li><a href="../register.php" >Register</a></li>-->
                    <li><a href="index.html"  class="active" >Contact</a></li>
                </ul>

                <span class="logo-mark yellow hidden-lg hidden-md hidden-sm"></span>
                <p class="copyright pull-right hidden-xs"></p>
            </div>
        </div>
    </div>
</footer>


        </div>

                        <script src="../js/min/base.minba49.js?ts=1406904178"></script>
            <!--FOR DEVELOPMENT-->
            <!--<script src="/js/min/jquery.min.js?ts=1406904178"></script>-->
            <!--<script src="/js/min/jquery.base.min.js?ts=1406904178"></script>-->
            <!--<script src="/js/min/bootstrap.min.js?ts=1406904178"></script>-->
            <!--<script src="/js/min/modernizr.custom.min.js?ts=1406904178"></script>-->
            <!--<script src="/js/min/slick.min.js?ts=1406904178"></script>-->



    <script type="text/javascript">$(window).load(function(){Engine.ui.getDate();Engine.utils.initContactForm();});</script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA142-g1WylWghVUCoPiSZKUH9lgK-9YjI"></script>
    
    </body>

</html>