<?php

$post_classes = get_post_class();
$post_classes[]= 'preview';

$i = ceil(rand(1, 3));

?>

<article>
	<div class="work">
		
		<a href="<?php the_permalink();?>">
			<?php if(has_post_thumbnail()):?>
				<?php the_post_thumbnail('large');?>

			<?php else:?>
				<img src="<?php bloginfo('template_directory');?>/media/no-image.png">				
			<?php endif;?>
		</a>
	</div>
	<div class="info">
		<div class="inner">
			<h5>
				<a href="<?php the_permalink();?>">
					<span style="text-transform: uppercase;"><?php the_title();?></span>
				</a>
			</h5>

			<h2><a href="<?php the_permalink();?>"><?php the_field('title'); ?></a></h2>
			
			<div><?php the_content(); ?></div>
			<div class="more">
				<a href="<?php the_permalink();?>"><img width="26" style="opacity: 0.6" src="<?php bloginfo('template_directory');?>/media/arrow-right.svg"></a>
			</div>
		</div>		
	</div>	
</article>
