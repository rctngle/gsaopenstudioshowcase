<?php

$classes = get_body_class();

?>

<!DOCTYPE html>
<html>
<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

	<title>GSA Open Studio Showcase</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/build/styles/screen.css?t=<?php echo time(); ?>" />
	<script src="<?php bloginfo('template_directory');?>/build/scripts/scripts.js?t=<?php echo time(); ?>" /></script>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

	<link rel="icon" href="<?php bloginfo('template_directory');?>/favicon.ico">
	
	<?php wp_head(); ?>
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@GSofA">
	<meta name="twitter:creator" content="@GSofA">
	<meta name="twitter:title" content="Phd Showcase">
	<meta name="twitter:description" content="Phd Showcase launches as a digital platform where our students, their families and friends, staff and the GSA’s global creative network of 22,000 alumni, partners, employers and industry as well as the wider public can come together online to begin to look, listen, watch, read, review, engage, follow and connect with our graduating students’ individual Showcases of work, some still in process, some completed, along with critical and community reviews and live events, performances and happenings.">
	<meta name="twitter:image" content="<?php bloginfo('template_directory');?>/GSA-card.jpg">

	<meta property="og:url" content="https://gsaphdshowcase.net" />
	<meta property="og:title" content="Phd Showcase" />
	<meta property="og:description" content="Phd Showcase launches as a digital platform where our students, their families and friends, staff and the GSA’s global creative network of 22,000 alumni, partners, employers and industry as well as the wider public can come together online to begin to look, listen, watch, read, review, engage, follow and connect with our graduating students’ individual Showcases of work, some still in process, some completed, along with critical and community reviews and live events, performances and happenings." />
	<meta property="og:image" content="<?php bloginfo('template_directory');?>/GSA-card.jpg" />
</head>

<body class="<?php echo implode(' ', $classes); ?>">

<header>
	
		

		
	<div class="logo-information-container">
		<div class="desktop"><a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory');?>/media/gsa-logo-black.svg"></a></div>
		<div class="mobile"><a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory');?>/media/GSA-logo-short.svg"></a></div>
	</div>
	<h2>
		<a href="<?php echo site_url(); ?>">Open Studio Showcase</a>
	</h2>


	<div class="introduction">
		<a href="">Intro<span class="desktop">duction</span></a>	
	</div>	
		
	
</header>

<section id="intro">
	<article class="intro">
		<div class="intro-header">
			<div class="desktop"><a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory');?>/media/gsa-logo-black.svg"></a></div>
			<p>Open Studio &mdash; Portfolio Preparation Course,<br/> Creative Practices 2020–2021</p>
		</div>	
		<h2><a href="<?php echo site_url();?>">We Lost You For A Moment There</a></h2>
		<p class="essay">It gives us great pleasure to share the work of this year’s students who have studied with us on our Portfolio Preparation Course – Creative Practices. All have shown a prodigious amount of dedication to their studies during very challenging times and have embraced working online with us, establishing remote working spaces, with continued enthusiasm and commitment. They have all been remarkably abundant in their making and created portfolios of work that are diverse and engrossing; whilst supporting each other in their learning, being extraordinarily good natured and kind throughout.</p>
		<p class="essay"><a href=""><span>Continue Reading</span> &rarr;</a></p>
	</article>
	<nav>
		<?php previous_post_link('%link', 'Previous'); ?>
		<?php next_post_link('%link', 'Next'); ?>
	</nav>
</section>