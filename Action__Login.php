<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];
    $inputEmail = $_POST['email'];
    $jsonData = file_get_contents("data.json");
    $user = json_decode($jsonData, true);
    if ($inputUsername == $user['username'] && $inputPassword == $user['password'] && $inputEmail == $user['email']) {
        echo '<p class="login__text">You are logged in!</p>';
    } else {
        echo '<p class="login__text">Wrong username or password!</p>';
    }
}
