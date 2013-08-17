<?php
//$email=$_POST['email'];
//include "findA.css";
echo '<style>

#trid:hover{
	background-color:#99ff88;
}

</style>';

$type=$_GET['type'];
//echo $type;
$dbc = mysql_pconnect("mysql.2freehosting.com","u891147988_sree","sree123test456")
        or die('Error connecting to Server');
    mysql_select_db("u891147988_test");
if($type=="ed")
{
$ids=$_GET['uid'];
//echo $ids;
	$result = mysql_query('select * from article where id = "'.$ids.'"' );
}	
	
else if($type=="a"){
	$result = mysql_query('select * from article order by type' );
}
else{
$result = mysql_query('select * from article where type = "'.$type.'"' );	
}	
//and PASSWD="'.$pasw.'"');
//$i=0;
echo '<table width="80%">';
while($my_row = mysql_fetch_array($result)) {
$fname="allxml/"."$my_row[2]".$my_row[4].".xml";/////

//echo $fname;

echo '<tr bgcolor="#408080" id="trid"><td>';
echo '<a href="base.html?'.$fname.'">'.$my_row[1].'</a></td>';

//////////////////////////////////////////////////////////////////////////
//include 'connect.php';
//echo '<td><img width="50" height="50" src="image/'.$user_row[5].'"></img></td><td>';
//echo $user_row[1]."</td>";

$dbc2 = mysql_pconnect("mysql.2freehosting.com","u891147988_sree","sree123test456")
        or die('Error connecting to Server');
    mysql_select_db("u891147988_test");
$result2 = mysql_query('select * from user where id = "'.$my_row[0].'"' );//and PASSWD="'.$pasw.'"');
if($user_row = mysql_fetch_array($result2)) {
echo '<td><img width="50" height="50" src="image/'.$user_row[5].'"></img></td><td>';
echo $user_row[1]."</td>";

 mysql_close($dbc2);
}

echo '<td>'.$my_row[3].'</td>';

switch($my_row[4]){

case"g": echo '<td> গল্প</td>';
        break;
		
case"k": echo '<td> কবিতা</td>';
        break;
case"s": echo '<td> শিশু সাহিত্য</td>';
        break;
case"u": echo '<td> উপন্যস</td>';
        break;	

	
}
///////////////////////////////////////////////////////////////////////////////
 //$i=$i+1;
 
 echo '</tr>';
}

echo "</table>";
mysql_close($dbc);



?>