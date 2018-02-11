<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <title>TERBANG KEMANA</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Gallivant Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->
    <!-- Style-sheets -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/team.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('css/jquery-ui') }}" /><!-- // calendar -->
    <!-- // Style-sheets -->
    <!-- Online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Montserrat:100,200,400,500,600" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('bower_components/morris.js/morris.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('bower_components/jvectormap/jquery-jvectormap.css') }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
    <!--// Online-fonts -->

</head>

<body>
    <!--Header-->
    <div class="header" id="home">
        <!--top-bar-w3-agile-->
        <div class="top-bar-w3-agile">
            <div class="container">
                <div class="header-top-agileits">
                    <div class="agile_forms">
                        <p><span class="fa fa-map-marker" aria-hidden="true"></span>23046 Three Notch Road California</p>
                    </div>
                    <ul class="top-right-info-w3ls">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>

                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="header-nav">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            <h1><a class="navbar-brand" href="index.html">TERBANG<span>KEMANA</span></a></h1>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                            <nav class="cl-effect-15" id="cl-effect-15">
                                <ul>
                                    <li><a href="#home" class="active" data-hover="Home">Home</a></li>
                                    <li><a href="about.html" data-hover="About">About</a></li>
                                    <li><a href="gallery.html" data-hover="Gallery">Gallery</a></li>
                                    <li><a href="contact.html" data-hover="Contact">Contact</a></li>
                                    @if (Route::has('login'))
                                    @auth
                                    <li class="dropdown menu__item">
                                        <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" data-hover="Hi, {{ Auth::user()->name }}" role="button" aria-haspopup="true"
                                            aria-expanded="false">Hi, {{ Auth::user()->name }}<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
                                        </ul>
                                    </li>
                                    @else
                                    <li class="dropdown menu__item">
                                        <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" data-hover="Login" role="button" aria-haspopup="true"
                                            aria-expanded="false">Login<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('login') }}">login</a></li>
                                            <li><a href="{{ route('register') }}">Register</a></li>
                                        </ul>
                                    @endauth
                                    </li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </nav>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--//top-bar-w3-agile-->
        <!--Slider-->
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider">
                    <li>
                        <div class="slider-img-w3layouts one">
                            <div class="container">
                                <div class="slider-info">
                                    <h3>Ultimate winter experience provider.</h3>
                                    <p>Lorem ipsum dolor amet, consectetur adipiscing elit.</p>
                                    <div class="readmore-w3-agileits"><a href="#" data-toggle="modal" data-target="#myModal1">Know More</a></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slider-img-w3layouts two">
                            <div class="container">
                                <div class="slider-info">
                                    <h3>Thai wonder, hidden in the jungle.</h3>
                                    <p>Curabitur laoreet Nunc condimentum laoreet.</p>
                                    <div class="readmore-w3-agileits"><a href="#" data-toggle="modal" data-target="#myModal1">Know More</a></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slider-img-w3layouts three">
                            <div class="container">
                                <div class="slider-info">
                                    <h3>Going deep into the isle of hawaii.</h3>
                                    <p>Lorem ipsum dolor amet, consectetur adipiscing elit.</p>
                                    <div class="readmore-w3-agileits"><a href="#" data-toggle="modal" data-target="#myModal1">Know More</a></div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>
            <div class="clearfix"></div>
        </div>
        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
            <!-- Modal1 -->
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4>Gallivant</h4>
                        <img src="images/bann2.jpg" alt=" " class="img-responsive">
                        <h5>Lorem Ipsum</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                            natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Modal1 -->
        <!--//Slider-->
    </div>
    <!--//Header-->
    <!--banner form-->
    <div id="horizontalTab">
        <ul class="resp-tabs-list">
            <li>Flights</li>
        </ul>
        <div class="resp-tabs-container">
            <div class="tab2">
                <div class="register">
                    <form action="{{ route('book.carimaskapai') }}" method="get">
                        <div class="col-md-6 fields">
                            <span>From</span>
                            <select class="form-control" name="rute_form">
                                        <option value="" disabled selected>----</option>
                                        <option value="Denpasar">   Denpasar</option>
                                        <option value="Jakarta">Jakarta</option>
                                        <option value="Bandung">Bandung</option>
                                        <option value="Jayapura">Jayapura</option>
                                        <option value="Pontianak">Pontianak</option>
                                        <option value="Palembang">Palembang</option>
                                        <option value="Makasar">Makasar</option>
                                    </select>
                        </div>
                        <div class="col-md-6 fields">
                            <span>To</span>
                            <select class="form-control" name="rute_to">
                                        <option value="" disabled selected>----</option>
                                        <option value="Denpasar">   Denpasar</option>
                                        <option value="Jakarta">Jakarta</option>
                                        <option value="Bandung">Bandung</option>
                                        <option value="Jayapura">Jayapura</option>
                                        <option value="Pontianak">Pontianak</option>
                                        <option value="Palembang">Palembang</option>
                                        <option value="Makasar">Makasar</option>
                                    </select>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-3 fields">
                            <span>Departing</span>
                            <input type="text" class="form-control" id="datepicker2" data-date-format="yyyy-mm-dd"
                                placeholder="yyyy-mm-dd"name="depart_at" />
                        </div>
                        <div class="col-md-2 fields">
                            <span>Adults</span>
                            <select class="form-control" name="seat">
                                        <option>select</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>More than 5</option>
                                    </select>
                        </div>
                         <div class="col-md-2 fields">
                            <input type="submit" value="Submit">
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--//banner form-->
    <!--sevices-->
    <div class="sevices-w3layouts" id="services">
        <div class="container">
            <h3 class="tittle white">Why we are the best</h3>
            <div class="row">
                <div class="col-md-4 sevices-grid text-right">
                    <div class="icon">
                        <span class="fa fa-plane" aria-hidden="true"></span>
                        <h4>Amazing Travel</h4>
                    </div>
                    <p class="para-agileits">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                </div>
                <div class="col-md-4 sevices-grid text-center">
                    <div class="icon">
                        <span class="fa fa-thumbs-up" aria-hidden="true"></span>
                        <h4>Handpicked Hotels</h4>
                    </div>
                    <p class="para-agileits">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="col-md-4 sevices-grid text-left">
                    <div class="icon">
                        <span class="fa fa-users" aria-hidden="true"></span>
                        <h4>Nice Support</h4>
                    </div>
                    <p class="para-agileits">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="col-md-6 sevices-grid text-right">
                    <div class="icon">
                        <span class="fa fa-briefcase" aria-hidden="true"></span>
                        <h4>World class services</h4>
                    </div>
                    <p class="para-agileits">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut metus sit amet magna vehicula eleifend in in urna.</p>
                </div>
                <div class="col-md-6 sevices-grid text-left">
                    <div class="icon">
                        <span class="fa fa-credit-card-alt" aria-hidden="true"></span>
                        <h4>Best Price Guarantee</h4>
                    </div>
                    <p class="para-agileits">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut metus sit amet magna vehicula eleifend in in urna.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--//sevices-->
    <!--blog -->
    <div class="blog" id="blog">
        <div class="container">
            <h3 class="tittle">Blog</h3>
            <div class="blog-grid-w3-agileits">
                <div class=" col-md-7 blog-img blog-img1-agileits-w3layouts">
                    <a href="#" data-toggle="modal" data-target="#myModal2">
                        <h6>Cinque terre town italy village</h6>
                        <p><span class="fa fa-clock-o" aria-hidden="true"></span>12 feb 2017</p>
                    </a>
                </div>
                <div class=" col-md-5 blog-info-w3layouts">
                    <div class="inner-info-w3ls">
                        <h5>Italy</h5>
                        <p class="para-agileits">Aenean pulvinar diam vel felis volutpat dictum, suscipit sapien scelerisque tempus non mollis massa. Aenean ac tellus
                            suscipit sapien scelerisque tempus non mollis massa.</p>
                    </div>
                    <a href="#" class="blog-more-agile" data-toggle="modal" data-target="#myModal2">Read More</a>

                </div>
                <div class="clearfix"></div>
            </div>
            <div class="blog-grid-w3-agileits">
                <div class=" col-md-5 blog-info-w3layouts blog-mid">
                    <div class="inner-info-w3ls-mid">
                        <h5>Paris</h5>
                        <p class="para-agileits">Aenean pulvinar diam vel felis volutpat dictum, suscipit sapien scelerisque tempus non mollis massa. Aenean ac tellus
                            suscipit sapien scelerisque tempus non mollis massa.</p>
                    </div>
                    <a href="#" class="blog-more-agile" data-toggle="modal" data-target="#myModal3">Read More</a>

                </div>
                <div class=" col-md-7 blog-img blog-img2-agileits-w3layouts">
                    <a href="#" data-toggle="modal" data-target="#myModal3">
                        <h6>Paris france french Eiffel tower</h6>
                        <p><span class="fa fa-clock-o" aria-hidden="true"></span>21 Jan 2017</p>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="blog-grid-w3-agileits">
                <div class=" col-md-7 blog-img blog-img3-agileits-w3layouts">
                    <a href="#" data-toggle="modal" data-target="#myModal4">
                        <h6>San francisco California city urban</h6>
                        <p><span class="fa fa-clock-o" aria-hidden="true"></span>01 Jan 2017</p>
                    </a>
                </div>
                <div class=" col-md-5 blog-info-w3layouts">
                    <div class="inner-info-w3ls">
                        <h5>California</h5>
                        <p class="para-agileits">Aenean pulvinar diam vel felis volutpat dictum, suscipit sapien scelerisque tempus non mollis massa. Aenean ac tellus
                            suscipit sapien scelerisque tempus non mollis massa.</p>
                    </div>
                    <a href="#" class="blog-more-agile" data-toggle="modal" data-target="#myModal4">Read More</a>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //blog -->
    <!-- Modal2 -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Gallivant</h4>
                    <img src="images/g2.jpg" alt=" " class="img-responsive">
                    <h5>Cinque terre town italy village</h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                        natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- //Modal2 -->
    <!-- Modal3 -->
    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Gallivant</h4>
                    <img src="images/g5.jpg" alt=" " class="img-responsive">
                    <h5>Paris france french Eiffel tower</h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                        natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- //Modal3 -->
    <!-- Modal4 -->
    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Gallivant</h4>
                    <img src="images/g7.jpg" alt=" " class="img-responsive">
                    <h5>San francisco California city urban</h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                        natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- //Modal4 -->

    <!-- //blog -->

    <!-- testimonials -->
    <div id="testimonials" class="testimonials">
        <div class="container">
            <h3 class="tittle">Travellers Feedback</h3>
        </div>
        <div class="test-monials">
            <!--//screen-gallery-->
            <div class="col-md-5 text-image-agileits-w3layouts">

            </div>
            <div class="col-md-7 sreen-gallery-cursual">
                <div id="owl-demo" class="owl-carousel">
                    <div class="item-owl">
                        <div class="test-review">
                            <div class="img-agile">
                                <img src="images/c1.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="testi-right-agileits">
                                <h5>Williamson<span> - Italy</span></h5>
                                <ul class="top-right-info-w3ls">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                            <div class="textagile">
                                <p> At vero eos et accusam et justo duo dolores et ea rebum stet kasd gubergren sed diam aliquyamerat, sed voluptua labore
                                    et doloremagnal aliquyamerat, sed diam voluptua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-owl">
                        <div class="test-review">
                            <div class="img-agile">
                                <img src="images/c2.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="testi-right-agileits">
                                <h5>Kristina<span> - Spain</span></h5>
                                <ul class="top-right-info-w3ls">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                            <div class="textagile">
                                <p> At vero eos et accusam et justo duo dolores et ea rebum stet kasd gubergren sed diam aliquyamerat, sed voluptua labore
                                    et doloremagnal aliquyamerat, sed diam voluptua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-owl">
                        <div class="test-review">
                            <div class="img-agile">
                                <img src="images/c3.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="testi-right-agileits">
                                <h5>Williamson<span> - Egypt</span></h5>
                                <ul class="top-right-info-w3ls">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                            <div class="textagile">
                                <p> At vero eos et accusam et justo duo dolores et ea rebum stet kasd gubergren sed diam aliquyamerat, sed voluptua labore
                                    et doloremagnal aliquyamerat, sed diam voluptua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--// testimonials -->
    <!-- Footer -->
    <div class="reach-wthree">
        <div class="container">
            <h3>Reach Us</h3>
            <div class="reach-right-agileits-w3layouts">
                <p>23046 Three Notch Road California,</p>
                <p>MD 20619, USA</p>
                <h6><span class="fa fa-phone" aria-hidden="true"></span> (+0) 123-456-7890</h6>
            </div>
        </div>
    </div>
    <div class="w3l_footer_agileinfo">
        <div class="container">
            <div class="col-md-3 mailadd-w3ls">
                <p><span class="fa fa-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
            <div class="col-md-6 botttom-nav-agileits">
                <ul class="nav-w3ls">
                    <li><a href="#home" class="scroll">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-3 w3l-social">
                <ul class="top-right-info-w3ls">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                </ul>
            </div>

            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //Footer -->
    <!--Copy-right-->
    <div class="copy">
        <div class="container">
            <h2><a href="index.html"><span>G</span>allivant</a></h2>
            <p>© 2017 Gallivant . All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!--// Copy-right -->
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <!-- //js -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                pager: false,
                nav: true,
                speed: 1000,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });
        });
    </script>
    <!-- About-Responsiveslides -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: false,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });
        });
    </script>
    <!--// About-Responsiveslides -->
    <!--Rersponsive tabs-->
    <script src="js/easy-responsive-tabs.js"></script>
    <script>
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function (event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
            $('#verticalTab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true
            });
        });
    </script>
    <!-- //Rersponsive tabs -->

    <!-- testimonials required-js-files-->
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({
                items: 1,
                lazyLoad: true,
                autoPlay: true,
                navigation: false,
                navigationText: false,
                pagination: true,
            });
        });
    </script>
    <!--// testimonials required-js-files-->

    <!--search-bar-->
    <script src="{{ asset('js/main.js') }}"></script>
    <!--//search-bar-->


    <!-- Calendar -->
    <script src="{{ asset('js/jquery-ui.js')}}"></script>
    <script>
        $(function () {
            $("#datepicker,#datepicker1,#datepicker2,#datepicker3,#datepicker4,#datepicker5").datepicker();
        });
    </script>
    <!-- //Calendar -->
    <!-- smooth scrolling -->
    <script type="text/javascript">
        $(document).ready(function () {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
    </script>

    <a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    <!-- //smooth scrolling -->
    <script type="text/javascript" src="{{ asset('js/bootstrap-3.1.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('bower_components/morris.js/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
</body>
</html>
