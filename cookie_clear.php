<?php
    if (isset($_COOKIE['update_at'])) {
        setcookie('update_at', '', time() - 10);
    }
    header("Location: cookie.php");