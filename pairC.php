<?php
//Pair C - Emmett and Dugan

function findTextinFile($string, $text)
{
  //text area
  $mystring= $string;
  //text to search
  $findme=$text;
  
  $pos=strpos($mystring, $findme) +1;

  if($pos===false)
  {
    echo "<p>The string " . $findme . " was not found in the string" . $mystring . "</p>";
  } 
  else {
    echo " <p>The string " . $findme . " was found in the string" . $mystring . "</p>";
    echo " and exists at position " . $pos;
  }
}

//main

findTextinFile("abc","a");
?>
