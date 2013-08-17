<?php
$gids=$_POST['gid'];
//$serverS=$_POST['ss'];
//$pasw=$_POST['pasw'];
$hosts="localhost";
$users="root";
$passw="sujitnag";
$databs="test";
$tables="user";                 //"golpo";


//echo $gids;
$dbc = mysql_pconnect("mysql.2freehosting.com","u891147988_sree","sree123test456")
        or die('Error connecting to Server');
    mysql_select_db("u891147988_test");
 
// $name="mourosi" ;
    //$que = 'select * from personal where name = "'.$name.'"';

foreach($gids as $x){//////



    $result = mysql_query('select * from '. $tables.' where id = "'.$x.'"');                                              //('select * from '. $tables.' where gid = "'.$gids.'"');

  if($my_row = mysql_fetch_array($result)) {
 // echo $my_row[0].",";
  echo $my_row[1].",";
  //echo $my_row[2]."/";
 // echo $my_row[3].",";
 // echo $my_row[4];
  
  echo $my_row[5].",";
  }
else{
	echo "not enter";
}


}/////////////////////
?>