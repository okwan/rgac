<?php
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 250, 250 );
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

/*
  =========================
  BlOG LOOP CUSTOM FUNCTIONS
  =========================
*/
function rgac_posted_meta() {
  $posted_on = human_time_diff( get_the_time('U'),  current_time('timestamp') );
  $categories = get_the_category();
  $separator = ', ';
  $output = '';
  $i = 1;

  if( !empty($categories) ):
    foreach( $categories as $category ):
      if( $i > 1): $output .= $separator; endif;
      $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( 'View all posts in%s', $category->name ) . '">' . esc_html( $category ->name) . '</a>';
      $i++;
    endforeach;
  endif;

  return '<span class="text-right">Posted <a href="'. esc_url( get_permalink() ) .'">' . $posted_on . '</a> ago</span><span class="posted-in">' . the_category(', ') . '</span>';
}

function rgac_posted_footer() {
  return 'tags list and comment link';
}

// remove wp version param from any enqueued scripts
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}

add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);

function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://code.jquery.com/jquery-latest.min.js", false, null);
   wp_enqueue_script('jquery');
}

function rgac_theme_styles() {

  wp_enqueue_style( 'normalize.css', get_template_directory_uri() . '/css/normalize.css' );

  // wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css' );

  wp_enqueue_style( 'lightbox.min.css', get_template_directory_uri() . '/css/lightbox.min.css' );

  wp_enqueue_style( 'menu_topexpand.css', get_template_directory_uri() . '/css/menu_topexpand.css' );

  wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css' );

  // wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );

  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );

  wp_enqueue_script( 'classie_js', get_template_directory_uri() . '/js/classie.js', array('jquery'), '', true );

  wp_enqueue_script( 'magnetic_js', get_template_directory_uri() . '/js/magneticScroll-1.0.min.js', array('jquery'), '', true );

  wp_enqueue_script( 'rgac_js', get_template_directory_uri() . '/js/rgac-js.js', array('jquery'), '', true );

  wp_enqueue_script( 'lightbox.min.js', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '', true );

}

add_action ('wp_enqueue_scripts', 'rgac_theme_styles');


function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Stories';
    $submenu['edit.php'][5][0] = 'Stories';
    $submenu['edit.php'][10][0] = 'Add Stories';
    $submenu['edit.php'][16][0] = 'Stories Tags';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Stories';
    $labels->singular_name = 'Stories';
    $labels->add_new = 'Add Stories';
    $labels->add_new_item = 'Add Stories';
    $labels->edit_item = 'Edit Stories';
    $labels->new_item = 'Stories';
    $labels->view_item = 'View Stories';
    $labels->search_items = 'Search Stories';
    $labels->not_found = 'No Stories found';
    $labels->not_found_in_trash = 'No Stories found in Trash';
    $labels->all_items = 'All Stories';
    $labels->menu_name = 'Stories';
    $labels->name_admin_bar = 'Stories';
}

add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );


// navigation
register_nav_menus(array(
  'primary' => __( 'Primary Menu' )
));

?>
