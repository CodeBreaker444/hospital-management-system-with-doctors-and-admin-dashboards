<?php 

mysql_query("update hms set status='1' where ID='".$_GET['uid']."'");
$ret=mysql_query("select * from hms where ID='".$_GET['uid']."'");
$e_mail=mysql_query("select s_mail from hms where ID='".$_GET['uid']"'");
$to=$e_mail;
$subject = "Doctor's Appoitnment on the $first_name";
$header = "Slot Confirmation from HMS";
$message = "SLOT SUCCESSFULLY CONFIRMED ON $posting_date $posting_time.Thank You ..Team HMS";
$sentmail = mail($to,$subject,$message,$header);

?>