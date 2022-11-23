<link rel = stylesheet type = text/css href = style.css>
<?php
require_once("include.php");
//Pair C - Emmett and Dugan

//http://localhost/pairC.php

//checks to see if the key f_search(the button) exists so that the code will only run when the button is clicked.
if(array_key_exists('f_Search', $_POST))
{
    findTextInFile($_POST['notepad_content'], $_POST['findText']);
}
//the function to find text in a file or a line of text.
function findTextInFile($textValue, $findValue)
{
//took awhile because tried to do it without isset and it kept only doing the else. 
    if(isset($_POST['f_checkBox']))
    {
        $pos=strpos($textValue, $findValue);
    }
    else
        $pos=stripos($textValue, $findValue);



  if($pos===false)
  {
    echo "<p>The string " . $findValue . " was not found in the string " . $textValue . "</p>";
  } 
  else {
  // had to add +1 because the array starts at position 0
    $pos = $pos +1;
    echo " <p>The string " . $findValue . " was found in the string " . $textValue . "</p>";
    echo "<p> and exists at position " . $pos  . "</p>";
  }
}
?>

