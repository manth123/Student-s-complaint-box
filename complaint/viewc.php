<?php
require_once 'admin/head.php';
$con=mysqli_connect("localhost","root","","dbcomplaint");
$q1=mysqli_query($con,"select * from tblcomplaint where uid='".$_GET["uid"]."'");
while ($r=mysqli_fetch_array($q1)) {
	?>
	<TABLE  class="table">
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
				Description
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
	</TABLE>
	<?php
	# code...
}
     

?>
