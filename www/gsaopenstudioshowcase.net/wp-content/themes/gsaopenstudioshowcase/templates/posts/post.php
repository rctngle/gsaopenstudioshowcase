<?php

$post_classes = get_post_class();
$i = ceil(rand(1, 3));

$email = get_field('email');
$email_gsa = get_field('email_gsa');
$website = get_field('website');
$links = get_field('links');

?>

<article>
	

	<div class="info">
		<div class="inner">
			<h2><?php the_title(); ?></h2>
			<h2><?php the_field('title'); ?></h2>
			<div class="about">
				<em><?php the_content(); ?></em>
				<div>
					<?php if ($email): ?>						
						<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a><br/>
					<?php endif; ?>

					<?php if ($email_gsa): ?>						
						<a href="mailto:<?php echo $email_gsa; ?>"><?php echo $email_gsa; ?></a><br/>
					<?php endif; ?>

					<?php if ($website): ?>						
						<a href="<?php echo $website; ?>" target="_blank"><?php echo get_display_website($website); ?></a><br/>
					<?php endif; ?>

					<?php if ($links && is_array($links) && count($links) > 0): ?>						
						<?php foreach($links as $link): ?>
							<a href="<?php echo $link['url']; ?>" target="_blank"><?php echo get_display_website($link['url']); ?></a><br/>
						<?php endforeach; ?>						
					<?php endif; ?>
				</div>
			</div>

			

			
		</div>
	</div>
	<div class="works">
		<?php get_template_part('templates/parts/media'); ?>
	</div>
</article>
