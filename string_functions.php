<?php
# substr()
# Returns a portion of a string
// $output = substr('Hello', 1, 3); // Returns str starting from first param ending 2nd param
// echo $output;

# strlen()
# Returns the length of a str
// $output = strlen('Hello World'); // counts chars including space
// echo $output;

// #strpos()
// # Finds the position of the first occurence of a sub str

// $output = strpos('Hello World', 'o');
// echo $output;

#strrpos()
# Finds the position of the last occurence of a sub str

// $output = strrpos('Hello World', 'o');
// echo $output;

# trim()
# trims whitespace

// $text = 'Hello World          ';
// // var_dump($text);

// $trimmed = trim($text);
// var_dump($trimmed);


# strtoupper 
# Makes everything uppercase

// $output = strtoupper('Hello World');
// echo $output;

# strtolower()
# Makes everything lower case

// $output = strtolower('Hello World');
// echo $output;

# ucwords()
# Capitilize every word

// $output = ucwords('hello world');
// echo $output;


# str _replace()
# Replace all occurences of a search string with a replacement

// $text = 'Hello World';
// $output = str_replace('World', 'Everyone', $text);
// echo $output;


# is_string()
# Test if something is a str or not returns 1 or 0 for true or false

// $val = '22';
// $output = is_string($val);
// // echo $output;

// # is _string use case using foreach loop

// $values = [ true, false, null, 'abc', 33, '33', 0, '0'];

// foreach($values as $value) {
//     if(is_string($value)) {
//         echo "{$value} is a string<br>";

//     }
// }
/* 
 returned 
 abc is a string
33 is a string
0 is a string
*/

# gz_compress()
# Compress a string.

// $string = "loreem odsmfjsdokf sdofmjsdpkfnm sdpfmsdp'fmsdfm sdpf pdfj s'pdofm spo'fm sp'odfmspodfmsdp'ofm spfs'pdfmspkfmskdfmsdkfnmsdjfnsjfns efdf";

// $compressed = gzcompress($string);

// echo $compressed; // compressed to unreadable text

// # uncompress
// $original = gzuncompress($compressed);

// echo $original;