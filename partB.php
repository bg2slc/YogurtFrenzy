<script src="fonts.js"></script>
<?php
// http://localhost/GroupCoding/partB.php
// Ian Haworth
require_once("asstInclude.php");
$mysqlObj = CreateConnectionObject();

function drawFontDropDown(&$mysqlObj)
{
    // Font Choice 
    echo "
    <form action=\"\" method=\"post\">
    <select name=\"select\">";
    $SelectFont = "Select fontnames.fontName from fontnames";
	$stmt = $mysqlObj->prepare($SelectFont); 
    $stmt->bind_result($FontField);
    $stmt->execute();
    while($stmt->fetch())
    echo "<option value=$FontField>$FontField</option>";
    echo "</select>
    </form>";
    $stmt->close();

    // Font Size
    echo"
    <form action=\"\" method=\"post\">
    <select name=\"fontSize\">
        <option value=\"small\">small</option>
        <option value=\"medium\">medium</option>
        <option value=\"large\">large</option>
    </select>
    </form>
    ";
}

//main 
WriteHeaders();
drawFontDropDown($mysqlObj);
WriteFooters();
DisplayTextbox("text","F_Textbox",30,"Filler");
?>