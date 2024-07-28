<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Checker</title>
    <link rel="stylesheet" href="fourth.css">
</head>
<body>
    <form method="post">
        <h3>Enter a number</h3>
        <input type="number" name="num" min="1" required>
        <input type="submit" name="submit" value="Check">
    </form>
    <?php
    function isPrime($number)
    {
        if ($number <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }
    if (isset($_POST['submit'])) {
        $inputNumber = $_POST['num'];

        if (isPrime($inputNumber)) {
            echo "<p>" . htmlspecialchars($inputNumber) . " is a prime number.</p>";
        } else {
            echo "<p>" . htmlspecialchars($inputNumber) . " is not a prime number.</p>";
        }
    }
    ?>
</body>
</html>
