<?php

/*
    Task:

    Write a function `sort_by` which takes an arbitrary
    array and a key and returns the array sorted by the
    given key.
*/




/* Solution */

// ...



/* Test data */

$records =
    [ array( "firstname" => "Matteo" , "lastname" => "Schmitt" , "email" => "matteo.schmitt@example.com" , "passphrase" => "eeWae3ph!" )
    , array( "firstname" => "Ella" , "lastname" => "Lehmann" , "email" => "ella.lehmann@example.com" , "passphrase" => "Zai0Eehu!" )
    , array( "firstname" => "Julian" , "lastname" => "Klein" , "email" => "julian.klein@example.com" , "passphrase" => "uuCh3Eel!" )
    , array( "firstname" => "Anton" , "lastname" => "Becker" , "email" => "anton.becker@example.com" , "passphrase" => "Hexio7cu!" )
    , array( "firstname" => "Elias" , "lastname" => "Müller" , "email" => "elias.mueller@example.com" , "passphrase" => "Eiwoa0Ou!" )
    , array( "firstname" => "Markus" , "lastname" => "Hoffmann" , "email" => "markus.hoffmann@example.com" , "passphrase" => "Koh6ef4o!" )
    , array( "firstname" => "Jonas" , "lastname" => "Schulz" , "email" => "jonas.schulz@example.com" , "passphrase" => "queib4Oy!" )
    , array( "firstname" => "Jakob" , "lastname" => "Braun" , "email" => "jakob.braun@example.com" , "passphrase" => "uT7aeNi2!" )
    , array( "firstname" => "Paul" , "lastname" => "Wagner" , "email" => "paul.wagner@example.com" , "passphrase" => "oP3AiRu4!" )
    , array( "firstname" => "Amelie" , "lastname" => "König" , "email" => "amelie.koenig@example.com" , "passphrase" => "loj8ooSh!" )
    , array( "firstname" => "Thomas" , "lastname" => "Schröder" , "email" => "thomas.schroeder@example.com" , "passphrase" => "WohPh6io!" )
    , array( "firstname" => "Philipp" , "lastname" => "Hartmann" , "email" => "philipp.hartmann@example.com" , "passphrase" => "et6aeCh6!" )
    , array( "firstname" => "Lina" , "lastname" => "Meier" , "email" => "lina.meier@example.com" , "passphrase" => "Mae2ooK5!" )
    , array( "firstname" => "Anna" , "lastname" => "Schmid" , "email" => "anna.schmid@example.com" , "passphrase" => "Aimepo9o!" )
    , array( "firstname" => "Liam" , "lastname" => "Fischer" , "email" => "liam.fischer@example.com" , "passphrase" => "oGh5ooph!" )
    , array( "firstname" => "Jan" , "lastname" => "Neumann" , "email" => "jan.neumann@example.com" , "passphrase" => "VaeL6Dah!" )
    , array( "firstname" => "Tim" , "lastname" => "Schwarz" , "email" => "tim.schwarz@example.com" , "passphrase" => "phoh5Rai!" )
    , array( "firstname" => "Alexander" , "lastname" => "Lange" , "email" => "alexander.lange@example.com" , "passphrase" => "ohFee9ma!" )
    , array( "firstname" => "Laura" , "lastname" => "Schmitz" , "email" => "laura.schmitz@example.com" , "passphrase" => "aJePh4ze!" )
    , array( "firstname" => "Leon" , "lastname" => "Zimmermann" , "email" => "leon.zimmermann@example.com" , "passphrase" => "son6aeTa!" )
    , array( "firstname" => "Lena" , "lastname" => "Köhler" , "email" => "lena.koehler@example.com" , "passphrase" => "Afahth2F!" )
    , array( "firstname" => "Leonie" , "lastname" => "Maier" , "email" => "leonie.maier@example.com" , "passphrase" => "Ieghie7o!" )
    , array( "firstname" => "Emilia" , "lastname" => "Werner" , "email" => "emilia.werner@example.com" , "passphrase" => "ciep8ieB!" )
    , array( "firstname" => "Emma" , "lastname" => "Mayer" , "email" => "emma.mayer@example.com" , "passphrase" => "Aich4aep!" )
    , array( "firstname" => "Marie" , "lastname" => "Kaiser" , "email" => "marie.kaiser@example.com" , "passphrase" => "xaht6Oom!" )
    , array( "firstname" => "Julia" , "lastname" => "Hermann" , "email" => "julia.hermann@example.com" , "passphrase" => "AhFan7Ee!" )
    , array( "firstname" => "Milo" , "lastname" => "Krüger" , "email" => "milo.krueger@example.com" , "passphrase" => "Taobee9u!" )
    , array( "firstname" => "Mia" , "lastname" => "Huber" , "email" => "mia.huber@example.com" , "passphrase" => "ua5Faih2!" )
    , array( "firstname" => "Levi" , "lastname" => "Koch" , "email" => "levi.koch@example.com" , "passphrase" => "coh9Koob!" )
    , array( "firstname" => "Ida" , "lastname" => "Schulze" , "email" => "ida.schulze@example.com" , "passphrase" => "RuBoox9e!" )
    , array( "firstname" => "Leo" , "lastname" => "Wolf" , "email" => "leo.wolf@example.com" , "passphrase" => "Ooghee3L!" )
    , array( "firstname" => "Lukas" , "lastname" => "Richter" , "email" => "lukas.richter@example.com" , "passphrase" => "xoh6Gigi!" )
    , array( "firstname" => "Felix" , "lastname" => "Meyer" , "email" => "felix.meyer@example.com" , "passphrase" => "Quie5ahm!" )
    , array( "firstname" => "Lea" , "lastname" => "Walter" , "email" => "lea.walter@example.com" , "passphrase" => "eech0OhH!" )
    , array( "firstname" => "Emil" , "lastname" => "Schmidt" , "email" => "emil.schmidt@example.com" , "passphrase" => "caiquah4V!" )
    , array( "firstname" => "Linus" , "lastname" => "Schäfer" , "email" => "linus.schaefer@example.com" , "passphrase" => "Aachu2ai!" )
    , array( "firstname" => "Sarah" , "lastname" => "Krause" , "email" => "sarah.krause@example.com" , "passphrase" => "shai2Yo9!" )
    , array( "firstname" => "Samuel" , "lastname" => "Bauer" , "email" => "samuel.bauer@example.com" , "passphrase" => "oof5ooCu!" )
    , array( "firstname" => "Daniel" , "lastname" => "Hofmann" , "email" => "daniel.hofmann@example.com" , "passphrase" => "oos6buYa!" )
    , array( "firstname" => "Theo" , "lastname" => "Weber" , "email" => "theo.weber@example.com" , "passphrase" => "ahy9Eeh4!" )
    ] ;




/////////////////1st approach


function compare_firstname($a, $b)
  {
	//echo strnatcmp($a['firstname'], $b['firstname']);
    return strnatcmp($a['firstname'], $b['firstname']);
  }
function compare_lastname($a, $b)
  {	
    return strnatcmp($a['lastname'], $b['lastname']);
  }
function compare_passphrase($a, $b)
  {	
    return strnatcmp($a['passphrase'], $b['passphrase']);
  }
  
  
function sort_by($records,$pa) {
	
	if ($pa == "firstname")
	{
	$start_time = microtime(true);
	usort($records, 'compare_firstname');
	$end_time = microtime(true);
  
	// Calculate script execution time
	$execution_time = ($end_time - $start_time);
		  
	echo "<br/>";
	echo " Execution time of script = ".$execution_time." sec";
	echo "<br/>";
	return $records;
	}
	else if($pa == "lastname"){
	usort($records, 'compare_lastname');
	return $records;
	}
	else if($pa == "passphrase"){
	usort($records, 'compare_passphrase');
	return $records;
	}
	}




////////////////////////////////
/////Time Complexity: O(n log n) Usort Algorithm is known faster than other algorithms such as "Bubble Method"
/////Auxiliary Space: O(1)



/////////////////2st approach

function sort_by2($records,$pa) {
	
	if ($pa == "firstname")	
	{
		$start_time = microtime(true);
		$first_names = array();
		foreach ($records as $key => $val)
		{
			
			$first_names[$key] = $val['firstname'];
			  
		}
	
		array_multisort($first_names, SORT_ASC, $records);
		$end_time = microtime(true);
		$execution_time = ($end_time - $start_time);
		  
		echo "<br/>";
		echo " Execution time of script = ".$execution_time." sec";
		echo "<br/>";
		return $records;
	}
	else if ($pa == "lastname")	
	{
		
		$last_names = array();
		foreach ($records as $key => $val)
		{			
			$last_names[$key] = $val['lastname'];			  
		}
	
		array_multisort($last_names, SORT_ASC, $records);
		
		return $records;
	}
	else if ($pa == "passphrase")	
	{
		
		$passphrase_names = array();
		foreach ($records as $key => $val)
		{			
			$passphrase_names[$key] = $val['passphrase'];			  
		}
	
		array_multisort($passphrase_names, SORT_ASC, $records);
		
		return $records;
	}

}



////Execution time of script = 1.0967254638672E-5 sec   ///0.00001
////Execution time of script = 4.1007995605469E-5 sec   ///0.00004
////Calculations shown that array multisort is 3 times faster that usorst algorithm with some additional memory





////////////3th approach 


function sort_by3($records,$pa) {
	if ($pa == "firstname")	
	{
	array_multisort(array_map(function($element) {
		//print_r($element["firstname"]);
		 return $element["firstname"];
	  }, $records), SORT_ASC, $records);

	return $records;
		}
		
	else if($pa == "lastname")
	{
	array_multisort(array_map(function($element) {
		//print_r($element["firstname"]);
		 return $element["lastname"];
	  }, $records), SORT_ASC, $records);

	return $records;
		
	}
	
	else if($pa == "passphrase"){
		
	array_multisort(array_map(function($element) {
	//print_r($element["firstname"]);
     return $element["passphrase"];
	  }, $records), SORT_ASC, $records);

	return $records;
				
	}
	
}


////////using multisort algorithm with no additional memory is the more simplest and efficient approach



echo "SORT BY FIRST NAME";
echo "<br>";
//print_r(sort_by($records,"firstname"));
//print_r(sort_by2($records,"firstname"));
print_r(sort_by3($records,"firstname"));

echo "<br>";
echo "<br>";
echo "SORT BY LAST NAME";
echo "<br>";
//print_r(sort_by($records,"lastname"));
//print_r(sort_by2($records,"lastname"));
print_r(sort_by3($records,"lastname"));
echo "<br>";
echo "<br>";

echo "SORT BY PASSPHRASE";
echo "<br>";
//print_r(sort_by($records,"passphrase"));
//print_r(sort_by2($records,"passphrase"));
print_r(sort_by3($records,"passphrase"));
echo "<br>";
/*
    For example output, see the files
   
        ./example_output/sort_firstname.txt
        ./example_output/sort_lastname.txt
        ./example_output/sort_passphrase.txt
*/
