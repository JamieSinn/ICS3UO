
<?php
// departments is a multidimensional array
$departments = array (
    "science" => array("Braun","LeBlanc","Warner","Anceriz","Jones","Kennedy"),
    "math" => array("Smith","Platnar","Siblini"),
    "tech" => array("D'alesio", "Woods", "Schliffer", "Palmer"),
    "computer" => array("Grondin", "Wilford"));

// display the information in the array
echo "<h2>Working with Multi-dimensional Arrays</h2>";
echo "The array \"departments\" has " . count($departments) . " departments.";
echo "<br />In total there are " .  count($departments, COUNT_RECURSIVE) . " teachers.";
echo "<p>The science department consists of the following teachers:</p>";
echo "<ul>";
for($i = 0; $i < count($departments["science"]); $i++)
    echo "<li /> " . $departments['science'][$i];
echo "</ul>";

echo "<p>The math department consists of the following teachers:</p>";
echo "<ul>";
for($i = 0; $i < count($departments["math"]); $i++)
    echo "<li /> " . $departments['math'][$i];
echo "</ul>";

echo "<p>The tech department consists of the following teachers:</p>";
echo "<ul>";
for($i = 0; $i < count($departments["tech"]); $i++)
    echo "<li /> " . $departments['tech'][$i];
echo "</ul>";

echo "<p>The computer department consists of the following teachers:</p>";
echo "<ul>";
for($i = 0; $i < count($departments["computer"]); $i++)
    echo "<li /> " . $departments['computer'][$i];
echo "</ul>";
?>
