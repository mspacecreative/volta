			<!-- Footer -->
			<div id="footer">
				<div class="container">
					<div class="inner">
						<div class="row">
											
							<section class="col-3 col-12-mobile">
								<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-column-1')) ?>
							</section>
											
							<!-- Posts -->
							<section class="col-3 col-12-mobile">
								<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-column-2')) ?>
							</section>
							<!-- /Posts -->
											
							<!-- About -->
							<section class="col-3 col-12-mobile">
								<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-column-3')) ?>
							</section>
							<!-- /About -->
														
							<!-- Contact -->
							<section class="col-3 col-12-mobile">
								<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-column-4')) ?>
							</section>
							<!-- /Contact -->
											
						</div>
											
						<!-- Contact bar -->
						<section class="contact">
							<ul>
								<li>&copy; Volta. All rights reserved.</li>
							</ul>
							<ul class="icons">
								<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands fa-linkedin"><span class="label">Linkedin</span></a></li>
								<li><a href="#" class="icon brands fa-youtube"><span class="label">YouTube</span></a></li>
							</ul>
						</section>
						<!-- /Contact bar -->
											
					</div>
				</div>
			</div>
			<!-- /Footer -->
			
		</div>
		<!-- /Page wrapper -->
		
		<?php wp_footer(); ?>

	</body>
</html>
