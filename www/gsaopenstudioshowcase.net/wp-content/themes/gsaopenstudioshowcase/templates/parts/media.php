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

				
				<img src="<?php echo $work['media_image']['sizes'][$image_size]; ?>" />
					
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