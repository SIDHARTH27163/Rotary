<?php

    
	// Build up DB connection including cofiguration file
	require ("admin/dbConfig/dbconfig.php");
	//Assign an empty variable to store the fetched items
	$output = '';
	$location = "admin/uploads/admin/Gallery/designated_members/";
	//SQL query to fetch the phone models belongs to the entered brand to the input field
	$sql = "SELECT * FROM desig_members WHERE dm_session = '".$_POST["bid"]."' ";
	// execution of the query. Output a boolean value
	$res = mysqli_query($connection,$sql);
	
	//Concatenate fetched items to the output variable with HTML option tags to display
	// Check whether there are results or not
	/* fix the error in previus file mostly th e ajax part*/
	if(mysqli_num_rows($res)>0){
		//Fetch the models into an array belongs to a particular brand name/id
		while ($row = mysqli_fetch_assoc($res)) {
			//Concatenate further fetched items to the output variable

			$output .=    '<tr>
                  <td style="text-align:center;font-family:Arial, sans-serif;"><center><img style="border:3px solid cadetblue; border-radius:100%;" height="263px" width="278px" src="'.$location.$row['image'].'"  alt="'.$row['image'].'"></center>
                  <br>
                  <h3>'.$row['name'].'</h3>
                        <h4>'.$row['designation'].'</h4>
                        <h5> Year ('.$row['dm_session'].')</h5></td>';

                  
                  
               

                    $output .='<tr>
                   <td> <p style="letter-spacing:0.2px; color:#000; line-height:2.0em; text-align:justify; font-family:Arial, sans-serif; font-size:18px;" >'.$row['description'].'</p></td>
                    </tr>';
                $output .='<td><hr></td>';




		}
		
	}
	//print the fetched phone models
	echo $output;



?>