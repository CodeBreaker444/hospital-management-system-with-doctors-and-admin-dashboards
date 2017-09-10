<?php
session_start();
include'config.php';
include("checklogin.php");
check_login();
if(isset($_GET['uid']))
{

$msg=mysql_query("update hms set status='2' where ID='".$_GET['ID']."'");

echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Cancelled')
    window.location.href='doctor.php';
    </SCRIPT>");

}
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Clients</title>
    <link href="css/bootstrap.css" rel="stylesheet">
  
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="ico/favicon.ico">
    
  </head>
 <!-- =======================================================
       CODEBREAKER AND TEAM
    ======================================================= -->

  <body  style="background-color: #c94c4c">

  <section id="container" >
               <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <h1 href="admin.php" style="color: #fff ;text-align: center;margin-top: 100px" ><b>Doctors Dashboard</b></h1>
            <div class="nav notify-row" id="top_menu">
               
                         
                   
                </ul>
            </div>
           
          <section class="wrapper">
          <div class="top-menu" >
              <ul class="nav pull-right top-menu" style="padding-bottom: 20px">
                    <li><a class="logout" href="logout.php" >Logout</a></li>
                                        <li><a class="logout" href="doctor.php" >Refresh</a></li>

              </ul>
            </div>
          	<h2 style="color: #fff;><i class="fa fa-angle-right" "></i> GSL Hospitals</h2>
            <?php $ret=mysql_query("select * from doctors where ID='".$_SESSION['ID']."'");
                $row=mysql_fetch_array($ret);
                ?> 
             <h3 style="color: #fff;text-align: center;"><i class="fa fa-angle-right"></i> WELCOME   <i>"<?php echo $row['doc_name'];?>"</i></h3>
                  
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Patient Details </h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>Sno.</th>
                            
                                  <th>Sex</th>
                                  <th class="hidden-phone">First Name</th>
                                  <th>Last Name</th>
                                 <!--<th>Doctor Required</th>-->
                                  <th>Email Id</th>
                                  <th>Contact no.</th>
                                  <th>SLOT DATE</th>
                                  <th>SLOT TIME</th>
                                  <th>Helath Problem</th>
                                 
                              </tr>
                              </thead>
                              <tbody>
                              <?php $ret=mysql_query("select * from hms where doc_type='".$_SESSION['ID']."'");
							  $cnt=1;
							  while($row=mysql_fetch_array($ret))
							  {?>
                              <tr>
                              <td><?php echo $cnt?></td>
                            
                              <td><?php echo $row['s_sex'];?></td>
                                  <td><?php echo $row['s_firstname'];?></td>
                                  <td><?php echo $row['s_lastname'];?></td>
                                <!--  <td><?php echo $row['doc_type'];?></td>-->
                              
                                  <td><?php echo $row['s_mail'];?></td>
                                  <td><?php echo $row['s_phone'];?></td>
                                  <td><?php echo $row['slot_date'];?></td>
                                 <td><?php echo $row['slot_time'];?></td>
                                 <!-- <td><?php echo $row['s_sudent'];?></td>-->
                                  <td><?php echo $row['hlth_desc'];?></td>
                                <!--  <?php
                                  $num=$row['status'];
                                  if($num==1)

                                  ?>
                                <td>Confirmed</td>
                                <?php
                              if($num==2)
                                ?>
                              <td>Cancelled</td>
                              <?php
                              if($num==0){
                              ?> -->             
                              
                         <td><a href="sendmail.php?uid=<?php echo $row['ID'];?>">Confirm 
                              </td></a>
                              <td><a href="doctor.php?uid=<?php echo $row['ID'];?>">Cancel 
                              </td></a>
                              
                              <?php $cnt=$cnt+1; }}?>
                             
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
		</section>
      </section
  ></section>
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
  </body>
</html>