<?php
//Robin and Ben's Assignment FIle
require_once("include.php"); //left here for testing and to suppress errors

//6 functions:
//drawMenu - Primary function for drawing menus.
//https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_js_dropdown_hover
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
    <button class=\"dropbtn\" type=\"button\">File</button>
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
    <button class=\"dropbtn\" type=\"button\">Edit</button>
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
    <button class=\"dropbtn\" type=\"button\">Font</button>
    <div class=\"dropdown-content\">";
        
        //interface code goes here.
        echo "<p>boo I'm a ghost</p>";
    echo "
    </div>
    </div>
  ";
}

function saveFile($content) //needs one parameter
{
    $message = "";
    $filename = "editor.dat";
    $handle = fopen($filename, "w");
    $success = fwrite($handle, $content);
    if(!$success)
        $message = "Error Saving File.";
    else
        $message = "File Saved.";
    displayLabel($message);
    fclose($handle);
}

function openFile()
{
    $filename = "editor.dat";
    $text = "";
    if (file_exists($filename))
    {
        $handle = fopen($filename, "r");
        if(!$handle)
            displayLabel("Error opening file.");
        else    {
            if(filesize($filename)>0)   {
                $text = fread($handle, filesize($filename));
                displayLabel("File Opened.");
            }
            else
                displayLabel("editor.dat is empty");
            fclose($handle);
        }
    }
    else
    {
        echo "editor.dat does not exist. Please save file first.";
    }
    return($text);
}

//filename is editor.dat. Display the messages below

//-File Saved
//-Error Saving FIle
//-File opened
//-Error opening file

?>

