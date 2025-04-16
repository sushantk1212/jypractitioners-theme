<?php
/**
 * Template Name: Experiences Clients page template
 * 
 * The template for displaying experience clients page.
 *
 *
 * @package jypractitioners
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php get_template_part( 'template-parts/content', 'innerbanner' ); ?>
	<?php get_template_part( 'template-parts/content', 'experienceclients' );?>
</main><!-- #main -->

<?php
get_footer();