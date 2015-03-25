
<!doctype html>
<html>
<head>
    <title>User Input & Conditional Statements Lesson</title>
    <style>
        body {
            font-family: Candara, Calibri, Segoe, "Segoe UI", Optima, Arial, sans-serif;
            background-image: url("http://actonhighschool.ca/ics/images/chalkboard-background.jpg");
            background-size: cover;
            background-attachment: cover;
            font-size: 1.2rem;
            color: #ffffff;
        }
        h1 {
            font-style: italics;
        }
        .error {
            color: #ff0000;
        }
        #reportContainer {
            position: relative;
            margin-left: auto;
            margin-right: auto;
            width: 80%;
            padding: 2%;
            margin-top: 100px;
            background: rgba(0,0,0,0.4);
            border-radius: 0.5em;
        }
        input {
            font-size: 1.3em;
            width: 100px;
        }
    </style>
</head>
<body>
<div id="reportContainer">

    <?
    // using if statements to automatically set the grade and comment
    if ($_POST['subButton']) {
        // store the posted values from the form in variables
        $stu_name = $_POST['name'];
        $stu_mark = $_POST['mark'];

        if ($stu_name == "" OR $stu_mark == "")
        {
            // show error statement if fields are left empty (simple error checking)
            echo "<p class='error'>You must include a name and mark!</p>";
        }
        else
        {
            // Decided to show off a switch statement, simple, fast, and very clean.
            switch($stu_mark)
            {
                case 90:
                    $letter_grade = "A";
                    break;
                case 75:
                    $letter_grade = "B";
                    break;
                case 65:
                    $letter_grade = "C";
                    break;
                case 55:
                    $letter_grade = "D";
                    break;
                default:
                    break;
            }


            // conditions for displaying grade and comment
            // Showed off one line if/elseif/else statements here. Keep the code quite a bit cleaner.
            if ($stu_mark <= 100 AND $stu_mark > 90)
            {
                $letter_grade = "A+";
                if($stu_mark >= 95) {
                    $special_comment = "Amazing work!";
                    $comment = "Great work, keep it up!";
                }
                else
                    $comment = "Great work, keep it up!";

            }
            else if ($ $stu_mark > 100 OR $stu_mark < 0)
                $letter_grade = "Invalid range entered";
            else if ($stu_mark == 90)
            {
                $letter_grade = "A";
                $comment = "Good efforts.";
            }
            else if ($stu_mark < 90 AND $stu_mark >= 80)
                $letter_grade = "A-";
            else if ($stu_mark < 80 AND $stu_mark > 75)
                $letter_grade = "B+";
            else if ($stu_mark < 75 AND $stu_mark >= 70)
                $letter_grade = "B-";
            else if ($stu_mark < 70 AND $stu_mark > 65)
                $letter_grade = "C+";
            else if ($stu_mark < 65 AND $stu_mark >= 60)
                $letter_grade = "C-";
            else if ($stu_mark < 60 AND $stu_mark > 55)
                $letter_grade = "D+";
            else if ($stu_mark < 55 AND $stu_mark > 50)
                $letter_grade = "D-";
            else if ($stu_mark < 50)
                $letter_grade = "Unsuccessful";

        }
    }
    ?>
    <h1>"Making the Grade!"</h1>
    <p>This is a mock student report.<br />


    <form action="conditional-statements-lesson-1.php" method="post">
        Student Name: <input type="text" name="name" value="" /><br />
        Mark: <input type="number" name="mark" value="" /><br />
        <input type="submit" name="subButton" value="Send"/>

    </form>

    Student's Name: </b> <? echo $stu_name; ?><br />
    Student's Mark: </b> <? echo $stu_mark ?><br />
    Letter Grade: </b> <? echo $letter_grade; ?><br />
    Comment: </b> <? echo $comment; ?><br />
    Special Comment: </b> <? echo $special_comment; ?></p>

</div>

</body>
</html>
