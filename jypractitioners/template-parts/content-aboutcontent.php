<?php
/**
 * Template part for displaying page content in page-about-us.php
 *
 * @package jypractitioners
 */

?>
<section class="about-jyp">
  <div class="container">
    <div class="row">
      <?php if(has_post_thumbnail()): ?>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xl-6 align-self-center">
          <div class="img-section"><?php the_post_thumbnail('full');?></div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xl-6">
          <div class="contain-section">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php the_content();?>
        <?php endwhile;?>
          </div>
        </div>
      <?php else :  ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
          <div class="contain-section">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php the_content();?>
        <?php endwhile;?>
          </div>
        </div>
      <?php endif;?>
    </div> <!-- row ends -->
  </div> <!-- container ends -->
</section>