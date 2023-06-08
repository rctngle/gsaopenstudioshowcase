<?php

$post_classes = get_post_class();
$post_classes[]= 'preview';
$work_entries = get_field('work', false, false);

$image_urls = [];
foreach($work_entries as $work) {
	if ($work['field_5e830ce20cad9'] == 'image') {
		$image = wp_get_attachment_image_src($work['field_5e830ce20cada'], 'large');
		if (count($image_urls) < 3) {
			$image_urls[] = $image[0];
		}
	}
}

?>

<article>
	<div class="works">
		<?php foreach($image_urls as $image_url): ?>
			<div class="work image">
				<a href="<?php the_permalink(); ?>"><img src="<?php echo $image_url; ?>" /></a>
			</div>
		<?php endforeach; ?>
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
