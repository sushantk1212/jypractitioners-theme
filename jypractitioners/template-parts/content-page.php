<?php
/**
 * Template part for displaying page content in page.php
 * @package jypractitioners
 */

?>
<section class="abt-2part">
  <div class="container">
    <div class="row">
      <?php while ( have_posts() ) : the_post();?>
        <?php the_content();?>
      <?php endwhile;?>
    </div>
  </div>
</section>