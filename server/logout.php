<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["role"]);
unset($_SESSION["email"]);
unset($_SESSION["id"]);
unset($_SESSION["first_name"]);
unset($_SESSION["last_name"]);

header("Location: ../index.php");
?>