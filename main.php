<!-- // http://localhost/main.php -->
<?php

//+++++++++++++++++++++ SETUP
require_once("include.php");
//ERROR REPORTING - Set to true for error reporting
//TODO: Disable this when ready for submitting
if(true)    {
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
}

//+++++++++++++++++++++ FUNCTIONS
        /* Write primary PHP functions for use in MAIN here */

//+++++++++++++++++++++ MAIN 
        /* Main Loop, which should run each time the page is loaded */
$mysqlObj = createConnectionObject();

writeHeaders("YogurtFrenzy", "YogurtFrenzy Notepad");

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

if (isset($mysqlObj)) $mysqlObj->close();
writeFooters();

//openFile();
//saveFile();
//findTextInFile("a");
//drawMenu();
echo "The text:";
DisplayTextbox("text","test", 30, $textValue = "test text");
echo "<p></p>";

echo "The letter or word you want to search for:";
DisplayTextbox("text","find", 10, $findValue = "s");
DisplayButton("find","Find",$textValue,"Find"); 
//findTextInFile($textValue, $findValue)\">Find</button>";


?>
