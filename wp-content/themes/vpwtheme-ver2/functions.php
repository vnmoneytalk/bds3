<?php



/* Thêm Menu */



register_nav_menus(array('primary' => 'Menu chinh'));



add_theme_support( 'post-thumbnails', array('page','post') );



// mô tả ngắn



function description_short($more) {

    return '...';

}

add_filter( 'excerpt_more', 'description_short' );







/* Thêm css/js */



function vpw_style() {

		wp_enqueue_script('script_jquery', get_template_directory_uri() . '/js/jquery.min.js');

		wp_enqueue_script('script_bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');

		wp_enqueue_script('script_slider', get_template_directory_uri() . '/js/jssor.slider-22.1.6.min.js');

		wp_enqueue_style('css_bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

		wp_enqueue_style('css_style', get_template_directory_uri() . '/style.css');	

		wp_enqueue_style('css_icon', get_template_directory_uri() . '/icon/css/font-awesome.min.css');	

}

add_action('wp_enqueue_scripts', 'vpw_style');



// Widget ảnh

function vpw_admin_style() {

		wp_enqueue_style('admin-css', get_template_directory_uri() . '/css/admin.css');

        wp_enqueue_script( 'kt_image', get_template_directory_uri() . '/js/kt_image.min.js', array('jquery'), '1.0.0', true);

        wp_localize_script( 'kt_image', 'kt_image_lange', array(

            'frameTitle' => esc_attr__( 'Chọn ảnh', 'vpwtheme' )

        ));

        wp_enqueue_media();

}

add_action('admin_enqueue_scripts', 'vpw_admin_style');



/* Thêm Menu */



add_action('admin_enqueue_scripts', 'vpw_admin_style');

// Thay doi logo admin wordpress



add_action('login_head', 'vpw_admin_style');

/* Thêm sidebar */

if (function_exists('register_sidebar')) {



		register_sidebar(array(

			'name'          => 'Sidebar phải',

			'id'            => 'sidebar-1',

			'description'   => '',

			'before_widget' => '<div id="%1$s" class="widget sidebar %2$s">',

			'after_widget'  => '</div>',

			'before_title'  => '<div class="titlew"><h3>',

			'after_title'   => '</h3><s class="ic-count"></s></div>'

		));



		register_sidebar(array(

			'name'          => 'Trang chủ 1',

			'id'            => 'trangchu',

			'description'   => '',

			'before_widget' => '<div id="%1$s" class="col-sm-3 widget %2$s"><div class="bg-tran">',

			'after_widget'  => '</div></div>'

		));



		register_sidebar(array(

			'name'          => 'Trang chủ 2',

			'id'            => 'trangchu2',

			'description'   => '',

			'before_widget' => '<div id="%1$s" class="col-sm-3 widget %2$s"><div class="bg-color">',

			'after_widget'  => '</div></div>'

		));





		register_sidebar(array(

			'name'          => 'Trang chủ 3',

			'id'            => 'trangchu3',

			'description'   => '',

			'before_widget' => '<div id="%1$s" class="col-sm-3 %2$s"><div class="bg-tran">',

			'after_widget'  => '</div></div>'

		));





		register_sidebar(array(

			'name'          => 'Chân trang #1',

			'id'            => 'footer1',

			'description'   => '',

			'before_widget' => '<div id="%1$s" class="widget %2$s">',

			'after_widget'  => '</div>',

			'before_title'  => '<h3>',

			'after_title'   => '</h3>'

		));



		register_sidebar(array(

			'name'          => 'Chân trang #2',

			'id'            => 'footer2',

			'description'   => '',

			'before_widget' => '<div id="%1$s" class="widget %2$s">',

			'after_widget'  => '</div>',

			'before_title'  => '<h3>',

			'after_title'   => '</h3>'

		));



		register_sidebar(array(

			'name'          => 'Chân trang #3',

			'id'            => 'footer3',

			'description'   => '',

			'before_widget' => '<div id="%1$s" class="widget %2$s">',

			'after_widget'  => '</div>',

			'before_title'  => '<h3>',

			'after_title'   => '</h3>'

		));

		register_sidebar(array(

			'name'          => 'Chân trang #4',

			'id'            => 'footer4',

			'description'   => '',

			'before_widget' => '<div id="%1$s" class="widget %2$s">',

			'after_widget'  => '</div>',

			'before_title'  => '<h3>',

			'after_title'   => '</h3>'

		));

		register_sidebar(array(

			'name'          => 'Chân trang #5',

			'id'            => 'footer5',

			'description'   => '',

			'before_widget' => '<div id="%1$s" class="widget %2$s">',

			'after_widget'  => '</div>',

			'before_title'  => '<h3>',

			'after_title'   => '</h3>'

		));





}





remove_action( 'wp_head', 'print_emoji_detection_script', 7 );

remove_action( 'wp_print_styles', 'print_emoji_styles' );





/* Tạo cài đặt theme */



if( !class_exists( 'ReduxFramewrk' ) ) {

require_once( dirname( __FILE__ ) . '/inc/option/framework.php' );

}

if( !isset( $redux_demo ) ) {

require_once( dirname( __FILE__ ) . '/inc/option.php');

}



/* Menu bootstrap Wordpress */



require_once( dirname( __FILE__ ) . '/wp_bootstrap_navwalker.php');





include_once dirname(__FILE__) . '/widget/home-widget.php';

include_once dirname(__FILE__) . '/widget/kt_image.php';

function basix_getPostViews($postID) {

    $count_key = 'basix_post_views_count';

    $count     = get_post_meta($postID, $count_key, TRUE);

    if ($count == '') {

        delete_post_meta($postID, $count_key);

        add_post_meta($postID, $count_key, '0');

        return "0";

    }

    return $count;

}



function basix_setPostViews($postID) {

    $count_key = 'basix_post_views_count';

    $count     = get_post_meta($postID, $count_key, TRUE);

    if ($count == '') {

        $count = 0;

        delete_post_meta($postID, $count_key);

        add_post_meta($postID, $count_key, '0');

    } else {

        $count++;

        update_post_meta($postID, $count_key, $count);

    }

}