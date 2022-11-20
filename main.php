<!-- // http://localhost/main.php -->
<?php

//+++++++++++++++++++++ SETUP
require_once("include.php");
require_once("pairA.php");
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
    <div>
    <textarea id=\"notepad_content\" name=\"notepad_content\" rows=\"10\" 
        cols=\"80\">$fileText</textarea>
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

//+++++++++++++++++++++ MAIN 
$mysqlObj = createConnectionObject();
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
