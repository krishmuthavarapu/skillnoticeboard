<?php include('includes/header.php'); ?>

<?php include('includes/navbar.php'); ?>


<div class="container">
	<div class="row">
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
	<div class="row">
		<div class="col-12 ">
			<h2 class="px-2 py-2">Institute Registration Details</h2>
		</div>
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
		<?php
		$user = $_SESSION['user']['email'];
		$query = "SELECT * FROM institute_registration WHERE email = '$user'";
		$query_run = mysqli_query($connection, $query);
		?>
		<?php
		if (mysqli_num_rows($query_run) > 0) {
			while ($row = mysqli_fetch_assoc($query_run)) {
				?>
				<div class="col p-2">
				<form action="institute_register_edit.php" method="post">
					<input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
					<button class="btn-success btn" name="institute_registration_btn" type="submit">Edit</button>
				</form>
				</div>
				<div class="table-responsive">
					<table id="example2" class="table table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>ID</th>
								<th>Institute Name</th>
								<th>Email</th>
								<th>Number</th>
								<th>City</th>
								<th>Location</th>
								<th>Website</th>
								<th>Appointment date</th>
								<th>Appointment time</th>
								<th>Date</th>
								<!-- <th>Delete</th> -->
							</tr>
						</thead>
						<tbody>

							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['institute_name']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['number']; ?></td>
								<td><?php echo $row['city']; ?></td>
								<td><?php echo $row['location']; ?></td>
								<td><?php echo $row['website']; ?></td>
								<td><?php echo $row['adate']; ?></td>
								<td><?php echo $row['atime']; ?></td>
								<td><?php echo $row['date']; ?></td>

								<!-- <td>
                                    				<form action="code.php" method="POST">
                                        				<input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                        				<button class="btn-danger " name="delete_ins_reg_data" type="submit">Delete</button>
                                    				</form>
                                				</td> -->

								<!-- <td><button class="btn-success " type="submit">Edit</button></td>
                                                                				<td><button class="btn-danger " type="submit">Delete</button></td> -->


							</tr>

						</tbody>
					</table>
				</div>
			<?php
			}
		} else {
			echo "No record found";
		}
		?>
	</div>
</div>
</div>
</div>
</div>
<!-- End of Page Wrapper -->
<?php include('includes/scripts.php'); ?>

<?php include('includes/footer.php'); ?>