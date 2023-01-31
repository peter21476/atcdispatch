<?php

//Load CSS
function loadCSS() {
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts', 'loadCSS');

//Load Google Fonts
function loadFonts() {
    wp_register_style('fonts', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap', true);
    wp_enqueue_style('fonts');
}
add_action('wp_enqueue_scripts', 'loadFonts');

//Load Fontawesome
function loadFontawesome() {
    wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css', true);
    wp_enqueue_style('fontawesome');
}
add_action('wp_enqueue_scripts', 'loadFontawesome');

//Load Javascript
function loadJS() {
    wp_enqueue_script('bootJS', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', array('jquery'));
    wp_enqueue_script('mainJS', get_template_directory_uri() . '/js/scripts.js');
}
add_action('wp_enqueue_scripts', 'loadJS');

//Enable Menu
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location'
    )
);

//Enable Featured Image
add_theme_support('post-thumbnails');

//Kirki Fields
function atc_theme_kirki_sections($wp_customize) {
    //Add panels
    $wp_customize->add_section('atc_basic_settings', array(
        'title' =>  __('ATC Transport Basic Settings', 'kirki'),
        'priority' => 10,
        'panel' => '',
    ));
    $wp_customize->add_section('atc_header_settings', array(
        'title' =>  __('ATC Header Settings', 'kirki'),
        'priority' => 15,
        'panel' => '',
    ));
    $wp_customize->add_section('atc_footer_settings', array(
        'title' =>  __('ATC Footer Settings', 'kirki'),
        'priority' => 16,
        'panel' => '',
    ));
}
add_action('customize_register', 'atc_theme_kirki_sections');

//Basic Fields in Customizer
function atc_theme_kirki_fields($fields) {
    $fields[] = array(
        'type'          => 'image',
        'settings'      => 'atc_top_logo',
        'label'         => __('Logo for Top', 'kirki'),
        'description'   => __('Pick Your Logo', 'kirki'),
        'section'       => 'atc_basic_settings',
        'priority'      => 10,
        'default'       => ''
    );

    $fields[] = array(
        'type'          => 'color',
        'settings'      => 'atc_background_color',
        'label'         => __('Background Color', 'kirki'),
        'description'   => esc_html__('Pick your background color', 'kirki'),
        'section'       => 'atc_basic_settings',
        'priority'      => 15,
        'default'       =>''
    );

    $fields[] = array(
        'type'          => 'color',
        'settings'      => 'atc_accent_color',
        'label'         => __('Accent Color', 'kirki'),
        'description'   => esc_html__('Pick your accent color', 'kirki'),
        'section'       => 'atc_basic_settings',
        'priority'      => 20,
        'default'       =>''
    );

    $fields[] = array(
        'type'          => 'text',
        'settings'      => 'atc_phone_number',
        'label'         => __('Header Phone Number', 'kirki'),
        'description'   => esc_html__('Type your phone number', 'kirki'),
        'section'       => 'atc_basic_settings',
        'priority'      => 20,
        'default'       =>''
    );

    $fields[] = array(
        'type'          => 'text',
        'settings'      => 'atc_header_title',
        'label'         => __('Header Title', 'kirki'),
        'description'   => esc_html__('Type your header\'s title', 'kirki'),
        'section'       => 'atc_header_settings',
        'priority'      => 10,
        'default'       =>''
    );

    $fields[] = array(
        'type'          => 'textarea',
        'settings'      => 'atc_header_textarea',
        'label'         => __('Header Text', 'kirki'),
        'description'   => esc_html__('Type your header\'s text', 'kirki'),
        'section'       => 'atc_header_settings',
        'priority'      => 15,
        'default'       =>''
    );

    $fields[] = array(
        'type'          => 'text',
        'settings'      => 'atc_header_button_text01',
        'label'         => __('First Button Text', 'kirki'),
        'description'   => esc_html__('Type your button\'s text', 'kirki'),
        'section'       => 'atc_header_settings',
        'priority'      => 20,
        'default'       =>''
    );
    $fields[] = array(
        'type'          => 'text',
        'settings'      => 'atc_header_button_link01',
        'label'         => __('First Button Link', 'kirki'),
        'description'   => esc_html__('Type your button\'s link', 'kirki'),
        'section'       => 'atc_header_settings',
        'priority'      => 25,
        'default'       =>''
    );
    $fields[] = array(
        'type'          => 'text',
        'settings'      => 'atc_header_button_text02',
        'label'         => __('Second Button Text', 'kirki'),
        'description'   => esc_html__('Type your button\'s text', 'kirki'),
        'section'       => 'atc_header_settings',
        'priority'      => 25,
        'default'       =>''
    );
    $fields[] = array(
        'type'          => 'text',
        'settings'      => 'atc_header_button_link02',
        'label'         => __('Second Button Link', 'kirki'),
        'description'   => esc_html__('Type your button\'s link', 'kirki'),
        'section'       => 'atc_header_settings',
        'priority'      => 30,
        'default'       =>''
    );
    $fields[] = array(
        'type'          => 'text',
        'settings'      => 'atc_header_video',
        'label'         => __('Video URL', 'kirki'),
        'description'   => esc_html__('Type your video\'s URL', 'kirki'),
        'section'       => 'atc_header_settings',
        'priority'      => 35,
        'default'       =>''
    );
    $fields[] = array(
        'type'          => 'image',
        'settings'      => 'atc_footer_logo',
        'label'         => __('Logo for Footer', 'kirki'),
        'description'   => __('Pick Your Logo', 'kirki'),
        'section'       => 'atc_footer_settings',
        'priority'      => 10,
        'default'       => ''
    );
    $fields[] = array(
        'type'          => 'textarea',
        'settings'      => 'atc_footer_textarea',
        'label'         => __('Footer Text', 'kirki'),
        'description'   => esc_html__('Type your header\'s text', 'kirki'),
        'section'       => 'atc_footer_settings',
        'priority'      => 15,
        'default'       =>''
    );
    $fields[] = array(
        'type'          => 'text',
        'settings'      => 'atc_address_text',
        'label'         => __('Address', 'kirki'),
        'description'   => esc_html__('Type your address', 'kirki'),
        'section'       => 'atc_footer_settings',
        'priority'      => 20,
        'default'       =>''
    );
    $fields[] = array(
        'type'          => 'text',
        'settings'      => 'atc_phone_text',
        'label'         => __('Phone', 'kirki'),
        'description'   => esc_html__('Type your phone', 'kirki'),
        'section'       => 'atc_footer_settings',
        'priority'      => 25,
        'default'       =>''
    );
    $fields[] = array(
        'type'          => 'text',
        'settings'      => 'atc_email_text',
        'label'         => __('Email', 'kirki'),
        'description'   => esc_html__('Type your email', 'kirki'),
        'section'       => 'atc_footer_settings',
        'priority'      => 30,
        'default'       =>''
    );
  return $fields;
}
add_filter('kirki/fields', 'atc_theme_kirki_fields');