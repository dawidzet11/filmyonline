<?php
session_start();
session_destroy(); // Zniszcz sesję
header("Location: login.php"); // Przekieruj na stronę logowania
exit();
?>
