<!-- // http://localhost/main.php -->
<?php

//+++++++++++++++++++++ SETUP
require_once("include.php");
require_once("fonts.js");

//ERROR REPORTING - Set to true for error reporting
//TODO: Disable this when ready for submitting
if(true)    {
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
}

//+++++++++++++++++++++ FUNCTIONS
/* Write header tags and drawMenu() */
function headerAndMenu($title="YogurtFrenzy")
{
    echo "<!doctype html>
<html>
<head>
	<meta charset = \"UTF-8\">
	<title>$title</title>\n
	<link rel =\"stylesheet\" type = \"text/css\" href=\"/style/style.css\"/>
</head>
<body>\n<form action=? method=\"post\">
    <div class=\"header\">
        <div><h2>$title Editor</h2>
            <em>Written by Ian Haworth, Brad Coyle, Emmett Scholtes,
Dugan Lang, Robin Hilliker, and Benjamin Garrett</em>
            <div>";
            drawMenu();
echo "
            </div>
        </div>
        <div><img src=\"images/yogurtcat.jpg\" height=\"125\" 
    width=\"200\"></div>
    </div>
    <div class=\"body\">";
}

/* Write textarea tag, for user input and to display text from file */
function displayTextArea($fileText="")
{
    echo "
<!-- main text area for notepad -->
    <div class=\"bordered\">
    <textarea id=\"notepad_content\" name=\"notepad_content\" rows=\"10\" 
        cols=\"80\" autofocus>$fileText</textarea>
    </div>
    ";
}

/* Attempt to write content to editor.dat, display relevant message, and reload
 * content into textarea */
function saveNotepad($fileText)
{
    saveFile($fileText);
    displayTextArea($fileText);
}

/* Attempt to load content from editor.dat, display relevant message, and load
 * content into textarea */
function openNotepad()
{
    $fileText = openFile();
    displayTextArea($fileText);
}

/* display generic message and empty textarea */
function blankNotepad()
{
    displayLabel("Welcome to the YogurtFrenzy Editor!");
    displayTextArea("");
}

/* drawMenu() is called by headerAndMenu(), draws the three menu buttons */
function drawMenu()
{
     drawFileDropDown();
     drawEditDropDown();
     drawFontDropDown();
}

/* drawFileDropDown() is fully functional. Each option is a post action that
 * reloads the page with relevant message and data loaded into textarea. */
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

/* Needs some work, waiting for functionality for pairC's findTextInFile. */
function drawEditDropDown()
{
    echo "
    <div class=\"dropdown\">
    <button class=\"dropbtn\" type=\"button\">Edit</button>
    <div class=\"dropdown-content\">
      <label>Find: </label> <input type=\"text\"></input>
      <div><input type=\"checkbox\" name =\"f_checkBox\">Case sensitive?</input>";
    displayButton("f_Search", "Search");
    echo "</div>
    </div>
    </div>
    ";
}

function drawFontDropDown()
{
    $mysqlObj = createConnectionObject();
    echo "
    <div class=\"dropdown\">
    <button class=\"dropbtn\" type=\"button\">Font</button>
    <div class=\"dropdown-content\">";
    // Font Choice
    echo "<form action=\"\" method=\"post\">";
    displayLabel("Font Style");
    echo "<select name=\"select\" id = \"font\" onchange=\"myFunction()\">";
    $SelectFont = "Select fontnames.fontName from fontnames";
	$stmt = $mysqlObj->prepare($SelectFont); 
    $stmt->bind_result($FontField);
    $stmt->execute();
    while($stmt->fetch())

    echo "<option value=\"$FontField\">$FontField</option>";
    echo "</select>
    </form>";
    $stmt->close();
    
    // Font Size
    echo"<form action=\"\" method=\"post\">";
    DisplayLabel("Font Size");
    echo"<select name=\"fontSize\" id = \"size\"onchange=\"myFunction()\">
        <option value=\"small\">small</option>
        <option value=\"medium\">medium</option>
        <option value=\"large\">large</option>
    </select>
    </form>
    </div>
    </div>
    ";
}

/* called by post action in drawFileDropDown */
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

/* called by post action in drawFileDropDown */
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

//+++++++++++++++++++++ MAIN 
$title="YogurtFrenzy"; //Editor Title
headerAndMenu($title);

//the following functions will display a relevant message, then the notepad.
if (isset($_POST['f_Save'])) {
    saveNotepad($_POST['notepad_content']);
}
else if (isset($_POST['f_Open'])) {
    openNotepad();
}
else    {
    blankNotepad();
}
//Footers go at end
writeFooters();
?>