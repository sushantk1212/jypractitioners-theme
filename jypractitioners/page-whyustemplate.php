<?php
/**
 * Template Name: Why Us page template
 * The template for displaying why us page.
 *
 *
 * @package jypractitioners
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php get_template_part( 'template-parts/content', 'innerbanner' ); ?>
	<?php get_template_part( 'template-parts/content', 'whyuscontent' );?>
	<?php get_template_part( 'template-parts/content', 'whyuscontentusp' );?>
	<?php get_template_part( 'template-parts/content', 'whyuscontenbelowusp' );?>

	</main><!-- #main -->
<?php
get_footer();