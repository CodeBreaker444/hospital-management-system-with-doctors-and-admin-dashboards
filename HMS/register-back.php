<?php
include"config.php";
if(isset($_POST['submit'])) {
$m_phone = $_POST['m_phone'];
$doc_type = $_POST['doc_type'];
$hlth_desc = $_POST['hlth_desc'];
$first_name = $_POST['first_name'];
$sex_status = $_POST['sex_status'];
$last_name = $_POST['last_name'];
$slot_date = $_POST['slot_date'];
$slot_time = $_POST['slot_time'];
$e_mail = $_POST['e_mail'];
$a=date('Y-m-d');
$check_mail = "select * from hms where s_mail='$e_mail' ";

//$client_ip = $_SERVER['HTTP_CLIENT_IP'];
//$proxy_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
//$remote_ip = $_SERVER['REMOTE_ADDR'];
//if (!empty($client_ip)) {
  //  $ip_address = $client_ip;
//}
//else if (!empty($proxy_ip)){
  //  $ip_address= $proxy_ip;
//} else {
  //  $ip_address= $remote_ip;
//}
$run = mysql_query($check_mail);
if(mysql_num_rows($run)>0){
	echo "<script>alert('Mail: $e_mail already exist!!!!.I think U Dont have to submit again.') 
	window.location.href='../submit.php';</script>";
exit();
}

$que = "insert into hms(s_firstname, s_lastname, s_sex, doc_type, slot_time, slot_date, s_mail, s_phone, hlth_desc) values('$first_name','$last_name','$sex_status','$doc_type','$slot_time','$slot_date','$e_mail','$m_phone','$hlth_desc')";

if(mysql_query($que)){
    $to = $e_mail;
$subject = "Doctor's Appoitnment on the $first_name";
$header = "Slot registration successfull from HMS";
$message = "SLOT SUCCESSFULLY REGISTERED ON $posting_date $posting_time.Wait for the Confirmation Mail..Thank You ..Team HMS";

$sentmail = mail($to,$subject,$message,$header);
if ($sentmail) {
    # code...

	 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Congratulations:Succesfully Submitted')
    window.location.href='index.html';
    </SCRIPT>");
    }else
    {
       echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Congratulations:Succesfully Submitted but Cannot Send the Confirmation EMAIL.')
    window.location.href='index.html';
    </SCRIPT>");  
    }
}
    else
    	{
	 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Something Went Wrong:Please TryAgain')
    window.location.href='register.php';
    </SCRIPT>");
    }
    

}
?>