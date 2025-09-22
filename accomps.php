<?php
    session_start();
//      $_SESSION['fname'] = $_POST['fname'];
//      $_SESSION['lname'] = $_POST['lname'];
    $_SESSION['courses'] = $_POST['courses'];
    $totalCourses = 5;
    $takenCourses = is_array($_POST['courses']) ? count($_POST['courses']) : 0;
    
    $_SESSION["takenCourses"] = $takenCourses;
    $_SESSION["totalCourses"] = $totalCourses;

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Your Accomplishments</title>
        <style>
            body{font-family:system-ui,-apple-system,Segoe UI,Roboto,Helvetica,Arial;display:flex;align-items:center;justify-content:center;min-height:100vh;margin:0;background:#f6f7fb}
            .card{background:#fff;padding:24px;border-radius:12px;box-shadow:0 6px 18px rgba(20,30,60,0.08);width:100%;max-width:520px}
            h1{margin-top:0;font-size:1.5rem}
            label{display:block;margin-bottom:8px;font-weight:600}
            textarea{width:100%;padding:10px 12px;border:1px solid #d7dbe6;border-radius:8px;font-size:14px;resize:vertical;min-height:140px;margin-bottom:14px}
            button{width:100%;padding:11px;border:0;border-radius:10px;background:#2563eb;color:#fff;font-weight:700;font-size:15px;cursor:pointer}
        </style>
    </head>
    <body>
        
        <form class="card" action="confirm.php" method="POST">
            <h1>Your Accomplishments</h1>
            <label for="accomplishments">Please Provide Your Accomplishments</label>
            <textarea id="accomplishments" name="accomplishments" rows="8" cols="60"></textarea>
            <button type="submit" value="Submit">Submit</button>
        </form>
    </body>
</html>

