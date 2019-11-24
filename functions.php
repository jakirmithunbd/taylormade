<?php 
//show_admin_bar(false);

require_once get_theme_file_path("/inc/wp-bootstrap-navwalker.php");
require_once get_theme_file_path("/inc/logi-login-page-design.php");

function tay_setup_theme(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-header');
	add_theme_support('custom-logo');
	add_theme_support('html5', array('search-form', 'comment-list', "editor"));
    add_theme_support('woocommerce');

	//load text domain
	load_theme_textdomain('tay', get_template_directory() . '/language');
    add_image_size( 'best_selling_image', '160' , '240', true );

	// Menu Register 
	if(function_exists('register_nav_menus')){
    	register_nav_menus(array(
          'menu-1'	=>	__('Main Menu', 'tay')
		));
	}
}

add_action('after_setup_theme', 'tay_setup_theme');

function tay_setup_assets(){
	wp_enqueue_script('jquery');
	wp_enqueue_script('dashicon');

	//script ===
	wp_enqueue_script('bootstrap', get_theme_file_uri('/assets/js/bootstrap.min.js'), array('jquery'), '0.0.1', true);
    wp_enqueue_script('wow', get_theme_file_uri('/assets/js/wow.min.js'), array('jquery'), '0.0.1', true);
    wp_enqueue_script('slick', get_theme_file_uri('/assets/js/slick.min.js'), array('jquery'), '0.0.1', true);
    wp_enqueue_script('masonry', get_theme_file_uri('/assets/js/masonry.min.js'), array('jquery'), '0.0.1', true);
    wp_enqueue_script('imageload', get_theme_file_uri('/assets/js/imageload.js'), array('jquery'), '0.0.1', true);
    wp_enqueue_script('sidr', get_theme_file_uri('/assets/js/sidr.min.js'), array('jquery'), '0.0.1', true);

    wp_enqueue_script('main_js', get_theme_file_uri('/assets/js/scripts.js'), array('jquery'), time(), true);

  // //localize data 
  $data = array (
    'site_url'   => get_theme_file_uri(),
    'admin_ajax'   => admin_url( 'admin-ajax.php' ),
  );

wp_localize_script('main_js', 'ajax', $data);


	//css ===
	wp_enqueue_style('bootstrap_css', get_theme_file_uri('/assets/css/bootstrap.min.css'));
	wp_enqueue_style('font-awesome', get_theme_file_uri('/assets/css/font-awesome.min.css'));
    wp_enqueue_style('animate', get_theme_file_uri('/assets/css/animate.min.css'));
    wp_enqueue_style('slick', get_theme_file_uri('/assets/css/slick.min.css'));
	wp_enqueue_style('main_style', get_theme_file_uri('/assets/css/main-style.css'), null, time());
	wp_enqueue_style('tay_style', get_stylesheet_uri(), null, time());
}
add_action('wp_enqueue_scripts', 'tay_setup_assets');

/**
 * Dashboard google map api key support.
 */
add_filter('acf/settings/google_api_key', function () {
  	$gmap_api = get_field('google_map_api_key', 'options');
	return $gmap_api;
});

// acf options page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

/*** Reorder dashboard menu */
function reorder_admin_menu( $__return_true ) {
    return array(
         'index.php',                 // Dashboard
         'separator1',                // --Space--
         'acf-options',               // ACF Theme Settings
         'edit.php?post_type=page',   // Pages 
         'edit.php',                  // Posts
         'edit.php?post_type=artist', // artist
         'separator2',                // --Space--
         'gf_edit_forms',             // Gravity Forms
         'upload.php',                // Media
         'themes.php',                // Appearance
         'edit-comments.php',         // Comments 
         'users.php',                 // Users
         'tools.php',                 // Tools
         'options-general.php',       // Settings
         'plugins.php',               // Plugins
   );
}
add_filter( 'custom_menu_order', 'reorder_admin_menu' );
add_filter( 'menu_order', 'reorder_admin_menu' );

/*** Get all page id */
function getPageID() {
  	global $post;
  	$postid = $post->ID;
  	$queried_object = get_queried_object();
  	if(is_home() && get_option('page_for_posts')) {
		$postid = get_option('page_for_posts');
  	}
  	else if (is_front_page()) {
  		$postid = get_option( 'page_on_front' );
  	}
  	else if (is_archive()) {
  		$postid = get_queried_object();
  	}
  	else if ( $queried_object ) {
    	$postid = $queried_object->ID;
   	}

  	return $postid;
}

function my_acf_admin_head() {
    ?>
    <style type="text/css">

    #acf-group_5a2badeb476ba.postbox.acf-postbox .hndle.ui-sortable-handle {
        background-color: #1AB569 !important;
        padding: 35px;
    }

    #acf-group_5a2badeb476ba.postbox.acf-postbox .hndle.ui-sortable-handle span {
        font-size: 2.5rem;
        color: white;
    }

    </style>
    <?php
}

add_action('acf/input/admin_head', 'my_acf_admin_head');

/**
 * Register widget area.
 *
 * 
 */
function tay_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'pet' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'pet' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'tay_widgets_init' );


function add_file_types_to_uploads($file_types){
  $new_filetypes = array();
  $new_filetypes['svg'] = 'image/svg+xml';
  $file_types = array_merge($file_types, $new_filetypes );
  return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

function additional_scripts(){
    ?>
    <script>
        wow = new WOW(
          {
            animateClass: 'animated',
            offset:       100,
            callback:     function(box) {
              console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
          }
        );
        wow.init();
        document.getElementById('moar').onclick = function() {
          var section = document.createElement('section');
          section.className = 'section--purple wow fadeInDown';
          this.parentNode.insertBefore(section, this);
        };
    </script>
    <?php
}
add_action( 'wp_footer', 'additional_scripts', 100 );

add_filter("gform_submit_button", "form_submit_button", 10, 2);
function form_submit_button($button, $form){
    return "<button class='btn' id='gform_submit_button_{$form["1"]}'>{$form['button']['text']}</button>";
}

