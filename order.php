<?php
    session_start();
    if (isset($_POST['card'])) {
        $_SESSION['cardnumber'] = $_POST['card'];
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
    <form action="" method="POST">
        <label>
            <p>Номер карты: </p>
            <?php if(isset($_SESSION['cardnumber'])) : ?>
                <input type="text" name="card" value="<?php echo $_SESSION['cardnumber'] ?>">
            <?php else: ?>
                <input type="text" name="card" value="">
            <?php endif; ?>
            <button>Сохранить</button>
        </label>
        <a href="check.php">Дальше</a>
    </form>
</body>
</html>