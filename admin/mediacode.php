
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
                        
                        header('Location: viewmediasession.php');
      }
      else
      {
                        header('Location:viewmediasession.php'); 
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
                        
                        header('Location: viewvideos.php');
      }
      else
      {
                        header('Location:viewvideos.php'); 
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
                        
                        header('Location: viewpins.php');
      }
      else
      {
                        header('Location:viewpins.php'); 
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
                        
                        header('Location: viewrebanners.php');
      }
      else
      {
                        header('Location:viewrebanners.php'); 
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
                        
                        header('Location: viewvideos.php');
      }
      else
      {
                        header('Location:viewvideos.php'); 
      }
    }
    ?>
