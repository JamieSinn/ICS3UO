<?php
$course[0] = "Math";
$course[1] = "Science";
$course[2] = "Computers";
$course[3] = "English";

echo "<p>I am taking " . $course[0] . ", " . $course[1] . ", " . $course[2] . " and " . $course[3] . ".</p>";

echo "<p>I am taking...</p>";
for ($i = 0; $i < sizeof($course); $i++) {
    echo "<li>" . $course[$i] . "</li>";
}
?>