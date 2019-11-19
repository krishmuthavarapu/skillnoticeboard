<?php
include('includes/header.php'); ?>

<?php include('includes/navbar.php'); ?>


<div class="container">
    <div class="row">
        <h4 class="pl-2">Edit Details</h4>
    </div>
    <div class="row pt-4 pl-2">
        <div class="col">
            <?php
            if (isset($_POST['institute_registration_btn'])) {
                $id = $_POST['edit_id'];

                $query = "SELECT * FROM institute_registration WHERE id='$id'";
                $query_run = mysqli_query($connection, $query);
                foreach ($query_run as $row) 
                {
                    ?>
                    <form method="POST" action="code.php">
                        <input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" value="<?php echo $row['institute_name']?>" name="edit_institute_name" placeholder="Institute Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" value="<?php echo $row['email']?>" name="edit_email" placeholder="email ">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" value="<?php echo $row['number']?>" name="edit_number" placeholder="Number">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" value="" name="edit_password" placeholder="password">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" value="<?php echo $row['city']?>" name="edit_city" placeholder="City">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" value="<?php echo $row['location']?>" name="edit_location" placeholder="Location">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" value="<?php echo $row['website']?>" name="edit_website" placeholder="Website">
                    </div>
                    
                    
                    <a href="profile.php" class="btn btn-danger">Cancel</a>
                    <button class="btn btn-primary" type="submit" name="update_institute_register">Update</button>
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