<?php
include('security.php');
include('db/config.php');


include('includes/header.php'); ?>

<?php include('includes/navbar.php'); ?>

<div class="container">

    <div class="row">
        <div class="col-12">
            <h2 class="pb-3">Institute Registration Details</h2>
        </div>
        <?php
            if (isset($_POST['institute_registration_btn'])) {
                $id = $_POST['edit_id'];

                $query = "SELECT * FROM institute_registration WHERE id='$id'";
                $query_run = mysqli_query($connection, $query);
                foreach ($query_run as $row) 
                {
                    ?>
            <div class="col-12">
    <ul class="list-group">
    <li class="list-group-item">Institute : <span class="font-weight-bold"><?php echo $row['institute_name']?></span></li>
    <li class="list-group-item">Mobile Number : <span class="font-weight-bold"><?php echo $row['number']?></span></li>
    <li class="list-group-item">Email : <span class="font-weight-bold"><?php echo $row['email']?></span></li>
    <li class="list-group-item">Location : <span class="font-weight-bold"><?php echo $row['location']?></span></li>
    <li class="list-group-item">City : <span class="font-weight-bold"><?php echo $row['city']?></span></li>
    <li class="list-group-item">Website Url : <span class="font-weight-bold"><?php echo $row['website']?></span></li>
    <li class="list-group-item">Appointment Date : <span class="font-weight-bold"><?php echo $row['adate']?></span></li>
    <li class="list-group-item">Appointment Time : <span class="font-weight-bold"><?php echo $row['atime']?></span></li>
    <li class="list-group-item">Registration date : <span class="font-weight-bold"><?php echo $row['date']?></span></li>



    </ul>
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
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b><span class="name"></span></b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="institute_photo.php" enctype="multipart/form-data">
                    <input type="hidden" class="prodid" name="id">
                    <div class="form-group">
                        <label for="photo" class="col-sm-3 control-label">Photo</label>

                        <div class="col-sm-9">
                            <input type="text" placeholder="filename" name="photo_name" required>
                            <input type="file" id="photo" name="photo" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End of Page Wrapper -->

<?php include('includes/scripts.php'); ?>

<?php include('includes/footer.php'); ?>