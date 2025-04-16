<?php
/**
 * Template part for displaying Inner page with breadcrumbs.
 *
 * @package jypractitioners
 */

?>
<?php 
	$banner_image = get_field('banner_image');
  if(!empty($banner_image)) : 
?>
<section class="breadcrumb-section-int" style="background:url(<?php echo esc_url($banner_image['url']);?>)">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
      <h1><?php the_title();?></h1>
      <div class="breadcrumb-pane">
		<?php 
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<ul><li>','</li></ul>' );
		  }
		?>
       </div>
      </div>
    </div>
  </div>
</section>
<?php else : ?>
  <div class="container no-top-banner">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12 no-top-indiv">
         <h1><?php the_title();?></h1>
      </div>
    </div>
  </div>
<?php endif;?>