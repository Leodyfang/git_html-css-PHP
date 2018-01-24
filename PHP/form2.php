<?php
  $mylist = $_GET['mylist'];
  if (is_array($mylist)) {
    foreach ($mylist as $value)
       echo $value . "<br>";
  }
?>
