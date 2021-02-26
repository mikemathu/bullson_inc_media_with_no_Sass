<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bullson_Media
 */


 $getFooterContentTitle = get_field("footer_content_title_");
 $getFooterContentDescription = get_field("footer_content_description");
 $getFooterPhoneNumber = get_field("phone_number");
 $getFooterEmailAddress = get_field("email_address");
 $getFooterFacebookLink = get_field("facebook_link");
 $getFooterLinkedinLink = get_field("linked_in_link");
 $getFooterTwitterLink = get_field("twitter_link");
 $getFooterInstagrameLink = get_field("instagram_link");
?>

	<footer id="colophon" class="site-footer">

	<div id="contact">

	<div class="container">

		<div class="row">

			<div class="col-md-6 col-sm-12">
				<div id="contact-left">						
					<!-- <h3>Pwani Tech Solutions</h3> -->

					<?php if ( !empty( $getFooterContentTitle ) ):?>

						<h3><?php echo $getFooterContentTitle;?></h3>

					<?php endif; ?>

					<!-- <p>Commitment and dedication to providing the best possible customer service in a <strong>Simple</strong> <strong>Modern</strong> way.</p> -->

					<?php if ( !empty( $getFooterContentTitle ) ):?>

						<p><?php echo $getFooterContentDescription;?></p>

						<?php endif; ?>

					<div id="contact-info">
						<div id="phone-fax-email">
							<p>
								<!-- <strong>Phone:</strong><span> (+254) 798827450 </span> <br> -->

								<?php if ( !empty( $getFooterPhoneNumber ) ):?>

										<?php echo "<strong> Phone: </strong> <span>". $getFooterPhoneNumber ."</span> <br/>";?>

								<?php endif; ?>
								<!-- <strong>Email:</strong><span>  pwanitechsolutions@gmail.com  </span> <br> -->

								<?php if ( !empty( $getFooterEmailAddress ) ):?>

									<?php echo "<strong> Email: </strong> <span>". $getFooterEmailAddress . "</span> <br>";?>
									<?php endif; ?>
							</p>
						</div>

					</div>
					<ul class="social-list">
						<!-- <li><a target="_blank" href="https://www.facebook.com/Michael-Mathu-2090738070988692/?modal=admin_todo_tour" class="social-icon icon-white"><i class="fa fa-facebook" ></i></a></li>
						<li><a target="_blank" href="https://www.linkedin.com/in/michael-mathu-89729215b/" class="social-icon icon-white"><i class="fa fa-linkedin" ></i></a></li> -->




						<?php $facebook_url = get_field('facebook_link');
							if( $facebook_url ): 
							echo '<li><a target="_blank" href="'.$facebook_url.'" class="social-icon icon-white"><i class="fa fa-facebook"></i></a></li>';
						endif; 
						?>
						<?php $linkedin_url = get_field('linked_in_link');
							if( $linkedin_url ): 
							echo '<li><a target="_blank" href="'.$linkedin_url.'" class="social-icon icon-white"><i class="fa fa-linkedin"></i></a></li>';
						endif; 
						?>
						<?php $twitter_url = get_field('twitter_link');
							if( $twitter_url ): 
							echo '<li><a target="_blank" href="'.$twitter_url.'" class="social-icon icon-white"><i class="fa fa-twitter"></i></a></li>';
						endif; 
						?>
						<?php $instagram_url = get_field('instagram_link');
							if( $instagram_url ): 
							echo '<li><a target="_blank" href="'.$instagram_url.'" class="social-icon icon-white"><i class="fa fa-instagram"></i></a></li>';
						endif; 
						?>

					</ul>

				</div>
			</div>
			<div class="col-md-6">
		  
				<div id="send-btn">
					<h4>Contact Us</h4>
					
				<?php echo do_shortcode( '[contact-form-7 id="215" title="Contact form 1"]' ); ?>
				
				
				  <!-- <h4>Contact Us<a  type="submit" name="submit" class="btn btn-lg btn-general btn-light"><u>pwanitechsolutions@gmail.com</u></a></a></h4> -->
				</div>
			</div>

		</div>
	</div>

</div>

<div id="footer-bottom">
	<div class="container">
		<div class="row">
			<div class="col-md-6">

				<div id="footer-copyrights">
					<p>Copyrights &copy; 2019 All Rights Reserved by Pwani Tech Solutions.</p>
				</div>

			</div>
			<div class="col-md-6 hidden-sm hidden-xs">
				<div id="footer-menu">
					<ul>
						<li><a class="smooth-scroll" href="#home">Home</a>/</li>
						<li><a class="smooth-scroll" href="#services">Services</a>/</li>
						<li><a class="smooth-scroll" href="#about">About</a>/</li>
						<li><a class="smooth-scroll" href="#stats">Why us</a>/</li>
						<li><a class="smooth-scroll" href="#contact">Contact</a>/</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<a href="#home" id="back-to-top" class="btn btn-sm btn-blue btn-back-to-top smooth-scroll hidden-sm hidden-xs" title="home" role="button">
	<i class="fa fa-angle-up"></i>
</a>


		

<?php wp_footer(); ?>
</body>
</html>
