<?php global $vpw_theme; ?>
<div class="footer1">
  <div class="container bg-xanh">
    <div class="row">
        <div class="col-sm-6">
          <?php dynamic_sidebar('footer1') ?>
        </div>
      
        <div class="col-sm-6">
          <?php dynamic_sidebar('footer2') ?>
        </div>
      </div>
    
    </div>
    
  </div>
</div>
<footer>
	<div class="container bg-den">
		<div class="row">
			<div class="col-sm-8" style="
    border-right: 1px solid #fff;
">
				<?php dynamic_sidebar('footer3') ?>
			</div>
			
			<div class="col-sm-4">
          <div class="col-sm-6" style="
    text-align: right;
    line-height: 45px;">
            <?php dynamic_sidebar('footer4') ?>
          </div>
          <div class="col-sm-6">
          <ul>
            <li><a href="<?php echo $vpw_theme['face']?>">
            <i class="fa fa-facebook"></i>
            </a></li>
            <li><a href="<?php echo $vpw_theme['gg']?>">
            <i class="fa fa-google-plus"></i>
            </a></li>
            <li><a href="<?php echo $vpw_theme['you']?>">
            <i class="fa fa-youtube"></i>
            </a></li>
          </ul>
        </a>
			</div>
		</div>
	</div>
</footer>


</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=438079372896789";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php wp_footer(); ?>
</body>
</html>