<?php
/**
 * The template for displaying the footer
 *
 * @package jypractitioners
 */

?>
<?php 
$theme_options_options = get_option( 'theme_options_option_name' ); // Array of All Options
$phone_number = $theme_options_options['phone_number']; // Phone number
$phone_number_2 = $theme_options_options['phone_number_2']; // Phone number Two
$email_address = sanitize_email($theme_options_options['email_address']); // Email Address
$email_address_2 = sanitize_email($theme_options_options['email_address_2']); // Email Address two
$facebook_link = esc_url($theme_options_options['facebook_link']); // Facebook link
$youtube_link = esc_url($theme_options_options['youtube_link']); // You Tube link
$linkedin_link = esc_url($theme_options_options['linkedin_link']); // linkedin link
$instagram_link = esc_url($theme_options_options['instagram_link']); // Instagram Link
$copyright_text = sanitize_text_field($theme_options_options['copyright_text']); // Copyright text
?>
<section class="footer-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="footer-menu">
        <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'	 => '',
							'container'      => ''
					)
				);
			?>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="contact-details">
        <ul>
        <li><i class="fa fa-envelope email" aria-hidden="true"></i><a href="mailto:<?php echo $email_address;?>" title="<?php echo $email_address;?>"><?php echo $email_address;?></a> / <a href="mailto:<?php echo $email_address_2;?>" title="<?php echo $email_address_2;?>"><?php echo $email_address_2;?></a></li>
        <li><i class="fa fa-whatsapp whatsapp" aria-hidden="true"></i><a href="tel:<?php echo $phone_number;?>" title="<?php echo $phone_number;?>"><?php echo $phone_number;?></a> / <a href="tel:<?php echo $phone_number_2;?>" title="<?php echo $phone_number_2;?>"><?php echo $phone_number_2;?></a></li>
        <li><a href="<?php echo $linkedin_link;?>" target="_blank" title="<?php echo $linkedin_link;?>"><i class="fa fa-linkedin linkedin" aria-hidden="true"></i></a></li>
        <li><a href="<?php echo $facebook_link;?>" target="_blank" title="<?php echo $facebook_link;?>"><i class="fa fa-facebook facebook" aria-hidden="true"></i></a></li>
        <li><a href="<?php echo $youtube_link;?>" target="_blank" title="<?php echo $youtube_link;?>"><i class="fa fa-youtube-play youtube" aria-hidden="true"></i></a></li>
        <li><a href="<?php echo $instagram_link;?>" target="_blank" title="<?php echo $instagram_link;?>"><i class="fa fa-instagram instagram" aria-hidden="true"></i></a></li>
        </ul>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="footer-last">
          <div class="content"><?php echo $copyright_text;?></div>
          <div class="content">Design and developed by <!-- <a href="https://www.dfoxmedia.com/" target="_blank"><img src="images/dfox.png" alt=""></a>--> </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php wp_footer(); ?>

</body>
</html>
