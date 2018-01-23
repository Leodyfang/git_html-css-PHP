<?php
// Utility function for creating associative map out of three values
function createRec($name, $age, $gender) {
  return ['name' => $name, 'age' => $age, 'gender' => $gender
  ];
}

$list = [
  createRec('John', 20, 'M'), createRec('Jane', 18, 'F'),
  createRec('Jack', 18, 'M'), createRec('Mary', 22, 'F'),
  createRec('Mark', 30, 'M'), createRec('Eric', 25, 'M'),
  createRec('April', 33, 'F'), createRec('Will', 20, 'M')
];

// TODO: Write a PHP script to output the data in $list in the following format
/*
  <ul>
  <li>Name: John, Age: 20 (Male)</li>
  <li>Name: Jane, Age: 18 (Female)</li>
  ...
  </ul>

*/
?>
