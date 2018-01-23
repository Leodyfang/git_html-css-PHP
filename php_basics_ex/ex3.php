<?php
// Utility function for creating associative map out of three values
function createRec($name, $age, $gender) {
  return ['name' => $name, 'age' => $age, 'gender' => $gender
  ];
}

// Test data
$list = [
  createRec('John', 20, 'M'), createRec('Jane', 18, 'F'),
  createRec('Jack', 18, 'M'), createRec('Mary', 22, 'F'),
  createRec('Mark', 30, 'M'), createRec('Eric', 25, 'M'),
  createRec('April', 33, 'F'), createRec('Will', 20, 'M')
];

/* TODO: Similar to ex2.php but only display the first N items

  The following instructions describe how to derive the value of N.

  Step 1: Retrieve a parameter named "count" from the query string.
  Note: When testing your script, you can hardcode the parameter by
  appending "?count=..." to the URL of this file.

  Step 2:
  If the parameter "count" exists, and its value (after converted to an integer)
    is between 1 and "# of items in $list" (inclusive), set N to the value of count
  Otherwise set N to 5.


  // This is the format of the list (similar to the one in ex2.php)
  <ul>
  <li>Name: John, Age: 20 (Male)</li>
  <li>Name: Jane, Age: 18 (Female)</li>
  ...
  </ul>

*/
?>
