<?php
/**
 * KoreaTextile Theme Functions
 */

// Load Custom Walker
require get_template_directory() . '/inc/class-nav-walker.php';

/**
 * Theme Setup
 */
function koreatextile_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption', 'style', 'script' ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'koreatextile' ),
    ) );
}
add_action( 'after_setup_theme', 'koreatextile_setup' );

/**
 * Enqueue Scripts & Styles
 */
function koreatextile_scripts() {
    // Main stylesheet (includes BEM CSS)
    wp_enqueue_style( 'koreatextile-style', get_stylesheet_uri(), array(), '1.0.0' );

    // Google Fonts — ONLY here, NOT in header.php <link>
    wp_enqueue_style(
        'koreatextile-fonts',
        'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Roboto:wght@400;700&display=swap',
        array(),
        null
    );

    // Main JS
    wp_enqueue_script(
        'koreatextile-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        true
    );

    // Slider JS — front page only
    if ( is_front_page() ) {
        wp_enqueue_script(
            'koreatextile-slider',
            get_template_directory_uri() . '/assets/js/slider.js',
            array(),
            '1.0.0',
            true
        );
    }

    // Dequeue CF7 default styles
    wp_dequeue_style( 'contact-form-7' );
    wp_deregister_style( 'contact-form-7' );
}
add_action( 'wp_enqueue_scripts', 'koreatextile_scripts' );

/**
 * Customizer Settings
 */
function koreatextile_customize_register( $wp_customize ) {
    // Section
    $wp_customize->add_section( 'koreatextile_contact', array(
        'title'    => __( 'Contact Information', 'koreatextile' ),
        'priority' => 30,
    ) );

    // Phone
    $wp_customize->add_setting( 'koreatextile_phone', array(
        'default'           => '+82-2-555-1234',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'koreatextile_phone', array(
        'label'   => __( 'Phone Number', 'koreatextile' ),
        'section' => 'koreatextile_contact',
        'type'    => 'text',
    ) );

    // Email
    $wp_customize->add_setting( 'koreatextile_email', array(
        'default'           => 'sales@koreatextile.com',
        'sanitize_callback' => 'sanitize_email',
    ) );
    $wp_customize->add_control( 'koreatextile_email', array(
        'label'   => __( 'Email', 'koreatextile' ),
        'section' => 'koreatextile_contact',
        'type'    => 'email',
    ) );

    // Address
    $wp_customize->add_setting( 'koreatextile_address', array(
        'default'           => '123 Textile Road, Gangnam-gu, Seoul, South Korea',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'koreatextile_address', array(
        'label'   => __( 'Address', 'koreatextile' ),
        'section' => 'koreatextile_contact',
        'type'    => 'text',
    ) );

    // WhatsApp
    $wp_customize->add_setting( 'koreatextile_whatsapp', array(
        'default'           => '821012345678',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'koreatextile_whatsapp', array(
        'label'   => __( 'WhatsApp Number (with country code, no +)', 'koreatextile' ),
        'section' => 'koreatextile_contact',
        'type'    => 'text',
    ) );
}
add_action( 'customize_register', 'koreatextile_customize_register' );

/**
 * WhatsApp Floating Button
 */
function koreatextile_whatsapp_button() {
    $number = get_theme_mod( 'koreatextile_whatsapp', '821012345678' );
    $url = 'https://wa.me/' . esc_attr( $number ) . '?text=' . rawurlencode( "Hello, I'm interested in your products." );
    ?>
    <a href="<?php echo esc_url( $url ); ?>" class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
    </a>
    <?php
}
add_action( 'wp_footer', 'koreatextile_whatsapp_button' );

/**
 * MailHog SMTP Configuration (for Docker dev environment)
 */
function koreatextile_smtp_config( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host     = 'mailhog';
    $phpmailer->Port     = 1025;
    $phpmailer->SMTPAuth = false;
}
add_action( 'phpmailer_init', 'koreatextile_smtp_config' );

/**
 * Helper: get theme image URL
 */
function koreatextile_img( $filename ) {
    return esc_url( get_template_directory_uri() . '/assets/images/' . $filename );
}

/**
 * Helper: get contact info from customizer
 */
function koreatextile_contact( $key ) {
    $defaults = array(
        'phone'    => '+82-2-555-1234',
        'email'    => 'sales@koreatextile.com',
        'address'  => '123 Textile Road, Gangnam-gu, Seoul, South Korea',
        'whatsapp' => '821012345678',
    );
    return esc_html( get_theme_mod( 'koreatextile_' . $key, $defaults[ $key ] ?? '' ) );
}
