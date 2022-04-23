<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blanche
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
	</script>
<script src="https://kit.fontawesome.com/c3a16aee2b.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blanche' ); ?></a>

		<header id="masthead" class="site-header">


			<nav id="site-navigation" class="main-navigation navbar  navbar-expand-lg navbar-light d-inline-flex mt-2 mt-md-0 ms-md-auto" style="width:100%;">
				<div class="container">
				<div class="collapse navbar-collapse justify-content-between " >

<!-- Nav -->
				<ul class="navbar-nav">

					<li class="nav-item">
						<a class="nav-link" href="#">SHOP</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">OUR STORY</a>
					</li>
					<li class="nav-item ">


						<a class="nav-link" href="#">EXPERTISE</a>


					</li>

				</ul>
				<div class="navbar-brand mx-10 d-xxl-inline-flex" href="#" >
								
									<?php
										the_custom_logo();
										if ( is_front_page() && is_home() ) :
									?>
									<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
											rel="home"><?php bloginfo( 'name' ); ?></a></h1>
									<?php
										else :
									?>
									<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
											rel="home"><?php bloginfo( 'name' ); ?></a></p>
									<?php
										endif;
										$blanche_description = get_bloginfo( 'description', 'display' );
										if ( $blanche_description || is_customize_preview() ) :
									?>
									
									<?php endif; ?>
								
										</div>

										<ul class="navbar-nav ">
								<li class="nav-item "><a class="nav-link"href="#">CONTACT</a>
								</li>
							</ul>

							<!-- Nav -->
							<ul class="navbar-nav flex-row">
								<li class="nav-item">
									<a class="nav-link" data-toggle="modal" href="#">
										<i class="fa fa-search"></i>
									</a>
								</li>
								<li class="nav-item ml-lg-n4">
									<a class="nav-link" href="#">
										<i class="fa fa-user"></i>
									</a>
								</li>
								
								<li class="nav-item ml-lg-n4">
									<a class="nav-link" data-toggle="modal" href="#">
										
											<i class="fa fa-shopping-cart"></i>
										
									</a>
								</li>
							</ul>
				</div>

				</div>


				

			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->