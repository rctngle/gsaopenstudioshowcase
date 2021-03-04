<?php $works = $args['works'];?>
<?php 
	$image_size = 'large';
	$limit = 3;
	if($args['page']){
		$image_size = 'large';
		$limit = 100;
	}

?>
<?php foreach($works as $widx=>$work): ?>
	<?php if($widx < $limit):?>
		<?php if ($work['media_type'] == 'image'): ?>
			<div class="work image">

			
				
				
				
				<?php if($args['page']):?>
					
					<?php if ($work['media_image']['width'] > $work['media_image']['height']) :?>
						<img src="<?php echo $work['media_image']['sizes'][$image_size]; ?>" />
					<?php else: ?>
						<div class="image-container"><div><img src="<?php echo $work['media_image']['sizes'][$image_size]; ?>" /></div></div>
					<?php endif;?>

				<?php else:?>
					<a href="<?php echo $args['permalink'];?>"><img src="<?php echo $work['media_image']['sizes'][$image_size]; ?>" /></a>
				<?php endif;?>

				<div class="caption">
					<?php if($args['page']):?>
						<?php if ($work['media_image']['title']): ?>
							<h4><?php echo $work['media_image']['title']; ?></h4>
						<?php endif; ?>

						<?php if ($work['media_image']['caption']): ?>
							<div><?php echo $work['media_image']['caption']; ?></div>
						<?php endif; ?>
						
						<?php if ($work['url']): ?>
							<a href="<?php echo $work['url']; ?>" target="_blank">View</a>
						<?php endif; ?>
					<?php endif;?>
				</div>
			</div>
		<?php elseif ($work['media_type'] == 'embed'): ?>
			<div class="work embed">

				<div>
					<?php echo $work['media_embed']; ?>
				</div>
				<div class="caption">
					<?php if($args['page']):?>
						<?php if ($work['media_embed_information']['title']): ?>
							<h4><?php echo $work['media_embed_information']['title']; ?></h4>
						<?php endif; ?>

						<?php if ($work['media_embed_information']['caption']): ?>
							<div><?php echo $work['media_embed_information']['caption']; ?></div>
						<?php endif; ?>
						
						<?php if ($work['url']): ?>
							<a href="<?php echo $work['url']; ?>" target="_blank">View</a>
						<?php endif; ?>
					<?php endif;?>
				</div>
			</div>
		<?php endif; ?>
	<?php endif; ?>
<?php endforeach; ?>		