
    <?php
session_start();
    include'dbConfig/dbconfig.php';

    


// #############################deleteCode fo album#################################################
     
    

if(isset($_POST['delete_gallery']))
     {
      $id = $_POST['delete_gid'];
    
      $query = "DELETE FROM media WHERE mid='$id'";

      $query_run= mysqli_query($connection,$query);
       
            if($query_run)
      {
                        
                        header('Location: viewmediasession');
      }
      else
      {
                        header('Location:viewmediasession'); 
      }
    }

    // ################################################## VIDEO DELETE CODE#################################

    if(isset($_POST['delete_video']))
     {
      $id = $_POST['delete_gid'];
      
      $query = "DELETE FROM videos WHERE id='$id'";

      $query_run= mysqli_query($connection,$query);
       
            if($query_run)
      {
                        
                        header('Location: viewvideos');
      }
      else
      {
                        header('Location:viewvideos'); 
      }
    }

    // ################################################## Pins DELETE CODE#################################


    if(isset($_POST['delete_pins']))
     {
      $id = $_POST['delete_gid'];
    
      $query = "DELETE FROM pins WHERE id='$id'";

      $query_run= mysqli_query($connection,$query);
       
            if($query_run)
      {
                        
                        header('Location: viewpins');
      }
      else
      {
                        header('Location:viewpins'); 
      }
    }

    // ############################################################ Banner################################

if(isset($_POST['delete_banner']))
     {
      $id = $_POST['delete_bid'];
    
      $query = "DELETE FROM rebanners WHERE bannerid='$id'";

      $query_run= mysqli_query($connection,$query);
       
            if($query_run)
      {
                        
                        header('Location: viewrebanners');
      }
      else
      {
                        header('Location:viewrebanners'); 
      }
    }
    // ################################oig Delte Code#######################
    
      if(isset($_POST['delete_oig']))
     {
      $id = $_POST['delete_gid'];
    
      $query = "DELETE FROM oig WHERE id='$id'";

      $query_run= mysqli_query($connection,$query);
       
            if($query_run)
      {
                        
                        header('Location: viewvideos');
      }
      else
      {
                        header('Location:viewvideos'); 
      }
    }
    ?>
