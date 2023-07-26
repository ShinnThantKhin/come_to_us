<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ComeToUs : Appointment</title>
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
                <a class="navbar-brand" href="index.html"><i class="fa fa-check-circle-o"></i>Come <span>to Us</span></a>
                <!-- IMG BASED LOGO  -->
                <!--  <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>   -->
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                  <li><a href="{{url('home')}}">Home</a></li>
                  <li><a href="{{url('counselors')}}">Counselors</a></li>
                  <li><a href="{{url('elements')}}">Elements Of ComeToUs</a></li>
                  <li><a href="{{url('self_assessment')}}">Free Self-Assessment</a></li>
                  <li class="active"><a href="{{url('appointment')}}">Appointment</a></li>
                </ul>
              </div><!--/.nav-collapse -->
            </div>
          </nav>
        </div>
        <!-- END MENU -->
      </header>
      <!--=========== END HEADER SECTION ================-->
      <section id="blogArchive">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="blog-breadcrumbs-area">
              <div class="container">
                <div class="blog-breadcrumbs-left">
                  <h2>Appointment</h2>
                </div>
                <div class="blog-breadcrumbs-right">
                  <ol class="breadcrumb">
                    <li>You are here</li>
                    <li><a href="{{url('home')}}">Home</a></li>
                    <li class="active">Appointment</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!--=========== BEGIN Top Feature SECTION ================-->
    <section id="topFeature">
        <div class="row">

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

            <!-- Start Single Top Feature -->
            <div class="col-lg-6 col-md-6">
                <div class="row">
                <div class="single-top-feature">
                    <span class="fa fa-users"></span>
                    <h3>Appointment</h3><br>
                    <p>Your mental health matters, and we're here to support you on your journey to wellness.<br><strong>Call now to book your appointment!</strong></p>
                    <div class="readmore_area">
                    <a data-toggle="modal" data-target="#myModal" href="#" data-hover="Appoinment"><span>Appoinment</span></a>
                    </div>
                    <!-- start modal window -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Appoinment Details</h4>
                        </div>
                        <div class="modal-body">
                            <div class="appointment-area">
                                @if(session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            <form class="appointment-form" action="appointment" method="POST">
                                @csrf
                                <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <label class="control-label">Your name <span class="required">*</span>
                                    </label>
                                    <input type="text" required="required" class="wp-form-control wpcf7-text" placeholder="Your name" name="clientName">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <label class="control-label">Your Email <span class="required">*</span>
                                    </label>
                                    <input type="mail" required="required" class="wp-form-control wpcf7-email" placeholder="Email address" name="clientEmail">
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <label class="control-label">Your Phone <span class="required">*</span>
                                        </label>
                                        <input type="number" required="required" class="wp-form-control wpcf7-text" placeholder="Phone No" name="clientPhone">
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label class="control-label">Select Counselor <span class="required">*</span>
                                        </label>
                                        <select class="wp-form-control wpcf7-select" name="counselorName">
                                            <option val="DR.SayarGyi">DR.SayarGyi</option>
                                            <option val="Ms.ShinnThant">Ms.ShinnThant</option>
                                            <option val="DR.Ricky">DR.Ricky</option>
                                            <option val="Ms.Shun">Ms.Shun</option>
                                            <option val="DR.Joon">DR.Joon</option>
                                            <option val="Ms.Jang">Ms.Jang</option>
                                            <option val="DR.Kim">DR.Kim</option>
                                            <option val="Dr.Woong">Dr.Woong</option>
                                            <option val="Ms.Rosie">Ms.Rosie</option>
                                            <option val="Ms.Irene">Ms.Irene</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <label class="control-label">Appointment Date <span class="required">*</span>
                                    </label>
                                    <input type="date" required="required" class="wp-form-control wpcf7-text" placeholder="dd/mm/yy" name="appointmentDate">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <label class="control-label">Appointment Time <small>(open hrs)</small><span class="required">*</span>
                                    </label>
                                    <input type="text"  required="required" class="wp-form-control wpcf7-text" placeholder="--:-- AM/PM" name="appointmentTime">
                                </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <label class="control-label">Counseling Type <span class="required">*</span>
                                        </label>
                                        <select class="wp-form-control wpcf7-select" name="counselingType">
                                            <option value="Individual">Individual</option>
                                            <option value="Couple">Couple</option>
                                            <option value="Family">Family</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                                <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="What would you like to tell us" name="clientNote"></textarea>
                            <button class="wpcf7-submit button--itzel" type="submit"><i class="button__icon fa fa-share"></i><span>Book Appointment</span></button>

                            {{-- @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif --}}

                            </form>
                            </div>
                        </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
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

    <!--=========== BEGAIN Counter SECTION ================-->
    <section id="counterSection" style="background-image: url('{{asset("images/counseling6.png")}}');">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="counter-area">
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                  <div class="counter-no counter">
                    10
                  </div>
                  <div class="counter-label">Professional <br> Counseling</div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                 <div class="counter-box">
                  <div class="counter-no counter">
                    15
                  </div>
                  <div class="counter-label">Private Counseling <br> Rooms</div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                 <div class="counter-box">
                  <div class="counter-no counter">
                    90
                  </div>
                  <div class="counter-label">Counseling <br> Awards</div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                 <div class="counter-box">
                  <div class="counter-no counter">
                    250
                  </div>
                  <div class="counter-label">Improved <br> Patients</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== End Counter SECTION ================-->

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
                      <li><span class="fa fa-check"></span>Individual Counseling</li>
                      <li><span class="fa fa-check"></span>Couple Counseling</li>
                      <li><span class="fa fa-check"></span>Family Counseling</li>
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
