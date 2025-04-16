<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays home page.
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jypractitioners
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php get_template_part( 'template-parts/homepage/content', 'banner' ); ?>
		<?php get_template_part( 'template-parts/homepage/content', 'main' ); ?>
	</main><!-- #main -->

<?php
get_footer();