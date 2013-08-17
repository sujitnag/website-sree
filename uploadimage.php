<?php
//echo "<script src='mycookies.js'></script>";
 echo "<script src='jquery-1.7.1.min.js'></script>";
 
$flg=$_POST['flg']; 
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
 // echo "Upload: " . $_FILES["file"]["name"] . "<br>";
 // echo $_POST["imgn"];

if (!$extension) die ("Unknown file type");

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 30000)
&& in_array($extension, $allowedExts))
  {
  
  $exten=$_FILES["file"]["type"];
  $exten=substr_replace($_FILES["file"]["type"],"",0,6);
  
  
  if ($_FILES["file"]["error"] > 0)
    {
   echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
 //   echo "Upload: " . $_FILES["file"]["name"] . "<br>";
 //   echo "Type: " . $_FILES["file"]["type"] . "<br>";
//    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
 //   echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("image/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
	  $ids= $_POST["imgn"];
	//  echo "\n ids=".$ids;
	  $imgname=$_POST["imgn"]."BMU.";//.$exten;
	  $delf="image/".$imgname."*";
	 // echo "delf=".$delf;
	  $all_exist_file=glob($delf);
	// print_r($all_exist_file);
	 foreach ($all_exist_file as $delfile){
	 //echo "\ndelete=".$delfile;
	 //$delfile=$delfile;
	 	unlink($delfile);
		
	 }
	  $imgname= $imgname.$exten;
	  
	//  echo  "\n". $imgname ;
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "image/". $imgname);
      //echo "Stored in: " . "image/". $_FILES["file"]["name"];
	  ////////////////////// modify table data//////////////////
	  $dbc = mysqli_connect("mysql.2freehosting.com","u891147988_sree","sree123test456","u891147988_test")
        or die('Error connecting to Server');
   // mysql_select_db("test");
mysqli_query($dbc,"UPDATE user SET IMAGE='".$imgname."' WHERE id=".$ids);
mysqli_close($dbc);

?>
<html>
<head>
<script src="mycookies.js"></script>

<script>
//alert('my try to do');
var myflg="<?php  echo $flg;  ?>";
var imgid="<?php  echo $imgname;  ?>";
//alert(imgid);
if(myflg==1){
setCookie('uimg',imgid ,30);
window.parent.location = 'index.html';}
</script>
</head>
<body>
</body>
</html>


	<?php  





	  ///////////////////////////////////////////////////////////////////
	  
	  
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>