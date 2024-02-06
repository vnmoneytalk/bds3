<?php
	/**
	 * Header
	 */
global $vpw_theme;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title><?php wp_title('-', TRUE, 'right'); ?><?php bloginfo('name'); ?><?php if (is_front_page()) {
		echo ' - ';
		bloginfo('description');
	} ?></title>
<link rel="shortcut icon" href="#"/>
<?php wp_head(); ?>
  <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>

</head>
<body  id="top">
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 danhmucchinh">
					<nav class="danhmuc navbar navbar-default" role="navigation">
						  <div class="navbar-header"> 
						    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
						      <span class="sr-only">Toggle navigation</span> 
						      <span class="icon-bar"></span> 
						      <span class="icon-bar"></span> 
						      <span class="icon-bar"></span> 
						    </button> 
						    <a href="<?php echo site_url()?>"><img class="mobile" src="<?php echo $vpw_theme['logo']['url'] ?>"/></a> 
						  </div> 
						  <?php 
						     wp_nav_menu( array(
						       'theme_location' => 'primary',
						       'depth' => 2, //Số cấp menu đa cấp
						       'container' => 'div', //Thẻ bao quanh cặp thẻ ul
						       'container_class'=>'collapse navbar-collapse navbar-ex1-collapse', //class của thẻ bao quanh cặp thẻ ul
						       'menu_class' => 'nav navbar-nav danhmucdrop', //class của thẻ ul
						       'walker' => new wp_bootstrap_navwalker())
						);
						?>
						</nav>

				</div>
				
				
			</div>
		</div>
	</div>
	<div class="padding-top">


