<?php
class cat_post extends WP_Widget {
 
    function __construct() {
        parent::__construct(
            'cat_post',
            'Bài viết theo chuyên mục',
            array( 'description'  =>  'Widget hiển thị bài viết theo chuyên mục' )
        );
    }
 
    function form( $instance ) {
        $default = array(
            'title' => 'Tiêu đề widget',
            'cat'   => 1,
            'post_number' => 10
        );
        $instance = wp_parse_args( (array) $instance, $default );
        $cat = esc_attr($instance['cat']);
        $title = esc_attr($instance['title']);
        $post_number = esc_attr($instance['post_number']);

        $terms = get_terms('category', array(
            'orderby'    => 'name',
            'hide_empty' => TRUE
        ));
        $cats_output .= '<p>Chọn danh mục <select name='.$this->get_field_name('cat').'>';
        foreach ($terms as $term) {
            $cats_output .= '<option value="' . $term->term_id . '"';
            if ($term->term_id == $cat) {
                $cats_output .= 'selected="selected"';
            }
            $cats_output .= '>' . $term->name . '</option>';
        }
        $cats_output .= '</select></p>';
        echo $cats_output;
        echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';
        echo '<p>Số lượng bài viết hiển thị <input type="number" class="widefat" name="'.$this->get_field_name('post_number').'" value="'.$post_number.'" placeholder="'.$post_number.'" max="30" /></p>';
 
    }
 
    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['cat'] = strip_tags($new_instance['cat']);
        $instance['post_number'] = strip_tags($new_instance['post_number']);
        return $instance;
    }
 
    function widget( $args, $instance ) {
        extract($args);
        $title = apply_filters( 'widget_title', $instance['title'] );
        $post_number = $instance['post_number'];
        $cat = $instance['cat'];
        echo $before_widget;
        echo $before_title.$title.$after_title;
        $random_query = new WP_Query('posts_per_page='.$post_number.'&orderby=id&cat='.$cat.'');
        ?>
        
        <?php
        if ($random_query->have_posts()):
            while( $random_query->have_posts() ) :
                $random_query->the_post(); ?>
        <div class="news">
            <div class="img-home f-left"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></div>
            <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?> </a></h3>
        </div>
            <?php endwhile;
        endif; ?>
        <?php
        echo $after_widget;
 
    }
 
}
 
add_action( 'widgets_init', 'create_randompost_widget' );
function create_randompost_widget() {
    register_widget('cat_Post');
}














class cat_post1 extends WP_Widget {
 
    function __construct() {
        parent::__construct(
            'cat_post1',
            'Bài viết theo chuyên mục',
            array( 'description'  =>  'Widget hiển thị bài viết theo chuyên mục' )
        );
    }
 
    function form( $instance ) {
        $default = array(
            'title' => 'Tiêu đề widget',
            'cat'   => 1,
            'post_number' => 10
        );
        $instance = wp_parse_args( (array) $instance, $default );
        $cat = esc_attr($instance['cat']);
        $title = esc_attr($instance['title']);
        $post_number = esc_attr($instance['post_number']);

        $terms = get_terms('category', array(
            'orderby'    => 'name',
            'hide_empty' => TRUE
        ));

        $cats_output .= '<p>Chọn danh mục <select name='.$this->get_field_name('cat').'>';
        foreach ($terms as $term) {
            $cats_output .= '<option value="' . $term->term_id . '"';
            if ($term->term_id == $cat) {
                $cats_output .= 'selected="selected"';
            }
            $cats_output .= '>' . $term->name . '</option>';
        }
        $cats_output .= '</select></p>';
        echo $cats_output;
        echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';
        echo '<p>Số lượng bài viết hiển thị <input type="number" class="widefat" name="'.$this->get_field_name('post_number').'" value="'.$post_number.'" placeholder="'.$post_number.'" max="30" /></p>';
 
    }
 
    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['cat'] = strip_tags($new_instance['cat']);
        $instance['post_number'] = strip_tags($new_instance['post_number']);
        return $instance;
    }
 
    function widget( $args, $instance ) {
        extract($args);
        $title = apply_filters( 'widget_title', $instance['title'] );
        $post_number = $instance['post_number'];
        $cat = $instance['cat'];
        echo $before_widget;
        echo $before_title.$title.$after_title;
        $random_query = new WP_Query('posts_per_page='.$post_number.'&orderby=id&cat='.$cat.'');
 
        if ($random_query->have_posts()):
            $i=0;
            while( $random_query->have_posts() ) :
             
                $random_query->the_post(); ?>
          
        <div class="news1 small">
           <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?> </a>
        </div>

            <?php endwhile;
        endif;
        echo $after_widget;
 
    }
 
}
 
add_action( 'widgets_init', 'cat_widget' );
function cat_widget() {
    register_widget('cat_post1');
}
?>