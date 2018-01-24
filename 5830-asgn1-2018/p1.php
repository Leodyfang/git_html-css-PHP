<?php
  $languages = array( "C", "C#", "C++", "Java", "JavaScript",
                      "Visual Basic", "Pascal", "Phyton", "PHP",
                      "Perl", "Objective C" );
?>
<!DOCTYPE html>
<html>
<head>
<title>Problem #1</title>

<style type="text/css">

ul {
	list-style-type: none;
	margin: 0px;
	padding: 0px;
}

ul li { outline: solid gray 1px; }
ul li.odd {	background-color: #aaaaff; }
ul li.even { background-color: #ccccff; }

</style>

</head>
<body>

<?php
/* TODO: Write a segment of code to generate an unordered list
     similar to the one in "p1_sample_output.htm".
     You should use a loop to generate the list
	   items using the data in $languages[].
   */
echo "<ul>";
for($i= 0; $i < count($languages); ++$i){
  if(($i+1)/2 !== 0){
    echo "<li class=\"odd\">",$languages[$i] ,"</li>";
  }
  else{
    echo "<li class=\"even\">",$languages[$i] ,"</li>";
  }
}
echo"</ul>";
?>

</body>
</html>
