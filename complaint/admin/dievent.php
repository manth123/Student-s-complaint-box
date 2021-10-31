<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'head.php';?>
</head>
<body>
<?php include 'header.php';?>
<?php include 'menu.php';?>
<table class="table">
	<Tr>
		<td>
			Title
		</td>
		<td>
			Price
		</td>
		<td>
			Short Desc
		</td>
      <td>
			Type
		</td>
            
	</Tr>

<?php
$q=mysqli_query($con,"select * from tbluser2");
while ($r=mysqli_fetch_array($q)) {
	?>
	<tr>
		<td>
			<?php echo $r["title"];?>
		</td>
		<td>
			<?php echo $r["pprice"];?>
		</td>
		<Td>
			<?php echo $r["shortdesc"];?>
		</Td>
        
       <Td>
			<?php echo $r["type"];?>
		</Td>
			
			
	</tr>


	<?php
	# code...
}

?>
</table>
<?php include 'footer.php';?>
</body>
</html>
