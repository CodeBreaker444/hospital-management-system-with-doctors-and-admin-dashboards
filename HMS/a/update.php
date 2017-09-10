<?php
session_start();
include'config.php';
include("checklogin.php");
check_login();
if(isset($_POST['submit']))
{
$s_firstname = (isset($_POST['s_firstname'])) ? $_POST['s_firstname'] : '';
$s_lastname = (isset($_POST['s_lastname'])) ? $_POST['s_lastname'] : '';
$s_phone = (isset($_POST['s_phone'])) ? $_POST['s_phone'] : '';
$s_mail = (isset($_POST['s_mail'])) ? $_POST['s_mail'] : '';
$doc_type = (isset($_POST['doc_type'])) ? $_POST['doc_type'] : '';
$slot_date = (isset($_POST['slot_date'])) ? $_POST['slot_date'] : '';
$slot_time = (isset($_POST['slot_time'])) ? $_POST['slot_time'] : '';
$hlth_desc = (isset($_POST['hlth_desc'])) ? $_POST['hlth_desc'] : '';
mysql_query("update hms set s_firstname='$s_firstname' , s_lastname='$s_lastname' , s_mail='$s_mail' , doc_type='$doc_type' , slot_date='$slot_date' , slot_time='$slot_time' , hlth_desc='$hlth_desc',s_phone='$s_phone' where ID='".$_GET['uid']."'");

if(mysql_affected_rows()>0)
$_SESSION['msg']="Profile Updated successfully";
else
$_SESSION['msg']="Something Went Wrong";
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

    <title>Admin | Update Profile</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body style="background-color: #36486b">


          <section class="wrapper">
            <section id="container" >
     
     
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <h1 href="admin.php" style="color: #fff ;text-align: center;margin-top: 30px"">Admin Dashboard</h1>
            <div class="nav notify-row" id="top_menu">
               
                         
                   
              
           
            </section>
            <div class="top-menu" >
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php" >Logout</a></li>
              </ul>
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="admin.php" >Back</a></li>
              </ul>
            </div>
            <h2 style="color: #fff;"><i class="fa fa-angle-right"></i> GSL Hospitals</h2>

         
      <?php $ret=mysql_query("select * from hms where ID='".$_GET['uid']."'");
    while($row=mysql_fetch_array($ret))
    
    {?>
      
          <section class="wrapper">
            <h3 style="color: #fff;"><i class="fa fa-angle-right"></i> <?php echo $row['s_firstname'];?>'s Information</h3>
              
        <div class="row">
        
                  
                    
                  <div class="col-md-12">
                      <div class="content-panel">
                      <?php if(isset($_POST['submit'])) {?>
                      <p align="center" style="color:#F00;"><?php echo $_SESSION['msg'];?></p>
                       <?php } ?>
                           <form class="form-horizontal style-form" name="form1" method="post" action="" onSubmit="return valid();">
                           
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Registration Date </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="date" value="<?php echo $row['posting_date'];?>" readonly >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">IP Address </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="date" value="<?php echo $row['s_ip'];?>" readonly >
                              </div>
                          </div>

                          <div class="form-group">
                         
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px; ">
                               First Name <label style="color: black; font-size: 15px; padding-left: 40px"><?php echo $row['s_sex'];?></label></label>

                              <div class="col-sm-10">

                                  <input type="text" class="form-control" name="s_firstname" value=" <?php echo $row['s_firstname'];?>" >
                              </div>
                          </div>

                          
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Last Name</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="s_lastname" value="<?php echo $row['s_lastname'];?>" >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">SLOT DATE </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="slot_date" value="<?php echo $row['slot_date'];?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">SLOT TIME </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="slot_time" value="<?php echo $row['slot_time'];?>"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Required Doctor </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="doc_type" value="<?php echo $row['doc_type'];?>"  >
                              </div>
                          </div>
                          
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Email </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="s_mail" value="<?php echo $row['s_mail'];?>" >
                              </div>
                          </div>
                               <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Contact no. </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="s_phone" value="<?php echo $row['s_phone'];?>" >
                              </div>
                          </div>
                            

                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px ">
                             Health Problem
                            </label>
                            <div class="col-sm-10">
                              
                              <input type="text" class="form-control" name="hlth_desc" value="<?php echo $row['hlth_desc'];?>" >
                              </div>
                                 
                              
                            </div>
                          </div>
                         
                          <div style="margin-right: 500px">
                          <input type="submit" name="submit" value="submit" class="btn btn-theme pull-right "></div>
                          </form>
                      </div>
                  </div>
              </div>
    </section>
        <?php } ?>
      </section></section>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>
</header>
</section>
  </body>
</html>
