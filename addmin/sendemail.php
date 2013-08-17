<?php


$to ="admin@sree.yzi.me"; //$_POST['temail'];//"sujitnag2011@gmail.com";
$subject = $_POST['subj']; //"Activate online ";
$message =  $_POST['msg'];//"আপনার account টি activate হয়েছে.";
$from = $_POST['femail']; //"editor@sakhera-lekha.yzi.me";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent successfully.";

?>