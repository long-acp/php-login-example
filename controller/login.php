<?php
include 'backend/database.php';
session_start();
$datetime           = new DateTime();
$username           = '';
$password           = '';
$nameCookieUsername = "Login::" . $datetime->format('Y-m-d') . "::username";
$nameCookiePassword = "Login::" . $datetime->format('Y-m-d') . "::hash";

if (isset($_COOKIE[$nameCookieUsername]) && isset($_COOKIE[$nameCookiePassword])) {
    $username = $_COOKIE[$nameCookieUsername];
    $password = $_COOKIE[$nameCookiePassword];
    if ($username != '' && $password != '') {
        $sql = "SELECT email FROM user WHERE email = '$username' AND password = '$password'";

        $result = mysqli_query($db, $sql);
        $row    = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $active = $row['active'];

        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $_SESSION['login_user'] = $username;
            header("location:view/user.php");
        }
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if ($username != '' && $password != '') {
        $sql = "SELECT password FROM user WHERE email = '$username'";

        $result = mysqli_query($db, $sql);
        $row    = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $active = $row['active'];

        $count = mysqli_num_rows($result);

        if (password_verify($password, $row['password'])) {
            $_SESSION['login_user'] = $username;
            if ($_POST['rememberMe']) {
                setcookie($nameCookieUsername, $username, time() + 60 * 60 * 24);
                setcookie($nameCookiePassword, $row['password'], time() + 60 * 60 * 24);
            }
            header("location:view/user.php");
        } else {
            $error = "Your Login Name or Password is invalid";
        }
    }
}
?>