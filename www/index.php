<?
	if ($_SERVER['HTTP_HOST'] != 'crystalmurray.com' && $_SERVER['HTTP_HOST'] != 'crystal.localhost') {
		header('Location: http://crystalmurray.com');
		exit;
	}

	if (strpos($_SERVER['REQUEST_URI'],'Crystal-Murray_Resume')) {
		die('Sorry! the resume export isnt finished yet!');
	}

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Crystal Murray</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="robots" content="index,follow">
	<meta name="author" content="Devin Smith">
	<meta name="keywords" content="crystal, murray, public, relations, specialist, resume, marketing, atlus, naruto, deamons souls, video, game">
	<meta name="description" content="Public Relations // Social Media // Marketing">
	<meta name="editor" content="Devin Smith">
	
	<meta property="og:title" content="Crystal Murray">
	<meta property="og:type" content="company">
	<meta property="og:url" content="http://crystalmurray.com/">
	<meta property="og:site_name" content="Crystal Murray">
	<meta property="og:image" content="http://crystalmurray.com/assets/images/crystal-murray-share.png">
	<meta property="fb:app_id" content="218098398219031">
	<meta property="og:description" content="Public Relations // Social Media // Marketing">
	
	<link rel="apple-touch-icon-precomposed" href="/assets/images/favicon.png">
	<link rel="shortcut icon" href="/assets/images/favicon.png">
	
	<link rel="stylesheet" type="text/css" href="/assets/css/crystal.css">
</head>

<body>

<div class="container">

</div>
<div class="content top">
	<div class="container">
		<div class="crystal"></div>
		<div class="welcome">
			<div class="nav">
				<a href="/bio">Bio</a>
				<a href="/bio">Resume</a>
				<a href="/bio">Portfolio</a>
				<a href="/bio">Contact</a>
				<a href="/bio">Linkedin</a>
			</div>
			<div class="intro">
				<h1 class="hide"><span>Crystal Murray</span><img src="/assets/images/crystal-murray.png" alt="Crystal Murray"></h1>
				<h2>Public Relations <span class="separate">//</span> Social Media <span class="separate">//</span> Marketing</h2>
			</div>
		</div>
	</div>
</div>
<div class="divider"></div>
<div class="content middle">
	<div class="container">
		<div class="header">
			<div class="left"><h3>Resume</h3></div>
			<a href="/resume">
				<div class="right" style="padding-top: 4px;">Download</div>
				<div class="right" style="padding: 5px 7px 0 0;"><img src="/assets/images/icon-download.png"></div>
			</a>
			<div class="divider"></div>
		</div>
		<div class="content wrap">
			<h1>My experience</h1>
			<div class="experience">
				<h4>Public Relations Specialist</h4>
				<h5>Atlus U.S.A., Inc.</h5>
				Privately Held; Computer Games industry
				<?
					$start = new DateTime('2009/01/01');
				?>
				<h5>January 2009 &mdash; Present (<?=$start->diff(new DateTime)->format('%y years, %m months')?>)</h5>
				<p>
					As a part of the marketing team at Atlus I assist in all PR efforts including writing/editing/distributing press releases, maintaining press lists, and attending/assisting in press meetings at events including E3 Expo and Anime Expo. 
					<br /><br />
					I've had the privilege of assisting in PR efforts for some awesome games including the award-winning Shin Megami Tensei series, Demon's Souls (GameSpot's 2009 Game of the Year), and more.
				</p>
			</div>

			<div class="experience">
				<h2>Account Coordinator</h2>
				<h3>Madeline Zuckerman Public Relations & Marketing, Inc.</h3>
				<h4>Public Relations and Communications industry</h4>
				<h5>February 2008 &mdash; October 2008 (9 months)</h5>
				<p>
					I assisted in the drafting and development of press releases, media alerts, calendar listings, photo captions, media pitches and distributed them to local, regional and national media including online, print, TV and radio; secured significant pre- and post event coverage of events and client news from local media outlets; attended and assisted in coordinating PR for galas, grand openings, and other special events; conducted research on media opportunities and speaking engagements for clients; maintained direct contact with clients via email and conference calls to secure details and approval on all information distributed to the media; tracked clips; maintained media lists and portfolios.
				</p>
			</div>

			<div class="experience">
				<h2>Server; Certified Trainer</h2>
				<h3>Rubys Diner</h3>
				<h4>Restaurants industry</h4>
				<h5>August 2004 &mdash; June 2008 (3 years 11 months)</h5>
				<p>
					I became a server soon after I started at Ruby's Diner and it was a great company to work for while I was going through school and completing my internships.
					<br /><br />
					Try their Pumpkin shake around Thanksgiving time. It's delish!
				</p>
			</div>

			<div class="experience">
				<h2>Intern</h2>
				<h3>Gonzo Communications</h3>
				<h4>Public Relations and Communications industry</h4>
				<h5>September 2007 &mdash; December 2007 (4 months)</h5>
				<p>
					As an intern at Gonzo Communications I assisted in drafting and distributing press releases, media alerts, calendar listings, press lists and press kits for clients in the video game, toy, and non-profit industries. I also had the opportunity to attend and assist in PR for an event for a client in the video game industry.
				</p>
			</div>
		</div>
	</div>
</div>

<div class="divider"></div>
<div class="container-footer">
	<div class="container">
		<div class="octopus"></div>
		<div class="footer">by <a href="http://devin.la/" target="_blank">devin.la</a></div>
		<div class="divider"></div>
	</div>
</div>
</body>
</html>