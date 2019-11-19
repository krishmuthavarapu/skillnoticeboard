<?php include('db/config.php'); ?>

<?php

if (isset($_POST['user_name']) && isset($_POST['user_number']) &&isset($_POST['user_email']) && isset($_POST['user_qualification']) && isset($_POST['user_course_interested']) ) {
    $name = $_POST['user_name'];
    $number = $_POST['user_number'];
    $email = $_POST['user_email'];
    $qualification = $_POST['user_qualification'];
    $course_interested = $_POST['user_course_interested'];
    $mysqltime = date_create()->format('Y-m-d H:i:s');
    $sql = "INSERT INTO searched_students(name, number, email, qualification, course_interested, date)
VALUES ('$name','$number', '$email', '$qualification', '$course_interested', '" . $mysqltime . "')";

    $result = mysqli_query($connection, $sql);
    echo "<script>
    $('.modal').removeClass('dis').addClass('fade');
    </script>";
}

?>