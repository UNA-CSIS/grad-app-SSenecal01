<?php
    session_start();
    
    $_SESSION['fname'] = $_POST['fname'];
    $_SESSION['lname']  = $_POST['lname'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Course Selection</title>
    <style>
        body{font-family:system-ui,-apple-system,Segoe UI,Roboto,Helvetica,Arial;display:flex;align-items:center;justify-content:center;min-height:100vh;margin:0;background:#f6f7fb}
        .card{background:#fff;padding:24px;border-radius:12px;box-shadow:0 6px 18px rgba(20,30,60,0.08);width:100%;max-width:480px}
        h1{margin-top:0;font-size:1.5rem}
        fieldset{border:1px solid #d7dbe6;border-radius:8px;padding:14px;margin-bottom:16px}
        legend{font-weight:600}
        label{display:block;margin:6px 0;font-size:14px}
        input[type="checkbox"]{margin-right:8px}
        button{width:100%;padding:11px;border:0;border-radius:10px;background:#2563eb;color:#fff;font-weight:700;font-size:15px;cursor:pointer}
    </style>
  </head>
    <body>
        <form class="card" action="accomps.php" method="POST">
            <h1>Welcome, <?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?></h1>
            <fieldset>
                <legend>Select your courses:</legend>
                <input type="hidden" name="fname" value="<?php echo htmlspecialchars($_SESSION['fname']); ?>">
                <input type="hidden" name="lname" value="<?php echo htmlspecialchars($_SESSION['lname']); ?>">

                <label><input type="checkbox" name="courses[]" value="Object-oriented programming"> Object-oriented programming</label>
                <label><input type="checkbox" name="courses[]" value="Systems analysis &amp; design"> Systems analysis &amp; design</label>
                <label><input type="checkbox" name="courses[]" value="Advanced programming"> Advanced programming</label>
                <label><input type="checkbox" name="courses[]" value="Introduction to Networking"> Introduction to Networking</label>
                <label><input type="checkbox" name="courses[]" value="Introduction to Computer Security"> Introduction to Computer Security</label>
            </fieldset>

            <button type="submit">Submit</button>
        </form>
    </body>
</html>


