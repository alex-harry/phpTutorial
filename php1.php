<?php
	
	$var = 1.10;
	
	echo "Hello Steemit"; // print the string
	echo ("Hello Utopian"); // print the string
	print(10); // print the number 10
	print $var; // print the value of the variable $var
	
	
	echo "Hello Steemit ". 10 . " Hello Utopian ", $var ; // print the string 
	
	
	$wlcm1 = "Hello Steemit";  // define the variable $wlcm1
	$wlcm2 = "Hello Utopian"; // define the variable $wlcm2
	$number = 10; // define the variable $number
	$var = 10.1; // define the variable $var
	$all = "%s and %s there is %d persons and %f dollars"; // use the special characters to form the string
	printf($all,$wlcm1,$wlcm2,$number,$var) ; // using print with format to form the string
	
	
	$number = 100;
	$string = "Hello";
	$display = "Hello the intger number is %d and the floating number is %f, the ASCII code is %c, the binary code is %b, the hexadecimal number is %x"; // example with 5 special characters to see the result of the number with different formats
	printf($display,$string,$number, $number, $number, $number, $number);
	
	
	printf('%-2s Steemit', 'Hello') ; // will display Hello  Steemit (2 spaces)
	printf('%02d', 5) ; // will display 05 because the number of digits is 2 
	
	
	printf('%05.2f', 5.0) ; // will display 05.00 
	
	
	$string = "Hello Steemit"; // define string variable
	echo $string[6]; //will display "S"
	
	
	echo "The character K in ASCII Representation is " . ord('K') ."<br>"; // print the sentence concatenated with the result of the function ' ord '
	echo "The value of the 75 ASCII code is " . chr(75); // print the sentence concatenated with the result of the function ' chr'
	
	
	for ($c=65 ; $c <= 77 ; $c++){
		echo chr($c); // print the character after the convert 
	}
	
	
	$string  = "Hello Steemit"; // string variable
	$array = str_word_count($string,1); // the function accepts the string and the second value which will return the array
	echo "<pre>"; // using the pre code to orginize the display
	print_r($array); // print the array
	echo "</pre>";
	
	
	echo strpos($string,"S"); // will return the position of this character
	
	
	$String = "Hello Steemit"; // define the string variable
	$character = "i" ; // define the character ' i ' 
	if( strcspn($String, $character) != strlen($String) ) { // test if the result of strcspn equals to the length of the string
		echo "The character 'i' is found "; // print the character 'i' is found 
	} else {
		echo "The character 'i' is not found" ;// print the character 'i' is not found  
	}
	
?>