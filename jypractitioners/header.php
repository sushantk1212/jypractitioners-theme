<?php
/**
 * The header for our theme
 *
 * This is the template that displays header
 * @package jypractitioners
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'jypractitioners' ); ?></a>
	<header class="header">
		<div class="container-fluid">
			<div class="wrapper">
			<div class="header-item-left">
			<?php
				$custom_logo_id = get_theme_mod('custom_logo');
				$image = wp_get_attachment_image_src($custom_logo_id, 'full');

				if ($image) : ?>
					<a href="<?php echo site_url();?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo esc_url($image[0]); ?>" alt="<?php bloginfo('name'); ?>"></a>
				<?php endif; ?>
			</div>
			<!-- Section: Navbar Menu -->
			<div class="header-item-center">
				<div class="overlay"></div>
				<nav class="menu">
				<div class="menu-mobile-header">
					<button type="button" class="menu-mobile-arrow"> <i class="ion ion-ios-arrow-back"></i> </button>
					<div class="menu-mobile-title"></div>
					<button type="button" class="menu-mobile-close"> <i class="fa fa-times" aria-hidden="true"></i> </button>
				</div>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'	 => 'menu-section',
							'container'      => ''
						)
					);
					?>
				</nav>
			</div>
			<div class="header-item-right">
				<button type="button" class="menu-mobile-trigger"> <span></span> <span></span> <span></span> <span></span> </button>
			</div>
			</div>
		</div>
</header> <!-- header ends -->
