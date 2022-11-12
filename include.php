<?php
//In Class Include File
//By Benjamin Garrett
//Contains helper functions for use in COMP220 assignments.

function writeHeaders($Heading="Welcome", $TitleBar="MySite")
{
    echo "<!doctype html>
<html>
<head>
	<meta charset = \"UTF-8\">
	<title>$TitleBar</title>\n
	<link rel =\"stylesheet\" type = \"text/css\" href=\"style.css\"/>
</head>
<body>\n<form action=? method=\"post\">
    <img src=\"tom.jpg\">
    <h1>$Heading</h1>\n
    <p><a href=?>Home</a></p>
";
}

function displayLabel($Label="My Label", $Name="")
{
	if ($Name == "")
        echo "<label>$Label</label>";
    else
        echo "<label for=\"$Name\">$Label</label>";
}

function displayTextBox($InputType, $Name, $Size, $Value=0)
{
    echo "<input type = $InputType name=\"$Name\" id=\"$Name\"
        size = \"$Size\" MaxLength=\"$Size\" value = \"$Value\">\n";
}

function displayImage($FileName, $Alt="Alternate Text Here",
    $Height=100, $Width=100)
{
    echo "<img src=\"$FileName\" alt=\"$Alt\" height=\"$Height\" 
        width=\"$Width\"/>\n";
}

function displayButton($Name, $Text="Button", $FileName="", $Alt="")
{
    echo "<div>";
/*    if ($FileName!="") 
    {
        //displayImage($FileName, $Alt);
        echo "\n<input type=image src=\"$FileName\" name=\"$Name\"
            submit=\"$Name\" alt=\"$Text\" />";
    }
    else*/
        echo "\n<button type=Submit name=\"$Name\">$Text</button>";
    echo "</div>\n";
}

function displayContactInfo()
{
    echo "\n<footer>";
    echo "Questions? Comments?";
    echo "<a href=\"mailto:benjamin.garrett2@student.sl.on.ca\">";
    echo " Email benjamin.garrett2@student.sl.on.ca</a>";
    echo "</footer>";
}

function writeFooters()
{
	displayContactInfo();
    echo "
    </form>\n
	</body>\n
	</html>
	";
}

function createConnectionObject()
{
    $fh = fopen('auth.txt','r');
    $Host = trim(fgets($fh));
    $UserName = trim(fgets($fh));
    $Password = trim(fgets($fh));
    $Database = trim(fgets($fh));
    $Port = trim(fgets($fh));
    fclose($fh);

    $mysqlObj = new mysqli($Host, $UserName, $Password,$Database,$Port);
    // if the connection and authentication are successful,
    // the error number is 0
    // connect_errno is a public attribute of the mysqli class.
    if ($mysqlObj->connect_errno != 0)
    {
        echo 
        "<p>Connection failed. Unable to open database $Database. Error: "
        . $mysqlObj->connect_error . "</p>";
        // stop executing the php script
        exit;
    }
    return ($mysqlObj);
}

?>
