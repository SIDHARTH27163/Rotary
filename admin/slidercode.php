
          <?php
          session_start();
          include 'dbConfig/dbconfig.php';
                     $success=0;

                    if(isset($_POST['slider_update']))
     {
      $edit_id = $_POST['e_id'];
      $edit_title = mysqli_real_escape_string($connection,$_POST['title']);
      $edit_description = mysqli_real_escape_string($connection,$_POST['desc']);
                              
                          

        
     $query = "UPDATE `slider_images` SET `title`='$edit_title',`description`= '$edit_description' WHERE id='$edit_id'";

      $query_run= mysqli_query($connection,$query);
      
       
            if($query_run)
      {
                          $success=1;
                        header('Location: viewslider.php?success='.$success);
      }
      else
      {
          $success=0;
                        header('Location: viewslider.php?success='.$success);
      }
    
    }

                   ?>