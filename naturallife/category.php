<?php include"header.php";?>
			<div class="header-banner">
				<img src="<?php echo get_template_directory_uri(); ?>/img/header-banner.png">
			</div>

			<!-- start-of-big post image -->
			<div class="big_blog_img left-side">
			<h3>The Revolution Has Begun</h3>
			<div class="clear"></div>
			<h4>39 COMMENTS</h4>
			<p>March 22, 2013 By Mark Manson</p>
			<div class="clear"></div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/big_single_blog.png">
			
			</div>
			<!-- end-of-big post image -->

			<!-- start-of-form -->
			<div class="login-form-container">
				<div class="form-top-border">
				</div>
				<div class="login-form">
					<h2>Want to be <span id="natural-word">NATURAL</span><br/>with <span id="women-word">WOMEN?</span>
					</h2>
					<div class="form-box">
						<form>
						<input type="text" id="username-input" value="Username" onClick="value=''">
						<input type="text" id="password-input" value="Password" onClick="value=''">
						<div class="submit-container">						
						<input  class="button-blue" type="submit" value="INSTANT ACCESS">
						</div>
						</form>
					</div>
					<p class="first-p">Sign up for your <span>FREE</span></p>
					<p>&#8226; 7 Week video course on <br>the 5 principles <br>of natural seduction</p>
					<p>&#8226; Bonus Ebook by <br>James Marshall</p>
					<p class="last-p">&#8226; Plus FREE <br> Coaching session click above</p>
				</div>
				<div class="form-bottom-border"></div>
			</div>
			<!-- end-of-form -->

			<div class="clear"></div>
		</div>
	</div>
	</div> <!-- END OF TOP BODY -->

	<div class="bottom-body">
		<div class="wrapper">
		
	
			
			<div class="blog left-side">
					<?php $args = array(
                    'posts_per_page'  => 6,
                    'numberposts'     => 6,
                    'offset'          => 0,
                    'category'        => '',
                    'orderby'         => 'post_date',
                    'order'           => 'DESC',
                    'include'         => '',
                    'exclude'         => '',
                    'meta_key'        => '',
                    'meta_value'      => '',
                    'post_type'       => 'post',
                    'post_mime_type'  => '',
                    'post_parent'     => '',
                    'post_status'     => 'publish',
                    'suppress_filters' => true ); ?>
                    
                     <?php query_posts($args); ?>

        			<?php while ( have_posts() ) : the_post(); ?>
                    
    		<div class="blog_img left-side">
            
			<h3><?php the_title(); ?></h3>
            
			<div class="clear"></div>
            
			<h4><?php echo get_comments_number() ;	?> COMMENTS</h4>
			<p><?php the_date(); ?> By <?php comment_author(); ?></p>
			<div class="clear"></div>
			
                           <?php
								   
								   if ( has_post_thumbnail() ) { 
								   
										  the_post_thumbnail('blog_small');
									
									}								   
								   ?> 
            
           		<p><?php the_content(); ?> </p>
			<div class="read_full"><a href="<?php the_permalink();?>"><h5>READ FULL ARTICLE</h5></a></div>
            <div class="like_box"><img src="<?php echo get_template_directory_uri(); ?>/img/like_box.png"></div>
			</div>
           
            <div class="clear"></div>
    		<div class="line"></div>
             <?php endwhile; // end of the loop. ?>
            
			</div>
		
		<div class="right-side">
				<div class="calendar">
					<h3>UPCOMING EVENTS</h3>
					<div class="heading-shadow"></div>	

					<div class="event">
						<div class="from">
							29 <br>
							MAY
							<span class="calendar-arrow"></span>
						</div>
						<div class="to">
							10 <br>
							JUNE
						</div>
						<div class="book">
							<h4>EURO TOUR 1</h4>
							<a href="index.html">BOOK NOW</a>
						</div>
						<div class="clear"></div>
					</div>

					<div class="event">
						<div class="from">
							29 <br>
							MAY
							<span class="calendar-arrow"></span>
						</div>
						<div class="to">
							10 <br>
							JUNE
						</div>
						<div class="book">
							<h4>ADRIATIC TOUR</h4>
							<a href="index.html">BOOK NOW</a>
						</div>
						<div class="clear"></div>
					</div>

					<div class="event">
						<div class="from">
							29 <br>
							MAY
							<span class="calendar-arrow"></span>
						</div>
						<div class="to">
							10 <br>
							JUNE
						</div>
						<div class="book">
							<h4>EURO TOUR 2</h4>
							<a href="index.html">BOOK NOW</a>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
				<div class="widget" id="widget-1">
					<img src="<?php echo get_template_directory_uri(); ?>/img/widget-1.png">
				</div>
				<div class="clear"></div>
				
				<div id="widget-3" class="widget">
					<h3>COACHING</h3>
					<div class="heading-shadow"></div>	
					<p>The Natural Lifestyles team offers the world's 
						most cutting edge yet timeless coaching in 
						seduction, confidence and lifestyle design. 
						We believe all clients have individual needs, 
						goals and learning strategies and so all coaching 
						is customized to the needs of the individual. 
						</p>  <p>With unique courses in dating, confidence, 
						lifestyle design, style, sexual mastery and much 
						more, find out how the world's best Naturals can 
						help you. </p>
						<a href="index.html" class="read-more">GET COACHING</a>
						
						<div class="testimonial">
					<blockquote><q>

					The more time I spent with these guys,

					the more obvious it became that they

					all really know what they are teaching.

					<br><br>
					The many internal barriers that I'd

					developed from the past were smashed

					into pieces. No routines, no scripted

					stories, no fake stuff, just my own

					natural self.</q>
					</blockquote>
					<div class="cite">David Miles, 31. Melbourne</div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/person-quote.png">
					<div class="clear"></div>
				</div>
				</div>
				
				<div class="clear"></div>
				
				<div class="widget" id="widget-2">
					<img src="<?php echo get_template_directory_uri(); ?>/img/widget-2.png">
				</div>
				
				
				
		</div>
		<div class="clear"></div>
			<div class="carousel">

			  <ul id="mycarousel" class="jcarousel-skin-tango">
			    <li><img src="<?php echo get_template_directory_uri(); ?>/img/means-health.png" /></li>
			    <li><img src="<?php echo get_template_directory_uri(); ?>/img/daily-press.png" /></li>
			    <li><img src="<?php echo get_template_directory_uri(); ?>/img/fhm.png" /></li>
			    <li><img src="<?php echo get_template_directory_uri(); ?>/img/bbc.png" /></li>
			    <li><img src="<?php echo get_template_directory_uri(); ?>/img/five.png" /></li>
			    <li><img src="<?php echo get_template_directory_uri(); ?>/img/evening.png" /></li>
			    <li><img src="<?php echo get_template_directory_uri(); ?>/img/maxim.png" /></li>
			    <li><img src="<?php echo get_template_directory_uri(); ?>/img/fhm.png" /></li>
			    <li><img src="<?php echo get_template_directory_uri(); ?>/img/bbc.png" /></li>
			    <li><img src="<?php echo get_template_directory_uri(); ?>/img/five.png" /></li>
			    <li><img src="<?php echo get_template_directory_uri(); ?>/img/means-health.png" /></li>
			    <li><img src="<?php echo get_template_directory_uri(); ?>/img/daily-press.png" /></li>
			    <li><img src="<?php echo get_template_directory_uri(); ?>/img/maxim.png" /></li>
			    <li><img src="<?php echo get_template_directory_uri(); ?>/img/fhm.png" /></li>
			  </ul>

			</div>
		</div>
	</div> <!-- END OF BODY BOTTOM -->

	<?php include"footer.php";?>