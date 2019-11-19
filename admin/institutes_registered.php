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
        $query = "SELECT * FROM institute_registration";
        $query_run = mysqli_query($connection, $query);
        ?>
        <div class="col-12">
        <div class="table-responsive">
            <table id="example2" class="table table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Institute Name</th>
                        <th>Location</th>
                        <th>Website</th>
                        <th>Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($query_run) > 0) {
                        while ($row = mysqli_fetch_assoc($query_run)) {
                            ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['institute_name']; ?></td>
                                <td><?php echo $row['location']; ?></td>
                                <td><?php echo $row['website']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td>
                                    <form action="institute_register_edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                        <button class="btn-success mb-1" name="institute_registration_btn" type="submit">Edit</button>
                                    </form>
                                    <form action="institutes_registered_view.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                        <button class="btn-success " name="institute_registration_btn" type="submit">View</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="code.php" method="POST" onsubmit="return confirm('Are you sure you want to Delete ?');">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                        <button class="btn-danger " name="delete_ins_reg_data" type="submit">Delete</button>
                                    </form>
                                </td>

                                <!-- <td><button class="btn-success " type="submit">Edit</button></td>
                                                                <td><button class="btn-danger " type="submit">Delete</button></td> -->


                            </tr>
                        <?php
                        }
                    } else {
                        echo "No record found";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        </div>
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