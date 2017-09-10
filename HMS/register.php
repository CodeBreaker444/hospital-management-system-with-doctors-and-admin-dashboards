<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HMS FOR HACKATHON</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- =======================================================
       codebreaker and team
    ======================================================= -->
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <!--banner-->
    <section id="banner" class="banner">
        <div class="bg-color">
            <nav class="navbar navbar-default navbar-fixed-top">
              <div class="container">
                <div class="col-md-12">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#"><img src="img/GSL_Logo.png" class="img-responsive" style="width: 90px; margin-top: -16px;"></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                      <ul class="nav navbar-nav">
                        <li class=""><a href="index.html">Home</a></li>
                      
                        <li class="active"><a href="register.php">Register</a></li>
                      </ul>
                    </div>
                </div>
              </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="banner-info">
                        <div class="banner-logo text-center">
                            <img src="img/GSL_Logo.png" class="img-responsive">
                        </div>
                        <div class="banner-text text-center">
                            <h1 class="white">Healthcare at your desk!!</h1>
                            <p>We care for your Health</p>
                            <a href="#contact" class="btn btn-appoint">REGISTER HERE</a>
                        </div>
                        <div class="overlay-detail text-center">
                           <a href="#service"><i class="fa fa-angle-down"></i></a>
                         </div>     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ banner-->
    








    <!--contact-->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="ser-title">Register</h2>
                    <hr class="botm-line">
                </div>
                <div class="col-md-4 col-sm-4">
                  <h3>Contact Info</h3>
                  <div class="space"></div>
                  <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>Tekkali<br>
                  Andhra Pradesh</p>
                  <div class="space"></div>
                  <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>gslhospitals@gmail.com</p>
                  <div class="space"></div>
                  <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+91 9853546784</p>
                </div>
                <div class="col-md-8 col-sm-8 marb20">
                    <div class="contact-info">
                            
                            <div class="space"></div>
                            <h3 class="cnt-ttl">Enter required details</h3>
                            <div id="sendmessage">Your appointment has been fixed. Thank you!</div>
                            <div id="errormessage"></div>
                            <form action="register-back.php" method="post" role="form" >
                            
                                <div class="form-group">
                                   
                                    <input type="text" name="first_name" class="form-control br-radius-zero" id="first_name" placeholder="First Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required="required" />
                                </br>
                                    <input type="text" name="last_name" class="form-control br-radius-zero" id="last_name" placeholder="Last Name" data-rule="minlen:3" data-msg="Please enter at least 4 chars" required="required" />   
                                     <div class="validation"></div>
                                 </div>
                                
                                 <div class="form-group" >
                                    Sex  &nbsp&nbsp&nbsp&nbsp&nbsp

                                  <input type="radio" name="sex_status" id="sex_status" value="Mr.">Male&nbsp&nbsp&nbsp&nbsp
                                  <input name="sex_status" id="sex_status" type="radio"  value="Ms." required="required">Female

                                 </div>

                                <div class="form-group">
                                    <input type="email" class="form-control br-radius-zero" name="e_mail" id="e_mail" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required="required" />
                                    <div class="validation"></div>
                                </div>

                                <div class="form-group">
                                    <input type="number" class="form-control br-radius-zero" name="m_phone" id="m_phone" placeholder="phone number" data-rule="minlen:4" data-msg="Please enter 10 digits phone number" required="
                                  required" />
                                    <div class="validation"></div>
                                </div>

                              

                                 <div class="form-group"  >
                                    Doctor Type  &nbsp&nbsp&nbsp&nbsp&nbsp

                                 <input type="radio" name="doc_type" value="1" required="required">General Doctor         &nbsp&nbsp&nbsp&nbsp
                                  <input type="radio" name="doc_type" value="2">Children Specialist   &nbsp&nbsp&nbsp&nbsp
                                  <input type="radio" name="doc_type" value="3">Dentist                 &nbsp&nbsp&nbsp&nbsp  
                                 <input type="radio" name="doc_type" value="4">Gynaecologist
                                 </div>

                                <div class="form-row">
                                 <input type="date" data-date-size="4" name="slot_date" min="2017-07-17"
                                 max="2017-08-17" />
                                 </div>                                                                     &nbsp&nbsp&nbsp&nbsp&nbsp
                                   <div class="form-group">
                                   Slot Timings                                                             &nbsp&nbsp&nbsp&nbsp&nbsp
                                  <input type="radio" name="slot_time" value="9-10AM" required="required">9:00AM-10AM   &nbsp&nbsp&nbsp&nbsp
                                  <input type="radio" name="slot_time" value="11-12AM">11:00AM-12:00AM       &nbsp&nbsp&nbsp&nbsp
                                  <input type="radio" name="slot_time" value="2-3PM">2:00PM-3:00PM       &nbsp&nbsp&nbsp&nbsp
                                  <input type="radio" name="slot_time"  value="4-5PM">4:00PM-5:00PM
                                  </div>
                                <div class="form-group">
                                    <textarea class="form-control br-radius-zero" name="hlth_desc" rows="5" data-rule="required" data-msg="Please write something for us about your problem" placeholder="Problem description" required="
                                  required"></textarea>
                                    <div class="validation"></div>
                                </div>
                                <div class="form-action">
                                    <input  type="submit" name="submit" value="submit" class="btn btn-form">Confirm appointment</input>
                                </div>





                            
         </form>
         </div>
         </div>
         </div>
         </div>
         </section>

    <!--/ contact-->

    <!--footer-->
    <footer id="footer">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 marb20">
                            <div class="ftr-tle">
                                <h4 class="white no-padding">About Us</h4>
                            </div>
                            <div class="info-sec">
                                <p>We offer you a simple solution to fix your appointments with concerned doctors while sitting at home.</p>
                            </div>
                    </div>
                    <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                            <h4 class="white no-padding">Quick Links</h4>
                        </div>
                        <div class="info-sec">
                            <ul class="quick-info">
                                <li><a href="index.html"><i class="fa fa-circle"></i>Home</a></li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                            <h4 class="white no-padding">Follow us</h4>
                        </div>
                        <div class="info-sec">
                            <ul class="social-icon">
                                <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
                                <li class="bgred"><i class="fa fa-google-plus"></i></li>
                                <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
                                <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        © Copyright GSL. All Rights Reserved
                        <div class="credits">
                           
                            Designed by Govardhan & Team.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer-->
      <!-- =======================================================
       CODEBREAKER AND TEAM
    ======================================================= -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
   
    
  </body>
</html>