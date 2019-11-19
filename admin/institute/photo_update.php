
<?php
    if ($_POST['upload'] )
     {
        $id = $_POST['edit_id'];

     $user=$_POST['name'];
     //$filename=basename($_FILES["file"]["name"]);
     
     $tmp=$_FILES["file"]["tmp_name"];
      $extension = explode("/", $_FILES["file"]["type"]);
      $name=$user.".".$extension[1];
     
    move_uploaded_file($tmp, "../../img/" . $user.".".$extension[1]);

    $query = "UPDATE institute_data SET photo ='$name' WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);
    
    
     }  
     if($query_run){
        $_SESSION['success']="Your image updated";
        header('Location: institute_photo.php');
    }else{
     $_SESSION['status']="image not updated";
     header('Location: institute_photo.php');    
     }
    
 ?>