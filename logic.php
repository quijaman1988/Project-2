<?php


# Two arrays to hold words and symbols
$wordArray = [];
$symbolArray = [];
#This Variable will hold the final password
$passwordString = '';
#This is the separator for the password
$separator = '-';
#Initialize counter variable
$counter=0;

#These two variables you will be used in case the user select them in the form
$includeNumber = false;
$includeSymbol = false;

#Initialize this variable in case the page is loading for the first time
$numberOfWords=5;

#Open word.txt files
$myFile = fopen ("words.txt","r") or die ("Error: Unable to open words.txt file");

#Open symbols.txt files
$symbolFile = fopen ('symbols.txt',"r") or die ("Error: Unable to open symbols.txt file");

#Assign number of words that the user chose
$numberOfWords = (isset($_GET['words']) ? $_GET['words'] : 5);

#Check if the user selected the 'Add a Number' checkbox
if ( isset($_GET['number']) OR $numberOfWords == 5)
	$includeNumber = true;

#Check if the user selected the 'Add a Symbol' checkbox
if ( isset($_GET['symbol'])) {
	$includeSymbol = true;

	#Read file and insert it into array $symbolArray
	while (!feof($symbolFile)) {
		$symbolArray [$counter] = fgets ($symbolFile);
		//$symbolArray [$counter] = trim ($symbolArray [$counter]);
		$counter++;
	}

}

#Restart Counter
$counter=0;


#Read file and insert it into array $wordsArray
while (!feof($myFile)) {

		$wordArray [$counter] = fgets ($myFile);
		$counter++;

	}



#Error Checking
if ($numberOfWords < 1 OR $numberOfWords > 9) {

	$passwordString = 'Error: Number of words is not between 1 - 9';
}

elseif ($includeSymbol == true AND ($_GET['special'] > 5 OR $_GET['special'] < 1)) {

	$passwordString = 'Error: Number of special characters is not between 1 - 5';
}




else {

	$counter = 0;


#Create Password String
	for ($i=0; $i < ($numberOfWords*2-1); $i++){
		if (($i % 2 == 0))
			$passwordString = $passwordString.$wordArray [rand (0,Count($wordArray)-1)];
		else
			$passwordString = $passwordString.$separator;
	}

	if ($includeSymbol == true){
		for ($j=0; $j<$_GET['special'];$j++){
		$passwordString = $passwordString.$symbolArray [rand (0,Count($symbolArray)-1)];
		}
	}

	if ($includeNumber == true)
		$passwordString = $passwordString.rand (0,9);

#Remove unwanted characters
	$passwordString = preg_replace('/\s+/', '', $passwordString);

}



// Close Files
fclose ($symbolFile);
fclose ($myFile);
