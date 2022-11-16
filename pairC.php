<?php
//Pair C - Emmett and Dugan

//findTextInFile
function findTextInFile() {
  $a = "feline cat";
  if() {
      echo "<p>String $a not found</p>";
  } else {
      echo "<p>$a was found at position 4.</p>";
  }
}

//function findInText($search)
{
  // What to look for
  $search = 'foo';
  // Read from file
  $lines = file('file.txt');
  // Store true when text is found
  $pos = strpos($string, $lines);

    // Check if the line contains the string we're looking for, and print if it does
    if($pos === false)
    {
      echo "<p>" ."the string: " . $search . "was not foiund in the string: " . $lines . "</p>";
    }
    else 
    {
    echo "the string: " . $search . "was found in the string" . $lines;
    echo " and exists at position $pos";
    }
}

?>
