<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ComeToUs : Counselors</title>

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
              <a class="navbar-brand" href="{{url('home')}}"><i class="fa fa-check-circle-o"></i>Come <span>to Us</span></a>
              <!-- IMG BASED LOGO  -->
              <!--  <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>   -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li><a href="{{url('home')}}">Home</a></li>
                <li class="active"><a href="{{url('counselors')}}">Counselors</a></li>
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
    <section id="blogArchive">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="blog-breadcrumbs-area">
            <div class="container">
              <div class="blog-breadcrumbs-left">
                <h2>Counselors</h2>
              </div>
              <div class="blog-breadcrumbs-right">
                <ol class="breadcrumb">
                  <li>You are here</li>
                  <li><a href="{{url('home')}}">Home</a></li>
                  <li class="active">Counselors</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== BEGAIN Doctors SECTION ================-->
    <section id="meetDoctors">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="meetDoctors-area">
             <!-- Start Service Title -->
              <div class="section-heading">
                <h2>Meet Our Clinicians</h2>
                <div class="line"></div>
              </div>
              <!-- Doc 1st box -->
              <div class="doctors-area top-slider">
                <ul class="doctors-nav">
                  <li>
                    <div class="single-doctor">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="{{asset('images/dr.hwa2.jpg')}}" width="250" height="430">
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                            <h2>Dr. Sayar Gyi</h2>
                            <p>Psychologist</p>
                            <p>Psy.D in Psychology with 10 Years of Experience</p>
                          </figcaption>
                        </figure>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="single-doctor">
                      <div class="single-doctor">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="{{asset('images/dr.shin2.jpg')}}" width="250" height="430">
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                            <h2>Ms.Shinn Thant</h2>
                            <p>Mental Health Professional</p>
                            <p>Licensed Professional Counselor</p>
                          </figcaption>
                        </figure>
                      </a>
                    </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-doctor">
                      <div class="single-doctor">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="{{asset('images/dr,ricky.jpg')}}" width="250" height="430">
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                            <h2>Ricky</h2>
                            <p>Marriage Therapist</p>
                            <p>Specialized in Human Services Counseling, Licensed Psychologist</p>
                          </figcaption>
                        </figure>
                      </a>
                    </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-doctor">
                      <div class="single-doctor">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="{{asset('images/dr.shun.jpg')}}" width="250" height="430">
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                            <h2>Ms.Shun</h2>
                            <p> Art Therapist</p>
                            <p>Licensed Professional Counselor, Registered Art Therapist (ATR)</p>
                          </figcaption>
                        </figure>
                      </a>
                    </div>
                    </div>
                  </li>
                    <li>
                    <div class="single-doctor">
                      <div class="single-doctor">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="{{asset('images/dr.wi.jpg')}}" width="250" height="430">
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                            <h2>Joon</h2>
                            <p>Therapist</p>
                            <p>Licensed Behaviour Specialist, Licensed Professional Counselor</p>
                          </figcaption>
                        </figure>
                      </a>
                    </div>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- Doc 2nd box -->
              <div class="doctors-area top-slider">
                <ul class="doctors-nav">
                    <li>
                      <div class="single-doctor">
                        <div class="single-doctor">
                        <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                          <figure>
                            <img src="{{asset('images/wonyoung.jpg')}}" width="250" height="430">
                            <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                            <figcaption>
                              <h2>Ms.Jang</h2>
                              <p>Psychologist</p>
                              <p>Master of Arts(M.A) in Counseling Psychology with 9 Years of Experience</p>
                            </figcaption>
                          </figure>
                        </a>
                      </div>
                      </div>
                    </li>

                    <li>
                    <div class="single-doctor">
                      <div class="single-doctor">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="{{asset('images/kim_k.jpg')}}" width="250" height="430">
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                            <h2>Kim</h2>
                            <p>Marriage & Family Therapist</p>
                            <p>Licensed Professional Counselor</p>
                          </figcaption>
                        </figure>
                      </a>
                    </div>
                    </div>
                    </li>
                  <li>
                    <div class="single-doctor">
                      <div class="single-doctor">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="{{asset('images/dr.jiwoong.jpg')}}" width="250" height="430">
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                            <h2>Woong</h2>
                            <p>Substance Abuse Counselor</p>
                            <p>Licensed Clinical Counselor</p>
                          </figcaption>
                        </figure>
                      </a>
                    </div>
                    </div>
                  </li>

                  <li>
                    <div class="single-doctor">
                      <div class="single-doctor">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="{{asset('images/rosie.jpg')}}" width="250" height="430">
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                            <h2>Ms.Rosie</h2>
                            <p>Rehabilitation Counselor</p>
                            <p>Licensed Clinical Counselor</p>
                          </figcaption>
                        </figure>
                      </a>
                    </div>
                    </div>
                  </li>

                  <li>
                    <div class="single-doctor">
                      <div class="single-doctor">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="{{asset('images/irene.jpg')}}" width="250" height="430">
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                            <h2>Ms.Irene</h2>
                            <p>Rehabilitation Counselor</p>
                            <p>Licensed Clinical Counselor</p>
                          </figcaption>
                        </figure>
                      </a>
                    </div>
                    </div>

                  </li>

                </ul>
              </div>

            </div>
          </div>


          <!-- Text 1st box -->
          <div class="col-lg-6 col-md-6 col-sm-12" style="margin-top : 100px">
            <div class="how-works-area">
              <div class="section-heading">
                 <h2>Are The Clinicians Trusted?</h2>
                 <div class="line"></div>
               </div>
               <div class="how-works">
                 <ul class="nav nav-tabs" id="myTab">
                   <li class="active"><a href="#Verified" data-toggle="tab">Verified</a></li>
                   <li><a href="#Confedentiality" data-toggle="tab">Confedentiality</a></li>
                 </ul>
                 <!-- Tab panes -->
                 <div class="tab-content">
                   <div class="tab-pane fade in active" id="Verified">
                     <p> Each clinician in our organization are verified by the *name* team as licensed. Our clinicians are clinical associates and licensed professional specialists. All participating clinicians are responsible for ensuring they are covered by the appropriate professional liability insurance required to practice.</p>
                   </div>
                   <div class="tab-pane fade " id="Confedentiality">
                     <p>Everything discussed between the client and the counselor will be confidential and will not be shared with others without the client's explicit consent.
                      We promise to create a safe space for the client to share their thoughts and feelings without fear of judgment or negative consequences.</p>
                   </div>
                 </div>
               </div>
            </div>
          </div>
          <!-- Text 2nd box -->
          <div class="col-lg-6 col-md-6 col-sm-12" style="margin-top : 100px">
            <div class="how-works-area">
              <div class="section-heading">
                 <h2>How The Sessions Will Be Conducted</h2>
                 <div class="line"></div>
               </div>
               <div class="how-works">
                 <ul class="nav nav-tabs" id="myTab">
                   <li class="active"><a href="#session" data-toggle="tab">Sessions</a></li>
                 </ul>
                 <!-- Tab panes -->
                 <div class="tab-content">
                   <div class="tab-pane fade in active" id="session">
                     <p>
                      Most of the sessions are currently being conducted virtually.
                      This is an important step to ensure that the health and safety of both clinicians and participants is prioritized during the COVID-19 pandemic and the political situation of the country.
                      But if needed, in person sessions will be carried out. You can discuss this with your clinicians directly. </p>
                   </div>
                 </div>
               </div>
            </div>
          </div>

        </div>
        </div>
      </div>

    </section>
    <!--=========== End Doctors SECTION ================-->



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
