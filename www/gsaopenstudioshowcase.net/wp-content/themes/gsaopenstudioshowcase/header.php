<?php

$classes = get_body_class();

?>

<!DOCTYPE html>
<html>
<head>
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