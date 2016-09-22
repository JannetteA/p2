
<?php

#Initializing variables
	$n = 0;
	$errormessage = " ";
	$totalwords = 0;
	$add_number = "no";
	$add_symbol = "no";
	$n = 3;


# Creating array of numbers and symbols
	$numbers = array(1,2,3,4,5,6,7,8,9);
	$symbol = array("%","=","!","$");


# Selecting one number and one symbol from the arrays above
	$num = array_rand(array_flip($numbers),1);
	$sym = array_rand(array_flip($symbol),1);


	# Selecting words from a text file
	$words = file("wordlist.txt");


# Validating that the form input fields have values
	if (isset($_GET["totalwords"])) {
		$n = $_GET["totalwords"];
   	};

	if (isset($_GET["add_number"])) {
       	$add_number = $_GET["add_number"];
   	};

	if (isset($_GET["add_symbol"])) {
		$add_symbol = $_GET["add_symbol"];
   	};


# Validating the correct number of words

	If ($n <3 or $n > 5) {

		$newpassword = " ";
		$errormessage = "Error: Enter a numeric value between 3 and 5 for the total words input field";
	}


else {

	#Creating array with the specific number of words
	$newarray = array_rand(array_flip($words), $n); 

	#Looping through array to create a new password
	foreach($newarray as $key => $value) { 
     
      	$valuenospaces = trim($value);

		   	If ($key < ($n-1)) {
		   		$newpassword = $valuenospaces."-"; 
			}
		   	elseif ($key == ($n-1)) {
		   		$newpassword = $valuenospaces;  	
	   		}
	        
        echo $newpassword;
    }		        

     		#Verifying input form values to add a number or a symbol
     		If ($add_number == "yes") {
		    	echo $num;
		    }
  			If ($add_symbol  == "yes") {
		    	echo $sym;
		    }
}
?>







