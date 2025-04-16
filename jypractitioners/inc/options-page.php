<?php 
/**
 * Options Page
 */

class ThemeOptions {
	private $theme_options_options;

	public function __construct() {
		add_action( 'admin_menu', array( $this, 'theme_options_add_plugin_page' ) );
		add_action( 'admin_init', array( $this, 'theme_options_page_init' ) );
	}

	public function theme_options_add_plugin_page() {
		add_menu_page(
			'Theme Options', // page_title
			'Theme Options', // menu_title
			'manage_options', // capability
			'theme-options', // menu_slug
			array( $this, 'theme_options_create_admin_page' ), // function
			'dashicons-admin-generic', // icon_url
			30 // position
		);
	}

	public function theme_options_create_admin_page() {
		$this->theme_options_options = get_option( 'theme_options_option_name' ); ?>

		<div class="wrap">
			<h2>Theme Options</h2>
			<p></p>
			<?php settings_errors(); ?>

			<form method="post" action="options.php">
				<?php
					settings_fields( 'theme_options_option_group' );
					do_settings_sections( 'theme-options-admin' );
					submit_button();
				?>
			</form>
		</div>
	<?php }

	public function theme_options_page_init() {
		register_setting(
			'theme_options_option_group', // option_group
			'theme_options_option_name', // option_name
			array( $this, 'theme_options_sanitize' ) // sanitize_callback
		);

		add_settings_section(
			'theme_options_setting_section', // id
			'Settings', // title
			array( $this, 'theme_options_section_info' ), // callback
			'theme-options-admin' // page'phone_number
		);

		add_settings_field(
			'phone_number', // id
			'Phone number', // title
			array( $this, 'phone_number_callback' ), // callback
			'theme-options-admin', // page
			'theme_options_setting_section' // section
		);

		add_settings_field(
			'phone_number_2', // id
			'Phone number Two', // title
			array( $this, 'phone_number_callback_2' ), // phone number 2 callback
			'theme-options-admin', // page
			'theme_options_setting_section' // section
		);

		add_settings_field(
			'email_address', // id
			'Email address', // title
			array( $this, 'email_address_callback' ), // callback
			'theme-options-admin', // page
			'theme_options_setting_section' // section
		);

		add_settings_field(
			'email_address_2', // id
			'Email address Two', // title
			array( $this, 'email_address_2_callback' ), // callback
			'theme-options-admin', // page
			'theme_options_setting_section' // section
		);

		add_settings_field(
			'facebook_link', // id
			'Facebook Link', // title
			array( $this, 'facebook_link_callback' ), // callback
			'theme-options-admin', // page
			'theme_options_setting_section' // section
		);

		add_settings_field(
			'youtube_link', // id
			'You Tube Link', // title
			array( $this, 'youtube_link_callback' ), // callback
			'theme-options-admin', // page
			'theme_options_setting_section' // section
		);

		add_settings_field(
			'linkedin_link', // id
			'LinkedIn Link ', // title
			array( $this, 'linkedin_link_callback' ), // callback
			'theme-options-admin', // page
			'theme_options_setting_section' // section
		);

		add_settings_field(
			'instagram_link', // id
			'Instagram Link', // title
			array( $this, 'instagram_link_callback' ), // callback
			'theme-options-admin', // page
			'theme_options_setting_section' // section
		);

	    add_settings_field(
			'copyright_text', // id
			'Copyright text', // title
			array( $this, 'copyright_text_callback' ), // callback
			'theme-options-admin', // page
			'theme_options_setting_section' // section
		);
	}

	public function theme_options_sanitize($input) {
		$sanitary_values = array();
	
		if ( isset( $input['phone_number'] ) ) {
			$sanitary_values['phone_number'] = sanitize_text_field( $input['phone_number'] );
		}

		if ( isset( $input['phone_number_2'] ) ) {
			$sanitary_values['phone_number_2'] = sanitize_text_field( $input['phone_number_2'] );
		}

		if ( isset( $input['email_address'] ) ) {
			$sanitary_values['email_address'] = sanitize_text_field( $input['email_address'] );
		}

		if ( isset( $input['email_address_2'] ) ) {
			$sanitary_values['email_address_2'] = sanitize_text_field( $input['email_address_2'] );
		}

		if ( isset( $input['facebook_link'] ) ) {
			$sanitary_values['facebook_link'] = sanitize_text_field( $input['facebook_link'] );
		}

		if ( isset( $input['youtube_link'] ) ) {
			$sanitary_values['youtube_link'] = sanitize_text_field( $input['youtube_link'] );
		}

		if ( isset( $input['linkedin_link'] ) ) {
			$sanitary_values['linkedin_link'] = sanitize_text_field( $input['linkedin_link'] );
		}

		if ( isset( $input['instagram_link'] ) ) {
			$sanitary_values['instagram_link'] = sanitize_text_field( $input['instagram_link'] );
		}
	  
		if ( isset( $input['copyright_text'] ) ) {
			$sanitary_values['copyright_text'] = esc_textarea( $input['copyright_text'] );
		}

		return $sanitary_values;
	}

	public function theme_options_section_info() {
		
	}


	public function phone_number_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_options_option_name[phone_number]" id="phone_number" value="%s">',
			isset( $this->theme_options_options['phone_number'] ) ? esc_attr( $this->theme_options_options['phone_number']) : ''
		);
	}

	public function phone_number_callback_2() {
		printf(
			'<input class="regular-text" type="text" name="theme_options_option_name[phone_number_2]" id="phone_number_2" value="%s">',
			isset( $this->theme_options_options['phone_number_2'] ) ? esc_attr( $this->theme_options_options['phone_number_2']) : ''
		);
	}

	public function email_address_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_options_option_name[email_address]" id="email_address" value="%s">',
			isset( $this->theme_options_options['email_address'] ) ? esc_attr( $this->theme_options_options['email_address']) : ''
		);
	}

	public function email_address_2_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_options_option_name[email_address_2]" id="email_address_2" value="%s">',
			isset( $this->theme_options_options['email_address_2'] ) ? esc_attr( $this->theme_options_options['email_address_2']) : ''
		);
	}

	public function facebook_link_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_options_option_name[facebook_link]" id="facebook_link" value="%s">',
			isset( $this->theme_options_options['facebook_link'] ) ? esc_attr( $this->theme_options_options['facebook_link']) : ''
		);
	}

	public function youtube_link_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_options_option_name[youtube_link]" id="youtube_link" value="%s">',
			isset( $this->theme_options_options['youtube_link'] ) ? esc_attr( $this->theme_options_options['youtube_link']) : ''
		);
	}

	public function linkedin_link_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_options_option_name[linkedin_link]" id="linkedin_link" value="%s">',
			isset( $this->theme_options_options['linkedin_link'] ) ? esc_attr( $this->theme_options_options['linkedin_link']) : ''
		);
	}

	public function instagram_link_callback() {
		printf(
			'<input class="regular-text" type="text" name="theme_options_option_name[instagram_link]" id="instagram_link" value="%s">',
			isset( $this->theme_options_options['instagram_link'] ) ? esc_attr( $this->theme_options_options['instagram_link']) : ''
		);
	}

	public function copyright_text_callback() {
		printf(
			'<textarea class="large-text" rows="5" name="theme_options_option_name[copyright_text]" id="copyright_text">%s</textarea>',
			isset( $this->theme_options_options['copyright_text'] ) ? esc_attr( $this->theme_options_options['copyright_text']) : ''
		);
	}

}
if ( is_admin() )
	$theme_options = new ThemeOptions();