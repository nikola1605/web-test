<footer>
		<div class="wrapper">

			<section class="top-footer">
			<div class="links">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="index.html">Training</a></li>
					<li><a href="index.html">Team</a></li>
					<li><a href="index.html">Products</a></li>
					<li><a href="index.html">About</a></li>
					<li><a href="index.html">Blog</a></li>
					<li><a href="index.html">Contact</a></li>
				</ul>
			</div>
			<div class="recent-posts">
				<h3>RECENT POST</h3>

				<div class="mini-post">
				<h5>BIBNEDUM</h5>
				<img src="<?php echo get_template_directory_uri(); ?>/img/img-002.png">
				</div>

				<div class="mini-post">
				<h5>BIBNEDUM</h5>
				<img src="<?php echo get_template_directory_uri(); ?>/img/img-002.png">
				</div>

				<div class="mini-post">
				<h5>BIBNEDUM</h5>
				<img src="<?php echo get_template_directory_uri(); ?>/img/img-002.png">
				</div>
			</div>

			<div class="right-footer">

			<div class="links">
				<div id="back-top" class="to-top">
					<a href="">To Top</a>
				</div>
				<div class="clear"></div>
				<ul>
					<li><a href="index.html">Contacts</a></li>
					<li><a href="index.html">FAQs</a></li>
					<li><a href="index.html">Testimonials</a></li>
					<li><a href="index.html">About us</a></li>
				</ul>
			</div>
			</div>
			<div class="clear"></div>
			</section>
			<div class="copyright">
				<p>Copyright © 2012 Appup.com All Rights Reserved</p>
			</div>
		</div>
	</footer>

	  <!-- FlexSlider -->
  <script defer src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js"></script>
  <script type="text/javascript">

    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
    <script defer src="<?php echo get_template_directory_uri(); ?>/js/demo.js"></script>
</body>
</html>