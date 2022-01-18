<?php

$people[] = "Steve";
$people[] = "Jarrod";
$people[] = "Paul";
$people[] = "Andrew";
$people[] = "Kayla";
$people[] = "Jolie";
$people[] = "Rich";
$people[] = "David";
$people[] = "Caleb";
$people[] = "Jim";
$people[] = "Mark";
$people[] = "Pat";
$people[] = "Evan";
$people[] = "Ellie";
$people[] = "Aria";
$people[] = "John";
$people[] = "Jeff";
$people[] = "Mike";
$people[] = "Jerry";
$people[] = "Faye";
$people[] = "Linda";
$people[] = "Dewayne";
$people[] = "Hanna";
$people[] = "Jonathan";

// Get query str

$q = $_REQUEST['q'];

$suggestion = '';

// Get suggestions
if ($q !== "") {
  $q = strtolower($q);
  $len = strlen($q);
  foreach ($people as $person) {
    if (stristr($q, substr($person, 0, $len))) {
      if ($suggestion === "") {
        $suggestion = $person;
      } else {
        $suggestion .= ", $person";
      }
    }
  }
}

echo $suggestion === "" ? "No suggestion" : $suggestion;
