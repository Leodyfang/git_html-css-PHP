<!DOCTYPE html>
<head><title>HTTP demo</title></head>
<body>
<?php

  if (strcmp($_SERVER['REQUEST_METHOD'], "POST") == 0) {
    echo "Name: ", $_POST['name'], "<br>";
    echo "Age: ", $_POST['age'], "<br>";
  }
  else 
  if (strcmp($_SERVER['REQUEST_METHOD'], "GET") == 0) {
    echo "Name: ", $_GET['name'], "<br>";
    echo "Age: ", $_GET['age'], "<br>";
  }

?>
<body></html>
