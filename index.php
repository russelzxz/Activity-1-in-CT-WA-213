<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity1</title>
</head>
<body>
        <?php
            // Russel
            /*
               Name: Russel Palad
               Age: 22
               Address: Guiguinto, Bulacan
               Hobbies: Playing online games, Watching Movies, Listening to Music
               Course: Bachelor of Science in Information Systems
               School: Bulacan Polytechnic College
            */

                $me = [
                    
                    "Name" => "Russel Palad",
                    "Age" => 22,
                    "Address" => "Guiguinto, Bulacan",
                    "Hobbies" => ["Playing online games", "Watching Movies", "Listening to Music"],
                    "Course" => "Bachelor of Science in Information Systems",
                    "School" => "Bulacan Polytechnic College",
                ];

                    echo "<h1>My Information</h1>";
                    echo "<p><strong>Name:</strong> " . $me["Name"] . "</p>";
                    echo "<p><strong>Age:</strong> " . $me["Age"] . "</p>";
                    echo "<p><strong>Address:</strong> " . $me["Address"] . "</p>";
                    echo "<p><strong>Hobbies:</strong> " . implode(", ", $me["Hobbies"]) . "</p>";
                    echo "<p><strong>Course:</strong> " . $me["Course"] . "</p>";
                    echo "<p><strong>School:</strong> " . $me["School"] . "</p>";
                    echo "<br></br>";
                    echo "==============================================================================================================================================================================================================================";
                    echo "<br></br>";

                    print "I am " . $me["Name"] . ", " . $me["Age"] . " years old, I live in " . $me["Address"] . ", and my hobbies are " . implode(", ", $me["Hobbies"]) . ". I am currently studying " . $me["Course"] . " at " . $me["School"] . ".";
        ?>


</body>
</html>
