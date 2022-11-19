<?php
//Robin and Ben's Assignment FIle
require_once("include.php"); //left here for testing and to suppress errors

//6 functions:
//drawMenu - Primary function for drawing menus.
//https://www.w3schools.com/howto/tryit.asp?fileName=tryhow_css_js_dropdown_hover
function drawMenu()
{
     drawFileDropDown();
     drawEditDropDown();
     drawFontDropDown();
}

function drawFileDropDown()
{
    echo "
    <div class=\"dropdown\">
    <button class=\"dropbtn\">File</button>
    <div class=\"dropdown-content\">";
        displayButton("f_New", "New");
        displayButton("f_Open", "Open");
        displayButton("f_Save", "Save");

   echo "
    </div>
    </div>
  ";
}

function drawEditDropDown()
{
    /**<div><input type=\"checkbox\">Case sensitive?</input> <input type=\"submit\" value=\"Search\"> </input></div>*/
    echo "
    <div class=\"dropdown\">
    <button class=\"dropbtn\">Edit</button>
    <div class=\"dropdown-content\">
      <label>Find: </label> <input type=\"text\"></input>
      <div><input type=\"checkbox\">Case sensitive?</input>";
    displayButton("f_Search", "Search");
    echo "</div>
    </div>
    </div>
    ";
}
function drawFontDropDown() //code for PairB font stuff
{

    // Placeholder button
    echo "
    <div class=\"dropdown\">
    <button class=\"dropbtn\">Font</button>
    <div class=\"dropdown-content\">";
        
        //interface code goes here.
        echo "<p>boo I'm a ghost</p>";
      
    echo "
    </div>
    </div>
  ";
}

function saveFile($fileText) //needs one parameter
{

   $fileName = "editor.dat";
   $file = fopen( $fileName, "w");
    if(!$handle)
    {
            echo "Error opening file.";
    }
    else
    {
            echo "File Opened.";

    }
    fwrite ($file,$fileText);
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
    if (file_exists($fileName))
    {
        $handle= fopen($fileName, "r");
        $text = fread($handle);
        fclose($handle);
        return($text);
    }
    else
    {
        echo "Editor.dat does not exist. Please save file first.";
    }
}

//fileName is editor.dat. Display the messages below

//-File Saved
//-Error Saving FIle
//-File opened
//-Error opening file

?>

