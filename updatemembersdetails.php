<!DOCTYPE html>
<?php
// Initialize the session
session_start();
 $sucess = 0;
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"])){
    header("location: member_login.php");
  
}
else
{

  if((time() - $_SESSION['last_login_timestamp']) > 3600) // 900 = 15 * 60  
           {  
                
                
                       header("location:logout.php");
           }  
}



?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update Member Details | Rotary Club Of Dharamshala</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scss/main.css">
    <link rel="icon" type="image/gif/png" href="img/title.png">
    <link rel="stylesheet" href="scss/skin.css">
    <link rel="stylesheet" href="admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script data-ad-client="ca-pub-3482929739237150" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script src="./script/index.js"></script>
</head>
<body >
 
      <?php
        include './themepart/header2.php';
         include 'admin/dbConfig/dbconfig.php';
        $username =  $_SESSION['username'];
        $query = "SELECT * FROM members where phone = $username";
         $query_run = mysqli_query($connection,$query);
          $row = mysqli_fetch_assoc($query_run);
            $id = $row['mid'];
            $mem_id = $row['id'];
            $name = $row['name'];
            $desig = $row['desig'];
            $phone = $row['phone'];
            $email = $row['email'];
            $address = $row['address'];
            $classification = $row['classification'];
            $desc = $row['descr'];
            $dob = $row['dob'];
            $joy = $row['jyear'];
            $sname = $row['spouse_name'];
            $sdob = $row['spousedob'];
            $waday = $row['waday'];
            $bdg = $row['bdg'];
            $img = $row['image'];
            
            //  Member Update Details
             if(isset($_POST['update']))
     {
         $edit_id = $POST['edit_id'];
      $name_update= $_POST['name'];
      $phone_no= $_POST['phone'];
      $address_new= $_POST['address'];
       $email_new = $_POST['email'];
        $classif = $_POST['classif'];
         $descrip = $_POST['description'];
         $dob_upd = $_POST['dob'];
          $sname_u = $_POST['sname'];
           $sdob_u = $_POST['sdob'];
           $waday_update = $_POST['waday_update'];
           $bdg_update = $_POST['bdg_update'];
           
           echo $wayday_update;
           echo $bdg_update;

     $query = "UPDATE members SET name='$name',phone='$phone_no',address='$address_new',email='$email_new',classification='$classif',descr='$descrip',dob='$dob_upd',spouse_name='$sname_u',spousedob='$sdob_u',waday='$waday_update',bdg='$bdg_update' WHERE mid='$id'";
     
    

      $query_run= mysqli_query($connection,$query);
       
            if($query_run)
      {
                        echo "<script>alert('Data updated Successfully.')</script>";
                        echo"<script>window.location.href ='index.php'</script>";
                        session_destroy();
                        
      }
      else
      {
        
                 echo "<script>alert('Data not updated .')</script>";
                        echo"<script>window.location.href ='updatemembersdetails.php'</script>";       
      }
    }
    
    if(isset($_POST['submit']))
     {
      $edit_images = $_FILES["upload"]['name'];
      $location= "admin/uploads/admin/Gallery/Members/";
      $filetmp = $_FILES["upload"]['tmp_name'];
      $extension = explode('.',$edit_images);

                       //checking extension
                       $extension_check= strtolower(end($extension));
                       // allowed extensions
                      $allowed_extensions = array("jpg","jpeg","png");
                      

                       if(!in_array($extension_check,$allowed_extensions))
                          {
                           echo " <div class='alert alert-danger'><strong>ERROR</strong> - Invalid format. Only jpg / jpeg/ png  format allowed</div>";
                          
                               }

    include "admin/dbConfig/dbconfig.php";


   $querr= "UPDATE members SET image='$edit_images' WHERE mid = '$id'";

        echo $querr;
      $quer_run= mysqli_query($connection,$querr);
      
       
            if($quer_run)
      {
        $images= md5($edit_images).'.'.$extension_check;
         move_uploaded_file($filetmp,$location.$edit_images);

                        echo "<script>location.href='updatemembersdetails.php'</script>";
      }
     
    }

    
    
     ?>

    

    <section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2 id="banner-text">Welcome </h2>
            </div>
        </div>

    </section>


    <section id="about-page-section-3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center ">
                    <div class="section-heading text-center text-jusitfy">
                        <h2>Welcome <span><?php echo $name;?></span>,Update Your <span>Details</span></h2>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3"></div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    
                          <img src="admin/uploads/admin/Gallery/Members/<?php echo $img;?>" style="border-radius:100%; border:3px solid cadetblue;" width="150px;" height="150px;">
            <form action="#" method="post" enctype="multipart/form-data" name="upload">
                                       
    
                                      <div class="form-group">
                                            <label>Change Image</label>
                                            <input type="file" name="upload"  id="upload"/>
                                        </div>
                                       
                                       
                                        
                                        <button type="submit" class="btn btn-primary" name="submit">Update Image</button>
                                        
                                    </form>
                    <form action="" method="POST" enctype="multipart/form-data">
                         <div class="modal-body">
                 <input type="hidden" name="edit_id" value="<?php echo $id; ?>">
                 <div class="form-group">
            <label> Member Id</label>
          <input type="text" name="memberid" class="form-control" value="<?php echo $mem_id;?>" placeholder="MemberId" readonly required>
        </div>
            <div class="form-group">
            <label> Name</label>
          <input type="text" name="name" class="form-control" value="<?php echo $name;?>" placeholder="Enter Name" required>
        </div>
          <div class="form-group">
            <label> Designation</label>
          <input type="text" name="desig" class="form-control" value="<?php echo $desig;?>" placeholder="designation" readonly required>
        </div>
        <div class="form-group">
            <label> Contact number</label>
          <input type="text" name="phone" pattern="[6-9]{1}[0-9]{9}"  value ="<?php echo $phone;?>"
       title="Phone number with 7-9 and remaing 9 digit with 0-9" placeholder="Enter Contact Number" required class="form-control">
        </div>
         <div class="form-group">
          <label>Address</label>
          <textarea class="form-control" rows="3" placeholder="Enter Address" name="address" maxlength="10000" required><?php echo $address;?></textarea >
        </div>
        <div class="form-group">
            <label> Email</label>
          <input type="email" name="email" class="form-control" value="<?php echo $email;?>" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label> Classification</label>
          <input type="text" name="classif" class="form-control" value="<?php echo $classification;?>" placeholder="classification"  required>
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea class="form-control" rows="3" placeholder="Enter Description" name="description" maxlength="10000" required><?php echo $desc;?></textarea >
        </div>
        <div class="form-group">
          <label>Date of Birth</label>
          <input type="text"  name="dob" required class="form-control" placeholder="Enter dob" value="<?php echo $dob;?>">
        </div>
         <div class="form-group">
            <label> Joining Year</label>
          <input type="text" name="jyear" class="form-control" value="<?php echo $joy;?>" placeholder="Enter Joining Year" readonly required>
        </div>
        <div class="form-group">
            <label> Spouse Name</label>
          <input type="text" name="sname" class="form-control" value="<?php echo $sname;?>" placeholder="Enter spouse name"  required>
        </div>
         <div class="form-group">
          <label>Spouse Date of Birth</label>
          <input type="text"  name="sdob" required class="form-control" placeholder="Enter dob" value="<?php echo $sdob;?>">
        </div>
        <div class="form-group">
          <label>Wedding Anniversry Date</label>
          <input type="text"  name="waday_update" required class="form-control" placeholder="Enter Wedding Anniversery Date" value="<?php echo $waday;?>">
        </div>
         <div class="form-group">
            <label> Blood group</label>
          <input type="text" name="bdg_update" class="form-control" value="<?php echo $bdg;?>" placeholder="Enter Blood group"  required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="Submit" name="update" class="btn btn-success">Update</button>
      </div>
      </form>
                </div>
            </div>
        </div>
    </section>
   
     

   
     <?php 
    include './themepart/abv_footer.php';
    include './themepart/footer.php';
    include './themepart/themer.php';
    ?>
 
    </body>
    </html>