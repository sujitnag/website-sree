<?php

$email=$_POST['email'];
$pasw=$_POST['pasw'];
$count=0;
$dbc = mysql_pconnect("mysql.2freehosting.com","u891147988_sree","sree123test456")
        or die('Error connecting to Server');
    mysql_select_db("u891147988_test");
 
// $name="mourosi" ;
    //$que = 'select * from personal where name = "'.$name.'"';

    $result = mysql_query('select * from user where EMAIL = "'.$email.'" and PASSWD="'.$pasw.'"');

  if($my_row = mysql_fetch_array($result)) {
   //setcookie("uid",$my_row[0]."BMO" , time()+3600); 
       //  return  $my_row;
      // echo $my_row[6]."</br>";
	   if($my_row[6]==1){
	 
	   echo $my_row[0].",";
	   echo $my_row[1].",";
	    echo $my_row[2].",";
		 echo $my_row[3].",";
		  echo $my_row[4].",";
		   echo $my_row[5].",";
		   }
		 else{
		$to = $email;
$subject = "Activate online ";
$message = "আপনার account টি তৈরি হয়েছে activate করতে click http://sree.yzi.me/activate.php?id=$und \n অথবা address টি কে copy করে address bae এ past করুন\n" ;
$message .="user name=".$my_row[1];
$message .="\n Password=".$my_row[3];
$message .="\n Email=".$my_row[2];
$from = "admin@sree.yzi.me";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
//echo "Mail Sent.";
		 
	echo "activate".",";	 
echo "আপনার account টি তৈরি হয়েছে \n আপনার E-mail account($email) এ আরও একটি  activation message পাঠান হয়েছে (inbox / spam box এ দেখুন) \n";
			
			
		 }  
	  
	 // $count=1+$count;
       //echo $my_row[2].",";
       //echo "ok d"
     // return  $my_row;
    }
else{
	echo "wrong".",";
    echo "ref".",";
}	
	
  mysql_close($dbc);

//setcookie("user", "Alex Porter", time()+3600);
?>