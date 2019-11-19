<?php include('db.php');
include('ses.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Us Live pops</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
		<?php include('nav.php');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
            
			
					 <center><h3 class="page-header"></h3></center>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           					  
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<div class="col-lg-3"></div>
                           <div class="col-lg-6">
							<center>
							<h1>Edit Flavor details	</h1>
							<form action="" method="post" class="form-group" enctype="multipart/form-data">
								</br>
								<?php
								$id=$_GET['id'];
								$sql = "SELECT * FROM `table_data` WHERE `id`='$id'";
								$qy= mysql_query($sql);
								
								while($row = mysql_fetch_array($qy))
								{
								?>
								<span>Flavor name</span>
								<input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>" ></br>
								
								<span>Flavor Category</span>
								<select class="form-control" name="category">
									<option value="<?php echo $row['category'];?>"><?php echo $row['category'];?></option>	
									<option>spicy</option>
									<option>premium</option>
									<option>sweet</option>
								</select></br>
								
								<span>Price</span>
								<input type="text"  class="form-control" name="price" value="<?php echo $row['price']?>" ></br>
								
								<span>Flavor description</span>
								<input type="text"  class="form-control" name="desc" value="<?php echo $row['description']?>" ><span>Description should not more that 35 words<span></br></br>
								
								<span>Flavor image</span>
								<input type="file" id="photo" name="photo" class="form-control"  /></br>
								 <img src="../uploads/<?php echo $row['image']?>" class="img-responsive" style="width :100px; height:100px;" ></br>
									
									
									<input type="hidden" name="idv" value="<?php echo $row ['id'];?>">
									<input type="hidden" name="image" value="<?php echo $row ['image'];?>">
								<?php
								}?>
								<input type="submit" class="btn btn-primary" name="submit" value="Submit" name="submit"></br>
							</form>
							
							</center> 
                            </div>  
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>




<?php
include('db.php');
$photo="";
if (isset($_POST['submit'])) 
{
$idv = $_POST['idv'];
$name = $_POST['name'];
$price = $_POST['price'];
$desc = $_POST['desc'];
$category = $_POST['category'];
$new_file_name = $_POST['image'];

    $file = rand(1, 100000000) . "-" . $_FILES['photo']['name'];
   
    $file_loc = $_FILES['photo']['tmp_name'];
   
    $folder = "../uploads/";
    $new_file_name = strtolower($file);
    
    $final_file = str_replace(' ', '-', $new_file_name );

	
    if (move_uploaded_file($file_loc, $folder . $final_file))

	{
        $sql = "UPDATE `table_data` SET `category` = '$category', `name` = '$name', `image` = '$new_file_name', `price` = '$price', `description` = '$desc' WHERE `table_data`.`id` = '$idv'";
		mysql_query($sql);

		echo "<script>
		alert('successfully uploaded');
        window.location.href='../login/Dashboard.php';
        </script>";
		
    } 
	else 
	{

		echo"<script>
        window.location.href='../login/Dashboard.php';
        </script>";
		
    }

}

?>