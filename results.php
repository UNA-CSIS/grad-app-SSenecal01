<?php
session_start();

const REQUIRED_KEYWORD = 'PHP';
const COURSE_PERCENT_THRESHOLD = 0.50;

function meetsPhpThreshold($accomplishments, int $numCoursesListed, int $numCoursesTaken): bool
{
    if ($numCoursesListed <= 0) {
        return false;
    }
    $text = is_array($accomplishments) ? implode(' ', $accomplishments) : (string)$accomplishments;
    if (stripos($text, REQUIRED_KEYWORD) === false) {
        return false;
    }
    if ($numCoursesTaken < 0) {
        return false;
    }
    if ($numCoursesTaken > $numCoursesListed) {
        $numCoursesTaken = $numCoursesListed;
    }
    $percentage = $numCoursesTaken / $numCoursesListed;
    return $percentage >= COURSE_PERCENT_THRESHOLD;
}
if (meetsPhpThreshold(
    $_SESSION["accomplishments"] ?? '',
    $_SESSION["totalCourses"] ?? 0,
    $_SESSION["takenCourses"] ?? 0
)) {
    echo "<p>you are accepted for an phone interview.</p>";
} else {
    echo "<p>sorry, your application was rejected.</p>";
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Results</title>
    </head>
    <body>
        <p>You may close this browser window.</p>
    </body>
</html>
<?php 
session_unset();
session_destroy();

