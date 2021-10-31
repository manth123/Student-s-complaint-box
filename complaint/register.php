<?php
$con=mysqli_connect("localhost","root","","dbcomplaint");
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$pass=$_REQUEST["pass"];

$q=mysqli_query($con,"insert into tbluser(uname,email,upass)values('$name','$email','$pass')");
if($q==1)
{
	echo "1";
}
else
{
	echo "0";
}
     

?>
