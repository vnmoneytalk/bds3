<?php
/**
 * Template : Danh mục
 */
?>

<?php get_header(); ?>
	<div class="container pad-top">
	  	<div class="row">
			<div class="col-sm-9">
				<h1 class="page-title">Tìm kiếm</h1>
				<?php if (have_posts()) { ?>
				<?php while (have_posts()) {
					the_post(); ?>
				<div class="col-sm-4 archive">
					<div class="img-cat">
					<a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title(); ?>" class="link_image">
					<?php the_post_thumbnail('medium'); ?>
					<h3>
						<a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title(); ?>" class="link_image">
						<?php the_title(); ?>
						</a>
					</h3>
					</a>
					</div>
				</div>
				<?php } // End if ?>
				<?php } else{ ?>
					<h4>Đang cập nhật dự án...</h4>
				<?php } // End while ?>

				<div id="navigation">
					<div class="wp-pagenavi">
					<?php

					global $wp_query;

					$big = 999999999; 

					echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format'=> '?paged=%#%',
					'prev_text'=> __('<'),
					'next_text' => __('>'),
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages
					) );
					?>

					</div>
				</div>


				
			</div>
			<div class="col-sm-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>


<?php get_footer(); ?>