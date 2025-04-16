<?php
/**
 * Template part for displaying page content in page-services-solutions.php
 * @package jypractitioners
 */

?>
<?php
// Query for Supply Chain Domain Specific Services
$args_supply_chain = array(
    'post_type'      => 'services',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'tax_query'      => array(
        array(
            'taxonomy' => 'service_categories',
            'field'    => 'term_id',
            'terms'    => array(15)
        )
    )
);

$query_supply_chain = new WP_Query($args_supply_chain);

if ($query_supply_chain->have_posts()) : ?>
<section class="service-solution-2">
  <div class="container">
    <div class="row">
      <div class="title-black-center">
        <h2>
          <?php
            $term = get_term_by('term_id', 15, 'service_categories');
            echo esc_html($term->name);
          ?>
        </h2>
      </div>
      <?php while ($query_supply_chain->have_posts()) : $query_supply_chain->the_post(); ?>
        <div class="col-lg-3 col-md-12 col-sm-12 col-xl-3">
          <div class="ss-2-pane">
            <div class="img-section">
              <?php $service_image = get_field('services_image'); ?>
              <?php if ($service_image): ?>
                <img src="<?php echo esc_url($service_image['url']); ?>" alt="<?php echo esc_attr($service_image['alt']); ?>">
              <?php endif; ?>
            </div>
            <h4><?php the_title(); ?></h4>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; wp_reset_postdata(); ?>


<?php
// Fetch all posts from "Generic Services"
$generic_services_query = new WP_Query(array(
    'post_type'      => 'services',
    'posts_per_page' => -1, // Fetch 5 posts for display
    'post_status'    => 'publish',
    'tax_query'      => array(
        array(
            'taxonomy' => 'service_categories',
            'field'    => 'term_id',
            'terms'    => array(14)
        ),
    ),
));
?>

<section class="service-solution-1">
  <div class="container">
    <div class="row">
      <div class="title-wht-center">
        <h2>
        <?php
            $term = get_term_by('term_id', 14 , 'service_categories');
            echo esc_html($term->name);
          ?>
        </h2>
      </div>

      <?php if ($generic_services_query->have_posts()): ?>
        <?php 
        $counter = 0;
        while ($generic_services_query->have_posts()): 
            $generic_services_query->the_post(); 
            $service_image = get_field('services_image'); 
        ?>
        
        <?php if ($counter < 3): ?>
          <div class="col-lg-4 col-md-12 col-sm-12 col-xl-4">
            <div class="ss-1-pane">
              <div class="img-section">
                  <img src="<?php echo esc_url($service_image['url']); ?>" alt="<?php echo esc_attr($service_image['alt']); ?>">
              </div>
              <h3><?php the_title(); ?></h3>
            </div>
          </div>
        <?php endif; ?>
        <?php if ($counter === 3): ?>
          <div class="col-lg-8 col-md-12 col-sm-12 col-xl-8 offset-xl-2">
            <div class="row">
        <?php endif; ?>

        <?php if ($counter >= 3): ?>
          <div class="col-lg-6 col-md-12 col-sm-12 col-xl-6">
            <div class="ss-1-pane">
              <div class="img-section">
                  <img src="<?php echo esc_url($service_image['url']); ?>" alt="<?php echo esc_attr($service_image['alt']); ?>">
              </div>
              <h3><?php the_title(); ?></h3>
            </div>
          </div>
        <?php endif; ?>

        <?php if ($counter === 4): ?>
            </div>
          </div>
        <?php endif; ?>

        <?php $counter++; ?>
        
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
      
    </div>
  </div>
</section>