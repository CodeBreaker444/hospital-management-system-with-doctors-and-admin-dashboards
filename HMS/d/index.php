<?php
if(!session_id()) session_start();
include("config.php");
include("checklogin.php");
if(isset($_POST['login']))
{
  $username = $_POST['username'];
$password = $_POST['password'];
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$ret=mysql_query("SELECT * FROM doctors WHERE username='$username' and password='$password'");
$num=mysql_fetch_array($ret);
if($num>0)
{
$extra="doctor.php";
$_SESSION['login']=$_POST['username'];
$_SESSION['ID']=$num['ID'];
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
else
{
$_SESSION['action1']="*Invalid username or password";
$extra="index.php";
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Doctors | Login</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="shortcut icon" href="ico/favicon.ico">
    <link href="css/style.css" rel="stylesheet">
 
  </head>
 <!-- =======================================================
       CODEBREAKER AND TEAM
    ======================================================= -->
  <body>
      <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              
              <a class="navbar-brand" href="#"><img src="../img/GSL_Logo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
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
            <div class="banner-text text-center" style="padding-top: 70px">
              <h1 class="white">Healthcare at your desk!!</h1>
              <p>We care for your Health</p>
              
            </div>
           
        </div>
      </div>
    </div>
  </section>
  <!--/ banner-->
	  <div id="login-page">
	  	<div class="container">
      
	  	
		      <form class="form-login" action="" method="post">
		        <h2 class="form-login-heading">Doctors Dashboard</h2>
                  <p style="color:#F00; padding-top:20px;" align="center"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
		        <div class="login-wrap">
		            <input type="text" name="username" class="form-control" placeholder="User ID" autofocus>
		            <br>
		            <input type="password" name="password" class="form-control" placeholder="Password"><br >
		            <input  name="login" class="btn btn-theme btn-block" type="submit">
		         
		        </div>
		      </form>	  	
	  	
	  	</div>
	  </div>
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
                <li><a href="#service"><i class="fa fa-circle"></i>Services</a></li>
                <li><a href="register.html"><i class="fa fa-circle"></i>Register</a></li>
              </ul>
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
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
