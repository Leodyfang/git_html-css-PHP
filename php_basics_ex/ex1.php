<?php
// Test data
$p1 = ['name' => 'John', 'age' => 20, 'gender' => 'M'];
$p2 = ['name' => 'Jane', 'age' => 20, 'gender' => 'F'];
$person = $p1['age'];
echo $person,"\n"; //???
isAdult($person);
// TODO: Write a PHP script to perform the following task
// If the age of $person is above or equal to 18, output "Adult".
// Otherwise, output "Underage"
function isAdult ($age){//???
    var_dump($age);
    if ($age > 18)
        echo 'Adult';
    else
        echo 'Underage';
}
?>
