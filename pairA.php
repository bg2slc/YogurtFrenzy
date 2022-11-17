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
    div class=\"dropdown\">
    <button class=\"dropbtn\">File</button>
    <div class=\"dropdown-content\">"
        displayButton("f_New", "New");
        displayButton("f_Open", "Open");
        displayButton("f_Save", "Save");

      <input type=\"submit\" value=\"New\"> </input>
      <input type=\"submit\" value=\"Open\"> </input>
      <input type=\"submit\" value=\"Save\"> </input>
      
    </div>
  </div>
  "
}

function drawEditDropDown()
{
    echo "
    <div class=\"dropdown\">
    <button class=\"dropbtn\">Edit</button>
    <div class=\"dropdown-content\">
      <label>Find: </label> <input type=\"text\"></input>
      <div><input type=\"checkbox\">Case sensitive?</input> <input type="submit" value="Search"> </input></div>
    </div>
  </div>
    "
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

