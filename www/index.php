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

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.easing.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.scrollTo.js"></script>
	<script type="text/javascript" src="/assets/js/crystal.js"></script>

</head>

<body>

<div class="container">

</div>
<div class="content top">
	<div class="container">
		<div class="crystal"></div>
		<div class="welcome">
			<div class="nav">
				<a href="#bio">Bio</a>
				<a href="#resume">Resume</a>
				<a href="#portfolio">Portfolio</a>
				<a href="#contact">Contact</a>
				<a href="http://linkedin.com/in/crystalmurray" traget="_blank">Linkedin</a>
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
		<a name="bio"></a>
		<div class="header">
			<div class="left"><h3>Bio</h3></div>
			<div class="divider"></div>
		</div>
		<div class="content-body">
			Graduating with honors and with 4 years of PR experience, Crystal is a fabulous choice for anyone looking for PR.
		</div>
		<a name="resume"></a>
		<div class="header">
			<div class="left"><h3>Resume</h3></div>
			<a href="/assets/docs/Resume-Crystal_Murray-2011.05.02.doc">
				<div class="right" style="padding-top: 4px;">Download</div>
				<div class="right" style="padding: 5px 7px 0 0;"><img src="/assets/images/icon-download.png"></div>
			</a>
			<div class="divider"></div>
		</div>
		<div class="content-body">
			<div class="title">My experience</div>
			<div class="divider-title"></div>
			<div class="experience">
				<h2>Public Relations Specialist</h2>
				<h4>Index Digital Media, Inc., Irvine, CA (Formerly Atlus U.S.A., Inc.)</h4>
				<? $start = new DateTime('2009/01/01'); ?>
				<div class="date">Jan 2009 &mdash; Present (<?=$start->diff(new DateTime)->format('%y years, %m months')?>)</div>
				<p>
					As a part of the Marketing team, and a two-person Public Relations team, I assist in all PR efforts for the video game publisher's games.
					<br />
				</p>
				<ul>
					<li>Assist in writing, editing, and distributing press releases to the gaming press</li>
					<li>Maintain ongoing communication and positive relationships with the press</li>
					<li>Pitch games and follow up with the press to secure coverage</li>
					<li>Schedule, attend, and assist in press meetings at events including E3 Expo and Anime Expo</li>
					<li>Distribute review units and press materials</li>
					<li>Coordinate and secure significant print and online coverage
					<li>Maintain ongoing updates to press list</li>
					<li>Assist in creating and distributing the fan newsletter</li>
					<li>Maintain communication with developers regarding PR needs and updates</li>
					<li>Created and continuously maintain the company Facebook Page and Twitter account</li>
				</ul>
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
		<a name="contact"></a>
		<div class="header">
			<div class="left"><h3>Contact</h3></div>
			<div class="divider"></div>
		</div>
		<div class="content-body">
			<form method="post" onsubmit="">
			<table cellpadding="0" cellspacing="0" class="contact-list">
				<tr>
					<th>Email</th>
					<td>crystal@crystalmurray.com</td>
				</tr>
				<tr>
					<th>Phone</th>
					<td>(949) 328-7111</td>
				</tr>
				<tr>
					<th>Linkedin</th>
					<td><a href="http://linkedin.com/in/crystalmurray" target="_blank">linkedin.com/in/crystalmurray</a></td>
				</tr>
			</table>
			</form>
		</div>
	</div>
</div>

<div class="divider"></div>
<div class="container-footer">
	<div class="container">
		<div class="footer">by <a href="http://devin.la/" target="_blank">devin.la</a></div>
		<div class="divider"></div>
	</div>
</div>
</body>
</html>