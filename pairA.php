<?php
//Robin and Ben's Assignment FIle
require_once("include.php"); //left here for testing and to suppress errors

//6 functions:
//drawMenu - Primary function for drawing menus.
function drawMenu($menuName, $dataList)
{
    echo "<select name=\"" . $menuName . "\">\n";
    for($index = 0; $index < sizeof($dataList); $index++)
    {
        echo "\t<option value=\"" . $dataList[$index] . "\"> " 
            . $dataList[$index] . "</option>\n";
    }
    echo "</select>";
}
function drawFileDropDown()
{
}

function drawEditDropDown()
{

}
/*function drawFontDropDown() //DO NOT CODE, Pair B only
{
}*/
function saveFile() //needs one parameter
{
}
function openFile()
{
}

//Filename is editor.dat. Display the messages below

//-File Saved
//-Error Saving FIle
//-File opened
//-Error opening file


?>

