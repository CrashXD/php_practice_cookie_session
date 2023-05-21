<?php
    session_start();
    // unset($_SESSION['cardnumber']);
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
    <?php if(isset($_SESSION['cardnumber'])): ?>
        <p>Номер вашей карты: <?php echo $_SESSION['cardnumber'] ?></p>
    <?php else: ?>
        <p>Вы еще не ввели номер карты!</p>
        <a href="order.php">Заполните форму</a>
    <?php endif; ?>
</body>
</html>