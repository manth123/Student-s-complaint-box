<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once 'head.php';?>
</head>
<body>
	<?php require_once 'header.php';?>
	<?php require_once 'menu.php';?>
<?php
$con=mysqli_connect("localhost","root","","dbcomplaint");
$q1=mysqli_query($con,"select * from tblcomplaint");
while ($r=mysqli_fetch_array($q1)) {
	?>
	<TABLE class="table">
		<Tr>
			<Td>
				Complaint ID
			</Td>
			<tD>
				<?php echo $r["complaintid"];?>
			</tD>
		</Tr>
		<Tr>
			<Td>
				Class
			</Td>
			<tD>
				<?php echo $r["class"];?>
			</tD>
		</Tr>
		<Tr>
			<Td>
				Type
			</Td>
			<tD>
				<?php echo $r["type"];?>
			</tD>
		</Tr>
		<Tr>
			<Td>
				Description
			</Td>
			<tD>
				<?php echo $r["description"];?>
			</tD>
		</Tr>
		<Tr>
			<Td>
				Action Taken
			</Td>
			<tD>
				<?php echo $r["actiontaken"];?>
			</tD>
		</Tr>
		<Tr>
			<Td>
				Date
			</Td>
			<tD>
				<?php echo $r["ddate"];?>
			</tD>
		</Tr>
		<tr>
			<Td>
				<a href="takeaction.php?id=<?php echo $r['complaintid'];?>">Action</a>
	</TABLE>
	<?php
	# code...
}
     

?>
<?php require_once 'footer.php';?>
