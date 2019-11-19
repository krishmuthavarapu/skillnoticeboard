<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Skill Monks</title>
    <?php include('includes/links.php'); ?>


    <style type="text/css">
        body {}

        /* html,
    body,
    header,
    .view {
      height: 100%;
    } */

        @media (max-width: 740px) {

            html,
            body,
            header,
            .view {
                height: 1300px;
            }
        }

        @media (min-width: 700px) and (max-width: 990px) {

            html,
            body,
            header,
            .view {
                height: 1200px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {

            html,
            body,
            header,
            .view {
                height: 1200px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331 !important;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <!-- add navar fixed-top and remove styles and ml-2 -->
    <!-- <nav style="z-index: 100;background: #fff;" class=" navbar-expand-lg navbar-dark ">
    <div class="container-fluid">
      <a class="navbar-brand ml-4 pl-lg-4" href="#" target="_blank">
        <img src="img/logo.png" width="100px" alt="">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    </div>
  </nav> -->

    <!-- Navbar -->

    <!-- Full Page Intro -->
    <div class=" full-page-intro bg-img">

        <!-- Mask & flexbox options-->
        <div class="mask d-flex justify-content-center align-items-center">


            <!-- Content -->
            <div class="container ">
                <?php include('includes/header.php'); ?>


                <!--Grid row-->
                <div class="row wow ">
                    <div class="col-12 mt-2 text-center mb-3">
                        <h1 class="skc">Common <span class="text-dark">Application Form</span></h1>
                    </div>
                    <!--Grid column-->
                    <div class="col-lg-6 col-md-6 mb-4   text-center text-md-left  animated fadeIn">
                        <div class="col-12 mt-4 text-center mb-0">
                            <h2 class="h2-responsive">Powering Your Career Growth.</h2>
                            <p class="">We help skill seekers in discovering their true mentors and fulfilling their skill needs in a personalised way.</p>
                        </div>

                        <div class="row text-center card-caf mt-3 d-none d-lg-flex d-md-flex d-xl-flex">

                            <!-- Grid column -->
                            <div class="col-lg-6 col-md-12 mb-lg-0  mb-4 zoom ">

                                <!--Excerpt-->
                                <div class="card-body pt-3 pb-3">

                                    <img src="img/icons/com.png" width="50px">
                                    <!-- <h5 class="font-weight-bold my-2">Support</h5> -->
                                    <p class="mb-0 mt-2">Personalised Career Guidance</p>

                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                                <!--Excerpt-->
                                <div class="card-body pt-3 pb-3">

                                    <img src="img/icons/money.png" width="50px">
                                    <p class="mb-0 mt-2">Assured Quality with Money Back Guarantee</p>

                                </div>
                            </div>
                            <!-- Grid column -->
                            <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                                <!--Excerpt-->
                                <div class="card-body pt-3 pb-3">

                                    <img src="img/icons/offer.png" width="50px">
                                    <p class="mb-0 mt-2">Best Discount on Fee</p>

                                </div>
                            </div>
                            <!-- Grid column -->
                            <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                                <!--Excerpt-->
                                <div class="card-body pt-3 pb-3">

                                    <img src="img/icons/tution.png" width="50px">
                                    <p class="mb-0 mt-2">Get Connected with Best-in-Class Training Companies</p>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                                <!--Excerpt-->
                                <div class="card-body pt-3 pb-3">

                                    <img src="img/icons/qua.png" width="50px">

                                    <p class="mb-0 mt-2">App that Keeps You Posted on Industry Trends and Opportunities</p>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                                <!--Excerpt-->
                                <div class="card-body pt-3 pb-3">

                                    <img src="img/icons/discount.png" width="50px">

                                    <p class="mb-0 mt-2">Zero Percent Interest Loan Options</p>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-1 d-none d-lg-block"></div>
                    <!-- <div class="col-lg-1 col-md-1"></div> -->
                    <div class="col-lg-5 col-md-6 mb-3  animated fadeIn">
                        <!-- Default form login -->
                        <div class=" text-center pt-3  mt-5" style="    border-radius: 8px;background-color: rgba(0, 0, 0, 0.6);">
                            <h2 class=" text-white " style="font-weight:400"> Get Connected Now!</h2>
                            <hr class="hr-cus">
                            <?php

                            if (isset($_POST['submit'])) {
                                $mysqltime = date_create()->format('Y-m-d H:i:s');
                                $sql = "INSERT INTO student_data(username, number, email, passing_year, qualification, course_interested, city, date)
VALUES ('" . $_POST["username"] . "', '" . $_POST["number"] . "', '" . $_POST["email"] . "', '" . $_POST["passing_year"] . "', '" . $_POST["qualification"] . "', '" . $_POST["course_interested"] . "', '" . $_POST["city"] . "', '" . $mysqltime . "')";

                                $result = mysqli_query($connection, $sql);
                                echo "<script>window.location.href='thankq.php'</script>";
                            }

                            ?>
                            <form action="" method="post" class="text-center  pr-lg-5 pl-lg-5 pt-lg-3 pb-lg-3 p-3 ">

                                <!-- <p class="h4 mb-4 text-white">Sign in</p> -->

                                <!-- Email -->
                                <input type="text" id="" class="form-control mb-3 " name="username" placeholder="Your Name" required>
                                <input type="text" id="" class="form-control mb-3" name="number" placeholder="Mobile Number" required>
                                <input type="email" id="" class="form-control mb-3" name="email" placeholder="E-Mail" required>
                                <input type="text" id="" class="form-control mb-3" name="passing_year" placeholder="Year of passing" required>
                                <input type="text" id="" class="form-control mb-3" name="qualification" placeholder="Qualification" required>
                                <input type="text" id="" class="form-control mb-3" name="course_interested" placeholder="Course Interested In" required>
                                <input type="text" id="" class="form-control mb-3" name="city" placeholder="City" required>

                                <!-- Sign in button -->
                                <button class="btn btn-info skbc btn-block my-4" name="submit" type="submit">Sign Up</button>

                            </form>
                            <!-- Default form login -->
                        </div>


                        <div class="row text-center card-caf mt-3 d-flex d-lg-none d-md-none d-xl-none ">

                            <!-- Grid column -->
                            <div class="col-lg-6 col-md-12 mb-lg-0  mb-4 zoom ">

                                <!--Excerpt-->
                                <div class="card-body pt-3 pb-3">

                                    <img src="img/icons/com.png" width="50px">
                                    <!-- <h5 class="font-weight-bold my-2">Support</h5> -->
                                    <p class="mb-0 mt-2">Personalised Career Guidance</p>

                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                                <!--Excerpt-->
                                <div class="card-body pt-3 pb-3">

                                    <img src="img/icons/money.png" width="50px">
                                    <p class="mb-0 mt-2">Assured Quality with Money Back Guarantee</p>

                                </div>
                            </div>
                            <!-- Grid column -->
                            <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                                <!--Excerpt-->
                                <div class="card-body pt-3 pb-3">

                                    <img src="img/icons/offer.png" width="50px">
                                    <p class="mb-0 mt-2">Best Discount on Fee</p>

                                </div>
                            </div>
                            <!-- Grid column -->
                            <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                                <!--Excerpt-->
                                <div class="card-body pt-3 pb-3">

                                    <img src="img/icons/tution.png" width="50px">
                                    <p class="mb-0 mt-2">Get Connected with Best-in-Class Training Companies</p>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                                <!--Excerpt-->
                                <div class="card-body pt-3 pb-3">

                                    <img src="img/icons/qua.png" width="50px">

                                    <p class="mb-0 mt-2">App that Keeps You Posted on Industry Trends and Opportunities</p>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                                <!--Excerpt-->
                                <div class="card-body pt-3 pb-3">

                                    <img src="img/icons/discount.png" width="50px">

                                    <p class="mb-0 mt-2">Zero Percent Interest Loan Options</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Mask & flexbox options-->

    </div>
    <!-- Full Page Intro -->

    <!--Main layout-->

    <!--Main layout-->
    <!-- Projects section v.3 -->
    <!-- Section: Features v.1 -->

    <!-- Section: Features v.1 -->
    <!-- Projects section v.3 -->
    <!--Footer-->
    <?php include('includes/footer.php'); ?>

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