<?php
/**
 * Template part for displaying our mission and our vision content in page-about-us.php
 *
 * @package jypractitioners
 */

?>
<?php 
  $our_vision_section = get_field('our_vision_section');
  $our_vision_img = $our_vision_section['icon_image'];
  $our_vision_img_src = wp_get_attachment_image_src($our_vision_img, 'full')[0];
  $our_vision_img_alt = get_post_meta($our_vision_img, '_wp_attachment_image_alt', true);
  $our_vision_content = $our_vision_section['main_content'];

  $our_mission_section = get_field('our_mission_section');
  $our_mission_img = $our_mission_section['icon_image'];
  $our_mission_img_src = $our_mission_img['url'];
  $our_mission_img_alt = $our_mission_img['alt'];
  $our_mission_content = $our_mission_section['main_content'];
  //echo '<pre>';print_r($our_vision_section);echo '</pre>';
?>
<section class="abt-3part">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="content-box blue">
          <div class="icon-section"><img src="<?php echo esc_url($our_vision_img_src);?>" alt="<?php echo $our_vision_img_alt;?>"></div>
           <?php echo $our_vision_content;?>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="content-box yellow">
          <div class="icon-section"><img src="<?php echo esc_url($our_mission_img_src);?>" alt="<?php echo $our_mission_img_alt;?>"></div>
          <?php echo $our_mission_content;?>
        </div>
      </div>
    </div>
  </div>
</section>