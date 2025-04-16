<?php
/**
 * Template part for displaying page content in page-why-us.php
 *
 * @package jypractitioners
 */

?>
<section class="wu-first">
  <div class="container">
    <div class="row">
    <h3><?php the_field('below_why_us_section_heading');?></h3>
    <?php
// WP_Query arguments
$args = array(
    'post_type'      => 'whyus_usp',
    'post_status'    => 'publish',
    'posts_per_page' => -1, // Adjust as needed
);

// The Query
$usp_query = new WP_Query($args);

// The Loop
if ($usp_query->have_posts()) :
    while ($usp_query->have_posts()) : $usp_query->the_post();
    $image_usp = get_field('image_usp');
    ?>
        <div class="col-lg-4 col-md-12 col-sm-12 col-xl-4">
            <div class="content-box">
                   <div class="img-section">
                      <img src="<?php echo esc_url($image_usp['url'])?>" alt="<?php echo $image_usp['alt']?>" />        
                    </div>
                <h4><?php the_title(); ?></h4>
                <?php the_content();?>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif;
// Reset Post Data
wp_reset_postdata();
?>
   </div>
  </div>
</section>