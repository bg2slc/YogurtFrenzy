<?php
//Pair C - Emmett and Dugan

function findTextInFile($findtext, $text)
{
  //text area
  $mystring= $findtext;
  //text to search
  $findme=$text;

  $pos=strpos($mystring, $findme) +1;

  if($pos===false)
  {
    echo "<p>The string " . $findme . " was not found in the string " . $mystring . "</p>";
  } 
  else {
    echo " <p>The string " . $findme . " was found in the string " . $mystring . "</p>";
    echo "<p> and exists at position " . $pos . "</p>";
  }
}
