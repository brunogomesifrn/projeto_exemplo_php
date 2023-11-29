<?php

if (!isset($_SESSION['usuario'])) {
    header("location: login.php");
    die('');
}

?>