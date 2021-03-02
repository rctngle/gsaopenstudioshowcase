<?php

$post_classes = get_post_class();
$i = ceil(rand(1, 3));

$email = get_field('email');
$email_gsa = get_field('email_gsa');
$website = get_field('website');
$links = get_field('links');
$works = get_field('work');

?>

<article>
	

	<div class="info">
		<div class="inner">
			<h1><?php the_title(); ?></h1>
			
			<h5>
				<span style="text-transform: uppercase;"><?php the_title();?></span>
			</h5>			

			<h2><?php the_field('title'); ?></h2>
			<div class="summary"><?php the_field('summary'); ?></div>

			<hr>


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
							<a href="<?php echo $link['link']; ?>" target="_blank"><?php echo get_display_website($link['link']); ?></a><br/>
						<?php endforeach; ?>						
					<?php endif; ?>
				</div>
			</div>

			

			
		</div>
	</div>
	<div class="works">
		<?php foreach($works as $work): ?>
			<?php if ($work['media_type'] == 'image'): ?>
				<div class="work image">

					<div>
						<img src="<?php echo $work['media_image']['sizes']['thumbnail']; ?>" />
					</div>

					<?php if ($work['media_image']['title']): ?>
						<div><?php echo $work['media_image']['title']; ?></div>
					<?php endif; ?>

					<?php if ($work['media_image']['caption']): ?>
						<div><?php echo $work['media_image']['caption']; ?></div>
					<?php endif; ?>
					
					<?php if ($work['url']): ?>
						<a href="<?php echo $work['url']; ?>" target="_blank">View</a>
					<?php endif; ?>

				</div>
			<?php elseif ($work['media_type'] == 'embed'): ?>
				<div class="work embed">

					<div>
						<?php echo $work['media_embed']; ?>
					</div>

					<?php if ($work['media_embed_information']['title']): ?>
						<div><?php echo $work['media_embed_information']['title']; ?></div>
					<?php endif; ?>

					<?php if ($work['media_embed_information']['caption']): ?>
						<div><?php echo $work['media_embed_information']['caption']; ?></div>
					<?php endif; ?>
					
					<?php if ($work['url']): ?>
						<a href="<?php echo $work['url']; ?>" target="_blank">View</a>
					<?php endif; ?>

				</div>
			<?php endif; ?>
		<?php endforeach; ?>		
	</div>
</article>
