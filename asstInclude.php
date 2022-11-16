<?php
function WriteHeaders($Heading="Welcome",$TitleBar="MySite")
{
    echo "
    <!doctype html>
    <html lang = \"en\">
    <link rel =\"stylesheet\" type = \"text/css\" href=\"asstStyle.css\"/>
    <head>
        <meta charset = \"UTF-8\">
        <title>$TitleBar</title>
    </head>
    <body>\n
    <h1>$Heading</h1>\n
    ";
}

function DisplayLabel($text)
{
    echo "<labal>$text</label>";
}

function DisplayTextbox($type,$name, $size, $value = "")
{
    echo "<input type = $type name = \"$name\" Size = $size value = $value>";
}

function DisplayImage($filename, $alt, $height, $width)
{
    echo "<img src=\"./$filename\" height= $height width = $width alt = $alt>";
}

function DisplayButton($name,$text,$Filename = "",$Alt = "")
{
    echo "  
    <form action = ? method=post>
    <button type=Submit name=$name>"; 
    if ($Filename != "")
    DisplayImage($Filename, $Alt, 50, 90);else echo "$text</button>
    </form>";
}

function DisplayContectInfo()
{
    echo "
    <footer>
        \"Questions? Comments?\" <a href = \"
        mailto:ian.haworth@student.sl.on.ca\">ian.haworth@student.sl.on.ca</a>
    </footer>";
}

function WriteFooters()
{
    echo "</body>\n";
    echo "</html>\n";
}

function CreateConnectionObject()
{
    $fh = fopen('auth.txt','r');
    $Host =  trim(fgets($fh));
    $UserName = trim(fgets($fh));
    $Password = trim(fgets($fh));
    $Database = trim(fgets($fh));
    $Port = trim(fgets($fh)); 
    fclose($fh);
    $mysqlObj = new mysqli($Host, $UserName, $Password,$Database,$Port);
    if ($mysqlObj->connect_errno != 0) 
    {
     echo "<p>Connection failed. Unable to open database $Database. Error: "
              . $mysqlObj->connect_error . "</p>";
     exit;
    }
    return ($mysqlObj);
}

?>