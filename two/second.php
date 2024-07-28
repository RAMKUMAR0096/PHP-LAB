<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome</title>
    <link rel="stylesheet" href="second.css">
</head>
<body>
    <form method="post">
        <h3>Enter the string</h3>
        <input type="text" name="str" id="" required>
        <input type="submit" value="check" name="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $inputString = $_POST['str'];

        if (Palindrome($inputString)) {
            echo "<h1> $inputString  is a palindrome.</h1>";
        } else {
            echo "<h1> $inputString  is not a palindrome.</h1>";
        }
    }
    function Palindrome($string)
    {
        $reversedString = strrev($string);
        if ($string === $reversedString) {
            return true;
        } else {
            return false;
        }
    }
    ?>
</body>

</html>