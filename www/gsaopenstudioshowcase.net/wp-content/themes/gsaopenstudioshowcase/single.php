<?php get_header(); ?>

<?php previous_post_link('%link', 'Previous'); ?>
<?php next_post_link('%link', 'Next'); ?>

<main>
	<?php get_template_part('loop'); ?>
</main>

<?php get_footer(); ?>