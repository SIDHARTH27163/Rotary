
<?php
session_start();
include 'dbConfig/dbconfig.php';



if(isset($_POST['header_update']))
{
      
      $Phone1= mysqli_real_escape_string($connection,$_POST['edit_phone1']);
      $Phone2 = mysqli_real_escape_string($connection,$_POST['edit_phone2']);
      $email = mysqli_real_escape_string($connection,$_POST['edit_email']);
      $address = mysqli_real_escape_string($connection,$_POST['edit_address']);
      $meeting = mysqli_real_escape_string($connection,$_POST['edit_meeting']);
      $bod_edit_id = $_POST['bod_edit_id'];

     
      $query = " UPDATE header_section SET Phone1='$Phone1',Phone2='$Phone2',email='$email',address='$address',meeting='$meeting' WHERE Id='$bod_edit_id'";



      $query_run= mysqli_query($connection,$query);

      
      if($query_run)
      {
                      $success = 1;
                       header("location:header?success=" .$success);

                        
      }
      else
      {                 
      					$success = 0;
                        header("location:header?success=" .$success);

                        

      }
      

}




?>