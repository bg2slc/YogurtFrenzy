<?php
//Pair A test page

require_once("pairA.php");
require_once("include.php");

if(true)    {
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
}

writeHeaders("YogurtFrenzy", "YogurtFrenzy Editor");
//Code for testing functions goes here.
drawMenu();

writeFooters();
