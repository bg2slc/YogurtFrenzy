<?php
//Pair C - Emmett and Dugan

//findTextInFile.
function findTextInFile($text) {
  //What to look for.
  $search = '$text';
  //Read from file.
  $lines = file('file.txt');
  //Store true when text is found.
  $pos = strpos($string, $lines);

  //Check if the line contains the string we're looking for, and print if it does.
  if($pos === false) {
    echo "<p>" ."the string: " . $search . "was not foiund in the string: " . $lines . "</p>";
  } else {
    echo "the string: " . $search . "was found in the string" . $lines;
    echo " and exists at position " . $pos + 1;
  }
}
?>
