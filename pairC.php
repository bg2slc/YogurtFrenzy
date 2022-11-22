<?php
//Pair C - Emmett and Dugan

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
