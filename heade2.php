<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bullson_Media
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar-fixed-top" data-offset="65">



<?php
	// Home section
$getHomeTitle = get_field( "title" );
$getHomeText = get_field( "text" );
$getHomeButton = get_field( "button" );
$getHomeBackgroungImage = get_field('backgroung_image');

?>
<?php wp_body_open(); ?>

<!-- <div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php //esc_html_e( 'Skip to content', 'bullson_inc_media' ); ?></a> -->

	<!-- <header id="masthead" class="site-header"> -->
	<header>
	<section id="home ">

		<div id="home-cover">
		
		<div class="top index">
		<nav class="navbar navbar-expand-md navbar-light" role="navigation">

		<!-- <nav class="navbar navbar-fixed-top"> -->

		<div class="container-fluid">

		<div class="bullson-nav-wrapper">

				<div class="navbar-header">

				<button type="button" class="navbar-toggle collapsed open-slide" data-toggle="collapse" data-target="#bullson-menu">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button> 

				<button class="navbar-toggler"  id="open-slide" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?//php esc_attr_e( 'Toggle navigation', 'bullson_inc_media' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>

				<a class="navbar-brand" href="#home">
					<img src="img/PT.jpg" alt="logo" height="35px">
				</a>
				</div>
			

		<div class="collapse navbar-collapse " id="bullson-menu">

			<div class="container">
				<?php
				wp_nav_menu( array(
					// 'theme_location' => 'menu-1',
					'theme_location'  => 'primary',
					'menu_id'        => 'bullson-menu',
					'depth'             => 2,
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse ',
					// 'container_class'   => 'collapse navbar-collapse side-menu',
					'container_id'      => 'bs-example-navbar-collapse-1',
					'menu_class'        => 'nav navbar-nav',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
				) );
				?>
			</div>
			</div>
		</div>
		</div>
		</nav>

		</div>

		
		
	<!--</div> -->

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
				<!-- <a class="btn btn-lg btn-general btn-white smooth-scroll" href="#contact-right" role="button" title="View Our Work">Contact Us</a> -->

				<?php 
					$link = get_field('button');
					if( $link ): 
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
						?>
						<!-- <a class="button" href="<?php //echo esc_url( $link_url ); ?>" target="<?php //echo esc_attr( $link_target ); ?>"><?php //echo esc_html( $link_title ); ?></a> -->

						<a class="btn btn-lg btn-general btn-white smooth-scroll" href="<?php echo esc_url( $link_url ); ?>" role="button" title="View Our Work" target="<?php echo esc_attr( $link_target ); ?>">
							<?php echo esc_html( $link_title );?>
						</a>
					<?php endif; ?>
			</div>

		</div>

	</div>

 </div>

</section>	



	</header><!-- #masthead -->



