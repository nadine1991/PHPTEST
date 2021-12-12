<?php

/*

    Task:

    Implement the missing function `usersFromCSV`.

    It takes a string containing CSV data and produces a
    PHP array of the following form:

        [
          [ "username"  => "elias"
          , "firstname" => "Elias"
          , "lastname"  => "Müller"
          , "email"     => "elias.mueller@example.com"
          , "password"  => "Eiwoa0Ou!"
          ]
        ,
          [ "username"  => "emil"
          , "firstname" => "Emil"
          , "lastname"  => "Schmidt"
          , "email"     => "emil.schmidt@example.com"
          , "password"  => "aiquah4V!"
          ]
        ,
          [ "username"  => "liam"
          , "firstname" => "Liam"
          , "lastname"  => "Fischer"
          , "email"     => "liam.fischer@example.com"
          , "password"  => "oGh5ooph!"
          ]
        ,
          // ... and so on ...
        ]
*/




$array_base = file('testusers.csv');
//usersFromCSV2($array_base);
//print_r(usersFromCSV($array_base));
print_r(usersFromCSV2($array_base));







/////////////////1st approach


function usersFromCSV($arr){
	
$result = array();
$header = array_shift($arr);
$header_arra = explode(";",$header);
//print_r($header_arra);

foreach($arr as $row){
	$data_arra = explode(";",$row);
	//print_r($data_arra);
	
	$new_arra = array();
	$new_arra[$header_arra[0]] = $data_arra[0];
	$new_arra[$header_arra[1]] = $data_arra[1];
	$new_arra[$header_arra[2]] = $data_arra[2];
	$new_arra[$header_arra[3]] = $data_arra[3];
	$new_arra[$header_arra[4]] = $data_arra[4];
	array_push($result,$new_arra);
}

return $result;
}

////////////////////////////////
/////Time Complexity: O(n)
/////Auxiliary Space: O(n)



////////////////////////////2st Approach



function usersFromCSV2($arr){
	

$header = array_shift($arr);
$header_arra = explode(";",$header);

	array_walk($arr, function(&$value, $key) use($header_arra) {
		
		$value= explode(";",$value);	
		$value=array_combine($header_arra,$value);
		
});
	
return $arr;
}



////////////////////////////////
/////Time Complexity: O(n)
/////Auxiliary Space: O(1)



/* Solution */

// ...




/*
    For the expected output, see the file

        ./example_output/moodle-testusers.txt
*/
?>