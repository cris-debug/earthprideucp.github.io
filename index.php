<?php
require 'config/mysqli.php';
$result = mysqli_query($conn, "SELECT * FROM user");

if(isset($_POST["username"])){
    $notif = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<?php if(isset($notif)) : ?>
    <p>Hai <?= $_POST["username"]; ?></p>
<?php endif; ?>
<style>
    <?php include '../styles/styles.css';?> 
    
</style>
<script>
    
</script>
<body class="body">
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">Earth Pride</a>
            </div>
            <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>
    <p class="about">  Welcome to Earth Pride Roleplay Official Website!</p>
    <div class="tengah">
        <p class="about">Earth Pride Roleplay is SAMP Server with many feature and unique Job</p>
    </div>
</body>
</html>