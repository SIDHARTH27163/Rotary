
<?php 
      
      include ('dbConfig/dbconfig.php');
      session_start();
       
      if (isset ($_POST['upload_gallery']))
      {
            $title = $_POST['title'];
            $description = $_POST['Description'];
            $images= $_FILES["image_file"]['name'];
            $location="uploads/admin/Gallery/";
            $filetmp = $_FILES["image_file"]['tmp_name'];
            // get the image extension
            $extension = substr($images,strlen($images)-4,strlen($images));
           // allowed extensions
            $allowed_extensions = array(".jpg","jpeg",".png",".gif");

          

            if(file_exists($location.$images))
             {
                $store = $_FILES["image_file"]['name'];
                $_SESSION['status']= "Image already exists. '.$store.'";
                header('Location:galleryview.php');  
             }

             if(!in_array($extension,$allowed_extensions))
              {
              echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";

              }


            else
            {  
              $images=md5($images).$extension;
      
                   $query = "INSERT INTO gallery(Title,image,Description,idate)VALUES('$title','$images','$description',NOW())";
                   $query_run = mysqli_query($connection,$query);
                   
                   
                   if($query_run)
                  {
                    

                        move_uploaded_file($filetmp,$location.$images);
                        echo'<script>alert("Information added successfully");';
                        header('Location: galleryview.php');
                  }


                  else 
                  {
                        $_SESSION['success']="Information not added!";
                        header('Location:galleryview.php');  
                  }
             }
      }

//update gallery content
     if(isset($_POST['update_gallery_info']))
     {
      $edit_id = $_POST['edit_id'];
      $edit_title= $_POST['edit_title'];
      $edit_date = $_POST['edit_date'];
      $edit_description = $_POST['edit_description'];
      $filename= $_FILES["image_file"]['name'];
      $filetmp = $_FILES["image_file"]['tmp_name'];
      $location="uploads/admin/Gallery/";



      if(file_exists($location.$filename))
             {
                $store = $_FILES["image_file"]['name'];
                $_SESSION['status']= "Image already exists. '.$store.'";
                header('Location:table.php');  
             }
      else{
      $query = " UPDATE gallery SET Title='$edit_title', Description='$edit_description', idate='$edit_date', image='$filename' WHERE Id='$edit_id'";



      $query_run= mysqli_query($connection,$query);
       
            if($query_run)
      {
         move_uploaded_file($filetmp,$location.$filename);
                        echo'<script>alert("Admin Registered Successfully!");';
                        header('Location: galleryview.php');
      }
      else
      {
        $_SESSION['success']="Admin Information Not Updated!";
                        header('Location:galleryview.php'); 
      }
    }

     }


     if(isset($_POST['delete_data']))
     {
      $id = $_POST['delete_id'];
    
      $query = "DELETE FROM gallery WHERE Id='$id'";

      $query_run= mysqli_query($connection,$query);
       
            if($query_run)
      {
                        $_SESSION['success']="Admin Deleted Successfully! ";
                        
                        header('Location: galleryview.php');
      }
      else
      {
        $_SESSION['success']="Admin Not Deleted!";
                        header('Location:galleryview.php'); 
      }
    }

    
?>