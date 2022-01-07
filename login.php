<?php
require 'config/mysqli.php';
if(isset($_POST["login"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($username || $password)
    {
        $accusername = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
        if(mysqli_num_rows($accusername) == 1)
        {
            $accpassword = mysqli_query($conn, "SELECT * FROM user WHERE password='$password'");
            if(mysqli_num_rows($accpassword) == 1)
            {
                echo "<script>
                    alert('Berhasil Login');
                    document.location.href = 'test.php';
                    </script>";
            }
            $errpw = true;
        }
        $errusrnm = true;
    }
    $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php if(isset($error)) : ?>
    <p style="color: red">jangan ksong</p>
<?php endif;?>
<?php if(isset($errusrnm)) : ?>
    <p style="color: red">Username Salah</p>
<?php endif;?>
<?php if(isset($errpw)) : ?>
    <p style="color: red">Password Salah</p>
<?php endif;?>
<body>
    <form action="" method="post">
        <p>
            <a href="index.php">Home</a>
        </p>
        <label for="username">Username: </label>
        <input type="text" name="username" id="username"></input>
        <p>
            <label for="password">Password: </label>
            <input type="password" name="password" id="password"></input>
        </p>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>