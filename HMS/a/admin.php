<?php
session_start();
$mysql_hostname ="localhost";
include'config.php';
include("checklogin.php");
check_login();
if(isset($_GET['ID']))
{

$msg=mysql_query("delete from hms where ID='".$_GET['ID']."'");
if($msg)
{
echo "<script>alert('Data deleted');
              window.location.href='admin.php
</script>";
}
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
   
  </head>

  <body style="background-color: #36486b">

  <section id="container"  >
      
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <h1 href="admin.php" style="color: #fff ;text-align: center;margin-top: 100px""><b>Admin Dashboard</b></h1>
            <div class="nav notify-row" id="top_menu">
               
                         
                   
                </ul>
          
          <section class="wrapper">
            <div class="top-menu" >
              <ul class="nav pull-right top-menu" style="padding-bottom: 20px">
                    <li><a class="logout" href="logout.php" >Logout</a></li>
                    <li><a class="logout" href="admin.php" >Refresh</a></li>
              </ul>
            </div>
          	<h2 style="color: #fff;"><i class="fa fa-angle-right"></i> GSL Hospitals</h2>
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Patient Details </h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>Sno.</th>
                                  <th>Reg.Date</th>
                                  <th>IP</th>
                                  <th>Sex</th>
                                  <th class="hidden-phone">First Name</th>
                                  <th>Last Name</th>
                                  <th>Doctor Required</th>
                                  <th>Email Id</th>
                                  <th>Contact no.</th>
                                  <th>SLOT DATE</th>
                                  <th>SLOT TIME</th>
                                  <th>Health Problem</th>
                                  <th>Operations</th>
                                 
                              </tr>
                              </thead>
                              <tbody>
                              <?php $ret=mysql_query("select * from hms");
							  $cnt=1;
							  while($row=mysql_fetch_array($ret))
							  {?>
                              <tr>
                              <td><?php echo $cnt?></td>
                              <td><?php echo $row['posting_date'];?></td>
                              <td><?php echo $row['s_ip'];?></td>
                              <td><?php echo $row['s_sex'];?></td>
                                  <td><?php echo $row['s_firstname'];?></td>
                                  <td><?php echo $row['s_lastname'];?></td>
                                  <td><?php echo $row['doc_type'];?></td>
                              
                                  <td><?php echo $row['s_mail'];?></td>
                                  <td><?php echo $row['s_phone'];?></td>
                                  <td><?php echo $row['slot_date'];?></td>
                                 <td><?php echo $row['slot_time'];?></td>
                                 <!---- <td><?php echo $row['s_sudent'];?></td>-->
                                  <td><?php echo $row['hlth_desc'];?></td>
                                  
                                  <td>
                                     
                                     <a href="update.php?uid=<?php echo $row['ID'];?>"> 
                                     <button class="btn btn-primary btn-xs"><i>EDIT</i></button></a>
                                     <a href="admin.php?ID=<?php echo $row['ID'];?>"> 
                                     <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i>DELETE</i></button></a>
                                  </td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                             
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
