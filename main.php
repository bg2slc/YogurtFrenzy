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
        /* Write primary PHP functions for use in MAIN here */

function headerAndMenu($Title="YogurtFrenzy")
{
    echo "<!doctype html>
<html>
<head>
	<meta charset = \"UTF-8\">
	<title>$Title</title>\n
	<link rel =\"stylesheet\" type = \"text/css\" href=\"/style/style.css\"/>
</head>
<body>\n<form action=? method=\"post\">
    <div class=\"header\">
        <div><h2>$Title Editor</h2>
            <em>Written by Ian Haworth, Brad Coyle, Emmett Scholtes, Dugan Lang
,Robin Hilliker and Benjamin Garrett</em>
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

// textarea practice here: https://www.w3schools.com/tags/tryit.asp?filename=tryhtml_textarea
function displayTextArea()
{
    echo "
<!-- main text area for notepad -->
    <textarea id=\"notepad\" name=\"notepad\" rows=\"10\" cols=\"80\"></textarea>
    ";
}


//+++++++++++++++++++++ MAIN 
        /* Main Loop, which should run each time the page is loaded */

/*  //Code from Assignment 1, only left here for quick reference
if (isset($_POST['f_CreateTable']))
  createTableForm($mysqlObj,$TableName);
else if (isset($_POST['f_Save'])) 
    saveRecordtoTableForm($mysqlObj,$TableName);
else if (isset($_POST['f_AddRecord'])) 
    addRecordForm($mysqlObj,$TableName);	   
else if (isset($_POST['f_DeleteRecord']))
    deleteRecordForm($mysqlObj,$TableName);
else if (isset($_POST['f_DisplayData']))
   displayDataForm ($mysqlObj,$TableName);
else if (isset($_POST['f_IssueDelete']))
   issueDeleteForm ($mysqlObj,$TableName);
else displayMainForm();
 */

$mysqlObj = createConnectionObject();
$Title="YogurtFrenzy"; //Editor Title
headerAndMenu($Title);

echo "<form method=POST>";

echo "The text:";
DisplayTextbox("text","test", 30);
echo "<p></p>";

echo "The letter or word you want to search for:";
DisplayTextbox("text","findText", 10);

DisplayButton("findButton","Find");

echo "</form>";
if(array_key_exists('findButton', $_POST)) 
{
  findTextInFile($_POST["test"], $_POST["findText"]);
  
}

//Footers go at end
writeFooters();
?>
