<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package jypractitioners
 */

get_header();
?>
<section class="abt-2part">
  <div class="container">
    <div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
			<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'jypractitioners' ); ?></h1>
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'jypractitioners' ); ?></p>
		</div>
    </div>
  </div>
</section>
<?php
get_footer();
