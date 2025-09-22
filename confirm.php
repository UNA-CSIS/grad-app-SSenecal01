<?php
    session_start();
    $_SESSION["accomplishments"] = $_POST["accomplishments"];
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Confirmation</title>
</head>
<body>

    <form action="results.php" method="POST">
        <!-- Display information from previous pages -->
        <p><strong>Name:</strong> <?php echo htmlspecialchars($_SESSION["fname"] . " " . $_SESSION["lname"]); ?></p>
        <p><strong>Courses:</strong> <?php foreach ($_SESSION["courses"] as $course) { echo htmlspecialchars($course) . "<br>"; } ?></p>
        <p><strong>Accomplishments:</strong> <?php echo isset($_SESSION["accomplishments"]) ? nl2br(htmlspecialchars($_SESSION["accomplishments"])) : ''; ?></p>
        <input type="hidden" name="fname" value="<?php echo htmlspecialchars($first); ?>">
        <input type="hidden" name="lname" value="<?php echo htmlspecialchars($last); ?>">
        <label for="accomplishments">Please confirm your choices.</label><br> 
        <input type="submit" value="Confirm">
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

