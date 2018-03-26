<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Number Form</title>
</head>
<body>
    <?php
        $DisplayForm = TRUE;
        $Number = ""; 

        if (isset($_POST["Submit"])) {
            $Number = $_POST['Number'];
            if (is_numeric($Number)) {
                $DisplayForm = FALSE;
            } else {
                echo "<p>You need to enter a numeric value.</p>\n<p>Try again..";
                $Number = ''; 
            }
        }

        if ($DisplayForm) {
            ?>
            <form name="NumberForm" action ="NumberForm.php" method = "post">
            <p>Enter a number: <input type="text" name="Number" value="<?php echo $Number; ?>" /> </p>
            <p><input type = "reset" value = "Clear Form" />&nbsp;
            &nbsp;<input type="submit" name="Submit" value ="Send Form"</p>
            </form>
            <?php
        } else {
            echo "<p>Thank you for entering a number.</p>\n";
            echo "<p>Your number, $Number, squared is " . ($Number*$Number) . ".</p>\n ";
            echo "<p><a href=\"NumberForm.php\">Try again?</a></p>\n";
        }
    
    ?>
</body>
</html>
