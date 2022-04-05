<?php
session_start();
$mysql = new mysqli("localhost:3307", "root", "", "users") or die(mysqli_error($mysql));

if (isset($_POST["register"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = $mysql->query("INSERT INTO userstables(firstname,lastname,email,passw) values ('$firstname','$lastname','$email','$password');") or die(mysqli_error($mysql));
    if ($result) {
        $_SESSION["RegistrationSuccessfull"] = "Registration is successfull ! ";
    }
    header("location:index.php");
}
