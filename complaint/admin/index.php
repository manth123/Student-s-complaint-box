<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once 'head.php';?>
</head>
<body>
<center>
<?php
if(isset($_POST["btnlogin"]))
{
	extract($_POST);
	if($txtemail=="admin@gmail.com" && $txtpass=="admin")
	{
		header("location:viewevent.php");
	}
}

?>
<div class="row">
	<div class="col-md-6">
<form method="post">
	<table class="table">
		<tr>
			<td>
				Admin Email
			</td>
			<td>
				<input type="text" class="form-control" name="txtemail" required="">
			</td>
		</tr>
		<tr>
			<td>
				Admin Password
			</td>
			<td>
				<input type="password"  class="form-control" name="txtpass" required="">
			</td>
		</tr>
		<tr>
			<Td colspan=2 align=center>
				<input type="submit" class="btn btn-success" name="btnlogin" value="Login">
			</Td>
		</tr>
	</table>
</form>
</center>
</div>
</div>
<?php require_once 'footer.php';?>
</body>
</html>