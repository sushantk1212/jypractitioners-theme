<?php
/**
* Template Name: Our Team page template
 * 
 * The template for displaying our team page.
 *
 *
 * @package jypractitioners
 */

get_header();
?>


	<main id="primary" class="site-main">
	<?php get_template_part( 'template-parts/content', 'innerbanner' ); ?>
	<?php get_template_part( 'template-parts/content', 'maincontent' );?>
	<?php get_template_part( 'template-parts/content', 'ourteam' );?>
	<?php get_template_part( 'template-parts/content', 'ourteampartners' );?>

</main><!-- #main -->

<?php
get_footer();
