<?
	if ($_SERVER['HTTP_HOST'] != 'crystalmurray.com' && $_SERVER['HTTP_HOST'] != 'crystal.localhost') {
		header('Location: http://crystalmurray.com');
		exit;
	}

	if (strpos($_SERVER['REQUEST_URI'],'Crystal-Murray_Resume')) {
		die('Sorry! the resume export isnt finished yet!');
	}
	date_default_timezone_set('America/Los_Angeles');

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
	
	<meta name="viewport" content="width=700; user-scalable=yes">
	
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
	<script type="application/x-javascript">addEventListener('load', function(event) {setTimeout(scrollTo, 80, 0, 1);}, false);</script>

</head>

<body>

<div class="container">

</div>
<div class="content top">
	<div class="container">
		<div class="crystal"></div>
		<div class="welcome">
			<div class="nav">
				<a href="#bio" class="nav-local">Bio</a>
				<a href="#resume" class="nav-local">Resume</a>
				<a href="#contact" class="nav-local">Contact</a>
				<a href="http://linkedin.com/in/crystalmurray" target="_blank">Linkedin</a>
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
		<a name="bio"><span class="hidden">c</span></a>
		<div class="header">
			<div class="left"><h3>Bio</h3></div>
			<div class="divider"></div>
		</div>
		<div class="content-body">
			<p>
				Hello there! I'm Crystal Murray, Public Relations Specialist currently living in Los Angeles, CA. 
				<br /> <br />
				Before putting myself through college (thank you Ruby's Diner!), I completed two internships in the PR/Marketing field at fast-paced agencies. After graduating with honors, I wanted to gain as much experience as possible, so I stayed with <i>Madeline Zuckerman Public Relations & Marketing, Inc.</i> with diverse clientele and assisted in PR efforts for non-profits, country clubs, events, a veterinary group, and more. Eager to experience both agency life and being part of an in-house team, I joined <i>Atlus U.S.A., Inc. (currently Index Digital Media, Inc.)</i> as PR Specialist and assist in the video game publisher's PR efforts for the award winning ATLUS brand of video games. 
				<br /> <br /> 
				As an active member on Facebook and Twitter, I have an interest in social media marketing and do my best to follow the trends. It's imperative to continue to learn new skills that can be applied to any industry, so I'm currently learning more about HTML and Photoshop. As I continue to develop my professional career, I stay connected with my PR, marketing and press friends. Feel free to get in touch with me! 
			</p>
		</div>
		<a name="resume"><span class="hidden">c</span></a>
		<div class="header">
			<div class="left"><h3>Resume</h3></div>
			<a href="/assets/docs/Resume-Crystal_Murray-2011.05.02.doc">
				<div class="right" style="padding-top: 4px;">Download</div>
				<div class="right" style="padding: 5px 7px 0 0;"><img src="/assets/images/icon-download.png"></div>
			</a>
			<div class="divider"></div>
		</div>
		<div class="content-body">
			<div class="title">Experience</div>
			<div class="divider-title"></div>
			
			<div class="experience">
				<h2>Sr. Public Relations Specialist</h2>
				<h4>PriceGrabber.com</h4>
				<? $start = new DateTime('2011/07/01'); ?>
				<div class="date">July 2011 &mdash; Present (<?=$start->diff(new DateTime)->format('%y years, %m months')?>)</div>
				<p>
					At PriceGrabber I assist the PR team in the development and execution of PR plans to generate corporate media awareness. Check out our website, <a href="http://www.pricegrabber.com" target="_blank">pricegrabber.com</a>, and local deals section, <a href="http://deals.pricegrabber.com" target="_blank">deals.pricegrabber.com</a>. 
					<br /><br />
					Keep up with PriceGrabber on Facebook & Twitter!<br />
					<a href="http://www.facebook.com/PriceGrabber" target="_blank">facebook.com/PriceGrabber</a><br />
					<a href="http://www.twitter.com/PriceGrabber" target="_blank">twitter.com/PriceGrabber</a>
					
				</p>

			</div>
			
			<div class="experience">
				<h2>Public Relations Specialist</h2>
				<h4>Index Digital Media, Inc., Irvine, CA (Formerly Atlus U.S.A., Inc.)</h4>
				<? $start = new DateTime('2009/01/01'); ?>
				<div class="date">January 2009 &mdash; July 2011</div>
				<p>
					As a part of the Marketing and Public Relations team, I assist in all PR efforts for the video game publisher's games.
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
				<h4>Madeline Zuckerman Public Relations & Marketing, Inc.</h4>
				<div class="date">February 2008 &mdash; October 2008 (9 months)</div>
				<ul>
					<li>Assisted in the drafting and development of press releases, media alerts, calendar listings, photo captions, and media pitches and helped to distribute them to local, regional and national media including online, print, TV and radio</li>
					<li>Conducted follow up to secure stories</li>
					<li>Secured significant pre and post-event coverage of events and client news</li>
					<li>Attended and assisted in coordinating PR for gala’s, grand openings, and other special events</li>
					<li>Conducted research on media opportunities and speaking engagements for clients</li>
					<li>Maintained contact with clients via email and conference calls to secure details and approvals</li>
					<li>Built positive relationships with media</li>
					<li>Calculated and reported advertising value of media coverage</li>
					<li>Maintained media lists and portfolios</li>
				</ul>
				<br />
				<p>
					Agency clients: Aliso Viejo Country Club, Bremer Whyte Brown & O'Meara LLP, Girls Incorporated of Orange County, Mission Hills Country Club, Mission San Juan Capistrano, Pacific Symphony Orchestra, Paul Merage's Invest In Children Fund, Philharmonic Society of Orange County, and Veterinary Cancer Group.
				</p>
			</div>

			<div class="experience no-break">
				<h2>Intern</h2>
				<h4>Gonzo Communications</h4>
				<div class="date">September 2007 &mdash; December 2007 (4 months)</div>
				<ul>
					<li>Attended and assisted with a launch event for a client in New York</li>
					<li>Drafted press releases, media alerts and fact sheets</li>
					<li>Compiled press kits</li>
					<li>Updated media contacts</li>
					<li>Reported media clips</li>
				</ul>
				<br />
				<p>
					Agency clients: D3Publisher, Sports Gift, and Tomy.
				</p>
			</div>
			
			<div class="title">Programs, Services and Additional Skills</div>
			<div class="divider-title"></div>
			<div class="experience no-break">
				<p>
					ACT! Database, Photoshop, Constant Contact, Cision Media Source, PR Newswire, Virtual Press Office, Wildfire (for Facebook promotions), HTML, FBML
				</p>
			</div>
			
			<div class="title">Education</div>
			<div class="divider-title"></div>
			<div class="experience no-break">
				<p>
					<b>California State University, Fullerton</b>  Bachelor of Arts Degree in Communications, Public Relations
					<b>Honors & Affiliations</b>:  Public Relations Student Society of America (PRSSA), National Honors Society
				</p>
			</div>

		</div>
		<a name="contact"><span class="hidden">c</span></a>
		<div class="header">
			<div class="left"><h3>Contact</h3></div>
			<div class="divider"></div>
		</div>
		<div class="content-body">
			<form method="post" onsubmit="">
			<table cellpadding="0" cellspacing="0" class="contact-list">
				<tr>
					<th>Email</th>
					<td id="contact-email"></td>
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