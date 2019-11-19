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
            
			
					 <center><h3 class="page-header">Contact Us Page data</h3></center>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Add new flavor						  
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<div class="col-lg-3"></div>
                           <div class="col-lg-6">
							<center>
							<h1>Enter the details of flavor</h1>
							<form action="" method="post" class="form-group" enctype="multipart/form-data">
								</br>
								<span>Flavour name</span>
								<input type="text" class="form-control" name="name" placeholder="Flavour name" required></br>
									<span>Catagory</span>
								<select class="form-control" name="category">
								<?php
								$sql = "SELECT * FROM `cat` WHERE 1 order by id asc";
								$qy= mysql_query($sql);
								
								while($row = mysql_fetch_array($qy))
								{
								?>
									<option><?=$row['name'];?></option>
								<?php
									}
								?>
							
								</select></br>
									<span>Flavour Price</span>
								<input type="text"  class="form-control" name="price" placeholder="Price" required></br>
									<span>Flavour description</span>
								<input type="text"  class="form-control" name="desc" placeholder="Description" required><span>Description should not more that 35 words<span></br></br>
								 	<span>Flavour Image</span>
								 <input type="file" id="photo" name="photo"class="form-control" required />
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
if (isset($_POST['submit'])) {
   
$name = $_POST['name'];
$price = $_POST['price'];
$desc = $_POST['desc'];
$category = $_POST['category'];
   
    $file = rand(1, 100000000) . "-" . $_FILES['photo']['name'];
   
    $file_loc = $_FILES['photo']['tmp_name'];
   
    $folder = "../uploads/";
    $new_file_name = strtolower($file);
    
    $final_file = str_replace(' ', '-', $new_file_name );

	
    if (move_uploaded_file($file_loc, $folder . $final_file)) {
		
	
		
        $sql = "INSERT INTO `table_data` (`id`, `category`, `name`, `image`, `price`, `description`) VALUES (NULL, '$category', '$name', '$new_file_name', '$price', '$desc')";
        mysql_query($sql);
?>
		<script>
		alert('successfully uploaded');
        window.location.href='../login/Dashboard.php';
        </script>
		<?php
    } else {
?>
		<script>
		alert('error while uploading file');
        window.location.href='../login/Dashboard.php';
        </script>
		<?php
    }
	}

?>