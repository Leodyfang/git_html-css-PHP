<!DOCTYPE html>
<head><title>HTTP demo 2</title></head>
<body>

<?php
  $mylist = $_GET['mylist'];
  if (is_array($mylist)) {
    foreach ($mylist as $value)
       echo $value . "<br>";
  }
?>

<body></html>
