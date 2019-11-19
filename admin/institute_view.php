<?php
include('security.php');
include('db/config.php');

include('includes/header.php'); ?>

<?php include('includes/navbar.php'); ?>


<div class="container">
    <div class="row">
    <div class="col-12">
    <h4 class="pl-2">Institute Details</h4>
</div>
    </div>
    <div class="row">
    <?php
            if (isset($_POST['edit_btn'])) {
                $id = $_POST['edit_id'];

                $query = "SELECT * FROM institute_data WHERE id='$id'";
                $query_run = mysqli_query($connection, $query);
                foreach ($query_run as $row) 
                {
                    ?>
    <div class="col-12">
    <ul class="list-group">
    <li class="list-group-item">Institute : <span class="font-weight-bold"><?php echo $row['institute']?></span></li>
    <li class="list-group-item">course : <span class="font-weight-bold"><?php echo $row['course']?></span></li>
    <li class="list-group-item">category : <span class="font-weight-bold"><?php echo $row['category']?></span></li>
    <li class="list-group-item">Location : <span class="font-weight-bold"><?php echo $row['location']?></span></li>
    <li class="list-group-item">City : <span class="font-weight-bold"><?php echo $row['city']?></span></li>
    <li class="list-group-item">Batch Date : <span class="font-weight-bold"><?php echo $row['batch_date']?></span></li>
    <li class="list-group-item">Demo Date : <span class="font-weight-bold"><?php echo $row['demo_date']?></span></li>
    <li class="list-group-item">Mobile Number : <span class="font-weight-bold"><?php echo $row['number']?></span></li>
    <li class="list-group-item">Email : <span class="font-weight-bold"><?php echo $row['email']?></span></li>
    </ul>
    </div>
    <?php
                }
            }
        ?>
    </div>
</div>


<!-- End of Page Wrapper -->
<?php include('includes/scripts.php'); ?>

<?php include('includes/footer.php'); ?>