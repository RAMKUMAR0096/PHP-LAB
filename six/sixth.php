<?php
session_start();
if (!isset($_SESSION['fruits'])) {
    $_SESSION['fruits'] = array("Apple", "Banana", "Cherry");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        $new_fruit = $_POST['new_fruit'];
        if (!empty($new_fruit)) {
            $_SESSION['fruits'][] = $new_fruit;
        }
    } elseif (isset($_POST['remove'])) {
        $remove_index = $_POST['remove_index'];
        if (is_numeric($remove_index) && isset($_SESSION['fruits'][$remove_index])) {
            unset($_SESSION['fruits'][$remove_index]);
            $_SESSION['fruits'] = array_values($_SESSION['fruits']);
        }
    } elseif (isset($_POST['modify'])) {
        $modify_index = $_POST['modify_index'];
        $modify_value = $_POST['modify_value'];
        if (is_numeric($modify_index) && isset($_SESSION['fruits'][$modify_index])) {
            $_SESSION['fruits'][$modify_index] = $modify_value;
        }
    } elseif (isset($_POST['search'])) {
        $search_fruit = $_POST['search_fruit'];
        $search_result = array_search($search_fruit, $_SESSION['fruits']);
    } elseif (isset($_POST['sort'])) {
        sort($_SESSION['fruits']);
    } elseif (isset($_POST['merge'])) {
        $more_fruits = array("Fig", "Grape");
        $_SESSION['fruits'] = array_merge($_SESSION['fruits'], $more_fruits);
    } elseif (isset($_POST['reset'])) {
        session_unset();
        $_SESSION['fruits'] = array("Apple", "Banana", "Cherry");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Manipulation</title>
    <link rel="stylesheet" href="sixth.css">
</head>
<body>
    <h2>Array Manipulation</h2>

    <h3>Current Array:</h3>
    <pre><?php print_r($_SESSION['fruits']); ?></pre>

    <h3>Add Element</h3>
    <form method="post" action="">
        <input type="text" name="new_fruit" required>
        <input type="submit" name="add" value="Add">
    </form>

    <h3>Remove Element by Index</h3>
    <form method="post" action="">
        <input type="number" name="remove_index" required>
        <input type="submit" name="remove" value="Remove">
    </form>

    <h3>Modify Element</h3>
    <form method="post" action="">
        <input type="number" name="modify_index" required placeholder="Index">
        <input type="text" name="modify_value" required placeholder="New Value">
        <input type="submit" name="modify" value="Modify">
    </form>

    <h3>Search Element</h3>
    <form method="post" action="">
        <input type="text" name="search_fruit" required>
        <input type="submit" name="search" value="Search">
    </form>
    <?php if (isset($search_result)): ?>
        <p>Search Result: <?php echo $search_result !== false ? "Found at index $search_result" : "Not found"; ?></p>
    <?php endif; ?>

    <h3>Sort Array</h3>
    <form method="post" action="">
        <input type="submit" name="sort" value="Sort">
    </form>

    <h3>Merge with Another Array</h3>
    <form method="post" action="">
        <input type="submit" name="merge" value="Merge">
    </form>

    <h3>Reset Array</h3>
    <form method="post" action="">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>
</html>
