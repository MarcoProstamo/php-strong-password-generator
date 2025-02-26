<?php
    session_start();
    if (isset($_SESSION["password"])) {
        echo "Generated Password: " . $_SESSION["password"];
    }
?>
