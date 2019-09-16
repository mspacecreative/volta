			<!-- Footer -->
			<div id="footer">
				<div class="container">
					<div class="inner">
						<div class="row">
											
							<!-- Enewsletter form -->
							<section class="col-3 col-12-mobile">
								<header>
									<h3>SIGN UP FOR OUR NEWSLETTER</h3>
								</header>
								<form method="post" action="">
									<input type="text" name="Email Address" value="Email Address" placeholder="Email Address" />
									<input type="text" name="First Name" value="First Name" placeholder="First Name" />
									<input type="text" name="Last Name" value="Last Name" placeholder="Last Name" />
									<input type="submit" name="Subscribe" value="Subscribe" />
								</form>
							</section>
							<!-- /Enewsletter form -->
											
							<!-- Posts -->
							<section class="col-3 col-12-mobile">
								<header>
									<h3>VOLTA BLOG</h3>
								</header>
								<?php get_template_part('includes/footer-blog-loop'); ?>
							</section>
							<!-- /Posts -->
											
							<!-- About -->
							<section class="col-3 col-12-mobile">
								<header>
									<h3>ABOUT VOLTA</span></h3>
								</header>
								<p>Volta is Atlantic Canada’s
								premier innovation hub. We
								offer a place for the startup
								and innovation community to
								work, learn and connect.</p>
							</section>
							<!-- /About -->
														
							<!-- Contact -->
							<section class="col-3 col-12-mobile">
								<header>
									<h3>GET IN TOUCH</span></h3>
								</header>
								<p><strong>Volta</strong><br />
								902-702-0194<br />
								1505 Barrington Street,<br />
								Unit 100, Halifax, NS,<br />
								B3J 3K5, Canada</p>
							</section>
							<!-- /Contact -->
											
						</div>
											
						<!-- Contact bar -->
						<section class="contact">
							<ul class="menu">
								<li>&copy; Untitled. All rights reserved.</li>
							</ul>
							<ul class="icons">
								<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">Linkedin</span></a></li>
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
		
		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
