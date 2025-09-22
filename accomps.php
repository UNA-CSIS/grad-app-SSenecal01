<?php
    session_start();
//      $_SESSION['fname'] = $_POST['fname'];
//      $_SESSION['lname'] = $_POST['lname'];
    $SESSION['courses'] = $_POST['courses'];
    $totalCourses = 5;
    $takenCourses = is_array($POST['courses'])?count($_POST['courses']) : 0;
    
    $_SESSION["takenCourses"] = $takenCourses;
    $_SESSION["totalCourses"] = $totalCourses;

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Accomplishments</title>
    </head>
    <body>
        
        <form action="confirmations.php" method="POST">
            <label>Describe your personal accomplishments</label>
            <textarea id="accomplishments" name="accomplishments" rows="8" cols="60"></textarea><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>

