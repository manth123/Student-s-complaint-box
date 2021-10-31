<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'head.php';?>
	<?php include 'mail.php';?>
</head>
<body>
<?php include 'header.php';?>
<?php include 'menu.php';?>
<?php
$q=mysqli_query($con,"select * from tbluser");
while ($r=mysqli_fetch_array($q)) {

$email=$r["email"];
sendmail($email,"Great Offers","Visit My site");
}



?>
<?php include 'footer.php';?>
</body>
</html>