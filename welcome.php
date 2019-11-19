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
    <?php include('includes/staytuned.php'); ?>

    <!-- Full Page Intro -->
    <div class="container" style="height: 68px">
    <div class="row ">
    <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4 col-4" style="z-index:99">
        <a class="navbar-brand " href="index.php">
            <!-- <img src="img/neuronoidsimage.png" width="70px" height="auto" alt=""> -->
            <!-- <h3 class="pl-4 pb-2 pt-3">Skill Monks</h3> -->
            <img src="img/logo.png" width="120px" alt="" style="border-radius:50%;padding:10px;background:white">
            <!-- <strong>MDB</strong> -->
        </a></div>
    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-8 col-8 text-center">
        <div class="">
            <p class="text-dark head-mail font-weight-bolder pt-3 pt-lg-4 pt-md-4">
                Email : contact@skillmonks.com &nbsp &nbsp Contact :
                9578 800 900

            </p>
        </div>
    </div>

</div>
    </div>
    
    
    <div class=" full-page-intro bg-img ">

        <!-- Mask & flexbox options-->
        <div class="mask d-flex justify-content-center align-items-center">


            <!-- Content -->
            <div class="container mb-5 pb-5">
                
                <!--Grid row-->
                <div class="row wow fadeIn ">

                    <div class="col-lg-6 pt-5 mt-5 pb-5 mb-5 bor-right animated fadeIn">
                        <!-- onclick="location.href='course_search.php'" -->
                        <div>
                            <h2 class="h2-responsive weight-400">What do you want to <br> <span class="skc">learn today.</span></h2>
                            <form class="form-inline md-form mr-auto mb-4" method="post" action="course_search.php">
                                <input class="form-control mr-sm-2" type="text" name="search" style="border-bottom: 2px solid #01783d;" placeholder="Enter Course Name" aria-label="Search">
                                <button class="btn skbg btn-rounded  my-0" name="submit" value="submit"  type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                    <div class=" col-lg-6 pt-5 text-center sel-card animated fadeIn">
                        <div>
                            <h2 class="h2-responsive text-dark weight-400"><span class="skc">Common </span>Application Form</h2>
                            <!-- <button onclick="location.href='student_contact.php'" class="btn btn-success skbg mt-4 mb-4 btn-rounded ">Sign Up</button> -->
                            <button onclick="location.href='https://beta.skillmonks.com/student-signup'" class="btn btn-success skbg mt-4 mb-4 btn-rounded ">Sign Up</button>
                        </div>
                        <div>
                            <div class="mb-4   text-center text-md-left">
                                <div class="row text-center card-sel mt-4">
                                    <div class="col-12">
                                        <h2 class="h1-responsive text-white weight-400"><span>Why Skill Monks ?</span></h2>
                                    </div>
                                    <!-- Grid column -->
                                    <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                                        <!--Excerpt-->
                                        <div class="card-body ">
                                        <img src="img/icons/tution.png" width="50px" class="mt-1">
                                            <p class=" my-2">Get Connected with Best-in-Class Training Companies</p>
                                        </div>
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                                        <!--Excerpt-->
                                        <div class="card-body ">
                                        <img src="img/icons/money.png" width="50px" class="mt-1">
                                            <p class=" my-2">Assured  Quality with Money Back Guarantee</p>
                                        </div>
                                    </div>
                                    <!-- Grid column -->
                                    <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                                        <!--Excerpt-->
                                        <div class="card-body ">
                                        <img src="img/icons/offer.png" width="50px" class="mt-1">
                                        <p class=" my-2">Best Discount on Fee</p>
                                        </div>
                                    </div>
                                    <!-- Grid column -->
                                    <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom ">

                                        <!--Excerpt-->
                                        <div class="card-body ">
                                        <img src="img/icons/qua.png" width="50px" class="mt-1">
                                            <p class="p my-2">App that Keeps You Posted on Industry Trends and Opportunities</p>
                                        </div>
                                    </div>

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