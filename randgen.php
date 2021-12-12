<?php

/*
    Task:

    Write a function `randgen` which takes a string
    `$chars` and an integer `$len` and returns a string
    of randomly selected characters from `$chars` with
    the length `$len`.

    use the function `random_int` to select characters from
    `$chars` by index.

    For example, `randgen( "abc" , 5 )` could result in
    the following random strings:

        "ccbba"
        "ccaab"
        "baaaa"
        "bccaa"
        "bacbb"
        "bcaba"
        "bbbbc"
        "bbcca"
*/

function randgen($chars,$len) {
	
	$stringLength = strlen($chars);
	$new_chars = "";
	
	for ($x = 0; $x <$len; $x++) {
		$randomIndex = random_int(0, $stringLength - 1);
		$new_chars.=$chars[$randomIndex];		
	}
	return $new_chars;
}

for ($i = 0; $i <8; $i++) {
	echo randgen( "abc" , 5 );
	echo "<br>";
}

/* Solution */

// ...
