<div class="modal fade" id="AdminModal<?php echo $row['join_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="update_album">Update Charter Members Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form action="upcode.php" method="POST" enctype="multipart/form-data">
       

        <input type="hidden" name="cid" value="<?php echo $row['join_id'] ?>">
             <div class="modal-body">
              <div class="form-group">
            <label> Respond To Request :</label>
          <select type="text" name="status" value="" class="form-control" required='true'>
            <option value="<?php  echo $row['status'];?>"><?php  echo $row['status'];?></option>
            <option value="Approved">Approved</option>

          </select>
        </div>
            <div class="form-group">
            <label> Name</label>
          <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>" readonly="true" placeholder="Enter Name" >
        </div>
        <div class="form-group">
          <label>Age</label>
          <input type="number" size="4" name="age" min="18" required class="form-control" value="<?php echo $row['age'] ?>"readonly="true" placeholder="Enter Age">
        </div>
        <div class="form-group">
            <label> Email</label>
          <input type="email" name="email" class="form-control" value="<?php echo $row['email'] ?>" placeholder="Enter email" readonly="true">
        </div>
        <div class="form-group">
            <label> Contact number</label>
          <input type="text" name="Phone" pattern="[7-9]{1}[0-9]{9}" 
       title="Phone number with 7-9 and remaing 9 digit with 0-9" placeholder="Enter Contact Number" value="<?php echo $row['cn'] ?>" readonly="true" class="form-control">
        </div>
        <div class="form-group">
          <label>Address</label>
          <textarea class="form-control" rows="3" placeholder="Enter Address" name="address"  maxlength="10000" readonly="true" ><?php echo $row['address'] ?></textarea >
        </div>
        <div class="form-group">
          <label>Why you want to Join Us</label>
          <textarea class="form-control" rows="3" placeholder="Enter Description" value="" name="wju" maxlength="10000" readonly="true"><?php echo $row['wju'] ?></textarea >
        </div>
        
        
      
      </div>


      



      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="Submit" name="rr_update" class="btn btn-success">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>