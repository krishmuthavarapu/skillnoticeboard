<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Skill Monks</title>
  <?php include('includes/links.php'); ?>


  <!-- <style type="text/css">
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
    </style> -->
</head>

<body>
  <!-- Full Page Intro -->
  <?php include('includes/staytuned.php'); ?>
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
    <div class="mask d-flex justify-content-center align-items-center ">


      <!-- Content -->
      <div class="container pb-100 mb-4">
        <?php

        if (isset($_POST['submit'])) {
          $mysqltime = date_create()->format('Y-m-d H:i:s');
          $sql = "INSERT INTO institute_data(institute, course, mode, location, batch_date, demo_date, email, number, date)
VALUES ('" . $_POST["institute"] . "','" . $_POST["course"] . "','" . $_POST["mode"] . "', '" . $_POST["location"] . "', '" . $_POST["batch_date"] . "', '" . $_POST["demo_date"] . "', '" . $_POST["email"] . "', '" . $_POST["number"] . "', '" . $mysqltime . "')";

          $result = mysqli_query($connection, $sql);
          echo "<script>window.location.href='https://beta.skillmonks.com/partner'</script>";
        }

        ?>
        <div class="row fadeIn animated">
          <div class="col-lg-6 col-md-5 mb-4 pt-5   text-center text-md-left  animated fadeIn">
            <div class="col-12 mt-4 text-center mb-2">
              <h1 class="">We Partner in Your Growth.</h1>
              <P>We help you with easier reach to students and working professionals, leads & operations management, and higher conversions.</P>
            </div>

            <div class="row text-center card-caf mt-5 d-none d-lg-flex d-md-flex d-xl-flex">

              <!-- Grid column -->
              <div class="col-lg-6 col-md-12 mb-lg-0  mb-4 zoom ">

                <!--Excerpt-->
                <div class="card-body h-card pt-3 pb-3">

                  <img src="img/icons/qui.png" width="50px">
                  <p class="mb-0">Quality Lead Funnel
                  </p>

                </div>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                <!--Excerpt-->
                <div class="card-body h-card pt-3 pb-3">

                  <img src="img/icons/aum1.png" width="40px">
                  <p class="mb-0 pt-2">Automation Support
                  </p>

                </div>
              </div>
              <!-- Grid column -->
              <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                <!--Excerpt-->
                <div class="card-body h-card pt-3 pb-3">

                  <img src="img/icons/com.png" width="50px">
                  <p class="mb-0 pt-2">Digital Delivery Systems
                  </p>

                </div>
              </div>
              <!-- Grid column -->
              <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                <!--Excerpt-->
                <div class="card-body h-card pt-3 pb-3">

                  <img src="img/icons/analy.png" width="50px">
                  <p class="mb-0 pt-2">Analytics and Industry Insights
                  </p>

                </div>
              </div>

            </div>
          </div>
          <div class="col-lg-1 col-md-1 "></div>
          <div class="col-md-6 col-lg-5 pt-3">
            <div class="register-pop mt-4">
              <div class="text-center">
                <h3 class="text-white pt-2">Declare a Batch!</h3>
              </div>
              <hr class="skbc">

              <br>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active text-align form-new" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <div class="row register-form">
                    <div class="col-md-12" id="right">

                      <form action="" method="post">
                        <div class="form-group">
                          <input type="text" name="institute" class="form-control" placeholder="Institute Name" value="" required />
                        </div>
                        <div class="form-group">
                          <input type="text" name="course" class="form-control" placeholder="course" value="" required />
                        </div>
                        <div>
                          <select  class="form-control" name="mode" id="">
                            <option value="classroom">Class Room</option>
                            <option value="online">Online</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <center>
                            <div class="text-white" for="">Batch Date</div>
                          </center>
                          <input type="date" name="batch_date" class="form-control" placeholder="Batch Date" value="" required />
                        </div>
                        <div class="form-group">
                          <center>
                            <div class="text-white" for="">Demo Date</div>
                          </center>
                          <input type="date" name="demo_date" class="form-control" placeholder="Demo Date" value="" required />
                        </div>
                        <div class="form-group">
                          <input type="text" name="location" class="form-control" placeholder="location" value="" required />
                        </div>

                        <div class="form-group">
                          <input type="email" name="email" class="form-control" placeholder="email" value="" required />
                        </div>
                        <div class="form-group">
                          <input type="text" name="number" class="form-control" placeholder="Mobile Number" value="" required />
                        </div>

                        <div class="form-group" style="text-align: center">
                          <input type="submit" name="submit" class="btn btn-rounded skbc" value="Submit" />
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row text-center card-caf mt-5 d-flex d-lg-none d-md-none d-xl-none ">

              <!-- Grid column -->
              <div class="col-lg-6 col-md-12 mb-lg-0  mb-4 zoom ">

                <!--Excerpt-->
                <div class="card-body h-card pt-3 pb-3">

                  <img src="img/icons/qui.png" width="50px">
                  <p class="mb-0">Quality Lead Funnel
                  </p>

                </div>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                <!--Excerpt-->
                <div class="card-body h-card pt-3 pb-3">

                  <img src="img/icons/aum1.png" width="40px">
                  <p class="mb-0 pt-2">Automation Support
                  </p>

                </div>
              </div>
              <!-- Grid column -->
              <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                <!--Excerpt-->
                <div class="card-body h-card pt-3 pb-3">

                  <img src="img/icons/com.png" width="50px">
                  <p class="mb-0 pt-2">Digital Delivery Systems
                  </p>

                </div>
              </div>
              <!-- Grid column -->
              <div class="col-lg-6 col-md-12 mb-lg-0 mb-4 zoom">

                <!--Excerpt-->
                <div class="card-body h-card pt-3 pb-3">

                  <img src="img/icons/analy.png" width="50px">
                  <p class="mb-0 pt-2">Analytics and Industry Insights
                  </p>

                </div>
              </div>

            </div>
          </div>
          <div class="col-md-4">

          </div>
        </div>

      </div>

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- institute form -->

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