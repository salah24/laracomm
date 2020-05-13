@extends('layouts.app-login')
@section('css-index')
    
 <title>Login</title>
  
    <link rel="manifest" href="{{asset('site.webmanifest')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">

    <!-- CSS here -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

@section('content')
    
        <header>
            <!-- Header Start -->
           <div class="header-area">
                <div class="main-header ">
                    <div class="header-top top-bg d-none d-lg-block">
                       <div class="container-fluid">
                           <div class="col-xl-12">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="header-info-left d-flex">
                                                                         
                                        <ul class="contact-now">     
                                            <li>+777 2345 7886</li>
                                        </ul>
                                    </div>
                                    <div class="header-info-right">
                                       <ul>                                          
                                           <li><a href="login.html">My Account </a></li>
                                           <li><a href="product_list.html">Wish List  </a></li>
                                           <li><a href="cart.html">Shopping</a></li>
                                           <li><a href="cart.html">Cart</a></li>
                                           <li><a href="checkout.html">Checkout</a></li>
                                       </ul>
                                    </div>
                                </div>
                           </div>
                       </div>
                    </div>
                   <div class="header-bottom  header-sticky">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <!-- Logo -->
                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                                    <div class="logo">
                                      <a href="/"><img width="150px" src="{{asset('images/logo.png')}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                    <!-- Main-menu -->
                                    <div class="main-menu f-right d-none d-lg-block">
                                        <nav>                                                
                                            <ul id="navigation">                                                                                                                                     
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="Catagori.html">Catagori</a></li>
                                                <li class="hot"><a href="#">Latest</a>
                                                    <ul class="submenu">
                                                        <li><a href="product_list.html"> Product list</a></li>
                                                        <li><a href="single-product.html"> Product Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog.html">Blog</a>
                                                    <ul class="submenu">
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li><a href="single-blog.html">Blog Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Pages</a>
                                                    <ul class="submenu">
                                                        <li><a href="login.html">Login</a></li>
                                                        <li><a href="cart.html">Card</a></li>
                                                        <li><a href="elements.html">Element</a></li>
                                                        <li><a href="about.html">About</a></li>
                                                        <li><a href="confirmation.html">Confirmation</a></li>
                                                        <li><a href="cart.html">Shopping Cart</a></li>
                                                        <li><a href="checkout.html">Product Checkout</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div> 
                                <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                    <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                        <li class="d-none d-xl-block">
                                            <div class="form-box f-right ">
                                                <input type="text" name="Search" placeholder="Search products">
                                                <div class="search-icon">
                                                    <i class="fas fa-search special-tag"></i>
                                                </div>
                                            </div>
                                         </li>
                                       
                                        <li>
                                            <div class="shopping-card">
                                                <a href="{{route('cart.index')}}"><i class="fas fa-shopping-cart"><span class="badge ml-1" style="font-size: 16px;color:white;background-color:#ff003c">{{Cart::count()}}</span></i></a>
                                            </div>
                                        </li>
                                      
                                    </ul>
                                </div>
                                <!-- Mobile Menu -->
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
           </div>
            <!-- Header End -->
        </header>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
                <div class="single-slider slider-height2 d-flex align-items-center" style="background-image: url({{asset('assets/img/hero/category.jpg')}})">
                    
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Login</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!--================login_part Area =================-->
    <section class="login_part section_padding ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>New to our Shop?</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                            <a href="/register" class="btn_3">Créer un compte</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Welcome Back ! <br>
                                Please Sign in now</h3>
                            <form class="row contact_form" action="{{ route('login') }}" method="POST" novalidate="novalidate">
                             @csrf
                                <div class="col-md-12 form-group p_star">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option">Remember me</label>
                                    </div>
                                    <button type="submit" value="submit" class="btn_3">
                                        log in
                                    </button>
                                    <a class="lost_pass" href="#">forget password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->

    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding2">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                              <!-- logo -->
                             <div class="footer-logo">
                                 <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                             </div>
                             <div class="footer-tittle">
                                 <div class="footer-pera">
                                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                             </div>
                         </div>
                       </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#"> Offers & Discounts</a></li>
                                    <li><a href="#"> Get Coupon</a></li>
                                    <li><a href="#">  Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>New Products</h4>
                                <ul>
                                    <li><a href="#">Woman Cloth</a></li>
                                    <li><a href="#">Fashion Accessories</a></li>
                                    <li><a href="#"> Man Accessories</a></li>
                                    <li><a href="#"> Rubber made Toys</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Support</h4>
                                <ul>
                                 <li><a href="#">Frequently Asked Questions</a></li>
                                 <li><a href="#">Terms & Conditions</a></li>
                                 <li><a href="#">Privacy Policy</a></li>
                                 <li><a href="#">Privacy Policy</a></li>
                                 <li><a href="#">Report a Payment Issue</a></li>
                             </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer bottom -->
                <div class="row">
                 <div class="col-xl-7 col-lg-7 col-md-7">
                     <div class="footer-copy-right">
                         <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>                </div>
                 </div>
                  <div class="col-xl-5 col-lg-5 col-md-5">
                     <div class="footer-copy-right f-right">
                         <!-- social -->
                         <div class="footer-social">
                             <a href="#"><i class="fab fa-twitter"></i></a>
                             <a href="#"><i class="fab fa-facebook-f"></i></a>
                             <a href="#"><i class="fab fa-behance"></i></a>
                             <a href="#"><i class="fas fa-globe"></i></a>
                         </div>
                     </div>
                 </div>
             </div>
            </div>
        </div>
    
        <!-- Footer End-->
    </footer>
    @endsection



@section('js-index')
    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{asset('')}}./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{asset('')}}./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{asset('')}}./assets/js/popper.min.js"></script>
    <script src="{{asset('')}}./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{asset('')}}./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{asset('./assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('./assets/js/slick.min.js')}}"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="{{asset('./assets/js/wow.min.js')}}"></script>
    <script src="{{asset('./assets/js/animated.headline.js')}}"></script>
    
    <!-- Scrollup, nice-select, sticky -->
    <script src="{{asset('./assets/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('./assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('./assets/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('./assets/js/jquery.magnific-popup.js')}}"></script>

    <!-- contact js -->
    <script src="{{asset('./assets/js/contact.js')}}"></script>
    <script src="{{asset('./assets/js/jquery.form.js')}}"></script>
    <script src="{{asset('./assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('./assets/js/mail-script.js')}}"></script>
    <script src="{{asset('./assets/js/jquery.ajaxchimp.min.js')}}"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="{{asset('./assets/js/plugins.js')}}"></script>
    <script src="{{asset('./assets/js/main.js')}}"></script>
@endsection






