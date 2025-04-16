<?php
/**
 * Template part for displaying banner in front-page.php.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jypractitioners
 */

 $banner_image = get_field('banner_image'); 
 $mobile_banner_image = get_field('mobile_banner_image');
?>
<section class="banner-section">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active"> <img src="<?php echo esc_url($banner_image['url']);?>" alt="<?php echo $banner_image['alt'];?>"> </div>
    </div>
  </div>
 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
</section>

<section class="mob-banner-section">
  <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active"> <img src="<?php echo esc_url($mobile_banner_image['url']);?>" alt="<?php echo $mobile_banner_image['alt'];?>"></div>
    </div>
  </div>
 <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
</section>