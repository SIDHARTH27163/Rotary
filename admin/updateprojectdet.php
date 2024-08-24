<div class="modal fade" id="AdminModal<?php echo $row2['pdid'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="update_album">Update Month</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form action="" method="POST" enctype="multipart/form-data">

       
            <div class="modal-body">
               <input type="hidden" name="edit_id" value="<?php echo $row2['pdid'] ?>">
            <div class="form-group">
            <label> Album Name or Title</label>
          <input type="text" name="update" class="form-control" value="<?php echo $row2['title'] ?>" placeholder="Enter Album Name" required>
         <p class="help-block">Example "Friendship day"</p>
        </div>
         <div class="form-group">
            <label> Album Page Link</label>
          <input type="text" name="page_link" class="form-control" value="<?php echo $row2['page_link'] ?>" placeholder="Enter Page Link" required>
         <p class="help-block">Example "https://www.rotaryclubofdharamshala.org/gallery_view.php?id=111"</p>
        </div>
         <div class="form-group">
        <label> Desription</label>
          <textarea name="description" rows="" placeholder="Enter Description"  maxlength="10000" class="form-control" required><?php echo $row2['description'] ?></textarea>
        <p class="help-block" style="font-weight:italic">Max 10000 Character Allowed.<br>   <span class="text-danger text-bold">   NOTE: Use spaces between words and also make new lines b/w paragraphs.</span> </p>
        <p class="help-block text-bold text-danger" style="font-weight:italic">Use Special notations <br>
         NOTE: use double  break tag using keyword br in arow brackets : for paragraphs spacing
          <br> 
              span tag : for bold/ highlight and color  of the text related to theme.


         </p> 
        </div>
        
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="Submit" name="project_update" class="btn btn-success">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php
//  require'phpmailer/PHPMailerAutoload.php';
//  include 'dbConfig/dbconfig.php';


    // #################################### Updation Code for projectsview ####################################
     if(isset($_POST['project_update']))
     {
      $edit_id = $_POST['edit_id'];
      $edit_name = $_POST['update'];
      $edit_description = $_POST['description'];
       $page_link = $_POST['page_link'];
     
      $query = " UPDATE projectdet SET title='$edit_name',description='$edit_description',page_link='$page_link' WHERE pdid='$edit_id'";



      $query_run= mysqli_query($connection,$query);
       
      if($query_run)
      {


                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='viewprojects.php'</script>";


      }
      else
      {
                        echo "<script>alert('Data not updated Successfully Try Again!')</script>";

      }
      
    }

    
    ?>
    
