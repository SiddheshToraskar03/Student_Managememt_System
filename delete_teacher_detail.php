<?php
include 'database_connect.php';

if(isset($_GET['delete_teacher'])){
	$delete = $_GET['delete_teacher'];

	$query = "select * from add_teacher where t_id = '$delete'";
	$rs = mysqli_query($conn,$query);
	while($row =  mysqli_fetch_assoc($rs)){
		$image = $row['photo'];
	}

	unlink('t_image/'.$image);

	$sql = "delete from add_teacher where t_id = '$delete'";
	$run = mysqli_query($conn,$sql);
	if($run){
		echo "<script>window.open('view_teacher.php?delete_msg=Data deleted successfully')</script>";
	}
}

?>