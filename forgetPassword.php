<?php

$email=$_POST['email'];
//$pasw=$_POST['pasw'];
//$count=0;
$dbc = mysql_pconnect("mysql.2freehosting.com","u891147988_sree","sree123test456")
        or die('Error connecting to Server');
    mysql_select_db("u891147988_test");
 
// $name="mourosi" ;
    //$que = 'select * from personal where name = "'.$name.'"';

    $result = mysql_query('select * from user where EMAIL ="'.$email.'"');

  if($my_row = mysql_fetch_array($result)) {
   //setcookie("uid",$my_row[0]."BMO" , time()+3600); 
       //  return  $my_row;
      // echo $my_row[6]."</br>";
	   	 
	   //echo $my_row[0].",";
	   //echo $my_row[1].",";
	    //echo $my_row[2].",";
		 //echo $my_row[3].",";
		  //echo $my_row[4].",";
		   //echo $my_row[5].",";
		   
		$to = $email;
$subject = "Activate online ";
$message = "আপনার account টি  র\n" ;
$message .="user name=".$my_row[1];
$message .="\n Password=".$my_row[3];
$message .="\n Email=".$my_row[2];
$from = "admin@sree.yzi.me";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
	//echo "activate".",";	 
echo "আপনার অ্যাকাউন্ড  (account)এর তথ্য   E-mail account($email) পাঠান (message)হয়েছে \n
 আপনার  E-mail অ্যাকাউন্ড(inbox / spam box) দেখুন \n";
		   
		   
		   
		   }
		 
else{
	echo "wrong".",";
    echo "ref".",";
}	
	
  mysql_close($dbc);

//setcookie("user", "Alex Porter", time()+3600);
?>