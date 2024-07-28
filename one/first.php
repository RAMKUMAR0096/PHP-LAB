<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting</title>
    <link rel="stylesheet" href="first.css">
</head>
<body>
    
    <form action="" method="post">
        <h1>Greeting form</h1>
        <h4>First name</h4>
        <input type="text" name="f_name" placeholder="enter first name"/>
        <h4>Last name</h4>
        <input type="text" name="l_name" placeholder="enter last name"/><br>
        <input type="submit" value="display" name="submit">
    </form>
    <?php
    if(isset($_POST['submit']))
    {
        $f_name=$_POST['f_name'];
        $l_name=$_POST['l_name'];
        echo "<h1>Good Morning🌞</h1>";
        echo "<h1>$f_name $l_name</h1>";
    }
    ?>
</body>
</html>
