<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
include 'generate-xml.php';
//echo date('h:i:s') . "<br>";
//sleep for 5 seconds
//sleep(1);
//start again
//echo date('h:i:s');
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>
		Jared Gallardo
	</title>

	<meta name="Description" content="portfolio" />
	<meta name="Keywords" content="portfolio" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- DISABLE COMPATIBILITY MODE -->
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<!-- CSS -->
	<link href="style.css" type="text/css" media="screen" rel="stylesheet" />
	<link href="responsive.css" type="text/css" media="screen" rel="stylesheet" />
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,100italic' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:100italic,200italic,300italic,400italic,600italic,700italic,800italic,100,200,300,400,600,700,800' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow:400,400italic,700,700italic' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Comfortaa:400,300,700' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Archivo+Black' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css' />

  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

	<!-- Javascript / jQuery -->
	<!-- <script type="text/javascript" src="js/jquery-1.8.3.js"></script> -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<!-- <script type="text/javascript" src="js/jquery.easing.min.js"></script> -->
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/detect_browser.js"></script>
	<script type="text/javascript" src="js/detect_os.js"></script>
	<!-- js/functions.js and js/email.js are loaded at the bottom of this page -->
	<!-- html5.js for IE less than 9 -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- css3-mediaqueries.js for IE less than 9 -->
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
</head>
<!--
2.0 - <body> - website layout
-->
<body>
<!-- not visible while full screen slideshow is active -->
<div id="site">


<div id="photography" class="layer bg-about padder-top padder-bottom">
	<div class="responsive">
		<div class="width-50">
			<div class="hpad">
				<div id="thumbs" class="align-center">
					<!--
						Update gallery thumbnails, captions, photos, and videos in gallery.xml
						The thumbanils are loaded into this div, "thumbs"
					-->
				</div>
			</div>
		</div>
		<!-- right side -->
		<div class="width-50">
			<div class="hpad">
				<h1 class="white">
				  <span class="text-color-on-white">Perihelion &mdash;</span><br />
          Y axis: 144 pixels.<br />X axis: infinite.
				</h1>
				<h3 class="white">
					Put the camera on a tripod, open the shutter for a few seconds or a few minutes, and draw.
				</h3>
				<div class="text white">
					<p>This one-meter strip of 144 RGB LEDs is mounted on a rig I made from <a target="_blank" href="https://www.makerbeam.com/">MakerBeam</a> components, along with a couple of ABS enclosures and a big 5V battery. The LEDs are controlled either by a Raspberry Pi located on one end of the rig, which is running <a target="_blank" href="https://learn.adafruit.com/dotstar-pi-painter/overview">Dotstar Pi Painter</a>, a project published by <a target="_blank" href="https://www.adafruit.com/">Adafruit</a>; or by an Arduino board located at the other end, running procedural code I wrote in C++. Click the thumbnails to the left to see the images.</p>
				</div>
			</div>
		</div>
		<!-- end sections -->
	</div>
</div>

<!-- <div id="marketing" class="layer bg-about padder-top pad-bottom">
	<div class="responsive">

		<div class="width-50 disappear">
			<img src="images/marketing-image.png">
		</div>

		<div class="width-50">
			<div class="hpad">
				<h1 class="white">
					<span class="text-color">Marketing:</span> spooky action at a distance.
				</h1>
				<h3 class="white">
					OK, you got me: that phrase was used by Albert Einstein to describe the concept of quantum entanglement. But it could as well be used to describe marketing&mdash;or, good marketing, at least.
				</h3>
				<div class="text white">
					<p>Every word we hear, every image we see, every event we experience: they all have the power to influence our thoughts, feelings, and actions. Marketing is about using this influence deliberately, with a specific goal in mind. My company, Mumblypeg Media, is a small, interactive agency, providing branding, messaging, design, and development services to organizations in a variety of industries. Though each of my clients has her unique goals and priorities, each also has something in common: objectives that depend on causing a response in people. An action at a distance. Maybe not so spooky after all.</p>
					<p><a target="_blank" href="http://www.mumblypegmedia.com"><img src="images/mumblypeg-media-logo.png" alt="Mumblypeg Media"></a></p>
				</div>
				<button name="music" class="scroll-button button-dark">
					Music
				</button>
			</div>
		</div>
	</div>
</div> -->


<div id="footer" class="layer bg-black">
	<div class="responsive">
		<div class="width-100 center">
			<div id="logo-footer" class="go-to-top">
				<!-- your logo goes here -->
				<!-- img src="images/logo_footer.png" alt="" / -->
				<img src="images/logo-footer-jgg-02.png" alt="" />
				<!-- your logo goes above here -->
			</div>
		</div>
	</div>
</div>
</div><!-- END #SITE -->


<!--
3.0 - overlays (see gallery.xml file) - gallery, gallery captions, gallery buttons, and "Loading" page
-->

<!--
3.1 - "full" is the fullsized gallery - contains slideshow photos and videos
-->
<div id="full"></div>

<!--
3.2 - gallery captions, gallery buttons
-->
<div id="slideshow-header">
	<div id="controls">
		<!-- gallery header -->
		<h1 id="gallery-header" class="white pad"></h1>
		<!-- button: hide slideshow -->
		<div id="hide-slideshow">
			&nbsp;
		</div>
		<!-- button: show/hide slideshow captions -->
		<div id="toggle-captions">
			&nbsp;
		</div>
		<div id="gallery-left">&nbsp;</div>
		<div id="gallery-right">&nbsp;</div>
	</div>
</div>

<!--
3.3 - gallery slideshow captions
-->
<div id="captions" class="bg-white">
	<div class="captions-pad">
		<div class="gallery-caption-content">
			<h1 id="gallery-title" class="charcoal-important">&nbsp;</h1>
			<div id="gallery-description" class="grey">&nbsp;</div>
			<div id="gallery-link">&nbsp;</div>
		</div>
		<div id="hide-captions">&nbsp;</div>
	</div>
</div>

<!--
3.4 - "LOADING" page
-->
<div id="intro" class="center bg-black">
	<div id="loading">
		<div id="logo-loading" class="bg-color center">
			<!-- your logo goes here - change "bg-color" above to "bg-black" -->
			<img src="images/logo-nav-jgg-02.png" alt="" />
			<!-- your logo goes above here -->
		</div>
		<h6 class="loading-text white pad-bottom-20">
			LOADING
		</h6>
	</div>
</div>

<!--
4.0 - <script> - load additional external jquery files
-->
<!-- website jQuery functionality -->
<script type="text/javascript" src="js/functions.js"></script>
<!-- eMail validation -->
<script type="text/javascript" src="js/email.js"></script>
<!--
5.0 </body> - close the body tag
-->
</body>
</html>
