<?php

    
	// Build up DB connection including cofiguration file
	require ("admin/dbConfig/dbconfig.php");
	//Assign an empty variable to store the fetched items
	$output = '';
	$Srno =1;
	$location="admin/uploads/admin/Gallery/Members/";

                      
                  
                       $sql ="


  SELECT *
    FROM boardofdirec
    LEFT JOIN members 
         ON members.id = boardofdirec.Mem_id 
   WHERE boardofdirec.bod_session = '".$_POST["bid"]."'";
                        
	//SQL query to fetch the phone models belongs to the entered brand to the input field
	
	// execution of the query. Output a boolean value
	$res = mysqli_query($connection,$sql);
	//Concatenate fetched items to the output variable with HTML option tags to display
	// Check whether there are results or not
	if(mysqli_num_rows($res)>0){
	    
		//Fetch the models into an array belongs to a particular brand name/id
		while ($row = mysqli_fetch_array($res)) {
		    
			//Concatenate further fetched items to the output variable
			$output .=   '<tr>
                  <td>'.$Srno++.'</td>
                  <td> '.$row["Mem_id"].'</td>
                  <td>'.$row["designation"].'</td>
                  <td>'.$row["name"].'</td>
                  <td>'.$row["contact"].'</td>
                  <td><center><a href="'.$location.$row['image'].'"><img src="'.$location.$row['image'].'" height="120px;" width="120px" style="border-radius:100%; border:2px solid cadetblue;"></center></a></td> </tr>
  
            
                  
                 ';
                
                 
		}
	
		
	}
  
	
	//print the fetched phone models
	echo $output;



?>


