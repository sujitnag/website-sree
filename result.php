 <?php
// $user_name = $_POST['user_name'];
	//$password = md5($_POST['password']);
    //print ("my name is sujit")   ;
	$dbc = mysql_pconnect("localhost","root","sujitnag")
        or die('Error connecting to Server');
    mysql_select_db("test");
    //$my_user_name = mysql_real_escape_string($user_name);
    //$my_password = mysql_real_escape_string(md5($password));
    $name="mourosi" ;
    //$que = 'select * from personal where name = "'.$name.'"';

    $result = mysql_query('select * from personal where name = "'.$name.'"');

    if($my_row = mysql_fetch_array($result)) {
       //  return  $my_row;
       //echo $my_row[0]."</br>";
      echo $my_row[1].",";
       echo $my_row[2].",";
       //echo "ok d"
     // return  $my_row;
    }
  mysql_close($dbc);
?>
