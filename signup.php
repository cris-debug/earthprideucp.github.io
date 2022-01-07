<?php
require 'config/mysqli.php';
$result = mysqli_query($conn, "SELECT * FROM user");

if(isset($_POST["regist"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    if($username || $password || $email)
    {
        $accname = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
        if(mysqli_num_rows($accname) == 0)
        {
            $accemail = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");
            if(mysqli_num_rows($accemail) == 0)
            {
                $query = "INSERT INTO user VALUES ('', '$username', '$email', '$password')";
                mysqli_query($conn, $query);
                echo "<script>
                    alert('berhasil ditambahkan!');
                    document.location.href = 'index.php';
                    </script";
            }
            $erremail = true;
            exit;
        }
        $err = true;
        exit;
    }
    $error = true;
    exit;
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
    <p style="color:red">ISI DULU USERNAME DAN PASSWORD</p>
<?php endif;?>
<?php if(isset($err)) : ?>
    <p style="color:red">Nama sudah terpakai</p>
<?php endif;?>
<?php if(isset($erremail)) : ?>
    <p style="color:red">Email sudah terpakai</p>
<?php endif;?>
<style>
    <?php include '../styles/styles.css';?>
</style>
<body>
    <form action="index.php" method="post">
        <div class="div-mid">
            <label for="username" class="rx-text">Username: </label>
            <input class="rx-container" type="text" name="username" id="username"></input>
            <p>
                <label for="password" class="rx-text">Password: </label>
                <input class="rx-container" type="password" name="password" id="password"></input>
            </p>
            <p>
                <label for="email" class="rx-text">Email: </label>
                <input class="rx-container" type="email" name="email" id="email"></input>
            </p>
            <button type="submit" style="text-align: center;" name="regist">Regist</button>
        </div>
    </form>
</body>
</html>