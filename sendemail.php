<?php
$to = "sujitnag2011@gmail.com";
$subject = "Activate online ";
$message ="try from php"; //"আপনার account টি activate হয়েছে.";
$from = "admin@sree.yzi.me";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";

?>