
    <?php
    session_start();
    include'dbConfig/dbconfig.php';

    // ################################## Update Code for admin############################################
     if(isset($_POST['album_update']))
     {
      $edit_title= $_POST['update'];
      $edit_id = $_POST['album_id'];
      
      $edit_images = $_FILES["album_cover"]['name'];
      $location= "uploads/admin/Gallery/pupload/";
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

     $query = "UPDATE rotractpmonth SET name='$edit_title',image='$edit_images' WHERE projectid='$edit_id'";

      $query_run= mysqli_query($connection,$query);
      
       
            if($query_run)
      {
        $images= md5($edit_images).'.'.$extension_check;
         move_uploaded_file($filetmp,$location.$edit_images);

                        echo'<script>alert("Album Update Successfully");</script>';
                        header('Location: rotractviewalbum.php');
      }
      else

      {
                        echo "<script>alert('Project month   not Updated Successfully');</script>'";
      }
    }


// #############################deleteCode fo album#################################################
     if(isset($_POST['delete_album']))
     {
      $id = $_POST['delete_id'];
    
      $query = "DELETE FROM rotractpmonth WHERE projectid='$id'";

      $query_run= mysqli_query($connection,$query);
       
            if($query_run)
      {
                    echo "<script>alert('Project Deleted Successfully');</script>'";
                        
                        header('Location: rotractviewmonth.php');
      }
      else
      {
                        echo "<script>alert('Project Deleted Successfully');</script>'";           
                        header('Location:rotractviewmonth.php'); 
      }
    }
    
