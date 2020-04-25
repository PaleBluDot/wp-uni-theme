<?php get_header();

	while(have_posts()) {
		the_post(); ?>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	<?php } ?>

	<a href="<?php echo home_url(); ?>">Home</a>
	<?php
	get_footer();
?>
