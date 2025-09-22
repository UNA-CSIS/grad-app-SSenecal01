<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Graduate School Application</title>
        <style>
           body{font-family:system-ui,-apple-system,Segoe UI,Roboto,Helvetica,Arial;display:flex;align-items:center;justify-content:center;min-height:100vh;margin:0;background:#f6f7fb}
           .card{background:#fff;padding:24px;border-radius:12px;box-shadow:0 6px 18px rgba(20,30,60,0.08);width:100%;max-width:420px}
           label{display:block;margin-bottom:6px;font-weight:600}
           input[type="text"]{width:100%;padding:10px 12px;border:1px solid #d7dbe6;border-radius:8px;margin-bottom:14px;font-size:14px}
           button{width:100%;padding:11px;border:0;border-radius:10px;background:#2563eb;color:#fff;font-weight:700;font-size:15px;cursor:pointer}
           .note{font-size:13px;color:#6b7280;margin-top:8px;text-align:center} 
        </style>
    </head>
    <body>
        <form action="courses.php" method="POST" class="card" id="gradApp">
            <h2 style="margin:0 0 12px 0">Graduate School Application</h2>

            <div>
                <label for="fname">First name</label>
                <input type="text" id="fname" name="fname" placeholder="e.g. Jane" required />
            </div>

            <div>
                <label for="lname">Last name</label>
                <input type="text" id="lname" name="lname" placeholder="e.g. Doe" required />
            </div>

            <button type="submit" value="Submit">Submit</button>
        </form>
    </body>
</html>
