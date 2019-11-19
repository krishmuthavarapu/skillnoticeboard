<?php
include('db/config.php');

$output = '';
if (isset($_POST["query"]) && isset($_POST["city"]) && isset($_POST["category"])) {
  $city = $_POST["city"];
  $category = $_POST["category"];
  $search = mysqli_real_escape_string($connection, $_POST["query"]);
  $query = "SELECT * FROM institute_data 
WHERE (course LIKE '%" . $search . "%' 
  OR institute LIKE '%" . $search . "%'
  OR location LIKE '%" . $search . "%'
  OR category LIKE '%" . $search . "%'
  OR batch_date LIKE '%" . $search . "%') && (city LIKE '%$city%') && (category LIKE '%$category%') ORDER BY batch_date DESC
 ";
} else {
  $city = $_POST["city"];
  $category = $_POST["category"];
  $query = "SELECT * FROM institute_data WHERE (city LIKE '%$city%') && (category LIKE '%$category%') ORDER BY batch_date DESC";
}
$result = mysqli_query($connection, $query);
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    $image = (!empty($row['photo'])) ? 'img/' . $row['photo'] : 'img/jav.jpg';
    $course = $row['course'];
    $institute = $row['institute'];
    $location = $row['location'];
    $batch_date = $row['batch_date'];
    $id = $row['id'];
    $output .= '
  <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 card-head fadeIn animated">

  <div class="card-course h-95 mb-0 pt-0 d-rel">
    <div class="">
      <div class="overlay rounded  mb-2 mt-0">
        <img class="img-fluid" src="' . $image . '" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    </div>
    <div class="p-2 w-100">
      <a href="#!" class="">
        <p class="font-weight-bold mb-1 skc"><i class="fas fa-map pr-2"></i>' . $course . '</p>
</a>
<h5 class="mb-1"><strong>' . $institute . '</strong></h5>
<p class="mb-1 small"><a href="#!" class="font-weight-bold skc">Location: </a>' . $location . '</p>
<p class="mb-1 small"><a href="#!" class="font-weight-bold skc">Batch Date: </a>' . $batch_date . '</p>
<p class="p-3"></p>
<div class="d-abs" style="float:right">
  <p class="dark-grey-text small" style="float:left">
    <a href="https://api.whatsapp.com/send?phone=9578800900" target="_blank">
      <i class="fab  fa-whatsapp skc pr-1" style="font-size:18px"></i>
    </a><a href="tel:9578800900" class="skc"> 9578 800 900</a>

  </p>
  <form action="student_course_select.php" method="post">

    <p class="dark-grey-text small" style="float:right">

      <input type="hidden" name="edit_id" value="' . $id . '">
      <button class="skbc btn-rounded border-0" href="#!" name="course_select_btn" type="submit">Apply</button>
    </p>
  </form>

</div>
<!-- Read more button -->
</div>
</div>
</div>
  ';
  }
  echo $output;
} else {
  echo 'Record Not Found';
}
