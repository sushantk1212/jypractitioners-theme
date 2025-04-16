<?php
/**
 * Template part for displaying page content in page-why-us.php
 *
 * @package jypractitioners
 */

?>
<section class="wu-third">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12 col-xl-6">
        <div class="img-section">
			<?php the_post_thumbnail('full');?>
		</div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 col-xl-6">
		<?php while ( have_posts() ) : the_post();?>
			<?php the_content();?>
		<?php endwhile;?>
      </div>
    </div>
  </div>
</section>