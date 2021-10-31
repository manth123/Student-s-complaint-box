<?php
$con=mysqli_connect("localhost","root","","dbcomplaint");

$email=$_REQUEST["email"];
$pass=$_REQUEST["pass"];

$q=mysqli_query($con,"select * from tbluser where email='$email' and upass='$pass'");
if(mysqli_num_rows($q)>0)
{
	echo "1";
}
else
{
	echo "0";
}
     

?>
