<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'head.php';?>
</head>

<body>
<?php include 'header.php';?>
<?php include 'sidemenu.php';?>

<form method="post" enctype="multipart/form-data">
<h2>Enter Details</h2>
	<table class="table">

<Tr>
			<Td>
				 Category
			
				<select name="cmbcategory">
					<?php $q=mysqli_query($con,"select * from tblcategory");
					while ($r=mysqli_fetch_array($q)) {
							?>
							<option value="<?php echo $r['cid'];?>"><?php echo  $r["cname"];?></option>
							<?php
						
					}

					?>
				</select>
			</td>
		
<Tr>
			
			<td>
                <label for="event">Event:</label>
				<input type="date" id="event" name="event">
			</td>
		</Tr>
<tr><td>
<fieldset>
        Select Service
            <input type="checkbox" name="sound" value="sound">sound<br>
             <input type="checkbox" name="food" value="food">food<br>
            <input type="checkbox" name="theme" value="theme">theme<br>
           <input type="checkbox" name="travel" value="sound">travel<br>
        </fieldset>
</td></tr>



<Tr>
			
			<td>
                <label for="appt">From time:</label>
				<input type="time" id="appt" name="appt">
			</td>
		</Tr>
<Tr>
			
			<td>
                <label for="appt">To time:</label>
				<input type="time" id="appt" name="appt">
			</td>
		</Tr>
<Tr>
			<td>
				Guestcount:
			
			
				<input type="text" name="txtguest">
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
