<?php

	// Variable starts with $,
	//string has to use quotation marks
	//line ends with semicolon
	$first_name = "Bertil";
	$last_name = "Tarbe";
	
	// show code to browser
	// for adding up numbers + sign
	// for adding up strings .
	echo $first_name." ".$last_name;
	
	// > greater than
	// < smaller than
	// >= greater than or equal
	// <= smaller than or equal
	// == equal
	// != not equal
	
	$age = 5;
	
	//if age is smaller than or equal to 6l, then you can sleep at lunchtime
	if($age <= 6){
		//it is true
		echo " yes you can sleep at lunchtime";
	}else{
		//it is false
		echo " no, you are at school";
	}

?>

<br>

<?php

	// loop
	
	for ($i=1; $i <= $age; $i=$i+1){
		
		//if condition is true
		echo $i;
		
	}

?>
<br>

<?php

	date_default_timezone_set('EET');
	echo date("Y/m/d")." ". date("h:i:sa");

?>