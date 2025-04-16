<?php
/**
 * Template Name: Services Solutions page template
 * The template for displaying services solutions
 *
 * @package jypractitioners
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php get_template_part( 'template-parts/content', 'innerbanner' ); ?>
	<?php get_template_part( 'template-parts/content', 'servicessolutions' );?>
	</main><!-- #main -->

<?php
get_footer();
