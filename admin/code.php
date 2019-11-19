<?php 
include('security.php');
include('db/config.php');
if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    // $email = $_POST['email'];
    $email = mysqli_real_escape_string($connection, $_POST["email"]);
    // $password = $_POST['password'];
    // $password = md5($password);  
    $password = mysqli_real_escape_string($connection, $_POST["password"]);
    // $cpassword = $_POST['confirmpassword'];
    $cpassword = mysqli_real_escape_string($connection, $_POST["confirmpassword"]);
    // $cpassword = md5($cpassword); 
    if($password===$cpassword){
        $password = md5($password);
        $query = "INSERT into register (username,email,password) VALUES ('$username', '$email', '$password')";
        $query_run = mysqli_query($connection, $query);
        if($query_run){
            // echo"saved";
            $_SESSION['success'] = "Admin profile added ";
            header('Location: register.php');
        }
        else{
            $_SESSION['status'] = "Admin profile not created";
            header('Loation: register.php');
        }
    }
    else{
        $_SESSION['status'] = "Password does not match";
        header('Location: register.php');
    }
}
// logi reg test 
// if(isset($_POST["register"]))  
// {  
//      if(empty($_POST["username"]) && empty($_POST["password"]))  
//      {  
//           echo '<script>alert("Both Fields are required")</script>';  
//      }  
//      else  
//      {  
//           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
//           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
//           $password = md5($password);  
//           $query = "INSERT INTO users (username, password) VALUES('$username', '$password')";  
//           if(mysqli_query($connect, $query))  
//           {  
//                echo '<script>alert("Registration Done")</script>';  
//           }  
//      }  
// }  
// if(isset($_POST["login"]))  
// {  
//      if(empty($_POST["username"]) && empty($_POST["password"]))  
//      {  
//           echo '<script>alert("Both Fields are required")</script>';  
//      }  
//      else  
//      {  
//           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
//           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
//           $password = md5($password);  
//           $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";  
//           $result = mysqli_query($connect, $query);  
//           if(mysqli_num_rows($result) > 0)  
//           {  
//                $_SESSION['username'] = $username;  
//                header("location:entry.php");  
//           }  
//           else  
//           {  
//                echo '<script>alert("Wrong User Details")</script>';  
//           }  
//      }  
// }  



// end

// update code registered user
if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $password = md5($password);

    $query = "UPDATE register SET username = '$username', email = '$email', password ='$password' WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run){
           $_SESSION['success']="Your data is updated";
           header('Location: register.php');
    }else{
        $_SESSION['status']="Your data NOT updated";
        header('Location: register.php');    }
}

// delete registered user
if(isset($_POST['deletebtn']))
{
  $id = $_POST['delete_id'];
  $query = "DELETE FROM register WHERE id ='$id'";
  $query_run = mysqli_query($connection, $query);    
  if($query_run){
    $_SESSION['success']="Your data is deleted";
    header('Location: register.php');
}else{
 $_SESSION['status']="Your data NOT deleted";
 header('Location: register.php');    }
}


// login

if(isset($_POST['login_btn']))
{
    // $email_login=$_POST['email'];
    $email_login = mysqli_real_escape_string($connection, $_POST["email"]);  
    // $password_login=$_POST['password'];
    $password_login = mysqli_real_escape_string($connection, $_POST["password"]);  
    $password_login = md5($password_login);
    $query = "SELECT * FROM register WHERE email ='$email_login' AND password = '$password_login' ";
    $query_run = mysqli_query($connection, $query);

    if(mysqli_fetch_array($query_run)){
        $_SESSION['username']= $email_login;
        header('Location: index.php');
    }else{
        $_SESSION['status'] = "Email or Password is invalid";
        header('Location: login.php');
    }
}
// delete Institute course data
if(isset($_POST['delete_ud']))
{
    $id = $_POST['delete_Id'];
    $query = "DELETE FROM institute_data WHERE id = '$id' ";
    $query_run = mysqli_query($connection, $query);
    if($query_run){
        $_SESSION['success']="Your course data is deleted";
        header('Location: institute_data.php');
    }else{
     $_SESSION['status']="Your course data NOT deleted";
     header('Location: institute_data.php');    
     }
    }
// update code ins course data
if(isset($_POST['update_institute']))
{
    $id = $_POST['edit_id'];
    $institute = $_POST['edit_institute'];
    $course = $_POST['edit_course'];
    $category = $_POST['edit_category'];
    $location = $_POST['edit_location'];
    $city = $_POST['edit_city'];
    $batch = $_POST['edit_batch'];
    $demo = $_POST['edit_demo'];
    $email = $_POST['edit_email'];
    $number = $_POST['edit_number'];

    $query = "UPDATE institute_data SET institute = '$institute', course = '$course', category = '$category',location ='$location', city ='$city', batch_date = '$batch', demo_date = '$demo', email = '$email', number = '$number' WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run){
           $_SESSION['success']="Your Course data is updated";
           header('Location: institute_data.php');
    }else{
        $_SESSION['status']="Your Course data NOT updated";
        header('Location: institute_data.php');    }
}





// delete student details
if(isset($_POST['delete_sd']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM student_data WHERE Id = '$id'";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        $_SESSION['success']="Your data is deleted";
        header('Location: student_data.php');
    }else{
     $_SESSION['status']="Your data NOT deleted";
     header('Location: student_data.php');    
     }
    }
    // delete serched student details

if(isset($_POST['delete_searched_student']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM searched_students WHERE Id = '$id'";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        $_SESSION['success']="searched student data is deleted";
        header('Location: student_data.php');
    }else{
     $_SESSION['status']="searched student data NOT deleted";
     header('Location: student_data.php');    
     }
    }

    // update code institute registration data
if(isset($_POST['update_institute_register']))
{
    $id = $_POST['edit_id'];
    $institute = $_POST['edit_institute_name'];
    $email = $_POST['edit_email'];
    $number = $_POST['edit_number'];
    $location = $_POST['edit_location'];
    $city = $_POST['edit_city'];
    $password = $_POST['edit_password'];
    $password=md5($password);
    $website = $_POST['edit_website'];

    $query = "UPDATE institute_registration SET institute_name = '$institute', email = '$email', number ='$number', password = '$password', city = '$city', location = '$location', website = '$website' WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run){
           $_SESSION['success']="Your institute data is updated";
           header('Location: institute_data.php');
    }else{
        $_SESSION['status']="Your institute data NOT updated";
        header('Location: institute_data.php');    }
}

    // delete institute registration details
    if(isset($_POST['delete_ins_reg_data']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM institute_registration WHERE id = '$id'";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        $_SESSION['success']="Your institute data is deleted";
        header('Location: institute_data.php');
    }else{
     $_SESSION['status']="Your institute data NOT deleted";
     header('Location: institute_data.php');    
     }
    }


    // course tabs
    if(isset($_POST['coursetabbtn']))
{

    $course = $_POST['course'];
    $courseid =$_POST['course_id'];
    $keywords = $_POST['key_words'];
    $mysqltime = date_create()->format('Y-m-d H:i:s');


        $query = "INSERT into course_tab (course_id,key_words,course,date) VALUES ('$courseid', '$keywords', '$course', '$mysqltime')";
        $query_run = mysqli_query($connection, $query);
        if($query_run){
            // echo"saved";
            $_SESSION['success'] = "Course added ";
            header('Location: course_tabs.php');
        }
        else{
            $_SESSION['status'] = "course not created";
            header('Location: course_tabs.php');
        }

}
// delete course tab
if(isset($_POST['delete_coursetab']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM course_tab WHERE id = '$id'";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        $_SESSION['success']="Course is deleted";
        header('Location: course_tabs.php');
    }else{
     $_SESSION['status']="Course NOT deleted";
     header('Location: course_tabs.php');    
     }
    }



// delete course selected student data
if(isset($_POST['delete_student_select']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM student_course_selected WHERE id = '$id'";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        $_SESSION['success']="Deleted";
        header('Location: student_cselect_data.php');
    }else{
     $_SESSION['status']="NOT deleted";
     header('Location: student_cselect_data.php');    
     }
    }


?>