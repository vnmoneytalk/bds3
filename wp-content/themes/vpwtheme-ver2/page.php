<?php
/**
 * Template : Page
 */
?>

<?php get_header(); ?>
<?php if (have_posts()) { ?>
	<?php while (have_posts()) {
		the_post();
		basix_setPostViews(get_the_ID());
		 ?>

<div class="site-container">
  <div class="container">
      <div class="row">
      <div class="col-sm-9">
        <div class="m_lh1">
        <h2 class="t_tit" ><?php the_title() ?></h2>
        </div>
        <div class="img_res1">
            <?php the_content() ?>
        </div>
      </div>
      <div class="col-sm-3">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

	<?php } // End while ?>
<?php } // End if ?>
<?php get_footer(); ?>