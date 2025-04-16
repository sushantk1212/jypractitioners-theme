<?php
/**
 * Template part for displaying page content in page-why-us.php
 *
 * @package jypractitioners
 */

?>
<?php 
    $wnuus_bottom_section = get_field('wnuus_bottom_section');
 
    $first_text = $wnuus_bottom_section['first_text'];
    $first_icon_url = $wnuus_bottom_section['first_icon']['url'];
    $first_icon_alt = $wnuus_bottom_section['first_icon']['alt'];

    $second_text = $wnuus_bottom_section['second_text'];
    $second_image_url = $wnuus_bottom_section['second_image']['url'];
    $second_image_alt = $wnuus_bottom_section['second_image']['alt'];

    $third_text = $wnuus_bottom_section['third_text'];
    $third_image_url = $wnuus_bottom_section['third_image']['url'];
    $third_image_alt = $wnuus_bottom_section['third_image']['alt'];

    $fourth_text = $wnuus_bottom_section['fourth_text'];
    $fourth_image_url = $wnuus_bottom_section['fourth_image']['url'];
    $fourth_image_alt = $wnuus_bottom_section['fourth_image']['alt'];

    $fifth_text = $wnuus_bottom_section['fifth_text'];
    $fifth_image_url = $wnuus_bottom_section['fifth_image']['url'];
    $fifth_image_alt = $wnuus_bottom_section['fifth_image']['alt'];

?>
<section class="wu-second">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-sm-12 col-xl-4">
        <div class="wu-pane">
          <div class="img-section"><img src="<?php echo esc_url($first_icon_url);?>" alt="<?php echo $first_icon_alt;?>"></div>
          <p><?php echo $first_text;?></p>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 col-xl-4">
        <div class="wu-pane">
          <div class="img-section"><img src="<?php echo esc_url($second_image_url);?>" alt="<?php echo $second_image_alt;?>"></div>
          <p><?php echo $second_text;?></p>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 col-xl-4">
        <div class="wu-pane">
          <div class="img-section"><img src="<?php echo esc_url($third_image_url);?>" alt="<?php echo $third_image_alt;?>"></div>
          <p><?php echo $third_text;?></p>
        </div>
      </div>

      <div class="col-lg-8 col-md-12 col-sm-12 col-xl-8 offset-xl-2">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 col-xl-6">
          <div class="wu-pane">
          <div class="img-section"><img src="<?php echo esc_url($fourth_image_url);?>" alt="<?php echo $fourth_image_alt;?>"></div>
          <p><?php echo $fourth_text;?></p>
        </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 col-xl-6">
          <div class="wu-pane">
          <div class="img-section"><img src="<?php echo esc_url($fifth_image_url);?>" alt="<?php echo $fifth_image_alt;?>"></div>
          <p><?php echo $fifth_text;?></p>
        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>