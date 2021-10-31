<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'head.php';?>
</head>
<body>
<?php include 'header.php';?>
<?php include 'menu.php';?>
<?php include 'upload.php';?>
<?php
if(isset($_POST["btnsave"]))
{
	extract($_POST);
	$z=fileupload("images");
	mysqli_query($con,"INSERT INTO `tbluser2`(`title`, `shortdesc`, `pprice`, `pimage`, `cid`, `type`) VALUES ('$txtename','$txtdesc','$txtprice','$z','$cmbcategory','$cmbtype')");
}


?>
<form method="post" class="table" enctype="multipart/form-data">
	<table>
		<Tr>
			<Td>
				Choose Event Type
			</Td>
			<td>
				<select name="cmbcategory" class="form-control">
					<?php $q=mysqli_query($con,"select * from tblcategory");
					while ($r=mysqli_fetch_array($q)) {
							?>
							<option value="<?php echo $r['cid'];?>"><?php echo  $r["cname"];?></option>
							<?php
						
					}

					?>
				</select>
			</td>
		</Tr>
		<Tr>
			<td>
				Event Name
			</td>
			<td>
				<input type="text" name="txtename" class="form-control">
			</td>
		</Tr>
<Tr>
			<td>
				Price
			</td>
			<td>
				<input type="text" name="txtprice" class="form-control">
			</td>
		</Tr>
		<Tr>
			<td>
				Description
			</td>
			<td>
				<textarea name="txtdesc" class="form-control"></textarea>
			</td>
		</Tr>

	
		<Tr>
			<td>
				Event Image
			</td>
			<td>
				<input type="file" name="txtfile" class="form-control">
			</td>
		</Tr>
		
		
		<Tr>
			<td>
				Event Type
			</td>
			<td>
				<select name="cmbtype" class="form-control">
					<option value="basic">Basic</option>
					<option value="midway">Midway</option>
					<option value="royal">Royal</option>
				</select>
			</td>
		</Tr>
		<tr>
			<Td>
				<input type="submit" name="btnsave" value="Save">
			</Td>
		</tr>
	</table>
<?php include 'footer.php';?>
</body>
</html>
