<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Liquor Store - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('cssTheme/animate.css')}} ">

    <link rel="stylesheet" href="{{ asset('cssTheme/owl.carousel.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('cssTheme/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('cssTheme/magnific-popup.css') }} ">

    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css') }} ">

    <link rel="stylesheet" href="{{ asset('cssTheme/flaticon.css') }} ">
    <link rel="stylesheet" href="{{ asset('cssTheme/style.css') }} ">
  </head>
  <body>

  	<div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2">
							<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a>
							<a href="#"><span class="fa fa-paper-plane mr-1"></span> youremail@email.com</a>
						</p>
					</div>
					<div class="col-md-6 d-flex justify-content-md-end">
						<div class="social-media mr-4">
			    		<p class="mb-0 d-flex">
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
			    		</p>
		        </div>
		        <div class="reg">
		        	{{-- <p class="mb-0"><a href="http://ejemplo-lw.test/register" class="mr-2">Registrarte</a> <a href="http://ejemplo-lw.test/login">Iniciar Sesion</a></p> --}}

                    @if (Route::has('login'))

                        @auth
                        <p class="mb-0">
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Perfil</a>
                            </p>
                            {{--  <form method="POST" action="http://ejemplo-lw.test/logout" >
                                <input type="hidden" name="_token" value="8yZYS77WD06RIqxwsFY8wlZHmCFNuEOyGbw8LXvs">
                                <a class="text-sm text-gray-700 dark:text-gray-500 underline" href="http://ejemplo-lw.test/logout" @click.prevent="$root.submit();">Log Out</a>
                            </form>
                            --}}
                            <form method="POST" action="http://ejemplo-lw.test/logout">  {{-- Cierre de sesion (Log Out) --}}
                                @csrf

                              <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition" href="http://ejemplo-lw.test/logout" onclick="event.preventDefault();
                               this.closest('form').submit();">Log Out</a>
                               </form>

                        @else
                        <p class="mb-0">
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="mr-2">Register</a>
                            @endif
                        @endauth

                    @endif
                    </p>
                </div>
					</div>
				</div>
			</div>
		</div>

	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="/">Liquor <span>store</span></a>
	      <div class="order-lg-last btn-group">
          <a href="#" class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          	<span class="flaticon-shopping-bag"></span>
          	<div class="d-flex justify-content-center align-items-center"><small>3</small></div>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
				    <div class="dropdown-item d-flex align-items-start" href="#">
				    	<div class="img" style="background-image: url({{ asset('images/prod-1.jpg') }});"></div>
				    	<div class="text pl-3">
				    		<h4>Bacardi 151</h4>
				    		<p class="mb-0"><a href="#" class="price">$25.99</a><span class="quantity ml-3">Quantity: 01</span></p>
				    	</div>
				    </div>
				    <div class="dropdown-item d-flex align-items-start" href="#">
				    	<div class="img" style="background-image: url({{ asset('images/prod-2.jpg') }});"></div>
				    	<div class="text pl-3">
				    		<h4>Jim Beam Kentucky Straight</h4>
				    		<p class="mb-0"><a href="#" class="price">$30.89</a><span class="quantity ml-3">Quantity: 02</span></p>
				    	</div>
				    </div>
				    <div class="dropdown-item d-flex align-items-start" href="#">
				    	<div class="img" style="background-image: url({{ asset('images/prod-3.jpg') }});"></div>
				    	<div class="text pl-3">
				    		<h4>Citadelle</h4>
				    		<p class="mb-0"><a href="#" class="price">$22.50</a><span class="quantity ml-3">Quantity: 01</span></p>
				    	</div>
				    </div>
				    <a class="dropdown-item text-center btn-link d-block w-100" href="#">
				    	View All
				    	<span class="ion-ios-arrow-round-forward"></span>
				    </a>
				  </div>
        </div>

	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">About</a></li>
	          <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="#">Products</a>
                <a class="dropdown-item" href="#">Single Product</a>
                <a class="dropdown-item" href="#">Cart</a>
                <a class="dropdown-item" href="#">Checkout</a>
              </div>
            </li>
	          <li class="nav-item	"><a href="#" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Products <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Products</h2>
          </div>
        </div>
      </div>
    </section>

    {{ $slot }}

    <footer class="ftco-footer">
        <div class="container">
          <div class="row mb-5">
            <div class="col-sm-12 col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2 logo"><a href="#">Liquor <span>Store</span></a></h2>
                <p>Far far away, behind the word mountains, far from the countries.</p>
                <ul class="ftco-footer-social list-unstyled mt-2">
                  <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-12 col-md">
              <div class="ftco-footer-widget mb-4 ml-md-4">
                <h2 class="ftco-heading-2">My Accounts</h2>
                <ul class="list-unstyled">
                  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>My Account</a></li>
                  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Register</a></li>
                  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Log In</a></li>
                  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>My Order</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-12 col-md">
              <div class="ftco-footer-widget mb-4 ml-md-4">
                <h2 class="ftco-heading-2">Information</h2>
                <ul class="list-unstyled">
                  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About us</a></li>
                  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Catalog</a></li>
                  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact us</a></li>
                  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Term &amp; Conditions</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-12 col-md">
               <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Quick Link</h2>
                <ul class="list-unstyled">
                  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>New User</a></li>
                  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Help Center</a></li>
                  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Report Spam</a></li>
                  <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Faq's</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-12 col-md">
              <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Have a Questions?</h2>
                  <div class="block-23 mb-3">
                    <ul>
                      <li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                      <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                      <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid px-0 py-5 bg-black">
            <div class="container">
                <div class="row">
                <div class="col-md-12">

                  <p class="mb-0" style="color: rgba(255,255,255,.5);"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
              </div>
            </div>
        </div>
      </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="{{ asset('jsTheme/jquery.min.js') }} "></script>
    <script src="{{ asset('jsTheme/jquery-migrate-3.0.1.min.js') }} "></script>
    <script src="{{ asset('jsTheme/popper.min.js') }} "></script>
    <script src="{{ asset('jsTheme/bootstrap.min.js') }} "></script>
    <script src="{{ asset('jsTheme/jquery.easing.1.3.js') }} "></script>
    <script src="{{ asset('jsTheme/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('jsTheme/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('jsTheme/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('jsTheme/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('jsTheme/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('jsTheme/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('jsTheme/google-map.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('jsTheme/main.js') }}"></script>

    </body>
  </html>
