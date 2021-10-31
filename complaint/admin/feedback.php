<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'head.php';?>
</head>
<body>

<?php
if(isset($_POST["btnsave"]))
{
	extract($_POST);
	mysqli_query($con,"insert into tblfeedback(feedback)Values('$txtfeedback')");
}


?>
<form method="post">
	<table>
		<Tr>
			<td>
				Feedback
			</td>
			<td>
				<textarea name="txtfeedback"></textarea>
			</td>
		</Tr>
		<tr>
			<Td>
				<input type="submit" name="btnsave" value="Save">
			</Td>
		</tr>
	</table>

       <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
</body>
</html>
