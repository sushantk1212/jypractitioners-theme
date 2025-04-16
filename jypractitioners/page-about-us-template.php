<?php
/**
 * Template Name: About us page template
 * 
 * The template for displaying about us page.
 *
 *
 * @package jypractitioners
 */

get_header();
?>
	<main id="primary" class="site-main">
		<?php get_template_part( 'template-parts/content', 'innerbanner' ); ?>
		<?php get_template_part( 'template-parts/content', 'aboutcontent' );?>
		<?php get_template_part( 'template-parts/content', 'aboutmisvis' );?>
	</main><!-- #main -->

<?php
get_footer();
