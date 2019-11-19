<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Skill Monks</title>
    <?php include('includes/links.php'); ?>
</head>

<body>
    <!-- Full Page Intro -->
    <div class=" full-page-intro bg-img ">

        <!-- Mask & flexbox options-->
        <div class="mask d-flex justify-content-center align-items-center ">


            <!-- Content -->
            <div class="container pb-100 mb-4">
                <?php include('includes/header.php'); ?>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="col-lg-12 col-md-12 mt-4 text-center text-md-left">

                            <div class="col-12 mt-4 text-center">
                                <h1 class="">We Partner in Your Growth.</h1>
                                <P>We help you with easier reach to students and working professionals, leads & operations management, and higher conversions.</P>
                            </div>

                            <div class="row text-center card-caf mt-4 animated fadeIn">

                                <!-- Grid column -->
                                <div class="col-lg-6 col-md-12 mb-lg-0 zoom">

                                    <!--Excerpt-->
                                    <div class="card-body h-card">

                                        <img src="img/icons/qui.png" class="mt-2" width="50px">
                                        <p class="mb-0 pt-2">Quality Lead Funnel
                                        </p>
                                    </div>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-lg-6 col-md-12 mb-lg-0  zoom">

                                    <!--Excerpt-->
                                    <div class="card-body h-card ">
                                        <img src="img/icons/aum1.png" class="mt-2" width="40px">
                                        <p class="mb-0 pt-2">Automation Support
                                        </p>
                                    </div>
                                </div>
                                <!-- Grid column -->
                                <div class="col-lg-6 col-md-12 mb-lg-0 zoom">

                                    <!--Excerpt-->
                                    <div class="card-body h-card">

                                        <img src="img/icons/com.png" class="mt-2" width="50px">
                                        <p class="mb-0 pt-2">Digital Delivery Systems
                                        </p>

                                    </div>
                                </div>
                                <!-- Grid column -->
                                <div class="col-lg-6 col-md-12 mb-lg-0  zoom">

                                    <!--Excerpt-->
                                    <div class="card-body h-card">

                                        <img src="img/icons/analy.png" class="mt-2" width="50px">
                                        <p class="mb-0 pt-2">Analytics and Industry Insights
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-12 pt-5">
                        <div class="text-center">
                            <a href="#regis" style="padding: 0.84rem 1.14rem" class="btn btn-rounded skbc zoom-down"><i class="fas fa-arrow-down fa-3x"></i></a>
                        
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- Mask & flexbox options-->

    </div>
    <!-- institute form -->
    <div class="container mt-5" id="regis" class="text-center">

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 mb-3">
                <?php

                if (isset($_POST['submit'])) {
                    $mysqltime = date_create()->format('Y-m-d H:i:s');
                    $password = mysqli_real_escape_string($connection, $_POST["password"]);
                    $password = md5($password);
                    $sql = "INSERT INTO institute_registration(institute_name, email, number, password, city, location, website, adate, atime, date)
VALUES ('" . $_POST["institute_name"] . "','" . $_POST["email"] . "', '" . $_POST["number"] . "', '$password', '" . $_POST["city"] . "', '" . $_POST["location"] . "', '" . $_POST["website"] . "', '" . $_POST["adate"] . "', '" . $_POST["atime"] . "', '" . $mysqltime . "')";

                    $result = mysqli_query($connection, $sql);
                    echo "<script>window.location.href='admin/institute/login.php'</script>";
                }

                ?>
                <form id="frm" class="wdt-change" action="" method="post">
                    <br>
                    <h2 class="text-center">Institute Registration Form</h2>
                    <div class="md-form input-group mb-3">
                        <div class="input-group-prepend ">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Institute Name:</span>
                        </div>
                        <input type="text" name="institute_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" required>
                    </div>
                    <div class="md-form input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Email:</span>
                        </div>
                        <input type="email" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" required>
                    </div>
                    <div class="md-form input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Number:</span>
                        </div>
                        <input type="text" name="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" required>
                    </div>
                    <div class="md-form input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Password:</span>
                        </div>
                        <input type="password" name="password" id="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" required>
                    </div>
                    <div class="md-form input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Confirm Password:</span>
                        </div>
                        <input type="password" name="" class="form-control" id="confirm_password" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" required>
                    </div>
                    <div class="md-form input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">City:</span>
                        </div>
                        <input type="text" name="city" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" required>
                    </div>
                    <div class="md-form input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Location:</span>
                        </div>
                        <input type="text" name="location" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" required>
                    </div>
                    <div class="md-form input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Institute's website:</span>
                        </div>
                        <input type="text" name="website" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" required>
                    </div>
                    <div class="md-form input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Appointment Date:</span>
                        </div>
                        <input type="date" name="adate" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
                    </div>
                    <div class="md-form input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Appointment Time:</span>
                        </div>
                        <input type="text" name="atime" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
                    </div>


                    <button type="submit" name="submit" class="btn btnclr">Submit</button>
                </form>

            </div>
            <div class="col-md-2"></div>
        </div>

    </div>
    <!-- Full Page Intro -->
    <!--Footer-->
    <?php include('includes/footer.php'); ?>
    <script>
        var password = document.getElementById("password"),
            confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
    <script>
        $(function() {
            $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
        });
    </script>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <?php include('includes/scripts.php'); ?>

</body>

</html>