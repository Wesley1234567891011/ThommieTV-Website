<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}
echo "Welkom, " . htmlspecialchars($_SESSION["username"]) . "! <a href='logout.php'>Log uit</a>";
