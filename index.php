<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login/Register </title>
</head>

<body>
    <?php
    session_start();
    ?>
    <form method="POST" action="login.php">
        <div id="LoginForm">
            <div id="section">
                <div id="email">
                    <label>Email:</label>
                    <input type="text" name="email" placeholder="Enter your Email !" />
                </div>
                <div id="password">
                    <label>Password:</label>
                    <input type="password" name="password" placeholder="Enter your Password !" />
                </div>
                <button type="submit" name="login">Login</button><br><br>
                <?php
                if (isset($_SESSION["Error"])) {
                    $error = $_SESSION["Error"];
                    echo "<span>$error</span>";
                }
                ?>
            </div>
        </div>
    </form>
    <form action="register.php" method="POST">
        <div id="registerForm">
            <div id="section">
                <div id="fn">
                    <label>First Name:</label>
                    <input type="text" name="firstname" placeholder="Enter your First Name !" />
                </div>
                <div id="ln">
                    <label>Last Name:</label>
                    <input type="text" name="lastname" placeholder="Enter your Last Name !" />
                </div>
                <div id="email">
                    <label>Email:</label>
                    <input type="email" name="email" placeholder="Enter your Email !" />
                </div>
                <div id="password">
                    <label>Password:</label>
                    <input type="password" name="password" placeholder="Enter your Password !" />
                </div>
                <button type="submit" name="register">Register</button>
                <br><br>
                <?php
                if (isset($_SESSION["RegistrationSuccessfull"])) {
                    $success = $_SESSION["RegistrationSuccessfull"];
                    echo "<span>$success</span>";
                }
                ?>

            </div>
        </div>
    </form>

</body>

</html>
<?php
unset($_SESSION["Error"]);
?>