<?php
//Pair C - Emmett and Dugan

echo "<form method=POST>";

echo "The text:";
DisplayTextbox("text","test", 30);
echo "<p></p>";

echo "The letter or word you want to search for:";
DisplayTextbox("text","findText", 10);

DisplayButton("findButton","Find");

echo "</form>";
if(array_key_exists('findButton', $_POST)) 
{
  findTextInFile($_POST["test"], $_POST["findText"]);
  
}

function findTextInFile($findtext, $text)
{
  //text area
  $mystring= $findtext;
  //text to search
  $findme=$text;

  $pos=strpos($mystring, $findme) +1;

  if($pos===false) {
    echo "<p>String " . $findMe . " not found</p>";
  } else {
    echo "<p>" . $findMe . " was found at position " . $pos . ".</p>";
  }
}
?>
