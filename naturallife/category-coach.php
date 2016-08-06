<?php 

/* Template Name: Category Coaches */

$request_uri = $_SERVER['REQUEST_URI'];
$request_uri_array = explode("/", $request_uri);
$slug = $request_uri_array[2];
// echo $slug;
$coaches = pods( 'coaches', $slug );
echo $coaches-> get_field( 'name');
?>

<?php include"header.php";?>
			<div class="header-banner">
				<img src="<?php echo get_template_directory_uri(); ?>/img/header-banner.png">
			</div>

			<!-- start-of-big post image -->
			<div class="team_big left-side">
			<h3>THE NATURAL LIFE STYLE TEAM</h3>
			<div class="clear"></div>
			
			<div class="clear"></div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/big_blog_picture.png">
			
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
		
	
		<div class="team left-side">
	
    		<div class="team_page left-side">
                            <p>Welcome to <b>The Natural Lifestyles.</b></p>
                            
                            <p>There are a select group of men in the single scene who dominate over all others. They are not 
                            necessarily the most handsome or rich, the ones with the best bodies or fastest cars.</p>
                            
                            <p>They are the Naturals - Men who understand the matrix of social dynamics, understand what women 
                            really want and who are unafraid to take what they want.</p>
                            <div class="clear"></div>	
  			</div>
            
            
                    <div class="team_page left-side">
            <?php
                  $team = new Pod('coaches');
                  $team->findRecords('ordering ASC');       
                  $total_members = $team->getTotalRows();
                ?>
                
                <?php if( $total_members>0 ) : ?>
                  <?php while ( $team->fetchRecord() ) : ?>
                    
                    <?php
                      // set our variables
                      $member_id        = $team->get_field('id');
                      $member_name      = $team->get_field('name');
                      $member_location  = $team->get_field('location');
					  $member_leed  	  = $team->get_field('leed');
                      $member_photo     = $team->get_field('photo');
                      $member_bio       = $team->get_field('bio');
                      $member_eom       = $team->get_field('eom');
        
                      // data cleanup
                      $member_bio       = wpautop( $member_bio );
                      $member_photo     = $member_photo[0]['guid'];
                    ?>
            
			<div class="team_circle left-side">
			
			
			<?php 
			
			$img_thumb_related_item_id = "";
         $sql_image = "SELECT related_item_id FROM wp_podsrel WHERE field_id='37' AND item_id='$member_id'"; // 
         $img = $wpdb->get_results($sql_image, "OBJECT");
         foreach($img as $img_thumb) {
          $img_thumb_related_item_id =  $img_thumb->related_item_id;
         }
			
			echo wp_get_attachment_image( $img_thumb_related_item_id, 'coach' );
			
				?><div class="circle_arow"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow3.png"></div>
           		 <p><b><?php echo $member_location; ?></b></p>
                
                	<?php echo $member_leed; ?>
                	
  			</div>
            <div class="clear"></div>
            <div class="team_name"><h8><?php echo $member_name; ?></h8></div>
            
          <?php endwhile ?>
        <?php endif ?>
            
			</div>
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