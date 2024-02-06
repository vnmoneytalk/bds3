<?php
/**
 * Template Name: TRANG CHỦ
 */
?>

<?php get_header(); ?>

 <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('<?php echo get_template_directory_uri() ?>/images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
            <?php foreach ($vpw_theme['opt-slides'] as $slider) {?>
            <div>
                <img data-u="image" src="<?php echo $slider['image']; ?>" />
            </div>
            <?php } ?>
           </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
    <?php echo do_shortcode('[contact-form-7 id="2404" title="Đăng ký"]') ?>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>



<?php if (have_posts()) { ?>
	<?php while (have_posts()) {
		the_post();
		basix_setPostViews(get_the_ID());
		 ?>
	<div class="container">
	  	<div class="row">
	  			<?php
					the_content();
				?>
	  	</div>
  	</div>
  	
	<?php } // End while ?>
<?php } // End if ?>

<?php get_footer(); ?>