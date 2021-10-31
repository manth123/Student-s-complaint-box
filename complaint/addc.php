<?php
$con=mysqli_connect("localhost","root","","dbcomplaint");
$class=$_REQUEST["class"];
$type=$_REQUEST["type"];
$description=$_REQUEST["description"];
$uid=$_REQUEST["uid"];

date_default_timezone_set("Asia/Calcutta");
$d=date("y/m/d h:i:s"); 

$q=mysqli_query($con,"insert into tblcomplaint(class,type,description,uid,ddate)values('$class','$type','$description','$uid','$d')");
if($q==1)
{
	echo "1";
}
else
{
	echo "0";
}
     

?>
