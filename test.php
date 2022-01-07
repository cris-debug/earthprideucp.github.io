<?php
    require 'config/mysqli.php';
    $notif = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if(isset($notif)) : ?>
    <p> Hay <?= $_POST["username"];?></p>
    <p> Password mu adalah <?= $_POST["password"];?></p>
<?php endif;?>
</body>
</html>