<div class="modal fade" id="AdminModal<?php echo $row['ieid'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="update_album">Update Album</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form action="upcode.php" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="album_id" value="<?php echo $row['ieid'] ?>">
            <div class="modal-body">
            <div class="form-group">
            <label> Album Name or Title</label>
          <input type="text" name="update" class="form-control" value="<?php echo $row['ievent_name'] ?>" placeholder="Enter Album Name" required>
         <p class="help-block">Example "Friendship day"</p>
        </div>
        
        <div class="form-group">
        <label> Upload Image</label>
          <input type="file" name ="album_cover" id="Profile_image" class="form-control" value="<?php echo $location.$row['ievent_cover']?>" required>
        </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="Submit" name="icover_update" class="btn btn-success">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>


