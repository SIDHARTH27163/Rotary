<div class="modal fade" id="AdminModal<?php echo $row['albumid'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="update_album">Update Album</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form action="rotractalbumcode.php" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="album_id" value="<?php echo $row['albumid'] ?>">
            <div class="modal-body">
            <div class="form-group">
            <label> Album Name or Title</label>
          <input type="text" name="update" class="form-control" value="<?php echo $row['name'] ?>" placeholder="Enter Album Name" required>
         <p class="help-block">Example "Friendship day"</p>
        </div>
        <div class="form-group">
          <label> Description</label>

          <p class="help-block text-danger" style="font-weight:bold;">Max 1000 Character Allow </p>
            <textarea class="form-control" rows="3" placeholder="Enter Description" name="Description" maxlength="1000" required><?php echo $row['adesc'] ?></textarea >
        </div>
        <div class="form-group">
        <label> Upload Image</label>
          <input type="file" name ="album_cover" id="Profile_image" class="form-control" required>
        </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="Submit" name="album_update" class="btn btn-success">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>


