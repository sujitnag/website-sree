<?php
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
//echo "ok enter";
	$duser = $x->getElementsByTagName('user')->item($ni);
	$olduser=$x->removeChild($duser);
$xmlDoc->saveXML();//  asXML();
$xmlDoc->save($fn);
}

//$olduser=$x->removeChild($user);

///////////////////////   edit a node ///////////////////////////////////////

if($typef=="edit"){
$comm=$_POST['com'];
echo "ok enter";
	$euser = $x->getElementsByTagName('user')->item($ni);
	
//$user1->childNodes->item(1)->nodeValue="20";
$euser->childNodes->item(2)->nodeValue=$comm;
	
$xmlDoc->saveXML();//  asXML();
$xmlDoc->save($fn);
}



////////////////////////////// addd a new  ////////////////////////

if($typef=="create"){
	$comm=$_POST['com'];
$user = $x->getElementsByTagName('user')->item(0);
$newNode=$user->cloneNode(true);

$xmlDoc->documentElement->appendChild($newNode);

$adduser=$x->getElementsByTagName('user');
$len=$adduser->length;
echo $len;
$user1=$x->getElementsByTagName('user')->item($len-1);

$user1->childNodes->item(0)->nodeValue=$ni;
$user1->childNodes->item(2)->nodeValue=$comm;
$user1->childNodes->item(4)->nodeValue=date('d-m-Y');
$xmlDoc->saveXML();//  asXML();
$xmlDoc->save($fn);


}
//////////////////////////////////////////////////////////////////////

//////////////////////

//$newch=$newNode

?>