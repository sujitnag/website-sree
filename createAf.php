<?php
$type=$_POST['type'];
$aname=$_POST['name'];
$uid=$_POST['uid'];

////////////////////////////////////////////////////////////////////////////////////////////////

$dbc = mysql_pconnect("mysql.2freehosting.com","u891147988_sree","sree123test456")
        or die('Error connecting to Server');
    mysql_select_db("u891147988_test");
//$result = mysql_query('select * from golpo where EMAIL = "'.$email.'"' );//and PASSWD="'.$pasw.'"');
//if($my_row = mysql_fetch_array($result)) {
///echo $email." id টি পুর্বে register করা আছে  ";

 //mysql_close($dbc);
//}
//else{
//$name=$_POST['Fname']." ".$_POST['Lname'];
$ldate=date("Y-m-d");

	

$inv="INSERT INTO article (sname,id,type,cdate ) VALUES('".$aname."', '".$uid."','".$type."','".$ldate."')"; //(".$name." ,".$email." ,".$pasw." ,".$ldate.")"; //(".$name.",".$email.",".$pasw.",".$ldate.")";//( 'mm' ,'pppp' ,'xxx' ,'2013-4-4')";( 'uuumm' ,'qqqq' ,'xxx' ,'".$ldate."')";
//print($inv);
mysql_query($inv,$dbc)or die(mysql_error()); 
$gid=mysql_insert_id($dbc);
    // echo $und.",";
 mysql_close($dbc);









/////////////////////////////////////////////////////////////////////////////////////////////////

$fn="allxml/"."$gid".$type.".xml";

copy("templet.xml",$fn);

$xmlDoc = new DOMDocument();
$xmlDoc->load($fn);
$x = $xmlDoc->documentElement;
$art=$x->getElementsByTagName('article')->item(0);;

$art->childNodes->item(1)->nodeValue=$aname;
//$user1->childNodes->item(2)->nodeValue=$comm;
$art->childNodes->item(3)->nodeValue=date('d-m-Y');
$xmlDoc->saveXML();//  asXML();
$xmlDoc->save($fn);

echo "ok".",";
echo $fn.",";


?>