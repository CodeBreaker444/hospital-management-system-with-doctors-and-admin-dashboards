<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
mysql_query("update hms set status='1' where ID='".$_GET['uid']."'");
$ret=mysql_query("select * from hms where ID='".$_GET['uid']."'");
$e_mail=mysql_query("select s_mail from hms where ID='".$_GET['uid']."'");
$first_name=mysql_query("select s_firstname from hms where ID='".$_GET['uid']."'");
$posting_date=mysql_query("select posting_date from hms where ID='".$_GET['uid']."'");
$posting_time=mysql_query("select posting_time from hms where ID='".$_GET['uid']."'");
$from = "adasd@fdsf";
$to=$e_mail;
$subject = "Doctor's Appoitnment on the $first_name";
$header = "Slot Confirmation from HMS";
$message = "SLOT SUCCESSFULLY CONFIRMED ON $postning_date $posting_time.Thank You ..Team HMS";
$sentmail = mail($to,$subject,$message,$header);
 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Submitted')
    window.location.href='doctor.php';
    </SCRIPT>");
?>