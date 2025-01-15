<?php
session_start();
if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
</head>
<body>
    <h1>Добро пожаловать, <?php echo $_SESSION['username']; ?>!</h1>
    <a href="logout.php">Выйти</a>
</body>
</html>
