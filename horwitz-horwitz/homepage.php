<?php
/*
Template Name: Homepage
*/
?>

<?php get_header();?>

	<section id="main">
		<?php get_template_part( 'partials/section', '1' );?>
		<?php echo do_shortcode('[elementor-template id="328468"]'); ;?>
		<?php get_template_part( 'partials/section', '2' );?>
		<?php get_template_part( 'partials/section', '3' );?>
		<?php get_template_part( 'partials/section', '4' );?>
		<?php /* get_template_part( 'partials/section', '5') */ ;?>
		<?php get_template_part( 'partials/section', '6' );?>
		<?php get_template_part( 'partials/section', '7' );?>
	</section>

<?php get_footer();?>