<link rel = stylesheet type = text/css href = style.css>
<?php
require_once("include.php");
//Pair C - Emmett and Dugan

// http://localhost/pairC.php

echo "<form method=POST>";

echo "The text:";
displayTextbox("text","test", 30);
echo "<p></p>";

echo "The letter or word you want to search for:";
displayTextbox("text","findText", 10);

displayButton("findButton","Find");

echo "</form>";
if(array_key_exists('findButton', $_POST)) 
{
  findTextInFile($_POST["test"], $_POST["findText"]);
  
}

function findTextInFile($findText, $text)
{
  //text area
  $myString= $findText;
  //text to search
  $findMe=$text;

  $pos=strpos($myString, $findMe) +1;

  if($pos===false) {
    echo "<p>String " . $findMe . " not found</p>";
  } else {
    echo "<p>" . $findMe . " was found at position " . $pos . ".</p>";
  }
}
?>
