<?php
 $ids= $_POST["imgn"];
 $flg=$_POST["flg"];
 


 $dbc = mysqli_connect("mysql.2freehosting.com","u891147988_sree","sree123test456","u891147988_test")
        or die('Error connecting to Server');
   // mysql_select_db("u891147988_test");
//mysqli_query($dbc,"UPDATE user SET IMAGE='".$imgname."' WHERE id=".$ids);

 //echo $flg;
 //echo $ids;
if ($flg==0){
	

//echo $name;
$name=$_POST['Fname']." ".$_POST['Lname'];
mysqli_query($dbc,"UPDATE user SET NAME='".$name."' WHERE id=".$ids)or die(mysql_error()); 

echo "modify name";

}
else{
	$pasw=$_POST['pasw'];
	mysqli_query($dbc,"UPDATE user SET  PASSWD='".$pasw."' WHERE id=".$ids)or die(mysql_error()); 
	echo "modify pasw";
}


mysqli_close($dbc);





?>