<?php
/**
 * Template part for displaying page content in page-our-team.php
 * @package jypractitioners
 */

?>
<?php
// Get all terms from the taxonomy 'partners_leadership_teams'
$partners_leadership_teams = get_terms([
    'taxonomy'   => 'partners_leadership_teams',
    'hide_empty' => false, // Include categories even if they have no posts
]);

if (!empty($partners_leadership_teams) && !is_wp_error($partners_leadership_teams)) {
    $is_text_displayed = false; // Initialize the flag
    foreach ($partners_leadership_teams as $term) {
        // WP_Query arguments
        $args = [
            'post_type' => 'our_team',
            'post_status' => 'publish',
            'tax_query' => [
                [
                    'taxonomy' => 'partners_leadership_teams',
                    'field'    => 'slug',
                    'terms'    => $term->slug,
                ],
            ],
        ];

        // Custom query
        $query = new WP_Query($args);

        // Check if the query has posts
        if ($query->have_posts()) :
            ?>
            <section class="client-3-pane <?php echo $term->slug;?>">
                <div class="container">
                    <div class="row">
                    <?php
                        // Display the header only once
                        if (!$is_text_displayed) {
                            ?>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <h3>PARTNERS LEADERSHIP TEAMS</h3>
                            </div>
                            <?php
                            $is_text_displayed = true; // Update the flag
                        }
                        ?>
                        <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12"><h3>PARTNERS LEADERSHIP TEAMS</h3></div> -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                            <h3><?php echo esc_html($term->name); // Dynamically display category name ?></h3>
                        </div>
                        <?php
                        // Loop through posts
                        while ($query->have_posts()) : $query->the_post();

                            // Fetch custom fields or post data
                            $designation = get_field('designation'); // Designation
                            $image_url = get_field('team_image'); // Team Image
                            ?>
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xl-4">
                                <div class="client-box">
                                    <div class="client-picture-name">
                                        <div class="img-section">
                                            <img src="<?php echo esc_url($image_url['url']); ?>" alt="<?php echo esc_html($image_url['alt']); ?>">
                                        </div>
                                        <div class="name-desg">
                                            <h5><?php the_title();?></h5>
                                            <h6><?php echo $designation; ?></h6>
                                        </div>
                                    </div>

                                    <?php the_content();?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>
            <?php
        endif;

        // Reset post data
        wp_reset_postdata();
    }
}
?>
