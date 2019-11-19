<?php
include'db.php';

$id=$_GET['id'];
$sql = "DELETE FROM `table_data` WHERE `id` = '$id'";
$qy=mysql_query($sql);

if($qy)
{
	echo"<script>
		alert('successfully Deleted');
        window.location.href='../login/Dashboard.php';
    </script>";
}
else{
	echo"<script>
		alert('error');
        window.location.href='../login/Dashboard.php';
    </script>";
}

?>