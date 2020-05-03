			<!-- Footer -->
			<div id="footer">
				<div class="footer-inner">
					<div class="row gutter_space_1 clear">
									
					<section class="column-container col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-column-1')) ?>
					</section>
									
					<!-- Posts -->
					<section class="column-container col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-column-2')) ?>
					</section>
					<!-- /Posts -->
									
					<!-- About -->
					<section class="column-container col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-column-3')) ?>
					</section>
					<!-- /About -->
												
					<!-- Contact -->
					<section class="column-container col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-column-4')) ?>
					</section>
					<!-- /Contact -->
									
				</div>
				</div>
									
				<!-- Contact bar -->
				<div class="footer-inner">
					<div class="row footer-creds light align_items_bottom">
					<ul>
						<li>&copy; Volta. All rights reserved.</li>
					</ul>
					<ul class="icons">
						<li><a href="https://twitter.com/voltaeffect" class="icon brands fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/voltaeffect/" class="icon brands fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/voltaeffect/" class="icon brands fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
						<li><a href="https://www.linkedin.com/company/voltaeffect/" class="icon brands fa-linkedin" target="_blank"><span class="label">Linkedin</span></a></li>
						<li><a href="https://www.youtube.com/user/voltaeffect" class="icon brands fa-youtube" target="_blank"><span class="label">YouTube</span></a></li>
					</ul>
				</div>
				</div>
				<!-- /Contact bar -->
			</div>
			<!-- /Footer -->
		
		<?php wp_footer(); ?>

	</body>
</html>
