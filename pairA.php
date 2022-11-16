<?php
//Robin and Ben's Assignment FIle
require_once("include.php"); //left here for testing and to suppress errors

//6 functions:
//drawMenu - Primary function for drawing menus.
//https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_js_dropdown_hover
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
function saveFile($fileText) //needs one parameter
{
   $text1 = $_POST['value1'];
   $filename = "editor.dat";
   $file = fopen( $filename, "w");
    if(!$handle)
        {
            echo "Error opening file.";
        }
    else
        {
            echo "File Opened.";

        }
   fwrite ($file,$text1);
        if(!$success)
        {
            echo "Error Saving File.";
        }
        else
        {
            echo "File Saved.";
        }
   fclose($file);
}
function openFile()
{
    if (file_exists($filename))
    {
        $handle= fopen($filename, "r");
        $text = fread($handle);
        fclose($handle);
        return($text);
    }
    else
    {
        echo "Editor.dat does not exist. Please save file first.";
    }
}

//Filename is editor.dat. Display the messages below

//-File Saved
//-Error Saving FIle
//-File opened
//-Error opening file


?>

