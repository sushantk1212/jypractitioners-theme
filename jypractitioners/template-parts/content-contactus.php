<?php
/**
 * Template part for displaying page content in page-contact-us.php
 *
 * @package jypractitioners
 */

?>
<?php 
	$address = get_field('address');
	$contact_details = get_field('contact_details');
	$email_address = get_field('email_address');
?>
<section class="contact-us">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12"></div>
      <div class="col-lg-5 col-md-12 col-sm-12 col-xl-5">
        <div class="address-pane">
        <ul>
        <li>
              <div class="address-points">
                <div class="addres-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class="address-content">
					<?php echo $address;?>
				</div>
              </div>
            </li>
            <li>
              <div class="address-points">
                <div class="addres-icon"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
                <div class="address-content">
					<?php echo $contact_details;?>
				</div>
              </div>
            </li>
            <li>
              <div class="address-points">
                <div class="addres-icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <div class="address-content">
					<?php echo $email_address;?>
				</div>
              </div>
            </li>
        </ul>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 col-sm-12 col-xl-7">
		<div class="form-section">
			<?php the_content();?>
		</div>
      </div>
    </div>
  </div>
</section>