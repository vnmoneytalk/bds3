<?php
/**
 * Template : Chi tiết
 */
?>

<?php get_header(); ?>
<?php if (have_posts()) { ?>
	<?php while (have_posts()) {
		the_post();
		basix_setPostViews(get_the_ID());
		 ?>

  <div class="container pad-top">
      <div class="row">
      <div class="col-sm-9">
        <div class="m_lh1">
        <h1 class="t_tit" ><?php the_title() ?></h1>
        </div>
        <div class="date">
          <div>Ngày đăng: <?php the_date() ?> | Số lượt đọc: <?php echo basix_getPostViews(get_the_ID()); ?><div style="float:right" class="fb-like" data-href="<?php the_permalink() ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
       </div>
        </div>
        <div class="img_res1">
            <?php the_content() ?>
              <?php
              $posttags = get_the_tags();
              if ($posttags) {
                foreach($posttags as $tag) {
                  echo $tag->name . ' '; 
                }
              }
              ?>
            <div  style="padding:10px 0px" class="fb-like" data-href="<?php the_permalink() ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
        

        </div>
        <div class="cmt">
          <p>Bình luận</p>
          <div class="fb-comments1">
            <div class="fb-comments" data-href="<?php the_permalink() ?>" data-numposts="5" data-width="100%"></div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>

	<?php } // End while ?>
<?php } // End if ?>
<?php get_footer(); ?>