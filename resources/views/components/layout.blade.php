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
							<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> 3310884506</a>
							<a href="#"><span class="fa fa-paper-plane mr-1"></span> embriagate@gmail.com</a>
						</p>
					</div>
					<div class="col-md-6 d-flex justify-content-md-end">
						<div class="social-media mr-4">
			    		<p class="mb-0 d-flex">
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>

			    		</p>
		        </div>
		        <div class="reg">
		        	{{-- <p class="mb-0"><a href="http://ejemplo-lw.test/register" class="mr-2">Registrarte</a> <a href="http://ejemplo-lw.test/login">Iniciar Sesion</a></p> --}}

                    @if (Route::has('login'))

                        @auth
                        <p class="mb-0">

                            <form method="POST" action="http://ejemplo-lw.test/logout">  {{-- Cierre de sesion (Log Out) --}}
                                @csrf
                                <a href="{{ url('/dashboard') }}" style="color: white">Perfil</a>
                              <a style="color: white" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition" href="http://ejemplo-lw.test/logout" onclick="event.preventDefault();
                               this.closest('form').submit();">Cerrar Sesion</a>
                               </form>
                            </p>
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
            </a>

          </div>

	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>


                <li class="nav-item"><a href="/productos" class="nav-link">Products</a></li>

	          <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
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

    @include('partials.mensaje')

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
                  <li><a href="{{ route('register') }}"><span class="fa fa-chevron-right mr-2"></span>Register</a></li>
                  <li><a href="{{ route('login') }}"><span class="fa fa-chevron-right mr-2"></span>Log In</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-12 col-md">
              <div class="ftco-footer-widget mb-4 ml-md-4">
                <h2 class="ftco-heading-2">Information</h2>
                <ul class="list-unstyled">
                  <li><a href="{{ route('about') }}"><span class="fa fa-chevron-right mr-2"></span>About us</a></li>
                  <li><a href="/productos"><span class="fa fa-chevron-right mr-2"></span>Catalog</a></li>
                  <li><a href="contact"><span class="fa fa-chevron-right mr-2"></span>Contact us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-12 col-md">
              <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Have a Questions?</h2>
                  <div class="block-23 mb-3">
                    <ul>
                      <li><span class="icon fa fa-map marker"></span><span class="text">Guadalajara,Jal.</span></li>
                      <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">3310884506</span></a></li>
                      <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">embriagate@gmail.com</span></a></li>
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
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
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
