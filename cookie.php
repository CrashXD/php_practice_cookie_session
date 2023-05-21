<?php
    if (isset($_COOKIE['update_at'])) {
        $time = time() - $_COOKIE['update_at'];
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
<body>
    <?php if(isset($_COOKIE['update_at'])): ?>
        <p>Последнее обновление: <?= $time ?> секунд назад</p> 
    <?php else: ?>
        <p>Последнее обновление: больше часа назад</p> 
    <?php endif; ?>
    <p><a href="cookie_update.php">Обновить</a></p>
    <?php if(isset($_COOKIE['update_at'])): ?>
        <p><a href="cookie_clear.php">Очистить</a></p>
    <?php endif; ?>
</body>
</html>