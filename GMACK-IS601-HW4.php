<?php
/* Gabrielle Mack - Homework # 4 - IS 601 - Fall 2017 */
/*
class main{
	public function _construct() {
		echo 'IS601 - Homework # 4 </br> Author: Gabrielle Mack <hr></br>';
		}
}

*/
  $obj = new main();
  $array = array(9,4,3,6,7,2,8,9,1,2,1,);
  $multiArray = array(
  array("IS", 601, "Web Systems Development"),
  array("IS", 631, "Enterprise Database Management"),
  array("IS", 634, "Information Retrieval"),
  array("IS", 661, "User Experience Design")  
  );
  
  $obj->printarray($array, $multiArray);



  class main {

    public function __construct() {

      echo 'hello i\'m an Object </br>';

    }
	
	public function printarray($array, $multiArray){
	echo 'Function Name: print_array</br> Array Function: array_values <hr></br>';
	
	print_r(array_values($array));
	echo '</br></br> Or Alternatively, a more readable format would be to loop through each element and add some formatting </br></br>';
	
	foreach($array as $key => $value){
		echo "Index/Key: [$key]  Value: [$value]<br />\n";
	}
	
	echo '</br></br> The same function can be used for 2 Dimensional arrays ...But still isnt that readable </br></br>';
	print_r(array_values($multiArray));
	
	echo 'So we loop through each row and column and add some formatting </br></br>';
	
	for ($row = 0; $row < 4; $row++) {
		
		echo '</br>Row/Index  '. $row. '&nbsp';
		for ($col = 0; $col < 3; $col++) {
		echo " ".$multiArray[$row][$col]." ";
		
  }
  echo "</ul>";
}
	echo '<hr>'; 
	}
	 
	
	


	}
  
	

?>