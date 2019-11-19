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

    <!-- Full Page Intro -->
 
    <?php include('includes/staytuned.php'); ?>
    <div class=" full-page-intro bg-img ">

        <!-- Mask & flexbox options-->
        <div class="mask d-flex justify-content-center align-items-center ">


            <!-- Content -->
            <div class="container pb-100 mb-4">
                <?php include('includes/header.php'); ?>


                <!--Grid row-->
                <div class="row pt-3 mt-3 pb-3">
                   <div class="col-md-6">
                       <h5 class="ml-3">Course Category list</h5>
                       <ul>
                           <li>
                               <a href="data_science_training.php" target="_blank">Data Science</a>
                           </li>
                           <li>
                               <a href="multimedia_training.php" target="_blank">Multimedia</a>
                           </li>
                           <li>
                               <a href="cyber_security_training.php" target="_blank">Cyber Security</a>
                           </li>
                           <li>
                               <a href="web_technologies_training.php" target="_blank">Web Technologies</a>
                           </li>
                           <li>
                               <a href="database_training.php" target="_blank">Database training</a>
                           </li>
                           <li>
                               <a href="other_training.php" target="_blank">Others</a>
                           </li>
                           <li>
                               <a href="course_view.php" target="_blank">All Courses</a>
                           </li>
                       </ul>
                   </div>
                   <div class="col-md-6 ">
                       <h5 class="ml-3">Search According to city</h5>
                       <ul>
                           <li>
                               <a href="course_hyderabad.php" target="_blank">Hyderabad</a>
                           </li>
                       </ul>
                   </div>
                </div>
                <div class="row wow fadeIn pb-100 mb-5 pt-3 mt-5 animated fadeIn">
                   
                </div>
            </div>

        </div>
        <!-- Mask & flexbox options-->

    </div>
    <!-- Full Page Intro -->
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