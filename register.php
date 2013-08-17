<?php
$email=$_POST['email'];
$pasw=$_POST['pasw'];
$dbc = mysql_pconnect("mysql.2freehosting.com","u891147988_sree","sree123test456")
        or die('Error connecting to Server');
    mysql_select_db("u891147988_test");
$result = mysql_query('select * from user where EMAIL = "'.$email.'"' );//and PASSWD="'.$pasw.'"');
if($my_row = mysql_fetch_array($result)) {
echo $email." id টি পুর্বে register করা আছে  ";

 mysql_close($dbc);
}
else{
$name=$_POST['Fname']." ".$_POST['Lname'];
$ldate=date("Y-m-d");

	

$inv="INSERT INTO user (NAME,EMAIL, PASSWD, LOGDATE ) VALUES('".$name."', '".$email."','".$pasw."','".$ldate."')"; //(".$name." ,".$email." ,".$pasw." ,".$ldate.")"; //(".$name.",".$email.",".$pasw.",".$ldate.")";//( 'mm' ,'pppp' ,'xxx' ,'2013-4-4')";( 'uuumm' ,'qqqq' ,'xxx' ,'".$ldate."')";
//print($inv);
mysql_query($inv,$dbc)or die(mysql_error()); 
$und=mysql_insert_id($dbc);
   //  echo $und.",";
 mysql_close($dbc);
 
 ///////////////////////////// send email to the user//////////////////
 
$to = $email;
$subject = "Activate online ";
$message = "আপনার account টি তৈরি হয়েছে activate করতে click http://sree.yzi.me/activate.php?id=$und \n অথবা address টি কে copy করে address bae এ past করুন\n" ;
$message .="user name=".$name;
$message .="\n Password=".$pasw;
$message .="\n Email=".$email;
$from = "admin@sree.yzi.me";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
//echo "Mail Sent.";
 $flg=0;
// $imgn=$und;
print "<h1>আপনার account টি তৈরি হয়েছে \n আপনার E-mail account($email) এ একটি activation message পাঠান হয়েছে (inbox / span box এ দেখুন) \n</h1>";
print "<h2><b>আপনার ছবি টি upload করুন</b><h2>";
////////////////  upload image form///////////
print '<img src="addmin/max.jpg" alt="max 30k" width="50" height="50" border="2"></img>';
print "<form action='uploadimage.php' method='post' enctype='multipart/form-data'>";
print "<label for='file'>Filename:</label>";
print "<input type='file' name='file' id='file'><br>";
print "<input type='hidden' name='imgn' value=$und>";
print "<input type='hidden' name='flg' value=$flg>";
print "<input type='submit' name='submit' value='Submit'>";
print "</form>";



	  
}

 //mysql_close($dbc);

?>