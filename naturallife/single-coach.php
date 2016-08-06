<?php 

/* Template Name: Single Coach */

$request_uri = $_SERVER['REQUEST_URI'];
$request_uri_array = explode("/", $request_uri);
$slug = $request_uri_array[2];
// echo $slug;
$coach = pods( 'coaches', $slug );
echo $coach-> get_field( 'name');
?>
<?php include"header.php";?>
			<div class="header-banner">
				<img src="<?php echo get_template_directory_uri(); ?>/img/header-banner.png">
			</div>

			<!-- start-of-big post image -->
			<div class="big_blog_img left-side">
			<h3>James Marshall</h3>
			<div class="clear"></div>
			<p><b>Some example of some nice tex...</b></p>
			<div class="clear"></div>
			<section class="bottom-1">
			
				<div class="big-yTube1">
					<iframe id="iframe" width="640" height="390" src="http://www.youtube.com/embed/8UVNT4wvIGY?rel=0" frameborder="0" allowfullscreen></iframe>
					<div class="big-yTubeShadow"></div>
				</div>
			</section>
			
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
		
		
		
		
		
		
		
	
			
			<div class="team_single left-side">
							<?php echo $coach-> get_field( 'text');?>
				
					<div class="small_img"><img src="<?php echo get_template_directory_uri(); ?>/img/marsal_small.png" class="left-side"></div>
			
															<p>He specializes in holistic coaching that looks at all 
							elements that make a man naturally attractive to 
							women. No lines, no tricks, just pure direct sexual 
							intent, flexible conversational principles, inner 
							game mastery, style, body language and charisma.</p>

							<p>He is described as a low energy, high intensity 
							seducer and is particularly gifted in teaching more 
							mellow, gimmick free seduction that works </p>

											<p>particularly well for more introverted men, allowing them to maintain their true personality while 
							adapting the Natural game principles to suit their temperament.</p>

							<p>James now travels the globe on a perpetual loop of coaching, field research and epic adventures. He 
							works with Platinum clients to create unique high end coaching solutions at residential programs 
							worldwide and is available for private consultations on application.</p>

							<p>James can be contacted directly here</p>
				
			
					<div class="team_contact left-side">
			
                     	
						
					  
						
						<form action="" method="post" name="footer">
						<div class="details_contact">
                        <div class="border">
                            <input name="name" type="text" value="Writte your name here..." onClick="if(this.value=='Writte your name here...'){this.value=''}" onBlur="if(this.value==''){this.value='Writte your name here...'}"><span>Name</span></div>
                        <div class="border">
                            <input name="email" type="text" value="Writte your email here..." onClick="if(this.value=='Writte your email here...'){this.value=''}" onBlur="if(this.value==''){this.value='Writte your email here...'}"><span>Email</span></div>
                        <div class="border">
							<input name="inquiry" type="text" value="Writte your inquiry here..." onClick="if(this.value=='Writte your inquiry here...'){this.value=''}" onBlur="if(this.value==''){this.value='Writte your inquiry here...'}"><span>Inquiry</span></div>
						</div>
						
						
						
						  <input class="button_send" name="submit" type="button" value="Send">
                        
						</form>
						
						
			</div>
             <div class="clear"></div
            ><p><b>Coaching Services</b></p>
		<p>James is available for platinum coaching worldwide. Along with residential customized programs in 
            party spots over European summer, James also hosts live in trainings around the world. These unique 
            programs allow the highest attention and pin pointed training for maximum results.</p>
            
            <p>If you require the best in executive natural seduction coaching an appointment with James is 
            invaluable. Upcoming events below.</p>
            <div class="clear"></div>
          <!--  slider news events-->
            
            <div class="big_line"></div>
            
            <div class="event_info">
            
            <div class="event_work"><p><b>Work shop</b></p></div>
            <div class="event_date"><p>Date</p></div>
            <div class="event_booking"><p>Bookings</p></div>
            
            </div>
            
            <div class="big_line"></div>
            <div id="scroll-pane">
		<div class="scroll-content-item anchor0">
        
        
        
            <p><b>The Euro Tour 1</b></p>                                        
            
            <p>World's only 10 day travelling seduction
            workshop through Eastern Europe.</p>
            
            <p>Coaches: James Marshall, Sasha Daygame,
            Liam McRae, John Cooper </p>
            
            </div>
		<div class="scroll-content-item2 "><p>29th May - 10th June</p></div>
		<div class="scroll-content-item3 "><a href="#"><p>Booking and info</p></a></div>
		<div class="scroll-content-item  anchor1">
        <p><b>Adriatic Tour</b></p>   
            
            <p>7 day paradise summer residential
            In secret adriatic beach side location.</p>
            
            <p>Coaches: James Marshall, Sasha Daygame,
            John Cooper, Jess Daly</p></div>
		<div class="scroll-content-item2 "><p>17th - 24th July</p></div>
		<div class="scroll-content-item3 "><a href="#"><p>Booking and info</p></a></div>
		<div class="scroll-content-item anchor2">
        <p><b>Adriatic Tour</b></p>   
            
            <p>7 day paradise summer residential
            In secret adriatic beach side location.</p>
            
            <p>Coaches: James Marshall, Sasha Daygame,
            John Cooper, Jess Daly</p></div>
		<div class="scroll-content-item2 "><p>17th - 24th July</p></div>
		<div class="scroll-content-item3 "><a href="#"><p>Booking and info</p></a></div>
		<div class="scroll-content-item anchor3">10</div>
		<div class="scroll-content-item2 ">11</div>
		<div class="scroll-content-item3 "><a href="#"><p>Booking and info</p></a></div>
		<div class="scroll-content-item anchor4">13</div>
		<div class="scroll-content-item2 ">14</div>
		<div class="scroll-content-item3 "><a href="#"><p>Booking and info</p></a></div>
		<div class="scroll-content-item anchor5">16</div>
		<div class="scroll-content-item2 ">17</div>
		<div class="scroll-content-item3 "><a href="#"><p>Booking and info</p></a></div>
		<div class="scroll-content-item anchor6">19</div>
		<div class="scroll-content-item2 ">20</div>
</div>

<div class="clear"></div>
<div class="big_line"></div>
<div id="arrows">
<img id="arrow_down" alt="Down" src="<?php echo get_template_directory_uri(); ?>/img/down.png"width="50" />
<img id="arrow_up" alt="Up" src="<?php echo get_template_directory_uri(); ?>/img/up.png" width="50" />

</div>
<div class="clear"></div>
<div class="line"></div>


<div class="related_videos">
<h3>MORE VIDEOS FROM JAMES</h3>
<div class="clear"></div>
<section class="latest-videos">
						
				<div class="miniYtube">
					<h4>JAMES MARSHALL WELCOME</h4>
					<div class="tube-container">
					<a class="fancybox-media" href="http://http://www.youtube.com/watch?v=8UVNT4wvIGY"><img src="<?php echo get_template_directory_uri(); ?>/img/mTubeTeaser.png">
					<span class="zoom"></span>
					</a>
					
					</div>
					<div class="mini-yTubeShadow"></div>
				</div>

				<div class="miniYtube">
					<h4>JAMES MARSHALL WELCOME</h4>
					<div class="tube-container">
					<a class="fancybox-media" href="http://http://www.youtube.com/watch?v=8UVNT4wvIGY"><img src="<?php echo get_template_directory_uri(); ?>/img/mTubeTeaser.png">
					<span class="zoom"></span>
					</a>
					
					</div>
					<div class="mini-yTubeShadow"></div>

				</div>
				<div class="clear"></div>
			</section>
</div>
<div class="clear"></div>
<div class="line"></div>

<!--slider picture gallery--> 
<script type="text/javascript" src="www.simonbattersby.com/javascript/vertical.slider.standard.js"></script>
<script type="text/javascript">
setSlider($('#scroll-pane'));

$('#arrow_up').mousedown(function(event) {
	if(event.preventDefault) event.preventDefault();
    intervalId = setInterval('scrollUp()', 30);
	$(this).bind('mouseup mouseleave', function() {
		clearInterval(intervalId);
	});
});
$('#arrow_down').mousedown(function(event) {
	if(event.preventDefault) event.preventDefault();
    intervalId = setInterval('scrollDown()', 30);
	$(this).bind('mouseup mouseleave', function() {
		clearInterval(intervalId);
	});
});

function scrollUp(){
	if ($(".slider-vertical").slider("value")<100){
		$(".slider-vertical").slider("value",$(".slider-vertical").slider("value")+1);
	}
}
function scrollDown(){
	if ($(".slider-vertical").slider("value")>0){
		$(".slider-vertical").slider("value",$(".slider-vertical").slider("value")-1);
	}
}
</script>
<script type="text/javascript"> Cufon.now(); </script>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-8019289-1");
pageTracker._trackPageview();
} catch(err) {}</script>
            
           <!-- end slider news events-->
            
			<div id="container" class="cf left-side">
 

	<div id="main" role="main">
      <section class="slider">
        <div class="flexslider">
          <ul class="slides">
            <li data-thumb="<?php echo get_template_directory_uri(); ?>/images/kitchen_adventurer_cheesecake_brownie.jpg">
  	    	    <img src="<?php echo get_template_directory_uri(); ?>/images/kitchen_adventurer_cheesecake_brownie.jpg" />
  	    		</li>
  	    		<li data-thumb="<?php echo get_template_directory_uri(); ?>/images/kitchen_adventurer_lemon.jpg">
  	    	    <img src="<?php echo get_template_directory_uri(); ?>/images/kitchen_adventurer_lemon.jpg" />
  	    		</li>
  	    		<li data-thumb="<?php echo get_template_directory_uri(); ?>/images/kitchen_adventurer_donut.jpg">
  	    	    <img src="<?php echo get_template_directory_uri(); ?>/images/kitchen_adventurer_donut.jpg" />
  	    		</li>
  	    		<li data-thumb="<?php echo get_template_directory_uri(); ?>/images/kitchen_adventurer_caramel.jpg">
  	    	    <img src="<?php echo get_template_directory_uri(); ?>/images/kitchen_adventurer_caramel.jpg" />
  	    		</li>
          </ul>
        </div>
      </section>
      
     
    </div>
  
  </div>
  <!--end of slider picture gallery-->
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