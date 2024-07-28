<?php
session_start();
$users = [
    'admin' => 'password123',
    'itz_me_ram_96' => 'ram@96',
];
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
if (isset($users[$username]) && $users[$username] === $password) {
    $_SESSION['username'] = $username;
    header('Location: welc.php');
    exit;
} else {
    echo '<div class="error-container">';
    echo 'Invalid username or password.<br><a href="login.html">Relogin</a>';
    echo '</div>';
}
?>
