<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jamie
 * Date: 4/30/2015
 * Time: 3:59 PM
 */

function displayText() {
    echo "This is my first function!<br />";
    // Not really, but okay :P
}
function displayCourse($course) {
    echo "I am taking " . $course . "<br />";
}
function calVolumeCylinder($radius,$height) {
    // 2piRH
    $volume = 2*(3.14)*$radius*$height;
    return $volume;
    // alternatively could just return 2*(3.14)*$radius*$height;
}

displayText();
displayCourse("Computer Science");
displayCourse("Tech Design");
displayCourse("CCNA");
echo "Volume of cylinder (r=8, h=2): " . calVolumeCylinder(8,2);

?>