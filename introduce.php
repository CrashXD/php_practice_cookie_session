<?php
if (isset($_GET['name'])) {
    setcookie('username', $_GET['name']);
    $_COOKIE['username'] = $_GET['name'];
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
    <form action="">
        <label>Ваше имя:
            <!--
            <?php if (isset($_COOKIE['username'])) { ?>
                <input type="text" name="name" value="<?php echo $_COOKIE['username'] ?>">
            <?php } else { ?>
                <input type="text" name="name" value="">
            <?php } ?>
            <input type="text" name="name" value="<?php echo isset($_COOKIE['username']) ? $_COOKIE['username'] : "" ?>">
            -->
            <input type="text" name="name" value="<?php echo $_COOKIE['username'] ?? "" ?>">
        </label>
        <button>Отправить</button>
    </form>    
    <p><a href="hello.php">Привет!</a></p>
</body>
</html>