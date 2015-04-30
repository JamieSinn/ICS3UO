<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jamie
 * Date: 4/30/2015
 * Time: 4:01 PM
 */
function getSentence($name, $age, $occupation)
{
    return $name . " is " . $age . " years old and is currently " . $occupation;
}
function getName()
{
    $rand = rand(0,2);
    switch($rand)
    {
        case 0:
            return "Linus Torvalds";
            break;
        case 1:
            return "John Carmack";
            break;
        case 2:
            return "Bill Gates";
            break;
    }
}
function getAge($name)
{
    if($name == "Linus Torvalds")
        return 45;
    else if($name == "John Carmack")
        return 44;
    else if($name == "Bill Gates")
        return 59;
    else
        return -1;
}

function getOccupation($name)
{
    if($name == "Linus Torvalds")
        return "retired; but was the core force behind the Linux kernel.";
    else if($name == "John Carmack")
        return "Oculus VR CTO, previously a major ID Games Developer ";
    else if($name == "Bill Gates")
        return "Philanthropist and Humanitarian, founder of Microsoft.";
    else
        return -1;
}
$name = getName();
echo getSentence($name, getAge($name), getOccupation($name));
?>