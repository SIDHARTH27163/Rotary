
<?php 
      session_start();
      include ('dbConfig/dbconfig.php');
      if (isset ($_POST['Rcupload']))
      {
            $dateof_upload = $_POST['date_rc'];
            $title = $_POST['title'];
            $images = $_FILES["image_file"]['name'];
            $location="uploads/admin/Rotary_citation/";
            $filename=$_FILES["image_file"]['name'];
            $filetmp = $_FILES["image_file"]['tmp_name'];
            $status = 'process';
          

            if(file_exists($location.$filename))
             {
                $store = $_FILES["image_file"]['name'];
                $_SESSION['status']= "Image already exists. '.$store.'";
                header('Location:Rotary_citation.php');  
             }


            else
            {  
              $password = md5($password);


      
                   $query = "INSERT INTO rcdrc(image,title,uplodaded_on,status)VALUES('$filename','$title',$dateof_upload','$images','$status')";
                   $query_run = mysqli_query($connection,$query);
                   
                   echo $query;
                   
                   if($query_run)
                  {
                    

                        move_uploaded_file($filetmp,$location.$filename);
                        echo'<script>alert("Image Uploaded Successfully!");</script>';
                        header('Location: Rotary_citation.php');
                  }


                  else 
                  {
                        
                        header('Location:Rotary_citation.php');  
                  }
             }
      }


     if(isset($_POST['update_admin']))
     {
      $edit_username= $_POST['edit_username'];
      $edit_id = $_POST['edit_id'];
      $edit_name = $_POST['edit_name'];
      $edit_email = $_POST['edit_email'];
      $edit_password = $_POST['edit_password'];
      $edit_images = $_FILES["image_file"]['name'];
      $location= "uploads/admin/Users_images/";
      $filename=$_FILES["image_file"]['name'];
      $filetmp = $_FILES["image_file"]['tmp_name'];

      if(file_exists($location.$filename))
             {
                $store = $_FILES["image_file"]['name'];
                $_SESSION['status']= "Image already exists. '.$store.'";
                header('Location:table.php');  
             }
      else{
      $query = "UPDATE adminsignup SET username='$edit_username', name='$edit_name', email='$edit_email',password='$edit_password',images='$edit_images' WHERE Id='$edit_id'";



      $query_run= mysqli_query($connection,$query);
      echo $query_run;
       
            if($query_run)
      {

         move_uploaded_file($filetmp,$location.$filename);
                        echo'<script>alert("Admin Registered Successfully!");';
                        header('Location: table.php');
      }
      else
      {
        $_SESSION['success']="Admin Information Not Updated!";
                        header('Location:table.php'); 
      }
    }

     }


     if(isset($_POST['delete_data']))
     {
      $id = $_POST['delete_id'];
    
      $query = "DELETE FROM adminsignup WHERE Id='$id'";

      $query_run= mysqli_query($connection,$query);
       
            if($query_run)
      {
                        $_SESSION['success']="Admin Deleted Successfully! ";
                        
                        header('Location: table.php');
      }
      else
      {
        $_SESSION['success']="Admin Not Deleted!";
                        header('Location:table.php'); 
      }
    }

    
?>