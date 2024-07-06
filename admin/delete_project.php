<?php
 session_start();
    include'dbConfig/dbconfig.php';


  if(isset($_POST['delete_album']))
     {
     $id=$_REQUEST['id'];
    
   
      $query = "DELETE FROM projectdet WHERE pdid='$id'";

      $query_run= mysqli_query($connection,$query);
       
            if($query_run)
      {
                    echo "<script>alert('Project Deleted Successfully');</script>'";
                        
                        header('Location: viewprojects.php');
      }
      else
      {
                        echo "<script>alert('Project Deleted Successfully');</script>'";           
                        header('Location:viewprojects.php'); 
      }
    }
    

?>