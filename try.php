
<?php
/*$dbc = mysqli_connect("localhost","root","sujitnag","test")
        or die('Error connecting to Server');
		
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }		
		
$imgname="myfile2.jpg";
$imgn="2";
   // mysql_select_db("test");
mysqli_query($dbc,"UPDATE user SET IMAGE='".$imgname."' WHERE id=".$imgn);
mysqli_close($dbc);*/
$ni=$_POST['indx'];
$typef=$_POST['ty'];
$fn=$_POST['fileN'];
//echo $fn;


$xmlDoc = new DOMDocument();
$xmlDoc->load($fn);
$x = $xmlDoc->documentElement;
//$user = $x->getElementsByTagName('user')->item(0);
//echo "\nretrive valu". $user->childNodes->item(2)->nodeValue;

$perent=$x->getElementsByTagName('crecord');

///////////////////////////////////////// remove a nodr////////////
if($typef=="delete"){
echo "ok enter";
	$duser = $x->getElementsByTagName('user')->item($ni);
	$olduser=$x->removeChild($duser);
	
}

//$olduser=$x->removeChild($user);

///////////////////////    ///////////////////////////////////////


////////////////////////////// addd a new  ////////////////////////
/*$newNode=$user->cloneNode(true);

$xmlDoc->documentElement->appendChild($newNode);

$adduser=$x->getElementsByTagName('user');
$len=$adduser->length;
echo $len;
$user1=$x->getElementsByTagName('user')->item($len-1);

$user1->childNodes->item(1)->nodeValue="20";
$user1->childNodes->item(3)->nodeValue="no write it is";*/

//////////////////////////////////////////////////////////////////////

//////////////////////

//$newch=$newNode
echo $xmlDoc->saveXML();//  asXML();
$xmlDoc->save($fn);
//foreach ($x->childNodes AS $item)
  //{
  //print $item->nodeName . " = " . $item->nodeValue . "<br>";
 // }
  //$y=$x->childNodes->nodeName;
  //$xmlDoc->removeChild($y);
 
//$x=$xmlDoc->documentElement->removeChild($y[0]);
//$y->nodename();
//print_r $y; 
//$x=xmlDoc->documentElement->removeChild($y);

//print $y;
//print $xmlDoc->saveXML();
//$xmlDoc->
?>

