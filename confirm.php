<?php
    session_start();
    $_SESSION["accomplishments"] = $_POST["accomplishments"];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirmation</title>
    <style>
        body{font-family:system-ui,-apple-system,Segoe UI,Roboto,Helvetica,Arial;display:flex;align-items:center;justify-content:center;min-height:100vh;margin:0;background:#f6f7fb}
        .card{background:#fff;padding:24px;border-radius:12px;box-shadow:0 6px 18px rgba(20,30,60,0.08);width:100%;max-width:560px}
        h1{margin-top:0;font-size:1.5rem}
        p{margin:8px 0;font-size:14px;line-height:1.4}
        strong{color:#111827}
        label{display:block;margin:16px 0 8px 0;font-weight:600}
        button{width:100%;padding:11px;border:0;border-radius:10px;background:#2563eb;color:#fff;font-weight:700;font-size:15px;cursor:pointer}
    </style>
</head>
<body>
    <form class="card" action="results.php" method="POST">
        <h1>Application Confirmation</h1>

        <p><strong>Your Name:</strong> <?php echo htmlspecialchars($_SESSION["fname"] . " " . $_SESSION["lname"]); ?></p>
        <p><strong>Your Courses:</strong><br><?php foreach ($_SESSION["courses"] as $course) { echo htmlspecialchars($course) . "<br>"; } ?></p>
        <p><strong>Your Accomplishments:</strong><br><?php echo isset($_SESSION["accomplishments"]) ? nl2br(htmlspecialchars($_SESSION["accomplishments"])) : ''; ?></p>

        <input type="hidden" name="fname" value="<?php echo htmlspecialchars($first); ?>">
        <input type="hidden" name="lname" value="<?php echo htmlspecialchars($last); ?>">

        <label>Please Confirm If This Information Is Correct</label>
        <button type="submit">Confirm</button>
    </form>

    <?php
    // store session data


    // $first = $_POST["first"];
    // $last = $_POST["last"];

    // $_SESSION["fname"] = $first;
    // $_SESSION["lname"] = $last;
    ?>
</body>
</html>

