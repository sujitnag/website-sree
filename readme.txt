1st .- make a web page in bengoli and show bengoli font, 
  HTML file need to save in UTF-8 format. 
  
  for example :- I open notepad make a new file save as intro.html select UTF-8.
  
  otherwise font will not show. 
  the open the file in any html editor to add your code but don't save-as, always save.
  
2nd-search raw

 $dbc = mysql_pconnect("localhost","root","sujitnag")
        or die('Error connecting to Server');
    mysql_select_db("test");
$result = mysql_query('select * from user where EMAIL = "'.$email.'" and PASSWD="'.$pasw.'"');
if($my_row = mysql_fetch_array($result)) {

3rd insert variable value in mysql

$inv="INSERT INTO user (NAME,EMAIL, PASSWD, LOGDATE ) VALUES('".$name."', '".$email."','".$pasw."','".$ldate."')"; 
mysql_query($inv,$dbc)or die(mysql_error()); 


4th:- php delete("file name")------- not work
use unlink;


5th : js in php file

echo "<script>document.write('ok its work');</script>";


$my=6;
echo "<script>document.write('ok its work'+ $my);</script>";