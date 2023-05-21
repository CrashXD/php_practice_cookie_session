<?php
    setcookie('update_at', time(), time() + 3600);
    header("Location: cookie.php");