<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ComeToUs : Self-Assessment</title>

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
                <li><a href="{{url('counselors')}}">Counselors</a></li>
                <li><a href="{{url('elements')}}">Elements Of ComeToUs</a></li>
                <li class="active"><a href="{{url('self_assessment')}}">Free Self-Assessment</a></li>
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
                <h2>Self-Assessments</h2>
              </div>
              <div class="blog-breadcrumbs-right">
                <ol class="breadcrumb">
                  <li>You are here</li>
                  <li><a href="{{url('home')}}">Home</a></li>
                  <li class="active">Self-Assessments</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--=========== 5 personalities ================-->
    <section id="service">
      <div class="container">

        <div class="row">

          <div class="col-lg-12 col-md-12">

            <div class="service-area">

              <!-- Start Service Title -->
              <div class="section-heading">
                <h2>What is Five Factor Model Personality Test?</h2>
                <div class="line"></div>
              </div>
              <!-- Start Service Content -->
              <div class="service-content">
                <div class="row">
                  <!-- Start Single Service -->
                  <div class="col-lg-4 col-md-4">
                    <div class="single-service">
                      <p>The Five Factor Model Personality Test is psychological framework for understanding human personality.
                        This assessment is to understand how these traits are related to various outcomes such as mental health, job performance, and relationship satisfaction.
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="single-service">
                      <p>The model is based on the idea that there are five broad dimensions of personality that can be used to describe individual differences in personality: Openness, Conscientiousness, Extraversion, Agreeableness, Neuroticism.
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="single-service">
                      <p>The test involves self-report questions that ask to rate yourself on a range of characteristics associated with each of the five dimensions.
                        Scores on each dimension can range from low to high, with each score providing insight into your unique personality profile.
                        You can try our free self-assessement test below.
                      </p>
                    </div>
                  </div>


                </div>
              </div>

            </div>

          </div>

        </div>

      </div>
    </section>
    <!--=========== 5 personalities ================-->

    <!--=========== self-assessment ================-->
    <section id="whychooseSection">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="service-area">
              <!-- Start Service Title -->
              <div class="section-heading">
                <h2>Free Self-Assessment Test</h2>
                <div class="line"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <div class="row">
              <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                <div class="whyChoose-left">
                  <div class="whychoose-slider">
                    <div class="whychoose-singleslide">
                      <img src="{{asset('images/big5.png')}}" alt="img">
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
                <div class="whyChoose-right">
                  <div class="media">
                    <div class="media-body">
                      <h4 class="media-heading">Please read each statement carefully and use the scales to record your report</h4>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-body">
                      <p>1. I get upset easily.(-----)</p>
                      <p>2. I enjoy being part of a group.(-----)</p>
                      <p>3. I like to solve complex problems.(-----)</p>
                      <p>4. I believe that others have good intentions.(-----)</p>
                      <p>5. I am always prepared.(-----)</p>
                      <p>6. I have a low opinion of myself.(-----)</p>
                      <p>7. I have natural talent for influencing people.(-----)</p>
                      <p>8. I enjoy the beauty of nature.(-----)</p>
                      <p>9. I try to anticipate the needs of others.(-----)</p>
                      <p>10. I can be trusted to keep my promises.(-----)</p>
                      <p>11. I get irritated easily.(-----)</p>
                      <p>11. I have a lot of fun.(-----)</p>
                      <p>12. I like to visit new places.(-----)</p>
                      <p>13. I love to help others.(-----)</p>
                      <p>14. I set high standards for myself and others.(-----)</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-body">
                      <h4 class="media-heading">Sum up the result to see how much you score on the five general personality traits.
                        The numbers below indicate which questions correspond to each trait.
                        A high score indicates a stronger level of that trait.
                      </h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END of self-assessment================-->

    <!--=========== result================-->
    <section id="extraFeatures">
      <div class="container">
        <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-12">
           <div class="how-works-area">
             <div class="section-heading">
                <h2>Personalities</h2>
                <div class="line"></div>
              </div>
              <div class="how-works">
                <ul class="nav nav-tabs" id="myTab">
                  <li class="active"><a href="#neuro" data-toggle="tab">Neuroticism</a></li>
                  <li><a href="#extra" data-toggle="tab">Extraversion</a></li>
                  <li><a href="#openness" data-toggle="tab">Openness</a></li>
                  <li><a href="#agree" data-toggle="tab">Agreeableness</a></li>
                  <div style="padding-top: 5px; padding-right: 50px; padding-bottom: 5px; padding-left: 60px;">
                    <span style="color: transparent;">This text is invisible</span>
                  </div>
                  <li><a href="#consci" data-toggle="tab">Conscientiousness</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane fade in active" id="neuro">
                    <p>Neuroticism is a personality trait characterized by a tendency to experience negative emotions, such as anxiety, depression, and stress, more frequently and intensely than others.
                       People who score high in neuroticism may be more likely to worry excessively, experience mood swings, and feel overwhelmed by stressful situations.
                       While a certain level of neuroticism is common and normal for most people, high levels of neuroticism can be associated with a variety of mental health issues, including anxiety disorders and depression. However, it's important to note that having high levels of neuroticism does not mean that a person will necessarily develop mental health issues. It simply means that they may be more prone to experiencing negative emotions and may need to take steps to manage their stress levels and practice self-care.</p>
                  </div>
                  <div class="tab-pane fade " id="extra">
                    <p>Extraversion is a personality trait characterized by a tendency to seek out social interactions and stimulation, and to feel energized by such experiences. People who score high in extraversion tend to be outgoing, talkative, and assertive, and they enjoy being the center of attention. They may also be more likely to take risks and seek out new experiences.

                      In contrast, people who score low in extraversion tend to be more reserved and introspective, and may prefer quieter, more solitary activities. They may also be more sensitive to stimulation and may feel drained or overwhelmed by social interactions or large groups of people.

                      While a certain level of extraversion is common and normal for most people, extreme levels of extraversion or introversion can be associated with a variety of mental health issues. For example, people who are extremely introverted may be at increased risk for social anxiety or depression, while people who are extremely extraverted may be more likely to engage in risky behaviors or struggle with impulsivity.

                      However, it's important to note that there is no "right" level of extraversion or introversion, and that people can thrive regardless of their personality type.</p>

                  </div>
                  <div class="tab-pane fade " id="openness">
                    <p>Openness is a personality trait characterized by a tendency to seek out new experiences, ideas, and perspectives, and to be open-minded and flexible in one's thinking. People who score high in openness tend to be creative, imaginative, and curious, and they may have a wide range of interests and hobbies. They may also be more likely to question authority and tradition, and to embrace new and unconventional ideas.

                      In contrast, people who score low in openness tend to be more conventional and set in their ways, and may be less interested in exploring new ideas or experiences. They may also be more skeptical of new or unconventional ideas, and may prefer more traditional or familiar ways of thinking and doing things.

                      While openness can be a positive trait, it can also have its downsides. For example, people who are extremely open may be more prone to distraction and may struggle to focus on one thing for very long. They may also be more likely to engage in risky behaviors or to experience anxiety or stress when faced with change or uncertainty.

                      Overall, openness is just one of many different personality traits, and it is important to remember that everyone is unique and complex.</p>
                  </div>
                  <div class="tab-pane fade " id="agree">
                    <p>Agreeableness is a personality trait characterized by a tendency to be cooperative, empathetic, and compassionate towards others. People who score high in agreeableness tend to be kind-hearted, considerate, and accommodating, and they may place a high value on maintaining positive relationships with others. They are often good listeners and are able to empathize with other people's feelings and perspectives.

                      In contrast, people who score low in agreeableness may be more competitive and less concerned with other people's feelings or needs. They may be more blunt and direct in their communication style, and may be less likely to prioritize social harmony or cooperation.

                      While agreeableness can be a positive trait, it can also have its downsides. People who are extremely agreeable may be more likely to avoid conflict, even when it is necessary or important. They may also struggle with setting boundaries or standing up for themselves, and may have difficulty saying "no" to others' requests or demands.</p>
                     <img class="img-center" src="{{asset('images/choose-us-img1.jpg')}}" alt="img">
                  </div>
                  <div class="tab-pane fade " id="consci">
                    <p>Conscientiousness is a personality trait characterized by a tendency to be responsible, organized, and self-disciplined. People who score high in conscientiousness tend to be reliable, hardworking, and focused on achieving their goals. They may be diligent in their work, pay close attention to details, and strive for excellence in all aspects of their lives.

                      In contrast, people who score low in conscientiousness may be more impulsive, disorganized, and prone to procrastination. They may struggle to follow through on commitments or to stay motivated in the face of challenges or setbacks.

                      While conscientiousness can be a valuable trait, it can also have its downsides. People who are excessively conscientious may be prone to perfectionism, which can lead to stress, burnout, and even physical health problems. They may also be less spontaneous or creative, and may struggle to relax or enjoy leisure activities.</p>
                  </div>
                </div>
              </div>
           </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="departments-area">
            <div class="section-heading">
              <h2>Results</h2>
              <div class="line"></div>
            </div>
            <!-- Start result Accordion -->
            <div class="panel-group custom-panel" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                       1 , 6 , 11<span class="fa fa-minus"></span>
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="panel-body">
                   <p>Neuroticism</p>
                   <p> If you score high in this trait, you are tend to be anxious, moody, and prone to excessive sadness and often feel insecure.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                      2 , 7, 12<span class="fa fa-plus"></span>
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="panel-body">
                   <p> Extraversion </p>
                   <p> If you score high in this trait, you are tend to be enthusiatic, outgoing and talkative.
                    You seek interaction with your environment and you feel comfortable voicing your opinions.
                  You tend to gain energy by being around others.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                      3, 8, 13 <span class="fa fa-plus"></span>
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>Openness/ Intellect</p>
                    <p> If you score high in this trait, you are tend to be imaginative, curious and open-minded.
                      You tend to have the willingness to try new things and also tend to have the ability to think outside of the box.
                    You are artistic and value independence.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                      4, 9, 14<span class="fa fa-plus"></span>
                    </a>
                  </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse">
                  <div class="panel-body">
                   <p> Agreeableness </p>
                   <p> If you score high in this trait, you tend to be kind and supportive.
                    You can be described as soft-hearted and you are sensitive to the needs of others.
                    People regard you as trustworthy and altruistic.
                   </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                      5, 10, 15 <span class="fa fa-plus"></span>
                    </a>
                  </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>Conscientiousness</p>
                    <p> If you score high in this trait, you are tend to be hard working and goal oriented.
                      You can be described as organized and have good impulse control.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
       </div>
       </div>
      </div>
    </section>

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
              <p>&copy; Copyright2023 <a href="{{url('home')}}">ComeToUs</a></p>
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

    <!-- Custom JS -->
    <script src="{{asset('js/custom.js')}}"></script>

  </body>
</html>
