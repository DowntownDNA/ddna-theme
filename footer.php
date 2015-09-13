<?php $background = get_field("footer_background", 'option'); ?>
<?php $image = $background['sizes']['full-width']; ?>

		<footer id="footer" style="background-image: url('<?php echo $image; ?>');">
			<div class="container">
				<div class="row">
					<div id="footer-left" class="col-xs-12 col-sm-8">
						<div class="row">
							<div class="col-xs-12">
								<h2>DDNA</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<nav role="navigation">
									<?php wp_nav_menu(array(
										'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
										'container_class' => 'footer-main',        	 // class of container (should you choose to use it)
										'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
										'menu_class' => 'nav footer-nav',            // adding custom nav class
										'theme_location' => 'footer-links',             // where it's located in the theme
										'before' => '',                                 // before the menu
										'after' => '',                                  // after the menu
										'link_before' => '',                            // before each link
										'link_after' => '',                             // after each link
										'depth' => 0,                                   // limit the depth of the nav
										'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
									)); ?>
								</nav>
							</div>

							<div class="col-xs-12 col-sm-4">
								<nav role="navigation">
									<?php wp_nav_menu(array(
										'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
										'container_class' => 'footer-2',        	 // class of container (should you choose to use it)
										'menu' => __( 'Footer Links 2', 'bonestheme' ),   // nav name
										'menu_class' => 'nav footer-nav',            // adding custom nav class
										'theme_location' => 'footer-links2',             // where it's located in the theme
										'before' => '',                                 // before the menu
										'after' => '',                                  // after the menu
										'link_before' => '',                            // before each link
										'link_after' => '',                             // after each link
										'depth' => 0,                                   // limit the depth of the nav
										'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
									)); ?>
								</nav>								
							</div>

							<div class="col-xs-12 col-sm-4">
								<nav role="navigation">
									<?php wp_nav_menu(array(
										'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
										'container_class' => 'footer-3',      		 // class of container (should you choose to use it)
										'menu' => __( 'Footer Links 3', 'bonestheme' ),   // nav name
										'menu_class' => 'nav footer-nav',            // adding custom nav class
										'theme_location' => 'footer-links3',             // where it's located in the theme
										'before' => '',                                 // before the menu
										'after' => '',                                  // after the menu
										'link_before' => '',                            // before each link
										'link_after' => '',                             // after each link
										'depth' => 0,                                   // limit the depth of the nav
										'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
									)); ?>
								</nav>
							</div>
						</div>
					</div>

					<div id="footer-right" class="col-xs-12 col-sm-4">
						<div class="row">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div id="shameful-plug">
							Site developed by none other than <a href="mailto:codymarxbailey@gmail.com">Cody Marx Bailey</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
			<script>
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

				ga('create', 'UA-65947164-1', 'auto');
				ga('send', 'pageview');
			</script>
	</body>
</html>