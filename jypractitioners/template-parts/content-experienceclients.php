<?php
/**
 * Template part for displaying company logos in page-experience-clients.php
 * @package jypractitioners
 */

?>
<section class="logo-ex-cl">
  <div class="container">
    <div class="row">
      <?php
      $terms_clients_exp = get_terms( array(
        'taxonomy' => 'experience_client_category',
        'hide_empty' => true,
      ) );

      if ( ! empty( $terms_clients_exp ) && ! is_wp_error( $terms_clients_exp ) ) {
        foreach ( $terms_clients_exp as $term ) {
          echo '<div class="title-black-left"><h2>' . esc_html( $term->name ) . '</h2></div>';
          
          $exp_clients_query = new WP_Query( array(
            'post_type'      => 'experience_clients',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
            'tax_query'      => array(
              array(
                'taxonomy' => 'experience_client_category',
                'field'    => 'term_id',
                'terms'    => $term->term_id,
              ),
            ),
          ) );

          if ( $exp_clients_query->have_posts() ) {
            while ( $exp_clients_query->have_posts() ) {
              $exp_clients_query->the_post();
              $logo_url = get_field('expcllogo_image');
              ?>
              <div class="col-lg-3 col-md-12 col-sm-12 col-xl-3 col-6">
                <div class="logo-pane">
                  <img src="<?php echo esc_url( $logo_url['url'] ); ?>" alt="<?php echo $logo_url['alt'];?>">
                </div>
              </div>
              <?php
            }
            wp_reset_postdata();
          }
        }
      }
      ?>
    </div>
  </div>
</section>