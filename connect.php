<?php
$dbc2 = mysql_pconnect("localhost","root","sujitnag")
        or die('Error connecting to Server');
    mysql_select_db("test");
$result2 = mysql_query('select * from user where id = "'.$my_row[0].'"' );//and PASSWD="'.$pasw.'"');
if($user_row = mysql_fetch_array($result2)) {


 mysql_close($dbc2);}
?>