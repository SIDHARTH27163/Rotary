
    <?php
    include'dbConfig/dbconfig.php';

    // ################################## Update Code for admin############################################
     if(isset($_POST['album_update']))
     {
      $edit_title= $_POST['update'];
      $edit_id = $_POST['album_id'];
      $edit_desc = $_POST['Description'];
      $edit_images = $_FILES["album_cover"]['name'];
      $location= "uploads/admin/Gallery/aupload/";
      $filetmp = $_FILES["album_cover"]['tmp_name'];
      $extension = explode('.',$edit_images);

                       //checking extension
                       $extension_check= strtolower(end($extension));
                       // allowed extensions
                      $allowed_extensions = array("jpg","jpeg","png","gif");
                      

                       if(!in_array($extension_check,$allowed_extensions))
                          {
                           echo " <div class='alert alert-danger mydiv'><strong>ERROR</strong> - Invalid format. Only jpg / jpeg/ png /gif format allowed</div>";
                          
                               }

     $query = "UPDATE tbl_album SET name='$edit_title',adesc='$edit_desc',image='$edit_images' WHERE albumid='$edit_id'";

      $query_run= mysqli_query($connection,$query);
      
       
            if($query_run)
      {
        $images= md5($edit_images).'.'.$extension_check;
         move_uploaded_file($filetmp,$location.$edit_images);

                        echo'<script>alert("Album Updated Successfully");</script>';
                        header('Location: viewalbum.php');
      }
      else
      {
                        echo'<script>alert("Album not Updated Please Try Again.");</script>';
                        header('Location: viewalbum.php');
      }
    }


// #############################deleteCode fo album#################################################
     if(isset($_POST['delete_album']))
     {
      $id = $_POST['delete_id'];
    
      $query = "DELETE FROM tbl_album WHERE albumid='$id'";

      $query_run= mysqli_query($connection,$query);
       
            if($query_run)
      {
                     echo "<script>alert('Data Deleted Successfully.')</script>";
                        echo"<script>window.location.href ='viewalbum.php'</script>";
      }
      else
      {
                echo "<script>alert('Data not Deleted !.')</script>";
                        echo"<script>window.location.href ='viewalbum.php'</script>";
      }
    }
    
//  ######################################################
if(isset($_POST['delete_gallery']))
     {
      $id = $_POST['delete_gid'];
    
      $query = "DELETE FROM tbl_gallery WHERE gid='$id'";

      $query_run= mysqli_query($connection,$query);
       
            if($query_run)
      {
                 echo "<script>alert('Image Deleted Successfully.')</script>";
                        echo"<script>window.location.href ='viewsgallery.php'</script>";
      }
      else
      {
                  echo "<script>alert('Data not Deleted!')</script>";
                        echo"<script>window.location.href ='viewsgallery.php'</script>"; 
      }
    }
    ?>
