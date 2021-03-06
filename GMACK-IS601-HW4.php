<?php
/* Gabrielle Mack - Homework # 4 - IS 601 - Fall 2017 */

  $obj = new main();
  /*
  =================================================================================
  =================================================================================
  ====================================ARRAY========================================
  =================================================================================
  =================================================================================
  */
  $array = array(9,4,3,6,7,2,8,9,1,2,1,);  
  $multiArray = array(
  array("IS", 601, "Web Systems Development"),
  array("IS", 631, "Enterprise Database Management"),
  array("IS", 634, "Information Retrieval"),
  array("IS", 661, "User Experience Design"),
  array("IS", 601, "Web Systems Development"),
  array("IS", 631, "Enterprise Database Management")  
  );
  
  $schedule1= array("IS601", "IS631","CS602", "MGMT665", "CS631", "CS601");
  $schedule2= array("IS601", "IS631","CS630", "MGMT665", "CS631", "CS608");
  
  $obj->print_array($array, $multiArray);
  $obj->sort_array($array, $multiArray);
  $obj->remove_duplicates($array, $multiArray);
  $obj->count_array($array, $multiArray);
  $obj->diff_array($schedule1, $schedule2);
  $obj->merge_array($schedule1, $schedule2, $multiArray);
  $obj->search_array($schedule1);
  $obj->multiply_array($array);
  $obj->replace_array($schedule1, $schedule2);
  $obj->shuffle_array($schedule1);

  
   /*
  =================================================================================
  =================================================================================
  ====================================ARRAY========================================
  =================================================================================
  =================================================================================
  */
  $phoneArray = array('9174432245','8956587459', '5897456987', '9785698458');
  $obj->implode_array($phoneArray);
  $obj->replace_string();
  $obj->word_count();
  $obj->string_split();
  $obj->char_count();
  $obj->tag_strip();
  $obj->string_length();
  $obj->compare_strings();
  $obj->string_md5();
  $obj->string_sha1();
  
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
	
	 /*
  =================================================================================
  =================================================================================
  ==================================END ARRAY======================================
  =================================================================================
  =================================================================================
  */		
		
	
/*methinks lets try and focus on injection prevention */



	public function implode_array($phoneArray)
	{
	echo '<i><b>Function Name:</b>[11] implode_array()</br> <b>String Function:</b> implode()</i> <hr></br>';

	echo 'Current Contents of Phone Array: <br>';
	foreach($phoneArray as $key => $value){
					echo "[$key] [$value] <br>";
				}
				
	echo '<br>Imploded Contents: <br>';
	$results = implode("<br>   ",$phoneArray);
	print_r($results);
	echo '<br><br><hr>';

	}

	/*
	public function substring($phoneArray)
	{
		echo '<i><b>Function Name:</b>[12] substring()</br> <b>String Function:</b> substr()</i> <hr></br>';
		
		foreach($phoneArray as $key => $value){
					echo "[$key] [$value] <br>";
				}		
		
		echo ' <br><br>Print Implode <br>';
		$results = implode($phoneArray);
		$results = chunk_split($results, $chunklen = 10, $end = "--");
		
		
		print_r($results);		
		
		echo ' <br><br>Print SubStr <br>';			
		echo '('.substr($results, 0, 3).') '.substr($results, 3, 3).'-'.substr($results,6);
		
		
	}
*/
	public function replace_string()
	{
		echo '<i><b>Function Name:</b>[12] replace_string()</br> <b>String Function:</b> str_replace()</i> <hr></br>';
		$phrase = "And the very next day, everything broke!";
		echo 'Original Phrase: '.$phrase.'<br>';
		$results =str_replace("day", "week", $phrase);
		echo 'Replaced Phrase: '.$results;
		echo '<br><br><hr>';
	}
	
		public function word_count()
	{
		echo '<i><b>Function Name:</b>[13] word_count()</br> <b>String Function:</b> str_word_count()</i> <hr></br>';
		
		$phrase ="PHP is a server-side scripting language designed primarily for web development but also used as a general-purpose programming language. Originally created by Rasmus Lerdorf in 1994,[4] the PHP reference implementation is now produced by The PHP Development Team.[5] PHP originally stood for Personal Home Page,[4] but it now stands for the recursive acronym PHP: Hypertext Preprocessor.[6]<br><br>";
		echo 'Phrase is the following: <br><br>'.$phrase;
		$word_count=str_word_count($phrase);
		echo 'Total Word Count for Phrase is: '.$word_count;
		echo '<br><br><hr>';
		
	}
		
		public function string_split()
	{
		echo '<i><b>Function Name:</b>[14] string_split()</br> <b>String Function:</b> str_split()</i> <hr></br>';
		
		$phrase ="9174432245895658745958974569879785698458";
		echo "Orginal Phrase: ".$phrase.'<br><br>';
		
		$phraseArray = str_split($phrase, 10);
		echo 'New Array: <br>';
		foreach($phraseArray as $key => $value){
					echo "[$key] [$value] <br>";
				}
		
		echo '<br><br><hr>';	
		
	}
			
		
		public function char_count()
	{
		echo '<i><b>Function Name:</b>[15] char_count()</br> <b>String Function:</b> count_chars()</i> <hr></br>';
		
		$phrase ="PHP is a server-side scripting language designed primarily for web development but also used as a general-purpose programming language. Originally created by Rasmus Lerdorf in 1994,[4] the PHP reference implementation is now produced by The PHP Development Team.[5] PHP originally stood for Personal Home Page,[4] but it now stands for the recursive acronym PHP: Hypertext Preprocessor.[6]<br><br>";
		echo 'Phrase is the following: <br><br>'.$phrase;
		
		echo 'Total Character Count for Phrase is: <br><br>';
		foreach (count_chars($phrase, 1) as $i => $val) {
		echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n<br><br>";
		}
		echo '<hr>';
	}
	
	public function tag_strip()
	{
		echo '<i><b>Function Name:</b>[16] tag_strip()</br> <b>String Function:</b> strip_tags()</i> <hr></br>';
		$phrase='"\n
		<code>
		<!DOCTYPE html>
		
		<html>
		<body>
		echo <h2>PHP is Fun!</h2>;
		echo Hello world!<br>
		echo Im about to learn PHP!<br>;
	
		</body>
		</html></code>"' ;
		
		echo "Code To Be Stripped: <br><br>";
		
		echo htmlentities($phrase);
		
		echo "<br><br>Stripped Code:  </br>";
		
		$result=strip_tags($phrase);
		
		echo $phrase;
		
		echo "<br><br><hr>";
	
	}
	
	public function string_length()
	{
		echo '<i><b>Function Name:</b>[17] string_length()</br> <b>String Function:</b> strlen()</i> <hr></br>';
		$phrase ="PHP is a server-side scripting language designed primarily for web development but also used as a general-purpose programming language. Originally created by Rasmus Lerdorf in 1994,[4] the PHP reference implementation is now produced by The PHP Development Team.[5] PHP originally stood for Personal Home Page,[4] but it now stands for the recursive acronym PHP: Hypertext Preprocessor.[6]<br><br>";
		
		echo "Current Phrase: <br><br>";
		echo $phrase;
		$result = strlen($phrase);
		echo "String Length: ".$result;
		echo "<br><br><hr>";
	
	}
	 
	public function compare_strings()
	{
		echo '<i><b>Function Name:</b>[18] compare_strings()</br> <b>String Function:</b> strcmp()</i> <hr></br>'; 
		
		$str1 = 'Pretty Sure This is how it should work....ooooor not';
		$str2 = 'Pretty Sure This is how it should work....ooooor maybe not';
		echo "String1 : ".$str1."<br><br>";
		echo "String2 : ".$str2."<br><br>";
		
		echo "Boolean if strings are equal: ". strcmp($str1,$str2);
		echo "<br><br><hr>";
	}
	
	public function string_md5()
	{
		echo '<i><b>Function Name:</b>[19] string_md5()</br> <b>String Function:</b> md5()</i> <hr></br>'; 
		
		$str="iCanHazCheezBurger";
		echo "String to Hash: " .$str."<br><br>";
		$result=md5($str);
		echo "Hashed String: ".$result."<br><br>";
		
		echo "<br><br><hr>";	
	}
	
	public function string_sha1()
	{
		echo '<i><b>Function Name:</b>[20] string_sha1()</br> <b>String Function:</b> sha1()</i> <hr></br>'; 
		
		$str="iCanHazCheezBurger";
		echo "String to Hash: " .$str."<br><br>";
		$result=sha1($str);
		echo "Hashed String: ".$result."<br><br>";
		
		echo "<br><br><hr>";	
	}
		
	
		
} /*main brace */
  
	

?>