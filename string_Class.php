<?php
class string_class{
	
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