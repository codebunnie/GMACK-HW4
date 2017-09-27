
<?php
/* Gabrielle Mack - Homework # 4 - IS 601 - Fall 2017 */
require_once('string_Class.php');
require_once('array_class.php');




$obj = new main();
$obj->callArrays();
$obj->callStrings();


class main {

	public function __construct() {
		echo '<h1>IS601 - Homework # 4 </br> Author: Gabrielle Mack</h1> <hr>'; 
	}

	public function callStrings(){  
	
		$string_obj = new string_Class;
		$phoneArray = array('9174432245','8956587459', '5897456987', '9785698458');
		$string_obj->implode_array($phoneArray);
		$string_obj->replace_string();
		$string_obj->word_count();
		$string_obj->string_split();
		$string_obj->char_count();
		$string_obj->tag_strip();
		$string_obj->string_length();
		$string_obj->compare_strings();
		$string_obj->string_md5();
		$string_obj->string_sha1();		
	}


	public function callArrays(){
		$array_obj = new array_class;
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
		$phoneArray = array('9174432245','8956587459', '5897456987', '9785698458');


		$array_obj->print_array($array, $multiArray);
		$array_obj->sort_array($array, $multiArray);
		$array_obj->remove_duplicates($array, $multiArray);
		$array_obj->count_array($array, $multiArray);
		$array_obj->diff_array($schedule1, $schedule2);
		$array_obj->merge_array($schedule1, $schedule2, $multiArray);
		$array_obj->search_array($schedule1);
		$array_obj->multiply_array($array);
		$array_obj->replace_array($schedule1, $schedule2);
		$array_obj->shuffle_array($schedule1);
	}




}









?>