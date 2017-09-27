<?php
class array_class{
	
	public function print_array($array, $multiArray){
	echo '<i><b>Function Name:</b>[1] print_array</br> <b>Array Function:</b> array_values</i> <hr></br>';
	
	print_r(array_values($array));
	echo '</br></br> Or Alternatively, a more readable format would be to loop through each element and add some formatting </br></br>';
	
	foreach($array as $key => $value){
		echo "Index/Key: [$key]  Value: [$value]<br />\n";
	}
	
	echo '</br></br> The same function can be used for 2 Dimensional arrays ...But still isnt that readable </br></br>';
	print_r(array_values($multiArray));
	
	echo '</br></br>So we loop through each row and column and add some formatting </br></br>';
	
	for ($row = 0; $row < 6; $row++) {
		
		echo '</br>Row/Index  '. $row. '&nbsp';
		
		for ($col = 0; $col < 3; $col++) {
		echo " ".$multiArray[$row][$col]." ";
		
		}
	}
	echo '<hr>'; 
	}
		
	public function sort_array($array, $multiArray){
		echo '<i><b>Function Name:</b>[2] sort_array()</br> <b>Array Function:</b> sort()</i> <hr></br>';
		echo '<b>Info Before Sort:</b> </br>';
		foreach($array as $key => $value){
			echo "Index/Key: [$key]  Value: [$value]<br />\n";
		}
		
		echo '</br> <b>Info After Sort:</b> </br>';
		
		 sort($array, $sort_flags = SORT_STRING); 
		
		foreach($array as $key => $value){
			echo "Index/Key: [$key]  Value: [$value]<br />\n";
		}
		
		echo '</br><b>Info Before Sort:</b>';
		for ($row = 0; $row < 6; $row++) {			
			echo '</br>Row/Index  '. $row. '&nbsp';			
				for ($col = 0; $col < 3; $col++) {
					echo " ".$multiArray[$row][$col]." ";
						}
		}			
		echo '</br></br> <b>Info After Sort:</b>';
		sort($multiArray, $sort_flags = SORT_NUMERIC);
		
		for ($row = 0; $row < 6; $row++) {
		
			echo '</br>Row/Index  '. $row. '&nbsp';
		
			for ($col = 0; $col < 3; $col++) {
			echo " ".$multiArray[$row][$col]." ";
					}
		}
		echo'</br></br> Note: This function sorts by value and reorders the key/index pairs. <hr>';		
	}

	public function remove_duplicates($array, $multiArray){
		echo '<i><b>Function Name:</b>[3] remove_duplicates()</br> <b>Array Function:</b> array_unique()</i> <hr></br>';
		echo '<b>Info Before Sort:</b> </br>';
			
		sort($array, $sort_flags = SORT_NUMERIC); 
		
		foreach($array as $key => $value){
			echo "Index/Key: [$key]  Value: [$value]<br />\n";
		}	
		
		$result = array_unique($array);
			
		echo '</br> <b>Info After Sort:</b> </br>';
			
		foreach($result as $key => $value){
			echo "Index/Key: [$key]  Value: [$value]<br />\n";
		}
						
		echo '</br></br> <b>Info Before Sort:</b>';
		
		for ($row = 0; $row < 6; $row++) {
		
			echo '</br>Row/Index  '. $row. '&nbsp';
		
			for ($col = 0; $col < 3; $col++) {
			echo " ".$multiArray[$row][$col]." ";
		
			}
		}
		$result = array_unique($multiArray, SORT_REGULAR);
		
		echo '</br></br> <b>Info After Sort:</b>';
		
		$x=count($result);
					
		for ($row = 0; $row < $x; $row++) {
		
			echo '</br>Row/Index  '. $row. '&nbsp';
		
			for ($col = 0; $col < 3; $col++) {
				echo " ".$result[$row][$col]." ";
		
			}
		}			
	echo '<hr>';			
	}

	public function count_array($array, $multiArray) {
		echo '<i><b>Function Name:</b>[4] count_array()</br> <b>Array Function:</b> array_count_values()</i> <hr></br>';
				 
		foreach(array_count_values($array) as $key => $value){
			echo "Index/Key: [$key]  Value: [$value]<br />\n";
		}	
			echo '<hr>';
		/*
		
		$x=count($multiArray);
					
		for ($row = 0; $row < $x; $row++) {
		
			echo '</br>Row/Index  '. $row. '&nbsp';
		
			for ($col = 0; $col < 3; $col++) {
				echo 'Count:'.(array_count_values($multiArray[$x]));
		
			}
		}	*/
		
	}
	public function diff_array($schedule1, $schedule2){
		echo '<i><b>Function Name:</b>[5] diff_array()</br> <b>Array Function:</b> array_diff()</i> <hr></br>';
		echo 'Schedule1: ';
		foreach($schedule1 as $key => $value){
			echo "[$key] [$value] &nbsp";
		}
		echo '</br>Schedule2: ';
		foreach($schedule2 as $key => $value){
			echo "[$key] [$value] &nbsp";
		}
		$result = array_diff($schedule1, $schedule2);
		echo '<br><br>Array Differences:  ';
		foreach($result as $key => $value){
			echo "[$key] [$value] &nbsp";
		}
		echo '<hr>';
	}	
	
	public function merge_array($schedule1, $schedule2, $multiArray){
	echo '<i><b>Function Name:</b>[6] merge_array()</br> <b>Array Function:</b> merge_array()</i> <hr></br>';
	echo 'Schedule1: ';
	foreach($schedule1 as $key => $value){
		echo "[$key] [$value] &nbsp";
	}
	echo '</br>Schedule2: ';
	foreach($schedule2 as $key => $value){
		echo "[$key] [$value] &nbsp";
	}
	$result = array_merge($schedule1, $schedule2);
	echo '<br><br>Merged Array:  </br>';
	
	foreach($result as $key => $value){
		echo "Index/Key: [$key]  Value: [$value]<br />\n";
	}			
	echo ' <hr> ';		
	}
	
	public function search_array($schedule1){
	echo '<i><b>Function Name:</b>[7] search_array()</br> <b>Array Function:</b> array_search()</i> <hr></br>';
	echo 'Schedule1: ';
	foreach($schedule1 as $key => $value){
		echo "[$key] [$value] &nbsp";
	}
	echo '<BR>Search String: "CS602"<br>';
	echo 'First instance for "CS602" in $schedule1:  ['.array_search('CS602', $schedule1).']'; 
	echo '<hr>';
	} 
							
	public function multiply_array($array){
	echo '<i><b>Function Name:</b>[8] multiply_array()</br> <b>Array Function:</b> product_array()</i> <hr></br>';
	echo 'Array Values: <br><br>';
	foreach($array as $key => $value){
	echo "Index/Key: [$key]  Value: [$value]<br />\n";
	}
	echo '<br>Array Product is: '.array_product($array).'<br>';
	
	echo '<hr>';
	}
	
	public function replace_array($schedule1, $schedule2){
	echo '<i><b>Function Name:</b>[9] replace_array()</br> <b>Array Function:</b> array_replace()</i> <hr></br>';
	echo 'Schedule1: ';
	foreach($schedule1 as $key => $value){
		echo "[$key] [$value] &nbsp";
	}
	echo '</br>Schedule2: ';
	foreach($schedule2 as $key => $value){
		echo "[$key] [$value] &nbsp";
	}
	echo '<br><br>Replace the elements in $schedule1 with the elements in $schedule2 <br>';
	
	$result = array_replace($schedule1, $schedule2);
	
	echo 'Replaced Schedule1: ';
	
	foreach($result as $key => $value){
		echo "[$key] [$value] &nbsp";
	}
	echo '<hr>';	
	}

	public function shuffle_array($schedule1){
	echo '<i><b>Function Name:</b>[10] shuffle_array()</br> <b>Array Function:</b> shuffle()</i> <hr></br>';
	
	sort($schedule1, $sort_flags = SORT_STRING); 
	echo 'Sorted Array:  <br>';
	foreach($schedule1 as $key => $value){
		echo "Index/Key: [$key]  Value: [$value]<br />\n";
	}
	shuffle($schedule1);
	 echo '<br> Shuffled Array: </br>'; 	
	foreach($schedule1 as $key => $value){
		echo "Index/Key: [$key]  Value: [$value]<br />\n";
	}
	echo '<br><hr>';
	}
	
}





?>