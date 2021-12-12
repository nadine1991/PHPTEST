<?php

/*
    Task:

    Write a function `foobar` which takes an integer `$n`
    and returns one of the following values:

    (1) When `$n` is a multiple of 5, `foobar($n)` should
        return the string "foo".

    (2) When `$n` is a multiple of 7, `foobar($n)` should
        return the string "bar".

    (3) When `$n` is a multiple of 5 and a multiple of 7,
        `foobar($n)` should return the string "foobar".

    (4) Otherwise, `foobar($n)` should return `$n`.
*/

function foobar($n) {
  if(($n % 7 == 0)&&($n % 5 == 0 ) ){
	   return $n."->foobar";
  }
  else if($n % 5 == 0 ){
	   return  $n."->foo";
  }
  else if($n % 7 == 0 ){
	   return $n."->bar";
  }
  else {
	   return $n."->".$n;
	  
  }
}
/*
echo foobar(5);
echo "<br>";
echo foobar(7);
echo "<br>";
echo foobar(14);
echo "<br>";
echo foobar(10);
echo "<br>";
echo foobar(12);*/



for ($x = 1; $x <= 100; $x++) {
  echo foobar($x);
  echo "<br>";
}
/* Solution */

// ...




/*
    For the expected output, see the file

        ./example_output/foobar.txt
*/
