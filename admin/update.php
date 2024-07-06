<!-- Theme Update -->
<div class="modal fade" id="theme_update<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="update_album">Update Designated Members Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form action="" method="POST" enctype="multipart/form-data">
     

        
            <div class="modal-body">
              <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
            <div class="form-group">
            <label> Title</label>
          <input type="text" name="Title" class="form-control" value="<?php echo $row['name'] ?>"  required>
        </div>
        <div class="form-group">
              <label>Theme (Year) </label>
              <input class="form-control" placeholder="Enter the year" name="edit_theme_session" pattern ="[0-9]{4}-[0-9]{2}" value="<?php echo $row['theme_session'] ?>" required>
              <p class="help-block">Example: "2020-21"</p>
                                                  
              </div>
      
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="Submit" name="theme_update" class="btn btn-success">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php
//  require'phpmailer/PHPMailerAutoload.php';
//  include 'dbConfig/dbconfig.php';
 if(isset($_POST['theme_update']))
     {
      $edit_id =$_POST['edit_id'];
      $edit_name = $_POST['Title'];
      $edit_session = $_POST['edit_theme_session'];
      
     
      $query = " UPDATE add_theme SET name='$edit_name',theme_session='$edit_session' WHERE id='$edit_id'";



      $query_run= mysqli_query($connection,$query);
       
      if($query_run)
      {


                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='viewtheme.php'</script>";


      }
      else
      {
                        echo "<script>alert('Data not updated Successfully Try Again!')</script>";

      }
      
    }

    // Board of directors Update code

    if(isset($_POST['bod_update']))
     {
         $bod_edit_mem_id= $_POST['mem_id'];
      $bod_edit_designation= $_POST['designation'];
      $bod_edit_id = $_POST['bod_id'];
      $bod_edit_name = $_POST['name'];
      $bod_edit_phone = $_POST['contact'];

     
      $query = " UPDATE boardofdirec SET designation='$bod_edit_designation',name='$bod_edit_name',contact='$bod_edit_phone',Mem_id='$bod_edit_mem_id' WHERE Id='$bod_edit_id'";



      $query_run= mysqli_query($connection,$query);
       
      if($query_run)
      {

                        echo "<script>alert('Data updated Successfully.')</script>";
                         echo"<script>window.location.href ='viewbod.php'</script>";
      }
      else
      {
                        echo "<script>alert('Data not updated Successfully Try Again!')</script>";

      }
      
    }
    
    // District Governer update code;
     if(isset($_POST['dm_update']))
     {
      $edit_id = $_POST['dm_id'];
      $edit_name = $_POST['name'];
      $edit_description = $_POST['description'];
      
     
      $query = " UPDATE dist_governers SET name='$edit_name',description='$edit_description' WHERE do_id='$edit_id'";



      $query_run= mysqli_query($connection,$query);
       
      if($query_run)
      {


                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='viewdg.php'</script>";


      }
      else
      {
                        echo "<script>alert('Data not updated Successfully Try Again!')</script>";

      }
      
    }
    // CMSRID UPDATE
    if(isset($_POST['cms_update']))
     {
      
      $bod_edit_id = $_POST['bod_id'];
      $bod_edit_name = $_POST['name'];
      $bod_edit_phone = $_POST['served'];
     
      $query = " UPDATE cmsridadd SET name='$bod_edit_name',served='$bod_edit_phone' WHERE id='$bod_edit_id'";



      $query_run= mysqli_query($connection,$query);
       
      if($query_run)
      {

                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='viewcsrid.php'</script>";

      }
      else
      {
                        echo "<script>alert('Data not updated Successfully Try Again!')</script>";

      }
      
    }

    // RH  UPDATE CODE
    if(isset($_POST['rh_update']))
     {
      $edit_id = $_POST['rid'];
      $edit_year = $_POST['year'];
      $edit_president = $_POST['president'];
       $edit_secertary = $_POST['secretary'];
      
     
      $query = " UPDATE roll_honor SET year='$edit_year',president='$edit_president',secertary='$edit_secertary' WHERE rid='$edit_id'";



      $query_run= mysqli_query($connection,$query);
       
      if($query_run)
      {


                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='viewrh.php'</script>";


      }
      else
      {
                        echo "<script>alert('Data not updated Successfully Try Again!')</script>";

      }
      
    }
    
    //Phf Code

    if(isset($_POST['phf_update']))
     {
      $edit_id = $_POST['phfid'];
      
      $edit_name = $_POST['phfn'];
       $edit_comment = $_POST['comment'];
      
     
      $query = " UPDATE phf SET phfn='$edit_name',comment='$edit_comment' WHERE phfid='$edit_id'";



      $query_run= mysqli_query($connection,$query);
       
      if($query_run)
      {


                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='viewphf.php'</script>";


      }
      else
      {
                        echo "<script>alert('Data not updated Successfully Try Again!')</script>";

      }
      
    } 
    // contri update code
        if(isset($_POST['con_update']))
     {
      $edit_id = $_POST['phfid'];
      
      $edit_name = $_POST['phfn'];
       $edit_comment = $_POST['comment'];
      
     
      $query = " UPDATE con_det SET name='$edit_name', amount='$edit_comment' WHERE conid='$edit_id'";



      $query_run= mysqli_query($connection,$query);
       
      if($query_run)
      {


                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='loc_view.php'</script>";


      }
      else
      {
                        echo "<script>alert('Data not updated Successfully Try Again!')</script>";
                        echo"<script>window.location.href ='loc_view.php'</script>";

      }
      
    } 
    // ###################################PHSM UPDATE CODE ########################################
        if(isset($_POST['phsm_update']))
     {
      $edit_id = $_POST['phfid'];
      
      $edit_name = $_POST['phfn'];
      
      
     
      $query = " UPDATE phsm SET name='$edit_name' WHERE phid='$edit_id'";



      $query_run= mysqli_query($connection,$query);
       
      if($query_run)
      {


                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='viewphsm.php'</script>";


      }
      else
      {
                        echo "<script>alert('Data not updated Successfully Try Again!')</script>";
                        echo"<script>window.location.href ='viewphsm.php'</script>";

      }
      
    } 

    // ##############################UPDATE COMMETTIE LIST  CODE#############################################
      if(isset($_POST['coml_update']))
     {
      $edit_id = $_POST['phfid'];
      
      $edit_name = $_POST['phfn'];
      
      
     
      $query = " UPDATE com_list SET listname='$edit_name' WHERE id='$edit_id'";



      $query_run= mysqli_query($connection,$query);
       
      if($query_run)
      {


                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='viewcmtylist.php'</script>";


      }
      else
      {
                        echo "<script>alert('Data not updated Successfully Try Again!')</script>";
                        echo"<script>window.location.href ='viewcmtylist.php'</script>";

      }
      
    } 
    // ########################################## UPDATE COMMETTIE MEMBERS UPDATE CODE#####################
     if(isset($_POST['comm_update']))
     {
      $edit_id = $_POST['phfid'];
      
      $edit_name1 = $_POST['phfn'];
      $edit_name2 = $_POST['phfn1'];
      $edit_name3 = $_POST['phfn2'];
      
      
     
      $query = " UPDATE com_mem SET cchair='$edit_name1',vchair='$edit_name2',cmm='$edit_name3' WHERE mid='$edit_id'";



      $query_run= mysqli_query($connection,$query);
       
      if($query_run)
      {


                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='viewcmtymem.php'</script>";


      }
      else
      {
                        echo "<script>alert('Data not updated Successfully Try Again!')</script>";
                        echo"<script>window.location.href ='viewcmtymem.php'</script>";

      }
      
    } 
    // ################################# DAW UPDATE CODE #################################################

      if(isset($_POST['daw_update']))
     {
      $edit_id = $_POST['phfid'];
      
      $edit_name1 = $_POST['phfn'];
      $edit_name2 = $_POST['phfn1'];
    
      
      
     
      $query = " UPDATE da_award SET name='$edit_name1',aw='$edit_name2' WHERE id='$edit_id'";



      $query_run= mysqli_query($connection,$query);
       
      if($query_run)
      {


                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='viewdist.php'</script>";


      }
      else
      {
                        echo "<script>alert('Data not updated Successfully Try Again!')</script>";
                        echo"<script>window.location.href ='viewdist.php'</script>";

      }
      
    } 


// Members Update Code

    if(isset($_POST['mem_update']))
                                          {
                                            $edit_id = $_POST['bod_id'];
                                            $name=$_POST['name'];
                                                    $id=$_POST['id'];
                                                    $phone=$_POST['phone'];
                                                    $desc = $_POST['adesc'];
                                                    $designation = $_POST['desig'];
                                                    $address=$_POST['address'];
                                                    $email=$_POST['email'];
                                                    $classification=$_POST['Classification'];
                                                    $dob=$_POST['dob'];
                                                    $jyear=$_POST['jyear'];
                                                    $sname=$_POST['sname'];
                                                    $sdob=$_POST['sdob'];
                                                    $waday=$_POST['wADAY'];
                                                    $bdg=$_POST['bdg'];
                                          
                                            $query = " UPDATE members SET name='$name',desig='$designation',id='$id',phone='$phone',address='$address',email='$email',classification='$classification',descr='$desc',dob='$dob',jyear='$jyear',spouse_name='$sname',spousedob='$sdob',waday='$waday',bdg='$bdg' WHERE mid='$edit_id'";



                                            $query_run= mysqli_query($connection,$query);
                                            
                                            if($query_run)
                                            {

                                                              echo "<script>alert('Data updated Successfully.')</script>";
                                                              
                                                              
                                                          echo"<script>window.location.href ='viewmembers.php'</script>";
                                                
                                            }
                                            else
                                            {
                                                              echo "<script>alert('Data not updated Successfully Try Again!')</script>";

                                            }
                                            
                                          }

    // ############################ Designated Update ###############################
                                          if(isset($_POST['dmem_update']))
     {
      $edit_designation= $_POST['designation'];
      $edit_id = $_POST['dm_id'];
      $edit_name = $_POST['name'];
      $edit_description = $_POST['description'];
      
     
      $query = " UPDATE desig_members SET designation='$edit_designation',name='$edit_name',description='$edit_description' WHERE id='$edit_id'";



      $query_run= mysqli_query($connection,$query);
       
      if($query_run)
      {


                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='view_designated.php'</script>";


      }
      else
      {
                        echo "<script>alert('Data not updated Successfully Try Again!')</script>";

      }
      
    }
    // ##############################NATION BUILDER UPDATE CODE##########################
      if(isset($_POST['dmem_update']))
     {
      $edit_designation= $_POST['designation'];
      $edit_id = $_POST['dm_id'];
      $edit_name = $_POST['name'];
      
     
      $query = " UPDATE nba SET org='$edit_designation',name='$edit_name' WHERE id='$edit_id'";



      $query_run= mysqli_query($connection,$query);
       
      if($query_run)
      {


                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='view_nba.php'</script>";


      }
      else
      {
                        echo "<script>alert('Data not updated Successfully Try Again!')</script>";

      }
      
    }
    // #######################################ROTRACT TEAM UPDATE CODE #####################
    if(isset($_POST['rt_update']))
     {
      $edit_designation= $_POST['designation'];
      $edit_id = $_POST['dm_id'];
      $edit_name = $_POST['name'];
     
      
     
      $query = " UPDATE rteam SET designation='$edit_designation',name='$edit_name' WHERE rid='$edit_id'";



      $query_run= mysqli_query($connection,$query);
       
      if($query_run)
      {


                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='view_rcteam.php'</script>";


      }
      else
      {
                        echo "<script>alert('Data not updated Successfully Try Again!')</script>";

      }
      
    }
    // ################################################INTERACT UPDATEW CODE##############################
    if(isset($_POST['it_update']))
     {
      $edit_designation= $_POST['designation'];
      $edit_id = $_POST['dm_id'];
      $edit_name = $_POST['name'];
     
      
     
      $query = " UPDATE iteam SET designation='$edit_designation',name='$edit_name' WHERE iid='$edit_id'";



      $query_run= mysqli_query($connection,$query);
       
      if($query_run)
      {


                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='view_icteam.php'</script>";


      }
      else
      {
                        echo "<script>alert('Data not updated Successfully Try Again!')</script>";

      }
      
    }
    // ################################################Hornary Update######################################
    if(isset($_POST['hm_update']))
     {
      $edit_designation= $_POST['designation'];
      $edit_id = $_POST['dm_id'];
      $edit_name = $_POST['name'];
      $edit_session= $_POST['session'];
      
     
      $query = " UPDATE hrnm SET session='$edit_session',designation='$edit_designation',Name='$edit_name' WHERE id='$edit_id'";



      $query_run= mysqli_query($connection,$query);
       
      if($query_run)
      {


                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='viewhm.php'</script>";


      }
      else
      {
                        echo "<script>alert('Data not updated Successfully Try Again!')</script>";

      }
      
    }
    // ####################################### Update code For OCD###################################
     if(isset($_POST['ocd_update']))
     {
      
      $edit_id = $_POST['edit_id'];
      $edit_name = $_POST['name'];
      $edit_description = $_POST['description'];
      $edit_subh = $_POST['subh'];
      
     
      $query = " UPDATE ocdet SET title='$edit_name',descr='$edit_description',subh='$edit_subh' WHERE id='$edit_id'";



      $query_run= mysqli_query($connection,$query);
       
      if($query_run)
      {


                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='view_ocd.php'</script>";


      }
      else
      {
                        echo "<script>alert('Data not updated Successfully Try Again!')</script>";

      }
      
    }
    // ####################################### Update code For OC###################################
    if(isset($_POST['oc_update']))
     {
      
      $edit_id = $_POST['edit_id'];
      $edit_name = $_POST['name'];
      $edit_description = $_POST['description'];
      
     
      $query = " UPDATE our_causes SET title='$edit_name',descr='$edit_description' WHERE ocid='$edit_id'";



      $query_run= mysqli_query($connection,$query);
       
      if($query_run)
      {


                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='view_oc.php'</script>";


      }
      else
      {
                        echo "<script>alert('Data not updated Successfully Try Again!')</script>";

      }
      
    }

    // #################################### Updation Code for CM ####################################
     if(isset($_POST['cm_update']))
     {
      $edit_id = $_POST['cid'];
      $edit_name = $_POST['name'];
      $edit_description = $_POST['description'];
      
     
      $query = " UPDATE charter_members SET name='$edit_name',description='$edit_description' WHERE cid='$edit_id'";



      $query_run= mysqli_query($connection,$query);
       
      if($query_run)
      {


                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='viewcm.php'</script>";


      }
      else
      {
                        echo "<script>alert('Data not updated Successfully Try Again!')</script>";

      }
      
    }

    // #################################### Updation Code for projectsview ####################################
     if(isset($_POST['project_update']))
     {
      $edit_id = $_POST['edit_id'];
      $edit_name = $_POST['update'];
      $edit_description = $_POST['description'];
      
     
      $query = " UPDATE projectdet SET title='$edit_name',description='$edit_description' WHERE pdid='$edit_id'";



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
// ######################################################### Updation Code For Cover_evenet##########################
    if(isset($_POST['cover_update']))
     {
      $edit_title= $_POST['update'];
      $edit_id = $_POST['album_id'];
      $edit_images = $_FILES["album_cover"]['name'];
      $location= "uploads/admin/Gallery/events_cover/";
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

     $query = "UPDATE event_cover SET event_name='$edit_title',event_cover='$edit_images' WHERE eid='$edit_id'";

      $query_run= mysqli_query($connection,$query);
      
       
            if($query_run)
      {
        $images= md5($edit_images).'.'.$extension_check;
         move_uploaded_file($filetmp,$location.$edit_images);

                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='eventview.php'</script>";
      }
      else
      {
                 echo "<script>alert('Data not updated .')</script>";
                        echo"<script>window.location.href ='eventview.php'</script>";       
      }
    }
// ########################################### ROTRACT COVER#######################################################

    if(isset($_POST['rcover_update']))
     {
      $edit_title= $_POST['update'];
      $edit_id = $_POST['album_id'];
      $edit_images = $_FILES["album_cover"]['name'];
      $location= "uploads/admin/Gallery/r_cover/";
      $filetmp = $_FILES["album_cover"]['tmp_name'];
      $extension = explode('.',$edit_images);

                       //checking extension
                       $extension_check= strtolower(end($extension));
                       // allowed extensions
                      $allowed_extensions = array("jpg","jpeg","png");
                      

                       if(!in_array($extension_check,$allowed_extensions))
                          {
                           echo " <div class='alert alert-danger mydiv'><strong>ERROR</strong> - Invalid format. Only jpg / jpeg/ png / format allowed</div>";
                          
                               }

     $query = "UPDATE r_cover SET revent_name='$edit_title',revent_cover='$edit_images' WHERE reid='$edit_id'";

      $query_run= mysqli_query($connection,$query);
      
       
            if($query_run)
      {
        $images= md5($edit_images).'.'.$extension_check;
         move_uploaded_file($filetmp,$location.$edit_images);

                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='reventview.php'</script>";
      }
      else
      {
                 echo "<script>alert('Data not updated .')</script>";
                        echo"<script>window.location.href ='reventview.php'</script>";       
      }
    }

// ##################################### I COVER UPDATE ##########################################################
    if(isset($_POST['icover_update']))
     {
      $edit_title= $_POST['update'];
      $edit_id = $_POST['album_id'];
      $edit_images = $_FILES["album_cover"]['name'];
      $location= "uploads/admin/Gallery/i_cover/";
      $filetmp = $_FILES["album_cover"]['tmp_name'];
      $extension = explode('.',$edit_images);

                       //checking extension
                       $extension_check= strtolower(end($extension));
                       // allowed extensions
                      $allowed_extensions = array("jpg","jpeg","png");
                      

                       if(!in_array($extension_check,$allowed_extensions))
                          {
                           echo " <div class='alert alert-danger mydiv'><strong>ERROR</strong> - Invalid format. Only jpg / jpeg/ png / format allowed</div>";
                          
                               }

     $query = "UPDATE i_cover SET ievent_name='$edit_title',ievent_cover='$edit_images' WHERE ieid='$edit_id'";

      $query_run= mysqli_query($connection,$query);
      
       
            if($query_run)
      {
        $images= md5($edit_images).'.'.$extension_check;
         move_uploaded_file($filetmp,$location.$edit_images);

                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='ieventview.php'</script>";
      }
      else
      {
                 echo "<script>alert('Data not updated .')</script>";
                        echo"<script>window.location.href ='ieventview.php'</script>";       
      }
    }


// ##################################### Matching Grants Footer U[pdation Code #####################################

    if(isset($_POST['mgf_update']))
     {
      $edit_id = $_POST['id'];
      
      $edit_name = $_POST['phfn'];
       $edit_comment = $_POST['comment'];
       
      
     
      $query = "UPDATE `mgrcdf` SET `title`='$edit_name',`descr`='$edit_comment' WHERE mgfid='$edit_id'";



      $query_run= mysqli_query($connection,$query);
       
      if($query_run)
      {


                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='viewgrantsf.php'</script>";     


      }
      else
      {
                        echo "<script>alert('Data not updated Successfully Try Again!')</script>";
                        echo"<script>window.location.href ='viewgrantsf.php'</script>";

      }
      
    }
    
// ####################################### Grants Updation Code #############################################
    if(isset($_POST['grnts_update']))
     {
      $edit_id = $_POST['id'];
      
      $edit_name = $_POST['phfn'];
       $edit_comment = $_POST['comment'];
       $edit_amnt= $_POST['amnt'];
      
     
      $query = "UPDATE `mgrcd` SET `code`='$edit_name',`descr`='$edit_comment',`amnt`='$edit_amnt' WHERE mgid='$edit_id'";



      $query_run= mysqli_query($connection,$query);
       
      if($query_run)
      {


                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='viewgrants.php'</script>";


      }
      else
      {
                        echo "<script>alert('Data not updated Successfully Try Again!')</script>";
                        echo"<script>window.location.href ='viewgrants.php'</script>";
      }
      
    }
    // ####################################### Update code for nation Builder award #####################################################
    
      if(isset($_POST['nb_update']))
     {
      $edit_id = $_POST['dm_id'];
      $edit_name = $_POST['name'];
      $edit_description = $_POST['designation'];
      
     
      $query = " UPDATE nba SET name='$edit_name',org='$edit_description' WHERE id='$edit_id'";



      $query_run= mysqli_query($connection,$query);
       
      if($query_run)
      {


                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='view_nba.php'</script>";


      }
      else
      {
                        echo "<script>alert('Data not updated Successfully Try Again!')</script>";

      }
      
    }
    
    // ################### update avs code#################
     if(isset($_POST['av_update']))
     {
      $edit_id = $_POST['dm_id'];
      $edit_name = $_POST['name'];
 
      
     
      $query = " UPDATE avs SET name='$edit_name' WHERE id='$edit_id'";



      $query_run= mysqli_query($connection,$query);
       
      if($query_run)
      {


                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='viewavs.php'</script>";


      }
      else
      {
                        echo "<script>alert('Data not updated Successfully Try Again!')</script>";

      }
      
    }

    // ###################################### REQUEST RESPOND CODE UPDATE#####################################################
       if(isset($_POST['rr_update']))
     {

      $edit_id = $_POST['cid'];
      
      $name = mysqli_real_escape_string($connection,$_POST['name']);
                    $age = mysqli_real_escape_string($connection,$_POST['age']);
                    $email = mysqli_real_escape_string($connection,$_POST['email']);
                    $cn = mysqli_real_escape_string($connection,$_POST['Phone']);
                    $address = mysqli_real_escape_string($connection,$_POST['address']);
                    $wju = mysqli_real_escape_string($connection,$_POST['wju']);
                    $status = mysqli_real_escape_string($connection,$_POST['status']);
      
     
      $query = "UPDATE `joining_details` SET `status`='$status' where join_id = '$edit_id'";



      $query_run= mysqli_query($connection,$query);
       
      if($query_run)
      {
         $mail  = new PHPMailer;
                    // $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';
                    $mail->Username="rotaryclubofdharamshala@gmail.com";
                    $mail->Password='Rotary@123';
                    $mail->setFrom('rotaryclubofdharamshala@gmail.com','Rotary Club Of Dharamshala District 3070');
                    $mail->addAddress($email);
                    $mail->addReplyTo('rotaryclubofdharamshala@gmail.com');
                    $mail->isHTML(true);
                    $mail->Subject='Request Approved';
                    $mail->Body='<center><img src="img/logo.png" height="120px" width="240px"></center>
                    <br>
                    <h2 style="color:blue;">Hi  '.$name.', </h2> 
                    <br>
                    <br>
                    <h4>
                    Thanks so much for reaching out! This auto-reply is just to let you know…
                    <br>
                     Your Request For Joining Rotary Club of Dharamshala District 3070 is Approved.
                     Thanks to be a  Part of Our club.<br>

                     Check Out Our Website and Follow us on : www.rotaryclubofdharamshala.org <br>
                     1.Youtube : https://www.google.com/url?sa=t&source=web&rct=j&url=https://m.youtube.com/channel/UCNM16zogE3O3-a2ipyf1PhQ&ved=2ahUKEwi7uOC09b_oAhW3zjgGHY0KCbgQjjgwAHoECAMQAQ&usg=AOvVaw2Vt91qGcIU5sDU4DtXxQWC <br>
                     2.Facebook : https://www.facebook.com/RotaryClubDharamshala/ <br>
                     3.Twitter : https://twitter.com/RotaryClubDsala <br>



                    </h4>



                    <br>
                    <b>Regards</b>,
                    <br>

                   <b>Rotary Club Of Dharamshala</b>
                    ';
                    $mail->Send();


                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='index.php'</script>";


      }
      else
      {
                        echo "<script>alert('Data not updated Successfully Try Again!')</script>";
                        echo"<script>window.location.href ='index.php'</script>";
      }
      
    }
  

    
    ?>

 