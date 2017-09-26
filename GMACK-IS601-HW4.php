<?php
/* Gabrielle Mack - Homework # 4 - IS 601 - Fall 2017 */

  $obj = new main();
  
  $array = array(9,4,3,6,7,2,8,9,1,2,1,);
  
  $multiArray = array(
  array("IS", 601, "Web Systems Development"),
  array("IS", 631, "Enterprise Database Management"),
  array("IS", 634, "Information Retrieval"),
  array("IS", 661, "User Experience Design"),
  array("IS", 601, "Web Systems Development"),
  array("IS", 631, "Enterprise Database Management")  
  );
  
  $obj->print_array($array, $multiArray);
  $obj->sort_array($array, $multiArray);
  $obj->remove_duplicates($array, $multiArray);

  
  class main {

    public function __construct() {
		echo '<h1>IS601 - Homework # 4 </br> Author: Gabrielle Mack</h1> <hr>';     
    }
	
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
					
		}
		
		
	 
} /*main brace */
  
	

?>