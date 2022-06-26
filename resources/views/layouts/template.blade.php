<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Konsumen - Home</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('images/loading.gif') }}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="{{ url('konsumen/home') }}"> Home  </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#about">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ url('konsumen/service') }}">Service</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#customer">Customer</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#contact">Contact Us</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="{{ asset('images/logo.png') }}" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
                     <ul class="email">
                        <li><a>Hello, {{ (session()->get('email', 'email')) }}</a></li>
                        <li><a>{{ (session()->get('no_hp', 'no_hp')) }}</a></li>
                        <li><a href="{{ url('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- service -->
      <div id="service"  class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2> <img src="{{ asset('images/head.png') }}" alt="#"/> Our Services</h2>
                  </div>
               </div>
            </div>
            @yield('content')
         </div>
      </div>
      <!-- service -->
      <!--  footer -->
      <footer id="contact">
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-xl-6 col-md-12">
                     <div class="row">
                        <div class="col-md-7 padd_bottom">
                           <div class="heading3">
                              <a href="#"><img src="{{ asset('images/logo.png') }}" alt="#"/></a>
                              <p>S Tailor menyediakan layanan pembuatan baju secara online yang mempermudah anda untuk membuat baju dimanapun dan kapanpun menggunakan aplikasi</p>
                           </div>
                        </div>
                        <div class="col-md-5 padd_bottom padd_bott">
                           <div class="heading3">
                              <h3>Contact Us</h3>
                              <ul class="infometion">
                                 <li><a href="#">Donec odio. Quisque </a></li>
                                 <li><a href="#">volutpat mattis</a></li>
                                 <li><a href="#">eros.Lorem ipsum dolor</a></li>
                                 <li><a href="#">sit amet, consectetuer  </a></li>
                                 <li><a href="#">adipiscing elit. Donec  </a></li>
                                 <li><a href="#">odio. Quisque volutpat </a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-md-12">
                     <div class="row">
                        <div class="col-md-6 offset-md-1 padd_bottom">
                           <div class="heading3">
                              <h3>INFORMATION</h3>
                              <ul class="infometion">
                                 <li><a href="#">Donec odio. Quisque </a></li>
                                 <li><a href="#">volutpat mattis</a></li>
                                 <li><a href="#">eros.Lorem ipsum dolor</a></li>
                                 <li><a href="#">sit amet, consectetuer  </a></li>
                                 <li><a href="#">adipiscing elit. Donec  </a></li>
                                 <li><a href="#">odio. Quisque volutpat </a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-md-5">
                           <div class="heading3">
                              <h3>MY ACCOUNT</h3>
                              <ul class="infometion">
                                 <li><a href="#">Donec odio. Quisque </a></li>
                                 <li><a href="#">volutpat mattis</a></li>
                                 <li><a href="#">eros.Lorem ipsum dolor</a></li>
                                 <li><a href="#">sit amet, consectetuer  </a></li>
                                 <li><a href="#">adipiscing elit. Donec  </a></li>
                                 <li><a href="#">odio. Quisque volutpat </a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('js/custom.js') }}"></script>
      <script>
         $('a[href^="#"]').on('click', function(event) {

          var target = $(this.getAttribute('href'));

          if( target.length ) {
              event.preventDefault();
              $('html, body').stop().animate({
                  scrollTop: target.offset().top
              }, 2000);
          }

         });
      </script>
   </body>
</html>
