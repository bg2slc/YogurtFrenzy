<link rel = stylesheet type = text/css href = style.css>
<?php
require_once("include.php");
//Pair C - Emmett and Dugan

//http://localhost/pairC.php

if(array_key_exists('f_Search', $_POST))
{
    findTextInFile($_POST['notepad_content'], $_POST['findText']);
}

function findTextInFile($textValue, $findValue)
{


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
    $pos = $pos +1;
    echo " <p>The string " . $findValue . " was found in the string " . $textValue . "</p>";
    echo "<p> and exists at position " . $pos  . "</p>";
  }
}
?>

