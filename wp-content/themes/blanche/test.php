<div class="row">
          <div class="col-12 col-md-6  mb-0 col-lg-6 d-flex flex-column-reverse pl-3 pr-0 pb-0 pt-0 ">

            <!-- Card -->
            <div class="card  text-white" style="min-height: 732px; background-image: url('./wp-content/uploads/2022/04/Layer-22.png')">

              <!-- Background -->
              <div class="card-bg">
                <div class="card-bg-img bg-cover" style="background-image: url('./wp-content/uploads/2022/04/Layer-22.png');"></div>
              </div>

              <!-- Body -->
              <div class="card-body  text-center " style="bottom:0px !important;">

                <!-- Heading -->
               

                <!-- Link -->
                <a class="btn btn-link stretched-link text-dark bg-white" href="#">
                  Shop Bed Linens
                </a>

              </div>

            </div>

          </div>
          <div class="col-12 col-md-6 mb-0  col-lg-6 d-flex flex-column-reverse pr-3  pl-0 pb-0 pt-0" >

            <!-- Card -->
            <div class="card mb-7 text-body" style="min-height: 732px;">

              <!-- Background -->
              <div class="card-bg">
                <div class="card-bg-img bg-cover" style="background-image: url('./wp-content/uploads/2022/04/Layer-20.png');"></div>
              </div>

              <!-- Body -->
              <div class="card-body my-auto py-md-10 text-center ">


                <!-- Link -->
                <a class="btn btn-link stretched-link  text-dark bg-white" href="#" style="position:absolute;">
                  Shop Now 
                </a>

              </div>

            </div>

          </div>
</div>
<div class="row">
          <div class="col-12 col-md-6 col-lg-6 d-flex flex-column  pl-3 pr-0 pb-0 pt-0">

            <!-- Card -->
            <div class="card mb-7 md-0 text-body" style="min-height: 732px;">

              <!-- Background -->
              <div class="card-bg">
                <div class="card-bg-img bg-cover" style="background-image: url('./wp-content/uploads/2022/04/Layer-23.png');"></div>
              </div>

              <!-- Body -->
              <div class="card-body my-auto px-md-10 text-center text-md-left">

              

                <!-- Link -->
                <a class="btn btn-link stretched-link  text-dark bg-white" href="#">
                  Shop Bath Robes
                </a>

              </div>

            </div>

          </div>
          <div class="col-12 col-md-6 col-lg-6 d-flex flex-column  pr-3 pl-0 pb-0 pt-0">

            <!-- Card -->
            <div class="card text-white" style="min-height: 732px;">

              <!-- Background -->
              <div class="card-bg">
                <div class="card-bg-img bg-cover" style="background-image: url('./wp-content/uploads/2022/04/JASMINE-copy.png');"></div>
              </div>

              <!-- Body -->
              <div class="card-body my-auto text-center">

        

                <!-- Link -->
                <a class="btn btn-link stretched-link text-dark bg-white" href="#">
                  Shop Home Fragnances
                </a>

              </div>

            </div>

          </div>
        </div>




        <nav class="navbar  navbar-expand-lg navbar-light d-inline-flex mt-2 mt-md-0 ms-md-auto" style="width:100%;">
					<div class="container">

					

						<!-- Collapse -->
						<div class="collapse navbar-collapse" >

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

							<!-- Brand -->
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

							<!-- Nav -->
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
				</nav>