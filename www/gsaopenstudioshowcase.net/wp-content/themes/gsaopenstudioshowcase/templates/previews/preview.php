<?php

$post_classes = get_post_class();
$post_classes[]= 'preview';
$works = get_field('work');

$i = ceil(rand(1, 3));

?>

<article>
	<div class="works">
		<?php get_template_part('templates/parts/media', null, ['works' => $works, "page" => false, "permalink"=>get_the_permalink()]); ?>		
	</div>
	<div class="info">
		
		<h2>
			<a href="<?php the_permalink();?>">
				<?php the_title();?>
			</a>
		</h2>
		<div class="more">
			<a href="<?php the_permalink();?>"><img width="26" style="opacity: 0.6" src="<?php bloginfo('template_directory');?>/media/arrow-right.svg"></a>
		</div>
		
	</div>	
</article>
