<?php
include('security.php');
include('db/config.php');


include('includes/header.php'); ?>

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
    <div class="col-12">
    <h2>Course Selected Students Data</h2>
</div>
    </div>
    <div class="row">
        <?php
        $query = "SELECT * FROM student_course_selected";
        $query_run = mysqli_query($connection, $query);
        ?>
    <div class="col-12">
    <div class="table-responsive">
            <table id="example3" class="table table-bordered" style="width:100%">
                <thead>
                    <tr>
               

                        <th>ID</th>
                        <th>Username</th>
                        <th>Number/Email/City</th>
                        <th>Passing Year/Qualification</th>
                        <th>Course Interested</th>
                        <th>Institute Selected</th>
                        <th>Date</th>
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
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['number']; ?>,<br>
                                <?php echo $row['email']; ?>,<br>
                                <?php echo $row['city']; ?></td>

                                <td><?php echo $row['passing_year']; ?>,<br>
                                <?php echo $row['qualification']; ?></td>
                                <td><?php echo $row['course_interested']; ?></td>
                                <td><?php echo $row['institute_selected']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td>
                                    <form action="code.php" method="POST" onsubmit="return confirm('Are you sure you want to Delete ?');">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>">
                                    <button class="btn-danger " name="delete_student_select" type="submit">Delete</button>
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
        </div></div>
    </div>
</div>
</div>
<!-- End of Page Wrapper -->
<?php include('includes/scripts.php'); ?>

<?php include('includes/footer.php'); ?>