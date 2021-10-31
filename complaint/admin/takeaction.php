<?php
require_once 'head.php';
if(isset($_POST["btnshow"]))
{
extract($_POST);
mysqli_query($con,"update tblcomplaint set actiontaken='$txtdesc' where complaintid='".$_GET["id"]."'");
header("location:viewcomplaint.php");	
}


?>
<form method="post">
	<table>
		<tR>
			<Td>
				Description
			</Td>
			<td>
				<textarea name="txtdesc" class="form-control"></textarea>
			</td>
		</tR>
		<tr>
			<td>
				<input type="submit" name="btnshow" value="Take Action" class="btn btn-primary">
			</td>
		</tr>
	</table>
</form>