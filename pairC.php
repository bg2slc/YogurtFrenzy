<link rel = stylesheet type = text/css href = style.css>
<?php
require_once("include.php");
//Pair C - Emmett and Dugan

//http://localhost/pairC.php

echo "<form method = POST>";

echo "The text: ";
displayTextbox("text","test", 30);
echo "<p></p>";

echo "The letter or word you want to search for: ";
displayTextbox("text", "findText", 10);

displayButton("findButton", "Find");

echo "</form>";

if(array_key_exists('f_Search', $_POST))
{
    findTextInFile($_POST['notepad_content'], $_POST['findText']);
}

function findTextInFile($textValue, $findValue)
{
    if ("f_checkBox" == TRUE)
        $pos = strpos($textValue, $findValue);
    else
        $pos = stripos($textValue, $findValue);

    if($pos === false) {
        echo "<p>String " . $findValue . " not found in the string " . $textValue . ".</p>";
    } else {
        echo " <p>String " . $findValue . " was found in the string " . $textValue . "</p>";
        echo "<p> and exists at position " . $pos + 1 . ".</p>";
    }
}
?>

////////////
if(array_key_exists('f_Search', $_POST)) 
{
  findTextInFile($_POST['notepad_content'], $_POST['findText']);
}

function findTextInFile($textValue, $findValue)
{
    if ("f_checkBox" === TRUE)
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
