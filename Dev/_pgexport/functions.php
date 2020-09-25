<?php
if ( ! function_exists( 'marcilio_adv_setup' ) ) :

function marcilio_adv_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'marcilio_adv', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'marcilio_adv' ),
        'social'  => __( 'Social Links Menu', 'marcilio_adv' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // marcilio_adv_setup

add_action( 'after_setup_theme', 'marcilio_adv_setup' );


if ( ! function_exists( 'marcilio_adv_init' ) ) :

function marcilio_adv_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    register_post_type('areas_atuacao', array(
        'labels' => 
            array(
                'name' => __( 'Áreas de Atuação', 'marcilio_adv' ),
                'singular_name' => __( 'Área de Atuação', 'marcilio_adv' )
            ),
        'public' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes' ),
        'show_in_rest' => true,
        'show_in_menu' => true,
        'taxonomies' => array( 'category', 'post_tag' )
    ));

    register_post_type('advogados_associados', array(
        'labels' => 
            array(
                'name' => __( 'Advogados Associados', 'marcilio_adv' ),
                'singular_name' => __( 'Advogados Associado', 'marcilio_adv' )
            ),
        'public' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes' ),
        'show_in_rest' => true,
        'show_in_menu' => true,
        'taxonomies' => array( 'category', 'post_tag' )
    ));

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // marcilio_adv_setup

add_action( 'init', 'marcilio_adv_init' );


if ( ! function_exists( 'marcilio_adv_custom_image_sizes_names' ) ) :

function marcilio_adv_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'marcilio_adv_custom_image_sizes_names' );
endif;// marcilio_adv_custom_image_sizes_names



if ( ! function_exists( 'marcilio_adv_widgets_init' ) ) :

function marcilio_adv_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'marcilio_adv_widgets_init' );
endif;// marcilio_adv_widgets_init



if ( ! function_exists( 'marcilio_adv_customize_register' ) ) :

function marcilio_adv_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'topo', array(
        'title' => __( 'Topo do site', 'marcilio_adv' ),
        'priority' => '1'
    ));

    $wp_customize->add_section( 'area_atuacao', array(
        'title' => __( 'Área de Atuação', 'marcilio_adv' ),
        'priority' => '2'
    ));

    $wp_customize->add_section( 'logo_menu', array(
        'title' => __( 'Logo do Menu', 'marcilio_adv' ),
        'priority' => '0'
    ));

    $wp_customize->add_section( 'rodape', array(
        'title' => __( 'Rodapé', 'marcilio_adv' )
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'topo_bemvindo', array(
        'type' => 'theme_mod',
        'default' => __( 'Welcome', 'marcilio_adv' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'topo_bemvindo', array(
        'label' => __( 'Chamada', 'marcilio_adv' ),
        'type' => 'text',
        'section' => 'topo'
    ));

    $wp_customize->add_setting( 'topo_titulo', array(
        'type' => 'theme_mod',
        'default' => __( 'We Help to Build You the Product', 'marcilio_adv' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'topo_titulo', array(
        'label' => __( 'Título', 'marcilio_adv' ),
        'type' => 'textarea',
        'section' => 'topo'
    ));

    $wp_customize->add_setting( 'topo_subtitulo', array(
        'type' => 'theme_mod',
        'default' => __( 'Business Solution', 'marcilio_adv' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'topo_subtitulo', array(
        'label' => __( 'Subtitulo', 'marcilio_adv' ),
        'type' => 'text',
        'section' => 'topo'
    ));

    $wp_customize->add_setting( 'topo_botao', array(
        'type' => 'theme_mod',
        'default' => __( 'Get in touch', 'marcilio_adv' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'topo_botao', array(
        'label' => __( 'Botão', 'marcilio_adv' ),
        'type' => 'text',
        'section' => 'topo'
    ));

    $wp_customize->add_setting( 'topo_botao_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'topo_botao_link', array(
        'label' => __( 'Link do botão', 'marcilio_adv' ),
        'type' => 'url',
        'section' => 'topo'
    ));

    $wp_customize->add_setting( 'topo_imagem', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'topo_imagem', array(
        'label' => __( 'Imagem de fundo', 'marcilio_adv' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'topo'
    ) ) );

    $wp_customize->add_setting( 'area_atuacao_imagem', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'area_atuacao_imagem', array(
        'label' => __( 'Imagem', 'marcilio_adv' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'area_atuacao'
    ) ) );

    $wp_customize->add_setting( 'area_atuacao_titulo', array(
        'type' => 'theme_mod',
        'default' => __( 'ÁREA DE ATUAÇÃO', 'marcilio_adv' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'area_atuacao_titulo', array(
        'label' => __( 'Título', 'marcilio_adv' ),
        'type' => 'text',
        'section' => 'area_atuacao'
    ));

    $wp_customize->add_setting( 'blog_titulo', array(
        'type' => 'theme_mod',
        'default' => __( 'Blog &amp; Notícias', 'marcilio_adv' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blog_titulo', array(
        'label' => __( 'Título', 'marcilio_adv' ),
        'type' => 'text',
        'section' => 'blog'
    ));

    $wp_customize->add_setting( 'blog_texto', array(
        'type' => 'theme_mod',
        'default' => __( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in', 'marcilio_adv' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blog_texto', array(
        'label' => __( 'Texto', 'marcilio_adv' ),
        'type' => 'textarea',
        'section' => 'blog'
    ));

    $wp_customize->add_setting( 'logo_menu_logo', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'logo_menu_logo', array(
        'label' => __( 'Logo', 'marcilio_adv' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'logo_menu'
    ) ) );

    $wp_customize->add_setting( 'rodape_logo', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'rodape_logo', array(
        'label' => __( 'Logo', 'marcilio_adv' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'rodape'
    ) ) );

    $wp_customize->add_setting( 'rodape_resumo', array(
        'type' => 'theme_mod',
        'default' => __( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'marcilio_adv' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'rodape_resumo', array(
        'label' => __( 'Texto resumido', 'marcilio_adv' ),
        'type' => 'textarea',
        'section' => 'rodape'
    ));

    $wp_customize->add_setting( 'rodape_facebook', array(
        'type' => 'theme_mod',
        'default' => '<span class="icon-facebook"></span>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'rodape_facebook', array(
        'label' => __( 'Facebook', 'marcilio_adv' ),
        'type' => 'text',
        'section' => 'rodape'
    ));

    $wp_customize->add_setting( 'rodape_facebook_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'rodape_facebook_link', array(
        'label' => __( 'Link do Facebook', 'marcilio_adv' ),
        'type' => 'url',
        'section' => 'rodape'
    ));

    $wp_customize->add_setting( 'rodape_instagram', array(
        'type' => 'theme_mod',
        'default' => '<span class="icon-instagram"></span>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'rodape_instagram', array(
        'label' => __( 'Instagram', 'marcilio_adv' ),
        'type' => 'text',
        'section' => 'rodape'
    ));

    $wp_customize->add_setting( 'rodape_instagram_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'rodape_instagram_link', array(
        'label' => __( 'Link do Instagram', 'marcilio_adv' ),
        'type' => 'url',
        'section' => 'rodape'
    ));

    $wp_customize->add_setting( 'rodape_linkedin', array(
        'type' => 'theme_mod',
        'default' => '<span class="icon-linkedin"></span>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'rodape_linkedin', array(
        'label' => __( 'Linkedin', 'marcilio_adv' ),
        'type' => 'text',
        'section' => 'rodape'
    ));

    $wp_customize->add_setting( 'rodape_linkedin_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'rodape_linkedin_link', array(
        'label' => __( 'Link do Linkedin', 'marcilio_adv' ),
        'type' => 'url',
        'section' => 'rodape'
    ));

    $wp_customize->add_setting( 'rodape_youtube', array(
        'type' => 'theme_mod',
        'default' => '<span class="icon-youtube"></span>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'rodape_youtube', array(
        'label' => __( 'Youtube', 'marcilio_adv' ),
        'type' => 'text',
        'section' => 'rodape'
    ));

    $wp_customize->add_setting( 'rodape_youtube_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'rodape_youtube_link', array(
        'label' => __( 'Link do Youtube', 'marcilio_adv' ),
        'type' => 'url',
        'section' => 'rodape'
    ));

    $wp_customize->add_setting( 'rodape_endereco', array(
        'type' => 'theme_mod',
        'default' => __( 'Have a Questions?', 'marcilio_adv' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'rodape_endereco', array(
        'label' => __( 'Endereço', 'marcilio_adv' ),
        'type' => 'text',
        'section' => 'rodape'
    ));

    $wp_customize->add_setting( 'rodape_endereco_icone', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'rodape_endereco_icone', array(
        'label' => __( 'Icone Endereço', 'marcilio_adv' ),
        'type' => 'text',
        'section' => 'rodape'
    ));

    $wp_customize->add_setting( 'rodape_endereco_texto', array(
        'type' => 'theme_mod',
        'default' => __( '203 Fake St. Mountain View, San Francisco, California, USA', 'marcilio_adv' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'rodape_endereco_texto', array(
        'label' => __( 'Texto Endereço', 'marcilio_adv' ),
        'type' => 'textarea',
        'section' => 'rodape'
    ));

    $wp_customize->add_setting( 'rodape_endereco_texto02', array(
        'type' => 'theme_mod',
        'default' => __( '203 Fake St. Mountain View, San Francisco, California, USA', 'marcilio_adv' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'rodape_endereco_texto02', array(
        'label' => __( 'Texto Endereço 02', 'marcilio_adv' ),
        'type' => 'textarea',
        'section' => 'rodape'
    ));

    $wp_customize->add_setting( 'rodape_endereco_texto03', array(
        'type' => 'theme_mod',
        'default' => __( '203 Fake St. Mountain View, San Francisco, California, USA', 'marcilio_adv' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'rodape_endereco_texto03', array(
        'label' => __( 'Texto Endereço 03', 'marcilio_adv' ),
        'type' => 'textarea',
        'section' => 'rodape'
    ));

    $wp_customize->add_setting( 'rodape_direitos', array(
        'type' => 'theme_mod',
        'default' => __( 'Copyright All rights reserved | This template is made with by', 'marcilio_adv' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'rodape_direitos', array(
        'label' => __( 'Direitos de uso', 'marcilio_adv' ),
        'type' => 'textarea',
        'section' => 'rodape'
    ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'marcilio_adv_customize_register' );
endif;// marcilio_adv_customize_register


if ( ! function_exists( 'marcilio_adv_enqueue_scripts' ) ) :
    function marcilio_adv_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', false, null, true);

    wp_deregister_script( 'jquerymigrate' );
    wp_enqueue_script( 'jquerymigrate', get_template_directory_uri() . '/js/jquery-migrate-3.0.1.min.js', false, null, true);

    wp_deregister_script( 'popper' );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.js', false, null, true);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'jqueryeasing' );
    wp_enqueue_script( 'jqueryeasing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', false, null, true);

    wp_deregister_script( 'jquerywaypoints' );
    wp_enqueue_script( 'jquerywaypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', false, null, true);

    wp_deregister_script( 'jquerystellar' );
    wp_enqueue_script( 'jquerystellar', get_template_directory_uri() . '/js/jquery.stellar.min.js', false, null, true);

    wp_deregister_script( 'owlcarousel' );
    wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/js/owl.carousel.min.js', false, null, true);

    wp_deregister_script( 'jquerymagnificpopup' );
    wp_enqueue_script( 'jquerymagnificpopup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', false, null, true);

    wp_deregister_script( 'aos' );
    wp_enqueue_script( 'aos', get_template_directory_uri() . '/js/aos.js', false, null, true);

    wp_deregister_script( 'jqueryanimatenumber' );
    wp_enqueue_script( 'jqueryanimatenumber', get_template_directory_uri() . '/js/jquery.animateNumber.min.js', false, null, true);

    wp_deregister_script( 'jquerymbytplayer' );
    wp_enqueue_script( 'jquerymbytplayer', get_template_directory_uri() . '/js/jquery.mb.YTPlayer.min.js', false, null, true);

    wp_deregister_script( 'scrollax' );
    wp_enqueue_script( 'scrollax', get_template_directory_uri() . '/js/scrollax.min.js', false, null, true);

    wp_deregister_script( 'script' );
    wp_enqueue_script( 'script', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false', false, null, true);

    wp_deregister_script( 'googlemap' );
    wp_enqueue_script( 'googlemap', get_template_directory_uri() . '/js/google-map.js', false, null, true);

    wp_deregister_script( 'main' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900', false, null, 'all');

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'animate' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', false, null, 'all');

    wp_deregister_style( 'owlcarousel' );
    wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/css/owl.carousel.min.css', false, null, 'all');

    wp_deregister_style( 'owlthemedefault' );
    wp_enqueue_style( 'owlthemedefault', get_template_directory_uri() . '/css/owl.theme.default.min.css', false, null, 'all');

    wp_deregister_style( 'magnificpopup' );
    wp_enqueue_style( 'magnificpopup', get_template_directory_uri() . '/css/magnific-popup.css', false, null, 'all');

    wp_deregister_style( 'aos' );
    wp_enqueue_style( 'aos', get_template_directory_uri() . '/css/aos.css', false, null, 'all');

    wp_deregister_style( 'ionicons' );
    wp_enqueue_style( 'ionicons', get_template_directory_uri() . '/css/ionicons.min.css', false, null, 'all');

    wp_deregister_style( 'bootstrapdatepicker' );
    wp_enqueue_style( 'bootstrapdatepicker', get_template_directory_uri() . '/css/bootstrap-datepicker.css', false, null, 'all');

    wp_deregister_style( 'jquerytimepicker' );
    wp_enqueue_style( 'jquerytimepicker', get_template_directory_uri() . '/css/jquery.timepicker.css', false, null, 'all');

    wp_deregister_style( 'flaticon' );
    wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/css/flaticon.css', false, null, 'all');

    wp_deregister_style( 'icomoon' );
    wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/css/icomoon.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', get_template_directory_uri() . '/css/style.css', false, null, 'all');

    wp_deregister_style( 'fontawesome' );
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', false, null, 'all');

    wp_deregister_style( 'style-2' );
    wp_enqueue_style( 'style-2', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'marcilio_adv_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/wp_pg_helpers.php";
require_once "inc/wp_smart_navwalker.php";

    /* Pinegrow generated Include Resources End */
?>