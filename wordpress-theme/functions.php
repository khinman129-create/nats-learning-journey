<?php
/**
 * Nat's Learning Education WordPress Theme Functions
 * 
 * @package NatsLearning
 * @version 1.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function nats_learning_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style'
    ));
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'nats-learning'),
        'footer'  => __('Footer Menu', 'nats-learning'),
    ));

    // Load text domain for translations
    load_theme_textdomain('nats-learning', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'nats_learning_setup');

/**
 * Enqueue styles and scripts
 */
function nats_learning_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style(
        'nats-learning-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // Enqueue custom JavaScript
    wp_enqueue_script(
        'nats-learning-script',
        get_template_directory_uri() . '/js/theme.js',
        array('jquery'),
        wp_get_theme()->get('Version'),
        true
    );

    // Localize script for AJAX
    wp_localize_script('nats-learning-script', 'nats_learning_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('nats_learning_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'nats_learning_scripts');

/**
 * Add viewport meta tag for responsive design
 */
function nats_learning_viewport_meta() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
}
add_action('wp_head', 'nats_learning_viewport_meta');

/**
 * Custom Customizer Settings
 */
function nats_learning_customize_register($wp_customize) {
    
    // Hero Section
    $wp_customize->add_section('nats_hero_section', array(
        'title'    => __('Hero Section', 'nats-learning'),
        'priority' => 30,
    ));

    // Hero Title
    $wp_customize->add_setting('hero_title', array(
        'default'           => '智叻 360° 全人發展升小面試課程',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_title', array(
        'label'   => __('Hero Title', 'nats-learning'),
        'section' => 'nats_hero_section',
        'type'    => 'text',
    ));

    // Hero Subtitle
    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => '香港頂尖升學專家，助您孩子邁向名校之路',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('hero_subtitle', array(
        'label'   => __('Hero Subtitle', 'nats-learning'),
        'section' => 'nats_hero_section',
        'type'    => 'textarea',
    ));

    // Hero Description
    $wp_customize->add_setting('hero_description', array(
        'default'           => '我們的獨特系統結合學術培訓、個人發展和面試技巧，為您的孩子提供全方位的升學準備。',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('hero_description', array(
        'label'   => __('Hero Description', 'nats-learning'),
        'section' => 'nats_hero_section',
        'type'    => 'textarea',
    ));

    // Contact Information Section
    $wp_customize->add_section('nats_contact_section', array(
        'title'    => __('Contact Information', 'nats-learning'),
        'priority' => 40,
    ));

    // Phone Number
    $wp_customize->add_setting('contact_phone', array(
        'default'           => '+852 2345 6789',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_phone', array(
        'label'   => __('Phone Number', 'nats-learning'),
        'section' => 'nats_contact_section',
        'type'    => 'text',
    ));

    // WhatsApp Number
    $wp_customize->add_setting('contact_whatsapp', array(
        'default'           => '+852 9876 5432',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_whatsapp', array(
        'label'   => __('WhatsApp Number', 'nats-learning'),
        'section' => 'nats_contact_section',
        'type'    => 'text',
    ));

    // Email
    $wp_customize->add_setting('contact_email', array(
        'default'           => 'info@natslearning.hk',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('contact_email', array(
        'label'   => __('Email Address', 'nats-learning'),
        'section' => 'nats_contact_section',
        'type'    => 'email',
    ));

    // Location 1 Address
    $wp_customize->add_setting('location1_address', array(
        'default'           => '葵涌校：大連排道35-41號金基工業大廈',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('location1_address', array(
        'label'   => __('Location 1 Address', 'nats-learning'),
        'section' => 'nats_contact_section',
        'type'    => 'textarea',
    ));

    // Location 2 Address
    $wp_customize->add_setting('location2_address', array(
        'default'           => '灣仔校：駱克道53-55號恒澤商業大廈',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('location2_address', array(
        'label'   => __('Location 2 Address', 'nats-learning'),
        'section' => 'nats_contact_section',
        'type'    => 'textarea',
    ));

    // Social Media Section
    $wp_customize->add_section('nats_social_section', array(
        'title'    => __('Social Media', 'nats-learning'),
        'priority' => 50,
    ));

    // Facebook URL
    $wp_customize->add_setting('social_facebook', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('social_facebook', array(
        'label'   => __('Facebook URL', 'nats-learning'),
        'section' => 'nats_social_section',
        'type'    => 'url',
    ));

    // Instagram URL
    $wp_customize->add_setting('social_instagram', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('social_instagram', array(
        'label'   => __('Instagram URL', 'nats-learning'),
        'section' => 'nats_social_section',
        'type'    => 'url',
    ));
}
add_action('customize_register', 'nats_learning_customize_register');

/**
 * Widget Areas
 */
function nats_learning_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area 1', 'nats-learning'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in the first footer column.', 'nats-learning'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget Area 2', 'nats-learning'),
        'id'            => 'footer-2',
        'description'   => __('Add widgets here to appear in the second footer column.', 'nats-learning'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'nats_learning_widgets_init');

/**
 * Custom excerpt length
 */
function nats_learning_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'nats_learning_excerpt_length', 999);

/**
 * Custom excerpt more text
 */
function nats_learning_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'nats_learning_excerpt_more');

/**
 * Add custom CSS for admin
 */
function nats_learning_admin_styles() {
    echo '<style>
        .customize-control-title {
            font-weight: 600;
            margin-bottom: 5px;
        }
        .customize-control-description {
            font-style: italic;
            margin-bottom: 10px;
        }
    </style>';
}
add_action('customize_controls_print_styles', 'nats_learning_admin_styles');

/**
 * Add SEO meta tags
 */
function nats_learning_seo_meta() {
    if (is_front_page()) {
        echo '<meta name="description" content="智叻教育中心 - 香港頂尖升小面試課程。360°全人發展系統，專業導師團隊，助您孩子邁向名校之路。立即預約免費諮詢。">';
        echo '<meta name="keywords" content="升小面試,小學面試,名校面試,升學課程,教育中心,香港,智叻教育">';
        echo '<meta property="og:title" content="智叻教育中心 - 360°全人發展升小面試課程">';
        echo '<meta property="og:description" content="香港頂尖升學專家，助您孩子邁向名校之路。我們的獨特系統結合學術培訓、個人發展和面試技巧。">';
        echo '<meta property="og:type" content="website">';
        echo '<meta property="og:url" content="' . home_url() . '">';
        echo '<meta name="twitter:card" content="summary_large_image">';
        echo '<meta name="twitter:title" content="智叻教育中心 - 360°全人發展升小面試課程">';
        echo '<meta name="twitter:description" content="香港頂尖升學專家，助您孩子邁向名校之路。">';
    }
}
add_action('wp_head', 'nats_learning_seo_meta');

/**
 * Add structured data for local business
 */
function nats_learning_structured_data() {
    if (is_front_page()) {
        $structured_data = array(
            "@context" => "https://schema.org",
            "@type" => "EducationalOrganization",
            "name" => "智叻教育中心 Nat's Learning Education",
            "description" => "香港頂尖升小面試課程，360°全人發展系統",
            "url" => home_url(),
            "telephone" => get_theme_mod('contact_phone', '+852 2345 6789'),
            "email" => get_theme_mod('contact_email', 'info@natslearning.hk'),
            "address" => array(
                array(
                    "@type" => "PostalAddress",
                    "streetAddress" => "大連排道35-41號金基工業大廈",
                    "addressLocality" => "葵涌",
                    "addressRegion" => "香港"
                ),
                array(
                    "@type" => "PostalAddress",
                    "streetAddress" => "駱克道53-55號恒澤商業大廈",
                    "addressLocality" => "灣仔",
                    "addressRegion" => "香港"
                )
            ),
            "areaServed" => "香港",
            "serviceType" => "升小面試課程"
        );
        
        echo '<script type="application/ld+json">' . json_encode($structured_data) . '</script>';
    }
}
add_action('wp_head', 'nats_learning_structured_data');

/**
 * Add security headers
 */
function nats_learning_security_headers() {
    if (!is_admin()) {
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: SAMEORIGIN');
        header('X-XSS-Protection: 1; mode=block');
    }
}
add_action('send_headers', 'nats_learning_security_headers');

/**
 * Optimize images
 */
function nats_learning_image_optimization() {
    add_filter('wp_get_attachment_image_attributes', function($attr) {
        $attr['loading'] = 'lazy';
        return $attr;
    });
}
add_action('init', 'nats_learning_image_optimization');

/**
 * Clean up WordPress head
 */
function nats_learning_cleanup_head() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
}
add_action('init', 'nats_learning_cleanup_head');

/**
 * Custom body class
 */
function nats_learning_body_class($classes) {
    if (is_front_page()) {
        $classes[] = 'home-page';
    }
    
    if (wp_is_mobile()) {
        $classes[] = 'mobile-device';
    }
    
    return $classes;
}
add_filter('body_class', 'nats_learning_body_class');

/**
 * Contact form handler
 */
function nats_learning_handle_contact_form() {
    if (!wp_verify_nonce($_POST['nonce'], 'nats_learning_nonce')) {
        wp_die('Security check failed');
    }
    
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);
    
    $to = get_theme_mod('contact_email', 'info@natslearning.hk');
    $subject = '網站聯絡表格 - ' . $name;
    $body = "姓名: $name\n電郵: $email\n電話: $phone\n\n訊息:\n$message";
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    if (wp_mail($to, $subject, $body, $headers)) {
        wp_send_json_success('訊息已成功發送！');
    } else {
        wp_send_json_error('發送失敗，請稍後再試。');
    }
}
add_action('wp_ajax_contact_form', 'nats_learning_handle_contact_form');
add_action('wp_ajax_nopriv_contact_form', 'nats_learning_handle_contact_form');

/**
 * Performance optimizations
 */
function nats_learning_performance_optimizations() {
    // Remove query strings from static resources
    function remove_query_strings($src) {
        $parts = explode('?ver', $src);
        return $parts[0];
    }
    add_filter('script_loader_src', 'remove_query_strings', 15, 1);
    add_filter('style_loader_src', 'remove_query_strings', 15, 1);
    
    // Defer non-critical JavaScript
    function defer_scripts($tag, $handle, $src) {
        if (is_admin()) return $tag;
        
        $defer_scripts = array('nats-learning-script');
        
        if (in_array($handle, $defer_scripts)) {
            return '<script src="' . $src . '" defer></script>' . "\n";
        }
        
        return $tag;
    }
    add_filter('script_loader_tag', 'defer_scripts', 10, 3);
}
add_action('init', 'nats_learning_performance_optimizations');

/**
 * Theme customization hooks
 */
function nats_learning_theme_hooks() {
    // Hook for adding custom content to hero section
    do_action('nats_learning_hero_content');
    
    // Hook for adding custom content to footer
    do_action('nats_learning_footer_content');
}

/**
 * Get customizer value with fallback
 */
function nats_get_option($option, $default = '') {
    return get_theme_mod($option, $default);
}

/**
 * Theme activation
 */
function nats_learning_theme_activation() {
    // Set default customizer values
    set_theme_mod('hero_title', '智叻 360° 全人發展升小面試課程');
    set_theme_mod('hero_subtitle', '香港頂尖升學專家，助您孩子邁向名校之路');
    set_theme_mod('contact_phone', '+852 2345 6789');
    set_theme_mod('contact_email', 'info@natslearning.hk');
    
    // Flush rewrite rules
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'nats_learning_theme_activation');
?>