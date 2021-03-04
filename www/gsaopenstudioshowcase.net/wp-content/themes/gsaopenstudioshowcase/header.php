<?php

$classes = get_body_class();

$student_num = 0;
$num_students = 0;
if (is_singular()) {
	$current_student_id = get_the_ID();
	$index_query = new WP_Query([
		'post_type' => 'post',
		'posts_per_page' => -1,
		'orderby' => 'title',
		'order' => 'asc',
	]);

	$num_students = count($index_query->posts);

	foreach($index_query->posts as $count => $p) {
		if ($current_student_id == $p->ID) {
			$student_num = $count+1;
		}
	}
}

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
	<meta name="twitter:title" content="Open Studio">
	<meta name="twitter:description" content="Open Studio ">
	<meta name="twitter:image" content="<?php bloginfo('template_directory');?>/GSA-card.jpg">

	<meta property="og:url" content="https://gsaopenstudioshowcase.net/" />
	<meta property="og:title" content="Open Studio" />
	<meta property="og:description" content="Open Studio " />
	<meta property="og:image" content="<?php bloginfo('template_directory');?>/GSA-card.jpg" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-YNPQBDWJQ5"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-YNPQBDWJQ5');
	</script>

</head>

<body class="<?php echo implode(' ', $classes); ?>">

<section id="intro">
	<article class="intro">
		<div class="intro-header">
			<div class="desktop"><a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory');?>/media/gsa-logo-black.svg"></a></div>
			<p>Open Studio &mdash; Portfolio Preparation Course,<br/> Creative Practices 2020–2021</p>
		</div>	
		<h2><a href="<?php echo site_url();?>">We Lost You For A Moment There</a></h2>
		<p>It gives us great pleasure to share the work of this year’s students who have studied with us on our Portfolio Preparation Course – Creative Practices. All have shown a prodigious amount of dedication to their studies during very challenging times and have embraced working online with us, establishing remote working spaces, with continued enthusiasm and commitment. They have all been remarkably abundant in their making and created portfolios of work that are diverse and engrossing; whilst supporting each other in their learning, being extraordinarily good natured and kind throughout.</p>

		<p class="extra">Our primary focus is the creation of a unique and distinctive fine art, design or architecture portfolios of work, for both ‘Digital ‘and ‘Full’ Portfolio submissions for Further and Higher Education Courses and other directions. Students studying on the Portfolio Preparation Course work in a Studio Environment this year online, within which every student is supported in developing their creative skills, through the application of a wide-range of imaginative, technical and practical processes. The diverse online studio-based learning and teaching activities, have been and are designed to assist students in simultaneously developing experimental and innovative work as well as acquiring a strong work ethic.</p>

		<p class="extra">This year being online has given the students this opportunity to showcase their work via the GSA Website at the end of their studies, self-selecting and curating their own work and promotional material, providing a professional experience where the emphasis is on learning and thinking through doing, and the site will be available for the public to view for a year.</p>

		<p class="extra">The majority of our students go on to study Undergraduate Degrees, plus some Postgraduate Degrees in either Fine Art, Design or Architecture, at institutions across Scotland, the UK and Europe. Other trajectories include being self-employed, running their own creative businesses and undertaking internships.</p>

		<p class="extra">This year’s students are all currently being invited for interviews and receiving offers, considering other and all their options and we would like to take this opportunity to thank them for choosing to study with us and we wish them all the very best for their futures.</p>

		<div class="extra sign-off">
			<div>
				<img src="<?php bloginfo('template_directory');?>/media/course-leaders.png">
			</div>
			<div>
				<em>Deborah Holland + Joanie Jack <br/>
				Joint Course Leaders</em><br/>
				Portfolio Preparation Course – Creative Practices<br/>
				Open Studio
			</div>
			

			
		</div>
		<p class="essay"><a class="continue-reading" href=""><span>Continue Reading</span> <img style="width: 18px; position: relative; top: 2px" src="<?php bloginfo('template_directory');?>/media/arrow-right.svg"></a></p>
	</article>
	<nav>

		<?php previous_post_link('%link', '<img src="' . get_stylesheet_directory_uri() .'/media/arrow-left.svg' . '"> Previous'); ?>
		<span><?php echo $student_num; ?> / <?php echo $num_students; ?></span>

		<?php next_post_link('%link', 'Next <img src="' . get_stylesheet_directory_uri() .'/media/arrow-right.svg' . '">'); ?>
	</nav>
</section>