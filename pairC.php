<?php
//Pair C - Emmett and Dugan

//function findInText($text) {
  //What to look for
  $search = '$text';
  //Read from file
  $lines = file('file.txt');
  //Store true when text is found
  $pos = strpos($string, $lines);

  //Check if the line contains the string we're looking for, and print if it does
  if($pos === false) {
    echo "<p>" ."the string: " . $search . "was not foiund in the string: " . $lines . "</p>";
  } else {
    echo "the string: " . $search . "was found in the string" . $lines;
    echo " and exists at position " . $pos;
  }
}
?>

<?php
//Pair C - Emmett and Dugan

function findTextinFile($string, $text)
{
  $mystring=$string;

  $findme=$text;
  
  $pos=strpos($mystring, $findme);

  if($pos===false)
  {
    echo "<p>The string " . $findme . " was not found in the string " . $mystring . "</p>";
  } 
  else {
    echo " <p>The string " . $findme . " was found in the string" . $mystring . "</p>";
    echo " and exists at position " . $pos;
  }
}
?>
