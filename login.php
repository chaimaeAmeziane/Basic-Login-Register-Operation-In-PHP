<?php
session_start();
$mysql = new mysqli("localhost:3307", "root", "", "users") or die(mysqli_error($mysql));


if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = $mysql->query("SELECT * from userstables WHERE email='$email' AND passw='$password'");
    if ($result->fetch_all() == null) {
        $_SESSION["Error"] = "Please enter a valid email/password !";
        header("location:index.php");
    } else {
        header("location:welcome.php");
    }
}
