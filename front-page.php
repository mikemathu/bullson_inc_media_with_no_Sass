<?php 

get_header(); 

// Retrieving a field as a variable
// Home section
$getHomeTitle = get_field( "title" );
$getHomeText = get_field( "text" );
$getHomeButton = get_field( "button" );
$getHomeBackgroungImage = get_field('backgroung_image');

// Services Section
$getServicesHeading = get_field("services_heading"); 

// About Section
$getAboutContentTitle = get_field("about_content_title");
$getAboutDescription = get_field("about_description");

// Work Section
$getWorkContentTitle = get_field("work_content_title");

// Team Section
$getTeamContentTitle = get_field("team_content_title");

// Why Us Section
$getWhyUsContentTitle = get_field('why_us_content_title');

// Calll To Action Section
$getCallToActionDescription = get_field("call_to_action_description");
$getCallToActionLink = get_field("call_to_action_link");


?>


<section id="home">

        <div id="home-cover" class="bg-parallax animated fadeIn">

            <div id="home-content-box">

                <div id="home-content-box-inner" class="text-center">

                    <div id="home-heading" class="animated zoomIn">
                        <?php if ( !empty( $getHomeTitle ) ):?>

                            <h3><?php echo $getHomeTitle;?></h3>

                        <?php endif; ?>

                        <?php if( !empty( $getHomeText ) ):?>

                            <p><?php echo $getHomeText;?></p>

                        <?php endif; ?>


                    </div>
                    <div id="home-btn" class="animated zoomIn">
                        <a class="btn btn-lg btn-general btn-white smooth-scroll" href="#contact-right" role="button" title="View Our Work">Contact Us</a>
                    </div>

                </div>

            </div>

        </div>

    </section>




 <!-- Services -->
  
    




 <section id="services">

<div class="content-box">
    <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
        <!-- <h3>Features of our websites </h3> -->

        <!-- Display Service Heading -->
        <?php if ( !empty( $getServicesHeading ) ):?>

            <h3><?php echo $getServicesHeading;?></h3>

        <?php endif; ?>
        
        <div class="content-title-underline"></div>
    </div>

    <div class="container">

        <div class="row">					
					<!-- If function here -->
					<?php

                    if( have_rows('services') ):

                        // Loop through rows.
                        while( have_rows('services') ) : the_row();

                            // Load sub field value.
                            $getServiceIcon = get_sub_field('service_icon');
                            $getServiceTitle = get_sub_field('service_title');
                            $getServiceDescription = get_sub_field('service_description');

                    ?>
					
					
            <div class="col-md-4 col-sm-6">
			
				
					<div class="service-item wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
					
					

                    <div class="service-item-icon">
                        <!-- <i class="fa fa-wordpress fa-3x"></i> -->

                        <?php if ( !empty( $getServiceIcon ) ):?>                           
                            <i><img src="<?php echo $getServiceIcon ; ?>" /></i>
                        <?php endif; ?>

                    </div>

                    <div class="service-item-title">
                         <!-- <h3>Content Management System</h3>  -->

                            
                         <?php if ( !empty( $getServiceTitle ) ):?>

                            <h3><?php echo $getServiceTitle;?></h3>

                            <?php endif; ?>
                    </div>

                    <div class="service-item-desc">
                         <!-- <p>Our websites features content management systems that allows you to update content easily with no expert required.</p>  -->



                         <?php if ( !empty( $getServiceDescription ) ):?>

                            <p><?php echo $getServiceDescription;?></p>

                        <?php endif; ?>

                    </div>
					
					    </div>

            </div>

                        <?php endwhile; ?>

					<?php endif; ?>

        </div>

    </div>

</div>

</section>

<!-- About -->
<section id="about">

<!-- About right side with diagonal BG parallax -->
<div id="about-bg-diagonal" class="bg-parallax"></div>

<!-- About left side with content -->
<div class="container">

    <div class="row">

        <div class="col-md-4">

            <div id="about-content-box">

                <div id="about-content-box-outer">

                    <div id="about-content-box-inner">

                        <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                            <!-- <h3> About Us </h3> -->

                            <?php if ( !empty( $getAboutContentTitle ) ):?>

                                <h3><?php echo $getAboutContentTitle;?></h3>

                                <?php endif; ?>

                            <div class="content-title-underline"></div>
                        </div>

                        <div id="about-desc" class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                            <!-- <p>We commit to provide quality servises to our customers.Involving our customers during the project is our habit to get them visualize the progress of their project.</p> -->

                            <?php if ( !empty( $getAboutDescription ) ):?>

                                <p><?php echo $getAboutDescription;?></p>

                            <?php endif; ?>
                        </div>

                        <div id="about-btn" class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">

                        </div>

                    </div>

                </div>


            </div>

        </div>

    </div>

</div>

</section>


<!-- Work -->
<section id="work">

<div class="content-box">
    <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
        <!-- <h3> Our Work </h3> -->
        <?php if ( !empty( $getWorkContentTitle ) ):?>

            <h3><?php echo $getWorkContentTitle;?></h3>

        <?php endif; ?>
        <div class="content-title-underline"></div>
    </div>

    <div class="container-fluid">

        <div class="row no-gutters wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
		
		<!--If function here -->
                <?php

                if( have_rows('work_image') ):

                    // Loop through rows.
                    while( have_rows('work_image') ) : the_row();

                        // Load sub field value.
                        $getImageWrapper = get_sub_field('image_wrapper');
                ?>     
		
		
            <div class="col-md-4 col-sm-4">
                <div class="img-wrapper">
                    <!-- <a href="(<?php //get_theme_file_uri('img/work/1.jpg') ?>);" title="Books Website"> -->
                        <!-- <img src="img/work/1.png" class="img-responsive" alt="Work"> -->
                  <!-- </a> -->                   

                    <?php if ( !empty( $getImageWrapper ) ):?>                           
                            <!-- <img src="<?php //echo $getImageWrapper ; ?>" />                         -->
                            <img class="img-responsive" src="<?php echo $getImageWrapper ; ?>" />                           
                     <?php endif; ?>
                </div>
            </div>

            <?php endwhile; ?>
        <?php endif; ?>
			
			<!--End If function here -->
          
        </div>
    </div>
</div>
<!-- End Content Box -->
</section>


<!-- Team -->
<section id="team" class="teachers-area section-padding-0-100">
        <div class="container">
		
		 <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        
                        <!-- <h3>OUR TEAM</h3> -->
                        <?php if ( !empty( $getTeamContentTitle ) ):?>

                            <h3><?php echo $getTeamContentTitle;?></h3>

                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="row">
    <?php
        if( have_rows('team__content') ):

        // Loop through rows.
        while( have_rows('team__content') ) : the_row();

            // Load sub field value.
            $getMemberImage = get_sub_field('member_image');
            $getMemberName = get_sub_field('member_name');
            $getMemberRole = get_sub_field('member_role');

?>           


                <!-- Single Teachers -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                        <!-- Thumbnail -->
                        <div class="teachers-thumbnail">
                            <!-- <img src="img/team/team-1.jpg" alt=""> -->
                            <?php if ( !empty( $getMemberImage ) ):?>                           
                                 <img src="<?php echo $getMemberImage ; ?>" />
                            <?php endif; ?>
                        </div>
                        <!-- Meta Info -->
                        <div class="teachers-info mt-30">

                            <!-- <h5>Michael Mathu</h5> -->
                            <?php if ( !empty( $getMemberName ) ):?>
                                 <h5><?php echo $getMemberName;?></h5>
                            <?php endif; ?>

                            <!-- <span>Project Manager</span> -->
                            <?php if ( !empty( $getMemberRole ) ):?>
                                 <span><?php echo $getMemberRole;?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!-- Single Teachers -->

                    <?php endwhile; ?>
                <?php  endif; ?>
            </div>
        </div>
                
    </section>


    <!-- Why Us -->
   <section id="stats">

<div id="stats-cover" class="bg-parallax">

    <div class="content-box">
        <div class="content-title content-title-white wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
            <!-- <h3> What makes Pwani Tech Solutions different?</h3> -->
            <?php if ( !empty( $getWhyUsContentTitle ) ):?>
                <h3><?php echo $getWhyUsContentTitle;?></h3>
             <?php endif; ?>

            <div class="content-title-underline"></div>
        </div>

        <div class="container">

            <div class="row text-center wow animated bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s">

            <!-- If Function Here -->
            <?php

            if( have_rows('why_us_item') ):

                // Loop through rows.
                while( have_rows('why_us_item') ) : the_row();

                    // Load sub field value.
                    $getWhyUsTitle = get_sub_field('why_us_title');
                    $getWhyUsDescription = get_sub_field('why_us_description');
            ?> 



                <div class="col-md-3 col-sm-6">
                    <div class="stats-item">
                        <!--<i class="fa fa-cloud-download fa-5x"></i>
                        <h2><span class="counter"> 1590 </span><span>+</span></h2>-->
                        <!-- <h3>Our approach</h3> -->
                        <?php if ( !empty( $getWhyUsTitle ) ):?>
                                 <h3><?php echo $getWhyUsTitle;?></h3>
                        <?php endif; ?>
                    <!-- <p>We listen to what you want to do,precent you with a detailed description of what the end product will look like,to hepl you visualize what we are doing for you. </p> -->
                        
                         <?php if ( !empty( $getWhyUsDescription ) ):?>
                                 <p><?php echo $getWhyUsDescription;?></p>
                            <?php endif; ?>
                    </div>
                </div>
				
				<!-- End If Function Here -->


                <?php endwhile; ?>
                <?php endif; ?>
            </div>

        </div>
    </div>
    <!-- End Content Box -->
</div>
</section> 

<!-- Call To Action Section -->
<section id="call_to_action">

<!-- <p>You have an project on the go?</p> -->
<?php if ( !empty( $getCallToActionDescription ) ):?>
            <p><?php echo $getCallToActionDescription;?></p>
<?php endif; ?>
<!-- <p>We would love to hear all about it and offer you our expert service or advice.</p> -->

<?php //if ( !empty( $getWhyUsTitle ) ):?>
        <h3><?php //echo $getWhyUsTitle;?></h3>
<?php //endif; ?>


<!-- <a class="btn btn-lg btn-general btn-blue smooth-scroll" href="#contact"role="button" title="View Work"> Let's talk </a> -->


<?php if ( !empty( $getCallToActionLink ) ):?>
    <a class="btn btn-lg btn-general btn-blue smooth-scroll" href="#contact"role="button" title="View Work">
         <h3><?php echo $getCallToActionLink;?></h3>
    </a>
<?php endif; ?>



</section>














<?php get_footer(); ?>