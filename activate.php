<?php
 $dbc = mysqli_connect("mysql.2freehosting.com","u891147988_sree","sree123test456","u891147988_test")
        or die('Error connecting to Server');
   // mysql_select_db("test");
   $ids=$_GET['id'];
mysqli_query($dbc,"UPDATE user SET active=1 WHERE id=".$ids);
mysqli_close($dbc);

print "<h1>আপনার account টি activate হয়েছে.<br> এবার login করুন</h1><br>";
print "<a href='http://sree.yzi.me/'>শ্রী অন লাইন ম্যাগাজিন </a>";
?>