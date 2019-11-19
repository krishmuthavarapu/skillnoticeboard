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
        <h1>Add Course</h1>
        <div class="col-12">
            <div>
                <form class="user" method="POST" action="code.php">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control " name="course" placeholder="Add Course name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control " name="key_words" placeholder="Key words to search" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control " name="course_id" pattern="^\S+$" placeholder="course_id" required>
                        </div>
                        <button type="submit" name="coursetabbtn" class="btn btn-primary">Add course</button>

                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <h1>Course Tabs</h1>
    </div>
    <div class="row">
        <?php
        $query = "SELECT * FROM course_tab";
        $query_run = mysqli_query($connection, $query);
        ?>
        <div class="table-responsive">
            <table id="example3" class="table table-bordered" style="width:100%">
                <thead>
                    <tr>


                        <th>ID</th>
                        <th>Course id</th>
                        <th>Keywords</th>
                        <th>Course Tab Name</th>
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
                                <td><?php echo $row['course_id']; ?></td>
                                <td><?php echo $row['key_words']; ?></td>
                                <td><?php echo $row['course']; ?></td>
                                <td><?php echo $row['date']; ?></td>
 
                                <td>
                                    <form action="code.php" method="POST">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                        <button class="btn-danger " name="delete_coursetab" type="submit">Delete</button>
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
<!-- End of Page Wrapper -->
<?php include('includes/scripts.php'); ?>

<?php include('includes/footer.php'); ?>