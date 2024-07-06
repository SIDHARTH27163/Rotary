<?php
$output = '';
    $Srno = 1;
	// Build up DB connection including cofiguration file
	require ("admin/dbConfig/dbconfig.php");
	//Assign an empty variable to store the fetched items
	
	
	//SQL query to fetch the phone models belongs to the entered brand to the input field
	$sql = "SELECT * FROM con_det WHERE tid = '".$_POST["abid"]."' ";
	// execution of the query. Output a boolean value
	$res = mysqli_query($connection,$sql);
	
	
	//Concatenate fetched items to the output variable with HTML option tags to display
	// Check whether there are results or not
	if(mysqli_num_rows($res)>0){
		//Fetch the models into an array belongs to a particular brand name/id
		while ($row = mysqli_fetch_assoc($res)) {
			//Concatenate further fetched items to the output variable

			$output .=    '<tr style="font-size:20px; ">
                   <td>'.$Srno++.'</td>
                  <td>'.$row['name'].' </td>
                  <td> '.$row['amount'].' ₹</td>
                 
                 </tr>';

                  
                  
     




		}


		
		
	}
	
	

	//print the fetched phone models
	echo $output;
    




?>