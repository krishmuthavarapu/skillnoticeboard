<?php
include('security.php');
include('db/config.php');

include('includes/header.php'); ?>

<?php include('includes/navbar.php'); ?>


<div class="container">
	<div class="row">
		<h4 class="pl-2">Edit Details</h4>
		<?php
    if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
        echo '<h4>' . $_SESSION['success'] . '</h4>';
        unset($_SESSION['success']);
    }
    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        echo '<h4 class="bg-warning">' . $_SESSION['status'] . '</h4>';
        unset($_SESSION['status']);
    }
    ?>
	</div>
	<div class="row pt-4 pl-2">
		<div class="col">
			<?php
			if (isset($_POST['edit_photo'])) {
				$id = $_POST['edit_id'];

				$query = "SELECT * FROM institute_data WHERE id='$id'";
				$query_run = mysqli_query($connection, $query);
				foreach ($query_run as $row) {
					$image = (!empty($row['photo'])) ? '../img/' . $row['photo'] : '../img/jav.jpg';

					?>
					<form method="POST" action="photo_update.php" enctype="multipart/form-data">
						<div class="form-group">
						<input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
						<h4><?php echo $row['institute'] ?></h4>

							<img src='<?php echo "$image" ?>'width='20%'><br>
							File Name: <input type="text" name="name" placeholder="file name" /><br />
							<input type="file" class="form-control form-control-user" value="" name="file">
						</div>

						<a href="institute_data.php" class="btn btn-danger">Cancel</a>
						<button class="btn btn-primary" value="upload" type="submit" name="upload">Update</button>

						<!-- <form enctype="multipart/form-data" method="post">
							your city<input type="text" name="c" /><br />
							Your File Name <input type="file" name="file" /><br />
							<input type="submit" value="Upload" name="upload" />
						</form> -->
					</form>
				<?php
			}
		}
		?>
		</div>

	</div>

</div>


<!-- End of Page Wrapper -->
<?php include('includes/scripts.php'); ?>

<?php include('includes/footer.php'); ?>