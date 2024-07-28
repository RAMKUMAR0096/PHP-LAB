<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Number</title>
    <link rel="stylesheet" href="third.css">
</head>
<body>
    <form method="post">
        <h3>Enter a number</h3>
        <input type="number" name="num" min="1" required>
        <input type="submit" name="submit" value="Check">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $inputNumber = $_POST['num'];
        $total = 0;
        $x = $inputNumber;
        while ($x != 0) {
            $rem = $x % 10;
            $total = $total + $rem * $rem * $rem;
            $x = (int)($x / 10);  
        }
    
        if ($inputNumber == $total) { 
            echo "<p>" . htmlspecialchars($inputNumber) . " is an Armstrong number.</p>";
        } else {
            echo "<p>" . htmlspecialchars($inputNumber) . " is not an Armstrong number.</p>";
        }
    }
    ?>
</body>
</html>
