<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ComeToUs : Home</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="{{asset('images/logo.png')}}"/>

    <!-- CSS
    ================================================== -->
    <!-- Bootstrap css file-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Default Theme css file -->
    <link id="switcher" href="{{asset('css/themes/green-theme.css')}}" rel="stylesheet">
    <!-- Slick slider css file -->
    <link href="{{asset('css/slick.css')}}" rel="stylesheet">
    <!-- Photo Swipe Image Gallery -->
    <link rel='stylesheet prefetch' href='{{asset('css/photoswipe.css')}}'>
    <link rel='stylesheet prefetch' href='{{asset('css/default-skin.css')}}'>

    <!-- Main structure css file -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Habibi' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative:900' rel='stylesheet' type='text/css'>


<html lang="en">
  <head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Come to Us : Home</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


  </head>
  <body>

    <!-- BEGAIN PRELOADER -->
    <div id="preloader">
      <div id="status" style="background-image:url('{{asset("images/status.gif")}}');">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-check-circle"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
              <!-- TEXT BASED LOGO -->
              <a class="navbar-brand" href="{{url('home')}}"><i class="fa fa-check-circle-o"></i>Come <span>to Us</span></a>
              <!-- IMG BASED LOGO  -->
              <!--  <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>   -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li class="active"><a href="{{url('home')}}">Home</a></li>
                <li><a href="{{url('counselors')}}">Counselors</a></li>
                <li><a href="{{url('elements')}}">Elements Of ComeToUs</a></li>
                <li><a href="{{url('self_assessment')}}">Free Self-Assessment</a></li>
                <li><a href="{{url('appointment')}}">Appointment</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
      </div>
      <!-- END MENU -->
    </header>
    <!--=========== END HEADER SECTION ================-->

    <!--=========== BEGIN SLIDER SECTION ================-->
    <section id="sliderArea">
      <!-- Start slider wrapper -->
      <div class="top-slider">
        <!-- Start First slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="{{asset('images/counseling2.png')}}" alt="">
          </div>
          <div class="slider-text">
            <h2><strong>Come to Us</strong></h2>
            <p><strong>In our safe and non-judgmental environment, you can freely express your thoughts and feelings</strong></p>
            <div class="readmore_area">
              <a data-hover="Read Our Elements" href="{{url('elements')}}"><span>Read Our Elements</span></a>
            </div>
          </div>
        </div>
        <!-- End First slide -->

        <!-- Start 2nd slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="{{asset('images/counseling3.jfif')}}" alt="">
          </div>
          <div class="slider-text">
            <h2><strong>Come to Us</strong></h2>
            <p><strong>Take the first step towards positive change by contacting us to schedule a counseling session today</strong></p>
            <div class="readmore_area">
              <a data-hover="Read Our Elements" href="{{url('elements')}}"><span>Read Our Elements</span></a>
            </div>
          </div>
        </div>
        <!-- End 2nd slide -->

        <!-- Start Third slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="{{asset('images/counseling4.jfif')}}" alt="">
          </div>
          <div class="slider-text">
            <h2><strong>Come to Us</strong></h2>
            <p><strong>We'll provide you with support, guidance, and feedback to help you achieve your goals and improve your mental health and well-being</strong></p>
            <div class="readmore_area">
              <a data-hover="Read Our Elements" href="{{url('elements')}}"><span>Read Our Elements</span></a>
            </div>
          </div>
        </div>
        <!-- End Third slide -->

        <!-- Start Fourth slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="{{asset('images/counseling5.jfif')}}" alt="">
          </div>
          <div class="slider-text">
            <h2><strong>Come to Us</strong></h2>
            <p><strong>Don't let challenges hold you back from living a fulfilling life</strong></p>
            <div class="readmore_area">
              <a data-hover="Read Our Elements" href="{{url('elements')}}"><span>Read Our Elements</span></a>
            </div>
          </div>
        </div>
        <!-- End Fourth slide -->

        <!-- Start Fifth slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="{{asset('images/counseling6.jfif')}}" alt="">
          </div>
          <div class="slider-text">
            <h2><strong>Come to Us</strong></h2>
            <p><strong>Our experienced and compassionate therapists are here to provide you with confidential and professional counseling services</strong></p>
            <div class="readmore_area">
              <a data-hover="Read Our Elements" href="{{url('elements')}}"><span>Read Our Elements</span></a>
            </div>
          </div>
        </div>
        <!-- End Fifth slide -->
      </div><!-- /top-slider -->
    </section>
    <!--=========== END SLIDER SECTION ================-->

    <!--=========== BEGIN Top Feature SECTION ================-->
    <section id="topFeature">
      <div class="row">
        <!-- Start Single Top Feature -->
        <div class="col-lg-6 col-md-6">
          <div class="row">
            <div class="single-top-feature">
              <span class="fa fa-home"></span>
              <h3>Location</h3>
              <p>Easily Accessible Counseling Services in Yangon!</p><br>
              <p>Myanmar Institute of Theology,<br>
                Seminary Hill, <br>
                Insein, Yangon, Myanmar <br>
                Office : +95-1-641388</p>
            </div>
          </div>
        </div>
        <!-- End Single Top Feature -->

        <!-- Start Single Top Feature -->
        <div class="col-lg-6 col-md-6">
          <div class="row">
            <div class="single-top-feature opening-hours">
              <span class="fa fa-clock-o"></span>
              <h3>Opening Hours</h3>
              <p>Convenient Opening Hours for Your Mental Health Needs!</p><br>
              <ul class="opening-table">
                <li>
                  <span>Monday - Friday</span>
                  <div class="value">10:00AM - 16:00PM</div>
                </li>
                <li>
                  <span>Saturday</span>
                  <div class="value">9:00AM - 13:00PM</div>
                </li>
                <li>
                  <span>Sunday</span>
                  <div class="value text-danger">Closed</div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End Single Top Feature -->


      </div>
    </section>
    <!--=========== END Top Feature SECTION ================-->

    <!--=========== BEGIN Service SECTION ================-->
    <section id="service">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="service-area">
              <!-- Start Service Title -->
              <div class="section-heading">
                <h2>Our Services</h2>
                <div class="line"></div>
              </div>
              <!-- Start Service Content -->
              <div class="service-content">
                <div class="row">
                  <!-- Start Single Service -->
                  <div class="col-lg-4 col-md-4">
                    <div class="single-service">
                      <div class="service-icon">
                        <span class="fa fa-male service-icon-effect"></span>
                      </div>
                      <h3>Individual Counseling</h3>
                      <p>a process through which clients work one-on-one with a trained mental health clinician in a safe, caring, and confidential environment</p>
                    </div>
                  </div>

                  <!-- Start Single Service -->
                  <div class="col-lg-4 col-md-4">
                    <div class="single-service">
                      <div class="service-icon">
                        <span class="fa fa-heart service-icon-effect"></span>
                      </div>
                      <h3>Couple Counseling</h3>
                      <p>couples therapy or marriage counseling, is a form of therapy that is designed to help couples who are experiencing difficulties in their relationship</p>
                    </div>
                  </div>

                  <!-- Start Single Service -->
                  <div class="col-lg-4 col-md-4">
                    <div class="single-service">
                      <div class="service-icon">
                        <span class="fa fa-group service-icon-effect"></span>
                      </div>
                      <h3>Family Counseling</h3>
                      <p>family therapy or family counseling, a form of treatment that is designed to address specific issues affecting the health and functioning of a family</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== End Service SECTION ================-->

    <!--=========== BEGAIN Why Choose Us SECTION ================-->
    <section id="whychooseSection">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="service-area">
              <!-- Start Service Title -->
              <div class="section-heading">
                <h2>Why Choose Us</h2>
                <div class="line"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <div class="row">
              <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                <div class="whyChoose-left">
                  <div class="whychoose-slider top-slider" >
                    <div class="whychoose-singleslide-index">
                      <img src="{{asset('images/counseling7.webp')}}" alt="img">
                    </div>
                    <div class="whychoose-singleslide-index">
                      <img src="{{asset('images/counseling9.jfif')}}" alt="img">
                    </div>
                    <div class="whychoose-singleslide-index">
                      <img src="{{asset('images/counseling10.png')}}" alt="img">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
                <div class="whyChoose-right">
                  <div class="media">
                    <div class="media-left">
                      <p class="media-icon">
                        <span class="fa fa-heart-o"></span>
                      </p>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Mental Health</h4>
                      <p>Counseling can help individuals develop coping skills, manage symptoms, gain insight into thoughts and behaviors, and improve overall well-being</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <p class="media-icon">
                        <span class="fa fa-user"></span>
                      </p>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Professional Counselors</h4>
                      <p>Our professional counselors are here to help with compassionate and confidential counseling services, we provide tailored support for anxiety, depression, stress, and more</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <p class="media-icon">
                        <span class="fa fa-plus-square-o"></span>
                      </p>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Personal Growth and Self-Improvement</h4>
                      <p>Counseling can help individuals identify and overcome obstacles, set and achieve goals, develop healthy coping skills, and enhance their self-esteem and self-confidence</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END Why Choose Us SECTION ================-->



    <!--=========== Start Footer SECTION ================-->
    <footer id="footer">

      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>About Us</h2>
                <div class="line"></div>
              </div>
              <p>ComeToUs is an organization with the mission to make effective mental health services accessible to everyone.
                 We create accessible, effective, and confidential therapy programs and deliver these therapy programs to help people improve their mental health.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>Our Service</h2>
                <div class="line"></div>
              </div>
              <ul class="footer-service">
                <li><a href="#"><span class="fa fa-check"></span>Individual Counseling</a></li>
                <li><a href="#"><span class="fa fa-check"></span>Couple Counseling</a></li>
                <li><a href="#"><span class="fa fa-check"></span>Family Counseling</a></li>
              </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>Tags</h2>
                <div class="line"></div>
              </div>
                <ul class="tag-nav">
                    <li><a href="{{url('appointment')}}">Appointment</a></li>
                    <li><a href="{{url('elements')}}">Elements Of ComeToUs</a></li>
                    <li><a href="{{url('counselors')}}">Counselors</a></li>
                    <li><a href="{{url('self_assessment')}}">Self-Assessment</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>Contact Info</h2>
                <div class="line"></div>
              </div>
              <address class="contact-info">
                <p><span class="fa fa-home"></span>Myanmar Institute of Theology,
                  Seminary Hill, Insein, Yangon, Myanmar</p>
                <p><span class="fa fa-phone">  +95-1-641388</span></p>
                <p><span class="fa fa-envelope"> administration@mit.edu.mm</span></p>
              </address>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-middle">
        <div class="container">
          <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="footer-copyright">
              <p>&copy; Copyright2023 <a href="index.html">ComeToUs</a></p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="footer-social">
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-google-plus"></span></a>
                <a href="#"><span class="fa fa-linkedin"></span></a>
            </div>
          </div>
        </div>
        </div>
      </div>

    </footer>
    <!--=========== End Footer SECTION ================-->

    <!-- jQuery Library  -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <!-- Bootstrap default js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- slick slider -->
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/modernizr.custom.79639.js')}}"></script>
    <!-- counter -->
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <!-- Doctors hover effect -->
    <script src="{{asset('js/snap.svg-min.js')}}"></script>
    <script src="{{asset('js/hovers.js')}}"></script>
    <!-- Photo Swipe Gallery Slider -->
    <script src='{{asset('js/photoswipe.min.js')}}'></script>
    <script src='{{asset('js/photoswipe-ui-default.min.js')}}'></script>
    <script src="{{asset('js/photoswipe-gallery.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{asset('js/custom.js')}}"></script>

  </body>
</html>
