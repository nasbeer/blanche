<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blanche
 */

?>

<footer class="bg-light">
	<div class="container-fluid pb-10 pt-10 pl-10 pr-10">
		<div class="row content-space-t-2 ">
		<div class="col-sm mb-7 mb-sm-0">
				<h5 class="mb-3" style="font-family:'BrownStd-Regular' !important;color:#737373 !important;font-size:14px !important;">OUR STORY</h5>
	<span class=" text-grey light" style="font-weight: 300;font-family:'BrownStd-Regular' !important;color:#737373 !important;font-size:12px !important;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
	<br/>
				<div class="d-inline-block content-space-t-2 pt-3 justify-content-between">
					<i class="fa fa-facebook icons "></i>
					<i class="fa fa-twitter icons ml-3"></i>
					<i class="fa fa-instagram icons ml-3"></i>
</div>
			</div>
			

			<div class="col-sm mb-7 mb-sm-0">
				<h5 class="mb-3" style="font-family:'BrownStd-Regular' !important;color:#737373 !important;font-size:14px !important;">MORE...</h5>

				<!-- List -->
				<ul class="list-unstyled list-py-1 mb-0">
					<li><a class="link-sm link-secondary" href="#">About</a></li>
					<li><a class="link-sm link-secondary" href="#">Contact Us</a></li>
					<li><a class="link-sm link-secondary" href="#">Track My Order</a></li>
				
					<li><a class="link-sm link-secondary" href="#">FAQ</a></li>
				</ul>
				<!-- End List -->
			</div>
			<!-- End Col -->

			<div class="col-sm mb-7 mb-sm-0">
				<h5 class="mb-3" style="font-family:'BrownStd-Regular' !important;color:#737373 !important; font-size:14px !important;">SHOP</h5>

				<!-- List -->
				<ul class="list-unstyled list-py-1 mb-0">
					<li><a class="link-sm link-secondary" href="#">Bed Linen </a></li>
					<li><a class="link-sm link-secondary" href="#">Bath Towels</a></li>
					<li><a class="link-sm link-secondary" href="#">Bathrobes</a></li>
					<li><a class="link-sm link-secondary" href="#">Home Fragnances</a></li>
				</ul>
				<!-- End List -->
			</div>
			<!-- End Col -->

			

			<div class="col-sm">
				<h5 class="mb-3" style="font-family:'BrownStd-Regular' !important;color:#737373 !important;font-size:14px !important;">NEWSLETTER</h5>

				<p style="font-family:'BrownStd-Regular' !important;font-size:12px;color:#737373 !important;font-weight:300;">Subscribe to receive updates, access to exculsive deals and more.</p>	
				<div class="input-group">
         <input type="email" class="form-control input-news" placeholder="Enter your email address" style="   ">
         <span class="input-group-btn">
         <button class="btn btn-secondary btn-sm subscribe"  type="submit">SUBSCRIBE</button>
         </span>
          </div>
			</div>
			<!-- End Col -->
		</div>
		<!-- End Row -->

		<div class="my-7"></div>

		<div class="row mb-2">
			<div class="col-sm mb-3 mb-sm-0">
				<!-- Socials -->
				<ul class="list-inline list-separator mb-0">
					<li class="list-inline-item">
						<a class="text-body" href="#" style="color: #737373 !important;">&copy;2020 BLAUCHE</a>
					</li>
					
				</ul>
				<!-- End Socials -->
			</div>

			<div class="col-sm-auto">
				<!-- Socials -->
				<ul class="list-inline mb-0">
					

					<li class="list-inline-item">
						<!-- Button Group -->
						<div class="">
							
								<span class="d-flex align-items-center iconcolor">
								<i class="fab fa-cc-amex mr-2"></i>
								<i class="fab fa-apple-pay mr-2"></i>
									
									
									<i class="fab fa-cc-mastercard mr-2"></i>
									<i class="fab fa-cc-paypal mr-2"></i>
									<i class="fab fa-cc-visa mr-2"></i>
									
								</span>
							

							
						</div>
						<!-- End Button Group -->
					</li>
				</ul>
				<!-- End Socials -->
			</div>
		</div>

	
	</div>
</footer>




<!-- 
<footer id="colophon" class="site-footer d-none">
	<div class="site-info">
		<a href="<?php //echo esc_url( __( 'https://wordpress.org/', 'blanche' ) ); ?>">
			<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				//printf( esc_html__( 'Proudly powered by %s', 'blanche' ), 'WordPress' );
				?>
		</a>
		<span class="sep"> | </span>
		<?php
				/* translators: 1: Theme name, 2: Theme author. */
				//printf( esc_html__( 'Theme: %1$s by %2$s.', 'blanche' ), 'blanche', '<a href="https://nasbeer.com">Nasbeer</a>' );
				?>
	</div>
</footer>
</div>-->

<?php wp_footer(); ?>

</body>

</html>