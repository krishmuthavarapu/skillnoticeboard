<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Skill Monks</title>
  <?php include('includes/links.php'); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script> -->
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

    .cus-tab-content>.active {
      display: flex;
    }


    a:hover {
      color: black;
    }
  </style>
</head>

<body>
  <script>
    $(document).ready(function() {
      load_data();

      function load_data(query) {
        $.ajax({
          url: "tab_search.php",
          method: "POST",
          data: {
            city:"",
            mode:$('#mode').val(),
            query: query
          },
          success: function(data) {
            $('#result').html(data);
          }
        });
      }
      $('#search').keyup(function() {
        var search = $(this).val();
        if (search != '') {
          load_data(search);
        } else {
          load_data();
        }
      });
      $('#mode').change(function() {
        var search = $(this).val();
        if (search != '') {
          load_data(search);
        } else {
          load_data();
        }
      });
    });
  </script>


  <!-- Navbar -->

  <!-- Full Page Intro -->

  <div class="container" style="height: 68px;">
    <div class="row ">
    <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4 col-4 " >
        <a class="navbar-brand " href="index.php" style="z-index:99">
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
  <div class="container-fluid mb-3 nav nav-tabs cus-s-tabs">
      <div class="col-lg-6 offset-lg-3">
      <div class="row" id="myTab" role="tablist">
        
        <div class="col-lg-7 col-md-7">
          <input style="margin-top:6px;border-radius:2px;height: calc(1em + .75rem + 2px);width:100%" type="text" name="search" id="search" placeholder="Search Course/Institute" autocomplete="off" class="form-control" data-toggle="tab" href="#serch" role="tab" aria-controls="contact" aria-selected="false" />
        </div>
        <div class="col-lg-3 col-md-3">
          <select class="form-control" onChange="load_data();" name="" id="mode" style="margin-top:6px;border-radius:2px;height:calc(1em + .75rem + 2px);padding:0px">
          <option value="classroom" selected>Class Room</option>
            <option value="online">Online</option>
            
          </select>
        </div>
            <div class="col-lg-2 col-md-2">
            <button class="btn" style="padding: 5px 22px;background: white;color: black;">Search</button>
            </div>
      </div>
    </div>
        
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="h2-responsive text-center">Upcoming Batches.</h2>
      </div>
    </div>
  </div>
  <div class="container tab-content cus-tab-content mt-3" id="myTabContent">
    
    <div class="row tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
      <?php
      $rec_limit = 28;
      $sql = "SELECT count(id) FROM institute_data";
      $retval = mysqli_query($connection, $sql);
      if (!$retval) {
        die('Could not get data: ' . mysql_error());
      }
      $row = mysqli_fetch_array($retval, MYSQLI_NUM);
      $rec_count = $row[0];
      if (isset($_GET{
        'page'})) {
        $page = $_GET{
          'page'} + 1;
        $offset = $rec_limit * $page;
      } else {
        $page = 0;
        $offset = 0;
      }
      $left_rec = $rec_count - ($page * $rec_limit);
      $sql = "SELECT * " .
        "FROM institute_data ORDER BY batch_date DESC " .
        "LIMIT $offset, $rec_limit ";
      $retval = mysqli_query($connection, $sql);
      echo " <div class='col-12'>
   <div class=''> ";
      if ($page > 0) {
        $last = $page - 2;
        echo "<a href=\"$_SERVER[PHP_SELF]?page=$last\"><button class='btn btn-rounded skbg'>Previous</button></a> ";
        echo "<a class='float-right' href=\"$_SERVER[PHP_SELF]?page=$page\"><button class='btn btn-rounded skbg'>Next</button></a>";
      } else if ($page == 0) {
        echo "<a class='float-right' href=\"$_SERVER[PHP_SELF]?page=$page\"><button class='btn btn-rounded skbg'>Next</button></a>";
      } else if ($left_rec < $rec_limit) {
        $last = $page - 2;
        echo "<a class='float-right' href = \"$_SERVER[PHP_SELF]?page=$last\"><button class='btn btn-rounded skbg'>Last</button></a>";
      }
      echo "</div></div> ";
      if (!$retval) {
        die('Could not get data: ' . mysql_error());
      }
      while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        $image = (!empty($row['photo'])) ? 'img/' . $row['photo'] : 'img/jav.jpg';
        $course = $row['course'];
        $institute = $row['institute'];
        $location = $row['location'];
        $batch_date = $row['batch_date'];
        $id = $row['id'];
        echo "
       <div class='col-lg-3 col-md-12 mb-lg-0 mb-4 card-head fadeIn animated'>
           <div class=' card-course h-95 mb-0 pt-0 d-rel'>
             <div class=''>
               <div class=' rounded  mb-2 mt-0'>
                 <img class='img-fluid ' src='$image' alt='Sample image'>
                 <a>
                   <div class='mask rgba-white-slight'></div>
                 </a>
               </div>
             </div>
             <div class='p-2 w-100 '>
               <a href='#!' class=''>
                 <p class='font-weight-bold mb-1 skc'><i class='fas fa-map pr-2'></i>$course</p>
     </a>
     <h5 class='mb-1'><strong>$institute</strong></h5>
     <p class='mb-1 small'><a href='#!' class='font-weight-bold skc'>Location: </a>$location</p>
     <p class='mb-1 small'><a href='#!' class='font-weight-bold skc'>Batch Date: </a>$batch_date</p>
     <p class='p-3'></p>
     <div class='d-abs' style='float:right'>
       <p class='dark-grey-text small' style='float:left'>
         <a href='https://api.whatsapp.com/send?phone=9578800900' target='_blank'>
           <i class='fab  fa-whatsapp skc pr-1' style='font-size:18px'></i>
         </a><a href='tel:9578800900' class='skc'> 9578 800 900</a>

       </p>
       <form action='student_course_select.php' method='post'>

         <p class='dark-grey-text small' style='float:right'>

           <input type='hidden' name='edit_id' value='$id'>
           <button class='skbc btn-rounded border-0' href='#!' name='course_select_btn' type='submit'>Apply</button>
         </p>
       </form>

     </div> 
     <!-- Read more button -->
   </div>
 </div>
 </div>
 ";
      }
      echo " <div class='col-12'>
   <div class='text-center'> ";
      if ($page > 0) {
        $last = $page - 2;
        echo "<a href=\"$_SERVER[PHP_SELF]?page=$last\"><button class='btn btn-rounded skbg'>Previous</button></a> ";
        echo "<a href=\"$_SERVER[PHP_SELF]?page=$page\"><button class='btn btn-rounded skbg'>Next</button></a>";
      } else if ($page == 0) {
        echo "<a href=\"$_SERVER[PHP_SELF]?page=$page\"><button class='btn btn-rounded skbg'>Next</button></a>";
      } else if ($left_rec < $rec_limit) {
        $last = $page - 2;
        echo "<a href = \"$_SERVER[PHP_SELF]?page=$last\"><button class='btn btn-rounded skbg'>Last</button></a>";
      }
      echo "</div></div> "
      ?>
    </div>
    <div class="row tab-pane fade show" id="serch" role="tabpanel" aria-labelledby="all-tab">
      <div class='row w-100' id='result'></div>

    </div>
    <?php
    $query = "SELECT * FROM course_tab";
    $query_run = mysqli_query($connection, $query);
    ?>
    <?php
    if (mysqli_num_rows($query_run) > 0) {
      while ($row = mysqli_fetch_assoc($query_run)) {
        ?>
        <div class="row tab-pane fade show" id="<?php echo $row['course_id']; ?>" role="tabpanel" aria-labelledby="<?php echo $row['course_id']; ?>-tab">
          <?php
          $category = $row['key_words'];

          $querys = "SELECT * FROM institute_data WHERE category LIKE '%$category%' ORDER BY batch_date DESC ";
          $querys_run = mysqli_query($connection, $querys);
          ?>
          <?php
          if (mysqli_num_rows($querys_run) > 0) {
            while ($row = mysqli_fetch_assoc($querys_run)) {
              $image = (!empty($row['photo'])) ? 'img/' . $row['photo'] : 'img/jav.jpg';
              ?>
              <div class="col-lg-3 col-md-4 col-sm-6 mb-lg-0 mb-4 card-head fadeIn animated">
                <div class="card-course h-95 mb-0 pt-0 d-rel">
                  <!-- Featured image -->
                  <div class="">
                    <div class=" overlay rounded  mb-2 mt-0">
                      <img class="img-fluid w-100" width="100%" src="<?php echo $image ?>" alt="Sample image">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                  </div>
                  <div class="pt-2 pr-2 pl-2 w-100">
                    <!-- Category -->
                    <a href="#!" class="">
                      <p class="font-weight-bold mb-1 skc"><i class="fas fa-map pr-2"></i><?php echo $row['course']; ?></p>
                    </a>
                    <!-- Post title -->
                    <h5 class=" mb-1"><strong><?php echo $row['institute']; ?></strong></h5>
                    <p class="mb-1 small"><a href="#!" class="font-weight-bold skc">Location: </a><?php echo $row['location']; ?></p>
                    <!-- Post data -->
                    <p class="mb-1 small"><a href="#!" class="font-weight-bold skc">Batch Date: </a><?php echo $row['batch_date']; ?></p>
                    <!-- Excerpt -->
                    <p class="p-3"></p>
                    <div class="d-abs" style="float:right">
                      <p class="dark-grey-text small" style="float:left">
                        <a href="https://api.whatsapp.com/send?phone=9578800900" target="_blank">
                          <i class="fab  fa-whatsapp skc pr-1" style="font-size:18px"></i>
                        </a><a href='tel:9578800900' class="skc"> 9578 800 900</a>

                      </p>
                      <form action="student_course_select.php" method="post">

                        <p class="dark-grey-text small" style="float:right">

                          <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                          <button class="skbc btn-rounded border-0" href="#!" name="course_select_btn" type="submit">Apply</button>
                        </p>
                      </form>

                    </div> <!-- Read more button -->
                  </div>
                </div>
              </div>
            <?php
            }
          } else {
            echo "No record found";
          }
          ?>
        </div>
      <?php
      }
    } else {
    }
    ?>

  </div>



  <!-- Full Page Intro -->
  <!--Footer-->
  <?php include('includes/footer.php'); ?>
  <!-- modal -->
  <!-- Modal -->
  <!-- add class dis -->


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