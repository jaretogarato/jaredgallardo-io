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
<!--
2.1 - home
-->
<div id="home" class="layer home-click bg-home">
	<div id="logo-home" class="white">
		<!-- OPTIONAL - you CAN put ANOTHER logo here if you remove the "comment" tags below -->
		<!--
		<div class="pad-bottom-40">
			<img src="images/logo_home.png" alt="" />
		</div>
		-->
		<h1 class="text-color logo-font">JARED<br />GALLARDO</h1>
    <h5 class="tagline">PORTFOLIO: SOFTWARE ENGINEERING FOR WEB</h5>
		<h5 class="tagline">PHOTOGRAPHY AND PHYSICAL ART</h5>
		<h5 class="tagline">ONLINE MARKETING</h5>
		<h5 class="tagline">MUSIC</h5>
	</div>
</div>

<div id="menu" class="layer bg-black">
	<div class="responsive">
		<div id="menu-btn">
			<div class="menu-btn-padding text-color">Menu</div><!-- only visible on smaller screens -->
		</div>
		<div class="header-width-43 the-nav">
			<div class="the-nav-padding">
				<a class="menu">Home</a>
        <a class="menu">Portfolio</a>
        <a class="menu">Photography</a>
				<a class="menu">Marketing</a>
        <a class="menu">Music</a>
				<a class="menu">Contact</a>
			</div>
		</div>
		<div class="header-width-14 the-logo">
			<div id="logo-nav" class="bg-color center"><!-- change "bg-color" in class here to "bg-black" when your logo is added -->
				<!--  logo goes here - change "bg-color" in class above to "bg-black" -->
				<!-- img src="images/logo_nav.png" alt="" / -->
				<img src="images/logo-nav-jgg-02.png" alt="" />
				<!-- your logo goes above here -->
			</div>
		</div>
		<div class="header-width-43 the-picker">
			<!-- color picker -->
		</div>
	</div>
</div>


<div id="portfolio" class="layer bg-color padder-top padder-bottom">
	<div class="responsive">
		<div class="width-10">
			&nbsp;
		</div>
		<div class="width-80">
			<div class="hpad">
				<div class="center-to-left">
					<h1 class="white-alt pad-bottom-20">
						Build. <span class="black">Build.</span> Build.
					</h1>
					<h4 class="black">
						There's no question: choosing to be a software engineer takes a certain kind of gluttony for punishment. But when you're hooked, you're hooked. Nothing quite matches the excitement of seeing an idea developed into a <b>thing</b>, of meeting and overcoming unexpected challenges, of learning something new every day.
					</h4>
          <h5 class="black">
            * Some of these demos are hosted on on-demand dynos and may take up to 15 seconds to first spin up.
          </h5>
				</div>
			</div>
		</div>
		<div class="width-10">
			&nbsp;
		</div>

		<div class="clear promo-icons pad-top-shrink">
			<div class="hpad promo-center">
				<div class="portfolio-card center break-center">
					<a href="https://portal-2018.herokuapp.com" target="_blank">
            <div class="pc-image pc-portal">&nbsp;</div>
          </a>
          <a href="https://portal-2018.herokuapp.com" target="_blank">
    				<h3 class="white-alt pad-top-20">
              Portal
            </h3>
          </a>
          <div class="pc-text">
            <h4>
              Server App: Ruby on Rails<br />
              Client App: React with Redux<br />
            </h4>
            <p>
              An ongoing project under development since 10/17, Portal is a CRM for bootcamps and smaller schools, facilitating grading, attendance, content distribution, and teacher-student interaction.
            </p>
            <p>
              While actively developing this project with DevPoint Labs, I functioned as lead developer among the students. Portal has scaled essentially seamlessly to comprise 18 PostgreSQL tables and over 100 ReactJS components written by over 20 developers.
            </p>
            <p>
              You can log in as an admin with user: "admin@admin.com" and password: "password", or as a student with user: "dj@teacher.com" and password: "password".
            </p>
          </div>
				</div>
				<div class="portfolio-card center break-center">
					<a href="https://frequency-reach-react.herokuapp.com/" target="_blank">
            <div class="pc-image pc-frequency-reach">&nbsp;</div>
          </a>
  				<a href="https://frequency-reach-react.herokuapp.com/" target="_blank">
            <h3 class="white-alt pad-top-20">
              Frequency / Reach Calculator
            </h3>
          </a>
          <div class="pc-text">
            <h4>
              App: React with Redux<br />
              Libraries: ReCharts and React Table<br />
            </h4>
            <p>
              If you roll a ten-sided die once, what are your odds of getting a seven? That's easy: 10%. But what are your odds of getting a seven if you roll the same die ten times, or a thousand times?
            </p>
            <p>
              To answer this question in a meaningful way, you need to expand the question &mdash; for example: "if I roll this die a thousand times, what are the odds of getting zero sevens, one seven, two sevens..." and so on. Enter the binomial distribution.
            </p>
            <p>
              I initially built this tool to help me plan online media buys on smaller sites which lacked sophisticated ad placement tools, allowing advertiser money to be spent more efficiently.
            </p>
          </div>
				</div>
				<div class="portfolio-card center break-center">
					<a href="http://www.jaredgallardo.io/portfolio/parallax-city/" target="_blank">
            <div class="pc-image pc-parallax-city">&nbsp;</div>
          </a>
          <a href="http://www.jaredgallardo.io/portfolio/parallax-city/" target="_blank">
  					<h3 class="white-alt pad-top-20">
              Parallax City
            </h3>
          </a>
          <div class="pc-text">
            <h4>
              App: vanilla Javascript, CSS3<br />
              &nbsp;<br />
            </h4>
            <p>
              This is an experiment in non-intuitive &mdash; or, perhaps, not-immediately-intuitive &mdash; user experience design utilizing two-axis parallax in a space much larger than the viewport. Movement is controlled by mouse position.
            </p>
            <p>
              Think of it as a piece of art, and a proof-of-concept for a "explore to discover" interface. See if you can find the three buildings with which you can interact.
            </p>
            <p>
              <b>* Contains assets which are quite large for web consumption -- please be patient while content loads.</b>
            </p>
          </div>
				</div>
			</div>
		</div>

		<div class="clear promo-icons pad-top-shrink">
			<div class="hpad promo-center">
				<div class="portfolio-card center break-center">
					<a href="portfolio/parahelion" target="_blank">
            <div class="pc-image pc-parahelion">&nbsp;</div>
          </a>
          <a href="portfolio/parahelion" target="_blank">
    				<h3 class="white-alt pad-top-20">
              Parahelion
            </h3>
          </a>
          <div class="pc-text">
            <h4>
              Arduino App: C++<br />
							&nbsp;
            </h4>
            <p>
              A dynamic project for creating unique photographic images using long-exposures, animation, and movement. The camera sensor is the canvas.
            </p>
          </div>
				</div>


			</div>
		</div>

		<div class="clear promo-text center-to-left">
			<div class="hpad">
				<div class="text black pad-top pad-bottom-important">
					<p>Additional portfolio projects will be added periodically.</p>
				</div>
			</div>
		</div>
    <div class="portfolio-card center break-center">
      &nbsp;
    </div>
    <div class="portfolio-card center break-center">
      &nbsp;
    </div>
    <div class="portfolio-card center break-center">
      <button name="contact" class="scroll-button button-text-color">
        Contact
      </button>
    </div>

	</div>
</div>


<div id="photography" class="layer bg-white padder-top padder-bottom">
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
				<h1 class="charcoal">
				  Life <span class="text-color-on-white">is art</span>&mdash;nothing more or less than <span class="text-color-on-white">personal expression.</span> And each of our voices <span class="text-color-on-white">is unique.</span>

				</h1>
				<h3 class="charcoal">
					Humans are fundamentally creative. We are designed to want to express ourselves in our own unique ways.
				</h3>
				<div class="text grey">
					<p>I love writing, producing, and performing music; creating unique images with photography; building things that use hardware and software to interact with people; and designing user experiences in online media that push boundaries and expand our expectations from technology. Here are some of my pictures, several of which feature <a target="_blank" href="http://www.jellyfish12000.com">Jellyfish 12000</a>, a project of major passion in my life.</p>
					<p><a target="_blank" href="http://www.jellyfish12000.com/" style="border:0;"><img style="border:0;" src="images/jellyfish-12000-logo.png" border="0" alt="Jellyfish 12000"></a></p>
					<p>&nbsp;</p>
				</div>
				<button name="marketing" class="scroll-button button-text-color">
					Marketing
				</button>
			</div>
		</div>
		<!-- end sections -->
	</div>
</div>

<div id="marketing" class="layer bg-about padder-top pad-bottom">
	<div class="responsive">
		<!-- left side -->
		<div class="width-50 disappear">
			<img src="images/marketing-image.png">
		</div>
		<!-- right side -->
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
		<!-- end sections -->
	</div>
</div>

<div id="music" class="layer bg-charcoal padder-top padder-bottom">
	<div class="responsive">
		<!-- left side -->
		<div class="width-50">
			<div class="hpad">
				<h1 class="white">
					Music soothes the <span class="text-color">savage beast?</span> Sometimes, perhaps. In my experience it more often <span class="text-color">stirs our souls.</span>
				</h1>
				<h3 class="white">
					I've always been a musician. I can't stay away from it; the universe of endless possibility and exploration entrances me and always calls me back.
				</h3>
				<div class="text grey">
					<p>I have yet to meet a person who doesn't love music, whose heart has not been touched by it. I started taking guitar lessons when I was six years old. Nice job, mom and dad! Between then and now I've been involved in music in a variety of forms: I've graduated from Musicians Institute's guitar program and received a music technology minor from UCSD. I've studied music theory for years, formed and played in several bands, and toured Europe (twice) playing rock shows in smoky bars. I took a year to build a high-end recording studio and teach myself how to engineer, mix, and produce. I've recorded my own album and I'm now working on producing electronic music.</p>
					<p>Check out the links to the right to check out my album Underbelly, from 2002 (complete with a 12-years-untouched awesome website!), and my soon-to-be-released electronic project under the name Aquasquatch.</p>
				</div>
			</div>
		</div>
		<!-- right side -->
		<div class="width-50">
			<div class="hpad">
				<!-- crew member -->
				<div class="crew-holder">
					<div class="crew-main">
						<div class="crew-left">
							<div class="crew-content">
								<h4 class="crew-name text-color">Mumblypeg</h4>
								<div class="crew-title silver">
                  Underbelly
                </div>
								<div class="crew-text metal">
                  A diverse collection of original funk, rock, singer/songwriter, and disco. Contact me to hear a sample or two.
                </div>
							</div>
							<!--
							2.4.1.1 - crew member 1 social networking icons
							-->
							<div class="crew-social">
								<!-- <a href="http://www.__________.com" class="social-crew icon-twitter">&nbsp;</a>
								<a href="http://www.__________.com" class="social-crew icon-linkedin">&nbsp;</a>
								<a href="http://www.__________.com" class="social-crew icon-facebook">&nbsp;</a> -->
							</div>
						</div>
						<div class="crew-right">
							<div class="crew-frame">
								<!--
								2.4.2.1 - crew member 1 photo
								-->
								<!-- <a style="display:block; border:none; outline:none;" target="_blank" href="http://www.mumblypeg.com"> -->
								<div class="crew-photo crew-1 border-bottom-color">
									&nbsp;
								</div>
								<!-- </a> -->
							</div>
						</div>
					</div>
				</div>
				<!-- crew member -->
				<div class="crew-holder">
					<div class="crew-main">
						<div class="crew-left">
							<div class="crew-content">
								<h4 class="crew-name text-color">Aquasquatch</h4>
								<div class="crew-title silver">
                  Electronic Goodness
                </div>
								<div class="crew-text metal">
                  I'm not quite sure what to call the style of music I'm working on now. Maybe electro-disco? Let me know if you'd like a link to a listen.
                </div>
							</div>
							<!--
							2.4.1.2 - crew member 2 social networking icons
							-->
							<!-- <div class="crew-social">
								<a href="http://www.__________.com" class="social-crew icon-twitter">&nbsp;</a>
								<a href="http://www.__________.com" class="social-crew icon-linkedin">&nbsp;</a>
								<a href="http://www.__________.com" class="social-crew icon-facebook">&nbsp;</a>
							</div -->
						</div>
						<div class="crew-right">
							<div class="crew-frame">
								<!--
								2.4.2.2 - crew member 2 photo
								-->
  						  <!-- <a style="display:block; border:none; outline:none;" target="_blank" href="http://www.aquasquatch.com/"> -->
								<div class="crew-photo crew-2 border-bottom-color">
									&nbsp;
								</div>
								<!-- </a> -->
							</div>
						</div>
					</div>
				</div>
				<!-- end of crew members -->
        <button name="contact" class="scroll-button button-text-color">
					Contact
				</button>
			</div>
		</div>
		<!-- end sections -->
	</div>
</div>


<!-- <div id="entrepreneurship" class="layer bg-color padder-top padder-bottom">
	<div class="responsive">

		<div class="width-10">
			&nbsp;
		</div>
		<div class="width-80">
			<div class="hpad">
				<div class="center-to-left">
					<h1 class="white-alt pad-bottom-20">
						Build. <span class="black">Grow.</span> Repeat.
					</h1>
					<h4 class="black">
						There's no question: it takes a certain kind of gluttony for punishment to create startup companies. But when you're hooked, you're hooked. Nothing quite matches the excitement of greeting each day knowing that it will be filled with unexpected challenges and opportunities. And that, sink or swim, you're part of the team with its hands on the helm.
					</h4>
				</div>
			</div>
		</div>
		<div class="width-10">
			&nbsp;
		</div>

		<div class="clear promo-icons pad-top-shrink">
			<div class="hpad promo-center">
				<div class="promo-it-pc-holder center break-center">
						<div class="it-pc">&nbsp;</div>
						<h2 class="white-alt pad-top-20">Yes.</h2>
				</div>
				<div class="promo-it-tablet-holder center break-center">
						<div class="it-tablet">&nbsp;</div>
						<h2 class="white-alt pad-top-20">Yes.</h2>
				</div>
				<div class="promo-it-smartphone-holder center break-center">
						<div class="it-smartphone">&nbsp;</div>
						<h2 class="white-alt pad-top-20">Yes.</h2>
				</div>
			</div>
		</div>

		<div class="clear promo-text center-to-left">
			<div class="hpad">
				<div class="text black pad-top pad-bottom-important">
					<p>A win, a loss, or yet to be determined? I count them all as positives. Even a failure is a chance to learn, and if you can't embrace uncertainty, you're not going to be doing this in the first place. Including two active projects I'm involved in, I've helped build six startups, either as a founder or early team member, since 1999. I've had my wins and losses, and even one that's back in hibernation, waiting for the right time to thaw. At the moment, I'm most excited about <a target="_blank" href="http://www.surpure.com/">SurPure</a>: a company that provides industries with cutting-edge diesel fuel filtration, improving equipment performance and production output, and saving money. And, it's a great thing for the environment, one of my other abiding passions.</p>

					<button name="contact" class="scroll-button button-text-color">
					Contact
				</button>
				</div>
			</div>
		</div>

	</div>
</div> -->
<!--
2.7 - contact - AJAX, jQuery, PHP eMail form
-->
<div id="contact" class="layer bg-contact padder-top">
	<div class="responsive">
		<!-- left side -->
		<div class="width-50">
			<div class="hpad">
				<h1 class="white">
					<span class="text-color">I'd like</span>
					<br />to hear
					<br /><span class="text-color">From you.</span>
				</h1>
				<h3 class="email-subheader white">
					You can contact me using the adjacent form.
				</h3>
				<div class="address text">
					<div class="address-street white float table pad-left border-left-1  pad-right">
						Projects<br />
            <a class="text-color" href="http://www.mumblypegmedia.com/" target="_blank">Mumblypeg Media</a>
						<br /><a class="text-color" href="http://www.jellyfish12000.com/" target="_blank">Jellyfish 12000</a>
					</div>
					<div class="address-email white float table pad-left border-left-1">
					  Social <br />
            <a class="text-color" href="https://www.linkedin.com/in/jaredgallardo" target="_blank">LinkedIn</a>
						<br /><a class="text-color" href="https://www.facebook.com/jaredgallardo" target="_blank">Facebook</a>
					</div>
				</div>
				<h3 class="grey none">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy euismod tincidunt ut laoreet dolore magna nibh.
				</h3>
				<div class="text grey pad-top-20 none">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.
				</div>
			</div>
		</div>
		<!-- right side -->
		<div class="width-50">
			<div class="hpad">
				<div id="email-form" class="clear">
					<div class="email-main">
						<div class="form-holder">
							<h5 class="white contact-label">
								Name <span class="text-color" id="name-error"></span>
							</h5>
							<div class="input-underline border-color">
								<input id="name" class="input-offset" type="text" />
							</div>
							<h5 class="white contact-label">
								eMail <span class="text-color" id="email-error"></span>
							</h5>
							<div class="input-underline border-color">
								<input id="email" class="input-offset" type="text" />
							</div>
							<h5 class="white contact-label">
								Comments <span class="text-color" id="comments-error"></span>
							</h5>
							<div class="textarea-underline border-color">
								<textarea id="comments" class="textarea-offset" cols="" rows=""></textarea>
							</div>
						</div>
						<div class="pad-top-button">
							<button id="send-btn" class="button-color">
								Send
							</button>
						</div>
					</div>
				</div>
				<div id="email-confirmation">
					<h1 class="white">Thank You <br /><span class="text-color">for Your eMail</span></h1>
					<h3 class="email-subheader white">
						We will respond as soon as possible.
					</h3>
					<div class="pad-top-40">
						<button id="return-to-form" class="button-color">
							Return to Contact Form
						</button>
					</div>
				</div>
			</div>
		</div>
		<!-- end sections -->
	</div>
	<div class="pad-bottom-contact"></div>
	<!--
	2.7.1 - social networking icons below contact section
	-->
	<div class="bg-socnet-ghost">
		<div class="footer-socnet center">
			<a href="https://www.facebook.com/jaredgallardo" class="social-footer icon-facebook" target="_blank">&nbsp;</a>
			<a href="https://twitter.com/jaredgallardo" class="social-footer icon-twitter" target="_blank">&nbsp;</a>
			<a href="https://www.linkedin.com/in/jaredgallardo" class="social-footer icon-linkedin" target="_blank">&nbsp;</a>
			<a href="https://plus.google.com/+JaredGallardo" class="social-footer icon-google" target="_blank">&nbsp;</a>
			<a href="https://vimeo.com/user388490" class="social-footer icon-vimeo" target="_blank">&nbsp;</a>
		</div>
	</div>
</div>
<!--
<div id="socnet" class="layer bg-socnet">
	<div class="bg-socnet-ghost">
		<div class="footer-socnet center">
			<a href="" class="social-footer facebook-footer">&nbsp;</a>
			<a href="" class="social-footer twitter-footer">&nbsp;</a>
			<a href="" class="social-footer linkedin-footer">&nbsp;</a>
			<a href="" class="social-footer google-footer">&nbsp;</a>
			<a href="" class="social-footer vimeo-footer">&nbsp;</a>
			<a href="" class="social-footer youtube-footer">&nbsp;</a>
		</div>
	</div>
</div>
-->
<!--
2.8 - footer, footer logo
-->
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
