<?php
/**
 * Template part for displaying page content in page.php
 * @package jypractitioners
 */

?>
<section class="abt-2part">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <?php while ( have_posts() ) : the_post();?>
          <?php the_content();?>
        <?php endwhile;?>
      </div>
    </div>
  </div>
</section>