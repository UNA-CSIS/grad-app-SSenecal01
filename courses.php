<?php
    session_start();
    
    $_SESSION['fname'] = $_POST['fname'];
    $_SESSION['lname']  = $_POST['lname'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Courses</title>
    </head>
    <body>
        <h1>Welcome, <?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?></h1>
        <form action="accomplishments.php" method="POST">
            <fieldset>
            <legend>Select your courses:</legend>
            <input type="hidden" name="fname" value="<?php echo htmlspecialchars($_SESSION['fname']); ?>">
            <input type="hidden" name="lname" value="<?php echo htmlspecialchars($_SESSION['lname']); ?>">
            <label><input type="checkbox" name="courses[]" value="Object-oriented programming"> Object-oriented programming</label><br>
            <label><input type="checkbox" name="courses[]" value="Systems analysis & design"> Systems analysis & design</label><br>
            <label><input type="checkbox" name="courses[]" value="Advanced programming"> Advanced programming</label><br>
            <label><input type="checkbox" name="courses[]" value="Introduction to Networking"> Introduction to Networking</label><br>
            <label><input type="checkbox" name="courses[]" value="Introduction to Computer Security"> Introduction to Computer Security</label><br>
            </fieldset>
            <input type="submit" value="Submit">
        </form>

    </body>
</html>    

