<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags For Seo + Page Optimization -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Themes Industry">
    <!-- description -->
    <meta name="description" content="Woman Store is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and HTML5 template with 14 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords" content="creative, modern, clean, bootstrap responsive, h tml5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, faq">
    <!-- Page Title -->
    <title>Book Store | Home</title>
    <!-- Favicon -->
    <link rel="icon" href="/dummy-img/favicon.ico">
    <!-- Bundle -->
    <link rel="stylesheet" href="{{asset('vendor/css/bundle.min.css')}}">
    <!-- Plugin Css -->
    <link rel="stylesheet" href="{{asset('vendor/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/css/cubeportfolio.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/css/wow.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/css/LineIcons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/range-slider.css')}}">
    <!-- Slider Setting Css  -->
    <link rel="stylesheet" href="{{asset('css/settings.css')}}">
    <!-- Mega Menu  -->
    <link rel="stylesheet" href="{{asset('css/megamenu.css')}}">
    <!-- StyleSheet  -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Custom Css  -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    
</head>
<body>
    
    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="fa fa-angle-up"></i></a>
    
    <!--LOADER-->
    <div class="loader">
        <div class="loader-spinner"></div>
    </div>
    <!--LOADER-->
    
    <!-- START HEADER NAVIGATION -->
    <div class="header-area">
        <div class="container">
            <div class="row upper-nav">
                <div class=" text-left nav-logo">
                    <a href="index-book-shop.html" class="navbar-brand"><img src="{{asset('img/logo.png')}}" alt="img"></a>
                </div>
                
                @include('layouts.menutop')
                
            </div>
        </div>
    </div>
    <!-- END HEADER NAVIGATION -->
    
    @yield('content')
    
    <!--footer1 sec start-->
    <div class="footer">
        <div class="container">
            <div class="row footer-container">
                <div class="col-sm-12 col-lg-4 f-sec1  text-center text-lg-left">
                    <h4 class="high-lighted-heading">About Us</h4>
                    <p>We take our mission of increasing our global access to quality education seriously. </p>
                    <a href="#">Read more</a>
                    <h4>Social Network</h4>
                    <div class="s-icons">
                        <ul class="social-icons-simple">
                            <li><a href="javascript:void(0)" class="facebook-bg-hvr"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0)" class="twitter-bg-hvr"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
                            <li><a href="javascript:void(0)" class="instagram-bg-hvr"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-5 f-sec2 ">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h4 class="text-center text-md-left">Information</h4>
                            <ul class="text-center text-md-left">
                                <li><a href="javascript:void(0)">About Us</a></li>
                                <li><a href="javascript:void(0)">Delivery Information</a></li>
                                <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                <li><a href="javascript:void(0)">Terms & Condition</a></li>
                                <li><a href="javascript:void(0)">FAQ</a></li>
                                <li><a href="book-shop/contact.html">Contact Us</a></li>
                                <li><a href="book-shop/product-listing.html">Products</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-6">
                            <h4 class="text-center text-md-left">Account Info</h4>
                            <ul class="text-center text-md-left">
                                <li><a href="javascript:void(0)">Login & Register</a></li>
                                <li><a href="book-shop/shop-cart.html">Order History</a></li>
                                <li><a href="javascript:void(0)">Shipping Info</a></li>
                                <li><a href="javascript:void(0)">Refund Policy</a></li>
                                <li><a href="javascript:void(0)">Responsive Website</a></li>
                                <li><a href="javascript:void(0)">Subscription</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-3 f-sec3  text-center text-lg-left">
                    <h4>Our Portfolio</h4>
                    <div class="foot-tag-list">
                        <span>Classic</span>
                        <span>Journal</span>
                        <span>History</span>
                        <span>Poetry</span>
                        <span>Dictionary</span>
                        <span>Shopping</span>
                        <span>Fantasy</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 footer_notes">
                    <p class="whitecolor text-center w-100 wow fadeInDown">&copy; 2020 MegaOne. Made With Love by <a class="web-link" href="http://www.themesindustry.com/" target="_blank">Themesindustry</a></p>
                </div>
            </div>
        </div>
    </div>
    <!--foo0ter1 sec end-->
    
    <!--START SEARCH AREA-->
    <div class="search-box-overlay">
        <a><i class="fas fa-times cross-sign" id="close-window"></i></a>
        
        <div class="container">
            <div class="row">
                <div class="col-12 search-col">
                    <form action="javascript:void(0)">
                        <div class="input-group search-box-form">
                            <input type="text" class="form-control" placeholder="Search Here" aria-label="Search Here">
                            <div class="input-group-prepend">
                                <button class="input-group-text" type="submit" id="basic-addon1"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="search-listing row">
                    <div class="col-12 mb-4">
                        <h4 class="">Filtered Items</h4>
                    </div>
                    <div class="col-12">
                        <div class="listing-search-scroll">
                            <div class="media row">
                                <div class="img-holder ml-1 mr-2 col-4">
                                    <a href="javascript:void(0)"><img src="book-shop/img/book-1.jpg" class="align-self-center" alt="cartitem"></a>
                                </div>
                                <div class="media-body mt-auto mb-auto col-8">
                                    <h5 class="name"><a href="javascript:void(0)">So Sad Today</a></h5>
                                    <p class="category">Award Winning Book</p>
                                    <a class="btn black-sm-btn" href="book-shop/shop-cart.html"><i class="fas fa-shopping-bag"></i></a>
                                    <a class="btn black-sm-btn" href="javascript:void(0)"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="media row">
                                <div class="img-holder ml-1 mr-2 col-4">
                                    <a href="javascript:void(0)"><img src="book-shop/img/book-2.jpg" class="align-self-center" alt="cartitem"></a>
                                </div>
                                <div class="media-body mt-auto mb-auto col-8">
                                    <h5 class="name"><a href="javascript:void(0)">As I Lay Dying</a></h5>
                                    <p class="category">Award Winning Book</p>
                                    <a class="btn black-sm-btn" href="book-shop/shop-cart.html"><i class="fas fa-shopping-bag"></i></a>
                                    <a class="btn black-sm-btn" href="javascript:void(0)"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="media row">
                                <div class="img-holder ml-1 mr-2 col-4">
                                    <a href="javascript:void(0)"><img src="book-shop/img/book-3.jpg" class="align-self-center" alt="cartitem"></a>
                                </div>
                                <div class="media-body mt-auto mb-auto col-8">
                                    <h5 class="name"><a href="javascript:void(0)">Love Does</a></h5>
                                    <p class="category">Award Winning Book</p>
                                    <a class="btn black-sm-btn" href="book-shop/shop-cart.html"><i class="fas fa-shopping-bag"></i></a>
                                    <a class="btn black-sm-btn" href="javascript:void(0)"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="media row">
                                <div class="img-holder ml-1 mr-2 col-4">
                                    <a href="javascript:void(0)"><img src="book-shop/img/book-2-1.jpg" class="align-self-center" alt="cartitem"></a>
                                </div>
                                <div class="media-body mt-auto mb-auto col-8">
                                    <h5 class="name"><a href="javascript:void(0)">The Last Stand</a></h5>
                                    <p class="category">Award Winning Book</p>
                                    <a class="btn black-sm-btn" href="book-shop/shop-cart.html"><i class="fas fa-shopping-bag"></i></a>
                                    <a class="btn black-sm-btn" href="javascript:void(0)"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <hr>
                </div>
                
                <div class="col-12">
                    <h4 class="outlet-title text-center"> - Author - </h4>
                </div>
                
                <div class="col-12">
                    <div class="search-box-meida-items owl-carousel owl-theme">
                        
                        <div class="item">
                            <div class="brand-search-box ml-auto mr-auto">
                                <div class="media">
                                    <div class="brand-box-holder">
                                        <a href="javascript:void(0)"> <img class="mr-3" src="book-shop/img/author1.jpg" alt="Generic placeholder image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0"><a href="javascript:void(0)"> Eva Smith</a></h5>
                                        <p> Cras sit amet nibh libero.</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="item">
                            <div class="brand-search-box ml-auto mr-auto">
                                <div class="media">
                                    <div class="brand-box-holder">
                                        <a href="javascript:void(0)"> <img class="mr-3" src="book-shop/img/author2.jpg" alt="Generic placeholder image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0"><a href="javascript:void(0)">Rosa Parks</a></h5>
                                        <p> Cras sit amet nibh libero.</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="item">
                            <div class="brand-search-box ml-auto mr-auto">
                                <div class="media">
                                    <div class="brand-box-holder">
                                        <a href="javascript:void(0)"> <img class="mr-3" src="book-shop/img/author3.jpg" alt="Generic placeholder image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0"><a href="javascript:void(0)">Alan Yang</a></h5>
                                        <p> Cras sit amet nibh libero.</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="item">
                            <div class="brand-search-box ml-auto mr-auto">
                                <div class="media">
                                    <div class="brand-box-holder">
                                        <a href="javascript:void(0)"><img class="mr-3" src="book-shop/img/author4.jpg" alt="Generic placeholder image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0"><a href="javascript:void(0)">Kam John</a></h5>
                                        <p> Cras sit amet nibh libero.</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!--END SEARCH AREA -->
    
    <!--START Cart Box-->
    <div class="cart-box-overlay">
        <a><i class="fas fa-times cross-sign" id="close-window1"></i></a>
        
        <div class="container">
            <div class="row">
                <div class="search-listing row">
                    <div class="col-12 mb-4">
                        <h4 class="">Shop Cart</h4>
                    </div>
                    <div class="col-12">
                        <div class="listing-search-scroll">
                            <div class="media row">
                                <div class="img-holder ml-1 mr-2 col-4">
                                    <a href="javascript:void(0)"><img src="book-shop/img/book-1.jpg" class="align-self-center" alt="cartitem"></a>
                                </div>
                                <div class="media-body mt-auto mb-auto col-8">
                                    <h5 class="name"><a href="javascript:void(0)">So Sad Today</a></h5>
                                    <p class="category">light wear Lastest</p>
                                    <a class="btn black-sm-btn" href="book-shop/shop-cart.html"><i class="fas fa-shopping-bag"></i></a>
                                    <a class="btn black-sm-btn"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="media row">
                                <div class="img-holder ml-1 mr-2 col-4">
                                    <a href="javascript:void(0)"><img src="book-shop/img/book-2.jpg" class="align-self-center" alt="cartitem"></a>
                                </div>
                                <div class="media-body mt-auto mb-auto col-8">
                                    <h5 class="name"><a href="javascript:void(0)">As I Lay Dying</a></h5>
                                    <p class="category">light wear Lastest</p>
                                    <a class="btn black-sm-btn" href="book-shop/shop-cart.html"><i class="fas fa-shopping-bag"></i></a>
                                    <a class="btn black-sm-btn" href="javascript:void(0)"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="media row">
                                <div class="img-holder ml-1 mr-2 col-4">
                                    <a href="javascript:void(0)"><img src="book-shop/img/book-3.jpg" class="align-self-center" alt="cartitem"></a>
                                </div>
                                <div class="media-body mt-auto mb-auto col-8">
                                    <h5 class="name"><a href="javascript:void(0)">Love Does</a></h5>
                                    <p class="category">light wear Lastest</p>
                                    <a class="btn black-sm-btn" href="book-shop/shop-cart.html"><i class="fas fa-shopping-bag"></i></a>
                                    <a class="btn black-sm-btn" href="javascript:void(0)"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="media row">
                                <div class="img-holder ml-1 mr-2 col-4">
                                    <a href="javascript:void(0)"><img src="book-shop/img/book-2-1.jpg" class="align-self-center" alt="cartitem"></a>
                                </div>
                                <div class="media-body mt-auto mb-auto col-8">
                                    <h5 class="name"><a href="javascript:void(0)">The Last Stand</a></h5>
                                    <p class="category">light wear Lastest</p>
                                    <a class="btn black-sm-btn" href="book-shop/shop-cart.html"><i class="fas fa-shopping-bag"></i></a>
                                    <a class="btn black-sm-btn" href="javascript:void(0)"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bag-btn">
                <h4 class="total"><span>Total: </span>100$</h4>
                <a href="javascript:void(0)" class="btn green-color-yellow-gradient-btn">View Bag </a>
                <a href="javascript:void(0)" class="btn yellow-color-green-gradient-btn">Checkout </a>
            </div>
            
        </div>
        
    </div>
    <!--END Cart Box -->
    
    <!-- JavaScript -->
    <script src="{{asset('vendor/js/bundle.min.js')}}"></script>
    <!-- Plugin Js -->
    <script src="{{asset('vendor/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('vendor/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('vendor/js/swiper.min.js')}}"></script>
    <script src="{{asset('vendor/js/jquery.cubeportfolio.min.js')}}"></script>
    <script src="{{asset('vendor/js/wow.min.js')}}"></script>
    <script src="{{asset('vendor/js/bootstrap-input-spinner.js')}}"></script>
    <script src="{{asset('vendor/js/parallaxie.min.js')}}"></script>
    <script src="{{asset('vendor/js/stickyfill.min.js')}}"></script>
    <script src="{{asset('js/nouislider.min.js')}}"></script>
    
    <script src="{{asset('vendor/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('vendor/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- SLIDER REVOLUTION EXTENSIONS -->
    <script src="{{asset('vendor/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('vendor/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('vendor/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('vendor/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('vendor/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('vendor/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('vendor/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('vendor/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('vendor/js/extensions/revolution.extension.video.min.js')}}"></script>
    
    <!-- Custom Script -->
    <script src="{{asset('js/script.js')}}"></script>

</body>
</html>