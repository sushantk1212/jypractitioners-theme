<?php
/**
 * Template part for displaying main content in front-page.php.
 *
 * @package jypractitioners
 */

?>
<?php 

?>
<section class="home-abt">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-12 col-sm-12 col-xl-5 align-self-center">
        <div class="img-section">
           <?php the_post_thumbnail('full');?>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 col-sm-12 col-xl-7 align-self-center">
        <div class="content-section">
          <?php while ( have_posts() ) : the_post();?>
            <?php the_content();?>
          <?php endwhile;?>
       </div>
      </div>
    </div>
  </div>
</section>