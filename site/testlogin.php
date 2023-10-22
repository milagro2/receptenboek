<?php
require 'database.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['LoginEmail'];
    $password = $_POST['LoginPassword'];


    header("Location: testverwerklogin.php?email=" . urlencode($email) . "&password=" . urlencode($password));
    exit;
}
?>

<div class="container">
    <div class="form-container">
        <div class="login-btn">
            <button onclick="login()">Login</button>
        </div>

        <form action="" method="post">
            <input type="email" name="LoginEmail" placeholder="Email" id="LoginEmail" required>
            <input type="password" name="LoginPassword" placeholder="Password" id="LoginPassword" required>
            <button type="submit">Login</button>
        </form>
    </div>
</div>
