<?php 
include('../db/config.php');
include('functions.php');

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


// delete Institute course data
if(isset($_POST['delete_ud']))
{
    $id = $_POST['delete_Id'];
    $query = "DELETE FROM institute_data WHERE id = '$id' ";
    $query_run = mysqli_query($connection, $query);
    if($query_run){
        $_SESSION['success']="Your course data is deleted";
        header('Location: batch.php');
    }else{
     $_SESSION['status']="Your course data NOT deleted";
     header('Location: batch.php');    
     }
    }
// update code ins course data
if(isset($_POST['update_institute']))
{
    $id = $_POST['edit_id'];
    $institute = $_POST['edit_institute'];
    $course = $_POST['edit_course'];
    $location = $_POST['edit_location'];
    $city = $_POST['edit_city'];
    $batch = $_POST['edit_batch'];
    $demo = $_POST['edit_demo'];
    $email = $_POST['edit_email'];
    $number = $_POST['edit_number'];

    $query = "UPDATE institute_data SET institute = '$institute', course = '$course', location ='$location', city ='$city', batch_date = '$batch', demo_date = '$demo', email = '$email', number = '$number' WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run){
           $_SESSION['success']="Your Course data is updated";
           header('Location: batch.php');
    }else{
        $_SESSION['status']="Your Course data NOT updated";
        header('Location: batch.php');    }
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
    $website = $_POST['edit_website'];

    $query = "UPDATE institute_registration SET institute_name = '$institute', email = '$email', number ='$number', password = '$password', city = '$city', location = '$location', website = '$website' WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run){
           $_SESSION['success']="Your institute data is updated";
           header('Location: profile.php');
    }else{
        $_SESSION['status']="Your institute data NOT updated";
        header('Location: profile.php');    }
}

    // delete institute registration details
    if(isset($_POST['delete_ins_reg_data']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM institute_registration WHERE id = '$id'";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        $_SESSION['success']="Your institute data is deleted";
        header('Location: profile.php');
    }else{
     $_SESSION['status']="Your institute data NOT deleted";
     header('Location: profile.php');    
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
        header('Location: institute_view.php');
    }else{
     $_SESSION['status']="NOT deleted";
     header('Location: institute_view.php');    
     }
    }


?>

